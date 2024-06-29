-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 19, 2020 at 01:15 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jobscope`
--

-- --------------------------------------------------------

--
-- Table structure for table `applicants`
--

CREATE TABLE `applicants` (
  `a_id` int(4) NOT NULL,
  `a_uid` varchar(30) NOT NULL,
  `a_jid` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `applicants`
--

INSERT INTO `applicants` (`a_id`, `a_uid`, `a_jid`) VALUES
(46, '3', '11'),
(47, '3', '6'),
(48, '3', '4'),
(49, '6', '6'),
(50, '6', '1'),
(51, '6', '4'),
(52, '6', '6'),
(53, '3', '1');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(4) NOT NULL,
  `cat_nm` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_nm`) VALUES
(1, 'Software Engineering Jobs'),
(2, 'Animation Jobs'),
(3, 'Accounting Jobs'),
(4, 'Banking Jobs'),
(5, 'Data Science Jobs'),
(6, 'Online Marketing Jobs');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `cont_id` int(4) NOT NULL,
  `cont_fnm` varchar(30) NOT NULL,
  `cont_email` varchar(20) NOT NULL,
  `cont_query` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`cont_id`, `cont_fnm`, `cont_email`, `cont_query`) VALUES
(1, 'Riddhi', 'riddhi_patel@gmail.c', 'xyz'),
(2, 'Darshana', 'darshana@yahoo.com', 'Good website'),
(3, 'Himangini', 'himanginijain001@gma', 'This is my first query.\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `ee_id` int(4) NOT NULL,
  `ee_fnm` varchar(30) NOT NULL,
  `ee_pwd` varchar(10) NOT NULL,
  `ee_gender` varchar(1) NOT NULL,
  `ee_email` varchar(30) NOT NULL,
  `ee_add` varchar(300) NOT NULL,
  `ee_mobileno` varchar(10) NOT NULL,
  `ee_current_location` varchar(20) NOT NULL,
  `ee_monthlysalary` int(10) NOT NULL,
  `ee_current_industry` varchar(20) NOT NULL,
  `ee_qualification` varchar(10) NOT NULL,
  `ee_profile` varchar(300) NOT NULL,
  `ee_resume` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`ee_id`, `ee_fnm`, `ee_pwd`, `ee_gender`, `ee_email`, `ee_add`, `ee_mobileno`, `ee_current_location`, `ee_monthlysalary`, `ee_current_industry`, `ee_qualification`, `ee_profile`, `ee_resume`) VALUES
(1, 'megha', 'megha11', 'f', 'megha_patel@gmail.com', '\"megha\",2nd floor ,rajkot', '9934235456', 'rajkot', 45000, 'infosys', 'MBA', 'Good with the Englishand HIndi lanuguages', 'megha.doc'),
(2, 'Darshana', 'darshana11', 'f', 'darshana_\\@yahoo.com', '\"darshana\",ahemadabad', '9423456789', 'mumbai', 35000, 'tcs', 'M.Tech', 'Best in Designing the projects', 'darshana.doc'),
(3, 'Himangini', '1234567', 'f', 'himanginijain001@gmail.com', 'NEW SWAMI NAGAR TEKRI MADRI LINK ROAD', '9876543210', 'Jaipur', 10000, 'Excel Techno', 'BCA', 'Best with coding', 'RESUME him.docx'),
(4, 'Riya', '1234567', 'f', 'yugriya@gmail.com', 'ram nagar', '9876543210', 'Udaipur', 12000, 'Global Tech', 'MCA', 'Good in Communication skills', 'riya.doc'),
(5, 'Jatin', '1234567', 'm', 'j@gmail.com', 'New tower jaipur,Rajasthan', '9876543210', 'Jaipur', 10000, 'Arena Animation', 'Dmploma in', 'Animation Artist', 'jay.dox'),
(6, 'Prince', '1234567', 'm', 'p@gmail.com', 'a- lock lerela', '9876543210', 'Kerela', 12000, 'Diverse Immigration', 'CA', 'Accounting Specialist', 'prince.dox'),
(7, 'Kartik', '1234567', 'm', 'k@gmail.com', 'P-Block Jamnagar', '9876543210', 'Banglore', 15000, 'Snaphunt', 'B.Tech', 'Data Engineer', 'kartik.dox'),
(8, 'Tina', '1234567', 'f', 't@gmail.com', 't_rose colony', '9876543210', 'Mumbai', 20000, 'Hill Top', 'MSc IT ', 'SEO Expert', 'tina.dox');

-- --------------------------------------------------------

--
-- Table structure for table `employers`
--

CREATE TABLE `employers` (
  `er_id` int(4) NOT NULL,
  `er_fnm` varchar(30) NOT NULL,
  `er_pwd` varchar(10) NOT NULL,
  `er_company` varchar(30) NOT NULL,
  `er_add` varchar(100) NOT NULL,
  `er_ph` varchar(10) NOT NULL,
  `er_email` varchar(30) NOT NULL,
  `er_company_profile` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employers`
--

INSERT INTO `employers` (`er_id`, `er_fnm`, `er_pwd`, `er_company`, `er_add`, `er_ph`, `er_email`, `er_company_profile`) VALUES
(1, 'admin', '1111111', 'infosys', '\"infosys\",mumbai.', '0112345678', 'infosys_company@gmail.com', 'abc'),
(2, 'Riddhi', '1234567', 'Excel Tech pvt. Ltd.', 'infosys,mumbai.', '9925361132', 'riddhi@gmail.com', 'abc'),
(3, 'Shivaraj', '1234567', 'Bank Operators', '\"tcs\",gandinagar.', '0792143576', 'vishwa_patel@gmail.com', 'abc'),
(4, 'Ruskhika', '1234567', 'Software Pvt. Ltd,', 'patnyy,gandhinagar.', '0798765432', 'patny_company@yahoo.com', 'abc'),
(5, 'Alok Sharma', '1234567', 'Trade Digitally', 'Trade Digital,ahemadabad', '0792345677', 'sagar@gmail.com', 'dsfg');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `j_id` int(4) NOT NULL,
  `j_category` varchar(40) NOT NULL,
  `j_owner_name` varchar(30) NOT NULL,
  `j_title` varchar(30) NOT NULL,
  `j_date` datetime NOT NULL DEFAULT current_timestamp(),
  `j_hours` float(3,1) NOT NULL,
  `j_salary` int(10) NOT NULL,
  `j_experience` int(3) NOT NULL,
  `j_discription` varchar(300) NOT NULL,
  `j_city` varchar(20) NOT NULL,
  `j_state` varchar(30) NOT NULL,
  `j_active` int(1) NOT NULL DEFAULT 0,
  `j_company` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`j_id`, `j_category`, `j_owner_name`, `j_title`, `j_date`, `j_hours`, `j_salary`, `j_experience`, `j_discription`, `j_city`, `j_state`, `j_active`, `j_company`) VALUES
(1, 'Software Engineering Jobs', 'Riddhi', 'Senior Product Engineer - Full', '2020-10-17 22:05:44', 8.0, 20000, 2, 'Qualification: BE/B tech ,MCA<br>\r\nTechnical skills :<br>\r\nl Candidates should have knowledge of SQL, any DBMS<br>\r\n2 Basic programming skills and OOPS concepts<br>\r\n3 Basic cloud concept<br>', 'Pune', 'Maharashtra', 1, 'Fly Care India'),
(2, 'Accounting Jobs', 'Ruskhika', 'ACCOUNTS EXECUTIVE –NUNGAMBAKK', '2020-10-17 22:11:35', 7.0, 15000, 0, ' Qualification: Degree In Commerce [B.Com]<br>\r\n Experience: :  0 -- 3 YEARS <br>\r\n DESIRED SKILL : KNOWLEDGE IN TALLY / MS Office <br>\r\n OTHER SKILLS : GOOD COMMUNICATION <br>\r\n PAY : ACCORDING TO EXPERIENCE\r\n', 'Chennai', 'Tamil Nadu', 1, 'Pioneer Consultants'),
(3, 'Animation Jobs', 'Shivaraj', 'Animation Artist', '2020-10-17 22:26:44', 6.0, 20000, 2, 'Must have skills:<br>\r\nGood knowledge of creative visualization and animation.<br>\r\nKnowledge of After Effects, Premier Pro, Photoshop, Illustrator.<br>\r\nCandidates with experience in 2D animation.', 'Bangalore', 'Karnataka', 1, 'HRvisory'),
(4, 'Software Engineering Jobs', 'Riddhi', 'Software Engineer (Java)', '2020-10-19 13:24:27', 9.0, 360000, 1, 'Join an award-winning and well-backed FinTech startup.<br>\r\nExciting opportunity for early stage professionals with a zeal to learn & deliver winning products<br>\r\nWork alongside & learn from best in class talent<br>\r\nThe Profile<br>\r\nYou possess a Degree in Computer Science, Engineering or related ', 'Bengaluru ', 'Karnataka', 1, 'Venpa Staffing Services India Private Limited'),
(5, 'Software Engineering Jobs', 'Riddhi', 'Cyber Security Operations Cent', '2020-10-19 13:24:27', 9.0, 30000, 3, 'Key Responsibilities:<br>\r\n• Monitoring and analysis of cyber security events<br>\r\n• Fully operate from Cradle to Grave the incident response process<br>\r\n• Conducting incident response within a major public cloud (i.e. AWS, GCP , Azure).<br>\r\n• Excellent understanding about Windows and Linux OS int', 'Chennai', 'Tamil Nadu', 1, 'Trimble Information Technologies India Private Limited'),
(6, 'Software Engineering Jobs', 'Riddhi', 'Technical Lead – General Softw', '2020-10-19 13:35:47', 7.0, 50000, 6, 'Complete diagnostics software requirement understanding<br>\r\n• OEM specific infrastructure/platform software understanding and deriving the requirements<br>\r\n• Expertise in UDS and OBD-II protocol<br>\r\n• Mapping the software requirements to the design elements and creating the interfaces<br>\r\n• Deri', 'Mumbai', 'Maharashtra', 1, '2COMS Consulting Private Limited'),
(7, 'Banking Jobs', 'Shivaraj', 'Business Analyst', '2020-10-19 14:53:57', 6.0, 25000, 6, 'Key roles and responsibilities have been defined below.<br>\r\n• Conduct workshops with Operations Team to understand end-to-end processes & develop.<br>\r\n• Work with process owners to design future-state processes<br>\r\n• MS Office : Excel , Word and Powerpoint<br>\r\n• Proficiency in using Visio or sim', 'Delhi', 'Delhi', 1, 'Inspiration Manpower Consultancy Private Limited'),
(8, 'Banking Jobs', 'Shivaraj', 'Office Assistant || FRESHERS C', '2020-10-19 14:53:57', 6.0, 8000, 0, 'JOB DETAILS=><br>\r\n=>Branch Banking Executive.<br>\r\n=> Back office Executive<br.<br>\r\n=>Data Entry Operator.<br>\r\n=> Front Office Executive for Personal Banker.', 'Jaipur', 'Rajasthan', 0, 'BSP Career'),
(9, 'Data Science Jobs', 'Alok Sharma', 'Data Modeler', '2020-10-19 15:04:42', 7.0, 15000, 3, 'You will be responsible for :<br>\r\nUnderstanding existing data systems.<br>\r\nChecking for compatibility and finalizing on feasible solutions.<br>\r\nFollowing data best practices to ensure consistency.<br>\r\nEnsuring discrepancies are taken care of before large scale deployment.', 'Ahemdabad', 'gujarat', 0, 'Transgnx HR Solutions Private Limited'),
(10, 'Data Science Jobs', 'Alok Sharma', 'Big Data Engineer', '2020-10-19 15:04:42', 7.0, 30000, 3, 'Job Description<br>\r\n• 2+ years of experience in Software Development including Big Data Analytics area<br>\r\n• Experience in Hadoop Big Data Platform Operations and Administration<br>\r\n• High Proficiency working with Hadoop platform including Hadoop, Hive,etc..<br>\r\n• Experience with any scripting l', 'Indore', 'Maharastra', 1, 'Magna Infotech Limited\r\n'),
(11, 'Online Marketing Jobs', 'Ruskhika', 'SEO Executive', '2020-10-19 15:09:15', 7.0, 8000, 2, 'You will be responsible for :<br>\r\nDriving performance marketing via SEO/SEM.<br>\r\nReviewing and optimising the design and content of all online assets.<br>\r\nUnderstanding our user base and using A/B testing to optimise campaign performance.<br>\r\nWorking closely with content marketing and design tea', 'Gurgaon ', 'Delhi', 1, 'TFG Digital India');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applicants`
--
ALTER TABLE `applicants`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`cont_id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`ee_id`);

--
-- Indexes for table `employers`
--
ALTER TABLE `employers`
  ADD PRIMARY KEY (`er_id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`j_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `applicants`
--
ALTER TABLE `applicants`
  MODIFY `a_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `cont_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `ee_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `employers`
--
ALTER TABLE `employers`
  MODIFY `er_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `j_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
