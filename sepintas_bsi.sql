-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Jun 2022 pada 15.49
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sepintas_bsi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `artikel`
--

CREATE TABLE `artikel` (
  `artikel_id` int(11) NOT NULL,
  `artikel_tanggal` datetime NOT NULL,
  `artikel_judul` varchar(255) NOT NULL,
  `artikel_slug` varchar(255) NOT NULL,
  `artikel_konten` longtext NOT NULL,
  `artikel_sampul` varchar(255) NOT NULL,
  `artikel_author` int(11) NOT NULL,
  `artikel_kategori` int(11) NOT NULL,
  `artikel_status` enum('publish','draft') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `artikel`
--

INSERT INTO `artikel` (`artikel_id`, `artikel_tanggal`, `artikel_judul`, `artikel_slug`, `artikel_konten`, `artikel_sampul`, `artikel_author`, `artikel_kategori`, `artikel_status`) VALUES
(15, '2022-06-07 10:18:42', 'Voyager Sudah melewati Ort cloud', 'voyager-sudah-melewati-ort-cloud', 'Saat ini Voyager I sudah melewati dan keluar dari batas tata surya . <br>\r\nberjarak 23 miliar kilometer dari bumi dan terus menjauh dari tata surya, <br>\r\nmeskipun sinyal dari Voyager I bergerak dengan kecepatan cahaya mereka masih<br>\r\nmembutuhkan waktu lebih dari 21 jam untuk mencapai bumi.', 'voyager-043.jpg', 1, 18, 'publish'),
(16, '2022-06-10 13:24:46', 'NASA Pamerkan Hasil Foto Canggih Teleskop James Webb', 'nasa-pamerkan-hasil-foto-canggih-teleskop-james-webb', '  Teleskop james webb adalah teleskop tercanggih bahkan lebih canggih dari Teleskop Hubble', 'tele-james-webb.png', 1, 18, 'publish');

-- --------------------------------------------------------

--
-- Struktur dari tabel `halaman`
--

CREATE TABLE `halaman` (
  `halaman_id` int(11) NOT NULL,
  `halaman_judul` varchar(255) NOT NULL,
  `halaman_slug` varchar(255) NOT NULL,
  `halaman_konten` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `halaman`
--

INSERT INTO `halaman` (`halaman_id`, `halaman_judul`, `halaman_slug`, `halaman_konten`) VALUES
(8, 'Kontak-kami', 'kontak-kami', '   Hubungi Kami '),
(9, 'Tentang', 'tentang', '   <h6> Kami adalah mahasiswa Universitas Bina Sarana Informatika jurusan Teknologi Informasi  yang membuat program berbasis web ini <br>\r\ndalam rangka menyelsaikan tugas akhir projek mata kuliah <b>Web Programming 2</b>.</h6>  <br>\r\nKelompok kami terdiri dari 5 orang yaitu : <br>\r\n1. Agung Maulana NIM 17190122 (Ketua Kelompok)<br>\r\n2. Muhammad Riko NIM 17190137<br>\r\n3. Dadang Irawan NIM 17190131<br>\r\n4. Adi Prabowo Kusumo NIM 17190028<br>\r\n5. Fadlul Iman NIM 17190008<br>\r\n\r\nDan kami ucapkan banyak terimakasih kepada Ibu Monikka Nur Winnarto, M.Kom selaku Dosen Matakuliah Web Programing 2<br>\r\n yang telah membimbing dan memberikan ilmu nya kepada kami sehingga kami bisa menyelesaikan tugas projek ini<br>\r\nTerima Kasih.\r\n'),
(10, 'Layanan', 'layanan', '   <h5> Layanan berita yang kami tawarkan yaitu seputar Teknologi dan Alam semesta yang berasal dari dalam negeri maupun luar negeri berdasarkan kategori di antaranya  : <br></h5>\r\n<h5>\r\n1. Teknologi<br>\r\n2. Astronomi<br>\r\n3. Sains<br>\r\n4. Gunung<br>\r\n5.  Laut  </h5>');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `kategori_id` int(11) NOT NULL,
  `kategori_nama` varchar(255) NOT NULL,
  `kategori_slug` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`kategori_id`, `kategori_nama`, `kategori_slug`) VALUES
(18, 'Teknologi', 'teknologi'),
(19, 'Astronomi', 'astronomi'),
(20, 'Sains', 'sains'),
(21, 'Gunung', 'gunung'),
(22, 'Laut', 'laut');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengaturan`
--

CREATE TABLE `pengaturan` (
  `nama` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `logo` varchar(255) NOT NULL,
  `link_github` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `pengaturan`
--

INSERT INTO `pengaturan` (`nama`, `deskripsi`, `logo`, `link_github`) VALUES
('Sepintas', 'Seputar Informasi Teknologi dan Alam Semesta', 'favicon.png', 'https://github.com/Gungzilla16/');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengguna`
--

CREATE TABLE `pengguna` (
  `pengguna_id` int(11) NOT NULL,
  `pengguna_nama` varchar(50) NOT NULL,
  `pengguna_email` varchar(255) NOT NULL,
  `pengguna_username` varchar(50) NOT NULL,
  `pengguna_password` varchar(255) NOT NULL,
  `pengguna_level` enum('admin','penulis') NOT NULL,
  `pengguna_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `pengguna`
--

INSERT INTO `pengguna` (`pengguna_id`, `pengguna_nama`, `pengguna_email`, `pengguna_username`, `pengguna_password`, `pengguna_level`, `pengguna_status`) VALUES
(1, 'Agung Maulana', 'juniorgung16@gmail.com', 'juniorgung', 'e10adc3949ba59abbe56e057f20f883e', 'admin', 1),
(2, 'Penulis', 'penulis@gmail.com', 'penulis', 'de3709b8e6f81a4ef5a858b7a2d28883', 'penulis', 1),
(5, 'Adi Prabowo Kusumo', 'adikusumo123@gmail.com', 'adikusumo', 'eba89f0a5d8db1a48fe760548c0c0dae', 'penulis', 1),
(11, 'Ade Nurcholisa', 'adenurcholisa@gmail.com', 'adenurhalisa', '25d55ad283aa400af464c76d713c07ad', 'penulis', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`artikel_id`),
  ADD KEY `artikel_kategori` (`artikel_kategori`),
  ADD KEY `artikel_kategori_2` (`artikel_kategori`),
  ADD KEY `artikel_slug` (`artikel_slug`);

--
-- Indeks untuk tabel `halaman`
--
ALTER TABLE `halaman`
  ADD PRIMARY KEY (`halaman_id`),
  ADD KEY `halaman_slug` (`halaman_slug`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`kategori_id`),
  ADD UNIQUE KEY `kategori_slug` (`kategori_slug`);

--
-- Indeks untuk tabel `pengaturan`
--
ALTER TABLE `pengaturan`
  ADD KEY `nama` (`nama`),
  ADD KEY `nama_2` (`nama`);

--
-- Indeks untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`pengguna_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `artikel`
--
ALTER TABLE `artikel`
  MODIFY `artikel_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `halaman`
--
ALTER TABLE `halaman`
  MODIFY `halaman_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `kategori_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `pengguna_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `artikel`
--
ALTER TABLE `artikel`
  ADD CONSTRAINT `artikel_ibfk_1` FOREIGN KEY (`artikel_kategori`) REFERENCES `kategori` (`kategori_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
