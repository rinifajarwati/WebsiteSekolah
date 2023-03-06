<?php
error_reporting(error_reporting() & ~E_NOTICE);
session_start();
include "../config/koneksi.php";
if ($_GET['idsarana']) {
    $idsarana = $_GET['idsarana'];
} else $idsarana = 'x';
if (isset($_POST['submit'])) {


    $nama_ruangan = $_POST['nama_ruangan'];
    $jumlah_ruangan = $_POST['jumlah_ruangan'];

    $sql = "UPDATE sarana SET nama_ruangan='$nama_ruangan', jumlah_ruangan='$jumlah_ruangan' WHERE id=$idsarana";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Success!');window.location.href='sarana.php';
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
        $ambildata = mysqli_query($conn, "SELECT * FROM sarana WHERE id=$idsarana");
        if ($tampil = mysqli_fetch_array($ambildata)) {
        ?>
            <form method="POST" enctype="multipart/form-data">
                <div class="justify-content-center pl-3 pr-3 pt-5 pb-5">
                    <h4 style="text-align: center;">Edit Sarana dan Prasarana</h4>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Nama Ruangan</label>
                    <div class="col-sm-10">
                        <input value="<?php echo $tampil['nama_ruangan'] ?>" type="textarea" class="form-control" name="nama_ruangan" placeholder="nama_ruangan" style="width:500px;">
                    </div>
                </div>
                <div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Jumlah Ruangan</label>
                        <div class="col-sm-10">
                            <input value="<?php echo $tampil['Jumlah_ruangan'] ?>" type="textarea" class="form-control" name="jumlah_ruangan" placeholder="jumlah_ruangan" style="width:500px;">
                        </div>
                    </div>

                </div>
                <button type="submit" class="btn btn-primary mb-2" name="submit">Submit</button>
            </form>
        <?php } ?>
</body>

</html>