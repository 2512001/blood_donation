-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 16, 2023 at 05:59 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bld_dntn`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_info`
--

CREATE TABLE `admin_info` (
  `admin_id` int(10) NOT NULL,
  `admin_name` varchar(50) NOT NULL,
  `admin_username` varchar(50) NOT NULL,
  `admin_password` varchar(50) NOT NULL,
  `admin_number` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_info`
--

INSERT INTO `admin_info` (`admin_id`, `admin_name`, `admin_username`, `admin_password`, `admin_number`) VALUES
(1, 'deepak', 'deepak@gmail.com', 'ABCD', 2147483647),
(2, 'raj', 'raj@gmail.com', 'ABCD', 2147483647),
(4, 'banti', 'banti@gmail.com', 'ABCD', 6265796086),
(5, 'deepak', 'deepakgiree41@gmail.com', 'ABCD', 6265796086),
(8, 'jeet', 'jeet@gmail.com', 'ABCD', 123456780),
(10, 'netik', 'netik@gmail.com', 'ABCD', 5687345623),
(12, 'rahul', 'rahul@gmail.com', 'ABCD', 123456789),
(16, 'vishal', 'vishal@gmail.com', 'ABCD', 6265796086),
(22, 'vaibhav', 'vaibhav@gmail.com', 'ABCD', 2345643987);

-- --------------------------------------------------------

--
-- Table structure for table `blood`
--

CREATE TABLE `blood` (
  `blood_id` int(11) NOT NULL,
  `blood_group` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blood`
--

INSERT INTO `blood` (`blood_id`, `blood_group`) VALUES
(1, 'B+'),
(2, 'B-'),
(3, 'A+'),
(4, 'O+'),
(5, 'O-'),
(6, 'A-'),
(7, 'AB+'),
(8, 'AB-');

-- --------------------------------------------------------

--
-- Table structure for table `contact_info`
--

CREATE TABLE `contact_info` (
  `contact_id` int(11) NOT NULL,
  `contact_address` varchar(100) NOT NULL,
  `contact_mail` varchar(50) NOT NULL,
  `contact_phone` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contact_query`
--

CREATE TABLE `contact_query` (
  `query_id` int(11) NOT NULL,
  `query_name` varchar(100) NOT NULL,
  `query_mail` varchar(120) NOT NULL,
  `query_number` char(11) NOT NULL,
  `query_message` longtext NOT NULL,
  `query_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `query_status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_query`
--

INSERT INTO `contact_query` (`query_id`, `query_name`, `query_mail`, `query_number`, `query_message`, `query_date`, `query_status`) VALUES
(1, 'Anuj', 'anuj@gmail.com', '9923471025', 'I need O+ Blood.', '2023-09-15 16:21:52', 1),
(2, 'deepak', '6265796086', 'dipakgoswma', 'hello i need blood O pos', '2023-09-15 19:16:01', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `donor`
--

CREATE TABLE `donor` (
  `Donor_Name` varchar(30) NOT NULL,
  `Blood_Group` varchar(30) NOT NULL,
  `City` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `donor`
--

INSERT INTO `donor` (`Donor_Name`, `Blood_Group`, `City`) VALUES
('Rohit Sawant', 'B+', 'Mumbai');

-- --------------------------------------------------------

--
-- Table structure for table `donors`
--

CREATE TABLE `donors` (
  `id` int(10) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `sex` varchar(10) NOT NULL,
  `bloodgroup` varchar(10) NOT NULL,
  `mobile` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `town` varchar(20) NOT NULL,
  `states` varchar(30) NOT NULL,
  `lastdate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `donors`
--

INSERT INTO `donors` (`id`, `fullname`, `dob`, `sex`, `bloodgroup`, `mobile`, `email`, `town`, `states`, `lastdate`) VALUES
(1, 'John Smith', '1980-01-01', 'M', 'A pos', '123-456-7890', 'john@example.com', 'New York', 'NY', '2021-12-31 13:00:00'),
(2, 'Jane Johnson', '1982-02-14', 'F', 'O neg', '123-456-7891', 'jane@example.com', 'Chicago', 'IL', '2022-02-13 13:00:00'),
(3, 'Robert Doe', '1985-03-31', 'M', 'B pos', '123-456-7892', 'robert@example.com', 'Los Angeles', 'CA', '2022-03-30 13:00:00'),
(4, 'Sarah Miller', '1988-04-30', 'F', 'AB pos', '123-456-7893', 'sarah@example.com', 'Houston', 'TX', '2022-04-29 13:00:00'),
(5, 'Michael Brown', '1991-05-15', 'M', 'A neg', '123-456-7894', 'michael@example.com', 'Philadelphia', 'PA', '2022-05-14 13:00:00'),
(6, 'Chris Wilson', '1995-06-01', 'M', 'O pos', '123-456-7895', 'chris@example.com', 'Seattle', 'WA', '2022-05-31 13:00:00'),
(7, 'Sarah Davis', '1998-07-14', 'F', 'B neg', '123-456-7896', 'sarah@example.com', 'Boston', 'MA', '2022-07-13 13:00:00'),
(8, 'Mike Miller', '2001-08-31', 'M', 'AB neg', '123-456-7897', 'mike@example.com', 'Miami', 'FL', '2022-08-30 13:00:00'),
(9, 'Jennifer Brown', '2004-09-30', 'F', 'A pos', '123-456-7898', 'jennifer@example.com', 'Dallas', 'TX', '2022-09-29 13:00:00'),
(10, 'David Smith', '2007-10-15', 'M', 'O neg', '123-456-7899', 'david@example.com', 'San Francisco', 'CA', '2022-10-14 13:00:00'),
(11, 'Emma Johnson', '2010-11-01', 'F', 'B pos', '123-456-7900', 'emma@example.com', 'Denver', 'CO', '2022-10-31 13:00:00'),
(12, 'Matt Doe', '2013-12-14', 'M', 'AB+', '123-456-7901', 'matt@example.com', 'Atlanta', 'GA', '2022-12-13 13:00:00'),
(13, 'Kimberly Wilson', '2016-01-31', 'F', 'A neg', '123-456-7902', 'kimberly@example.com', 'Phoenix', 'AZ', '2023-01-30 13:00:00'),
(14, 'Andrew Davis', '0000-00-00', 'M', 'O pos', '123-456-7903', 'andrew@example.com', 'Portland', 'OR', '0000-00-00 00:00:00'),
(15, 'Laura Miller', '2020-03-15', 'F', 'B neg', '123-456-7904', 'laura@example.com', 'Tucson', 'AZ', '2023-03-14 13:00:00'),
(16, 'John Smith', '2020-04-16', 'M', 'AB neg', '123-456-7890', 'john@example.com', 'Phoenix', 'AZ', '2023-04-15 13:00:00'),
(17, 'Sarah Johnson', '2020-05-17', 'F', 'AB neg', '123-456-7891', 'sarah@example.com', 'Mesa', 'AZ', '2023-05-16 13:00:00'),
(18, 'Michael Brown', '2020-06-18', 'M', 'AB pos', '123-456-7892', 'michael@example.com', 'Chandler', 'AZ', '2023-06-17 13:00:00'),
(19, 'Katie Johnson', '2020-07-19', 'F', 'AB pos', '123-456-7893', 'katie@example.com', 'Gilbert', 'AZ', '2023-07-18 13:00:00'),
(20, 'Johney Smith', '1980-01-01', 'M', 'A pos', '124-456-7890', 'johney@example.com', 'California', 'CA', '2021-12-31 13:00:00'),
(63, 'Deepak  Goswami', '2002-01-25', 'male', 'A pos', '6265796085', 'deepakgiree41@gmail.com', 'brampur', 'madhyapradesh', '2023-09-02 17:32:08'),
(64, 'rajpalgoswami', '2003-09-02', 'male', 'O neg', '6578954337', 'rajgoswami@gmail.com', 'brahmpur', 'Madhya Pradesh', '2023-09-05 14:37:49'),
(65, 'yampal rathod', '2002-06-05', 'Male', 'A+', '1357924682', 'yampal@gmail.com', 'holnanthe', 'maharastra', '2023-09-14 19:14:04'),
(66, 'harshali mahajan', '2003-03-03', 'Female', 'B+', '2225436789', 'harshali@gmail.com', 'brahmpur', 'madhyapradesh', '2023-09-15 08:19:02'),
(67, 'vaibhav patil', '2001-02-07', 'Male', 'AB pos', '9823095676', 'vaibhav@gmail.com', 'brahmpur', 'madhya pradesh', '2023-09-15 09:03:55');

-- --------------------------------------------------------

--
-- Table structure for table `donor_details`
--

CREATE TABLE `donor_details` (
  `donor_id` int(11) NOT NULL,
  `donor_name` varchar(50) NOT NULL,
  `donor_number` varchar(10) NOT NULL,
  `donor_mail` varchar(50) DEFAULT NULL,
  `donor_age` int(60) NOT NULL,
  `donor_gender` varchar(10) NOT NULL,
  `donor_blood` varchar(10) NOT NULL,
  `donor_address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `donor_details`
--

INSERT INTO `donor_details` (`donor_id`, `donor_name`, `donor_number`, `donor_mail`, `donor_age`, `donor_gender`, `donor_blood`, `donor_address`) VALUES
(1, 'John Doe', '1234567890', 'john.doe@example.com', 30, 'Male', 'O+', '123 Main St, City'),
(2, 'Jane Smith', '9876543210', 'jane.smith@example.com', 25, 'Female', 'A-', '456 Elm St, Town');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `page_id` int(11) NOT NULL,
  `page_name` varchar(255) NOT NULL,
  `page_type` varchar(255) NOT NULL,
  `page_data` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`page_id`, `page_name`, `page_type`, `page_data`) VALUES
(2, 'Why Become Donor', 'donor', '<span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">Blood is the most precious gift that anyone can give to another person — the gift of life. A decision to donate your blood can save a life, or even several if your blood is separated into its components — red cells, platelets and plasma — which can be used individually for patients with specific conditions. Safe blood saves lives and improves health. Blood transfusion is needed for:\r\n<ul><li>women with complications of pregnancy, such as ectopic pregnancies and haemorrhage before, during or after childbirth.\r\n</li><li>children with severe anaemia often resulting from malaria or malnutrition.\r\n</li><li>people with severe trauma following man-made and natural disasters.\r\n</li><li>many complex medical and surgical procedures and cancer patients.</li></ul>\r\n<br>It is also needed for regular transfusions for people with conditions such as thalassaemia and sickle cell disease and is used to make products such as clotting factors for people with haemophilia. There is a constant need for regular blood supply because blood can be stored for only a limited time before use. Regular blood donations by a sufficient number of healthy people are needed to ensure that safe blood will be available whenever and wherever it is needed.</span>'),
(3, 'About Us ', 'aboutus', '<span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">Blood bank is a place where blood bag that is collected from blood donation events is stored in one place. The term “blood bank” refers to a division of a hospital laboratory where the storage of blood product occurs and where proper testing is performed to reduce the risk of transfusion related events . The process of managing the blood bag that is received from the blood donation events needs a proper and systematic management. The blood bag must be handled with care and treated thoroughly as it is related to someone’s life. The development of Web-based Blood Bank And Donation Management System (BBDMS) is proposed to provide a management functional to the blood bank in order to handle the blood bag and to make entries of the individuals who want to donate blood and who are in need.</span>');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `passwords` varchar(15) NOT NULL,
  `names` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `passwords`, `names`) VALUES
(1, 'deepakgiree41@gmail.', '123passw', ''),
(2, 'dipakgiree41@gmail.com', 'ABCD@mymail', ''),
(3, 'rahul@gmail.com', 'ABCD', ''),
(4, 'harsh@gmail.com', 'ABCD', 'Harsh');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_info`
--
ALTER TABLE `admin_info`
  ADD PRIMARY KEY (`admin_id`),
  ADD UNIQUE KEY `admin_id` (`admin_id`),
  ADD UNIQUE KEY `admin_username` (`admin_username`);

--
-- Indexes for table `blood`
--
ALTER TABLE `blood`
  ADD PRIMARY KEY (`blood_id`);

--
-- Indexes for table `contact_info`
--
ALTER TABLE `contact_info`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `contact_query`
--
ALTER TABLE `contact_query`
  ADD PRIMARY KEY (`query_id`);

--
-- Indexes for table `donors`
--
ALTER TABLE `donors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donor_details`
--
ALTER TABLE `donor_details`
  ADD PRIMARY KEY (`donor_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_info`
--
ALTER TABLE `admin_info`
  MODIFY `admin_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `blood`
--
ALTER TABLE `blood`
  MODIFY `blood_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `contact_info`
--
ALTER TABLE `contact_info`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contact_query`
--
ALTER TABLE `contact_query`
  MODIFY `query_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `donors`
--
ALTER TABLE `donors`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `donor_details`
--
ALTER TABLE `donor_details`
  MODIFY `donor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
