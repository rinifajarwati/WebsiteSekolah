<?php
include "../config/koneksi.php";
if ($_GET['idfoto']) {
    $idfoto = $_GET['idfoto'];
} else $idfoto = 'x';
$id = $_GET['id'];
mysqli_query($conn, "DELETE from content where id='$idfoto'");

header("location:edit_banner.php");
