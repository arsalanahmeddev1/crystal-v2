-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 06, 2025 at 06:32 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crystal_lms`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `parent_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `is_feature` enum('yes','no') DEFAULT 'no',
  `slug` varchar(255) NOT NULL,
  `status` enum('1','0') DEFAULT '1' COMMENT '1=active, 0=inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `parent_id`, `name`, `image`, `is_feature`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Category 1', NULL, 'no', 'category-1', NULL, '2025-03-04 15:49:52', '2025-03-04 15:49:52'),
(2, 3, 'Category 2', NULL, 'no', 'category-2', NULL, '2025-03-04 15:50:03', '2025-03-04 16:04:56'),
(3, 1, 'Category 3', NULL, 'no', 'category-3', NULL, '2025-03-04 16:00:01', '2025-03-04 16:00:01');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `phone_code` varchar(255) NOT NULL,
  `phone_number_limit` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `name`, `code`, `phone_code`, `phone_number_limit`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Afghanistan', 'AF', '+93', '9', '2025-02-14 13:17:05', '2025-02-14 13:17:05', NULL),
(2, 'Åland Islands', 'AX', '+358', '10', '2025-02-14 13:17:05', '2025-02-14 13:17:05', NULL),
(3, 'Albania', 'AL', '+355', '9', '2025-02-14 13:17:05', '2025-02-14 13:17:05', NULL),
(4, 'Algeria', 'DZ', '+213', '9', '2025-02-14 13:17:05', '2025-02-14 13:17:05', NULL),
(5, 'American Samoa', 'AS', '+1684', '7', '2025-02-14 13:17:05', '2025-02-14 13:17:05', NULL),
(6, 'Andorra', 'AD', '+376', '9', '2025-02-14 13:17:05', '2025-02-14 13:17:05', NULL),
(7, 'Angola', 'AO', '+244', '9', '2025-02-14 13:17:05', '2025-02-14 13:17:05', NULL),
(8, 'Anguilla', 'AI', '+1264', '7', '2025-02-14 13:17:05', '2025-02-14 13:17:05', NULL),
(9, 'Antarctica', 'AQ', '+672', '6', '2025-02-14 13:17:05', '2025-02-14 13:17:05', NULL),
(10, 'Antigua and Barbuda', 'AG', '+1268', '7', '2025-02-14 13:17:05', '2025-02-14 13:17:05', NULL),
(11, 'Argentina', 'AR', '+54', '10', '2025-02-14 13:17:05', '2025-02-14 13:17:05', NULL),
(12, 'Armenia', 'AM', '+374', '8', '2025-02-14 13:17:05', '2025-02-14 13:17:05', NULL),
(13, 'Aruba', 'AW', '+297', '7', '2025-02-14 13:17:05', '2025-02-14 13:17:05', NULL),
(14, 'Australia', 'AU', '+61', '9', '2025-02-14 13:17:05', '2025-02-14 13:17:05', NULL),
(15, 'Austria', 'AT', '+43', '10', '2025-02-14 13:17:05', '2025-02-14 13:17:05', NULL),
(16, 'Azerbaijan', 'AZ', '+994', '9', '2025-02-14 13:17:05', '2025-02-14 13:17:05', NULL),
(17, 'Bahamas', 'BS', '+1242', '7', '2025-02-14 13:17:05', '2025-02-14 13:17:05', NULL),
(18, 'Bahrain', 'BH', '+973', '8', '2025-02-14 13:17:05', '2025-02-14 13:17:05', NULL),
(19, 'Bangladesh', 'BD', '+880', '10', '2025-02-14 13:17:05', '2025-02-14 13:17:05', NULL),
(20, 'Barbados', 'BB', '+1246', '7', '2025-02-14 13:17:05', '2025-02-14 13:17:05', NULL),
(21, 'Belarus', 'BY', '+375', '9', '2025-02-14 13:17:05', '2025-02-14 13:17:05', NULL),
(22, 'Belgium', 'BE', '+32', '9', '2025-02-14 13:17:05', '2025-02-14 13:17:05', NULL),
(23, 'Belize', 'BZ', '+501', '7', '2025-02-14 13:17:05', '2025-02-14 13:17:05', NULL),
(24, 'Benin', 'BJ', '+229', '8', '2025-02-14 13:17:05', '2025-02-14 13:17:05', NULL),
(25, 'Bermuda', 'BM', '+1441', '7', '2025-02-14 13:17:05', '2025-02-14 13:17:05', NULL),
(26, 'Bhutan', 'BT', '+975', '8', '2025-02-14 13:17:05', '2025-02-14 13:17:05', NULL),
(27, 'Bolivia, Plurinational State of', 'BO', '+591', '8', '2025-02-14 13:17:05', '2025-02-14 13:17:05', NULL),
(28, 'Bonaire, Sint Eustatius and Saba', 'BQ', '+599', '7', '2025-02-14 13:17:05', '2025-02-14 13:17:05', NULL),
(29, 'Bosnia and Herzegovina', 'BA', '+387', '8', '2025-02-14 13:17:05', '2025-02-14 13:17:05', NULL),
(30, 'Botswana', 'BW', '+267', '8', '2025-02-14 13:17:05', '2025-02-14 13:17:05', NULL),
(31, 'Bouvet Island', 'BV', '+55', '10', '2025-02-14 13:17:05', '2025-02-14 13:17:05', NULL),
(32, 'Brazil', 'BR', '+55', '10', '2025-02-14 13:17:05', '2025-02-14 13:17:05', NULL),
(33, 'British Indian Ocean Territory', 'IO', '+246', '7', '2025-02-14 13:17:06', '2025-02-14 13:17:06', NULL),
(34, 'Brunei Darussalam', 'BN', '+673', '7', '2025-02-14 13:17:06', '2025-02-14 13:17:06', NULL),
(35, 'Bulgaria', 'BG', '+359', '9', '2025-02-14 13:17:06', '2025-02-14 13:17:06', NULL),
(36, 'Burkina Faso', 'BF', '+226', '8', '2025-02-14 13:17:06', '2025-02-14 13:17:06', NULL),
(37, 'Burundi', 'BI', '+257', '8', '2025-02-14 13:17:06', '2025-02-14 13:17:06', NULL),
(38, 'Cambodia', 'KH', '+855', '8', '2025-02-14 13:17:06', '2025-02-14 13:17:06', NULL),
(39, 'Cameroon', 'CM', '+237', '9', '2025-02-14 13:17:06', '2025-02-14 13:17:06', NULL),
(40, 'Canada', 'CA', '+1', '10', '2025-02-14 13:17:06', '2025-02-14 13:17:06', NULL),
(41, 'Cape Verde', 'CV', '+238', '7', '2025-02-14 13:17:06', '2025-02-14 13:17:06', NULL),
(42, 'Cayman Islands', 'KY', '+1345', '7', '2025-02-14 13:17:06', '2025-02-14 13:17:06', NULL),
(43, 'Central African Republic', 'CF', '+236', '9', '2025-02-14 13:17:06', '2025-02-14 13:17:06', NULL),
(44, 'Chad', 'TD', '+235', '9', '2025-02-14 13:17:06', '2025-02-14 13:17:06', NULL),
(45, 'Chile', 'CL', '+56', '9', '2025-02-14 13:17:06', '2025-02-14 13:17:06', NULL),
(46, 'China', 'CN', '+86', '11', '2025-02-14 13:17:06', '2025-02-14 13:17:06', NULL),
(47, 'Christmas Island', 'CX', '+61', '9', '2025-02-14 13:17:06', '2025-02-14 13:17:06', NULL),
(48, 'Cocos (Keeling) Islands', 'CC', '+61', '9', '2025-02-14 13:17:06', '2025-02-14 13:17:06', NULL),
(49, 'Colombia', 'CO', '+57', '10', '2025-02-14 13:17:06', '2025-02-14 13:17:06', NULL),
(50, 'Comoros', 'KM', '+269', '7', '2025-02-14 13:17:06', '2025-02-14 13:17:06', NULL),
(51, 'Congo', 'CG', '+242', '9', '2025-02-14 13:17:06', '2025-02-14 13:17:06', NULL),
(52, 'Congo, the Democratic Republic of the', 'CD', '+243', '9', '2025-02-14 13:17:06', '2025-02-14 13:17:06', NULL),
(53, 'Cook Islands', 'CK', '+682', '5', '2025-02-14 13:17:06', '2025-02-14 13:17:06', NULL),
(54, 'Costa Rica', 'CR', '+506', '8', '2025-02-14 13:17:06', '2025-02-14 13:17:06', NULL),
(55, 'Côte d\'Ivoire', 'CI', '+225', '8', '2025-02-14 13:17:06', '2025-02-14 13:17:06', NULL),
(56, 'Croatia', 'HR', '+385', '9', '2025-02-14 13:17:06', '2025-02-14 13:17:06', NULL),
(57, 'Cuba', 'CU', '+53', '8', '2025-02-14 13:17:06', '2025-02-14 13:17:06', NULL),
(58, 'Curaçao', 'CW', '+599', '7', '2025-02-14 13:17:06', '2025-02-14 13:17:06', NULL),
(59, 'Cyprus', 'CY', '+357', '8', '2025-02-14 13:17:06', '2025-02-14 13:17:06', NULL),
(60, 'Czech Republic', 'CZ', '+420', '9', '2025-02-14 13:17:06', '2025-02-14 13:17:06', NULL),
(61, 'Denmark', 'DK', '+45', '8', '2025-02-14 13:17:06', '2025-02-14 13:17:06', NULL),
(62, 'Djibouti', 'DJ', '+253', '6', '2025-02-14 13:17:06', '2025-02-14 13:17:06', NULL),
(63, 'Dominica', 'DM', '+1767', '7', '2025-02-14 13:17:06', '2025-02-14 13:17:06', NULL),
(64, 'Dominican Republic', 'DO', '+1809', '10', '2025-02-14 13:17:06', '2025-02-14 13:17:06', NULL),
(65, 'Ecuador', 'EC', '+593', '9', '2025-02-14 13:17:06', '2025-02-14 13:17:06', NULL),
(66, 'Egypt', 'EG', '+20', '10', '2025-02-14 13:17:06', '2025-02-14 13:17:06', NULL),
(67, 'El Salvador', 'SV', '+503', '8', '2025-02-14 13:17:06', '2025-02-14 13:17:06', NULL),
(68, 'Equatorial Guinea', 'GQ', '+240', '9', '2025-02-14 13:17:06', '2025-02-14 13:17:06', NULL),
(69, 'Eritrea', 'ER', '+291', '7', '2025-02-14 13:17:06', '2025-02-14 13:17:06', NULL),
(70, 'Estonia', 'EE', '+372', '8', '2025-02-14 13:17:06', '2025-02-14 13:17:06', NULL),
(71, 'Eswatini', 'SZ', '+268', '7', '2025-02-14 13:17:06', '2025-02-14 13:17:06', NULL),
(72, 'Ethiopia', 'ET', '+251', '9', '2025-02-14 13:17:06', '2025-02-14 13:17:06', NULL),
(73, 'Falkland Islands (Malvinas)', 'FK', '+500', '5', '2025-02-14 13:17:06', '2025-02-14 13:17:06', NULL),
(74, 'Faroe Islands', 'FO', '+298', '6', '2025-02-14 13:17:06', '2025-02-14 13:17:06', NULL),
(75, 'Fiji', 'FJ', '+679', '7', '2025-02-14 13:17:06', '2025-02-14 13:17:06', NULL),
(76, 'Finland', 'FI', '+358', '9', '2025-02-14 13:17:06', '2025-02-14 13:17:06', NULL),
(77, 'France', 'FR', '+33', '9', '2025-02-14 13:17:06', '2025-02-14 13:17:06', NULL),
(78, 'French Guiana', 'GF', '+594', '9', '2025-02-14 13:17:06', '2025-02-14 13:17:06', NULL),
(79, 'French Polynesia', 'PF', '+689', '6', '2025-02-14 13:17:06', '2025-02-14 13:17:06', NULL),
(80, 'French Southern Territories', 'TF', '+262', '9', '2025-02-14 13:17:06', '2025-02-14 13:17:06', NULL),
(81, 'Gabon', 'GA', '+241', '9', '2025-02-14 13:17:06', '2025-02-14 13:17:06', NULL),
(82, 'Gambia', 'GM', '+220', '7', '2025-02-14 13:17:06', '2025-02-14 13:17:06', NULL),
(83, 'Georgia', 'GE', '+995', '9', '2025-02-14 13:17:06', '2025-02-14 13:17:06', NULL),
(84, 'Germany', 'DE', '+49', '10', '2025-02-14 13:17:06', '2025-02-14 13:17:06', NULL),
(85, 'Ghana', 'GH', '+233', '9', '2025-02-14 13:17:06', '2025-02-14 13:17:06', NULL),
(86, 'Gibraltar', 'GI', '+350', '8', '2025-02-14 13:17:06', '2025-02-14 13:17:06', NULL),
(87, 'Greece', 'GR', '+30', '10', '2025-02-14 13:17:06', '2025-02-14 13:17:06', NULL),
(88, 'Greenland', 'GL', '+299', '6', '2025-02-14 13:17:06', '2025-02-14 13:17:06', NULL),
(89, 'Grenada', 'GD', '+1473', '7', '2025-02-14 13:17:06', '2025-02-14 13:17:06', NULL),
(90, 'Guadeloupe', 'GP', '+590', '9', '2025-02-14 13:17:06', '2025-02-14 13:17:06', NULL),
(91, 'Guam', 'GU', '+1671', '7', '2025-02-14 13:17:06', '2025-02-14 13:17:06', NULL),
(92, 'Guatemala', 'GT', '+502', '8', '2025-02-14 13:17:06', '2025-02-14 13:17:06', NULL),
(93, 'Guernsey', 'GG', '+44', '10', '2025-02-14 13:17:06', '2025-02-14 13:17:06', NULL),
(94, 'Guinea', 'GN', '+224', '9', '2025-02-14 13:17:06', '2025-02-14 13:17:06', NULL),
(95, 'Guinea-Bissau', 'GW', '+245', '7', '2025-02-14 13:17:06', '2025-02-14 13:17:06', NULL),
(96, 'Guyana', 'GY', '+592', '7', '2025-02-14 13:17:06', '2025-02-14 13:17:06', NULL),
(97, 'Haiti', 'HT', '+509', '8', '2025-02-14 13:17:06', '2025-02-14 13:17:06', NULL),
(98, 'Heard Island and McDonald Islands', 'HM', '+672', '6', '2025-02-14 13:17:06', '2025-02-14 13:17:06', NULL),
(99, 'Holy See (Vatican City State)', 'VA', '+39', '10', '2025-02-14 13:17:06', '2025-02-14 13:17:06', NULL),
(100, 'Honduras', 'HN', '+504', '8', '2025-02-14 13:17:06', '2025-02-14 13:17:06', NULL),
(101, 'Hong Kong', 'HK', '+852', '8', '2025-02-14 13:17:06', '2025-02-14 13:17:06', NULL),
(102, 'Hungary', 'HU', '+36', '9', '2025-02-14 13:17:06', '2025-02-14 13:17:06', NULL),
(103, 'Iceland', 'IS', '+354', '7', '2025-02-14 13:17:06', '2025-02-14 13:17:06', NULL),
(104, 'India', 'IN', '+91', '10', '2025-02-14 13:17:06', '2025-02-14 13:17:06', NULL),
(105, 'Indonesia', 'ID', '+62', '11', '2025-02-14 13:17:06', '2025-02-14 13:17:06', NULL),
(106, 'Iran, Islamic Republic of', 'IR', '+98', '10', '2025-02-14 13:17:06', '2025-02-14 13:17:06', NULL),
(107, 'Iraq', 'IQ', '+964', '10', '2025-02-14 13:17:06', '2025-02-14 13:17:06', NULL),
(108, 'Ireland', 'IE', '+353', '9', '2025-02-14 13:17:06', '2025-02-14 13:17:06', NULL),
(109, 'Isle of Man', 'IM', '+44', '10', '2025-02-14 13:17:06', '2025-02-14 13:17:06', NULL),
(110, 'Israel', 'IL', '+972', '9', '2025-02-14 13:17:06', '2025-02-14 13:17:06', NULL),
(111, 'Italy', 'IT', '+39', '10', '2025-02-14 13:17:06', '2025-02-14 13:17:06', NULL),
(112, 'Jamaica', 'JM', '+1876', '7', '2025-02-14 13:17:06', '2025-02-14 13:17:06', NULL),
(113, 'Japan', 'JP', '+81', '10', '2025-02-14 13:17:06', '2025-02-14 13:17:06', NULL),
(114, 'Jersey', 'JE', '+44', '10', '2025-02-14 13:17:06', '2025-02-14 13:17:06', NULL),
(115, 'Jordan', 'JO', '+962', '9', '2025-02-14 13:17:06', '2025-02-14 13:17:06', NULL),
(116, 'Kazakhstan', 'KZ', '+7', '10', '2025-02-14 13:17:06', '2025-02-14 13:17:06', NULL),
(117, 'Kenya', 'KE', '+254', '9', '2025-02-14 13:17:06', '2025-02-14 13:17:06', NULL),
(118, 'Kiribati', 'KI', '+686', '8', '2025-02-14 13:17:06', '2025-02-14 13:17:06', NULL),
(119, 'Korea, Democratic People\'s Republic of', 'KP', '+850', '9', '2025-02-14 13:17:06', '2025-02-14 13:17:06', NULL),
(120, 'Korea, Republic of', 'KR', '+82', '9', '2025-02-14 13:17:06', '2025-02-14 13:17:06', NULL),
(121, 'Kuwait', 'KW', '+965', '8', '2025-02-14 13:17:06', '2025-02-14 13:17:06', NULL),
(122, 'Kyrgyzstan', 'KG', '+996', '9', '2025-02-14 13:17:06', '2025-02-14 13:17:06', NULL),
(123, 'Lao People\'s Democratic Republic', 'LA', '+856', '9', '2025-02-14 13:17:06', '2025-02-14 13:17:06', NULL),
(124, 'Latvia', 'LV', '+371', '8', '2025-02-14 13:17:06', '2025-02-14 13:17:06', NULL),
(125, 'Lebanon', 'LB', '+961', '8', '2025-02-14 13:17:06', '2025-02-14 13:17:06', NULL),
(126, 'Lesotho', 'LS', '+266', '8', '2025-02-14 13:17:06', '2025-02-14 13:17:06', NULL),
(127, 'Liberia', 'LR', '+231', '7', '2025-02-14 13:17:06', '2025-02-14 13:17:06', NULL),
(128, 'Libya', 'LY', '+218', '9', '2025-02-14 13:17:06', '2025-02-14 13:17:06', NULL),
(129, 'Liechtenstein', 'LI', '+423', '9', '2025-02-14 13:17:06', '2025-02-14 13:17:06', NULL),
(130, 'Lithuania', 'LT', '+370', '8', '2025-02-14 13:17:06', '2025-02-14 13:17:06', NULL),
(131, 'Luxembourg', 'LU', '+352', '9', '2025-02-14 13:17:06', '2025-02-14 13:17:06', NULL),
(132, 'Macao', 'MO', '+853', '8', '2025-02-14 13:17:06', '2025-02-14 13:17:06', NULL),
(133, 'Macedonia, the Former Yugoslav Republic of', 'MK', '+389', '8', '2025-02-14 13:17:06', '2025-02-14 13:17:06', NULL),
(134, 'Madagascar', 'MG', '+261', '9', '2025-02-14 13:17:06', '2025-02-14 13:17:06', NULL),
(135, 'Malawi', 'MW', '+265', '9', '2025-02-14 13:17:06', '2025-02-14 13:17:06', NULL),
(136, 'Malaysia', 'MY', '+60', '10', '2025-02-14 13:17:06', '2025-02-14 13:17:06', NULL),
(137, 'Maldives', 'MV', '+960', '7', '2025-02-14 13:17:06', '2025-02-14 13:17:06', NULL),
(138, 'Mali', 'ML', '+223', '8', '2025-02-14 13:17:06', '2025-02-14 13:17:06', NULL),
(139, 'Malta', 'MT', '+356', '8', '2025-02-14 13:17:06', '2025-02-14 13:17:06', NULL),
(140, 'Marshall Islands', 'MH', '+692', '7', '2025-02-14 13:17:06', '2025-02-14 13:17:06', NULL),
(141, 'Martinique', 'MQ', '+596', '9', '2025-02-14 13:17:06', '2025-02-14 13:17:06', NULL),
(142, 'Mauritania', 'MR', '+222', '8', '2025-02-14 13:17:06', '2025-02-14 13:17:06', NULL),
(143, 'Mauritius', 'MU', '+230', '8', '2025-02-14 13:17:06', '2025-02-14 13:17:06', NULL),
(144, 'Mayotte', 'YT', '+262', '9', '2025-02-14 13:17:06', '2025-02-14 13:17:06', NULL),
(145, 'Mexico', 'MX', '+52', '10', '2025-02-14 13:17:06', '2025-02-14 13:17:06', NULL),
(146, 'Micronesia, Federated States of', 'FM', '+691', '7', '2025-02-14 13:17:06', '2025-02-14 13:17:06', NULL),
(147, 'Moldova, Republic of', 'MD', '+373', '8', '2025-02-14 13:17:06', '2025-02-14 13:17:06', NULL),
(148, 'Monaco', 'MC', '+377', '8', '2025-02-14 13:17:06', '2025-02-14 13:17:06', NULL),
(149, 'Mongolia', 'MN', '+976', '8', '2025-02-14 13:17:06', '2025-02-14 13:17:06', NULL),
(150, 'Montenegro', 'ME', '+382', '8', '2025-02-14 13:17:06', '2025-02-14 13:17:06', NULL),
(151, 'Montserrat', 'MS', '+1664', '7', '2025-02-14 13:17:06', '2025-02-14 13:17:06', NULL),
(152, 'Morocco', 'MA', '+212', '9', '2025-02-14 13:17:06', '2025-02-14 13:17:06', NULL),
(153, 'Mozambique', 'MZ', '+258', '9', '2025-02-14 13:17:06', '2025-02-14 13:17:06', NULL),
(154, 'Myanmar', 'MM', '+95', '8', '2025-02-14 13:17:06', '2025-02-14 13:17:06', NULL),
(155, 'Namibia', 'NA', '+264', '9', '2025-02-14 13:17:06', '2025-02-14 13:17:06', NULL),
(156, 'Nauru', 'NR', '+674', '7', '2025-02-14 13:17:06', '2025-02-14 13:17:06', NULL),
(157, 'Nepal', 'NP', '+977', '10', '2025-02-14 13:17:06', '2025-02-14 13:17:06', NULL),
(158, 'Netherlands', 'NL', '+31', '9', '2025-02-14 13:17:06', '2025-02-14 13:17:06', NULL),
(159, 'New Caledonia', 'NC', '+687', '6', '2025-02-14 13:17:06', '2025-02-14 13:17:06', NULL),
(160, 'New Zealand', 'NZ', '+64', '9', '2025-02-14 13:17:06', '2025-02-14 13:17:06', NULL),
(161, 'Nicaragua', 'NI', '+505', '8', '2025-02-14 13:17:06', '2025-02-14 13:17:06', NULL),
(162, 'Niger', 'NE', '+227', '8', '2025-02-14 13:17:06', '2025-02-14 13:17:06', NULL),
(163, 'Nigeria', 'NG', '+234', '10', '2025-02-14 13:17:06', '2025-02-14 13:17:06', NULL),
(164, 'Niue', 'NU', '+683', '4', '2025-02-14 13:17:06', '2025-02-14 13:17:06', NULL),
(165, 'Norfolk Island', 'NF', '+672', '6', '2025-02-14 13:17:06', '2025-02-14 13:17:06', NULL),
(166, 'Northern Mariana Islands', 'MP', '+1670', '7', '2025-02-14 13:17:06', '2025-02-14 13:17:06', NULL),
(167, 'Norway', 'NO', '+47', '8', '2025-02-14 13:17:06', '2025-02-14 13:17:06', NULL),
(168, 'Oman', 'OM', '+968', '8', '2025-02-14 13:17:06', '2025-02-14 13:17:06', NULL),
(169, 'Pakistan', 'PK', '+92', '10', '2025-02-14 13:17:06', '2025-02-14 13:17:06', NULL),
(170, 'Palau', 'PW', '+680', '7', '2025-02-14 13:17:06', '2025-02-14 13:17:06', NULL),
(171, 'Palestine, State of', 'PS', '+970', '9', '2025-02-14 13:17:06', '2025-02-14 13:17:06', NULL),
(172, 'Panama', 'PA', '+507', '8', '2025-02-14 13:17:06', '2025-02-14 13:17:06', NULL),
(173, 'Papua New Guinea', 'PG', '+675', '7', '2025-02-14 13:17:06', '2025-02-14 13:17:06', NULL),
(174, 'Paraguay', 'PY', '+595', '9', '2025-02-14 13:17:06', '2025-02-14 13:17:06', NULL),
(175, 'Peru', 'PE', '+51', '9', '2025-02-14 13:17:06', '2025-02-14 13:17:06', NULL),
(176, 'Philippines', 'PH', '+63', '10', '2025-02-14 13:17:06', '2025-02-14 13:17:06', NULL),
(177, 'Pitcairn', 'PN', '+64', '9', '2025-02-14 13:17:06', '2025-02-14 13:17:06', NULL),
(178, 'Poland', 'PL', '+48', '9', '2025-02-14 13:17:06', '2025-02-14 13:17:06', NULL),
(179, 'Portugal', 'PT', '+351', '9', '2025-02-14 13:17:06', '2025-02-14 13:17:06', NULL),
(180, 'Puerto Rico', 'PR', '+1939', '7', '2025-02-14 13:17:06', '2025-02-14 13:17:06', NULL),
(181, 'Qatar', 'QA', '+974', '8', '2025-02-14 13:17:06', '2025-02-14 13:17:06', NULL),
(182, 'Réunion', 'RE', '+262', '9', '2025-02-14 13:17:06', '2025-02-14 13:17:06', NULL),
(183, 'Romania', 'RO', '+40', '9', '2025-02-14 13:17:06', '2025-02-14 13:17:06', NULL),
(184, 'Russian Federation', 'RU', '+7', '10', '2025-02-14 13:17:06', '2025-02-14 13:17:06', NULL),
(185, 'Rwanda', 'RW', '+250', '9', '2025-02-14 13:17:06', '2025-02-14 13:17:06', NULL),
(186, 'Saint Barthélemy', 'BL', '+590', '9', '2025-02-14 13:17:06', '2025-02-14 13:17:06', NULL),
(187, 'Saint Helena, Ascension and Tristan da Cunha', 'SH', '+290', '4', '2025-02-14 13:17:06', '2025-02-14 13:17:06', NULL),
(188, 'Saint Kitts and Nevis', 'KN', '+1869', '7', '2025-02-14 13:17:06', '2025-02-14 13:17:06', NULL),
(189, 'Saint Lucia', 'LC', '+1758', '7', '2025-02-14 13:17:06', '2025-02-14 13:17:06', NULL),
(190, 'Saint Martin (French part)', 'MF', '+590', '9', '2025-02-14 13:17:06', '2025-02-14 13:17:06', NULL),
(191, 'Saint Pierre and Miquelon', 'PM', '+508', '6', '2025-02-14 13:17:06', '2025-02-14 13:17:06', NULL),
(192, 'Saint Vincent and the Grenadines', 'VC', '+1784', '7', '2025-02-14 13:17:06', '2025-02-14 13:17:06', NULL),
(193, 'Samoa', 'WS', '+685', '6', '2025-02-14 13:17:06', '2025-02-14 13:17:06', NULL),
(194, 'San Marino', 'SM', '+378', '9', '2025-02-14 13:17:06', '2025-02-14 13:17:06', NULL),
(195, 'Sao Tome and Principe', 'ST', '+239', '7', '2025-02-14 13:17:06', '2025-02-14 13:17:06', NULL),
(196, 'Saudi Arabia', 'SA', '+966', '9', '2025-02-14 13:17:06', '2025-02-14 13:17:06', NULL),
(197, 'Senegal', 'SN', '+221', '9', '2025-02-14 13:17:06', '2025-02-14 13:17:06', NULL),
(198, 'Serbia', 'RS', '+381', '8', '2025-02-14 13:17:06', '2025-02-14 13:17:06', NULL),
(199, 'Seychelles', 'SC', '+248', '7', '2025-02-14 13:17:06', '2025-02-14 13:17:06', NULL),
(200, 'Sierra Leone', 'SL', '+232', '8', '2025-02-14 13:17:06', '2025-02-14 13:17:06', NULL),
(201, 'Singapore', 'SG', '+65', '8', '2025-02-14 13:17:06', '2025-02-14 13:17:06', NULL),
(202, 'Sint Maarten (Dutch part)', 'SX', '+1721', '7', '2025-02-14 13:17:06', '2025-02-14 13:17:06', NULL),
(203, 'Slovakia', 'SK', '+421', '9', '2025-02-14 13:17:06', '2025-02-14 13:17:06', NULL),
(204, 'Slovenia', 'SI', '+386', '8', '2025-02-14 13:17:06', '2025-02-14 13:17:06', NULL),
(205, 'Solomon Islands', 'SB', '+677', '7', '2025-02-14 13:17:06', '2025-02-14 13:17:06', NULL),
(206, 'Somalia', 'SO', '+252', '7', '2025-02-14 13:17:06', '2025-02-14 13:17:06', NULL),
(207, 'South Africa', 'ZA', '+27', '9', '2025-02-14 13:17:06', '2025-02-14 13:17:06', NULL),
(208, 'South Georgia and the South Sandwich Islands', 'GS', '+500', '5', '2025-02-14 13:17:06', '2025-02-14 13:17:06', NULL),
(209, 'South Sudan', 'SS', '+211', '9', '2025-02-14 13:17:06', '2025-02-14 13:17:06', NULL),
(210, 'Spain', 'ES', '+34', '9', '2025-02-14 13:17:06', '2025-02-14 13:17:06', NULL),
(211, 'Sri Lanka', 'LK', '+94', '9', '2025-02-14 13:17:06', '2025-02-14 13:17:06', NULL),
(212, 'Sudan', 'SD', '+249', '9', '2025-02-14 13:17:06', '2025-02-14 13:17:06', NULL),
(213, 'Suriname', 'SR', '+597', '6', '2025-02-14 13:17:06', '2025-02-14 13:17:06', NULL),
(214, 'Svalbard and Jan Mayen', 'SJ', '+47', '8', '2025-02-14 13:17:06', '2025-02-14 13:17:06', NULL),
(215, 'Sweden', 'SE', '+46', '9', '2025-02-14 13:17:06', '2025-02-14 13:17:06', NULL),
(216, 'Switzerland', 'CH', '+41', '9', '2025-02-14 13:17:06', '2025-02-14 13:17:06', NULL),
(217, 'Syrian Arab Republic', 'SY', '+963', '9', '2025-02-14 13:17:06', '2025-02-14 13:17:06', NULL),
(218, 'Taiwan, Province of China', 'TW', '+886', '9', '2025-02-14 13:17:06', '2025-02-14 13:17:06', NULL),
(219, 'Tajikistan', 'TJ', '+992', '9', '2025-02-14 13:17:06', '2025-02-14 13:17:06', NULL),
(220, 'Tanzania, United Republic of', 'TZ', '+255', '9', '2025-02-14 13:17:06', '2025-02-14 13:17:06', NULL),
(221, 'Thailand', 'TH', '+66', '9', '2025-02-14 13:17:06', '2025-02-14 13:17:06', NULL),
(222, 'Timor-Leste', 'TL', '+670', '7', '2025-02-14 13:17:06', '2025-02-14 13:17:06', NULL),
(223, 'Togo', 'TG', '+228', '8', '2025-02-14 13:17:06', '2025-02-14 13:17:06', NULL),
(224, 'Tokelau', 'TK', '+690', '4', '2025-02-14 13:17:06', '2025-02-14 13:17:06', NULL),
(225, 'Tonga', 'TO', '+676', '5', '2025-02-14 13:17:06', '2025-02-14 13:17:06', NULL),
(226, 'Trinidad and Tobago', 'TT', '+1868', '7', '2025-02-14 13:17:06', '2025-02-14 13:17:06', NULL),
(227, 'Tunisia', 'TN', '+216', '8', '2025-02-14 13:17:06', '2025-02-14 13:17:06', NULL),
(228, 'Turkey', 'TR', '+90', '10', '2025-02-14 13:17:06', '2025-02-14 13:17:06', NULL),
(229, 'Turkmenistan', 'TM', '+993', '8', '2025-02-14 13:17:06', '2025-02-14 13:17:06', NULL),
(230, 'Tuvalu', 'TV', '+688', '5', '2025-02-14 13:17:06', '2025-02-14 13:17:06', NULL),
(231, 'Uganda', 'UG', '+256', '9', '2025-02-14 13:17:06', '2025-02-14 13:17:06', NULL),
(232, 'Ukraine', 'UA', '+380', '9', '2025-02-14 13:17:06', '2025-02-14 13:17:06', NULL),
(233, 'United Arab Emirates', 'AE', '+971', '9', '2025-02-14 13:17:06', '2025-02-14 13:17:06', NULL),
(234, 'United Kingdom', 'GB', '+44', '10', '2025-02-14 13:17:06', '2025-02-14 13:17:06', NULL),
(235, 'United States', 'US', '+1', '10', '2025-02-14 13:17:06', '2025-02-14 13:17:06', NULL),
(236, 'Uruguay', 'UY', '+598', '8', '2025-02-14 13:17:07', '2025-02-14 13:17:07', NULL),
(237, 'Uzbekistan', 'UZ', '+998', '9', '2025-02-14 13:17:07', '2025-02-14 13:17:07', NULL),
(238, 'Vanuatu', 'VU', '+678', '7', '2025-02-14 13:17:07', '2025-02-14 13:17:07', NULL),
(239, 'Venezuela, Bolivarian Republic of', 'VE', '+58', '9', '2025-02-14 13:17:07', '2025-02-14 13:17:07', NULL),
(240, 'Viet Nam', 'VN', '+84', '10', '2025-02-14 13:17:07', '2025-02-14 13:17:07', NULL),
(241, 'Wallis and Futuna', 'WF', '+681', '6', '2025-02-14 13:17:07', '2025-02-14 13:17:07', NULL),
(242, 'Western Sahara', 'EH', '+212', '9', '2025-02-14 13:17:07', '2025-02-14 13:17:07', NULL),
(243, 'Yemen', 'YE', '+967', '9', '2025-02-14 13:17:07', '2025-02-14 13:17:07', NULL),
(244, 'Zambia', 'ZM', '+260', '9', '2025-02-14 13:17:07', '2025-02-14 13:17:07', NULL),
(245, 'Zimbabwe', 'ZW', '+263', '9', '2025-02-14 13:17:07', '2025-02-14 13:17:07', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `instructor_id` bigint(20) UNSIGNED DEFAULT NULL,
  `category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `description` mediumtext NOT NULL,
  `feature_details` mediumtext DEFAULT NULL,
  `price` decimal(8,2) NOT NULL DEFAULT 0.00,
  `learner_accessibility` enum('paid','free') NOT NULL DEFAULT 'free',
  `image` varchar(255) DEFAULT NULL,
  `slug` varchar(255) NOT NULL,
  `status` enum('0','1','2','3','4') NOT NULL DEFAULT '0' COMMENT '0=pending, 1=published, 2=waiting_for_review, 3=hold, 4=draft',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `guzzle_posts`
--

CREATE TABLE `guzzle_posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, '2013_10_13_152856_create_role_table', 1),
(2, '2014_10_12_000000_create_users_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2023_10_06_212934_create_guzzle_posts_table', 1),
(7, '2023_10_06_224840_add_google_id_column', 1),
(8, '2023_10_07_014134_create_sessions_table', 1),
(9, '2023_10_07_015237_add_facebook_id_column', 1),
(10, '2023_10_13_154954_create_password_reset_tokens_table', 1),
(11, '2023_11_17_183122_create_notifications_table', 1),
(12, '2024_01_12_100944_create_jobs_table', 1),
(13, '2024_06_09_194816_create_permission_tables', 1),
(14, '2024_06_24_124116_create_countries_table', 1),
(15, '2025_02_06_135951_create_settings_table', 1),
(16, '2025_03_04_194040_create_categories_table', 2),
(17, '2025_03_04_194041_create_courses_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 1),
(2, 'App\\Models\\User', 2),
(2, 'App\\Models\\User', 3);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` char(36) NOT NULL,
  `type` varchar(255) NOT NULL,
  `notifiable_type` varchar(255) NOT NULL,
  `notifiable_id` bigint(20) UNSIGNED NOT NULL,
  `data` text NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'view role', 'web', '2025-02-14 13:17:05', '2025-02-14 13:17:05'),
(2, 'create role', 'web', '2025-02-14 13:17:05', '2025-02-14 13:17:05'),
(3, 'update role', 'web', '2025-02-14 13:17:05', '2025-02-14 13:17:05'),
(4, 'delete role', 'web', '2025-02-14 13:17:05', '2025-02-14 13:17:05'),
(5, 'view permission', 'web', '2025-02-14 13:17:05', '2025-02-14 13:17:05'),
(6, 'create permission', 'web', '2025-02-14 13:17:05', '2025-02-14 13:17:05'),
(7, 'update permission', 'web', '2025-02-14 13:17:05', '2025-02-14 13:17:05'),
(8, 'delete permission', 'web', '2025-02-14 13:17:05', '2025-02-14 13:17:05'),
(9, 'view user', 'web', '2025-02-14 13:17:05', '2025-02-14 13:17:05'),
(10, 'create user', 'web', '2025-02-14 13:17:05', '2025-02-14 13:17:05'),
(11, 'update user', 'web', '2025-02-14 13:17:05', '2025-02-14 13:17:05'),
(12, 'delete user', 'web', '2025-02-14 13:17:05', '2025-02-14 13:17:05'),
(13, 'update setting', 'web', '2025-02-14 13:17:05', '2025-02-14 13:17:05'),
(14, 'create category', 'web', '2025-03-04 15:07:29', '2025-03-04 15:07:29'),
(15, 'delete category', 'web', '2025-03-04 15:07:49', '2025-03-04 15:07:49'),
(16, 'update category', 'web', '2025-03-04 15:07:59', '2025-03-04 15:07:59'),
(17, 'view category', 'web', '2025-03-04 15:08:08', '2025-03-04 15:08:08'),
(18, 'view course', 'web', '2025-03-04 15:08:26', '2025-03-04 15:08:26'),
(19, 'create course', 'web', '2025-03-04 15:08:32', '2025-03-04 15:08:32'),
(20, 'update course', 'web', '2025-03-04 15:08:40', '2025-03-04 15:08:40'),
(21, 'delete course', 'web', '2025-03-04 15:08:46', '2025-03-04 15:08:46');

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
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'web', '2025-02-14 13:17:05', '2025-02-14 13:17:05'),
(2, 'student', 'web', '2025-02-14 13:17:05', '2025-02-14 13:17:05'),
(3, 'teacher', 'web', '2025-02-14 13:17:05', '2025-03-04 14:14:48');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(16, 1),
(17, 1),
(18, 1),
(19, 1),
(20, 1),
(21, 1);

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` text NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('G0vKRN8H6gW2N2Jxa8L7sPGl8fqd1nkrSrrNSSwn', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/134.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiamUxY0RQTE1OMTJXa2FxRlZERmJYSzltdVgySEcxV3FtYXh2dWFPVSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7fQ==', 1741282140),
('yr0ntl6wNTR410C0pS824XUNzhxWRifKEKFH6Egu', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/134.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoidmdxTHZ6T0JiMkV2WnRrb0ExcU1ZdDQ1VmNUYWd0NkE0T01LR2lTZiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTtzOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czozMToiaHR0cDovLzEyNy4wLjAuMTo4MDAwL2Rhc2hib2FyZCI7fX0=', 1741282167);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `logo_light` varchar(255) DEFAULT NULL,
  `logo_dark` varchar(255) DEFAULT NULL,
  `auth_logo` varchar(255) DEFAULT NULL,
  `favicon` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone_number` varchar(255) DEFAULT NULL,
  `footer_text` varchar(255) DEFAULT NULL,
  `country_id` bigint(20) UNSIGNED DEFAULT NULL,
  `address` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `name`, `logo_light`, `logo_dark`, `auth_logo`, `favicon`, `email`, `phone_number`, `footer_text`, `country_id`, `address`, `created_at`, `updated_at`) VALUES
(1, 'Hebert Brock Plc', 'uploads/setting/1739558470-dental-logo.webp', 'uploads/setting/1739558470-footer-logo.webp', NULL, 'uploads/setting/1739558578-footer-logo.webp', 'wunodo@mailinator.com', 'Pitts Chase Co', 'Copyright 2025 © Crystal LMS', NULL, 'Wilcox and Hines Traders', '2025-02-14 13:17:07', '2025-02-14 13:42:58');

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
  `verification_code` varchar(255) DEFAULT NULL,
  `code_resend_count` varchar(255) NOT NULL DEFAULT '0',
  `verification_status` varchar(255) NOT NULL DEFAULT '0',
  `profile_pic` varchar(255) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `google_id` varchar(255) DEFAULT NULL,
  `facebook_id` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `verification_code`, `code_resend_count`, `verification_status`, `profile_pic`, `remember_token`, `created_at`, `updated_at`, `deleted_at`, `google_id`, `facebook_id`) VALUES
(1, 'Admin', 'admin@gmail.com', '2025-02-14 18:17:27', '$2y$10$.KR9jwiX23jnuN9xi4KoU.ipiWhD8PahtrFAE9/uUHuvcr2TXEZeC', '423064', '0', '0', NULL, NULL, '2025-02-14 13:17:05', '2025-03-06 12:29:09', NULL, NULL, NULL),
(2, 'Student', 'student@gmail.com', NULL, '$2y$10$a0S1dfU8YJ.2vfE8A1QNTuQq2mWWIMFQvIIIMOJKHMBgKUFM5uXVu', NULL, '0', '0', NULL, NULL, '2025-02-14 13:17:05', '2025-02-14 13:17:05', NULL, NULL, NULL),
(3, 'Yeo Gallegos', 'soxe@mailinator.com', NULL, '$2y$10$6QxSS/lJjtzW8NzegXeXWuK/sXj/PCUCfBET2Ru1Pjl45GlibpMsm', NULL, '0', '0', NULL, NULL, '2025-03-04 14:14:37', '2025-03-04 14:14:37', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categories_parent_id_foreign` (`parent_id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `courses_user_id_foreign` (`user_id`),
  ADD KEY `courses_instructor_id_foreign` (`instructor_id`),
  ADD KEY `courses_category_id_foreign` (`category_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `guzzle_posts`
--
ALTER TABLE `guzzle_posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notifications_notifiable_type_notifiable_id_index` (`notifiable_type`,`notifiable_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `settings_country_id_foreign` (`country_id`);

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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=246;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `guzzle_posts`
--
ALTER TABLE `guzzle_posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `categories_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `courses`
--
ALTER TABLE `courses`
  ADD CONSTRAINT `courses_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `courses_instructor_id_foreign` FOREIGN KEY (`instructor_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `courses_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `settings`
--
ALTER TABLE `settings`
  ADD CONSTRAINT `settings_country_id_foreign` FOREIGN KEY (`country_id`) REFERENCES `countries` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
