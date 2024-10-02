<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="CSS/reset.css">
    <link rel="stylesheet" type="text/css" href="CSS/Shared.css">
    <link rel="stylesheet" type="text/css" href="CSS/blog.css">
    <link rel="shortcut icon" href="favicons/favicon.ico" type="image/x-icon">
    <title>Preview</title>
</head>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['blogTitle'];
    $content = $_POST['blogContent'];
    $action = $_POST['action'];

    if ($action == 'Preview') {
        $time = new DateTime('now', new DateTimeZone('UTC'));
        $formattedDate = $time->format("jS F Y, g:i") . " UTC";

        echo "<form action='addpost.php' method='post'>";
        echo "<input type='hidden' name='blogTitle' value='" . $title . "'>";
        echo "<input type='hidden' name='blogContent' value='" . $content . "'>";
        echo "<input type='hidden' name='action' value='Post'>";

        echo "<div class='blogPost'>";
        echo "<div class='blogHeader'>";
        echo "<div class='blogTitle'>" . $title . "</div>";
        echo "<div class='blogDate'>" . $formattedDate . "</div>";
        echo "</div>";
        echo "<div class='blogContent'>" . $content . "</div>";
        echo "<br>";
        echo "<button type='submit' id = 'previewPost'>Post Blog</button>";
        echo "<a href = 'javascript:history.back()' id='editBlog'>Edit</a>";
        echo "<hr>";
        echo "</div>";
        echo "</form>";
        include('displayposts.php');
    } elseif ($action == 'Post') {
        include('addpost.php');
    }
}
?>
