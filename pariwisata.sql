-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 23, 2017 at 12:23 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pariwisata`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(2) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  `fullname` varchar(30) NOT NULL,
  `no_hp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `fullname`, `no_hp`) VALUES
(1, 'admin', 'admin', 'Deli Mutiara', '085272249830'),
(2, 'user', 'user', 'user', '08xxx');

-- --------------------------------------------------------

--
-- Table structure for table `wisata`
--

CREATE TABLE `wisata` (
  `id_wisata` int(10) NOT NULL,
  `nama_wisata` varchar(50) NOT NULL,
  `kategori` varchar(30) NOT NULL,
  `lokasi` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `tgl_upload` date NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wisata`
--

INSERT INTO `wisata` (`id_wisata`, `nama_wisata`, `kategori`, `lokasi`, `deskripsi`, `tgl_upload`, `gambar`) VALUES
(1, 'Pantai Marina', 'Wisata Umum', 'Marina City', 'Lokasi Pantai Indah di kawasan Marina City', '2017-07-22', 'gambar/Pantai Marina.jpg'),
(2, 'Jembatan Barelang', 'Umum', 'Barelang', 'Jembatan Barelang Icon Kota Batam', '2017-07-19', 'gambar/Jembatan Barelang.jpg'),
(3, 'Pantai Nongsa', 'Pantai', 'Nongsa', 'Pantai di Kawasan Kecamatan Nongsa	', '2017-07-19', 'gambar/Pantai Nongsa.jpg'),
(4, 'Morning Bakery Greendland', 'Wisata Umum', 'Batam Center Greendland', 'Morning Bakery Greendland Batam Center...\r\nSile Mampir...', '2017-07-21', 'gambar/6.jpg'),
(5, 'Kampung Vietnam', 'Wisata Alam', 'Barelang Jembatan 5', 'Wisata Umum Kampung Vietnam, sejarah Penindasan Warga Vietnam dan Pindah Ke Kota Batam', '2017-07-21', 'gambar/6. Kampung Vietnam.jpg'),
(6, 'Pantai Tanjung Bemban', 'Wisata Alam', 'Tanjung Bemban, Nongsa', 'Wisata Pantai Tg.Bemban Nongsa....', '2017-07-21', 'gambar/10. Pantai Tanjung Bemban.jpg'),
(7, 'Bukit Senyum', 'Wisata Religi', 'Bukit Senyum Jodoh', 'Bukit Senyum Jodoh...', '2017-07-21', 'gambar/7. Bukit Senyum.jpg'),
(8, 'Pantai Melayu', 'Wisata Alam', 'Barelang Jembatan 4', 'Pantai Melayu Barelang', '2017-07-21', 'gambar/9. Pantai Melayu.jpg'),
(9, 'Pantai Melur', 'Wisata Alam', 'Batam', 'Pantai Melur merupakan salah satu destinasi wisata pantai yang cocok sekali untuk para wisatawan yang membutuhkan refreshing atau suasana pantai yang cukup tenang. Pantai melur ini ukurannya tidak terlalu luas namun garis pantainya sangat indah. Pasir pantainya berwarna putih bersih dan air lautnya juga jernih. Para wisatawan dapat berenang dan bermain air di bibir pantai ini. Jarak pandang lautnya Pantai Melur cukup luas serta di sepanjang pesisir pantai dikelilingi oleh pepohonan hijau yang rindang.', '2017-07-22', 'gambar/Pantai-Melur.jpg'),
(10, 'Pantai Sekilak', 'Wisata Alam', 'Batam', 'Pantai Sekikak ini berada di sebelah timur Kota Batam, untuk dapat menuju lokasi Pantai Sekikak ini harus menempuk jalur darat sejauh 5 km dari Bandara Internasional Hang Nadim dan apabila dari Pelabuhan Laut Batam Centre maka perlu menemouh jarak sejauh 8 km. Pantai Sekilak jika dibandingkan dengan pantai  pantai yang ada di Batam cukup berbeda. Hal ini dikarenakan di Pantai Sekilak terdapat banyak bebatuan dan tebing yang mengelilingi kawasan pantai tersebut.', '2017-07-22', 'gambar/Pantai-Sekilak.jpg'),
(11, 'Pantai Setokok', 'Wisata Alam', 'Batam', 'Pantai Setokok ini berada di Pulau Setokok yang merupakan sebuah pulau dari gugusan pulau Trans Barelang yang dihubungkan oleh Jembatan Barelang. Dari jembatan Balerang cukup menempuh jarak sejauh 1 km, lalu belok ke kanan mengikuti jalan kecil yang beraspal, berkelok â€“ kelok dan berbukit sejauh 2 km kemudian sampailah di Pantai Setokok. Pantai Setokok memiliki jenis pasir pantai yang putih dan lembut, air lautnya berwarna biru serta dari Pantai Setokok ini para wisatawan bisa menikmati pemandangan laut lepas dengan dihiasi oleh hijaunya pulau kecil yang bertebaran di sekitar Pantai Setokok. Bnayak wisatawan yang berenang, bermain air, atau sekedar bersantai di area Pantai Setokok ini.', '2017-07-22', 'gambar/Pantai-Setokok.jpg'),
(12, 'Pantai Pulan Abang', 'Wisata Alam', 'Batam', 'Pulau Abang merupakan salah satu lokasi wisata laut terbaik yang dikembangkan oleh pemerintah Kota Batam. Pantai di Pulau Abang sangatlah indah dengan menawarkan potensi keindahan taman bawah lautnya dan terumbu karang. Pulau Abang adalah sebuah pulau kecil yang berada di sebelah selatan Kota Batam, Kepulauan Riau.\r\nUntuk menuju lokasi Pantai Pulau Abang, para wisatawan dapat menumpang perahu bot (bot pompong) dari Jembatan 6 Barelang menuju Pulau Abang. Kawasan Pulau Abang ini sering dijadikan sebagai destinasi wisata bawah air bagi para pecinta snorkling dan diving. Selain itu Anda juga bisa berenang dan bermain air di sekitar pesisir pantai tersebut.', '2017-07-22', 'gambar/Pulau-Abang.jpg'),
(13, 'Ocarina Costarina Batam', 'Wisata Alam', 'Batam', 'Ocarina Coastarina Batam merupakan kawasan wisata terpadu yang ada di Batam, dimana areanya hampir serupa dengan Ancol yang ada di Jakarta. Lokasi dari Ocarina Coastarina Batam ini berada di seberang Terminal Ferry Internasional Batam Centre. Di area yang satu ini selain dapat menikmati suasana keindahan pantainya, para wisatawan juga dapat mencoba berbagai wahana permainan yang tersedia seperti Giant Wheel, Trampoline, Flying Fox, Air Bike, Water Boom, dan lainnya. Fasilitas publik di Ocarina Coastarina Batam ini sangat lengkap untuk memenuhi kebutuhan para pengunjungnya.', '2017-07-22', 'gambar/Coastarina-Batam.jpg'),
(14, 'Pantai Tanjung Pinggir', 'Wisata Alam', 'Batam', 'Pantai Tanjung Pinggir ini terletak di daerah Sekupang yang lokasinya tidak jauh dari pusat Kota Batam. Untuk mencapai lokasi Pantai Tanjung Pinggir ini cukup menempuh perjalanan darat selama 10 menit saja dari Sekupang. Pantai Tanjung Pinggir ini juga berada di dekat resort bernama KTM Resort yang menawarkan privasi untuk para pengunjungnya untuk menikmati pemandangan laut yang menawan.\r\n\r\nPantai Tanjung Pasir ini memiliki pasir pantai yang berwarna putih dan kondisi air lautnya juga jernih, cocok sekali untuk berenang. Selain itu Pantai Tanjung Pinggir termasuk spot terbaik untuk menikmati sunset serta pada saat cuaca cerah, para wsatawan dapat melihat wilayah Singapura yang memiliki banyak gedung bertingkat dari Pantai Tanjung Pinggir .', '2017-07-22', 'gambar/Pantai-Tanjung-Pinggir.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `wisata`
--
ALTER TABLE `wisata`
  ADD PRIMARY KEY (`id_wisata`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `wisata`
--
ALTER TABLE `wisata`
  MODIFY `id_wisata` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
