<?php
error_reporting(error_reporting() & ~E_NOTICE);
session_start();
include "../config/koneksi.php";

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

<body>
    <div id="content">
        <?php
        $ambildata = mysqli_query($conn, "SELECT * FROM content WHERE type='isifoto'");

        ?>
        <table>
            <tr>
                <th>image</th>
                <th>Action</th>
            </tr>
            <?php
            while ($tampil = mysqli_fetch_array($ambildata)) { ?>
                <tr>
                    <td> <img src="../image/<?php echo $tampil["image"] ?>" alt="<?php echo $tampil["content"] ?>" width=' 300px' height='300px'>
                    </td>
                    <td>
                        <form method='POST' enctype='multipart/form-data' action="update_banner.php?idfoto=<?php echo $tampil["id"] ?>">
                            <input type='file' name='image' value="<?php echo $tampil["image"] ?>" required>
                            <input value="<?php echo $tampil["image"] ?>" type='hidden' class='form-control' name="<?php echo $tampil["image"] ?>">
                            <input value="<?php echo $tampil["id"] ?>" type='hidden' class='form-control' name="<?php echo $tampil["id"] ?>">
                            <button type='submit' class='btn btn-primary mb-2' name='submit'>Simpan</button>

                            <a href='hapus_banner.php?idfoto=<?php echo $tampil["id"] ?>'>Hapus</a>
                        </form>
                    </td>
                </tr>
            <?php }
            ?>
        </table>

</body>

</html>