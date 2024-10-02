<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="CSS/reset.css">
    <link rel="stylesheet" type="text/css" href="CSS/Shared.css">
    <link rel="stylesheet" type="text/css" href="CSS/blog.css">
    <link rel="shortcut icon" href="favicons/favicon.ico" type="image/x-icon">
    <title>BLog</title>
</head>
<body>
<header class="navmenu">
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="portfolio.php">Portfolio</a></li>
            <li><a href="myExperience.php">Qualifications</a></li>
            <li><a href="addEntry.php">Add Blog</a></li>
        </ul>
    </nav>
    </header>
    <div id="title-container">
        <h1>Welcome to my blogs!</h1>
        <form action="sortByMonth.php" method = "post">
        <input type="submit" value ="Filter">
            <select name="monthSelection" id="monthSelection">
                <option value="0">All time</option>
                <option value="1">January</option>
                <option value="2">February</option>
                <option value="3">March</option>
                <option value="4">April</option>
                <option value="5">May</option>
                <option value="6">June</option>
                <option value="7">July</option>
                <option value="8">August</option>
                <option value="9">September</option>
                <option value="10">October</option>
                <option value="11">November</option>
                <option value="12">December</option>
            </select>
        </form>
    </div>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "blog";

$connection = new mysqli($servername, $username, $password, $dbname);

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

$selectedMonth = $_POST['monthSelection'];

if ($selectedMonth > 0) {
    $query = "SELECT title, post, date FROM blogposts WHERE MONTH(date) = $selectedMonth ORDER BY date DESC";
} else {
    header("Location: viewblog.php");
}
$result = $connection->query($query);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $time = new DateTime($row['date'], new DateTimeZone('UTC'));
        $formattedDate = $time->format("jS F Y, g:i") . " UTC";
        
        echo "<div class='blogContainer'>";
        echo "<div class='blogPost'>";
        echo "<div class='blogHeader'>";
        echo "<div class='blogTitle'>" . $row["title"] . "</div>";
        echo "<div class='blogDate'>" . $formattedDate . "</div>";
        echo "<button id='deletePost'>X</button>";
        echo "</div>";
        echo "<div class='blogContent'>" . $row["post"]. "</div>";
        echo "<hr>";
        echo "</div>";
        echo "</div>";
    }
} else {
    echo "No Blogs have been posted for this month!";
    echo "<a href='viewblog.php' id='return'>Back to all posts</a>";
    echo "<style>#title-container {display: none;}</style>";
}
$connection->close();
?>
</body>
</html>
