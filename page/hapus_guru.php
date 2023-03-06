<?php
include "../config/koneksi.php";
if ($_GET['idguru']) {
    $idguru = $_GET['idguru'];
} else $idguru = 'x';
$id = $_GET['id'];
mysqli_query($conn, "DELETE from guru_staff where id='$idguru'");

header("location:guru.php");
