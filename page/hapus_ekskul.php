<?php
include "../config/koneksi.php";
if ($_GET['idekskul']) {
    $idekskul = $_GET['idekskul'];
} else $idekskul = 'x';
$id = $_GET['id'];
mysqli_query($conn, "DELETE from ekskul where id='$idekskul'");

header("location:ekskul.php");
