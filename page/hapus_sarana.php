<?php
include "../config/koneksi.php";
if ($_GET['idsarana']) {
    $idsarana = $_GET['idsarana'];
} else $idsarana = 'x';
$id = $_GET['id'];
mysqli_query($conn, "DELETE from sarana where id='$idsarana'");

header("location:sarana.php");
