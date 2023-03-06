<?php
include "../config/koneksi.php";
if ($_GET['idvideo']) {
    $idvideo = $_GET['idvideo'];
} else $idvideo = 'x';
$id = $_GET['id'];
mysqli_query($conn, "DELETE from video where id='$idvideo'");

header("location:video.php");
