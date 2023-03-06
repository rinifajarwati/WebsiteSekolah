<?php
error_reporting(error_reporting() & ~E_NOTICE);
session_start();
include "../config/koneksi.php";
if ($_GET['idguru']) {
    $idguru = $_GET['idguru'];
} else $idguru = 'x';
if (isset($_POST['submit'])) {


    $temp = explode(".", $_FILES["image"]["name"]);
    $newfilename = round(microtime(true)) . '.' . end($temp);
    $target = "../image/" . $newfilename;
    $nama = $_POST['nama'];
    $lahir = $_POST['lahir'];
    $nip = $_POST['nip'];
    $nuptk = $_POST['nuptk'];
    $bidang = $_POST['bidang'];

    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
        $sql = "UPDATE guru_staff SET nama='$nama', lahir='$lahir', nip='$nip', nuptk='$nuptk', bidang='$bidang', image='$newfilename' WHERE id=$idguru";
    } else {
        $sql = "UPDATE guru_staff SET nama='$nama', lahir='$lahir', nip='$nip', nuptk='$nuptk', bidang='$bidang', image= '" . $_POST["tempimage"] . "' WHERE id=$idguru";
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
        <?php
        $ambildata = mysqli_query($conn, "SELECT * FROM guru_staff WHERE id=$idguru");
        if ($tampil = mysqli_fetch_array($ambildata)) {
        ?>
            <form method="POST" enctype="multipart/form-data">
                <div class="justify-content-center pl-3 pr-3 pt-5 pb-5">
                    <h4 style="text-align: center;">Edit Guru dan Staff</h4>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                        <input value="<?php echo $tampil['nama'] ?>" type="textarea" class="form-control" name="nama" placeholder="nama" style="width:500px;">
                    </div>
                </div>
                <div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Lahir</label>
                        <div class="col-sm-10">
                            <input value="<?php echo $tampil['lahir'] ?>" type="textarea" class="form-control" name="lahir" placeholder="lahir" style="width:500px;">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Nip</label>
                        <div class="col-sm-10">
                            <input value="<?php echo $tampil['nip'] ?>" type="textarea" class="form-control" name="nip" placeholder="nip" style="width:500px;">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">NUPTK</label>
                        <div class="col-sm-10">
                            <input value="<?php echo $tampil['nuptk'] ?>" type="textarea" class="form-control" name="nuptk" placeholder="nuptk" style="width:500px;">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Bidang</label>
                        <div class="col-sm-10">
                            <input value="<?php echo $tampil['bidang'] ?>" type="textarea" class="form-control" name="bidang" placeholder="bidang" style="width:500px;">
                        </div>
                    </div>
                    <h6>Masukkan Foto</h6>
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