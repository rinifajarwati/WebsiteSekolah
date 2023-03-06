<?php
error_reporting(error_reporting() & ~E_NOTICE);
session_start();
include "../config/koneksi.php";
echo $idekskul;
if (isset($_POST['submit'])) {


    $temp = explode(".", $_FILES["image"]["name"]);
    $newfilename = round(microtime(true)) . '.' . end($temp);
    $target = "../image/" . $newfilename;
    $title = $_POST['title'];

    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
        $sql = "INSERT INTO ekskul(title, image) VALUES ('$title', '$newfilename')";
    } else {
        $sql = "INSERT INTO ekskul(title, image) VALUES ('$title', 'defaultimage.jpg') ";
    }

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Success!');window.location.href='ekskul.php';
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
                <h4 style="text-align: center;">Tambah Ekstrakulikuler</h4>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Nama Ekstrakulikuler</label>
                <div class="col-sm-10">
                    <input type="textarea" class="form-control" name="title" style="width:500px;">
                </div>
            </div>
            <div>
                <h6>Masukkan Foto</h6>
                <input type="file" name="image" value="<?php echo $tampil['image'] ?>">
                <input type="hidden" class="form-control" name="tempimage">
                <p>
                    <?php

                    echo $tampil['image'] ?> </p>
            </div>
            <button type="submit" class="btn btn-primary mb-2" name="submit">Submit</button>
        </form>
</body>

</html>