<?php
error_reporting(error_reporting() & ~E_NOTICE);
session_start();
include "../config/koneksi.php";
if (isset($_POST['submit'])) {


    $temp = explode(".", $_FILES["image"]["name"]);
    $newfilename = round(microtime(true)) . '.' . end($temp);
    $target = "../image/" . $newfilename;
    $nama = $_POST['nama'];
    $lahir = $_POST['lahir'];
    $nip = $_POST['nip'];
    $nuptk = $_POST['nuptk'];
    $bidang = $_POST['bidang'];
    $kepsek = $_POST['kepsek'];
    $guru = $_POST['guru'];
    $staff = $_POST['staff'];
    $kepsekresult = '0';
    $gururesult = '0';
    $staffresult = '0';

    if ($kepsek == 'kepsek') {
        $kepsekresult = '1';
    }
    if ($guru == 'guru') {
        $gururesult = '1';
    }
    if ($staff == 'staff') {
        $staffresult = '1';
    }

    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
        $sql = "INSERT INTO guru_staff(nama, lahir, nip, nuptk, image, kepsek, guru, staff, bidang) VALUES ('$nama', '$lahir', '$nip', '$nuptk', '$newfilename', '$kepsekresult', '$gururesult', '$staffresult', '$bidang')";
    } else {
        $sql = "INSERT INTO guru_staff (nama, lahir, nip, nuptk, image, kepsek, guru, staff, bidang) VALUES ('$nama', '$lahir', '$nip', '$nuptk', 'defaultimage.jpg', '$kepsekresult', '$gururesult', '$staffresult', '$bidang') ";
    }

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Success!');window.location.href='guru.php';
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
                <h4 style="text-align: center;">Tambah Guru dan Staff</h4>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                    <input type="textarea" class="form-control" name="nama" placeholder="nama" style="width:500px;">
                </div>
            </div>
            <div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Lahir</label>
                    <div class="col-sm-10">
                        <input type="textarea" class="form-control" name="lahir" placeholder="Tempat, tanggal-bulan-tahun" style="width:500px;">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Nip</label>
                    <div class="col-sm-10">
                        <input type="textarea" class="form-control" name="nip" placeholder="nip" style="width:500px;">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">NUPTK</label>
                    <div class="col-sm-10">
                        <input type="textarea" class="form-control" name="nuptk" placeholder="nuptk" style="width:500px;">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Pilih : </label>
                    <div class="col-sm-10">
                        <input type="checkbox" name="kepsek" value="kepsek">Kepala Sekolah<br>
                        <input type="checkbox" name="guru" value="guru">Guru<br>
                        <input type="checkbox" name="staff" value="staff">Staff<br>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Bidang</label>
                    <div class="col-sm-10">
                        <input type="textarea" class="form-control" name="bidang" placeholder="bidang" style="width:500px;">
                    </div>
                </div>
                <h6>Masukkan foto</h6>
                <input type="file" name="image" value="<?php echo $tampil['image'] ?>">
                <input type="hidden" class="form-control" name="tempimage">
                <p>
                    <?php

                    echo $tampil['image'] ?> </p>
                <button type="submit" class="btn btn-primary mb-2" name="submit">Submit</button>
        </form>
</body>

</html>