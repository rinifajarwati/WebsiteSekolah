<?php
error_reporting(error_reporting() & ~E_NOTICE);
session_start();
include "../config/koneksi.php";
if ($_GET['idfoto']) {
    $idfoto = $_GET['idfoto'];
    $temp = explode(".", $_FILES["image"]["name"]);
    $newfilename = round(microtime(true)) . '.' . end($temp);
    $target = "../image/" . $newfilename;

    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
        $sql = "UPDATE content SET title='banner',  image='$newfilename', type='isifoto' WHERE id='$idfoto'";
    } else {
        $sql = "UPDATE content SET title='banner',  image= '" . $_POST["tempimage"] . "', type='isifoto'  WHERE id='$idfoto'";
    }
    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Success!');window.location.href='home.php';
        </script>";
    } else echo "gagal";
    $conn->close();
}
