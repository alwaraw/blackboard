

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `school`
--
CREATE DATABASE IF NOT EXISTS `school` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `school`;

-- --------------------------------------------------------

--
-- Table structure for table `educator`
--

CREATE TABLE IF NOT EXISTS `educator` (
  `AID` int(11) NOT NULL AUTO_INCREMENT,
  `ANAME` varchar(150) NOT NULL,
  `APASS` varchar(150) NOT NULL,
  PRIMARY KEY (`AID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `educator`
--

INSERT INTO `educator` (`AID`, `ANAME`, `APASS`) VALUES
(1, 'educator', '1234');


-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `TID` int(11) NOT NULL AUTO_INCREMENT,
  `TNAME` varchar(150) NOT NULL,
  `TPASS` varchar(150) NOT NULL,
  `QUAL` varchar(150) NOT NULL,
  `SAL` varchar(150) NOT NULL,
  `PNO` varchar(150) NOT NULL,
  `MAIL` varchar(150) NOT NULL,
  `PADDR` text NOT NULL,
  `IMG` varchar(150) NOT NULL,
  PRIMARY KEY (`TID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`TID`, `TNAME`, `TPASS`, `QUAL`, `SAL`, `PNO`, `MAIL`, `PADDR`, `IMG`) VALUES
(1, 'student', '1234', 'BCs', '60000', '519-999-9999', 'student@uwindsor.ca', 'Windsor', 'student/2.jpg');

-- --------------------------------------------------------


-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE IF NOT EXISTS `class` (
  `CID` int(11) NOT NULL AUTO_INCREMENT,
  `CSID` varchar(10) NOT NULL,
  `CNAME` varchar(150) NOT NULL,
  `CSEC` varchar(150) NOT NULL,
  PRIMARY KEY (`CID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`CSID`, `CNAME`, `CSEC`) VALUES
('COMP 1000', 'Key Concepts in Computer Science', '001'),
('COMP 1400', 'Introduction to Algorithms and Programming I', '001'),
('COMP 2057', 'Introduction to Internet', '001'),
('COMP 2077', 'Problem Solving and Information on the Internet', 'Distance Education'),
('COMP 2120', 'Object Oriented Programming Using Java', '001'),
('COMP 2310', 'Theoretical Foundations of Computer Science', '001'),
('COMP 2560', 'System Programming', '001'),
('COMP-2660', 'Computer Architecture II: Microprocessor Programming', '001'),
('COMP-2750', 'Selected Topics', '001'),
('COMP-2980', 'Co-op Work Term I', '001'),
('COMP-3077', 'Web-Based Data Management', '001'),
('COMP-3150', 'Database Management Systems', '001'),
('COMP-3300', 'Operating Systems Fundamentals', '001'),
('COMP-3400', 'Advanced Object Oriented System Design Using C++', '001');


-- --------------------------------------------------------
--
-- Table structure for table `class_next` 
--       next semester classes
--

CREATE TABLE IF NOT EXISTS `class_next` (
  `CIDN` int(11) NOT NULL AUTO_INCREMENT,
  `CSIDN` varchar(10) NOT NULL,
  `CNAMEN` varchar(150) NOT NULL,
  `CSECN` varchar(150) NOT NULL,
  PRIMARY KEY (`CIDN`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;


--
-- Dumping data for table `class_next`
--      next semester classes
--


INSERT INTO `class_next` (`CSIDN`, `CNAMEN`, `CSECN`) VALUES
('COMP 1047', 'Computer concepts for End Users', '001'),
('COMP 1410', 'Introduction to Algorithms and Programming II', '001'),
('COMP 2067', 'Programming for Beginners', 'Distance Education'),
('COMP 2097', 'Social Media and Mobile Technology for End Users', '001'),
('COMP 2140', 'Computer Languages, Grammars, and Translators', '001'),
('COMP 2540', 'Data Structures and Algorithms', '001'),
('COMP-2650', 'Computer Architecture I: Digital Design', '001'),
('COMP-2707', 'Advanced Web Design, Construction, and Deployment', '001'),
('COMP-2800', 'Software Development', '001'),
('COMP-3057', 'Cyber-Ethics', '001'),
('COMP-3110', 'Introduction to Software Engineering', '001'),
('COMP-3220', 'Object-Oriented Software Analysis and Design', '001'),
('COMP-3340', 'World Wide Web Information Systems Development', '001');