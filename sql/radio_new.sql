-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 08, 2020 at 12:30 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `radio_new`
--

-- --------------------------------------------------------

--
-- Table structure for table `dj`
--

CREATE TABLE `dj` (
  `id` int(11) NOT NULL,
  `nama_dj` varchar(255) NOT NULL,
  `quote` text NOT NULL,
  `foto` varchar(255) NOT NULL,
  `is_active` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dj`
--

INSERT INTO `dj` (`id`, `nama_dj`, `quote`, `foto`, `is_active`) VALUES
(1, 'Dj Aries', 'Hadiahkan dirimu dengan semangat maju', 'dj_1583596787.jpg', 1),
(2, 'DJ Alex', 'Catch Them All', 'dj_1583598682.jpg', 1),
(3, 'DJ Low', 'Shawty had them Apple Bottom Jeans', 'dj_1583598784.jpg', 1),
(4, 'Sir Loin', 'Steak never flat', 'dj_1583599114.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id` int(11) NOT NULL,
  `nama_event` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `lokasi` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `waktu_mulai` date NOT NULL,
  `waktu_selesai` date NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `is_active` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `nama_event`, `foto`, `lokasi`, `deskripsi`, `waktu_mulai`, `waktu_selesai`, `date_created`, `is_active`) VALUES
(1, 'Venus Beauty Class', 'event_1583602405.jpg', 'SMA Keuangan, Jl. Tuanku Tambusai, Pekanbaru', 'Sobat sebaya, yuk ikutan Beauty Class bersama Venus Cosmetic!', '0000-00-00', '0000-00-00', '0000-00-00 00:00:00', 1),
(2, 'Kualifikasi OFFLINE FIFA KICKOFF & eFootball PES', 'event_1583600046.jpg', 'Gress FM', 'Kualifikasi OFFLINE FIFA KICKOFF & eFootball PES Week 6 telah DIBUKA. Buat kalian yang belum daftar langsung saja melakukan pendaftaran melalui IGL apps, yang bisa kalian download di playstore ataupun appstore.\r\nJadi, jangan sampai kalian kelewatan untuk bisa mendapatkan total hadiah sebesar 260 Juta Rupiah, karena slot untuk Kualifikasi OFFLINE Week 1 ini terbatas.\r\nUntuk berbagai informasi mengenai Indonesia Gaming League Season 2 bisa langsung follow sosial media IGL atau kontak langsung cp yang tertera diatas.', '0000-00-00', '0000-00-00', '0000-00-00 00:00:00', 1),
(3, 'CARFEST 3 PEKANBARU The Prestigious Carshow in Town!', 'event_1583600142.jpg', 'Pekanbaru Convention & Exhibition (SKA CoEx)', 'CARFEST 3 PEKANBARU\r\nThe Prestigious Carshow in Town!\r\nCarfest goes to IMX 2020 Jakarta at Pekanbaru Convention & Exhibition (SKA CoEx)\r\n•\r\n14 Maret 2020. Save the date!\r\n•\r\ncar contest and automotive expo :\r\n-Golden Ticket goes to IMX Jakarta\r\n-Top 5 Propper Award by NMAA\r\n-80+ Category\r\n-NMAA Trending Workshop.\r\n•\r\nJoint with us. Feel the vibes. Enjoy..\r\n•\r\nofficial supporting by @gress1058fm\r\nofficial media by @buildndrive .\r\n•\r\nInformation & registration:\r\n0812-6195-0110', '0000-00-00', '0000-00-00', '0000-00-00 00:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE `galeri` (
  `id_galeri` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `galeri`
--

INSERT INTO `galeri` (`id_galeri`, `judul`, `foto`, `tanggal`) VALUES
(1, 'Music', 'galeri_1583622481.png', '0000-00-00'),
(2, 'Music', 'galeri_1583622495.png', '0000-00-00'),
(3, 'Music', 'galeri_1583622507.png', '0000-00-00'),
(4, 'Event', 'galeri_1583622524.png', '0000-00-00'),
(5, 'Event', 'galeri_1583622538.png', '0000-00-00'),
(6, 'Event', 'galeri_1583622549.png', '0000-00-00'),
(7, 'Event', 'galeri_1583622564.png', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id_news` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `berita` text NOT NULL,
  `tanggal` datetime DEFAULT CURRENT_TIMESTAMP,
  `kategori` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id_news`, `judul`, `foto`, `berita`, `tanggal`, `kategori`) VALUES
(4, 'Kemeriahan Unstoppable Music Bersama Sheila On 7 Menjadi Rangkaian Anniversary FWD Life ke 7', 'news_1583603390.jpg', 'Liputan6.com, Jakarta FWD Unstoppable Music merupakan bagian dari kampanye FWD Life Unstoppable Passion yang bertujuan untuk memperkenalkan asuransi kepada masyarakat luas melalui pendekatan passion.  \"Melalui pendekatan passion, FWD Life ingin mengubah cara pandang masyarakat tentang berasuransi. Bahwa asuransi tidak menakutkan. Melihat asuransi dari sudut pandang yang berbeda sesuai passion masing-masing, salah satunya musik,\" ujar Maika Randini, Chief Marketing Officer FWD Life saat membuka acara FWD Unstoppable Music yang dimeriahkan oleh Sheila On 7. Perayaan Anniversary atau ulang tahun memang pas sekali diisi dengan hiburan musik. Orang-orang bisa bernyanyi, berjoget dan bahagia bersama sambil menyalurkan passionnya. Merayakan hari jadi yang ke-7, FWD Life Indonesia kembali menghadirkan Unstoppable Music dengan bintang utama Sheila On 7.  Hampir satu jam lamanya, Sheila On 7 menghibur para Passionate People. Total ada 10 lagu-lagu hits dan nostalgia dibawakan Duta cs. Mulai dari \'Bila Kau Tak Disampingku\', \'Seberapa Pantas\', \'Kita\'. Tanpa komando para passionate people pun kompak bernyanyi.  ', '0000-00-00 00:00:00', 'Band'),
(5, 'Virus Corona Mewabah, 3 Jadwal Konser J-Rocks Dibatalkan', 'news_1583603471.jpg', 'Liputan6.com, Jakarta - Sebagai langkah preventif pernyebaran virus Corona, sejumlah acara musik dibatalkan. Tak terkecuali acara musik off air yang akan digelar oleh J-Rocks dalam waktu dekat.  Menurut Swara Wimayoga atau Wima sang bassist, ada sekitar tiga acara musik J-Rocks yang dibatalkan, menyusul dengan pemberitaan masuknya wabah virus Corona di Indonesia. \"Iya ada tiga kota di Sulawesi.Tiga hari berturut-turut, gara-gara sejak berita kemarin (soal virus Corona) langsung dikasih tahu (kalau batal),\" kata Wima, di kawasan Kemang, Jakarta Selatan, Selasa (3/3/2020).  Meski menyayangkan, namun Wima sangat memahami bahwa pembatalan ini adalah keputusan terbaik untuk melindungi banyak orang agar tak terdampak virus Corona.', '0000-00-00 00:00:00', 'Virus'),
(6, 'Menang Indonesian Idol X, Lyodra Ginting Optimis di Dunia Musik', 'news_1583604393.jpg', 'JAKARTA - Lyodra Ginting tengah menjadi sorotan publik usai menjadi juara di Indonesian Idol X. Kini, ia mengaku sering mendapat ujaran kebencian dari netizen.  \"Aku lagi mengalami masa-masa dibenci, dijuluki apa-apa lah,\" ungkap Lyodra saat ditemui di MNC Studios, Kebon Jeruk, Jakarta Barat pada Rabu (4/3/2020).  Menurut Lyodra, komentar paling kejam yang pernah ia temui adalah ketika netizen mengingatkannya soal kutukan sebagai pemenang Indonesian Idol. Ia heran mengapa warganet bisa berpikiran seperti itu.  \"Yang ganjil buat aku (komentar) \'kutukan sebagai juara satu\'. Aku enggak tahu netizen mikir sampai segitunya,\" tuturnya. Kendati demikian, Lyodra tetap optimis dengan kariernya di belantika musik Tanah Air. Perempuan asal Medan itu tetap percaya usahanya selama ini akan membuahkan hasil.  \"Tuhan pasti buka jalan buat orang yang berusaha dan berjuang. Karena enggak ada yang instan di dunia ini,\" imbuhnya. Meski ujaran kebencian dari para warganet sempat membuatnya terguncang, tapi Lyodra tak mau terpengaruh. \"Jangan sampai membuat aku patah semangat,\" katanya.', '0000-00-00 00:00:00', 'Idol');

-- --------------------------------------------------------

--
-- Table structure for table `profil`
--

CREATE TABLE `profil` (
  `id_profil` int(11) NOT NULL,
  `nama_profil` varchar(255) NOT NULL,
  `isi_profil` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `show_list`
--

CREATE TABLE `show_list` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `jam_mulai` varchar(255) NOT NULL,
  `jam_selesai` varchar(255) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `is_active` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(4, 'ika', 'ika@gmail.com', 'default.jpg', '$2y$10$VaSyNYsNDjat1UgBaJJYx.eaQCndmIPxioe0wqHdksKvFNoAC.2Mi', 2, 1, '2019-05-23 16:02:27'),
(5, 'iqbal', 'ironskycruise@gmail.com', 'default.jpg', '$2y$10$VaSyNYsNDjat1UgBaJJYx.eaQCndmIPxioe0wqHdksKvFNoAC.2Mi', 1, 1, '2019-05-24 02:18:56'),
(6, 'admin', 'admin@admin.com', 'default.jpg', '$2y$10$0Ak3xS7p7XKbWz81gGmsJuyyBaTra4T4.fX7SGK/bvIcOEsnw6nue', 1, 1, '2020-03-05 13:30:11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dj`
--
ALTER TABLE `dj`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id_galeri`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id_news`);

--
-- Indexes for table `profil`
--
ALTER TABLE `profil`
  ADD PRIMARY KEY (`id_profil`);

--
-- Indexes for table `show_list`
--
ALTER TABLE `show_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dj`
--
ALTER TABLE `dj`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id_galeri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id_news` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `profil`
--
ALTER TABLE `profil`
  MODIFY `id_profil` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `show_list`
--
ALTER TABLE `show_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
