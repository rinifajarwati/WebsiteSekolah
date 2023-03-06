<?php

$dbhost = "localhost";
$dbusername = "root";
$dbpassword = "";
$db = "db_admin";

$conn = new mysqli($dbhost, $dbusername, $dbpassword, $db);

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);
if ($username == "" && $password == "") {
    header('location:../index.html');
}

if ($row['username'] == $username && $row['password'] == $password) {
    session_start();
    $_SESSION['auth'] = 'true';
    header('location:../page/home.php');
} else {
    echo "<script>alert('check your credentials')</script>";
    echo "<script>location.replace('../index.html')</script>";
}
