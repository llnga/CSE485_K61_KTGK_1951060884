-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 21, 2021 lúc 06:16 AM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `bloodbank`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `blood_donation`
--

CREATE TABLE `blood_donation` (
  `bloodID` int(11) NOT NULL,
  `d_id` int(11) NOT NULL,
  `dateDonated` datetime NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `blood_recipient`
--

CREATE TABLE `blood_recipient` (
  `reci_id` int(11) NOT NULL,
  `reci_name` varchar(50) NOT NULL,
  `reci_age` int(3) NOT NULL,
  `reci_bgrp` varchar(60) NOT NULL,
  `reci_bqnty` varchar(100) NOT NULL,
  `reci_sex` varchar(20) NOT NULL,
  `reci_date` date NOT NULL,
  `reci_phone` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `blood_transaction`
--

CREATE TABLE `blood_transaction` (
  `transactID` int(11) NOT NULL,
  `mID` int(11) NOT NULL,
  `dateOut` datetime NOT NULL,
  `quantity` int(11) NOT NULL,
  `reci_id` int(11) NOT NULL,
  `bloodID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donor`
--

CREATE TABLE `donor` (
  `d_id` int(11) NOT NULL,
  `d_name` varchar(50) NOT NULL,
  `d_sex` varchar(20) NOT NULL,
  `d_age` int(3) NOT NULL,
  `d_address` varchar(60) NOT NULL,
  `d_email` varchar(100) NOT NULL,
  `d_phone` varchar(20) NOT NULL,
  `d_date` date NOT NULL,
  `d_bgrp` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `donor`
--

INSERT INTO `donor` (`d_id`, `d_name`, `d_sex`, `d_age`, `d_address`, `d_email`, `d_phone`, `d_date`, `d_bgrp`) VALUES
(1, 'Nga', 'A', 0, 'A', 'ngale2k1@gmail.com', '56', '0000-00-00', '666');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `medicalpersonal`
--

CREATE TABLE `medicalpersonal` (
  `mID` int(11) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `address` varchar(60) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `dob` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `blood_donation`
--
ALTER TABLE `blood_donation`
  ADD PRIMARY KEY (`bloodID`),
  ADD KEY `d_id` (`d_id`);

--
-- Chỉ mục cho bảng `blood_recipient`
--
ALTER TABLE `blood_recipient`
  ADD PRIMARY KEY (`reci_id`);

--
-- Chỉ mục cho bảng `blood_transaction`
--
ALTER TABLE `blood_transaction`
  ADD PRIMARY KEY (`transactID`),
  ADD KEY `mID` (`mID`),
  ADD KEY `reci_id` (`reci_id`),
  ADD KEY `bloodID` (`bloodID`);

--
-- Chỉ mục cho bảng `donor`
--
ALTER TABLE `donor`
  ADD PRIMARY KEY (`d_id`);

--
-- Chỉ mục cho bảng `medicalpersonal`
--
ALTER TABLE `medicalpersonal`
  ADD PRIMARY KEY (`mID`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `blood_donation`
--
ALTER TABLE `blood_donation`
  MODIFY `bloodID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `blood_recipient`
--
ALTER TABLE `blood_recipient`
  MODIFY `reci_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `blood_transaction`
--
ALTER TABLE `blood_transaction`
  MODIFY `transactID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `donor`
--
ALTER TABLE `donor`
  MODIFY `d_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `medicalpersonal`
--
ALTER TABLE `medicalpersonal`
  MODIFY `mID` int(11) NOT NULL AUTO_INCREMENT;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `blood_donation`
--
ALTER TABLE `blood_donation`
  ADD CONSTRAINT `blood_donation_ibfk_1` FOREIGN KEY (`d_id`) REFERENCES `donor` (`d_id`);

--
-- Các ràng buộc cho bảng `blood_transaction`
--
ALTER TABLE `blood_transaction`
  ADD CONSTRAINT `blood_transaction_ibfk_1` FOREIGN KEY (`mID`) REFERENCES `medicalpersonal` (`mID`),
  ADD CONSTRAINT `blood_transaction_ibfk_2` FOREIGN KEY (`reci_id`) REFERENCES `blood_recipient` (`reci_id`),
  ADD CONSTRAINT `blood_transaction_ibfk_3` FOREIGN KEY (`bloodID`) REFERENCES `blood_donation` (`bloodID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
