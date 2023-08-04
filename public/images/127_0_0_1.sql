-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 28, 2023 at 12:29 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travel`
--
CREATE DATABASE IF NOT EXISTS `travel` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `travel`;

-- --------------------------------------------------------

--
-- Table structure for table `book_tripes`
--

CREATE TABLE `book_tripes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL,
  `activities` varchar(255) NOT NULL,
  `destination` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `book_tripes`
--

INSERT INTO `book_tripes` (`id`, `name`, `activities`, `destination`, `date`, `created_at`, `updated_at`, `deleted_at`) VALUES
(4, 'Kalpesh bahi', 'Swimming', 'Philippines', '2023-07-23', '2023-07-23 05:54:57', '2023-07-26 07:04:34', NULL),
(7, '3P0SazIo87', 'OYn4bQNDDZ', 'n6mxjqJf5R', '2015-09-17', NULL, NULL, NULL),
(11, 'Lester Johnston', 'Hiking', 'USA', '2015-06-18', NULL, '2023-07-26 01:29:18', '2023-07-26 01:29:18'),
(13, 'Hugh Botsford', 'Hiking', 'USA', '2015-06-18', NULL, '2023-07-24 04:07:29', '2023-07-24 04:07:29'),
(14, 'Dayne Kilback', 'Caving', 'Kashmir', '2015-08-06', NULL, '2023-07-24 04:07:26', '2023-07-24 04:07:26'),
(15, 'Florine VonRueden', 'Hiking', 'USA', '2015-06-18', NULL, '2023-07-24 04:07:32', '2023-07-24 04:07:32'),
(16, 'Cruz O\'Reilly', 'Hiking', 'Kashmir', '2015-08-20', NULL, '2023-07-24 04:07:28', '2023-07-24 04:07:28'),
(17, 'Kendrick Gottlieb', 'Caving', 'Austeliya', '2015-10-01', NULL, '2023-07-24 04:07:33', '2023-07-24 04:07:33'),
(18, 'Kylee Doyle', 'Swimming', 'USA', '2015-10-08', NULL, '2023-07-24 04:07:35', '2023-07-24 04:07:35'),
(19, 'Deangelo Larson', 'Activities', 'Philippines', '2015-12-10', NULL, '2023-07-26 01:30:29', NULL),
(20, 'Bethel Goyette', 'Hiking', 'Kashmir', '2015-12-24', NULL, NULL, NULL),
(21, 'Emerald Hodkiewicz', 'Swimming', 'USA', '2016-01-28', NULL, NULL, NULL),
(22, 'Prof. Kacey Stiedemann V', 'Caving', 'USA', '2016-02-04', NULL, NULL, NULL),
(23, 'Mrs. Delfina Thiel DDS', 'Swimming', 'Kashmir', '2016-03-10', NULL, NULL, NULL),
(24, 'Joseph Prosacco', 'Hiking', 'Austeliya', '2016-03-17', NULL, NULL, NULL),
(25, 'Mr. Arnold Pfeffer', 'Swimming', 'Kashmir', '2015-07-23', NULL, '2023-07-24 04:07:25', '2023-07-24 04:07:25'),
(26, 'Dr. Marshall Bins IV', 'Hiking', 'Austeliya', '2015-09-03', NULL, NULL, NULL),
(27, 'Carroll Emmerich', 'Caving', 'Austeliya', '2015-10-29', NULL, NULL, NULL),
(28, 'Prof. Dorcas Ledner', 'Swimming', 'Kashmir', '2015-12-24', NULL, NULL, NULL),
(29, 'Mr. Braeden Gerlach PhD', 'Hiking', 'Austeliya', '2016-02-11', NULL, NULL, NULL),
(30, 'Mrs. Skyla Pfeffer', 'Hiking', 'USA', '2016-02-18', NULL, NULL, NULL),
(31, 'Newton Considine V', 'Hiking', 'Austeliya', '2016-03-24', NULL, NULL, NULL),
(32, 'Mr. Milton Beahan DVM', 'Caving', 'USA', '2016-04-21', NULL, NULL, NULL),
(33, 'Bianka Hodkiewicz', 'Caving', 'Austeliya', '2016-05-12', NULL, NULL, NULL),
(34, 'Trevor Schaefer', 'Hiking', 'USA', '2016-05-19', NULL, NULL, NULL),
(35, 'Anne Hermiston', 'Hiking', 'Kashmir', '2016-06-09', NULL, NULL, NULL),
(36, 'Mr. Reuben Bauch', 'Hiking', 'Kashmir', '2016-07-14', NULL, NULL, NULL),
(37, 'Demarcus Mohr', 'Caving', 'USA', '2016-07-21', NULL, NULL, NULL),
(38, 'Josianne Kunze', 'Hiking', 'Austeliya', '2016-09-22', NULL, NULL, NULL),
(39, 'Alessandro Strosin', 'Hiking', 'Austeliya', '2016-10-27', NULL, NULL, NULL),
(40, 'Ms. Angelina Hansen', 'Caving', 'Austeliya', '2016-11-10', NULL, NULL, NULL),
(41, 'Herman Altenwerth', 'Swimming', 'Kashmir', '2016-12-29', NULL, NULL, NULL),
(42, 'Rosemary Beahan', 'Hiking', 'Austeliya', '2017-03-09', NULL, NULL, NULL),
(43, 'Constantin Murray', 'Hiking', 'Austeliya', '2017-04-27', NULL, NULL, NULL),
(44, 'Dr. Javonte Bauch MD', 'Swimming', 'Austeliya', '2017-07-06', NULL, NULL, NULL),
(45, 'Tyshawn Hessel', 'Hiking', 'Austeliya', '2017-08-10', NULL, NULL, NULL),
(46, 'Casimer Jerde', 'Hiking', 'Austeliya', '2017-10-05', NULL, NULL, NULL),
(47, 'Mrs. Hailee Jacobs V', 'Hiking', 'Austeliya', '2017-10-12', NULL, NULL, NULL),
(48, 'Miss Noemy Moen', 'Hiking', 'USA', '2017-11-02', NULL, NULL, NULL),
(49, 'Sheila Prohaska Jr.', 'Caving', 'Kashmir', '2017-11-30', NULL, NULL, NULL),
(50, 'Ms. Beatrice Wyman II', 'Swimming', 'Austeliya', '2017-12-28', NULL, NULL, NULL),
(51, 'Kelsie Blanda', 'Hiking', 'Kashmir', '2018-01-25', NULL, NULL, NULL),
(52, 'Davon Veum', 'Caving', 'USA', '2018-02-08', NULL, NULL, NULL),
(53, 'Coty Reichel PhD', 'Hiking', 'Austeliya', '2018-02-15', NULL, NULL, NULL),
(54, 'Hettie Hartmann', 'Caving', 'Austeliya', '2018-04-26', NULL, NULL, NULL),
(55, 'Jo Hettinger V', 'Hiking', 'Austeliya', '2018-05-10', NULL, NULL, NULL),
(56, 'Ivah Boyle', 'Hiking', 'USA', '2018-07-12', NULL, NULL, NULL),
(57, 'Imani Huels DDS', 'Caving', 'Kashmir', '2018-09-13', NULL, NULL, NULL),
(58, 'Maegan Wisoky', 'Swimming', 'USA', '2018-10-04', NULL, NULL, NULL),
(59, 'Mrs. Annie Rau', 'Caving', 'Kashmir', '2018-11-15', NULL, NULL, NULL),
(60, 'Cyril Oberbrunner Jr.', 'Swimming', 'Austeliya', '2019-01-03', NULL, NULL, NULL),
(61, 'Isabelle Hudson', 'Caving', 'Kashmir', '2019-01-24', NULL, NULL, NULL),
(62, 'Adrianna Herzog Sr.', 'Hiking', 'Kashmir', '2019-03-14', NULL, NULL, NULL),
(63, 'Brionna Kirlin', 'Caving', 'Austeliya', '2019-05-16', NULL, NULL, NULL),
(64, 'Miss Margarett Hettinger V', 'Swimming', 'USA', '2019-06-27', NULL, NULL, NULL),
(65, 'Colton Auer', 'Hiking', 'Austeliya', '2019-07-11', NULL, NULL, NULL),
(66, 'Roel Ledner', 'Hiking', 'Kashmir', '2019-07-18', NULL, NULL, NULL),
(67, 'Prof. Ora Kuphal V', 'Caving', 'Kashmir', '2019-08-01', NULL, NULL, NULL),
(68, 'Lindsey Ebert', 'Caving', 'USA', '2019-09-05', NULL, NULL, NULL),
(69, 'Lina Crist', 'Swimming', 'Austeliya', '2019-10-17', NULL, NULL, NULL),
(70, 'Marshall Dickens', 'Swimming', 'Austeliya', '2019-11-21', NULL, NULL, NULL),
(71, 'Kenneth Mills', 'Caving', 'Austeliya', '2020-01-02', NULL, NULL, NULL),
(72, 'Jensen Nicolas', 'Swimming', 'USA', '2020-02-13', NULL, NULL, NULL),
(73, 'Mr. Melvin Turcotte', 'Swimming', 'Austeliya', '2020-04-09', NULL, NULL, NULL),
(74, 'Brooklyn McClure', 'Hiking', 'Kashmir', '2020-06-04', NULL, NULL, NULL),
(75, 'Mahesh Parmar', 'Hiking', 'Philippines', '2023-07-24', '2023-07-24 01:52:20', '2023-07-24 03:34:16', NULL),
(76, 'Josiah Deckow', 'Hiking', 'Austeliya', '2015-07-16', NULL, NULL, NULL),
(77, 'Clara Orn', 'Swimming', 'USA', '2015-08-13', NULL, NULL, NULL),
(78, 'Raoul Collier', 'Hiking', 'USA', '2015-09-10', NULL, NULL, NULL),
(79, 'Prof. Geo Predovic', 'Caving', 'Kashmir', '2015-09-24', NULL, NULL, NULL),
(80, 'Dr. Chaz Brown DDS', 'Caving', 'Austeliya', '2015-11-26', NULL, NULL, NULL),
(81, 'Drake Denesik MD', 'Swimming', 'USA', '2015-12-03', NULL, NULL, NULL),
(82, 'Dorthy Gorczany DDS', 'Hiking', 'USA', '2016-01-07', NULL, NULL, NULL),
(83, 'Mrs. Coralie Towne', 'Swimming', 'USA', '2016-01-28', NULL, NULL, NULL),
(84, 'Christina Kemmer PhD', 'Swimming', 'Kashmir', '2016-02-18', NULL, NULL, NULL),
(85, 'Duane Rath', 'Swimming', 'USA', '2016-04-07', NULL, NULL, NULL),
(86, 'Mr. Jerad Ryan MD', 'Hiking', 'Austeliya', '2016-06-09', NULL, NULL, NULL),
(87, 'Louvenia Corwin', 'Caving', 'Kashmir', '2016-08-18', NULL, NULL, NULL),
(88, 'Travis Schuster', 'Hiking', 'USA', '2016-09-29', NULL, NULL, NULL),
(89, 'Cordia Mills', 'Hiking', 'Kashmir', '2016-12-01', NULL, NULL, NULL),
(90, 'Meredith Jakubowski', 'Hiking', 'USA', '2016-12-29', NULL, NULL, NULL),
(91, 'Kylee Waelchi', 'Caving', 'USA', '2017-01-19', NULL, NULL, NULL),
(92, 'Ms. Corine Tillman I', 'Hiking', 'Austeliya', '2017-03-09', NULL, NULL, NULL),
(93, 'Cathrine Ullrich', 'Hiking', 'USA', '2017-04-27', NULL, NULL, NULL),
(94, 'Enrique Cartwright Sr.', 'Hiking', 'USA', '2017-06-01', NULL, NULL, NULL),
(95, 'Prof. Mauricio Koelpin', 'Swimming', 'Austeliya', '2017-06-08', NULL, NULL, NULL),
(96, 'Wilfrid Hickle', 'Hiking', 'Austeliya', '2017-06-22', NULL, NULL, NULL),
(97, 'Everette Metz III', 'Swimming', 'USA', '2017-07-13', NULL, NULL, NULL),
(98, 'Andrew Klein', 'Caving', 'Kashmir', '2017-08-03', NULL, NULL, NULL),
(99, 'Vickie Hintz', 'Hiking', 'USA', '2017-09-28', NULL, NULL, NULL),
(100, 'Amelia Mosciski', 'Swimming', 'Austeliya', '2017-11-02', NULL, NULL, NULL),
(101, 'Wellington Schinner', 'Swimming', 'Austeliya', '2017-12-07', NULL, NULL, NULL),
(102, 'Ms. Lauryn Kilback', 'Hiking', 'Kashmir', '2018-01-04', NULL, NULL, NULL),
(103, 'Chaya Fahey II', 'Hiking', 'USA', '2018-03-08', NULL, NULL, NULL),
(104, 'Clark O\'Hara', 'Caving', 'Kashmir', '2018-03-15', NULL, NULL, NULL),
(105, 'Mr. Leonard Okuneva PhD', 'Caving', 'Kashmir', '2018-05-17', NULL, NULL, NULL),
(106, 'Ernie Wolf I', 'Swimming', 'Austeliya', '2018-07-12', NULL, NULL, NULL),
(107, 'Estelle Harber Jr.', 'Swimming', 'Kashmir', '2018-07-26', NULL, NULL, NULL),
(108, 'Lukas Padberg', 'Caving', 'Austeliya', '2018-08-16', NULL, NULL, NULL),
(109, 'Shannon Emard', 'Hiking', 'Austeliya', '2018-10-18', NULL, NULL, NULL),
(110, 'Britney Goldner', 'Caving', 'USA', '2018-12-20', NULL, NULL, NULL),
(111, 'Bernhard Haag', 'Caving', 'Austeliya', '2019-01-24', NULL, NULL, NULL),
(112, 'Mr. Terry Keeling', 'Hiking', 'USA', '2019-02-14', NULL, NULL, NULL),
(113, 'Dr. Royce Schultz V', 'Caving', 'Austeliya', '2019-02-21', NULL, NULL, NULL),
(114, 'Rylan Miller', 'Hiking', 'USA', '2019-03-07', NULL, NULL, NULL),
(115, 'Brown Williamson', 'Caving', 'Austeliya', '2019-05-16', NULL, NULL, NULL),
(116, 'Susana Hahn', 'Caving', 'Kashmir', '2019-06-27', NULL, NULL, NULL),
(117, 'Diana Beahan', 'Caving', 'Kashmir', '2019-09-05', NULL, NULL, NULL),
(118, 'Tod Gulgowski', 'Hiking', 'Austeliya', '2019-11-07', NULL, NULL, NULL),
(119, 'Burdette Mills', 'Caving', 'USA', '2019-12-12', NULL, NULL, NULL),
(120, 'Mrs. June Wisozk', 'Caving', 'Kashmir', '2020-02-13', NULL, NULL, NULL),
(121, 'Rosendo Howell', 'Swimming', 'Kashmir', '2020-02-20', NULL, NULL, NULL),
(122, 'Miss Mariane Bernier DVM', 'Swimming', 'Austeliya', '2020-03-12', NULL, NULL, NULL),
(123, 'Jaiden Watsica', 'Caving', 'Austeliya', '2020-05-21', NULL, NULL, NULL),
(124, 'Dr. Eryn Volkman Sr.', 'Hiking', 'USA', '2020-07-23', NULL, NULL, NULL),
(125, 'Margaret Bechtelar', 'Caving', 'Austeliya', '2020-09-10', NULL, NULL, NULL),
(126, 'mahesh', 'Hiking', 'USA', '2023-07-27', '2023-07-27 12:25:39', '2023-07-27 12:25:39', NULL),
(127, 'news', 'Swimming', 'USA', '2023-07-27', '2023-07-27 13:30:03', '2023-07-27 13:30:03', NULL),
(128, 'rakesh', 'Hiking', 'USA', '2023-07-27', '2023-07-27 13:51:10', '2023-07-27 13:51:10', NULL),
(129, 'Jayesh Parmar', 'Hiking', 'Australia', '2023-07-27', '2023-07-27 13:54:32', '2023-07-27 13:54:32', NULL),
(130, 'Jayesh Parmar', 'Hiking', 'Australia', '2023-07-27', '2023-07-27 13:55:57', '2023-07-27 13:55:57', NULL),
(131, 'admin', 'Hiking', 'USA', '2023-07-27', '2023-07-27 13:57:07', '2023-07-27 13:57:07', NULL),
(132, 'Jayesh Parmar', 'Hiking', 'USA', '2023-07-27', '2023-07-27 14:01:51', '2023-07-27 14:01:51', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contact_backends`
--

CREATE TABLE `contact_backends` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `title` varchar(50) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `phone_pumber` varchar(15) DEFAULT NULL,
  `website` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_backends`
--

INSERT INTO `contact_backends` (`id`, `image`, `title`, `address`, `phone_pumber`, `website`, `created_at`, `updated_at`) VALUES
(1, '1690460147.jpg', 'Get In Touch', '198 West 21th Street,\r\nSuite 721 New York NY 10016', '7698836076', 'www.google.com', '2023-07-27 06:15:22', '2023-07-27 06:45:47');

-- --------------------------------------------------------

--
-- Table structure for table `contact_forms`
--

CREATE TABLE `contact_forms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(40) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_forms`
--

INSERT INTO `contact_forms` (`id`, `name`, `email`, `subject`, `description`, `created_at`, `updated_at`) VALUES
(164, 'Kylee Herman', 'gbosco@vandervort.com', 'Aspernatur et eum.', 'Dignissimos autem.', NULL, NULL),
(165, 'Anderson Welch', 'eli.pacocha@block.com', 'Cumque harum sed.', 'Dolores eaque sed.', NULL, NULL),
(166, 'Milo Kassulke', 'corkery.vena@simonis.biz', 'Voluptatem quis.', 'Est itaque quia qui.', NULL, NULL),
(167, 'Lawson Runte', 'breanna.gorczany@bradtke.org', 'Eos nihil vitae aut.', 'Sit sunt minima et.', NULL, NULL),
(170, 'Jeanette Berge', 'ophelia.heller@cormier.com', 'Ratione temporibus.', 'Et ut dignissimos.', NULL, NULL),
(171, 'Elwyn Bins', 'zwest@langworth.com', 'Consectetur id.', 'Omnis recusandae.', NULL, NULL),
(172, 'Ewell Hintz', 'jcollins@nienow.net', 'Soluta ut.', 'In consectetur.', NULL, NULL),
(173, 'Kennedy Tillman', 'pierre92@wintheiser.org', 'Eos dolores qui in.', 'Ut sit architecto.', NULL, NULL),
(174, 'Ms. Lillie Kirlin', 'deven50@hotmail.com', 'Praesentium optio.', 'Cupiditate aut et.', NULL, NULL),
(175, 'Prof. Fletcher Volkman DVM', 'savannah21@hotmail.com', 'Aliquid cum quo.', 'Dignissimos.', NULL, NULL),
(176, 'Kolby Hoeger', 'haag.liliane@yahoo.com', 'Aut dolore amet.', 'At deleniti nihil.', NULL, NULL),
(177, 'Lisandro Ratke', 'xorn@hotmail.com', 'Quibusdam.', 'Perspiciatis non et.', NULL, NULL),
(178, 'Miss Michelle Koepp II', 'anderson96@blick.biz', 'Consequatur.', 'Voluptates est esse.', NULL, NULL),
(179, 'April Terry IV', 'jcole@hotmail.com', 'Et soluta ut ipsum.', 'Ut qui debitis sed.', NULL, NULL),
(180, 'Reynold Cole', 'wisoky.freddy@muller.com', 'Ab nobis aut.', 'Id quia rem.', NULL, NULL),
(181, 'Amelie Ritchie DDS', 'agustin.krajcik@hotmail.com', 'Ad a sit est.', 'Aut eos repellat.', NULL, NULL),
(182, 'Darrick Ritchie', 'bogisich.janis@reichert.com', 'Assumenda.', 'Quibusdam non.', NULL, NULL),
(183, 'Prof. Anthony Prohaska IV', 'kraig.stracke@champlin.biz', 'Ut incidunt odit.', 'Rerum ut laboriosam.', NULL, NULL),
(184, 'Eden Herzog', 'ally.okuneva@yahoo.com', 'Inventore molestias.', 'Consectetur qui.', NULL, NULL),
(185, 'Lysanne Wolf', 'kihn.martin@ebert.com', 'Modi minima et et.', 'Dicta illo aut.', NULL, NULL),
(186, 'Carolanne Schinner PhD', 'tito.russel@herman.com', 'Soluta velit.', 'Nesciunt pariatur.', NULL, NULL),
(187, 'Mrs. Trudie Padberg', 'bechtelar.salma@gmail.com', 'Nihil id molestiae.', 'Doloremque.', NULL, NULL),
(188, 'Dayton Gerhold DVM', 'nader.caleb@gmail.com', 'Molestiae eos sit.', 'Odio ut est hic.', NULL, NULL),
(189, 'Patsy Krajcik DDS', 'dickinson.hannah@hotmail.com', 'Facilis ipsum.', 'Quod maiores.', NULL, NULL),
(190, 'Devonte Littel', 'hkub@mante.com', 'Doloremque placeat.', 'Totam eos sunt.', NULL, NULL),
(191, 'Arthur Swaniawski', 'cmurazik@gmail.com', 'In cupiditate.', 'Ad illo voluptas.', NULL, NULL),
(192, 'Karianne Marvin', 'igoldner@stiedemann.com', 'Eius laudantium ut.', 'Iusto cumque.', NULL, NULL),
(193, 'Ms. Erica McCullough', 'bosco.rowena@hotmail.com', 'Et natus ut dolorem.', 'Animi nulla rerum.', NULL, NULL),
(194, 'Mr. Darrell Reilly III', 'jace.haley@yahoo.com', 'Aut error.', 'Soluta officia.', NULL, NULL),
(195, 'Nannie Bins', 'jdietrich@bradtke.info', 'Praesentium.', 'Iste omnis iusto.', NULL, NULL),
(196, 'Viva McKenzie', 'ankunding.philip@skiles.com', 'Non possimus natus.', 'Dolores expedita et.', NULL, NULL),
(197, 'Alana Hyatt', 'mac.hegmann@yahoo.com', 'In et repellat fuga.', 'Eos qui non vero.', NULL, NULL),
(198, 'Grayson Dooley', 'lockman.vladimir@gleichner.com', 'Eos voluptas et.', 'Sed culpa officia.', NULL, NULL),
(199, 'Kyler Hoppe', 'upouros@gmail.com', 'Doloremque.', 'At labore velit.', NULL, NULL),
(200, 'Vince Yundt', 'valentine61@bogan.net', 'Quam veritatis in.', 'Voluptatem iusto.', NULL, NULL),
(201, 'Stephon Monahan', 'connelly.alexandro@ernser.org', 'Et nemo eos.', 'Omnis doloremque.', NULL, NULL),
(202, 'Joelle McClure', 'pierre.hill@mclaughlin.info', 'Veritatis aut velit.', 'Nobis error sunt.', NULL, NULL),
(203, 'Ms. Elna Schowalter V', 'icie21@rogahn.com', 'Dolores libero hic.', 'Veritatis.', NULL, NULL),
(204, 'Alexandra Langworth', 'tremblay.vesta@yahoo.com', 'Magni quia aut.', 'Nihil autem sed.', NULL, NULL),
(205, 'Felipa Medhurst', 'clement09@haag.com', 'Accusamus.', 'Aliquam eum eum.', NULL, NULL),
(206, 'Jacques Daniel', 'heather.carroll@dare.net', 'Ex voluptatem atque.', 'Natus mollitia ab.', NULL, NULL),
(207, 'Matilde Thiel PhD', 'westley.runte@gmail.com', 'Rerum saepe aut et.', 'Vero unde officiis.', NULL, NULL),
(208, 'Lexus Bogan', 'hudson.reina@paucek.com', 'Dolore porro.', 'Cumque non qui.', NULL, NULL),
(209, 'Okey Pollich', 'deon.zemlak@yahoo.com', 'Sit ut rerum.', 'Excepturi magni.', NULL, NULL),
(210, 'Mr. Orval Boyle', 'olockman@gmail.com', 'Debitis quis eum.', 'Quisquam eos.', NULL, NULL),
(211, 'Velda Zulauf', 'wilson.hauck@hane.org', 'Sed voluptatum quam.', 'Rerum tempore sequi.', NULL, NULL),
(212, 'Ms. Florida Waters II', 'trever54@langworth.com', 'Sint aliquid.', 'Omnis id animi ut.', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `descriptions`
--

CREATE TABLE `descriptions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(70) DEFAULT NULL,
  `title` varchar(50) DEFAULT NULL,
  `post_title` varchar(100) DEFAULT NULL,
  `post_description` varchar(500) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `descriptions`
--

INSERT INTO `descriptions` (`id`, `image`, `title`, `post_title`, `post_description`, `created_at`, `updated_at`) VALUES
(1, '1690469542.jpg', 'Destination', 'Trip With Your Favourite', 'Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.', NULL, '2023-07-27 09:22:22');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `home_pages`
--

CREATE TABLE `home_pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `banner_title` varchar(50) DEFAULT NULL,
  `post_title` varchar(50) DEFAULT NULL,
  `post_description` text DEFAULT NULL,
  `testimonial_title` varchar(255) DEFAULT NULL,
  `testimonial_description` text DEFAULT NULL,
  `test_title1` varchar(50) DEFAULT NULL,
  `test_title2` varchar(50) DEFAULT NULL,
  `test_title3` varchar(50) DEFAULT NULL,
  `test_description1` text DEFAULT NULL,
  `test_description2` text DEFAULT NULL,
  `test_description3` text DEFAULT NULL,
  `ov_title` varchar(50) DEFAULT NULL,
  `ov_description` text DEFAULT NULL,
  `ov_destination` text DEFAULT NULL,
  `ov_hotels` varchar(50) DEFAULT NULL,
  `ov_travelars` varchar(50) DEFAULT NULL,
  `happy_customer` varchar(255) DEFAULT NULL,
  `about_desciption` text DEFAULT NULL,
  `ad_phone_number` varchar(15) DEFAULT NULL,
  `ad_email` varchar(255) DEFAULT NULL,
  `ad_live_chet` varchar(15) DEFAULT NULL,
  `sl_twiter` varchar(50) DEFAULT NULL,
  `sl_facebook` varchar(50) DEFAULT NULL,
  `sl_linkedln` varchar(50) DEFAULT NULL,
  `sl_instagram` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `center_title` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_pages`
--

INSERT INTO `home_pages` (`id`, `banner_title`, `post_title`, `post_description`, `testimonial_title`, `testimonial_description`, `test_title1`, `test_title2`, `test_title3`, `test_description1`, `test_description2`, `test_description3`, `ov_title`, `ov_description`, `ov_destination`, `ov_hotels`, `ov_travelars`, `happy_customer`, `about_desciption`, `ad_phone_number`, `ad_email`, `ad_live_chet`, `sl_twiter`, `sl_facebook`, `sl_linkedln`, `sl_instagram`, `created_at`, `updated_at`, `image`, `center_title`) VALUES
(1, 'Planing Trip To Anywhere in The World?', 'Most Popular Destination', NULL, NULL, NULL, 'Lorem ipsum dolor sit amet', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'Planing Trip To Anywhere in The World?', 'Most Popular Destination', 'Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.', 'How It Works', 'Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.\"\"\"\"\"\"\"\"\"\"\"\"\"', 'Lorem ipsum dolor sit amet', 'Consectetur adipisicing elit', 'Dignissimos asperiores vitae', 'Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.', 'Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.', 'Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.', 'Our Success', 'Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.', '300', '2400', '25300', '23500', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore eos molestias quod sint ipsum possimus temporibus officia iste perspiciatis consectetur in fugiat repudiandae cum. Totam cupiditate nostrum ut neque ab?', '7698836076', 'jp44878182@gmail.com', '7698836076', 'twitter.com/home', NULL, NULL, NULL, NULL, '2023-07-27 07:52:16', '1690464136.jpg', 'We have high quality services that you will surely love!');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_07_22_105037_create_posts_table', 1),
(6, '2023_07_22_183251_create_book_tripes_table', 2),
(7, '2023_07_24_061925_add_deleted_at_to_book_tripes_table', 3),
(15, '2023_07_24_141915_create_home_pages_table', 4),
(17, '2023_07_25_103149_create_travel_backends_table', 5),
(18, '2023_07_25_154308_create_plans_table', 6),
(19, '2023_07_26_181922_add_paid_to_planrs_table', 7),
(20, '2023_07_26_192808_create_questions_table', 8),
(21, '2023_07_26_200431_add_paid_to_questionss_table', 9),
(22, '2023_07_27_045824_create_contact_forms_table', 10),
(25, '2023_07_27_101414_create_contact_backends_table', 11),
(26, '2023_07_27_124633_add_paid_to_home_pages_table', 12),
(27, '2023_07_27_134313_create_descriptions_table', 13);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `plans`
--

CREATE TABLE `plans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `p_name` varchar(30) DEFAULT NULL,
  `p_price` varchar(30) DEFAULT NULL,
  `p_description` varchar(300) DEFAULT NULL,
  `project` varchar(30) DEFAULT NULL,
  `pages` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `image` varchar(30) DEFAULT NULL,
  `link` varchar(30) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `plans`
--

INSERT INTO `plans` (`id`, `p_name`, `p_price`, `p_description`, `project`, `pages`, `email`, `image`, `link`, `created_at`, `updated_at`) VALUES
(1, 'STARTER', '7', 'Basic customer support for small business', '10 projects', '20 Pages', '20 Emails', '100 Images', 'Purches', NULL, '2023-07-26 13:42:41'),
(2, 'REGULAR', '19', 'Basic customer support for small business', '10 projects', '20 Pages', '20 Emails', '100 Images', 'Purches', NULL, '2023-07-26 13:42:58'),
(3, 'PLUS', '79', 'BasBasic customer support for small business', 'Unlimitted projects', '100 Pages', '100 Emails', '700 Images', 'Get Started', NULL, '2023-07-26 13:43:11');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` varchar(255) NOT NULL,
  `pimage` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `description`, `pimage`, `created_at`, `updated_at`) VALUES
(1, 'Seoul, South Korea', 'Far far away, behind the word mountains, far from the countries Vokalia..', 'pimage/jYr4D0ZsXH0ajsIWhN8nmiiQWcQvU9Den7riO5By.jpg', '2023-07-22 06:18:19', '2023-07-22 06:18:19'),
(2, 'New York, USA', 'Far far away, behind the word mountains, far from the countries Vokalia..', 'pimage/gL6VCXHiljViXhOcJGFFpvtRrf9mDpP7mNwWnDe2.jpg', '2023-07-22 06:27:24', '2023-07-22 06:27:24'),
(3, 'Paris, France', 'Far far away, behind the word mountains, far from the countries Vokalia.', 'pimage/OakCDy7MNo9VWzOIdyXajwafLNFO80AqqBSrGvne.jpg', '2023-07-22 07:06:29', '2023-07-22 07:06:29'),
(7, 'Sydney, Australia', 'Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.', 'pimage/wqb0J6KNMQ4VNn1SfhHUfHlReSicwi8vmcH6d8d4.jpg', '2023-07-22 08:36:51', '2023-07-22 08:36:51'),
(10, 'Kasol Tours!', 'Kasol is popularly known for its ‘hippie’ culture and Israeli population. Also stated as the “mini-Israel” of India,', 'pimage/12fxamlkqHnlOrEcZCwDFYmODuTypDjrtNUoZYbU.jpg', '2023-07-22 08:49:02', '2023-07-22 08:49:02'),
(11, 'Explore Leh Ladakh Tours!', 'Surrounded by ice-capped mountains of the Himalayan ranges and Karakoram. And with endless stretches of natural beauty ', 'pimage/s4FNaBRwR74xZiHtJFxNrvFemV02mygSZj6YIg7s.jpg', '2023-07-22 08:53:57', '2023-07-22 08:53:57'),
(12, 'Weekend Trip to Shimla by Volvo', 'Upon arrival in Shimla, the agent’s representative will ensure a smooth check-in to your hotel. After settling down and freshening up, enjoy the', 'pimage/bn4RTwWyx7rT2farECN55x3NQwUAqOfLwCNGKhBV.jpg', '2023-07-22 11:51:58', '2023-07-22 11:51:58'),
(13, 'Kalsubai Maharastra', 'This Place Is Mos Populer Place For Ttreking imn monsoon in This place Is very denger for trking', 'pimage/ayr2tTr4FLLkPTj4d8D3kbfitcs0WQqRm1nKqX3k.jpg', '2023-07-23 10:50:16', '2023-07-23 10:50:16'),
(14, 'Kalsubai Maharastra', 'This Place Is Mos Populer Place For Ttreking imn monsoon in This place Is very denger for trking', 'pimage/RLwg00WtDfqblNHzJH4ZAHLR4AAFuR7DAzom26vL.jpg', '2023-07-23 10:52:12', '2023-07-23 10:52:12'),
(15, 'Manali Treking', 'today is most impotace place is manali  becouse its femose for trking places and most impotance is place', 'pimage/OR9hEEgU90xHMbMK0FSW4NseRPj7DVHCWjRXF0Km.jpg', '2023-07-26 07:07:12', '2023-07-26 07:07:12');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 'What is Traveler?', 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.', '2023-07-26 14:24:58', '2023-07-26 14:24:58'),
(2, 'What language are available?', 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.', '2023-07-26 14:31:16', '2023-07-26 14:31:16'),
(3, 'Can I have a username that is already taken?', 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.', '2023-07-26 14:37:07', '2023-07-26 14:37:07'),
(4, 'How do I use Traveler features?', 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.', '2023-07-26 14:37:31', '2023-07-26 14:37:31');

-- --------------------------------------------------------

--
-- Table structure for table `travel_backends`
--

CREATE TABLE `travel_backends` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `banner_title` varchar(50) DEFAULT NULL,
  `pricepage_title` varchar(50) DEFAULT NULL,
  `pricepage_description` text DEFAULT NULL,
  `info_title` varchar(50) DEFAULT NULL,
  `info_description` text DEFAULT NULL,
  `pimage` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `travel_backends`
--

INSERT INTO `travel_backends` (`id`, `banner_title`, `pricepage_title`, `pricepage_description`, `info_title`, `info_description`, `pimage`, `created_at`, `updated_at`) VALUES
(1, 'Plans for Everyone', 'Choose The Best Plan For You', 'Join over 1 Million of users. Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.', 'Frequently Ask Questions', 'Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.', '1690461387.jpg', NULL, '2023-07-27 07:06:27');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Jayesh Parmar', 'jp44878182@gmail.com', NULL, '$2y$10$9c.MOFRpid/Rg8NxT9NIRe4DyAoymKBAiPjwmv0jvhsPG5idtLBsa', NULL, '2023-07-22 11:18:21', '2023-07-22 11:18:21'),
(2, 'admin', 'jp@gmail.com', NULL, '$2y$10$7FNIB3E3dhokMYLH1ULJU.9ylWnhuvw3bsOvEiBfEVcRmVyQoJKMK', NULL, '2023-07-22 12:38:35', '2023-07-22 12:38:35'),
(3, 'Jayesh Parmar', 'jp4487@gmail.com', NULL, '$2y$10$TxTQcayUbxjBX4UGGX33eOb.eACZiJK2N9AHYVKJkdfgYr1mxxziS', NULL, '2023-07-27 12:02:32', '2023-07-27 12:02:32');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book_tripes`
--
ALTER TABLE `book_tripes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_backends`
--
ALTER TABLE `contact_backends`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_forms`
--
ALTER TABLE `contact_forms`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `contact_forms_email_unique` (`email`);

--
-- Indexes for table `descriptions`
--
ALTER TABLE `descriptions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `home_pages`
--
ALTER TABLE `home_pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `plans`
--
ALTER TABLE `plans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `travel_backends`
--
ALTER TABLE `travel_backends`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book_tripes`
--
ALTER TABLE `book_tripes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=133;

--
-- AUTO_INCREMENT for table `contact_backends`
--
ALTER TABLE `contact_backends`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact_forms`
--
ALTER TABLE `contact_forms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=213;

--
-- AUTO_INCREMENT for table `descriptions`
--
ALTER TABLE `descriptions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `home_pages`
--
ALTER TABLE `home_pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `plans`
--
ALTER TABLE `plans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `travel_backends`
--
ALTER TABLE `travel_backends`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
