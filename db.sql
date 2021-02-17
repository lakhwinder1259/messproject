-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 06, 2015 at 05:19 AM
-- Server version: 5.0.45
-- PHP Version: 5.2.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `gndphostel`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendence`
--

CREATE TABLE IF NOT EXISTS `attendence` (
  `Token` varchar(10) NOT NULL,
  `Date` date NOT NULL,
  `Attendence` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendence`
--


-- --------------------------------------------------------

--
-- Table structure for table `fri_diet`
--

CREATE TABLE IF NOT EXISTS `fri_diet` (
  `day` varchar(50) NOT NULL,
  `meal_time` varchar(50) NOT NULL,
  `food_items` varchar(10000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fri_diet`
--

INSERT INTO `fri_diet` (`day`, `meal_time`, `food_items`) VALUES
('friday', 'breakfast', 'paneer bhurji + parontha + chaa'),
('friday', 'lunch', 'kari pakora + chawal + roti '),
('friday', 'dinner', 'mix mahan de daal + channe de daal + roti + suke allu + custurd  ');

-- --------------------------------------------------------

--
-- Table structure for table `itementry`
--

CREATE TABLE IF NOT EXISTS `itementry` (
  `item_code` varchar(255) NOT NULL,
  `item_name` varchar(50) NOT NULL,
  `quantity` varchar(20) NOT NULL,
  `cost` double NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY  (`item_code`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `itementry`
--

INSERT INTO `itementry` (`item_code`, `item_name`, `quantity`, `cost`, `date`) VALUES
('101', 'abc', '100', 0, '2014-11-20'),
('102', 'ad', '100', 500, '2014-11-20'),
('200', 'asd', '45', 456, '2014-11-19'),
('a102', 'xyz', '22', 150, '2014-11-13'),
('a103', 'asd', '35', 500, '2014-11-15');

-- --------------------------------------------------------

--
-- Table structure for table `itemissue`
--

CREATE TABLE IF NOT EXISTS `itemissue` (
  `id` int(25) NOT NULL auto_increment,
  `item_code` varchar(255) NOT NULL,
  `quantity` varchar(20) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `itemissue`
--

INSERT INTO `itemissue` (`id`, `item_code`, `quantity`, `date`) VALUES
(1, '0', '12', '2014-11-15'),
(3, 'a101', '5', '2014-11-11'),
(4, 'a101', '2', '0000-00-00'),
(5, 'a101', '7', '2014-11-11'),
(6, 'a102', '15', '2014-11-11'),
(7, 'a103', '25', '2014-11-15'),
(8, '102', '50', '2014-11-20'),
(9, '102', '100', '2014-11-20'),
(10, '102', '456', '2014-11-04');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE IF NOT EXISTS `items` (
  `item_code` int(5) NOT NULL,
  `item_name` varchar(30) NOT NULL,
  PRIMARY KEY  (`item_name`),
  UNIQUE KEY `item_name` (`item_name`),
  UNIQUE KEY `item_code` (`item_code`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`item_code`, `item_name`) VALUES
(100, 'allu'),
(101, 'bhindi'),
(102, 'paneer'),
(103, 'palak'),
(200, 'kanak_atta'),
(201, 'makii_atta'),
(202, 'besan'),
(203, 'sooji'),
(300, 'rajma'),
(301, 'white_channa'),
(302, 'daal_moth'),
(303, 'black_channa'),
(304, 'channa_daal'),
(305, 'black_daal'),
(306, 'chawal'),
(400, 'tamatar'),
(401, 'pyaaz'),
(402, 'adrak'),
(403, 'lehsun'),
(404, 'kali_mirch'),
(405, 'laal_mirch'),
(406, 'garam_masala'),
(407, 'dhaniya'),
(408, 'daalcheeni'),
(500, 'refind_ghee'),
(501, 'desi_ghee'),
(502, 'sarson_tel'),
(600, 'milk'),
(601, 'butter'),
(602, 'dahi');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id` int(20) NOT NULL auto_increment,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `mon_diet`
--

CREATE TABLE IF NOT EXISTS `mon_diet` (
  `day` varchar(50) NOT NULL,
  `meal_time` varchar(50) NOT NULL,
  `food_items` varchar(10000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mon_diet`
--

INSERT INTO `mon_diet` (`day`, `meal_time`, `food_items`) VALUES
('monday', 'breakfast', 'allu sabzi(dry) + dahi + simple prontha + chaa'),
('monday', 'lunch', 'rajmaha + chawal + dahi + roti'),
('monday', 'dinner', 'daal mahani + rajmaha + bhindi +  roti + kheer');

-- --------------------------------------------------------

--
-- Table structure for table `personal_info`
--

CREATE TABLE IF NOT EXISTS `personal_info` (
  `serial_no` int(7) NOT NULL,
  `roll_no` int(7) NOT NULL,
  `room_no` int(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `f_name` varchar(30) NOT NULL,
  `year` int(2) NOT NULL,
  `course` varchar(20) NOT NULL,
  `ph_no` int(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `branch` varchar(20) NOT NULL,
  `token` varchar(10) NOT NULL,
  PRIMARY KEY  (`serial_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `personal_info`
--

INSERT INTO `personal_info` (`serial_no`, `roll_no`, `room_no`, `name`, `f_name`, `year`, `course`, `ph_no`, `address`, `branch`, `token`) VALUES
(1, 11, 111, 'Babandeep singh', 'Harjeet singh', 3, 'Diploma', 2147483647, 'v.p.o tallewal teh tape dist.barnala', 'civil engg', ''),
(2, 25, 206, 'Harshdeep singh', 'Manjeet singh', 3, 'Diploma', 2147483647, 'D. shalu kohuali bazar dist. kangr', 'civil engg', ''),
(3, 112, 111, 'Gurvesh mann', 'Ajay singh maan', 3, 'Diploma', 2147483647, '182/1 kartar niwash power house road sapron solan', 'Mechnical engg', ''),
(4, 153, 115, 'Lovedeep singh', 'Manjeet singh', 3, 'Diploma', 2147483647, 'Vpo bahadur teh Tapa\r\ndist barnala', '', 'aaa'),
(5, 154, 113, 'Manvir  singh', 'Sewa singh', 2, 'Diploma', 2147483647, 'vill. khablan p.o bulhowal distt. hoshiarpur', '', 'aaa'),
(6, 156, 113, 'Navdeep singh', 'Balbir singh', 2, 'Diploma', 2147483647, 'vill. khablan p.o bulahowal distt. hoshiarpur', '', 'aaa'),
(7, 174, 116, 'Simarndeep singh', 'Jaspal  singh', 3, 'Diploma', 2147483647, 'V.P.O Gobindpur khun khun distt. hoshiarpur', '', 'aaa'),
(8, 213, 112, 'Buta singh', 'Jasvinder singh', 1, 'Diploma', 2147483647, 'v.p.o Mandvi teh. moonak distt. sangrur', '', 'aaa'),
(9, 219, 112, 'Gurjeet singh', 'Sukhwinder singh', 3, 'Diploma', 2147483647, 'V.P.O Mandvi Teh. Moonak Distt. Sangrur', '', 'aaa'),
(10, 221, 113, 'Gurneet singh', 'Kavaljit singh', 3, 'Diploma', 2147483647, 'S.C.F. 1/20 Agar Nagar  Ferozpur Road LDH', '', 'aaa'),
(11, 226, 113, 'Guruditta singh', 'Jagjit singh', 2, 'Diploma', 2147483647, 'V.P.O Lehara Mohabbat Distt. Bathinda', '', 'aaa'),
(12, 232, 116, 'Harpreet singh', 'Darshan singh', 3, 'Diploma', 2147483647, 'Vill.Haspalpur Ajapura Distt.Patiala', '', 'aaa'),
(13, 275, 116, 'Shubham singh', 'Vijay singh', 3, 'Diploma', 2147483647, 'Gulati Sweet Arniwala Distt. Fazilka', '', 'aaa'),
(14, 306, 109, 'Amanjot singh', 'Daljeet singh', 3, 'Diploma', 2147483647, 'V.P.O Poohla Teh & Distt Bathnda', '', 'aaa'),
(15, 309, 108, 'Damanbir singh', 'Kuldip singh', 3, 'Diploma', 2147483647, 'V.P.O. Jagdev khurd Teh.Ajanala Distt. Amritsar', '', 'aaa'),
(16, 327, 218, 'Jagjeet singh', 'Gurdeep singh', 3, 'Diploma', 2147483647, 'Vill. Moranwal P.O. Chak Mantha Jalalabad.Fazilka', '', 'aaa'),
(17, 355, 102, 'Kuldeep singh', 'Avatar singh', 3, 'Diploma', 2147483647, 'V.P.O Pakho Ke Teh & Distt.Barnala', '', 'aaa'),
(18, 360, 129, 'Nihall Aganahotri', 'Aganahotri', 3, 'Diploma', 2147483647, '40/27 B ShiValka Avanue Naya Nagal Ropar ', '', 'aaa'),
(19, 363, 110, 'Rajinder singh', 'Gurbax singh', 3, 'Diploma', 2147483647, 'Vill. Kheri Jattan Teh Dhuri P.O.Dhadogal Sangrur', '', 'aaa'),
(20, 364, 106, 'Parmdeep singh', 'Parmjit singh', 3, 'Diploma', 2147483647, 'Mai Godri sahib Oppd Markefed Cankotkapura', '', 'aaa'),
(21, 382, 109, 'Baljinder singh', 'Balbir singh', 3, 'Diploma', 2147483647, 'V.P.O.Bazidpurd teh distt SBS Nagar', '', 'aaa'),
(22, 384, 208, 'Jagyeevan singh', 'Kulwant singh', 3, 'Diploma', 2147483647, 'Rore wali gali opp Kitchlu school Ufci Road Moga', '', 'aaa'),
(23, 387, 207, 'Soanpat singh', 'Dharamvir singh', 3, 'Diploma', 2147483647, 'V.P.O Aharoula Teh Khair Distt Aligarh (UP)', '', 'aaa'),
(24, 403, 129, 'Ankit Dhuria', 'Pardeep Dhuria', 3, 'Diploma', 2147483647, '#1466 Chawlast Adarsh Nagar Fazilika', '', 'aaa'),
(25, 404, 103, 'Arminderpal singh', 'Pritpal singh ', 3, 'Diploma', 2147483647, 'ST NO 11 Sant Nagar Landerke Amritsar Road Moga', '', 'aaa'),
(26, 416, 107, 'Gurpreet singh', 'Parmjit singh', 3, 'Diploma', 2147483647, 'V.O.P Romia Road Buttar Patti Bullar Moga', '', 'aaa'),
(27, 417, 101, 'Gurveer singh', 'Ranjit singh', 3, 'Diploma', 2147483647, '#36/7 Surjeet singh Colonay. Sri Guganage(RJ)', '', 'aaa'),
(28, 422, 102, 'Harjot singh', 'Kirpal singh', 3, 'Diploma', 2147483647, 'V.P.O Hathur Teh Jagroon Distt. Ludhiana', '', 'aaa'),
(29, 467, 101, 'Ravneet singh', 'Paramjit singh', 3, 'Diploma', 2147483647, 'V.P.O Rania Road Butter Patti Bullar Moga', '', 'aaa'),
(30, 472, 107, 'Sandeep kumar', 'Mohinder kumar', 3, 'Diploma', 2147483647, 'Vill. Singhpura P.O.Twb Teh & Disit Fazilka', '', 'aaa'),
(31, 474, 101, 'Simarnjit singh', 'Harjit Singh', 3, 'Diploma', 2147483647, 'VPO. Bazipur Teh. Shri Chamkaur Sahib Disst. Ropar', '', 'aaa'),
(32, 476, 102, 'Simratpal Singh', 'Mohinder Singh', 4, 'Diploma', 2147483647, 'V.P.O Cuhanke Khurt Teh & Distt Barnala', '', 'aaa'),
(33, 480, 103, 'Vikramjit singh', 'Dharminder singh', 3, 'Diploma', 2147483647, 'V.P.O Guru Nanak Medicas Pandori Gate Moga', '', 'aaa'),
(34, 481, 105, 'Vinod  Kumar', 'Mohanlal', 3, 'Diploma', 2147483647, 'V.P.O Nihal Khera Teh & Distt Fazilka', '', 'aaa'),
(35, 506, 104, 'Arvandeep singh', 'Kulwinder singh', 3, 'Diploma', 2147483647, 'V.P.O Kantal Teh Abhoar Distt Fazilka', '', 'aaa'),
(36, 507, 103, 'Avinash kumar', 'Dhirandra kumar', 3, 'Diploma', 2147483647, 'Vill Kasera Distt Madhupani', '', 'aaa'),
(37, 510, 104, 'Ekamdeep singh', 'Davinder singh', 3, 'Diploma', 2147483647, 'Gaushala Road# 573 Fazilka ', '', 'aaa'),
(38, 566, 105, 'Parveen singh', 'Ram Phal singh', 3, 'Degree', 2147483647, 'Vill Chandr Teh Moonak Distt Sangrur ', '', 'aaa'),
(39, 575, 106, 'Shabdil singh', 'Sartaj singh', 3, 'Diploma', 2147483647, 'V.P.O Munak Kullal Teh Dasuya Hoshiarpur', '', 'aaa'),
(40, 529, 215, 'Jashandeep sharma', 'Sinderpal sharma', 3, 'Diploma', 2147483647, '#21860 Power House Road Bathinda ', '', 'aaa'),
(41, 603, 223, 'Akashdeep singh', 'Manjeet singh', 3, 'Diploma', 2147483647, 'H 47/48 KB D/S ALA HP', '', 'aaa'),
(42, 619, 222, 'Gurdeep singh', 'Sant singh', 3, 'Diploma', 2147483647, '#759 Vill Chandpura Teh Tohana Distt Fatehabad HP', '', 'aaa'),
(43, 704, 223, 'Ankit Kumar', 'Rajesh ', 1, 'Diploma', 2147483647, 'ESTC Colony 30A. Hrb 242A Chandigarh', '', 'aaa'),
(44, 715, 221, 'Gurkeerat singh', 'Hardeep singh', 1, 'Diploma', 2147483647, '39B-9/12 Akansha Appts Sec 62 Noida UP', '', 'aaa'),
(45, 723, 223, 'Harkiarat singh', 'Narinder singh', 1, 'Diploma', 2147483647, 'H.136 Chand Nagar New Delhi ', '', 'aaa'),
(46, 727, 222, 'Hashanpreet singh', 'Shera singh', 1, 'Diploma', 2147483647, 'Viil. Bbahara Distt. Sangurar', '', 'aaa'),
(47, 802, 221, 'Aditya Kumar', 'Abadhi Kishore ', 1, 'Diploma', 2147483647, '#122 ManuliJagraon Comp Chandigarh', '', 'aaa'),
(48, 803, 219, 'Amarjeet singh', 'Tirath singh', 1, 'Diploma', 2147483647, 'VPO. Lohat Baddi Teh. Raikot Distt. Ludhiana', '', 'aaa'),
(49, 812, 220, 'Gurpreet singh', 'Rajinder singh', 1, 'Diploma', 2147483647, 'VPO. Dirba Mandi Teh.Sunam Dist. Sangrur', '', 'aaa'),
(50, 829, 224, 'Jaskaranpreet singh', 'Manjit signh', 1, 'Diploma', 2147483647, 'VPO. Dalla Teh. Jagron Dist. LDH', '', 'aaa'),
(51, 832, 220, 'Jeevanjot  singh', 'Kulwinderjit singh', 1, 'Diploma', 2147483647, 'Kuram singh colony Guruduwara Plah shahib Amritsar', '', 'aaa'),
(52, 863, 222, 'Manpreet singh', 'Gurmeet singh', 1, 'Diploma', 2147483647, 'Vill Hamirgargh P.Hamirgargh Teh Moonak Distt Sangrur', '', 'aaa'),
(53, 866, 221, 'Nikhil Dhiman', 'Naresh kumar', 1, 'Diploma', 2147483647, '#32Type 3 Shiet Campus Road Sangrur', '', 'aaa'),
(54, 875, 224, 'Sukhpreet singh', 'Gurmeet singh', 1, 'Diploma', 2147483647, '#2326A Bhar Mati Do2 Nagar Bathinda', '', 'aaa'),
(55, 879, 224, 'Varinder singh', 'Amarjeet singh', 1, 'Diploma', 2147483647, 'H 267 T3 Power Colony GHTP Lehara Mohabth Bathinda', '', 'aaa'),
(56, 1156, 110, 'Kulvir singh', 'Malwinder singh Mann', 1, 'Diploma', 2147483647, 'Gandrara Patti Mangwal Dist Sangrur', '', 'aaa'),
(57, 1214, 13, 'Dishank Jindal', 'Rajinder Jindal', 3, 'Diploma', 2147483647, '#40 V.P.O Rally Sc 12 A Panchkula', '', 'aaa'),
(58, 1259, 106, 'Lakhwinder singh', 'Nazar singh', 3, 'Diploma', 2147483647, 'Vill Kaharabad P.O Kulburchan, samana, Patiala', '', 'aaa'),
(59, 1355, 111, 'Kamaldeep singh', 'Harjinder singh', 1, 'Diploma', 2147483647, 'VPO. Tallewal Teh. Tapa Barnala', '', 'aaa'),
(60, 1359, 114, 'Manjot singh', 'Parminder singh', 1, 'Diploma', 2147483647, 'VPO. Thuliwal Teh & Dist. Barnala', '', 'aaa'),
(61, 1378, 114, 'Sukhdeep singh', 'Gurkirpal singh', 1, 'Diploma', 2147483647, 'V.P.O Dhigana Muktsar Sahib ', '', 'aaa'),
(62, 1475, 112, 'Taranpreet singh', 'Joginder singh', 1, 'Diploma', 2147483647, '264H Indra Nagar Barcilly', '', 'aaa'),
(63, 1507, 219, 'Anmolratan singh', 'Kulwinder singh', 1, 'Diploma', 2147483647, 'H C 843 ST 6 Patti Road Barnala', '', 'aaa'),
(64, 1514, 219, 'Gurkirat singh', 'Gurcharn singh', 1, 'Diploma', 2147483647, 'V.P.O Thikariwal Teh & Distt Barnala', '', 'aaa'),
(65, 1521, 221, 'Ishpreet singh', 'Surinder singh', 1, 'Diploma', 2147483647, '44 A D.L.F Colony Sirhind Road Patiala', '', 'aaa'),
(66, 1668, 120, 'Sajan Chugh', 'Naveen Chugh', 1, 'Diploma', 2147483647, 'H 1261 B3 St.No New Gobind Nagri Abhoar', '', 'aaa'),
(67, 1705, 111, 'Amandeep singh', 'Harjinder singh', 1, 'Diploma', 2147483647, 'V.P.O Tallewal Teh Tapa  Distt Barnala ', '', 'aaa'),
(68, 1770, 115, 'Ranbir singh', 'Gurmeet singh', 1, 'Diploma', 2147483647, 'V.P.O Kuraiwla Teh Gidderbhah Semi Muktar Sahib', '', 'aaa'),
(69, 111140, 15, 'Avtar singh', 'Gurtej singh', 4, 'Degree', 805448560, 'V.P.O Behmno Teh Samana Distt Patiala', '', 'aaa'),
(70, 111149, 15, 'Surinder  Kumar', 'Balram', 4, 'Degree', 2147483647, 'V.P.O Danger Khera Teh & Distt. Fazilka', '', 'aaa'),
(71, 111151, 10, 'Sunny ', 'Sukhdev Raj', 4, 'Degree', 2147483647, '#2941 Bajri Company Joda Malda Bay Teh & Distt Pathankot', '', 'aaa'),
(72, 111157, 10, 'Ekansh Sharma', 'Vijay Sharma', 4, 'Degree', 2147483647, 'H3A Kangra cloany Near Batla Road. Amritsar', '', 'aaa'),
(73, 111158, 15, 'Ankur Singla', 'Rajpal Singla', 4, 'Degree', 2147483647, 'Khanouri Mandi NomeTech Moonak Dist.Sangrur', '', 'aaa'),
(74, 111160, 15, 'Parveen Kumar', 'Rajvemdra', 4, 'Degree', 2147483647, 'Jhav Harine Dist. Madubena Road PS Harlakhi Bihar', '', 'aaa'),
(75, 111375, 10, 'Vishal Sharma', 'Raguvir Sharma', 4, 'Degree', 2147483647, '#406 ST 2 Hargobind Abnue Majitha Road Amritsar', '', 'aaa'),
(76, 112109, 214, 'Satnam Singh', 'Mohinder Singh', 4, 'Degree', 2147483647, 'VPO. Thikrtiwala Barnala', '', 'aaa'),
(77, 112126, 9, 'Daljinder Singh', 'Gurmukh Singh', 4, 'Degree', 2147483647, 'Vill. Chaunda Teh. Malerkotla Dist. Sangrur', '', 'aaa'),
(78, 114051, 214, 'Gurpreet  Singh', 'Ram Singh', 4, 'Degree', 2147483647, 'VPO. Bakhora Khurd teh. Lehhar Gagga Dist. Sangrur', '', 'aaa'),
(79, 115302, 216, 'Albert', 'Daved ', 4, 'Degree', 2147483647, '#423 Ward No-13 Shakti Nager Bhagpur Jalandar', '', 'aaa'),
(80, 115373, 9, 'Jaswinder Singh', 'Ajaib Singh', 4, 'Degree', 2147483647, 'Vill. Ratangarh Kanankwal PO. Giana Teh. Talwandi Bathinda', '', 'aaa'),
(81, 116116, 214, 'Beant singh', 'Harbans singh', 4, 'Degree', 1234567890, 'Vill. Chaunda Teh. Malerkotla Distt. Sangrur', '', 'aaa'),
(82, 116117, 216, 'Hitesh Kumar', 'Sashas Bhohen', 4, 'Degree', 2147483647, 'Vill. Nawhora Teh. Nabha Distt. Patiala', '', 'aaa'),
(83, 120014, 201, 'Avaljit singh', 'Satinderpal singh', 3, 'Degree', 2147483647, '71 B Sector 1 Shakti Nagar Bhopal', '', 'aaa'),
(84, 120015, 201, 'Beantprat singh', 'Rawel singh', 3, 'Degree', 1234567890, '181 Jail singh Nagar Ropar', '', 'aaa'),
(85, 120045, 7, 'Jashandeep singh', 'Lalchand sharma', 3, 'Degree', 2147483647, 'V.P.O. Jhinjar Teh Anandpur Sahib Distt. Ropar', '', 'aaa'),
(86, 120154, 210, 'Deepank Kaushal ', 'Pawan Kumar', 3, 'Degree', 2147483647, 'V.P.O. Ganguwal Teh Anandpur Sahib Ropar', '', 'aaa'),
(87, 120157, 16, 'Gursewak singh', 'Malkiet singh', 3, 'Degree', 964676797, 'V.P.O. Guru ke Wadali Patti Randawa Di Amritsar', '', 'aaa'),
(88, 120158, 129, 'Gurinder singh', 'Baljit singh', 3, 'Degree', 2147483647, 'Vill. Pedan P.O Ajananda Kalan Teh Nabha Distt. Patiala', '', 'aaa'),
(89, 120162, 12, 'Maninderpal singh', 'Satwinderpal singh', 3, 'Degree', 2147483647, 'Vill. Shukar P.O Mukendpur Distt S.B.S Nagar', '', 'aaa'),
(90, 120171, 16, 'Sukhwinder singh', 'Jangir singh', 3, 'Degree', 2147483647, 'Vill.Sher Motnamond Mohigarh P.O. Amirkhas Teh Jalalabad Distt. Ferozpur', '', 'aaa'),
(91, 120383, 220, 'Gurswinder singh', 'Baljinder singh', 3, 'Degree', 2147483647, 'VPO.Karaiwala Teh.Gidderbaha Dist.Muktsar', '', 'aaa'),
(92, 121079, 12, 'Nobalpreet singh', 'Gurmeet singh', 3, 'Degree', 2147483647, 'Bilawari Street Putlighar Amritsar', '', 'aaa'),
(93, 121137, 7, 'Jaspreet singh', 'Manjit singh', 3, 'Degree', 2147483647, '24 A Gurater Kailesh Batala Dist. Gurdaspur', '', 'aaa'),
(94, 121155, 7, 'Sandeep kumar', 'Chanderbhan', 3, 'Degree', 2147483647, 'VPO.Banasi Teh.Moonk Dist.Sangrur', '', 'aaa'),
(95, 121158, 229, 'Sukhjeet singh', 'Mahan singh', 3, 'Degree', 2147483647, 'Vill.Badla P.O.Gowara Teh.Malerkotla Dist.Sangrur ', '', 'aaa'),
(96, 125016, 14, 'Bharat Bhushar', 'Anand kumar', 3, 'Degree', 2147483647, 'Guru Anyand Nagar St 9 B KK Road #1621 Muktsar', '', 'aaa'),
(97, 125106, 210, 'Abhay Arora', 'Kamal Arora', 3, 'Degree', 2147483647, '141 Kalia colony Ph# Jalander city', '', 'aaa'),
(98, 126135, 229, 'Sukhwinder singh', 'Kala singh', 3, 'Degree', 2147483647, 'Vill. Jeevanpura P.O. Jonewal Teh Samrala Ludhiana', '', 'aaa'),
(99, 126138, 216, 'Sameer Pujani', 'Parmjeet singh', 3, 'Degree', 2147483647, '# A/1151 ST 1 Radaswami Colony Fazlika', '', 'aaa'),
(100, 130062, 14, 'Jatin Chandra', 'Ram Chandra', 2, 'Degree', 2147483647, 'A 79 Rail vihar Ambala Cunti HP', '', 'aaa'),
(101, 12025, 7, 'aman', 'kamal', 1, 'Diploma', 2147483647, 'ldh', '', 'aaa');

-- --------------------------------------------------------

--
-- Table structure for table `room_alotment`
--

CREATE TABLE IF NOT EXISTS `room_alotment` (
  `Token` varchar(10) NOT NULL,
  `Room_no` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room_alotment`
--


-- --------------------------------------------------------

--
-- Table structure for table `sat_diet`
--

CREATE TABLE IF NOT EXISTS `sat_diet` (
  `day` varchar(50) NOT NULL,
  `meal_time` varchar(50) NOT NULL,
  `food_items` varchar(10000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sat_diet`
--

INSERT INTO `sat_diet` (`day`, `meal_time`, `food_items`) VALUES
('saturday', 'breakfast', 'daal parontha + chaa + dahi '),
('saturday', 'lunch', 'tadke wale chawal + rajmaha + roti + dahi '),
('saturday', 'dinner', 'daal  (mung  + masar) + green veg  seasonal + roti + kheer');

-- --------------------------------------------------------

--
-- Table structure for table `sun_diet`
--

CREATE TABLE IF NOT EXISTS `sun_diet` (
  `day` varchar(50) NOT NULL,
  `meal_time` varchar(50) NOT NULL,
  `food_items` varchar(10000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sun_diet`
--

INSERT INTO `sun_diet` (`day`, `meal_time`, `food_items`) VALUES
('sunday', 'breakfast', 'allu piaz prontha + butter + chaa'),
('sunday', 'lunch', 'chite chole + dahi + chawal + roti'),
('sunday', 'dinner', 'chatni mix + allu piaz sabzi + roti + sewian ');

-- --------------------------------------------------------

--
-- Table structure for table `s_attendance`
--

CREATE TABLE IF NOT EXISTS `s_attendance` (
  `name` varchar(2000) NOT NULL,
  `roll no.` varchar(2000) NOT NULL,
  `date` varchar(2000) NOT NULL,
  `attendance` varchar(2000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `s_attendance`
--

INSERT INTO `s_attendance` (`name`, `roll no.`, `date`, `attendance`) VALUES
('fghf', 'dfghfd', 'fghdf', 'Present'),
('mohit', '1265', '10-15-2014', 'Present'),
('', '', '', ''),
('abc', '1234', '2013-12-31', 'Absent');

-- --------------------------------------------------------

--
-- Table structure for table `thr_diet`
--

CREATE TABLE IF NOT EXISTS `thr_diet` (
  `day` varchar(50) NOT NULL,
  `meal_time` varchar(50) NOT NULL,
  `food_items` varchar(10000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `thr_diet`
--

INSERT INTO `thr_diet` (`day`, `meal_time`, `food_items`) VALUES
('thursday', 'breakfast', 'allu parontha + butter + dudh'),
('thursday', 'lunch', 'kale cholle + dahi + chawal + roti'),
('thursday', 'dinner', 'palak paneer + roti + gulabjamun (1 pc) ');

-- --------------------------------------------------------

--
-- Table structure for table `tue_diet`
--

CREATE TABLE IF NOT EXISTS `tue_diet` (
  `day` varchar(50) NOT NULL,
  `meal_time` varchar(50) NOT NULL,
  `food_items` varchar(10000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tue_diet`
--

INSERT INTO `tue_diet` (`day`, `meal_time`, `food_items`) VALUES
('tuesday', 'breakfast', 'allu piaz prontha + butter + dudh'),
('tuesday', 'lunch', 'allu pakora + dahi + chawal + roti'),
('tuesday', 'dinner', 'shahi paneer + roti + fruit');

-- --------------------------------------------------------

--
-- Table structure for table `wed_diet`
--

CREATE TABLE IF NOT EXISTS `wed_diet` (
  `day` varchar(50) NOT NULL,
  `meal_time` varchar(50) NOT NULL,
  `food_items` varchar(10000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wed_diet`
--

INSERT INTO `wed_diet` (`day`, `meal_time`, `food_items`) VALUES
('wednesday', 'breakfast', 'chhanna masala + dahi + parontha  + chaa  '),
('wednesday', 'lunch', 'daal mix + dahi + chawal + roti'),
('wednesday', 'dinner', 'mix veg + daal moth+ dalia + chatni');
