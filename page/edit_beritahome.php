<?php
error_reporting(error_reporting() & ~E_NOTICE);
session_start();
include "../config/koneksi.php";
if ($_GET['idberitahome']) {
    $idberitahome = $_GET['idberitahome'];
} else $idberitahome = 'x';
if (isset($_POST['submit'])) {


    $temp = explode(".", $_FILES["image"]["name"]);
    $newfilename = round(microtime(true)) . '.' . end($temp);
    $target = "../image/" . $newfilename;
    $title = $_POST['title'];
    $content = $_POST['content'];


    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
        $sql = "UPDATE beritahome SET title='$title', content='$content', image='$newfilename' WHERE id='$idberitahome'";
    } else {
        $sql = "UPDATE beritahome SET title='$title', content='$content',  image= '" . $_POST["tempimage"] . "' WHERE id='$idberitahome'";
    }



    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Success!');window.location.href='home.php';
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
        $ambildata = mysqli_query($conn, "SELECT * FROM beritahome WHERE id='$idberitahome'");
        if ($tampil = mysqli_fetch_array($ambildata)) {
        ?>
            <form method="POST" enctype="multipart/form-data">
                <div class="justify-content-center pl-3 pr-3 pt-5 pb-5">
                    <h4 style="text-align: center;">Edit Berita</h4>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Judul Berita</label>
                    <div class="col-sm-10">
                        <input value="<?php echo $tampil['title'] ?>" type="textarea" class="form-control" style="width:500px;" name="title" placeholder="title">
                    </div>
                </div>
                <div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Keterangan Berita</label>
                        <div class="col-sm-10">
                            <textarea type="textarea" class="form-control" style="width:500px; height:300px;" name="content" placeholder="content"><?php echo $tampil['content'] ?></textarea>
                        </div>
                    </div>

                    <input type="file" name="image" value="<?php echo $tampil['image'] ?>">
                    <input type="hidden" class="form-control" name=" tempimage">
                    <p><?php echo $tampil['image'] ?> </p>
                </div>
                <button type="submit" class="btn btn-primary mb-2" name="submit">Submit</button>
            </form>
        <?php } ?>
</body>

</html>