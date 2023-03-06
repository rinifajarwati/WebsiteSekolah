<?php
error_reporting(error_reporting() & ~E_NOTICE);
session_start();
include "../config/koneksi.php";
if (isset($_POST['submit'])) {


    $temp = explode(".", $_FILES["image"]["name"]);
    $newfilename = round(microtime(true)) . '.' . end($temp);
    $target = "../image/" . $newfilename;

    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
        $sql = "UPDATE content SET content = '" . $_POST["isisejarah"] . "', image='$newfilename' WHERE type='isisejarah'";
    } else {
        $sql = "UPDATE content SET content = '" . $_POST["isisejarah"] . "', image= '" . $_POST["tempimage"] . "' WHERE type='isisejarah'";
    }

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Success!');window.location.href='sejarah_sekolah.php';
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
    <title></title>
</head>

<body class="container">
    <div id="content">
        <?php
        $ambildata = mysqli_query($conn, "SELECT * FROM content WHERE type='isisejarah'");
        if ($tampil = mysqli_fetch_array($ambildata)) {
        ?>
            <div class="justify-content-center pl-3 pr-3 pt-5 pb-5">
                <h4 style="text-align: center;">Edit Sejarah</h4>
            </div>
            <form method="POST" enctype="multipart/form-data">
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Isi Sejarah</label>
                    <div class="col-sm-10">
                        <textarea type="textarea" class="form-control" name="isisejarah" style="width:500px; height:300px;" placeholder="isisejarah"><?php echo $tampil['content'] ?></textarea>
                    </div>
                </div>
                <div>
                    <input type="file" name="image" value="<?php echo $tampil['image'] ?>">
                    <input value="<?php echo $tampil['image'] ?>" type="hidden" class="form-control" name="tempimage">
                    <p><?php echo $tampil['image'] ?> </p>
                </div>
                <button type="submit" class="btn btn-primary mb-2" name="submit">Submit</button>
            </form>

        <?php } ?>
    </div>
</body>

</html>