<?php
include "../config/koneksi.php";
if ($_GET['idprestasi']) {
    $idprestasi = $_GET['idprestasi'];
} else $idprestasi = 'x';
$id = $_GET['id'];
mysqli_query($conn, "DELETE from prestasi where id='$idprestasi'");

header("location:prestasi.php");
