<?php
error_reporting(error_reporting() & ~E_NOTICE);
session_start();
include "../config/koneksi.php";
echo $idinfo;
if (isset($_POST['submit'])) {


    $informasi = $_POST['informasi'];
    $tgl = $_POST['tgl'];
    $jam = $_POST['jam'];

    $sql = "INSERT INTO info (informasi, tgl, jam) VALUES ('$informasi', '$tgl', '$jam')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Success!');window.location.href='info.php';
        </script>";
    } else echo "gagal";
    $conn->close();
}
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/global.css">
    <title>Hello, world!</title>
</head>

<body class="container">
    <div id="content">
        <form method="POST" enctype="multipart/form-data">
            <div class="justify-content-center pl-3 pr-3 pt-5 pb-5">
                <h4 style="text-align: center;">Tambah Informasi</h4>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Informasi</label>
                <div class="col-sm-10">
                    <input type="textarea" class="form-control" name="informasi" placeholder="informasi" style="width:500px;">
                </div>
            </div>
            <div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Hari, Tanggal</label>
                    <div class="col-sm-10">
                        <input type="textarea" class="form-control" name="tgl" placeholder="hari, tgl" style="width:500px;">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Jam</label>
                    <div class="col-sm-10">
                        <input type="textarea" class="form-control" name="jam" placeholder="jam" style="width:500px;">
                    </div>
                </div>

            </div>
            <button type="submit" class="btn btn-primary mb-2" name="submit">Submit</button>
        </form>
</body>

</html>