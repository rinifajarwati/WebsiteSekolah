<?php
include "../config/koneksi.php";
if ($_GET['idberitahome']) {
    $idberitahome = $_GET['idberitahome'];
} else $idberitahome = 'x';
$id = $_GET['id'];
mysqli_query($conn, "DELETE from beritahome where id='$idberitahome'");

header("location:home.php");
