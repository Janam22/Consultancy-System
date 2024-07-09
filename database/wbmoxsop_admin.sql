-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 16, 2024 at 10:22 PM
-- Server version: 8.0.36-cll-lve
-- PHP Version: 8.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wbmoxsop_admin`
--

-- --------------------------------------------------------

--
-- Table structure for table `application_status`
--

CREATE TABLE `application_status` (
  `id` int NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `ccode` varchar(8) DEFAULT NULL,
  `created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `application_status`
--

INSERT INTO `application_status` (`id`, `name`, `ccode`, `created_date`) VALUES
(1, 'Counselling', '001', '2024-02-08 01:35:38'),
(2, 'Offer Processing', '001', '2024-02-07 22:54:32'),
(3, 'GTE Processing', '001', '2024-02-07 22:54:32'),
(4, 'COE Processing', '001', '2024-02-07 22:55:45'),
(5, 'Biometric Collection/Medical', '001', '2024-02-07 22:55:45'),
(6, 'Visa Processing', '001', '2024-02-07 22:56:10'),
(7, 'Visa Granted', '001', '2024-02-07 22:56:10'),
(8, 'Visa Refused', '001', '2024-02-07 22:56:21');

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `id` int NOT NULL,
  `iso` char(2) NOT NULL,
  `name` varchar(80) NOT NULL,
  `nicename` varchar(80) NOT NULL,
  `iso3` char(3) DEFAULT NULL,
  `numcode` smallint DEFAULT NULL,
  `phonecode` int NOT NULL,
  `ccode` varchar(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`id`, `iso`, `name`, `nicename`, `iso3`, `numcode`, `phonecode`, `ccode`) VALUES
(1, 'AF', 'AFGHANISTAN', 'Afghanistan', 'AFG', 4, 93, '001'),
(2, 'AL', 'ALBANIA', 'Albania', 'ALB', 8, 355, '001'),
(3, 'DZ', 'ALGERIA', 'Algeria', 'DZA', 12, 213, '001'),
(4, 'AS', 'AMERICAN SAMOA', 'American Samoa', 'ASM', 16, 1684, '001'),
(5, 'AD', 'ANDORRA', 'Andorra', 'AND', 20, 376, '001'),
(6, 'AO', 'ANGOLA', 'Angola', 'AGO', 24, 244, '001'),
(7, 'AI', 'ANGUILLA', 'Anguilla', 'AIA', 660, 1264, '001'),
(8, 'AQ', 'ANTARCTICA', 'Antarctica', '', 0, 0, '001'),
(9, 'AG', 'ANTIGUA AND BARBUDA', 'Antigua and Barbuda', 'ATG', 28, 1268, '001'),
(10, 'AR', 'ARGENTINA', 'Argentina', 'ARG', 32, 54, '001'),
(11, 'AM', 'ARMENIA', 'Armenia', 'ARM', 51, 374, '001'),
(12, 'AW', 'ARUBA', 'Aruba', 'ABW', 533, 297, '001'),
(13, 'AU', 'AUSTRALIA', 'Australia', 'AUS', 36, 61, '001'),
(14, 'AT', 'AUSTRIA', 'Austria', 'AUT', 40, 43, '001'),
(15, 'AZ', 'AZERBAIJAN', 'Azerbaijan', 'AZE', 31, 994, '001'),
(16, 'BS', 'BAHAMAS', 'Bahamas', 'BHS', 44, 1242, '001'),
(17, 'BH', 'BAHRAIN', 'Bahrain', 'BHR', 48, 973, '001'),
(18, 'BD', 'BANGLADESH', 'Bangladesh', 'BGD', 50, 880, '001'),
(19, 'BB', 'BARBADOS', 'Barbados', 'BRB', 52, 1246, '001'),
(20, 'BY', 'BELARUS', 'Belarus', 'BLR', 112, 375, '001'),
(21, 'BE', 'BELGIUM', 'Belgium', 'BEL', 56, 32, '001'),
(22, 'BZ', 'BELIZE', 'Belize', 'BLZ', 84, 501, '001'),
(23, 'BJ', 'BENIN', 'Benin', 'BEN', 204, 229, '001'),
(24, 'BM', 'BERMUDA', 'Bermuda', 'BMU', 60, 1441, '001'),
(25, 'BT', 'BHUTAN', 'Bhutan', 'BTN', 64, 975, '001'),
(26, 'BO', 'BOLIVIA', 'Bolivia', 'BOL', 68, 591, '001'),
(27, 'BA', 'BOSNIA AND HERZEGOVINA', 'Bosnia and Herzegovina', 'BIH', 70, 387, '001'),
(28, 'BW', 'BOTSWANA', 'Botswana', 'BWA', 72, 267, '001'),
(29, 'BV', 'BOUVET ISLAND', 'Bouvet Island', '', 0, 0, '001'),
(30, 'BR', 'BRAZIL', 'Brazil', 'BRA', 76, 55, '001'),
(31, 'IO', 'BRITISH INDIAN OCEAN TERRITORY', 'British Indian Ocean Territory', '', 0, 246, '001'),
(32, 'BN', 'BRUNEI DARUSSALAM', 'Brunei Darussalam', 'BRN', 96, 673, '001'),
(33, 'BG', 'BULGARIA', 'Bulgaria', 'BGR', 100, 359, '001'),
(34, 'BF', 'BURKINA FASO', 'Burkina Faso', 'BFA', 854, 226, '001'),
(35, 'BI', 'BURUNDI', 'Burundi', 'BDI', 108, 257, '001'),
(36, 'KH', 'CAMBODIA', 'Cambodia', 'KHM', 116, 855, '001'),
(37, 'CM', 'CAMEROON', 'Cameroon', 'CMR', 120, 237, '001'),
(38, 'CA', 'CANADA', 'Canada', 'CAN', 124, 1, '001'),
(39, 'CV', 'CAPE VERDE', 'Cape Verde', 'CPV', 132, 238, '001'),
(40, 'KY', 'CAYMAN ISLANDS', 'Cayman Islands', 'CYM', 136, 1345, '001'),
(41, 'CF', 'CENTRAL AFRICAN REPUBLIC', 'Central African Republic', 'CAF', 140, 236, '001'),
(42, 'TD', 'CHAD', 'Chad', 'TCD', 148, 235, '001'),
(43, 'CL', 'CHILE', 'Chile', 'CHL', 152, 56, '001'),
(44, 'CN', 'CHINA', 'China', 'CHN', 156, 86, '001'),
(45, 'CX', 'CHRISTMAS ISLAND', 'Christmas Island', '', 0, 61, '001'),
(46, 'CC', 'COCOS (KEELING) ISLANDS', 'Cocos (Keeling) Islands', '', 0, 672, '001'),
(47, 'CO', 'COLOMBIA', 'Colombia', 'COL', 170, 57, '001'),
(48, 'KM', 'COMOROS', 'Comoros', 'COM', 174, 269, '001'),
(49, 'CG', 'CONGO', 'Congo', 'COG', 178, 242, '001'),
(50, 'CD', 'CONGO, THE DEMOCRATIC REPUBLIC OF THE', 'Congo, the Democratic Republic of the', 'COD', 180, 242, '001'),
(51, 'CK', 'COOK ISLANDS', 'Cook Islands', 'COK', 184, 682, '001'),
(52, 'CR', 'COSTA RICA', 'Costa Rica', 'CRI', 188, 506, '001'),
(53, 'CI', 'COTE D\'IVOIRE', 'Cote D\'Ivoire', 'CIV', 384, 225, '001'),
(54, 'HR', 'CROATIA', 'Croatia', 'HRV', 191, 385, '001'),
(55, 'CU', 'CUBA', 'Cuba', 'CUB', 192, 53, '001'),
(56, 'CY', 'CYPRUS', 'Cyprus', 'CYP', 196, 357, '001'),
(57, 'CZ', 'CZECH REPUBLIC', 'Czech Republic', 'CZE', 203, 420, '001'),
(58, 'DK', 'DENMARK', 'Denmark', 'DNK', 208, 45, '001'),
(59, 'DJ', 'DJIBOUTI', 'Djibouti', 'DJI', 262, 253, '001'),
(60, 'DM', 'DOMINICA', 'Dominica', 'DMA', 212, 1767, '001'),
(61, 'DO', 'DOMINICAN REPUBLIC', 'Dominican Republic', 'DOM', 214, 1809, '001'),
(62, 'EC', 'ECUADOR', 'Ecuador', 'ECU', 218, 593, '001'),
(63, 'EG', 'EGYPT', 'Egypt', 'EGY', 818, 20, '001'),
(64, 'SV', 'EL SALVADOR', 'El Salvador', 'SLV', 222, 503, '001'),
(65, 'GQ', 'EQUATORIAL GUINEA', 'Equatorial Guinea', 'GNQ', 226, 240, '001'),
(66, 'ER', 'ERITREA', 'Eritrea', 'ERI', 232, 291, '001'),
(67, 'EE', 'ESTONIA', 'Estonia', 'EST', 233, 372, '001'),
(68, 'ET', 'ETHIOPIA', 'Ethiopia', 'ETH', 231, 251, '001'),
(69, 'FK', 'FALKLAND ISLANDS (MALVINAS)', 'Falkland Islands (Malvinas)', 'FLK', 238, 500, '001'),
(70, 'FO', 'FAROE ISLANDS', 'Faroe Islands', 'FRO', 234, 298, '001'),
(71, 'FJ', 'FIJI', 'Fiji', 'FJI', 242, 679, '001'),
(72, 'FI', 'FINLAND', 'Finland', 'FIN', 246, 358, '001'),
(73, 'FR', 'FRANCE', 'France', 'FRA', 250, 33, '001'),
(74, 'GF', 'FRENCH GUIANA', 'French Guiana', 'GUF', 254, 594, '001'),
(75, 'PF', 'FRENCH POLYNESIA', 'French Polynesia', 'PYF', 258, 689, '001'),
(76, 'TF', 'FRENCH SOUTHERN TERRITORIES', 'French Southern Territories', '', 0, 0, '001'),
(77, 'GA', 'GABON', 'Gabon', 'GAB', 266, 241, '001'),
(78, 'GM', 'GAMBIA', 'Gambia', 'GMB', 270, 220, '001'),
(79, 'GE', 'GEORGIA', 'Georgia', 'GEO', 268, 995, '001'),
(80, 'DE', 'GERMANY', 'Germany', 'DEU', 276, 49, '001'),
(81, 'GH', 'GHANA', 'Ghana', 'GHA', 288, 233, '001'),
(82, 'GI', 'GIBRALTAR', 'Gibraltar', 'GIB', 292, 350, '001'),
(83, 'GR', 'GREECE', 'Greece', 'GRC', 300, 30, '001'),
(84, 'GL', 'GREENLAND', 'Greenland', 'GRL', 304, 299, '001'),
(85, 'GD', 'GRENADA', 'Grenada', 'GRD', 308, 1473, '001'),
(86, 'GP', 'GUADELOUPE', 'Guadeloupe', 'GLP', 312, 590, '001'),
(87, 'GU', 'GUAM', 'Guam', 'GUM', 316, 1671, '001'),
(88, 'GT', 'GUATEMALA', 'Guatemala', 'GTM', 320, 502, '001'),
(89, 'GN', 'GUINEA', 'Guinea', 'GIN', 324, 224, '001'),
(90, 'GW', 'GUINEA-BISSAU', 'Guinea-Bissau', 'GNB', 624, 245, '001'),
(91, 'GY', 'GUYANA', 'Guyana', 'GUY', 328, 592, '001'),
(92, 'HT', 'HAITI', 'Haiti', 'HTI', 332, 509, '001'),
(93, 'HM', 'HEARD ISLAND AND MCDONALD ISLANDS', 'Heard Island and Mcdonald Islands', '', 0, 0, '001'),
(94, 'VA', 'HOLY SEE (VATICAN CITY STATE)', 'Holy See (Vatican City State)', 'VAT', 336, 39, '001'),
(95, 'HN', 'HONDURAS', 'Honduras', 'HND', 340, 504, '001'),
(96, 'HK', 'HONG KONG', 'Hong Kong', 'HKG', 344, 852, '001'),
(97, 'HU', 'HUNGARY', 'Hungary', 'HUN', 348, 36, '001'),
(98, 'IS', 'ICELAND', 'Iceland', 'ISL', 352, 354, '001'),
(99, 'IN', 'INDIA', 'India', 'IND', 356, 91, '001'),
(100, 'ID', 'INDONESIA', 'Indonesia', 'IDN', 360, 62, '001'),
(101, 'IR', 'IRAN, ISLAMIC REPUBLIC OF', 'Iran, Islamic Republic of', 'IRN', 364, 98, '001'),
(102, 'IQ', 'IRAQ', 'Iraq', 'IRQ', 368, 964, '001'),
(103, 'IE', 'IRELAND', 'Ireland', 'IRL', 372, 353, '001'),
(104, 'IL', 'ISRAEL', 'Israel', 'ISR', 376, 972, '001'),
(105, 'IT', 'ITALY', 'Italy', 'ITA', 380, 39, '001'),
(106, 'JM', 'JAMAICA', 'Jamaica', 'JAM', 388, 1876, '001'),
(107, 'JP', 'JAPAN', 'Japan', 'JPN', 392, 81, '001'),
(108, 'JO', 'JORDAN', 'Jordan', 'JOR', 400, 962, '001'),
(109, 'KZ', 'KAZAKHSTAN', 'Kazakhstan', 'KAZ', 398, 7, '001'),
(110, 'KE', 'KENYA', 'Kenya', 'KEN', 404, 254, '001'),
(111, 'KI', 'KIRIBATI', 'Kiribati', 'KIR', 296, 686, '001'),
(112, 'KP', 'KOREA, DEMOCRATIC PEOPLE\'S REPUBLIC OF', 'Korea, Democratic People\'s Republic of', 'PRK', 408, 850, '001'),
(113, 'KR', 'KOREA, REPUBLIC OF', 'Korea, Republic of', 'KOR', 410, 82, '001'),
(114, 'KW', 'KUWAIT', 'Kuwait', 'KWT', 414, 965, '001'),
(115, 'KG', 'KYRGYZSTAN', 'Kyrgyzstan', 'KGZ', 417, 996, '001'),
(116, 'LA', 'LAO PEOPLE\'S DEMOCRATIC REPUBLIC', 'Lao People\'s Democratic Republic', 'LAO', 418, 856, '001'),
(117, 'LV', 'LATVIA', 'Latvia', 'LVA', 428, 371, '001'),
(118, 'LB', 'LEBANON', 'Lebanon', 'LBN', 422, 961, '001'),
(119, 'LS', 'LESOTHO', 'Lesotho', 'LSO', 426, 266, '001'),
(120, 'LR', 'LIBERIA', 'Liberia', 'LBR', 430, 231, '001'),
(121, 'LY', 'LIBYAN ARAB JAMAHIRIYA', 'Libyan Arab Jamahiriya', 'LBY', 434, 218, '001'),
(122, 'LI', 'LIECHTENSTEIN', 'Liechtenstein', 'LIE', 438, 423, '001'),
(123, 'LT', 'LITHUANIA', 'Lithuania', 'LTU', 440, 370, '001'),
(124, 'LU', 'LUXEMBOURG', 'Luxembourg', 'LUX', 442, 352, '001'),
(125, 'MO', 'MACAO', 'Macao', 'MAC', 446, 853, '001'),
(126, 'MK', 'MACEDONIA, THE FORMER YUGOSLAV REPUBLIC OF', 'Macedonia, the Former Yugoslav Republic of', 'MKD', 807, 389, '001'),
(127, 'MG', 'MADAGASCAR', 'Madagascar', 'MDG', 450, 261, '001'),
(128, 'MW', 'MALAWI', 'Malawi', 'MWI', 454, 265, '001'),
(129, 'MY', 'MALAYSIA', 'Malaysia', 'MYS', 458, 60, '001'),
(130, 'MV', 'MALDIVES', 'Maldives', 'MDV', 462, 960, '001'),
(131, 'ML', 'MALI', 'Mali', 'MLI', 466, 223, '001'),
(132, 'MT', 'MALTA', 'Malta', 'MLT', 470, 356, '001'),
(133, 'MH', 'MARSHALL ISLANDS', 'Marshall Islands', 'MHL', 584, 692, '001'),
(134, 'MQ', 'MARTINIQUE', 'Martinique', 'MTQ', 474, 596, '001'),
(135, 'MR', 'MAURITANIA', 'Mauritania', 'MRT', 478, 222, '001'),
(136, 'MU', 'MAURITIUS', 'Mauritius', 'MUS', 480, 230, '001'),
(137, 'YT', 'MAYOTTE', 'Mayotte', '', 0, 269, '001'),
(138, 'MX', 'MEXICO', 'Mexico', 'MEX', 484, 52, '001'),
(139, 'FM', 'MICRONESIA, FEDERATED STATES OF', 'Micronesia, Federated States of', 'FSM', 583, 691, '001'),
(140, 'MD', 'MOLDOVA, REPUBLIC OF', 'Moldova, Republic of', 'MDA', 498, 373, '001'),
(141, 'MC', 'MONACO', 'Monaco', 'MCO', 492, 377, '001'),
(142, 'MN', 'MONGOLIA', 'Mongolia', 'MNG', 496, 976, '001'),
(143, 'MS', 'MONTSERRAT', 'Montserrat', 'MSR', 500, 1664, '001'),
(144, 'MA', 'MOROCCO', 'Morocco', 'MAR', 504, 212, '001'),
(145, 'MZ', 'MOZAMBIQUE', 'Mozambique', 'MOZ', 508, 258, '001'),
(146, 'MM', 'MYANMAR', 'Myanmar', 'MMR', 104, 95, '001'),
(147, 'NA', 'NAMIBIA', 'Namibia', 'NAM', 516, 264, '001'),
(148, 'NR', 'NAURU', 'Nauru', 'NRU', 520, 674, '001'),
(149, 'NP', 'NEPAL', 'Nepal', 'NPL', 524, 977, '001'),
(150, 'NL', 'NETHERLANDS', 'Netherlands', 'NLD', 528, 31, '001'),
(151, 'AN', 'NETHERLANDS ANTILLES', 'Netherlands Antilles', 'ANT', 530, 599, '001'),
(152, 'NC', 'NEW CALEDONIA', 'New Caledonia', 'NCL', 540, 687, '001'),
(153, 'NZ', 'NEW ZEALAND', 'New Zealand', 'NZL', 554, 64, '001'),
(154, 'NI', 'NICARAGUA', 'Nicaragua', 'NIC', 558, 505, '001'),
(155, 'NE', 'NIGER', 'Niger', 'NER', 562, 227, '001'),
(156, 'NG', 'NIGERIA', 'Nigeria', 'NGA', 566, 234, '001'),
(157, 'NU', 'NIUE', 'Niue', 'NIU', 570, 683, '001'),
(158, 'NF', 'NORFOLK ISLAND', 'Norfolk Island', 'NFK', 574, 672, '001'),
(159, 'MP', 'NORTHERN MARIANA ISLANDS', 'Northern Mariana Islands', 'MNP', 580, 1670, '001'),
(160, 'NO', 'NORWAY', 'Norway', 'NOR', 578, 47, '001'),
(161, 'OM', 'OMAN', 'Oman', 'OMN', 512, 968, '001'),
(162, 'PK', 'PAKISTAN', 'Pakistan', 'PAK', 586, 92, '001'),
(163, 'PW', 'PALAU', 'Palau', 'PLW', 585, 680, '001'),
(164, 'PS', 'PALESTINIAN TERRITORY, OCCUPIED', 'Palestinian Territory, Occupied', '', 0, 970, '001'),
(165, 'PA', 'PANAMA', 'Panama', 'PAN', 591, 507, '001'),
(166, 'PG', 'PAPUA NEW GUINEA', 'Papua New Guinea', 'PNG', 598, 675, '001'),
(167, 'PY', 'PARAGUAY', 'Paraguay', 'PRY', 600, 595, '001'),
(168, 'PE', 'PERU', 'Peru', 'PER', 604, 51, '001'),
(169, 'PH', 'PHILIPPINES', 'Philippines', 'PHL', 608, 63, '001'),
(170, 'PN', 'PITCAIRN', 'Pitcairn', 'PCN', 612, 0, '001'),
(171, 'PL', 'POLAND', 'Poland', 'POL', 616, 48, '001'),
(172, 'PT', 'PORTUGAL', 'Portugal', 'PRT', 620, 351, '001'),
(173, 'PR', 'PUERTO RICO', 'Puerto Rico', 'PRI', 630, 1787, '001'),
(174, 'QA', 'QATAR', 'Qatar', 'QAT', 634, 974, '001'),
(175, 'RE', 'REUNION', 'Reunion', 'REU', 638, 262, '001'),
(176, 'RO', 'ROMANIA', 'Romania', 'ROM', 642, 40, '001'),
(177, 'RU', 'RUSSIAN FEDERATION', 'Russian Federation', 'RUS', 643, 70, '001'),
(178, 'RW', 'RWANDA', 'Rwanda', 'RWA', 646, 250, '001'),
(179, 'SH', 'SAINT HELENA', 'Saint Helena', 'SHN', 654, 290, '001'),
(180, 'KN', 'SAINT KITTS AND NEVIS', 'Saint Kitts and Nevis', 'KNA', 659, 1869, '001'),
(181, 'LC', 'SAINT LUCIA', 'Saint Lucia', 'LCA', 662, 1758, '001'),
(182, 'PM', 'SAINT PIERRE AND MIQUELON', 'Saint Pierre and Miquelon', 'SPM', 666, 508, '001'),
(183, 'VC', 'SAINT VINCENT AND THE GRENADINES', 'Saint Vincent and the Grenadines', 'VCT', 670, 1784, '001'),
(184, 'WS', 'SAMOA', 'Samoa', 'WSM', 882, 684, '001'),
(185, 'SM', 'SAN MARINO', 'San Marino', 'SMR', 674, 378, '001'),
(186, 'ST', 'SAO TOME AND PRINCIPE', 'Sao Tome and Principe', 'STP', 678, 239, '001'),
(187, 'SA', 'SAUDI ARABIA', 'Saudi Arabia', 'SAU', 682, 966, '001'),
(188, 'SN', 'SENEGAL', 'Senegal', 'SEN', 686, 221, '001'),
(189, 'CS', 'SERBIA AND MONTENEGRO', 'Serbia and Montenegro', '', 0, 381, '001'),
(190, 'SC', 'SEYCHELLES', 'Seychelles', 'SYC', 690, 248, '001'),
(191, 'SL', 'SIERRA LEONE', 'Sierra Leone', 'SLE', 694, 232, '001'),
(192, 'SG', 'SINGAPORE', 'Singapore', 'SGP', 702, 65, '001'),
(193, 'SK', 'SLOVAKIA', 'Slovakia', 'SVK', 703, 421, '001'),
(194, 'SI', 'SLOVENIA', 'Slovenia', 'SVN', 705, 386, '001'),
(195, 'SB', 'SOLOMON ISLANDS', 'Solomon Islands', 'SLB', 90, 677, '001'),
(196, 'SO', 'SOMALIA', 'Somalia', 'SOM', 706, 252, '001'),
(197, 'ZA', 'SOUTH AFRICA', 'South Africa', 'ZAF', 710, 27, '001'),
(198, 'GS', 'SOUTH GEORGIA AND THE SOUTH SANDWICH ISLANDS', 'South Georgia and the South Sandwich Islands', '', 0, 0, '001'),
(199, 'ES', 'SPAIN', 'Spain', 'ESP', 724, 34, '001'),
(200, 'LK', 'SRI LANKA', 'Sri Lanka', 'LKA', 144, 94, '001'),
(201, 'SD', 'SUDAN', 'Sudan', 'SDN', 736, 249, '001'),
(202, 'SR', 'SURINAME', 'Suriname', 'SUR', 740, 597, '001'),
(203, 'SJ', 'SVALBARD AND JAN MAYEN', 'Svalbard and Jan Mayen', 'SJM', 744, 47, '001'),
(204, 'SZ', 'SWAZILAND', 'Swaziland', 'SWZ', 748, 268, '001'),
(205, 'SE', 'SWEDEN', 'Sweden', 'SWE', 752, 46, '001'),
(206, 'CH', 'SWITZERLAND', 'Switzerland', 'CHE', 756, 41, '001'),
(207, 'SY', 'SYRIAN ARAB REPUBLIC', 'Syrian Arab Republic', 'SYR', 760, 963, '001'),
(208, 'TW', 'TAIWAN, PROVINCE OF CHINA', 'Taiwan, Province of China', 'TWN', 158, 886, '001'),
(209, 'TJ', 'TAJIKISTAN', 'Tajikistan', 'TJK', 762, 992, '001'),
(210, 'TZ', 'TANZANIA, UNITED REPUBLIC OF', 'Tanzania, United Republic of', 'TZA', 834, 255, '001'),
(211, 'TH', 'THAILAND', 'Thailand', 'THA', 764, 66, '001'),
(212, 'TL', 'TIMOR-LESTE', 'Timor-Leste', '', 0, 670, '001'),
(213, 'TG', 'TOGO', 'Togo', 'TGO', 768, 228, '001'),
(214, 'TK', 'TOKELAU', 'Tokelau', 'TKL', 772, 690, '001'),
(215, 'TO', 'TONGA', 'Tonga', 'TON', 776, 676, '001'),
(216, 'TT', 'TRINIDAD AND TOBAGO', 'Trinidad and Tobago', 'TTO', 780, 1868, '001'),
(217, 'TN', 'TUNISIA', 'Tunisia', 'TUN', 788, 216, '001'),
(218, 'TR', 'TURKEY', 'Turkey', 'TUR', 792, 90, '001'),
(219, 'TM', 'TURKMENISTAN', 'Turkmenistan', 'TKM', 795, 7370, '001'),
(220, 'TC', 'TURKS AND CAICOS ISLANDS', 'Turks and Caicos Islands', 'TCA', 796, 1649, '001'),
(221, 'TV', 'TUVALU', 'Tuvalu', 'TUV', 798, 688, '001'),
(222, 'UG', 'UGANDA', 'Uganda', 'UGA', 800, 256, '001'),
(223, 'UA', 'UKRAINE', 'Ukraine', 'UKR', 804, 380, '001'),
(224, 'AE', 'UNITED ARAB EMIRATES', 'United Arab Emirates', 'ARE', 784, 971, '001'),
(225, 'GB', 'UNITED KINGDOM', 'United Kingdom', 'GBR', 826, 44, '001'),
(226, 'US', 'UNITED STATES', 'United States', 'USA', 840, 1, '001'),
(227, 'UM', 'UNITED STATES MINOR OUTLYING ISLANDS', 'United States Minor Outlying Islands', '', 0, 1, '001'),
(228, 'UY', 'URUGUAY', 'Uruguay', 'URY', 858, 598, '001'),
(229, 'UZ', 'UZBEKISTAN', 'Uzbekistan', 'UZB', 860, 998, '001'),
(230, 'VU', 'VANUATU', 'Vanuatu', 'VUT', 548, 678, '001'),
(231, 'VE', 'VENEZUELA', 'Venezuela', 'VEN', 862, 58, '001'),
(232, 'VN', 'VIET NAM', 'Viet Nam', 'VNM', 704, 84, '001'),
(233, 'VG', 'VIRGIN ISLANDS, BRITISH', 'Virgin Islands, British', 'VGB', 92, 1284, '001'),
(234, 'VI', 'VIRGIN ISLANDS, U.S.', 'Virgin Islands, U.s.', 'VIR', 850, 1340, '001'),
(235, 'WF', 'WALLIS AND FUTUNA', 'Wallis and Futuna', 'WLF', 876, 681, '001'),
(236, 'EH', 'WESTERN SAHARA', 'Western Sahara', 'ESH', 732, 212, '001'),
(237, 'YE', 'YEMEN', 'Yemen', 'YEM', 887, 967, '001'),
(238, 'ZM', 'ZAMBIA', 'Zambia', 'ZMB', 894, 260, '001'),
(239, 'ZW', 'ZIMBABWE', 'Zimbabwe', 'ZWE', 716, 263, '001');

-- --------------------------------------------------------

--
-- Table structure for table `designation`
--

CREATE TABLE `designation` (
  `id` int NOT NULL,
  `edesc` varchar(255) NOT NULL,
  `status_flag` char(1) NOT NULL,
  `ccode` varchar(4) NOT NULL,
  `cby` varchar(255) NOT NULL,
  `cdate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `designation`
--

INSERT INTO `designation` (`id`, `edesc`, `status_flag`, `ccode`, `cby`, `cdate`) VALUES
(1, 'Managing Director', 'Y', '001', '', '0000-00-00 00:00:00'),
(2, 'SOP Writer', 'Y', '001', '', '0000-00-00 00:00:00'),
(3, 'Kitchen Worker', 'Y', '001', '', '0000-00-00 00:00:00'),
(4, 'Receptionist', 'Y', '001', '', '0000-00-00 00:00:00'),
(5, 'Document Handler', 'Y', '001', 'janampandey2@gmail.com', '2023-09-10 14:55:39'),
(6, 'Academic Counselor', 'Y', '001', 'sedu.nepal@gmail.com', '2023-09-14 12:48:54'),
(7, 'System Developer', 'Y', '001', 'sedu.nepal@gmail.com', '2024-02-08 18:59:27');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `phone` varchar(12) DEFAULT NULL,
  `message` varchar(255) DEFAULT NULL,
  `ccode` varchar(8) NOT NULL,
  `created_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `address`, `phone`, `message`, `ccode`, `created_date`) VALUES
(1, '', 'kushal.bhattarai@study.lbef.edu.np', 'bhaktapur', '', 'hello hello', '001', '2023-08-29 13:58:18'),
(2, '', 'kushal.bhattarai@study.lbef.edu.np', 'bhaktapur', '', 'hello hello', '001', '2023-08-29 13:58:54'),
(3, '', 'kushal.bhattarai@study.lbef.edu.np', 'bhaktapur', '', 'hello hello', '001', '2023-08-29 13:59:02'),
(4, '', 'kushal.bhattarai@study.lbef.edu.np', 'bhaktapur', '', 'hello hello', '001', '2023-08-29 13:59:42');

-- --------------------------------------------------------

--
-- Table structure for table `new_students`
--

CREATE TABLE `new_students` (
  `id` int NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `passport_no` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `phone` varchar(12) DEFAULT NULL,
  `applied_country` int NOT NULL,
  `university_college` varchar(255) DEFAULT NULL,
  `course` varchar(255) DEFAULT NULL,
  `intake` varchar(255) DEFAULT NULL,
  `councelled_by` int DEFAULT NULL,
  `relationship_status` varchar(4) NOT NULL,
  `spouse_name` varchar(255) DEFAULT NULL,
  `application_status` int NOT NULL,
  `gender` varchar(4) DEFAULT NULL,
  `came_to_know` varchar(500) DEFAULT NULL,
  `institution1` varchar(255) DEFAULT NULL,
  `completed_year1` varchar(100) DEFAULT NULL,
  `majors1` varchar(255) DEFAULT NULL,
  `division_gpa1` varchar(255) DEFAULT NULL,
  `institution2` varchar(255) DEFAULT NULL,
  `completed_year2` varchar(100) DEFAULT NULL,
  `majors2` varchar(255) DEFAULT NULL,
  `division_gpa2` varchar(255) DEFAULT NULL,
  `institution3` varchar(255) DEFAULT NULL,
  `completed_year3` varchar(100) DEFAULT NULL,
  `majors3` varchar(255) DEFAULT NULL,
  `division_gpa3` varchar(255) DEFAULT NULL,
  `english_test` varchar(4) DEFAULT NULL,
  `overall_score` varchar(4) DEFAULT NULL,
  `listening` varchar(4) DEFAULT NULL,
  `reading` varchar(4) DEFAULT NULL,
  `writing` varchar(4) DEFAULT NULL,
  `speaking` varchar(4) DEFAULT NULL,
  `applied_before` varchar(4) DEFAULT NULL,
  `where_when` varchar(255) DEFAULT NULL,
  `work_experience` varchar(500) DEFAULT NULL,
  `remarks` varchar(500) DEFAULT NULL,
  `ccode` varchar(4) NOT NULL,
  `cby` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `new_students`
--

INSERT INTO `new_students` (`id`, `name`, `dob`, `passport_no`, `email`, `address`, `phone`, `applied_country`, `university_college`, `course`, `intake`, `councelled_by`, `relationship_status`, `spouse_name`, `application_status`, `gender`, `came_to_know`, `institution1`, `completed_year1`, `majors1`, `division_gpa1`, `institution2`, `completed_year2`, `majors2`, `division_gpa2`, `institution3`, `completed_year3`, `majors3`, `division_gpa3`, `english_test`, `overall_score`, `listening`, `reading`, `writing`, `speaking`, `applied_before`, `where_when`, `work_experience`, `remarks`, `ccode`, `cby`, `created_date`) VALUES
(1, 'Janam Pandey', '2000-11-09', '11156509', 'jananpandey1995@gmail.com', 'Malekhu, Dhading', '9866077949', 13, 'Western Sydney University', 'MICT', 'July', 2, 'S', '', 6, 'M', '', 'LBEF', '2023', 'Bsc.IT', '3.38', '', '', '', '', '', '', '', '', 'P', '66', '66', '67', '64', '74', 'Y', '', '', 'Fees not paid', '001', 'sedu.nepal@gmail.com', '2024-02-08 01:14:40'),
(4, 'Nabina Khatri', '2001-09-28', '', 'nabinakhatri919@gmail.com', 'Damak', '9816083174', 13, '', 'Masters', '', 3, 'S', '', 1, 'F', '', 'Mansarower Institute of science and Technology ', '2021', 'DPH', '73%', '', '', '', '', '', '', '', '', 'P', '59', '64', '58', '72', '51', 'Y', 'Canada(Recently)', 'No', '', '001', 'reception@gmail.com', '2024-02-09 14:41:45'),
(5, 'Bidur Thapa', '2004-06-20', '', 'bidurthapa666@gmail.com', 'Kalanki', '9842996343', 13, '', 'Bachelors', '', 3, 'S', '', 1, 'M', 'Friends', 'N/A', '2023', '+2', '3.60', '', '', '', '', '', '', '', '', 'I', '6', '6.5', '5.5', '6', '5.5', 'N', '', '', 'If possible canada, USA due to income source.', '001', 'reception@gmail.com', '2024-02-18 13:10:59'),
(6, 'Sujita Shiwakoti', '1999-09-07', '', 'sujitashi11@gmail.com', 'Balaju', '9860485408', 13, '', 'MSW', '', 3, 'S', '', 1, 'F', '', 'KMCSM', '2024', 'Social Work', 'N/A', '', '', '', '', '', '', '', '', 'NG', '', '', '', '', '', 'N', '', '', '', '001', 'reception@gmail.com', '2024-02-18 13:16:43'),
(7, 'Nabin Singh', '1999-09-10', '', 'singhnabin941@gmail.com', 'Bajhang', '9865692300', 13, '', '', '', 3, 'S', '', 1, 'M', '', 'Holyland English School', 'N/A', 'N/A', '66%', 'Bhairab Higher Secondary School', 'N/A', 'N/A', '2.75 gpa', '', '', '', '', 'NG', '', '', '', '', '', 'N', '', '', '2 years gap after SLC and +2 each', '001', 'reception@gmail.com', '2024-02-18 13:21:51'),
(8, 'Bhumika Bist', '2005-04-30', '', 'bhumikabist1@gmail.com', 'Koteshwor Jadibuti', '9766992980', 13, '', '', '', 3, 'S', '', 1, 'F', '', '+2', '2023', 'Science', 'N/A', '', '', '', '', '', '', '', '', 'NG', '', '', '', '', '', 'N', '', '', '', '001', 'reception@gmail.com', '2024-02-18 13:25:54'),
(9, 'Rajib Adhikari', '2006-03-13', '', 'N/A', 'N/A', '9862148002', 225, '', '', '', 3, 'S', '', 1, 'M', '', 'CYC', '2023', 'N/A', '2.76', '', '', '', '', '', '', '', '', 'NG', '', '', '', '', '', 'N', '', '', '', '001', 'reception@gmail.com', '2024-02-18 13:28:22'),
(10, 'Sonu Karki', '2000-07-22', '', 'sonukarki60@gmail.com', 'Dahachowk, Kathmandu', '9818842609', 13, '', '', '', 3, 'M', 'N/A', 1, 'F', 'Through Friends', 'TU', '2021', 'Business', '1st Division 70%', 'NEB', '2017', 'Business', '1st Division', '', '', '', '', 'I', '6', '6', '6', '6', '5.5', 'N', '', '', '', '001', 'reception@gmail.com', '2024-02-18 13:41:49'),
(11, 'Kushal Bhattarai', '1998-06-07', '', 'kushalb122@gmail.com', 'Likhu Rural Municipality 06, Okhaldhunga', '9860852251', 13, 'Curtin University', 'Master of Computing', 'July', 2, 'M', 'Bimala Garbuja', 2, 'M', 'Through my friend.', 'Lord Buddha Education Foundation', '2023', '', '3.09', '', '', '', '', '', '', '', '', 'P', '62', '69', '62', '68', '53', 'N', '', 'IT Business Service, since 2021', '', '001', 'O', '2024-02-22 14:08:53'),
(12, 'Ramesh kc', '2024-03-03', NULL, 'kcr34872@gmail.com', 'Bardiya ', '9828580949', 226, NULL, 'It', NULL, NULL, 'M', NULL, 1, 'M', '', 'Gvn nepalgunj ', '2023', 'Management computer science ', '2.70', '', '', '', '', '', '', '', '', 'I', '', '', '', '', '', 'Y', '', 'No', NULL, '001', 'O', '2024-03-03 13:50:12'),
(13, 'Rojina rijal', '1054-09-29', '', '', 'nayabazar', '9843654170', 58, 'MBA/MBS', '', '', 3, 'S', '', 1, 'F', 'reference', 'pasupati multiple campus', '2020', 'BBS', '52', '', '', '', '', '', '', '', '', 'I', '6.5', '6.5', '6.5', '6', '6.5', 'N', '', '', '', '001', 'reception@gmail.com', '2024-03-14 13:31:44'),
(14, 'Nishant Baral', '2004-01-10', '', '', 'Baneshwor', '9742991717', 153, '', 'Business  studies', '', 3, 'S', '', 1, 'M', 'trought friends', 'xavier I college', '2023', 'managrment', '2.81', '', '', '', '', '', '', '', '', 'P', '', '5.8', '5.4', '5.5', '5', 'N', '', '', '', '001', 'reception@gmail.com', '2024-03-14 13:42:54'),
(15, 'Deepak Neupane', '2062-06-05', '', '', 'Baneshwor', '9742588959', 153, '', 'IT', '', 3, 'S', '', 1, 'M', '', '10', '2021', 'science', '3.65', '', '', '', '', '', '', '', '', 'I', '7', '7.5', '7', '6.5', '7', 'N', '', '', '', '001', 'reception@gmail.com', '2024-03-14 13:47:22'),
(16, 'Alina shrepa', '2053-07-28', '', '', 'jawalakhel', '9823294086', 225, '', '', '', 3, 'S', '', 1, 'F', 'trought friends', 'peoplols dental college and hospital', 'NA', '', 'NA', '', '', '', '', '', '', '', '', 'I', '', '', '', '', '', 'N', '', '', '', '001', 'reception@gmail.com', '2024-03-14 13:53:52'),
(17, 'Ritika Tulasdhas', '2056-10-12', '', '', 'putalisadak', '981015338', 4, '', '', '', 3, 'S', '', 1, 'F', 'friend', 'peoplols dental college and hospital', 'NA', '', 'NA', '', '', '', '', '', '', '', '', 'I', '', '', '', '', '', 'N', '', '', '', '001', 'reception@gmail.com', '2024-03-14 14:12:32'),
(18, 'Reecha Bharkher', '2055-12-11', '', '', 'sanepa lalitpur', '984452204', 13, '', '', '', 3, 'S', '', 1, 'F', '', 'peoplols dental college and hospital', 'running', '', 'NA', '', '', '', '', '', '', '', '', 'I', '', '', '', '', '', 'N', '', '', '', '001', 'reception@gmail.com', '2024-03-14 14:15:28'),
(19, 'Dharma raj dawadi ', '2053-02-22', '', '', 'pokhara', '986080054', 226, '', 'masters in civil engineering', '', 3, 'S', '', 1, 'M', 'by search', 'pokhara university', '2021', '', '2.69', '', '', '', '', '', '', '', '', 'I', '6.5', '6', '6', '6.5', '6.5', 'N', '', '', '', '001', 'reception@gmail.com', '2024-03-15 16:29:32'),
(20, 'Anita shrestha', '2058-01-26', '', '', 'bhimod-5', '9864888712', 13, '', '', '', 3, 'S', '', 1, 'F', '', 'SHAS pokhara university', '2080', 'B.pharm', '3.53', '', '', '', '', '', '', '', '', 'I', '', '', '', '', '', 'N', '', '', '', '001', 'reception@gmail.com', '2024-03-15 16:33:54'),
(21, 'Bina pantha', '2057-03-26', '', '', 'damauli tanahun', '9829183970', 13, '', 'Master in clinical pharmacy', '', 3, 'S', '', 1, 'F', '', 'SHAS pokhara university', '2080', '', '3.61', '', '', '', '', '', '', '', '', 'I', '', '', '', '', '', 'N', '', '', '', '001', 'reception@gmail.com', '2024-03-15 16:37:48'),
(22, 'sabita neupane ', '2057-03-31', '', 'sabitaneupane@gmail.com', 'nagarjun 1', '9842522102', 13, '', '', '', 3, 'S', '', 1, 'F', '', 'SHAS pokhara university', '2080', 'pharmacy', '3.57', '', '', '', '', '', '', '', '', 'I', '', '', '', '', '', 'N', '', '', '', '001', 'reception@gmail.com', '2024-03-15 16:51:01'),
(23, 'sabita neupane ', '2057-03-31', '', 'sabitaneupane@gmail.com', 'nagarjun 1', '9842522102', 13, '', '', '', 3, 'S', '', 1, 'F', '', 'SHAS pokhara university', '2080', 'pharmacy', '3.57', '', '', '', '', '', '', '', '', 'I', '', '', '', '', '', 'N', '', '', '', '001', 'reception@gmail.com', '2024-03-15 16:51:02'),
(24, 'Barsha Gurung', '1993-12-09', '', '', 'Greenland', '9849 502234', 13, '', '', '', 3, 'S', '', 1, 'F', 'friend', 'NATHM', '2019', '', '3.52', '', '', '', '', '', '', '', '', 'I', '', '', '', '', '', 'N', '', 'TEACHINING', '', '001', 'reception@gmail.com', '2024-03-17 16:24:24'),
(25, 'Manoj pandey', '2062-11-01', '', '', 'balaju', '9816187717', 225, '', '', '', 3, 'S', '', 1, 'M', '', 'diploma in engineering', '2080', '', '78%', '', '', '', '', '', '', '', '', 'I', '', '', '', '', '', 'N', '', '', '', '001', 'reception@gmail.com', '2024-03-22 14:12:24'),
(26, 'Biraj  koirala', '2002-02-21', '', '', 'Gaighat Udayapur', '9823597508', 225, '', 'Aviation', 'August ', 3, 'S', '', 1, 'M', 'trought  the internet', 'Udayapur english school', '2018', '', '3.15', '', '', '', '', '', '', '', '', 'I', '6', '7', '5', '5.5', '6', 'Y', '', '', '', '001', 'reception@gmail.com', '2024-03-28 16:12:06'),
(27, 'prabin yadav', '2003-12-07', '', '', 'Bhaktapur', '9817744481', 225, '', '', '', 3, 'S', '', 1, 'M', '', ' N A', '2020', '', '2.6', '', '', '', '', '', '', '', '', 'I', '', '', '', '', '', 'Y', '', '', '', '001', 'reception@gmail.com', '2024-04-01 16:18:28');

-- --------------------------------------------------------

--
-- Table structure for table `previleges`
--

CREATE TABLE `previleges` (
  `id` int NOT NULL,
  `email` varchar(100) NOT NULL,
  `previlege` char(1) DEFAULT NULL,
  `designation` char(1) DEFAULT NULL,
  `designation_add` char(1) DEFAULT NULL,
  `designation_edit` char(1) DEFAULT NULL,
  `staffs` char(1) DEFAULT NULL,
  `staffs_add` char(1) DEFAULT NULL,
  `staffs_edit` char(1) DEFAULT NULL,
  `staffs_delete` char(1) DEFAULT NULL,
  `users` char(1) DEFAULT NULL,
  `users_add` char(1) DEFAULT NULL,
  `users_edit` char(1) DEFAULT NULL,
  `users_delete` char(1) DEFAULT NULL,
  `new_students` char(1) DEFAULT NULL,
  `new_students_add` char(1) DEFAULT NULL,
  `new_students_edit` char(1) DEFAULT NULL,
  `database_backup` char(1) DEFAULT NULL,
  `ccode` varchar(4) NOT NULL,
  `cby` varchar(100) NOT NULL,
  `cdate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `previleges`
--

INSERT INTO `previleges` (`id`, `email`, `previlege`, `designation`, `designation_add`, `designation_edit`, `staffs`, `staffs_add`, `staffs_edit`, `staffs_delete`, `users`, `users_add`, `users_edit`, `users_delete`, `new_students`, `new_students_add`, `new_students_edit`, `database_backup`, `ccode`, `cby`, `cdate`) VALUES
(159, 'janampandey2@gmail.com', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', '001', 'sedu.nepal@gmail.com', '2024-02-14 20:31:02'),
(160, 'sedu.nepal@gmail.com', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', '001', 'sedu.nepal@gmail.com', '2024-02-14 20:31:02'),
(161, 'reception@gmail.com', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'Y', 'Y', 'N', 'N', '001', 'sedu.nepal@gmail.com', '2024-02-14 20:31:02');

-- --------------------------------------------------------

--
-- Table structure for table `session_log`
--

CREATE TABLE `session_log` (
  `id` int NOT NULL,
  `session_id` varchar(30) CHARACTER SET utf8mb3 COLLATE utf8mb3_bin NOT NULL,
  `server_id` varchar(200) CHARACTER SET utf8mb3 COLLATE utf8mb3_bin NOT NULL,
  `user_id` varchar(200) CHARACTER SET utf8mb3 COLLATE utf8mb3_bin NOT NULL,
  `date` datetime DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb3_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

--
-- Dumping data for table `session_log`
--

INSERT INTO `session_log` (`id`, `session_id`, `server_id`, `user_id`, `date`, `status`) VALUES
(1, '20230828.095340', 'janam', 'admin@gmail.com', '2023-09-09 23:28:46', ''),
(2, '20230828.100439', 'janam', 'admin@gmail.com', '2023-09-09 23:28:46', ''),
(3, '20230828.101942', 'janam', 'admin@gmail.com', '2023-09-09 23:28:46', ''),
(4, '20230828.102448', 'janam', 'admin@gmail.com', '2023-09-09 23:28:46', ''),
(5, '20230828.103102', 'janam', 'admin@gmail.com', '2023-09-09 23:28:46', ''),
(6, '20230828.103850', 'janam', 'admin@gmail.com', '2023-09-09 23:28:46', ''),
(7, '20230828.124416', '121.206.166.202.ether.static.wlink.com.np', 'admin@gmail.com', '2023-09-09 23:28:46', ''),
(8, '20230828.124536', '121.206.166.202.ether.static.wlink.com.np', 'admin@gmail.com', '2023-09-09 23:28:46', ''),
(9, '20230828.124856', '121.206.166.202.ether.static.wlink.com.np', 'admin@gmail.com', '2023-09-09 23:28:46', ''),
(10, '20230828.132534', 'janam', 'admin@gmail.com', '2023-09-09 23:28:46', ''),
(11, '20230828.140141', 'janam', 'admin@gmail.com', '2023-09-09 23:28:46', ''),
(12, '20230828.142009', 'janam', 'admin@gmail.com', '2023-09-09 23:28:46', ''),
(13, '20230828.170038', '27.34.64.5', 'admin@gmail.com', '2023-09-09 23:28:46', ''),
(14, '20230828.172419', '27.34.64.5', 'admin@gmail.com', '2023-09-09 23:28:46', ''),
(15, '20230828.180953', '27.34.64.5', 'admin1@gmail.com', '2023-09-09 23:28:46', ''),
(16, '20230828.181017', '27.34.64.5', 'admin@gmail.com', '2023-09-09 23:28:46', ''),
(17, '20230828.181716', '27.34.64.5', 'admin@gmail.com', '2023-09-09 23:28:46', ''),
(18, '20230828.182604', '27.34.64.5', 'admin@gmail.com', '2023-09-09 23:28:46', ''),
(19, '20230828.183045', '27.34.64.5', 'admin@gmail.com', '2023-09-09 23:28:46', ''),
(20, '20230828.183555', '27.34.64.5', 'admin@gmail.com', '2023-09-09 23:28:46', ''),
(21, '20230828.190337', '27.34.64.5', 'admin@gmail.com', '2023-09-09 23:28:46', ''),
(22, '20230828.190552', '27.34.64.5', 'admin@gmail.com', '2023-09-09 23:28:46', ''),
(23, '20230828.192403', '27.34.64.5', 'admin@gmail.com', '2023-09-09 23:28:46', ''),
(24, '20230828.203216', '27.34.64.5', 'admin@gmail.com', '2023-09-09 23:28:46', ''),
(25, '20230828.204151', '27.34.64.5', 'admin1@gmail.com', '2023-09-09 23:28:46', ''),
(26, '20230828.204220', '27.34.64.5', 'admin@gmail.com', '2023-09-09 23:28:46', ''),
(27, '20230829.062620', '121.206.166.202.ether.static.wlink.com.np', 'admin@gmail.com', '2023-09-09 23:28:46', ''),
(28, '20230829.062648', '121.206.166.202.ether.static.wlink.com.np', 'admin@gmail.com', '2023-09-09 23:28:46', ''),
(29, '20230829.063145', '121.206.166.202.ether.static.wlink.com.np', 'admin@gmail.com', '2023-09-09 23:28:46', ''),
(30, '20230829.063228', '121.206.166.202.ether.static.wlink.com.np', 'admin@gmail.com', '2023-09-09 23:28:46', ''),
(31, '20230829.063246', '121.206.166.202.ether.static.wlink.com.np', 'admin@gmail.com', '2023-09-09 23:28:46', ''),
(32, '20230829.063426', '121.206.166.202.ether.static.wlink.com.np', 'admin@gmail.com', '2023-09-09 23:28:46', ''),
(33, '20230829.064324', '121.206.166.202.ether.static.wlink.com.np', 'admin@gmail.com', '2023-09-09 23:28:46', ''),
(34, '20230829.064538', '121.206.166.202.ether.static.wlink.com.np', 'admin@gmail.com', '2023-09-09 23:28:46', ''),
(35, '20230829.064834', '121.206.166.202.ether.static.wlink.com.np', 'admin@gmail.com', '2023-09-09 23:28:46', ''),
(36, '20230829.070555', '121.206.166.202.ether.static.wlink.com.np', 'admin@gmail.com', '2023-09-09 23:28:46', ''),
(37, '20230905.071917', '121.206.166.202.ether.static.wlink.com.np', 'admin@gmail.com', '2023-09-09 23:28:46', ''),
(38, '20230905.072024', '121.206.166.202.ether.static.wlink.com.np', 'admin@gmail.com', '2023-09-09 23:28:46', ''),
(39, '20230905.072109', '121.206.166.202.ether.static.wlink.com.np', 'admin@gmail.com', '2023-09-09 23:28:46', ''),
(40, '20230905.072122', '121.206.166.202.ether.static.wlink.com.np', 'admin@gmail.com', '2023-09-09 23:28:46', ''),
(41, '20230905.072146', '121.206.166.202.ether.static.wlink.com.np', 'admin@gmail.com', '2023-09-09 23:28:46', ''),
(42, '20230905.072322', '121.206.166.202.ether.static.wlink.com.np', 'admin@gmail.com', '2023-09-09 23:28:46', ''),
(43, '20230905.072345', '121.206.166.202.ether.static.wlink.com.np', 'admin@gmail.com', '2023-09-09 23:28:46', ''),
(44, '20230905.072942', '121.206.166.202.ether.static.wlink.com.np', 'admin@gmail.com', '2023-09-09 23:28:46', ''),
(45, '20230905.073058', '121.206.166.202.ether.static.wlink.com.np', 'admin@gmail.com', '2023-09-09 23:28:46', ''),
(46, '20230905.073137', '121.206.166.202.ether.static.wlink.com.np', 'admin@gmail.com', '2023-09-09 23:28:46', ''),
(47, '20230905.073251', '121.206.166.202.ether.static.wlink.com.np', 'admin@gmail.com', '2023-09-09 23:28:46', ''),
(48, '20230905.073329', '121.206.166.202.ether.static.wlink.com.np', 'admin@gmail.com', '2023-09-09 23:28:46', ''),
(49, '20230905.073352', '121.206.166.202.ether.static.wlink.com.np', 'admin@gmail.com', '2023-09-09 23:28:46', ''),
(50, '20230905.073427', '121.206.166.202.ether.static.wlink.com.np', 'admin@gmail.com', '2023-09-09 23:28:46', ''),
(51, '20230905.073447', '121.206.166.202.ether.static.wlink.com.np', 'admin@gmail.com', '2023-09-09 23:28:46', ''),
(52, '20230905.073524', '121.206.166.202.ether.static.wlink.com.np', 'admin@gmail.com', '2023-09-09 23:28:46', ''),
(53, '20230905.073613', '121.206.166.202.ether.static.wlink.com.np', 'admin@gmail.com', '2023-09-09 23:28:46', ''),
(54, '20230905.073634', '121.206.166.202.ether.static.wlink.com.np', 'admin@gmail.com', '2023-09-09 23:28:46', ''),
(55, '20230905.073706', '121.206.166.202.ether.static.wlink.com.np', 'admin@gmail.com', '2023-09-09 23:28:46', ''),
(56, '20230905.073816', '121.206.166.202.ether.static.wlink.com.np', 'admin@gmail.com', '2023-09-09 23:28:46', ''),
(57, '20230905.073936', '121.206.166.202.ether.static.wlink.com.np', 'admin@gmail.com', '2023-09-09 23:28:46', ''),
(58, '20230905.074001', '121.206.166.202.ether.static.wlink.com.np', 'admin@gmail.com', '2023-09-09 23:28:46', ''),
(59, '20230905.074139', '121.206.166.202.ether.static.wlink.com.np', 'admin@gmail.com', '2023-09-09 23:28:46', ''),
(60, '20230905.091210', '27.34.30.14', 'admin@gmail.com', '2023-09-09 23:28:46', ''),
(61, '20230905.103004', '121.206.166.202.ether.static.wlink.com.np', 'admin@gmail.com', '2023-09-09 23:28:46', ''),
(62, '20230905.103046', '121.206.166.202.ether.static.wlink.com.np', 'admin@gmail.com', '2023-09-09 23:28:46', ''),
(63, '20230905.120632', '121.206.166.202.ether.static.wlink.com.np', 'janampandey2@gmail.com', '2023-09-09 23:28:46', 'Logged Out'),
(64, '20230905.121654', '121.206.166.202.ether.static.wlink.com.np', 'kushalb122@gmail.com', '2023-09-09 23:28:46', ''),
(65, '20230905.121728', '121.206.166.202.ether.static.wlink.com.np', 'janampandey2@gmail.com', '2023-09-09 23:28:46', 'Logged Out'),
(66, '20230905.122334', '121.206.166.202.ether.static.wlink.com.np', 'kushalb122@gmail.com', '2023-09-09 23:28:46', ''),
(67, '20230906.104334', '27.34.64.89', 'janampandey2@gmail.com', '2023-09-09 23:28:46', 'Logged Out'),
(68, '20230906.112204', '27.34.64.89', 'admin@gmail.com', '2023-09-09 23:28:46', ''),
(69, '20230906.120646', '27.34.64.89', 'janampandey2@gmail.com', '2023-09-09 23:28:46', 'Logged Out'),
(70, '20230906.145658', '27.34.64.89', 'janampandey2@gmail.com', '2023-09-09 23:28:46', 'Logged Out'),
(71, '20230906.150442', '27.34.64.89', 'admin@gmail.com', '2023-09-09 23:28:46', ''),
(72, '20230906.151244', '27.34.64.89', 'janampandey2@gmail.com', '2023-09-09 23:28:46', 'Logged Out'),
(73, '20230906.153233', '27.34.64.89', 'janampandey2@gmail.com', '2023-09-09 23:28:46', 'Logged Out'),
(74, '20230906.154607', '27.34.64.89', 'janampandey2@gmail.com', '2023-09-09 23:28:46', 'Logged Out'),
(75, '20230906.154638', '27.34.64.89', 'janampandey2@gmail.com', '2023-09-09 23:28:46', 'Logged Out'),
(76, '20230906.154755', '27.34.64.89', 'janampandey2@gmail.com', '2023-09-09 23:28:46', 'Logged Out'),
(77, '20230906.154811', '27.34.64.89', 'janampandey2@gmail.com', '2023-09-09 23:28:46', 'Logged Out'),
(78, '20230906.154902', '27.34.64.89', 'janampandey2@gmail.com', '2023-09-09 23:28:46', 'Logged Out'),
(79, '20230906.154914', '27.34.64.89', 'janampandey2@gmail.com', '2023-09-09 23:28:46', 'Logged Out'),
(80, '20230906.155028', '27.34.64.89', 'janampandey2@gmail.com', '2023-09-09 23:28:46', 'Logged Out'),
(81, '20230906.155213', '27.34.64.89', 'janampandey2@gmail.com', '2023-09-09 23:28:46', 'Logged Out'),
(82, '20230906.155312', '27.34.64.89', 'janampandey2@gmail.com', '2023-09-09 23:28:46', 'Logged Out'),
(83, '20230906.155404', '27.34.64.89', 'janampandey2@gmail.com', '2023-09-09 23:28:46', 'Logged Out'),
(84, '20230906.155434', '27.34.64.89', 'janampandey2@gmail.com', '2023-09-09 23:28:46', 'Logged Out'),
(85, '20230906.155453', '27.34.64.89', 'janampandey2@gmail.com', '2023-09-09 23:28:46', 'Logged Out'),
(86, '20230906.155704', '27.34.64.89', 'janampandey2@gmail.com', '2023-09-09 23:28:46', 'Logged Out'),
(87, '20230906.155811', '27.34.64.89', 'janampandey2@gmail.com', '2023-09-09 23:28:46', 'Logged Out'),
(88, '20230906.155852', '27.34.64.89', 'janampandey2@gmail.com', '2023-09-09 23:28:46', 'Logged Out'),
(89, '20230906.160307', '27.34.64.89', 'janampandey2@gmail.com', '2023-09-09 23:28:46', 'Logged Out'),
(90, '20230906.160531', '27.34.64.89', 'janampandey2@gmail.com', '2023-09-09 23:28:46', 'Logged Out'),
(91, '20230906.160815', '27.34.64.89', 'janampandey2@gmail.com', '2023-09-09 23:28:46', 'Logged Out'),
(92, '20230906.160919', '27.34.64.89', 'janampandey2@gmail.com', '2023-09-09 23:28:46', 'Logged Out'),
(93, '20230906.161032', '27.34.64.89', 'janampandey2@gmail.com', '2023-09-09 23:28:46', 'Logged Out'),
(94, '20230906.161227', '27.34.64.89', 'janampandey2@gmail.com', '2023-09-09 23:28:46', 'Logged Out'),
(95, '20230906.161443', '27.34.64.89', 'janampandey2@gmail.com', '2023-09-09 23:28:46', 'Logged Out'),
(96, '20230906.161720', '27.34.64.89', 'janampandey2@gmail.com', '2023-09-09 23:28:46', 'Logged Out'),
(97, '20230906.162209', '27.34.64.89', 'janampandey2@gmail.com', '2023-09-09 23:28:46', 'Logged Out'),
(98, '20230906.162359', '27.34.64.89', 'janampandey2@gmail.com', '2023-09-09 23:28:46', 'Logged Out'),
(99, '20230906.162738', '27.34.64.89', 'janampandey2@gmail.com', '2023-09-09 23:28:46', 'Logged Out'),
(100, '20230906.162857', '27.34.64.89', 'janampandey2@gmail.com', '2023-09-09 23:28:46', 'Logged Out'),
(101, '20230906.162933', '27.34.64.89', 'janampandey2@gmail.com', '2023-09-09 23:28:46', 'Logged Out'),
(102, '20230906.163311', '27.34.64.89', 'janampandey2@gmail.com', '2023-09-09 23:28:46', 'Logged Out'),
(103, '20230906.163346', '27.34.64.89', 'janampandey2@gmail.com', '2023-09-09 23:28:46', 'Logged Out'),
(104, '20230906.163846', '27.34.64.89', 'janampandey2@gmail.com', '2023-09-09 23:28:46', 'Logged Out'),
(105, '20230906.172803', '27.34.64.89', 'janampandey2@gmail.com', '2023-09-09 23:28:46', 'Logged Out'),
(106, '20230906.174806', '27.34.64.89_', 'janampandey2@gmail.com', '2023-09-09 23:28:46', 'Logged Out'),
(107, '20230906.174840', '27.34.64.89', 'janampandey2@gmail.com', '2023-09-09 23:28:46', 'Logged Out'),
(108, '20230906.175151', '27.34.64.89', 'janampandey2@gmail.com', '2023-09-09 23:28:46', 'Logged Out'),
(109, '20230906.175321', '27.34.64.89', 'admin@gmail.com', '2023-09-09 23:28:46', ''),
(110, '20230906.175326', '27.34.64.89', 'admin@gmail.com', '2023-09-09 23:28:46', ''),
(111, '20230906.175358', '27.34.64.89', 'admin@gmail.com', '2023-09-09 23:28:46', ''),
(112, '20230906.180034', '27.34.64.89', 'admin@gmail.com', '2023-09-09 23:28:46', ''),
(113, '20230906.180051', '27.34.64.89', 'janampandey2@gmail.com', '2023-09-09 23:28:46', 'Logged Out'),
(114, '20230906.180309', '27.34.64.89', 'kushalb122@gmail.com', '2023-09-09 23:28:46', ''),
(115, '20230906.180323', '27.34.64.89', 'kushalb122@gmail.com', '2023-09-09 23:28:46', ''),
(116, '20230906.180328', '27.34.64.89', 'kushalb122@gmail.com', '2023-09-09 23:28:46', ''),
(117, '20230906.180333', '27.34.64.89', 'kushalb122@gmail.com', '2023-09-09 23:28:46', ''),
(118, '20230906.180338', '27.34.64.89', 'kushalb122@gmail.com', '2023-09-09 23:28:46', ''),
(119, '20230906.180342', '27.34.64.89', 'kushalb122@gmail.com', '2023-09-09 23:28:46', ''),
(120, '20230906.180343', '27.34.64.89', 'kushalb122@gmail.com', '2023-09-09 23:28:46', ''),
(121, '20230906.180344', '27.34.64.89', 'kushalb122@gmail.com', '2023-09-09 23:28:46', ''),
(122, '20230906.180350', '27.34.64.89', 'kushalb122@gmail.com', '2023-09-09 23:28:46', ''),
(123, '20230906.180351', '27.34.64.89', 'kushalb122@gmail.com', '2023-09-09 23:28:46', ''),
(124, '20230906.180352', '27.34.64.89', 'kushalb122@gmail.com', '2023-09-09 23:28:46', ''),
(125, '20230906.180353', '27.34.64.89', 'kushalb122@gmail.com', '2023-09-09 23:28:46', ''),
(126, '20230906.180404', '27.34.64.89', 'kushalb122@gmail.com', '2023-09-09 23:28:46', ''),
(127, '20230906.180438', '27.34.64.89', 'kushalb122@gmail.com', '2023-09-09 23:28:46', ''),
(128, '20230906.180441', '27.34.64.89', 'kushalb122@gmail.com', '2023-09-09 23:28:46', ''),
(129, '20230906.180442', '27.34.64.89', 'kushalb122@gmail.com', '2023-09-09 23:28:46', ''),
(130, '20230906.180443', '27.34.64.89', 'kushalb122@gmail.com', '2023-09-09 23:28:46', ''),
(131, '20230906.180444', '27.34.64.89', 'kushalb122@gmail.com', '2023-09-09 23:28:46', ''),
(132, '20230906.180445', '27.34.64.89', 'kushalb122@gmail.com', '2023-09-09 23:28:46', ''),
(133, '20230906.180447', '27.34.64.89', 'kushalb122@gmail.com', '2023-09-09 23:28:46', ''),
(134, '20230906.180452', '27.34.64.89', 'admin@gmail.com', '2023-09-09 23:28:46', ''),
(135, '20230906.181305', '27.34.64.89', 'admin@gmail.com', '2023-09-09 23:28:46', ''),
(136, '20230906.181410', '27.34.64.89', 'admin@gmail.com', '2023-09-09 23:28:46', ''),
(137, '20230906.181413', '27.34.64.89', 'admin@gmail.com', '2023-09-09 23:28:46', ''),
(138, '20230906.181414', '27.34.64.89', 'admin@gmail.com', '2023-09-09 23:28:46', ''),
(139, '20230906.181417', '27.34.64.89', 'admin@gmail.com', '2023-09-09 23:28:46', ''),
(140, '20230906.181419', '27.34.64.89', 'admin@gmail.com', '2023-09-09 23:28:46', ''),
(141, '20230906.181420', '27.34.64.89', 'admin@gmail.com', '2023-09-09 23:28:46', ''),
(142, '20230906.182458', '27.34.64.89', 'admin@gmail.com', '2023-09-09 23:28:46', ''),
(143, '20230906.182627', '27.34.64.89', 'janampandey2@gmail.com', '2023-09-09 23:28:46', 'Logged Out'),
(144, '20230906.183301', '27.34.64.89', 'janampandey2@gmail.com', '2023-09-09 23:28:46', 'Logged Out'),
(145, '20230906.184525', '27.34.64.89', 'janampandey2@gmail.com', '2023-09-09 23:28:46', 'Logged Out'),
(146, '20230906.190921', '27.34.64.89', 'janampandey2@gmail.com', '2023-09-09 23:28:46', 'Logged Out'),
(147, '20230906.191557', '27.34.64.89', 'admin@gmail.com', '2023-09-09 23:28:46', ''),
(148, '20230906.191617', '27.34.64.89', 'admin@gmail.com', '2023-09-09 23:28:46', ''),
(149, '20230906.191632', '27.34.64.89', 'janampandey2@gmail.com', '2023-09-09 23:28:46', 'Logged Out'),
(150, '20230906.191634', '27.34.64.89', 'janampandey2@gmail.com', '2023-09-09 23:28:46', 'Logged Out'),
(151, '20230906.191847', '27.34.64.89', 'janampandey2@gmail.com', '2023-09-09 23:28:46', 'Logged Out'),
(152, '20230907.135215', '27.34.64.56', 'admin@gmail.com', '2023-09-09 23:28:46', ''),
(153, '20230907.135218', '27.34.64.56', 'janampandey2@gmail.com', '2023-09-09 23:28:46', 'Logged Out'),
(154, '20230908.054743', '121.206.166.202.ether.static.wlink.com.np', 'admin@gmail.com', '2023-09-09 23:28:46', ''),
(155, '20230908.054746', '121.206.166.202.ether.static.wlink.com.np', 'admin@gmail.com', '2023-09-09 23:28:46', ''),
(156, '20230908.054906', '121.206.166.202.ether.static.wlink.com.np', 'admin@gmail.com', '2023-09-09 23:28:46', ''),
(157, '20230908.054908', '121.206.166.202.ether.static.wlink.com.np', 'admin@gmail.com', '2023-09-09 23:28:46', ''),
(158, '20230908.054933', '121.206.166.202.ether.static.wlink.com.np', 'admin@gmail.com', '2023-09-09 23:28:46', ''),
(159, '20230908.054935', '121.206.166.202.ether.static.wlink.com.np', 'admin@gmail.com', '2023-09-09 23:28:46', ''),
(160, '20230908.055104', '121.206.166.202.ether.static.wlink.com.np', 'janampandey2@gmail.com', '2023-09-09 23:28:46', 'Logged Out'),
(161, '20230908.055106', '121.206.166.202.ether.static.wlink.com.np', 'janampandey2@gmail.com', '2023-09-09 23:28:46', 'Logged Out'),
(162, '20230908.055130', '121.206.166.202.ether.static.wlink.com.np', 'janampandey2@gmail.com', '2023-09-09 23:28:46', 'Logged Out'),
(163, '20230908.055206', '121.206.166.202.ether.static.wlink.com.np', 'janampandey2@gmail.com', '2023-09-09 23:28:46', 'Logged Out'),
(164, '20230908.055207', '121.206.166.202.ether.static.wlink.com.np', 'janampandey2@gmail.com', '2023-09-09 23:28:46', 'Logged Out'),
(165, '20230908.060901', '121.206.166.202.ether.static.wlink.com.np', 'janampandey2@gmail.com', '2023-09-09 23:28:46', 'Logged Out'),
(166, '20230908.060912', '121.206.166.202.ether.static.wlink.com.np', 'janampandey2@gmail.com', '2023-09-09 23:28:46', 'Logged Out'),
(167, '20230908.060914', '121.206.166.202.ether.static.wlink.com.np', 'janampandey2@gmail.com', '2023-09-09 23:28:46', 'Logged Out'),
(168, '20230908.061046', '121.206.166.202.ether.static.wlink.com.np', 'admin@gmail.com', '2023-09-09 23:28:46', ''),
(169, '20230908.061149', '121.206.166.202.ether.static.wlink.com.np', 'admin@gmail.com', '2023-09-09 23:28:46', ''),
(170, '20230908.061327', '121.206.166.202.ether.static.wlink.com.np', 'admin@gmail.com', '2023-09-09 23:28:46', ''),
(171, '20230908.103121', '27.34.30.14', 'janampandey2@gmail.com', '2023-09-09 23:28:46', 'Logged Out'),
(172, '20230908.133642', '27.34.64.16', 'admin@gmail.com', '2023-09-09 23:28:46', ''),
(173, '20230908.133643', '27.34.64.16', 'admin@gmail.com', '2023-09-09 23:28:46', ''),
(174, '20230908.134052', '27.34.64.16', 'janampandey2@gmail.com', '2023-09-09 23:28:46', 'Logged Out'),
(175, '20230908.140254', '27.34.64.31', 'janampandey2@gmail.com', '2023-09-09 23:28:46', 'Logged Out'),
(176, '20230908.140256', '27.34.64.31', 'janampandey2@gmail.com', '2023-09-09 23:28:46', 'Logged Out'),
(177, '20230908.145152', '27.34.64.31', 'janampandey2@gmail.com', '2023-09-09 23:28:46', 'Logged Out'),
(178, '20230908.145153', '27.34.64.31', 'janampandey2@gmail.com', '2023-09-09 23:28:46', 'Logged Out'),
(179, '20230908.145510', '27.34.64.31', 'janampandey2@gmail.com', '2023-09-09 23:28:46', 'Logged Out'),
(180, '20230908.145511', '27.34.64.31', 'janampandey2@gmail.com', '2023-09-09 23:28:46', 'Logged Out'),
(181, '20230908.164614', '27.34.64.31', 'admin@gmail.com', '2023-09-09 23:28:46', ''),
(182, '20230908.164616', '27.34.64.31', 'admin@gmail.com', '2023-09-09 23:28:46', ''),
(183, '20230908.164729', '27.34.64.31', 'janampandey2@gmail.com', '2023-09-09 23:28:46', 'Logged Out'),
(184, '20230908.164730', '27.34.64.31', 'janampandey2@gmail.com', '2023-09-09 23:28:46', 'Logged Out'),
(185, '20230908.200227', '27.34.64.31', 'janampandey2@gmail.com', '2023-09-09 23:28:46', 'Logged Out'),
(186, '20230909.045712', '27.34.64.48', 'admin@gmail.com', '2023-09-09 23:28:46', ''),
(187, '20230909.080247', '27.34.64.75', 'janampandey2@gmail.com', '2023-09-09 23:28:46', 'Logged Out'),
(188, '20230909.080252', '27.34.64.75', 'janampandey2@gmail.com', '2023-09-09 23:28:46', 'Logged Out'),
(189, '20230909.080301', '27.34.64.75', 'janampandey2@gmail.com', '2023-09-09 23:28:46', 'Logged Out'),
(190, '20230909.080303', '27.34.64.75', 'janampandey2@gmail.com', '2023-09-09 23:28:46', 'Logged Out'),
(191, '20230909.081053', '27.34.64.108', 'janampandey2@gmail.com', '2023-09-09 23:28:46', 'Logged Out'),
(192, '20230909.081054', '27.34.64.108', 'janampandey2@gmail.com', '2023-09-09 23:28:46', 'Logged Out'),
(193, '20230909.081056', '27.34.64.108', 'janampandey2@gmail.com', '2023-09-09 23:28:46', 'Logged Out'),
(194, '20230909.081739', '27.34.64.80', 'janampandey2@gmail.com', '2023-09-09 23:28:46', 'Logged Out'),
(195, '20230909.081740', '27.34.64.80', 'janampandey2@gmail.com', '2023-09-09 23:28:46', 'Logged Out'),
(196, '20230909.081915', '27.34.64.109', 'janampandey2@gmail.com', '2023-09-09 23:28:46', 'Logged Out'),
(197, '20230909.081916', '27.34.64.109', 'janampandey2@gmail.com', '2023-09-09 23:28:46', 'Logged Out'),
(198, '20230909.083005', '27.34.64.95', 'janampandey2@gmail.com', '2023-09-09 23:28:46', 'Logged Out'),
(199, '20230909.083006', '27.34.64.95', 'janampandey2@gmail.com', '2023-09-09 23:28:46', 'Logged Out'),
(200, '20230909.123632', '27.34.64.57', 'janampandey2@gmail.com', '2023-09-09 23:28:46', 'Logged Out'),
(201, '20230909.123634', '27.34.64.57', 'janampandey2@gmail.com', '2023-09-09 23:28:46', 'Logged Out'),
(202, '20230909.172901', '27.34.64.57', 'janampandey2@gmail.com', '2023-09-09 23:28:46', 'Logged Out'),
(203, '20230909.172902', '27.34.64.57', 'janampandey2@gmail.com', '2023-09-09 23:28:46', 'Logged Out'),
(204, '20230909.195500', '27.34.64.57', 'janampandey2@gmail.com', '2023-09-09 23:28:46', 'Logged Out'),
(205, '20230909.195502', '27.34.64.57', 'janampandey2@gmail.com', '2023-09-09 23:28:46', 'Logged Out'),
(206, '20230909.195534', '27.34.64.57', 'admin@gmail.com', '2023-09-09 23:28:46', ''),
(207, '20230909.195536', '27.34.64.57', 'admin@gmail.com', '2023-09-09 23:28:46', ''),
(208, '20230909.195740', '27.34.64.57', 'janampandey2@gmail.com', '2023-09-09 23:28:46', 'Logged Out'),
(209, '20230909.195741', '27.34.64.57', 'janampandey2@gmail.com', '2023-09-09 23:28:46', 'Logged Out'),
(210, '20230909.200152', '27.34.64.57', 'janampandey2@gmail.com', '2023-09-09 23:28:46', 'Logged Out'),
(211, '20230909.201239', '27.34.64.57', 'janampandey2@gmail.com', '2023-09-09 23:28:46', 'Logged Out'),
(212, '20230909.201241', '27.34.64.57', 'janampandey2@gmail.com', '2023-09-09 23:28:46', 'Logged Out'),
(213, '20230909.201302', '27.34.64.57', 'janampandey2@gmail.com', '2023-09-09 23:28:46', 'Logged Out'),
(214, '20230909.201304', '27.34.64.57', 'janampandey2@gmail.com', '2023-09-09 23:28:46', 'Logged Out'),
(215, '20230909.201436', '27.34.64.57', 'janampandey2@gmail.com', '2023-09-09 23:28:46', 'Logged Out'),
(216, '20230909.201437', '27.34.64.57', 'janampandey2@gmail.com', '2023-09-09 23:28:46', 'Logged Out'),
(217, '20230909.201500', '27.34.64.57', 'janampandey2@gmail.com', '2023-09-09 23:28:46', 'Logged Out'),
(218, '20230909.201501', '27.34.64.57', 'janampandey2@gmail.com', '2023-09-09 23:28:46', 'Logged Out'),
(219, '20230909.201841', '27.34.64.57', 'janampandey2@gmail.com', '2023-09-09 23:28:46', 'Logged Out'),
(220, '20230909.201842', '27.34.64.57', 'janampandey2@gmail.com', '2023-09-09 23:28:46', 'Logged Out'),
(221, '20230909.201931', '27.34.64.57', 'janampandey2@gmail.com', '2023-09-09 23:28:46', 'Logged Out'),
(222, '20230909.201932', '27.34.64.57', 'janampandey2@gmail.com', '2023-09-09 23:28:46', 'Logged Out'),
(223, '20230909.202038', '27.34.64.57', 'janampandey2@gmail.com', '2023-09-09 23:28:46', 'Logged Out'),
(224, '20230909.202039', '27.34.64.57', 'janampandey2@gmail.com', '2023-09-09 23:28:46', 'Logged Out'),
(225, '20230909.202103', '27.34.64.57', 'janampandey2@gmail.com', '2023-09-09 23:28:46', 'Logged Out'),
(226, '20230909.202104', '27.34.64.57', 'janampandey2@gmail.com', '2023-09-09 23:28:46', 'Logged Out'),
(227, '20230909.202350', '27.34.64.57', 'janampandey2@gmail.com', '2023-09-09 23:28:46', 'Logged Out'),
(228, '20230909.202351', '27.34.64.57', 'janampandey2@gmail.com', '2023-09-09 23:28:46', 'Logged Out'),
(229, '20230909.202708', '27.34.64.57', 'janampandey2@gmail.com', '2023-09-09 23:28:46', 'Logged Out'),
(230, '20230909.202710', '27.34.64.57', 'janampandey2@gmail.com', '2023-09-09 23:28:46', 'Logged Out'),
(231, '20230909.202903', '27.34.64.57', 'janampandey2@gmail.com', '2023-09-09 23:29:03', 'Logged Out'),
(232, '20230909.202904', '27.34.64.57', 'janampandey2@gmail.com', '2023-09-09 23:29:04', 'Logged Out'),
(233, '20230909.203147', '27.34.64.57', 'janampandey2@gmail.com', '2023-09-09 20:31:47', 'Logged Out'),
(234, '20230909.203148', '27.34.64.57', 'janampandey2@gmail.com', '2023-09-09 20:31:48', 'Logged Out'),
(235, '20230909.203220', '27.34.64.57', 'admin@gmail.com', '2023-09-09 20:32:20', ''),
(236, '20230909.203221', '27.34.64.57', 'admin@gmail.com', '2023-09-09 20:32:21', ''),
(237, '20230910.021849', '27.34.64.57', 'janampandey2@gmail.com', '2023-09-10 02:18:49', 'Logged Out'),
(238, '20230910.021850', '27.34.64.57', 'janampandey2@gmail.com', '2023-09-10 02:18:50', 'Logged Out'),
(239, '20230910.022303', '27.34.64.57', 'janampandey2@gmail.com', '2023-09-10 02:23:03', 'Logged Out'),
(240, '20230910.022304', '27.34.64.57', 'janampandey2@gmail.com', '2023-09-10 02:23:04', 'Logged Out'),
(241, '20230910.022353', '27.34.64.57', 'janampandey2@gmail.com', '2023-09-10 02:23:53', 'Logged Out'),
(242, '20230910.022354', '27.34.64.57', 'janampandey2@gmail.com', '2023-09-10 02:23:54', 'Logged Out'),
(243, '20230910.022435', '27.34.64.57', 'janampandey2@gmail.com', '2023-09-10 02:24:35', 'Logged Out'),
(244, '20230910.022437', '27.34.64.57', 'janampandey2@gmail.com', '2023-09-10 02:24:37', 'Logged Out'),
(245, '20230910.022507', '27.34.64.57', 'janampandey1@gmail.com', '2023-09-10 02:25:07', ''),
(246, '20230910.022508', '27.34.64.57', 'janampandey1@gmail.com', '2023-09-10 02:25:08', ''),
(247, '20230910.022539', '27.34.64.57', 'janampandey2@gmail.com', '2023-09-10 02:25:39', 'Logged Out'),
(248, '20230910.022540', '27.34.64.57', 'janampandey2@gmail.com', '2023-09-10 02:25:40', 'Logged Out'),
(249, '20230910.022949', '27.34.64.57', 'admin@gmail.com', '2023-09-10 02:29:49', ''),
(250, '20230910.023417', '27.34.64.57', 'janampandey2@gmail.com', '2023-09-10 02:34:17', 'Logged Out'),
(251, '20230910.023419', '27.34.64.57', 'janampandey2@gmail.com', '2023-09-10 02:34:19', 'Logged Out'),
(252, '20230910.122507', '121.206.166.202.ether.static.wlink.com.np', 'janampandey2@gmail.com', '2023-09-10 12:25:06', 'Logged Out'),
(253, '20230910.140725', '121.206.166.202.ether.static.wlink.com.np', 'janampandey2@gmail.com', '2023-09-10 14:07:25', 'Logged Out'),
(254, '20230910.140726', '121.206.166.202.ether.static.wlink.com.np', 'janampandey2@gmail.com', '2023-09-10 14:07:26', 'Logged Out'),
(255, '20230910.141306', '121.206.166.202.ether.static.wlink.com.np', 'kushalb122@gmail.com', '2023-09-10 14:13:06', ''),
(256, '20230910.141312', '121.206.166.202.ether.static.wlink.com.np', 'kushalb122@gmail.com', '2023-09-10 14:13:12', ''),
(257, '20230910.141319', '121.206.166.202.ether.static.wlink.com.np', 'kushalb122@gmail.com', '2023-09-10 14:13:19', ''),
(258, '20230910.141326', '121.206.166.202.ether.static.wlink.com.np', 'kushalb122@gmail.com', '2023-09-10 14:13:26', ''),
(259, '20230910.141329', '121.206.166.202.ether.static.wlink.com.np', 'kushalb122@gmail.com', '2023-09-10 14:13:29', ''),
(260, '20230910.141457', '121.206.166.202.ether.static.wlink.com.np', 'janampandey2@gmail.com', '2023-09-10 14:14:57', 'Logged Out'),
(261, '20230910.141458', '121.206.166.202.ether.static.wlink.com.np', 'janampandey2@gmail.com', '2023-09-10 14:14:58', 'Logged Out'),
(262, '20230910.173047', '27.34.115.217', 'janampandey2@gmail.com', '2023-09-10 17:30:47', 'Logged Out'),
(263, '20230910.173049', '27.34.115.217', 'janampandey2@gmail.com', '2023-09-10 17:30:49', 'Logged Out'),
(264, '20230911.220319', '27.34.64.122', 'janampandey2@gmail.com', '2023-09-11 22:03:19', 'Logged Out'),
(265, '20230911.220349', '27.34.64.122', 'kushalb122@gmail.com', '2023-09-11 22:03:49', ''),
(266, '20230911.220351', '27.34.64.122', 'kushalb122@gmail.com', '2023-09-11 22:03:51', ''),
(267, '20230911.220353', '27.34.64.122', 'kushalb122@gmail.com', '2023-09-11 22:03:53', ''),
(268, '20230911.220358', '27.34.64.122', 'kushalb122@gmail.com', '2023-09-11 22:03:58', ''),
(269, '20230911.220406', '27.34.64.122', 'janampandey2@gmail.com', '2023-09-11 22:04:06', 'Logged Out'),
(270, '20230911.220503', '27.34.64.122', 'janampandey2@gmail.com', '2023-09-11 22:05:03', 'Logged Out'),
(271, '20230911.220800', '27.34.64.122', 'admin@gmail.com', '2023-09-11 22:08:00', ''),
(272, '20230911.220802', '27.34.64.122', 'admin@gmail.com', '2023-09-11 22:08:02', ''),
(273, '20230911.220953', '27.34.64.122', 'janampandey2@gmail.com', '2023-09-11 22:09:53', 'Logged Out'),
(274, '20230911.220954', '27.34.64.122', 'janampandey2@gmail.com', '2023-09-11 22:09:54', 'Logged Out'),
(275, '20230911.221742', '27.34.64.122', 'janampandey2@gmail.com', '2023-09-11 22:17:41', 'Logged Out'),
(276, '20230911.221743', '27.34.64.122', 'janampandey2@gmail.com', '2023-09-11 22:17:43', 'Logged Out'),
(277, '20230911.221947', '27.34.64.122', 'janampandey2@gmail.com', '2023-09-11 22:19:46', 'Logged Out'),
(278, '20230911.221949', '27.34.64.122', 'janampandey2@gmail.com', '2023-09-11 22:19:49', 'Logged Out'),
(279, '20230911.222030', '27.34.64.122', 'janampandey2@gmail.com', '2023-09-11 22:20:29', 'Logged Out'),
(280, '20230911.222032', '27.34.64.122', 'janampandey2@gmail.com', '2023-09-11 22:20:32', 'Logged Out'),
(281, '20230911.222034', '27.34.64.122', 'janampandey2@gmail.com', '2023-09-11 22:20:34', 'Logged Out'),
(282, '20230911.222036', '27.34.64.122', 'janampandey2@gmail.com', '2023-09-11 22:20:36', 'Logged Out'),
(283, '20230911.222039', '27.34.64.122', 'janampandey2@gmail.com', '2023-09-11 22:20:39', 'Logged Out'),
(284, '20230911.222109', '27.34.64.122', 'janampandey2@gmail.com', '2023-09-11 22:21:09', 'Logged Out'),
(285, '20230911.222142', '27.34.64.122', 'janampandey2@gmail.com', '2023-09-11 22:21:42', 'Logged Out'),
(286, '20230911.222145', '27.34.64.122', 'janampandey2@gmail.com', '2023-09-11 22:21:45', 'Logged Out'),
(287, '20230911.222239', '27.34.64.122', 'janampandey2@gmail.com', '2023-09-11 22:22:39', 'Logged Out'),
(288, '20230911.222353', '27.34.64.122', 'janampandey2@gmail.com', '2023-09-11 22:23:53', 'Logged Out'),
(289, '20230911.222354', '27.34.64.122', 'janampandey2@gmail.com', '2023-09-11 22:23:54', 'Logged Out'),
(290, '20230911.222757', '27.34.64.122', 'janampandey2@gmail.com', '2023-09-11 22:27:56', 'Logged Out'),
(291, '20230911.222800', '27.34.64.122', 'janampandey2@gmail.com', '2023-09-11 22:28:00', 'Logged Out'),
(292, '20230911.222802', '27.34.64.122', 'janampandey2@gmail.com', '2023-09-11 22:28:02', 'Logged Out'),
(293, '20230911.223004', '27.34.64.122', 'janampandey2@gmail.com', '2023-09-11 22:30:04', 'Logged Out'),
(294, '20230911.223005', '27.34.64.122', 'janampandey2@gmail.com', '2023-09-11 22:30:05', 'Logged Out'),
(295, '20230911.223503', '27.34.64.122', 'janampandey2@gmail.com', '2023-09-11 22:35:03', 'Logged Out'),
(296, '20230911.223505', '27.34.64.122', 'janampandey2@gmail.com', '2023-09-11 22:35:05', 'Logged Out'),
(297, '20230911.223924', '27.34.64.122', 'janampandey2@gmail.com', '2023-09-11 22:39:24', 'Logged Out'),
(298, '20230911.223925', '27.34.64.122', 'janampandey2@gmail.com', '2023-09-11 22:39:25', 'Logged Out'),
(299, '20230911.224036', '27.34.64.122', 'janampandey2@gmail.com', '2023-09-11 22:40:36', 'Logged Out'),
(300, '20230911.224052', '27.34.64.122', 'janampandey2@gmail.com', '2023-09-11 22:40:52', 'Logged Out'),
(301, '20230911.224054', '27.34.64.122', 'janampandey2@gmail.com', '2023-09-11 22:40:54', 'Logged Out'),
(302, '20230911.224236', '27.34.64.122', 'janampandey2@gmail.com', '2023-09-11 22:42:36', 'Logged Out'),
(303, '20230911.224237', '27.34.64.122', 'janampandey2@gmail.com', '2023-09-11 22:42:37', 'Logged Out'),
(304, '20230911.224421', '27.34.64.122', 'janampandey2@gmail.com', '2023-09-11 22:44:21', 'Logged Out'),
(305, '20230911.224422', '27.34.64.122', 'janampandey2@gmail.com', '2023-09-11 22:44:22', 'Logged Out'),
(306, '20230911.224705', '27.34.64.122', 'janampandey2@gmail.com', '2023-09-11 22:47:05', 'Logged Out'),
(307, '20230911.224706', '27.34.64.122', 'janampandey2@gmail.com', '2023-09-11 22:47:06', 'Logged Out'),
(308, '20230911.224744', '27.34.64.122', 'janampandey2@gmail.com', '2023-09-11 22:47:44', 'Logged Out'),
(309, '20230911.224745', '27.34.64.122', 'janampandey2@gmail.com', '2023-09-11 22:47:45', 'Logged Out'),
(310, '20230911.224746', '27.34.64.122', 'janampandey2@gmail.com', '2023-09-11 22:47:46', 'Logged Out'),
(311, '20230911.224816', '27.34.64.122', 'janampandey2@gmail.com', '2023-09-11 22:48:15', 'Logged Out'),
(312, '20230911.224817', '27.34.64.122', 'janampandey2@gmail.com', '2023-09-11 22:48:17', 'Logged Out'),
(313, '20230911.224851', '27.34.64.122', 'janampandey2@gmail.com', '2023-09-11 22:48:51', 'Logged Out'),
(314, '20230911.224852', '27.34.64.122', 'janampandey2@gmail.com', '2023-09-11 22:48:52', 'Logged Out'),
(315, '20230911.224937', '27.34.64.122', 'janampandey2@gmail.com', '2023-09-11 22:49:37', 'Logged Out'),
(316, '20230911.224939', '27.34.64.122', 'janampandey2@gmail.com', '2023-09-11 22:49:39', 'Logged Out'),
(317, '20230911.225436', '27.34.64.122', 'janampandey2@gmail.com', '2023-09-11 22:54:36', 'Logged Out'),
(318, '20230911.225438', '27.34.64.122', 'janampandey2@gmail.com', '2023-09-11 22:54:38', 'Logged Out'),
(319, '20230911.225538', '27.34.64.122', 'janampandey2@gmail.com', '2023-09-11 22:55:38', 'Logged Out'),
(320, '20230911.225540', '27.34.64.122', 'janampandey2@gmail.com', '2023-09-11 22:55:40', 'Logged Out'),
(321, '20230911.225543', '27.34.64.122', 'janampandey2@gmail.com', '2023-09-11 22:55:43', 'Logged Out'),
(322, '20230911.225544', '27.34.64.122', 'janampandey2@gmail.com', '2023-09-11 22:55:44', 'Logged Out'),
(323, '20230911.225545', '27.34.64.122', 'janampandey2@gmail.com', '2023-09-11 22:55:45', 'Logged Out'),
(324, '20230911.225546', '27.34.64.122', 'janampandey2@gmail.com', '2023-09-11 22:55:46', 'Logged Out'),
(325, '20230911.225741', '27.34.64.122', 'janampandey2@gmail.com', '2023-09-11 22:57:41', 'Logged Out'),
(326, '20230911.225743', '27.34.64.122', 'janampandey2@gmail.com', '2023-09-11 22:57:43', 'Logged Out'),
(327, '20230911.230253', '27.34.64.122', 'janampandey2@gmail.com', '2023-09-11 23:02:53', 'Logged Out'),
(328, '20230911.230255', '27.34.64.122', 'janampandey2@gmail.com', '2023-09-11 23:02:55', 'Logged Out'),
(329, '20230911.231728', '27.34.64.122', 'admin@gmail.com', '2023-09-11 23:17:27', ''),
(330, '20230911.231729', '27.34.64.122', 'admin@gmail.com', '2023-09-11 23:17:29', ''),
(331, '20230911.231801', '27.34.64.122', 'janampandey2@gmail.com', '2023-09-11 23:18:01', 'Logged Out'),
(332, '20230911.231802', '27.34.64.122', 'janampandey2@gmail.com', '2023-09-11 23:18:02', 'Logged Out'),
(333, '20230911.232338', '27.34.64.122', 'janampandey2@gmail.com', '2023-09-11 23:23:38', 'Logged Out'),
(334, '20230911.232339', '27.34.64.122', 'janampandey2@gmail.com', '2023-09-11 23:23:39', 'Logged Out'),
(335, '20230911.233148', '27.34.64.122', 'janampandey2@gmail.com', '2023-09-11 23:31:48', 'Logged Out'),
(336, '20230911.233149', '27.34.64.122', 'janampandey2@gmail.com', '2023-09-11 23:31:49', 'Logged Out'),
(337, '20230911.233704', '27.34.64.122', 'janampandey2@gmail.com', '2023-09-11 23:37:04', 'Logged Out'),
(338, '20230911.233705', '27.34.64.122', 'janampandey2@gmail.com', '2023-09-11 23:37:05', 'Logged Out'),
(339, '20230911.234034', '27.34.64.122', 'janampandey2@gmail.com', '2023-09-11 23:40:34', 'Logged Out'),
(340, '20230911.234036', '27.34.64.122', 'janampandey2@gmail.com', '2023-09-11 23:40:36', 'Logged Out'),
(341, '20230911.234314', '27.34.64.122', 'janampandey2@gmail.com', '2023-09-11 23:43:13', 'Logged Out'),
(342, '20230911.234315', '27.34.64.122', 'janampandey2@gmail.com', '2023-09-11 23:43:15', 'Logged Out'),
(343, '20230911.234500', '27.34.64.122', 'janampandey2@gmail.com', '2023-09-11 23:45:00', 'Logged Out'),
(344, '20230911.234502', '27.34.64.122', 'janampandey2@gmail.com', '2023-09-11 23:45:02', 'Logged Out'),
(345, '20230911.234546', '27.34.64.122', 'janampandey2@gmail.com', '2023-09-11 23:45:46', 'Logged Out'),
(346, '20230911.234547', '27.34.64.122', 'janampandey2@gmail.com', '2023-09-11 23:45:47', 'Logged Out'),
(347, '20230911.234842', '27.34.64.122', 'janampandey2@gmail.com', '2023-09-11 23:48:41', 'Logged Out'),
(348, '20230911.234844', '27.34.64.122', 'janampandey2@gmail.com', '2023-09-11 23:48:44', 'Logged Out'),
(349, '20230911.234925', '27.34.64.122', 'janampandey2@gmail.com', '2023-09-11 23:49:25', 'Logged Out'),
(350, '20230911.234926', '27.34.64.122', 'janampandey2@gmail.com', '2023-09-11 23:49:26', 'Logged Out'),
(351, '20230911.235640', '27.34.64.122', 'janampandey2@gmail.com', '2023-09-11 23:56:40', 'Logged Out'),
(352, '20230911.235641', '27.34.64.122', 'janampandey2@gmail.com', '2023-09-11 23:56:41', 'Logged Out'),
(353, '20230911.235850', '27.34.64.122', 'janampandey2@gmail.com', '2023-09-11 23:58:50', 'Logged Out'),
(354, '20230911.235851', '27.34.64.122', 'janampandey2@gmail.com', '2023-09-11 23:58:51', 'Logged Out'),
(355, '20230911.235928', '27.34.64.122', 'janampandey2@gmail.com', '2023-09-11 23:59:28', 'Logged Out'),
(356, '20230911.235930', '27.34.64.122', 'janampandey2@gmail.com', '2023-09-11 23:59:30', 'Logged Out'),
(357, '20230911.235932', '27.34.64.122', 'janampandey2@gmail.com', '2023-09-11 23:59:32', 'Logged Out'),
(358, '20230912.000054', '27.34.64.122', 'janampandey2@gmail.com', '2023-09-12 00:00:54', 'Logged Out'),
(359, '20230912.000055', '27.34.64.122', 'janampandey2@gmail.com', '2023-09-12 00:00:55', 'Logged Out'),
(360, '20230912.000057', '27.34.64.122', 'janampandey2@gmail.com', '2023-09-12 00:00:57', 'Logged Out'),
(361, '20230912.000058', '27.34.64.122', 'janampandey2@gmail.com', '2023-09-12 00:00:58', 'Logged Out'),
(362, '20230912.000059', '27.34.64.122', 'janampandey2@gmail.com', '2023-09-12 00:00:59', 'Logged Out'),
(363, '20230912.000100', '27.34.64.122', 'janampandey2@gmail.com', '2023-09-12 00:01:00', 'Logged Out'),
(364, '20230912.000102', '27.34.64.122', 'janampandey2@gmail.com', '2023-09-12 00:01:02', 'Logged Out'),
(365, '20230912.000104', '27.34.64.122', 'janampandey2@gmail.com', '2023-09-12 00:01:04', 'Logged Out'),
(366, '20230912.000105', '27.34.64.122', 'janampandey2@gmail.com', '2023-09-12 00:01:05', 'Logged Out'),
(367, '20230912.000220', '27.34.64.122', 'janampandey2@gmail.com', '2023-09-12 00:02:20', 'Logged Out'),
(368, '20230912.000221', '27.34.64.122', 'janampandey2@gmail.com', '2023-09-12 00:02:21', 'Logged Out'),
(369, '20230912.000507', '27.34.64.122', 'janampandey2@gmail.com', '2023-09-12 00:05:06', 'Logged Out'),
(370, '20230912.000508', '27.34.64.122', 'janampandey2@gmail.com', '2023-09-12 00:05:08', 'Logged Out'),
(371, '20230912.000555', '27.34.64.122', 'janampandey2@gmail.com', '2023-09-12 00:05:55', 'Logged Out'),
(372, '20230912.000557', '27.34.64.122', 'janampandey2@gmail.com', '2023-09-12 00:05:57', 'Logged Out'),
(373, '20230912.000835', '27.34.64.122', 'janampandey2@gmail.com', '2023-09-12 00:08:35', 'Logged Out'),
(374, '20230912.000838', '27.34.64.122', 'janampandey2@gmail.com', '2023-09-12 00:08:38', 'Logged Out'),
(375, '20230912.000839', '27.34.64.122', 'janampandey2@gmail.com', '2023-09-12 00:08:39', 'Logged Out'),
(376, '20230912.000840', '27.34.64.122', 'janampandey2@gmail.com', '2023-09-12 00:08:40', 'Logged Out'),
(377, '20230912.000841', '27.34.64.122', 'janampandey2@gmail.com', '2023-09-12 00:08:41', 'Logged Out'),
(378, '20230912.000842', '27.34.64.122', 'janampandey2@gmail.com', '2023-09-12 00:08:42', 'Logged Out'),
(379, '20230912.000847', '27.34.64.122', 'janampandey2@gmail.com', '2023-09-12 00:08:47', 'Logged Out'),
(380, '20230912.001048', '27.34.64.122', 'janampandey2@gmail.com', '2023-09-12 00:10:48', 'Logged Out'),
(381, '20230912.001053', '27.34.64.122', 'kushalb122@gmail.com', '2023-09-12 00:10:53', ''),
(382, '20230912.001056', '27.34.64.122', 'kushalb122@gmail.com', '2023-09-12 00:10:56', ''),
(383, '20230912.001100', '27.34.64.122', 'kushalb122@gmail.com', '2023-09-12 00:11:00', ''),
(384, '20230912.001104', '27.34.64.122', 'kushalb122@gmail.com', '2023-09-12 00:11:04', ''),
(385, '20230912.001107', '27.34.64.122', 'kushalb122@gmail.com', '2023-09-12 00:11:07', ''),
(386, '20230912.001108', '27.34.64.122', 'kushalb122@gmail.com', '2023-09-12 00:11:08', ''),
(387, '20230912.001110', '27.34.64.122', 'kushalb122@gmail.com', '2023-09-12 00:11:10', ''),
(388, '20230912.001112', '27.34.64.122', 'kushalb122@gmail.com', '2023-09-12 00:11:12', ''),
(389, '20230912.001114', '27.34.64.122', 'kushalb122@gmail.com', '2023-09-12 00:11:14', ''),
(390, '20230912.001118', '27.34.64.122', 'kushalb122@gmail.com', '2023-09-12 00:11:18', ''),
(391, '20230912.001119', '27.34.64.122', 'kushalb122@gmail.com', '2023-09-12 00:11:19', ''),
(392, '20230912.001122', '27.34.64.122', 'kushalb122@gmail.com', '2023-09-12 00:11:22', ''),
(393, '20230912.001128', '27.34.64.122', 'janampandey2@gmail.com', '2023-09-12 00:11:28', 'Logged Out'),
(394, '20230912.001130', '27.34.64.122', 'janampandey2@gmail.com', '2023-09-12 00:11:30', 'Logged Out'),
(395, '20230912.001132', '27.34.64.122', 'janampandey2@gmail.com', '2023-09-12 00:11:32', 'Logged Out'),
(396, '20230912.001133', '27.34.64.122', 'janampandey2@gmail.com', '2023-09-12 00:11:33', 'Logged Out'),
(397, '20230912.001135', '27.34.64.122', 'janampandey2@gmail.com', '2023-09-12 00:11:35', 'Logged Out'),
(398, '20230912.001137', '27.34.64.122', 'janampandey2@gmail.com', '2023-09-12 00:11:37', 'Logged Out'),
(399, '20230912.001143', '27.34.64.122', 'janampandey2@gmail.com', '2023-09-12 00:11:43', 'Logged Out'),
(400, '20230912.002116', '27.34.64.122', 'janampandey2@gmail.com', '2023-09-12 00:21:16', 'Logged Out'),
(401, '20230912.002118', '27.34.64.122', 'janampandey2@gmail.com', '2023-09-12 00:21:18', 'Logged Out'),
(402, '20230912.002119', '27.34.64.122', 'janampandey2@gmail.com', '2023-09-12 00:21:19', 'Logged Out'),
(403, '20230912.002122', '27.34.64.122', 'janampandey2@gmail.com', '2023-09-12 00:21:22', 'Logged Out'),
(404, '20230912.002123', '27.34.64.122', 'janampandey2@gmail.com', '2023-09-12 00:21:23', 'Logged Out'),
(405, '20230912.002124', '27.34.64.122', 'janampandey2@gmail.com', '2023-09-12 00:21:24', 'Logged Out'),
(406, '20230912.002126', '27.34.64.122', 'janampandey2@gmail.com', '2023-09-12 00:21:26', 'Logged Out'),
(407, '20230912.002127', '27.34.64.122', 'janampandey2@gmail.com', '2023-09-12 00:21:27', 'Logged Out'),
(408, '20230912.002128', '27.34.64.122', 'janampandey2@gmail.com', '2023-09-12 00:21:28', 'Logged Out'),
(409, '20230912.002130', '27.34.64.122', 'janampandey2@gmail.com', '2023-09-12 00:21:30', 'Logged Out'),
(410, '20230912.002131', '27.34.64.122', 'janampandey2@gmail.com', '2023-09-12 00:21:31', 'Logged Out'),
(411, '20230912.002133', '27.34.64.122', 'janampandey2@gmail.com', '2023-09-12 00:21:33', 'Logged Out'),
(412, '20230912.002134', '27.34.64.122', 'janampandey2@gmail.com', '2023-09-12 00:21:34', 'Logged Out'),
(413, '20230912.002135', '27.34.64.122', 'janampandey2@gmail.com', '2023-09-12 00:21:35', 'Logged Out'),
(414, '20230912.002136', '27.34.64.122', 'janampandey2@gmail.com', '2023-09-12 00:21:36', 'Logged Out'),
(415, '20230912.002137', '27.34.64.122', 'janampandey2@gmail.com', '2023-09-12 00:21:37', 'Logged Out'),
(416, '20230912.002138', '27.34.64.122', 'janampandey2@gmail.com', '2023-09-12 00:21:38', 'Logged Out'),
(417, '20230912.002139', '27.34.64.122', 'janampandey2@gmail.com', '2023-09-12 00:21:39', 'Logged Out'),
(418, '20230912.002140', '27.34.64.122', 'janampandey2@gmail.com', '2023-09-12 00:21:40', 'Logged Out'),
(419, '20230912.002141', '27.34.64.122', 'janampandey2@gmail.com', '2023-09-12 00:21:41', 'Logged Out'),
(420, '20230912.002142', '27.34.64.122', 'janampandey2@gmail.com', '2023-09-12 00:21:42', 'Logged Out'),
(421, '20230912.002144', '27.34.64.122', 'janampandey2@gmail.com', '2023-09-12 00:21:44', 'Logged Out'),
(422, '20230912.002239', '27.34.64.122', 'janampandey2@gmail.com', '2023-09-12 00:22:39', 'Logged Out'),
(423, '20230912.002240', '27.34.64.122', 'janampandey2@gmail.com', '2023-09-12 00:22:40', 'Logged Out'),
(424, '20230912.002241', '27.34.64.122', 'janampandey2@gmail.com', '2023-09-12 00:22:41', 'Logged Out'),
(425, '20230912.002243', '27.34.64.122', 'janampandey2@gmail.com', '2023-09-12 00:22:43', 'Logged Out'),
(426, '20230912.002244', '27.34.64.122', 'janampandey2@gmail.com', '2023-09-12 00:22:44', 'Logged Out'),
(427, '20230912.002245', '27.34.64.122', 'janampandey2@gmail.com', '2023-09-12 00:22:45', 'Logged Out'),
(428, '20230912.002246', '27.34.64.122', 'janampandey2@gmail.com', '2023-09-12 00:22:46', 'Logged Out'),
(429, '20230912.092220', '27.34.64.8', 'janampandey2@gmail.com', '2023-09-12 09:22:20', 'Logged Out'),
(430, '20230912.092221', '27.34.64.8', 'janampandey2@gmail.com', '2023-09-12 09:22:21', 'Logged Out'),
(431, '20230912.112054', '121.206.166.202.ether.static.wlink.com.np', 'janampandey2@gmail.com', '2023-09-12 11:20:54', 'Logged Out'),
(432, '20230912.112055', '121.206.166.202.ether.static.wlink.com.np', 'janampandey2@gmail.com', '2023-09-12 11:20:55', 'Logged Out'),
(433, '20230912.115903', '121.206.166.202.ether.static.wlink.com.np', 'janampandey2@gmail.com', '2023-09-12 11:59:03', 'Logged Out'),
(434, '20230912.120441', '121.206.166.202.ether.static.wlink.com.np', 'janampandey2@gmail.com', '2023-09-12 12:04:41', 'Logged Out'),
(435, '20230912.120457', '121.206.166.202.ether.static.wlink.com.np', 'janampandey2@gmail.com', '2023-09-12 12:04:57', 'Logged Out'),
(436, '20230912.120901', '121.206.166.202.ether.static.wlink.com.np', 'janampandey2@gmail.com', '2023-09-12 12:09:01', 'Logged Out'),
(437, '20230912.121111', '121.206.166.202.ether.static.wlink.com.np', 'janampandey2@gmail.com', '2023-09-12 12:11:11', 'Logged Out'),
(438, '20230912.121223', '121.206.166.202.ether.static.wlink.com.np', 'janampandey2@gmail.com', '2023-09-12 12:12:23', 'Logged Out'),
(439, '20230912.121516', '121.206.166.202.ether.static.wlink.com.np', 'janampandey2@gmail.com', '2023-09-12 12:15:16', 'Logged Out'),
(440, '20230912.121716', '121.206.166.202.ether.static.wlink.com.np', 'janampandey2@gmail.com', '2023-09-12 12:17:16', 'Logged Out'),
(441, '20230912.121736', '121.206.166.202.ether.static.wlink.com.np', 'janampandey2@gmail.com', '2023-09-12 12:17:36', 'Logged Out'),
(442, '20230912.121757', '121.206.166.202.ether.static.wlink.com.np', 'janampandey2@gmail.com', '2023-09-12 12:17:57', 'Logged Out'),
(443, '20230912.122622', '121.206.166.202.ether.static.wlink.com.np', 'janampandey2@gmail.com', '2023-09-12 12:26:22', 'Logged Out'),
(444, '20230912.123551', '121.206.166.202.ether.static.wlink.com.np', 'janampandey2@gmail.com', '2023-09-12 12:35:51', 'Logged Out'),
(445, '20230912.123645', '121.206.166.202.ether.static.wlink.com.np', 'janampandey2@gmail.com', '2023-09-12 12:36:45', 'Logged Out'),
(446, '20230912.124001', '121.206.166.202.ether.static.wlink.com.np', 'janampandey2@gmail.com', '2023-09-12 12:40:01', 'Logged Out'),
(447, '20230912.130446', '121.206.166.202.ether.static.wlink.com.np', 'admin@gmail.com', '2023-09-12 13:04:46', ''),
(448, '20230912.131258', '121.206.166.202.ether.static.wlink.com.np', 'admin@gmail.com', '2023-09-12 13:12:58', ''),
(449, '20230912.132040', '121.206.166.202.ether.static.wlink.com.np', 'janampandey2@gmail.com', '2023-09-12 13:20:40', 'Logged Out'),
(450, '20230912.132310', '121.206.166.202.ether.static.wlink.com.np', 'janampandey2@gmail.com', '2023-09-12 13:23:10', 'Logged Out'),
(451, '20230912.132348', '121.206.166.202.ether.static.wlink.com.np', 'janampandey2@gmail.com', '2023-09-12 13:23:48', 'Logged Out'),
(452, '20230912.132402', '121.206.166.202.ether.static.wlink.com.np', 'janampandey2@gmail.com', '2023-09-12 13:24:02', 'Logged Out'),
(453, '20230912.132409', '121.206.166.202.ether.static.wlink.com.np', 'janampandey2@gmail.com', '2023-09-12 13:24:09', 'Logged Out'),
(454, '20230912.132442', '121.206.166.202.ether.static.wlink.com.np', 'janampandey2@gmail.com', '2023-09-12 13:24:42', 'Logged Out'),
(455, '20230912.132519', '121.206.166.202.ether.static.wlink.com.np', 'janampandey2@gmail.com', '2023-09-12 13:25:19', 'Logged Out'),
(456, '20230912.132549', '121.206.166.202.ether.static.wlink.com.np', 'janampandey2@gmail.com', '2023-09-12 13:25:49', 'Logged Out'),
(457, '20230912.132609', '121.206.166.202.ether.static.wlink.com.np', 'janampandey2@gmail.com', '2023-09-12 13:26:09', 'Logged Out'),
(458, '20230912.133503', '121.206.166.202.ether.static.wlink.com.np', 'janampandey2@gmail.com', '2023-09-12 13:35:03', 'Logged Out'),
(459, '20230912.163010', '121.206.166.202.ether.static.wlink.com.np', 'janampandey2@gmail.com', '2023-09-12 16:30:10', 'Logged Out'),
(460, '20230912.172519', '121.206.166.202.ether.static.wlink.com.np', 'janampandey2@gmail.com', '2023-09-12 17:25:19', 'Logged Out'),
(461, '20230912.173217', '121.206.166.202.ether.static.wlink.com.np', 'janampandey2@gmail.com', '2023-09-12 17:32:17', 'Logged Out'),
(462, '20230912.173310', '121.206.166.202.ether.static.wlink.com.np', 'janampandey2@gmail.com', '2023-09-12 17:33:10', 'Logged Out'),
(463, '20230912.173449', '121.206.166.202.ether.static.wlink.com.np', 'janampandey2@gmail.com', '2023-09-12 17:34:49', 'Logged Out'),
(464, '20230912.180143', '121.206.166.202.ether.static.wlink.com.np', 'admin@gmail.com', '2023-09-12 18:01:43', ''),
(465, '20230912.180239', '121.206.166.202.ether.static.wlink.com.np', 'janampandey2@gmail.com', '2023-09-12 18:02:39', 'Logged Out'),
(466, '20230912.181608', '116-adsl.ntc.net.np', 'janampandey2@gmail.com', '2023-09-12 18:16:08', 'Logged Out'),
(467, '20230912.203607', '27.34.64.8', 'janampandey2@gmail.com', '2023-09-12 20:36:07', 'Logged Out'),
(468, '20230912.203925', '27.34.64.8', 'janampandey2@gmail.com', '2023-09-12 20:39:25', 'Logged Out'),
(469, '20230912.203949', '27.34.64.8', 'janampandey2@gmail.com', '2023-09-12 20:39:49', 'Logged Out'),
(470, '20230912.204005', '27.34.64.8', 'janampandey2@gmail.com', '2023-09-12 20:40:05', 'Logged Out'),
(471, '20230913.011227', '27.34.64.8', 'janampandey2@gmail.com', '2023-09-13 01:12:27', 'Logged Out'),
(472, '20230913.112533', '121.206.166.202.ether.static.wlink.com.np', 'janampandey2@gmail.com', '2023-09-13 11:25:33', 'Logged Out'),
(473, '20230913.123258', '121.206.166.202.ether.static.wlink.com.np', 'janampandey2@gmail.com', '2023-09-13 12:32:58', 'Logged Out'),
(474, '20230913.134954', '121.206.166.202.ether.static.wlink.com.np', 'admin@gmail.com', '2023-09-13 13:49:54', ''),
(475, '20230913.140204', '121.206.166.202.ether.static.wlink.com.np', 'admin@gmail.com', '2023-09-13 14:02:04', ''),
(476, '20230913.140235', '121.206.166.202.ether.static.wlink.com.np', 'janampandey2@gmail.com', '2023-09-13 14:02:35', 'Logged Out'),
(477, '20230913.140405', '121.206.166.202.ether.static.wlink.com.np', 'kushalb122@gmail.com', '2023-09-13 14:04:05', ''),
(478, '20230913.141145', '121.206.166.202.ether.static.wlink.com.np', 'janampandey2@gmail.com', '2023-09-13 14:11:45', 'Logged Out'),
(479, '20230913.142006', '121.206.166.202.ether.static.wlink.com.np', 'admin@gmail.com', '2023-09-13 14:20:06', '');
INSERT INTO `session_log` (`id`, `session_id`, `server_id`, `user_id`, `date`, `status`) VALUES
(480, '20230913.145314', '121.206.166.202.ether.static.wlink.com.np', 'admin@gmail.com', '2023-09-13 14:53:14', ''),
(481, '20230913.163211', '121.206.166.202.ether.static.wlink.com.np', 'janampandey2@gmail.com', '2023-09-13 16:32:11', 'Logged Out'),
(482, '20230913.163314', '121.206.166.202.ether.static.wlink.com.np', 'admin@gmail.com', '2023-09-13 16:33:14', ''),
(483, '20230913.164431', '121.206.166.202.ether.static.wlink.com.np', 'janampandey2@gmail.com', '2023-09-13 16:44:31', 'Logged Out'),
(484, '20230913.164934', '121.206.166.202.ether.static.wlink.com.np', 'sedu.nepal@gmail.com', '2023-09-13 16:49:34', 'Logged Out'),
(485, '20230913.164957', '121.206.166.202.ether.static.wlink.com.np', 'janampandey2@gmail.com', '2023-09-13 16:49:57', 'Logged Out'),
(486, '20230913.165058', '121.206.166.202.ether.static.wlink.com.np', 'sedu.nepal@gmail.com', '2023-09-13 16:50:58', 'Logged Out'),
(487, '20230913.165317', '121.206.166.202.ether.static.wlink.com.np', 'kushalb122@gmail.com', '2023-09-13 16:53:17', ''),
(488, '20230913.165949', '121.206.166.202.ether.static.wlink.com.np', 'sedu.nepal@gmail.com', '2023-09-13 16:59:49', 'Logged Out'),
(489, '20230913.170839', '121.206.166.202.ether.static.wlink.com.np', 'sedu.nepal@gmail.com', '2023-09-13 17:08:39', 'Logged Out'),
(490, '20230913.170934', '121.206.166.202.ether.static.wlink.com.np', 'sedu.nepal@gmail.com', '2023-09-13 17:09:34', 'Logged Out'),
(491, '20230913.171639', '121.206.166.202.ether.static.wlink.com.np', 'sedu.nepal@gmail.com', '2023-09-13 17:16:39', 'Logged Out'),
(492, '20230913.172036', '121.206.166.202.ether.static.wlink.com.np', 'sedu.nepal@gmail.com', '2023-09-13 17:20:36', 'Logged Out'),
(493, '20230913.174808', '121.206.166.202.ether.static.wlink.com.np', 'sedu.nepal@gmail.com', '2023-09-13 17:48:08', 'Logged Out'),
(494, '20230913.174927', '121.206.166.202.ether.static.wlink.com.np', 'sedu.nepal@gmail.com', '2023-09-13 17:49:27', 'Logged Out'),
(495, '20230913.175052', '121.206.166.202.ether.static.wlink.com.np', 'sedu.nepal@gmail.com', '2023-09-13 17:50:52', 'Logged Out'),
(496, '20230913.175503', '121.206.166.202.ether.static.wlink.com.np', 'sedu.nepal@gmail.com', '2023-09-13 17:55:03', 'Logged Out'),
(497, '20230913.175517', '121.206.166.202.ether.static.wlink.com.np', 'sedu.nepal@gmail.com', '2023-09-13 17:55:17', 'Logged Out'),
(498, '20230913.175553', '121.206.166.202.ether.static.wlink.com.np', 'sedu.nepal@gmail.com', '2023-09-13 17:55:53', 'Logged Out'),
(499, '20230913.175652', '121.206.166.202.ether.static.wlink.com.np', 'kushalb122@gmail.com', '2023-09-13 17:56:52', ''),
(500, '20230913.175717', '121.206.166.202.ether.static.wlink.com.np', 'kushalb122@gmail.com', '2023-09-13 17:57:17', ''),
(501, '20230913.175727', '121.206.166.202.ether.static.wlink.com.np', 'kushalb122@gmail.com', '2023-09-13 17:57:27', ''),
(502, '20230913.175912', '121.206.166.202.ether.static.wlink.com.np', 'kushalb122@gmail.com', '2023-09-13 17:59:12', ''),
(503, '20230913.175949', '121.206.166.202.ether.static.wlink.com.np', 'kushalb122@gmail.com', '2023-09-13 17:59:49', ''),
(504, '20230913.180014', '121.206.166.202.ether.static.wlink.com.np', 'sedu.nepal@gmail.com', '2023-09-13 18:00:14', 'Logged Out'),
(505, '20230913.180043', '121.206.166.202.ether.static.wlink.com.np', 'sedu.nepal@gmail.com', '2023-09-13 18:00:43', 'Logged Out'),
(506, '20230913.180049', '121.206.166.202.ether.static.wlink.com.np', 'kushalb122@gmail.com', '2023-09-13 18:00:49', ''),
(507, '20230913.180123', '121.206.166.202.ether.static.wlink.com.np', 'kushalb122@gmail.com', '2023-09-13 18:01:23', ''),
(508, '20230913.180202', '121.206.166.202.ether.static.wlink.com.np', 'kushalb122@gmail.com', '2023-09-13 18:02:02', ''),
(509, '20230913.180214', '121.206.166.202.ether.static.wlink.com.np', 'kushalb122@gmail.com', '2023-09-13 18:02:14', ''),
(510, '20230913.180236', '121.206.166.202.ether.static.wlink.com.np', 'sedu.nepal@gmail.com', '2023-09-13 18:02:36', 'Logged Out'),
(511, '20230913.180352', '121.206.166.202.ether.static.wlink.com.np', 'sedu.nepal@gmail.com', '2023-09-13 18:03:52', 'Logged Out'),
(512, '20230913.180401', '121.206.166.202.ether.static.wlink.com.np', 'sedu.nepal@gmail.com', '2023-09-13 18:04:01', 'Logged Out'),
(513, '20230913.180546', '121.206.166.202.ether.static.wlink.com.np', 'sedu.nepal@gmail.com', '2023-09-13 18:05:46', 'Logged Out'),
(514, '20230913.211316', '27.34.64.80', 'sedu.nepal@gmail.com', '2023-09-13 21:13:16', 'Logged Out'),
(515, '20230914.015110', '27.34.64.80', 'sedu.nepal@gmail.com', '2023-09-14 01:51:10', 'Logged Out'),
(516, '20230914.112210', '121.206.166.202.ether.static.wlink.com.np', 'sedu.nepal@gmail.com', '2023-09-14 11:22:10', 'Logged Out'),
(517, '20230914.112624', '121.206.166.202.ether.static.wlink.com.np', 'sedu.nepal@gmail.com', '2023-09-14 11:26:24', 'Logged Out'),
(518, '20230914.124548', '27.34.30.209', 'sedu.nepal@gmail.com', '2023-09-14 12:45:48', 'Logged Out'),
(519, '20230914.174740', '121.206.166.202.ether.static.wlink.com.np', 'sedu.nepal@gmail.com', '2023-09-14 17:47:40', 'Logged Out'),
(520, '20230914.195715', '27.34.64.80', 'sedu.nepal@gmail.com', '2023-09-14 19:57:15', 'Logged Out'),
(521, '20230914.195859', '27.34.64.80', 'sedu.nepal@gmail.com', '2023-09-14 19:58:59', 'Logged Out'),
(522, '20230917.225446', '27.34.64.202', 'sedu.nepal@gmail.com', '2023-09-17 22:54:46', 'Logged Out'),
(523, '20230918.203335', '27.34.64.161', 'sedu.nepal@gmail.com', '2023-09-18 20:33:35', 'Logged Out'),
(524, '20230918.203603', '27.34.64.161', 'sedu.nepal@gmail.com', '2023-09-18 20:36:03', 'Logged Out'),
(525, '20230918.203641', '27.34.64.161', 'kushalb122@gmail.com', '2023-09-18 20:36:41', ''),
(526, '20230920.204737', '27.34.64.75', 'sedu.nepal@gmail.com', '2023-09-20 20:47:37', 'Logged Out'),
(527, '20230920.205902', '27.34.64.75', 'janampandey2@gmail.com', '2023-09-20 20:59:02', 'Logged Out'),
(528, '20230921.121929', '121.206.166.202.ether.static.wlink.com.np', 'sedu.nepal@gmail.com', '2023-09-21 12:19:29', 'Logged Out'),
(529, '20230927.130343', '27.34.64.249', 'janampandey2@gmail.com', '2023-09-27 13:03:43', 'Logged Out'),
(530, '20230927.130538', '27.34.64.249', 'sedu.nepal@gmail.com', '2023-09-27 13:05:38', 'Logged Out'),
(531, '20231120.104309', '121.206.166.202.ether.static.wlink.com.np', 'sedu.nepal@gmail.com', '2023-11-20 10:43:09', 'Logged Out'),
(532, '20231126.130702', '121.206.166.202.ether.static.wlink.com.np', 'sedu.nepal@gmail.com', '2023-11-26 13:07:02', 'Logged Out'),
(533, '20231126.131021', '121.206.166.202.ether.static.wlink.com.np', 'reception@gmail.com', '2023-11-26 13:10:21', ''),
(534, '20231126.131157', '121.206.166.202.ether.static.wlink.com.np', 'sedu.nepal@gmail.com', '2023-11-26 13:11:57', 'Logged Out'),
(535, '20231126.131329', '121.206.166.202.ether.static.wlink.com.np', 'sedu.nepal@gmail.com', '2023-11-26 13:13:29', 'Logged Out'),
(536, '20231126.131352', '121.206.166.202.ether.static.wlink.com.np', 'sedu.nepal@gmail.com', '2023-11-26 13:13:52', 'Logged Out'),
(537, '20231204.105526', '121.206.166.202.ether.static.wlink.com.np', 'sedu.nepal@gmail.com', '2023-12-04 10:55:26', 'Logged Out'),
(538, '20231204.105600', '121.206.166.202.ether.static.wlink.com.np', 'reception@gmail.com', '2023-12-04 10:56:00', ''),
(539, '20231207.105246', '121.206.166.202.ether.static.wlink.com.np', 'reception@gmail.com', '2023-12-07 10:52:46', ''),
(540, '20240103.160547', '27.34.76.208', 'sedu.nepal@gmail.com', '2024-01-03 16:05:47', 'Logged Out'),
(541, '20240107.140348', '27.34.76.208', 'sedu.nepal@gmail.com', '2024-01-07 14:03:48', 'Logged Out'),
(542, '20240107.140530', '27.34.76.208', 'sedu.nepal@gmail.com', '2024-01-07 14:05:30', 'Logged Out'),
(543, '20240108.123927', '27.34.76.208', 'sedu.nepal@gmail.com', '2024-01-08 12:39:27', 'Logged Out'),
(544, '20240108.154810', '27.34.76.208', 'sedu.nepal@gmail.com', '2024-01-08 15:48:10', 'Logged Out'),
(545, '20240207.131719', '78-adsl.ntc.net.np', 'sedu.nepal@gmail.com', '2024-02-07 13:17:19', 'Logged Out'),
(546, '20240207.223204', '27.34.64.37', 'sedu.nepal@gmail.com', '2024-02-07 22:32:04', 'Logged Out'),
(547, '20240207.223211', '27.34.64.37', 'sedu.nepal@gmail.com', '2024-02-07 22:32:11', 'Logged Out'),
(548, '20240207.223230', '27.34.64.37', 'sedu.nepal@gmail.com', '2024-02-07 22:32:30', 'Logged Out'),
(549, '20240207.224934', '27.34.64.37', 'sedu.nepal@gmail.com', '2024-02-07 22:49:34', 'Logged Out'),
(550, '20240208.013035', '27.34.64.37', 'reception@gmail.com', '2024-02-08 01:30:35', ''),
(551, '20240208.013120', '27.34.64.37', 'sedu.nepal@gmail.com', '2024-02-08 01:31:20', 'Logged Out'),
(552, '20240208.023748', '27.34.64.37', 'reception@gmail.com', '2024-02-08 02:37:48', ''),
(553, '20240208.023808', '27.34.64.37', 'sedu.nepal@gmail.com', '2024-02-08 02:38:08', 'Logged Out'),
(554, '20240208.150931', '27.34.65.158', 'reception@gmail.com', '2024-02-08 15:09:31', ''),
(555, '20240208.151107', '27.34.65.180', 'sedu.nepal@gmail.com', '2024-02-08 15:11:07', 'Logged Out'),
(556, '20240208.153658', '27.34.65.158', 'reception@gmail.com', '2024-02-08 15:36:58', ''),
(557, '20240208.153852', '27.34.65.158', 'sedu.nepal@gmail.com', '2024-02-08 15:38:52', 'Logged Out'),
(558, '20240208.154612', '27.34.65.158', 'reception@gmail.com', '2024-02-08 15:46:12', ''),
(559, '20240208.185332', '27.34.64.108', 'sedu.nepal@gmail.com', '2024-02-08 18:53:32', 'Logged Out'),
(560, '20240208.185335', '27.34.64.108', 'sedu.nepal@gmail.com', '2024-02-08 18:53:35', 'Logged Out'),
(561, '20240208.185337', '27.34.64.108', 'sedu.nepal@gmail.com', '2024-02-08 18:53:37', 'Logged Out'),
(562, '20240208.185338', '27.34.64.108', 'sedu.nepal@gmail.com', '2024-02-08 18:53:38', 'Logged Out'),
(563, '20240208.185342', '27.34.64.108', 'sedu.nepal@gmail.com', '2024-02-08 18:53:42', 'Logged Out'),
(564, '20240208.185344', '27.34.64.108', 'sedu.nepal@gmail.com', '2024-02-08 18:53:44', 'Logged Out'),
(565, '20240208.185403', '27.34.64.108', 'sedu.nepal@gmail.com', '2024-02-08 18:54:03', 'Logged Out'),
(566, '20240208.190007', '27.34.64.108', 'janampandey2@gmail.com', '2024-02-08 19:00:07', 'Logged Out'),
(567, '20240208.190023', '27.34.64.108', 'sedu.nepal@gmail.com', '2024-02-08 19:00:23', 'Logged Out'),
(568, '20240208.190056', '27.34.64.108', 'janampandey2@gmail.com', '2024-02-08 19:00:56', 'Logged Out'),
(569, '20240208.223752', '27.34.64.108', 'sedu.nepal@gmail.com', '2024-02-08 22:37:52', 'Logged Out'),
(570, '20240208.225914', '27.34.64.108', 'sedu.nepal@gmail.com', '2024-02-08 22:59:14', 'Logged Out'),
(571, '20240209.001803', '27.34.64.108', 'janampandey2@gmail.com', '2024-02-09 00:18:03', 'Logged Out'),
(572, '20240209.002643', '27.34.64.108', 'janampandey2@gmail.com', '2024-02-09 00:26:43', 'Logged Out'),
(573, '20240209.003438', '27.34.64.108', 'sedu.nepal@gmail.com', '2024-02-09 00:34:38', 'Logged Out'),
(574, '20240209.010621', '27.34.64.108', 'sedu.nepal@gmail.com', '2024-02-09 01:06:21', 'Logged Out'),
(575, '20240209.011442', '27.34.64.108', 'janampandey2@gmail.com', '2024-02-09 01:14:42', 'Logged Out'),
(576, '20240209.115229', '27.34.64.26', 'sedu.nepal@gmail.com', '2024-02-09 11:52:29', 'Logged Out'),
(577, '20240209.135304', '49.126.251.65', 'sedu.nepal@gmail.com', '2024-02-09 13:53:04', 'Logged Out'),
(578, '20240209.143031', '27.34.65.144', 'janampandey2@gmail.com', '2024-02-09 14:30:31', 'Logged Out'),
(579, '20240209.143130', '27.34.65.144', 'reception@gmail.com', '2024-02-09 14:31:30', ''),
(580, '20240209.145352', '27.34.65.144', 'reception@gmail.com', '2024-02-09 14:53:52', ''),
(581, '20240209.152236', '27.34.65.180', 'sedu.nepal@gmail.com', '2024-02-09 15:22:36', 'Logged Out'),
(582, '20240209.153814', '27.34.65.180', 'sedu.nepal@gmail.com', '2024-02-09 15:38:14', 'Logged Out'),
(583, '20240209.154511', '27.34.65.144', 'reception@gmail.com', '2024-02-09 15:45:11', ''),
(584, '20240209.173841', '27.34.64.27', 'sedu.nepal@gmail.com', '2024-02-09 17:38:41', 'Logged Out'),
(585, '20240209.200300', '27.34.64.27', 'sedu.nepal@gmail.com', '2024-02-09 20:03:00', 'Logged Out'),
(586, '20240209.220113', '27.34.64.27', 'janampandey2@gmail.com', '2024-02-09 22:01:13', 'Logged Out'),
(587, '20240211.105943', '27.34.64.23', 'sedu.nepal@gmail.com', '2024-02-11 10:59:43', 'Logged Out'),
(588, '20240211.160134', '49.126.251.57', 'sedu.nepal@gmail.com', '2024-02-11 16:01:34', 'Logged Out'),
(589, '20240211.163114', '27.34.65.180', 'sedu.nepal@gmail.com', '2024-02-11 16:31:14', 'Logged Out'),
(590, '20240211.182433', '49.126.251.57', 'sedu.nepal@gmail.com', '2024-02-11 18:24:33', 'Logged Out'),
(591, '20240212.124546', '27.34.65.180', 'sedu.nepal@gmail.com', '2024-02-12 12:45:46', 'Logged Out'),
(592, '20240212.135718', '27.34.65.180', 'sedu.nepal@gmail.com', '2024-02-12 13:57:18', 'Logged Out'),
(593, '20240212.135935', '27.34.65.180', 'sedu.nepal@gmail.com', '2024-02-12 13:59:35', 'Logged Out'),
(594, '20240212.222924', '27.34.64.95', 'sedu.nepal@gmail.com', '2024-02-12 22:29:24', 'Logged Out'),
(595, '20240213.143837', '27.34.64.16', 'sedu.nepal@gmail.com', '2024-02-13 14:38:37', 'Logged Out'),
(596, '20240214.194923', '27.34.64.70', 'sedu.nepal@gmail.com', '2024-02-14 19:49:23', 'Logged Out'),
(597, '20240214.203647', '27.34.64.70', 'reception@gmail.com', '2024-02-14 20:36:47', ''),
(598, '20240214.203714', '27.34.64.70', 'janampandey2@gmail.com', '2024-02-14 20:37:14', 'Logged Out'),
(599, '20240214.204112', '27.34.64.70', 'janampandey2@gmail.com', '2024-02-14 20:41:12', 'Logged Out'),
(600, '20240214.204142', '27.34.64.70', 'reception@gmail.com', '2024-02-14 20:41:42', ''),
(601, '20240214.204252', '27.34.64.70', 'janampandey2@gmail.com', '2024-02-14 20:42:52', 'Logged Out'),
(602, '20240214.210025', '27.34.64.70', 'sedu.nepal@gmail.com', '2024-02-14 21:00:25', 'Logged Out'),
(604, '20240214.211401', '27.34.64.70', 'janampandey2@gmail.com', '2024-02-14 21:14:01', 'Logged Out'),
(608, '20240214.222258', '27.34.64.70', 'janampandey2@gmail.com', '2024-02-14 22:22:58', 'Logged Out'),
(609, '20240214.230354', '27.34.64.70', 'janampandey2@gmail.com', '2024-02-14 23:03:54', 'Logged Out'),
(1024, '20240214.232606', '27.34.64.70', 'janampandey2@gmail.com', '2024-02-14 23:26:06', 'Logged Out'),
(1025, '20240214.232715', '27.34.64.70', 'sedu.nepal@gmail.com', '2024-02-14 23:27:15', 'Logged Out'),
(1026, '20240214.233602', '27.34.64.70', 'sedu.nepal@gmail.com', '2024-02-14 23:36:02', 'Logged Out'),
(1028, '20240214.235117', '27.34.64.70', 'janampandey2@gmail.com', '2024-02-14 23:51:17', 'Logged Out'),
(1029, '20240214.235541', '27.34.64.70', 'janampandey2@gmail.com', '2024-02-14 23:55:41', 'Logged Out'),
(1030, '20240214.235731', '27.34.64.70', 'sedu.nepal@gmail.com', '2024-02-14 23:57:31', 'Logged Out'),
(1031, '20240215.000235', '27.34.64.70', 'sedu.nepal@gmail.com', '2024-02-15 00:02:35', 'Logged Out'),
(1032, '20240215.001143', '27.34.64.70', 'janampandey2@gmail.com', '2024-02-15 00:11:43', 'Logged Out'),
(1033, '20240215.001328', '27.34.64.70', 'janampandey2@gmail.com', '2024-02-15 00:13:28', 'Logged Out'),
(1034, '20240215.001349', '27.34.64.70', 'janampandey2@gmail.com', '2024-02-15 00:13:49', 'Logged Out'),
(1035, '20240215.001901', '27.34.64.70', 'sedu.nepal@gmail.com', '2024-02-15 00:19:01', 'Logged Out'),
(1036, '20240215.002026', '27.34.64.70', 'reception@gmail.com', '2024-02-15 00:20:26', 'Logged Out'),
(1037, '20240215.002617', '27.34.64.70', 'janampandey2@gmail.com', '2024-02-15 00:26:17', 'Logged Out'),
(1038, '20240215.003607', '27.34.64.70', 'janampandey2@gmail.com', '2024-02-15 00:36:07', 'Logged Out'),
(1039, '20240215.003913', '27.34.64.70', 'janampandey2@gmail.com', '2024-02-15 00:39:13', 'Logged Out'),
(1040, '20240215.004053', '27.34.64.70', 'janampandey2@gmail.com', '2024-02-15 00:40:53', 'Logged Out'),
(1041, '20240215.004144', '27.34.64.70', 'janampandey2@gmail.com', '2024-02-15 00:41:44', 'Logged Out'),
(1042, '20240215.004324', '27.34.64.70', 'reception@gmail.com', '2024-02-15 00:43:24', 'Logged Out'),
(1043, '20240215.004402', '27.34.64.70', 'reception@gmail.com', '2024-02-15 00:44:02', 'Logged Out'),
(1044, '20240215.005102', '27.34.64.70', 'janampandey2@gmail.com', '2024-02-15 00:51:02', 'Logged Out'),
(1045, '20240215.005559', '27.34.64.70', 'janampandey2@gmail.com', '2024-02-15 00:55:59', 'Logged Out'),
(1046, '20240215.010924', '27.34.64.70', 'janampandey2@gmail.com', '2024-02-15 01:09:24', 'Logged Out'),
(1047, '20240215.010934', '27.34.64.70', 'janampandey2@gmail.com', '2024-02-15 01:09:34', 'Logged Out'),
(1048, '20240215.011015', '27.34.64.70', 'janampandey2@gmail.com', '2024-02-15 01:10:15', 'Logged Out'),
(1049, '20240215.011024', '27.34.64.70', 'janampandey2@gmail.com', '2024-02-15 01:10:24', 'Logged Out'),
(1050, '20240215.011143', '27.34.64.70', 'janampandey2@gmail.com', '2024-02-15 01:11:43', 'Logged Out'),
(1051, '20240215.011232', '27.34.64.70', 'janampandey2@gmail.com', '2024-02-15 01:12:32', 'Logged Out'),
(1052, '20240215.012002', '27.34.64.70', 'janampandey2@gmail.com', '2024-02-15 01:20:02', 'Logged Out'),
(1053, '20240215.012057', '27.34.64.70', 'janampandey2@gmail.com', '2024-02-15 01:20:57', 'Logged Out'),
(1054, '20240215.012108', '27.34.64.70', 'janampandey2@gmail.com', '2024-02-15 01:21:08', 'Logged Out'),
(1055, '20240215.012619', '27.34.64.70', 'janampandey2@gmail.com', '2024-02-15 01:26:19', 'Logged Out'),
(1056, '20240215.012743', '27.34.64.70', 'janampandey2@gmail.com', '2024-02-15 01:27:43', 'Logged Out'),
(1057, '20240215.012845', '27.34.64.70', 'reception@gmail.com', '2024-02-15 01:28:45', 'Logged Out'),
(1058, '20240215.013140', '27.34.64.70', 'reception@gmail.com', '2024-02-15 01:31:40', 'Logged Out'),
(1059, '20240215.013548', '27.34.64.70', 'reception@gmail.com', '2024-02-15 01:35:48', 'Logged Out'),
(1060, '20240215.013759', '27.34.64.70', 'janampandey2@gmail.com', '2024-02-15 01:37:59', 'Logged Out'),
(1061, '20240215.014000', '27.34.64.70', 'janampandey2@gmail.com', '2024-02-15 01:40:00', 'Logged Out'),
(1062, '20240215.014105', '27.34.64.70', 'reception@gmail.com', '2024-02-15 01:41:05', 'Logged Out'),
(1063, '20240215.014138', '27.34.64.70', 'reception@gmail.com', '2024-02-15 01:41:38', 'Logged Out'),
(1064, '20240215.141644', '27.34.65.145', 'janampandey2@gmail.com', '2024-02-15 14:16:44', 'Logged Out'),
(1065, '20240215.142038', '27.34.65.145', 'reception@gmail.com', '2024-02-15 14:20:38', 'Logged Out'),
(1066, '20240215.152221', '27.34.65.180', 'sedu.nepal@gmail.com', '2024-02-15 15:22:21', 'Logged Out'),
(1067, '20240215.155310', '27.34.65.180', 'sedu.nepal@gmail.com', '2024-02-15 15:53:10', 'Logged Out'),
(1068, '20240215.191048', '27.34.64.2', 'janampandey2@gmail.com', '2024-02-15 19:10:48', 'Logged Out'),
(1069, '20240215.191538', '27.34.64.2', 'janampandey2@gmail.com', '2024-02-15 19:15:38', 'Logged Out'),
(1070, '20240215.192426', '27.34.64.2', 'janampandey2@gmail.com', '2024-02-15 19:24:26', 'Logged Out'),
(1071, '20240215.192614', '27.34.64.2', 'janampandey2@gmail.com', '2024-02-15 19:26:14', 'Logged Out'),
(1072, '20240215.192847', '27.34.64.2', 'janampandey2@gmail.com', '2024-02-15 19:28:47', 'Logged Out'),
(1073, '20240215.193034', '27.34.64.2', 'janampandey2@gmail.com', '2024-02-15 19:30:34', 'Logged Out'),
(1074, '20240215.193527', '27.34.64.2', 'reception@gmail.com', '2024-02-15 19:35:27', 'Logged Out'),
(1075, '20240215.193736', '27.34.64.2', 'janampandey2@gmail.com', '2024-02-15 19:37:36', 'Logged Out'),
(1076, '20240215.200525', '27.34.64.2', 'janampandey2@gmail.com', '2024-02-15 20:05:25', 'Logged Out'),
(1077, '20240216.161201', '27.34.64.94', 'janampandey2@gmail.com', '2024-02-16 16:12:01', 'Logged Out'),
(1078, '20240216.164445', '27.34.64.94', 'janampandey2@gmail.com', '2024-02-16 16:44:45', 'Logged Out'),
(1079, '20240216.182628', '27.34.64.94', 'janampandey2@gmail.com', '2024-02-16 18:26:28', 'Logged Out'),
(1080, '20240216.185221', '27.34.64.94', 'janampandey2@gmail.com', '2024-02-16 18:52:21', 'Logged Out'),
(1081, '20240218.123706', '27.34.65.180', 'janampandey2@gmail.com', '2024-02-18 12:37:06', 'Logged Out'),
(1082, '20240218.130603', '27.34.65.180', 'janampandey2@gmail.com', '2024-02-18 13:06:03', 'Logged Out'),
(1083, '20240218.131646', '27.34.65.180', 'janampandey2@gmail.com', '2024-02-18 13:16:46', 'Logged Out'),
(1084, '20240218.131844', '27.34.65.180', 'reception@gmail.com', '2024-02-18 13:18:44', 'Logged Out'),
(1085, '20240218.132939', '27.34.65.180', 'reception@gmail.com', '2024-02-18 13:29:39', 'Logged Out'),
(1086, '20240218.134151', '27.34.65.180', 'reception@gmail.com', '2024-02-18 13:41:51', 'Logged Out'),
(1087, '20240218.135208', '27.34.65.180', 'janampandey2@gmail.com', '2024-02-18 13:52:08', 'Logged Out'),
(1088, '20240221.201656', '27.34.64.121', 'janampandey2@gmail.com', '2024-02-21 20:16:56', 'Logged Out'),
(1089, '20240222.125611', '27.34.65.180', 'reception@gmail.com', '2024-02-22 12:56:11', 'Logged Out'),
(1090, '20240222.125706', '27.34.65.180', 'sedu.nepal@gmail.com', '2024-02-22 12:57:06', 'Logged Out'),
(1091, '20240222.140049', '27.34.65.180', 'sedu.nepal@gmail.com', '2024-02-22 14:00:49', 'Logged Out'),
(1092, '20240222.150110', '27.34.65.180', 'sedu.nepal@gmail.com', '2024-02-22 15:01:10', 'Logged Out'),
(1093, '20240224.115410', '27.34.64.53', 'janampandey2@gmail.com', '2024-02-24 11:54:10', 'Logged Out'),
(1094, '20240225.113032', '27.34.65.221', 'reception@gmail.com', '2024-02-25 11:30:32', 'Logged Out'),
(1095, '20240225.130759', '27.34.65.221', 'sedu.nepal@gmail.com', '2024-02-25 13:07:59', 'Logged Out'),
(1096, '20240226.190605', '27.34.64.48', 'janampandey2@gmail.com', '2024-02-26 19:06:05', 'Logged Out'),
(1097, '20240227.153149', '27.34.65.221', 'sedu.nepal@gmail.com', '2024-02-27 15:31:49', 'Online'),
(1098, '20240302.160900', '27.34.64.42', 'janampandey2@gmail.com', '2024-03-02 16:09:00', 'Logged Out'),
(1099, '20240304.145057', '27.34.65.211', 'janampandey2@gmail.com', '2024-03-04 14:50:57', 'Online'),
(1100, '20240308.002240', '27.34.64.145', 'sedu.nepal@gmail.com', '2024-03-08 00:22:40', 'Online'),
(1101, '20240402.124310', '27.34.65.234', 'sedu.nepal@gmail.com', '2024-04-02 12:43:10', 'Logged Out'),
(1102, '20240409.200952', '103.10.28.216', 'sedu.nepal@gmail.com', '2024-04-09 20:09:52', 'Logged Out'),
(1103, '20240411.143003', '27.34.65.220', 'reception@gmail.com', '2024-04-11 14:30:03', 'Logged Out'),
(1104, '20240411.151812', '27.34.65.220', 'reception@gmail.com', '2024-04-11 15:18:12', 'Logged Out'),
(1105, '20240411.151834', '27.34.65.220', 'sedu.nepal@gmail.com', '2024-04-11 15:18:34', 'Logged Out'),
(1106, '20240414.154531', '27.34.65.220', 'sedu.nepal@gmail.com', '2024-04-14 15:45:31', 'Online');

-- --------------------------------------------------------

--
-- Table structure for table `staffs`
--

CREATE TABLE `staffs` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `country` varchar(100) NOT NULL,
  `designation` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `status_flag` char(1) DEFAULT NULL,
  `ccode` varchar(8) NOT NULL,
  `cby` varchar(100) NOT NULL,
  `cdate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staffs`
--

INSERT INTO `staffs` (`id`, `name`, `address`, `mobile`, `email`, `country`, `designation`, `photo`, `status_flag`, `ccode`, `cby`, `cdate`) VALUES
(1, 'Kiran Karki', 'Kathmandu', '9860852251', 'kirankarki9816@gmail.com', 'Nepal', '5', 'kiran@gmail.com.jpg', 'L', '001', 'janampandey2@gmail.com', '2023-09-08 22:05:54'),
(2, 'Madhav Thapaliya', 'Kathmandu', '9851040786', 'madhav.sunriseconsultancy@gmail.com', 'Nepal', '6', '', 'W', '001', 'sedu.nepal@gmail.com', '2024-02-08 15:40:21'),
(3, 'Binod Kandel', 'Kathmandu', '9851002521', 'sedu.nepal@gmail.com', 'Nepal', '6', '', 'W', '001', 'sedu.nepal@gmail.com', '2024-02-08 15:41:28'),
(4, 'Alisha Basnet', 'Kathmandu', '9817365829', 'alishabasnet245@gmail.com', 'Nepal', '4', '', 'L', '001', 'sedu.nepal@gmail.com', '2024-02-08 15:42:22'),
(5, 'Pradip Timsina', 'Kathmandu', '9856017621', 'thinktanktimsinapradip1@gmail.com', 'Nepal', '2', '', 'W', '001', 'sedu.nepal@gmail.com', '2024-02-08 15:43:30'),
(6, 'Vijaya Timsina', 'Kathmandu', '9851038992', 'sedu.nepal@gmail.com', 'Nepal', '6', '', 'W', '001', 'sedu.nepal@gmail.com', '2024-02-08 15:44:30'),
(7, 'Santoshi Khatri', 'Kathmandu', '9818961763', 'sedu.nepal@gmail.com', 'Nepal', '3', '', 'W', '001', 'sedu.nepal@gmail.com', '2024-02-08 15:45:16'),
(8, 'Binita Khatri', 'Swayambhu, Kathmandu', '9860951676', 'binitakhatri657@gmail.com', 'Nepal', '4', '', 'W', '001', 'sedu.nepal@gmail.com', '2024-02-22 12:58:34');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `password` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_bin NOT NULL,
  `name` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_bin NOT NULL,
  `address` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_bin NOT NULL,
  `mobile` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_bin NOT NULL,
  `email` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_bin NOT NULL,
  `country` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_bin DEFAULT NULL,
  `designation` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_bin DEFAULT NULL,
  `photo` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_bin DEFAULT NULL,
  `user_flag` char(2) CHARACTER SET utf8mb3 COLLATE utf8mb3_bin NOT NULL,
  `status_flag` char(1) CHARACTER SET utf8mb3 COLLATE utf8mb3_bin DEFAULT NULL,
  `ccode` varchar(8) CHARACTER SET utf8mb3 COLLATE utf8mb3_bin NOT NULL,
  `cby` varchar(30) CHARACTER SET utf8mb3 COLLATE utf8mb3_bin NOT NULL,
  `cdate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `password`, `name`, `address`, `mobile`, `email`, `country`, `designation`, `photo`, `user_flag`, `status_flag`, `ccode`, `cby`, `cdate`) VALUES
(2, '21232f297a57a5a743894a0e4a801fc3', 'Janam Pandey', 'Kathmandu', '9866077949', 'janampandey2@gmail.com', 'Nepal', '7', 'janampandey2@gmail.com.jpg', 'SA', 'Y', '001', 'admin@gmail.com', '2023-09-05 17:49:55'),
(6, '21232f297a57a5a743894a0e4a801fc3', 'Madhav Thapaliya', 'Kathmandu', '9851040786', 'sedu.nepal@gmail.com', 'Nepal', '1', 'sedu.nepal@gmail.com.jpg', 'SA', 'Y', '001', 'janampandey2@gmail.com', '2023-09-13 16:46:25'),
(7, '21232f297a57a5a743894a0e4a801fc3', 'Reception', 'Kathmandu', '01-5330803', 'reception@gmail.com', 'Nepal', '4', '', 'R', 'Y', '001', 'sedu.nepal@gmail.com', '2023-11-26 13:08:45');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `application_status`
--
ALTER TABLE `application_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `designation`
--
ALTER TABLE `designation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `new_students`
--
ALTER TABLE `new_students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `previleges`
--
ALTER TABLE `previleges`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `session_log`
--
ALTER TABLE `session_log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staffs`
--
ALTER TABLE `staffs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `application_status`
--
ALTER TABLE `application_status`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=240;

--
-- AUTO_INCREMENT for table `designation`
--
ALTER TABLE `designation`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `new_students`
--
ALTER TABLE `new_students`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `previleges`
--
ALTER TABLE `previleges`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=162;

--
-- AUTO_INCREMENT for table `session_log`
--
ALTER TABLE `session_log`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1107;

--
-- AUTO_INCREMENT for table `staffs`
--
ALTER TABLE `staffs`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
