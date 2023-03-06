<?php
error_reporting(error_reporting() & ~E_NOTICE);
session_start();
include "../config/koneksi.php";
echo $idvideo;
if (isset($_POST['submit'])) {


    $link = $_POST['link'];
    $content = $_POST['content'];

    $sql = "INSERT INTO video(link, content) VALUES ('$link', '$content')";
    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Success!');window.location.href='video.php';
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
                <h4 style="text-align: center;"> Tambah Video</h4>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Link Youtube</label>
                <div class="col-sm-10">
                    <input type="textarea" class="form-control" name="link" placeholder="link" style="width:500px;">
                </div>
            </div>
            <div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Keterangan</label>
                    <div class="col-sm-10">
                        <input type="textarea" class="form-control" name="content" placeholder="content" style="width:500px;">
                    </div>
                </div>

            </div>
            <button type="submit" class="btn btn-primary mb-2" name="submit">Submit</button>
        </form>
</body>

</html>