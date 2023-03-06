<?php
error_reporting(error_reporting() & ~E_NOTICE);
session_start();
$admin = $_SESSION['auth'];
include "../config/koneksi.php";
if ($_GET['idedit']) {
    $idedit = $_GET['idedit'];
} else $idedit = 'x';
if (isset($_POST['submit'])) {
    $sql = "UPDATE content SET content = '" . $_POST["isiabout"] . "' WHERE type='$idedit'";
    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Success!');window.location.href='home.php';</script>";
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

<body>
    <?php
    $ambildata = mysqli_query($conn, "SELECT * FROM content WHERE type='footer_about'");
    if ($tampil = mysqli_fetch_array($ambildata)) {

    ?>
        <form method="POST">
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">about</label>
                <div class="col-sm-10">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Isi About</label>
                <div class="col-sm-10">
                    <input value='<?php echo $tampil['content'] ?>' type="text" class="form-control" name="isiabout" placeholder="isiabout">
                </div>
            </div>
            <button type="submit" class="btn btn-primary mb-2" name="submit">Submit</button>
        </form>
    <?php } ?>
</body>

</html>