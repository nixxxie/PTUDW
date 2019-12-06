-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 04, 2019 lúc 02:56 PM
-- Phiên bản máy phục vụ: 10.4.8-MariaDB
-- Phiên bản PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `ptudw`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ablity_dictionary`
--

CREATE TABLE `ablity_dictionary` (
  `id` int(6) NOT NULL,
  `ablity_name` varchar(250) NOT NULL,
  `ablity_type` varchar(250) NOT NULL,
  `ablity_note` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `ablity_dictionary`
--

INSERT INTO `ablity_dictionary` (`id`, `ablity_name`, `ablity_type`, `ablity_note`) VALUES
(1, 'PHP', 'ngôn ngữ lạp trình', '10'),
(2, 'JAVA', 'ngôn ngữ lạp trình', '10'),
(3, 'C#', 'ngôn ngữ lạp trình', '10'),
(4, 'C/C++', 'ngôn ngữ lạp trình', '10'),
(5, 'JavaScript', 'ngôn ngữ lạp trình', '10'),
(6, 'PYTHON', 'ngôn ngữ lạp trình', '10'),
(7, 'CSS', 'ngôn ngữ lạp trình', '10'),
(8, 'HTML', 'ngôn ngữ lạp trình', '10'),
(9, 'MYSQL', 'Hệ quản trị cơ sở dữ liệu', '10'),
(10, 'SQL', 'Hệ quản trị cơ sở dữ liệu', '10'),
(11, 'NodeJS', 'ngôn ngữ lập trình', '10'),
(12, 'Cấu trúc dữ liệu', 'môn học  CNTT', '10'),
(13, 'Trí tuệ nhân tạo', 'môn học  CNTT', '10'),
(14, 'Mạng máy tính', 'môn học  CNTT', '10'),
(15, 'lập trình hướng đối tượng', 'môn học  CNTT', '10'),
(16, 'Thiết kế đánh giá thuật toán', 'môn học  CNTT', '10'),
(17, 'TOEIC', 'Chứng chỉ ngoại ngữ', '990'),
(18, 'IELTS', 'Chứng chỉ ngoại ngữ', '9.0'),
(19, 'thao', 'tt', '2 nam');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `assigned_table`
--

CREATE TABLE `assigned_table` (
  `organization_request_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date NOT NULL,
  `status` int(40) NOT NULL,
  `create_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `assigned_table`
--

INSERT INTO `assigned_table` (`organization_request_id`, `student_id`, `start_date`, `end_date`, `status`, `create_date`) VALUES
(5, 0, '0000-00-00', '0000-00-00', 1, '0000-00-00'),
(5, 1, '0000-00-00', '0000-00-00', 1, '0000-00-00'),
(0, 2, '0000-00-00', '0000-00-00', 1, '0000-00-00'),
(5, 4, '2019-11-12', '2102-02-18', 2, '2019-11-05'),
(5, 6, '0000-00-00', '0000-00-00', 1, '0000-00-00'),
(1, 7, '2019-11-12', '2019-11-13', 0, '2019-11-05');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `enterprise_profile`
--

CREATE TABLE `enterprise_profile` (
  `id` int(11) NOT NULL,
  `organization_name` varchar(20) NOT NULL,
  `employee_count` int(11) NOT NULL,
  `gross_revenue` int(11) NOT NULL,
  `address` varchar(200) NOT NULL,
  `home_page` varchar(200) NOT NULL,
  `tax_number` int(11) NOT NULL,
  `Description` text DEFAULT NULL,
  `img` varchar(15) DEFAULT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `enterprise_profile`
--

INSERT INTO `enterprise_profile` (`id`, `organization_name`, `employee_count`, `gross_revenue`, `address`, `home_page`, `tax_number`, `Description`, `img`, `password`) VALUES
(1, 'anhthao', 44, 33, 'address', 'home', 123456, 'Bạn đang hoang mang vì không biết mình đang trình độ mầm non hay đang lon ton lên Đại Học', 'hinhanh', '77777'),
(2, 'AnhThao', 44, 55, 'rr', 'rr', 99999, ' Chế độ đầy đủ', '64581900_137532', '123456'),
(3, 'th', 5, 0, 'rr', 'rr', 0, NULL, 'img1.PNG', '123456');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `enterprise_recruitment_request_form`
--

CREATE TABLE `enterprise_recruitment_request_form` (
  `id` int(5) NOT NULL,
  `request_name` varchar(250) NOT NULL,
  `organization_id` int(11) NOT NULL,
  `short_description` text DEFAULT NULL,
  `amount` int(11) NOT NULL,
  `date_submitted` date DEFAULT NULL,
  `statuss` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `enterprise_recruitment_request_form`
--

INSERT INTO `enterprise_recruitment_request_form` (`id`, `request_name`, `organization_id`, `short_description`, `amount`, `date_submitted`, `statuss`) VALUES
(3, 'Tuyen dung', 1, 'SENIOR', 1, '2019-11-20', 4000),
(4, 'Thuc Tap', 1, 'freelancer', 12, '2019-11-12', 1000),
(5, 'hoc viec', 2, 'lam luon', 12, '2019-11-19', 3000),
(6, 't', 2, 'hhh', 12, '2019-12-01', 3000),
(7, 't', 2, 'rrrf', 44, '2019-12-01', 3000),
(8, 't', 2, 'rrrf', 2, '2019-12-01', 4000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `list_of_required_capacity_of_each_request_coupon`
--

CREATE TABLE `list_of_required_capacity_of_each_request_coupon` (
  `id` int(11) NOT NULL,
  `organization_request_id` int(5) NOT NULL,
  `ability_id` int(11) NOT NULL,
  `ability_required` int(11) NOT NULL,
  `note` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `list_of_required_capacity_of_each_request_coupon`
--

INSERT INTO `list_of_required_capacity_of_each_request_coupon` (`id`, `organization_request_id`, `ability_id`, `ability_required`, `note`) VALUES
(1, 5, 3, 7, '2 nam kinh nghiem'),
(2, 5, 4, 8, '2 nam kinh nghiem'),
(8, 3, 4, 2, '2 nam'),
(13, 7, 3, 3, 'note'),
(17, 4, 16, 1, 'note'),
(21, 6, 5, 4, 'note'),
(22, 6, 4, 4, 'note'),
(27, 4, 6, 1, 'note'),
(28, 3, 4, 1, 'note');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `student_profile`
--

CREATE TABLE `student_profile` (
  `id` int(11) NOT NULL,
  `student_code` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `date_of_birth` date NOT NULL,
  `join_date` date NOT NULL,
  `class_name` varchar(20) NOT NULL,
  `img` varchar(15) DEFAULT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `student_profile`
--

INSERT INTO `student_profile` (`id`, `student_code`, `name`, `date_of_birth`, `join_date`, `class_name`, `img`, `password`) VALUES
(1, 'student', 'Student', '2019-12-11', '2019-11-15', 'k62a3', '64255995_833472', '55555'),
(2, '2', 'thao', '2402-02-02', '3930-03-03', 'rr', '33', '123456'),
(3, '55', 'tathao', '2019-11-28', '2019-12-01', '55', 'img1.PNG', '123456'),
(4, '12345', 'anh', '2019-12-19', '2019-12-02', 'k62a3', 'img1.PNG', '123456'),
(6, '123456', 'thu', '2019-12-19', '2019-12-02', 'k62a3', 'img1.PNG', '123456'),
(7, 'thien', 'thien', '2019-12-12', '2019-12-02', 'k62a3', 'img1.PNG', '123456');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `student_registration`
--

CREATE TABLE `student_registration` (
  `id` int(11) DEFAULT NULL,
  `student_id` int(11) NOT NULL,
  `request_id` int(11) NOT NULL,
  `submit_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `student_registration`
--

INSERT INTO `student_registration` (`id`, `student_id`, `request_id`, `submit_date`) VALUES
(NULL, 4, 8, '0000-00-00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `student_skill_profile`
--

CREATE TABLE `student_skill_profile` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `ability_id` int(11) NOT NULL,
  `ability_rate` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `student_skill_profile`
--

INSERT INTO `student_skill_profile` (`id`, `student_id`, `ability_id`, `ability_rate`) VALUES
(0, 1, 6, 5),
(0, 1, 9, 5),
(0, 2, 3, 5),
(0, 2, 4, 6),
(0, 2, 8, 5),
(0, 6, 7, 5),
(0, 6, 8, 5);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `teacher_profile`
--

CREATE TABLE `teacher_profile` (
  `id` int(11) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `teacher_code` varchar(40) NOT NULL,
  `sex` varchar(40) NOT NULL,
  `img` varchar(100) DEFAULT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `teacher_profile`
--

INSERT INTO `teacher_profile` (`id`, `full_name`, `teacher_code`, `sex`, `img`, `password`) VALUES
(1, 'thao', 'thao', 'rrrr', NULL, '77777'),
(2, 'a thao', '12345', '1', 'img1.PNG', '123456');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `ablity_dictionary`
--
ALTER TABLE `ablity_dictionary`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `assigned_table`
--
ALTER TABLE `assigned_table`
  ADD PRIMARY KEY (`student_id`,`organization_request_id`);

--
-- Chỉ mục cho bảng `enterprise_profile`
--
ALTER TABLE `enterprise_profile`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `enterprise_recruitment_request_form`
--
ALTER TABLE `enterprise_recruitment_request_form`
  ADD PRIMARY KEY (`id`),
  ADD KEY `organization_id` (`organization_id`);

--
-- Chỉ mục cho bảng `list_of_required_capacity_of_each_request_coupon`
--
ALTER TABLE `list_of_required_capacity_of_each_request_coupon`
  ADD PRIMARY KEY (`id`,`organization_request_id`,`ability_id`),
  ADD KEY `FK_assigned_list` (`organization_request_id`),
  ADD KEY `ability_id` (`ability_id`);

--
-- Chỉ mục cho bảng `student_profile`
--
ALTER TABLE `student_profile`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `student_registration`
--
ALTER TABLE `student_registration`
  ADD PRIMARY KEY (`student_id`,`request_id`),
  ADD KEY `request_id` (`request_id`);

--
-- Chỉ mục cho bảng `student_skill_profile`
--
ALTER TABLE `student_skill_profile`
  ADD PRIMARY KEY (`student_id`,`ability_id`),
  ADD KEY `ability_id` (`ability_id`);

--
-- Chỉ mục cho bảng `teacher_profile`
--
ALTER TABLE `teacher_profile`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `ablity_dictionary`
--
ALTER TABLE `ablity_dictionary`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT cho bảng `enterprise_profile`
--
ALTER TABLE `enterprise_profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `enterprise_recruitment_request_form`
--
ALTER TABLE `enterprise_recruitment_request_form`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `list_of_required_capacity_of_each_request_coupon`
--
ALTER TABLE `list_of_required_capacity_of_each_request_coupon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT cho bảng `student_profile`
--
ALTER TABLE `student_profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `teacher_profile`
--
ALTER TABLE `teacher_profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `enterprise_recruitment_request_form`
--
ALTER TABLE `enterprise_recruitment_request_form`
  ADD CONSTRAINT `enterprise_organization_FK` FOREIGN KEY (`organization_id`) REFERENCES `enterprise_profile` (`id`);

--
-- Các ràng buộc cho bảng `list_of_required_capacity_of_each_request_coupon`
--
ALTER TABLE `list_of_required_capacity_of_each_request_coupon`
  ADD CONSTRAINT `list_of_required_capacity_of_each_request_coupon_ibfk_1` FOREIGN KEY (`ability_id`) REFERENCES `ablity_dictionary` (`id`),
  ADD CONSTRAINT `list_of_required_capacity_of_each_request_coupon_ibfk_2` FOREIGN KEY (`organization_request_id`) REFERENCES `enterprise_recruitment_request_form` (`id`);

--
-- Các ràng buộc cho bảng `student_registration`
--
ALTER TABLE `student_registration`
  ADD CONSTRAINT `student_registration_ibfk_2` FOREIGN KEY (`request_id`) REFERENCES `enterprise_recruitment_request_form` (`id`),
  ADD CONSTRAINT `student_registration_ibfk_3` FOREIGN KEY (`student_id`) REFERENCES `student_profile` (`id`);

--
-- Các ràng buộc cho bảng `student_skill_profile`
--
ALTER TABLE `student_skill_profile`
  ADD CONSTRAINT `FK_student_skill_capacity` FOREIGN KEY (`ability_id`) REFERENCES `ablity_dictionary` (`id`),
  ADD CONSTRAINT `FK_student_skill_profile` FOREIGN KEY (`student_id`) REFERENCES `student_profile` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
