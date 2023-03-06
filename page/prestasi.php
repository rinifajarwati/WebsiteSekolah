<?php
error_reporting(error_reporting() & ~E_NOTICE);
session_start();
$admin = $_SESSION['auth'];
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
    <title>SDN 001 Tanjung Selor</title>
</head>

<body>
    <header>

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">SDN 001 Tanjung Selor</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Profile
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="sejarah_sekolah.php">Sejarah Sekolah</a>
                            <a class="dropdown-item" href="visimisi.php">Visi dan Misi</a>
                            <a class="dropdown-item" href="sarana.php">Sarana dan Prasarana</a>
                            <a class="dropdown-item" href="struktur.php">Struktur Organisasi</a>
                            <a class="dropdown-item" href="lokasi.php">Lokasi Sekolah</a>
                            <a class="dropdown-item" href="kepsek.php">Kepala Sekolah</a>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Guru dan Staff
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="guru.php">Daftar Guru dan Staff</a>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Siswa
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="prestasi.php">Prestasi Siswa</a>
                            <a class="dropdown-item" href="ekskul.php">Ekstrakulikuler</a>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Galeri
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="foto.php">Foto</a>
                            <a class="dropdown-item" href="video.php">Video</a>
                        </div>
                    </li>

                    <li class="nav-item active">
                        <a class="nav-link" href="info.php">Informasi Sekolah <span class="sr-only">(current)</span></a>
                    </li>

                    <li class="nav-item active">
                        <a class="nav-link" href="https://ppdbsd001tanjungselor.000webhostapp.com/">PPDB <span class="sr-only">(current)</span></a>
                    </li>
                </ul>
                <form class="nav-item active">
                    <?php
                    if ($admin === "true") {
                        echo " <a class='nav-link' href='logout.php'>Logout<span class='sr-only'>(current)</span></a>";
                    } else {
                        echo " <a class='nav-link' href='login.html'>login Admin<span class='sr-only'>(current)</span></a>";
                    }
                    ?>
                </form>
            </div>
        </nav>

        <div class="atas">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner container">
                    <?php
                    $ambildata = mysqli_query($conn, "SELECT * FROM content WHERE type='isifoto'");
                    $i = "false";
                    while ($tampil = mysqli_fetch_array($ambildata)) {
                        if ($i === "false") echo "<div class='carousel-item active'>";
                        else echo "<div class='carousel-item'>";
                        $i = "true";
                        echo "
                        <img class='d-block w-100' src='../image/$tampil[image]' width='350' height='500' alt='$tampil[content]'>
                    </div>
                    ";
                    }
                    ?>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <div class="tulisan">
            <marquee style="color: blue"><b> Selamat Datang Di Website SDN 001 Tanjung Selor, Bulungan, Kalimantan Utara</b>
            </marquee>
        </div>
    </header>

    <!-- Workingspace -->
    <div class="berita">
        <div class="container">
            <div class="justify-content-center pl-3 pr-3 pt-5 pb-5">
                <h4 style="text-align: center;">Siswa Berprestasi</h4>
                <h4 style="text-align: center;">SDN 001 Tanjung Selor</h4>
                <div class="edit" style="float: right;">
                    <?php if ("true" === $admin) {
                        $idprestasi = $tampil["id"];
                        echo
                        "<button id='btn2'><a href='tambah_prestasi.php'>Tambah Prestasi Siswa</a></button>";
                    }
                    ?>
                </div>
            </div>
            <div class="row">
                <?php
                $ambildata = mysqli_query($conn, "SELECT * FROM prestasi");
                while ($tampil = mysqli_fetch_array($ambildata)) {
                    echo "
                <div class='col'>    
                    <div class='card' id='ubah'>
                        <img class='card-img-top' id='ubah' src='../image/$tampil[image]'>
                        <div class='card-body'>
                        <table style='text-align:justify'>
                        <tr>
                            <td>Nama Siswa</td>
                            <td> : </td>
                            <td>$tampil[nama]</td>
                        </tr>
                        <tr>
                            <td>Kelas</td>
                            <td> : </td>
                            <td>$tampil[kelas]</td>
                        </tr>
                        <tr>
                            <td>Tingkat</td>
                            <td> : </td>
                            <td>$tampil[tingkat]</td>
                        </tr>
                        <tr>
                            <td>Jenis Lomba</td>
                            <td> : </td>
                            <td>$tampil[jenis]</td>
                        </tr>
                        <tr>
                            <td>Tingkat</td>
                            <td> : </td>
                            <td>$tampil[tingkat]</td>";

                    if ("true" === $admin) {
                        $idprestasi = $tampil["id"];
                        echo "
                                <td>
                                <div class='edit' style='float: right;'>
                                <button id='btn2'><a href='edit_prestasi.php?idprestasi=$idprestasi'>Edit</a></button>
                                </td>
                                <td>
                                <button id='btn2'><a href='hapus_prestasi.php?idprestasi=$idprestasi'>Hapus</a></button>
                                </td>";
                    }
                    echo "  </tr> </table>
                        </div>
                    </div>
                </div> ";
                }
                ?>
            </div>
        </div>
    </div>
    <!-- Akhir Workingspace -->

    <!-- Footer -->
    <footer class="page-footer font-small blue pt-4">

        <!-- Footer Links -->
        <div class="container-fluid text-center text-md-left">

            <!-- Grid row -->
            <div class="row">

                <!-- Grid column -->
                <div class="col-md-5 mt-md-0 mt-3">

                    <!-- Content -->
                    <h5 class="text-uppercase">About Us</h5>
                    <?php
                    include "../config/koneksi.php";
                    $ambildata = mysqli_query($conn, "SELECT * FROM content WHERE title='About'");
                    while ($tampil = mysqli_fetch_array($ambildata)) {
                        echo "<p style='text-align:justify'>$tampil[content]</p>";
                    }
                    ?>
                    <?php if ("true" === $admin) {
                        $idedit = 'footer_about';
                        echo
                        "<button id='btn2'><a href='edit_footer.php?idedit=$idedit'>Edit</a></button>";
                    }
                    ?>
                </div>
                <!-- Grid column -->

                <hr class="clearfix w-100 d-md-none pb-3">

                <!-- Grid column -->
                <div class="col-md-3 mb-md-0 mb-3">

                    <!-- Links -->
                    <h5 class="text-uppercase">Useful Links</h5>

                    <ul class="list-unstyled">
                        <li>
                            <a href="https://ppdbsd001tanjungselor.000webhostapp.com/">PPDB</a>
                        </li>
                        <li>
                            <a href="info.php">Info Sekolah</a>
                        </li>
                    </ul>

                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-3 mb-md-0 mb-3">

                    <!-- Links -->
                    <h5 class="text-uppercase">Contact Us</h5>

                    <ul class="list-unstyled">
                        <li>
                            <p>
                            <address>Jln. Kol. H. Soetadji No. 42 RT. 6 Tanjung Selor Hilir, Tanjung Selor, Kabupaten Bulungan, Kalimantan Utara, 77214</address>
                            </p>
                        </li>
                        <li>
                            <p><strong>Phone : </strong>0552 - 21375<br /></p>
                        </li>
                        <li>
                            <p><strong>Email:</strong><a href="mailto:sdnsatu_tanjungselor@yahoo.com">sdnsatu_tanjungselor@yahoo.com</a></p>
                        </li>
                    </ul>

                </div>
                <!-- Grid column -->

            </div>
            <!-- Grid row -->

        </div>
        <!-- Footer Links -->

        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">© 2020 Copyright: Rini Fajarwati & Kusuma Angreni
            <a href="https://mdbootstrap.com/"> MDBootstrap.com</a>
        </div>
        <!-- Copyright -->

    </footer>
    <!-- Footer -->

    <!-- Akhir Footer -->

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>

</html>