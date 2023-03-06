-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Feb 2021 pada 10.15
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_admin`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(3, 'admin', 'admin'),
(4, 'admin', '12345678');

-- --------------------------------------------------------

--
-- Struktur dari tabel `beritahome`
--

CREATE TABLE `beritahome` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `content` text NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `beritahome`
--

INSERT INTO `beritahome` (`id`, `title`, `content`, `image`) VALUES
(1, 'OLIMPIADEeee', 'BLAAA jkjhfuoshhhsn hauhkdljsdgsi Kalau sudah masuk ke pengertian kata, tidak afdal rasanya kalau tidak merujuk ke pedoman resmi yang ada yaitu KBBI. KBBI atau Kamus Besar Bahasa Indonesia diterbitkan oleh Pemerintah melalui Badan Bahasa Kemendikbud, jadi sudah tidak perlu diragukan lagi keabsahannya.\r\n\r\nMenurut KBBI, beasiswa adalah tunjangan yang diberikan kepada pelajar atau mahasiswa sebagai bantuan biaya belajar.\r\n\r\nDari pengertian beasiswa di atas, sudah jelas bahwasannya beasiswa merupakan bantuan biaya sehingga seorang pelajar bisa mengikuti kegiatan belajar dengan biaya yang lebih ringan. Karena bersifat bantuan, besaran beasiswa yang diberikan ke penerima berbeda-beda, dapat berupa beasiswa penuh (full scholarship), beasiswa sebagian (partial scholarship) atau bantuan fasilitas tertentu saja yang menunjang pembelajaran.Manfaat Beasiswa bagi Penerima\r\nMendapatkan beasiswa tentunya memberikan banyak manfaat, Quipperian. Sebagai penerima berikut ini adalah beberapa manfaatnya.\r\n\r\nKeringanan biaya sekolah atau kuliah\r\nAsyik banget kan kalau punya kesempatan sekolah atau kuliah tanpa memikirkan biaya? Tinggal fokus aja nih dengan belajar dan tugas yang diberikan. Kalau sudah seperti itu, harusnya prestasi juga harus oke.\r\n\r\nSebuah kebanggaan yang bisa dimasukkan sebagai portofolio\r\nUntuk mendapatkan sebuah beasiswa, pada umumnya calon penerima diharuskan mengikuti serangkaian tes dan seleksi yang diikuti oleh ratusan bahkan ribuan pemburu beasiswa lainnya. Nah Quipperian, kalau berhasil lolos dalam seleksi tersebut, bisa jadi kebanggan tersendiri dong. Dan kalau beasiswanya benar-benar prestisius, akan sangat oke dicantumkan sebagai portofolio.\r\n\r\nMendapatkan relasi sesama penerima beasiswa\r\nPemberi beasiswa seringkali mengadakan acara yang akan mengumpulkan para penerima beasiswa. Di acara-acara seperti ini, kesempatan untuk berkenalan dan mendapatkan relasi terbuka lebar. Bisa berbagai info mengenai perkuliahan, kerjasama penelitian bahkan karier di masa depan. Apalagi pastinya para penerima beasiswa adalah orang-orang yang juga bukan biasa-biasa saja.\r\n\r\nManfaat Beasiswa bagi Pemberi\r\nDari sisi pemberi beasiswa, ternyata memberikan beasiswa juga memiliki tujuan dan manfaat yang bagus sekali lho, Quipperian. Nih, beberapa alasan mengapa ada pemberian beasiswa.\r\n\r\nMeningkatkan kesempatan belajar dan sumber daya manusia\r\nBeasiswa khususnya yang diberikan oleh pemerintah bertujuan untuk meningkatkan partisipasi masyarakat untuk dapat mengenyam pendidikan yang lebih tinggi. Seperti yang diketahui, tidak semua orang sanggup membayar biaya sekolah atau kuliah yang dari tahun ke tahun cenderung semakin mahal. Maka dari itu banyak beasiswa yang berasal dari pemerintah seperti Bidik Misi atau LPDP. \r\n\r\nDengan lebih banyak masyarakat yang berpendidikan tinggi, harapannya dapat menjadi aset berharga bagi pembangunan negara di masa depan. Begitu pula dengan beasiswa yang diberikan perusahaan atau instansi kepada karyawannya, hal ini bertujuan untuk meningkatkan kualitas sumber daya manusia di perusahaan tersebut.\r\n', 'drumband.jpg'),
(2, 'PPDB', 'blaaaaaaaaa', 'lapangan.jpg'),
(3, 'Beasiswaaaaa', 'blaaaaaaooo', '1611735968.jpg'),
(5, 'Beasiswaaaaa', 'bla', 'defaultimage.jpg'),
(6, 'Beasiswaaaaa', 'asdfghjmnbvrtyujm', '1611991877.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `content`
--

CREATE TABLE `content` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `content` text NOT NULL,
  `image` varchar(200) NOT NULL,
  `type` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `content`
--

INSERT INTO `content` (`id`, `title`, `content`, `image`, `type`) VALUES
(1, '', '', '', ''),
(2, 'Visi', 'rrrr', '1612426379.jpg', 'isivisi'),
(3, 'Misi', 'rrrrrrrrrrUntuk mencapai visi dirumuskan misi SD Negeri 001 Tanjung Selor yaitu : <br>1. Mewujudkan sumber daya manusia yang beriman dan bertaqwa. ', '', 'isimisi'),
(4, 'PPDB', 'Informasi Pendaftaran Peserta Didik Baru', 'lapangan.jpg', 'beritahome'),
(5, 'Olimpiade', 'Informasi Olimpiade ', 'olahraga.jpg', 'beritahome'),
(6, 'Beasiswa', 'Informasi Beasiswa', 'drumband.jpg', 'beritahome'),
(7, 'Sejarah', 'SDN 001 Tanjung Selor merupakan sekolah dasar tertua di Tanjung Selor, Bulungan, Kalimantan Utara. Sekolah ini didirikan pada tahun pada tahun 1982 dan mulai beroperasi pada tahun 1983. SDN 001 juga merupakan sekolah dasar unggulan di Tanjung Selor. SDN 001 Tanjung Selor telah berakreditasi A dengan kepala sekolah Dra. Andariningsih. ', '1611219305.jpg', 'isisejarah'),
(15, 'Kepsek', 'ANDARININGSIH\r\n', 'kepsek.jpg', 'isikepsek'),
(16, 'About', 'Website ini adalah sebuah media yang memberikan informasi tentang SDN 001 Tanjung Selor secara online. Memberikan informasi yang terkini melalui berbagai kontent yang berstrategi dalam bidang IT', '', 'footer_about'),
(17, 'Struktur', '', '1611233525.png', 'isistruktur'),
(23, 'banner', '', '1611914373.jpg', 'isifoto'),
(29, 'banner', '', '1611914765.jpg', 'isifoto'),
(30, 'banner', '', '1611914891.jpg', 'isifoto');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ekskul`
--

CREATE TABLE `ekskul` (
  `id` int(11) NOT NULL,
  `title` varchar(900) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `ekskul`
--

INSERT INTO `ekskul` (`id`, `title`, `image`) VALUES
(1, 'drumband', 'drumband.jpg'),
(2, 'Pramuka', 'pramuka.jpg'),
(4, 'title', '1611752913.jpg'),
(5, 'Basket', '1611753204.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `foto`
--

CREATE TABLE `foto` (
  `id` int(20) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `image` varchar(200) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `foto`
--

INSERT INTO `foto` (`id`, `nama`, `image`, `keterangan`) VALUES
(1, 'drum band', 'drumband.jpg', 'kegiatan dbbbb'),
(2, 'fls2n', 'fls2n.jpg', 'fls2n'),
(3, 'o2sn', 'o2sn.jpg', 'o2sn'),
(4, 'pramuka', 'pramuka.jpg', 'kegitan pramuka'),
(6, 'rini', '1611762772.jpg', 'db');

-- --------------------------------------------------------

--
-- Struktur dari tabel `fotokegiatan`
--

CREATE TABLE `fotokegiatan` (
  `id` int(11) NOT NULL,
  `id_foto` int(11) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `fotokegiatan`
--

INSERT INTO `fotokegiatan` (`id`, `id_foto`, `image`) VALUES
(2, 4, '1611763621.jpg'),
(7, 1, '1611993768.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `guru_staff`
--

CREATE TABLE `guru_staff` (
  `id` int(11) NOT NULL,
  `nama` varchar(500) NOT NULL,
  `lahir` varchar(200) NOT NULL,
  `nip` varchar(100) NOT NULL,
  `nuptk` varchar(100) NOT NULL,
  `image` varchar(200) NOT NULL,
  `kepsek` tinyint(1) NOT NULL,
  `guru` tinyint(1) NOT NULL,
  `staff` tinyint(1) NOT NULL,
  `bidang` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `guru_staff`
--

INSERT INTO `guru_staff` (`id`, `nama`, `lahir`, `nip`, `nuptk`, `image`, `kepsek`, `guru`, `staff`, `bidang`) VALUES
(1, 'ANDARININGSIH', 'KLATEN, 18-12-1964', '196412181983072001', '9550742643300013', 'kepsek.jpg', 1, 1, 0, ''),
(4, 'Rini Fajarwati, S.Kom', 'Tanjung Selor, 23 Maret 2000', '32323323232332332', '424244242442424242', 'rini.jpeg', 0, 0, 1, 'IT'),
(5, 'ririn Rini Fajarwati yaaaa', '23 maret 20000', '433284700285843', '324746643282', '1611476128.jpg', 0, 1, 0, 'IT'),
(6, 'Rini Fajar', '27 maret 2009', '196412181983078768', '23456789876543456789', '1611756903.jpg', 0, 0, 0, ''),
(7, 'Rini Fajarwatii', '27 maret 2009', '196412181983078768', '23456789876543456789', 'defaultimage.jpg', 0, 1, 0, ''),
(8, 'Haris', '27 maret 2009', '196412181983078768', '23456789876543456789', 'defaultimage.jpg', 0, 0, 1, 'IT');

-- --------------------------------------------------------

--
-- Struktur dari tabel `info`
--

CREATE TABLE `info` (
  `id` int(11) NOT NULL,
  `informasi` text NOT NULL,
  `tgl` varchar(200) NOT NULL,
  `jam` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `info`
--

INSERT INTO `info` (`id`, `informasi`, `tgl`, `jam`) VALUES
(2, 'pembagian rapot', 'senin, 22 maret 2020', '08.00-09.00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `prestasi`
--

CREATE TABLE `prestasi` (
  `id` int(11) NOT NULL,
  `image` varchar(200) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `kelas` varchar(20) NOT NULL,
  `jenis` varchar(200) NOT NULL,
  `tingkat` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `prestasi`
--

INSERT INTO `prestasi` (`id`, `image`, `nama`, `kelas`, `jenis`, `tingkat`) VALUES
(1, 'fls2n.jpg', 'Ana Distia', '4a', 'FLS2N', 'kecamatan'),
(3, '1611752378.jpg', 'Rini Fajarwati', 'V-C', 'fls2n', 'provinsi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sarana`
--

CREATE TABLE `sarana` (
  `id` int(11) NOT NULL,
  `nama_ruangan` varchar(50) NOT NULL,
  `jumlah_ruangan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `sarana`
--

INSERT INTO `sarana` (`id`, `nama_ruangan`, `jumlah_ruangan`) VALUES
(1, 'Ruang Kepala Sekolah', 12),
(2, 'Ruang Guru', 1),
(3, 'Ruang Kelas', 12),
(4, 'Ruang Perpustakaan', 1),
(6, 'Perpus', 4),
(7, 'PERPUS', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `video`
--

CREATE TABLE `video` (
  `id` int(11) NOT NULL,
  `link` text NOT NULL,
  `content` varchar(900) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `video`
--

INSERT INTO `video` (`id`, `link`, `content`) VALUES
(3, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/gdZLi9oWNZg\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'bts'),
(5, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/g5yEYuwMcJU\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'test'),
(6, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/UzKdy75GqXQ\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'semangat'),
(8, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/jNxUMRuCWMw\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'ashjdhjgddbdbshbdbhjdbbdbsihudfdbcbkxncsdhhsuhadjsddhbfhdbshbhbcbhhsbdbbkadbhdhhhdhdhdhhdadashjdhjgddbdbshbdbhjdbbdbsihudfdbcbkxncsdhhsuhadjsddhbfhdbshbhbcbhhsbdbbkadbhdhhhdhdhdhhdadashjdhjgddbdbshbdbhjdbbdbsihudfdbcbkxncsdhhsuhadjsddhbfhdbshbhbcbhhsbdbbkadbhdhhhdhdhdhhdadashjdhjgddbdbshbdbhjdbbdbsihudfdbcbkxncsdhhsuhadjsddhbfhdbshbhbcbhhsbdbbkadbhdhhhdhdhdhhdadRini'),
(10, '<iframe width=\"460\" height=\"315\" src=\"https://www.youtube.com/embed/UzKdy75GqXQ\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'bla');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `beritahome`
--
ALTER TABLE `beritahome`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `content`
--
ALTER TABLE `content`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `ekskul`
--
ALTER TABLE `ekskul`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `foto`
--
ALTER TABLE `foto`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `fotokegiatan`
--
ALTER TABLE `fotokegiatan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `guru_staff`
--
ALTER TABLE `guru_staff`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `prestasi`
--
ALTER TABLE `prestasi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `sarana`
--
ALTER TABLE `sarana`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `beritahome`
--
ALTER TABLE `beritahome`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `content`
--
ALTER TABLE `content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT untuk tabel `ekskul`
--
ALTER TABLE `ekskul`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `foto`
--
ALTER TABLE `foto`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `fotokegiatan`
--
ALTER TABLE `fotokegiatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `guru_staff`
--
ALTER TABLE `guru_staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `info`
--
ALTER TABLE `info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `prestasi`
--
ALTER TABLE `prestasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `sarana`
--
ALTER TABLE `sarana`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `video`
--
ALTER TABLE `video`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
