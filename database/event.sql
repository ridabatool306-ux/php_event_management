-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 21, 2025 at 05:56 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `event`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `booking_id` bigint(255) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `clientname` varchar(255) NOT NULL,
  `bookingemail` varchar(255) NOT NULL,
  `bookingcontact` varchar(255) NOT NULL,
  `occassiontitle` varchar(255) NOT NULL,
  `occassiondate` varchar(255) NOT NULL,
  `occassiontime` varchar(255) NOT NULL,
  `numberofseats` varchar(255) NOT NULL,
  `venue_name` varchar(255) NOT NULL,
  `bookingdescription` varchar(255) NOT NULL,
  `occassiontype` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`booking_id`, `category_name`, `clientname`, `bookingemail`, `bookingcontact`, `occassiontitle`, `occassiondate`, `occassiontime`, `numberofseats`, `venue_name`, `bookingdescription`, `occassiontype`, `role`) VALUES
(3, '2', 'Evelyn Mullen', 'jyba@mailinator.com', '8', 'Asperiores sed persp', '1986-01-29', '16:19', '871', '2', 'Eum quia vero nisi p', 'public', ''),
(4, '2', 'Margaret Randall', 'lymejiduli@mailinator.com', '21', 'Cupidatat explicabo', '2001-07-16', '13:26', '809', '4', 'Corrupti qui perfer', 'public', ''),
(5, '2', 'Imelda Jennings', 'muqob@mailinator.com', '46', 'Facilis quaerat et s', '2012-09-19', '14:28', '539', '4', 'Adipisicing est ea p', 'public', ''),
(6, '2', 'Patience Knight', 'nuwawokuk@mailinator.com', '36', 'Et duis excepturi as', '1974-01-15', '18:30', '610', '3', 'Optio enim tempore', 'public', 'pending'),
(7, '2', 'Noel Osborne', 'ridabatool306@gmail.com', '85', 'Tempora consequatur ', '2007-09-10', '03:24', '757', '4', 'In nihil mollitia in', 'public', 'pending'),
(8, '2', 'Noel Osborne', 'ridabatool306@gmail.com', '85', 'Tempora consequatur ', '2007-09-10', '03:24', '757', '4', 'In nihil mollitia in', 'public', 'pending'),
(9, '2', 'Noel Osborne', 'ridabatool306@gmail.com', '85', 'Tempora consequatur ', '2007-09-10', '03:24', '757', '4', 'In nihil mollitia in', 'public', 'pending'),
(10, '2', 'Noel Osborne', 'ridabatool306@gmail.com', '85', 'Tempora consequatur ', '2007-09-10', '03:24', '757', '4', 'In nihil mollitia in', 'public', 'pending'),
(11, '2', 'Noel Osborne', 'ridabatool306@gmail.com', '85', 'Tempora consequatur ', '2007-09-10', '03:24', '757', '4', 'In nihil mollitia in', 'public', 'pending'),
(12, '2', 'Noel Osborne', 'ridabatool306@gmail.com', '85', 'Tempora consequatur ', '2007-09-10', '03:24', '757', '4', 'In nihil mollitia in', 'public', 'pending'),
(13, '2', 'Noel Osborne', 'ridabatool306@gmail.com', '85', 'Tempora consequatur ', '2007-09-10', '03:24', '757', '4', 'In nihil mollitia in', 'public', 'pending'),
(14, '2', 'Noel Osborne', 'ridabatool306@gmail.com', '85', 'Tempora consequatur ', '2007-09-10', '03:24', '757', '4', 'In nihil mollitia in', 'public', 'pending'),
(15, '2', 'Noel Osborne', 'ridabatool306@gmail.com', '85', 'Tempora consequatur ', '2007-09-10', '03:24', '757', '4', 'In nihil mollitia in', 'public', 'pending'),
(16, '2', 'Ann Villarreal', 'ridabatool306@gmail.com', '18', 'Minima nihil ad eos', '2023-08-15', '20:57', '371', '4', 'Excepteur velit veni', 'private', 'pending'),
(17, '2', 'Ann Villarreal', 'ridabatool306@gmail.com', '18', 'Minima nihil ad eos', '2023-08-15', '20:57', '371', '4', 'Excepteur velit veni', 'private', 'pending'),
(18, '2', 'Ann Villarreal', 'ridabatool306@gmail.com', '18', 'Minima nihil ad eos', '2023-08-15', '20:57', '371', '4', 'Excepteur velit veni', 'private', 'pending'),
(19, '2', 'Alexandra Yates', 'ridabatool306@gmail.com', '43', 'Voluptatibus volupta', '1990-03-18', '02:50', '262', '3', 'Totam voluptatum con', 'public', ''),
(20, '2', 'Cameran Townsend', 'ridabatool306@gmail.com', '35', 'Ab et tenetur itaque', '1988-05-18', '16:06', '833', '3', 'Officia asperiores a', 'public', '');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` bigint(255) NOT NULL,
  `categoryname` varchar(255) NOT NULL,
  `categorydescription` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `categoryname`, `categorydescription`) VALUES
(2, 'Richard Ortega', 'Ex excepteur consect');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `city_id` bigint(255) NOT NULL,
  `cityname` varchar(255) NOT NULL,
  `citydescription` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`city_id`, `cityname`, `citydescription`) VALUES
(1, 'Faisalabad', 'sgfjHASFusvjawskgw'),
(2, 'lahore', 'ajgSFVHWSGKW');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contact_id` bigint(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contact_id`, `firstname`, `lastname`, `subject`, `email`, `message`) VALUES
(1, 'Silas', 'Kane', 'Adipisci quaerat cor', 'zunyt@mailinator.com', 'Consequuntur et et c');

-- --------------------------------------------------------

--
-- Table structure for table `designer`
--

CREATE TABLE `designer` (
  `designer_id` bigint(255) NOT NULL,
  `designerfname` varchar(255) NOT NULL,
  `designerlname` varchar(255) NOT NULL,
  `designeremail` varchar(255) NOT NULL,
  `designerdob` varchar(255) NOT NULL,
  `designergender` varchar(255) NOT NULL,
  `designerphone` varchar(255) NOT NULL,
  `designercity` varchar(255) NOT NULL,
  `designerexperience` varchar(255) NOT NULL,
  `designerorderdesign` varchar(255) NOT NULL,
  `designerdescription` varchar(255) NOT NULL,
  `designercompany` varchar(255) NOT NULL,
  `designercolor` varchar(255) NOT NULL,
  `designertools` varchar(255) NOT NULL,
  `designerwrittencontent` varchar(255) NOT NULL,
  `designernumdesign` varchar(255) NOT NULL,
  `designerpassword` varchar(255) NOT NULL,
  `designerconfirmpassword` varchar(255) NOT NULL,
  `designeraddress` varchar(255) NOT NULL,
  `designerpic` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `designer`
--

INSERT INTO `designer` (`designer_id`, `designerfname`, `designerlname`, `designeremail`, `designerdob`, `designergender`, `designerphone`, `designercity`, `designerexperience`, `designerorderdesign`, `designerdescription`, `designercompany`, `designercolor`, `designertools`, `designerwrittencontent`, `designernumdesign`, `designerpassword`, `designerconfirmpassword`, `designeraddress`, `designerpic`, `status`) VALUES
(2, 'Mason Lambert', 'Morgan Ochoa', 'hihyrodydu@mailinator.com', '1983-01-07', '', '98789', 'Qui excepturi totam ', '3245', 'Lorem molestias dolo', 'Enter Description Here....', 'Dorsey Kaufman Inc', '#2211f6', 'Enim rem neque maxim', 'Ea ad deleniti ut pl', '78', 'Quia minima optio i', 'Quia minima optio i', 'Enter Address Here....', '01-06-11677.jpg', ''),
(3, 'Oliver Nguyen', 'Pamela Weaver', 'fytofozy@mailinator.com', '1974-03-09', 'others', '28', 'Reprehenderit irure ', '76', 'Cum iusto inventore ', 'Culpa quibusdam tem', 'Soto Middleton Plc', '#477f8d', 'Ipsum saepe ipsa ma', 'Voluptatem quia non ', '5', 'Et illum beatae ut ', 'Et illum beatae ut ', 'Enim dicta dolorem n', '84663.jpeg', 'pending'),
(4, 'Brynne Ford', 'Nita Alford', 'qyrulizax@mailinator.com', '1984-05-17', 'female', '14', 'Et laboris aut harum', '37', 'Nostrum fuga Eum ac', 'Qui nostrud quia dol', 'Key Keller Co', '#e5b1e9', 'Sit reprehenderit ', 'Reprehenderit conseq', '57', 'Eos labore ullamco ', 'Eos labore ullamco ', 'Aut veritatis adipis', '41466.jpg', 'confirm'),
(5, 'Libby Macias', 'Carter Lowe', 'ridabatool306@gmail.com', '1988-10-06', 'male', '53', 'Hic et nostrum quis ', '74', 'Dolores non aut vero', 'Laborum Beatae quo ', 'Hudson and Warner Inc', '#50890b', 'Commodo amet deseru', 'Id tempor perferendi', '30', 'Ut et alias molestia', 'Ut et alias molestia', 'Beatae enim irure re', '25270.jpg', 'confirm');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `event_id` bigint(255) NOT NULL,
  `categoryname` varchar(255) NOT NULL,
  `eventtitle` varchar(255) NOT NULL,
  `eventdate` varchar(255) NOT NULL,
  `eventdescription` varchar(255) NOT NULL,
  `eventpic` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`event_id`, `categoryname`, `eventtitle`, `eventdate`, `eventdescription`, `eventpic`) VALUES
(1, '2', 'Libero numquam reici', '1974-08-08', 'Eligendi pariatur E', 'a:4:{i:0;s:8:\"9666.jpg\";i:1;s:10:\"34408.jpeg\";i:2;s:10:\"94582.jpeg\";i:3;s:9:\"87483.jpg\";}');

-- --------------------------------------------------------

--
-- Table structure for table `login_table`
--

CREATE TABLE `login_table` (
  `id` bigint(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `confirmpassword` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login_table`
--

INSERT INTO `login_table` (`id`, `firstname`, `lastname`, `email`, `password`, `confirmpassword`, `role`) VALUES
(1, 'Rida ', 'Batool', 'admin@gmail.com', 'admin123', 'admin123', 'admin'),
(2, 'Francesca Woodard', 'Patrick Sloan', 'titoz@mailinator.com', 'Reiciendis ut laboru', 'Reiciendis ut laboru', 'volunteer'),
(3, 'Brynne Ford', 'Nita Alford', 'qyrulizax@mailinator.com', 'Eos labore ullamco ', 'Eos labore ullamco ', 'designer'),
(4, 'Hermione Yang', 'Stella Armstrong', 'jutuqo@mailinator.com', 'Similique assumenda ', 'Similique assumenda ', 'planner'),
(5, 'Cheryl', 'Montoya', 'sovapaxaja@mailinator.com', 'Dolor est ea ullam ', 'Dolor est ea ullam ', 'admin'),
(6, 'Xavier', 'Gross', 'duzepywuhi@mailinator.com', 'Corrupti quo ration', 'Corrupti quo ration', 'admin'),
(7, 'Hasad', 'Levine', 'jevyputik@mailinator.com', 'Et impedit enim fug', 'Et impedit enim fug', 'client'),
(8, 'Libby Macias', 'Carter Lowe', 'ridabatool306@gmail.com', 'Ut et alias molestia', 'Ut et alias molestia', 'designer');

-- --------------------------------------------------------

--
-- Table structure for table `logo`
--

CREATE TABLE `logo` (
  `logo_id` bigint(255) NOT NULL,
  `profilepic` varchar(255) NOT NULL,
  `logopic` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `logo`
--

INSERT INTO `logo` (`logo_id`, `profilepic`, `logopic`) VALUES
(1, '97323.jpeg', '19793.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `news_id` bigint(255) NOT NULL,
  `categoryname` varchar(255) NOT NULL,
  `newstitle` varchar(255) NOT NULL,
  `newsdescription` varchar(255) NOT NULL,
  `newspic` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`news_id`, `categoryname`, `newstitle`, `newsdescription`, `newspic`) VALUES
(1, '2', 'Qui non tempora cons', 'Similique suscipit m', 'a:3:{i:0;s:9:\"30380.jpg\";i:1;s:10:\"66986.jpeg\";i:2;s:9:\"2030.jpeg\";}');

-- --------------------------------------------------------

--
-- Table structure for table `planner`
--

CREATE TABLE `planner` (
  `planner_id` bigint(255) NOT NULL,
  `plannerfname` varchar(255) NOT NULL,
  `plannerlname` varchar(255) NOT NULL,
  `planneremail` varchar(255) NOT NULL,
  `plannerdob` varchar(255) NOT NULL,
  `plannergender` varchar(255) NOT NULL,
  `plannerphone` varchar(255) NOT NULL,
  `plannercity` varchar(255) NOT NULL,
  `plannerexperience` varchar(255) NOT NULL,
  `plannerachievements` varchar(255) NOT NULL,
  `plannerskills` varchar(255) NOT NULL,
  `plannerpartners` varchar(255) NOT NULL,
  `plannerpassword` varchar(255) NOT NULL,
  `plannerconfirmpassword` varchar(255) NOT NULL,
  `planneraddress` varchar(255) NOT NULL,
  `plannerpic` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `planner`
--

INSERT INTO `planner` (`planner_id`, `plannerfname`, `plannerlname`, `planneremail`, `plannerdob`, `plannergender`, `plannerphone`, `plannercity`, `plannerexperience`, `plannerachievements`, `plannerskills`, `plannerpartners`, `plannerpassword`, `plannerconfirmpassword`, `planneraddress`, `plannerpic`, `status`, `role`) VALUES
(3, 'Susan Hickman', 'Emmanuel Hancock', 'busagole@mailinator.com', '2024-11-28', 'others', '43', 'Laudantium perspici', '28', 'Et rerum a sit ea a', 'Corporis sunt quae ', 'Ducimus sapiente au', 'Dolores et deserunt ', 'Dolores et deserunt ', 'Adipisicing porro su', '01-07-023072.jpg', '', ''),
(4, 'Mohammad Nash', 'Rhona Owens', 'jebo@mailinator.com', '2016-02-10', 'others', '66', 'Temporibus Nam dolor', '97', 'Adipisci similique n', 'Aperiam ut in sunt i', 'Quis totam sed ut qu', 'Obcaecati ducimus a', 'Obcaecati ducimus a', 'Harum omnis commodo ', '9103.jpeg', '', ''),
(5, 'Quintessa Morales', 'Aubrey Griffith', 'docuvubiho@mailinator.com', '2005-06-04', 'others', '4', 'Illo sunt non quas ', '23', 'Fugit eligendi veli', 'Do nisi voluptates r', 'Qui non esse quia q', 'Aut voluptatum itaqu', 'Aut voluptatum itaqu', 'Rerum iste quasi sin', '77414.jpg', '', ''),
(6, 'Ainsley Kirkland', 'Ira Berg', 'huzubiho@mailinator.com', '2010-08-28', 'female', '68', 'Qui nobis laboris su', '32', 'Atque necessitatibus', 'Officia error labore', 'Quis ut ipsum mollit', 'Laboris rerum dolore', 'Laboris rerum dolore', 'Voluptatem debitis e', '11613.jpg', 'pending', ''),
(7, 'Hermione Yang', 'Stella Armstrong', 'jutuqo@mailinator.com', '1998-08-06', 'others', '16', 'Molestiae aliquam at', '47', 'Quas voluptatem Exc', 'Voluptatum quia ad s', 'Voluptate quibusdam ', 'Similique assumenda ', 'Similique assumenda ', 'Esse reprehenderit ', '57929.jpeg', 'confirm', ''),
(8, 'Jillian Howard', 'Whitney Steele', 'gufiqaku@mailinator.com', '2003-04-17', 'others', '3', 'Quo expedita ipsum a', '81', 'Quis ut qui natus do', 'Aliquid nesciunt qu', 'Iusto consectetur qu', 'Labore fuga Deserun', 'Labore fuga Deserun', 'Ea quo in ea tempor ', '25651.jpeg', 'pending', 'planner');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `role_id` bigint(255) NOT NULL,
  `rolename` varchar(255) NOT NULL,
  `roleaccess` varchar(255) NOT NULL,
  `roleper` varchar(255) NOT NULL,
  `roledate` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`role_id`, `rolename`, `roleaccess`, `roleper`, `roledate`) VALUES
(1, 'admin', 'All', 'a:0:{}', '2024-12-17'),
(10, 'designer', 'Custom', 'a:2:{i:0;s:8:\"designer\";i:1;s:7:\"booking\";}', '2024-12-26');

-- --------------------------------------------------------

--
-- Table structure for table `specificbooking`
--

CREATE TABLE `specificbooking` (
  `spbooking_id` bigint(255) NOT NULL,
  `spcategoryname` varchar(255) NOT NULL,
  `spclientname` varchar(255) NOT NULL,
  `spbookingemail` varchar(255) NOT NULL,
  `spbookingcontact` varchar(255) NOT NULL,
  `spoccassiontitle` varchar(255) NOT NULL,
  `spoccassiondate` varchar(255) NOT NULL,
  `spoccassiontime` varchar(255) NOT NULL,
  `spnumberofseats` varchar(255) NOT NULL,
  `spvenuename` varchar(255) NOT NULL,
  `spbookingdescription` varchar(255) NOT NULL,
  `workername` varchar(255) NOT NULL,
  `workeremail` varchar(255) NOT NULL,
  `workercontact` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `specificbooking`
--

INSERT INTO `specificbooking` (`spbooking_id`, `spcategoryname`, `spclientname`, `spbookingemail`, `spbookingcontact`, `spoccassiontitle`, `spoccassiondate`, `spoccassiontime`, `spnumberofseats`, `spvenuename`, `spbookingdescription`, `workername`, `workeremail`, `workercontact`) VALUES
(8, '2', 'gawamy@mailinator.com', 'micedeh@mailinator.com', '14', 'jaxuh@mailinator.com', '2000-01-02', '19:11', '615', '4', 'Amet est harum id ', 'Susan Hickman', 'busagole@mailinator.com', '43'),
(9, '2', 'halibisiv@mailinator.com', 'ridabatool306@gmail.com', '45', 'wedding', '2024-04-25', '03:03', 'lyzogibyma@mailinator.com', '4', 'Culpa amet amet qu', 'Oliver Nguyen', 'fytofozy@mailinator.com', '28'),
(10, '2', 'halibisiv@mailinator.com', 'ridabatool306@gmail.com', '45', 'wedding', '2024-04-25', '03:03', 'lyzogibyma@mailinator.com', '4', 'Culpa amet amet qu', 'Oliver Nguyen', 'fytofozy@mailinator.com', '28'),
(11, '2', 'halibisiv@mailinator.com', 'ridabatool306@gmail.com', '45', 'wedding', '2024-04-25', '03:03', 'lyzogibyma@mailinator.com', '4', 'Culpa amet amet qu', 'Oliver Nguyen', 'fytofozy@mailinator.com', '28'),
(12, '2', 'halibisiv@mailinator.com', 'ridabatool306@gmail.com', '45', 'wedding', '2024-04-25', '03:03', 'lyzogibyma@mailinator.com', '4', 'Culpa amet amet qu', 'Oliver Nguyen', 'fytofozy@mailinator.com', '28'),
(13, '2', 'zunilagedo@mailinator.com', 'ridabatool306@gmail.com', '11', 'sitijosu@mailinator.com', '1970-02-14', '04:57', 'nahiqorid@mailinator.com', '4', 'Illo ut quisquam atq', 'Oliver Nguyen', 'fytofozy@mailinator.com', '28'),
(14, '2', 'vuba@mailinator.com', 'ridabatool306@gmail.com', '57', 'tebuzumi@mailinator.com', '2021-12-07', '10:09', 'zejume@mailinator.com', '3', 'Laudantium velit q', 'Libby Macias', 'ridabatool306@gmail.com', '53'),
(15, '2', 'lonapes@mailinator.com', 'ridabatool306@gmail.com', '99', 'mafy@mailinator.com', '1995-11-29', '08:42', 'lugy@mailinator.com', '4', 'Est aliquid necessi', 'Libby Macias', 'ridabatool306@gmail.com', '53');

-- --------------------------------------------------------

--
-- Table structure for table `venue`
--

CREATE TABLE `venue` (
  `venue_id` bigint(255) NOT NULL,
  `venuename` varchar(255) NOT NULL,
  `venuedescription` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `venue`
--

INSERT INTO `venue` (`venue_id`, `venuename`, `venuedescription`) VALUES
(3, 'Thaddeus Bird', 'Natus dolorem provid'),
(4, 'Freya Thomas', 'Provident omnis aut');

-- --------------------------------------------------------

--
-- Table structure for table `volunteer`
--

CREATE TABLE `volunteer` (
  `volunteer_id` bigint(255) NOT NULL,
  `volunteerfname` varchar(255) NOT NULL,
  `volunteerlname` varchar(255) NOT NULL,
  `volunteeremail` varchar(255) NOT NULL,
  `volunteerdob` varchar(255) NOT NULL,
  `volunteergender` varchar(255) NOT NULL,
  `volunteerphone` varchar(255) NOT NULL,
  `volunteercity` varchar(255) NOT NULL,
  `volunteeroccassion` varchar(255) NOT NULL,
  `volunteerexperience` varchar(255) NOT NULL,
  `volunteerachievements` varchar(255) NOT NULL,
  `volunteerskills` varchar(255) NOT NULL,
  `volunteerpassword` varchar(255) NOT NULL,
  `volunteerconfirmpassword` varchar(255) NOT NULL,
  `volunteeraddress` varchar(255) NOT NULL,
  `volunteerpic` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `volunteer`
--

INSERT INTO `volunteer` (`volunteer_id`, `volunteerfname`, `volunteerlname`, `volunteeremail`, `volunteerdob`, `volunteergender`, `volunteerphone`, `volunteercity`, `volunteeroccassion`, `volunteerexperience`, `volunteerachievements`, `volunteerskills`, `volunteerpassword`, `volunteerconfirmpassword`, `volunteeraddress`, `volunteerpic`, `status`, `role`) VALUES
(1, 'Judah Smith', 'Katell Frazier', 'gumygoce@mailinator.com', '2023-07-27', 'female', '59', 'Eos dolorem est mol', 'Incidunt officia qu', '82', 'Eius quidem nobis ve', 'Pariatur Aut volupt', 'Maiores velit est q', 'Maiores velit est q', 'Odit voluptas unde r', '40373.jpg', '', ''),
(2, 'Austin Meyer', 'Harper Reese', 'sosunoqule@mailinator.com', '1975-10-16', 'male', '69', 'Laborum Obcaecati s', 'Aut voluptatum repel', '61', 'Sed saepe error quia', 'Nihil id alias ea it', 'Doloremque et dicta ', 'Doloremque et dicta ', 'Aliquip voluptas ea ', '64476.jpg', 'pending', ''),
(3, 'Austin Meyer', 'Harper Reese', 'sosunoqule@mailinator.com', '1975-10-16', 'male', '69', 'Laborum Obcaecati s', 'Aut voluptatum repel', '61', 'Sed saepe error quia', 'Nihil id alias ea it', 'Doloremque et dicta ', 'Doloremque et dicta ', 'Aliquip voluptas ea ', '79137.jpg', 'pending', ''),
(4, 'Alea Mcgowan', 'Sybill Mcclure', 'bemyc@mailinator.com', '1993-12-21', 'female', '49', 'Provident quas dolo', 'Suscipit omnis omnis', '23', 'Fugit qui doloribus', 'Voluptates voluptate', 'Sunt vel ut eveniet', 'Sunt vel ut eveniet', 'Voluptatem minus tot', '83049.jpg', 'pending', ''),
(6, 'Bruce Collier', 'Cleo Austin', 'dojysi@mailinator.com', '1990-09-13', 'others', '88', 'Veritatis adipisci i', 'Ipsum duis ut illo ', '69', 'Amet natus commodo ', 'Ea aliquip vitae ven', 'In adipisci irure co', 'In adipisci irure co', 'Nisi mollitia culpa ', '62790.jpeg', 'pending', ''),
(7, 'Francesca Woodard', 'Patrick Sloan', 'titoz@mailinator.com', '1990-05-20', 'female', '21', 'Aut consectetur vol', 'Eaque voluptas persp', '80', 'Ea veritatis esse a', 'Dolorum provident i', 'Reiciendis ut laboru', 'Reiciendis ut laboru', 'Incidunt et itaque ', '6562.jpeg', 'confirm', ''),
(8, 'Wynne Sanders', 'Halee Juarez', 'pibenob@mailinator.com', '2008-05-24', 'male', '66', 'In iusto quaerat aut', 'Praesentium quia off', '10', 'Ad odio eos non nis', 'Rerum culpa eius vel', 'Quia et ea libero do', 'Quia et ea libero do', 'Et adipisci eligendi', '86689.jpeg', 'pending', ''),
(9, 'Dana Newton', 'Laurel Bartlett', 'mykicekiga@mailinator.com', '2012-09-04', 'others', '20', 'Enim non nulla quas ', 'Suscipit nulla ipsum', '5', 'Proident minim est', 'Odio ad delectus mo', 'Voluptatem Do perfe', 'Voluptatem Do perfe', 'Iure atque consequat', '93323.jpeg', 'pending', 'designer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`booking_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`city_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `designer`
--
ALTER TABLE `designer`
  ADD PRIMARY KEY (`designer_id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `login_table`
--
ALTER TABLE `login_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logo`
--
ALTER TABLE `logo`
  ADD PRIMARY KEY (`logo_id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`news_id`);

--
-- Indexes for table `planner`
--
ALTER TABLE `planner`
  ADD PRIMARY KEY (`planner_id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `specificbooking`
--
ALTER TABLE `specificbooking`
  ADD PRIMARY KEY (`spbooking_id`);

--
-- Indexes for table `venue`
--
ALTER TABLE `venue`
  ADD PRIMARY KEY (`venue_id`);

--
-- Indexes for table `volunteer`
--
ALTER TABLE `volunteer`
  ADD PRIMARY KEY (`volunteer_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `booking_id` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `city_id` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `contact_id` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `designer`
--
ALTER TABLE `designer`
  MODIFY `designer_id` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `event_id` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `login_table`
--
ALTER TABLE `login_table`
  MODIFY `id` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `logo`
--
ALTER TABLE `logo`
  MODIFY `logo_id` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `news_id` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `planner`
--
ALTER TABLE `planner`
  MODIFY `planner_id` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `role_id` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `specificbooking`
--
ALTER TABLE `specificbooking`
  MODIFY `spbooking_id` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `venue`
--
ALTER TABLE `venue`
  MODIFY `venue_id` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `volunteer`
--
ALTER TABLE `volunteer`
  MODIFY `volunteer_id` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
