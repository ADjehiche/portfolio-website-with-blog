<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "blog";

$connection = new mysqli($servername, $username, $password, $dbname);

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $connection->real_escape_string(trim($_POST['blogTitle']));
    $content = $connection->real_escape_string(trim($_POST['blogContent']));
    $time = new DateTime('now', new DateTimeZone('UTC'));
    $date = $time->format("Y-m-d H:i:s");

    $sql = "INSERT INTO `blogposts` (`title`, `post`, `date`) VALUES ('$title', '$content', '$date')";

    if (!$connection->query($sql)) {
        echo "Error: " . $connection->error;
    } else {
        header('Location: viewblog.php');
        exit();
    }
}

$connection->close();
?>
