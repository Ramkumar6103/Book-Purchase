-- phpMyAdmin SQL Dump
-- version 2.10.1
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Mar 20, 2022 at 07:13 PM
-- Server version: 5.0.45
-- PHP Version: 5.2.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Database: `book`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `tabbooks`
-- 

CREATE TABLE `tabbooks` (
  `bookid` varchar(50) NOT NULL,
  `bookname` varchar(50) NOT NULL,
  `author` varchar(50) NOT NULL,
  `isbn` varchar(50) NOT NULL,
  `category` varchar(50) NOT NULL,
  `quantity` int(11) NOT NULL,
  `language` varchar(50) NOT NULL,
  `price` int(11) NOT NULL,
  `offerprice` int(11) NOT NULL,
  PRIMARY KEY  (`bookid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `tabbooks`
-- 

INSERT INTO `tabbooks` (`bookid`, `bookname`, `author`, `isbn`, `category`, `quantity`, `language`, `price`, `offerprice`) VALUES 
('2395', 'Wings of Fire', 'A. P. J. Abdul Kalam, Arun Tiwari', '9788174341440', 'novel', 50, 'English', 500, 190);

-- --------------------------------------------------------

-- 
-- Table structure for table `tabusers`
-- 

CREATE TABLE `tabusers` (
  `username` varchar(50) NOT NULL,
  `gender` varchar(15) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `emailid` varchar(50) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `loginid` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY  (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `tabusers`
-- 

