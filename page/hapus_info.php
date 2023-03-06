<?php
include "../config/koneksi.php";
if ($_GET['idinfo']) {
    $idinfo = $_GET['idinfo'];
} else $idinfo = 'x';
$id = $_GET['id'];
mysqli_query($conn, "DELETE from info where id='$idinfo'");

header("location:info.php");
