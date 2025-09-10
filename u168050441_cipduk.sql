-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 09, 2025 at 12:21 PM
-- Server version: 10.11.10-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u168050441_cipduk`
--

-- --------------------------------------------------------

--
-- Table structure for table `academic_levels`
--

CREATE TABLE `academic_levels` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `academic_levels`
--

INSERT INTO `academic_levels` (`id`, `name`) VALUES
(1, 'CIPD Level 3'),
(2, 'CIPD Level 5'),
(3, 'CIPD Level 7'),
(4, 'HR Assignment Help');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `canonical` varchar(255) DEFAULT NULL,
  `meta_description` text DEFAULT NULL,
  `description` longtext NOT NULL,
  `image_path` varchar(255) DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `is_published` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) NOT NULL,
  `name` varchar(225) NOT NULL,
  `slug` varchar(225) NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Assignment Writing', 'assignment-writing', '2025-03-21 17:27:41', '2025-03-21 17:27:41'),
(2, 'Academic Writing', 'academic-writing', '2025-03-21 17:28:02', '2025-03-21 17:28:02'),
(3, 'Content Writing', 'content-writing', '2025-03-21 16:42:10', '2025-03-21 16:42:10'),
(4, 'Essay Writing', 'essay-writing', '2025-03-21 16:42:10', '2025-03-21 16:42:10'),
(5, 'Research Paper', 'research-paper', '2025-03-21 16:43:22', '2025-03-21 16:43:22'),
(6, 'Admission', 'admission', '2025-03-21 16:43:22', '2025-03-21 16:43:22'),
(7, 'Jobs', 'jobs', '2025-03-21 16:43:22', '2025-03-21 16:43:22'),
(8, 'Tips', 'tips', '2025-03-21 16:43:22', '2025-03-21 16:43:22');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `details` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `phone`, `country`, `subject`, `details`, `created_at`, `updated_at`) VALUES
(126, 'ayesha', 'ayeshaaa.6000@gmail.com', '+447403663991', 'Oman', 'test', 'test', '2025-08-29 09:36:05', '2025-08-29 09:36:05'),
(127, 'Fitzgerald Whitley', 'ayeshaaa.6000@gmail.com', '+14327383579', 'Netherlands', 'Perspiciatis est vo', 'Temporibus laudantium animi quo et eveniet eius', '2025-09-01 08:17:47', '2025-09-01 08:17:47'),
(128, 'Suki Silva', 'ayeshaaa.6000@gmail.com', '+447403663991', 'Ghana', 'Cum duis facere iust', 'Quibusdam veniam quis enim hic enim quis culpa excepteur consequatur rem quos', '2025-09-01 08:20:00', '2025-09-01 08:20:00'),
(129, 'Reese Joyner', 'ayeshaaa.6000@gmail.com', '+15637189384', 'Puerto Rico', 'Atque iusto veritati', 'Ipsum aut ea qui rerum molestiae ut consectetur laborum Et eligendi dolor sunt optio', '2025-09-01 11:28:59', '2025-09-01 11:28:59'),
(130, 'Plato Frye', 'ayeshaaa.6000@gmail.com', '+447403663991', 'Bermuda', 'Tempora id tempora a', 'Rerum voluptatibus non deserunt at ut rerum eum ullam optio autem doloremque eu dolores', '2025-09-03 08:25:51', '2025-09-03 08:25:51'),
(131, 'Vielka Suarez', 'ayeshaaa.6000@gmail.com', '+447403663991', 'Montserrat', 'Illo anim consequatu', 'Qui tenetur soluta cumque necessitatibus sit ut', '2025-09-05 18:49:21', '2025-09-05 18:49:21'),
(132, 'Hamza', 'hamzakarim786@gmail.com', '+443413096652', 'Pakistan', 'test', 'test', '2025-09-08 11:03:00', '2025-09-08 11:03:00');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` int(10) UNSIGNED NOT NULL,
  `code` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `code`, `name`) VALUES
(1, 'AF', 'Afghanistan'),
(2, 'AL', 'Albania'),
(3, 'DZ', 'Algeria'),
(4, 'AS', 'American Samoa'),
(5, 'AD', 'Andorra'),
(6, 'AO', 'Angola'),
(7, 'AI', 'Anguilla'),
(8, 'AQ', 'Antarctica'),
(9, 'AG', 'Antigua and/or Barbuda'),
(10, 'AR', 'Argentina'),
(11, 'AM', 'Armenia'),
(12, 'AW', 'Aruba'),
(13, 'AU', 'Australia'),
(14, 'AT', 'Austria'),
(15, 'AZ', 'Azerbaijan'),
(16, 'BS', 'Bahamas'),
(17, 'BH', 'Bahrain'),
(18, 'BD', 'Bangladesh'),
(19, 'BB', 'Barbados'),
(20, 'BY', 'Belarus'),
(21, 'BE', 'Belgium'),
(22, 'BZ', 'Belize'),
(23, 'BJ', 'Benin'),
(24, 'BM', 'Bermuda'),
(25, 'BT', 'Bhutan'),
(26, 'BO', 'Bolivia'),
(27, 'BA', 'Bosnia and Herzegovina'),
(28, 'BW', 'Botswana'),
(29, 'BV', 'Bouvet Island'),
(30, 'BR', 'Brazil'),
(31, 'IO', 'British lndian Ocean Territory'),
(32, 'BN', 'Brunei Darussalam'),
(33, 'BG', 'Bulgaria'),
(34, 'BF', 'Burkina Faso'),
(35, 'BI', 'Burundi'),
(36, 'CA', 'Canada'),
(37, 'KH', 'Cambodia'),
(38, 'CM', 'Cameroon'),
(39, 'CV', 'Cape Verde'),
(40, 'KY', 'Cayman Islands'),
(41, 'CF', 'Central African Republic'),
(42, 'TD', 'Chad'),
(43, 'CL', 'Chile'),
(44, 'CN', 'China'),
(45, 'CX', 'Christmas Island'),
(46, 'CC', 'Cocos (Keeling) Islands'),
(47, 'CO', 'Colombia'),
(48, 'KM', 'Comoros'),
(49, 'CG', 'Congo'),
(50, 'CK', 'Cook Islands'),
(51, 'CR', 'Costa Rica'),
(52, 'HR', 'Croatia (Hrvatska)'),
(53, 'CU', 'Cuba'),
(54, 'CY', 'Cyprus'),
(55, 'CZ', 'Czech Republic'),
(56, 'CD', 'Democratic Republic of Congo'),
(57, 'DK', 'Denmark'),
(58, 'DJ', 'Djibouti'),
(59, 'DM', 'Dominica'),
(60, 'DO', 'Dominican Republic'),
(61, 'TP', 'East Timor'),
(62, 'EC', 'Ecudaor'),
(63, 'EG', 'Egypt'),
(64, 'SV', 'El Salvador'),
(65, 'GQ', 'Equatorial Guinea'),
(66, 'ER', 'Eritrea'),
(67, 'EE', 'Estonia'),
(68, 'ET', 'Ethiopia'),
(69, 'FK', 'Falkland Islands (Malvinas)'),
(70, 'FO', 'Faroe Islands'),
(71, 'FJ', 'Fiji'),
(72, 'FI', 'Finland'),
(73, 'FR', 'France'),
(74, 'FX', 'France, Metropolitan'),
(75, 'GF', 'French Guiana'),
(76, 'PF', 'French Polynesia'),
(77, 'TF', 'French Southern Territories'),
(78, 'GA', 'Gabon'),
(79, 'GM', 'Gambia'),
(80, 'GE', 'Georgia'),
(81, 'DE', 'Germany'),
(82, 'GH', 'Ghana'),
(83, 'GI', 'Gibraltar'),
(84, 'GR', 'Greece'),
(85, 'GL', 'Greenland'),
(86, 'GD', 'Grenada'),
(87, 'GP', 'Guadeloupe'),
(88, 'GU', 'Guam'),
(89, 'GT', 'Guatemala'),
(90, 'GN', 'Guinea'),
(91, 'GW', 'Guinea-Bissau'),
(92, 'GY', 'Guyana'),
(93, 'HT', 'Haiti'),
(94, 'HM', 'Heard and Mc Donald Islands'),
(95, 'HN', 'Honduras'),
(96, 'HK', 'Hong Kong'),
(97, 'HU', 'Hungary'),
(98, 'IS', 'Iceland'),
(99, 'IN', 'India'),
(100, 'ID', 'Indonesia'),
(101, 'IR', 'Iran (Islamic Republic of)'),
(102, 'IQ', 'Iraq'),
(103, 'IE', 'Ireland'),
(104, 'IL', 'Israel'),
(105, 'IT', 'Italy'),
(106, 'CI', 'Ivory Coast'),
(107, 'JM', 'Jamaica'),
(108, 'JP', 'Japan'),
(109, 'JO', 'Jordan'),
(110, 'KZ', 'Kazakhstan'),
(111, 'KE', 'Kenya'),
(112, 'KI', 'Kiribati'),
(113, 'KP', 'Korea, Democratic People\'s Republic of'),
(114, 'KR', 'Korea, Republic of'),
(115, 'KW', 'Kuwait'),
(116, 'KG', 'Kyrgyzstan'),
(117, 'LA', 'Lao People\'s Democratic Republic'),
(118, 'LV', 'Latvia'),
(119, 'LB', 'Lebanon'),
(120, 'LS', 'Lesotho'),
(121, 'LR', 'Liberia'),
(122, 'LY', 'Libyan Arab Jamahiriya'),
(123, 'LI', 'Liechtenstein'),
(124, 'LT', 'Lithuania'),
(125, 'LU', 'Luxembourg'),
(126, 'MO', 'Macau'),
(127, 'MK', 'Macedonia'),
(128, 'MG', 'Madagascar'),
(129, 'MW', 'Malawi'),
(130, 'MY', 'Malaysia'),
(131, 'MV', 'Maldives'),
(132, 'ML', 'Mali'),
(133, 'MT', 'Malta'),
(134, 'MH', 'Marshall Islands'),
(135, 'MQ', 'Martinique'),
(136, 'MR', 'Mauritania'),
(137, 'MU', 'Mauritius'),
(138, 'TY', 'Mayotte'),
(139, 'MX', 'Mexico'),
(140, 'FM', 'Micronesia, Federated States of'),
(141, 'MD', 'Moldova, Republic of'),
(142, 'MC', 'Monaco'),
(143, 'MN', 'Mongolia'),
(144, 'MS', 'Montserrat'),
(145, 'MA', 'Morocco'),
(146, 'MZ', 'Mozambique'),
(147, 'MM', 'Myanmar'),
(148, 'NA', 'Namibia'),
(149, 'NR', 'Nauru'),
(150, 'NP', 'Nepal'),
(151, 'NL', 'Netherlands'),
(152, 'AN', 'Netherlands Antilles'),
(153, 'NC', 'New Caledonia'),
(154, 'NZ', 'New Zealand'),
(155, 'NI', 'Nicaragua'),
(156, 'NE', 'Niger'),
(157, 'NG', 'Nigeria'),
(158, 'NU', 'Niue'),
(159, 'NF', 'Norfork Island'),
(160, 'MP', 'Northern Mariana Islands'),
(161, 'NO', 'Norway'),
(162, 'OM', 'Oman'),
(163, 'PK', 'Pakistan'),
(164, 'PW', 'Palau'),
(165, 'PA', 'Panama'),
(166, 'PG', 'Papua New Guinea'),
(167, 'PY', 'Paraguay'),
(168, 'PE', 'Peru'),
(169, 'PH', 'Philippines'),
(170, 'PN', 'Pitcairn'),
(171, 'PL', 'Poland'),
(172, 'PT', 'Portugal'),
(173, 'PR', 'Puerto Rico'),
(174, 'QA', 'Qatar'),
(175, 'SS', 'Republic of South Sudan'),
(176, 'RE', 'Reunion'),
(177, 'RO', 'Romania'),
(178, 'RU', 'Russian Federation'),
(179, 'RW', 'Rwanda'),
(180, 'KN', 'Saint Kitts and Nevis'),
(181, 'LC', 'Saint Lucia'),
(182, 'VC', 'Saint Vincent and the Grenadines'),
(183, 'WS', 'Samoa'),
(184, 'SM', 'San Marino'),
(185, 'ST', 'Sao Tome and Principe'),
(186, 'SA', 'Saudi Arabia'),
(187, 'SN', 'Senegal'),
(188, 'RS', 'Serbia'),
(189, 'SC', 'Seychelles'),
(190, 'SL', 'Sierra Leone'),
(191, 'SG', 'Singapore'),
(192, 'SK', 'Slovakia'),
(193, 'SI', 'Slovenia'),
(194, 'SB', 'Solomon Islands'),
(195, 'SO', 'Somalia'),
(196, 'ZA', 'South Africa'),
(197, 'GS', 'South Georgia South Sandwich Islands'),
(198, 'ES', 'Spain'),
(199, 'LK', 'Sri Lanka'),
(200, 'SH', 'St. Helena'),
(201, 'PM', 'St. Pierre and Miquelon'),
(202, 'SD', 'Sudan'),
(203, 'SR', 'Suriname'),
(204, 'SJ', 'Svalbarn and Jan Mayen Islands'),
(205, 'SZ', 'Swaziland'),
(206, 'SE', 'Sweden'),
(207, 'CH', 'Switzerland'),
(208, 'SY', 'Syrian Arab Republic'),
(209, 'TW', 'Taiwan'),
(210, 'TJ', 'Tajikistan'),
(211, 'TZ', 'Tanzania, United Republic of'),
(212, 'TH', 'Thailand'),
(213, 'TG', 'Togo'),
(214, 'TK', 'Tokelau'),
(215, 'TO', 'Tonga'),
(216, 'TT', 'Trinidad and Tobago'),
(217, 'TN', 'Tunisia'),
(218, 'TR', 'Turkey'),
(219, 'TM', 'Turkmenistan'),
(220, 'TC', 'Turks and Caicos Islands'),
(221, 'TV', 'Tuvalu'),
(222, 'UG', 'Uganda'),
(223, 'UA', 'Ukraine'),
(224, 'AE', 'United Arab Emirates'),
(225, 'GB', 'United Kingdom'),
(226, 'US', 'United States'),
(227, 'UM', 'United States minor outlying islands'),
(228, 'UY', 'Uruguay'),
(229, 'UZ', 'Uzbekistan'),
(230, 'VU', 'Vanuatu'),
(231, 'VA', 'Vatican City State'),
(232, 'VE', 'Venezuela'),
(233, 'VN', 'Vietnam'),
(234, 'VG', 'Virgin Islands (British)'),
(235, 'VI', 'Virgin Islands (U.S.)'),
(236, 'WF', 'Wallis and Futuna Islands'),
(237, 'EH', 'Western Sahara'),
(238, 'YE', 'Yemen'),
(239, 'YU', 'Yugoslavia'),
(240, 'ZR', 'Zaire'),
(241, 'ZM', 'Zambia'),
(242, 'ZW', 'Zimbabwe');

-- --------------------------------------------------------

--
-- Table structure for table `deadlines`
--

CREATE TABLE `deadlines` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `deadlines`
--

INSERT INTO `deadlines` (`id`, `name`) VALUES
(3, '10 Days'),
(11, '12 Hours'),
(2, '15 Days'),
(1, '20 Days'),
(10, '24 Hours'),
(8, '3 Days'),
(7, '4 Days'),
(9, '48 Hours'),
(6, '5 Days'),
(5, '6 Days'),
(4, '8 Days');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fares`
--

CREATE TABLE `fares` (
  `id` int(10) UNSIGNED NOT NULL,
  `academic_level_id` int(10) UNSIGNED NOT NULL,
  `deadline_id` int(10) UNSIGNED NOT NULL,
  `per_page_price` double(6,2) NOT NULL,
  `per_slide_price` double(6,2) NOT NULL,
  `per_poster_price` double(6,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fares`
--

INSERT INTO `fares` (`id`, `academic_level_id`, `deadline_id`, `per_page_price`, `per_slide_price`, `per_poster_price`) VALUES
(1, 1, 1, 4.00, 4.00, 20.00),
(2, 1, 2, 6.00, 4.00, 20.00),
(3, 1, 3, 8.00, 4.00, 20.00),
(4, 1, 4, 10.00, 4.00, 20.00),
(5, 1, 5, 12.00, 4.00, 20.00),
(6, 1, 6, 14.00, 4.00, 20.00),
(7, 1, 7, 16.00, 4.00, 20.00),
(8, 1, 8, 18.00, 4.00, 20.00),
(9, 1, 9, 20.00, 4.00, 20.00),
(10, 1, 10, 22.00, 4.00, 20.00),
(11, 1, 11, 24.00, 4.00, 20.00),
(12, 2, 1, 6.00, 4.00, 20.00),
(13, 2, 2, 8.00, 4.00, 20.00),
(14, 2, 3, 10.00, 4.00, 20.00),
(15, 2, 4, 12.00, 4.00, 20.00),
(16, 2, 5, 14.00, 4.00, 20.00),
(17, 2, 6, 16.00, 4.00, 20.00),
(18, 2, 7, 18.00, 4.00, 20.00),
(19, 2, 8, 20.00, 4.00, 20.00),
(20, 2, 9, 22.00, 4.00, 20.00),
(21, 2, 10, 24.00, 4.00, 20.00),
(22, 2, 11, 26.00, 4.00, 20.00),
(23, 3, 1, 8.00, 4.00, 20.00),
(24, 3, 2, 10.00, 4.00, 20.00),
(25, 3, 3, 12.00, 4.00, 20.00),
(26, 3, 4, 14.00, 4.00, 20.00),
(27, 3, 5, 16.00, 4.00, 20.00),
(28, 3, 6, 18.00, 4.00, 20.00),
(29, 3, 7, 20.00, 4.00, 20.00),
(30, 3, 8, 22.00, 4.00, 20.00),
(31, 3, 9, 24.00, 4.00, 20.00),
(32, 3, 10, 26.00, 4.00, 20.00),
(33, 3, 11, 28.00, 4.00, 20.00),
(34, 4, 1, 10.00, 4.00, 20.00),
(35, 4, 2, 12.00, 4.00, 20.00),
(36, 4, 3, 14.00, 4.00, 20.00),
(37, 4, 4, 16.00, 4.00, 20.00),
(38, 4, 5, 18.00, 4.00, 20.00),
(39, 4, 6, 20.00, 4.00, 20.00),
(40, 4, 7, 22.00, 4.00, 20.00),
(41, 4, 8, 24.00, 4.00, 20.00),
(42, 4, 9, 26.00, 4.00, 20.00),
(43, 4, 10, 28.00, 4.00, 20.00),
(44, 4, 11, 30.00, 4.00, 20.00);

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `id` int(10) UNSIGNED NOT NULL,
  `order_id` int(10) UNSIGNED NOT NULL,
  `file_path` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`id`, `order_id`, `file_path`) VALUES
(9, 135, 'uploads/68b15d468dfbd_1756454214_cta-sec.webp'),
(10, 136, 'uploads/68b15e52a3968_1756454482_cta-sec.webp'),
(11, 136, 'uploads/68b15e52a4687_1756454482_HomePage-0٢.webp'),
(12, 143, 'uploads/68beb8758554d_1757329525_SEO Test - SEO Executive (1) Syed Muhammad Osama (1).docx');

-- --------------------------------------------------------

--
-- Table structure for table `invoices`
--

CREATE TABLE `invoices` (
  `id` int(10) UNSIGNED NOT NULL,
  `ref_no` varchar(255) NOT NULL,
  `gateway` varchar(255) DEFAULT NULL,
  `currency` varchar(255) NOT NULL DEFAULT 'gbp',
  `stripe_id` varchar(255) DEFAULT NULL,
  `amount` double NOT NULL,
  `auto_mail` int(11) NOT NULL DEFAULT 0,
  `status_id` int(10) UNSIGNED NOT NULL DEFAULT 4,
  `user_id` int(10) UNSIGNED NOT NULL,
  `order_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `invoices`
--

INSERT INTO `invoices` (`id`, `ref_no`, `gateway`, `currency`, `stripe_id`, `amount`, `auto_mail`, `status_id`, `user_id`, `order_id`, `created_at`, `updated_at`) VALUES
(73, 'a0bd7d6b-25be-4222-9dcd-69e4de4fa08e', 'stripe', 'GBP', NULL, 1152, 0, 4, 45, 75, '2025-08-27 07:24:26', '2025-08-27 07:24:26'),
(74, '3fd175d7-92a0-46f1-bfc6-a48ef6199342', 'stripe', 'GBP', NULL, 570, 0, 4, 46, 76, '2025-08-27 08:04:54', '2025-08-27 08:04:54'),
(75, '73f8d5b9-fddf-480b-b712-17987275a962', 'stripe', 'GBP', NULL, 450, 0, 4, 47, 77, '2025-08-27 08:38:47', '2025-08-27 08:38:47'),
(76, '2726a2bd-6564-437c-8aa4-6efef48d1f70', 'stripe', 'GBP', NULL, 1024, 0, 4, 48, 78, '2025-08-27 08:40:51', '2025-08-27 08:40:51'),
(97, '2424f964-dccb-4e62-92ec-302c9b51ab62', 'stripe', 'GBP', NULL, 816, 0, 4, 50, 99, '2025-08-28 08:35:15', '2025-08-28 08:35:15'),
(101, '70142b22-e0be-4960-a72e-2a587491d02b', 'stripe', 'GBP', NULL, 312, 0, 4, 53, 103, '2025-08-28 09:32:47', '2025-08-28 09:32:47'),
(102, '755e7a61-eb21-4356-87f8-ad6a17a332a3', 'stripe', 'GBP', NULL, 616, 0, 4, 54, 104, '2025-08-28 09:38:47', '2025-08-28 09:38:47'),
(123, '0dffce4d-56bf-4e8a-801a-5a6fec5b01fe', 'stripe', 'GBP', NULL, 1692, 0, 4, 55, 125, '2025-08-28 12:04:56', '2025-08-28 12:04:56'),
(124, 'fdc9deb5-bf70-4ec4-a59a-33e137775843', 'stripe', 'GBP', NULL, 1508, 0, 4, 55, 126, '2025-08-28 12:53:43', '2025-08-28 12:53:43'),
(125, 'f745c850-a77c-4007-8d0a-21f52e2e4ae9', 'stripe', 'GBP', NULL, 16, 0, 4, 56, 127, '2025-08-28 12:54:36', '2025-08-28 12:54:36'),
(126, 'eb38baf4-7a71-4988-a43d-5324fd171565', 'stripe', 'GBP', NULL, 372, 0, 4, 55, 128, '2025-08-29 07:27:27', '2025-08-29 07:27:27'),
(127, 'd99a03b4-c326-454c-ac91-220c6700a7a8', 'stripe', 'GBP', NULL, 234, 0, 4, 55, 129, '2025-08-29 07:29:32', '2025-08-29 07:29:32'),
(128, 'ae968cd0-6dfb-418f-b0c0-f8848ec4d541', 'stripe', 'GBP', NULL, 702, 0, 4, 55, 130, '2025-08-29 07:37:28', '2025-08-29 07:37:28'),
(132, '96c4223f-4106-49d4-8a6a-3ec38aec4dc9', 'stripe', 'GBP', NULL, 380, 0, 4, 55, 134, '2025-08-29 07:53:28', '2025-08-29 07:53:28'),
(133, '5cc42ab1-0bb7-4014-af0b-e0b4a563910e', 'stripe', 'GBP', NULL, 940, 0, 4, 55, 135, '2025-08-29 07:56:54', '2025-08-29 07:56:54'),
(134, 'c01a8eed-d98d-4684-ae0d-d526ed8abbc4', 'stripe', 'GBP', NULL, 1260, 0, 4, 55, 136, '2025-08-29 08:01:22', '2025-08-29 08:01:22'),
(135, '91946642-e62c-46cd-ac55-99381faf33af', 'stripe', 'GBP', NULL, 686, 0, 4, 55, 137, '2025-09-01 11:30:02', '2025-09-01 11:30:02'),
(136, '9a85c403-64d6-4a87-a0e8-e9197711b2f2', 'stripe', 'GBP', NULL, 1184, 0, 4, 58, 138, '2025-09-03 05:45:48', '2025-09-03 05:45:48'),
(137, '1cc5cbe5-ae29-404d-a55e-17dcb8cb09d4', 'stripe', 'GBP', NULL, 600, 0, 4, 59, 139, '2025-09-03 05:49:54', '2025-09-03 05:49:54'),
(138, 'ac6ae516-a868-4019-bbbb-31c988f4f40c', 'stripe', 'GBP', NULL, 1392, 0, 4, 55, 140, '2025-09-03 08:28:21', '2025-09-03 08:28:21'),
(139, '4c39805a-e7cf-400e-a862-8a2cdc365146', 'stripe', 'GBP', NULL, 286, 0, 4, 55, 141, '2025-09-05 18:50:21', '2025-09-05 18:50:21'),
(140, '3d2a4627-894e-4c47-929a-f892e228c11e', 'stripe', 'GBP', NULL, 120, 0, 4, 41, 142, '2025-09-08 08:14:02', '2025-09-08 08:14:02'),
(141, '64c4c617-5315-48da-a810-9fbc841ad426', 'stripe', 'GBP', NULL, 432, 0, 4, 37, 143, '2025-09-08 11:05:25', '2025-09-08 11:05:25'),
(142, 'eda46ed5-26dc-44e2-8f36-228c78624479', 'stripe', 'GBP', NULL, 1652, 0, 4, 55, 144, '2025-09-08 14:36:26', '2025-09-08 14:36:26'),
(143, '64816599-dd39-42d4-a971-0583b433bf3a', 'stripe', 'GBP', NULL, 420, 0, 4, 55, 145, '2025-09-08 14:39:30', '2025-09-08 14:39:30'),
(144, 'f7c65779-eca1-435a-a376-616b4a2b8d03', 'stripe', 'GBP', NULL, 2400, 0, 4, 55, 146, '2025-09-08 14:47:19', '2025-09-08 14:47:19'),
(145, 'bc00162d-e877-4fde-a9e4-ec1f618573c2', 'stripe', 'GBP', NULL, 1584, 0, 4, 43, 147, '2025-09-08 15:25:27', '2025-09-08 15:25:27'),
(146, '75775b9b-8cb0-4c69-a4a7-55d5db12ced0', 'stripe', 'GBP', NULL, 1846, 0, 4, 55, 148, '2025-09-08 15:30:14', '2025-09-08 15:30:14'),
(147, 'a25cda2c-410d-4a90-a874-752a2733143e', 'stripe', 'GBP', NULL, 726, 0, 4, 55, 149, '2025-09-08 15:38:07', '2025-09-08 15:38:07'),
(148, '70156966-71f1-4b39-81f0-1f7b80dd71b1', 'stripe', 'GBP', NULL, 864, 0, 4, 43, 150, '2025-09-08 15:50:05', '2025-09-08 15:50:05');

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
(1, '2014_10_12_100000_create_password_resets_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2021_12_11_104107_create_statuses_table', 1),
(4, '2022_05_24_000001_create_permissions_table', 1),
(5, '2022_05_24_000002_create_roles_table', 1),
(6, '2022_05_24_000003_create_users_table', 1),
(7, '2022_05_24_000004_create_permission_role_pivot_table', 1),
(8, '2022_05_24_000005_create_role_user_pivot_table', 1),
(9, '2022_06_08_085252_create_web_settings_table', 1),
(10, '2022_06_09_072430_create_services_table', 1),
(11, '2022_06_09_103559_create_blogs_table', 1),
(12, '2022_06_11_081924_create_contacts_table', 1),
(13, '2022_06_13_085818_create_paper_types_table', 1),
(14, '2022_06_13_100951_create_academic_levels_table', 1),
(15, '2022_06_13_103131_create_deadlines_table', 1),
(16, '2022_06_13_111450_create_fares_table', 1),
(17, '2022_06_15_085659_create_subjects_table', 1),
(18, '2022_06_15_093044_create_refrence_styles_table', 1),
(19, '2022_06_15_101945_create_countries_table', 1),
(20, '2022_06_20_093634_create_orders_table', 1),
(21, '2022_06_20_093817_create_files_table', 1),
(22, '2023_01_13_094552_create_invoices_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `paper_topic` text NOT NULL,
  `course_name` text NOT NULL,
  `academic_level` varchar(255) NOT NULL,
  `number_of_pages` varchar(255) NOT NULL,
  `reference_style` varchar(255) NOT NULL,
  `deadline` varchar(255) NOT NULL,
  `detail` mediumtext DEFAULT NULL,
  `is_complete` tinyint(1) NOT NULL DEFAULT 0,
  `cost_per_page` int(11) NOT NULL,
  `total_price` int(11) NOT NULL,
  `academic_level_id` int(11) DEFAULT NULL,
  `deadline_id` int(11) DEFAULT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `status_id` int(10) UNSIGNED NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `name`, `email`, `phone`, `country`, `paper_topic`, `course_name`, `academic_level`, `number_of_pages`, `reference_style`, `deadline`, `detail`, `is_complete`, `cost_per_page`, `total_price`, `academic_level_id`, `deadline_id`, `user_id`, `status_id`, `created_at`, `updated_at`) VALUES
(75, 'Gage Schwartz', 'qulaxujomi@mailinator.com', '+14074578073', 'Thailand', 'Iste amet veniam e', 'Odette Velez', '3', '96', '8', '4', 'Est dolor tempora ne', 0, 12, 1152, NULL, NULL, 45, 1, '2025-08-27 07:24:26', '2025-08-27 07:24:26'),
(76, 'Margaret Matthews', 'nineteviva@mailinator.com', '+18578218436', 'Brazil', 'Quis ex impedit nob', 'Naida Dawson', '4', '19', '1', '11', 'Possimus velit rem', 0, 30, 570, NULL, NULL, 46, 1, '2025-08-27 08:04:54', '2025-08-27 08:04:54'),
(77, 'Yuri Burns', 'jofofijo@mailinator.com', '+13856161013', 'Grenada', 'Laborum veritatis od', 'Dylan Day', '1', '45', '8', '4', 'Error in dolorum eum', 0, 10, 450, NULL, NULL, 47, 1, '2025-08-27 08:38:47', '2025-08-27 08:38:47'),
(78, 'Vanna Winters', 'kopyqof@mailinator.com', '+16724644792', 'Antigua and/or Barbuda', 'Ut eaque molestiae d', 'Evelyn Dejesus', '4', '64', '8', '4', 'Itaque quibusdam vol', 0, 16, 1024, NULL, NULL, 48, 1, '2025-08-27 08:40:51', '2025-08-27 08:40:51'),
(99, 'Robert Hancock', 'debaqe@mailinator.com', '+447403663991', 'Spain', 'Provident ipsum pe', 'Hedley Silva', '3', '34', '7', '9', 'Dolor eos sequi est', 0, 24, 816, NULL, NULL, 50, 1, '2025-08-28 08:35:15', '2025-08-28 08:35:15'),
(103, 'Kameko Dixon', 'refysu@mailinator.com', '+447403663991', 'Central African Republic', 'Rerum amet quis cul', 'Vaughan Whitley', '3', '26', '2', '3', 'Est laborum Dolore', 0, 12, 312, NULL, NULL, 53, 1, '2025-08-28 09:32:47', '2025-08-28 09:32:47'),
(104, 'Rebekah Dennis', 'juki@mailinator.com', '+447403663991', 'Equatorial Guinea', 'Veritatis illo archi', 'Isaiah Richards', '3', '22', '9', '11', 'Sequi sint sunt sit', 0, 28, 616, NULL, NULL, 54, 1, '2025-08-28 09:38:47', '2025-08-28 09:38:47'),
(125, 'Kamal Knight', 'ayeshaaa.6000@gmail.com', '+19025974724', 'Zambia', 'Deleniti deleniti cu', 'Mariam Boyd', '3', '94', '7', '6', 'Aliquid enim labore', 0, 18, 1692, NULL, NULL, 55, 1, '2025-08-28 12:04:56', '2025-08-28 12:04:56'),
(126, 'Paki Smith', 'ayeshaaa.6000@gmail.com', '+447403663991', 'France', 'Et aspernatur volupt', 'Phyllis Cardenas', '3', '58', '7', '10', 'Velit ad exercitati', 0, 26, 1508, NULL, NULL, 55, 1, '2025-08-28 12:53:43', '2025-08-28 12:53:43'),
(127, 'Akeem Crawford', 'casux@mailinator.com', '+19319773708', 'Western Sahara', 'Aliquip accusamus te', 'Amy Wilkerson', '1', '2', '8', '3', 'Qui libero magni dol', 0, 8, 16, NULL, NULL, 56, 1, '2025-08-28 12:54:36', '2025-08-28 12:54:36'),
(128, 'Echo Blevins', 'ayeshaaa.6000@gmail.com', '+14457747016', 'Ukraine', 'Est occaecat ullam s', 'Mari Castillo', '1', '93', 'Turabian', '1', 'Quo quis aliquip duc', 0, 4, 372, NULL, NULL, 55, 1, '2025-08-29 07:27:27', '2025-08-29 07:27:27'),
(129, 'Zenaida Gibson', 'ayeshaaa.6000@gmail.com', '+447403663991', 'Italy', 'Maxime ab qui optio', 'Lee Hunter', '3', '9', 'Other', '10', 'Provident ut dolor', 0, 26, 234, NULL, NULL, 55, 1, '2025-08-29 07:29:32', '2025-08-29 07:29:32'),
(130, 'Burke Newman', 'ayeshaaa.6000@gmail.com', '+447403663991', 'Bouvet Island', 'Laudantium consequa', 'Keaton Booker', '4', '27', 'Oxford', '9', 'Minim illum archite', 0, 26, 702, NULL, NULL, 55, 1, '2025-08-29 07:37:28', '2025-08-29 07:37:28'),
(134, 'Uriel Hays', 'ayeshaaa.6000@gmail.com', '+447403663991', 'Marshall Islands', 'Voluptas aut officii', 'Ginger Bond', '2', '38', 'APA', '3', 'Enim dolore voluptat', 0, 10, 380, NULL, NULL, 55, 1, '2025-08-29 07:53:28', '2025-08-29 07:53:28'),
(135, 'Geoffrey Winters', 'ayeshaaa.6000@gmail.com', '+19494798863', 'Sudan', 'Odit excepturi quisq', 'James Hendrix', '1', '94', 'MLA', '4', 'Commodo delectus qu', 0, 10, 940, NULL, NULL, 55, 1, '2025-08-29 07:56:54', '2025-08-29 07:56:54'),
(136, 'Cecilia Palmer', 'ayeshaaa.6000@gmail.com', '+447403663991', 'Chad', 'Minima aliqua Volup', 'Susan Graves', '2', '63', 'Harvard', '8', 'Eum voluptatem nulla', 0, 20, 1260, NULL, NULL, 55, 1, '2025-08-29 08:01:22', '2025-08-29 08:01:22'),
(137, 'Yardley Vang', 'ayeshaaa.6000@gmail.com', '+447403663991', 'Suriname', 'Elit fuga Nulla nu', 'Lillian Howell', '3', '49', 'CBE', '4', 'Sit ut adipisicing s', 0, 14, 686, NULL, NULL, 55, 1, '2025-09-01 11:30:02', '2025-09-01 11:30:02'),
(138, 'Halee Chang', 'kyfimukeqo@mailinator.com', '+16263678688', 'Republic of South Sudan', 'Reprehenderit quod r', 'Acton Nelson', '2', '74', 'Vancouver', '6', 'Eiusmod a dignissimo', 0, 16, 1184, NULL, NULL, 58, 1, '2025-09-03 05:45:48', '2025-09-03 05:45:48'),
(139, 'Alea Johnson', 'jawixok@mailinator.com', '+447403663991', 'Gambia', 'Dolorum voluptate qu', 'Imani Garrett', '1', '30', 'Harvard', '9', 'Cumque laboriosam s', 0, 20, 600, NULL, NULL, 59, 1, '2025-09-03 05:49:54', '2025-09-03 05:49:54'),
(140, 'Halee Santana', 'ayeshaaa.6000@gmail.com', '+13645121467', 'Nicaragua', 'Minima fugiat conse', 'Randall Booth', '2', '87', 'APA', '6', 'Animi nemo eius nih', 0, 16, 1392, NULL, NULL, 55, 1, '2025-09-03 08:28:21', '2025-09-03 08:28:21'),
(141, 'Francesca Mccarty', 'ayeshaaa.6000@gmail.com', '+447403663991', 'Nepal', 'Nobis vel asperiores', 'Stuart Stephenson', '4', '13', 'Vancouver', '7', 'Natus qui modi Nam a', 0, 22, 286, NULL, NULL, 55, 1, '2025-09-05 18:50:21', '2025-09-05 18:50:21'),
(142, 'riffat mushtaq', 'Mahik6061@gmail.com', '+971555947610', 'Barbados', 'Notification check', 'KL', '2', '5', 'Other', '10', 'KKMK', 0, 24, 120, NULL, NULL, 41, 1, '2025-09-08 08:14:02', '2025-09-08 08:14:02'),
(143, 'hamza', 'hamzakarim786@gmail.com', '+443413096652', 'Pakistan', 'est', 'Hamza', '2', '18', 'APA', '10', 'test', 0, 24, 432, NULL, NULL, 37, 1, '2025-09-08 11:05:25', '2025-09-08 11:05:25'),
(144, 'Marcia Benton', 'ayeshaaa.6000@gmail.com', '+447403663991', 'San Marino', 'Harum harum rerum re', 'Justine William', '3', '59', 'Harvard', '11', 'Libero eaque minus d', 0, 28, 1652, NULL, NULL, 55, 1, '2025-09-08 14:36:26', '2025-09-08 14:36:26'),
(145, 'Daphne Barrett', 'ayeshaaa.6000@gmail.com', '+447403663991', 'Austria', 'Sit ipsam Nam est d', 'Leo Dudley', '2', '30', 'Turabian', '5', 'Molestiae debitis es', 0, 14, 420, NULL, NULL, 55, 1, '2025-09-08 14:39:30', '2025-09-08 14:39:30'),
(146, 'Sigourney Lamb', 'ayeshaaa.6000@gmail.com', '+447403663991', 'Mexico', 'Voluptates sed excep', 'Galvin May', '2', '100', 'Harvard', '10', 'Incidunt enim quo o', 0, 24, 2400, NULL, NULL, 55, 1, '2025-09-08 14:47:19', '2025-09-08 14:47:19'),
(147, 'Tanisha Maddox', 'mahwishali.kingdomvision@gmail.com', '+442842756317', 'United Kingdom', 'Aut aperiam fuga Sa', 'Tanner Benson', '1', '66', 'Chicago', '11', 'Sint animi sunt rat', 0, 24, 1584, NULL, NULL, 43, 1, '2025-09-08 15:25:27', '2025-09-08 15:25:27'),
(148, 'Deacon Collins', 'ayeshaaa.6000@gmail.com', '+447403663991', 'Jamaica', 'Dicta sint iure quis', 'Jonah James', '2', '71', 'Oxford', '11', 'Suscipit incididunt', 0, 26, 1846, NULL, NULL, 55, 1, '2025-09-08 15:30:14', '2025-09-08 15:30:14'),
(149, 'Macey Simon', 'ayeshaaa.6000@gmail.com', '+15878823778', 'Slovakia', 'Qui impedit perspic', 'Nina Bush', '2', '33', 'MLA', '9', 'Omnis aut sunt nulla', 0, 22, 726, NULL, NULL, 55, 1, '2025-09-08 15:38:07', '2025-09-08 15:38:07'),
(150, 'Ria Burks', 'mahwishali.kingdomvision@gmail.com', '+447403663991', 'Barbados', 'Est eligendi laudan', 'Adrienne Moon', '4', '36', 'CBE', '8', 'Quaerat temporibus m', 0, 24, 864, NULL, NULL, 43, 1, '2025-09-08 15:50:05', '2025-09-08 15:50:05');

-- --------------------------------------------------------

--
-- Table structure for table `paper_types`
--

CREATE TABLE `paper_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `paper_types`
--

INSERT INTO `paper_types` (`id`, `name`) VALUES
(11, 'Assignment'),
(2, 'Book Report'),
(7, 'Course Work'),
(6, 'Dissertation'),
(10, 'Dissertation Proposal'),
(1, 'Essay'),
(12, 'Other'),
(3, 'Research Paper'),
(9, 'Research Proposal'),
(4, 'Term Paper'),
(5, 'Thesis'),
(8, 'Thesis Proposal');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_reset_tokens`
--

INSERT INTO `password_reset_tokens` (`email`, `token`, `created_at`) VALUES
('ayeshaaa.6000@gmail.com', '$2y$10$rdWuGWRN0ktiC8Z0AFywN.wUxtGcXhqFkN.TLikOjw/ihj2ej4ZEi', '2025-03-17 05:18:01');

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `title`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'user_management_access', NULL, NULL, NULL),
(2, 'permission_create', NULL, NULL, NULL),
(3, 'permission_edit', NULL, NULL, NULL),
(4, 'permission_show', NULL, NULL, NULL),
(5, 'permission_delete', NULL, NULL, NULL),
(6, 'permission_access', NULL, NULL, NULL),
(7, 'role_create', NULL, NULL, NULL),
(8, 'role_edit', NULL, NULL, NULL),
(9, 'role_show', NULL, NULL, NULL),
(10, 'role_delete', NULL, NULL, NULL),
(11, 'role_access', NULL, NULL, NULL),
(12, 'user_create', NULL, NULL, NULL),
(13, 'user_edit', NULL, NULL, NULL),
(14, 'user_show', NULL, NULL, NULL),
(15, 'user_delete', NULL, NULL, NULL),
(16, 'user_access', NULL, NULL, NULL),
(17, 'profile_password_edit', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `role_id` int(10) UNSIGNED NOT NULL,
  `permission_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_role`
--

INSERT INTO `permission_role` (`role_id`, `permission_id`) VALUES
(1, 1),
(1, 2),
(1, 3),
(1, 4),
(1, 5),
(1, 6),
(1, 7),
(1, 8),
(1, 9),
(1, 10),
(1, 11),
(1, 12),
(1, 13),
(1, 14),
(1, 15),
(1, 16),
(1, 17),
(2, 17);

-- --------------------------------------------------------

--
-- Table structure for table `refrence_styles`
--

CREATE TABLE `refrence_styles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `refrence_styles`
--

INSERT INTO `refrence_styles` (`id`, `name`, `active`) VALUES
(1, 'APA', 1),
(2, 'MLA', 1),
(3, 'Chicago', 1),
(4, 'Turabian', 1),
(5, 'Harvard', 1),
(6, 'Oxford', 1),
(7, 'Vancouver', 1),
(8, 'CBE', 1),
(9, 'Other', 1);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `title`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Admin', NULL, NULL, NULL),
(2, 'User', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`user_id`, `role_id`) VALUES
(1, 1),
(31, 2),
(32, 2),
(36, 2),
(37, 2),
(38, 2),
(39, 2),
(40, 2),
(41, 2),
(42, 2),
(43, 2),
(45, 2),
(46, 2),
(47, 2),
(48, 2),
(50, 2),
(51, 2),
(53, 2),
(54, 2),
(55, 2),
(56, 2),
(58, 2),
(59, 2);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `canonical` varchar(255) DEFAULT NULL,
  `meta_description` text DEFAULT NULL,
  `html` longtext DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `is_published` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `name`, `title`, `slug`, `canonical`, `meta_description`, `html`, `user_id`, `is_published`, `created_at`, `updated_at`) VALUES
(3, 'Dissertation Writing', 'The Top Dissertation Writing Help UK for A+ Grades', 'dissertation-writing', 'https://assignmenthelpuk.co.uk/dissertation-writing', 'Hire our proficient writers for the top dissertation writing help in UK. Get well-researched and engaging dissertations to excel in all your academics.', '<h1><strong>Dissertation writing help in Dubai, letting you reach your destination easily</strong></h1><p>Dissertation Writing is a lot different and require more potential than doing other simple assignments. In order to write a best dissertation the writer should be an expert and a good researcher. Moreover, an experienced writers who knows well how to proofread and perfectly edit the missing content is essential for successful dissertation writing services.</p><p>Our dissertation writing help in Dubai, Ajman, Sharjah, Al-Ain, Fujairah and other part of UAE is just convenient and remarkable. The qualified writers are experienced and most of them are also from education background. Every step of our dissertation is done with step by step, ending at a fully prepared dissertation that is received by our valued customers.</p><p>Your dissertation writing in Dubai and all other cities of UAE is no more a NEED. You have found the capable team of writers whose entire focus is to serve students of UAE. Help with dissertation writing at Essay Writing Service UAE comes with a complete package beginning with research, editing and proofreading. Each heading is includes as per the students requirements and we put maximum efforts to deliver back your thesis before time that you have a good time to review and revisions.</p><p>Referencing is an important part of thesis. Our writers make sure that correct referencing is done so that nothing can stop you from getting your work done. An interactively written abstract is just necessary for your dissertation and we never miss that. The expert dissertation writers in UAE works smartly on these abstract so that reader urge to read the complete dissertation is established.</p><p>Our pool of customers is just amazing. They have been with us since they were in high school and many other from PhD level join us every day. The students are happy with our work and freely ask from our dissertation writers about their projects. We respect student’s privacy and maintain confidentiality. So keep aside any kind of hesitation and ask for our services without any worry.</p><h2><strong>BEST DISSERTATION ASSISTANCE, DISSERTATION WRITING SERVICES IN DUBAI</strong></h2><p>Most of the students face trouble is working on long thesis, dissertation and research proposal. There are many reason behind it including less time, practical life and they often find it difficult to complete their dissertation. Perhaps it can be the most difficult thing students might deal with. Our custom dissertation help is modified to your requirements. Students just share their requirements with us and we ensure that their work is done solely and nothing can trouble them with our dissertation writing in Dubai and all over UAE.</p><p>Our custom dissertation writing services never leave you at any stage. No matter you are stuck at any point of your dissertation writing we can help you. We take all you pain away with our writing services. Whether you have done an intro only or covered more than one chapters we can complete it all quickly as possible. Share your half-done dissertation and we will return it back done completely.</p><p>Not only this, we emphasis on creating quality work. Our writers has already worked for many students who has got desired grades in their dissertations. Working on dissertation by conducting proper research is not only what our writers do. They add their ideas and collection of words so that it can be unique piece of work.</p><h3><strong>Super Team of Dissertation Writers in UAE</strong></h3><p>Best team of writers here not only just do it for the sake of their job. We choose the writers who feel happy working on thesis, assignments and dissertations. Making a customer happy is not an easy task. Our writers love to assist you. The dedication level is so high that it helps students get better understanding of their assignments and dissertation. We also guide students in any kind of help they require after their dissertation is completely done. Our major focus is to leave customer stress-free. Dissertation help won’t be so feasible and easy to get. Just chat with us and find solution to your dissertation writing needs.</p><h4><strong>We make it effective and fast</strong></h4><p>Our prices varies and depend on your timeline. We ask our customers to place their order as quick as they can before the submission. However, many students don’t find it easy to manage because of their busy schedule and they have less time left to submit the dissertation. Our writers are not afraid working on your urgent deadlines. So don’t held by the time just message us to know the availability of our writers and discuss your problem with us.</p><p>We are the best dissertation writers online. We work with task synchronization and work in a proper process. Don’t let your important part of academic years be squandered by wrong hands. You have spent a lot year working hard on your academic assignment a properly written dissertation can be a milestone for you. So what are you waiting for? Get help from the best dissertation writers in UAE</p><h3><strong>Write my dissertation, this can really help you</strong></h3><p>Dissertation help in UAE is taking your worries over. Students come to us and say “write my dissertation” and we take all the requirement from them to help them. It might a long writing task for you but our writers find it quite easy as they experienced and they almost work on different dissertations every day.</p><p>Dissertation writing Dubai is making the academic journey of students less painful and more practical. Why not opt for writing services when you are getting cheap dissertation writing services in UAE easily. You get an online help now just email us or chat with us.</p><h4><strong>Doing it professionally</strong></h4><p>The best way to do any assignment is to understand what the facilitator want in it and our writers focus on that to create a practical piece of paper. There are some pointer we work on and follow them on each step. Meetings and discussion is the part of our routine. We take it personally. Our complete focus is that our customer don’t feel worried or painful while using our dissertation writing service online. Our affordable prices is the another thing student love about EWS. If you need more clarification on your topic we are here for your assistance and clear all your doubts. Even after submitting an order we respond you in best possible way to make you feel relax and satisfied with our services.</p><p>Dissertation writing UAE appreciate its customer’s patience and their cooperation. We expect a proper guideline and instructions from students so we can provide them quality paper as per their requirement. We believe just say three words “write my dissertation” is not difficult.</p>', 1, 1, '2022-07-07 02:54:43', '2025-05-15 11:23:30'),
(17, 'CIPD Assignment', 'CIPD Assignment', 'cipd-assignment', 'https://assignmenthelpuk.co.uk/cipd-assignment', NULL, '<h1><strong>CIPD Assignment Writing Help in Dubai</strong></h1><p>Do you have your CIPD assignments pending for a long time? Are you looking for professional CIPD writers in UAE to ace your CIPD course?</p><p>Let’s not worry about it as we’re here to take you out of the chaos with our exceptional services. No matter if the course is long due or you’re stuck between the complexities of the course, our professional assistance at the right time can help you complete it with good grades.&nbsp;</p><p>Since CIPD is emerging as an important qualification for the corporate world so it’s not right to skip it. There are a number of assignments, deadlines, tests, and submissions that sometimes it becomes impossible to get everything done. But with our CIPD assignment help in Dubai we make the achievement possible for you.</p><p>Whether it’s CIPD Level 1, Level 3, Level 5 chr assignment or CIPD Level 7, our writers are CIPD professionals who can make you win your courses with their quality writing help.&nbsp;</p><h2><strong>Why Only Our CIPD Writers in Dubai?</strong></h2><p>Anyone can come forward as a CIPD writer but there are certain skills, knowledge and writing styles that separate excellent CIPD writers from the crowd. At EWS ae, we have writers who know how to write a CIPD report or assignment following the standards it demands. So, if you’re still not sure to trust us, we can connect you with our writers to win your confidence. They won’t only make the success possible for you but will also make sure that you complete the CIPD phases smoothly.&nbsp;</p><p>You can even call us to receive instant assistance from our CIPD writers in Dubai. It’s time for you to unlock the journey to success by hiring our professional help who worries more about your grades than you, yourself. To let you outshine the crowd through CIPD assignments, they perform extensive research and write it with meticulous details to leave no point to make your assignments outstanding.</p><p>That’s why it’s always a fair deal to hire us. You won’t be needing an additional income as we always charge affordable rates and you’d also be saving your precious time by letting our writers work on your CIPD assignments and reports.&nbsp;</p><h3><strong>Best CIPD Writing Help in Dubai</strong></h3><p>In the UAE, CIPD isn’t as challenging as it was before because of the immediate help of the professional services. With our platform, we teach you how to write a personal development plan CIPD to get on top of other candidates. Not only this, if you’re finding it difficult to perform the CIPD level 5 assignment answer, we can also make it work for you.</p><p>The objective is to make your CIPD course easier for you and get over the highly-valued, in-demand qualification. If you’re looking to make a successful career ahead, CIPD courses can be a value-addition to your resume. So, whether your assignment is about business skills, employee management, coaching or mentoring, leadership or organization skills, our CIPD assignment online Dubai is right here to serve you quality papers within the deadline.&nbsp;</p><p>We don’t claim ourselves as one of the leading CIPD assignment writing services in Dubai but we do deliver excellent, state-of-the-art writing services. Over the years, we have helped students in completing their CIPD diploma in human resource management and CIPD in HR. And we can help you too. Just leave us your requirements in the order form and we’ll revert with an outclass assignment.</p><p>We know, internet is filled with CIPD assignment writers but if you don’t want to take risks, always take help from the ones who are experienced in this field. This will keep your hassle-free and calm.</p><p>Ready to get your CIPD assignment from the best writers in Abu Dhabi, Sharjah, Fujairah, Al Ain, UAE?</p>', 1, 1, '2022-07-07 03:48:15', '2025-05-14 08:53:30'),
(19, 'Admission Essay Writing', 'Admission Essay Writing', 'admission-essay-writing', 'https://assignmenthelpuk.co.uk/admission-essay-writing', 'Get high-quality essays from our best admission essay writing service UAE. Hire our professional essay writers and get admission to your desired institution.', NULL, 1, 1, '2024-10-28 13:24:10', '2025-05-15 11:15:51'),
(34, 'Online Exam Help', 'Online Exam Help', 'online-exam-help', 'https://assignmenthelpuk.co.uk/online-exam-help', NULL, NULL, 1, 1, '2024-10-28 14:03:23', '2025-01-20 04:38:11'),
(51, 'Assignment Proofreading', 'Assignment Proofreading', 'assignment-proofreading', 'https://assignmenthelpuk.co.uk/assignment-proofreading', NULL, NULL, 1, 1, '2025-01-13 01:31:14', '2025-01-13 01:31:14'),
(52, 'Essay Writing', 'Essay Writing', 'essay-writing', 'https://assignmenthelpuk.co.uk/essay-writing', NULL, NULL, 1, 1, '2025-01-14 01:47:32', '2025-05-15 11:24:17'),
(53, 'Homework Writing', 'Homework Writing', 'homework-writing', 'https://assignmenthelpuk.co.uk/homework-writing', NULL, NULL, 1, 1, '2025-01-14 05:24:26', '2025-05-14 08:58:44'),
(54, 'Coursework Writing', 'Coursework Writing', 'coursework-writing', 'https://assignmenthelpuk.co.uk/coursework-writing', NULL, NULL, 1, 1, '2025-01-14 06:21:01', '2025-05-14 08:55:30'),
(55, 'Buy Assignment', 'Buy Assignment', 'buy-assignment', 'https://assignmenthelpuk.co.uk/buy-assignment', NULL, NULL, 1, 1, '2025-01-17 05:22:52', '2025-05-14 08:47:29'),
(56, 'HND Assignment', 'HND Assignment', 'hnd-assignment', 'https://assignmenthelpuk.co.uk/hnd-assignment', NULL, NULL, 1, 1, '2025-01-17 06:15:58', '2025-05-14 08:58:33'),
(57, 'Buy Essay', 'Buy Essay', 'buy-essay', 'https://assignmenthelpuk.co.uk/buy-essay', NULL, NULL, 1, 1, '2025-01-18 05:14:12', '2025-05-15 11:18:10'),
(58, 'Do My Assignment', 'Do My Assignment', 'do-my-assignment', 'https://assignmenthelpuk.co.uk/do-my-assignment', NULL, NULL, 1, 1, '2025-01-20 04:19:19', '2025-05-14 08:57:23'),
(59, 'Make My Assignment', 'Make My Assignment', 'make-my-assignment', 'https://assignmenthelpuk.co.uk/make-my-assignment', NULL, NULL, 1, 1, '2025-01-20 05:41:13', '2025-05-14 09:17:36'),
(60, 'HR Assignment', 'HR Assignment', 'hr-assignment', 'https://assignmenthelpuk.co.uk/hr-assignment', NULL, NULL, 1, 1, '2025-01-22 00:02:20', '2025-05-15 11:25:46'),
(62, 'ATHE Assignment', 'ATHE Assignment', 'athe-assignment', 'https://assignmenthelpuk.co.uk/athe-assignment', NULL, NULL, 1, 1, '2025-01-22 01:14:54', '2025-05-15 11:16:11'),
(63, 'Law Assignment', 'Law Assignment', 'law-assignment', 'https://assignmenthelpuk.co.uk/law-assignment', NULL, NULL, 1, 1, '2025-01-27 06:19:40', '2025-05-15 11:32:23'),
(64, 'CMI Assignment', 'CMI Assignment', 'cmi-assignment', 'https://assignmenthelpuk.co.uk/cmi-assignment', NULL, NULL, 1, 1, '2025-01-27 07:31:25', '2025-05-15 11:19:08'),
(65, 'Write My Assignment', 'Write My Assignment', 'write-my-assignment', 'https://assignmenthelpuk.co.uk/write-my-assignment', NULL, NULL, 1, 1, '2025-01-27 07:45:16', '2025-05-14 09:32:09'),
(66, 'ILM Assignment', 'ILM Assignment', 'ilm-assignment', 'https://assignmenthelpuk.co.uk/ilm-assignment', NULL, NULL, 1, 1, '2025-01-27 08:38:11', '2025-05-15 11:25:58'),
(67, 'Edexcel Assignment', 'Edexcel Assignment', 'edexcel-assignment', 'https://assignmenthelpuk.co.uk/edexcel-assignment', NULL, NULL, 1, 1, '2025-02-07 05:35:49', '2025-05-15 11:23:48'),
(68, 'PowerPoint Presentation', 'PowerPoint Presentation', 'powerpoint-presentation', 'https://assignmenthelpuk.co.uk/powerpoint-presentation', NULL, NULL, 1, 1, '2025-02-08 03:04:28', '2025-05-14 09:26:18'),
(69, 'Thesis Writing', 'Thesis Writing', 'thesis-writing', 'https://assignmenthelpuk.co.uk/thesis-writing', NULL, NULL, 1, 1, '2025-02-08 03:07:48', '2025-05-14 09:32:42'),
(70, 'Research Paper Writing', 'Research Paper Writing', 'research-paper-writing', 'https://assignmenthelpuk.co.uk/research-paper-writing', NULL, NULL, 1, 1, '2025-02-08 03:09:27', '2025-05-15 11:25:16'),
(71, 'CV Writing', 'CV Writing', 'cv-writing', 'https://assignmenthelpuk.co.uk/cv-writing', NULL, NULL, 1, 1, '2025-02-08 03:10:58', '2025-05-14 08:56:29'),
(72, 'Write My Essay', 'Write My Essay', 'write-my-essay', 'https://assignmenthelpuk.co.uk/write-my-essay', NULL, NULL, 1, 1, '2025-02-08 03:12:49', '2025-05-14 09:18:54'),
(73, 'Case Study Writing', 'Case Study Writing', 'case-study-writing', 'https://assignmenthelpuk.co.uk/case-study-writing', NULL, NULL, 1, 1, '2025-02-08 03:14:59', '2025-05-14 08:52:54'),
(74, 'PhD Writing', 'PhD Writing', 'phd-writing', 'https://assignmenthelpuk.co.uk/phd-writing', NULL, NULL, 1, 1, '2025-02-08 03:15:53', '2025-05-15 11:30:09'),
(75, 'PGCE Assignment', 'PGCE Assignment', 'pgce-assignment', 'https://assignmenthelpuk.co.uk/pgce-assignment', NULL, NULL, 1, 1, '2025-02-08 03:17:11', '2025-05-15 11:30:50'),
(76, 'MBA Assignment', 'MBA Assignment', 'mba-assignment', 'https://assignmenthelpuk.co.uk/mba-assignment', NULL, NULL, 1, 1, '2025-02-08 03:18:06', '2025-05-15 11:32:50'),
(77, 'Write My Dissertation', 'Write My Dissertation', 'write-my-dissertation', 'https://assignmenthelpuk.co.uk/write-my-dissertation', NULL, NULL, 1, 1, '2025-02-08 03:19:15', '2025-02-08 03:19:26'),
(78, 'OTHM Assignment', 'OTHM Assignment', 'othm-assignment', 'https://assignmenthelpuk.co.uk/othm-assignment', NULL, NULL, 1, 1, '2025-02-08 03:20:00', '2025-05-15 11:33:25'),
(80, 'Nursing Essay Writing', 'Nursing Essay Writing', 'nursing-essay-writing', 'https://assignmenthelpuk.co.uk/nursing-essay-writing', NULL, NULL, 1, 1, '2025-02-08 03:21:20', '2025-05-14 09:19:35'),
(81, 'College Assignment', 'College Assignment', 'college-assignment', 'https://assignmenthelpuk.co.uk/college-assignment', NULL, NULL, 1, 1, '2025-02-08 04:39:24', '2025-05-15 11:19:46'),
(83, 'University Assignment', 'University Assignment', 'university-assignment', 'https://assignmenthelpuk.co.uk/university-assignment', NULL, NULL, 1, 1, '2025-02-10 05:35:42', '2025-05-15 11:24:34'),
(84, 'Last Minute Assignment', 'Last Minute Assignment', 'last-minute-assignment', 'https://assignmenthelpuk.co.uk/last-minute-assignment', NULL, NULL, 1, 1, '2025-02-11 06:41:55', '2025-05-15 11:31:41'),
(85, 'Dissertation Editing', 'Dissertation Editing', 'dissertation-editing', 'https://assignmenthelpuk.co.uk/dissertation-editing', NULL, NULL, 1, 1, '2025-02-11 09:32:27', '2025-05-15 11:21:04'),
(86, 'NVQ Assignment', 'NVQ Assignment', 'nvq-assignment', 'https://assignmenthelpuk.co.uk/nvq-assignment', NULL, NULL, 1, 1, '2025-02-13 04:58:26', '2025-05-15 11:33:06'),
(87, 'CIM Assignment', 'CIM Assignment', 'cim-assignment', 'https://assignmenthelpuk.co.uk/cim-assignment', NULL, NULL, 1, 1, '2025-02-13 05:08:49', '2025-05-15 11:18:48'),
(88, 'Custom Essay Writing', 'Custom Essay Writing', 'custom-essay-writing', 'https://assignmenthelpuk.co.uk/custom-essay-writing', NULL, NULL, 1, 1, '2025-02-13 05:34:50', '2025-05-15 11:26:16'),
(89, 'BTEC Assignment', 'BTEC Assignment', 'btec-assignment', 'https://assignmenthelpuk.co.uk/btec-assignment', NULL, NULL, 1, 1, '2025-02-13 05:48:24', '2025-05-14 08:47:18'),
(90, 'Academic Writing', 'Academic Writing', 'academic-writing', 'https://assignmenthelpuk.co.uk/academic-writing', NULL, NULL, 1, 1, '2025-02-13 06:37:58', '2025-05-14 08:46:10'),
(91, 'Open University Assignment', 'Open University Assignment', 'open-university-assignment', 'https://assignmenthelpuk.co.uk/open-university-assignment', NULL, NULL, 1, 1, '2025-02-13 08:29:00', '2025-05-15 11:34:50'),
(92, 'Term Paper Writing', 'Term Paper Writing', 'term-paper-writing', 'https://assignmenthelpuk.co.uk/term-paper-writing', NULL, NULL, 1, 1, '2025-02-14 00:54:19', '2025-05-14 09:33:04'),
(93, 'Personal Statement Writing', 'Personal Statement Writing', 'personal-statement-writing', 'https://assignmenthelpuk.co.uk/personal-statement-writing', NULL, NULL, 1, 1, '2025-02-14 01:13:44', '2025-05-15 11:34:15'),
(94, 'Nebosh Assignment', 'Nebosh Assignment', 'nebosh-assignment', 'https://assignmenthelpuk.co.uk/nebosh-assignment', NULL, NULL, 1, 1, '2025-02-14 01:47:52', '2025-05-14 09:19:09'),
(95, 'Literature Review Writing', 'Literature Review Writing', 'literature-review-writing', 'https://assignmenthelpuk.co.uk/literature-review-writing', NULL, NULL, 1, 1, '2025-02-15 02:20:26', '2025-05-15 11:36:14'),
(96, 'Do My Homework', 'Do My Homework', 'do-my-homework', 'https://assignmenthelpuk.co.uk/do-my-homework', NULL, NULL, 1, 1, '2025-02-15 07:58:33', '2025-02-15 07:58:33'),
(97, 'Copywriting', 'Copywriting', 'copywriting', 'https://assignmenthelpuk.co.uk/copywriting', NULL, NULL, 1, 1, '2025-02-17 05:00:37', '2025-05-15 11:20:30'),
(98, 'Pay Someone to Do My Assignment', 'Pay Someone to Do My Assignment', 'pay-someone-to-do-my-assignment', 'https://assignmenthelpuk.co.uk/pay-someone-to-do-my-assignment', NULL, NULL, 1, 1, '2025-02-17 05:14:59', '2025-02-17 05:14:59'),
(99, 'Report Writing', 'Report Writing', 'report-writing', 'https://assignmenthelpuk.co.uk/report-writing', NULL, NULL, 1, 1, '2025-02-18 01:25:49', '2025-05-15 11:25:32'),
(100, 'SWOT Analysis Assignment', 'SWOT Analysis Assignment', 'swot-analysis-assignment', 'https://assignmenthelpuk.co.uk/swot-analysis-assignment', NULL, NULL, 1, 1, '2025-02-18 02:24:51', '2025-05-15 11:24:54'),
(101, 'Summary Writing', 'Summary Writing', 'summary-writing', 'https://assignmenthelpuk.co.uk/summary-writing', NULL, NULL, 1, 1, '2025-02-18 02:38:27', '2025-05-14 09:27:14'),
(102, 'Conclusion Writing', 'Conclusion Writing', 'conclusion-writing', 'https://assignmenthelpuk.co.uk/conclusion-writing', NULL, NULL, 1, 1, '2025-02-18 04:49:21', '2025-05-14 08:54:33'),
(103, 'CTH Assignment', 'CTH Assignment', 'cth-assignment', 'https://assignmenthelpuk.co.uk/cth-assignment', NULL, NULL, 1, 1, '2025-02-18 05:26:22', '2025-05-14 08:55:51'),
(104, 'TMA Assignment', 'TMA Assignment', 'tma-assignment', 'https://assignmenthelpuk.co.uk/tma-assignment', NULL, NULL, 1, 1, '2025-02-18 05:58:29', '2025-05-14 09:32:29'),
(105, 'Lab Report Writing', 'Lab Report Writing', 'lab-report-writing', 'https://assignmenthelpuk.co.uk/lab-report-writing', NULL, NULL, 1, 1, '2025-02-19 01:52:44', '2025-05-15 11:31:27'),
(107, 'College Essay Writing', 'College Essay Writing', 'college-essay-writing', 'https://assignmenthelpuk.co.uk/college-essay-writing', NULL, NULL, 1, 1, '2025-03-24 07:53:11', '2025-05-14 08:54:20');

-- --------------------------------------------------------

--
-- Table structure for table `statuses`
--

CREATE TABLE `statuses` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `for` varchar(255) NOT NULL,
  `css_class` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `statuses`
--

INSERT INTO `statuses` (`id`, `name`, `slug`, `for`, `css_class`) VALUES
(1, 'Pending', 'pending', 'order', 'badge-warning'),
(2, 'In Progress', 'in-progress', 'order', 'badge-info'),
(3, 'Completed', 'completed', 'order', 'badge-success'),
(4, 'Unpaid', 'unpaid', 'invoice', 'badge-warning'),
(5, 'Paid', 'paid', 'invoice', 'badge-success');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `name`, `active`) VALUES
(1, 'Art', 1),
(2, 'Architecture', 1),
(3, 'Dance', 1),
(4, 'Design Analysis', 1),
(5, 'Drama', 1),
(6, 'Movies', 1),
(7, 'Music', 1),
(8, 'Paintings', 1),
(9, 'Theatre', 1),
(10, 'Biology', 1),
(11, 'Chemistry', 1),
(12, 'Communication and Media', 1),
(13, 'Advertising', 1),
(14, 'Communication Strategies', 1),
(15, 'Journalism', 1),
(16, 'Public Relations', 1),
(17, 'Creative Writing', 1),
(18, 'Economics', 1),
(19, 'Accounting', 1),
(20, 'Case Study', 1),
(21, 'Company Analysis', 1),
(22, 'E-Commerce', 1),
(23, 'Finance', 1),
(24, 'Logistics', 1),
(25, 'Trade', 1),
(26, 'Education', 1),
(27, 'Application Essay', 1),
(28, 'Education Theories', 1),
(29, 'Pedogogy', 1),
(30, 'Teacher\'s Career', 1),
(31, 'Engineering', 1),
(32, 'English', 1),
(33, 'Ethics', 1),
(34, 'History', 1),
(35, 'African-American Studies', 1),
(36, 'American History', 1),
(37, 'Asian Studis', 1),
(38, 'Canadian Studies', 1),
(39, 'East European Studies', 1),
(40, 'Holocaust', 1),
(41, 'Latin-American Studies', 1),
(42, 'Native-American Studies', 1),
(43, 'West European Studies', 1),
(44, 'Law', 1),
(45, 'Criminology', 1),
(46, 'Legal Issues', 1),
(47, 'Linguistics', 1),
(48, 'Literature', 1),
(49, 'American Literature', 1),
(50, 'Antique Literature', 1),
(51, 'Asian Literature', 1),
(52, 'English Literature', 1),
(53, 'Shakespeare Studies', 1),
(54, 'Management', 1),
(55, 'Marketing', 1),
(56, 'Mathematics', 1),
(57, 'Medicine and Health', 1),
(58, 'Alternative Medicine', 1),
(59, 'Healthcare', 1),
(60, 'Nursing', 1),
(61, 'Nurtition', 1),
(62, 'Pharmacology', 1),
(63, 'Sport', 1),
(64, 'Nature', 1),
(65, 'Agricultural Studies', 1),
(66, 'Anthropology', 1),
(67, 'Astronomy', 1),
(68, 'Environmental Issues', 1),
(69, 'Geography', 1),
(70, 'Geology', 1),
(71, 'Philosophy', 1),
(72, 'Physics', 1),
(73, 'Political Science', 1),
(74, 'Psychology', 1),
(75, 'Religion and Theology', 1),
(76, 'Sociology', 1),
(77, 'Technology', 1),
(78, 'Aeronautics', 1),
(79, 'Aviation', 1),
(80, 'Computer Science', 1),
(81, 'Internet', 1),
(82, 'IT Management', 1),
(83, 'Web Design', 1),
(84, 'Toursim', 1),
(85, 'Other', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Assignment', NULL, NULL),
(2, 'Thesis', NULL, NULL),
(3, 'Writing', NULL, NULL),
(4, 'Essay', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `zip_code` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `email_verified_at` datetime DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `provider_id` varchar(255) DEFAULT NULL,
  `provider_name` varchar(255) DEFAULT NULL,
  `remember_token` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `address`, `state`, `zip_code`, `city`, `country`, `email_verified_at`, `password`, `provider_id`, `provider_name`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Admin', 'info@cipdassignmenthelpuk.co.uk', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$SA3MQioa134ZwTjtlRnh.OrOxUktlgEO1dTYBqE58T.IE5EHffFee', NULL, NULL, 'JsdCabrF2p5owMuAgVl7XpBK4RIr5zrZ93I0v67Z7KklvojT1hkSFtjfMAdZ', NULL, NULL, NULL),
(31, 'Vincent Lowery', 'umehanihammad@gmail.com', '+14153742823', NULL, NULL, NULL, NULL, 'Jordan', NULL, '$2y$10$dbpxbHtFbbsVRyOOLN6Azu6h/dlrNjhrXPMBGu1PtTJpfKxkl94Li', NULL, NULL, 'W2H2QglWStMn0j9QiHaRR2hoRvMiTDImNk5KlvU78GD0PvXrBXjcoBkk34fD', '2025-03-20 07:17:36', '2025-03-20 07:17:36', NULL),
(32, 'Riffat', 'asmatmushtaq949@gmail.com', '+441158881209', NULL, NULL, NULL, NULL, 'Bahrain', NULL, '$2y$10$H8m.C2.TkocvR.XG3ZVStem1QbSjRL/KPvQN4p.nAnU1rk4tOEZXW', NULL, NULL, NULL, '2025-03-29 08:38:37', '2025-03-29 08:38:37', NULL),
(36, 'Venus Hensley', 'vozymuwyro@mailinator.com', '+18126021226', NULL, NULL, NULL, NULL, 'Belarus', NULL, '$2y$10$JQnfKTrV5Q0bTUKa0bcnJePyWXhBZdl2nQB.wCYIvsY61ajaSXq0y', NULL, NULL, NULL, '2025-04-07 14:02:19', '2025-04-07 14:02:19', NULL),
(37, 'Hamza', 'hamzakarim786@gmail.com', '+443413096652', NULL, NULL, NULL, NULL, 'Pakistan', NULL, '$2y$10$TmP58FmY420bgPisHPWydeVXZRuFCsjYNodETrF.WaNElK3uJpfWy', NULL, NULL, 'ISTxJVJtwmJdYFMxK2MhA302IPGYQN9ffDx7PiS71Lsqm3UeT8J7ukPjG50b', '2025-04-08 11:29:18', '2025-04-08 11:35:49', NULL),
(38, 'Hamza', 'digitcreators@gmail.com', '+443413096652', NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$N4ZYkFHyjcfYJKbhuG3eK.nSMl/9YHElhBY4COcJ0Rtn6uzsyJJSm', NULL, NULL, NULL, '2025-04-08 11:37:43', '2025-04-08 11:37:43', NULL),
(39, 'Hoyt Wolf', 'gupiqaba@mailinator.com', '+441158881209', NULL, NULL, NULL, NULL, 'American Samoa', NULL, '$2y$10$FzJly.eSugn7OakXqGgFL.hhr1xDesaPnA3Wmxn6RskCyS7rDpvTu', NULL, NULL, NULL, '2025-04-08 13:52:03', '2025-04-08 13:52:03', NULL),
(40, 'Priscilla Moss', 'vyzew@mailinator.com', '+441158881209', NULL, NULL, NULL, NULL, 'Saint Vincent and the Grenadines', NULL, '$2y$10$tTPSfUfWqYnSf72GhDQHYOOQZ4kgBosrj7Ga7.yOjcj9BBytZxdd2', NULL, NULL, NULL, '2025-04-08 13:58:41', '2025-04-08 13:58:41', NULL),
(41, 'Riffat', 'mahik6061@gmail.com', '+601119890389', NULL, NULL, NULL, NULL, 'Bangladesh', NULL, '$2y$10$WZTWOutJuj0t5xpOUAz0R.M6sTJFxYuRqv9GjF5EZTS2QdHYyaNb6', NULL, NULL, NULL, '2025-04-14 09:04:52', '2025-04-14 09:04:52', NULL),
(42, 'RIFFAT PAGAL', 'dckiran97@gmail.com', '+447403663991', NULL, NULL, NULL, NULL, 'United Kingdom', NULL, '$2y$10$lyiQbmZuRn7j8DJmGA.Sze9wAAYCdYCjpF7qqRGb3EDLTRl.PRvOm', NULL, NULL, NULL, '2025-06-11 10:57:44', '2025-06-11 10:57:44', NULL),
(43, 'Neve Sanders', 'mahwishali.kingdomvision@gmail.com', '+447403663991', NULL, NULL, NULL, NULL, 'Bolivia', NULL, '$2y$10$NJnzGZnPOezf.f.FHy8vQO1/0JqrCpPBC9iniV6CY4Tc8zTvUiInm', NULL, NULL, NULL, '2025-06-14 11:05:11', '2025-06-14 11:05:11', NULL),
(45, 'Gage Schwartz', 'qulaxujomi@mailinator.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$Tgzc/NlHzGWGjuN/pWbOzOnGZa0DF0U96Tpci7cC52owBz6ZSx9KO', NULL, NULL, NULL, '2025-08-27 07:24:26', '2025-08-27 07:24:26', NULL),
(46, 'Margaret Matthews', 'nineteviva@mailinator.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$0korzBPyj/lgk49EAYcbYejPwQCAkk4TaxMa2W5aJ7kN0Xg9AkN.K', NULL, NULL, NULL, '2025-08-27 08:04:54', '2025-08-27 08:04:54', NULL),
(47, 'Yuri Burns', 'jofofijo@mailinator.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$D5HU8QM5G08K52rdxz0W7OGNghzYsHuF3cNdvH/8e45PRRMDiuuLi', NULL, NULL, NULL, '2025-08-27 08:38:47', '2025-08-27 08:38:47', NULL),
(48, 'Vanna Winters', 'kopyqof@mailinator.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$m/dLfSuPmHG4of/JDg6B6uO23qzxYuqB1ofGa.wW7pGr996e8Iwie', NULL, NULL, NULL, '2025-08-27 08:40:51', '2025-08-27 08:40:51', NULL),
(50, 'Robert Hancock', 'debaqe@mailinator.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$faeNHC3VrsEEOGS7zzkKNO9QBzztuizG/WsWhfHbA/trtVMMbnStC', NULL, NULL, NULL, '2025-08-28 08:35:15', '2025-08-28 08:35:15', NULL),
(51, 'ayesha', 'maliayesha288@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$nigSMRxOKjwmZBSX8yTaXuLcXWv3AiRxxNuEIdNo8nG9.04EH4JLu', NULL, NULL, 'veJt3w7gnTOKxckL5KuRqzMG8NxmLJ4TNT2bPAiAp56mMq3h5azqawvu33O8', '2025-08-28 09:13:21', '2025-08-28 09:20:05', NULL),
(53, 'Kameko Dixon', 'refysu@mailinator.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$k6zxhFxW/1nl1UKEYaSSMe0nQJXZKT7X0YF1SL8OVGEi0.pcjGU8C', NULL, NULL, NULL, '2025-08-28 09:32:47', '2025-08-28 09:32:47', NULL),
(54, 'Rebekah Dennis', 'juki@mailinator.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$D1I6s4Dr6xgy702ffFkmCeCsvO.We3fHXoQKrGuaNp60i3o/P2B4u', NULL, NULL, NULL, '2025-08-28 09:38:47', '2025-08-28 09:38:47', NULL),
(55, 'Kamal Knight', 'ayeshaaa.6000@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$wlKkLnCXtWcUSJaYPhSXwON7kRX8PSu0kKUxkSevVhPTafOJz1IYq', NULL, NULL, NULL, '2025-08-28 12:04:56', '2025-08-29 10:29:18', NULL),
(56, 'Akeem Crawford', 'casux@mailinator.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$ym3k6Fxa9ClsuDC6QBhMu.w1QCwaHRxzXbxI9QpRirsiUbituz3Q.', NULL, NULL, NULL, '2025-08-28 12:54:36', '2025-08-28 12:54:36', NULL),
(58, 'Halee Chang', 'kyfimukeqo@mailinator.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$aljIEorVSawemwLBeHh.HeXqsM./e2og8YgtpniijR/MfxA.0zleW', NULL, NULL, NULL, '2025-09-03 05:45:48', '2025-09-03 05:45:48', NULL),
(59, 'Alea Johnson', 'jawixok@mailinator.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$0xErngDJmniBDNw3SCRSa.snfHuCNgXV.DlE5Rm6k4IQNJQg8z7R.', NULL, NULL, NULL, '2025-09-03 05:49:54', '2025-09-03 05:49:54', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `web_settings`
--

CREATE TABLE `web_settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `contact` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `facebook_link` varchar(255) DEFAULT NULL,
  `instagram_link` varchar(255) DEFAULT NULL,
  `twitter_link` varchar(255) DEFAULT NULL,
  `linkedin_link` varchar(255) DEFAULT NULL,
  `whatsapp_no` varchar(255) DEFAULT NULL,
  `is_blogs_offers` tinyint(1) NOT NULL DEFAULT 0,
  `is_services_offers` tinyint(1) NOT NULL DEFAULT 0,
  `is_index` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `web_settings`
--

INSERT INTO `web_settings` (`id`, `name`, `email`, `contact`, `address`, `facebook_link`, `instagram_link`, `twitter_link`, `linkedin_link`, `whatsapp_no`, `is_blogs_offers`, `is_services_offers`, `is_index`) VALUES
(1, 'assignmenthelpuk', 'info@assignmenthelpuk.co.uk', '447403663991', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium odio dicta voluptate necessitatibus, error autem tenetur fuga eveniet maxime facilis quo aperiam hic, beatae ullam. Iusto, dolorum doloribus. Sed, cum.', 'https://www.facebook.com/assignmenthelpuk.co.uk/', 'https://www.instagram.com/assignmenthelpuk.co.uk/', 'https://www.pinterest.com/assignmenthelpukcouk/', 'null', 'https://api.whatsapp.com/send?phone=971555947610', 0, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `academic_levels`
--
ALTER TABLE `academic_levels`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `academic_levels_name_unique` (`name`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blogs_academic_level_id_foreign` (`category_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `countries_name_unique` (`name`);

--
-- Indexes for table `deadlines`
--
ALTER TABLE `deadlines`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `deadlines_name_unique` (`name`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fares`
--
ALTER TABLE `fares`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fares_academic_level_id_foreign` (`academic_level_id`),
  ADD KEY `fares_deadline_id_foreign` (`deadline_id`);

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`),
  ADD KEY `files_order_id_foreign` (`order_id`);

--
-- Indexes for table `invoices`
--
ALTER TABLE `invoices`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `invoices_ref_no_unique` (`ref_no`),
  ADD KEY `invoices_status_id_foreign` (`status_id`),
  ADD KEY `invoices_user_id_foreign` (`user_id`),
  ADD KEY `invoices_order_id_foreign` (`order_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_user_id_foreign` (`user_id`),
  ADD KEY `orders_status_id_foreign` (`status_id`);

--
-- Indexes for table `paper_types`
--
ALTER TABLE `paper_types`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `paper_types_name_unique` (`name`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD KEY `role_id_fk_6657804` (`role_id`),
  ADD KEY `permission_id_fk_6657804` (`permission_id`);

--
-- Indexes for table `refrence_styles`
--
ALTER TABLE `refrence_styles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `refrence_styles_name_unique` (`name`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD KEY `user_id_fk_6657813` (`user_id`),
  ADD KEY `role_id_fk_6657813` (`role_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `statuses`
--
ALTER TABLE `statuses`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `statuses_name_unique` (`name`),
  ADD UNIQUE KEY `statuses_slug_unique` (`slug`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `subjects_name_unique` (`name`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
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
-- AUTO_INCREMENT for table `academic_levels`
--
ALTER TABLE `academic_levels`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=133;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=243;

--
-- AUTO_INCREMENT for table `deadlines`
--
ALTER TABLE `deadlines`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fares`
--
ALTER TABLE `fares`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `invoices`
--
ALTER TABLE `invoices`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=149;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=151;

--
-- AUTO_INCREMENT for table `paper_types`
--
ALTER TABLE `paper_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `refrence_styles`
--
ALTER TABLE `refrence_styles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;

--
-- AUTO_INCREMENT for table `statuses`
--
ALTER TABLE `statuses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blogs`
--
ALTER TABLE `blogs`
  ADD CONSTRAINT `blogs_academic_level_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);

--
-- Constraints for table `fares`
--
ALTER TABLE `fares`
  ADD CONSTRAINT `fares_academic_level_id_foreign` FOREIGN KEY (`academic_level_id`) REFERENCES `academic_levels` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fares_deadline_id_foreign` FOREIGN KEY (`deadline_id`) REFERENCES `deadlines` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `files`
--
ALTER TABLE `files`
  ADD CONSTRAINT `files_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `invoices`
--
ALTER TABLE `invoices`
  ADD CONSTRAINT `invoices_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `invoices_status_id_foreign` FOREIGN KEY (`status_id`) REFERENCES `statuses` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `invoices_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_status_id_foreign` FOREIGN KEY (`status_id`) REFERENCES `statuses` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_id_fk_6657804` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_id_fk_6657804` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_id_fk_6657813` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_id_fk_6657813` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
