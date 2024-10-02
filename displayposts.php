<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "blog";
$connection = new mysqli($servername, $username, $password, $dbname);

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

$query = "SELECT title, post, date FROM blogposts";
$result = $connection->query($query);

$posts = array();
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $posts[] = $row;
    }
} else {
    echo "No Blogs have been posted yet!";
}
function bubbleSort(&$arr) {
    $n = sizeof($arr);
    $didSwap = false;
    do {
        $didSwap = false;
        for ($i = 0; $i < $n - 1; $i++) {
            if (strtotime($arr[$i]['date']) < strtotime($arr[$i + 1]['date'])) {
                $temp = $arr[$i];
                $arr[$i] = $arr[$i + 1];
                $arr[$i + 1] = $temp;
                $didSwap = true;
            }
        }
        $n = $n - 1;
    } while ($didSwap);
}
bubbleSort($posts);

$connection->close();
foreach ($posts as $post) {
    $time = new DateTime($post['date'], new DateTimeZone('UTC'));
    $formattedDate = $time->format("jS F Y, g:i") . " UTC ";
    echo "<div class='blogPost'>";
    echo "<div class='blogHeader'>";
    echo "<div class='blogTitle'>" . $post['title'] . "</div>";
    echo "<div class='blogDate'>" . $formattedDate . "</div>";
    echo "<button id='deletePost'>X</button>";
    echo "</div>";
    echo "<div class='blogContent'>" . $post['post'] . "</div>";
    echo "<hr>";
    echo "</div>";
}
?>
