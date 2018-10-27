-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 24, 2017 at 08:10 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `opils`
--

-- --------------------------------------------------------

--
-- Table structure for table `activitylog`
--

CREATE TABLE `activitylog` (
  `activitylog` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `action` varchar(100) NOT NULL,
  `activity_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `activitylog`
--

INSERT INTO `activitylog` (`activitylog`, `userid`, `action`, `activity_date`) VALUES
(223, 22, 'Add employee - Firstname: Clene', '2017-09-24 17:51:59'),
(224, 22, 'Add dealer - Firstname: julyn', '2017-09-24 17:54:28'),
(225, 22, 'Add product - Name: Aspire Escape', '2017-09-24 17:55:39'),
(226, 22, 'Add product - Name: Aspire Fantasy', '2017-09-24 17:55:48'),
(227, 22, 'Add employee - Firstname: Rudy', '2017-09-24 17:56:42'),
(228, 53, 'Add reservation - Total amount: 300', '2017-09-24 18:01:13'),
(229, 22, 'Confirm reservation - Dealer: julyn divinagracia | Amount: 300', '2017-09-24 18:02:16'),
(230, 22, 'Delete product - Name: Aspire Fantasy', '2017-09-24 18:02:34'),
(231, 22, 'Add employee - Firstname: Mary Ann', '2017-09-24 23:35:46'),
(232, 22, 'Add employee - Firstname: Rudgie', '2017-09-24 23:37:00'),
(233, 22, 'Add employee - Firstname: Victor Vonn', '2017-09-24 23:37:43'),
(234, 22, 'Add employee - Firstname: Ronnie', '2017-09-24 23:38:47'),
(235, 22, 'Add dealer - Firstname: caren', '2017-09-24 23:41:48'),
(236, 22, 'Add dealer - Firstname: ma. fe', '2017-09-24 23:42:34'),
(237, 22, 'Add dealer - Firstname: ma. corazon', '2017-09-24 23:43:17'),
(238, 22, 'Add dealer - Firstname: anica mae', '2017-09-24 23:43:57'),
(239, 22, 'Add dealer - Firstname: daryll', '2017-09-24 23:45:09'),
(240, 22, 'Add dealer - Firstname: nelma', '2017-09-24 23:45:47'),
(241, 22, 'Add dealer - Firstname: charril ', '2017-09-24 23:46:22'),
(242, 22, 'Add dealer - Firstname: dyna mae', '2017-09-24 23:47:05'),
(243, 22, 'Add dealer - Firstname: judy ann', '2017-09-24 23:50:33'),
(244, 22, 'Add dealer - Firstname: renan', '2017-09-24 23:51:24'),
(245, 22, 'Add dealer - Firstname: venalyn', '2017-09-24 23:52:02'),
(246, 22, 'Add dealer - Firstname: jelly', '2017-09-24 23:52:45'),
(247, 22, 'Add dealer - Firstname: jean', '2017-09-24 23:53:14'),
(248, 22, 'Add dealer - Firstname: criza', '2017-09-24 23:53:40'),
(249, 22, 'Add dealer - Firstname: stephen', '2017-09-24 23:54:17'),
(250, 22, 'Add dealer - Firstname: stephen', '2017-09-24 23:54:17'),
(251, 22, 'Add dealer - Firstname: mary rose', '2017-09-24 23:54:41'),
(252, 22, 'Add dealer - Firstname: nikko', '2017-09-24 23:55:12'),
(253, 22, 'Add dealer - Firstname: nica', '2017-09-24 23:56:22'),
(254, 22, 'Add dealer - Firstname: alony', '2017-09-24 23:56:56'),
(255, 22, 'Add dealer - Firstname: jr', '2017-09-24 23:57:26'),
(256, 22, 'Add dealer - Firstname: jessa', '2017-09-24 23:58:01'),
(257, 22, 'Add dealer - Firstname: jennifer', '2017-09-24 23:58:38'),
(258, 22, 'Add dealer - Firstname: shallimer', '2017-09-24 23:59:10'),
(259, 22, 'Update product - Name: Aspire Escape', '2017-09-25 00:02:48'),
(260, 22, 'Add product - Name: Aspire Desire', '2017-09-25 00:03:31'),
(261, 22, 'Update product - Name: Aspire Escape', '2017-09-25 00:03:40'),
(262, 22, 'Add product - Name: Aspire Fantasy', '2017-09-25 00:03:50'),
(263, 22, 'Add product - Name: Aspire Obsession', '2017-09-25 00:04:42'),
(264, 22, 'Update product - Name: Aspire Desire', '2017-09-25 00:05:18'),
(265, 22, 'Update product - Name: Aspire Fantasy', '2017-09-25 00:05:25'),
(266, 22, 'Update product - Name: Aspire Obsession', '2017-09-25 00:05:34'),
(267, 22, 'Add product - Name: Aspire Passion', '2017-09-25 00:05:51'),
(268, 22, 'Add product - Name: Aspire Charm', '2017-09-25 00:06:15'),
(269, 22, 'Add product - Name: Cool-its Amazing', '2017-09-25 00:06:57'),
(270, 22, 'Add product - Name: Cool-its Charming', '2017-09-25 00:07:10'),
(271, 22, 'Add product - Name: Cool-its Happy', '2017-09-25 00:07:25'),
(272, 22, 'Add product - Name: Cool-its Trendy', '2017-09-25 00:07:37'),
(273, 22, 'Add product - Name: Cool-its Witty', '2017-09-25 00:08:21'),
(274, 22, 'Add product - Name: Formen Fever', '2017-09-25 00:09:25'),
(275, 22, 'Add product - Name: Formen Force', '2017-09-25 00:09:48'),
(276, 22, 'Add product - Name: Formen Flame', '2017-09-25 00:10:06'),
(277, 22, 'Add product - Name: Formen Frost', '2017-09-25 00:10:37'),
(278, 22, 'Add product - Name: Formen Fusion', '2017-09-25 00:10:54'),
(279, 22, 'Add product - Name: Formen Fierce', '2017-09-25 00:11:38'),
(280, 22, 'Add product - Name: PC Heart Believe Edt', '2017-09-25 00:11:55'),
(281, 22, 'Add product - Name: PC Heart Dream Edt', '2017-09-25 00:12:13'),
(282, 22, 'Add product - Name: PC Heart Realize Edt', '2017-09-25 00:12:25'),
(283, 22, 'Update product - Name: PC Heart Believe Edt', '2017-09-25 00:13:16'),
(284, 22, 'Update product - Name: PC Heart Dream Edt', '2017-09-25 00:13:29'),
(285, 22, 'Update product - Name: PC Heart Realize Edt', '2017-09-25 00:13:44'),
(286, 22, 'Add product - Name: sophia eau de toilette (60ml)', '2017-09-25 00:14:36'),
(287, 22, 'Add product - Name: sophia purse concentrate (10ml)', '2017-09-25 00:15:32'),
(288, 22, 'Add product - Name: sophia fragrance talc', '2017-09-25 00:15:47'),
(289, 22, 'Add product - Name: sophia perfumed rejuvenating lotion', '2017-09-25 00:16:41'),
(290, 22, 'Add product - Name: wild fire eau de toilette (105ml)', '2017-09-25 00:17:08'),
(291, 22, 'Add product - Name: wild fire pocket edition (10ml)', '2017-09-25 00:17:31'),
(292, 22, 'Add product - Name: Just Like Home Lemon Orchard', '2017-09-25 00:18:01'),
(293, 22, 'Add product - Name: Just Like Home Ocean Fresh', '2017-09-25 00:18:15'),
(294, 22, 'Add product - Name: Just Like Home tropical harvest', '2017-09-25 00:18:46'),
(295, 22, 'Add product - Name: Just Like Home vanilla mist', '2017-09-25 00:18:58'),
(296, 22, 'Add product - Name: tuff germban', '2017-09-25 00:19:33'),
(297, 22, 'Add product - Name: Tuff Protectant', '2017-09-25 00:20:10'),
(298, 22, 'Add product - Name: Tuff TBC Classic (500ml)', '2017-09-25 00:20:50'),
(299, 22, 'Add product - Name: Tuff TBC Classic (1000ml)', '2017-09-25 00:21:15'),
(300, 22, 'Update product - Name: Tuff TBC Classic (500ml)', '2017-09-25 00:21:38'),
(301, 22, 'Add product - Name: Tuff TBC Lemon (1000ml)', '2017-09-25 00:22:05'),
(302, 22, 'Add product - Name: HBS Colostrum', '2017-09-25 00:22:52'),
(303, 22, 'Add product - Name: HBS Glutalight', '2017-09-25 00:23:57'),
(304, 22, 'Update product - Name: HBS Glutalight', '2017-09-25 00:24:20'),
(305, 22, 'Add product - Name: HBS Immuno-C', '2017-09-25 00:24:54'),
(306, 22, 'Add product - Name: HBS liver protect 10s', '2017-09-25 00:25:26'),
(307, 22, 'Add product - Name: HBS liver protect 60s', '2017-09-25 00:25:45'),
(308, 22, 'Add product - Name: Revitalife Coffee', '2017-09-25 00:26:48'),
(309, 22, 'Add product - Name: Revitalife w/ Tonkat Ali', '2017-09-25 00:27:08'),
(310, 22, 'Add product - Name: check ladies', '2017-09-25 00:30:02'),
(311, 22, 'Add product - Name: check men', '2017-09-25 00:30:11'),
(312, 22, 'Add product - Name: shave less apd performulation', '2017-09-25 00:30:59'),
(313, 22, 'Add product - Name: Alert Fluoride Toothpaste', '2017-09-25 00:32:13'),
(314, 22, 'Add product - Name: femi care with mil extract', '2017-09-25 00:33:43'),
(315, 22, 'Add product - Name: femi care powder bloom', '2017-09-25 00:34:14'),
(316, 22, 'Add product - Name: femi care tender floral', '2017-09-25 00:34:53'),
(317, 22, 'Add product - Name: herbs & beauty shampoo balancing ', '2017-09-25 00:35:55'),
(318, 22, 'Add product - Name: herbs & beauty shampoo calming', '2017-09-25 00:36:12'),
(319, 22, 'Add product - Name: herbs & beauty shampoo deep cleansing', '2017-09-25 00:36:23'),
(320, 22, 'Add product - Name: herbs & beauty shampoo hand & body lotion', '2017-09-25 00:37:20'),
(321, 22, 'Add product - Name: nouvo 8 in 1 creme (10g)', '2017-09-25 00:38:05'),
(322, 22, 'Add product - Name: nouvo 8 in 1 creme (30g)', '2017-09-25 00:38:25'),
(323, 22, 'Add product - Name: nouvo 8 in 1 creme (30g)', '2017-09-25 00:38:25'),
(324, 22, 'Add product - Name: Nouvo Anti-Aging Facial Wash', '2017-09-25 00:38:52'),
(325, 22, 'Add product - Name: NWay conditioner', '2017-09-25 00:40:12'),
(326, 22, 'Add product - Name: NWay total anti-dandruff', '2017-09-25 00:41:28'),
(327, 22, 'Add product - Name: NWay total nourishment ', '2017-09-25 00:41:53'),
(328, 22, 'Add product - Name: NWay total shine care', '2017-09-25 00:44:24'),
(329, 22, 'Add product - Name: glow face and body lotion', '2017-09-25 00:44:54'),
(330, 22, 'Add product - Name: White Dove Baby Wash (100ml)', '2017-09-25 00:50:49'),
(331, 22, 'Update product - Name: White Dove Baby Wash (100ml)', '2017-09-25 00:51:22'),
(332, 22, 'Add product - Name: White Dove Baby Wash (200ml)', '2017-09-25 00:51:53'),
(333, 22, 'Add product - Name: White Dove Lotion (100ml)', '2017-09-25 00:52:20'),
(334, 22, 'Add product - Name: White Dove Lotion (200ml)', '2017-09-25 00:52:38'),
(335, 22, 'Add product - Name: White Dove Oil (100ml)', '2017-09-25 00:53:14'),
(336, 22, 'Add product - Name: White Dove powder (100g)', '2017-09-25 00:53:49'),
(337, 22, 'Add product - Name: White Dove powder (200g)', '2017-09-25 00:53:59'),
(338, 22, 'Add product - Name: White Dove shampoo (100ml)', '2017-09-25 00:54:27'),
(339, 22, 'Add product - Name: White Dove shampoo (100ml)', '2017-09-25 00:54:27'),
(340, 22, 'Add product - Name: White Dove shampoo (200ml)', '2017-09-25 00:54:38'),
(341, 22, 'Add product - Name: White Dove shampoo (200ml)', '2017-09-25 00:54:38'),
(342, 22, 'Add product - Name: White Dove little giggles (100ml)', '2017-09-25 00:56:19'),
(343, 22, 'Add product - Name: White Dove little giggles (100ml)', '2017-09-25 00:56:19'),
(344, 22, 'Add product - Name: White Dove little hugs(100ml)', '2017-09-25 00:56:27'),
(345, 22, 'Add product - Name: White Dove little kisses (100ml)', '2017-09-25 00:56:37'),
(346, 22, 'Add product - Name: White Dove little snuggles (100ml)', '2017-09-25 00:56:48'),
(347, 22, 'Add product - Name: White Dove milk soap (100g)', '2017-09-25 00:57:15'),
(348, 22, 'Add product - Name: White Dove milk soap (100g)', '2017-09-25 00:57:15'),
(349, 22, 'Add product - Name: blue wave dWL (200ml) refill', '2017-09-25 00:58:41'),
(350, 22, 'Add product - Name: blue wave PLD (800g)', '2017-09-25 00:59:26'),
(351, 22, 'Add product - Name: blue wave PLD (800g)', '2017-09-25 00:59:26'),
(352, 22, 'Add product - Name: powermax compact detergent', '2017-09-25 01:00:03'),
(353, 22, 'Add product - Name: powermax compact detergent', '2017-09-25 01:00:03'),
(354, 22, 'Add product - Name: sof & MMMM eternity', '2017-09-25 01:00:47'),
(355, 22, 'Add product - Name: sof & MMMM eternity', '2017-09-25 01:00:47'),
(356, 22, 'Add product - Name: sof & MMMM forever', '2017-09-25 01:00:59'),
(357, 22, 'Add product - Name: sof & MMMM forever', '2017-09-25 01:00:59'),
(358, 22, 'Add product - Name: sof & MMMM endless', '2017-09-25 01:01:09'),
(359, 22, 'Add product - Name: sof & MMMM endless', '2017-09-25 01:01:09'),
(360, 22, 'Add product - Name: target multi-insect killer', '2017-09-25 01:01:48'),
(361, 22, 'Add product - Name: target multi-insect killer', '2017-09-25 01:01:48'),
(362, 22, 'Add product - Name: tuff DWL (200ml) refill', '2017-09-25 01:02:41'),
(363, 22, 'Add product - Name: tuff DWL (200ml) refill', '2017-09-25 01:02:42'),
(364, 22, 'Add product - Name: tuff DWL (270ml)', '2017-09-25 01:02:58'),
(365, 22, 'Add product - Name: tuff DWL (270ml)', '2017-09-25 01:02:59'),
(366, 22, 'Add product - Name: tuff PLD advance (800g)', '2017-09-25 01:03:30'),
(367, 22, 'Update product - Name: Blue Wave DWL (200ml) Refill', '2017-09-25 01:26:14'),
(368, 22, 'Delete product - Name: blue wave PLD (800g)', '2017-09-25 01:26:31'),
(369, 22, 'Update product - Name: Blue Wave PLD (800g)', '2017-09-25 01:26:47'),
(370, 22, 'Update product - Name: HBS Liver Protect 10s', '2017-09-25 01:27:18'),
(371, 22, 'Update product - Name: HBS Liver Protect 60s', '2017-09-25 01:27:35'),
(372, 22, 'Update product - Name: Sophia Eau De Toilette (60ml)', '2017-09-25 01:34:37'),
(373, 22, 'Update product - Name: Wild Fire Eau De Toilette (105ml)', '2017-09-25 01:34:53'),
(374, 22, 'Update product - Name: PC Heart Dream Edt', '2017-09-25 01:38:51'),
(375, 22, 'Update product - Name: PC Heart Realize Edt', '2017-09-25 01:39:01'),
(376, 22, 'Update product - Name: Sophia Fragrance Talc', '2017-09-25 01:42:22'),
(377, 22, 'Update product - Name: Sophia Perfumed Rejuvenating Lotion', '2017-09-25 01:42:37'),
(378, 22, 'Update product - Name: Sophia Purse Concentrate (10ml)', '2017-09-25 01:42:49'),
(379, 22, 'Update product - Name: Wild Fire Pocket Edition (10ml)', '2017-09-25 01:42:58'),
(380, 22, 'Update product - Name: Sophia Perfumed Rejuvenating Lotion', '2017-09-25 01:50:42'),
(381, 22, 'Update product - Name: Sophia Fragrance Talc', '2017-09-25 01:54:03'),
(382, 22, 'Update product - Name: Sophia Purse Concentrate (10ml)', '2017-09-25 01:57:13'),
(383, 22, 'Update product - Name: Wild Fire Pocket Edition (10ml)', '2017-09-25 01:58:37'),
(384, 22, 'Delete product - Name: powermax compact detergent', '2017-09-25 01:59:10'),
(385, 22, 'Update product - Name: Powermax Compact Detergent', '2017-09-25 01:59:24'),
(386, 22, 'Delete product - Name: target multi-insect killer', '2017-09-25 01:59:38'),
(387, 22, 'Update product - Name: Target Multi-insect Killer', '2017-09-25 02:00:07');

-- --------------------------------------------------------

--
-- Table structure for table `claim`
--

CREATE TABLE `claim` (
  `claimid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `claim_status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `claim`
--

INSERT INTO `claim` (`claimid`, `userid`, `claim_status`) VALUES
(13, 53, 0);

-- --------------------------------------------------------

--
-- Table structure for table `claim_detail`
--

CREATE TABLE `claim_detail` (
  `claim_detailid` int(11) NOT NULL,
  `claimid` int(11) NOT NULL,
  `productid` int(11) NOT NULL,
  `claim_qty` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `claim_detail`
--

INSERT INTO `claim_detail` (`claim_detailid`, `claimid`, `productid`, `claim_qty`) VALUES
(15, 13, 73, 2),
(16, 13, 74, 2);

-- --------------------------------------------------------

--
-- Table structure for table `dealer`
--

CREATE TABLE `dealer` (
  `userid` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `middle_i` varchar(1) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `address` varchar(150) NOT NULL,
  `contact_info` varchar(50) NOT NULL,
  `birthdate` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `photo` varchar(150) NOT NULL,
  `join_date` date NOT NULL,
  `credit` double NOT NULL,
  `recruiter` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dealer`
--

INSERT INTO `dealer` (`userid`, `firstname`, `middle_i`, `lastname`, `address`, `contact_info`, `birthdate`, `gender`, `photo`, `join_date`, `credit`, `recruiter`) VALUES
(53, 'julyn', '', 'divinagracia', 'silay', '093456789760', '2017-09-24', 'Female', '', '2017-09-24', 700, 'None'),
(59, 'caren', '', 'cordova', 'silay city', '', '2017-09-24', 'Female', '', '2017-09-24', 1000, 'None'),
(60, 'ma. fe', '', 'oscianas', 'silay city', '', '2017-09-24', 'Female', '', '2017-09-24', 1000, 'Julyn . Divinagracia'),
(61, 'ma. corazon', '', 'rodriguez', 'silay city', '', '2017-09-24', 'Female', '', '2017-09-24', 1000, 'Julyn . Divinagracia'),
(62, 'anica mae', '', 'fuentes', 'silay city', '', '2017-09-24', 'Female', '', '2017-09-24', 1000, 'Julyn . Divinagracia'),
(63, 'daryll', '', 'sumalinog', 'silay city', '', '2017-09-24', 'Male', '', '2017-09-24', 1000, 'Julyn . Divinagracia'),
(64, 'nelma', '', 'liboon', 'silay city', '', '2017-09-24', 'Female', '', '2017-09-24', 1000, 'Julyn . Divinagracia'),
(65, 'charril ', '', 'pabular', 'silay city', '', '2017-09-24', 'Female', '', '2017-09-24', 1000, 'Julyn . Divinagracia'),
(66, 'dyna mae', '', 'alvarez', 'silay city', '', '2017-09-24', 'Female', '', '2017-09-24', 1000, 'Julyn . Divinagracia'),
(67, 'judy ann', '', 'deroja', 'silay city', '', '2017-09-24', 'Female', '', '2017-09-24', 1000, 'Julyn . Divinagracia'),
(68, 'renan', '', 'belleza', 'silay city', '', '2017-09-24', 'Male', '', '2017-09-24', 1000, 'Julyn . Divinagracia'),
(69, 'venalyn', '', 'buscado', 'silay city', '', '2017-09-24', 'Male', '', '2017-09-24', 1000, 'Julyn . Divinagracia'),
(70, 'jelly', '', 'mapa', 'silay city', '', '2017-09-24', 'Female', '', '2017-09-24', 1000, 'Julyn . Divinagracia'),
(71, 'jean', '', 'sombero', 'silay city', '', '2017-09-24', 'Female', '', '2017-09-24', 1000, 'Julyn . Divinagracia'),
(72, 'criza', '', 'barber', 'silay city', '', '2017-09-24', 'Female', '', '2017-09-24', 1000, 'Julyn . Divinagracia'),
(73, 'stephen', '', 'acuyan', 'silay city', '', '2017-09-24', 'Male', '', '2017-09-24', 1000, 'Julyn . Divinagracia'),
(74, 'stephen', '', 'acuyan', 'silay city', '', '2017-09-24', 'Male', '', '2017-09-24', 1000, 'Julyn . Divinagracia'),
(75, 'mary rose', '', 'gaspe', 'silay city', '', '2017-09-24', 'Male', '', '2017-09-24', 1000, 'Julyn . Divinagracia'),
(76, 'nikko', '', 'vargas', 'silay city', '', '2017-09-24', 'Male', '', '2017-09-24', 1000, 'Julyn . Divinagracia'),
(77, 'nica', '', 'lagrimas', 'silay city', '', '2017-09-24', 'Male', '', '2017-09-24', 1000, 'Jean . Sombero'),
(78, 'alony', '', 'gado', 'silay city', '', '2017-09-24', 'Male', '', '2017-09-24', 1000, 'Jean . Sombero'),
(79, 'jr', '', 'subibi', 'silay city', '', '2017-09-24', 'Male', '', '2017-09-24', 1000, 'Jean . Sombero'),
(80, 'jessa', '', 'gonzales', 'silay city', '', '2017-09-24', 'Female', '', '2017-09-24', 1000, 'Jean . Sombero'),
(81, 'jennifer', '', 'gialolo', 'silay city', '', '2017-09-24', 'Female', '', '2017-09-24', 1000, 'Jean . Sombero'),
(82, 'shallimer', '', 'nortiga', 'silay city', '', '2017-09-24', 'Female', '', '2017-09-24', 1000, 'Jean . Sombero');

-- --------------------------------------------------------

--
-- Table structure for table `dealer_backup`
--

CREATE TABLE `dealer_backup` (
  `userid` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `middle_i` varchar(1) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `address` varchar(150) NOT NULL,
  `contact_info` varchar(50) NOT NULL,
  `birthdate` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `photo` varchar(150) NOT NULL,
  `join_date` date NOT NULL,
  `credit` double NOT NULL,
  `recruiter` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dealer_backup`
--

INSERT INTO `dealer_backup` (`userid`, `firstname`, `middle_i`, `lastname`, `address`, `contact_info`, `birthdate`, `gender`, `photo`, `join_date`, `credit`, `recruiter`) VALUES
(53, 'julyn', '', 'divinagracia', 'silay', '093456789760', '2017-09-24', 'Female', '', '2017-09-24', 700, 'None'),
(59, 'caren', '', 'cordova', 'silay city', '', '2017-09-24', 'Female', '', '2017-09-24', 1000, 'None'),
(60, 'ma. fe', '', 'oscianas', 'silay city', '', '2017-09-24', 'Female', '', '2017-09-24', 1000, 'Julyn . Divinagracia'),
(61, 'ma. corazon', '', 'rodriguez', 'silay city', '', '2017-09-24', 'Female', '', '2017-09-24', 1000, 'Julyn . Divinagracia'),
(62, 'anica mae', '', 'fuentes', 'silay city', '', '2017-09-24', 'Female', '', '2017-09-24', 1000, 'Julyn . Divinagracia'),
(63, 'daryll', '', 'sumalinog', 'silay city', '', '2017-09-24', 'Male', '', '2017-09-24', 1000, 'Julyn . Divinagracia'),
(64, 'nelma', '', 'liboon', 'silay city', '', '2017-09-24', 'Female', '', '2017-09-24', 1000, 'Julyn . Divinagracia'),
(65, 'charril ', '', 'pabular', 'silay city', '', '2017-09-24', 'Female', '', '2017-09-24', 1000, 'Julyn . Divinagracia'),
(66, 'dyna mae', '', 'alvarez', 'silay city', '', '2017-09-24', 'Female', '', '2017-09-24', 1000, 'Julyn . Divinagracia'),
(67, 'judy ann', '', 'deroja', 'silay city', '', '2017-09-24', 'Female', '', '2017-09-24', 1000, 'Julyn . Divinagracia'),
(68, 'renan', '', 'belleza', 'silay city', '', '2017-09-24', 'Male', '', '2017-09-24', 1000, 'Julyn . Divinagracia'),
(69, 'venalyn', '', 'buscado', 'silay city', '', '2017-09-24', 'Male', '', '2017-09-24', 1000, 'Julyn . Divinagracia'),
(70, 'jelly', '', 'mapa', 'silay city', '', '2017-09-24', 'Female', '', '2017-09-24', 1000, 'Julyn . Divinagracia'),
(71, 'jean', '', 'sombero', 'silay city', '', '2017-09-24', 'Female', '', '2017-09-24', 1000, 'Julyn . Divinagracia'),
(72, 'criza', '', 'barber', 'silay city', '', '2017-09-24', 'Female', '', '2017-09-24', 1000, 'Julyn . Divinagracia'),
(73, 'stephen', '', 'acuyan', 'silay city', '', '2017-09-24', 'Male', '', '2017-09-24', 1000, 'Julyn . Divinagracia'),
(74, 'stephen', '', 'acuyan', 'silay city', '', '2017-09-24', 'Male', '', '2017-09-24', 1000, 'Julyn . Divinagracia'),
(75, 'mary rose', '', 'gaspe', 'silay city', '', '2017-09-24', 'Male', '', '2017-09-24', 1000, 'Julyn . Divinagracia'),
(76, 'nikko', '', 'vargas', 'silay city', '', '2017-09-24', 'Male', '', '2017-09-24', 1000, 'Julyn . Divinagracia'),
(77, 'nica', '', 'lagrimas', 'silay city', '', '2017-09-24', 'Male', '', '2017-09-24', 1000, 'Jean . Sombero'),
(78, 'alony', '', 'gado', 'silay city', '', '2017-09-24', 'Male', '', '2017-09-24', 1000, 'Jean . Sombero'),
(79, 'jr', '', 'subibi', 'silay city', '', '2017-09-24', 'Male', '', '2017-09-24', 1000, 'Jean . Sombero'),
(80, 'jessa', '', 'gonzales', 'silay city', '', '2017-09-24', 'Female', '', '2017-09-24', 1000, 'Jean . Sombero'),
(81, 'jennifer', '', 'gialolo', 'silay city', '', '2017-09-24', 'Female', '', '2017-09-24', 1000, 'Jean . Sombero'),
(82, 'shallimer', '', 'nortiga', 'silay city', '', '2017-09-24', 'Female', '', '2017-09-24', 1000, 'Jean . Sombero');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `userid` int(11) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `middle_i` varchar(1) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contact_info` varchar(50) NOT NULL,
  `birthdate` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `positionid` int(11) NOT NULL,
  `hire_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`userid`, `firstname`, `middle_i`, `lastname`, `address`, `contact_info`, `birthdate`, `gender`, `photo`, `positionid`, `hire_date`) VALUES
(52, 'Clene', '', 'dario', 'silay', '', '2017-09-04', 'Female', '', 2, '2017-09-24'),
(54, 'Rudy', '', 'Intal', 'silay city', '', '2017-09-24', 'Male', '', 6, '2017-09-24'),
(55, 'Mary Ann', '', 'petrola', 'silay city', '', '2017-09-24', 'Female', '', 8, '2017-09-24'),
(56, 'Rudgie', '', 'Saguire', 'silay city', '', '2017-09-24', 'Male', '', 4, '2017-09-24'),
(57, 'Victor Vonn', '', 'Lapu-os', 'silay city', '', '2017-09-24', 'Male', '', 5, '2017-09-24'),
(58, 'Ronnie', '', 'Escario', 'silay city', '', '2017-09-24', 'Male', '', 7, '2017-09-24');

-- --------------------------------------------------------

--
-- Table structure for table `employee_backup`
--

CREATE TABLE `employee_backup` (
  `userid` int(11) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `middle_i` varchar(1) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contact_info` varchar(50) NOT NULL,
  `birthdate` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `positionid` int(11) NOT NULL,
  `hire_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee_backup`
--

INSERT INTO `employee_backup` (`userid`, `firstname`, `middle_i`, `lastname`, `address`, `contact_info`, `birthdate`, `gender`, `photo`, `positionid`, `hire_date`) VALUES
(52, 'Clene', '', 'dario', 'silay', '', '2017-09-04', 'Female', '', 2, '2017-09-24'),
(54, 'Rudy', '', 'Intal', 'silay city', '', '2017-09-24', 'Male', '', 6, '2017-09-24'),
(55, 'Mary Ann', '', 'petrola', 'silay city', '', '2017-09-24', 'Female', '', 8, '2017-09-24'),
(56, 'Rudgie', '', 'Saguire', 'silay city', '', '2017-09-24', 'Male', '', 4, '2017-09-24'),
(57, 'Victor Vonn', '', 'Lapu-os', 'silay city', '', '2017-09-24', 'Male', '', 5, '2017-09-24'),
(58, 'Ronnie', '', 'Escario', 'silay city', '', '2017-09-24', 'Male', '', 7, '2017-09-24');

-- --------------------------------------------------------

--
-- Table structure for table `emp_position`
--

CREATE TABLE `emp_position` (
  `positionid` int(11) NOT NULL,
  `p_description` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emp_position`
--

INSERT INTO `emp_position` (`positionid`, `p_description`) VALUES
(2, 'Business Development Officer'),
(4, 'Credit and Collection Specialist'),
(5, 'Invoicing Clerk'),
(6, 'Warehouse Custodian'),
(7, 'Warehouse Assistant'),
(8, 'Business Development Manager');

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE `inventory` (
  `inventoryid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `productid` int(11) NOT NULL,
  `action` varchar(200) NOT NULL,
  `inv_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`inventoryid`, `userid`, `productid`, `action`, `inv_date`) VALUES
(24, 22, 73, 'Add product - Stock: ', '2017-09-24 17:55:39'),
(25, 22, 74, 'Add product - Stock: ', '2017-09-24 17:55:48'),
(26, 22, 73, 'Update quantity: from 0 to 1000000', '2017-09-24 17:57:31'),
(27, 22, 74, 'Update quantity: from 0 to 100000', '2017-09-24 17:57:36'),
(28, 22, 73, 'Update quantity: from 999998 to 10000', '2017-09-25 00:00:38'),
(29, 22, 74, 'Add product - Stock: 10000', '2017-09-25 00:03:31'),
(30, 22, 75, 'Add product - Stock: 10000', '2017-09-25 00:03:50'),
(31, 22, 76, 'Add product - Stock: 10000', '2017-09-25 00:04:42'),
(32, 22, 77, 'Add product - Stock: 10000', '2017-09-25 00:05:51'),
(33, 22, 78, 'Add product - Stock: 10000', '2017-09-25 00:06:15'),
(34, 22, 79, 'Add product - Stock: 10000', '2017-09-25 00:06:57'),
(35, 22, 80, 'Add product - Stock: 10000', '2017-09-25 00:07:10'),
(36, 22, 81, 'Add product - Stock: 10000', '2017-09-25 00:07:25'),
(37, 22, 82, 'Add product - Stock: 10000', '2017-09-25 00:07:37'),
(38, 22, 83, 'Add product - Stock: 10000', '2017-09-25 00:08:21'),
(39, 22, 84, 'Add product - Stock: 10000', '2017-09-25 00:09:25'),
(40, 22, 85, 'Add product - Stock: 10000', '2017-09-25 00:09:48'),
(41, 22, 86, 'Add product - Stock: 10000', '2017-09-25 00:10:06'),
(42, 22, 87, 'Add product - Stock: 10000', '2017-09-25 00:10:37'),
(43, 22, 88, 'Add product - Stock: 10000', '2017-09-25 00:10:54'),
(44, 22, 89, 'Add product - Stock: 10000', '2017-09-25 00:11:38'),
(45, 22, 90, 'Add product - Stock: 10000', '2017-09-25 00:11:55'),
(46, 22, 91, 'Add product - Stock: 10000', '2017-09-25 00:12:13'),
(47, 22, 92, 'Add product - Stock: 10000', '2017-09-25 00:12:25'),
(48, 22, 93, 'Add product - Stock: 10000', '2017-09-25 00:14:36'),
(49, 22, 94, 'Add product - Stock: 10000', '2017-09-25 00:15:32'),
(50, 22, 95, 'Add product - Stock: 10000', '2017-09-25 00:15:47'),
(51, 22, 96, 'Add product - Stock: 10000', '2017-09-25 00:16:41'),
(52, 22, 97, 'Add product - Stock: 10000', '2017-09-25 00:17:08'),
(53, 22, 98, 'Add product - Stock: 10000', '2017-09-25 00:17:31'),
(54, 22, 99, 'Add product - Stock: 10000', '2017-09-25 00:18:01'),
(55, 22, 100, 'Add product - Stock: 10000', '2017-09-25 00:18:15'),
(56, 22, 101, 'Add product - Stock: 10000', '2017-09-25 00:18:46'),
(57, 22, 102, 'Add product - Stock: 10000', '2017-09-25 00:18:58'),
(58, 22, 103, 'Add product - Stock: 10000', '2017-09-25 00:19:33'),
(59, 22, 104, 'Add product - Stock: 10000', '2017-09-25 00:20:10'),
(60, 22, 105, 'Add product - Stock: 10000', '2017-09-25 00:20:50'),
(61, 22, 106, 'Add product - Stock: 10000', '2017-09-25 00:21:15'),
(62, 22, 107, 'Add product - Stock: 10000', '2017-09-25 00:22:05'),
(63, 22, 108, 'Add product - Stock: 10000', '2017-09-25 00:22:52'),
(64, 22, 109, 'Add product - Stock: 10000', '2017-09-25 00:23:57'),
(65, 22, 110, 'Add product - Stock: 10000', '2017-09-25 00:24:54'),
(66, 22, 111, 'Add product - Stock: 10000', '2017-09-25 00:25:26'),
(67, 22, 112, 'Add product - Stock: 10000', '2017-09-25 00:25:45'),
(68, 22, 113, 'Add product - Stock: 10000', '2017-09-25 00:26:48'),
(69, 22, 114, 'Add product - Stock: 10000', '2017-09-25 00:27:08'),
(70, 22, 115, 'Add product - Stock: 10000', '2017-09-25 00:30:02'),
(71, 22, 116, 'Add product - Stock: 10000', '2017-09-25 00:30:12'),
(72, 22, 117, 'Add product - Stock: 10000', '2017-09-25 00:30:59'),
(73, 22, 0, 'Add product - Stock: 10000', '2017-09-25 00:31:38'),
(74, 22, 118, 'Add product - Stock: 10000', '2017-09-25 00:32:14'),
(75, 22, 119, 'Add product - Stock: 10000', '2017-09-25 00:33:43'),
(76, 22, 120, 'Add product - Stock: 10000', '2017-09-25 00:34:14'),
(77, 22, 121, 'Add product - Stock: 10000', '2017-09-25 00:34:53'),
(78, 22, 122, 'Add product - Stock: 10000', '2017-09-25 00:35:55'),
(79, 22, 123, 'Add product - Stock: 10000', '2017-09-25 00:36:12'),
(80, 22, 124, 'Add product - Stock: 10000', '2017-09-25 00:36:23'),
(81, 22, 125, 'Add product - Stock: 10000', '2017-09-25 00:37:20'),
(82, 22, 126, 'Add product - Stock: 10000', '2017-09-25 00:38:05'),
(83, 22, 127, 'Add product - Stock: 10000', '2017-09-25 00:38:25'),
(84, 22, 128, 'Add product - Stock: 10000', '2017-09-25 00:38:25'),
(85, 22, 129, 'Add product - Stock: 10000', '2017-09-25 00:38:52'),
(86, 22, 130, 'Add product - Stock: 10000', '2017-09-25 00:40:12'),
(87, 22, 131, 'Add product - Stock: 10000', '2017-09-25 00:41:28'),
(88, 22, 132, 'Add product - Stock: 10000', '2017-09-25 00:41:53'),
(89, 22, 133, 'Add product - Stock: 10000', '2017-09-25 00:44:24'),
(90, 22, 134, 'Add product - Stock: 10000', '2017-09-25 00:44:54'),
(91, 22, 135, 'Add product - Stock: 10000', '2017-09-25 00:50:50'),
(92, 22, 136, 'Add product - Stock: 10000', '2017-09-25 00:51:54'),
(93, 22, 137, 'Add product - Stock: 10000', '2017-09-25 00:52:20'),
(94, 22, 138, 'Add product - Stock: 10000', '2017-09-25 00:52:38'),
(95, 22, 139, 'Add product - Stock: 10000', '2017-09-25 00:53:14'),
(96, 22, 140, 'Add product - Stock: 10000', '2017-09-25 00:53:50'),
(97, 22, 141, 'Add product - Stock: 10000', '2017-09-25 00:53:59'),
(98, 22, 142, 'Add product - Stock: 10000', '2017-09-25 00:54:27'),
(99, 22, 143, 'Add product - Stock: 10000', '2017-09-25 00:54:27'),
(100, 22, 144, 'Add product - Stock: 10000', '2017-09-25 00:54:38'),
(101, 22, 145, 'Add product - Stock: 10000', '2017-09-25 00:54:38'),
(102, 22, 146, 'Add product - Stock: 10000', '2017-09-25 00:56:19'),
(103, 22, 147, 'Add product - Stock: 10000', '2017-09-25 00:56:19'),
(104, 22, 148, 'Add product - Stock: 10000', '2017-09-25 00:56:27'),
(105, 22, 149, 'Add product - Stock: 10000', '2017-09-25 00:56:38'),
(106, 22, 150, 'Add product - Stock: 10000', '2017-09-25 00:56:48'),
(107, 22, 151, 'Add product - Stock: 10000', '2017-09-25 00:57:15'),
(108, 22, 152, 'Add product - Stock: 10000', '2017-09-25 00:57:15'),
(109, 22, 153, 'Add product - Stock: 10000', '2017-09-25 00:58:41'),
(110, 22, 154, 'Add product - Stock: 10000', '2017-09-25 00:59:26'),
(111, 22, 155, 'Add product - Stock: 10000', '2017-09-25 00:59:26'),
(112, 22, 156, 'Add product - Stock: 10000', '2017-09-25 01:00:03'),
(113, 22, 157, 'Add product - Stock: 10000', '2017-09-25 01:00:03'),
(114, 22, 158, 'Add product - Stock: 10000', '2017-09-25 01:00:47'),
(115, 22, 159, 'Add product - Stock: 10000', '2017-09-25 01:00:47'),
(116, 22, 160, 'Add product - Stock: 10000', '2017-09-25 01:00:59'),
(117, 22, 161, 'Add product - Stock: 10000', '2017-09-25 01:00:59'),
(118, 22, 162, 'Add product - Stock: 10000', '2017-09-25 01:01:09'),
(119, 22, 163, 'Add product - Stock: 10000', '2017-09-25 01:01:09'),
(120, 22, 164, 'Add product - Stock: 10000', '2017-09-25 01:01:48'),
(121, 22, 165, 'Add product - Stock: 10000', '2017-09-25 01:01:48'),
(122, 22, 166, 'Add product - Stock: 10000', '2017-09-25 01:02:41'),
(123, 22, 167, 'Add product - Stock: 10000', '2017-09-25 01:02:42'),
(124, 22, 168, 'Add product - Stock: 10000', '2017-09-25 01:02:58'),
(125, 22, 169, 'Add product - Stock: 10000', '2017-09-25 01:02:59'),
(126, 22, 170, 'Add product - Stock: 10000', '2017-09-25 01:03:30');

-- --------------------------------------------------------

--
-- Table structure for table `liquidation`
--

CREATE TABLE `liquidation` (
  `liquidationid` int(11) NOT NULL,
  `l_description` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `liquidation_backup`
--

CREATE TABLE `liquidation_backup` (
  `liquidationid` int(11) NOT NULL,
  `l_description` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `liqui_report`
--

CREATE TABLE `liqui_report` (
  `liqui_reportid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `liquidationid` int(11) NOT NULL,
  `amount` double NOT NULL,
  `liqui_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `password`
--

CREATE TABLE `password` (
  `passwordid` int(11) NOT NULL,
  `original` varchar(30) NOT NULL,
  `mdfive` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `password`
--

INSERT INTO `password` (`passwordid`, `original`, `mdfive`) VALUES
(6, 'admin', '21232f297a57a5a743894a0e4a801fc3'),
(7, 'clene', '03a4cb22f357ba391f6e57088c562c76'),
(8, 'juyln', '6460e82cb15b218e841c2182bb56c9a0'),
(9, 'rudy', 'cfce9735de7c3873a55331a4e74b70fc'),
(10, 'maryann', 'cadb4c500b8abbea8d9106ab83aed8c9'),
(11, 'rudgie', '736c42070ebdfe26110018e87ab1fb8d'),
(12, 'victor', 'ffc150a160d37e92012c196b6af4160d'),
(13, 'ronnie', 'b071c0c8d6adc66a3c2eb1b9b87d6d5c'),
(14, 'caren', 'ccd03f5dd29e86e7099d624d7f8a3e46'),
(15, 'fe', '2d917f5d1275e96fd75e6352e26b1387'),
(16, 'corazon', '0a43c50e23a05929e7f2b075170ce0a2'),
(17, 'anicamae', '9158daae9dee63e612c06e76ac6d96b8'),
(18, 'daryll', '1a1c020deb869f724c80e2268f7d7ac5'),
(19, 'nemla', '8baf8f9fd866b0d768fbf2b50c0622e8'),
(20, 'cha', 'c2477f223c3c4ca19a5029e0cd91fda8'),
(21, 'dyna', '9ca8171f1c0a210be8f7130385dd74ac'),
(22, 'judy', 'c6a1ca47b645f4c4b786ce951f8d26a7'),
(23, 'renan', '1db68d9861e914b9a2dc65ca868c6d1f'),
(24, 'venalyn', 'ac4af6ecf39d2be221a521b5cb4aab5a'),
(25, 'jelly', '328356824c8487cf314aa350d11ae145'),
(26, 'jean', 'b71985397688d6f1820685dde534981b'),
(27, 'cirza', '1f87496c36aae9f56ad127be3b72c3fb'),
(28, 'stephen', '7ff36797539130f77445f48da5d4a126'),
(29, 'stephen', '7ff36797539130f77445f48da5d4a126'),
(30, 'mary', 'b8e7be5dfa2ce0714d21dcfc7d72382c'),
(31, 'nikko', 'bbb1818a0e674a0a8c3b0ac266f91313'),
(32, 'nica', '10dae41b3cd978b460ce02f4ad50624b'),
(33, 'alony', '03461f26f97661d6fd31a496ee1f0707'),
(34, 'jr', 'd5de679d452cb429e6f55e64a9988cbf'),
(35, 'jessa', 'a5b85dcc021937f1fb0148939ede8cf3'),
(36, 'jennifer', '1660fe5c81c4ce64a2611494c439e1ba'),
(37, 'sha', 'ca794fb2d950acf25c964ecc35f2d7e2');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `productid` int(11) NOT NULL,
  `prod_name` varchar(100) NOT NULL,
  `categoryid` int(11) NOT NULL,
  `prod_price` double NOT NULL,
  `p_quantity` int(11) NOT NULL,
  `img_src` varchar(200) NOT NULL,
  `p_discount` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`productid`, `prod_name`, `categoryid`, `prod_price`, `p_quantity`, `img_src`, `p_discount`) VALUES
(73, 'Aspire Escape', 1, 140, 10000, 'upload/aspire escape_1506268968.jpg', 0),
(74, 'Aspire Desire', 1, 140, 10000, 'upload/aspire desire_1506269118.jpg', 0),
(75, 'Aspire Fantasy', 1, 140, 10000, 'upload/aspire fantasy_1506269125.jpg', 0),
(76, 'Aspire Obsession', 1, 140, 10000, 'upload/aspire obsession_1506269134.jpg', 0),
(77, 'Aspire Passion', 1, 140, 10000, 'upload/aspire passion_1506269151.jpg', 0),
(78, 'Aspire Charm', 1, 140, 10000, '', 0),
(79, 'Cool-its Amazing', 1, 115, 10000, 'upload/cool it amazing_1506269217.jpg', 0),
(80, 'Cool-its Charming', 1, 115, 10000, 'upload/cool it charming_1506269230.jpg', 0),
(81, 'Cool-its Happy', 1, 115, 10000, 'upload/cool it happy_1506269245.jpg', 0),
(82, 'Cool-its Trendy', 1, 115, 10000, 'upload/cool it trendy_1506269257.jpg', 0),
(83, 'Cool-its Witty', 1, 115, 10000, 'upload/cool it witty_1506269301.jpg', 0),
(84, 'Formen Fever', 1, 155, 10000, 'upload/formen fever_1506269365.jpg', 0),
(85, 'Formen Force', 1, 155, 10000, 'upload/formen force_1506269388.jpg', 0),
(86, 'Formen Flame', 1, 155, 10000, '', 0),
(87, 'Formen Frost', 1, 155, 10000, 'upload/formen frost_1506269437.jpg', 0),
(88, 'Formen Fusion', 1, 155, 10000, 'upload/formen fussion_1506269454.jpg', 0),
(89, 'Formen Fierce', 1, 155, 10000, '', 0),
(90, 'PC Heart Believe Edt', 1, 257, 10000, 'upload/pc hearts believe_1506269515.png', 0),
(91, 'PC Heart Dream Edt', 1, 257, 10000, 'upload/pc hearts believe_1506274731.jpg', 0),
(92, 'PC Heart Realize Edt', 1, 257, 10000, 'upload/pc hearts believe_1506274741.jpg', 0),
(93, 'Sophia Eau De Toilette (60ml)', 1, 359, 10000, 'upload/Sophia eau de toilette Fragrance_1506274477.jpg', 0),
(94, 'Sophia Purse Concentrate (10ml)', 1, 89, 10000, 'upload/sophia purse_1506275832.jpg', 0),
(95, 'Sophia Fragrance Talc', 1, 99, 10000, 'upload/Sophia talc_1506275643.jpg', 0),
(96, 'Sophia Perfumed Rejuvenating Lotion', 1, 129, 10000, 'upload/Sophia lotion_1506275442.jpg', 0),
(97, 'Wild Fire Eau De Toilette (105ml)', 1, 389, 10000, 'upload/Wild Fire eau de toilette_1506274493.jpg', 0),
(98, 'Wild Fire Pocket Edition (10ml)', 1, 89, 10000, 'upload/wildfire_1506275917.jpg', 0),
(99, 'Just Like Home Lemon Orchard', 2, 121, 10000, 'upload/jlh lemon_1506269881.png', 0),
(100, 'Just Like Home Ocean Fresh', 2, 121, 10000, 'upload/jlh ocean_1506269895.png', 0),
(101, 'Just Like Home tropical harvest', 2, 121, 10000, '', 0),
(102, 'Just Like Home vanilla mist', 2, 121, 10000, '', 0),
(103, 'tuff germban', 2, 127, 10000, '', 0),
(104, 'Tuff Protectant', 2, 359, 10000, 'upload/tuff protectant_1506270010.png', 0),
(105, 'Tuff TBC Classic (500ml)', 2, 147, 10000, 'upload/tuff tbc classic 500_1506270098.png', 0),
(106, 'Tuff TBC Classic (1000ml)', 2, 275, 10000, 'upload/tuff tbc classic 1000_1506270075.png', 0),
(107, 'Tuff TBC Lemon (1000ml)', 2, 275, 10000, 'upload/tuff tbc lemon_1506270125.png', 0),
(108, 'HBS Colostrum', 3, 680, 10000, 'upload/hbs colostrum_1506270171.png', 0),
(109, 'HBS Glutalight', 3, 680, 10000, 'upload/hbs glutalight_1506270260.jpg', 0),
(110, 'HBS Immuno-C', 3, 390, 10000, 'upload/hbs immuno c_1506270294.jpg', 0),
(111, 'HBS Liver Protect 10s', 3, 197, 10000, 'upload/hbs liverprotect_1506274038.jpg', 0),
(112, 'HBS Liver Protect 60s', 3, 1130, 10000, 'upload/hbs liverprotect_1506274055.jpg', 0),
(113, 'Revitalife Coffee', 6, 390, 10000, 'upload/revitalife coffee_1506270408.png', 0),
(114, 'Revitalife w/ Tonkat Ali', 6, 470, 10000, 'upload/revitalife with tonkat ali_1506270428.png', 0),
(115, 'check ladies', 4, 89, 10000, '', 0),
(116, 'check men', 4, 89, 10000, '', 0),
(117, 'shave less apd performulation', 4, 79, 10000, '', 0),
(118, 'Alert Fluoride Toothpaste', 4, 118, 10000, 'upload/percare alert fluoride_1506270733.jpg', 0),
(119, 'femi care with mil extract', 4, 109, 10000, '', 0),
(120, 'femi care powder bloom', 4, 99, 10000, '', 0),
(121, 'femi care tender floral', 4, 99, 10000, '', 0),
(122, 'herbs & beauty shampoo balancing ', 4, 119, 10000, '', 0),
(123, 'herbs & beauty shampoo calming', 4, 119, 10000, '', 0),
(124, 'herbs & beauty shampoo deep cleansing', 4, 119, 10000, '', 0),
(125, 'herbs & beauty shampoo hand & body lotion', 4, 109, 10000, '', 0),
(126, 'nouvo 8 in 1 creme (10g)', 4, 149, 10000, '', 0),
(127, 'nouvo 8 in 1 creme (30g)', 4, 399, 10000, '', 0),
(128, 'nouvo 8 in 1 creme (30g)', 4, 399, 10000, '', 0),
(129, 'Nouvo Anti-Aging Facial Wash', 4, 99, 10000, '', 0),
(130, 'NWay conditioner', 4, 145, 10000, '', 0),
(131, 'NWay total anti-dandruff', 4, 104.75, 10000, '', 0),
(132, 'NWay total nourishment ', 4, 99.75, 10000, '', 0),
(133, 'NWay total shine care', 4, 99.75, 10000, '', 0),
(134, 'glow face and body lotion', 4, 145, 10000, '', 0),
(135, 'White Dove Baby Wash (100ml)', 5, 72, 10000, 'upload/white dove baby wash_1506271881.jpg', 0),
(136, 'White Dove Baby Wash (200ml)', 5, 119, 10000, 'upload/white dove baby wash_1506271913.jpg', 0),
(137, 'White Dove Lotion (100ml)', 5, 83, 10000, 'upload/white dove lotion_1506271940.jpg', 0),
(138, 'White Dove Lotion (200ml)', 5, 137, 10000, 'upload/white dove lotion_1506271958.jpg', 0),
(139, 'White Dove Oil (100ml)', 5, 72, 10000, '', 0),
(140, 'White Dove powder (100g)', 5, 72, 10000, '', 0),
(141, 'White Dove powder (200g)', 5, 119, 10000, '', 0),
(142, 'White Dove shampoo (100ml)', 5, 72, 10000, '', 0),
(143, 'White Dove shampoo (100ml)', 5, 72, 10000, '', 0),
(144, 'White Dove shampoo (200ml)', 5, 119, 10000, '', 0),
(145, 'White Dove shampoo (200ml)', 5, 119, 10000, '', 0),
(146, 'White Dove little giggles (100ml)', 5, 72, 10000, '', 0),
(147, 'White Dove little giggles (100ml)', 5, 72, 10000, '', 0),
(148, 'White Dove little hugs(100ml)', 5, 72, 10000, '', 0),
(149, 'White Dove little kisses (100ml)', 5, 72, 10000, '', 0),
(150, 'White Dove little snuggles (100ml)', 5, 72, 10000, '', 0),
(151, 'White Dove milk soap (100g)', 5, 59, 10000, '', 0),
(152, 'White Dove milk soap (100g)', 5, 59, 10000, '', 0),
(153, 'Blue Wave DWL (200ml) Refill', 2, 35, 10000, 'upload/blue wave dwl_1506273973.jpg', 0),
(154, 'Blue Wave PLD (800g)', 2, 130, 10000, 'upload/blue wave pld_1506274007.jpg', 0),
(157, 'Powermax Compact Detergent', 2, 169, 10000, 'upload/powermax_1506275963.jpg', 0),
(158, 'sof & MMMM eternity', 2, 259, 10000, '', 0),
(159, 'sof & MMMM eternity', 2, 259, 10000, '', 0),
(160, 'sof & MMMM forever', 2, 259, 10000, '', 0),
(161, 'sof & MMMM forever', 2, 259, 10000, '', 0),
(162, 'sof & MMMM endless', 2, 259, 10000, '', 0),
(163, 'sof & MMMM endless', 2, 259, 10000, '', 0),
(164, 'Target Multi-insect Killer', 2, 309, 10000, 'upload/target_1506276007.jpg', 0),
(166, 'tuff DWL (200ml) refill', 2, 58, 10000, '', 0),
(167, 'tuff DWL (200ml) refill', 2, 58, 10000, '', 0),
(168, 'tuff DWL (270ml)', 2, 99, 10000, '', 0),
(169, 'tuff DWL (270ml)', 2, 99, 10000, '', 0),
(170, 'tuff PLD advance (800g)', 2, 166, 10000, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `product_backup`
--

CREATE TABLE `product_backup` (
  `productid` int(11) NOT NULL,
  `prod_name` varchar(100) NOT NULL,
  `categoryid` int(11) NOT NULL,
  `prod_price` double NOT NULL,
  `p_quantity` int(11) NOT NULL,
  `img_src` varchar(200) NOT NULL,
  `p_discount` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_backup`
--

INSERT INTO `product_backup` (`productid`, `prod_name`, `categoryid`, `prod_price`, `p_quantity`, `img_src`, `p_discount`) VALUES
(73, 'Aspire Escape', 1, 140, 999998, 'upload/aspire escape_1506268968.jpg', 0),
(74, 'Aspire Desire', 1, 140, 99998, 'upload/aspire desire_1506269118.jpg', 0),
(75, 'Aspire Fantasy', 1, 140, 10000, 'upload/aspire fantasy_1506269125.jpg', 0),
(76, 'Aspire Obsession', 1, 140, 10000, 'upload/aspire obsession_1506269134.jpg', 0),
(77, 'Aspire Passion', 1, 140, 10000, 'upload/aspire passion_1506269151.jpg', 0),
(78, 'Aspire Charm', 1, 140, 10000, '', 0),
(79, 'Cool-its Amazing', 1, 115, 10000, 'upload/cool it amazing_1506269217.jpg', 0),
(80, 'Cool-its Charming', 1, 115, 10000, 'upload/cool it charming_1506269230.jpg', 0),
(81, 'Cool-its Happy', 1, 115, 10000, 'upload/cool it happy_1506269245.jpg', 0),
(82, 'Cool-its Trendy', 1, 115, 10000, 'upload/cool it trendy_1506269257.jpg', 0),
(83, 'Cool-its Witty', 1, 115, 10000, 'upload/cool it witty_1506269301.jpg', 0),
(84, 'Formen Fever', 1, 155, 10000, 'upload/formen fever_1506269365.jpg', 0),
(85, 'Formen Force', 1, 155, 10000, 'upload/formen force_1506269388.jpg', 0),
(86, 'Formen Flame', 1, 155, 10000, '', 0),
(87, 'Formen Frost', 1, 155, 10000, 'upload/formen frost_1506269437.jpg', 0),
(88, 'Formen Fusion', 1, 155, 10000, 'upload/formen fussion_1506269454.jpg', 0),
(89, 'Formen Fierce', 1, 155, 10000, '', 0),
(90, 'PC Heart Believe Edt', 1, 257, 10000, 'upload/pc hearts believe_1506269515.png', 0),
(91, 'PC Heart Dream Edt', 1, 257, 10000, 'upload/pc hearts believe_1506274731.jpg', 0),
(92, 'PC Heart Realize Edt', 1, 257, 10000, 'upload/pc hearts believe_1506274741.jpg', 0),
(93, 'Sophia Eau De Toilette (60ml)', 1, 359, 10000, 'upload/Sophia eau de toilette Fragrance_1506274477.jpg', 0),
(94, 'Sophia Purse Concentrate (10ml)', 1, 89, 10000, 'upload/sophia purse_1506275832.jpg', 0),
(95, 'Sophia Fragrance Talc', 1, 99, 10000, 'upload/Sophia talc_1506275643.jpg', 0),
(96, 'Sophia Perfumed Rejuvenating Lotion', 1, 129, 10000, 'upload/Sophia lotion_1506275442.jpg', 0),
(97, 'Wild Fire Eau De Toilette (105ml)', 1, 389, 10000, 'upload/Wild Fire eau de toilette_1506274493.jpg', 0),
(98, 'Wild Fire Pocket Edition (10ml)', 1, 89, 10000, 'upload/wildfire_1506275917.jpg', 0),
(99, 'Just Like Home Lemon Orchard', 2, 121, 10000, 'upload/jlh lemon_1506269881.png', 0),
(100, 'Just Like Home Ocean Fresh', 2, 121, 10000, 'upload/jlh ocean_1506269895.png', 0),
(101, 'Just Like Home tropical harvest', 2, 121, 10000, '', 0),
(102, 'Just Like Home vanilla mist', 2, 121, 10000, '', 0),
(103, 'tuff germban', 2, 127, 10000, '', 0),
(104, 'Tuff Protectant', 2, 359, 10000, 'upload/tuff protectant_1506270010.png', 0),
(105, 'Tuff TBC Classic (500ml)', 2, 147, 10000, 'upload/tuff tbc classic 500_1506270098.png', 0),
(106, 'Tuff TBC Classic (1000ml)', 2, 275, 10000, 'upload/tuff tbc classic 1000_1506270075.png', 0),
(107, 'Tuff TBC Lemon (1000ml)', 2, 275, 10000, 'upload/tuff tbc lemon_1506270125.png', 0),
(108, 'HBS Colostrum', 3, 680, 10000, 'upload/hbs colostrum_1506270171.png', 0),
(109, 'HBS Glutalight', 3, 680, 10000, 'upload/hbs glutalight_1506270260.jpg', 0),
(110, 'HBS Immuno-C', 3, 390, 10000, 'upload/hbs immuno c_1506270294.jpg', 0),
(111, 'HBS Liver Protect 10s', 3, 197, 10000, 'upload/hbs liverprotect_1506274038.jpg', 0),
(112, 'HBS Liver Protect 60s', 3, 1130, 10000, 'upload/hbs liverprotect_1506274055.jpg', 0),
(113, 'Revitalife Coffee', 6, 390, 10000, 'upload/revitalife coffee_1506270408.png', 0),
(114, 'Revitalife w/ Tonkat Ali', 6, 470, 10000, 'upload/revitalife with tonkat ali_1506270428.png', 0),
(115, 'check ladies', 4, 89, 10000, '', 0),
(116, 'check men', 4, 89, 10000, '', 0),
(117, 'shave less apd performulation', 4, 79, 10000, '', 0),
(118, 'Alert Fluoride Toothpaste', 4, 118, 10000, 'upload/percare alert fluoride_1506270733.jpg', 0),
(119, 'femi care with mil extract', 4, 109, 10000, '', 0),
(120, 'femi care powder bloom', 4, 99, 10000, '', 0),
(121, 'femi care tender floral', 4, 99, 10000, '', 0),
(122, 'herbs & beauty shampoo balancing ', 4, 119, 10000, '', 0),
(123, 'herbs & beauty shampoo calming', 4, 119, 10000, '', 0),
(124, 'herbs & beauty shampoo deep cleansing', 4, 119, 10000, '', 0),
(125, 'herbs & beauty shampoo hand & body lotion', 4, 109, 10000, '', 0),
(126, 'nouvo 8 in 1 creme (10g)', 4, 149, 10000, '', 0),
(127, 'nouvo 8 in 1 creme (30g)', 4, 399, 10000, '', 0),
(128, 'nouvo 8 in 1 creme (30g)', 4, 399, 10000, '', 0),
(129, 'Nouvo Anti-Aging Facial Wash', 4, 99, 10000, '', 0),
(130, 'NWay conditioner', 4, 145, 10000, '', 0),
(131, 'NWay total anti-dandruff', 4, 104.75, 10000, '', 0),
(132, 'NWay total nourishment ', 4, 99.75, 10000, '', 0),
(133, 'NWay total shine care', 4, 99.75, 10000, '', 0),
(134, 'glow face and body lotion', 4, 145, 10000, '', 0),
(135, 'White Dove Baby Wash (100ml)', 5, 72, 10000, 'upload/white dove baby wash_1506271881.jpg', 0),
(136, 'White Dove Baby Wash (200ml)', 5, 119, 10000, 'upload/white dove baby wash_1506271913.jpg', 0),
(137, 'White Dove Lotion (100ml)', 5, 83, 10000, 'upload/white dove lotion_1506271940.jpg', 0),
(138, 'White Dove Lotion (200ml)', 5, 137, 10000, 'upload/white dove lotion_1506271958.jpg', 0),
(139, 'White Dove Oil (100ml)', 5, 72, 10000, '', 0),
(140, 'White Dove powder (100g)', 5, 72, 10000, '', 0),
(141, 'White Dove powder (200g)', 5, 119, 10000, '', 0),
(142, 'White Dove shampoo (100ml)', 5, 72, 10000, '', 0),
(143, 'White Dove shampoo (100ml)', 5, 72, 10000, '', 0),
(144, 'White Dove shampoo (200ml)', 5, 119, 10000, '', 0),
(145, 'White Dove shampoo (200ml)', 5, 119, 10000, '', 0),
(146, 'White Dove little giggles (100ml)', 5, 72, 10000, '', 0),
(147, 'White Dove little giggles (100ml)', 5, 72, 10000, '', 0),
(148, 'White Dove little hugs(100ml)', 5, 72, 10000, '', 0),
(149, 'White Dove little kisses (100ml)', 5, 72, 10000, '', 0),
(150, 'White Dove little snuggles (100ml)', 5, 72, 10000, '', 0),
(151, 'White Dove milk soap (100g)', 5, 59, 10000, '', 0),
(152, 'White Dove milk soap (100g)', 5, 59, 10000, '', 0),
(153, 'Blue Wave DWL (200ml) Refill', 2, 35, 10000, 'upload/blue wave dwl_1506273973.jpg', 0),
(154, 'Blue Wave PLD (800g)', 2, 130, 10000, 'upload/blue wave pld_1506274007.jpg', 0),
(155, 'blue wave PLD (800g)', 2, 130, 10000, '', 0),
(156, 'powermax compact detergent', 2, 169, 10000, '', 0),
(157, 'Powermax Compact Detergent', 2, 169, 10000, 'upload/powermax_1506275963.jpg', 0),
(158, 'sof & MMMM eternity', 2, 259, 10000, '', 0),
(159, 'sof & MMMM eternity', 2, 259, 10000, '', 0),
(160, 'sof & MMMM forever', 2, 259, 10000, '', 0),
(161, 'sof & MMMM forever', 2, 259, 10000, '', 0),
(162, 'sof & MMMM endless', 2, 259, 10000, '', 0),
(163, 'sof & MMMM endless', 2, 259, 10000, '', 0),
(164, 'Target Multi-insect Killer', 2, 309, 10000, 'upload/target_1506276007.jpg', 0),
(165, 'target multi-insect killer', 2, 309, 10000, '', 0),
(166, 'tuff DWL (200ml) refill', 2, 58, 10000, '', 0),
(167, 'tuff DWL (200ml) refill', 2, 58, 10000, '', 0),
(168, 'tuff DWL (270ml)', 2, 99, 10000, '', 0),
(169, 'tuff DWL (270ml)', 2, 99, 10000, '', 0),
(170, 'tuff PLD advance (800g)', 2, 166, 10000, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `prod_category`
--

CREATE TABLE `prod_category` (
  `categoryid` int(11) NOT NULL,
  `catname` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prod_category`
--

INSERT INTO `prod_category` (`categoryid`, `catname`) VALUES
(1, 'Fragrances'),
(2, 'Homecare Products'),
(3, 'Health Care / Food Supplements'),
(4, 'Personal Care Products'),
(5, 'Baby Care Products'),
(6, 'Coffee Products');

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `reserveid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `total_cost` double NOT NULL,
  `reserve_date` datetime NOT NULL,
  `res_status` int(11) NOT NULL,
  `claim_code` varchar(12) NOT NULL,
  `action_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`reserveid`, `userid`, `total_cost`, `reserve_date`, `res_status`, `claim_code`, `action_date`) VALUES
(244, 53, 300, '2017-09-24 18:01:13', 2, 'Zgq1NvbSCVBG', '2017-09-24 18:02:15');

-- --------------------------------------------------------

--
-- Table structure for table `reserve_detail`
--

CREATE TABLE `reserve_detail` (
  `reserve_detailid` int(11) NOT NULL,
  `reserveid` int(11) NOT NULL,
  `productid` int(11) NOT NULL,
  `reserve_qty` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reserve_detail`
--

INSERT INTO `reserve_detail` (`reserve_detailid`, `reserveid`, `productid`, `reserve_qty`) VALUES
(233, 244, 73, 2),
(234, 244, 74, 2);

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `salesid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `sales_total` double NOT NULL,
  `sales_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`salesid`, `userid`, `sales_total`, `sales_date`) VALUES
(36, 53, 300, '2017-09-24 18:02:15');

-- --------------------------------------------------------

--
-- Table structure for table `sales_details`
--

CREATE TABLE `sales_details` (
  `sales_detailsid` int(11) NOT NULL,
  `salesid` int(11) NOT NULL,
  `productid` int(11) NOT NULL,
  `sales_qty` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sales_details`
--

INSERT INTO `sales_details` (`sales_detailsid`, `salesid`, `productid`, `sales_qty`) VALUES
(69, 36, 73, 2),
(70, 36, 74, 2);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userid` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `access_level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `username`, `password`, `access_level`) VALUES
(22, 'admin', '21232f297a57a5a743894a0e4a801fc3', 1),
(52, 'clene', '03a4cb22f357ba391f6e57088c562c76', 2),
(53, 'julyn', '6460e82cb15b218e841c2182bb56c9a0', 4),
(54, 'rudy', 'cfce9735de7c3873a55331a4e74b70fc', 3),
(55, 'maryann', 'cadb4c500b8abbea8d9106ab83aed8c9', 2),
(56, 'rudgie', '736c42070ebdfe26110018e87ab1fb8d', 2),
(57, 'victor', 'ffc150a160d37e92012c196b6af4160d', 2),
(58, 'ronnie', 'b071c0c8d6adc66a3c2eb1b9b87d6d5c', 3),
(59, 'caren', 'ccd03f5dd29e86e7099d624d7f8a3e46', 4),
(60, 'fe', '2d917f5d1275e96fd75e6352e26b1387', 4),
(61, 'corazon', '0a43c50e23a05929e7f2b075170ce0a2', 4),
(62, 'anicamae', '9158daae9dee63e612c06e76ac6d96b8', 4),
(63, 'daryll', '1a1c020deb869f724c80e2268f7d7ac5', 4),
(64, 'nelma', '8baf8f9fd866b0d768fbf2b50c0622e8', 4),
(65, 'cha', 'c2477f223c3c4ca19a5029e0cd91fda8', 4),
(66, 'dyna', '9ca8171f1c0a210be8f7130385dd74ac', 4),
(67, 'judy', 'c6a1ca47b645f4c4b786ce951f8d26a7', 4),
(68, 'renan', '1db68d9861e914b9a2dc65ca868c6d1f', 4),
(69, 'venalyn', 'ac4af6ecf39d2be221a521b5cb4aab5a', 4),
(70, 'jelly', '328356824c8487cf314aa350d11ae145', 4),
(71, 'jean', 'b71985397688d6f1820685dde534981b', 4),
(72, 'criza', '1f87496c36aae9f56ad127be3b72c3fb', 4),
(73, 'stephen', '7ff36797539130f77445f48da5d4a126', 4),
(74, 'stephen', '7ff36797539130f77445f48da5d4a126', 4),
(75, 'mary', 'b8e7be5dfa2ce0714d21dcfc7d72382c', 4),
(76, 'nikko', 'bbb1818a0e674a0a8c3b0ac266f91313', 4),
(77, 'nica', '10dae41b3cd978b460ce02f4ad50624b', 4),
(78, 'alony', '03461f26f97661d6fd31a496ee1f0707', 4),
(79, 'jr', 'd5de679d452cb429e6f55e64a9988cbf', 4),
(80, 'jessa', 'a5b85dcc021937f1fb0148939ede8cf3', 4),
(81, 'jennifer', '1660fe5c81c4ce64a2611494c439e1ba', 4),
(82, 'sha', 'ca794fb2d950acf25c964ecc35f2d7e2', 4);

-- --------------------------------------------------------

--
-- Table structure for table `userlog`
--

CREATE TABLE `userlog` (
  `userlogid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `login` datetime NOT NULL,
  `logout` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userlog`
--

INSERT INTO `userlog` (`userlogid`, `userid`, `login`, `logout`) VALUES
(335, 22, '2017-09-24 17:50:40', '2017-09-24 17:56:51'),
(336, 53, '2017-09-24 17:56:57', '2017-09-24 17:57:13'),
(337, 22, '2017-09-24 17:57:16', '2017-09-24 17:57:40'),
(338, 53, '2017-09-24 18:00:42', '0000-00-00 00:00:00'),
(339, 22, '2017-09-24 18:02:05', '2017-09-24 18:03:05'),
(340, 22, '2017-09-24 23:34:43', '0000-00-00 00:00:00'),
(341, 53, '2017-09-25 01:04:24', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `user_backup`
--

CREATE TABLE `user_backup` (
  `userid` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `access_level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_backup`
--

INSERT INTO `user_backup` (`userid`, `username`, `password`, `access_level`) VALUES
(22, 'admin', '21232f297a57a5a743894a0e4a801fc3', 1),
(52, 'clene', '03a4cb22f357ba391f6e57088c562c76', 2),
(53, 'julyn', '6460e82cb15b218e841c2182bb56c9a0', 4),
(54, 'rudy', 'cfce9735de7c3873a55331a4e74b70fc', 3),
(55, 'maryann', 'cadb4c500b8abbea8d9106ab83aed8c9', 2),
(56, 'rudgie', '736c42070ebdfe26110018e87ab1fb8d', 2),
(57, 'victor', 'ffc150a160d37e92012c196b6af4160d', 2),
(58, 'ronnie', 'b071c0c8d6adc66a3c2eb1b9b87d6d5c', 3),
(59, 'caren', 'ccd03f5dd29e86e7099d624d7f8a3e46', 4),
(60, 'fe', '2d917f5d1275e96fd75e6352e26b1387', 4),
(61, 'corazon', '0a43c50e23a05929e7f2b075170ce0a2', 4),
(62, 'anicamae', '9158daae9dee63e612c06e76ac6d96b8', 4),
(63, 'daryll', '1a1c020deb869f724c80e2268f7d7ac5', 4),
(64, 'nelma', '8baf8f9fd866b0d768fbf2b50c0622e8', 4),
(65, 'cha', 'c2477f223c3c4ca19a5029e0cd91fda8', 4),
(66, 'dyna', '9ca8171f1c0a210be8f7130385dd74ac', 4),
(67, 'judy', 'c6a1ca47b645f4c4b786ce951f8d26a7', 4),
(68, 'renan', '1db68d9861e914b9a2dc65ca868c6d1f', 4),
(69, 'venalyn', 'ac4af6ecf39d2be221a521b5cb4aab5a', 4),
(70, 'jelly', '328356824c8487cf314aa350d11ae145', 4),
(71, 'jean', 'b71985397688d6f1820685dde534981b', 4),
(72, 'criza', '1f87496c36aae9f56ad127be3b72c3fb', 4),
(73, 'stephen', '7ff36797539130f77445f48da5d4a126', 4),
(74, 'stephen', '7ff36797539130f77445f48da5d4a126', 4),
(75, 'mary', 'b8e7be5dfa2ce0714d21dcfc7d72382c', 4),
(76, 'nikko', 'bbb1818a0e674a0a8c3b0ac266f91313', 4),
(77, 'nica', '10dae41b3cd978b460ce02f4ad50624b', 4),
(78, 'alony', '03461f26f97661d6fd31a496ee1f0707', 4),
(79, 'jr', 'd5de679d452cb429e6f55e64a9988cbf', 4),
(80, 'jessa', 'a5b85dcc021937f1fb0148939ede8cf3', 4),
(81, 'jennifer', '1660fe5c81c4ce64a2611494c439e1ba', 4),
(82, 'sha', 'ca794fb2d950acf25c964ecc35f2d7e2', 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activitylog`
--
ALTER TABLE `activitylog`
  ADD PRIMARY KEY (`activitylog`);

--
-- Indexes for table `claim`
--
ALTER TABLE `claim`
  ADD PRIMARY KEY (`claimid`);

--
-- Indexes for table `claim_detail`
--
ALTER TABLE `claim_detail`
  ADD PRIMARY KEY (`claim_detailid`);

--
-- Indexes for table `dealer`
--
ALTER TABLE `dealer`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `dealer_backup`
--
ALTER TABLE `dealer_backup`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `employee_backup`
--
ALTER TABLE `employee_backup`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `emp_position`
--
ALTER TABLE `emp_position`
  ADD PRIMARY KEY (`positionid`);

--
-- Indexes for table `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`inventoryid`);

--
-- Indexes for table `liquidation`
--
ALTER TABLE `liquidation`
  ADD PRIMARY KEY (`liquidationid`);

--
-- Indexes for table `liquidation_backup`
--
ALTER TABLE `liquidation_backup`
  ADD PRIMARY KEY (`liquidationid`);

--
-- Indexes for table `liqui_report`
--
ALTER TABLE `liqui_report`
  ADD PRIMARY KEY (`liqui_reportid`);

--
-- Indexes for table `password`
--
ALTER TABLE `password`
  ADD PRIMARY KEY (`passwordid`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`productid`);

--
-- Indexes for table `product_backup`
--
ALTER TABLE `product_backup`
  ADD PRIMARY KEY (`productid`);

--
-- Indexes for table `prod_category`
--
ALTER TABLE `prod_category`
  ADD PRIMARY KEY (`categoryid`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`reserveid`);

--
-- Indexes for table `reserve_detail`
--
ALTER TABLE `reserve_detail`
  ADD PRIMARY KEY (`reserve_detailid`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`salesid`);

--
-- Indexes for table `sales_details`
--
ALTER TABLE `sales_details`
  ADD PRIMARY KEY (`sales_detailsid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `userlog`
--
ALTER TABLE `userlog`
  ADD PRIMARY KEY (`userlogid`);

--
-- Indexes for table `user_backup`
--
ALTER TABLE `user_backup`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activitylog`
--
ALTER TABLE `activitylog`
  MODIFY `activitylog` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=388;
--
-- AUTO_INCREMENT for table `claim`
--
ALTER TABLE `claim`
  MODIFY `claimid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `claim_detail`
--
ALTER TABLE `claim_detail`
  MODIFY `claim_detailid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `emp_position`
--
ALTER TABLE `emp_position`
  MODIFY `positionid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `inventory`
--
ALTER TABLE `inventory`
  MODIFY `inventoryid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=127;
--
-- AUTO_INCREMENT for table `liquidation`
--
ALTER TABLE `liquidation`
  MODIFY `liquidationid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `liqui_report`
--
ALTER TABLE `liqui_report`
  MODIFY `liqui_reportid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `password`
--
ALTER TABLE `password`
  MODIFY `passwordid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `productid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=171;
--
-- AUTO_INCREMENT for table `prod_category`
--
ALTER TABLE `prod_category`
  MODIFY `categoryid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `reserveid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=245;
--
-- AUTO_INCREMENT for table `reserve_detail`
--
ALTER TABLE `reserve_detail`
  MODIFY `reserve_detailid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=235;
--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `salesid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT for table `sales_details`
--
ALTER TABLE `sales_details`
  MODIFY `sales_detailsid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;
--
-- AUTO_INCREMENT for table `userlog`
--
ALTER TABLE `userlog`
  MODIFY `userlogid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=342;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
