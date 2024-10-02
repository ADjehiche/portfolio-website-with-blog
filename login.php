<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "loginInfo";
    $connection = new mysqli($servername, $username, $password, $dbname);
    if ($connection->connect_error) {
        die("Connection failed: " . $connection->connect_error);
    }
    if(isset($_POST["login"])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $sql = "SELECT * FROM Login WHERE username = '$username' AND password = '$password'";
        $result = $connection->query($sql);
        if ($result->num_rows > 0) {
            session_start();
            $_SESSION['username'] = $username;
            $_SESSION['password'] = $password;
            $_SESSION['logged_in'] = true;
            header("Location: viewblog.php");
        } else {
        }
    }
    $connection->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <Script src="login.js"></Script>
</head>
</html>