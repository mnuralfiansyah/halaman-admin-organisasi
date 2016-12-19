-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 13 Des 2016 pada 04.44
-- Versi Server: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `wah`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
`id_admin` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `fotoasli` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `nama`, `password`, `email`, `jabatan`, `foto`, `fotoasli`) VALUES
(2, 'M Noor Alfiansyah', '$2y$10$6xOuUt/GK5Y.FyTEjmeIdOnljjVkg/l1JJE.smtYUep6tt4jD8UIy', 'admin@fian.com', 'Administrator', 'alfin.jpg', ''),
(5, 'dea', '$2y$10$HiLXMtRIS54dPrkL4tr4Q.Afb1MCKibmaFL0RMtrGZAjXcuoKwjHy', 'dea@email.com', 'ketua umum', '031216141208000000.jpg', ''),
(6, 'ena', '$2y$10$.b6U.51V17XJn4t1e9WAEeL1rPkJGfyW8GlaAaaVq7FGX/cS8IrYe', 'ena@yahoo.com', 'bendahara', '031216141246000000.jpg', ''),
(8, 'mita', '$2y$10$xyEzLmY6me5Ye1h.ao43cOm92dP3aB9akY6GcpwYmw/glNqFwTsSq', 'mita@yahoo.com', 'gak ada', '031216141229000000.jpg', ''),
(9, 'gh', '$2y$10$rW56Rqn.l0G.Zra2qPM1uOQw/Qrf7t/vksAYqh9drQesTrWYRI7ee', 'jkljkl;j', 'klklj;j', '031216141210000000.jpg', ''),
(11, 'nita', '$2y$10$87tAArpFGUZeuPxp.pinAeahz443liTMEIkt50740GA2/UQtbuPrW', 'nita@yahoo.com', 'sekretaris', '031216141212000000.jpg', '1.PNG'),
(12, 'gue', '$2y$10$2qtGxCQ8tfDwchrMt/c9rOjxN.Qqp1XruwDdkLOs2o.A2IekURoOu', 'gue@yahoo.com', 'gk ada', '041216071249000000.jpg', ''),
(13, 'hjhj', '$2y$10$atWmLq.f.P8Y3zPC9SeiOOQgeHku8THeOj7xiLPXXTqqMNAKxH/xm', 'hjkhkj', 'hjh', '101216151258000000.jpg', 'IMG-20130918-00200.jpg'),
(14, 'hjhj', '$2y$10$3chdnT2kqrBUDoj9m8uyS.B/WxVioGD5zxbEFUY3EEUsjln4/abKe', 'hkhj', 'jkhjhj', '101216151243000000.jpg', 'IMG-20130918-00205.jpg'),
(15, 'hjhlj', '$2y$10$c4h3gtKU5Dj0Q.soR1RXRuv413SEpuFYKJ4GCP65wSUhnn3WZyi0W', 'ghjgh', 'yghfh', '101216151237000000.jpg', 'IMG-20130918-00203.jpg'),
(16, 'jkjkj', '$2y$10$GTeEB2bYQGMgQc4XNNy1AOZ8rLSV0pCz.4QXSVzITiZNldQfgrrU2', 'lkklkl', 'klkjiuy', '131216031251000000.jpg', 'sukses.JPG'),
(17, 'jelek', '$2y$10$VggsicFMYkXYqhnKBqvvBOh.d7CK9gcTC/NZWZVWUQKQqS85UUMWm', 'jelek@yahoo.com', 'gak ada kayaknya', '07c9cae4b5d03c761a93a5321801a974.png', 'SavedPhoto(1).png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `aktifitasadmin`
--

CREATE TABLE IF NOT EXISTS `aktifitasadmin` (
`id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `aktifitas` varchar(9999) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=279 ;

--
-- Dumping data untuk tabel `aktifitasadmin`
--

INSERT INTO `aktifitasadmin` (`id`, `email`, `aktifitas`) VALUES
(18, 'admin@fian.com', 'Telah Menghapus email mn@y Pada Selasa, 08/11/2016 06:22:35'),
(19, 'admin@fian.com', 'Telah Menghapus email hj@kj Pada Selasa, 08/11/2016 06:22:39'),
(20, 'admin@fian.com', 'Telah Menghapus email sdfsffs Pada Selasa, 08/11/2016 06:22:42'),
(21, 'admin@fian.com', 'Telah Menghapus email adaf@ss Pada Selasa, 08/11/2016 06:22:45'),
(22, 'admin@fian.com', 'Telah Menghapus email gak@co Pada Selasa, 08/11/2016 06:22:49'),
(23, 'admin@fian.com', 'Telah Menghapus email mnuralfiansyah@yahoo.com Pada Selasa, 08/11/2016 06:22:52'),
(24, 'admin@fian.com', 'Telah Menghapus email alfin@yahoo.com Pada Selasa, 08/11/2016 06:22:56'),
(25, 'admin@fian.com', 'Telah menambah mnuralfiansyah@hotmail.com dengan nama Alfiansyah pada Selasa, 08/11/2016 06:24:06 dengan Jabatan admin'),
(26, 'admin@fian.com', 'Telah mengubah data mnuralfiansyah@hotmail.com pada Selasa, 08/11/2016 06:25:03'),
(27, 'admin@fian.com', 'Telah menambah emiimah@yahoo.com dengan nama emi imah dengan Jabatan admin jaringan pada Selasa, 08/11/2016 06:27:11 '),
(28, 'admin@fian.com', 'edit data admin si emiimah@yahoo.com'),
(29, 'emiimah@yahoo.com', 'Telah mengedit data emiimah@yahoo.com pada Selasa, 08/11/2016 03:07:59'),
(30, 'admin@fian.com', 'Telah menambah admin@admin.com dengan nama admin dengan Jabatan penulis pada Selasa, 08/11/2016 04:03:04 '),
(31, 'admin@fian.com', 'Telah menambah mn@c dengan nama jdaj;fk dengan Jabatan gak da pada Rabu, 09/11/2016 09:13:49 '),
(32, 'admin@fian.com', 'Telah menambah mn@rt dengan nama adag dengan Jabatan gak da pada Rabu, 09/11/2016 09:15:47 '),
(33, 'admin@fian.com', 'Telah menambah ki@t dengan nama admin dengan Jabatan waw pada Rabu, 09/11/2016 09:25:20 '),
(34, 'admin@fian.com', 'Telah menambah dadaf@4 dengan nama gak tau dengan Jabatan admn as pada Rabu, 09/11/2016 09:32:30 '),
(35, 'admin@fian.com', 'Telah menambah kjklkj dengan nama hahJD dengan Jabatan gakjhjkh pada Rabu, 09/11/2016 09:34:54 '),
(36, 'admin@fian.com', 'Telah menambah hkj@rhjhj dengan nama jklkh dengan Jabatan ajj pada Rabu, 09/11/2016 09:36:32 '),
(37, 'admin@fian.com', 'Telah menambah adjkaj@rt dengan nama gak lkl dengan Jabatan jkj pada Rabu, 09/11/2016 11:28:38 '),
(38, 'admin@fian.com', 'Telah menambah jkjkj@uyjlkjlk dengan nama kjklj;k dengan Jabatan yiyu pada Kamis, 10/11/2016 01:17:16 '),
(39, 'admin@fian.com', 'Telah menambah mew@t dengan nama gkhkj dengan Jabatan jkj pada Kamis, 10/11/2016 01:18:51 '),
(40, 'admin@fian.com', 'Telah menambah 1211@rt dengan nama jkkklhnkjh dengan Jabatan jkk pada Kamis, 10/11/2016 01:19:30 '),
(41, 'admin@fian.com', 'Telah menambah hhlkjhj@uyuihkjl dengan nama jkjkl dengan Jabatan uoi pada Kamis, 10/11/2016 01:25:11 '),
(42, 'admin@fian.com', 'Telah menambah klljh@yahoo dengan nama jkjkjk dengan Jabatan jkj;lkj pada Kamis, 10/11/2016 01:29:00 '),
(43, 'admin@fian.com', 'Telah menambah 34we3 dengan nama kjkj dengan Jabatan 342 pada Kamis, 10/11/2016 02:48:59 '),
(44, 'admin@fian.com', 'Telah menambah mnmnj@ch dengan nama kjkjkj dengan Jabatan gakk pada Kamis, 10/11/2016 03:06:18 '),
(45, 'admin@fian.com', 'Telah menambah eresfe@g dengan nama gak  dengan Jabatan kkj pada Kamis, 10/11/2016 03:10:24 '),
(46, 'admin@fian.com', 'Telah menambah jkjkhh@jkhjhjkh dengan nama uyug dengan Jabatan iuyhiuhy pada Kamis, 10/11/2016 03:22:37 '),
(47, 'admin@fian.com', 'Telah menambah jkjkhj dengan nama hjhjkh dengan Jabatan hkhljky pada Kamis, 10/11/2016 03:25:59 '),
(48, 'admin@fian.com', 'Telah Menghapus email mnuralfiansyah@hotmail.com Pada Kamis, 10/11/2016 06:10:39'),
(49, 'admin@fian.com', 'Telah Menghapus email emiimah@yahoo.com Pada Kamis, 10/11/2016 06:10:43'),
(50, 'admin@fian.com', 'Telah Menghapus email admin@admin.com Pada Kamis, 10/11/2016 06:10:46'),
(51, 'admin@fian.com', 'Telah Menghapus email mn@c Pada Kamis, 10/11/2016 06:10:49'),
(52, 'admin@fian.com', 'Telah Menghapus email mn@rt Pada Kamis, 10/11/2016 06:10:52'),
(53, 'admin@fian.com', 'Telah Menghapus email ki@t Pada Kamis, 10/11/2016 06:10:56'),
(54, 'admin@fian.com', 'Telah Menghapus email dadaf@4 Pada Kamis, 10/11/2016 06:10:58'),
(55, 'admin@fian.com', 'Telah Menghapus email kjklkj Pada Kamis, 10/11/2016 06:11:00'),
(56, 'admin@fian.com', 'Telah Menghapus email hkj@rhjhj Pada Kamis, 10/11/2016 06:11:04'),
(57, 'admin@fian.com', 'Telah Menghapus email adjkaj@rt Pada Kamis, 10/11/2016 06:11:06'),
(58, 'admin@fian.com', 'Telah Menghapus email jkjkj@uyjlkjlk Pada Kamis, 10/11/2016 06:11:09'),
(59, 'admin@fian.com', 'Telah Menghapus email mew@t Pada Kamis, 10/11/2016 06:11:13'),
(60, 'admin@fian.com', 'Telah Menghapus email 1211@rt Pada Kamis, 10/11/2016 06:11:15'),
(61, 'admin@fian.com', 'Telah Menghapus email hhlkjhj@uyuihkjl Pada Kamis, 10/11/2016 06:11:18'),
(62, 'admin@fian.com', 'Telah Menghapus email jkjkhj Pada Kamis, 10/11/2016 06:11:23'),
(63, 'admin@fian.com', 'Telah Menghapus email jkjkhh@jkhjhjkh Pada Kamis, 10/11/2016 06:11:26'),
(64, 'admin@fian.com', 'Telah Menghapus email klljh@yahoo Pada Kamis, 10/11/2016 06:11:29'),
(65, 'admin@fian.com', 'Telah Menghapus email 34we3 Pada Kamis, 10/11/2016 06:11:33'),
(66, '', 'Telah Menghapus email eresfe@g Pada Kamis, 10/11/2016 01:02:36'),
(67, 'admin@fian.com', 'Telah Menghapus email mnmnj@ch Pada Kamis, 10/11/2016 01:08:34'),
(68, 'admin@fian.com', 'Telah menambah emiimah@yahoo.com dengan nama halimah dengan Jabatan gak ada pada Kamis, 10/11/2016 01:09:05 '),
(69, 'admin@fian.com', 'Telah menambah gk ad@ dengan nama jjkj dengan Jabatan j;k pada Kamis, 10/11/2016 01:09:49 '),
(70, 'emiimah@yahoo.com', 'Telah Menghapus email gk ad@ Pada Kamis, 10/11/2016 01:10:31'),
(71, 'emiimah@yahoo.com', 'Telah Menghapus email jhjkhj Pada Kamis, 10/11/2016 01:14:59'),
(72, 'admin@fian.com', 'Telah Menghapus email  Pada Kamis, 10/11/2016 02:16:51'),
(73, 'admin@fian.com', 'Telah Menghapus email hlhj Pada Kamis, 10/11/2016 02:17:37'),
(74, 'admin@fian.com', 'Telah Menghapus email iapjfer Pada Kamis, 10/11/2016 02:19:46'),
(75, 'admin@fian.com', 'Telah Menghapus email rsvjkdfjk Pada Kamis, 10/11/2016 02:19:50'),
(76, 'emiimah@yahoo.com', 'Telah mengedit data emiimah@yahoo.com pada Kamis, 10/11/2016 02:43:49'),
(77, 'admin@fian.com', 'Telah mengedit data emiimah@yahoo.com pada Kamis, 10/11/2016 02:44:36'),
(78, 'admin@fian.com', 'Telah menambah mnuralfiansyah@hotmail.com dengan nama mnuralfiansyah dengan Jabatan CEO pada Kamis, 10/11/2016 02:56:48 '),
(79, 'admin@fian.com', 'Telah menambah mnuralfiansyah@yahoo.com dengan nama mnuralfiansyah dengan Jabatan Owner pada Kamis, 10/11/2016 03:18:02 '),
(80, 'admin@fian.com', 'Telah menambah hjh dengan nama 15615007 dengan Jabatan hjh pada Kamis, 10/11/2016 03:21:51 '),
(81, 'admin@fian.com', 'Telah menambah sfjkjks@y dengan nama 15615020 dengan Jabatan hjhj pada Kamis, 10/11/2016 03:23:08 '),
(82, 'admin@fian.com', 'Telah menambah hjhj dengan nama gak ada dengan Jabatan ghght pada Kamis, 10/11/2016 03:24:38 '),
(83, 'admin@fian.com', 'Telah Menghapus email hjhj Pada Kamis, 10/11/2016 03:27:22'),
(84, 'admin@fian.com', 'Telah Menghapus email sfjkjks@y Pada Kamis, 10/11/2016 03:27:25'),
(85, 'admin@fian.com', 'Telah menambah hjkhjkh dengan nama gak ada dengan Jabatan jhhj pada Kamis, 10/11/2016 03:27:45 '),
(86, 'admin@fian.com', 'Telah Menghapus email hjkhjkh Pada Kamis, 10/11/2016 03:28:52'),
(87, 'admin@fian.com', 'Telah menambah hjhj dengan nama gak ada dengan Jabatan hyyg pada Kamis, 10/11/2016 03:29:08 '),
(88, 'admin@fian.com', 'Telah Menghapus email hjhj Pada Kamis, 10/11/2016 03:30:36'),
(89, 'admin@fian.com', 'Telah menambah hjhj dengan nama gak ada dengan Jabatan gygug pada Kamis, 10/11/2016 03:30:53 '),
(90, 'admin@fian.com', 'Telah Menghapus email hjhj Pada Kamis, 10/11/2016 03:32:04'),
(91, 'admin@fian.com', 'Telah menambah hjhj dengan nama gak ada dengan Jabatan hy pada Kamis, 10/11/2016 03:32:18 '),
(92, 'admin@fian.com', 'Telah Menghapus email hjhj Pada Kamis, 10/11/2016 03:32:31'),
(93, 'admin@fian.com', 'Telah menambah jkhjlhljh dengan nama gak ada dengan Jabatan drdr pada Kamis, 10/11/2016 03:32:45 '),
(94, 'admin@fian.com', 'Telah Menghapus email jkhjlhljh Pada Kamis, 10/11/2016 03:34:20'),
(95, 'admin@fian.com', 'Telah menambah hhjh dengan nama gak ada dengan Jabatan hjhjj pada Kamis, 10/11/2016 03:34:38 '),
(96, 'admin@fian.com', 'Telah Menghapus email emiimah@yahoo.com Pada Kamis, 10/11/2016 03:35:16'),
(97, 'admin@fian.com', 'Telah Menghapus email mnuralfiansyah@hotmail.com Pada Kamis, 10/11/2016 03:35:18'),
(98, 'admin@fian.com', 'Telah Menghapus email mnuralfiansyah@yahoo.com Pada Kamis, 10/11/2016 03:35:20'),
(99, 'admin@fian.com', 'Telah Menghapus email hjh Pada Kamis, 10/11/2016 03:35:29'),
(100, 'admin@fian.com', 'Telah Menghapus email hhjh Pada Kamis, 10/11/2016 03:35:32'),
(101, 'admin@fian.com', 'Telah menambah emiimah@yahoo.com dengan nama  Mohammed Noor Alfiensyeh dengan Jabatan CEO pada Kamis, 10/11/2016 03:36:51 '),
(102, 'admin@fian.com', 'Telah menambah jhljh dengan nama ghgh dengan Jabatan jjkjk pada Sabtu 12/11/2016 01:53:55'),
(103, 'admin@fian.com', 'Telah mengubah data emiimah@yahoo.com pada Sabtu, 12/11/2016 02:00:58'),
(104, 'admin@fian.com', 'Telah mengedit data admin@fian.com pada Sabtu, 12/11/2016 02:09:22'),
(105, '', 'Telah mengubah data  pada Sabtu, 12/11/2016 03:53:08'),
(106, '', 'Telah mengubah data  pada Sabtu, 12/11/2016 03:53:59'),
(107, '', 'Telah mengubah data  pada Sabtu, 12/11/2016 03:57:39'),
(108, 'admin@fian.com', 'Telah mengubah data emiimah@yahoo.com pada Sabtu, 12/11/2016 04:00:53'),
(109, 'admin@fian.com', 'Telah mengubah data emiimah@yahoo.com pada Sabtu, 12/11/2016 04:03:24'),
(110, 'admin@fian.com', 'Telah mengubah data emiimah@yahoo.com pada Sabtu, 12/11/2016 04:04:48'),
(111, 'admin@fian.com', 'Telah mengedit data emiimah@yahoo.com pada Sabtu, 12/11/2016 04:05:09'),
(112, 'admin@fian.com', 'Telah mengubah data emiimah@yahoo.com pada Sabtu, 12/11/2016 04:12:50'),
(113, 'admin@fian.com', 'Telah mengubah data emiimah@yahoo.com pada Sabtu, 12/11/2016 04:15:12'),
(114, 'admin@fian.com', 'Telah menambah jkjkksd dengan nama jhlj dengan Jabatan s,ds, pada '),
(115, 'admin@fian.com', 'Telah menambah ijiojoj dengan nama kjkjkj dengan Jabatan ijjk pada 121116041122000000'),
(116, 'admin@fian.com', 'Telah menambah tyut5656 dengan nama j;jkj dengan Jabatan jkjkjkjk pada Sabtu,  04:25:11'),
(117, 'admin@fian.com', 'Telah menambah utyit dengan nama jkj;kj dengan Jabatan ghghg pada Sabtu, 12/11/2016 04:25:59'),
(118, 'admin@fian.com', 'Telah mengubah data  pada Sabtu, 12/11/2016 04:42:58'),
(119, 'admin@fian.com', 'Telah mengubah data  pada Sabtu, 12/11/2016 04:42:58'),
(120, 'admin@fian.com', 'Telah mengubah data  pada Sabtu, 12/11/2016 04:42:59'),
(121, 'admin@fian.com', 'Telah mengubah data  pada Sabtu, 12/11/2016 04:42:59'),
(122, 'admin@fian.com', 'Telah mengubah data  pada Sabtu, 12/11/2016 04:42:59'),
(123, 'admin@fian.com', 'Telah mengubah data  pada Sabtu, 12/11/2016 04:42:59'),
(124, 'admin@fian.com', 'Telah mengubah data  pada Sabtu, 12/11/2016 04:42:59'),
(125, 'admin@fian.com', 'Telah mengubah data  pada Sabtu, 12/11/2016 04:42:59'),
(126, 'admin@fian.com', 'Telah mengubah data  pada Sabtu, 12/11/2016 04:42:59'),
(127, 'admin@fian.com', 'Telah mengubah data  pada Sabtu, 12/11/2016 04:43:00'),
(128, 'admin@fian.com', 'Telah mengubah data  pada Sabtu, 12/11/2016 04:43:00'),
(129, 'admin@fian.com', 'Telah mengubah data  pada Sabtu, 12/11/2016 04:43:00'),
(130, 'admin@fian.com', 'Telah mengubah data  pada Sabtu, 12/11/2016 04:43:00'),
(131, 'admin@fian.com', 'Telah mengubah data  pada Sabtu, 12/11/2016 04:43:00'),
(132, 'admin@fian.com', 'Telah mengubah data  pada Sabtu, 12/11/2016 04:43:00'),
(133, 'admin@fian.com', 'Telah mengubah data  pada Sabtu, 12/11/2016 04:43:00'),
(134, 'admin@fian.com', 'Telah mengubah data  pada Sabtu, 12/11/2016 04:43:00'),
(135, 'admin@fian.com', 'Telah mengubah data  pada Sabtu, 12/11/2016 04:43:00'),
(136, 'admin@fian.com', 'Telah mengubah data  pada Sabtu, 12/11/2016 04:43:01'),
(137, 'admin@fian.com', 'Telah mengubah data  pada Sabtu, 12/11/2016 04:43:01'),
(138, 'admin@fian.com', 'Telah mengubah data  pada Sabtu, 12/11/2016 04:43:04'),
(139, 'admin@fian.com', 'Telah mengubah data  pada Sabtu, 12/11/2016 04:43:04'),
(140, 'admin@fian.com', 'Telah mengubah data  pada Sabtu, 12/11/2016 04:43:04'),
(141, 'admin@fian.com', 'Telah mengubah data  pada Sabtu, 12/11/2016 04:43:05'),
(142, 'admin@fian.com', 'Telah mengubah data  pada Sabtu, 12/11/2016 04:43:05'),
(143, 'admin@fian.com', 'Telah mengubah data  pada Sabtu, 12/11/2016 04:43:05'),
(144, 'admin@fian.com', 'Telah mengubah data  pada Sabtu, 12/11/2016 04:43:05'),
(145, 'admin@fian.com', 'Telah mengubah data  pada Sabtu, 12/11/2016 04:43:05'),
(146, 'admin@fian.com', 'Telah mengubah data  pada Sabtu, 12/11/2016 04:43:05'),
(147, 'admin@fian.com', 'Telah mengubah data  pada Sabtu, 12/11/2016 04:43:05'),
(148, 'admin@fian.com', 'Telah mengubah data  pada Sabtu, 12/11/2016 04:43:06'),
(149, 'admin@fian.com', 'Telah mengubah data  pada Sabtu, 12/11/2016 04:43:06'),
(150, 'admin@fian.com', 'Telah mengubah data  pada Sabtu, 12/11/2016 04:43:06'),
(151, 'admin@fian.com', 'Telah mengubah data  pada Sabtu, 12/11/2016 04:43:06'),
(152, 'admin@fian.com', 'Telah mengubah data  pada Sabtu, 12/11/2016 04:43:06'),
(153, 'admin@fian.com', 'Telah mengubah data  pada Sabtu, 12/11/2016 04:43:06'),
(154, 'admin@fian.com', 'Telah mengubah data  pada Sabtu, 12/11/2016 04:43:06'),
(155, 'admin@fian.com', 'Telah mengubah data  pada Sabtu, 12/11/2016 04:43:06'),
(156, 'admin@fian.com', 'Telah mengubah data  pada Sabtu, 12/11/2016 04:43:07'),
(157, 'admin@fian.com', 'Telah mengubah data  pada Sabtu, 12/11/2016 04:43:07'),
(158, 'admin@fian.com', 'Telah mengubah data  pada Sabtu, 12/11/2016 04:43:07'),
(159, 'admin@fian.com', 'Telah mengubah data  pada Sabtu, 12/11/2016 04:45:37'),
(160, 'admin@fian.com', 'Telah mengubah data  pada Sabtu, 12/11/2016 04:45:37'),
(161, 'admin@fian.com', 'Telah mengubah data  pada Sabtu, 12/11/2016 04:45:37'),
(162, 'admin@fian.com', 'Telah mengubah data  pada Sabtu, 12/11/2016 04:45:37'),
(163, 'admin@fian.com', 'Telah mengubah data  pada Sabtu, 12/11/2016 04:45:37'),
(164, 'admin@fian.com', 'Telah mengubah data  pada Sabtu, 12/11/2016 04:45:37'),
(165, 'admin@fian.com', 'Telah mengubah data  pada Sabtu, 12/11/2016 04:45:37'),
(166, 'admin@fian.com', 'Telah mengubah data  pada Sabtu, 12/11/2016 04:45:38'),
(167, 'admin@fian.com', 'Telah mengubah data  pada Sabtu, 12/11/2016 04:45:38'),
(168, 'admin@fian.com', 'Telah mengubah data  pada Sabtu, 12/11/2016 04:45:38'),
(169, 'admin@fian.com', 'Telah mengubah data  pada Sabtu, 12/11/2016 04:45:38'),
(170, 'admin@fian.com', 'Telah mengubah data  pada Sabtu, 12/11/2016 04:45:38'),
(171, 'admin@fian.com', 'Telah mengubah data  pada Sabtu, 12/11/2016 04:45:38'),
(172, 'admin@fian.com', 'Telah mengubah data  pada Sabtu, 12/11/2016 04:45:38'),
(173, 'admin@fian.com', 'Telah mengubah data  pada Sabtu, 12/11/2016 04:45:38'),
(174, 'admin@fian.com', 'Telah mengubah data  pada Sabtu, 12/11/2016 04:45:38'),
(175, 'admin@fian.com', 'Telah mengubah data  pada Sabtu, 12/11/2016 04:45:38'),
(176, 'admin@fian.com', 'Telah mengubah data  pada Sabtu, 12/11/2016 04:45:38'),
(177, 'admin@fian.com', 'Telah mengubah data  pada Sabtu, 12/11/2016 04:45:39'),
(178, 'admin@fian.com', 'Telah mengubah data  pada Sabtu, 12/11/2016 04:45:39'),
(179, 'admin@fian.com', 'Telah mengubah data  pada Sabtu, 12/11/2016 04:46:00'),
(180, 'admin@fian.com', 'Telah mengubah data  pada Sabtu, 12/11/2016 04:46:00'),
(181, 'admin@fian.com', 'Telah mengubah data  pada Sabtu, 12/11/2016 04:46:00'),
(182, 'admin@fian.com', 'Telah mengubah data  pada Sabtu, 12/11/2016 04:46:00'),
(183, 'admin@fian.com', 'Telah mengubah data  pada Sabtu, 12/11/2016 04:46:01'),
(184, 'admin@fian.com', 'Telah mengubah data  pada Sabtu, 12/11/2016 04:46:01'),
(185, 'admin@fian.com', 'Telah mengubah data  pada Sabtu, 12/11/2016 04:46:01'),
(186, 'admin@fian.com', 'Telah mengubah data  pada Sabtu, 12/11/2016 04:46:01'),
(187, 'admin@fian.com', 'Telah mengubah data  pada Sabtu, 12/11/2016 04:46:01'),
(188, 'admin@fian.com', 'Telah mengubah data  pada Sabtu, 12/11/2016 04:46:01'),
(189, 'admin@fian.com', 'Telah mengubah data  pada Sabtu, 12/11/2016 04:46:01'),
(190, 'admin@fian.com', 'Telah mengubah data  pada Sabtu, 12/11/2016 04:46:01'),
(191, 'admin@fian.com', 'Telah mengubah data  pada Sabtu, 12/11/2016 04:46:01'),
(192, 'admin@fian.com', 'Telah mengubah data  pada Sabtu, 12/11/2016 04:46:01'),
(193, 'admin@fian.com', 'Telah mengubah data  pada Sabtu, 12/11/2016 04:46:02'),
(194, 'admin@fian.com', 'Telah mengubah data  pada Sabtu, 12/11/2016 04:46:02'),
(195, 'admin@fian.com', 'Telah mengubah data  pada Sabtu, 12/11/2016 04:46:02'),
(196, 'admin@fian.com', 'Telah mengubah data  pada Sabtu, 12/11/2016 04:46:02'),
(197, 'admin@fian.com', 'Telah mengubah data  pada Sabtu, 12/11/2016 04:46:02'),
(198, 'admin@fian.com', 'Telah mengubah data  pada Sabtu, 12/11/2016 04:46:02'),
(199, 'admin@fian.com', 'Telah mengubah data  pada Sabtu, 12/11/2016 04:46:45'),
(200, 'admin@fian.com', 'Telah mengubah data  pada Sabtu, 12/11/2016 04:46:45'),
(201, 'admin@fian.com', 'Telah mengubah data  pada Sabtu, 12/11/2016 04:46:45'),
(202, 'admin@fian.com', 'Telah mengubah data  pada Sabtu, 12/11/2016 04:46:45'),
(203, 'admin@fian.com', 'Telah mengubah data  pada Sabtu, 12/11/2016 04:46:45'),
(204, 'admin@fian.com', 'Telah mengubah data  pada Sabtu, 12/11/2016 04:46:45'),
(205, 'admin@fian.com', 'Telah mengubah data  pada Sabtu, 12/11/2016 04:46:45'),
(206, 'admin@fian.com', 'Telah mengubah data  pada Sabtu, 12/11/2016 04:46:45'),
(207, 'admin@fian.com', 'Telah mengubah data  pada Sabtu, 12/11/2016 04:46:46'),
(208, 'admin@fian.com', 'Telah mengubah data  pada Sabtu, 12/11/2016 04:46:46'),
(209, 'admin@fian.com', 'Telah mengubah data  pada Sabtu, 12/11/2016 04:46:46'),
(210, 'admin@fian.com', 'Telah mengubah data  pada Sabtu, 12/11/2016 04:46:46'),
(211, 'admin@fian.com', 'Telah mengubah data  pada Sabtu, 12/11/2016 04:46:46'),
(212, 'admin@fian.com', 'Telah mengubah data  pada Sabtu, 12/11/2016 04:46:46'),
(213, 'admin@fian.com', 'Telah mengubah data  pada Sabtu, 12/11/2016 04:46:47'),
(214, 'admin@fian.com', 'Telah mengubah data  pada Sabtu, 12/11/2016 04:46:47'),
(215, 'admin@fian.com', 'Telah mengubah data  pada Sabtu, 12/11/2016 04:46:47'),
(216, 'admin@fian.com', 'Telah mengubah data  pada Sabtu, 12/11/2016 04:46:47'),
(217, 'admin@fian.com', 'Telah mengubah data  pada Sabtu, 12/11/2016 04:46:47'),
(218, 'admin@fian.com', 'Telah mengubah data  pada Sabtu, 12/11/2016 04:46:47'),
(219, '', 'Telah mengubah data  pada Sabtu, 12/11/2016 04:49:24'),
(220, '', 'Telah mengubah data  pada Sabtu, 12/11/2016 04:50:20'),
(221, 'admin@fian.com', 'Telah mengedit data admin@fian.com pada Sabtu, 12/11/2016 10:19:42'),
(222, 'admin@fian.com', 'Telah mengedit data admin@fian.com pada Sabtu, 12/11/2016 10:20:00'),
(223, 'admin@fian.com', 'Telah mengedit data admin@fian.com pada Sabtu, 12/11/2016 10:22:45'),
(224, 'admin@fian.com', 'Telah mengedit data admin@fian.com pada Sabtu, 12/11/2016 10:45:19'),
(225, 'admin@fian.com', 'Telah mengedit data admin@fian.com pada Sabtu, 12/11/2016 10:46:57'),
(226, 'admin@fian.com', 'Telah mengedit data admin@fian.com pada Sabtu, 12/11/2016 10:47:26'),
(227, 'admin@fian.com', 'Telah mengedit data admin@fian.com pada Sabtu, 12/11/2016 10:48:58'),
(228, 'admin@fian.com', 'Telah Menghapus email tyut5656 Pada Sabtu, 12/11/2016 10:55:55'),
(229, 'admin@fian.com', 'Telah Menghapus email jhljh Pada Sabtu, 12/11/2016 10:57:05'),
(230, 'admin@fian.com', 'Telah Menghapus email emiimah@yahoo.com Pada Sabtu, 12/11/2016 10:57:35'),
(231, 'admin@fian.com', 'Telah Menghapus email utyit Pada Sabtu, 12/11/2016 10:59:21'),
(232, 'admin@fian.com', 'Telah Menghapus email ijiojoj Pada Sabtu, 12/11/2016 10:59:25'),
(233, 'admin@fian.com', 'Telah Menghapus email jkjkksd Pada Sabtu, 12/11/2016 10:59:31'),
(234, 'admin@fian.com', 'Telah menambah hjhyug4 dengan nama hjhlj dengan Jabatan hjjh pada Sabtu, 12/11/2016 11:01:52'),
(235, 'admin@fian.com', 'Telah menambah hjjlhjkj dengan nama ghgkhg dengan Jabatan hjlhj pada Sabtu, 12/11/2016 11:04:50'),
(236, 'admin@fian.com', 'Telah menambah jhjkh dengan nama jjjk dengan Jabatan jkjk pada Sabtu, 12/11/2016 11:22:30'),
(237, 'admin@fian.com', 'Telah menambah hjljhj dengan nama hjhlj dengan Jabatan jhjhj pada Sabtu, 12/11/2016 11:24:31'),
(238, 'admin@fian.com', 'Telah menambah hjkbhgyuty dengan nama hjjhjhj dengan Jabatan hihuihyugtf pada Sabtu, 12/11/2016 11:28:03'),
(239, 'admin@fian.com', 'Telah Menghapus email hjkbhgyuty Pada Sabtu, 12/11/2016 11:28:13'),
(240, 'admin@fian.com', 'Telah Menghapus email hjljhj Pada Sabtu, 12/11/2016 11:28:17'),
(241, 'admin@fian.com', 'Telah Menghapus email jhjkh Pada Sabtu, 12/11/2016 11:28:47'),
(242, 'admin@fian.com', 'Telah Menghapus email hjjlhjkj Pada Rabu, 23/11/2016 02:23:05'),
(243, 'admin@fian.com', 'Telah Menghapus email hjhyug4 Pada Rabu, 23/11/2016 02:23:09'),
(244, 'admin@fian.com', 'Telah mengubah data admin@fian.com pada Rabu, 23/11/2016 02:23:32'),
(245, 'admin@fian.com', 'Telah menambah teet@rte dengan nama jkjd dengan Jabatan erte pada Rabu, 23/11/2016 02:23:55'),
(246, 'admin@fian.com', 'Telah Menghapus email teet@rte Pada Rabu, 23/11/2016 02:24:10'),
(247, 'admin@fian.com', 'Telah menambah mnuralfiansyah@hotmail.com dengan nama M Nur Alfiansyah dengan Jabatan admin super pada Sabtu, 03/12/2016 02:34:30'),
(248, 'admin@fian.com', 'Telah menambah jjk dengan nama jkl;l dengan Jabatan jijk pada Sabtu, 03/12/2016 02:35:02'),
(249, 'admin@fian.com', 'Telah Menghapus email jjk Pada Sabtu, 03/12/2016 02:35:08'),
(250, 'admin@fian.com', 'Telah mengedit data admin@fian.com pada Sabtu, 03/12/2016 09:43:41'),
(251, 'admin@fian.com', 'Telah mengubah data admin@fian.com pada 15987'),
(252, 'admin@fian.com', 'Telah mengubah data admin@fian.com pada 03/12/2016'),
(253, 'admin@fian.com', 'Telah mengubah data admin@fian.com pada '),
(254, 'admin@fian.com', 'Telah mengubah data admin@fian.com pada 03/12/2016'),
(255, 'admin@fian.com', 'Telah mengubah data admin@fian.com pada 03/12/2016'),
(256, 'admin@fian.com', 'Telah mengubah data admin@fian.com pada 03/12/2016'),
(257, 'admin@fian.com', 'Telah mengubah data admin@fian.com pada 03/12/2016'),
(258, 'admin@fian.com', 'Telah mengubah data admin@fian.com pada 03/12/2016'),
(259, 'admin@fian.com', 'Telah mengubah data admin@fian.com pada 03/12/2016'),
(260, 'admin@fian.com', 'Telah menambah imah@yahoo.com dengan nama imah dengan Jabatan virus pada Sabtu03121614122500000002:11:25'),
(261, 'admin@fian.com', 'Telah menambah mita@yahoo.com dengan nama mita dengan Jabatan gak ada pada Sabtu03121614122900000002:17:28'),
(262, 'admin@fian.com', 'Telah menambah jkljkl;j dengan nama gh dengan Jabatan klklj;j pada Sabtu03121614121000000002:21:10'),
(263, 'admin@fian.com', 'Telah menambah jkljkjk dengan nama hjhjh dengan Jabatan jjij pada Sabtu, 03/12/2016 02:22:48'),
(264, 'admin@fian.com', 'Telah menambah nita@yahoo.com dengan nama nita dengan Jabatan sekretaris pada Sabtu, 03/12/2016 02:24:12'),
(265, 'admin@fian.com', 'Telah menambah gue@yahoo.com dengan nama gue dengan Jabatan gk ada pada Minggu, 04/12/2016 07:16:49'),
(266, 'admin@fian.com', 'Telah Menghapus email imah@yahoo.com Pada Senin, 05/12/2016 05:14:51'),
(267, 'admin@fian.com', 'Telah Menghapus email jkljkjk Pada Senin, 05/12/2016 05:15:00'),
(268, 'admin@fian.com', 'Telah Menghapus email mnuralfiansyah@hotmail.com Pada Senin, 05/12/2016 05:15:04'),
(269, 'admin@fian.com', 'Telah menambah hjkhkj dengan nama hjhj dengan Jabatan hjh pada Sabtu, 10/12/2016 03:31:58'),
(270, 'admin@fian.com', 'Telah menambah hkhj dengan nama hjhj dengan Jabatan jkhjhj pada Sabtu, 10/12/2016 03:38:44'),
(271, 'admin@fian.com', 'Telah menambah ghjgh dengan nama hjhlj dengan Jabatan yghfh pada Sabtu, 10/12/2016 03:39:37'),
(272, 'admin@fian.com', 'Telah Menambah Data Pengeluaran Sebesar $pengeluaran pada $hari, $tanggal $bulan $jam'),
(273, 'admin@fian.com', 'Telah Menambah Data Pemasukkan Sebesar 121212121 pada Minggu, 11 Desember 2016 06:32:17'),
(274, 'admin@fian.com', 'Telah Menambahkan Data Program Kerja pada Selasa, 13 Desember 2016 02:49:13'),
(275, 'admin@fian.com', 'Telah Menambahkan Data Program Kerja pada Selasa, 13 Desember 2016 02:51:23'),
(276, 'admin@fian.com', 'Telah Menambahkan Data Surat pada Selasa, 13 Desember 2016 03:12:39'),
(277, 'admin@fian.com', 'Telah menambah lkklkl dengan nama jkjkj dengan Jabatan klkjiuy pada Selasa, 13/12/2016 03:39:51'),
(278, 'admin@fian.com', 'Telah menambah jelek@yahoo.com dengan nama jelek dengan Jabatan gak ada kayaknya pada Selasa, 13/12/2016 03:45:36');

-- --------------------------------------------------------

--
-- Struktur dari tabel `anggota`
--

CREATE TABLE IF NOT EXISTS `anggota` (
`id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tgl_lhr` date NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `telpon` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `amanah` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `jns_klmn` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data untuk tabel `anggota`
--

INSERT INTO `anggota` (`id`, `nama`, `tgl_lhr`, `alamat`, `telpon`, `status`, `amanah`, `keterangan`, `jns_klmn`, `email`, `foto`) VALUES
(9, '', '0000-00-00', '', '', 'kader', '', '', '', '', ''),
(10, 'gak punya nama', '0000-00-00', 'gak puya alamat', '', 'kader', '', '', '', '', ''),
(11, '', '0000-00-00', '', '', 'kader', '', '', 'laki-laki', '', ''),
(12, '', '0000-00-00', '', '', 'kader', '', '', '', '', ''),
(13, '', '0000-00-00', '', '', 'kader', '', '', '', '', ''),
(15, '', '0000-00-00', '', '', 'pengurus', '', '', 'perempuan', '', ''),
(16, '', '0000-00-00', '', '', 'simpatisan', '', '', '', '', ''),
(17, 'mnuralfiansyah', '0000-00-00', 'jkj;', '787088', 'simpatisan', 'ghhg', '', 'perempuan', 'yiyiyu', ''),
(18, 'hhuh', '0000-00-00', '', '', 'kader', '', '', 'perempuan', '', ''),
(19, 'ini <br>', '0000-00-00', '', '', '', '', '', '', '', ''),
(20, 'jkjkh;', '0000-00-00', 'jjhj', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `catatanlogin`
--

CREATE TABLE IF NOT EXISTS `catatanlogin` (
`id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `waktulogin` varchar(255) NOT NULL,
  `waktulogout` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=99 ;

--
-- Dumping data untuk tabel `catatanlogin`
--

INSERT INTO `catatanlogin` (`id`, `email`, `waktulogin`, `waktulogout`, `keterangan`) VALUES
(15, 'admin@fian.com', 'Selasa, 08/11/2016 03:22:00', '', ''),
(16, 'admin@fian.com', 'Selasa, 08/11/2016 03:22:00', '', ''),
(17, 'admin@fian.com', '', 'Minggu, 11/12/2016 07:13:48', ''),
(18, 'admin@fian.com', 'Selasa, 08/11/2016 03:22:38', 'Selasa, 08/11/2016 03:51:14', ''),
(19, 'admin@fian.com', 'Selasa, 08/11/2016 03:54:16', 'Selasa, 08/11/2016 03:55:11', ''),
(20, 'alfin@fian.com', 'Selasa, 08/11/2016 03:55:11', 'Selasa, 08/11/2016 04:43:33', ''),
(21, 'admin@fian.com', 'Selasa, 08/11/2016 05:50:09', 'Selasa, 08/11/2016 06:28:33', ''),
(22, 'emiimah@yahoo.com', 'Selasa, 08/11/2016 06:28:33', '', ''),
(23, 'admin@fian.com', 'Selasa, 08/11/2016 02:56:48', 'Selasa, 08/11/2016 03:02:40', ''),
(24, 'emiimah@yahoo.com', 'Selasa, 08/11/2016 03:02:40', 'Selasa, 08/11/2016 03:14:49', ''),
(25, 'admin@fian.com', 'Selasa, 08/11/2016 03:14:49', 'Selasa, 08/11/2016 03:24:48', ''),
(26, 'emiimah@yahoo.com', 'Selasa, 08/11/2016 03:24:49', 'Selasa, 08/11/2016 03:25:51', ''),
(27, 'admin@fian.com', 'Selasa, 08/11/2016 03:25:51', 'Selasa, 08/11/2016 03:57:11', ''),
(28, 'admin@fian.com', 'Selasa, 08/11/2016 04:01:45', '', ''),
(29, 'admin@fian.com', 'Rabu, 09/11/2016 01:19:25', 'Rabu, 09/11/2016 01:55:30', ''),
(30, 'emiimah@yahoo.com', 'Rabu, 09/11/2016 01:55:31', 'Rabu, 09/11/2016 02:01:27', ''),
(31, 'admin@fian.com', 'Rabu, 09/11/2016 02:01:27', '', ''),
(32, 'admin@fian.com', 'Rabu, 09/11/2016 08:34:57', '', ''),
(33, 'admin@fian.com', 'Rabu, 09/11/2016 11:27:25', '', ''),
(34, 'admin@fian.com', 'Kamis, 10/11/2016 02:30:14', '', ''),
(35, 'admin@fian.com', 'Kamis, 10/11/2016 06:10:10', '', ''),
(36, 'admin@fian.com', 'Kamis, 10/11/2016 12:30:06', 'Kamis, 10/11/2016 01:02:04', ''),
(37, 'admin@fian.com', 'Kamis, 10/11/2016 01:03:40', 'Kamis, 10/11/2016 01:09:55', ''),
(38, 'emiimah@yahoo.com', 'Kamis, 10/11/2016 01:09:56', 'Kamis, 10/11/2016 01:20:47', ''),
(39, 'admin@fian.com', 'Kamis, 10/11/2016 01:20:47', 'Kamis, 10/11/2016 01:25:12', ''),
(40, 'emiimah@yahoo.com', 'Kamis, 10/11/2016 01:25:12', 'Kamis, 10/11/2016 01:28:36', ''),
(41, 'admin@fian.com', 'Kamis, 10/11/2016 01:28:36', 'Kamis, 10/11/2016 01:29:31', ''),
(42, 'emiimah@yahoo.com', 'Kamis, 10/11/2016 01:29:31', 'Kamis, 10/11/2016 01:43:26', ''),
(43, 'admin@fian.com', 'Kamis, 10/11/2016 01:43:26', 'Kamis, 10/11/2016 01:54:56', ''),
(44, 'emiimah@yahoo.com', 'Kamis, 10/11/2016 01:54:56', 'Kamis, 10/11/2016 01:56:55', ''),
(45, 'admin@fian.com', 'Kamis, 10/11/2016 01:56:56', 'Kamis, 10/11/2016 02:58:08', ''),
(46, 'emiimah@yahoo.com', 'Kamis, 10/11/2016 01:58:58', 'Kamis, 10/11/2016 03:18:10', ''),
(47, 'mnuralfiansyah@hotmail.com', 'Kamis, 10/11/2016 02:58:34', 'Kamis, 10/11/2016 03:16:59', ''),
(48, 'admin@fian.com', 'Kamis, 10/11/2016 03:16:59', 'Kamis, 10/11/2016 03:18:34', ''),
(49, 'mnuralfiansyah@yahoo.com', 'Kamis, 10/11/2016 03:18:10', 'Kamis, 10/11/2016 03:21:11', ''),
(50, 'mnuralfiansyah@yahoo.com', 'Kamis, 10/11/2016 03:18:34', 'Kamis, 10/11/2016 03:36:55', ''),
(51, 'admin@fian.com', 'Kamis, 10/11/2016 03:21:11', '', ''),
(52, 'emiimah@yahoo.com', 'Kamis, 10/11/2016 03:36:56', '', ''),
(53, 'admin@fian.com', 'Friday, 11/11/2016 09:23:08', '', ''),
(54, 'admin@fian.com', 'Sabtu, 12/11/2016 12:47:23', 'Sabtu, 12/11/2016 03:57:14', ''),
(55, 'admin@fian.com', 'Sabtu, 12/11/2016 03:57:15', '', ''),
(56, 'admin@fian.com', 'Sabtu, 12/11/2016 10:03:40', '', ''),
(57, 'admin@fian.com', 'Minggu, 13/11/2016 03:27:39', '', ''),
(58, 'admin@fian.com', 'Kamis, 17/11/2016 06:35:51', '', ''),
(59, 'admin@fian.com', 'Rabu, 23/11/2016 02:05:00', '', ''),
(60, 'admin@fian.com', 'Minggu, 27/11/2016 10:22:21', '', ''),
(61, 'admin@fian.com', 'Selasa, 29/11/2016 01:03:04', '', ''),
(62, 'admin@fian.com', 'Kamis, 01/12/2016 02:51:01', '', ''),
(63, 'admin@fian.com', 'Sabtu, 03/12/2016 02:33:45', 'Sabtu, 03/12/2016 02:37:44', ''),
(64, 'admin@fian.com', 'Sabtu, 03/12/2016 08:29:47', 'Sabtu, 03/12/2016 02:11:33', ''),
(65, 'dea@email.com', 'Sabtu, 03/12/2016 02:11:33', 'Sabtu, 03/12/2016 02:13:56', ''),
(66, 'imah@yahoo.com', 'Sabtu, 03/12/2016 02:13:57', 'Sabtu, 03/12/2016 02:16:53', ''),
(67, 'admin@fian.com', 'Sabtu, 03/12/2016 02:16:53', 'Sabtu, 03/12/2016 02:25:42', ''),
(68, 'nita@yahoo.com', 'Sabtu, 03/12/2016 02:25:42', 'Sabtu, 03/12/2016 02:28:36', ''),
(69, 'admin@fian.com', 'Sabtu, 03/12/2016 02:28:36', '', ''),
(70, 'admin@fian.com', 'Minggu, 04/12/2016 06:18:08', 'Minggu, 04/12/2016 06:50:43', ''),
(71, 'admin@fian.com', 'Minggu, 04/12/2016 06:50:43', 'Minggu, 04/12/2016 07:46:48', ''),
(72, 'gue@yahoo.com', 'Minggu, 04/12/2016 07:46:52', 'Minggu, 04/12/2016 07:51:55', ''),
(73, 'admin@fian.com', 'Minggu, 04/12/2016 07:51:55', '', ''),
(74, 'admin@fian.com', 'Senin, 05/12/2016 05:40:54', '', ''),
(75, 'admin@fian.com', 'Senin, 05/12/2016 12:03:36', '', ''),
(76, 'admin@fian.com', 'Selasa, 06/12/2016 02:06:19', 'Selasa, 06/12/2016 02:15:35', ''),
(77, 'gue@yahoo.com', 'Selasa, 06/12/2016 02:15:35', 'Selasa, 06/12/2016 02:38:05', ''),
(78, 'admin@fian.com', 'Selasa, 06/12/2016 02:38:05', '', ''),
(79, 'admin@fian.com', 'Selasa, 06/12/2016 02:42:03', '', ''),
(80, 'admin@fian.com', 'Friday, 09/12/2016 02:45:10', '', ''),
(81, 'admin@fian.com', 'Sabtu, 10/12/2016 04:30:28', '', ''),
(82, 'admin@fian.com', 'Sabtu, 10/12/2016 01:31:17', '', ''),
(83, 'admin@fian.com', 'Minggu, 11/12/2016 04:53:54', 'Minggu, 11/12/2016 05:00:19', ''),
(84, 'admin@fian.com', 'Minggu, 11/12/2016 05:00:31', 'Minggu, 11/12/2016 07:15:11', ''),
(85, 'admin@fian.com', 'Minggu, 11/12/2016 07:17:38', '', ''),
(86, 'admin@fian.com', 'Minggu, 11/12/2016 07:17:38', '', ''),
(87, 'admin@fian.com', 'Minggu, 11/12/2016 07:24:02', 'Minggu, 11/12/2016 07:24:21', ''),
(88, 'admin@fian.com', 'Minggu, 11/12/2016 07:24:02', 'Minggu, 11/12/2016 07:24:21', ''),
(89, 'admin@fian.com', 'Minggu, 11/12/2016 07:27:39', 'Minggu, 11/12/2016 07:27:57', ''),
(90, 'admin@fian.com', 'Minggu, 11/12/2016 07:28:04', 'Minggu, 11/12/2016 08:14:13', ''),
(91, 'admin@fian.com', 'Minggu, 11/12/2016 08:14:34', '', ''),
(92, 'admin@fian.com', 'Minggu, 11/12/2016 09:29:59', '', ''),
(93, 'admin@fian.com', 'Senin, 12/12/2016 02:11:43', 'Selasa, 13/12/2016 03:16:14', ''),
(94, 'mita@yahoo.com', 'Selasa, 13/12/2016 03:16:14', 'Selasa, 13/12/2016 03:18:46', ''),
(95, 'admin@fian.com', 'Selasa, 13/12/2016 03:18:46', 'Selasa, 13/12/2016 03:45:42', ''),
(96, 'jelek@yahoo.com', 'Selasa, 13/12/2016 03:45:43', 'Selasa, 13/12/2016 03:48:00', ''),
(97, 'admin@fian.com', 'Selasa, 13/12/2016 03:48:00', 'Selasa, 13/12/2016 03:52:33', ''),
(98, 'jelek@yahoo.com', 'Selasa, 13/12/2016 03:52:34', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dokumentasi`
--

CREATE TABLE IF NOT EXISTS `dokumentasi` (
`id` int(11) NOT NULL,
  `jenis` varchar(255) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `pemateri` varchar(255) NOT NULL,
  `peserta` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `foto`
--

CREATE TABLE IF NOT EXISTS `foto` (
`id` int(11) NOT NULL,
  `foto` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `keuangan`
--

CREATE TABLE IF NOT EXISTS `keuangan` (
`id` int(11) NOT NULL,
  `pemasukan` int(100) DEFAULT NULL,
  `pengeluaran` int(100) DEFAULT NULL,
  `keterangan` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=39 ;

--
-- Dumping data untuk tabel `keuangan`
--

INSERT INTO `keuangan` (`id`, `pemasukan`, `pengeluaran`, `keterangan`) VALUES
(1, 500000, 0, ''),
(2, 123400, 0, ''),
(3, 123400, 0, ''),
(4, 123400, 0, ''),
(5, 123400, 0, ''),
(6, 123400, 0, ''),
(7, NULL, 5000, ''),
(8, NULL, 12500, ''),
(9, 100000, 0, 'sumbangan tahun lalu'),
(11, 500000, 0, ''),
(12, 7878, 0, ''),
(13, 0, 1000000, ''),
(14, 7878, 0, ''),
(15, 7878, 0, ''),
(16, 7878, 0, ''),
(17, 7878, 0, ''),
(18, 7878, 0, ''),
(19, 7878, 0, ''),
(20, 7878, 0, ''),
(21, 7878, 0, ''),
(22, 7878, 0, ''),
(23, 7878, 0, ''),
(24, 7878, 0, ''),
(25, 7878, 0, ''),
(26, 7878, 0, ''),
(27, 7878, 0, ''),
(28, 7878, 0, ''),
(29, 7878, 0, ''),
(30, 7677, 0, ''),
(31, 0, 121313, ''),
(32, 989090, 0, ''),
(33, 989090, 0, ''),
(34, 989090, 0, ''),
(35, 989090, 0, ''),
(36, 989090, 0, ''),
(37, 0, 7878, ''),
(38, 121212121, 0, 'sumbangan tahun lalu sekali');

-- --------------------------------------------------------

--
-- Struktur dari tabel `proker`
--

CREATE TABLE IF NOT EXISTS `proker` (
`id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tujuan` varchar(100) NOT NULL,
  `jenis` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `proker`
--

INSERT INTO `proker` (`id`, `nama`, `tujuan`, `jenis`) VALUES
(1, 'uiiyu', 'hjklh', 'jkjkjk'),
(2, 'kjkjkj', 'jkjk', 'jl;iooiiu');

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat`
--

CREATE TABLE IF NOT EXISTS `surat` (
`id` int(11) NOT NULL,
  `tanggal` varchar(100) NOT NULL,
  `no` varchar(100) NOT NULL,
  `jenis` varchar(100) NOT NULL,
  `perihal` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `surat`
--

INSERT INTO `surat` (`id`, `tanggal`, `no`, `jenis`, `perihal`) VALUES
(1, '2016/12/17', '7767/V/2016', 'Surat Masuk', 'Peminjman Alat');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `aktifitasadmin`
--
ALTER TABLE `aktifitasadmin`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `catatanlogin`
--
ALTER TABLE `catatanlogin`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dokumentasi`
--
ALTER TABLE `dokumentasi`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `foto`
--
ALTER TABLE `foto`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `keuangan`
--
ALTER TABLE `keuangan`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `proker`
--
ALTER TABLE `proker`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `surat`
--
ALTER TABLE `surat`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `aktifitasadmin`
--
ALTER TABLE `aktifitasadmin`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=279;
--
-- AUTO_INCREMENT for table `anggota`
--
ALTER TABLE `anggota`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `catatanlogin`
--
ALTER TABLE `catatanlogin`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=99;
--
-- AUTO_INCREMENT for table `dokumentasi`
--
ALTER TABLE `dokumentasi`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `foto`
--
ALTER TABLE `foto`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `keuangan`
--
ALTER TABLE `keuangan`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT for table `proker`
--
ALTER TABLE `proker`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `surat`
--
ALTER TABLE `surat`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
