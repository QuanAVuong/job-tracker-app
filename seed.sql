-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2016 at 12:44 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jobpostings`
--

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE jobs (
  post_id MEDIUMINT UNSIGNED NOT NULL AUTO_INCREMENT,
  title varchar(100) NOT NULL,
  type varchar(100) NOT NULL,
  location varchar(100) NOT NULL,
  salary varchar(100) NOT NULL,
  post_date datetime NOT NULL,
  PRIMARY KEY (post_id)
);

--
-- Dumping data for table `jobs`
--

INSERT INTO jobs (title, type, location, salary, post_date) VALUES
("Test Job Title", "Test Job Type", "Test Job Location", "Test Salary", NOW() );

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
