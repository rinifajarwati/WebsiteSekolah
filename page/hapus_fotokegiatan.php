<?php
include "../config/koneksi.php";
if ($_GET['idfotokegiatan']) {
    $idfotokegiatan = $_GET['idfotokegiatan'];
    $id_fotokegiatan = $_POST['id_fotokegiatan'];
    $key = $_GET['key'];
    mysqli_query($conn, "DELETE from fotokegiatan where id='$idfotokegiatan'");

    header("location:fotokegiatan.php?myVar1=$key");
}
