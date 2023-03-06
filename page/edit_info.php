<?php
error_reporting(error_reporting() & ~E_NOTICE);
session_start();
include "../config/koneksi.php";
if ($_GET['idinfo']) {
    $idinfo = $_GET['idinfo'];
} else $idinfo = 'x';
echo $idinfo;
if (isset($_POST['submit'])) {


    $informasi = $_POST['informasi'];
    $tgl = $_POST['tgl'];
    $jam = $_POST['jam'];

    $sql = "UPDATE info SET informasi='$informasi', tgl='$tgl', jam='$jam' WHERE id=$idinfo";

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
        <?php
        $ambildata = mysqli_query($conn, "SELECT * FROM info WHERE id=$idinfo");
        if ($tampil = mysqli_fetch_array($ambildata)) {
        ?>
            <form method="POST" enctype="multipart/form-data">
                <div class="justify-content-center pl-3 pr-3 pt-5 pb-5">
                    <h4 style="text-align: center;">Edit Informasi</h4>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Informasi</label>
                    <div class="col-sm-10">
                        <input value="<?php echo $tampil['informasi'] ?>" type="textarea" class="form-control" name="informasi" placeholder="informasi" style="width:500px;">
                    </div>
                </div>
                <div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Hari, Tanggal</label>
                        <div class="col-sm-10">
                            <input value="<?php echo $tampil['tgl'] ?>" type="textarea" class="form-control" name="tgl" placeholder="tgl" style="width:500px;">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Jam</label>
                        <div class="col-sm-10">
                            <input value="<?php echo $tampil['jam'] ?>" type="textarea" class="form-control" name="jam" placeholder="jam" style="width:500px;">
                        </div>
                    </div>

                </div>
                <button type="submit" class="btn btn-primary mb-2" name="submit">Submit</button>
            </form>
        <?php } ?>
</body>

</html>