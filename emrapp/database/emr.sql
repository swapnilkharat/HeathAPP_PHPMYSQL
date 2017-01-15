-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 15, 2017 at 06:04 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `emr`
--

-- --------------------------------------------------------

--
-- Table structure for table `emergency_contact`
--

CREATE TABLE `emergency_contact` (
  `S.no` int(11) NOT NULL,
  `Patient_ID` int(11) NOT NULL,
  `Emergency_contact_type` varchar(250) NOT NULL,
  `Emergency_name` varchar(250) NOT NULL,
  `Emergency_Addrs1` varchar(250) NOT NULL,
  `Emergency_Addrs2` varchar(250) NOT NULL,
  `Emergency_city` varchar(250) NOT NULL,
  `Emergency_state` varchar(250) NOT NULL,
  `Emergency_Zipcode` int(11) NOT NULL,
  `Emergency_hphone` int(11) NOT NULL,
  `Emergency_cphone` int(11) NOT NULL,
  `Emergency_wphone` int(11) NOT NULL,
  `Emergency_relation` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emergency_contact`
--

INSERT INTO `emergency_contact` (`S.no`, `Patient_ID`, `Emergency_contact_type`, `Emergency_name`, `Emergency_Addrs1`, `Emergency_Addrs2`, `Emergency_city`, `Emergency_state`, `Emergency_Zipcode`, `Emergency_hphone`, `Emergency_cphone`, `Emergency_wphone`, `Emergency_relation`) VALUES
(1, 1, 'Emergency Contact1', 'poi', 'uyt', 'rewq', 'asd', 'Michigan', 789, 147, 258, 369, 'Father'),
(2, 1, 'Emergency Contact2', 'lkj', 'hgf', 'dsa', 'zxc', 'New York', 456, 369, 258, 147, 'Brother'),
(3, 1, 'Emergency Contact3', 'mnb', 'vcx', 'zxcv', 'bnm', 'California', 123, 258, 147, 369, 'Friend');

-- --------------------------------------------------------

--
-- Table structure for table `ethinicity`
--

CREATE TABLE `ethinicity` (
  `S.no` int(11) NOT NULL,
  `CategoriesE` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ethinicity`
--

INSERT INTO `ethinicity` (`S.no`, `CategoriesE`) VALUES
(0, 'American'),
(1, 'Indian'),
(2, 'African'),
(3, 'European'),
(4, 'Austrlian');

-- --------------------------------------------------------

--
-- Table structure for table `language`
--

CREATE TABLE `language` (
  `S.no` int(11) NOT NULL,
  `Type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `language`
--

INSERT INTO `language` (`S.no`, `Type`) VALUES
(0, 'English'),
(1, 'French'),
(2, 'German'),
(3, 'Hindi'),
(4, 'Chinese');

-- --------------------------------------------------------

--
-- Table structure for table `medhistory`
--

CREATE TABLE `medhistory` (
  `s_no` int(100) NOT NULL,
  `MedhistoryType` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medhistory`
--

INSERT INTO `medhistory` (`s_no`, `MedhistoryType`) VALUES
(0, 'AAA'),
(1, 'ADHD'),
(2, 'Alcohol/Substance Abuse'),
(3, 'Allergies'),
(4, 'Alzheimer''s'),
(5, 'Anxiety'),
(6, 'Arthritis'),
(7, 'Asthama'),
(8, 'Atrial Fibrillation'),
(9, 'Back Pain, Chronic'),
(10, 'Bleeding Problems'),
(11, 'CAD'),
(12, 'Cancer'),
(13, 'Cancer - Breast'),
(14, 'Cancer - Colon'),
(15, 'Cancer - Prostate'),
(16, 'Cancer - Skin'),
(17, 'Cancer - Thyroid'),
(18, 'CHF'),
(19, 'COPD'),
(20, 'Crohns Disease'),
(21, 'CVA'),
(22, 'Dementia'),
(23, 'Depression'),
(24, 'Diabetes'),
(25, 'Epilespy'),
(26, 'Erectile Dysfunction'),
(27, 'Fibromyalgia'),
(28, 'GI Bleeding'),
(29, 'Gout'),
(30, 'Head Concussion'),
(31, 'Headaches / Chronic'),
(32, 'Hearing Loss'),
(33, 'Heart Attack'),
(34, 'Heart Disease'),
(35, 'Heartburn'),
(36, 'High Blood Pressure'),
(37, 'High Cholesterol'),
(38, 'HTN'),
(39, 'Hyperlipidemia'),
(40, 'Hyperthyrodism'),
(41, 'IDDM'),
(42, 'Insomnia'),
(43, 'Irritable Bowel Syndrome'),
(44, 'MI'),
(45, 'NIDDM'),
(46, 'Obesity'),
(47, 'Osteporosis'),
(48, 'PID'),
(49, 'Reflux'),
(50, 'Seizures'),
(51, 'Sickle Cell'),
(52, 'Stroke'),
(53, 'Surgery, Appendectomy'),
(54, 'Surgery,Bypass'),
(55, 'Surgery,CABG'),
(56, 'Surgery,Cholecystectomy'),
(57, 'Surgery,Coronary Artery Bypass Graftling'),
(58, 'Surgery,Hysterectomy'),
(59, 'Surgery, Joint Replacement'),
(60, 'Surgery, Mastectomy'),
(61, 'Surgery, Sinus Surgery'),
(62, 'Surgery ,Thyroidectomy'),
(63, 'Thyroid Condition'),
(64, 'TIA'),
(65, 'Tonsilitis'),
(66, 'Tuberculosis Expossure'),
(67, 'UIcer'),
(68, 'UIcers'),
(69, 'UTI,Chronic'),
(70, 'Vision Loss');

-- --------------------------------------------------------

--
-- Table structure for table `parent_medhistory`
--

CREATE TABLE `parent_medhistory` (
  `S_no` int(11) NOT NULL,
  `Patient_ID` int(11) NOT NULL,
  `ParentMedHistory` varchar(250) NOT NULL,
  `Relationship` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `parent_medhistory`
--

INSERT INTO `parent_medhistory` (`S_no`, `Patient_ID`, `ParentMedHistory`, `Relationship`) VALUES
(1, 1, 'Heartburn', 'Friend'),
(2, 1, 'IDDM', 'Brother'),
(3, 1, 'MI', 'Sister');

-- --------------------------------------------------------

--
-- Table structure for table `patientinfo`
--

CREATE TABLE `patientinfo` (
  `S_no` int(11) NOT NULL,
  `Patient_ID` int(11) NOT NULL,
  `Gender` varchar(250) NOT NULL,
  `Race` varchar(250) NOT NULL,
  `Ethinicity` varchar(250) NOT NULL,
  `Pref_Language` varchar(250) NOT NULL,
  `Home_Phone` int(11) NOT NULL,
  `Cell_Phone` int(11) NOT NULL,
  `Work_Phone` int(11) NOT NULL,
  `Email_Addrs` varchar(250) NOT NULL,
  `Direct_Addrs` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patientinfo`
--

INSERT INTO `patientinfo` (`S_no`, `Patient_ID`, `Gender`, `Race`, `Ethinicity`, `Pref_Language`, `Home_Phone`, `Cell_Phone`, `Work_Phone`, `Email_Addrs`, `Direct_Addrs`) VALUES
(1, 1, 'Male', 'American Indian or Alaska Native', 'American', 'English', 123, 456, 789, 'swap460@gmail.com', 'H.No-360, Sr.No-22/1, Gurudatta Colony,Ambegaon Bk, Pune-46');

-- --------------------------------------------------------

--
-- Table structure for table `patientinfo_behaviour`
--

CREATE TABLE `patientinfo_behaviour` (
  `S_no` int(11) NOT NULL,
  `Patient_ID` int(11) NOT NULL,
  `Type_Daycare` varchar(50) NOT NULL,
  `Daycare_PerWeek` int(11) NOT NULL,
  `Current_SchoolLevel` varchar(50) NOT NULL,
  `Average_Grade` varchar(50) NOT NULL,
  `Activities` text NOT NULL,
  `Bike_Helmet` varchar(50) NOT NULL,
  `Seat_Belts` varchar(50) NOT NULL,
  `Car_Seats` varchar(50) NOT NULL,
  `Average_Diet` varchar(50) NOT NULL,
  `Milk_Use` varchar(50) NOT NULL,
  `Number_bf` int(11) NOT NULL,
  `Water_Use` varchar(50) NOT NULL,
  `Sleeping_Location` varchar(50) NOT NULL,
  `Sleeping_Frequency` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patientinfo_behaviour`
--

INSERT INTO `patientinfo_behaviour` (`S_no`, `Patient_ID`, `Type_Daycare`, `Daycare_PerWeek`, `Current_SchoolLevel`, `Average_Grade`, `Activities`, `Bike_Helmet`, `Seat_Belts`, `Car_Seats`, `Average_Diet`, `Milk_Use`, `Number_bf`, `Water_Use`, `Sleeping_Location`, `Sleeping_Frequency`) VALUES
(1, 1, 'A', 1, 'Graduate', 'A', 'zxcvbnm', 'Regular', 'Irregular', 'B', 'C', 'A', 1, 'B', 'A', '8-9 hrs');

-- --------------------------------------------------------

--
-- Table structure for table `patientinfo_personal`
--

CREATE TABLE `patientinfo_personal` (
  `S.no` int(11) NOT NULL,
  `Patient_ID` int(11) NOT NULL,
  `Insurance` varchar(250) NOT NULL,
  `Hearaboutus` varchar(250) NOT NULL,
  `Reference` varchar(250) NOT NULL,
  `Emp_name` varchar(250) NOT NULL,
  `Emp_addrs1` varchar(250) NOT NULL,
  `Emp_addrs2` varchar(50) NOT NULL,
  `Emp_city` varchar(250) NOT NULL,
  `Emp_state` varchar(250) NOT NULL,
  `Emp_Zipcode` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patientinfo_personal`
--

INSERT INTO `patientinfo_personal` (`S.no`, `Patient_ID`, `Insurance`, `Hearaboutus`, `Reference`, `Emp_name`, `Emp_addrs1`, `Emp_addrs2`, `Emp_city`, `Emp_state`, `Emp_Zipcode`) VALUES
(1, 1, 'health	', 'Socail Media', 'A', 'nml', 'hjk', 'yui', 'op', 'Texas', 369);

-- --------------------------------------------------------

--
-- Table structure for table `patientinfo_social`
--

CREATE TABLE `patientinfo_social` (
  `S_no` int(11) NOT NULL,
  `Patient_ID` int(11) NOT NULL,
  `Parents_MaritalStatus` varchar(250) NOT NULL,
  `Livewith` varchar(250) NOT NULL,
  `Occupation` varchar(250) NOT NULL,
  `Pets` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patientinfo_social`
--

INSERT INTO `patientinfo_social` (`S_no`, `Patient_ID`, `Parents_MaritalStatus`, `Livewith`, `Occupation`, `Pets`) VALUES
(1, 1, 'Single', 'Alone', 'BE', 'Dog');

-- --------------------------------------------------------

--
-- Table structure for table `patient_medhistory`
--

CREATE TABLE `patient_medhistory` (
  `S_no` int(11) NOT NULL,
  `Patient_ID` int(11) NOT NULL,
  `s_no_medhistory` int(11) NOT NULL,
  `MedHistory` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient_medhistory`
--

INSERT INTO `patient_medhistory` (`S_no`, `Patient_ID`, `s_no_medhistory`, `MedHistory`) VALUES
(1, 1, 44, 'MI'),
(2, 1, 45, 'NIDDM'),
(3, 1, 46, 'Obesity'),
(4, 1, 47, 'Osteporosis');

-- --------------------------------------------------------

--
-- Table structure for table `patient_otherhistory`
--

CREATE TABLE `patient_otherhistory` (
  `S_no` int(11) NOT NULL,
  `Patient_ID` int(11) NOT NULL,
  `OtherMedCondition` text NOT NULL,
  `Yearofsurgery` date NOT NULL,
  `Surgery_Name` varchar(250) NOT NULL,
  `Location_surgery` varchar(250) NOT NULL,
  `Allergies` varchar(250) NOT NULL,
  `Pharmacy` varchar(250) NOT NULL,
  `Medication_Name` varchar(250) NOT NULL,
  `Medication_Strength` varchar(250) NOT NULL,
  `Medication_doseform` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient_otherhistory`
--

INSERT INTO `patient_otherhistory` (`S_no`, `Patient_ID`, `OtherMedCondition`, `Yearofsurgery`, `Surgery_Name`, `Location_surgery`, `Allergies`, `Pharmacy`, `Medication_Name`, `Medication_Strength`, `Medication_doseform`) VALUES
(1, 1, 'asdfghjkl', '0000-00-00', 'aabb', 'pune', 'ttyy', 'uuii', 'oopp', 'llkk', 'jjhh');

-- --------------------------------------------------------

--
-- Table structure for table `physicalandbilling_addrs`
--

CREATE TABLE `physicalandbilling_addrs` (
  `S.no` int(11) NOT NULL,
  `Patient_ID` int(11) NOT NULL,
  `Addrs_type` varchar(250) NOT NULL,
  `Address1` varchar(250) NOT NULL,
  `Address2` varchar(250) NOT NULL,
  `City` varchar(250) NOT NULL,
  `State` varchar(250) NOT NULL,
  `Zip_code` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `physicalandbilling_addrs`
--

INSERT INTO `physicalandbilling_addrs` (`S.no`, `Patient_ID`, `Addrs_type`, `Address1`, `Address2`, `City`, `State`, `Zip_code`) VALUES
(1, 1, 'Physical', 'zxc', 'asd', 'qwe', 'California', 147),
(2, 1, 'Billing', 'vbn', 'fgh', 'rty', 'Florida', 258);

-- --------------------------------------------------------

--
-- Table structure for table `race`
--

CREATE TABLE `race` (
  `S.no` int(11) NOT NULL,
  `Categories` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `race`
--

INSERT INTO `race` (`S.no`, `Categories`) VALUES
(0, 'Alaskan Native(Aleut,Eskimo,Indian)'),
(1, 'American Indian or Alaska Native'),
(2, 'Asian'),
(3, 'Asian / Pacific Inslander'),
(4, 'Black or African American');

-- --------------------------------------------------------

--
-- Table structure for table `relationship`
--

CREATE TABLE `relationship` (
  `S.no` int(11) NOT NULL,
  `Relationtype` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `relationship`
--

INSERT INTO `relationship` (`S.no`, `Relationtype`) VALUES
(0, 'Father'),
(1, 'Mother'),
(2, 'Brother'),
(3, 'Sister'),
(4, 'Uncle'),
(5, 'Aunt'),
(6, 'Friend');

-- --------------------------------------------------------

--
-- Table structure for table `smoke`
--

CREATE TABLE `smoke` (
  `S_no` int(11) NOT NULL,
  `Patient_ID` int(11) NOT NULL,
  `Smoke_Detector` varchar(250) NOT NULL,
  `Smoking_Status` varchar(250) NOT NULL,
  `Comments` text NOT NULL,
  `Start_Date` date NOT NULL,
  `Quite_Date` date NOT NULL,
  `Smoke_Exposure` varchar(250) NOT NULL,
  `CO_detector` varchar(250) NOT NULL,
  `Firearm_Present` varchar(250) NOT NULL,
  `Firearm_Secured` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `smoke`
--

INSERT INTO `smoke` (`S_no`, `Patient_ID`, `Smoke_Detector`, `Smoking_Status`, `Comments`, `Start_Date`, `Quite_Date`, `Smoke_Exposure`, `CO_detector`, `Firearm_Present`, `Firearm_Secured`) VALUES
(1, 1, 'Yes', 'Smoke Daily', 'Higher', '2017-01-14', '2017-01-14', 'Yes', 'No', 'Yes', 'No');

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE `states` (
  `S.no` int(11) NOT NULL,
  `State` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`S.no`, `State`) VALUES
(0, 'California'),
(1, 'Florida'),
(2, 'Texas'),
(3, 'Michigan'),
(4, 'New York');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Patient_ID` int(11) NOT NULL,
  `Patient_Name` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Patient_ID`, `Patient_Name`, `Password`) VALUES
(1, 'abcd', '1234'),
(2, 'efgh', '5678'),
(3, 'xyz', '123456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `emergency_contact`
--
ALTER TABLE `emergency_contact`
  ADD PRIMARY KEY (`S.no`);

--
-- Indexes for table `parent_medhistory`
--
ALTER TABLE `parent_medhistory`
  ADD PRIMARY KEY (`S_no`);

--
-- Indexes for table `patientinfo`
--
ALTER TABLE `patientinfo`
  ADD PRIMARY KEY (`S_no`),
  ADD UNIQUE KEY `S_no` (`S_no`);

--
-- Indexes for table `patientinfo_behaviour`
--
ALTER TABLE `patientinfo_behaviour`
  ADD PRIMARY KEY (`S_no`);

--
-- Indexes for table `patientinfo_personal`
--
ALTER TABLE `patientinfo_personal`
  ADD PRIMARY KEY (`S.no`);

--
-- Indexes for table `patientinfo_social`
--
ALTER TABLE `patientinfo_social`
  ADD PRIMARY KEY (`S_no`);

--
-- Indexes for table `patient_medhistory`
--
ALTER TABLE `patient_medhistory`
  ADD PRIMARY KEY (`S_no`);

--
-- Indexes for table `patient_otherhistory`
--
ALTER TABLE `patient_otherhistory`
  ADD PRIMARY KEY (`S_no`);

--
-- Indexes for table `physicalandbilling_addrs`
--
ALTER TABLE `physicalandbilling_addrs`
  ADD PRIMARY KEY (`S.no`);

--
-- Indexes for table `smoke`
--
ALTER TABLE `smoke`
  ADD PRIMARY KEY (`S_no`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Patient_ID`),
  ADD KEY `Patient_ID` (`Patient_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `emergency_contact`
--
ALTER TABLE `emergency_contact`
  MODIFY `S.no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `parent_medhistory`
--
ALTER TABLE `parent_medhistory`
  MODIFY `S_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `patientinfo`
--
ALTER TABLE `patientinfo`
  MODIFY `S_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `patientinfo_behaviour`
--
ALTER TABLE `patientinfo_behaviour`
  MODIFY `S_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `patientinfo_personal`
--
ALTER TABLE `patientinfo_personal`
  MODIFY `S.no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `patientinfo_social`
--
ALTER TABLE `patientinfo_social`
  MODIFY `S_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `patient_medhistory`
--
ALTER TABLE `patient_medhistory`
  MODIFY `S_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `patient_otherhistory`
--
ALTER TABLE `patient_otherhistory`
  MODIFY `S_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `physicalandbilling_addrs`
--
ALTER TABLE `physicalandbilling_addrs`
  MODIFY `S.no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `smoke`
--
ALTER TABLE `smoke`
  MODIFY `S_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `Patient_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
