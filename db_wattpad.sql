-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Des 2018 pada 07.13
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_wattpad`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `cerita`
--

CREATE TABLE `cerita` (
  `ID_CERITA` int(11) NOT NULL,
  `EMAIL` varchar(100) DEFAULT NULL,
  `JUDUL` varchar(100) DEFAULT NULL,
  `GAMBAR` varchar(500) NOT NULL,
  `SINOPSIS` varchar(10000) NOT NULL,
  `VIEW` int(11) DEFAULT '0',
  `TGL_POST` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `STATUS` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `cerita`
--

INSERT INTO `cerita` (`ID_CERITA`, `EMAIL`, `JUDUL`, `GAMBAR`, `SINOPSIS`, `VIEW`, `TGL_POST`, `STATUS`) VALUES
(1, 'rezaariestyaputra@yahoo.co.id', 'Sunny Dayss', 'Screenshot (5).png', 'Kepada cahaya matahari yang mengisi hari, terima kasih sudah hadir.', 0, '2018-12-16 04:33:43', 2),
(2, 'rezaariestyaputra@yahoo.co.id', 'Hello Goodbye', 'Screenshot (3).png', 'When you say hello, are you ready to say goodbye?', 0, '2018-12-16 04:33:51', 1),
(3, 'rezaariestyaputra@yahoo.co.id', 'Sunny Dayss', 'Screenshot (5).png', 'Kepada cahaya matahari yang mengisi hari, terima kasih sudah hadir.', 0, '2018-12-16 04:33:43', 2),
(4, 'rezaariestyaputra@yahoo.co.id', 'Hello Goodbye', 'Screenshot (3).png', 'When you say hello, are you ready to say goodbye?', 0, '2018-12-16 04:33:51', 1),
(5, 'rezaariestyaputra@yahoo.co.id', 'Sunny Dayss', 'Screenshot (5).png', 'Kepada cahaya matahari yang mengisi hari, terima kasih sudah hadir.', 0, '2018-12-16 04:33:43', 2),
(6, 'rezaariestyaputra@yahoo.co.id', 'Hello Goodbye', 'Screenshot (3).png', 'When you say hello, are you ready to say goodbye?', 0, '2018-12-16 04:33:51', 1),
(7, 'rezaariestyaputra@yahoo.co.id', 'Sunny Dayss', 'Screenshot (5).png', 'Kepada cahaya matahari yang mengisi hari, terima kasih sudah hadir.', 0, '2018-12-16 04:33:43', 2),
(8, 'rezaariestyaputra@yahoo.co.id', 'Hello Goodbye', 'Screenshot (3).png', 'When you say hello, are you ready to say goodbye?', 0, '2018-12-16 04:33:51', 1),
(9, 'rezaariestyaputra@yahoo.co.id', 'Sunny Dayss', 'Screenshot (5).png', 'Kepada cahaya matahari yang mengisi hari, terima kasih sudah hadir.', 0, '2018-12-16 04:33:43', 2),
(10, 'rezaariestyaputra@yahoo.co.id', 'Hello Goodbye', 'Screenshot (3).png', 'When you say hello, are you ready to say goodbye?', 0, '2018-12-16 04:33:51', 1),
(11, 'rezaariestyaputra@yahoo.co.id', 'Sunny Dayss', 'Screenshot (5).png', 'Kepada cahaya matahari yang mengisi hari, terima kasih sudah hadir.', 0, '2018-12-16 04:33:43', 2),
(12, 'rezaariestyaputra@yahoo.co.id', 'Hello Goodbye', 'Screenshot (3).png', 'When you say hello, are you ready to say goodbye?', 0, '2018-12-16 04:33:51', 1),
(13, 'rezaariestyaputra@yahoo.co.id', 'Sunny Dayss', 'Screenshot (5).png', 'Kepada cahaya matahari yang mengisi hari, terima kasih sudah hadir.', 0, '2018-12-16 04:33:43', 2),
(14, 'rezaariestyaputra@yahoo.co.id', 'Hello Goodbye', 'Screenshot (3).png', 'When you say hello, are you ready to say goodbye?', 0, '2018-12-16 04:33:51', 1),
(15, 'rezaariestyaputra@yahoo.co.id', 'Sunny Dayss', 'Screenshot (5).png', 'Kepada cahaya matahari yang mengisi hari, terima kasih sudah hadir.', 0, '2018-12-16 04:33:43', 2),
(16, 'rezaariestyaputra@yahoo.co.id', 'Hello Dangdut', 'Screenshot (3).png', 'When you say hello, are you ready to say goodbye?', 0, '2018-12-16 05:24:45', 1),
(17, 'rezaariestyaputra@yahoo.co.id', 'Sunny Dayss', 'Screenshot (5).png', 'Kepada cahaya matahari yang mengisi hari, terima kasih sudah hadir.', 0, '2018-12-16 04:33:43', 2),
(18, 'rezaariestyaputra@yahoo.co.id', 'Hello Goodbye', 'Screenshot (3).png', 'When you say hello, are you ready to say goodbye?', 0, '2018-12-16 04:33:51', 1),
(19, 'rezaariestyaputra@yahoo.co.id', 'Sunny Dayss', 'Screenshot (5).png', 'Kepada cahaya matahari yang mengisi hari, terima kasih sudah hadir.', 0, '2018-12-16 04:33:43', 2),
(20, 'rezaariestyaputra@yahoo.co.id', 'Hello Goodbye', 'Screenshot (3).png', 'When you say hello, are you ready to say goodbye?', 0, '2018-12-16 04:33:51', 1),
(21, 'rezaariestyaputra@yahoo.co.id', 'Sunny Dayss', 'Screenshot (5).png', 'Kepada cahaya matahari yang mengisi hari, terima kasih sudah hadir.', 0, '2018-12-16 04:33:43', 2),
(22, 'rezaariestyaputra@yahoo.co.id', 'Hello Goodbye', 'Screenshot (3).png', 'When you say hello, are you ready to say goodbye?', 0, '2018-12-16 04:33:51', 1),
(23, 'rezaariestyaputra@yahoo.co.id', 'Sunny Dayss', 'Screenshot (5).png', 'Kepada cahaya matahari yang mengisi hari, terima kasih sudah hadir.', 0, '2018-12-16 04:33:43', 2),
(24, 'rezaariestyaputra@yahoo.co.id', 'Hello Goodbye', 'Screenshot (3).png', 'When you say hello, are you ready to say goodbye?', 0, '2018-12-16 04:33:51', 1),
(25, 'rezaariestyaputra@yahoo.co.id', 'Sunny Dayss', 'Screenshot (5).png', 'Kepada cahaya matahari yang mengisi hari, terima kasih sudah hadir.', 0, '2018-12-16 04:33:43', 2),
(26, 'rezaariestyaputra@yahoo.co.id', 'Hello Goodbye', 'Screenshot (3).png', 'When you say hello, are you ready to say goodbye?', 0, '2018-12-16 04:33:51', 1),
(27, 'rezaariestyaputra@yahoo.co.id', 'Sunny Dayss', 'Screenshot (5).png', 'Kepada cahaya matahari yang mengisi hari, terima kasih sudah hadir.', 0, '2018-12-16 04:33:43', 2),
(28, 'rezaariestyaputra@yahoo.co.id', 'Hello Goodbye', 'Screenshot (3).png', 'When you say hello, are you ready to say goodbye?', 0, '2018-12-16 04:33:51', 1),
(29, 'rezaariestyaputra@yahoo.co.id', 'Sunny Dayss', 'Screenshot (5).png', 'Kepada cahaya matahari yang mengisi hari, terima kasih sudah hadir.', 0, '2018-12-16 04:33:43', 2),
(30, 'rezaariestyaputra@yahoo.co.id', 'Hello Goodbye', 'Screenshot (3).png', 'When you say hello, are you ready to say goodbye?', 0, '2018-12-16 04:33:51', 1),
(31, 'rezaariestyaputra@yahoo.co.id', 'Sunny Dayss', 'Screenshot (5).png', 'Kepada cahaya matahari yang mengisi hari, terima kasih sudah hadir.', 0, '2018-12-16 04:33:43', 2),
(32, 'rezaariestyaputra@yahoo.co.id', 'Hello Dangdut', 'Screenshot (3).png', 'When you say hello, are you ready to say goodbye?', 0, '2018-12-16 05:24:45', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `cerita_genre`
--

CREATE TABLE `cerita_genre` (
  `ID_CERITA_GENRE` int(11) NOT NULL,
  `ID_CERITA` int(11) NOT NULL,
  `ID_GENRE` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `cerita_genre`
--

INSERT INTO `cerita_genre` (`ID_CERITA_GENRE`, `ID_CERITA`, `ID_GENRE`) VALUES
(64, 2, 1),
(65, 2, 2),
(66, 2, 13),
(67, 2, 14),
(83, 1, 13),
(84, 1, 14),
(85, 1, 15);

-- --------------------------------------------------------

--
-- Struktur dari tabel `genre`
--

CREATE TABLE `genre` (
  `ID_GENRE` int(11) NOT NULL,
  `GENRE` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `genre`
--

INSERT INTO `genre` (`ID_GENRE`, `GENRE`) VALUES
(1, 'Misteri'),
(2, 'Horor'),
(3, 'Petualangan'),
(4, 'Drama'),
(5, 'Fiksi'),
(6, 'Dewasa'),
(7, 'Songlit'),
(8, 'Metropop'),
(9, 'Chicklit'),
(10, 'Teenlit'),
(11, 'Sejarah'),
(12, 'Fan-Fic'),
(13, 'Sci-Fi'),
(14, 'Humor'),
(15, 'Romantis');

-- --------------------------------------------------------

--
-- Struktur dari tabel `subcerita`
--

CREATE TABLE `subcerita` (
  `ID_SUBCERITA` int(11) NOT NULL,
  `ID_CERITA` int(11) DEFAULT NULL,
  `JUDUL_SUBCERITA` varchar(500) NOT NULL,
  `ISI_CERITA` varchar(10000) DEFAULT NULL,
  `STATUS_SUBCERITA` int(1) NOT NULL,
  `TGL_POST` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `subcerita`
--

INSERT INTO `subcerita` (`ID_SUBCERITA`, `ID_CERITA`, `JUDUL_SUBCERITA`, `ISI_CERITA`, `STATUS_SUBCERITA`, `TGL_POST`) VALUES
(2, 1, 'Satu', 'Kiara Nadila, semua orang memanggilnya Kia, dan dia memaksa untuk hanya dipanggil itu. Perempuan dengan rambut hitam sebahu, dan tidak pernah absen mengenakan <i>turtle neck</i> hitam, kamu tidak akan bisa menghitung jumlah <i>turtle neck</i> hitamnya. Banyak sekali, cukup banyak untuk dijadikan persediaan selama sebulan tanpa laundry. Akibatnya dia hampir dianggap tidak pernah ganti baju oleh orang-orang sekitarnya.', 0, '2018-12-15 16:05:09'),
(6, 2, 'Prolog', '123', 1, '2018-12-16 04:15:45'),
(12, 2, 'Satu', 'Isi', 1, '2018-12-16 04:15:32');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `EMAIL` varchar(100) NOT NULL,
  `ID_LEVEL` int(11) DEFAULT NULL,
  `NAMA` varchar(100) DEFAULT NULL,
  `TGL_LAHIR` date DEFAULT NULL,
  `JENIS_KELAMIN` varchar(1) DEFAULT NULL,
  `PASSWORD` varchar(20) DEFAULT NULL,
  `SIGNUP_DATE` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`EMAIL`, `ID_LEVEL`, `NAMA`, `TGL_LAHIR`, `JENIS_KELAMIN`, `PASSWORD`, `SIGNUP_DATE`) VALUES
('rezaariestyaputra@gmail.com', 1, 'Reza Ariestya Putra', '1998-04-19', 'L', '12345678', '2018-12-14 08:28:15'),
('rezaariestyaputra@yahoo.co.id', 2, 'Aries', '1998-04-19', 'L', '12345678', '2018-12-14 08:28:34');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_level`
--

CREATE TABLE `user_level` (
  `ID_LEVEL` int(11) NOT NULL,
  `KETERANGAN` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_level`
--

INSERT INTO `user_level` (`ID_LEVEL`, `KETERANGAN`) VALUES
(1, 'admin'),
(2, 'user');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `cerita`
--
ALTER TABLE `cerita`
  ADD PRIMARY KEY (`ID_CERITA`),
  ADD KEY `FK_RELATIONSHIP_3` (`EMAIL`);

--
-- Indeks untuk tabel `cerita_genre`
--
ALTER TABLE `cerita_genre`
  ADD PRIMARY KEY (`ID_CERITA_GENRE`),
  ADD KEY `FK_RELATIONSHIP_4` (`ID_CERITA`),
  ADD KEY `FK_RELATIONSHIP_5` (`ID_GENRE`);

--
-- Indeks untuk tabel `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`ID_GENRE`);

--
-- Indeks untuk tabel `subcerita`
--
ALTER TABLE `subcerita`
  ADD PRIMARY KEY (`ID_SUBCERITA`),
  ADD KEY `FK_RELATIONSHIP_2` (`ID_CERITA`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`EMAIL`),
  ADD KEY `FK_RELATIONSHIP_1` (`ID_LEVEL`);

--
-- Indeks untuk tabel `user_level`
--
ALTER TABLE `user_level`
  ADD PRIMARY KEY (`ID_LEVEL`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `cerita`
--
ALTER TABLE `cerita`
  MODIFY `ID_CERITA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT untuk tabel `cerita_genre`
--
ALTER TABLE `cerita_genre`
  MODIFY `ID_CERITA_GENRE` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT untuk tabel `genre`
--
ALTER TABLE `genre`
  MODIFY `ID_GENRE` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `subcerita`
--
ALTER TABLE `subcerita`
  MODIFY `ID_SUBCERITA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `user_level`
--
ALTER TABLE `user_level`
  MODIFY `ID_LEVEL` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `cerita`
--
ALTER TABLE `cerita`
  ADD CONSTRAINT `FK_RELATIONSHIP_3` FOREIGN KEY (`EMAIL`) REFERENCES `user` (`EMAIL`);

--
-- Ketidakleluasaan untuk tabel `cerita_genre`
--
ALTER TABLE `cerita_genre`
  ADD CONSTRAINT `FK_RELATIONSHIP_4` FOREIGN KEY (`ID_CERITA`) REFERENCES `cerita` (`ID_CERITA`),
  ADD CONSTRAINT `FK_RELATIONSHIP_5` FOREIGN KEY (`ID_GENRE`) REFERENCES `genre` (`ID_GENRE`);

--
-- Ketidakleluasaan untuk tabel `subcerita`
--
ALTER TABLE `subcerita`
  ADD CONSTRAINT `FK_RELATIONSHIP_2` FOREIGN KEY (`ID_CERITA`) REFERENCES `cerita` (`ID_CERITA`);

--
-- Ketidakleluasaan untuk tabel `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `FK_RELATIONSHIP_1` FOREIGN KEY (`ID_LEVEL`) REFERENCES `user_level` (`ID_LEVEL`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
