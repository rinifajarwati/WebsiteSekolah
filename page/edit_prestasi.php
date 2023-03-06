<?php
error_reporting(error_reporting() & ~E_NOTICE);
session_start();
include "../config/koneksi.php";
if ($_GET['idprestasi']) {
    $idprestasi = $_GET['idprestasi'];
} else $idprestasi = 'x';
if (isset($_POST['submit'])) {


    $temp = explode(".", $_FILES["image"]["name"]);
    $newfilename = round(microtime(true)) . '.' . end($temp);
    $target = "../image/" . $newfilename;
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $jenis = $_POST['jenis'];
    $tingkat = $_POST['tingkat'];


    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
        $sql = "UPDATE prestasi SET nama='$nama', kelas='$kelas', jenis='$jenis', tingkat='$tingkat', image='$newfilename' WHERE id=$idprestasi";
    } else {
        $sql = "UPDATE prestasi SET nama='$nama', kelas='$kelas', jenis='$jenis', tingkat='$tingkat', image= '" . $_POST["tempimage"] . "' WHERE id=$idprestasi";
    }



    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Success!');window.location.href='prestasi.php';
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
        <?php
        $ambildata = mysqli_query($conn, "SELECT * FROM prestasi WHERE id=$idprestasi");
        if ($tampil = mysqli_fetch_array($ambildata)) {
        ?>
            <form method="POST" enctype="multipart/form-data">
                <div class="justify-content-center pl-3 pr-3 pt-5 pb-5">
                    <h4 style="text-align: center;">Edit Prestasi Siswa</h4>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                        <input value="<?php echo $tampil['nama'] ?>" type="textarea" class="form-control" name="nama" placeholder="nama" style="width:500px;">
                    </div>
                </div>
                <div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Kelas</label>
                        <div class="col-sm-10">
                            <input value="<?php echo $tampil['kelas'] ?>" type="textarea" class="form-control" name="kelas" placeholder="kelas" style="width:500px;">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Jenis Lomba</label>
                        <div class="col-sm-10">
                            <input value="<?php echo $tampil['jenis'] ?>" type="textarea" class="form-control" name="jenis" placeholder="jenis" style="width:500px;">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Lomba Tingkat</label>
                        <div class="col-sm-10">
                            <input value="<?php echo $tampil['tingkat'] ?>" type="textarea" class="form-control" name="tingkat" placeholder="tingkat" style="width:500px;">
                        </div>
                    </div>
                    <h6>Masukkan foto</h6>
                    <input type="file" name="image" value="<?php echo $tampil['image'] ?>">
                    <input value="<?php echo $tampil['image'] ?>" type="hidden" class="form-control" name="tempimage">
                    <p>
                        <?php

                        echo $tampil['image'] ?> </p>

                </div>
                <button type="submit" class="btn btn-primary mb-2" name="submit">Submit</button>
            </form>
        <?php } ?>
</body>

</html>