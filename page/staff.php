<?php
error_reporting(error_reporting() & ~E_NOTICE);
session_start();
$admin = $_SESSION['auth'];
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
                            Guru dan TU
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="guru.php">Daftar Guru</a>
                            <a class="dropdown-item" href="staff.php">Daftar Staff dan Karyawan</a>
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

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Informasi Sekolah
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="info.php">Kalender Akademik</a>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            PPDB
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
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
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="../image/contoh.jpg" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="../image/contoh.jpg" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="../image/contoh.jpg" alt="Third slide">
                    </div>
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
            <marquee style="background-color:  lightgrey"><b> Selamat Datang Di Website SDN 001 Tanjung Selor. Pengelola : Rini & Reni</b>
            </marquee>
        </div>
    </header>

    <!-- Workingspace -->
    <main class="container">
        <div id="person">
            <h4 style="text-align: center;">Daftar Guru</h4>
            <h4>SDN 001 Tanjung Selor</h4>
            <?php
            include "../config/koneksi.php";
            $ambildata = mysqli_query($conn, "SELECT * FROM guru_staff WHERE staff='1'");
            while ($tampil = mysqli_fetch_array($ambildata)) {
                echo "
        <div class='card'>
            <div class='content row workingspace'>
                <div class='col-3'>
                    <img class='card-img-top' src='../image/$tampil[image]' alt='workingspace'class='img-fluid'>
                </div>
                <div class='col-6'>
                    <div>
                        <table>
                            <tr>
                                <td>Nama</td>
                                <td> : </td>
                                <td>$tampil[nama]</td>
                            </tr>
                            <tr>
                                <td>Lahir</td>
                                <td> : </td>
                                <td>$tampil[lahir]</td>
                            </tr>
                            <tr>
                                <td>NIP</td>
                                <td> : </td>
                                <td>$tampil[nip]</td>
                            </tr>
                            <tr>
                                <td>NUPTK</td>
                                <td> : </td>
                                <td>$tampil[nuptk]</td>
                            </tr>
                            <tr>
                                <td>Bidang</td>
                                <td> : </td>
                                <td>$tampil[bidang]</td>
                        </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        ";
            }
            ?>
        </div>
    </main>
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
                        echo "
                            <p style='text-align:justify'>$tampil[content]</p>
                        ";
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