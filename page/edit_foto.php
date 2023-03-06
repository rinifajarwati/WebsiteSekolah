<?php
error_reporting(error_reporting() & ~E_NOTICE);
session_start();
include "../config/koneksi.php";
if ($_GET['idfoto']) {
    $idfoto = $_GET['idfoto'];
} else $idfoto = 'x';
if (isset($_POST['submit'])) {


    $temp = explode(".", $_FILES["image"]["name"]);
    $newfilename = round(microtime(true)) . '.' . end($temp);
    $target = "../image/" . $newfilename;
    $nama = $_POST['nama'];
    $keterangan = $_POST['keterangan'];


    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
        $sql = "UPDATE foto SET nama='$nama', keterangan='$keterangan', image='$newfilename' WHERE id='$idfoto'";
    } else {
        $sql = "UPDATE foto SET nama='$nama', keterangan='$keterangan', image= '" . $_POST["tempimage"] . "' WHERE id='$idfoto'";
    }



    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Success!');window.location.href='foto.php';
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
        $ambildata = mysqli_query($conn, "SELECT * FROM foto WHERE id='$idfoto'");
        if ($tampil = mysqli_fetch_array($ambildata)) {
        ?>
            <form method="POST" enctype="multipart/form-data">
                <div class="justify-content-center pl-3 pr-3 pt-5 pb-5">
                    <h4 style="text-align: center;">Edit Foto Kegiatan</h4>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Nama Kegiatan</label>
                    <div class="col-sm-10">
                        <input value="<?php echo $tampil['nama'] ?>" type="textarea" class="form-control" name="nama" placeholder="nama" style="width:500px;">
                    </div>
                </div>
                <div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Keterangan Kegiatan</label>
                        <div class="col-sm-10">
                            <input value="<?php echo $tampil['keterangan'] ?>" type="textarea" class="form-control" name="keterangan" placeholder="keterangan" style="width:500px;">
                        </div>
                    </div>

                    <input type="file" name="image" value="<?php echo $tampil['image'] ?>">
                    <input value="<?php echo $tampil['image'] ?>" type="hidden" class="form-control" name="tempimage">
                    <p><?php echo $tampil['image'] ?> </p>
                </div>
                <h6>Masukkan Foto</h6>
                <button type="submit" class="btn btn-primary mb-2" name="submit">Submit</button>
            </form>
        <?php } ?>
</body>

</html>