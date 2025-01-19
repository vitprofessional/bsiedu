-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 13, 2024 at 06:29 PM
-- Server version: 10.5.25-MariaDB
-- PHP Version: 8.1.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bsiedu2021_ems`
--

-- --------------------------------------------------------

--
-- Table structure for table `academics`
--

CREATE TABLE `academics` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `menu_name` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `content` varchar(255) DEFAULT NULL,
  `content_location` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `academic_calenders`
--

CREATE TABLE `academic_calenders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `edu_year` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `avatar` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `addmission_info`
--

CREATE TABLE `addmission_info` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `file` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `addmission_info`
--

INSERT INTO `addmission_info` (`id`, `title`, `file`, `created_at`, `updated_at`) VALUES
(4, '২০২৩ সালের ভর্তির নীতিমালা', 'public/backdoor/uploads/newsEvent/2023.08.15Admission Rules 2023.pdf', NULL, NULL),
(5, 'ভর্তির প্রক্রিয়া/নির্দেশিকা ২০২৩', 'public/backdoor/uploads/newsEvent/2023.08.15Nirdeshika2023-2024_04 Years Course Final.pdf', NULL, NULL),
(6, 'আবেদনের সময়সীমা সংক্রান্ত বিজ্ঞপ্তি', 'public/backdoor/uploads/newsEvent/2023.08.15Cicular 2023.pdf', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `admin_panels`
--

CREATE TABLE `admin_panels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `adminname` varchar(255) DEFAULT NULL,
  `adminemail` varchar(255) DEFAULT NULL,
  `adminmobile` varchar(255) DEFAULT NULL,
  `adminspeech` text DEFAULT NULL,
  `adminimage` varchar(255) DEFAULT NULL,
  `adminpassword` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `plaine_password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_panels`
--

INSERT INTO `admin_panels` (`id`, `adminname`, `adminemail`, `adminmobile`, `adminspeech`, `adminimage`, `adminpassword`, `status`, `created_at`, `updated_at`, `plaine_password`) VALUES
(18, 'প্রকৌশলী মোঃ মোবারক হোসেন', 'mmobarak15011974@gmail.com', '01756157751', 'বাংলাদেশ সার্ভে ইনস্টিটিউটে আপনাকে স্বাগত জানাতে পেরে আমি প্রচুর আনন্দ বোধ করছি। ১৯১৪ সালে কুমিল্লা জেলার সদর দক্ষিণ উপজেলার ২১ নং ওয়ার্ড এর রামমালায় ১৪.১৭ একর জমির সবুজ রঙের প্রাকৃতিক পরিবেশে বাংলাদেশের প্রাচীনতম ডিপ্লোমা ইঞ্জিনিয়ারিং এর এই প্রতিষ্ঠানটি প্রতিষ্ঠিত। এই প্রতিষ্ঠানে নিয়মিত শিক্ষার্থী ৭৬৪ এবং ১টি টেকনোলজি রয়েছে। ইনস্টিটিউটটি তাদের শিক্ষার্থীদের সার্ভে ইঞ্জিনিয়ারিংয়ের বিভিন্ন শাখায় দক্ষতা ভিত্তিক প্রযুক্তিগত শিক্ষা দেয়ার জন্য সর্বোত্তম প্রযুক্তিগত শিক্ষার জন্য নিবেদিত। পাশাপাশি তারা ক্যারিয়ার এবং উন্নয়নের জন্য খুব ভাল সুযোগ ধারণ করে। বাংলাদেশ সার্ভে ইনস্টিটিউটের বিভিন্ন সংস্থা এবং শিল্পের সাথে সহযোগিতা এবং সমঝোতা স্মারক রয়েছে যাতে শিক্ষার্থী সময়োপযোগী বাস্তব ব্যবহারিক জ্ঞান পেতে এবং তাদের প্রযুক্তিগত ক্ষেত্রে কাজ করতে পারে। প্রতিষ্ঠানটি গতিশীল এবং প্রগতিশীল শিক্ষার পরিবেশের মধ্যে মানসম্পন্ন শিক্ষা এবং নিয়োগযোগ্য দক্ষ জনশক্তি প্রদানের লক্ষ্যে কাজ করছে। বাংলাদেশ সার্ভে ইনস্টিটিউটের ভবিষ্যতে আরও প্রযুক্তি বর্ধিত করার পরিকল্পনা রয়েছে যা ডিপ্লোমা ইন সার্ভে ইঞ্জিনিয়ারদেরকে বিশ্বায়নের চ্যালেঞ্জ মোকাবেলায় প্রস্তুত করতে, যোগ্য ও প্রতিযোগিতামূলক জনবল দিয়ে জ্ঞানভিত্তিক অর্থনীতি টেকসই বৃদ্ধিতে অংশ নিতে সক্ষম। সুতরাং এটি নিঃসন্দেহে উন্নয়নের গতি ত্বরান্বিত করে এবং বেকারত্ব সমস্যা কমাতে সহায়তা করে। আমি আশা করি প্রতিষ্ঠানের মানসম্পন্ন শিক্ষা এবং সামগ্রিক শিক্ষাদান এবং শেখার পরিবেশের এক অসামান্য সময়কালে নেতৃত্ব দেবে।', '2022.09.13PHOTO-2022-09-13-12-35-19.jpg', NULL, NULL, '2022-10-13 15:47:31', '2023-02-23 03:22:06', '123456789');

-- --------------------------------------------------------

--
-- Table structure for table `applyjobs`
--

CREATE TABLE `applyjobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(100) DEFAULT NULL,
  `roll_number` varchar(255) DEFAULT NULL,
  `session` varchar(255) DEFAULT NULL,
  `position` varchar(255) DEFAULT NULL,
  `company` varchar(255) DEFAULT NULL,
  `details` varchar(255) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `applyjobs`
--

INSERT INTO `applyjobs` (`id`, `name`, `email`, `mobile`, `roll_number`, `session`, `position`, `company`, `details`, `remember_token`, `created_at`, `updated_at`) VALUES
(9, 'Md. Noor Hossain Shawkat', 'razzvir333@gmail.com', '01866367981', '377710', '1617', 'Executive', 'Overseas Marketing Corporation Pvt. Ltd.', 'Digital Survey Expert Trainer', NULL, '2021-12-05 16:33:09', '2021-12-05 16:33:09'),
(10, 'Md Anichur Rahman', 'anichurrahman2018@gmail.com', '01831118702', NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-13 14:15:11', '2021-12-13 14:15:11'),
(11, 'Shekh Farid', 'faridrizu@gmail.com', '01575188238', '578145', '11-12', 'Teacher', 'Baily School', 'Assistant Teacher at Baily School,Narayanganj.', NULL, '2022-01-26 14:08:26', '2022-01-26 14:08:26'),
(12, 'MD. JAHIRUL ISLAM', 'hridoy.islam11366@yahoo.com', '01571394744', '769841', '13-14', NULL, NULL, NULL, NULL, '2022-02-16 16:16:50', '2022-02-16 16:16:50'),
(13, 'Najmul Alam Rimon', 'najmulalam.stbl@gmail.com', '01760959530', '389090', '09..10', 'Project coordinator', 'Survey Technoiogies Bangladesh Lit.', 'Land Survey.Hydrographic survey.Gis Mapping.Drone Survey', NULL, '2022-02-23 15:59:49', '2022-02-23 15:59:49'),
(14, 'Md Al Amin', 'alamindse1989@gmail.com', '01572747949', '889166', '778698', 'Surveyor', 'Ministry of land', 'Dc office', NULL, '2022-03-01 19:57:56', '2022-03-01 19:57:56'),
(15, 'Asaduzzaman Iqbal', 'asadiqbal139@gmail.com', '01712487353', '683750', '2012_2013', 'Director', 'Modern survey Engineering', 'It is a Survey base company . We provide best service for our client . \r\nWe also provide survey training for Diploma holder student .', NULL, '2022-03-05 12:48:46', '2022-03-05 12:48:46'),
(16, 'Abbie Darbonne', 'abbie@datalist.biz', '26-72-78-05', '26-72-78-05', NULL, NULL, 'DataList.biz', 'Hello,\r\n\r\nIt is with sad regret to inform you that DataList.biz is shutting down. We have made all our databases available for you at a one-time fee.\r\n\r\nYou can visit us on DataList.biz\r\n\r\nRegards.\r\nAbbie', NULL, '2022-03-08 02:16:31', '2022-03-08 02:16:31'),
(17, 'Md. Abdul Aziz Rakib', 'abdulazizcox503@gmail.com', '01829477503', '7620', '2022', 'Part', 'Servey', NULL, NULL, '2022-03-22 18:32:59', '2022-03-22 18:32:59'),
(18, 'MD. SHAKIL AHMED', 'mdshakilahmed217@gmail.com', '01710345901', '377707', '2016-17', 'Roads and Highways Department', NULL, 'Surveyor, Road Division Rajbari', NULL, '2022-06-27 18:52:48', '2022-06-27 18:52:48'),
(19, 'Tawhid molla', 'tawhidahshan@gmail.com', '01749897264', '769846', '13-14', 'Survey engineer', 'Bangladesh water devolvement board', 'Engineering', NULL, '2022-08-06 01:16:03', '2022-08-06 01:16:03'),
(20, 'Md Yousuf', 'yousuforgbd@gmail.com', '01838467839', '611', '2021-22', 'Silver security', 'Dna', 'Bla bla bla', NULL, '2022-09-02 16:32:30', '2022-09-02 16:32:30'),
(21, 'MD.MEHEDI HASAN RUBEL', 'mehedirhd20@gmail.com', '01725519409', '478387', '2010-2011', 'Junior Instructor (Survey)', 'Bangladesh Survey Institute, Cumilla', 'teaching Profession.', NULL, '2022-09-07 13:19:51', '2022-09-07 13:19:51'),
(22, 'Ahsan Ullah', 'ahullah93@gmail.com', '01799896083', '989172', '2008-2009', 'Surveyor', 'Max infrastructure limited, Bangladesh', 'Elevated express way project Lalkhan Bazar to Shah Amanat Airport -Chittagong. Road section  all Survey work', NULL, '2022-09-08 22:33:33', '2022-09-08 22:33:33');

-- --------------------------------------------------------

--
-- Table structure for table `box_contents`
--

CREATE TABLE `box_contents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `boxId` varchar(255) DEFAULT NULL,
  `contentTitle` varchar(255) DEFAULT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `position` varchar(255) DEFAULT NULL,
  `link` text DEFAULT NULL,
  `typeContent` varchar(255) NOT NULL DEFAULT 'PDF/Image',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `box_contents`
--

INSERT INTO `box_contents` (`id`, `boxId`, `contentTitle`, `avatar`, `position`, `link`, `typeContent`, `created_at`, `updated_at`) VALUES
(10, '2', 'সিটিজেন চার্টার', 'সিটিজেন চার্টার PDF_1686049469.pdf', NULL, NULL, 'PDF/Image', '2023-06-06 17:59:10', '2023-06-06 18:05:04'),
(14, '16', 'শিক্ষার্থীদের তালিকা', NULL, NULL, NULL, 'PDF/Image', '2023-06-07 01:07:20', '2023-06-07 01:07:20'),
(16, '16', 'প্রতিবন্ধী ব্যক্তি অধিকার ও সুরক্ষা আইন,২০১৩', 'Bangladesh_Rights-and-Protection-of-Persons-with-Disabilities-Act-2013_1686074906.pdf', NULL, NULL, 'PDF/Image', '2023-06-07 01:08:26', '2023-06-07 01:08:26'),
(25, '17', 'ভিডিও গ্যালারী', NULL, NULL, 'https://www.youtube.com/watch?v=Z9LK5bCs6xw&list=RDLVZ9LK5bCs6xw&start_radio=1&rv=Z9LK5bCs6xw&t=129', 'Link', '2023-06-07 13:29:30', '2023-06-11 12:37:00'),
(26, '18', 'কর্মকতাদের তালিকা', NULL, NULL, NULL, 'PDF/Image', '2023-06-07 13:48:08', '2023-06-07 13:48:08'),
(27, '18', 'সদস্য তালিকা', NULL, NULL, NULL, 'PDF/Image', '2023-06-07 13:49:58', '2023-06-07 13:49:58'),
(28, '18', 'ফটো গ্যালারী', NULL, NULL, NULL, 'PDF/Image', '2023-06-07 13:50:43', '2023-06-07 13:50:43'),
(29, '4', 'নিয়ম এবং প্রবিধান', '_ডিপ্লোমা ইন ইঞ্জিনিয়ারিং প্রবিধান-২০২২_1658900308_1686120955.pdf', NULL, NULL, 'PDF/Image', '2023-06-07 13:55:55', '2023-06-07 13:55:55'),
(34, '8', 'এপিএএমএস সফটওয়ার লিংক', NULL, NULL, 'https://apams.cabinet.gov.bd/', 'Link', '2023-06-07 14:57:27', '2023-06-13 13:03:06'),
(44, '12', 'অফিস আদেশ/শ্রান্তি বিনোদন আদেশ', NULL, NULL, NULL, 'PDF/Image', '2023-06-07 15:53:33', '2023-06-07 15:53:33'),
(51, NULL, 'অভিযোগ প্রতিকার কর্মপরিকল্পনা', NULL, NULL, NULL, 'PDF/Image', '2023-06-07 16:11:25', '2023-06-07 16:11:25'),
(54, '14', 'গবেষণা কার্যক্রম', NULL, NULL, NULL, 'PDF/Image', '2023-06-07 16:16:46', '2023-06-07 16:16:46'),
(55, '14', 'গবেষণা নীতিমালা', NULL, NULL, NULL, 'PDF/Image', '2023-06-07 16:17:17', '2023-06-07 16:17:17'),
(56, '14', 'প্রজ্ঞাপন', NULL, NULL, NULL, 'PDF/Image', '2023-06-07 16:17:38', '2023-06-07 16:17:38'),
(57, '14', 'নোটিশ/অফিশ আদেশ', 'কর্মশালার নোটিশ-অংশগ্রহণকারী_1686130071.pdf', NULL, NULL, 'PDF/Image', '2023-06-07 16:18:38', '2023-06-07 16:27:51'),
(59, '15', 'সিলেবাস', NULL, NULL, 'https://www.bsiedu.gov.bd/new/sylabus', 'Link', '2023-06-07 16:21:53', '2023-06-08 18:45:45'),
(60, '15', 'সেমিস্টার প্লান', NULL, NULL, 'https://www.bsiedu.gov.bd/new/semesterplan', 'Link', '2023-06-07 16:22:31', '2023-06-12 12:24:57'),
(61, '15', 'ডিজিটাল ক্লাস কনটেন্ট', NULL, NULL, 'https://www.bsiedu.gov.bd/infoBox/show/4/%E0%A6%A1%E0%A6%BF%E0%A6%9C%E0%A6%BF%E0%A6%9F%E0%A6%BE%E0%A6%B2%20%E0%A6%95%E0%A7%8D%E0%A6%B2%E0%A6%BE%E0%A6%B8%20%E0%A6%95%E0%A6%A8%E0%A6%9F%E0%A7%87%E0%A6%A8%E0%A7%8D%E0%A6%9F', 'Link', '2023-06-07 16:23:15', '2023-06-12 12:30:34'),
(62, '15', 'পরীক্ষার রুটিন', NULL, NULL, 'https://www.bsiedu.gov.bd/new/exam/rotine', 'Link', '2023-06-07 16:23:53', '2023-06-12 12:32:02'),
(63, '15', 'ক্লাশ রুটিন', NULL, NULL, 'https://www.bsiedu.gov.bd/new/exam/rotine', 'Link', '2023-06-07 16:24:38', '2023-06-12 12:25:42'),
(71, '5', 'জাতীয় শুদ্ধাচার কৌশল', '$2y$10$yljDoiZIwFevzLntPs79Z.VazHsqJ8JgJRasW4lzyx4oKeRfEF02S.pdf', NULL, NULL, 'PDF/Image', '2023-06-08 16:33:20', '2023-06-08 17:07:17'),
(80, '17', 'ফটো গ্যালারি', '$2y$10$5LN4cHXd9C8LUISFljrJ1ukncp/0I9Sbm2X09jpCHUf/iiobWqmYK.pdf', NULL, NULL, 'PDF/Image', '2023-06-08 18:40:28', '2023-06-08 18:40:28'),
(82, '4', 'সার্ভে ইঞ্জিনিয়ারিং(১)', 'e90b9167a9e61a994cc22fc4dc66383c.pdf', NULL, NULL, 'PDF/Image', '2023-06-11 10:36:22', '2023-06-15 10:18:04'),
(83, '4', 'নিয়ম এবং প্রবিধান', 'af529353c40e4b8935d07cff7608ba2b.pdf', NULL, NULL, 'PDF/Image', '2023-06-11 10:39:17', '2023-06-11 10:39:17'),
(84, '5', 'শুদ্ধাচার কর্মপরিকল্পনা', '98fe5a7ccfe1493650486c3f962cf8c3.PDF', NULL, NULL, 'PDF/Image', '2023-06-11 10:44:42', '2023-06-11 10:44:42'),
(85, '4', 'ডিজিটাল ক্লাস কনটেন্ট', '3501fc609e448efa69efb0871d06ffc8.pdf', NULL, NULL, 'PDF/Image', '2023-06-11 11:16:59', '2023-06-11 11:16:59'),
(86, '4', 'ডিজিটাল ক্লাস কনটেন্ট', '41106f885a222934dd932c4553c7935a.pdf', NULL, NULL, 'PDF/Image', '2023-06-11 11:23:10', '2023-06-11 11:23:10'),
(87, '4', 'ডিজিটাল ক্লাস কনটেন্ট', '54444e6c88eb3f0e868e9550c4562896.pdf', NULL, NULL, 'PDF/Image', '2023-06-11 11:27:08', '2023-06-11 11:27:08'),
(88, '4', 'ডিজিটাল ক্লাস কনটেন্ট', '7f1b2b9df8c5c9232ae1198acefef8b8.pdf', NULL, NULL, 'PDF/Image', '2023-06-11 11:34:40', '2023-06-11 11:34:40'),
(89, '13', 'জাতীয় শিক্ষানীতি ২০১০', '5c14da4b3d91fda02fb0c72a67c03560.pdf', NULL, NULL, 'PDF/Image', '2023-06-11 12:00:25', '2023-06-11 12:00:25'),
(90, '17', 'বই সমূহ', NULL, NULL, 'https://boierferiwala.com/%E0%A6%AC%E0%A6%99%E0%A7%8D%E0%A6%97%E0%A6%AC%E0%A6%A8%E0%A7%8D%E0%A6%A7%E0%A7%81%E0%A6%B0-%E0%A6%B2%E0%A7%87%E0%A6%96%E0%A6%BE-%E0%A6%A4%E0%A6%BF%E0%A6%A8%E0%A6%9F%E0%A6%BF-%E0%A6%AC%E0%A6%87/', 'Link', '2023-06-11 12:29:42', '2023-06-11 12:29:42'),
(91, '3', 'প্রতিষ্ঠানের সংক্ষিপ্ত ইতিহাস', NULL, NULL, 'https://www.bsiedu.gov.bd/about/institute', 'Link', '2023-06-12 10:52:49', '2023-06-12 10:52:49'),
(92, '12', 'NOC(কর্মকর্তা ও কর্মচারী)', 'e052592d7fc1b2749d757e7b6f895522.pdf', NULL, NULL, 'PDF/Image', '2023-06-12 10:59:57', '2023-06-12 10:59:57'),
(93, '12', 'NOC(কর্মকর্তা ও কর্মচারী)', 'b3eba25dfa1ad5623aa3ec4bd8c67b9c.pdf', NULL, NULL, 'PDF/Image', '2023-06-12 11:00:39', '2023-06-12 11:00:39'),
(94, '15', 'পরীক্ষার ফলাফল', NULL, NULL, 'https://www.bsiedu.gov.bd/new/result', 'Link', '2023-06-12 11:27:30', '2023-06-12 11:27:30'),
(95, '12', 'NOC(কর্মকর্তা ও কর্মচারী)', '0a3b837404ffbc6cc0483c1de248c758.pdf', NULL, NULL, 'PDF/Image', '2023-06-12 11:36:19', '2023-06-12 11:36:19'),
(96, '11', 'ছাত্র ছাত্রীদের উপবৃত্তির ফরম', 'b8b4211d566ddbe91842c201bf164ecb.pdf', NULL, NULL, 'PDF/Image', '2023-06-13 10:29:27', '2023-06-13 10:29:27'),
(97, '11', 'ছাত্র ছাত্রীদের ভর্তির ফরম', '6073fbe616713400117f4c3dec14e2db.pdf', NULL, NULL, 'PDF/Image', '2023-06-13 10:33:50', '2023-06-13 10:33:50'),
(98, '13', 'কারিগরি ভর্তির নীতিমালা-২০২০', 'b6532ed6da6b98da738843ef1dc2a16c.pdf', NULL, NULL, 'PDF/Image', '2023-06-13 10:36:14', '2023-06-13 10:36:14'),
(99, '18', 'রোভার স্কাউট আবেদন ফরম', '3ecdeb0d0b95c96d289ae377ad187d1f.pdf', NULL, NULL, 'PDF/Image', '2023-06-13 10:52:33', '2023-06-13 10:52:33'),
(100, '11', 'লাইব্রেরী আবেদন ফরম', 'ae8bdb81b0d872cccdcfe5472297bba3.pdf', NULL, NULL, 'PDF/Image', '2023-06-13 11:05:31', '2023-06-13 11:05:31'),
(101, '9', 'তথ্য প্রাপ্তির ফরম', 'b2bbc4a28909222e27d0e688f6e29a70.pdf', NULL, NULL, 'PDF/Image', '2023-06-13 11:11:13', '2023-06-13 11:11:13'),
(102, '7', 'অনলাইনে অভিযোগ দাখিল', '675b8a25d88dcf7e1cecb6f7915667db.pdf', NULL, NULL, 'PDF/Image', '2023-06-13 11:25:17', '2023-06-13 11:25:17'),
(103, '7', 'অভিযোগ দায়েরের ফরম', '8fac1d5f0a96c8b358579b0339f87be9.pdf', NULL, NULL, 'PDF/Image', '2023-06-13 11:41:40', '2023-06-13 11:41:40'),
(104, '4', 'ডিজিটাল ভিডিও ক্লাস কনটেন্ট', NULL, NULL, 'https://drive.google.com/file/d/1Tj3zCICXPnxAKyPckNvI8UQSCwhBMckI/view?usp=drivesdk', 'Link', '2023-06-14 10:12:53', '2023-06-14 10:12:53'),
(105, '8', 'প্রজ্ঞাপন/পরিপত্র', 'f2f2048bc039bf0769f2ed7d0ef710ac.pdf', NULL, NULL, 'PDF/Image', '2023-06-14 11:47:38', '2023-06-14 11:47:38'),
(107, '4', 'ডিজিটাল ক্লাস কনটেন্ট', 'adb510f51ed0cd9040259333808a27aa.pdf', NULL, NULL, 'PDF/Image', '2023-06-14 12:13:35', '2023-06-14 12:13:35'),
(108, '4', 'ডিজিটাল ক্লাস কনটেন্ট', 'd384e6a2fd4a38b467e6f953c27656b2.pdf', NULL, NULL, 'PDF/Image', '2023-06-14 12:15:42', '2023-06-14 12:15:42'),
(109, '4', 'ডিজিটাল ক্লাস কনটেন্ট', 'e58378887c9875b90517e9ea4fdb698b.pdf', NULL, NULL, 'PDF/Image', '2023-06-14 12:16:42', '2023-06-14 12:16:42'),
(110, '4', 'ডিজিটাল ক্লাস কনটেন্ট', 'ae292d184dfc55e7bf96172aad09cf2c.pdf', NULL, NULL, 'PDF/Image', '2023-06-14 12:24:10', '2023-06-14 12:24:10'),
(111, '3', 'প্রতিষ্ঠানের জনবল কাঠামো', '6faf286e064ca2e0df1ca04fbd72df45.pdf', NULL, NULL, 'PDF/Image', '2023-08-01 10:52:48', '2023-08-15 19:36:48'),
(112, '8', 'অগ্রগতির প্রতিবেদন', '3300e4c8851b1c2389cd4e7bb12ad536.pdf', NULL, NULL, 'PDF/Image', '2023-08-02 11:26:20', '2023-08-02 11:26:20'),
(115, '3', 'ডিপ্লোমা ইন ইঞ্জিনিয়ারিং (সার্ভেয়িং) ভর্তি ২০২৩', 'f7772b76cc8943f36ed117f996e1c381.pdf', NULL, NULL, 'PDF/Image', '2023-08-15 14:28:48', '2023-08-15 14:28:48'),
(116, '3', 'ডিপ্লোমা ইন ইঞ্জিনিয়ারিং (সার্ভেয়িং) ভর্তি ২০২৩', '112cad8ba7814bb1959c67200ee08392.pdf', NULL, NULL, 'PDF/Image', '2023-08-15 14:28:48', '2023-08-15 14:28:48'),
(117, '3', 'ডিপ্লোমা ইন ইঞ্জিনিয়ারিং (সার্ভেয়িং) ভর্তি ২০২৩', '3be8749abf6a38bc24f3549a143c013c.pdf', NULL, NULL, 'PDF/Image', '2023-08-15 14:28:49', '2023-08-15 14:28:49'),
(118, '3', 'ডিপ্লোমা ইন ইঞ্জিনিয়ারিং (সার্ভেয়িং) ভর্তি ২০২৩', 'c7264cd706ab5ecfa10479eb243a5413.pdf', NULL, NULL, 'PDF/Image', '2023-08-15 14:28:49', '2023-08-15 14:28:49'),
(119, '3', 'ডিপ্লোমা ইন ইঞ্জিনিয়ারিং (সার্ভেয়িং) ভর্তি ২০২৩', '291660441a349f54e4274a91c04af643.pdf', NULL, NULL, 'PDF/Image', '2023-08-15 14:28:49', '2023-08-15 14:28:49'),
(120, '10', 'ভর্তির নীতিমালা ২০২৩', '554de8114da96a54978a7ca4f3e621b3.pdf', NULL, NULL, 'PDF/Image', '2023-08-15 19:52:50', '2023-08-15 19:52:50'),
(121, '10', 'বিজ্ঞপ্তি ২০২৩', 'dd4e5f71eb62ce857c08c587baee0b60.pdf', NULL, NULL, 'PDF/Image', '2023-08-15 19:57:05', '2023-08-15 19:57:05'),
(122, '10', 'বিকাশ পেমেন্ট', '7c22af52c4f3c0b68318cca4fd2f232d.pdf', NULL, NULL, 'PDF/Image', '2023-08-15 19:59:56', '2023-08-15 19:59:56'),
(123, '10', 'অনলাইনে ফি জমাদান পদ্ধতি', 'd82f885e90e2aed5cf902f8e47895e1c.pdf', NULL, NULL, 'PDF/Image', '2023-08-15 20:08:17', '2023-08-15 20:08:17'),
(124, '6', 'বার্ষিক ক্রয় পরিকল্পনা ২০২৩-২৪', '93c0c37a4a9b068eb21c1d7274836b80.pdf', NULL, NULL, 'PDF/Image', '2023-08-17 17:08:41', '2023-08-17 17:08:41'),
(125, '6', 'বার্ষিক ক্রয় পরিকল্পনা ২০২২-২৩', '568c9d1f3c5476010987c4f6d10d38a8.pdf', NULL, NULL, 'PDF/Image', '2023-08-24 12:24:25', '2023-08-24 12:24:25'),
(126, '6', 'APP 2023-24 (Approved)', 'a47cf7c54f3c32de4422cacabe34e813.pdf', NULL, NULL, 'PDF/Image', '2023-09-21 11:48:50', '2023-09-21 11:48:50'),
(129, '20', 'Mehedi Hasan', '5a68c53f806432768b9b058234dd6514.pptx', NULL, NULL, 'PDF/Image', '2023-11-09 12:04:22', '2023-11-09 12:04:22'),
(130, '20', 'Mehedi Hasan', 'f2dd1eb9f73301c5fb54633cb89689a4.pptx', NULL, NULL, 'PDF/Image', '2023-11-09 12:04:23', '2023-11-09 12:04:23'),
(131, '20', 'Mehedi Hasan', '3afcd83912c5336c0ada58a34441e664.pptx', NULL, NULL, 'PDF/Image', '2023-11-09 12:04:23', '2023-11-09 12:04:23'),
(132, '20', 'Mehedi Hasan', 'cbf594b0f968fac2f036fc86d5dfa7de.pptx', NULL, NULL, 'PDF/Image', '2023-11-09 12:04:24', '2023-11-09 12:04:24'),
(133, '20', 'Mehedi Hasan', 'cdc1821e4177c09a9d5db3a4fa7d6dd1.pptx', NULL, NULL, 'PDF/Image', '2023-11-09 12:04:25', '2023-11-09 12:04:25'),
(134, '20', 'Mehedi Hasan', '39c1a72cdc84b14628c4bb6e92142f9c.pptx', NULL, NULL, 'PDF/Image', '2023-11-09 12:04:25', '2023-11-09 12:04:25'),
(141, '20', 'Md Faruk Hossain', 'e6d4c3a3ac00b0d245f4de5e697b32f8.pptx', NULL, NULL, 'PDF/Image', '2023-11-09 12:34:26', '2023-11-09 12:34:26'),
(142, '20', 'Md Mobarak Hossain, Principal', 'eb0050c93705b4bd957ff4add7734580.pptx', NULL, NULL, 'PDF/Image', '2023-11-09 12:37:08', '2023-11-09 12:37:08'),
(143, '20', 'Md Mobarak Hossain, Principal', '1122dce247f3e7a85036678fa54faa40.pptx', NULL, NULL, 'PDF/Image', '2023-11-09 12:37:09', '2023-11-09 12:37:09'),
(144, '20', 'Md Mobarak Hossain, Principal', 'e64655122327c945d5c59deb6cc45f91.pptx', NULL, NULL, 'PDF/Image', '2023-11-09 12:37:10', '2023-11-09 12:37:10'),
(145, '20', 'Md Mobarak Hossain, Principal', 'e96eb0b860cbfcdd4432c1b13c6fc492.pptx', NULL, NULL, 'PDF/Image', '2023-11-09 12:37:11', '2023-11-09 12:37:11'),
(146, '20', 'Mokhlesur Rahman (Kanon)', 'd17b74a8c094e7132847b611c969902d.pptx', NULL, NULL, 'PDF/Image', '2023-11-09 12:53:46', '2023-11-09 12:53:46'),
(147, '20', 'Mokhlesur Rahman (Kanon)', '443c2fdb5900c3b0db0859018c4d5c67.pptx', NULL, NULL, 'PDF/Image', '2023-11-09 12:53:46', '2023-11-09 12:53:46'),
(148, '20', 'Mokhlesur Rahman (Kanon)', '4da60deec004341ec1ec7b5f80043ddd.pptx', NULL, NULL, 'PDF/Image', '2023-11-09 12:53:47', '2023-11-09 12:53:47'),
(149, '20', 'Mokhlesur Rahman (Kanon)', '497c77b5b5575c1a916d00f88d0051f8.pptx', NULL, NULL, 'PDF/Image', '2023-11-09 12:53:48', '2023-11-09 12:53:48'),
(150, '20', 'Mokhlesur Rahman (Kanon)', 'f4ca7570b1352786641407d4cff1f419.pptx', NULL, NULL, 'PDF/Image', '2023-11-09 12:53:49', '2023-11-09 12:53:49'),
(151, '20', 'Mokhlesur Rahman (Kanon)', '60a785f1928ca5a88e19abf16d31d319.pptx', NULL, NULL, 'PDF/Image', '2023-11-09 12:53:50', '2023-11-09 12:53:50'),
(152, '20', 'Sumon Chakrabarti , Instructor (Math)', '906db173fe45724e5b202fb90bf85145.pptx', NULL, NULL, 'PDF/Image', '2023-11-09 13:04:54', '2023-11-09 13:04:54'),
(153, '20', 'Sumon Chakrabarti , Instructor (Math)', '8e4344151f5ed71c08990ef2bb1901e5.pptx', NULL, NULL, 'PDF/Image', '2023-11-09 13:04:55', '2023-11-09 13:04:55'),
(154, '20', 'Sumon Chakrabarti , Instructor (Math)', '4ddffb0831d690bb9911d68ce8988305.pptx', NULL, NULL, 'PDF/Image', '2023-11-09 13:04:55', '2023-11-09 13:04:55'),
(155, '20', 'Sumon Chakrabarti , Instructor (Math)', '079c3e177c9e53d57188187078e49f15.pptx', NULL, NULL, 'PDF/Image', '2023-11-09 13:04:56', '2023-11-09 13:04:56'),
(156, '20', 'Sumon Chakrabarti , Instructor (Math)', '67084a16599983de480e2c0676680f96.pptx', NULL, NULL, 'PDF/Image', '2023-11-09 13:04:57', '2023-11-09 13:04:57'),
(157, '20', 'Sumon Chakrabarti , Instructor (Math)', 'd154e8374f5b771a20d455eeb60f1b3e.pptx', NULL, NULL, 'PDF/Image', '2023-11-09 13:04:57', '2023-11-09 13:04:57'),
(158, '20', 'Sumon Chakrabarti , Instructor (Math)', '52499c6dfc91fec1f9b524fe82515b44.pptx', NULL, NULL, 'PDF/Image', '2023-11-09 13:04:58', '2023-11-09 13:04:58'),
(159, '20', 'Sumon Chakrabarti , Instructor (Math)', '84b1a93c19eada933b85b30b65dc5fb3.pptx', NULL, NULL, 'PDF/Image', '2023-11-09 13:04:58', '2023-11-09 13:04:58'),
(160, '20', 'Md Faruk Hossain', '8f90fc6d0f6732b29d06d6903164e27d.pptx', NULL, NULL, 'PDF/Image', '2023-11-20 13:45:01', '2023-11-20 13:45:01'),
(161, '20', 'Md Faruk Hossain', 'b6d105ab203999b9bd92705ea622cf67.pptx', NULL, NULL, 'PDF/Image', '2023-11-20 13:45:01', '2023-11-20 13:45:01'),
(162, '20', 'Md Faruk Hossain', '7caa38e0b58d68424ba8ebbc9dcb6a38.pptx', NULL, NULL, 'PDF/Image', '2023-11-20 13:45:01', '2023-11-20 13:45:01'),
(163, '20', 'Md Faruk Hossain', '069a6de4234287c04b7723d30b353fa0.pptx', NULL, NULL, 'PDF/Image', '2023-11-20 13:45:01', '2023-11-20 13:45:01'),
(164, '20', 'Md Faruk Hossain', '7c7c0d8c6d4bc2440d272f417320a816.pptx', NULL, NULL, 'PDF/Image', '2023-11-20 13:45:02', '2023-11-20 13:45:02'),
(165, '20', 'Md Faruk Hossain', 'a66e8d10ad1fe36fad2871d1c16b1ac2.pptx', NULL, NULL, 'PDF/Image', '2023-11-20 13:45:02', '2023-11-20 13:45:02'),
(166, '20', 'Md Faruk Hossain', '62e3c37417c911f1311e076c430477ac.pptx', NULL, NULL, 'PDF/Image', '2023-11-20 13:45:02', '2023-11-20 13:45:02'),
(167, '20', 'Md Faruk Hossain', '448b66ccb94c6397a4c9797728259792.pptx', NULL, NULL, 'PDF/Image', '2023-11-20 13:45:02', '2023-11-20 13:45:02'),
(168, '20', 'Md Faruk Hossain', 'c70625c7e9bb6d006cc1fa02d7b78204.pptx', NULL, NULL, 'PDF/Image', '2023-11-20 13:45:02', '2023-11-20 13:45:02'),
(169, '20', 'Md Faruk Hossain', '32bad8104c88ed5f36f1cefb7d5fe2ac.pptx', NULL, NULL, 'PDF/Image', '2023-11-20 13:45:02', '2023-11-20 13:45:02'),
(170, '20', 'Mehedi Hasan', '58e98ec810ba471eca5c080dfab2ac62.pptx', NULL, NULL, 'PDF/Image', '2023-11-20 13:58:05', '2023-11-20 13:58:05'),
(171, '20', 'Mehedi Hasan', '0fa014cd3d17d2b95a4235cc3f6f4db1.pptx', NULL, NULL, 'PDF/Image', '2023-11-20 13:58:06', '2023-11-20 13:58:06'),
(172, '20', 'Md Mobarak Hossain, Principal', 'f069de90fdc396177efe25e81bfbf9cc.pptx', NULL, NULL, 'PDF/Image', '2023-11-20 16:05:01', '2023-11-20 16:05:01'),
(173, '20', 'Md Mobarak Hossain, Principal', '8cbdf359b50f185c94ed47fae791423a.pptx', NULL, NULL, 'PDF/Image', '2023-11-20 16:05:01', '2023-11-20 16:05:01'),
(174, '20', 'Md Mobarak Hossain, Principal', '30edd05331d6b2f3628077140bf69877.pptx', NULL, NULL, 'PDF/Image', '2023-11-20 16:05:01', '2023-11-20 16:05:01'),
(175, '20', 'Md Mobarak Hossain, Principal', 'a58a45ccdd42e4bb4809d1f451d87778.pptx', NULL, NULL, 'PDF/Image', '2023-11-20 16:05:01', '2023-11-20 16:05:01'),
(176, '20', 'Md Mobarak Hossain, Principal', 'ade949ce0c43f65d896f6bba634bdc1e.pptx', NULL, NULL, 'PDF/Image', '2023-11-20 16:05:01', '2023-11-20 16:05:01'),
(177, '20', 'Md Mobarak Hossain, Principal', 'b04e4eb2e7a98ceaf426116d9d9e63bc.pptx', NULL, NULL, 'PDF/Image', '2023-11-20 16:05:01', '2023-11-20 16:05:01'),
(178, '20', 'Md Mobarak Hossain, Principal', '8a817f8cd978d70a68e727aadcb460b2.pptx', NULL, NULL, 'PDF/Image', '2023-11-20 16:05:01', '2023-11-20 16:05:01'),
(179, '20', 'Md Mobarak Hossain, Principal', '527e813226455c45bddcc952959ae4ec.pptx', NULL, NULL, 'PDF/Image', '2023-11-20 16:05:01', '2023-11-20 16:05:01'),
(180, '20', 'Md Mobarak Hossain, Principal', '5ce0834490ae6709e47bc3c6c5a6e1cd.pptx', NULL, NULL, 'PDF/Image', '2023-11-20 16:05:02', '2023-11-20 16:05:02'),
(181, '20', 'Md Mobarak Hossain, Principal', '65bf69cd1b1c488cdbedb719e8e15adf.pptx', NULL, NULL, 'PDF/Image', '2023-11-20 16:05:02', '2023-11-20 16:05:02'),
(182, '20', 'Ajit Kumar Debnath', '529f556372734b9a3a4c42f037da2698.pptx', NULL, NULL, 'PDF/Image', '2023-11-20 16:29:03', '2023-11-20 16:29:03'),
(183, '20', 'Ajit Kumar Debnath', 'b2ecbfdf10a6b7a3e065bb1e94d00899.pptx', NULL, NULL, 'PDF/Image', '2023-11-20 16:29:04', '2023-11-20 16:29:04'),
(184, '20', 'Ajit Kumar Debnath', 'bf7118bac294dd77aa7e4eb5960c5170.pptx', NULL, NULL, 'PDF/Image', '2023-11-20 16:29:04', '2023-11-20 16:29:04'),
(185, '20', 'Ajit Kumar Debnath', '05db8741995b195d16c1e28fe939950d.pptx', NULL, NULL, 'PDF/Image', '2023-11-20 16:29:05', '2023-11-20 16:29:05'),
(186, '20', 'Ajit Kumar Debnath', '20ef0936f7b31fecd041537b3134f0ba.pptx', NULL, NULL, 'PDF/Image', '2023-11-20 16:29:05', '2023-11-20 16:29:05'),
(187, '20', 'Ajit Kumar Debnath', '829ec96def554ad309ef8474cbb6fe64.pptx', NULL, NULL, 'PDF/Image', '2023-11-20 16:29:06', '2023-11-20 16:29:06'),
(188, '20', 'Ajit Kumar Debnath', '1c1e73a10ffc6f57ae9d0d4daf32f43a.pptx', NULL, NULL, 'PDF/Image', '2023-11-20 16:29:07', '2023-11-20 16:29:07'),
(189, '20', 'Ajit Kumar Debnath', '95bdb2262ccac3d44db44d8a04196cd4.pptx', NULL, NULL, 'PDF/Image', '2023-11-20 16:29:07', '2023-11-20 16:29:07');

-- --------------------------------------------------------

--
-- Table structure for table `class_routines`
--

CREATE TABLE `class_routines` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `department` varchar(255) DEFAULT NULL,
  `semister` varchar(255) DEFAULT NULL,
  `shift` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `class_routines`
--

INSERT INTO `class_routines` (`id`, `department`, `semister`, `shift`, `status`, `avatar`, `created_at`, `updated_at`) VALUES
(31, 'Diploma In Survey', 'All Semister', '2nd Shift', 'Active', 'public/backdoor/uploads/notice/2023.08.17RRoutine455.pdf', '2023-08-17 11:47:56', '2023-08-17 11:47:56'),
(32, 'Diploma In Survey', 'All Semister', '1st Shift', 'Active', 'public/backdoor/uploads/notice/2023.08.17RRoutine456.pdf', '2023-08-17 11:51:11', '2023-08-17 11:51:11');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `message` varchar(255) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `email_verified_at`, `phone`, `subject`, `message`, `remember_token`, `created_at`, `updated_at`) VALUES
(12, 'Md. Nahid Aktar', 'mr.mnaktar@gmail.com', NULL, '01716139569', 'Want join short survey course 360 hours in Dhaka', 'Respected Recipient\r\nI want to enroll in a short survey course in your institution in Dhaka city preferably on weekends or evening shifts. If there is such scope available I will be happy to enroll myself.\r\nThanks and Regards\r\nNahid', NULL, '2021-11-30 14:21:14', '2021-11-30 14:21:14'),
(13, 'Muhammad Al Amran', 'alimrandvm2005@gmail.com', NULL, '01721871479', 'survey', 'how can i get admission in  the survey diploma course', NULL, '2021-12-17 22:55:35', '2021-12-17 22:55:35'),
(14, 'SAYED ABU NOMAN', 'sayedabunoman97@gmail.com', NULL, '01859225652', 'ভর্তি তথ্য জানতে চাই।', 'আমার ছোট ভাই বর্তমানে কক্সবাজার সরকারী রামু কলেজ কক্সবাজার থেকে এইচ এস সি পরিক্ষা দিয়েছে। আমি তার পাশাপাশি আপনাদের সার্ভেয়িং কোর্সটা করাতে চাচ্ছি। করা যাবে কিনা', NULL, '2022-01-03 16:54:24', '2022-01-03 16:54:24'),
(15, 'MAHDI MAHBUB', 'mahadehasan.stl@gmail.com', NULL, '01709991713', 'Survey Admission', 'Dear Sir\r\nPlease Let us Know When Amin ship Admission Will Start', NULL, '2022-01-04 16:28:11', '2022-01-04 16:28:11'),
(16, 'Nadim Ahamed', 'nadimahmad600@gmail.com', NULL, '01949515209', 'Diploma in ingineering(Survey)', 'আমি ২০১৯ সালে বিজ্ঞান বিভাগ থেকে এইচএসসি পাস করেছি‌।আমি এখন সার্ভে ইঞ্জিনিয়ারিং কোর্স সম্পন্ন করতে চাই। দয়াকরে আমাকে নিয়ম কানুন গুলো জানালে উপকৃত হব।\r\nধন্যবাদ', NULL, '2022-01-07 08:09:58', '2022-01-07 08:09:58'),
(17, 'Selim Mahmud', 'parismehta574@gmail.com', NULL, '01921643187', 'Survey', 'How can I apply in this institution', NULL, '2022-01-12 13:56:38', '2022-01-12 13:56:38'),
(18, 'Asad Zamman', 'asadzamman1838@gmail.com', NULL, '01866491838', 'কিভাবেভর্তি হব?', 'আমি ২০১৮ সালে এসএসসি ও ২০২০ সালে এইচএসসি পরীক্ষা দিয়েছি।এখন আমি বাংলাদেশ সার্ভে ইনস্টিটিউট কুমিল্লাতে ভর্তি হতে ইচ্ছুক তাই এখানকার ভর্তি ক্রাইটেরিয়া কেমন জানতে চাই।', NULL, '2022-01-13 04:09:34', '2022-01-13 04:09:34'),
(19, 'MD. KHABIR UDDIN SWEET', 'khabiruddinsweet@gmail.com', NULL, '01743766227', 'ভর্তি সংক্রান্ত', '4 বছরের সার্ভে ডিপ্লোমা কোর্সে ভর্তির যোগ্যতা ও আবেদন শুরু ও শেষর তারিখ জানতে চাই । \r\nঅনলাইনে ভর্তির জন্য ওয়েব সাইট ঠিকানা জানানোর জন্য অনুরোধ রইলো ।', NULL, '2022-01-13 13:44:25', '2022-01-13 13:44:25'),
(20, 'Md. Mafijul Islam', 'mafijulislam0185624@gmail.com', NULL, '01763687657', 'সার্ভেয়ার প্রশিক্ষণ কোর্স', 'স্যার এখন কী সল্প মেয়াদে সাভে কোর্স কী চালু আছে? বা কখন হবে , আমি কোর্স করতে চাই', NULL, '2022-01-13 19:57:09', '2022-01-13 19:57:09'),
(21, 'Md.Ashik Hossan', 'Ashikmahmud8005@gmail.com', NULL, '01741196540', 'Surveying', '3nd semester a vorty hoty cai...vorty howa jaby ki', NULL, '2022-01-14 13:51:05', '2022-01-14 13:51:05'),
(22, 'Rubel Ahmed', 'rubelbow@gmail.com', NULL, '01757719324', 'Surveying', 'I am interested.', NULL, '2022-01-17 22:45:30', '2022-01-17 22:45:30'),
(23, 'md rohul amin', 'mdrohulamin480666@gmail.com', NULL, '01645112530', 'Admission', 'I want to your famous Institute admission.', NULL, '2022-01-24 11:16:22', '2022-01-24 11:16:22'),
(24, 'Md Rayhan Uddin', 'Rayhanuddin5034@gmail', NULL, '01837321810', 'Addmition', 'Ami science theke inter 4.50 peye pass korechi ekhon ami ki survey addmited hte parbu,, ssc point 4.78 peyechi', NULL, '2022-01-30 12:25:34', '2022-01-30 12:25:34'),
(25, 'Helal Uddin Khan', 'helalkhankbc2018@gmail.com', NULL, '01709991713', 'Admission Details', 'Please sent Your contact Number', NULL, '2022-02-09 12:23:55', '2022-02-09 12:23:55'),
(26, 'Elinor Rabin', 'Elinor Rabin', NULL, '06-44293525', 'ThinkSky iTools What is it?', 'ThinkSky iTools What is it?\r\n\r\nThinkSky iTools - The iTools Comes With iPhone Transfer Tool\r\n\r\nmore details: https://cutt.ly/ZOu64dC', NULL, '2022-02-12 21:29:39', '2022-02-12 21:29:39'),
(27, 'Md Rubel buiyan', 'rubelbuiya4767@gmail.com', NULL, '01843514767', 'Diploma in survey Engineering course admission', 'I am Rubel Buiyan, from chandpur sadar,Chandpur. I want to admission diploma in survey Engineering course in this Institute. \r\nHelp me...plz', NULL, '2022-02-21 08:17:31', '2022-02-21 08:17:31'),
(28, 'Fatema Akter Mimi', 'fatemamimmu838@gmail.com', NULL, '01642345654', 'Surveyor', 'Want to know some information about surveyor', NULL, '2022-03-03 12:06:07', '2022-03-03 12:06:07'),
(29, 'Md. Manik Hossain Miajee', 'bdmanikmmm@gmail.com', NULL, '01930109458', 'Survey short course training.', 'Dear Sir.I am interested to take Survey short term course training.What should I do If I want to take training?Please let me know.', NULL, '2022-03-03 14:16:22', '2022-03-03 14:16:22'),
(30, 'Md:Jahidul Islam', 'rotonmiarj420@gmail.com', NULL, '01403632290', 'Business study', 'I am interested in reading this institution.I would be very much benefited if you tell me when to start admission and how to get admitted.', NULL, '2022-03-06 04:08:19', '2022-03-06 04:08:19'),
(31, 'Parvez Mosharrof', 'ronytalukdar9327@gmail.com', NULL, '01861601228', 'I would like to admission for surveyer diploma', 'How can i apply for diploma surveyer for 4 years cours', NULL, '2022-03-10 19:01:55', '2022-03-10 19:01:55'),
(32, 'মকছুদুল করীম', 'moksud.sylhet@gmail.com', NULL, '01741497336', 'কোর্স সংক্রান্ত তথ্য জানা প্রসঙ্গে', 'জনাব\r\nআপনাদের কোন কোর্স উত্তরা ঢাকা বা তার আশেপাশে কারনো হচ্ছে কি না...', NULL, '2022-03-14 00:11:13', '2022-03-14 00:11:13'),
(33, 'NILAKAR BISHWAS', 'nilakarbishwas65@gmail.com', NULL, '01517079843', 'About admission', 'I want to know about your admission system. How many time admission circular will published?  and when the time is to apply?', NULL, '2022-04-07 12:24:54', '2022-04-07 12:24:54'),
(34, 'Sajal Bepari', 'sajalbepari79@gmail.com', NULL, '01873382650', 'HSC', 'HSC দের ভর্তি শুরু হবে কবে থেকে আমাকে একটু যানান।আমি সার্ভেয়ারে ভর্তি হতে চাই। আর কলেজের নাম্বারটা', NULL, '2022-04-13 09:26:41', '2022-04-13 09:26:41'),
(35, 'Rakebul Hasan Hemal', 'sr.hemal21@gmail.com', NULL, '01843198117', 'ভর্তি হতে চাই', 'আসসালামুয়ালাইকুম ।\r\nআমি বাংলাদেশ সার্ভে ইন্সটিটিউট ভর্তি হতে চাই।\r\n\r\nআমি এবার ইন্টার পাশ করেছি ।\r\nপয়েন্ট : ৪.৭৫\r\nS.s.c+h.s.c=7.69\r\nআমি কি ভর্তি হতে পারবো।\r\nপ্লিজ একটু জানাবেন।', NULL, '2022-05-11 12:39:03', '2022-05-11 12:39:03'),
(36, 'Dewan khalid Mahmud', 'abdulkhalequedewan244@gmail.com', NULL, '01983978250', 'Diploma in survey Engineering', 'I want  administration', NULL, '2022-05-12 05:39:22', '2022-05-12 05:39:22'),
(37, 'Md Repon Ali', 'reponali@4306gmail.com', NULL, '01883231336', 'Amin ship', 'আমি চার বছর মেয়াদি আমিনশীপ এ ভর্ত্তি হতে চাই', NULL, '2022-05-19 10:12:17', '2022-05-19 10:12:17'),
(38, 'BAPPY CHANDRA SUTRADHAR', 'hsd65472@gmail.com', NULL, '01887481857', '৩য় পর্বে শূন্য আসনের রেজাল্ট দিবে কখন?', 'আমি এবছর ৩য় পর্বে শূন্য আসনে আবেদন করেছি। আজকে আমাদের ফলাফল দেওয়ার কথা! কিন্তু কখন দিবে বা কীভাবে দেখব যদি জানতেন কষ্ট করে।', NULL, '2022-05-19 12:35:04', '2022-05-19 12:35:04'),
(39, 'Md mojnu mia', 'mojnumia3164@gmail.com', NULL, '01786443164', 'কুমিল্লা ময়নামতি সার্ভে ইনস্টিটিউট', 'কিভাবে কুমিল্লা সরকারি সার্ভে ইনস্টিটিউট এ ভর্তি হবো', NULL, '2022-05-21 21:10:10', '2022-05-21 21:10:10'),
(40, 'HenryBouct', 'RookTessa9292@o2.pl', NULL, '89039811256', 'আপনার মানিব্যাগ পুরু করতে দ্রুততম উপায় পাওয়া যায়.', 'আর্থিক স্বাধীনতার জন্য রাশেস যারা প্রত্যেকের জন্য সবচেয়ে ভালো উপায়. https://Bouct.bode-roesch.de/Bouct', NULL, '2022-06-03 21:10:00', '2022-06-03 21:10:00'),
(41, 'HenryBouct', 'kitty@mailme.dk:hellig63Q11', NULL, '89037472774', 'আর্থিক রোবট আপনার সাফল্য সূত্র পাওয়া যায় না. এটি সম্পর্কে আরও জানুন.', 'অতিরিক্ত আয় এই রোবট ব্যবহার করে প্রত্যেকের জন্য উপলব্ধ. https://Bouct.bode-roesch.de/Bouct', NULL, '2022-06-06 05:10:19', '2022-06-06 05:10:19'),
(42, 'HenryBouct', 'nema80@forum.dk', NULL, '89032294199', 'এই আর্থিক রোবট ব্যবহার করে ভবিষ্যতে নিজেকে সমৃদ্ধ করুন.', 'এমনকি একটি শিশু কিভাবে করতে জানে $ 100 আজ. https://Bouct.bode-roesch.de/Bouct', NULL, '2022-06-06 08:21:41', '2022-06-06 08:21:41'),
(43, 'HenryBouct', 'jonas.m.o@forum.dk', NULL, '89031512264', 'এমনকি একটি শিশু কিভাবে করতে জানে $ 100 আজ.', 'এখানে অর্থ উপার্জন যারা সফল মানুষ সমাজে যোগ দিন. https://Bouct.bode-roesch.de/Bouct', NULL, '2022-06-06 11:35:57', '2022-06-06 11:35:57'),
(44, 'HenryBouct', 'qleb2808@mailme.dk', NULL, '89038505509', 'এখন আর চাকরি খোঁজার দরকার নেই৷ অনলাইন কাজ.', 'আপনি এই রোবট ব্যবহার করা হলে আপনার কম্পিউটার আপনি অতিরিক্ত আয় আনতে পারেন. https://Bouct.bode-roesch.de/Bouct', NULL, '2022-06-06 14:40:35', '2022-06-06 14:40:35'),
(45, 'HenryBouct', 'dario01@forum.dk', NULL, '89030900652', 'অর্থ উপার্জন করুন 24/7 কোন প্রচেষ্টা এবং দক্ষতা ছাড়া.', 'আর্থিক রোবট নেট সবচেয়ে কার্যকর আর্থিক হাতিয়ার! https://Bouct.bode-roesch.de/Bouct', NULL, '2022-06-06 17:51:49', '2022-06-06 17:51:49'),
(46, 'HenryBouct', 'ronnie_henriksen@forum.dk', NULL, '89035789097', 'এখনও কোটিপতি নয়? এখনই ঠিক করুন!', 'নেটে অর্থ উপার্জন এখন সহজ. https://Bouct.bode-roesch.de/Bouct', NULL, '2022-06-06 20:55:49', '2022-06-06 20:55:49'),
(47, 'HenryBouct', 'janoesterby@forum.dk', NULL, '89030887815', 'আর কাজ করার দরকার নেই. শুধু রোবট চালু.', 'আপনি অনলাইনে অর্থ উপার্জন করতে চান সবকিছু কিনুন. https://Bouct.bode-roesch.de/Bouct', NULL, '2022-06-07 00:00:02', '2022-06-07 00:00:02'),
(48, 'HenryBouct', 'somej@forum.dk', NULL, '89039045234', 'রোবট আর্থিক স্বাধীনতা জন্য দেখায় যারা প্রত্যেকের জন্য সবচেয়ে ভাল উপায়.', 'এক ডলার কিছুই নয়, কিন্তু এটি বৃদ্ধি করতে পারেন $100 এখানে. https://Bouct.bode-roesch.de/Bouct', NULL, '2022-06-07 03:17:10', '2022-06-07 03:17:10'),
(49, 'HenryBouct', 'wow10@forum.dk', NULL, '89032514424', 'ইন্টারনেটে সেরা আর্থিক রোবট চেষ্টা করে দেখুন.', 'আপনি রোবট দিয়ে বিনিয়োগ করার সময় আপনার অর্থ বৃদ্ধি দেখুন. https://Bouct.bode-roesch.de/Bouct', NULL, '2022-06-07 06:39:26', '2022-06-07 06:39:26'),
(50, 'HenryBouct', 'oliver-boel@forum.dk', NULL, '89037893748', 'অর্থ উপার্জনের জন্য সারা রাত জেগে থাকার দরকার নেই. রোবট চালু করুন', 'আর্থিক স্বাধীনতা কি এই রোবট গ্যারান্টী বা নিশ্চয়তা দিচ্ছে. https://Bouct.bode-roesch.de/Bouct', NULL, '2022-06-07 10:03:24', '2022-06-07 10:03:24'),
(51, 'HenryBouct', 'talle02@forum.dk', NULL, '89036950146', 'অর্থ উপার্জনের সহজ উপায় খুঁজছেন? আর্থিক রোবট দেখুন', 'অর্থ প্রয়োজন সবাই এই রোবট চেষ্টা করা উচিত. https://Bouct.bode-roesch.de/Bouct', NULL, '2022-06-07 12:59:43', '2022-06-07 12:59:43'),
(52, 'HenryBouct', 'knallert@forum.dk', NULL, '89035983224', 'প্রতিদিন শত শত ব্যাক করতে শিখুন', 'প্রচেষ্টা ছাড়া অতিরিক্ত অর্থ উপার্জন. https://Bouct.bode-roesch.de/Bouct', NULL, '2022-06-07 16:21:05', '2022-06-07 16:21:05'),
(53, 'HenryBouct', 'line_p@forum.dk', NULL, '89035078918', 'প্রতিদিন শত শত ব্যাক করতে শিখুন', 'আর্থিক রোবট ব্যবহার করে আপনার অনলাইন কাজ শুরু করুন. https://Bouct.bode-roesch.de/Bouct', NULL, '2022-06-07 19:35:01', '2022-06-07 19:35:01'),
(54, 'HenryBouct', 'kaiser@forum.dk', NULL, '89031658817', 'আর্থিক দক্ষতা নেই? রোবট আপনার জন্য অর্থ উপার্জন করতে দিন.', 'এটা আরো টাকা পেতে রোবট আরম্ভ শ্রেষ্ঠ সময়. https://Bouct.bode-roesch.de/Bouct', NULL, '2022-06-07 22:30:36', '2022-06-07 22:30:36'),
(55, 'HenryBouct', 'hg7hiurjifd@forum.dk', NULL, '89034290854', 'ছোট বিনিয়োগ দ্রুত টন ডলার আনতে পারেন.', 'আর্থিক রোবট ব্যবহার করে আপনার অনলাইন কাজ শুরু করুন. https://Bouct.bode-roesch.de/Bouct', NULL, '2022-06-08 01:35:06', '2022-06-08 01:35:06'),
(56, 'HenryBouct', 'sergh-65@mailme.dk', NULL, '89031609358', 'বিনিয়োগ ছাড়া বিশাল আয় পাওয়া যায়.', 'আর্থিক রোবট আপনার সাফল্য সূত্র পাওয়া যায় না. এটি সম্পর্কে আরও জানুন. https://Bouct.bode-roesch.de/Bouct', NULL, '2022-06-08 04:31:25', '2022-06-08 04:31:25'),
(57, 'HenryBouct', 'nullh0@infinito.it', NULL, '89039381171', 'এই বট ব্যবহার করে ইন্টারনেট অর্থ উপার্জন করুন. এটা সত্যিই কাজ করে!', 'শুধু বাড়িতে বসে ডলার করুন. https://Bouct.blueliners07.de/Bouct', NULL, '2022-06-08 07:30:39', '2022-06-08 07:30:39'),
(58, 'HenryBouct', 'siiig@forum.dk', NULL, '89031562019', 'আর্থিক রোবট আপনি টাকা আনয়ন রাখে যখন আপনি ঘুম.', 'আর্থিক রোবট ধনী মানুষের সেরা সহচর. https://Bouct.blueliners07.de/Bouct', NULL, '2022-06-08 10:34:53', '2022-06-08 10:34:53'),
(59, 'HenryBouct', 'jacoba@forum.dk', NULL, '89033112965', 'অর্থ উপার্জনের সবচেয়ে সহজ উপায় সম্পর্কে সন্ধান করুন.', 'এখন আর চাকরি খোঁজার দরকার নেই৷ অনলাইন কাজ. https://Bouct.blueliners07.de/Bouct', NULL, '2022-06-08 13:40:00', '2022-06-08 13:40:00'),
(60, 'MD RAQUIB HOSAN', 'rakibnaib@gmail.com', NULL, '01856773403', 'I want to do the course', 'I want to do the course', NULL, '2022-06-08 14:39:20', '2022-06-08 14:39:20'),
(61, 'HenryBouct', 'mig@mail-online.dk', NULL, '89037873808', 'ওয়াও! এই রোবট একটি অনলাইন কর্মজীবনের জন্য একটি দুর্দান্ত শুরু.', 'রোজগার $ 1000 একটি দিন সহজ যদি আপনি এই আর্থিক রোবট ব্যবহার. https://Bouct.blueliners07.de/Bouct', NULL, '2022-06-08 15:28:39', '2022-06-08 15:28:39'),
(62, 'HenryBouct', 'han75@mailme.dk', NULL, '89034399674', 'অতিরিক্ত অর্থ খুঁজছেন? সেরা আর্থিক উপকরণ চেষ্টা করুন.', 'মাত্র এক ক্লিক $1000 মধ্যে আপনি ডলার চালু করতে পারেন. https://Bouct.blueliners07.de/Bouct', NULL, '2022-06-08 18:41:59', '2022-06-08 18:41:59'),
(63, 'HenryBouct', 'byt@mailme.dk', NULL, '89038020543', 'অতিরিক্ত আয় এই রোবট ব্যবহার করে প্রত্যেকের জন্য উপলব্ধ.', 'আপনাকে বরখাস্ত করা হলে কোনও উদ্বেগ নেই অনলাইন কাজ. https://Bouct.blueliners07.de/Bouct', NULL, '2022-06-08 22:03:32', '2022-06-08 22:03:32'),
(64, 'HenryBouct', 'carste@forum.dk', NULL, '89037591559', 'রোবট চালু করুন এবং এটি আপনি টাকা আনতে দিন.', 'হাজার হাজার টাকা আয় করুন কিছুই দিতে. https://Bouct.blueliners07.de/Bouct', NULL, '2022-06-09 01:06:02', '2022-06-09 01:06:02'),
(65, 'HenryBouct', 'kallea@mail-online.dk', NULL, '89030402688', 'আর্থিক দক্ষতা নেই? রোবট আপনার জন্য অর্থ উপার্জন করতে দিন.', 'অবসরপ্রাপ্তদের জন্য সেরা অনলাইন কাজ আপনার পুরানো বয়সের সমৃদ্ধ করুন. https://Bouct.blueliners07.de/Bouct', NULL, '2022-06-09 04:09:12', '2022-06-09 04:09:12'),
(66, 'HenryBouct', 'willis.niesha@yahoo.com', NULL, '89036956169', 'আর্থিক রোবট আপনার জন্য কাজ করে, এমনকি যখন আপনি ঘুম.', 'অতিরিক্ত আয়ের সাথে আপনি যা চান তা নির্দ্বিধায় কিনুন https://Bouct.blueliners07.de/Bouct', NULL, '2022-06-09 07:13:17', '2022-06-09 07:13:17'),
(67, 'HenryBouct', 'mariejensen90@forum.dk', NULL, '89037849474', 'এখনও কোটিপতি নয়? এখনই ঠিক করুন!', 'এমনকি একটি শিশু এই রোবট সাহায্যে আজ $100 করতে জানেন কিভাবে. https://Bouct.blueliners07.de/Bouct', NULL, '2022-06-09 10:19:51', '2022-06-09 10:19:51'),
(68, 'HenryBouct', 'oleoleped@forum.dk', NULL, '89031780417', '# 1 নেট আর্থিক বিশেষজ্ঞ! নতুন রোবট দেখুন', 'রোবট কখনই ঘুমায় না এটা আপনার জন্য টাকা তোলে 24/7. https://Bouct.blueliners07.de/Bouct', NULL, '2022-06-09 13:40:07', '2022-06-09 13:40:07'),
(69, 'HenryBouct', 'piafle@forum.dk', NULL, '89033210439', 'শুধু বাড়িতে বসে ডলার করুন.', 'অর্থ উপার্জন করুন, যুদ্ধ নয়! আর্থিক রোবট আপনি কি প্রয়োজন. https://Bouct.blueliners07.de/Bouct', NULL, '2022-06-09 16:56:37', '2022-06-09 16:56:37'),
(70, 'HenryBouct', 'herhan@mail-online.dk', NULL, '89034959185', 'টাকা, টাকা! রোবট দিয়ে টাকা আয়!', 'রোবট আনতে দিন আপনি টাকা যখন আপনি বিশ্রাম. https://Bouct.blueliners07.de/Bouct', NULL, '2022-06-09 19:57:58', '2022-06-09 19:57:58'),
(71, 'HenryBouct', 'h.olsen@forum.dk', NULL, '89032572309', 'আর্থিক রোবট পরিচালনা এবং আপনার আয় বৃদ্ধি করার জন্য একটি দুর্দান্ত উপায়.', 'আপনি রোবট দিয়ে বিনিয়োগ করার সময় আপনার অর্থ বৃদ্ধি দেখুন. https://Bouct.blueliners07.de/Bouct', NULL, '2022-06-09 23:02:26', '2022-06-09 23:02:26'),
(72, 'HenryBouct', 'natiaoggrace@forum.dk', NULL, '89032490464', 'সাফল্যের সূত্র পাওয়া যায়. এটি সম্পর্কে আরও জানুন.', 'অর্থ প্রয়োজন সবাই এই রোবট চেষ্টা করা উচিত. https://Bouct.blueliners07.de/Bouct', NULL, '2022-06-10 02:18:36', '2022-06-10 02:18:36'),
(73, 'HenryBouct', 'play_the_angel@mailme.dk', NULL, '89038027427', 'টাকা দরকার? সহজেই এখানে পাবেন?', 'সেরা অনলাইন বিনিয়োগ টুল পাওয়া যায়. আরও জানুন! https://Bouct.blueliners07.de/Bouct', NULL, '2022-06-10 04:03:10', '2022-06-10 04:03:10'),
(74, 'HenryBouct', 'lauridsen.piet33@mailme.dk', NULL, '89035961541', 'আপনার টাকা হত্তয়া রাখা 24/7 আপনি আর্থিক রোবট ব্যবহার করা হলে.', 'ওয়াও! এটি একটি আর্থিক স্বাধীনতা জন্য একটি দ্রুততম উপায়. https://Bouct.blueliners07.de/Bouct', NULL, '2022-06-10 05:01:37', '2022-06-10 05:01:37'),
(75, 'HenryBouct', 'mwm@forum.dk', NULL, '89039524836', 'এখন আর চাকরি খোঁজার দরকার নেই৷ অনলাইন কাজ.', 'এমনকি একটি শিশু এই রোবট সাহায্যে আজ $100 করতে জানেন কিভাবে. https://Bouct.blueliners07.de/Bouct', NULL, '2022-06-10 05:58:23', '2022-06-10 05:58:23'),
(76, 'HenryBouct', 'alanka@forum.dk', NULL, '89032754865', 'রোবট কখনই ঘুমায় না এটা আপনার জন্য টাকা তোলে 24/7.', 'এমনকি একটি শিশু এই রোবট সাহায্যে আজ $100 করতে জানেন কিভাবে. https://Bouct.blueliners07.de/Bouct', NULL, '2022-06-10 06:57:09', '2022-06-10 06:57:09'),
(77, 'HenryBouct', 'irenka.per@mailme.dk', NULL, '89033655650', 'আর্থিক রোবট আপনি টাকা আনয়ন রাখে যখন আপনি ঘুম.', 'আপনার ব্যবহারের এই আর্থিক রোবট যদি ভবিষ্যতে সম্পর্কে চিন্তা করার কোন প্রয়োজন নেই. https://Bouct.blueliners07.de/Bouct', NULL, '2022-06-10 07:56:01', '2022-06-10 07:56:01'),
(78, 'HenryBouct', 'culdborg@forum.dk', NULL, '89034195099', 'স্বয়ংক্রিয় রোবট আর্থিক স্বাধীনতার জন্য সেরা শুরু.', 'অর্থ উপার্জনের জন্য সারা রাত জেগে থাকার দরকার নেই. রোবট চালু করুন https://Bouct.blueliners07.de/Bouct', NULL, '2022-06-10 08:54:43', '2022-06-10 08:54:43'),
(79, 'HenryBouct', 'catiakruse@forum.dk', NULL, '89038885315', 'অতিরিক্ত অর্থ খুঁজছেন? সেরা আর্থিক উপকরণ চেষ্টা করুন.', 'আপনার মানিব্যাগ পুরু করতে দ্রুততম উপায় পাওয়া যায়. https://Bouct.blueliners07.de/Bouct', NULL, '2022-06-10 09:59:10', '2022-06-10 09:59:10'),
(80, 'HenryBouct', 'allanregnar@forum.dk', NULL, '89034932437', 'অবসরপ্রাপ্তদের জন্য সেরা অনলাইন কাজ আপনার পুরানো বয়সের সমৃদ্ধ করুন.', 'এখানে অনলাইনে কাজ প্রতি সপ্তাহে হাজার হাজার করুন. https://Bouct.blueliners07.de/Bouct', NULL, '2022-06-10 10:56:56', '2022-06-10 10:56:56'),
(81, 'HenryBouct', 'amanda.jacobsen@forum.dk', NULL, '89036804020', 'আপনার টাকা সারা দিন আপনার জন্য কাজ করুন.', 'হাজার হাজার টাকা আয় করুন কিছুই দিতে. https://Bouct.blueliners07.de/Bouct', NULL, '2022-06-10 12:00:48', '2022-06-10 12:00:48'),
(82, 'HenryBouct', 'pamu78@forum.dk', NULL, '89036790640', 'শুধু এই রোবট ব্যবহার করে প্রতি সপ্তাহে হাজার হাজার ডলার উপার্জন শুরু করুন.', 'আপনি মানিব্যাগ পুরু করতে দ্রুততম উপায় এখানে. https://Bouct.blueliners07.de/Bouct', NULL, '2022-06-10 22:05:30', '2022-06-10 22:05:30'),
(83, 'HenryBouct', 'frankmortensen1986@forum.dk', NULL, '89035226497', 'স্বয়ংক্রিয় রোবট আর্থিক স্বাধীনতার জন্য সেরা শুরু.', 'সবাই সে এখন চায় যতটা উপার্জন করতে পারেন. https://Bouct.blueliners07.de/Bouct', NULL, '2022-06-10 23:33:32', '2022-06-10 23:33:32'),
(84, 'HenryBouct', 'kirle@mail-online.dk', NULL, '89030868385', 'রোবট কখনই ঘুমায় না এটা আপনার জন্য টাকা তোলে 24/7.', 'এই বট ব্যবহার করে ইন্টারনেট অর্থ উপার্জন করুন. এটা সত্যিই কাজ করে! https://Bouct.coronect.de/Bouct', NULL, '2022-06-11 02:11:36', '2022-06-11 02:11:36'),
(85, 'HenryBouct', 'mhc@mail-online.dk', NULL, '89032949385', 'বিনিয়োগ ছাড়া বিশাল আয় পাওয়া যায়.', 'আমরা আপনার আর্থিক স্থিতিশীলতা বৃদ্ধি কিভাবে জানি. https://Bouct.coronect.de/Bouct', NULL, '2022-06-11 04:54:57', '2022-06-11 04:54:57'),
(86, 'HenryBouct', 'habib@mail-online.dk', NULL, '89039575033', 'অর্থ উপার্জন করুন, যুদ্ধ নয়! আর্থিক রোবট আপনি কি প্রয়োজন.', 'টাকা নেই? অনলাইনে আয় করুন https://Bouct.coronect.de/Bouct', NULL, '2022-06-11 07:31:39', '2022-06-11 07:31:39'),
(87, 'HenryBouct', 'henry294@mailme.dk', NULL, '89037054931', 'আপনার টাকা হত্তয়া রাখা 24/7 আপনি আর্থিক রোবট ব্যবহার করা হলে.', 'টাকা দরকার? সহজেই এখানে পাবেন? https://Bouct.coronect.de/Bouct', NULL, '2022-06-11 10:15:43', '2022-06-11 10:15:43'),
(88, 'HenryBouct', 'gra-veronika@mailme.dk', NULL, '89033549238', 'অনলাইন আয় আপনি আসা সত্য স্বপ্ন করতে সবচেয়ে সহজ পদ্ধিতি হল উপায়.', 'এমনকি একটি শিশুর অর্থ উপার্জন করতে জানেন কিভাবে. আপনি কি? https://Bouct.coronect.de/Bouct', NULL, '2022-06-11 12:50:01', '2022-06-11 12:50:01'),
(89, 'HenryBouct', 'fruup@mailme.dk', NULL, '89036491106', 'এখনও কোটিপতি নয়? এখনই ঠিক করুন!', 'আর্থিক রোবট কখনও # 1 বিনিয়োগ হাতিয়ার. এটি চালু করুন! https://Bouct.coronect.de/Bouct', NULL, '2022-06-11 15:35:10', '2022-06-11 15:35:10'),
(90, 'HenryBouct', 'nielsenhenrik@forum.dk', NULL, '89036522045', 'স্বয়ংক্রিয় রোবট আর্থিক স্বাধীনতার জন্য সেরা শুরু.', 'এখন আর চাকরি খোঁজার দরকার নেই৷ অনলাইন কাজ. https://Bouct.coronect.de/Bouct', NULL, '2022-06-11 18:17:27', '2022-06-11 18:17:27'),
(91, 'HenryBouct', 'efsane13@mailme.dk', NULL, '89031424080', 'এই রোবট ব্যবহার করে আপনি সমৃদ্ধ করতে সবচেয়ে ভাল উপায়.', 'আমরা কিভাবে আমাদের ভবিষ্যত সমৃদ্ধ করতে জানি এবং আপনি কি? https://Bouct.coronect.de/Bouct', NULL, '2022-06-11 20:57:24', '2022-06-11 20:57:24'),
(92, 'HenryBouct', 'lakj@jubiipost.dk', NULL, '89035210537', 'ওয়াও! এটি একটি আর্থিক স্বাধীনতা জন্য একটি দ্রুততম উপায়.', 'রোবট আনতে দিন আপনি টাকা যখন আপনি বিশ্রাম. https://Bouct.coronect.de/Bouct', NULL, '2022-06-11 23:30:17', '2022-06-11 23:30:17'),
(93, 'HenryBouct', 'caliber@forum.dk', NULL, '89030940259', 'আর্থিক রোবট কখনও # 1 বিনিয়োগ হাতিয়ার. এটি চালু করুন!', 'এখানে অনলাইনে কাজ প্রতি সপ্তাহে হাজার হাজার করুন. https://Bouct.coronect.de/Bouct', NULL, '2022-06-12 02:17:42', '2022-06-12 02:17:42'),
(94, 'HenryBouct', 'alexstevenson84@mailme.dk', NULL, '89037741021', 'আর্থিক রোবট ব্যবহার করে আপনার অনলাইন কাজ শুরু করুন.', 'প্রতি সপ্তাহে হাজার হাজার ডলার উপার্জন শুরু করুন https://Bouct.coronect.de/Bouct', NULL, '2022-06-12 04:51:12', '2022-06-12 04:51:12'),
(95, 'HenryBouct', 'retov@mailme.dk', NULL, '89037523308', 'হাজার হাজার টাকা নিশ্চিত করা হয় যদি আপনি এই রোবট ব্যবহার.', 'আপনি রোবট দিয়ে বিনিয়োগ করার সময় আপনার অর্থ বৃদ্ধি দেখুন. https://Bouct.coronect.de/Bouct', NULL, '2022-06-12 07:29:45', '2022-06-12 07:29:45'),
(96, 'HenryBouct', 'nick66@forum.dk', NULL, '89034424812', 'টাকা নেই? অনলাইনে আয় করুন', 'এই প্রোগ্রামের সাথে আপনার ল্যাপটপ একটি আর্থিক উপকরণ করুন. https://Bouct.coronect.de/Bouct', NULL, '2022-06-12 10:15:37', '2022-06-12 10:15:37'),
(97, 'HenryBouct', 'bassea@forum.dk', NULL, '89031397695', 'বিনিয়োগ $ 1 আজ করতে $ 1000 আগামীকাল.', 'এমনকি একটি শিশুর অর্থ উপার্জন করতে জানেন কিভাবে. আপনি কি? https://Bouct.coronect.de/Bouct', NULL, '2022-06-12 12:52:15', '2022-06-12 12:52:15'),
(98, 'HenryBouct', 'k-dreyer@forum.dk', NULL, '89030123095', 'আমরা কিভাবে আমাদের ভবিষ্যত সমৃদ্ধ করতে জানি এবং আপনি কি?', 'আপনার টাকা সারা দিন আপনার জন্য কাজ করুন. https://Bouct.coronect.de/Bouct', NULL, '2022-06-12 15:37:15', '2022-06-12 15:37:15'),
(99, 'HenryBouct', 'freddy@mailme.dk', NULL, '89034333218', 'তিনি এই বট মামলা চায় সবাই যতটা উপার্জন করতে পারেন.', 'প্রতিদিন শত শত ব্যাক করতে শিখুন https://Bouct.coronect.de/Bouct', NULL, '2022-06-12 18:13:44', '2022-06-12 18:13:44'),
(100, 'HenryBouct', 'vodkaa@forum.dk', NULL, '89032911648', 'আপনি রোবট ব্যবহার করা হলে ইন্টারনেট টাকা রোজগার সহজ.', 'সবচেয়ে সফল মানুষ ইতিমধ্যে রোবট ব্যবহার. আপনি কি? https://Bouct.coronect.de/Bouct', NULL, '2022-06-12 20:57:06', '2022-06-12 20:57:06'),
(101, 'HenryBouct', 'simonl@forum.dk', NULL, '89030094193', 'হাজার হাজার টাকা আয় করুন আর্থিক রোবট আপনাকে এটি করতে সহায়তা করবে!', 'টাকা দরকার? আপনার বাড়িতে গিয়েই এটি উপার্জন. https://Bouct.coronect.de/Bouct', NULL, '2022-06-12 23:33:58', '2022-06-12 23:33:58'),
(102, 'HenryBouct', 'casperhs12@mailme.dk', NULL, '89037770969', 'বিনিয়োগ $ 1 আজ করতে $ 1000 আগামীকাল.', 'আর্থিক রোবট আপনার সাফল্য সূত্র পাওয়া যায় না. এটি সম্পর্কে আরও জানুন. https://Bouct.coronect.de/Bouct', NULL, '2022-06-13 02:38:02', '2022-06-13 02:38:02'),
(103, 'HenryBouct', 'samir@forum.dk', NULL, '89034521916', 'আপনার টাকা এই রোবট সঙ্গে রাজধানী মধ্যে হত্তয়া যাক.', 'রোবট কখনই ঘুমায় না এটা আপনার জন্য টাকা তোলে 24/7. https://Bouct.coronect.de/Bouct', NULL, '2022-06-13 05:22:53', '2022-06-13 05:22:53'),
(104, 'HenryBouct', 'newmanlogan233@mailme.dk', NULL, '89031429318', 'এই রোবট আপনি প্রতিটি দিন শত শত ডলার করতে সাহায্য করবে.', 'রোবট কখনই ঘুমায় না এটা আপনার জন্য টাকা তোলে 24/7. https://Bouct.coronect.de/Bouct', NULL, '2022-06-13 08:17:59', '2022-06-13 08:17:59'),
(105, 'HenryBouct', 'intersait@mailme.dk', NULL, '89039597157', 'আর্থিক রোবট পরিচালনা এবং আপনার আয় বৃদ্ধি করার জন্য একটি দুর্দান্ত উপায়.', 'বিনিয়োগ ছাড়া বিশাল আয় পাওয়া যায়, এখন! https://Bouct.coronect.de/Bouct', NULL, '2022-06-13 10:47:40', '2022-06-13 10:47:40'),
(106, 'HenryBouct', 'lokok@forum.dk', NULL, '89035551356', 'প্রচেষ্টা এবং দক্ষতা ছাড়া অতিরিক্ত অর্থ উপার্জন.', 'আপনি মানিব্যাগ পুরু করতে দ্রুততম উপায় এখানে. https://Bouct.coronect.de/Bouct', NULL, '2022-06-13 13:35:55', '2022-06-13 13:35:55'),
(107, 'HenryBouct', 'klint.klint@forum.dk', NULL, '89035842522', 'আর্থিক রোবট আপনার ভবিষ্যত সম্পদ এবং স্বাধীনতা.', 'আজ অর্থ উপার্জন শুরু করার জন্য সেরা বিনিয়োগ যন্ত্র চালু করুন. https://Bouct.coronect.de/Bouct', NULL, '2022-06-13 16:17:30', '2022-06-13 16:17:30'),
(108, 'HenryBouct', 'chanti@forum.dk', NULL, '89032655018', 'অর্থ উপার্জন করুন 24/7 কোন প্রচেষ্টা এবং দক্ষতা ছাড়া.', 'আর্থিক দক্ষতা নেই? রোবট আপনার জন্য অর্থ উপার্জন করতে দিন. https://Bouct.coronect.de/Bouct', NULL, '2022-06-13 19:00:56', '2022-06-13 19:00:56'),
(109, 'HenryBouct', 'soerenf@forum.dk', NULL, '89039891750', 'অর্থ উপার্জনের সবচেয়ে সহজ উপায় সম্পর্কে সন্ধান করুন.', 'আর্থিক রোবট আপনি টাকা আনয়ন রাখে যখন আপনি ঘুম. https://Bouct.coronect.de/Bouct', NULL, '2022-06-13 21:37:11', '2022-06-13 21:37:11'),
(110, 'HenryBouct', 'hifi@mail-online.dk', NULL, '89032550803', 'আপনার টাকা এই রোবট সঙ্গে রাজধানী মধ্যে হত্তয়া যাক.', 'আপনি এই রোবট ব্যবহার করা হলে আপনার কম্পিউটার আপনি অতিরিক্ত আয় আনতে পারেন. https://Bouct.coronect.de/Bouct', NULL, '2022-06-14 00:11:43', '2022-06-14 00:11:43'),
(111, 'HenryBouct', 'holdferiebolig@forum.dk', NULL, '89036762442', 'আজ অর্থ উপার্জন শুরু করার জন্য সেরা বিনিয়োগ যন্ত্র চালু করুন.', 'মনোযোগ! এখানে আপনি অনলাইনে অর্থ উপার্জন করতে পারেন! https://Bouct.coronect.de/Bouct', NULL, '2022-06-14 02:57:01', '2022-06-14 02:57:01'),
(112, 'HenryBouct', 'ctx@forum.dk', NULL, '89039064629', 'বিনিয়োগ ছাড়া বিশাল আয় পাওয়া যায়.', 'এখন আর চাকরি খোঁজার দরকার নেই৷ অনলাইন কাজ. https://Bouct.coronect.de/Bouct', NULL, '2022-06-14 05:40:04', '2022-06-14 05:40:04'),
(113, 'HenryBouct', 'krla@forum.dk', NULL, '89034078375', 'আর্থিক রোবট পরিচালনা এবং আপনার আয় বৃদ্ধি করার জন্য একটি দুর্দান্ত উপায়.', 'প্রতিটি আপনার ডলার মধ্যে চালু করতে পারেন $100 আপনি লাঞ্চ পরে এই রোবট. https://Bouct.coronect.de/Bouct', NULL, '2022-06-14 08:41:52', '2022-06-14 08:41:52'),
(114, 'HenryBouct', 'scania@forum.dk', NULL, '89031116691', 'অতিরিক্ত আয়ের সাথে আপনি যা চান তা নির্দ্বিধায় কিনুন', 'আর্থিক স্বাধীনতা কি এই রোবট গ্যারান্টী বা নিশ্চয়তা দিচ্ছে. https://Bouct.coronect.de/Bouct', NULL, '2022-06-14 11:09:35', '2022-06-14 11:09:35'),
(115, 'HenryBouct', 'dusko@forum.dk', NULL, '89035106536', 'আপনি এই রোবট ব্যবহার করা হলে অর্থ উপার্জন অত্যন্ত সহজ হতে পারে.', 'আপনি এই রোবট ব্যবহার করা হলে অর্থ উপার্জন অত্যন্ত সহজ হতে পারে. https://Bouct.coronect.de/Bouct', NULL, '2022-06-14 13:44:39', '2022-06-14 13:44:39'),
(116, 'HenryBouct', 'fredb0923@mailme.dk', NULL, '89031091063', 'টাকা নেই? অনলাইনে আয় করুন', 'বয়স টাকা দিয়ে আপনার পরিবার প্রদান. রোবট চালু করুন! https://Bouct.coronect.de/Bouct', NULL, '2022-06-14 16:09:50', '2022-06-14 16:09:50'),
(117, 'HenryBouct', 'kpmnamboothiri@gmail.com', NULL, '89036578800', 'সবচেয়ে সফল মানুষ ইতিমধ্যে রোবট ব্যবহার. আপনি কি?', 'সেরা অনলাইন বিনিয়োগ টুল পাওয়া যায়. আরও জানুন! https://Bouct.coronect.de/Bouct', NULL, '2022-06-14 18:44:10', '2022-06-14 18:44:10'),
(118, 'HenryBouct', 'eriks@mail-online.dk', NULL, '89037634194', 'অনলাইন কাজ সত্যিই কার্যকর হতে পারে যদি আপনি এই রোবট ব্যবহার.', 'টাকা, টাকা! রোবট দিয়ে টাকা আয়! https://Bouct.coronect.de/Bouct', NULL, '2022-06-14 21:41:30', '2022-06-14 21:41:30'),
(119, 'HenryBouct', 'art.eckhoff@forum.dk', NULL, '89034483578', 'হাজার হাজার টাকা আয় করুন কিছুই দিতে.', 'আর্থিক রোবট পরিচালনা এবং আপনার আয় বৃদ্ধি করার জন্য একটি দুর্দান্ত উপায়. https://Bouct.coronect.de/Bouct', NULL, '2022-06-15 00:19:47', '2022-06-15 00:19:47'),
(120, 'HenryBouct', 'mich66@forum.dk', NULL, '89031455399', 'অনলাইন কাজ আপনি একটি চমত্কার লাভ আনতে পারেন.', 'অতিরিক্ত আয় এই রোবট ব্যবহার করে প্রত্যেকের জন্য উপলব্ধ. https://Bouct.coronect.de/Bouct', NULL, '2022-06-15 02:56:17', '2022-06-15 02:56:17'),
(121, 'HenryBouct', 'bullterrier@forum.dk', NULL, '89034092518', 'মাত্র এক ক্লিক $1000 মধ্যে আপনি ডলার চালু করতে পারেন.', 'মাত্র এক ক্লিক $1000 মধ্যে আপনি ডলার চালু করতে পারেন. https://Bouct.coronect.de/Bouct', NULL, '2022-06-15 05:43:58', '2022-06-15 05:43:58'),
(122, 'HenryBouct', 'lisebj1@mail-online.dk', NULL, '89037302172', '# 1 নেট আর্থিক বিশেষজ্ঞ! নতুন রোবট দেখুন', 'নতুন আর্থিক টুল পরীক্ষা করে দেখুন, যা আপনি সমৃদ্ধ করতে পারেন. https://Bouct.coronect.de/Bouct', NULL, '2022-06-15 08:23:32', '2022-06-15 08:23:32'),
(123, 'HenryBouct', 'runebech@mail-online.dk', NULL, '89030399660', 'এখন আর চাকরি খোঁজার দরকার নেই৷ অনলাইন কাজ.', 'আপনি এই রোবট ব্যবহার করা হলে অর্থ উপার্জন অত্যন্ত সহজ হতে পারে. https://Bouct.coronect.de/Bouct', NULL, '2022-06-15 11:02:42', '2022-06-15 11:02:42'),
(124, 'HenryBouct', 'yvonne@forum.dk', NULL, '89038024322', 'প্রতি সপ্তাহে হাজার হাজার ডলার উপার্জন শুরু করুন', 'আপনি এই রোবট ব্যবহার করা হলে আপনার কম্পিউটার আপনি অতিরিক্ত আয় আনতে পারেন. https://Bouct.coronect.de/Bouct', NULL, '2022-06-15 13:37:33', '2022-06-15 13:37:33'),
(125, 'HenryBouct', 'bogekor@forum.dk', NULL, '89039478905', 'আর্থিক রোবট ধনী মানুষের সেরা সহচর.', 'আপনার মানিব্যাগ পুরু করতে দ্রুততম উপায় পাওয়া যায়. https://Bouct.coronect.de/Bouct', NULL, '2022-06-15 16:14:49', '2022-06-15 16:14:49'),
(126, 'HenryBouct', 'web-bully@forum.dk', NULL, '89039093009', 'এই আর্থিক রোবট ব্যবহার করে ভবিষ্যতে নিজেকে সমৃদ্ধ করুন.', 'আর্থিক রোবট আপনার # 1 অর্থ উপার্জন বিশেষজ্ঞ. https://Bouct.coronect.de/Bouct', NULL, '2022-06-15 18:51:52', '2022-06-15 18:51:52'),
(127, 'HenryBouct', 'marie.anne79@hotmail.fr', NULL, '89033063034', 'সবাই সে এখন চায় যতটা উপার্জন করতে পারেন.', 'আর্থিক স্বাধীনতার জন্য রাশেস যারা প্রত্যেকের জন্য সবচেয়ে ভালো উপায়. https://Bouct.coronect.de/Bouct', NULL, '2022-06-15 21:42:24', '2022-06-15 21:42:24'),
(128, 'HenryBouct', 'judith-kj@forum.dk', NULL, '89037762526', 'আর্থিক রোবট সবাই স্থায়িত্ব এবং আয় গ্যারান্টী বা নিশ্চয়তা দিচ্ছে.', 'রোবট চালু করুন এবং এটি আপনি টাকা আনতে দিন. https://Bouct.coronect.de/Bouct', NULL, '2022-06-16 00:18:16', '2022-06-16 00:18:16'),
(129, 'HenryBouct', 'frederikfoss@forum.dk', NULL, '89033232321', 'এমনকি একটি শিশুর অর্থ উপার্জন করতে জানেন কিভাবে. এই রোবটটি আপনার যা প্রয়োজন!', 'আপনার টাকা কাজ এমনকি যখন আপনি ঘুম. https://Bouct.coronect.de/Bouct', NULL, '2022-06-16 02:58:44', '2022-06-16 02:58:44'),
(130, 'HenryBouct', 'cronoscronos@forum.dk', NULL, '89031592534', 'অর্থ উপার্জনের জন্য সারা রাত জেগে থাকার দরকার নেই. রোবট চালু করুন', 'রোবট আনতে দিন আপনি টাকা যখন আপনি বিশ্রাম. https://Bouct.coronect.de/Bouct', NULL, '2022-06-16 05:44:29', '2022-06-16 05:44:29'),
(131, 'HenryBouct', 'zabel@mailme.dk', NULL, '89035169851', 'টাকা নেই? এটা তাদের অনলাইন উপার্জন করা সহজ এখানে.', 'রোবট এক ক্লিক আপনি হাজার হাজার ডলার আনতে পারেন. https://Bouct.coronect.de/Bouct', NULL, '2022-06-16 08:21:59', '2022-06-16 08:21:59'),
(132, 'HenryBouct', 'geuther@forum.dk', NULL, '89034424847', 'এই প্রোগ্রামের সাথে আপনার ল্যাপটপ একটি আর্থিক উপকরণ করুন.', 'আর্থিক রোবট আপনি টাকা আনয়ন রাখে যখন আপনি ঘুম. https://Bouct.coronect.de/Bouct', NULL, '2022-06-16 11:06:47', '2022-06-16 11:06:47'),
(133, 'HenryBouct', 'subslut@forum.dk', NULL, '89033083503', 'তারা এই রোবট ব্যবহার, কারণ ধনী মানুষ ধনী.', 'আর্থিক রোবট নেট সবচেয়ে কার্যকর আর্থিক হাতিয়ার! https://Bouct.coronect.de/Bouct', NULL, '2022-06-16 13:57:55', '2022-06-16 13:57:55'),
(134, 'HenryBouct', 'firlotamy@mailme.dk', NULL, '89039052127', 'এই আর্থিক রোবট ব্যবহার করে ভবিষ্যতে নিজেকে সমৃদ্ধ করুন.', 'অনলাইনে অর্থ উপার্জন করুন, বাড়িতে এই ঠান্ডা শীতকালে স্থিত. https://Bouct.coronect.de/Bouct', NULL, '2022-06-16 16:48:56', '2022-06-16 16:48:56'),
(135, 'HenryBouct', 'malerfk@forum.dk', NULL, '89036899803', 'আর্থিক স্বাধীনতা কি এই রোবট গ্যারান্টী বা নিশ্চয়তা দিচ্ছে.', 'তারা এই রোবট ব্যবহার, কারণ ধনী মানুষ ধনী. https://Bouct.coronect.de/Bouct', NULL, '2022-06-16 19:41:07', '2022-06-16 19:41:07'),
(136, 'HenryBouct', 'nusen@mailme.dk', NULL, '89033420163', 'অতিরিক্ত অর্থ খুঁজছেন? সেরা আর্থিক উপকরণ চেষ্টা করুন.', 'আর্থিক স্বাধীনতার জন্য রাশেস যারা প্রত্যেকের জন্য সবচেয়ে ভালো উপায়. https://Bouct.bode-roesch.de/Bouct', NULL, '2022-06-16 22:26:24', '2022-06-16 22:26:24'),
(137, 'HenryBouct', 'fljs@forum.dk', NULL, '89034617275', 'এখানে অর্থ উপার্জন যারা সফল মানুষ সমাজে যোগ দিন.', 'অর্থ উপার্জন করুন 24/7 কোন প্রচেষ্টা এবং দক্ষতা ছাড়া. https://Bouct.bode-roesch.de/Bouct', NULL, '2022-06-17 01:04:21', '2022-06-17 01:04:21'),
(138, 'HenryBouct', 'kaiser@mail-online.dk', NULL, '89034022997', 'হাজার হাজার টাকা আয় করুন কিছুই দিতে.', 'নতুন আর্থিক টুল পরীক্ষা করে দেখুন, যা আপনি সমৃদ্ধ করতে পারেন. https://Bouct.bode-roesch.de/Bouct', NULL, '2022-06-17 03:40:27', '2022-06-17 03:40:27'),
(139, 'HenryBouct', 'jakepowell036@mailme.dk', NULL, '89039005636', 'এই প্রোগ্রামের সাথে আপনার ল্যাপটপ একটি আর্থিক উপকরণ করুন.', 'এক ডলার কিছুই নয়, কিন্তু এটি বৃদ্ধি করতে পারেন $100 এখানে. https://Bouct.bode-roesch.de/Bouct', NULL, '2022-06-17 06:12:37', '2022-06-17 06:12:37'),
(140, 'HenryBouct', 'gurix@forum.dk', NULL, '89039541641', 'সেরা অনলাইন বিনিয়োগ টুল পাওয়া যায়. আরও জানুন!', 'হাজার হাজার টাকা আয় করুন কিছুই দিতে. https://Bouct.bode-roesch.de/Bouct', NULL, '2022-06-17 08:51:54', '2022-06-17 08:51:54'),
(141, 'HenryBouct', 'enrj@mailme.dk', NULL, '89036805317', 'শুধুমাত্র একটি ক্লিক সত্যিই দ্রুত আপনার টাকা বড় হয়ে যাবে.', 'আমরা কিভাবে আমাদের ভবিষ্যত সমৃদ্ধ করতে জানি এবং আপনি কি? https://Bouct.bode-roesch.de/Bouct', NULL, '2022-06-17 11:26:13', '2022-06-17 11:26:13'),
(142, 'HenryBouct', 'haker0612@mailme.dk', NULL, '89033380115', 'এই আর্থিক রোবট ব্যবহার করে ভবিষ্যতে নিজেকে সমৃদ্ধ করুন.', 'রোবট উপার্জন করতে চায় প্রত্যেকের জন্য সবচেয়ে ভালো সমাধান. https://Bouct.bode-roesch.de/Bouct', NULL, '2022-06-17 14:00:00', '2022-06-17 14:00:00'),
(143, 'HenryBouct', 'heidi_w@forum.dk', NULL, '89036454681', 'আর্থিক স্বাধীনতার জন্য রাশেস যারা প্রত্যেকের জন্য সবচেয়ে ভালো উপায়.', 'একটি চমত্কার লাভ করতে নতুন উপায় দেখুন. https://Bouct.bode-roesch.de/Bouct', NULL, '2022-06-17 16:42:36', '2022-06-17 16:42:36'),
(144, 'HenryBouct', 'inora@mail-online.dk', NULL, '89033108824', 'ওয়াও! এটি একটি আর্থিক স্বাধীনতা জন্য একটি দ্রুততম উপায়.', 'ইন্টারনেটে সেরা আর্থিক রোবট চেষ্টা করে দেখুন. https://Bouct.fannyberlin.se/Bouct', NULL, '2022-06-17 19:16:22', '2022-06-17 19:16:22'),
(145, 'HenryBouct', 'spitfire@forum.dk', NULL, '89037855139', 'আপনি রোবট দিয়ে বিনিয়োগ করার সময় আপনার অর্থ বৃদ্ধি দেখুন.', 'আয়ের জন্য উন্মুখ? এটি অনলাইন পান. https://Bouct.fannyberlin.se/Bouct', NULL, '2022-06-17 21:52:24', '2022-06-17 21:52:24'),
(146, 'HenryBouct', 'd-a-m-r@forum.dk', NULL, '89038674616', 'প্রচেষ্টা এবং দক্ষতা ছাড়া অতিরিক্ত অর্থ উপার্জন.', 'অতিরিক্ত আয় এখন সারা বিশ্বের যে কেউ জন্য উপলব্ধ. https://Bouct.fannyberlin.se/Bouct', NULL, '2022-06-18 00:22:37', '2022-06-18 00:22:37'),
(147, 'HenryBouct', 'bumle1952@forum.dk', NULL, '89039429942', 'সেরা অনলাইন বিনিয়োগ টুল পাওয়া যায়. আরও জানুন!', 'তারা এই রোবট ব্যবহার, কারণ ধনী মানুষ ধনী. https://Bouct.fannyberlin.se/Bouct', NULL, '2022-06-18 02:56:12', '2022-06-18 02:56:12'),
(148, 'HenryBouct', 'so.so.so@forum.dk', NULL, '89033595375', 'স্বয়ংক্রিয় বট পরীক্ষা করে দেখুন, যা আপনার জন্য কাজ করে 24/7.', 'অনলাইন কাজ আপনি একটি চমত্কার লাভ আনতে পারেন. https://Bouct.fannyberlin.se/Bouct', NULL, '2022-06-18 07:46:03', '2022-06-18 07:46:03'),
(149, 'Abdullah al mamun', 'typon.009@gmail.com', NULL, '01762206801', 'Admission', 'Dear sir,\r\nI want to attain the survey course from lakshmipur in your institution.Can you please provide me the information about that or any contact number.', NULL, '2022-06-18 09:11:41', '2022-06-18 09:11:41'),
(150, 'HenryBouct', 'chriskop@forum.dk', NULL, '89033507628', 'অতিরিক্ত আয় এখন সারা বিশ্বের যে কেউ জন্য উপলব্ধ.', 'অর্থ উপার্জনের জন্য সারা রাত জেগে থাকার দরকার নেই. রোবট চালু করুন https://Bouct.fannyberlin.se/Bouct', NULL, '2022-06-18 10:15:27', '2022-06-18 10:15:27'),
(151, 'HenryBouct', 'louizeolzen@forum.dk', NULL, '89031005074', 'আর্থিক দক্ষতা নেই? রোবট আপনার জন্য অর্থ উপার্জন করতে দিন.', 'ওয়াও! এই রোবট একটি অনলাইন কর্মজীবনের জন্য একটি দুর্দান্ত শুরু. https://Bouct.fannyberlin.se/Bouct', NULL, '2022-06-18 15:11:56', '2022-06-18 15:11:56'),
(152, 'HenryBouct', 'spug@forum.dk', NULL, '89039762623', 'রোবট আপনার ডলার বিশ্বাস এবং এটি বৃদ্ধি কিভাবে দেখতে $100.', 'তারা এই রোবট ব্যবহার, কারণ ধনী মানুষ ধনী. https://Bouct.fannyberlin.se/Bouct', NULL, '2022-06-18 17:37:55', '2022-06-18 17:37:55'),
(153, 'HenryBouct', 'vardedreng@forum.dk', NULL, '89039970052', 'আমরা আপনার আর্থিক স্থিতিশীলতা বৃদ্ধি কিভাবে জানি.', 'আর্থিক রোবট আপনার সাফল্য সূত্র পাওয়া যায় না. এটি সম্পর্কে আরও জানুন. https://Bouct.fannyberlin.se/Bouct', NULL, '2022-06-18 20:14:42', '2022-06-18 20:14:42'),
(154, 'HenryBouct', 'kamprad@forum.dk', NULL, '89030906933', 'অনলাইন আর্থিক রোবট সাফল্যের আপনার চাবিকাঠি.', 'একটি আর্থিক স্বাধীনতা জন্য দ্রুততম উপায় সম্পর্কে জানতে. https://Bouct.fannyberlin.se/Bouct', NULL, '2022-06-18 22:44:56', '2022-06-18 22:44:56'),
(155, 'HenryBouct', 'mack_four@forum.dk', NULL, '89039461385', 'ইন্টারনেটে সেরা আর্থিক রোবট চেষ্টা করে দেখুন.', 'ওয়াও! এটি একটি আর্থিক স্বাধীনতা জন্য একটি দ্রুততম উপায়. https://Bouct.fannyberlin.se/Bouct', NULL, '2022-06-19 01:19:47', '2022-06-19 01:19:47'),
(156, 'HenryBouct', 'borst.g@forum.dk', NULL, '89036981464', 'রোবট এক ক্লিক আপনি হাজার হাজার ডলার আনতে পারেন.', 'এমনকি একটি শিশু এই রোবট সাহায্যে আজ $100 করতে জানেন কিভাবে. https://Bouct.fannyberlin.se/Bouct', NULL, '2022-06-19 03:42:00', '2022-06-19 03:42:00'),
(157, 'HenryBouct', 'klr@forum.dk', NULL, '89038509862', 'বিনিয়োগ ছাড়া বিশাল আয় পাওয়া যায়, এখন!', 'টাকা দরকার? সহজেই এখানে পাবেন? https://Bouct.fannyberlin.se/Bouct', NULL, '2022-06-19 06:13:38', '2022-06-19 06:13:38'),
(158, 'HenryBouct', 'astruphansen@mail-online.dk', NULL, '89039474974', 'স্বাধীনতা সবারই যা প্রয়োজন', 'শুধুমাত্র একটি ক্লিক সত্যিই দ্রুত আপনার টাকা বড় হয়ে যাবে. https://Bouct.fannyberlin.se/Bouct', NULL, '2022-06-19 08:40:00', '2022-06-19 08:40:00'),
(159, 'HenryBouct', 'chicoptera@mail-online.dk', NULL, '89031600488', 'তারা এই রোবট ব্যবহার, কারণ ধনী মানুষ ধনী.', 'রোবট আপনার ডলার বিশ্বাস এবং এটি বৃদ্ধি কিভাবে দেখতে $100. https://Bouct.fannyberlin.se/Bouct', NULL, '2022-06-19 11:12:22', '2022-06-19 11:12:22'),
(160, 'HenryBouct', 'marthababis@forum.dk', NULL, '89036398012', 'এই আর্থিক রোবট ব্যবহার করে ভবিষ্যতে নিজেকে সমৃদ্ধ করুন.', 'টাকা নেই? এটা তাদের অনলাইন উপার্জন করা সহজ এখানে. https://Bouct.fannyberlin.se/Bouct', NULL, '2022-06-19 13:46:36', '2022-06-19 13:46:36'),
(161, 'HenryBouct', 'saiddd87@mailme.dk', NULL, '89032197869', 'এখন আর্থিক বট আরম্ভ আদায় শুরু করার জন্য.', 'রোবট আর্থিক স্বাধীনতা জন্য দেখায় যারা প্রত্যেকের জন্য সবচেয়ে ভাল উপায়. https://Bouct.fannyberlin.se/Bouct', NULL, '2022-06-19 16:20:38', '2022-06-19 16:20:38'),
(162, 'HenryBouct', 'jesp05@forum.dk', NULL, '89030575729', 'শুধু বাড়িতে বসে ডলার করুন.', 'রোবট কখনই ঘুমায় না এটা আপনার জন্য টাকা তোলে 24/7. https://Bouct.fannyberlin.se/Bouct', NULL, '2022-06-19 17:33:40', '2022-06-19 17:33:40'),
(163, 'HenryBouct', 'mejonna@forum.dk', NULL, '89035177118', 'টাকা দরকার? আপনার বাড়িতে গিয়েই এটি উপার্জন.', 'আর্থিক রোবট আপনার জন্য কাজ করে, এমনকি যখন আপনি ঘুম. https://Bouct.fannyberlin.se/Bouct', NULL, '2022-06-19 20:05:32', '2022-06-19 20:05:32'),
(164, 'HenryBouct', 'hts@forum.dk', NULL, '89031980892', 'আর্থিক রোবট আপনার # 1 অর্থ উপার্জন বিশেষজ্ঞ.', 'এখানে অর্থ উপার্জন যারা সফল মানুষ সমাজে যোগ দিন. https://Bouct.fannyberlin.se/Bouct', NULL, '2022-06-19 22:32:36', '2022-06-19 22:32:36'),
(165, 'HenryBouct', 'inn-fomenk@mailme.dk', NULL, '89036044851', 'এই রোবট আপনি টাকা আনতে পারেন 24/7.', 'আপনার টাকা হত্তয়া রাখা 24/7 আপনি আর্থিক রোবট ব্যবহার করা হলে. https://Bouct.fannyberlin.se/Bouct', NULL, '2022-06-20 01:00:11', '2022-06-20 01:00:11'),
(166, 'HenryBouct', 'eurobusiness@forum.dk', NULL, '89031810927', 'টাকা, টাকা! রোবট দিয়ে টাকা আয়!', 'টাকা নেই? এটা তাদের অনলাইন উপার্জন করা সহজ এখানে. https://Bouct.fannyberlin.se/Bouct', NULL, '2022-06-20 03:30:17', '2022-06-20 03:30:17'),
(167, 'HenryBouct', 'gunayyildiz1984@forum.dk', NULL, '89038870054', 'একটি আর্থিক স্বাধীনতা জন্য দ্রুততম উপায় সম্পর্কে জানতে.', 'আয়ের জন্য উন্মুখ? এটি অনলাইন পান. https://Bouct.baleti-design.fr/Bouct', NULL, '2022-06-20 06:40:12', '2022-06-20 06:40:12'),
(168, 'HenryBouct', 'malene123@forum.dk', NULL, '89037781450', 'আজ অর্থ উপার্জন শুরু করার জন্য সেরা বিনিয়োগ যন্ত্র চালু করুন.', 'প্রতিদিন শত শত ব্যাক করতে শিখুন https://Bouct.borisvonsmercek.de/Bouct', NULL, '2022-06-20 09:19:15', '2022-06-20 09:19:15'),
(169, 'HenryBouct', 'emrah-1987@forum.dk', NULL, '89038534308', 'আপনাকে বরখাস্ত করা হলে কোনও উদ্বেগ নেই অনলাইন কাজ.', 'শুধুমাত্র একটি ক্লিক সত্যিই দ্রুত আপনার টাকা বড় হয়ে যাবে. https://borisvonsmercek.de/Bouct', NULL, '2022-06-20 11:51:16', '2022-06-20 11:51:16'),
(170, 'HenryBouct', 'firyuza_gilfanova@yandex.ru', NULL, '89030905533', 'আমরা আপনার আর্থিক স্থিতিশীলতা বৃদ্ধি কিভাবে জানি.', 'আর্থিক রোবট আর্থিক বাজারে আপনার সঙ্গী হতে দিন. https://Bouct.borisvonsmercek.de/Bouct', NULL, '2022-06-20 14:24:32', '2022-06-20 14:24:32'),
(171, 'HenryBouct', 'fc.transport@forum.dk', NULL, '89037634319', 'আর্থিক রোবট আপনার ভবিষ্যত সম্পদ এবং স্বাধীনতা.', 'অনলাইনে অর্থ উপার্জন করুন, বাড়িতে এই ঠান্ডা শীতকালে স্থিত. https://baleti-design.fr/Bouct', NULL, '2022-06-20 16:57:26', '2022-06-20 16:57:26'),
(172, 'HenryBouct', 'kimsorensenzl3f@forum.dk', NULL, '89035702622', 'রোবট আর্থিক স্বাধীনতা জন্য দেখায় যারা প্রত্যেকের জন্য সবচেয়ে ভাল উপায়.', 'হাজার হাজার টাকা নিশ্চিত করা হয় যদি আপনি এই রোবট ব্যবহার. https://baleti-design.fr/Bouct', NULL, '2022-06-20 19:31:32', '2022-06-20 19:31:32'),
(173, 'HenryBouct', 'starocean@forum.dk', NULL, '89034391045', 'এই রোবট আপনি প্রতিটি দিন শত শত ডলার করতে সাহায্য করবে.', 'আপনার টাকা কাজ এমনকি যখন আপনি ঘুম. https://Bouct.amalgamas.es/Bouct', NULL, '2022-06-20 22:01:57', '2022-06-20 22:01:57'),
(174, 'HenryBouct', 'gartners@frontiernet.net', NULL, '89035298634', 'আর কাজ করার দরকার নেই. শুধু রোবট চালু.', 'হাজার হাজার টাকা আয় করুন আর্থিক রোবট আপনাকে এটি করতে সহায়তা করবে! https://baleti-design.fr/Bouct', NULL, '2022-06-21 00:32:26', '2022-06-21 00:32:26'),
(175, 'HenryBouct', 'inclusion@mailme.dk', NULL, '89030222083', 'আপনাকে বরখাস্ত করা হলে কোনও উদ্বেগ নেই অনলাইন কাজ.', 'আর্থিক রোবট ব্যবহার করে আপনার অনলাইন কাজ শুরু করুন. https://Bouct.fannyberlin.se/Bouct', NULL, '2022-06-21 03:03:41', '2022-06-21 03:03:41'),
(176, 'HenryBouct', 'ries@jubiipost.dk', NULL, '89037397196', 'আর্থিক রোবট ব্যবহার করে আপনার অনলাইন কাজ শুরু করুন.', 'আপনি রোবট চালু করার সময় আর কাজ করার দরকার নেই! https://Bouct.fannyberlin.se/Bouct', NULL, '2022-06-21 05:38:54', '2022-06-21 05:38:54'),
(177, 'HenryBouct', 'meetyourmessenger@forum.dk', NULL, '89031984144', 'এমনকি একটি শিশু এই রোবট সাহায্যে আজ $100 করতে জানেন কিভাবে.', 'আর্থিক রোবট কখনও # 1 বিনিয়োগ হাতিয়ার. এটি চালু করুন! https://baleti-design.fr/Bouct', NULL, '2022-06-21 08:11:05', '2022-06-21 08:11:05'),
(178, 'HenryBouct', 'nicille@mailme.dk', NULL, '89031271952', 'বয়স টাকা দিয়ে আপনার পরিবার প্রদান. রোবট চালু করুন!', 'বিনিয়োগ ছাড়া বিশাল আয় পাওয়া যায়, এখন! https://baleti-design.fr/Bouct', NULL, '2022-06-21 10:45:04', '2022-06-21 10:45:04'),
(179, 'HenryBouct', 'buffeli-cox@forum.dk', NULL, '89036292865', 'নেটে অর্থ উপার্জন এখন সহজ.', 'এখন আর চাকরি খোঁজার দরকার নেই৷ অনলাইন কাজ. https://Bouct.compras2u.es/Bouct', NULL, '2022-06-21 13:14:51', '2022-06-21 13:14:51'),
(180, 'HenryBouct', 'finrabota59@mailme.dk', NULL, '89033423097', 'আর্থিক রোবট পরিচালনা এবং আপনার আয় বৃদ্ধি করার জন্য একটি দুর্দান্ত উপায়.', 'মনোযোগ! এখানে আপনি অনলাইনে অর্থ উপার্জন করতে পারেন! https://Bouct.compras2u.es/Bouct', NULL, '2022-06-21 15:45:42', '2022-06-21 15:45:42'),
(181, 'HenryBouct', 'menshikoff_68@mailme.dk', NULL, '89038281513', 'প্রচেষ্টা এবং দক্ষতা ছাড়া অতিরিক্ত অর্থ উপার্জন.', 'অর্থ উপার্জনের সবচেয়ে সহজ উপায় সম্পর্কে সন্ধান করুন. https://Bouct.borisvonsmercek.de/Bouct', NULL, '2022-06-21 18:18:09', '2022-06-21 18:18:09'),
(182, 'HenryBouct', 'ninn@jubiipost.dk', NULL, '89031765606', 'আর্থিক রোবট ব্যবহার করে আপনার অনলাইন কাজ শুরু করুন.', 'মনোযোগ! আর্থিক রোবট আপনি লক্ষ লক্ষ আনতে পারে! https://Bouct.fannyberlin.se/Bouct', NULL, '2022-06-21 20:49:43', '2022-06-21 20:49:43'),
(183, 'HenryBouct', 'derrickscott@coremail.ru', NULL, '89037651980', 'রোবট উপার্জন করতে চায় প্রত্যেকের জন্য সবচেয়ে ভালো সমাধান.', 'টাকা দরকার? আপনার বাড়িতে গিয়েই এটি উপার্জন. http://go.afalobo.com/0ide', NULL, '2022-06-21 23:23:51', '2022-06-21 23:23:51'),
(184, 'HenryBouct', 'zguricigor@gmail.com', NULL, '89037886398', 'আমরা ধনী হতে দ্রুততম উপায় খুঁজে পেয়েছি. এটা খুঁজে বের কর এখানে.', 'আয়ের জন্য উন্মুখ? এটি অনলাইন পান. http://go.afalobo.com/0ide', NULL, '2022-06-22 01:53:59', '2022-06-22 01:53:59'),
(185, 'HenryBouct', 'keenanmcmanus0@gmail.com', NULL, '89036420654', 'সবচেয়ে সফল মানুষ ইতিমধ্যে রোবট ব্যবহার. আপনি কি?', 'এই প্রোগ্রামের সাথে আপনার ল্যাপটপ একটি আর্থিক উপকরণ করুন. http://go.afalobo.com/0ide', NULL, '2022-06-22 04:27:21', '2022-06-22 04:27:21'),
(186, 'HenryBouct', 'saldoronilo@gmail.com', NULL, '89031645978', 'কিভাবে রোবট তোলে দেখুন $1000 থেকে $1 বিনিয়োগ.', 'অনলাইন আয় আর্থিক স্বাধীনতার জন্য সবচেয়ে সহজ পদ্ধিতি হল উপায়. http://go.afalobo.com/0ide', NULL, '2022-06-22 07:00:30', '2022-06-22 07:00:30'),
(187, 'HenryBouct', 'jackcremin333@gmail.com', NULL, '89037906369', 'এমনকি একটি শিশু কিভাবে করতে জানে $ 100 আজ.', 'ওয়াও! এটি একটি আর্থিক স্বাধীনতা জন্য একটি দ্রুততম উপায়. http://go.afalobo.com/0ide', NULL, '2022-06-22 09:36:52', '2022-06-22 09:36:52'),
(188, 'HenryBouct', 'buiannguyen80551@gmail.com', NULL, '89034031649', 'অবসরপ্রাপ্তদের জন্য সেরা অনলাইন কাজ আপনার পুরানো বয়সের সমৃদ্ধ করুন.', 'আপনার কম্পিউটার আপনি উপকরণ আদায় করা করুন. http://go.afalobo.com/0ide', NULL, '2022-06-22 14:49:57', '2022-06-22 14:49:57'),
(189, 'HenryBouct', 'xingmangham@gmail.com', NULL, '89034662049', 'অনলাইন আয় সাফল্যের আপনার চাবিকাঠি.', 'আর কাজ করার দরকার নেই. শুধু রোবট চালু. http://go.cufasez.com/0ie5', NULL, '2022-06-22 17:28:25', '2022-06-22 17:28:25'),
(190, 'HenryBouct', 'kobachavez@zoznam.sk', NULL, '89034795874', 'এমনকি একটি শিশুর অর্থ উপার্জন করতে জানেন কিভাবে. আপনি কি?', 'অর্থ উপার্জনের সহজ উপায় খুঁজছেন? আর্থিক রোবট দেখুন http://go.cufasez.com/0ie5', NULL, '2022-06-22 19:57:52', '2022-06-22 19:57:52'),
(191, 'HenryBouct', 'andrasetiawanwall@gmail.com', NULL, '89036017717', 'আপনি রোবট দিয়ে বিনিয়োগ করার সময় আপনার অর্থ বৃদ্ধি দেখুন.', 'অনলাইন বট আপনি সম্পদ ও সন্তুষ্টি আনতে হবে. https://Blops.nanolabs.es/Blops', NULL, '2022-06-22 22:29:18', '2022-06-22 22:29:18'),
(192, 'HenryBouct', 'adelaideashlynn68451@gmail.com', NULL, '89036081642', 'আমরা ধনী হতে দ্রুততম উপায় খুঁজে পেয়েছি. এটা খুঁজে বের কর এখানে.', 'টাকা নেই? এটা তাদের অনলাইন উপার্জন করা সহজ এখানে. https://Blops.nanolabs.es/Blops', NULL, '2022-06-23 01:23:30', '2022-06-23 01:23:30'),
(193, 'HenryBouct', 'noon_04997@hotmail.com', NULL, '89033994886', 'ডলার বাড়ীতে স্থিত করুন এবং এই বট চালু.', 'ইন্টারনেটে সেরা আর্থিক রোবট চেষ্টা করে দেখুন. https://Blops.nanolabs.es/Blops', NULL, '2022-06-23 03:52:32', '2022-06-23 03:52:32'),
(194, 'HenryBouct', 'tranngoccam3963@gmail.com', NULL, '89039003800', 'আর্থিক দক্ষতা নেই? রোবট আপনার জন্য অর্থ উপার্জন করতে দিন.', 'স্বাধীনতা সবারই যা প্রয়োজন https://Blops.nanolabs.es/Blops', NULL, '2022-06-23 06:22:59', '2022-06-23 06:22:59'),
(195, 'HenryBouct', 'pauldaniel631@gmail.com', NULL, '89036766321', 'রোবট আর্থিক স্বাধীনতা জন্য দেখায় যারা প্রত্যেকের জন্য সবচেয়ে ভাল উপায়.', 'আরো কিছু টাকা প্রয়োজন? রোবট সত্যিই দ্রুত তাদের উপার্জন করতে হবে. https://Blops.nanolabs.es/Blops', NULL, '2022-06-23 08:56:48', '2022-06-23 08:56:48'),
(196, 'HenryBouct', 'jnita2001@gmail.com', NULL, '89030596606', 'এই প্রোগ্রামের সাথে আপনার ল্যাপটপ একটি আর্থিক উপকরণ করুন.', 'আর্থিক রোবট চালু করুন এবং আপনার ব্যবসা করতে. https://Blops.nanolabs.es/Blops', NULL, '2022-06-23 11:29:23', '2022-06-23 11:29:23'),
(197, 'HenryBouct', 'huuquynh8@gmail.com', NULL, '89037534596', 'আর্থিক রোবট আপনার # 1 অর্থ উপার্জন বিশেষজ্ঞ.', 'এই রোবট ব্যবহার করে আপনি সমৃদ্ধ করতে সবচেয়ে ভাল উপায়. https://Blops.nanolabs.es/Blops', NULL, '2022-06-23 14:03:31', '2022-06-23 14:03:31'),
(198, 'HenryBouct', 'jaxinanakipl@gmail.com', NULL, '89036907994', 'হাজার হাজার টাকা নিশ্চিত করা হয় যদি আপনি এই রোবট ব্যবহার.', 'আপনি রোবট চালু করার সময় আর কাজ করার দরকার নেই! https://Blops.nanolabs.es/Blops', NULL, '2022-06-23 16:42:02', '2022-06-23 16:42:02'),
(199, 'HenryBouct', 'lampkin433466755@gmail.com', NULL, '89039263182', 'রোবট কখনই ঘুমায় না এটা আপনার জন্য টাকা তোলে 24/7.', 'আর্থিক রোবট ব্যবহার করে আপনার অনলাইন কাজ শুরু করুন. https://Blops.nanolabs.es/Blops', NULL, '2022-06-23 19:15:45', '2022-06-23 19:15:45'),
(200, 'HenryBouct', 'nhambichphuong37627@gmail.com', NULL, '89032813727', 'আপনি অনলাইনে অর্থ উপার্জন করতে চান সবকিছু কিনুন.', 'শুধুমাত্র একটি ক্লিক সত্যিই দ্রুত আপনার টাকা বড় হয়ে যাবে. https://Blops.nanolabs.es/Blops', NULL, '2022-06-23 21:44:30', '2022-06-23 21:44:30'),
(201, 'HenryBouct', 'coinpochta@gmail.com', NULL, '89035471123', 'এখনও কোটিপতি নয়? এখনই ঠিক করুন!', 'আর্থিক রোবট আপনার সাফল্য সূত্র পাওয়া যায় না. এটি সম্পর্কে আরও জানুন. https://Blops.nanolabs.es/Blops', NULL, '2022-06-24 00:37:20', '2022-06-24 00:37:20'),
(202, 'HenryBouct', 'kalyuliya7@gmail.com', NULL, '89037020324', 'বয়স টাকা দিয়ে আপনার পরিবার প্রদান. রোবট চালু করুন!', 'শুধুমাত্র একটি ক্লিক সত্যিই দ্রুত আপনার টাকা বড় হয়ে যাবে. https://Blops.nanolabs.es/Blops', NULL, '2022-06-24 03:09:10', '2022-06-24 03:09:10'),
(203, 'Md Sharif hossen', 'sharifhossen.civil@gmail.com', NULL, '01751223357', 'Survey', 'Plz cheeked your massage', NULL, '2022-06-24 15:31:18', '2022-06-24 15:31:18'),
(204, 'HenryBouct', 'pradiprathod2580@gmail.com', NULL, '89034599111', 'আর্থিক রোবট সবাই স্থায়িত্ব এবং আয় গ্যারান্টী বা নিশ্চয়তা দিচ্ছে.', 'অর্থ উপার্জনের জন্য সারা রাত জেগে থাকার দরকার নেই. রোবট চালু করুন https://Blops.nanolabs.es/Blops', NULL, '2022-06-24 19:07:21', '2022-06-24 19:07:21'),
(205, 'HenryBouct', 'mnknknk012801289572637@gmail.com', NULL, '89036116894', 'রোবট আনতে দিন আপনি টাকা যখন আপনি বিশ্রাম.', 'এই রোবট আপনি প্রতিটি দিন শত শত ডলার করতে সাহায্য করবে. https://Blops.nanolabs.es/Blops', NULL, '2022-06-24 21:40:06', '2022-06-24 21:40:06');
INSERT INTO `contacts` (`id`, `name`, `email`, `email_verified_at`, `phone`, `subject`, `message`, `remember_token`, `created_at`, `updated_at`) VALUES
(206, 'HenryBouct', 'zolotoy926@coremail.ru', NULL, '89037537574', 'সবাই সে এখন চায় যতটা উপার্জন করতে পারেন.', 'সবাই সে এখন চায় যতটা উপার্জন করতে পারেন. https://Blops.nanolabs.es/Blops', NULL, '2022-06-25 00:08:39', '2022-06-25 00:08:39'),
(207, 'HenryBouct', 'ntrn500@ymail.com', NULL, '89030735752', 'আর্থিক রোবট আপনার ভবিষ্যত সম্পদ এবং স্বাধীনতা.', 'টাকা দরকার? সহজেই এখানে পান! শুধু রোবট আরম্ভ করার জন্য এই টিপুন. https://Blops.nanolabs.es/Blops', NULL, '2022-06-25 02:40:53', '2022-06-25 02:40:53'),
(208, 'HenryBouct', 'alsadrogue@gmail.com', NULL, '89032618590', 'বিনিয়োগ ছাড়া বিশাল আয় পাওয়া যায়, এখন!', 'প্রতি সপ্তাহে হাজার হাজার ডলার উপার্জন শুরু করুন https://Blops.nanolabs.es/Blops', NULL, '2022-06-25 05:09:31', '2022-06-25 05:09:31'),
(209, 'HenryBouct', 'kiemtienso12018@gmail.com', NULL, '89037453520', 'অনলাইন আয় আর্থিক স্বাধীনতার জন্য সবচেয়ে সহজ পদ্ধিতি হল উপায়.', 'টাকা দরকার? সহজেই এখানে পান! শুধু রোবট আরম্ভ করার জন্য এই টিপুন. https://Blops.nanolabs.es/Blops', NULL, '2022-06-25 07:44:52', '2022-06-25 07:44:52'),
(210, 'HenryBouct', 'aw6070809@gmail.com', NULL, '89038594293', 'আপনি এই রোবট ব্যবহার করা হলে আপনার কম্পিউটার আপনি অতিরিক্ত আয় আনতে পারেন.', 'আর্থিক রোবট চালু করুন এবং আপনার ব্যবসা করতে. https://Blops.nanolabs.es/Blops', NULL, '2022-06-25 10:12:03', '2022-06-25 10:12:03'),
(211, 'HenryBouct', 'greeknproud@gmail.com', NULL, '89032215374', 'এটা আরো টাকা পেতে রোবট আরম্ভ শ্রেষ্ঠ সময়.', 'স্বয়ংক্রিয় বট পরীক্ষা করে দেখুন, যা আপনার জন্য কাজ করে 24/7. https://Blops.nanolabs.es/Blops', NULL, '2022-06-25 12:45:43', '2022-06-25 12:45:43'),
(212, 'HenryBouct', 'amberdimartino@coremail.ru', NULL, '89039726346', 'আর্থিক রোবট কখনও # 1 বিনিয়োগ হাতিয়ার. এটি চালু করুন!', 'রোবট এক ক্লিক আপনি হাজার হাজার ডলার আনতে পারেন. https://Blops.nanolabs.es/Blops', NULL, '2022-06-25 15:10:33', '2022-06-25 15:10:33'),
(213, 'CrytoBouctBouct', 'MerinoBart@o2.pl', NULL, '89035354754', 'Feel free to buy everything you want with the additional income.', 'বিনিয়োগ ছাড়া বিশাল আয় পাওয়া যায়, এখন! https://weify.startupers.se/promo', NULL, '2022-06-25 23:23:22', '2022-06-25 23:23:22'),
(214, 'CrytoBouctBouct', 'kdtartre@gmail.com', NULL, '89030652357', 'Even a child knows how to make $100 today with the help of this robot.', 'এই বট ব্যবহার করে ইন্টারনেট অর্থ উপার্জন করুন. এটা সত্যিই কাজ করে! https://weify.startupers.se/gotodate/go', NULL, '2022-06-27 23:47:45', '2022-06-27 23:47:45'),
(215, 'CrytoBouctBouct', 'robertstewartgrant@gmail.com', NULL, '89032973060', 'We know how to become rich and do you?', 'কিভাবে রোবট তোলে দেখুন $1000 থেকে $1 বিনিয়োগ. https://weify.startupers.se/gotodate/go', NULL, '2022-06-27 23:51:51', '2022-06-27 23:51:51'),
(216, 'CrytoBouctBouct', 'harpman77@aol.com', NULL, '89035476969', 'Let the financial Robot be your companion in the financial market.', 'অতিরিক্ত অর্থ খুঁজছেন? সেরা আর্থিক উপকরণ চেষ্টা করুন. https://weify.startupers.se/gotodate/go', NULL, '2022-06-28 02:59:06', '2022-06-28 02:59:06'),
(217, 'CrytoBouctBouct', 'lamjota@gmail.com', NULL, '89039590744', 'Automatic robot is the best start for financial independence.', 'অর্থ উপার্জনের সবচেয়ে সহজ উপায় সম্পর্কে সন্ধান করুন. https://weify.startupers.se/gotodate/go', NULL, '2022-06-28 03:03:42', '2022-06-28 03:03:42'),
(218, 'CrytoBouctBouct', 'molly8limek@yahoo.com', NULL, '89032169724', 'Make your laptop a financial instrument with this program.', 'রোবট আর্থিক স্বাধীনতা জন্য দেখায় যারা প্রত্যেকের জন্য সবচেয়ে ভাল উপায়. https://weify.startupers.se/gotodate/go', NULL, '2022-06-28 06:10:55', '2022-06-28 06:10:55'),
(219, 'CrytoBouctBouct', 'norastarling@yahoo.com', NULL, '89031665218', 'No need to stay awake all night long to earn money. Launch the robot.', 'রোবট এক ক্লিক আপনি হাজার হাজার ডলার আনতে পারেন. https://weify.startupers.se/gotodate/go', NULL, '2022-06-28 06:14:57', '2022-06-28 06:14:57'),
(220, 'CrytoBouctBouct', 'madelin-se91@hotmail.com', NULL, '89035241278', 'Making money in the net is easier now.', 'আর্থিক রোবট কখনও # 1 বিনিয়োগ হাতিয়ার. এটি চালু করুন! https://weify.startupers.se/gotodate/go', NULL, '2022-06-28 09:44:06', '2022-06-28 09:44:06'),
(221, 'CrytoBouctBouct', 'nepuff@yahoo.com', NULL, '89039842391', 'Automatic robot is the best start for financial independence.', 'আরো কিছু টাকা প্রয়োজন? রোবট সত্যিই দ্রুত তাদের উপার্জন করতে হবে. https://weify.startupers.se/gotodate/go', NULL, '2022-06-28 09:48:10', '2022-06-28 09:48:10'),
(222, 'CrytoBouctBouct', 'murat_pdr67@hotmail.com', NULL, '89039119746', 'Looking forward for income? Get it online.', 'এমনকি একটি শিশু কিভাবে করতে জানে $ 100 আজ. https://weify.startupers.se/gotodate/go', NULL, '2022-06-28 12:56:33', '2022-06-28 12:56:33'),
(223, 'CrytoBouctBouct', 'rossie70@hotmail.com', NULL, '89030628608', 'Let the Robot bring you money while you rest.', 'অনলাইন বট আপনি সম্পদ ও সন্তুষ্টি আনতে হবে. https://weify.startupers.se/gotodate/go', NULL, '2022-06-28 13:00:12', '2022-06-28 13:00:12'),
(224, 'CrytoBouctBouct', 'ruanou0205@sohu.com', NULL, '89034204409', 'Make thousands of bucks. Pay nothing.', 'ওয়াও! এই রোবট একটি অনলাইন কর্মজীবনের জন্য একটি দুর্দান্ত শুরু. https://weify.startupers.se/gotodate/go', NULL, '2022-06-28 16:11:43', '2022-06-28 16:11:43'),
(225, 'CrytoBouctBouct', 'acwall985v2@gmail.com', NULL, '89039427567', 'No need to work anymore while you have the Robot launched!', 'অর্থ উপার্জন করুন, যুদ্ধ নয়! আর্থিক রোবট আপনি কি প্রয়োজন. https://weify.startupers.se/gotodate/go', NULL, '2022-06-28 16:15:47', '2022-06-28 16:15:47'),
(226, 'CrytoBouctBouct', 'cesarthebeast7@yahoo.com', NULL, '89033439847', 'Making money can be extremely easy if you use this Robot.', 'আপনার টাকা সারা দিন আপনার জন্য কাজ করুন. https://weify.startupers.se/gotodate/go', NULL, '2022-06-28 19:18:53', '2022-06-28 19:18:53'),
(227, 'CrytoBouctBouct', 'salazardeerika@aol.com', NULL, '89037915559', 'No need to stay awake all night long to earn money. Launch the robot.', 'এখানে অর্থ উপার্জন যারা সফল মানুষ সমাজে যোগ দিন. https://weify.startupers.se/gotodate/go', NULL, '2022-06-28 19:23:19', '2022-06-28 19:23:19'),
(228, 'CrytoBouctBouct', 'eg7032@gmail.com', NULL, '89037071080', 'Have no money? It’s easy to earn them online here.', 'আমরা আপনার আর্থিক স্থিতিশীলতা বৃদ্ধি কিভাবে জানি. https://weify.startupers.se/gotodate/go', NULL, '2022-06-28 23:07:38', '2022-06-28 23:07:38'),
(229, 'CrytoBouctBouct', 'hot_safire116@hotmail.com', NULL, '89039016421', 'Make thousands every week working online here.', 'আর্থিক রোবট আপনি টাকা আনয়ন রাখে যখন আপনি ঘুম. https://weify.startupers.se/gotodate/go', NULL, '2022-06-28 23:11:38', '2022-06-28 23:11:38'),
(230, 'CrytoBouctBouct', 'ballman22@hotmail.com', NULL, '89034849162', 'Start your online work using the financial Robot.', 'রোবট চালু করুন এবং এটি আপনি টাকা আনতে দিন. https://weify.startupers.se/gotodate/go', NULL, '2022-06-29 02:17:38', '2022-06-29 02:17:38'),
(231, 'CrytoBouctBouct', 'parnell_natalie@yahoo.com', NULL, '89036175181', 'Start your online work using the financial Robot.', 'আর্থিক স্বাধীনতা কি এই রোবট গ্যারান্টী বা নিশ্চয়তা দিচ্ছে. https://weify.startupers.se/gotodate/go', NULL, '2022-06-29 02:21:23', '2022-06-29 02:21:23'),
(232, 'CrytoBouctBouct', 'kasakkristjan@hotmail.com', NULL, '89038436652', 'The online financial Robot is your key to success.', 'আপনি এই রোবট ব্যবহার করা হলে অর্থ উপার্জন অত্যন্ত সহজ হতে পারে. https://weify.startupers.se/gotodate/go', NULL, '2022-06-29 05:27:48', '2022-06-29 05:27:48'),
(233, 'CrytoBouctBouct', 'ktrinidad80@yahoo.com', NULL, '89038320302', 'Earning $1000 a day is easy if you use this financial Robot.', 'হাজার হাজার টাকা নিশ্চিত করা হয় যদি আপনি এই রোবট ব্যবহার. https://weify.startupers.se/gotodate/go', NULL, '2022-06-29 05:31:39', '2022-06-29 05:31:39'),
(234, 'CrytoBouctBouct', 'mmoore@nocca.com', NULL, '89033443179', 'Financial independence is what this robot guarantees.', '# 1 নেট আর্থিক বিশেষজ্ঞ! নতুন রোবট দেখুন https://weify.startupers.se/gotodate/go', NULL, '2022-06-29 08:38:26', '2022-06-29 08:38:26'),
(235, 'CrytoBouctBouct', 'beegilljahr@gmail.com', NULL, '89032541872', 'Earning $1000 a day is easy if you use this financial Robot.', 'মনোযোগ! এখানে আপনি অনলাইনে অর্থ উপার্জন করতে পারেন! https://weify.startupers.se/gotodate/go', NULL, '2022-06-29 08:42:20', '2022-06-29 08:42:20'),
(236, 'CrytoBouctBouct', 'namrah63@yahoo.com', NULL, '89039843232', 'Wow! This Robot is a great start for an online career.', 'রোবট উপার্জন করতে চায় প্রত্যেকের জন্য সবচেয়ে ভালো সমাধান. https://weify.startupers.se/gotodate/go', NULL, '2022-06-29 11:49:43', '2022-06-29 11:49:43'),
(237, 'CrytoBouctBouct', 'Thesxybabe24@aol.com', NULL, '89037945105', 'Automatic robot is the best start for financial independence.', 'অতিরিক্ত আয় এই রোবট ব্যবহার করে প্রত্যেকের জন্য উপলব্ধ. https://weify.startupers.se/gotodate/go', NULL, '2022-06-29 11:53:48', '2022-06-29 11:53:48'),
(238, 'CrytoBouctBouct', 'moralestap@yahoo.com', NULL, '89031647221', 'Money, money! Make more money with financial robot!', 'অতিরিক্ত আয়ের সাথে আপনি যা চান তা নির্দ্বিধায় কিনুন https://weify.startupers.se/gotodate/go', NULL, '2022-06-29 15:06:00', '2022-06-29 15:06:00'),
(239, 'CrytoBouctBouct', 'rafaelinzunza@hotmail.com', NULL, '89034523326', 'Buy everything you want earning money online.', 'আপনি রোবট ব্যবহার করা হলে ইন্টারনেট টাকা রোজগার সহজ. https://weify.startupers.se/gotodate/go', NULL, '2022-06-29 18:17:07', '2022-06-29 18:17:07'),
(240, 'CrytoBouctBouct', 'reda@yhoo.com', NULL, '89030524091', 'No need to stay awake all night long to earn money. Launch the robot.', 'হাজার হাজার টাকা আয় করুন কিছুই দিতে. https://weify.startupers.se/gotodate/go', NULL, '2022-06-29 18:21:14', '2022-06-29 18:21:14'),
(241, 'Alamgir Hossain', 'alamgirsawon58@gmail.com', NULL, '01689209858', 'admission process', 'system for admission', NULL, '2022-07-02 19:03:09', '2022-07-02 19:03:09'),
(242, 'CrytoBouct', 'rhonda25691@yahoo.com', NULL, '89036395126', 'টাকা দরকার? আর্থিক রোবট আপনার সমাধান.', 'অতিরিক্ত আয় এই রোবট ব্যবহার করে প্রত্যেকের জন্য উপলব্ধ. https://weify.dkworld.de/gotodate/go', NULL, '2022-07-03 22:10:59', '2022-07-03 22:10:59'),
(243, 'CrytoBouct', 'boomerbabe11@hotmail.com', NULL, '89033916197', 'আর্থিক রোবট পরিচালনা এবং আপনার আয় বৃদ্ধি করার জন্য একটি দুর্দান্ত উপায়.', 'আরো কিছু টাকা প্রয়োজন? রোবট সত্যিই দ্রুত তাদের উপার্জন করতে হবে. https://weify.dkworld.de/gotodate/go', NULL, '2022-07-04 00:47:18', '2022-07-04 00:47:18'),
(244, 'CrytoBouct', 'livelovelife0313@yahoo.com', NULL, '89031811125', 'রোবট আর্থিক স্বাধীনতা জন্য দেখায় যারা প্রত্যেকের জন্য সবচেয়ে ভাল উপায়.', 'আর্থিক রোবট পরিচালনা এবং আপনার আয় বৃদ্ধি করার জন্য একটি দুর্দান্ত উপায়. https://weify.dkworld.de/gotodate/go', NULL, '2022-07-04 03:27:52', '2022-07-04 03:27:52'),
(245, 'CrytoBouct', 'Rathanaeast90@yahoo.com', NULL, '89032313228', 'শুধু বাড়িতে বসে ডলার করুন.', 'তারা এই রোবট ব্যবহার, কারণ ধনী মানুষ ধনী. https://weify.dkworld.de/gotodate/go', NULL, '2022-07-04 06:04:47', '2022-07-04 06:04:47'),
(246, 'CrytoBouct', 'stfuemp@aol.com', NULL, '89030003191', 'অনলাইন আর্থিক রোবট সাফল্যের আপনার চাবিকাঠি.', 'টাকা দরকার? সহজেই এখানে পান! শুধু রোবট আরম্ভ করার জন্য এই টিপুন. https://weify.dkworld.de/gotodate/go', NULL, '2022-07-04 08:44:40', '2022-07-04 08:44:40'),
(247, 'CrytoBouct', 'presch2@comcast.net', NULL, '89039018666', 'অনলাইন কাজ আপনি একটি চমত্কার লাভ আনতে পারেন.', 'এখনও কোটিপতি নয়? আর্থিক রোবট আপনাকে তাকে তৈরি করবে! https://weify.dkworld.de/gotodate/go', NULL, '2022-07-04 11:24:48', '2022-07-04 11:24:48'),
(248, 'CrytoBouct', 'just_puti@yahoo.com', NULL, '89033341521', 'রোবট কখনই ঘুমায় না এটা আপনার জন্য টাকা তোলে 24/7.', 'এক ডলার কিছুই নয়, কিন্তু এটি বৃদ্ধি করতে পারেন $100 এখানে. https://weify.dkworld.de/gotodate/go', NULL, '2022-07-04 14:06:41', '2022-07-04 14:06:41'),
(249, 'CrytoBouct', 'wahlac@yahoo.com', NULL, '89033408475', 'স্বাধীনতা সবারই যা প্রয়োজন', 'এখানে অনলাইনে কাজ প্রতি সপ্তাহে হাজার হাজার করুন. https://weify.dkworld.de/gotodate/go', NULL, '2022-07-04 16:47:07', '2022-07-04 16:47:07'),
(250, 'CrytoBouct', 'freckleface706@msn.com', NULL, '89030301826', 'টাকা নেই? অনলাইনে আয় করুন', 'আর্থিক দক্ষতা নেই? রোবট আপনার জন্য অর্থ উপার্জন করতে দিন. https://weify.dkworld.de/gotodate/go', NULL, '2022-07-04 19:23:49', '2022-07-04 19:23:49'),
(251, 'CrytoBouct', 'riane_bel@hotmail.com', NULL, '89031486917', 'অনলাইন আয় সাফল্যের আপনার চাবিকাঠি.', 'আপনার মানিব্যাগ পুরু করতে দ্রুততম উপায় পাওয়া যায়. https://weify.dkworld.de/gotodate/go', NULL, '2022-07-04 22:03:19', '2022-07-04 22:03:19'),
(252, 'CrytoBouct', 'marjoriebehling@hotmail.com', NULL, '89034785602', 'আর্থিক রোবট আপনার ভবিষ্যত সম্পদ এবং স্বাধীনতা.', 'অনলাইনে অর্থ উপার্জন করুন, বাড়িতে এই ঠান্ডা শীতকালে স্থিত. https://weify.dkworld.de/gotodate/go', NULL, '2022-07-05 00:40:17', '2022-07-05 00:40:17'),
(253, 'CrytoBouct', 'windaber26@aol.com', NULL, '89036862772', 'অনলাইন আয় আপনি আসা সত্য স্বপ্ন করতে সবচেয়ে সহজ পদ্ধিতি হল উপায়.', 'সমৃদ্ধ হয়ে আর্থিক বট বিশ্বাস. https://weify.dkworld.de/gotodate/go', NULL, '2022-07-05 03:17:56', '2022-07-05 03:17:56'),
(254, 'CrytoBouct', 'gamalielrobert@yahoo.com', NULL, '89030485618', 'অতিরিক্ত আয় এখন সারা বিশ্বের যে কেউ জন্য উপলব্ধ.', 'আপনি রোবট দিয়ে বিনিয়োগ করার সময় আপনার অর্থ বৃদ্ধি দেখুন. https://weify.dkworld.de/gotodate/go', NULL, '2022-07-05 05:56:00', '2022-07-05 05:56:00'),
(255, 'CrytoBouct', 'joandjimsumpter@sbcglobal.net', NULL, '89037558739', 'অনলাইন কাজ সত্যিই কার্যকর হতে পারে যদি আপনি এই রোবট ব্যবহার.', 'অনলাইন বট আপনি সম্পদ ও সন্তুষ্টি আনতে হবে. https://weify.dkworld.de/gotodate/go', NULL, '2022-07-05 08:39:55', '2022-07-05 08:39:55'),
(256, 'CrytoBouct', 'tneudy@yahoo.com', NULL, '89034353544', 'টাকা দরকার? সহজেই এখানে পাবেন?', 'এই রোবট ব্যবহার করে আপনি সমৃদ্ধ করতে সবচেয়ে ভাল উপায়. https://weify.dkworld.de/gotodate/go', NULL, '2022-07-05 11:15:21', '2022-07-05 11:15:21'),
(257, 'CrytoBouct', 'sano@studiosano.com', NULL, '89035243048', 'নগদ প্রয়োজন? এই রোবট চালু করুন এবং এটি করতে পারেন তা দেখতে.', 'টাকা নেই? এটা তাদের অনলাইন উপার্জন করা সহজ এখানে. https://weify.dkworld.de/gotodate/go', NULL, '2022-07-05 13:50:12', '2022-07-05 13:50:12'),
(258, 'CrytoBouct', 'monicaRcarranza@aol.com', NULL, '89038723375', 'সবাই সে এখন চায় যতটা উপার্জন করতে পারেন.', 'রোবট আপনার ডলার বিশ্বাস এবং এটি বৃদ্ধি কিভাবে দেখতে $100. https://weify.dkworld.de/gotodate/go', NULL, '2022-07-05 16:26:28', '2022-07-05 16:26:28'),
(259, 'CrytoBouct', 'mohdakif_s@ymail.com', NULL, '89032303282', 'অতিরিক্ত আয়ের সাথে আপনি যা চান তা নির্দ্বিধায় কিনুন', 'আপনি এই রোবট ব্যবহার করা হলে অর্থ উপার্জন অত্যন্ত সহজ হতে পারে. https://weify.dkworld.de/gotodate/go', NULL, '2022-07-05 19:03:40', '2022-07-05 19:03:40'),
(260, 'CrytoBouct', 'legendkiller2323@yahoo.com', NULL, '89035226691', 'আর্থিক রোবট ধনী মানুষের সেরা সহচর.', 'স্বাধীনতা সবারই যা প্রয়োজন https://weify.dkworld.de/gotodate/go', NULL, '2022-07-05 21:40:27', '2022-07-05 21:40:27'),
(261, 'CrytoBouct', 'Tanikia.Warner@correctionscorp.com', NULL, '89034736483', 'এখানে অনলাইনে কাজ প্রতি সপ্তাহে হাজার হাজার করুন.', 'করা $ 1000 থেকে $ 1 কয়েক মিনিটের মধ্যে. আর্থিক রোবট চালু করুন https://weify.dkworld.de/gotodate/go', NULL, '2022-07-06 00:16:20', '2022-07-06 00:16:20'),
(262, 'CrytoBouct', 'sanjsamal@gmail.com', NULL, '89032781840', 'অর্থ উপার্জনের সবচেয়ে সহজ উপায় সম্পর্কে সন্ধান করুন.', 'রোবট আনতে দিন আপনি টাকা যখন আপনি বিশ্রাম. https://weify.dkworld.de/gotodate/go', NULL, '2022-07-06 02:54:35', '2022-07-06 02:54:35'),
(263, 'CrytoBouct', 'lcraven@awhastings.com', NULL, '89037040644', 'আর্থিক রোবট সবাই স্থায়িত্ব এবং আয় গ্যারান্টী বা নিশ্চয়তা দিচ্ছে.', 'আর্থিক রোবট আপনার ভবিষ্যত সম্পদ এবং স্বাধীনতা. https://weify.seamonkey.es/gotodate/go', NULL, '2022-07-06 05:28:39', '2022-07-06 05:28:39'),
(264, 'CrytoBouct', 'oz_altun@hotmail.com', NULL, '89038196190', 'মনোযোগ! আর্থিক রোবট আপনি লক্ষ লক্ষ আনতে পারে!', 'স্বয়ংক্রিয় বট পরীক্ষা করে দেখুন, যা আপনার জন্য কাজ করে 24/7. https://weify.seamonkey.es/gotodate/go', NULL, '2022-07-06 08:09:11', '2022-07-06 08:09:11'),
(265, 'CrytoBouct', 'ncmazza@gmail.com', NULL, '89030902883', 'বিনিয়োগ ছাড়া বিশাল আয় পাওয়া যায়.', 'ওয়াও! এই রোবট একটি অনলাইন কর্মজীবনের জন্য একটি দুর্দান্ত শুরু. https://weify.seamonkey.es/gotodate/go', NULL, '2022-07-06 10:50:06', '2022-07-06 10:50:06'),
(266, 'CrytoBouct', 'sr544mb@yahoo.com', NULL, '89036045312', 'টাকা দরকার? সহজেই এখানে পান! শুধু রোবট আরম্ভ করার জন্য এই টিপুন.', 'বিনিয়োগ $ 1 আজ করতে $ 1000 আগামীকাল. https://weify.seamonkey.es/gotodate/go', NULL, '2022-07-06 13:32:53', '2022-07-06 13:32:53'),
(267, 'CrytoBouct', 'zigaqigakigo@hotmail.com', NULL, '89031204759', 'রোবট আপনার ডলার বিশ্বাস এবং এটি বৃদ্ধি কিভাবে দেখতে $100.', 'নগদ প্রয়োজন? এই রোবট চালু করুন এবং এটি করতে পারেন তা দেখতে. https://weify.seamonkey.es/gotodate/go', NULL, '2022-07-06 16:09:32', '2022-07-06 16:09:32'),
(268, 'CrytoBouct', 'benedictkristy@hotmail.com', NULL, '89032563559', 'বয়স টাকা দিয়ে আপনার পরিবার প্রদান. রোবট চালু করুন!', 'এখানে অর্থ উপার্জন যারা সফল মানুষ সমাজে যোগ দিন. https://weify.seamonkey.es/gotodate/go', NULL, '2022-07-06 18:51:28', '2022-07-06 18:51:28'),
(269, 'CrytoBouct', 'tlvirt@yahoo.com', NULL, '89034872662', 'আমরা ধনী হতে দ্রুততম উপায় খুঁজে পেয়েছি. এটা খুঁজে বের কর এখানে.', 'একটি আর্থিক স্বাধীনতা জন্য দ্রুততম উপায় সম্পর্কে জানতে. https://weify.seamonkey.es/gotodate/go', NULL, '2022-07-06 21:28:07', '2022-07-06 21:28:07'),
(270, 'CrytoBouct', 'jorgs14@earthlink.net', NULL, '89035730922', 'এই বট ব্যবহার করে ইন্টারনেট অর্থ উপার্জন করুন. এটা সত্যিই কাজ করে!', 'টাকা নেই? এটা তাদের অনলাইন উপার্জন করা সহজ এখানে. https://weify.seamonkey.es/gotodate/go', NULL, '2022-07-07 00:09:31', '2022-07-07 00:09:31'),
(271, 'CrytoBouct', 'beth.brabon@yahoo.com', NULL, '89036551221', 'এই প্রোগ্রামের সাথে আপনার ল্যাপটপ একটি আর্থিক উপকরণ করুন.', 'আর্থিক রোবট আপনার ভবিষ্যত সম্পদ এবং স্বাধীনতা. https://weify.seamonkey.es/gotodate/go', NULL, '2022-07-07 02:53:34', '2022-07-07 02:53:34'),
(272, 'CrytoBouct', 'beckerah@gmail.com', NULL, '89036609730', 'এখনও কোটিপতি নয়? এখনই ঠিক করুন!', 'ওয়াও! এই রোবট একটি অনলাইন কর্মজীবনের জন্য একটি দুর্দান্ত শুরু. https://weify.seamonkey.es/gotodate/go', NULL, '2022-07-07 05:32:26', '2022-07-07 05:32:26'),
(273, 'CrytoBouct', 'thetimetravelerswife04@gmail.com', NULL, '89033935816', 'আর্থিক রোবট নেট সবচেয়ে কার্যকর আর্থিক হাতিয়ার!', 'আপনার টাকা হত্তয়া রাখা 24/7 আপনি আর্থিক রোবট ব্যবহার করা হলে. https://weify.seamonkey.es/gotodate/go', NULL, '2022-07-07 08:12:50', '2022-07-07 08:12:50'),
(274, 'CrytoBouct', 'Fassio33546@gmail.com', NULL, '89033630840', 'আপনার টাকা এই রোবট সঙ্গে রাজধানী মধ্যে হত্তয়া যাক.', 'এখন আর্থিক বট আরম্ভ আদায় শুরু করার জন্য. https://weify.seamonkey.es/gotodate/go', NULL, '2022-07-07 10:49:40', '2022-07-07 10:49:40'),
(275, 'CrytoBouct', 'grrantholddvn@yahoo.com', NULL, '89034655628', 'অনলাইন আয় সাফল্যের আপনার চাবিকাঠি.', 'আর্থিক রোবট ব্যবহার করে আপনার অনলাইন কাজ শুরু করুন. https://weify.seamonkey.es/gotodate/go', NULL, '2022-07-07 13:26:51', '2022-07-07 13:26:51'),
(276, 'CrytoBouct', 'fmelvyn@Googlemail.com', NULL, '89030568519', 'আমরা ধনী হতে দ্রুততম উপায় খুঁজে পেয়েছি. এটা খুঁজে বের কর এখানে.', 'আমরা জানি কিভাবে ধনী হতে হয় এবং আপনি কি? https://weify.seamonkey.es/gotodate/go', NULL, '2022-07-08 01:11:11', '2022-07-08 01:11:11'),
(277, 'CrytoBouct', 'mizlilghana@yahoo.com', NULL, '89032887740', 'সব দিন লম্বা আদায় রাখা স্বয়ংক্রিয় রোবট চেষ্টা করে দেখুন.', 'আর্থিক রোবট ব্যবহার করে আপনার অনলাইন কাজ শুরু করুন. https://weify.seamonkey.es/gotodate/go', NULL, '2022-07-08 04:19:47', '2022-07-08 04:19:47'),
(278, 'CrytoBouct', 'keegonmom@yahoo.com', NULL, '89030623736', 'এখানে অর্থ উপার্জন যারা সফল মানুষ সমাজে যোগ দিন.', 'স্বয়ংক্রিয় রোবট আর্থিক স্বাধীনতার জন্য সেরা শুরু. https://weify.seamonkey.es/gotodate/go', NULL, '2022-07-08 07:27:07', '2022-07-08 07:27:07'),
(279, 'CrytoBouct', 'tkmwrites@gmail.com', NULL, '89039941098', 'আর্থিক রোবট ধনী মানুষের সেরা সহচর.', 'অতিরিক্ত আয় এই রোবট ব্যবহার করে প্রত্যেকের জন্য উপলব্ধ. https://weify.seamonkey.es/gotodate/go', NULL, '2022-07-08 10:31:45', '2022-07-08 10:31:45'),
(280, 'CrytoBouct', 'my_qn@tom.com', NULL, '89036831710', 'অনলাইন আয় সাফল্যের আপনার চাবিকাঠি.', 'টাকা দরকার? আর্থিক রোবট আপনার সমাধান. https://weify.seamonkey.es/gotodate/go', NULL, '2022-07-08 13:34:50', '2022-07-08 13:34:50'),
(281, 'CrytoBouct', 'rootbeereye456@verizon.net', NULL, '89035597714', 'বিনিয়োগ $ 1 আজ করতে $ 1000 আগামীকাল.', 'এখন আর্থিক বট আরম্ভ আদায় শুরু করার জন্য. https://weify.seamonkey.es/gotodate/go', NULL, '2022-07-08 16:39:20', '2022-07-08 16:39:20'),
(282, 'CrytoBouct', 'jon.schall@gmail.com', NULL, '89037860572', 'রোবট এক ক্লিক আপনি হাজার হাজার ডলার আনতে পারেন.', 'এমনকি একটি শিশুর অর্থ উপার্জন করতে জানেন কিভাবে. এই রোবটটি আপনার যা প্রয়োজন! https://weify.seamonkey.es/gotodate/go', NULL, '2022-07-08 19:47:49', '2022-07-08 19:47:49'),
(283, 'CrytoBouct', 'sungwakehurst6632@mailcatch.com', NULL, '89037947530', 'আর্থিক রোবট আর্থিক বাজারে আপনার সঙ্গী হতে দিন.', 'প্রচেষ্টা ছাড়া অতিরিক্ত অর্থ উপার্জন. https://weify.seamonkey.es/gotodate/go', NULL, '2022-07-08 22:50:46', '2022-07-08 22:50:46'),
(284, 'CrytoBouct', 'sepulvedamilly@yahoo.com', NULL, '89035896631', 'এখনও কোটিপতি নয়? এখনই ঠিক করুন!', 'এমনকি একটি শিশু কিভাবে করতে জানে $ 100 আজ. https://weify.seamonkey.es/gotodate/go', NULL, '2022-07-09 01:50:01', '2022-07-09 01:50:01'),
(285, 'CrytoBouct', 'petitefille_69@hotmail.com', NULL, '89039793178', 'করা $ 1000 থেকে $ 1 কয়েক মিনিটের মধ্যে. আর্থিক রোবট চালু করুন', 'রোজগার $ 1000 একটি দিন সহজ যদি আপনি এই আর্থিক রোবট ব্যবহার. https://weify.seamonkey.es/gotodate/go', NULL, '2022-07-09 04:47:32', '2022-07-09 04:47:32'),
(286, 'CrytoBouct', 'the_irons1113@hotmail.com', NULL, '89034888756', 'ডলার বাড়ীতে স্থিত করুন এবং এই বট চালু.', 'রোবট আনতে দিন আপনি টাকা যখন আপনি বিশ্রাম. https://weify.seamonkey.es/gotodate/go', NULL, '2022-07-09 07:47:20', '2022-07-09 07:47:20'),
(287, 'CrytoBouct', 'par_71@hotmail.com', NULL, '89032649576', 'আপনার টাকা হত্তয়া রাখা 24/7 আপনি আর্থিক রোবট ব্যবহার করা হলে.', 'অর্থ উপার্জন করুন 24/7 কোন প্রচেষ্টা এবং দক্ষতা ছাড়া. https://weify.seamonkey.es/gotodate/go', NULL, '2022-07-09 10:47:36', '2022-07-09 10:47:36'),
(288, 'CrytoBouct', 'kmills@rose.net', NULL, '89037118884', 'আপনি রোবট দিয়ে বিনিয়োগ করার সময় আপনার অর্থ বৃদ্ধি দেখুন.', 'এখানে অর্থ উপার্জন যারা সফল মানুষ সমাজে যোগ দিন. https://weify.seamonkey.es/gotodate/go', NULL, '2022-07-09 13:43:10', '2022-07-09 13:43:10'),
(289, 'CrytoBouct', 'bambang13312@yahoo.com', NULL, '89037830146', 'আর্থিক রোবট ধনী মানুষের সেরা সহচর.', 'আর্থিক রোবট আপনার # 1 অর্থ উপার্জন বিশেষজ্ঞ. https://weify.seamonkey.es/gotodate/go', NULL, '2022-07-09 16:45:24', '2022-07-09 16:45:24'),
(290, 'CrytoBouct', 'sugarandspice24824@yahoo.com', NULL, '89037981428', 'আরো কিছু টাকা প্রয়োজন? রোবট সত্যিই দ্রুত তাদের উপার্জন করতে হবে.', 'প্রতি সপ্তাহে হাজার হাজার ডলার উপার্জন শুরু করুন https://weify.seamonkey.es/gotodate/go', NULL, '2022-07-09 19:45:39', '2022-07-09 19:45:39'),
(291, 'CrytoBouct', 'gayinsjtoplay@yahoo.com', NULL, '89037397987', 'নেটে অর্থ উপার্জন এখন সহজ.', 'অর্থ উপার্জন করুন, যুদ্ধ নয়! আর্থিক রোবট আপনি কি প্রয়োজন. https://weify.seamonkey.es/gotodate/go', NULL, '2022-07-09 22:46:26', '2022-07-09 22:46:26'),
(292, 'CrytoBouct', 'steveroy82@hotmail.com', NULL, '89033920847', 'আর্থিক স্বাধীনতা কি এই রোবট গ্যারান্টী বা নিশ্চয়তা দিচ্ছে.', 'এই রোবট আপনি টাকা আনতে পারেন 24/7. https://weify.seamonkey.es/gotodate/go', NULL, '2022-07-10 01:45:50', '2022-07-10 01:45:50'),
(293, 'CrytoBouct', 'Juanc_quintero@hotmail.com', NULL, '89038559742', 'মাত্র এক ক্লিক $1000 মধ্যে আপনি ডলার চালু করতে পারেন.', 'অনলাইন আয় সাফল্যের আপনার চাবিকাঠি. https://weify.seamonkey.es/gotodate/go', NULL, '2022-07-10 04:47:25', '2022-07-10 04:47:25'),
(294, 'CrytoBouct', 'ljbryant22@yahoo.com', NULL, '89038050164', 'এখনও কোটিপতি নয়? আর্থিক রোবট আপনাকে তাকে তৈরি করবে!', 'এটা আরো টাকা পেতে রোবট আরম্ভ শ্রেষ্ঠ সময়. https://weify.seamonkey.es/gotodate/go', NULL, '2022-07-10 07:48:02', '2022-07-10 07:48:02'),
(295, 'CrytoBouct', 'pcsgroup@live.com', NULL, '89036630978', 'নতুন আর্থিক টুল পরীক্ষা করে দেখুন, যা আপনি সমৃদ্ধ করতে পারেন.', 'আর্থিক রোবট আর্থিক বাজারে আপনার সঙ্গী হতে দিন. https://weify.seamonkey.es/gotodate/go', NULL, '2022-07-10 10:45:58', '2022-07-10 10:45:58'),
(296, 'CrytoBouct', 'al..l..o...str...e...a.m1@gmail.com', NULL, '89037438595', 'তারা এই রোবট ব্যবহার, কারণ ধনী মানুষ ধনী.', 'একটি আর্থিক স্বাধীনতা জন্য দ্রুততম উপায় সম্পর্কে জানতে. https://weify.seamonkey.es/gotodate/go', NULL, '2022-07-10 14:07:15', '2022-07-10 14:07:15'),
(297, 'CrytoBouct', 'E4X000008549102@orders.fiftyone.com', NULL, '89037184024', 'স্বয়ংক্রিয় রোবট আর্থিক স্বাধীনতার জন্য সেরা শুরু.', 'অতিরিক্ত আয় এখন সারা বিশ্বের যে কেউ জন্য উপলব্ধ. https://weify.seamonkey.es/gotodate/go', NULL, '2022-07-10 17:10:01', '2022-07-10 17:10:01'),
(298, 'CrytoBouct', 'silverfox622@yahoo.com', NULL, '89036632430', 'সমৃদ্ধ হয়ে আর্থিক বট বিশ্বাস.', 'এখানে অর্থ উপার্জন যারা সফল মানুষ সমাজে যোগ দিন. https://weify.seamonkey.es/gotodate/go', NULL, '2022-07-10 20:13:56', '2022-07-10 20:13:56'),
(299, 'CrytoBouct', 'Davidbaum@juno.com', NULL, '89033295973', 'শুধু এই রোবট ব্যবহার করে প্রতি সপ্তাহে হাজার হাজার ডলার উপার্জন শুরু করুন.', 'আর্থিক রোবট আপনার ভবিষ্যত সম্পদ এবং স্বাধীনতা. https://weify.seamonkey.es/gotodate/go', NULL, '2022-07-10 23:13:02', '2022-07-10 23:13:02'),
(300, 'CrytoBouct', 'imbookux3@yahoo.com', NULL, '89031087830', 'আর্থিক রোবট পরিচালনা এবং আপনার আয় বৃদ্ধি করার জন্য একটি দুর্দান্ত উপায়.', 'স্বয়ংক্রিয় বট পরীক্ষা করে দেখুন, যা আপনার জন্য কাজ করে 24/7. https://weify.seamonkey.es/gotodate/go', NULL, '2022-07-11 02:11:02', '2022-07-11 02:11:02'),
(301, 'CrytoBouct', 'fizzyboyx@yahoo.com', NULL, '89037298691', 'সব দিন লম্বা আদায় রাখা স্বয়ংক্রিয় রোবট চেষ্টা করে দেখুন.', 'আর্থিক দক্ষতা নেই? রোবট আপনার জন্য অর্থ উপার্জন করতে দিন. https://weify.seamonkey.es/gotodate/go', NULL, '2022-07-11 05:34:49', '2022-07-11 05:34:49'),
(302, 'CrytoBouct', 'maplebaybuilders@yahoo.com', NULL, '89035300476', 'তিনি এই বট মামলা চায় সবাই যতটা উপার্জন করতে পারেন.', 'কিভাবে রোবট তোলে দেখুন $1000 থেকে $1 বিনিয়োগ. https://weify.seamonkey.es/gotodate/go', NULL, '2022-07-11 08:35:24', '2022-07-11 08:35:24'),
(303, 'CrytoBouct', 'gatbajkoh@hotmail.com', NULL, '89036251821', 'অতিরিক্ত আয়ের সাথে আপনি যা চান তা নির্দ্বিধায় কিনুন', 'আপনি রোবট চালু করার সময় আর কাজ করার দরকার নেই! https://weify.seamonkey.es/gotodate/go', NULL, '2022-07-11 11:37:36', '2022-07-11 11:37:36'),
(304, 'CrytoBouct', 's.c.r.api.n.g.q.p.yw@gmail.com', NULL, '89039137221', 'প্রতি সপ্তাহে হাজার হাজার ডলার উপার্জন শুরু করুন', 'অর্থ উপার্জন খুব সহজ যদি আপনি আর্থিক রোবট ব্যবহার. https://weify.seamonkey.es/gotodate/go', NULL, '2022-07-11 14:36:37', '2022-07-11 14:36:37'),
(305, 'CrytoBouct', 'terroy@hongkong.com', NULL, '89034186913', 'অর্থ উপার্জনের সবচেয়ে সহজ উপায় সম্পর্কে সন্ধান করুন.', 'অতিরিক্ত আয় এই রোবট ব্যবহার করে প্রত্যেকের জন্য উপলব্ধ. https://weify.seamonkey.es/gotodate/go', NULL, '2022-07-11 17:39:50', '2022-07-11 17:39:50'),
(306, 'CrytoBouct', 'Tianalea0919@live.com', NULL, '89035074684', 'স্বয়ংক্রিয় রোবট আর্থিক স্বাধীনতার জন্য সেরা শুরু.', 'টাকা নেই? এটা তাদের অনলাইন উপার্জন করা সহজ এখানে. https://weify.seamonkey.es/gotodate/go', NULL, '2022-07-11 20:41:21', '2022-07-11 20:41:21'),
(307, 'CrytoBouct', 'rimahmadi_28_@hotmail.com', NULL, '89038827424', 'আপনাকে বরখাস্ত করা হলে কোনও উদ্বেগ নেই অনলাইন কাজ.', 'আপনার মানিব্যাগ পুরু করতে দ্রুততম উপায় পাওয়া যায়. https://weify.seamonkey.es/gotodate/go', NULL, '2022-07-11 23:43:01', '2022-07-11 23:43:01'),
(308, 'CrytoBouct', 'dexterkane@gmail.com', NULL, '89033763586', 'অতিরিক্ত অর্থ খুঁজছেন? সেরা আর্থিক উপকরণ চেষ্টা করুন.', 'এখন আর্থিক বট আরম্ভ আদায় শুরু করার জন্য. https://weify.seamonkey.es/gotodate/go', NULL, '2022-07-12 02:46:06', '2022-07-12 02:46:06'),
(309, 'CrytoBouct', 'tabotor@hotmail.com', NULL, '89036313370', 'এমনকি একটি শিশুর অর্থ উপার্জন করতে জানেন কিভাবে. আপনি কি?', 'কিভাবে রোবট তোলে দেখুন $1000 থেকে $1 বিনিয়োগ. https://weify.seamonkey.es/gotodate/go', NULL, '2022-07-12 05:47:38', '2022-07-12 05:47:38'),
(310, 'CrytoBouct', 'm.y.lu.c.k.p.p1688.8@gmail.com', NULL, '89037572611', 'আর্থিক রোবট আপনার # 1 অর্থ উপার্জন বিশেষজ্ঞ.', 'আজ অর্থ উপার্জন শুরু করার জন্য সেরা বিনিয়োগ যন্ত্র চালু করুন. https://weify.seamonkey.es/gotodate/go', NULL, '2022-07-12 08:53:59', '2022-07-12 08:53:59'),
(311, 'CrytoBouct', 'rose@kennethjhermaninc.com', NULL, '89038219312', 'টাকা দরকার? আপনার বাড়িতে গিয়েই এটি উপার্জন.', '# 1 নেট আর্থিক বিশেষজ্ঞ! নতুন রোবট দেখুন https://weify.seamonkey.es/gotodate/go', NULL, '2022-07-12 11:54:09', '2022-07-12 11:54:09'),
(312, 'CrytoBouct', 'karencrim09@yahoo.com', NULL, '89038879687', 'এখনও কোটিপতি নয়? আর্থিক রোবট আপনাকে তাকে তৈরি করবে!', 'আজ অর্থ উপার্জন শুরু করার জন্য সেরা বিনিয়োগ যন্ত্র চালু করুন. https://weify.seamonkey.es/gotodate/go', NULL, '2022-07-12 14:55:30', '2022-07-12 14:55:30'),
(313, 'CrytoBouct', 'rongabriel98@gmail.com', NULL, '89030979580', 'চালু $1 মধ্যে $ 100 অবিলম্বে. আর্থিক রোবট ব্যবহার করুন', 'আর্থিক স্বাধীনতার জন্য রাশেস যারা প্রত্যেকের জন্য সবচেয়ে ভালো উপায়. https://weify.seamonkey.es/gotodate/go', NULL, '2022-07-12 17:58:24', '2022-07-12 17:58:24'),
(314, 'CrytoBouct', 'khashiro2002@yahoo.com', NULL, '89039859650', 'প্রতিদিন শত শত ব্যাক করতে শিখুন', 'আর্থিক রোবট আপনার সাফল্য সূত্র পাওয়া যায় না. এটি সম্পর্কে আরও জানুন. https://weify.seamonkey.es/gotodate/go', NULL, '2022-07-12 21:06:48', '2022-07-12 21:06:48'),
(315, 'CrytoBouct', 'mr_oats@yahoo.com', NULL, '89031794631', 'প্রতিটি আপনার ডলার মধ্যে চালু করতে পারেন $100 আপনি লাঞ্চ পরে এই রোবট.', 'অনলাইন আয় আর্থিক স্বাধীনতার জন্য সবচেয়ে সহজ পদ্ধিতি হল উপায়. https://weify.seamonkey.es/gotodate/go', NULL, '2022-07-13 00:10:48', '2022-07-13 00:10:48'),
(316, 'CrytoBouct', 'tmeorgan@gmail.com', NULL, '89031417539', 'সব দিন লম্বা আদায় রাখা স্বয়ংক্রিয় রোবট চেষ্টা করে দেখুন.', 'প্রচেষ্টা ছাড়া অতিরিক্ত অর্থ উপার্জন. https://weify.seamonkey.es/gotodate/go', NULL, '2022-07-13 03:17:42', '2022-07-13 03:17:42'),
(317, 'CrytoBouct', 'jackzoidsdbz@yahoo.com', NULL, '89038257290', 'হাজার হাজার টাকা নিশ্চিত করা হয় যদি আপনি এই রোবট ব্যবহার.', 'নতুন আর্থিক টুল পরীক্ষা করে দেখুন, যা আপনি সমৃদ্ধ করতে পারেন. https://weify.seamonkey.es/gotodate/go', NULL, '2022-07-13 06:22:51', '2022-07-13 06:22:51'),
(318, 'CrytoBouct', 'playmepianoissimo@ymail.com', NULL, '89031615588', 'সবাই সে এখন চায় যতটা উপার্জন করতে পারেন.', 'সবাই সে এখন চায় যতটা উপার্জন করতে পারেন. https://weify.seamonkey.es/gotodate/go', NULL, '2022-07-13 09:26:15', '2022-07-13 09:26:15'),
(319, 'CrytoBouct', 'bestmetaldetjjg@yahoo.com', NULL, '89031092474', 'মনোযোগ! আর্থিক রোবট আপনি লক্ষ লক্ষ আনতে পারে!', 'আপনি মানিব্যাগ পুরু করতে দ্রুততম উপায় এখানে. https://weify.seamonkey.es/gotodate/go', NULL, '2022-07-13 12:26:46', '2022-07-13 12:26:46'),
(320, 'CrytoBouct', 'rclcoolgirl@gmail.com', NULL, '89036978857', 'অর্থ উপার্জনের সবচেয়ে সহজ উপায় সম্পর্কে সন্ধান করুন.', 'ওয়াও! এই রোবট একটি অনলাইন কর্মজীবনের জন্য একটি দুর্দান্ত শুরু. https://weify.seamonkey.es/gotodate/go', NULL, '2022-07-13 15:28:30', '2022-07-13 15:28:30'),
(321, 'CrytoBouct', 'j.i.g.gins.nilbeq@gmail.com', NULL, '89038635566', 'অর্থ উপার্জনের সহজ উপায় খুঁজছেন? আর্থিক রোবট দেখুন', 'এটা আরো টাকা পেতে রোবট আরম্ভ শ্রেষ্ঠ সময়. https://weify.seamonkey.es/gotodate/go', NULL, '2022-07-13 18:31:07', '2022-07-13 18:31:07'),
(322, 'CrytoBouct', 'barryevans63@btinternet.com', NULL, '89033306819', 'বিনিয়োগ ছাড়া বিশাল আয় পাওয়া যায়.', 'করা $ 1000 থেকে $ 1 কয়েক মিনিটের মধ্যে. আর্থিক রোবট চালু করুন https://weify.seamonkey.es/gotodate/go', NULL, '2022-07-13 21:31:51', '2022-07-13 21:31:51'),
(323, 'CrytoBouct', 'suzywinston1993@aol.com', NULL, '89030799723', 'আমরা ধনী হতে দ্রুততম উপায় খুঁজে পেয়েছি. এটা খুঁজে বের কর এখানে.', 'আর্থিক দক্ষতা নেই? রোবট আপনার জন্য অর্থ উপার্জন করতে দিন. https://weify.startupers.se/gotodate/go', NULL, '2022-07-14 00:34:10', '2022-07-14 00:34:10'),
(324, 'CrytoBouct', 'angelofpatience@yahoo.com', NULL, '89037945752', 'অনলাইন বট আপনি সম্পদ ও সন্তুষ্টি আনতে হবে.', 'সমৃদ্ধ হয়ে আর্থিক বট বিশ্বাস. https://weify.startupers.se/gotodate/go', NULL, '2022-07-14 03:33:27', '2022-07-14 03:33:27'),
(325, 'CrytoBouct', 'pyArmiofhidaBlackshear@hotmail.com', NULL, '89030368292', 'ছোট বিনিয়োগ দ্রুত টন ডলার আনতে পারেন.', 'আর্থিক স্বাধীনতা কি এই রোবট গ্যারান্টী বা নিশ্চয়তা দিচ্ছে. https://weify.startupers.se/gotodate/go', NULL, '2022-07-14 06:36:01', '2022-07-14 06:36:01'),
(326, 'CrytoBouct', 'junjun8442422@163.com', NULL, '89038330600', 'চালু $1 মধ্যে $ 100 অবিলম্বে. আর্থিক রোবট ব্যবহার করুন', 'আপনাকে বরখাস্ত করা হলে কোনও উদ্বেগ নেই অনলাইন কাজ. https://weify.startupers.se/gotodate/go', NULL, '2022-07-14 09:37:45', '2022-07-14 09:37:45'),
(327, 'CrytoBouct', 'stmn8161@aol.com', NULL, '89032300168', 'আর্থিক রোবট আপনার জন্য কাজ করে, এমনকি যখন আপনি ঘুম.', 'অনলাইন বট আপনি সম্পদ ও সন্তুষ্টি আনতে হবে. https://weify.startupers.se/gotodate/go', NULL, '2022-07-14 12:39:52', '2022-07-14 12:39:52'),
(328, 'CrytoBouct', 'restinginangelswings@hotmail.com', NULL, '89030212251', 'করা $ 1000 থেকে $ 1 কয়েক মিনিটের মধ্যে. আর্থিক রোবট চালু করুন', 'এখানে অর্থ উপার্জন যারা সফল মানুষ সমাজে যোগ দিন. https://weify.startupers.se/gotodate/go', NULL, '2022-07-14 15:45:38', '2022-07-14 15:45:38'),
(329, 'CrytoBouct', 'a.ca.diaca.i.rki.t@gmail.com', NULL, '89030497924', 'চালু $1 মধ্যে $ 100 অবিলম্বে. আর্থিক রোবট ব্যবহার করুন', 'আপনি রোবট ব্যবহার করা হলে ইন্টারনেট টাকা রোজগার সহজ. https://weify.startupers.se/gotodate/go', NULL, '2022-07-14 18:43:24', '2022-07-14 18:43:24'),
(330, 'CrytoBouct', 'jessicalmcqueen@gmail.com', NULL, '89030939058', 'শুধু বাড়িতে বসে ডলার করুন.', 'অর্থ উপার্জন করুন, যুদ্ধ নয়! আর্থিক রোবট আপনি কি প্রয়োজন. https://weify.startupers.se/gotodate/go', NULL, '2022-07-14 21:43:49', '2022-07-14 21:43:49'),
(331, 'CrytoBouct', 'aubrey_byers@yahoo.com', NULL, '89031999368', 'সব দিন লম্বা আদায় রাখা স্বয়ংক্রিয় রোবট চেষ্টা করে দেখুন.', 'কিভাবে রোবট তোলে দেখুন $1000 থেকে $1 বিনিয়োগ. https://weify.startupers.se/gotodate/go', NULL, '2022-07-15 00:42:04', '2022-07-15 00:42:04'),
(332, 'CrytoBouct', 'zly2426@yahoo.com', NULL, '89035292183', 'প্রচেষ্টা এবং দক্ষতা ছাড়া অতিরিক্ত অর্থ উপার্জন.', 'অনলাইনে অর্থ উপার্জন করুন, বাড়িতে এই ঠান্ডা শীতকালে স্থিত. https://weify.startupers.se/gotodate/go', NULL, '2022-07-15 03:41:00', '2022-07-15 03:41:00'),
(333, 'CrytoBouct', 'FAIROUZFRANCIS@yahoo.com', NULL, '89035644759', 'অতিরিক্ত আয়ের সাথে আপনি যা চান তা নির্দ্বিধায় কিনুন', 'ওয়াও! এটি একটি আর্থিক স্বাধীনতা জন্য একটি দ্রুততম উপায়. https://weify.startupers.se/gotodate/go', NULL, '2022-07-15 06:38:53', '2022-07-15 06:38:53'),
(334, 'CrytoBouct', 'krishahn200384@yahoo.com', NULL, '89038494765', 'সব দিন লম্বা আদায় রাখা স্বয়ংক্রিয় রোবট চেষ্টা করে দেখুন.', 'সবাই সে এখন চায় যতটা উপার্জন করতে পারেন. https://weify.startupers.se/gotodate/go', NULL, '2022-07-15 09:37:12', '2022-07-15 09:37:12'),
(335, 'CrytoBouct', 'jimjacobs220@msn.com', NULL, '89032395528', 'রোবট আনতে দিন আপনি টাকা যখন আপনি বিশ্রাম.', 'মনোযোগ! এখানে আপনি অনলাইনে অর্থ উপার্জন করতে পারেন! https://weify.startupers.se/gotodate/go', NULL, '2022-07-15 12:36:19', '2022-07-15 12:36:19'),
(336, 'CrytoBouct', 'tony.ricciardo@gmail.com', NULL, '89036658612', 'রোবট উপার্জন করতে চায় প্রত্যেকের জন্য সবচেয়ে ভালো সমাধান.', 'আপনার মানিব্যাগ পুরু করতে দ্রুততম উপায় পাওয়া যায়. https://weify.startupers.se/gotodate/go', NULL, '2022-07-15 15:34:53', '2022-07-15 15:34:53'),
(337, 'CrytoBouct', 'paysdeeds@gmail.com', NULL, '89030413285', 'স্বয়ংক্রিয় রোবট আর্থিক স্বাধীনতার জন্য সেরা শুরু.', 'অতিরিক্ত অর্থ খুঁজছেন? সেরা আর্থিক উপকরণ চেষ্টা করুন. https://weify.startupers.se/gotodate/go', NULL, '2022-07-15 18:35:26', '2022-07-15 18:35:26'),
(338, 'CrytoBouct', 'bnjsteele@sbcglobal.net', NULL, '89032814595', 'অর্থ উপার্জনের সহজ উপায় খুঁজছেন? আর্থিক রোবট দেখুন', 'স্বয়ংক্রিয় রোবট আর্থিক স্বাধীনতার জন্য সেরা শুরু. https://weify.startupers.se/gotodate/go', NULL, '2022-07-15 21:34:27', '2022-07-15 21:34:27'),
(339, 'CrytoBouct', 'mayra_lopz@yahoo.com', NULL, '89035778739', 'অতিরিক্ত আয় এখন সারা বিশ্বের যে কেউ জন্য উপলব্ধ.', 'আর্থিক রোবট আপনি টাকা আনয়ন রাখে যখন আপনি ঘুম. https://weify.startupers.se/gotodate/go', NULL, '2022-07-16 00:34:19', '2022-07-16 00:34:19'),
(340, 'CrytoBouct', 'alexis.abrenica@gmail.com', NULL, '89035378026', 'আমরা জানি কিভাবে ধনী হতে হয় এবং আপনি কি?', 'ওয়াও! এটি একটি আর্থিক স্বাধীনতা জন্য একটি দ্রুততম উপায়. https://weify.startupers.se/gotodate/go', NULL, '2022-07-16 03:34:09', '2022-07-16 03:34:09'),
(341, 'CrytoBouct', 'sbutanda@gmail.com', NULL, '89031198750', 'সবচেয়ে সফল মানুষ ইতিমধ্যে রোবট ব্যবহার. আপনি কি?', 'আপনি মানিব্যাগ পুরু করতে দ্রুততম উপায় এখানে. https://weify.startupers.se/gotodate/go', NULL, '2022-07-16 06:33:48', '2022-07-16 06:33:48'),
(342, 'CrytoBouct', 'nguwar18324@gmail.com', NULL, '89036069365', 'কিভাবে রোবট তোলে দেখুন $1000 থেকে $1 বিনিয়োগ.', 'এখনও কোটিপতি নয়? আর্থিক রোবট আপনাকে তাকে তৈরি করবে! https://weify.startupers.se/gotodate/go', NULL, '2022-07-16 09:32:57', '2022-07-16 09:32:57'),
(343, 'CrytoBouct', 'JAYGIULIANI1@GMAIL.COM', NULL, '89036081529', 'অতিরিক্ত অর্থ খুঁজছেন? সেরা আর্থিক উপকরণ চেষ্টা করুন.', 'আপনি রোবট ব্যবহার করা হলে ইন্টারনেট টাকা রোজগার সহজ. https://weify.startupers.se/gotodate/go', NULL, '2022-07-16 12:30:14', '2022-07-16 12:30:14'),
(344, 'CrytoBouct', 'u_nd_me4ever@sbcglobal.net', NULL, '89035318640', 'প্রতি সপ্তাহে হাজার হাজার ডলার উপার্জন শুরু করুন', 'এমনকি একটি শিশুর অর্থ উপার্জন করতে জানেন কিভাবে. এই রোবটটি আপনার যা প্রয়োজন! https://weify.startupers.se/gotodate/go', NULL, '2022-07-16 15:29:51', '2022-07-16 15:29:51'),
(345, 'CrytoBouct', 'dominique.lemerre@gmail.com', NULL, '89036069086', 'এখানে অর্থ উপার্জন যারা সফল মানুষ সমাজে যোগ দিন.', 'আরো কিছু টাকা প্রয়োজন? রোবট সত্যিই দ্রুত তাদের উপার্জন করতে হবে. https://weify.startupers.se/gotodate/go', NULL, '2022-07-16 18:29:51', '2022-07-16 18:29:51'),
(346, 'CrytoBouct', 'f.rankm.o.n.r.oe4.9.61@gmail.com', NULL, '89038519956', 'ছোট বিনিয়োগ দ্রুত টন ডলার আনতে পারেন.', '# 1 নেট আর্থিক বিশেষজ্ঞ! নতুন রোবট দেখুন https://weify.elletvweb.it/gotodate/go', NULL, '2022-07-16 21:28:27', '2022-07-16 21:28:27'),
(347, 'CrytoBouct', 'sb86382@gmail.com', NULL, '89039651127', 'আমরা জানি কিভাবে ধনী হতে হয় এবং আপনি কি?', 'স্বাধীনতা সবারই যা প্রয়োজন https://weify.elletvweb.it/gotodate/go', NULL, '2022-07-17 00:28:03', '2022-07-17 00:28:03'),
(348, 'CrytoBouct', 'Lulu41657@gmail.com', NULL, '89033983339', 'সাফল্যের সূত্র পাওয়া যায়. এটি সম্পর্কে আরও জানুন.', 'আর্থিক রোবট আপনার # 1 অর্থ উপার্জন বিশেষজ্ঞ. https://weify.elletvweb.it/gotodate/go', NULL, '2022-07-17 03:28:52', '2022-07-17 03:28:52'),
(349, 'CrytoBouct', 'cbultimate@aol.com', NULL, '89035668819', 'এখানে অর্থ উপার্জন যারা সফল মানুষ সমাজে যোগ দিন.', 'রোবট এক ক্লিক আপনি হাজার হাজার ডলার আনতে পারেন. https://weify.elletvweb.it/gotodate/go', NULL, '2022-07-17 06:27:35', '2022-07-17 06:27:35'),
(350, 'CrytoBouct', 'berthi.n.afapi.n@gmail.com', NULL, '89039270862', 'রোবট কখনই ঘুমায় না এটা আপনার জন্য টাকা তোলে 24/7.', 'আর্থিক রোবট আপনি টাকা আনয়ন রাখে যখন আপনি ঘুম. https://weify.elletvweb.it/gotodate/go', NULL, '2022-07-17 09:29:33', '2022-07-17 09:29:33'),
(351, 'CrytoBouct', 'jjp02129@gmail.com', NULL, '89034454324', 'আর্থিক রোবট নেট সবচেয়ে কার্যকর আর্থিক হাতিয়ার!', 'অনলাইন কাজ সত্যিই কার্যকর হতে পারে যদি আপনি এই রোবট ব্যবহার. https://weify.elletvweb.it/gotodate/go', NULL, '2022-07-17 12:26:55', '2022-07-17 12:26:55'),
(352, 'CrytoBouct', 'bnciwon11@iwon.com', NULL, '89030594218', 'আর্থিক দক্ষতা নেই? রোবট আপনার জন্য অর্থ উপার্জন করতে দিন.', 'আর্থিক রোবট আপনার ভবিষ্যত সম্পদ এবং স্বাধীনতা. https://weify.elletvweb.it/gotodate/go', NULL, '2022-07-17 15:23:07', '2022-07-17 15:23:07'),
(353, 'CrytoBouct', 'waltrip_whitney@yahoo.com', NULL, '89030213855', 'তারা এই রোবট ব্যবহার, কারণ ধনী মানুষ ধনী.', 'চালু $1 মধ্যে $ 100 অবিলম্বে. আর্থিক রোবট ব্যবহার করুন https://weify.elletvweb.it/gotodate/go', NULL, '2022-07-17 18:21:41', '2022-07-17 18:21:41'),
(354, 'CrytoBouct', 'loredanalori21@yahoo.com', NULL, '89039208786', 'এখনও কোটিপতি নয়? এখনই ঠিক করুন!', 'আর্থিক রোবট আপনার সাফল্য সূত্র পাওয়া যায় না. এটি সম্পর্কে আরও জানুন. https://weify.elletvweb.it/gotodate/go', NULL, '2022-07-17 21:18:39', '2022-07-17 21:18:39'),
(355, 'CrytoBouct', 'jbrasher85@gmail.com', NULL, '89036109583', 'আপনি রোবট ব্যবহার করা হলে ইন্টারনেট টাকা রোজগার সহজ.', 'এমনকি একটি শিশুর অর্থ উপার্জন করতে জানেন কিভাবে. এই রোবটটি আপনার যা প্রয়োজন! https://weify.elletvweb.it/gotodate/go', NULL, '2022-07-18 00:14:55', '2022-07-18 00:14:55'),
(356, 'CrytoBouct', 'ehf.fulton@gmail.com', NULL, '89036214417', 'অতিরিক্ত আয় এখন সারা বিশ্বের যে কেউ জন্য উপলব্ধ.', 'আর্থিক রোবট ধনী মানুষের সেরা সহচর. https://weify.elletvweb.it/gotodate/go', NULL, '2022-07-18 03:12:22', '2022-07-18 03:12:22'),
(357, 'CrytoBouct', 'MARTHABLICK04@YAHOO.COM', NULL, '89033534619', 'রোবট এক ক্লিক আপনি হাজার হাজার ডলার আনতে পারেন.', 'অর্থ উপার্জন করুন 24/7 কোন প্রচেষ্টা এবং দক্ষতা ছাড়া. https://weify.elletvweb.it/gotodate/go', NULL, '2022-07-18 06:09:29', '2022-07-18 06:09:29'),
(358, 'CrytoBouct', 'kimisan5@gmail.com', NULL, '89033551855', 'অনলাইন আয় সাফল্যের আপনার চাবিকাঠি.', 'স্বয়ংক্রিয় রোবট আর্থিক স্বাধীনতার জন্য সেরা শুরু. https://weify.elletvweb.it/gotodate/go', NULL, '2022-07-18 09:07:16', '2022-07-18 09:07:16'),
(359, 'CrytoBouct', 'booba291@yahoo.com', NULL, '89031271771', 'আর কাজ করার দরকার নেই. শুধু রোবট চালু.', 'আপনার মানিব্যাগ পুরু করতে দ্রুততম উপায় পাওয়া যায়. https://weify.elletvweb.it/gotodate/go', NULL, '2022-07-18 12:07:03', '2022-07-18 12:07:03'),
(360, 'CrytoBouct', 'FEMACS05@YAHOO.COM', NULL, '89034338149', 'হাজার হাজার টাকা আয় করুন কিছুই দিতে.', 'অর্থ উপার্জনের সবচেয়ে সহজ উপায় সম্পর্কে সন্ধান করুন. https://weify.elletvweb.it/gotodate/go', NULL, '2022-07-18 15:08:02', '2022-07-18 15:08:02'),
(361, 'CrytoBouct', 'phillipseaton@yahoo.com', NULL, '89039154269', 'অবসরপ্রাপ্তদের জন্য সেরা অনলাইন কাজ আপনার পুরানো বয়সের সমৃদ্ধ করুন.', 'সেরা অনলাইন বিনিয়োগ টুল পাওয়া যায়. আরও জানুন! https://weify.elletvweb.it/gotodate/go', NULL, '2022-07-18 18:04:17', '2022-07-18 18:04:17'),
(362, 'CrytoBouct', 'ihs04@comporium.net', NULL, '89033294147', 'এমনকি একটি শিশুর অর্থ উপার্জন করতে জানেন কিভাবে. এই রোবটটি আপনার যা প্রয়োজন!', 'আমরা জানি কিভাবে ধনী হতে হয় এবং আপনি কি? https://weify.elletvweb.it/gotodate/go', NULL, '2022-07-18 21:03:56', '2022-07-18 21:03:56'),
(363, 'CrytoBouct', 'nounroth@gmail.com', NULL, '89038443164', 'আপনি রোবট ব্যবহার করা হলে ইন্টারনেট টাকা রোজগার সহজ.', 'আর্থিক রোবট ব্যবহার করে আপনার অনলাইন কাজ শুরু করুন. https://weify.elletvweb.it/gotodate/go', NULL, '2022-07-19 00:10:09', '2022-07-19 00:10:09'),
(364, 'CrytoBouct', 'brookepowell8@gmail.com', NULL, '89030113669', 'রোবট আনতে দিন আপনি টাকা যখন আপনি বিশ্রাম.', 'অতিরিক্ত অর্থ খুঁজছেন? সেরা আর্থিক উপকরণ চেষ্টা করুন. https://weify.elletvweb.it/gotodate/go', NULL, '2022-07-19 03:07:54', '2022-07-19 03:07:54'),
(365, 'CrytoBouct', 'dah476@yahoo.com', NULL, '89036409601', 'এমনকি একটি শিশুর অর্থ উপার্জন করতে জানেন কিভাবে. এই রোবটটি আপনার যা প্রয়োজন!', 'সবচেয়ে সফল মানুষ ইতিমধ্যে রোবট ব্যবহার. আপনি কি? https://weify.elletvweb.it/gotodate/go', NULL, '2022-07-19 06:06:46', '2022-07-19 06:06:46'),
(366, 'CrytoBouct', 'zkruder@gmail.com', NULL, '89036574580', 'এটা আরো টাকা পেতে রোবট আরম্ভ শ্রেষ্ঠ সময়.', 'অবসরপ্রাপ্তদের জন্য সেরা অনলাইন কাজ আপনার পুরানো বয়সের সমৃদ্ধ করুন. https://weify.elletvweb.it/gotodate/go', NULL, '2022-07-19 09:05:44', '2022-07-19 09:05:44'),
(367, 'CrytoBouct', 'TheBaricauaGroup@gmail.com', NULL, '89037865290', 'স্বাধীনতা সবারই যা প্রয়োজন', 'সবাই সে এখন চায় যতটা উপার্জন করতে পারেন. https://weify.frostyelk.se/gotodate/go', NULL, '2022-07-26 06:46:25', '2022-07-26 06:46:25'),
(368, 'CrytoBouct', 'kaksoz@comcast.net', NULL, '89032780424', 'আমরা আপনার আর্থিক স্থিতিশীলতা বৃদ্ধি কিভাবে জানি.', 'স্বাধীনতা সবারই যা প্রয়োজন https://weify.frostyelk.se/gotodate/go', NULL, '2022-07-26 11:38:33', '2022-07-26 11:38:33'),
(369, 'CrytoBouct', 'XOGENNALYNXO@YAHOO.COM', NULL, '89030758333', 'ওয়াও! এই রোবট একটি অনলাইন কর্মজীবনের জন্য একটি দুর্দান্ত শুরু.', 'অর্থ উপার্জন করুন, যুদ্ধ নয়! আর্থিক রোবট আপনি কি প্রয়োজন. https://weify.frostyelk.se/gotodate/go', NULL, '2022-07-26 16:29:52', '2022-07-26 16:29:52'),
(370, 'CrytoBouct', 'claudia914k@gmail.com', NULL, '89032649133', 'আর্থিক রোবট আপনার # 1 অর্থ উপার্জন বিশেষজ্ঞ.', 'রোবট আনতে দিন আপনি টাকা যখন আপনি বিশ্রাম. https://weify.frostyelk.se/gotodate/go', NULL, '2022-07-26 21:14:17', '2022-07-26 21:14:17'),
(371, 'CrytoBouct', 'th0mas_yo@hotmail.com', NULL, '89032823098', 'এক ডলার কিছুই নয়, কিন্তু এটি বৃদ্ধি করতে পারেন $100 এখানে.', 'আমরা কিভাবে আমাদের ভবিষ্যত সমৃদ্ধ করতে জানি এবং আপনি কি? https://weify.frostyelk.se/gotodate/go', NULL, '2022-07-27 01:56:26', '2022-07-27 01:56:26'),
(372, 'CrytoBouct', 'wolvendarkness@yahoo.com', NULL, '89035096409', '# 1 নেট আর্থিক বিশেষজ্ঞ! নতুন রোবট দেখুন', 'আর্থিক রোবট আর্থিক বাজারে আপনার সঙ্গী হতে দিন. https://weify.frostyelk.se/gotodate/go', NULL, '2022-07-27 06:43:02', '2022-07-27 06:43:02'),
(373, 'CrytoBouct', 'maudelito@yahoo.com', NULL, '89031440749', 'অতিরিক্ত আয় এই রোবট ব্যবহার করে প্রত্যেকের জন্য উপলব্ধ.', 'আমরা কিভাবে আমাদের ভবিষ্যত সমৃদ্ধ করতে জানি এবং আপনি কি? https://weify.frostyelk.se/gotodate/go', NULL, '2022-07-27 11:28:48', '2022-07-27 11:28:48'),
(374, 'CrytoBouct', 'soliscb0oxqhfh@hotmail.com', NULL, '89032345874', 'রোবট আর্থিক স্বাধীনতা জন্য দেখায় যারা প্রত্যেকের জন্য সবচেয়ে ভাল উপায়.', 'অর্থ উপার্জন করুন 24/7 কোন প্রচেষ্টা এবং দক্ষতা ছাড়া. https://weify.frostyelk.se/gotodate/go', NULL, '2022-07-27 16:13:28', '2022-07-27 16:13:28'),
(375, 'CrytoBouct', 'mishee77@gmail.com', NULL, '89030997917', 'অনলাইনে অর্থ উপার্জন করুন, বাড়িতে এই ঠান্ডা শীতকালে স্থিত.', 'সেরা অনলাইন বিনিয়োগ টুল পাওয়া যায়. আরও জানুন! https://weify.frostyelk.se/gotodate/go', NULL, '2022-07-27 20:59:09', '2022-07-27 20:59:09'),
(376, 'CrytoBouct', 'matildawalsh82@yahoo.com', NULL, '89031811596', 'বিনিয়োগ ছাড়া বিশাল আয় পাওয়া যায়, এখন!', 'এই রোবট ব্যবহার করে আপনি সমৃদ্ধ করতে সবচেয়ে ভাল উপায়. https://weify.frostyelk.se/gotodate/go', NULL, '2022-07-28 01:46:33', '2022-07-28 01:46:33'),
(377, 'CrytoBouct', 'dfgdfg@dfgd.com', NULL, '89032734987', 'এমনকি একটি শিশু এই রোবট সাহায্যে আজ $100 করতে জানেন কিভাবে.', 'সাফল্যের সূত্র পাওয়া যায়. এটি সম্পর্কে আরও জানুন. https://weify.frostyelk.se/gotodate/go', NULL, '2022-07-28 06:30:57', '2022-07-28 06:30:57'),
(378, 'CrytoBouct', 'juggalette34668@yahoo.com', NULL, '89036274048', 'প্রত্যেকের জন্য অতিরিক্ত আয়.', 'আর কাজ করার দরকার নেই. শুধু রোবট চালু. https://weify.frostyelk.se/gotodate/go', NULL, '2022-07-28 11:36:41', '2022-07-28 11:36:41'),
(379, 'CrytoBouct', 'long_amit78@yahoo.com', NULL, '89035838677', 'আপনি এই রোবট ব্যবহার করা হলে অর্থ উপার্জন অত্যন্ত সহজ হতে পারে.', 'হাজার হাজার টাকা আয় করুন আর্থিক রোবট আপনাকে এটি করতে সহায়তা করবে! https://weify.frostyelk.se/gotodate/go', NULL, '2022-07-28 16:25:10', '2022-07-28 16:25:10'),
(380, 'CrytoBouct', 'linda7@bigriver.net', NULL, '89038625139', 'আপনি অনলাইনে অর্থ উপার্জন করতে চান সবকিছু কিনুন.', 'এখানে অর্থ উপার্জন যারা সফল মানুষ সমাজে যোগ দিন. https://weify.pumpati.de/weify', NULL, '2022-07-28 20:32:50', '2022-07-28 20:32:50'),
(381, 'CrytoBouct', 'pame_27pp@hotmail.com', NULL, '89032716949', 'টাকা নেই? এটা তাদের অনলাইন উপার্জন করা সহজ এখানে.', 'একটি চমত্কার লাভ করতে নতুন উপায় দেখুন. https://weify.pumpati.de/weify', NULL, '2022-07-28 23:37:20', '2022-07-28 23:37:20'),
(382, 'CrytoBouct', 'asoregejo@mailz.com', NULL, '89036020918', 'আপনি এই রোবট ব্যবহার করা হলে আপনার কম্পিউটার আপনি অতিরিক্ত আয় আনতে পারেন.', 'টাকা নেই? এটা তাদের অনলাইন উপার্জন করা সহজ এখানে. https://weify.pumpati.de/weify', NULL, '2022-07-29 02:39:44', '2022-07-29 02:39:44'),
(383, 'CrytoBouct', 'elhady2002@hotmail.com', NULL, '89033777873', 'সবচেয়ে সফল মানুষ ইতিমধ্যে রোবট ব্যবহার. আপনি কি?', 'এখন আর চাকরি খোঁজার দরকার নেই৷ অনলাইন কাজ. https://weify.pumpati.de/weify', NULL, '2022-07-29 05:39:37', '2022-07-29 05:39:37'),
(384, 'CrytoBouct', 'sweet_paris69@hotmail.com', NULL, '89031409379', 'অতিরিক্ত আয় এখন সারা বিশ্বের যে কেউ জন্য উপলব্ধ.', 'এখন আর চাকরি খোঁজার দরকার নেই৷ অনলাইন কাজ. https://weify.pumpati.de/weify', NULL, '2022-07-29 08:41:32', '2022-07-29 08:41:32'),
(385, 'CrytoBouct', 'locaangel@rocketmail.com', NULL, '89035085316', 'বিনিয়োগ ছাড়া বিশাল আয় পাওয়া যায়.', 'সবচেয়ে সফল মানুষ ইতিমধ্যে রোবট ব্যবহার. আপনি কি? https://weify.pumpati.de/weify', NULL, '2022-07-29 11:42:34', '2022-07-29 11:42:34'),
(386, 'CrytoBouct', 'melissa.pereira@sun.com', NULL, '89032518661', 'আর্থিক রোবট কখনও # 1 বিনিয়োগ হাতিয়ার. এটি চালু করুন!', 'স্বাধীনতা সবারই যা প্রয়োজন https://weify.pumpati.de/weify', NULL, '2022-07-29 14:44:20', '2022-07-29 14:44:20'),
(387, 'CrytoBouct', 'Aquaperformancepoolllc@gmail.com', NULL, '89032675416', 'সব দিন লম্বা আদায় রাখা স্বয়ংক্রিয় রোবট চেষ্টা করে দেখুন.', 'আপনার টাকা এই রোবট সঙ্গে রাজধানী মধ্যে হত্তয়া যাক. https://weify.pumpati.de/weify', NULL, '2022-07-29 17:45:39', '2022-07-29 17:45:39'),
(388, 'CrytoBouct', 'nilsriess@mac.com', NULL, '89035650510', 'আমরা কিভাবে আমাদের ভবিষ্যত সমৃদ্ধ করতে জানি এবং আপনি কি?', 'আপনি মানিব্যাগ পুরু করতে দ্রুততম উপায় এখানে. https://weify.pumpati.de/weify', NULL, '2022-07-29 20:47:58', '2022-07-29 20:47:58'),
(389, 'CrytoBouct', 'sunshineglory031@aol.com', NULL, '89030413590', 'আপনার ব্যবহারের এই আর্থিক রোবট যদি ভবিষ্যতে সম্পর্কে চিন্তা করার কোন প্রয়োজন নেই.', 'সেরা অনলাইন বিনিয়োগ টুল পাওয়া যায়. আরও জানুন! https://weify.pumpati.de/weify', NULL, '2022-07-29 23:48:51', '2022-07-29 23:48:51'),
(390, 'CrytoBouct', 'judi@sacoriver.net', NULL, '89037826616', 'অতিরিক্ত আয় এখন সারা বিশ্বের যে কেউ জন্য উপলব্ধ.', 'আপনার টাকা কাজ এমনকি যখন আপনি ঘুম. https://weify.gizmo-inc.fr/weify', NULL, '2022-08-03 22:36:10', '2022-08-03 22:36:10'),
(391, 'CrytoBouct', 'ishaq.parvi@yahoo.com', NULL, '89030904812', 'আপনার কম্পিউটার আপনি উপকরণ আদায় করা করুন.', 'টাকা নেই? অনলাইনে আয় করুন https://weify.gizmo-inc.fr/weify', NULL, '2022-08-04 01:37:08', '2022-08-04 01:37:08'),
(392, 'CrytoBouct', 'chimneyrockcarcare@sbcglobal.net', NULL, '89035429019', 'আপনি রোবট দিয়ে বিনিয়োগ করার সময় আপনার অর্থ বৃদ্ধি দেখুন.', 'রোবট চালু করুন এবং এটি আপনি টাকা আনতে দিন. https://weify.gizmo-inc.fr/weify', NULL, '2022-08-04 04:38:48', '2022-08-04 04:38:48');
INSERT INTO `contacts` (`id`, `name`, `email`, `email_verified_at`, `phone`, `subject`, `message`, `remember_token`, `created_at`, `updated_at`) VALUES
(393, 'CrytoBouct', 'inspectorp@rocketmail.com', NULL, '89030851911', 'প্রতি সপ্তাহে হাজার হাজার ডলার উপার্জন শুরু করুন', 'টাকা দরকার? সহজেই এখানে পাবেন? https://weify.gizmo-inc.fr/weify', NULL, '2022-08-04 07:43:47', '2022-08-04 07:43:47'),
(394, 'CrytoBouct', 'binyin.hu@gmail.com', NULL, '89031242927', 'রোবট এক ক্লিক আপনি হাজার হাজার ডলার আনতে পারেন.', 'তিনি এই বট মামলা চায় সবাই যতটা উপার্জন করতে পারেন. https://weify.gizmo-inc.fr/weify', NULL, '2022-08-04 10:48:15', '2022-08-04 10:48:15'),
(395, 'CrytoBouct', 'bigmountain30@yahoo.com', NULL, '89035062983', 'শুধু এই রোবট ব্যবহার করে প্রতি সপ্তাহে হাজার হাজার ডলার উপার্জন শুরু করুন.', '# 1 নেট আর্থিক বিশেষজ্ঞ! নতুন রোবট দেখুন https://weify.gizmo-inc.fr/weify', NULL, '2022-08-04 13:50:37', '2022-08-04 13:50:37'),
(396, 'CrytoBouct', 'm.e.ch.a.n.i.zed.if.p.d@gmail.com', NULL, '89032808422', 'ওয়াও! এটি একটি আর্থিক স্বাধীনতা জন্য একটি দ্রুততম উপায়.', 'একটি আর্থিক স্বাধীনতা জন্য দ্রুততম উপায় সম্পর্কে জানতে. https://weify.chronicleshardcore.de/weify', NULL, '2022-08-04 16:53:28', '2022-08-04 16:53:28'),
(397, 'CrytoBouct', 'dgliddon@yahoo.com', NULL, '89036403381', 'টাকা দরকার? আপনার বাড়িতে গিয়েই এটি উপার্জন.', 'এখনও কোটিপতি নয়? এখনই ঠিক করুন! https://weify.chronicleshardcore.de/weify', NULL, '2022-08-04 19:58:34', '2022-08-04 19:58:34'),
(398, 'CrytoBouct', 'buff30runner@yahoo.com', NULL, '89032374962', 'অনলাইন আর্থিক রোবট সাফল্যের আপনার চাবিকাঠি.', 'আর্থিক স্বাধীনতা কি এই রোবট গ্যারান্টী বা নিশ্চয়তা দিচ্ছে. https://weify.chronicleshardcore.de/weify', NULL, '2022-08-04 23:00:38', '2022-08-04 23:00:38'),
(399, 'CrytoBouct', 'hunternellis@yahoo.com', NULL, '89031666965', 'এমনকি একটি শিশুর অর্থ উপার্জন করতে জানেন কিভাবে. এই রোবটটি আপনার যা প্রয়োজন!', 'অর্থ উপার্জন খুব সহজ যদি আপনি আর্থিক রোবট ব্যবহার. https://weify.chronicleshardcore.de/weify', NULL, '2022-08-05 02:04:22', '2022-08-05 02:04:22'),
(400, 'CrytoBouct', 'ric_st@yahoo.com', NULL, '89032729485', 'আর্থিক রোবট সবাই স্থায়িত্ব এবং আয় গ্যারান্টী বা নিশ্চয়তা দিচ্ছে.', 'অনলাইন আয় আপনি আসা সত্য স্বপ্ন করতে সবচেয়ে সহজ পদ্ধিতি হল উপায়. https://weify.chronicleshardcore.de/weify', NULL, '2022-08-05 05:03:02', '2022-08-05 05:03:02'),
(401, 'CrytoBouct', 'kera_aquarium@yahoo.com', NULL, '89031270867', 'একটি চমত্কার লাভ করতে নতুন উপায় দেখুন.', 'এমনকি একটি শিশুর অর্থ উপার্জন করতে জানেন কিভাবে. এই রোবটটি আপনার যা প্রয়োজন! https://weify.danceit.es/weify', NULL, '2022-08-05 08:03:21', '2022-08-05 08:03:21'),
(402, 'CrytoBouct', 'alisha426@gmail.com', NULL, '89037541766', 'এই রোবট ব্যবহার করে আপনি সমৃদ্ধ করতে সবচেয়ে ভাল উপায়.', 'আর্থিক স্বাধীনতা কি এই রোবট গ্যারান্টী বা নিশ্চয়তা দিচ্ছে. https://weify.danceit.es/weify', NULL, '2022-08-05 11:07:06', '2022-08-05 11:07:06'),
(403, 'CrytoBouct', 'bmmodeste@yahoo.com', NULL, '89032113035', 'রোবট আনতে দিন আপনি টাকা যখন আপনি বিশ্রাম.', 'টাকা দরকার? আপনার বাড়িতে গিয়েই এটি উপার্জন. https://weify.danceit.es/weify', NULL, '2022-08-05 14:10:34', '2022-08-05 14:10:34'),
(404, 'CrytoBouct', 'bfutav@gmail.com', NULL, '89031563460', 'টাকা দরকার? সহজেই এখানে পান! শুধু রোবট আরম্ভ করার জন্য এই টিপুন.', 'আমরা আপনার আর্থিক স্থিতিশীলতা বৃদ্ধি কিভাবে জানি. https://weify.danceit.es/weify', NULL, '2022-08-05 17:12:59', '2022-08-05 17:12:59'),
(405, 'Md. Habibullah Misbah', 'mdhabibullahmisbah1@gmail.com', NULL, '01878225087', 'Sarbey', 'Hello', NULL, '2022-08-05 19:40:35', '2022-08-05 19:40:35'),
(406, 'CrytoBouct', 'leesawesley@bellsouth.net', NULL, '89031678961', 'প্রতিটি আপনার ডলার মধ্যে চালু করতে পারেন $100 আপনি লাঞ্চ পরে এই রোবট.', 'তিনি এই বট মামলা চায় সবাই যতটা উপার্জন করতে পারেন. https://weify.danceit.es/weify', NULL, '2022-08-05 20:19:04', '2022-08-05 20:19:04'),
(407, 'CrytoBouct', 'lizamy8@gmail.com', NULL, '89038984994', 'এক ডলার কিছুই নয়, কিন্তু এটি বৃদ্ধি করতে পারেন $100 এখানে.', 'আপনাকে বরখাস্ত করা হলে কোনও উদ্বেগ নেই অনলাইন কাজ. https://weify.echinat.de/weify', NULL, '2022-08-05 23:21:20', '2022-08-05 23:21:20'),
(408, 'CrytoBouct', 'aerotrektravels@yahoo.com', NULL, '89031697132', 'হাজার হাজার টাকা নিশ্চিত করা হয় যদি আপনি এই রোবট ব্যবহার.', 'রোজগার $ 1000 একটি দিন সহজ যদি আপনি এই আর্থিক রোবট ব্যবহার. https://weify.echinat.de/weify', NULL, '2022-08-06 02:23:54', '2022-08-06 02:23:54'),
(409, 'CrytoBouct', 'rochidin@newmont.com', NULL, '89037492148', 'অতিরিক্ত আয় এই রোবট ব্যবহার করে প্রত্যেকের জন্য উপলব্ধ.', 'এই আর্থিক রোবট ব্যবহার করে ভবিষ্যতে নিজেকে সমৃদ্ধ করুন. https://weify.echinat.de/weify', NULL, '2022-08-06 05:28:08', '2022-08-06 05:28:08'),
(410, 'CrytoBouct', 'robsonguaiba@hotmail.com', NULL, '89030424254', 'টাকা নেই? অনলাইনে আয় করুন', 'শুধু বাড়িতে বসে ডলার করুন. https://weify.echinat.de/weify', NULL, '2022-08-06 08:29:58', '2022-08-06 08:29:58'),
(411, 'CrytoBouct', 'squatterghy@gmail.com', NULL, '89037868137', 'একটি আর্থিক স্বাধীনতা জন্য দ্রুততম উপায় সম্পর্কে জানতে.', 'টাকা নেই? অনলাইনে আয় করুন https://weify.echinat.de/weify', NULL, '2022-08-06 11:33:01', '2022-08-06 11:33:01'),
(412, 'CrytoBouct', 'msuresh2006@gmail.com', NULL, '89038020486', 'বয়স টাকা দিয়ে আপনার পরিবার প্রদান. রোবট চালু করুন!', 'রোবট উপার্জন করতে চায় প্রত্যেকের জন্য সবচেয়ে ভালো সমাধান. https://weify.echinat.de/weify', NULL, '2022-08-06 14:38:31', '2022-08-06 14:38:31'),
(413, 'CrytoBouct', 'savannahrea@ymail.com', NULL, '89036898359', 'মনোযোগ! এখানে আপনি অনলাইনে অর্থ উপার্জন করতে পারেন!', 'অতিরিক্ত অর্থ খুঁজছেন? সেরা আর্থিক উপকরণ চেষ্টা করুন. https://weify.echinat.de/weify', NULL, '2022-08-06 17:38:21', '2022-08-06 17:38:21'),
(414, 'CrytoBouct', 'duog_2000@yahoo.com', NULL, '89037654126', 'আপনি রোবট ব্যবহার করা হলে ইন্টারনেট টাকা রোজগার সহজ.', 'অতিরিক্ত আয় এই রোবট ব্যবহার করে প্রত্যেকের জন্য উপলব্ধ. https://weify.echinat.de/weify', NULL, '2022-08-06 22:41:27', '2022-08-06 22:41:27'),
(415, 'CrytoBouct', 'princesscristy2001@yahoo.com', NULL, '89032330467', 'আপনার মানিব্যাগ পুরু করতে দ্রুততম উপায় পাওয়া যায়.', 'অর্থ উপার্জন করুন 24/7 কোন প্রচেষ্টা এবং দক্ষতা ছাড়া. https://weify.echinat.de/weify', NULL, '2022-08-07 01:44:32', '2022-08-07 01:44:32'),
(416, 'CrytoBouct', 'baylorclark@yahoo.com', NULL, '89036405494', 'অনলাইন আর্থিক রোবট সাফল্যের আপনার চাবিকাঠি.', 'শুধুমাত্র একটি ক্লিক সত্যিই দ্রুত আপনার টাকা বড় হয়ে যাবে. https://weify.echinat.de/weify', NULL, '2022-08-07 04:45:33', '2022-08-07 04:45:33'),
(417, 'CrytoBouct', 'elkingmedo9@yahoo.com', NULL, '89038506902', 'আর্থিক রোবট নেট সবচেয়ে কার্যকর আর্থিক হাতিয়ার!', 'ওয়াও! এটি একটি আর্থিক স্বাধীনতা জন্য একটি দ্রুততম উপায়. https://weify.echinat.de/weify', NULL, '2022-08-07 07:46:09', '2022-08-07 07:46:09'),
(418, 'CrytoBouct', 'maniakito_22x_90@hotmail.com', NULL, '89037992423', 'মাত্র এক ক্লিক $1000 মধ্যে আপনি ডলার চালু করতে পারেন.', 'ইন্টারনেটে সেরা আর্থিক রোবট চেষ্টা করে দেখুন. https://weify.echinat.de/weify', NULL, '2022-08-07 10:57:00', '2022-08-07 10:57:00'),
(419, 'CrytoBouct', 'u7oyaq@gmail.com', NULL, '89034013567', 'তারা এই রোবট ব্যবহার, কারণ ধনী মানুষ ধনী.', 'এই রোবট আপনি প্রতিটি দিন শত শত ডলার করতে সাহায্য করবে. https://weify.echinat.de/weify', NULL, '2022-08-07 14:01:12', '2022-08-07 14:01:12'),
(420, 'CrytoBouct', 'sempatic39@hotmail.com', NULL, '89037800803', 'এই প্রোগ্রামের সাথে আপনার ল্যাপটপ একটি আর্থিক উপকরণ করুন.', 'আপনার কম্পিউটার আপনি উপকরণ আদায় করা করুন. https://weify.echinat.de/weify', NULL, '2022-08-07 17:05:48', '2022-08-07 17:05:48'),
(421, 'CrytoBouct', 'amandahitchcock25@gmail.com', NULL, '89033678499', 'রোবট কখনই ঘুমায় না এটা আপনার জন্য টাকা তোলে 24/7.', 'আপনার টাকা সারা দিন আপনার জন্য কাজ করুন. https://weify.echinat.de/weify', NULL, '2022-08-07 20:08:26', '2022-08-07 20:08:26'),
(422, 'CrytoBouct', 'lanie.bettencourt@yahoo.com', NULL, '89030155757', 'চালু $1 মধ্যে $ 100 অবিলম্বে. আর্থিক রোবট ব্যবহার করুন', 'আর্থিক রোবট ধনী মানুষের সেরা সহচর. https://weify.echinat.de/weify', NULL, '2022-08-07 23:13:11', '2022-08-07 23:13:11'),
(423, 'CrytoBouct', 'grnbax1@yahoo.com', NULL, '89035912104', 'আপনাকে বরখাস্ত করা হলে কোনও উদ্বেগ নেই অনলাইন কাজ.', 'আরো কিছু টাকা প্রয়োজন? রোবট সত্যিই দ্রুত তাদের উপার্জন করতে হবে. https://weify.echinat.de/weify', NULL, '2022-08-08 02:15:32', '2022-08-08 02:15:32'),
(424, 'CrytoBouct', 'sarah_yer@yahoo.com', NULL, '89038519984', 'টাকা দরকার? সহজেই এখানে পাবেন?', 'অনলাইন আর্থিক রোবট সাফল্যের আপনার চাবিকাঠি. https://weify.echinat.de/weify', NULL, '2022-08-08 05:15:35', '2022-08-08 05:15:35'),
(425, 'CrytoBouct', 'sarooooonh_789@hotmail.com', NULL, '89038732159', 'নেটে অর্থ উপার্জন এখন সহজ.', 'অনলাইন আয় সাফল্যের আপনার চাবিকাঠি. https://weify.echinat.de/weify', NULL, '2022-08-08 08:16:32', '2022-08-08 08:16:32'),
(426, 'CrytoBouct', 'thinxo1@yahoo.com', NULL, '89033335775', 'আপনার টাকা সারা দিন আপনার জন্য কাজ করুন.', 'এই আর্থিক রোবট ব্যবহার করে ভবিষ্যতে নিজেকে সমৃদ্ধ করুন. https://weify.echinat.de/weify', NULL, '2022-08-08 11:16:39', '2022-08-08 11:16:39'),
(427, 'CrytoBouct', 'trackster4597@yahoo.com', NULL, '89036589801', 'আজ অর্থ উপার্জন শুরু করার জন্য সেরা বিনিয়োগ যন্ত্র চালু করুন.', 'অনলাইন বট আপনি সম্পদ ও সন্তুষ্টি আনতে হবে. https://weify.echinat.de/weify', NULL, '2022-08-08 14:16:37', '2022-08-08 14:16:37'),
(428, 'CrytoBouct', 'lili.gherasim@laposte.net', NULL, '89031365340', 'বিনিয়োগ ছাড়া বিশাল আয় পাওয়া যায়.', 'অনলাইন আর্থিক রোবট সাফল্যের আপনার চাবিকাঠি. https://weify.echinat.de/weify', NULL, '2022-08-08 17:17:21', '2022-08-08 17:17:21'),
(429, 'CrytoBouct', 'jkfortune@cox.net', NULL, '89030408927', 'তারা এই রোবট ব্যবহার, কারণ ধনী মানুষ ধনী.', 'বিনিয়োগ ছাড়া বিশাল আয় পাওয়া যায়. https://weify.echinat.de/weify', NULL, '2022-08-08 20:17:50', '2022-08-08 20:17:50'),
(430, 'CrytoBouct', 'meganmariecook@gmail.com', NULL, '89037758218', 'ছোট বিনিয়োগ দ্রুত টন ডলার আনতে পারেন.', 'আপনি রোবট ব্যবহার করা হলে ইন্টারনেট টাকা রোজগার সহজ. https://weify.echinat.de/weify', NULL, '2022-08-08 23:19:03', '2022-08-08 23:19:03'),
(431, 'CrytoBouct', 'xxplaygurlbunniexx@hotmail.com', NULL, '89034826501', 'টাকা, টাকা! রোবট দিয়ে টাকা আয়!', 'সমৃদ্ধ হয়ে আর্থিক বট বিশ্বাস. https://weify.echinat.de/weify', NULL, '2022-08-09 02:24:10', '2022-08-09 02:24:10'),
(432, 'CrytoBouct', 'acicciarelli@indy.rr.com', NULL, '89030308084', 'টাকা দরকার? আপনার বাড়িতে গিয়েই এটি উপার্জন.', 'এমনকি একটি শিশুর অর্থ উপার্জন করতে জানেন কিভাবে. এই রোবটটি আপনার যা প্রয়োজন! https://weify.echinat.de/weify', NULL, '2022-08-09 05:25:57', '2022-08-09 05:25:57'),
(433, 'CrytoBouct', 'tatiauna_a@yahoo.com', NULL, '89030172486', 'এখন আর্থিক বট আরম্ভ আদায় শুরু করার জন্য.', 'টাকা, টাকা! রোবট দিয়ে টাকা আয়! https://weify.echinat.de/weify', NULL, '2022-08-09 08:27:31', '2022-08-09 08:27:31'),
(434, 'CrytoBouct', 'jemimaqpuddleduck@gmail.com', NULL, '89035450215', 'এই রোবট আপনি টাকা আনতে পারেন 24/7.', 'এক ডলার কিছুই নয়, কিন্তু এটি বৃদ্ধি করতে পারেন $100 এখানে. https://weify.echinat.de/weify', NULL, '2022-08-09 11:31:51', '2022-08-09 11:31:51'),
(435, 'CrytoBouct', 'csalay1211@yahoo.com', NULL, '89031893838', 'আর্থিক স্বাধীনতা কি এই রোবট গ্যারান্টী বা নিশ্চয়তা দিচ্ছে.', 'আপনার টাকা কাজ এমনকি যখন আপনি ঘুম. https://weify.echinat.de/weify', NULL, '2022-08-09 14:35:31', '2022-08-09 14:35:31'),
(436, 'CrytoBouct', 'BRIANCALDWELL69@HOTMAIL.COM', NULL, '89032192337', 'এখন আর্থিক বট আরম্ভ আদায় শুরু করার জন্য.', 'আর্থিক স্বাধীনতা কি এই রোবট গ্যারান্টী বা নিশ্চয়তা দিচ্ছে. https://weify.echinat.de/weify', NULL, '2022-08-09 17:36:17', '2022-08-09 17:36:17'),
(437, 'CrytoBouct', 'debwms47@aol.com', NULL, '89037576352', 'সবচেয়ে সফল মানুষ ইতিমধ্যে রোবট ব্যবহার. আপনি কি?', 'রোজগার $ 1000 একটি দিন সহজ যদি আপনি এই আর্থিক রোবট ব্যবহার. https://weify.echinat.de/weify', NULL, '2022-08-09 20:37:19', '2022-08-09 20:37:19'),
(438, 'CrytoBouct', 'anna40004@hotmail.com', NULL, '89033399765', 'নতুন আর্থিক টুল পরীক্ষা করে দেখুন, যা আপনি সমৃদ্ধ করতে পারেন.', 'আর্থিক রোবট নেট সবচেয়ে কার্যকর আর্থিক হাতিয়ার! https://weify.echinat.de/weify', NULL, '2022-08-09 23:43:22', '2022-08-09 23:43:22'),
(439, 'CrytoBouct', 'kimbonick@gmail.com', NULL, '89035653594', 'আর কাজ করার দরকার নেই. শুধু রোবট চালু.', 'রোজগার $ 1000 একটি দিন সহজ যদি আপনি এই আর্থিক রোবট ব্যবহার. https://weify.echinat.de/weify', NULL, '2022-08-10 02:44:51', '2022-08-10 02:44:51'),
(440, 'CrytoBouct', 'miriamjennings@comcast.net', NULL, '89032368670', 'টাকা নেই? অনলাইনে আয় করুন', 'এই প্রোগ্রামের সাথে আপনার ল্যাপটপ একটি আর্থিক উপকরণ করুন. https://weify.echinat.de/weify', NULL, '2022-08-10 05:49:31', '2022-08-10 05:49:31'),
(441, 'CrytoBouct', 'd.awi.t.uc@gmail.com', NULL, '89037144556', 'আপনাকে বরখাস্ত করা হলে কোনও উদ্বেগ নেই অনলাইন কাজ.', 'সাফল্যের সূত্র পাওয়া যায়. এটি সম্পর্কে আরও জানুন. https://weify.echinat.de/weify', NULL, '2022-08-10 08:51:08', '2022-08-10 08:51:08'),
(442, 'CrytoBouct', 'teixeira.raquel@ymail.com', NULL, '89036256718', 'টাকা দরকার? সহজেই এখানে পাবেন?', 'আপনার মানিব্যাগ পুরু করতে দ্রুততম উপায় পাওয়া যায়. https://weify.echinat.de/weify', NULL, '2022-08-10 12:15:56', '2022-08-10 12:15:56'),
(443, 'CrytoBouct', 'johnlmeyers@yahoo.com', NULL, '89038151746', 'সেরা অনলাইন বিনিয়োগ টুল পাওয়া যায়. আরও জানুন!', 'শুধুমাত্র একটি ক্লিক সত্যিই দ্রুত আপনার টাকা বড় হয়ে যাবে. https://weify.echinat.de/weify', NULL, '2022-08-10 15:18:45', '2022-08-10 15:18:45'),
(444, 'CrytoBouct', 'skysnoopy1@verizon.net', NULL, '89034695340', 'আর্থিক রোবট ধনী মানুষের সেরা সহচর.', 'রোবট আপনার ডলার বিশ্বাস এবং এটি বৃদ্ধি কিভাবে দেখতে $100. https://weify.echinat.de/weify', NULL, '2022-08-10 18:26:42', '2022-08-10 18:26:42'),
(445, 'CrytoBouct', 'islandsurf614@gmail.com', NULL, '89037783042', 'অর্থ প্রয়োজন সবাই এই রোবট চেষ্টা করা উচিত.', 'টাকা নেই? এটা তাদের অনলাইন উপার্জন করা সহজ এখানে. https://weify.echinat.de/weify', NULL, '2022-08-10 21:29:38', '2022-08-10 21:29:38'),
(446, 'CrytoBouct', 'tanture.chen@gmail.com', NULL, '89030882742', 'টাকা নেই? অনলাইনে আয় করুন', 'আর্থিক রোবট পরিচালনা এবং আপনার আয় বৃদ্ধি করার জন্য একটি দুর্দান্ত উপায়. https://weify.rbertilsson.se/', NULL, '2022-08-11 20:46:27', '2022-08-11 20:46:27'),
(447, 'CrytoBouct', 'edwardfox48881@yahoo.com', NULL, '89033093382', 'সবাই সে এখন চায় যতটা উপার্জন করতে পারেন.', 'বিনিয়োগ ছাড়া বিশাল আয় পাওয়া যায়. https://weify.rbertilsson.se/', NULL, '2022-08-13 02:48:29', '2022-08-13 02:48:29'),
(448, 'CrytoBouct', 'Gianl811@msn.com', NULL, '89035064407', 'ওয়াও! এই রোবট একটি অনলাইন কর্মজীবনের জন্য একটি দুর্দান্ত শুরু.', 'আপনি রোবট ব্যবহার করা হলে ইন্টারনেট টাকা রোজগার সহজ. https://weify.rbertilsson.se/', NULL, '2022-08-14 09:07:51', '2022-08-14 09:07:51'),
(449, 'CrytoBouct', 'rforchhammer@gmail.com', NULL, '89032310268', 'আর্থিক রোবট পরিচালনা এবং আপনার আয় বৃদ্ধি করার জন্য একটি দুর্দান্ত উপায়.', 'এই প্রোগ্রামের সাথে আপনার ল্যাপটপ একটি আর্থিক উপকরণ করুন. https://weify.rbertilsson.se/', NULL, '2022-08-15 15:13:21', '2022-08-15 15:13:21'),
(450, 'CrytoBouct', 'kellylynnmchugh@gmail.com', NULL, '89039342236', 'এমনকি একটি শিশুর অর্থ উপার্জন করতে জানেন কিভাবে. আপনি কি?', 'আপনার টাকা সারা দিন আপনার জন্য কাজ করুন. https://weify.rbertilsson.se/', NULL, '2022-08-16 16:26:15', '2022-08-16 16:26:15'),
(451, 'CrytoBouct', 'murdockalicia17@gmail.com', NULL, '89037011107', 'এই রোবট ব্যবহার করে আপনি সমৃদ্ধ করতে সবচেয়ে ভাল উপায়.', 'অনলাইন বট আপনি সম্পদ ও সন্তুষ্টি আনতে হবে. https://weify.rbertilsson.se/', NULL, '2022-08-16 18:39:38', '2022-08-16 18:39:38'),
(452, 'CrytoBouct', 'sue.atkinson@portlock.com', NULL, '89034954888', 'টাকা নেই? অনলাইনে আয় করুন', 'আমরা কিভাবে আমাদের ভবিষ্যত সমৃদ্ধ করতে জানি এবং আপনি কি? https://weify.rbertilsson.se/', NULL, '2022-08-16 20:53:22', '2022-08-16 20:53:22'),
(453, 'CrytoBouct', 'Ndraugelis@gmail.com', NULL, '89033645111', 'রোবট উপার্জন করতে চায় প্রত্যেকের জন্য সবচেয়ে ভালো সমাধান.', 'রোবট আর্থিক স্বাধীনতা জন্য দেখায় যারা প্রত্যেকের জন্য সবচেয়ে ভাল উপায়. https://weify.rbertilsson.se/', NULL, '2022-08-16 23:31:08', '2022-08-16 23:31:08'),
(454, 'CrytoBouct', 'skye@safeaccess.com', NULL, '89039984233', 'অনলাইনে অর্থ উপার্জন করুন, বাড়িতে এই ঠান্ডা শীতকালে স্থিত.', 'আপনার টাকা কাজ এমনকি যখন আপনি ঘুম. https://weify.rbertilsson.se/', NULL, '2022-08-17 01:44:06', '2022-08-17 01:44:06'),
(455, 'CrytoBouct', 'cristina.ramirez000@gmail.com', NULL, '89033930765', 'আয়ের জন্য উন্মুখ? এটি অনলাইন পান.', 'একটি চমত্কার লাভ করতে নতুন উপায় দেখুন. https://weify.rbertilsson.se/', NULL, '2022-08-17 04:05:50', '2022-08-17 04:05:50'),
(456, 'CrytoBouct', 'hoa.anh25@gmail.com', NULL, '89033091198', 'সবাই সে এখন চায় যতটা উপার্জন করতে পারেন.', 'তারা এই রোবট ব্যবহার, কারণ ধনী মানুষ ধনী. https://weify.rbertilsson.se/', NULL, '2022-08-17 06:23:02', '2022-08-17 06:23:02'),
(457, 'CrytoBouct', 'regularjoeuk@hotmail.com', NULL, '89033356185', 'অনলাইন আর্থিক রোবট সাফল্যের আপনার চাবিকাঠি.', 'এমনকি একটি শিশুর অর্থ উপার্জন করতে জানেন কিভাবে. এই রোবটটি আপনার যা প্রয়োজন! https://weify.rbertilsson.se/', NULL, '2022-08-17 08:40:37', '2022-08-17 08:40:37'),
(458, 'CrytoBouct', 'md80tooch@yahoo.com', NULL, '89039043572', 'এই আর্থিক রোবট ব্যবহার করে ভবিষ্যতে নিজেকে সমৃদ্ধ করুন.', 'অর্থ উপার্জনের সবচেয়ে সহজ উপায় সম্পর্কে সন্ধান করুন. https://weify.rbertilsson.se/', NULL, '2022-08-17 10:59:37', '2022-08-17 10:59:37'),
(459, 'CrytoBouct', 'rubberduckz1997@gmail.com', NULL, '89033845519', 'এখন আর চাকরি খোঁজার দরকার নেই৷ অনলাইন কাজ.', 'আয়ের জন্য উন্মুখ? এটি অনলাইন পান. https://weify.rbertilsson.se/', NULL, '2022-08-17 13:17:46', '2022-08-17 13:17:46'),
(460, 'CrytoBouct', 'sadbeard@nortel.com', NULL, '89039954522', 'ছোট বিনিয়োগ দ্রুত টন ডলার আনতে পারেন.', 'অনলাইনে অর্থ উপার্জন করুন, বাড়িতে এই ঠান্ডা শীতকালে স্থিত. https://weify.rbertilsson.se/', NULL, '2022-08-17 15:37:24', '2022-08-17 15:37:24'),
(461, 'CrytoBouct', 'Cookiemnstr13@yahoo.com', NULL, '89031639435', '# 1 নেট আর্থিক বিশেষজ্ঞ! নতুন রোবট দেখুন', 'আপনার টাকা কাজ এমনকি যখন আপনি ঘুম. https://weify.rbertilsson.se/', NULL, '2022-08-17 18:00:33', '2022-08-17 18:00:33'),
(462, 'CrytoBouct', 'hbbell42@yahoo.com', NULL, '89037650768', 'অনলাইন বট আপনি সম্পদ ও সন্তুষ্টি আনতে হবে.', 'নতুন আর্থিক টুল পরীক্ষা করে দেখুন, যা আপনি সমৃদ্ধ করতে পারেন. https://weify.rbertilsson.se/', NULL, '2022-08-17 20:17:02', '2022-08-17 20:17:02'),
(463, 'CrytoBouct', 'mandaspranger@gmail.com', NULL, '89035954147', 'আরো কিছু টাকা প্রয়োজন? রোবট সত্যিই দ্রুত তাদের উপার্জন করতে হবে.', 'প্রচেষ্টা ছাড়া অতিরিক্ত অর্থ উপার্জন. https://weify.rbertilsson.se/', NULL, '2022-08-17 22:31:23', '2022-08-17 22:31:23'),
(464, 'CrytoBouct', 'gabbylucas0008@yahoo.com', NULL, '89033655189', 'বিনিয়োগ $ 1 আজ করতে $ 1000 আগামীকাল.', 'প্রচেষ্টা ছাড়া অতিরিক্ত অর্থ উপার্জন. https://weify.rbertilsson.se/', NULL, '2022-08-18 00:45:09', '2022-08-18 00:45:09'),
(465, 'CrytoBouct', 'ryantbaskin@gmail.com', NULL, '89031719350', 'সেরা অনলাইন বিনিয়োগ টুল পাওয়া যায়. আরও জানুন!', 'এই প্রোগ্রামের সাথে আপনার ল্যাপটপ একটি আর্থিক উপকরণ করুন. https://weify.rbertilsson.se/', NULL, '2022-08-18 02:59:50', '2022-08-18 02:59:50'),
(466, 'CrytoBouct', 'sabrinaleichtmanlevine@gmail.com', NULL, '89036225137', 'হাজার হাজার টাকা আয় করুন আর্থিক রোবট আপনাকে এটি করতে সহায়তা করবে!', 'অতিরিক্ত আয় এই রোবট ব্যবহার করে প্রত্যেকের জন্য উপলব্ধ. https://weify.rbertilsson.se/', NULL, '2022-08-18 05:14:32', '2022-08-18 05:14:32'),
(467, 'CrytoBouct', 'digitan@naver.com', NULL, '89039439090', 'এই রোবট ব্যবহার করে আপনি সমৃদ্ধ করতে সবচেয়ে ভাল উপায়.', 'অনলাইন কাজ আপনি একটি চমত্কার লাভ আনতে পারেন. https://weify.rbertilsson.se/', NULL, '2022-08-18 06:28:10', '2022-08-18 06:28:10'),
(468, 'CrytoBouct', 'sweet_ti757@yahoo.com', NULL, '89035323597', 'আমরা জানি কিভাবে ধনী হতে হয় এবং আপনি কি?', 'বিনিয়োগ ছাড়া বিশাল আয় পাওয়া যায়, এখন! https://weify.rbertilsson.se/', NULL, '2022-08-18 08:41:29', '2022-08-18 08:41:29'),
(469, 'CrytoBouct', 'kkaren1@juno.com', NULL, '89031262279', 'এখন আর চাকরি খোঁজার দরকার নেই৷ অনলাইন কাজ.', 'আপনার টাকা কাজ এমনকি যখন আপনি ঘুম. https://weify.rbertilsson.se/', NULL, '2022-08-18 10:54:40', '2022-08-18 10:54:40'),
(470, 'CrytoBouct', 's.misolongin@hotmail.com', NULL, '89035551843', 'অর্থ উপার্জনের সবচেয়ে সহজ উপায় সম্পর্কে সন্ধান করুন.', 'প্রচেষ্টা ছাড়া অতিরিক্ত অর্থ উপার্জন. https://weify.rbertilsson.se/', NULL, '2022-08-18 15:20:08', '2022-08-18 15:20:08'),
(471, 'CrytoBouct', 'mayra-evangelista@hotmail.com', NULL, '89039315667', 'এখানে অনলাইনে কাজ প্রতি সপ্তাহে হাজার হাজার করুন.', '# 1 নেট আর্থিক বিশেষজ্ঞ! নতুন রোবট দেখুন https://weify.rbertilsson.se/', NULL, '2022-08-18 17:33:32', '2022-08-18 17:33:32'),
(472, 'CrytoBouct', 'aldenorthmm@yahoo.com', NULL, '89037296633', 'এখানে অনলাইনে কাজ প্রতি সপ্তাহে হাজার হাজার করুন.', 'আর কাজ করার দরকার নেই. শুধু রোবট চালু. https://weify.rbertilsson.se/', NULL, '2022-08-18 19:51:31', '2022-08-18 19:51:31'),
(473, 'CrytoBouct', 'woodstahannah3@gmail.com', NULL, '89035901195', 'টাকা নেই? এটা তাদের অনলাইন উপার্জন করা সহজ এখানে.', 'আপনার কম্পিউটার আপনি উপকরণ আদায় করা করুন. https://weify.rbertilsson.se/', NULL, '2022-08-18 22:04:26', '2022-08-18 22:04:26'),
(474, 'CrytoBouct', 'pityshtolze@ymail.org', NULL, '89037447420', 'ওয়াও! এই রোবট একটি অনলাইন কর্মজীবনের জন্য একটি দুর্দান্ত শুরু.', 'সেরা অনলাইন বিনিয়োগ টুল পাওয়া যায়. আরও জানুন! https://weify.rbertilsson.se/', NULL, '2022-08-19 00:20:13', '2022-08-19 00:20:13'),
(475, 'CrytoBouct', 'addiesmom81506@yahoo.com', NULL, '89035469911', 'টাকা দরকার? সহজেই এখানে পাবেন?', 'আরো কিছু টাকা প্রয়োজন? রোবট সত্যিই দ্রুত তাদের উপার্জন করতে হবে. https://weify.escueladelcambio.es/', NULL, '2022-08-19 04:46:48', '2022-08-19 04:46:48'),
(476, 'CrytoBouct', 'goodn.e.wsm.ax@gmail.com', NULL, '89033392992', 'রোবট আনতে দিন আপনি টাকা যখন আপনি বিশ্রাম.', 'ওয়াও! এই রোবট একটি অনলাইন কর্মজীবনের জন্য একটি দুর্দান্ত শুরু. https://weify.escueladelcambio.es/', NULL, '2022-08-19 07:01:25', '2022-08-19 07:01:25'),
(477, 'CrytoBouct', 'jx.d1.47.m.n.bv.3.6.9c.xz9514@gmail.com', NULL, '89031270782', 'আপনাকে বরখাস্ত করা হলে কোনও উদ্বেগ নেই অনলাইন কাজ.', 'আর্থিক স্বাধীনতা কি এই রোবট গ্যারান্টী বা নিশ্চয়তা দিচ্ছে. https://weify.escueladelcambio.es/', NULL, '2022-08-19 09:15:08', '2022-08-19 09:15:08'),
(478, 'CrytoBouct', 'Joemoney3248@yahoo.com', NULL, '89034772587', 'আর্থিক রোবট আপনার জন্য কাজ করে, এমনকি যখন আপনি ঘুম.', 'আয়ের জন্য উন্মুখ? এটি অনলাইন পান. https://weify.escueladelcambio.es/', NULL, '2022-08-19 11:28:28', '2022-08-19 11:28:28'),
(479, 'CrytoBouct', 'rysmomma411@yahoo.com', NULL, '89030179769', 'টাকা দরকার? আর্থিক রোবট আপনার সমাধান.', 'রোবট চালু করুন এবং এটি আপনি টাকা আনতে দিন. https://weify.escueladelcambio.es/', NULL, '2022-08-19 13:42:05', '2022-08-19 13:42:05'),
(480, 'CrytoBouct', 'otisboatus@hotmail.com', NULL, '89037149662', 'আমরা জানি কিভাবে ধনী হতে হয় এবং আপনি কি?', 'অর্থ উপার্জনের সবচেয়ে সহজ উপায় সম্পর্কে সন্ধান করুন. https://weify.escueladelcambio.es/', NULL, '2022-08-19 16:00:27', '2022-08-19 16:00:27'),
(481, 'CrytoBouct', 'lovelysmile2@inbox.com', NULL, '89032617706', 'মাত্র এক ক্লিক $1000 মধ্যে আপনি ডলার চালু করতে পারেন.', 'নগদ প্রয়োজন? এই রোবট চালু করুন এবং এটি করতে পারেন তা দেখতে. https://weify.escueladelcambio.es/', NULL, '2022-08-19 18:15:02', '2022-08-19 18:15:02'),
(482, 'CrytoBouct', 'heartayen08@yahoo.com', NULL, '89036277066', 'ওয়াও! এটি একটি আর্থিক স্বাধীনতা জন্য একটি দ্রুততম উপায়.', 'টাকা দরকার? আর্থিক রোবট আপনার সমাধান. https://weify.escueladelcambio.es/', NULL, '2022-08-19 20:27:59', '2022-08-19 20:27:59'),
(483, 'CrytoBouct', 'loc.nql@gmail.com', NULL, '89036733380', 'আর্থিক রোবট আপনার সাফল্য সূত্র পাওয়া যায় না. এটি সম্পর্কে আরও জানুন.', 'তিনি এই বট মামলা চায় সবাই যতটা উপার্জন করতে পারেন. https://weify.escueladelcambio.es/', NULL, '2022-08-19 22:42:27', '2022-08-19 22:42:27'),
(484, 'CrytoBouct', 'philiphargrove@bellsouth.net', NULL, '89039315718', 'রোবট আর্থিক স্বাধীনতা জন্য দেখায় যারা প্রত্যেকের জন্য সবচেয়ে ভাল উপায়.', 'আর্থিক রোবট আপনি টাকা আনয়ন রাখে যখন আপনি ঘুম. https://weify.escueladelcambio.es/', NULL, '2022-08-20 00:55:38', '2022-08-20 00:55:38'),
(485, 'CrytoBouct', 'Edwintollan@mail.com', NULL, '89037082234', 'টাকা, টাকা! রোবট দিয়ে টাকা আয়!', 'অনলাইন আর্থিক রোবট সাফল্যের আপনার চাবিকাঠি. https://weify.escueladelcambio.es/', NULL, '2022-08-20 03:07:39', '2022-08-20 03:07:39'),
(486, 'CrytoBouct', 'p_kekade@yahoo.com', NULL, '89032150496', 'স্বয়ংক্রিয় রোবট আর্থিক স্বাধীনতার জন্য সেরা শুরু.', 'আপনি অনলাইনে অর্থ উপার্জন করতে চান সবকিছু কিনুন. https://weify.escueladelcambio.es/', NULL, '2022-08-20 05:21:07', '2022-08-20 05:21:07'),
(487, 'CrytoBouct', 'rhemanat@yahoo.com', NULL, '89038185095', 'তারা এই রোবট ব্যবহার, কারণ ধনী মানুষ ধনী.', 'স্বয়ংক্রিয় রোবট আর্থিক স্বাধীনতার জন্য সেরা শুরু. https://weify.escueladelcambio.es/', NULL, '2022-08-20 07:35:45', '2022-08-20 07:35:45'),
(488, 'CrytoBouct', 'AZBSBL21@aol.com', NULL, '89030064377', 'প্রতিটি আপনার ডলার মধ্যে চালু করতে পারেন $100 আপনি লাঞ্চ পরে এই রোবট.', 'রোবট আর্থিক স্বাধীনতা জন্য দেখায় যারা প্রত্যেকের জন্য সবচেয়ে ভাল উপায়. https://weify.escueladelcambio.es/', NULL, '2022-08-20 12:00:50', '2022-08-20 12:00:50'),
(489, 'CrytoBouct', 'johnnyrivera836822@yahoo.com', NULL, '89037793949', 'এটা আরো টাকা পেতে রোবট আরম্ভ শ্রেষ্ঠ সময়.', 'বিনিয়োগ $ 1 আজ করতে $ 1000 আগামীকাল. https://weify.escueladelcambio.es/', NULL, '2022-08-20 16:48:58', '2022-08-20 16:48:58'),
(490, 'CrytoBouct', 'abidin886@yahoo.com', NULL, '89030736385', 'অনলাইন আর্থিক রোবট সাফল্যের আপনার চাবিকাঠি.', 'মনোযোগ! আর্থিক রোবট আপনি লক্ষ লক্ষ আনতে পারে! https://weify.escueladelcambio.es/', NULL, '2022-08-20 19:21:09', '2022-08-20 19:21:09'),
(491, 'CrytoBouct', 'sqimyrrizwm@hotmails.com', NULL, '89031382548', 'আর্থিক রোবট আপনার # 1 অর্থ উপার্জন বিশেষজ্ঞ.', 'আর্থিক রোবট নেট সবচেয়ে কার্যকর আর্থিক হাতিয়ার! https://weify.escueladelcambio.es/', NULL, '2022-08-20 21:36:03', '2022-08-20 21:36:03'),
(492, 'CrytoBouct', 'thelastsurvivoray@gmail.com', NULL, '89039953731', 'অর্থ উপার্জনের সহজ উপায় খুঁজছেন? আর্থিক রোবট দেখুন', '# 1 নেট আর্থিক বিশেষজ্ঞ! নতুন রোবট দেখুন https://weify.escueladelcambio.es/', NULL, '2022-08-20 23:47:47', '2022-08-20 23:47:47'),
(493, 'CrytoBouct', 'rosalvalujano@yahoo.com', NULL, '89032331284', 'আর্থিক রোবট সবাই স্থায়িত্ব এবং আয় গ্যারান্টী বা নিশ্চয়তা দিচ্ছে.', 'আপনার কম্পিউটার আপনি উপকরণ আদায় করা করুন. https://weify.escueladelcambio.es/', NULL, '2022-08-21 02:03:35', '2022-08-21 02:03:35'),
(494, 'CrytoBouct', 'comalitos123@hotmail.com', NULL, '89039098901', 'স্বাধীনতা সবারই যা প্রয়োজন', 'করা $ 1000 থেকে $ 1 কয়েক মিনিটের মধ্যে. আর্থিক রোবট চালু করুন https://weify.escueladelcambio.es/', NULL, '2022-08-21 04:20:34', '2022-08-21 04:20:34'),
(495, 'CrytoBouct', 'tryn2bdbest@yahoo.com', NULL, '89034591533', 'সবাই সে এখন চায় যতটা উপার্জন করতে পারেন.', 'এখানে অনলাইনে কাজ প্রতি সপ্তাহে হাজার হাজার করুন. https://weify.escueladelcambio.es/', NULL, '2022-08-21 06:38:20', '2022-08-21 06:38:20'),
(496, 'CrytoBouct', 'kris.wills@ymail.com', NULL, '89032669076', 'অনলাইন কাজ আপনি একটি চমত্কার লাভ আনতে পারেন.', 'টাকা দরকার? সহজেই এখানে পাবেন? https://weify.escueladelcambio.es/', NULL, '2022-08-21 09:13:37', '2022-08-21 09:13:37'),
(497, 'CrytoBouct', 'Jedirampage@gmail.com', NULL, '89038579119', 'অনলাইন আয় আপনি আসা সত্য স্বপ্ন করতে সবচেয়ে সহজ পদ্ধিতি হল উপায়.', 'রোবট উপার্জন করতে চায় প্রত্যেকের জন্য সবচেয়ে ভালো সমাধান. https://weify.escueladelcambio.es/', NULL, '2022-08-21 11:28:08', '2022-08-21 11:28:08'),
(498, 'CrytoBouct', 'MEMEMEEBARBIE@YAHOO.COM', NULL, '89030231239', 'আপনার মানিব্যাগ পুরু করতে দ্রুততম উপায় পাওয়া যায়.', 'তিনি এই বট মামলা চায় সবাই যতটা উপার্জন করতে পারেন. https://weify.escueladelcambio.es/', NULL, '2022-08-21 13:48:17', '2022-08-21 13:48:17'),
(499, 'CrytoBouct', 'liosemchania@earthlink.net', NULL, '89036712223', 'আর্থিক রোবট আপনার সাফল্য সূত্র পাওয়া যায় না. এটি সম্পর্কে আরও জানুন.', 'অর্থ প্রয়োজন সবাই এই রোবট চেষ্টা করা উচিত. https://weify.escueladelcambio.es/', NULL, '2022-08-21 16:04:22', '2022-08-21 16:04:22'),
(500, 'CrytoBouct', 'joewod32@yahoo.com', NULL, '89033324398', 'এখানে অর্থ উপার্জন যারা সফল মানুষ সমাজে যোগ দিন.', 'আর্থিক রোবট সবাই স্থায়িত্ব এবং আয় গ্যারান্টী বা নিশ্চয়তা দিচ্ছে. https://weify.escueladelcambio.es/', NULL, '2022-08-21 18:21:24', '2022-08-21 18:21:24'),
(501, 'CrytoBouct', 'nnankin@gmail.com', NULL, '89037508920', 'নতুন আর্থিক টুল পরীক্ষা করে দেখুন, যা আপনি সমৃদ্ধ করতে পারেন.', 'এমনকি একটি শিশু কিভাবে করতে জানে $ 100 আজ. https://weify.escueladelcambio.es/', NULL, '2022-08-21 20:37:15', '2022-08-21 20:37:15'),
(502, 'CrytoBouct', 'ashtnnr@gmail.com', NULL, '89038975931', 'আপনার টাকা হত্তয়া রাখা 24/7 আপনি আর্থিক রোবট ব্যবহার করা হলে.', 'প্রতিদিন শত শত ব্যাক করতে শিখুন https://weify.escueladelcambio.es/', NULL, '2022-08-22 01:07:32', '2022-08-22 01:07:32'),
(503, 'CrytoBouct', 'quansding@yahoo.com', NULL, '89035083544', 'আর্থিক রোবট আপনি টাকা আনয়ন রাখে যখন আপনি ঘুম.', 'আপনি রোবট ব্যবহার করা হলে ইন্টারনেট টাকা রোজগার সহজ. https://weify.escueladelcambio.es/', NULL, '2022-08-22 03:34:18', '2022-08-22 03:34:18'),
(504, 'CrytoBouct', 'fzhxgdgp@freelymail.com', NULL, '89037730867', 'সবাই সে এখন চায় যতটা উপার্জন করতে পারেন.', 'অনলাইন কাজ আপনি একটি চমত্কার লাভ আনতে পারেন. https://weify.escueladelcambio.es/', NULL, '2022-08-22 05:54:13', '2022-08-22 05:54:13'),
(505, 'CrytoBouct', 'sgggavin@talk21.com', NULL, '89035304595', 'টাকা নেই? এটা তাদের অনলাইন উপার্জন করা সহজ এখানে.', 'নগদ প্রয়োজন? এই রোবট চালু করুন এবং এটি করতে পারেন তা দেখতে. https://weify.escueladelcambio.es/', NULL, '2022-08-22 08:10:11', '2022-08-22 08:10:11'),
(506, 'CrytoBouct', 'ts1000@yahoo.com', NULL, '89036317263', 'রোবট এক ক্লিক আপনি হাজার হাজার ডলার আনতে পারেন.', 'টাকা, টাকা! রোবট দিয়ে টাকা আয়! https://weify.escueladelcambio.es/', NULL, '2022-08-22 10:27:19', '2022-08-22 10:27:19'),
(507, 'CrytoBouct', 'yliaen@gmail.com', NULL, '89034629324', 'এমনকি একটি শিশু এই রোবট সাহায্যে আজ $100 করতে জানেন কিভাবে.', 'আমরা কিভাবে আমাদের ভবিষ্যত সমৃদ্ধ করতে জানি এবং আপনি কি? https://weify.escueladelcambio.es/', NULL, '2022-08-22 12:42:48', '2022-08-22 12:42:48'),
(508, 'CrytoBouct', 'fordfamily07@icloud.com', NULL, '89035394989', 'আর্থিক রোবট আপনি টাকা আনয়ন রাখে যখন আপনি ঘুম.', 'টাকা নেই? অনলাইনে আয় করুন http://go.tazalus.com/096s', NULL, '2022-08-22 15:01:01', '2022-08-22 15:01:01'),
(509, 'CrytoBouct', 'grace_marie7@yahoo.com', NULL, '89034918832', 'চালু $1 মধ্যে $ 100 অবিলম্বে. আর্থিক রোবট ব্যবহার করুন', 'শুধু বাড়িতে বসে ডলার করুন. http://go.tazalus.com/096s', NULL, '2022-08-22 17:15:16', '2022-08-22 17:15:16'),
(510, 'CrytoBouct', 'garcuacesar@ymail.com', NULL, '89039360999', 'ওয়াও! এটি একটি আর্থিক স্বাধীনতা জন্য একটি দ্রুততম উপায়.', '# 1 নেট আর্থিক বিশেষজ্ঞ! নতুন রোবট দেখুন http://go.tazalus.com/096s', NULL, '2022-08-22 19:26:46', '2022-08-22 19:26:46'),
(511, 'CrytoBouct', 'dhempfling@gmail.com', NULL, '89030149808', 'আর কাজ করার দরকার নেই. শুধু রোবট চালু.', 'অর্থ প্রয়োজন সবাই এই রোবট চেষ্টা করা উচিত. http://go.tazalus.com/096s', NULL, '2022-08-22 21:59:45', '2022-08-22 21:59:45'),
(512, 'CrytoBouct', 'sorinaromano@yahoo.com', NULL, '89032427812', 'আর্থিক রোবট পরিচালনা এবং আপনার আয় বৃদ্ধি করার জন্য একটি দুর্দান্ত উপায়.', 'এটা আরো টাকা পেতে রোবট আরম্ভ শ্রেষ্ঠ সময়. http://go.tazalus.com/096s', NULL, '2022-08-23 00:13:57', '2022-08-23 00:13:57'),
(513, 'CrytoBouct', 'ynayampally@gmail.com', NULL, '89036707561', 'এই রোবট আপনি টাকা আনতে পারেন 24/7.', 'হাজার হাজার টাকা আয় করুন কিছুই দিতে. http://go.tazalus.com/096s', NULL, '2022-08-23 02:26:31', '2022-08-23 02:26:31'),
(514, 'CrytoBouct', 'martinsonmeliya@yahoo.com', NULL, '89033211643', 'আপনি রোবট চালু করার সময় আর কাজ করার দরকার নেই!', 'আর্থিক রোবট আপনার সাফল্য সূত্র পাওয়া যায় না. এটি সম্পর্কে আরও জানুন. http://go.tazalus.com/096s', NULL, '2022-08-23 04:44:00', '2022-08-23 04:44:00'),
(515, 'CrytoBouct', 'hlgordy@hotmail.com', NULL, '89031223649', 'প্রচেষ্টা ছাড়া অতিরিক্ত অর্থ উপার্জন.', 'আর কাজ করার দরকার নেই. শুধু রোবট চালু. http://go.tazalus.com/096s', NULL, '2022-08-23 06:14:08', '2022-08-23 06:14:08'),
(516, 'CrytoBouct', 'annettebilgin@me.com', NULL, '89037829474', 'স্বয়ংক্রিয় বট পরীক্ষা করে দেখুন, যা আপনার জন্য কাজ করে 24/7.', 'বিনিয়োগ ছাড়া বিশাল আয় পাওয়া যায়, এখন! http://go.tazalus.com/096s', NULL, '2022-08-23 08:32:04', '2022-08-23 08:32:04'),
(517, 'CrytoBouct', 'pradeepanc@hotmail.com', NULL, '89031138455', 'আজ অর্থ উপার্জন শুরু করার জন্য সেরা বিনিয়োগ যন্ত্র চালু করুন.', 'অর্থ উপার্জন করুন 24/7 কোন প্রচেষ্টা এবং দক্ষতা ছাড়া. http://go.tazalus.com/096s', NULL, '2022-08-23 10:50:29', '2022-08-23 10:50:29'),
(518, 'CrytoBouct', 'ilarxunmuxun@hotmail.com', NULL, '89034422386', 'আর্থিক রোবট পরিচালনা এবং আপনার আয় বৃদ্ধি করার জন্য একটি দুর্দান্ত উপায়.', 'আপনার টাকা সারা দিন আপনার জন্য কাজ করুন. http://go.tazalus.com/096s', NULL, '2022-08-23 13:17:51', '2022-08-23 13:17:51'),
(519, 'CrytoBouct', 'ryanandlaura@telus.net', NULL, '89034089190', 'অনলাইন আয় আর্থিক স্বাধীনতার জন্য সবচেয়ে সহজ পদ্ধিতি হল উপায়.', 'টাকা দরকার? আপনার বাড়িতে গিয়েই এটি উপার্জন. http://go.tazalus.com/096s', NULL, '2022-08-23 15:37:24', '2022-08-23 15:37:24'),
(520, 'CrytoBouct', 'ruthlessblade42@gmail.com', NULL, '89039368011', 'টাকা নেই? অনলাইনে আয় করুন', 'রোবট আর্থিক স্বাধীনতা জন্য দেখায় যারা প্রত্যেকের জন্য সবচেয়ে ভাল উপায়. http://go.tazalus.com/096s', NULL, '2022-08-23 17:56:24', '2022-08-23 17:56:24'),
(521, 'CrytoBouct', 'slsa4879@brealynnvideos.com', NULL, '89035131801', 'এক ডলার কিছুই নয়, কিন্তু এটি বৃদ্ধি করতে পারেন $100 এখানে.', 'আপনার কম্পিউটার আপনি উপকরণ আদায় করা করুন. http://go.tazalus.com/096s', NULL, '2022-08-23 20:15:27', '2022-08-23 20:15:27'),
(522, 'CrytoBouct', 'Billy_King27@yahoo.com', NULL, '89030292369', 'প্রচেষ্টা ছাড়া অতিরিক্ত অর্থ উপার্জন.', 'টাকা নেই? এটা তাদের অনলাইন উপার্জন করা সহজ এখানে. http://go.tazalus.com/096s', NULL, '2022-08-23 22:32:44', '2022-08-23 22:32:44'),
(523, 'CrytoBouct', 'tim.neal3@btinternet.com', NULL, '89038590008', 'রোবট চালু করুন এবং এটি আপনি টাকা আনতে দিন.', 'টাকা দরকার? সহজেই এখানে পাবেন? http://go.tazalus.com/096s', NULL, '2022-08-24 03:01:14', '2022-08-24 03:01:14'),
(524, 'CrytoBouct', 'haurefepe@2008isites.net', NULL, '89032540968', 'বিনিয়োগ ছাড়া বিশাল আয় পাওয়া যায়.', 'অনলাইন বট আপনি সম্পদ ও সন্তুষ্টি আনতে হবে. http://go.tazalus.com/096s', NULL, '2022-08-24 05:15:04', '2022-08-24 05:15:04'),
(525, 'CrytoBouct', 'tony_the_hair@hotmail.com', NULL, '89036931081', 'একটি আর্থিক স্বাধীনতা জন্য দ্রুততম উপায় সম্পর্কে জানতে.', 'অর্থ উপার্জন খুব সহজ যদি আপনি আর্থিক রোবট ব্যবহার. http://go.tazalus.com/096s', NULL, '2022-08-24 07:26:30', '2022-08-24 07:26:30'),
(526, 'CrytoBouct', 'LevanRozomashvili@gmail.com', NULL, '89031583715', 'আর্থিক রোবট আপনি টাকা আনয়ন রাখে যখন আপনি ঘুম.', 'আমরা ধনী হতে দ্রুততম উপায় খুঁজে পেয়েছি. এটা খুঁজে বের কর এখানে. http://go.tazalus.com/096s', NULL, '2022-08-24 09:42:34', '2022-08-24 09:42:34'),
(527, 'CrytoBouct', 'redneck809@gmail.com', NULL, '89033818597', 'আপনি এই রোবট ব্যবহার করা হলে আপনার কম্পিউটার আপনি অতিরিক্ত আয় আনতে পারেন.', 'এক ডলার কিছুই নয়, কিন্তু এটি বৃদ্ধি করতে পারেন $100 এখানে. http://go.tazalus.com/096s', NULL, '2022-08-24 14:09:02', '2022-08-24 14:09:02'),
(528, 'CrytoBouct', 's.t.a.c.ym.wan.ia.wski@gmail.com', NULL, '89037960045', 'একটি আর্থিক স্বাধীনতা জন্য দ্রুততম উপায় সম্পর্কে জানতে.', 'প্রচেষ্টা এবং দক্ষতা ছাড়া অতিরিক্ত অর্থ উপার্জন. http://go.tazalus.com/096s', NULL, '2022-08-24 16:20:21', '2022-08-24 16:20:21'),
(529, 'CrytoBouct', 'scoophot73@yahoo.com', NULL, '89037139278', 'প্রচেষ্টা এবং দক্ষতা ছাড়া অতিরিক্ত অর্থ উপার্জন.', 'প্রতিটি আপনার ডলার মধ্যে চালু করতে পারেন $100 আপনি লাঞ্চ পরে এই রোবট. http://go.tazalus.com/096s', NULL, '2022-08-24 20:43:47', '2022-08-24 20:43:47'),
(530, 'CrytoBouct', 'arianneong@yahoo.com', NULL, '89036841981', 'আপনার টাকা এই রোবট সঙ্গে রাজধানী মধ্যে হত্তয়া যাক.', 'প্রত্যেকের জন্য অতিরিক্ত আয়. http://go.tazalus.com/096s', NULL, '2022-08-24 22:57:11', '2022-08-24 22:57:11'),
(531, 'CrytoBouct', 'robinlanzone@gmail.com', NULL, '89035529243', 'তিনি এই বট মামলা চায় সবাই যতটা উপার্জন করতে পারেন.', 'আর্থিক রোবট ধনী মানুষের সেরা সহচর. https://riviello.es/promo', NULL, '2022-08-26 15:10:50', '2022-08-26 15:10:50'),
(532, 'Md. Zaber ul alam Rocky', 'zaber19ul91alam@gmail.com', NULL, '01832872018', 'Survey', 'I WANT TO LEARN ABOUT LAND SURVEY AND ALL THE LESSON WHICH IS RELATED TO LAND SALE,BUY,LEDGER,STAMP ETC', NULL, '2022-08-26 16:43:41', '2022-08-26 16:43:41'),
(533, 'CrytoBouct', 'yoakemc2000@yahoo.com', NULL, '89037856223', 'প্রতি সপ্তাহে হাজার হাজার ডলার উপার্জন শুরু করুন', 'এমনকি একটি শিশু এই রোবট সাহায্যে আজ $100 করতে জানেন কিভাবে. https://riviello.es/promo', NULL, '2022-08-26 17:22:54', '2022-08-26 17:22:54'),
(534, 'CrytoBouct', 'danigyrl@mac.com', NULL, '89030505462', 'আপনার টাকা এই রোবট সঙ্গে রাজধানী মধ্যে হত্তয়া যাক.', 'আজ অর্থ উপার্জন শুরু করার জন্য সেরা বিনিয়োগ যন্ত্র চালু করুন. https://riviello.es/promo', NULL, '2022-08-26 19:38:13', '2022-08-26 19:38:13'),
(535, 'CrytoBouct', 'dudley.craig@yahoo.com', NULL, '89035888799', 'বিনিয়োগ ছাড়া বিশাল আয় পাওয়া যায়, এখন!', 'প্রতিদিন শত শত ব্যাক করতে শিখুন https://riviello.es/promo', NULL, '2022-08-26 21:48:42', '2022-08-26 21:48:42'),
(536, 'CrytoBouct', 'celinaaleman@live.com', NULL, '89039535186', 'এমনকি একটি শিশুর অর্থ উপার্জন করতে জানেন কিভাবে. আপনি কি?', 'টাকা দরকার? সহজেই এখানে পান! শুধু রোবট আরম্ভ করার জন্য এই টিপুন. https://riviello.es/promo', NULL, '2022-08-27 00:07:14', '2022-08-27 00:07:14'),
(537, 'CrytoBouct', 'lancyny@yahoo.com', NULL, '89038206367', 'বিনিয়োগ $ 1 আজ করতে $ 1000 আগামীকাল.', 'এখন আর চাকরি খোঁজার দরকার নেই৷ অনলাইন কাজ. https://riviello.es/promo', NULL, '2022-08-27 02:20:38', '2022-08-27 02:20:38'),
(538, 'CrytoBouct', 'Pixiedust121088@yahoo.com', NULL, '89036912833', 'আপনি রোবট দিয়ে বিনিয়োগ করার সময় আপনার অর্থ বৃদ্ধি দেখুন.', 'আর্থিক রোবট আপনার জন্য কাজ করে, এমনকি যখন আপনি ঘুম. https://riviello.es/promo', NULL, '2022-08-27 18:39:00', '2022-08-27 18:39:00'),
(539, 'CrytoBouct', 'goodiegoodie44@hotmail.com', NULL, '89033299338', 'আপনার টাকা কাজ এমনকি যখন আপনি ঘুম.', 'হাজার হাজার টাকা আয় করুন কিছুই দিতে. https://riviello.es/promo', NULL, '2022-08-27 20:53:38', '2022-08-27 20:53:38'),
(540, 'CrytoBouct', 'tigergirl8k3@yahoo.com', NULL, '89039958805', 'টাকা নেই? এটা তাদের অনলাইন উপার্জন করা সহজ এখানে.', 'শুধুমাত্র একটি ক্লিক সত্যিই দ্রুত আপনার টাকা বড় হয়ে যাবে. https://riviello.es/promo', NULL, '2022-08-27 23:05:25', '2022-08-27 23:05:25'),
(541, 'CrytoBouct', 'tnduszzzz@naver.com', NULL, '89036350450', 'আর্থিক রোবট আপনার সাফল্য সূত্র পাওয়া যায় না. এটি সম্পর্কে আরও জানুন.', 'চালু $1 মধ্যে $ 100 অবিলম্বে. আর্থিক রোবট ব্যবহার করুন https://riviello.es/promo', NULL, '2022-08-28 01:17:34', '2022-08-28 01:17:34'),
(542, 'Mohammad Shahidullah Shahidullah', 'advshohid2@gmail.com', NULL, '01632986888', 'Land servey certificate course approval', 'মাননীয় মহোদয়,\r\nআপনাদের মধ্যে সার্টিফিকেট কোর্স ইন সার্ভে চালু আবহে কিনা এবং তা দূরবর্তী সেন্টার কে অনুমোদন দেন কিনা জানতে চাই?', NULL, '2022-09-10 01:21:26', '2022-09-10 01:21:26'),
(543, 'মুহম্মদ তরিকুল ইসলাম', 'journalisttoriqul@gmail.com', NULL, '01751051049', 'শর্ট কোর্সের জন্য আবেদন।', 'পঞ্চগড় জেলার তেঁতুলিয়া উপজেলার বুড়াবুড়ি ইউনিয়নে আমার বাড়ি। আমি ইতোপূর্বে ভূমি জরিপ ট্রেনিং নিয়েছি এবং ফিল্টে কাজও করছি। কিন্তু দুঃখের বিষয় আমার নেই কোন সরকারি প্রশিক্ষণ তাই আবেদন করছি আমার বিষয়টি আমলে নিয়ে প্রশিক্ষণের সুযোগ করে দিতে।', NULL, '2022-10-14 09:44:57', '2022-10-14 09:44:57'),
(544, 'Md Shohel Rana', 'Shohelmahmud876@gmail.com', NULL, '01718999091', 'Textile', 'Ami serveyar hoite chai', NULL, '2022-10-23 08:22:53', '2022-10-23 08:22:53'),
(547, 'hello', 'hello@gmail.com', NULL, '01861413646', 'new semester pluse', 'ewjd', NULL, '2022-11-03 16:06:00', '2022-11-03 16:06:00'),
(548, 'MD Tamim', 'imahim767@gmail.com', NULL, '01782467561', 'Elections', 'GPA 3.89', NULL, '2022-11-29 13:15:52', '2022-11-29 13:15:52'),
(549, 'Md.Ariful Islam', 'polash8920@gmail.com', NULL, '01775534686', 'CSE', 'I want to communicate about admisson 2023 session', NULL, '2022-12-06 18:43:04', '2022-12-06 18:43:04'),
(550, 'MD. SELIM BEPARI', 'Hossenmdselim938@gmail.com', NULL, '01641601000', 'Want to admission survey', 'I want admission to Survey diploma.', NULL, '2023-01-16 09:58:52', '2023-01-16 09:58:52'),
(551, 'মামুন', 'mehedihasan557@gmail.com', NULL, '01674544896', 'সার্ভে', 'আমি ভর্তি পরীক্ষায় অংশ নিতে চাই', NULL, '2023-01-29 17:55:21', '2023-01-29 17:55:21'),
(552, 'sahin', 'mohammadshahinkadir2647@gmail.com', NULL, '01798552647', 'surveyor', 'Hi', NULL, '2023-01-31 14:25:06', '2023-01-31 14:25:06'),
(553, 'Dewayne Goderich', 'dewayne.goderich59@googlemail.com', NULL, '06-84693760', 'DataList2023.com', 'DataList2023.com', NULL, '2023-03-31 18:08:06', '2023-03-31 18:08:06'),
(554, 'Md.Asaduzzaman Nur', 'asadnur711@gmail.com', NULL, '01830763815', 'About admission', 'Plz inform me about admission.. how to get admit ? In details ...', NULL, '2023-04-06 20:42:16', '2023-04-06 20:42:16'),
(555, 'Sm Sohel', 'starsohel24@gmail.com', NULL, '01970784062', 'সাভেয়ার', 'আমি সার্ভেয়ার ট্রেনিং নিতে চাই ।আমার জেলা খুলনা \r\nথানা পাইকগাছা আমার এলাকার আসে পাশে কোন ট্রেনিং সেন্টার থাকলে আমাকে জানান ।\r\nআমি সার্ভেয়ার হতে চাই ।তাই আমাকে সকল দিক থেকে সাহায্য সহযোগিতা করুন।', NULL, '2023-05-20 15:45:12', '2023-05-20 15:45:12'),
(556, 'Abdul Kaium', 'shuaibbinakber3@gmail.com', NULL, '01724553318', 'Computer science', 'I need information of serve institute for admissio.', NULL, '2023-06-03 21:32:18', '2023-06-03 21:32:18'),
(557, 'Imogen Ranken', 'ranken.imogen@yahoo.com', NULL, '20-59-01-14', 'Wealth DNA recently discovered', 'An Earth-shattering secret NASA experiment is finally being exposed...\r\n\r\nAnd proves something that the teachings of the ancient chakras have been claiming for thousands of years.\r\n\r\nAll you need to do is \"activate\" the energy center that attracts wealth.', NULL, '2023-08-30 02:56:20', '2023-08-30 02:56:20'),
(558, 'Samual Boudreaux', 'samual.boudreaux@yahoo.com', NULL, '06-30524153', 'Warning: sensitive material', 'Do you want to hear about a secret NASA experiment that proves the existence of \"Wealth DNA\" in humans? \r\n\r\n(If the page is still up), you can discover the truth here: \r\n\r\nhttps://goto13.com/l/bsiedu.gov.bd/4/', NULL, '2023-08-30 03:11:13', '2023-08-30 03:11:13'),
(559, 'Mridul Raj', 'mridul512222@gmail.com', NULL, '01773879338', 'I want to be admitted', 'আমি ভর্তি হতে চাই', NULL, '2023-10-01 21:24:38', '2023-10-01 21:24:38'),
(560, 'Charla Monzon', 'monzon.charla@gmail.com', NULL, '06-26709824', 'bsiedu.gov.bd is only listed in 8 out of 2500+ Directories', 'Hello,\r\n\r\nWe noticed bsiedu.gov.bd is only listed in 8 out of 2500 directories.\r\n\r\nThis severly impacts your backlinks and search engine rankings.\r\n\r\nCome get listed in all 2500 directories on DirectoryBump.com', NULL, '2023-10-20 01:58:40', '2023-10-20 01:58:40'),
(561, 'Agustin Dugger', 'dugger.agustin@gmail.com', NULL, '06-12103821', 'Seize Chances with Our Newest Tool!', 'Hello bsiedu.gov.bd Admin.\r\n\r\nThis is Agustin and I stumbled upon bsiedu.gov.bd a moment ago.  \r\n\r\nLooks great… but now what?\r\n\r\nBy that I mean, when someone like me finds your website – either through Searching or just bouncing around – what happens next', NULL, '2023-11-16 16:15:59', '2023-11-16 16:15:59'),
(562, 'Elden Croll', 'croll.elden@googlemail.com', NULL, '06-33855623', 'MarketingBox! IS Shutting Down!', 'Hi,\r\n\r\nMarketingBox! After 12 years in service we have finally decided to shut our doors due to the economic climate\r\n\r\nWe don\'t want other companies to suffer from the same, so we have made available all our consumer and business data at a one time reduc', NULL, '2024-03-07 09:51:25', '2024-03-07 09:51:25'),
(563, 'MD. RABIUL AUAL', 'rabiul438811@gmail.com', NULL, '01888520155', 'About Survey Course.', 'This is Md Rabiul Aual. I have completed masters course on accounting and now unemployed. I want to be a skilled surveyor. Which is quite lacking in our area. Can I get help from you in this case?', NULL, '2024-03-16 23:21:02', '2024-03-16 23:21:02'),
(564, 'saikat', 'saikatkarmakar1997@gmail.com', NULL, '01791079491', 'ভর্তি হতে চাই', 'স্যার,\r\nআমি বরগুনা জেলার স্থায়ী বাসিন্দা,আমি আমিন/সার্ভেয়ার কোর্সে ভর্তি হতে চাই।আমি ২০২১ সালে বি এ পাশ করেছি।কিভাবে ও কখন আমি এটাতে ভর্তি হতে পারবো স্যার?', NULL, '2024-03-17 02:16:29', '2024-03-17 02:16:29'),
(565, 'MD ROMMANUL ISLAM', 'mdrommanulislam@gmail.com', NULL, '01826317866', 'Admition required', 'আসসালামু আলাইকুম, আমি এই প্রতিষ্ঠানে শিক্ষা অর্জন করার জন্য আগ্রহী প্রার্থী। আমি ২০২০ সালে এসএসসি পরীক্ষা দিয়েছি এবং ২০২২ সালে এইচএসসি পরীক্ষা দিয়েছি।  এই প্রতিষ্ঠানে ভর্তির জন্য আমাকে কি কি করতে হবে? জানতে চাই', NULL, '2024-03-19 13:37:22', '2024-03-19 13:37:22'),
(566, 'Melodee Claypool', 'hacked@bsiedu.gov.bd', NULL, '7868199042', 'Your WebSite Has Been Compromised', 'We have hacked your website https://bsiedu.gov.bd and extracted your databases.\r\n\r\nHow did this happen?\r\n\r\nOur team has found a vulnerability within your site that we were able to exploit. After finding the vulnerability we were able to get your database ', NULL, '2024-03-24 07:36:17', '2024-03-24 07:36:17'),
(567, 'Yasin Arafat', 'ya1453004@gmail.com', NULL, '01878472417', 'Admission', 'ভর্তির সময়সূচি কবে?  আর টোটাল ৮ সেমিস্টারে কত খরচ?  ভর্তির সময় কত টাকা দিতে হয়?', NULL, '2024-05-09 01:44:36', '2024-05-09 01:44:36'),
(568, 'Rakib Al Hasan', 'hasanra560@gmail.com', NULL, '01581230602', '2024-2025 diploma in survey admission', 'How can I apply for admission?', NULL, '2024-05-24 16:54:08', '2024-05-24 16:54:08'),
(569, 'Mithun Mohajan', 'mithunmohajan1987@gmail.com', NULL, '01739420983', 'ডিপ্লোমা ইন সার্ভে ভর্তি শুরু কত তারিখে?', 'ডিপ্লোমা ইন সার্ভে ভর্তি শুরু কত তারিখে?', NULL, '2024-05-26 16:19:33', '2024-05-26 16:19:33'),
(570, 'Phillippe Brennan', 'techsphere751@outlook.com', NULL, '7804974115', 'You Won\'t Want This, But I Was Told to Offer', 'Imagine a realm where you could compose a straightforward \r\nsentence & have it converted into captivating, astounding \r\nAI videos that captivate, persuade, & are entirely created automatically!\r\n\r\nUnlock the future of marketing with the world\'s first ever', NULL, '2024-05-28 02:37:38', '2024-05-28 02:37:38'),
(571, 'Irma Kincade', 'irma.kincade@gmail.com', NULL, '3745059080', 'bsiedu.gov.bd on the Google & iOS Store', 'A local store or a multinational chain, we build mobile Apps at crazy prices. We convert your website into an App.\r\n\r\nAndroid ($50)\r\niOS ($50)\r\n\r\nGet your free consultation here:\r\n\r\nhttps://forms.gle/hbayvMrG3N7u2Rbu9', NULL, '2024-06-07 15:31:11', '2024-06-07 15:31:11'),
(572, 'Selina Rendon', 'rendon.selina30@gmail.com', NULL, '3348030430', 'Make the Switch to Renewable Energy', 'Join the eco-friendly movement with MissionNewEnergy, your premier source for renewable energy solutions.\r\n\r\nAs sustainable living becomes the new trend, now is the time to explore the benefits of renewable energy.\r\n\r\nClick this link to learn more about h', NULL, '2024-06-09 09:09:58', '2024-06-09 09:09:58'),
(573, 'Harun or Rashid', 'harunorr14@gmail.com', NULL, '01521319396', 'আমি কারিগরি বোর্ডের আন্ডারে ৪ বছর মেয়াদি ডিপ্লোমা ২০১৭ সালে পাস করেছি, এখন৪ বছর মেয়াদি  ডিপ্লোমা ইন সার্ভে', 'আমি কারিগরি বোর্ডের আন্ডারে ৪ বছর মেয়াদি ডিপ্লো ইন সিভিল থেকে ২০১৭ সালে পাস করেছি, এখন৪ বছর মেয়াদি  ডিপ্লোমা ইন সার্ভে পড়তে চাই, কি করনীয় আমার এখন যদি বলতেন উপকৃত হতাম', NULL, '2024-06-09 13:06:47', '2024-06-09 13:06:47'),
(574, 'Rajib Sutradhar', 'Srajib919@gmail.com', NULL, '01765296574', 'Land Survey training', 'I am agree to land survey training', NULL, '2024-06-11 16:57:50', '2024-06-11 16:57:50'),
(575, 'Frank Rubino', 'frank.rubino@gmail.com', NULL, '3819164072', 'bsiedu.gov.bd app for $50!', 'Hi,\r\n\r\nThis is crazy, we are building mobile Apps for $50.\r\n\r\nGet your iOS and Android App!\r\n\r\nWhy are we doing this? Well, we are building a lot for cheap.\r\n\r\nVisit us https://pcxleads.com/welcome.php?domain=bsiedu.gov.bd', NULL, '2024-06-13 20:59:45', '2024-06-13 20:59:45'),
(576, 'Johan Fourie', 'johan@pcxgroup.com', NULL, '3023213758', 'An app for your business', 'Hello bsiedu.gov.bd\r\n\r\nWe noticed your website bsiedu.gov.bd doesn\'t have a Mobile App for iOS and Android.\r\n\r\nWe are building Android and iOS Apps for $99 each a combo deal of $149 for both\r\n\r\nYou can get a free preview on PCXLeads or email us back and w', NULL, '2024-06-28 02:28:51', '2024-06-28 02:28:51'),
(577, 'md ahsan', 'akahsan000@gmail.com', NULL, '01978882407', 'admission in the online', 'স্যার আমি আপনাদের অনলাইনে আবেদন অপশনটা পাচ্ছি না  আপনাদের অনলাইনে আবেদন টা কবে ছাড়বে', NULL, '2024-07-06 01:50:19', '2024-07-06 01:50:19'),
(578, 'Jannette Wunderly', 'wunderly.jannette@gmail.com', NULL, '2507277630', 'Improve your website`s ranks totally free', 'Hi there,\r\n\r\nWhile checking your bsiedu.gov.bd for its ranks, I have noticed that there are some toxic links pointing towards it.\r\n\r\nGrab your free clean up and improve ranks in no time\r\nhttps://www.hilkom-seo.com/free-links-cleanup/\r\n\r\nIt really works, g', NULL, '2024-07-08 00:25:38', '2024-07-08 00:25:38');

-- --------------------------------------------------------

--
-- Table structure for table `exam_routines`
--

CREATE TABLE `exam_routines` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `exam` varchar(255) DEFAULT NULL,
  `department` varchar(255) DEFAULT NULL,
  `semister` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `exam_routines`
--

INSERT INTO `exam_routines` (`id`, `exam`, `department`, `semister`, `status`, `avatar`, `created_at`, `updated_at`) VALUES
(4, 'Mid', 'Diploma In Survey', 'All Semister', 'Active', 'public/backdoor/uploads/notice/2023.06.06exam.jpg', '2023-06-06 10:55:01', '2023-06-06 10:55:01'),
(6, 'Final', 'Diploma In Survey', 'All Semister', 'Active', 'public/backdoor/uploads/notice/2023.08.06সার্ভে (9 files merged).pdf', '2023-08-06 14:44:21', '2023-08-06 14:44:21');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `important_links`
--

CREATE TABLE `important_links` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `content` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `important_links`
--

INSERT INTO `important_links` (`id`, `content`, `link`, `status`, `created_at`, `updated_at`) VALUES
(2, 'কারিগরি ও মাদ্রাসা শিক্ষা বিভাগ', 'http://www.tmed.gov.bd/', NULL, '2023-06-20 14:28:36', '2023-06-20 14:28:36'),
(3, 'কারিগরি শিক্ষা অধিদপ্তর', 'http://www.techedu.gov.bd/', NULL, '2023-06-20 14:28:58', '2023-06-20 14:28:58'),
(4, 'কারিগরি শিক্ষা বোর্ড', 'http://www.bteb.gov.bd/', NULL, '2023-06-20 14:29:11', '2023-06-20 14:29:11'),
(6, 'আঞ্চলিক উপপরিচালকের কার্যালয়', 'http://rdocumilla.gov.bd/user/home.php', NULL, '2023-06-20 14:33:50', '2023-06-20 14:33:50');

-- --------------------------------------------------------

--
-- Table structure for table `industrial_attachments`
--

CREATE TABLE `industrial_attachments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `formDate` varchar(255) DEFAULT NULL,
  `toDate` varchar(255) DEFAULT NULL,
  `totalStudent` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `industrial_attachments`
--

INSERT INTO `industrial_attachments` (`id`, `name`, `email`, `mobile`, `location`, `status`, `formDate`, `toDate`, `totalStudent`, `photo`, `created_at`, `updated_at`) VALUES
(1, 'Virtual IT Professional', 'virtualitprofessional@gmail.com', '01678909091', 'Burichong Bazar', NULL, '10/08/202', '31/03/202', NULL, 'eba53fd7385920ee828f6f275cce2a74.pdf', '2023-06-11 09:49:56', '2023-06-12 08:56:18');

-- --------------------------------------------------------

--
-- Table structure for table `industry_visits`
--

CREATE TABLE `industry_visits` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `visitDate` varchar(255) DEFAULT NULL,
  `remark` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `info_boxes`
--

CREATE TABLE `info_boxes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `boxName` varchar(255) DEFAULT NULL,
  `boxPosition` varchar(255) DEFAULT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `info_boxes`
--

INSERT INTO `info_boxes` (`id`, `boxName`, `boxPosition`, `avatar`, `created_at`, `updated_at`) VALUES
(2, 'সেবা প্রদান প্রতিশ্রুতি (সিটিজেন চার্টার)', NULL, 'Service_1686043468.png', '2023-06-06 16:24:28', '2023-06-06 16:24:28'),
(3, 'প্রতিষ্ঠান সম্পর্কিত', NULL, 'institute_1686043630.jpg', '2023-06-06 16:27:10', '2023-06-06 16:27:10'),
(4, 'শিক্ষার্থী কর্ণার', NULL, '250b1f8f73c4eaa918e61026c0c020a2_1686043853.png', '2023-06-06 16:30:53', '2023-06-06 16:30:53'),
(5, 'জাতীয় শুদ্ধাচার কৌশল', NULL, 'nis_logo3 (2)_1686043978.jpg', '2023-06-06 16:32:58', '2023-06-06 16:32:58'),
(6, 'বার্ষিক ক্রয় পরিকল্পনা (APP) ও ই-টেন্ডার', NULL, 'cptuEgpLogo_1686044043.gif', '2023-06-06 16:34:03', '2023-08-17 17:02:57'),
(7, 'অভিযোগ প্রতিকার ব্যবস্থাপনা', NULL, 'download_1686044189.png', '2023-06-06 16:36:29', '2023-06-06 16:36:29'),
(8, 'বার্ষিক কর্মসম্পাদন চুক্তি', NULL, '2021-08-12-07-12-f7cd0754352ea74f9f6bcb9f402bbc00_1686044270.jpg', '2023-06-06 16:37:50', '2023-06-06 16:37:50'),
(9, 'তথ্য অধিকার', NULL, 'download (2)_1686044372.png', '2023-06-06 16:39:32', '2023-06-06 16:39:32'),
(10, 'ভর্তি সংক্রান্ত', NULL, '', '2023-06-06 16:42:24', '2023-08-15 19:45:12'),
(11, 'ফরম ও প্রকাশনা', NULL, 'forms_1686044808.jpg', '2023-06-06 16:46:48', '2023-06-06 16:46:48'),
(12, 'অফিস আদেশ / NOC', NULL, 'order_1686044930.jpg', '2023-06-06 16:48:50', '2023-06-06 16:48:50'),
(13, 'নীতিমালা', NULL, 'images5_1686045025.jpg', '2023-06-06 16:50:25', '2023-06-06 16:50:25'),
(14, 'রিসার্চ অ্যান্ড নলেজ ম্যানেজমেন্ট সেল', NULL, 'research (1)_1686045074.png', '2023-06-06 16:51:14', '2023-06-06 16:51:14'),
(15, 'একাডেমিক কার্যক্রম', NULL, 'download (3)_1686045397.png', '2023-06-06 16:56:37', '2023-06-06 16:56:37'),
(16, 'বিশেষ চাহিদা সম্পন্ন শিক্ষার্থীদের সম্পৃক্তকরণ', NULL, 'disabled-symbol-collection-image-vector-21006650_1686045519.jpg', '2023-06-06 16:58:39', '2023-06-06 16:58:39'),
(17, 'বঙ্গবন্ধু কর্ণার', NULL, 'download (4)_1686045652.png', '2023-06-06 17:00:52', '2023-06-06 17:00:52'),
(18, 'রোভার স্কাউট', NULL, 'download (5)_1686045705.png', '2023-06-06 17:01:45', '2023-06-06 17:01:45'),
(20, 'ডিজিটাল কনটেন্ট (Digital Content)', NULL, 'db61611246dfc63c67fd295765a5c4fc.pptx', '2023-11-08 20:06:43', '2023-11-09 12:00:47');

-- --------------------------------------------------------

--
-- Table structure for table `institute_details`
--

CREATE TABLE `institute_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `details` text DEFAULT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `institute_details`
--

INSERT INTO `institute_details` (`id`, `title`, `details`, `avatar`, `created_at`, `updated_at`) VALUES
(2, 'বাংলাদেশ সার্ভে ইন্সটিটিউট', 'বাংলাদেশ সার্ভে ইন্সটিটিউট গণপ্রজাতন্ত্রী বাংলাদেশ সরকারের শিক্ষা মন্ত্রণালয়ের কারিগরি শিক্ষা অধিদপ্তরাধীন একটি সরকারী শিক্ষা প্রতিষ্ঠান। এতে বাংলাদেশের কারিগরি শিক্ষা বোর্ড কর্তৃক ৪ বছর মেয়াদি ডিপ্লোমা-ইন-সার্ভে-ইঞ্জিনিয়ারিং শিক্ষা কার্যক্রম পরিচালিত হয়। ঐতিহ্যবাহী কুমিল্লা শহরের টমছমব্রীজ সংলগ্ন পানি উন্নয়ন বোর্ডের পাশে কুমিল্লা-কোটবাড়ি রোডে শোভনীয় প্রকৃতি ঘেরা ঐতিহ্যবাহী বাংলাদেশ সার্ভে ইন্সটিটিউট অবস্থিত। ১৯১৪ সালে কুমিল্লা শহরের কেন্দ্রস্থলে রামমালায় প্রাচীর ঘেরা ভবনে ইন্সটিটিউট এর কার্যক্রম শুরু হয়। বাংলাদেশ সার্ভে ইন্সটিটিউট সবুজ ছায়া ঘেরা বৃক্ষরাজীতে পরিবেষ্টিত এবং ইন্সটিটিউটের একাডেমিক ভবনের সামনে মনোমুগ্ধকর ফুলের বাগান অবস্থিত। ১৪.১৭ একর জমির উপর নির্মিত এ প্রতিষ্ঠানটিতে সুরম্য ভবন সমূহের ৩ তলা একাডেমিক কাম প্রশাসনিক ভবন, আবাসিক ভবন, ছাত্রাবাস, ছাত্রীনিবাস ইত্যাদির সন্নিবেশ ঘটেছে। ইন্সটিটিউটের প্রবেশমুখে গেটে, একাডেমিক কাম প্রশাসনিক ভবনের গেটে এবং ছাত্রাবাস ও ছাত্রীনিবাসের প্রবেশের গেটসমূহে রয়েছে সুসজ্জিত তোরুণ ও কর্তব্যনিষ্ঠ নিরাপত্তা প্রহরী, যারা সার্বক্ষনিক প্রয়োজনীয় যোগাযোগের মাধ্যমসহ নিরাপত্তা ও আগমনকারীদের তথ্য সংগ্রহ করেছে।', 'public/backdoor/uploads/newsEvent/2022.12.042022.10.17IMG_20190313_164617.jpg', NULL, NULL),
(3, 'বাংলাদেশ সার্ভে ইনস্টিটিউট,রামমালা,কুমিল্লা', 'বাংলাদেশ সার্ভে ইন্সটিটিউট গণপ্রজাতন্ত্রী বাংলাদেশ সরকারের শিক্ষা মন্ত্রণালয়ের কারিগরি শিক্ষা অধিদপ্তরাধীন একটি সরকারী শিক্ষা প্রতিষ্ঠান। এতে বাংলাদেশের কারিগরি শিক্ষা বোর্ড কর্তৃক ৪ বছর মেয়াদি ডিপ্লোমা-ইন-সার্ভে-ইঞ্জিনিয়ারিং শিক্ষা কার্যক্রম পরিচালিত হয়। ঐতিহ্যবাহী কুমিল্লা শহরের টমছমব্রীজ সংলগ্ন পানি উন্নয়ন বোর্ডের পাশে কুমিল্লা-কোটবাড়ি রোডে শোভনীয় প্রকৃতি ঘেরা ঐতিহ্যবাহী বাংলাদেশ সার্ভে ইন্সটিটিউট অবস্থিত। ১৯১৪ সালে কুমিল্লা শহরের কেন্দ্রস্থলে রামমালায় প্রাচীর ঘেরা ভবনে ইন্সটিটিউট এর কার্যক্রম শুরু হয়। বাংলাদেশ সার্ভে ইন্সটিটিউট সবুজ ছায়া ঘেরা বৃক্ষরাজীতে পরিবেষ্টিত এবং ইন্সটিটিউটের একাডেমিক ভবনের সামনে মনোমুগ্ধকর ফুলের বাগান অবস্থিত। ১৪.১৭ একর জমির উপর নির্মিত এ প্রতিষ্ঠানটিতে সুরম্য ভবন সমূহের ৩ তলা একাডেমিক কাম প্রশাসনিক ভবন, আবাসিক ভবন, ছাত্রাবাস, ছাত্রীনিবাস ইত্যাদির সন্নিবেশ ঘটেছে। ইন্সটিটিউটের প্রবেশমুখে গেটে, একাডেমিক কাম প্রশাসনিক ভবনের গেটে এবং ছাত্রাবাস ও ছাত্রীনিবাসের প্রবেশের গেটসমূহে রয়েছে সুসজ্জিত তোরুণ ও কর্তব্যনিষ্ঠ নিরাপত্তা প্রহরী, যারা সার্বক্ষনিক প্রয়োজনীয় যোগাযোগের মাধ্যমসহ নিরাপত্তা ও আগমনকারীদের তথ্য সংগ্রহ করেছে।', 'public/backdoor/uploads/newsEvent/2023.06.15survey2.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `in_house_staff`
--

CREATE TABLE `in_house_staff` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `in_house_staff`
--

INSERT INTO `in_house_staff` (`id`, `title`, `avatar`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Inhouse Training Staff', 'aa49bb40fb7fd439116e506148fe4831.pdf', NULL, '2023-06-13 19:55:08', '2023-06-13 19:55:08');

-- --------------------------------------------------------

--
-- Table structure for table `in_house_teachers`
--

CREATE TABLE `in_house_teachers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `in_house_teachers`
--

INSERT INTO `in_house_teachers` (`id`, `title`, `avatar`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Inhouse course for the teacher only', '39c83b36e20325d01a85763766f950ed.pdf', NULL, '2023-06-13 19:23:35', '2023-06-13 19:23:35'),
(2, 'ইনহাউজ প্রশিক্ষন', '258b8d1db88c90288e74479c1b984819.pdf', NULL, '2023-06-14 12:37:40', '2023-06-14 12:37:40');

-- --------------------------------------------------------

--
-- Table structure for table `jobplacement_cel`
--

CREATE TABLE `jobplacement_cel` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `file` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jobplacement_cel`
--

INSERT INTO `jobplacement_cel` (`id`, `title`, `file`, `created_at`, `updated_at`) VALUES
(2, 'Global job', 'public/backdoor/uploads/newsEvent/2022.12.01assingnment.pdf', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `jobplaces`
--

CREATE TABLE `jobplaces` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `mobile` varchar(14) DEFAULT NULL,
  `roll_number` int(11) DEFAULT NULL,
  `session` varchar(255) DEFAULT NULL,
  `position` varchar(255) DEFAULT NULL,
  `company` varchar(255) DEFAULT NULL,
  `details` varchar(255) DEFAULT NULL,
  `photo` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `jobplaces`
--

INSERT INTO `jobplaces` (`id`, `name`, `email`, `mobile`, `roll_number`, `session`, `position`, `company`, `details`, `photo`, `created_at`, `updated_at`) VALUES
(12, 'Md. Al- Imran', 'mdalimran0163@gmail.com', '01682-061777', 683834, '2012-13', 'Survey Engineer ', 'Footing Solution & Engineering    ', 'I am a Survey Engineer in a well known Engineering Company In Chattogram. I have done So many Project under PWD, RHD & LGED and well known Companies.    ', 'placement/9fb2cf8bb539dc55317bf1ab637ebdb8391d1cc50203034853.jpg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(11, 'Asaduzzaman Iqbal', '', '01712487353', 683750, '2012-2013', 'Survey Engineer ', 'E Eengineering ltd', 'Dredging,  Construction ', 'placement/36292139188eef304ad7c7f5249755866f1dd0fe0203034321.jpg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(77, 'Mohammad Nasir Uddin  ', 'nasir.duet.bd@gmail.com', '01913122031', 889110, '07/08', 'Assistant Engineer  ', 'DHAKA MASS TRANSIT COMPANY LIMITED  ', 'This is a 100% Government owned company.This is the woning company of dhaka metro rail. I am working here as a assistant engineer(civil). Though it is a company but I am satisfied with my job and I am trying to get a pure Govt. Job that means I want to a ', 'placement/50186af136dce0167c3420eeb037b41cd616edde0204214638.jpg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(10, 'Md Ujjal Hossen', 'ujjalhossen2018@gmail.com', '01764515739', 867324, '2014 2015', 'Survey Engineer', 'National Development Engineers Limited.', 'As a Survey Engineer', 'placement/a09cbb44bdbf95bff4ac4fe6e3f1489a89636a250203032115.jpg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(13, 'MD. MOAZZEM HOSSAIN', 'moazzem.0786@gmail.com', '0097455774022', 489099, '2001-2002', 'SENIOR SURVEYOR', 'AL BANDARY ATLASCAT INTERNATIONAL LLC', 'Skilled Senior Surveyor with More than 14 years of experience (More than 12 years in GCC and\r\n2 years in Bangladesh) in High Rise Building, Industrial Building, Villa, Power Plant, Steel Mills,\r\nLandscaping, Preliminary survey & Infrastructural (Earth, Ro', 'placement/fd1cf85fbca4481f9817a3d4df468523c4b2cae70203041253.pdf', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(14, 'Md Emdadul Islam', 'emdadul5042@gmail.com', '01744745042', 683814, '12/13', 'Surveyor', 'Toma group', '4 years', 'placement/5d68b2cb6ebfda802c0fbe2f49c5b18d814b0f4a0203052429.pdf', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(15, 'Md sahadat hossain ', 'sahadat7100@gmail.com', '01740106723', 683806, '2012-13', 'Survey engineer  ', 'Max group ', 'All Kind of survey work.  ', 'placement/244c77001451300603384221c5c03492468648160203054402.jpg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(16, 'Miah Mohammad Mohiuddin   ', 'miahmohammadmohiuddin@gmail.com', '01757465788', 578129, '2011-12', 'Revenue surveyor ', 'Bangladesh Water Development Board ', 'Revenue surveyor from 14.02.2019  ', 'placement/d4b0a8dade3929f7dda5500b63fa80ecda2de7230203064216.jpg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(17, 'Md Rubel Khan', 'mdrubelkhan88@gmail.com', '01746671080', 683816, '12-13', 'Surveyor ', 'Western Engineering (Pvt.) Ltd.', 'Surveying & Engineers Work ', 'placement/6e1fd23b04b796b4e99fbc181ca5333df2ccda7d0203064631.jpg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(18, 'Md Al mamun shanto', 'mdalmamunshanto07@gmail.com', '01793106196', 769832, '13-14', 'Survey engineer  ', 'Nibir Nirman', 'Surveyor ', 'placement/fcca399070ae8c4db4961bc14bfe6f194599bb130203070015.jpg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(19, 'MD.Khalid Hasan ', 'md.khalidhasan.an905@gmail.com', '01772073505', 683775, '2012-2013', 'Digital Surveyor  ', 'BDG-Magura Group', 'All Survey works ', 'placement/2c32c5f84474ffc57f4a88ddb51dff02b3a280f70203070804.jpg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(20, 'Md. Forahim Bhuiyan', 'forahim11@gmail.com', '01878669357', 867311, '2014-15', 'Jr surveyor', 'Bashundhara group', 'All types survey work, layout, topography, leveling .', 'placement/b531271c8d5814fa795b7c75a506e46f40faff570203072012.jpg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(21, 'Md Mostafijur Rahman', 'mrrakib44@gmail.com', '01628207245', 683768, '12-3', 'Survey Engineer', 'Monihar Developers Ltd.', 'All Survey Work', 'placement/54147fdd8f8c2e4bcf5e63d65d1073ba4d84c1720203073819.jpg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(22, 'MD. OMAR FARUQUE', 'rhd800079@gmail.com', '+8801928734337', 478363, '2010-11', 'SURVEYOR', 'Munshiganj Road Division, Munshiganj. Roads and Highways Department (RHD)', 'Maintain Highways Assets ', 'placement/49dea6c54c01c0054431d441ea98b570e52ccaed0203084939.jpg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(23, 'Md Rasel al manna ', 'rasel2061@gmail.com', '01824927473', 478360, '2010-11', 'Kanungo(DEE)', 'Bangladesh bridge authority   ', 'Land acquisition Processing  ', 'placement/03019fbfe3d35f26645dd0bcd4b01c20ab50329a0203085104.jpg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(24, 'Md. Sharif Mahmud', 'sharif151090@gmail.com', '01831074047', 989159, '2008-09', 'Assistant Revenue Officer ', 'Bangladesh water development board ', 'Assistant Revenue Officer, bwdb, feni.', 'placement/d1d0bd707f644f82889ad734d06b3a8f1cfef3760203085556.jpeg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(25, 'Majed Md. Kamrul Hasan', 'kamrul_bsi@yahoo.com', '01829581959', 478344, '2010-11', 'Surveyor', 'Roads and highways department,ChattogramZone ', 'I am a surveyor of roads and highways department under the ministry of road transport and bridges since April 2016', 'placement/49662ea054250011db8593117f30c8d9dc504e740203085844.jpeg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(26, 'Md samsul alam', 'samsulalam0037@gmail.com', 'None', 389169, '09-10', 'Surveyor', 'Jica (Somalia drive construction road project Monrovia liberia', 'Surveyor', 'placement/ee7bc5c527f4d43662207d26a8b57fda86c544a40203085857.jpg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(27, 'SYED NAZMUL AHSAN', 'nazmulahsangte@gmail.com', '01681982627', 478325, '2010-11', 'Asst.Manager ', 'Global Tech engineering  ', 'Land survey equipment.\r\nHydrographic surveyequipment sales and Training.\r\n     ', 'placement/a9eb52569b1c50fc2cb2220694317288dfb749d70203090037.jpg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(28, 'Tanbir Hasan', 'tanbirtahim@gmail.com', '01710636612', 478322, '2010-2011', 'Survey Engineer  ', 'ITD-Sinohydro JV ', 'More than 6 years of experience in High Rise Building, Industrial Building, Steel Structure,New Road, Bridge & Rail Track line.   \r\n', 'placement/f869b3b704a1aaf5001b2c0bcfc9b025ae3736330203090526.jpg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(29, 'najmul alam rimon', 'najmulalam.stbl@gmail.com', '01760959530', 389090, '09-10', 'Project coordinator(survey enginee)    ', 'Survey technolgies Bangladesh limited  ', 'Land survey, hydrographic survey,Gis mapping,drone survey ', 'placement/19cce668981c8217e095c0d7fe38074eb70277610203090832.jpg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(30, 'Md.Sarowar Alam', 'sarowaralambadhon139@gmail.com', '01831752139 ', 578179, '11-12', 'Instructor ', 'NIET', 'Head of Department ( Surveying Technology) ', 'placement/bd6aa589cb2894b3b05ef97860970c39a3ea17490203091055.jpg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(31, 'Md.Saddam Khan', 'saddam600327@gmail.com', '01303338061', 989162, '08-09', 'Diploma in survey', 'Footing Solution & Engineering ', 'November 2019 to present', 'placement/db1013cf2831c57cb076ae066adc66f87fc6284f0203091523.jpg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(32, 'Md. YounusAliMithu   ', 'bdmithu1021@gmail.com', '01747334221', 578161, '11-12', 'Asstt officer( survey)   ', 'Bashundhara group  ', 'Private job. ', 'placement/7f1cab532cfc58120381b81636dfb7a95d0fca280203091750.jpg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(33, 'Kamrul Hasan Jew   ', 'hasanpoly48@gmail.com', '01772395913', 683809, '2012-2013', 'Survey Engineer  ', 'Western Engineering  (pvt.) ltd.', 'I am a Survey Engineer. I have done So many Project under BWDB & BIWTA.', 'placement/b055c7bedf9989a48a4ea971bbaf7473bcf8fbbc0203092211.jpg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(34, 'Md. Khayrul Hasan  ', 'khpabel8@gmail.com', '01733841458', 389185, '2009-10', 'Assistant revenue officer   ', 'Bangladesh Water Development Board    ', 'Assistant revenue officer from 24-02-2019.\r\n\r\nCurrent posting: Patuakhali O&M Divisio,\r\nBWDB, Patuakhal.      ', 'placement/98ab0ed765a49a7233fe740a47f47ddf90504ed20203092854.jpg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(35, 'Md. Salahuddin', 'salahuddin7899@gmail.com', '01912507899', 389117, '2009-10', 'Survey Engineer', 'Local Government Engineering Department (LGED)', 'Surveyor, Upazilla Engineering Office, Juri, Moulvibazar.', 'placement/f94fa5594081c4e39ef20ceff8aa17370b2a05bf0203093440.jpg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(36, 'Md. Jakir hossian Tito', 't2598039@yahoo.com', '01817598039', 2445, 'A', 'Surveyor', 'Ministry of land', 'Start job at ministry of land (settlement department) from 2013 to till now.', 'placement/ad93e3bd2117d03fa2d61fc4006f400a084ddb950203093547.jpg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(37, 'Md.Zamal Uddin', 'mdzamal578169@gmail.com', '01756007528', 578169, '578169', 'Chief Survey Engineer & Project Engineer', 'Future Insfrastracture Development ltd.concern \"Bengal group of Indrustries ltd\".', 'Survey & engineering site.', 'placement/1f4156989e2f81d09ba597465d7524ce842f7ee50203093814.jpg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(38, 'Md. Sohag Hossain ', 'sohag.hossen481689@gmail.com', '01714220308', 578187, '2011-12', 'Surveyor', 'LGED', 'Lged - Kawkhali, Pirojpur', 'placement/2d439053378cf8e4a1c6bb0811e9f1de64ea620e0203093955.jpg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(39, 'Md Asad', '9asadsurveyor@gmail.com', '01849759456', 683799, '2012-13', 'Senior surveyor', 'The civil engineer Ltd', 'I am a Survey Engineer in a well known Engineering Company. I have done so many projects as like survey related work.', 'placement/2a8e9024dfca550cbd93171676a92f902228bf3a0203095258.jpg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(40, 'Md.Alamgir Kabir', 'kabirsurveyengineer@gmail.com', '01822894940', 889164, '2007-2008', 'Surveyor', 'Ministry of land ', 'Bakalia circle land office\r\nMetropolitan, Chattogram    ', 'placement/b1dfb71c1660ff1953c3223e842779b15093563a0203100803.jpg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(41, 'Md. Naim Hossain ', 'naimhossain49@gmail.com', '01676156268', 389180, '2009-2010', 'Survey Manager', 'Pacific Survey & Engineers  ', 'All kind of Topographic Survey using RTK GPS receive,  Total Statio. Bathymetric Survey using online RTK and single GPS comprising different Hydrographic Softwar,  Arc GIS, Google Earth Maps.\r\nBM fly for establish the three dimensional (XYZ) value of newl', 'placement/66ddef5a1709f98c2f2fa629fd8bb5183f1d71820203101708.jpg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(42, 'Md.Maksudul Haque (Saju)', 'sajubsi011@gmail.com', '01868216292', 281736, '2015-16', 'Digital Survey Engineer', 'Abdul Monem Limited ', 'I Am Digital Survey Engineer At Abdul Monem Economic Zone (AMEZ)\r\nBausia,Gazaria,Munsigonj. ', 'placement/99b15382e8d643e33b172e4fa5c8e3cddadf38da0203102105.jpg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(43, 'MD.SAYDUR RAHMAN', 'saydurrahman850@gmail.com', '01723717849', 989096, '07-08', 'Surveyor', 'BANGLADESH WATER DEVELOPMENT BOARD  ', 'Shariatpur O & M Division, Shariatpur.    ', 'placement/94929412c3c981b7ba3f62f0b5eef94b80febfdc0203103225.png', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(44, 'Md. Shahadat Hossain', 'robal895@gmail.com', '01831621989', 478388, '361822', 'Surveyor', 'Spectra Engineers Limited ', 'SSP 1320MW Thermal Power plan project,\r\nBanskhali, Chittagong Bangladesh ', 'placement/c2d859472e535955417050d5b4c8e9257883d4660203105219.jpg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(45, 'Md. Sahadat Hossen', 'sahadatbsc123@gmail.com', '01920248016', 989183, '2008-2009', 'Assistant Revenue Officer', 'Bangladesh Water Development Board   ', 'Land Acquisitio, Land Requisitio, Land Development Tax, Eviction all Occupay of cumilla district river and canal, All types of land measurement, Officialy any work.   ', 'placement/f35c3de5f56cddcd56e9fccc31bfc780ec1310ca0203110744.jpg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(46, 'Masud Rana', 'masudrana6041@gmail.com', '01762426944', 37, '11-12', 'Survey Engineer', 'E-Engineering ltd', 'BEPZ Project, Sirajgong', 'placement/4c69fc8411068437add0958026bb285df29d61440203110827.jpg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(47, 'Arshad Alam  ', 'arshadalam.se@gmail.com', '01832570094', 164196, '2011', 'Assistant Engineer Survey   ', 'Next Spaces Limited  ', 'Construction Project  ', 'placement/a631d8ca219d038fb24cfb677897d69ab4a640c70203110842.jpg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(48, 'Md. Rafiqul Islam', 'rafiqul.islam.ccnust@gmail.com', '01771511653', 578119, '2011-2012', 'Surveyor', 'Local Government Engineering Department (LGED)   ', '11/11/2019 - Present', 'placement/09ebfdd8b076cc84fad939174ea89940114cf0d40203111357.jpeg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(49, 'Md. Mostafa Kaif  ', 'mmkaif0@gmail.com', '01990117997', 769845, '13-14', 'Jr survyor', 'NDE Ltd.', 'Worked at ECB project ,  Purbachal, Dhaka', 'placement/ef8ff01f8886c0b092dce9271a18b987362efa1c0203115332.jpg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(50, 'Aminul Islam', 'aminulislam0296@gmail.com', '01714934417', 867363, '2014 2015', 'Survey Engineer', 'National Development Engineers Limited.', 'As a Survey Engineer ', 'placement/217e57afe2736b21f6bf20b2f1dd9ad38efad0080203115629.jpg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(51, 'Shanzeed Khan', 'shanzeedk3@gmail.com', '01956917307', 867291, '2014-2015', 'Surveyor', 'Sheltech Engineering Limited', 'Construction department\r\n(Layout, level, AutoCad Drawing)', 'placement/b011b79955d179e661040cdbd74ca0f7b2430ed00203120248.jpg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(52, 'Tanbir Hossain', 'mtanbirh1@gmail.com', '01303647026', 769848, '2013-14', 'Surveyor', 'Local Government Engineering Department ', 'Surveyor\r\nLged\r\nChandanish, Chattogram. ', 'placement/f7b155ec2262c584ac20e2e4bc1413a2135a01f90203122624.jpg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(53, 'Solaiman   Kabir  ', 'kabir.solaoman@yahoo.com', '00880172953465', 0, '2000 2001', 'Site manager/ Survey Expert  ', 'Denys Engineering and contractor NV    ', 'Site Manager ', 'placement/7e6e234a0fb6eae3f393996aa239f27cf9d49d2c0203123142.jpg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(54, 'Md. Razaul Karim', 'razaulceieb14@gmail.com', '01849642021', 989139, '2008-09', 'Assistant Revenue Officer ', 'Bangladesh Water Development Board ', 'Assistant Revenue Officer,\r\nMeghna Dhonagoda O&M Division, BWDB, Chandpur. ', 'placement/a658eb3c3716d5e2a7ab6b75d345812c543eeb280203124527.jpg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(55, 'Md Barkot', 'barkot60@gmail.com', '01717100993', 867360, '2014-2015', 'Survey Engineer  ', 'Max Group ', 'Job Location: Akhaura-Laksam Double Line Rail Projec.   ', 'placement/71773ef7b7451d4f2e055ecf6985e87c155b22840203125458.jpg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(56, 'Mehedi HasanRubel  ', 'mehedirhd20@gmail.com', '01725519409', 478387, '2010-11', 'Surveyor', 'Roads & HighwaysDepartmen.   ', 'Surveyors Duty at RHD. ', 'placement/d9801b7671e2c1276224ba86eb22b08c47c3af5a0203131902.png', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(58, 'Md Ashraful ', 'bmashraful4@gmail.com', '01967854664', 1967854664, '13-14', 'Survey engineer ', 'Bangladesh water development board   ', 'Post:Survey engineer . I joined since 25 October 2018.  ', 'placement/210bfe28a828b619f5e2e4328c990790cf6f9ae40203200650.jpg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(59, 'Md. Abu Bakar Siddiq', 'abs.surveyor13@gmail.com', '01729712887', 789133, '2006-2007', 'Surveyor', 'Ministry of Land', 'Ministry of Land 2013 Batch. Present Posting: DC Office, Chandpur.', 'placement/b9056fb32ec3a870a28357c08777a6adbfbd9ed00203212243.jpg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(60, 'Apu Ahmed', 'apuahmed9615@gmail.com', '01835686243', 683766, 'Chattagram ', 'surveyor', 'Local Government Engineering Department (LGED)   ', 'I am a surveyor at LGED. I compete survey diploma 2016. At present i working in LGED departmen.   ', 'placement/d100e0a9a40b6348e5ab32407c9400e4ac5d9e720203215946.jpg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(61, 'Niajul Ahammad Raktim', 'naraktim01@gmail.com', '01777053919', 683758, '12-13', 'Surveyor', 'Jasim Uddin Associates ( JUA)', 'Working as a surveyor and maintaining the office. Also working on Autocad-2d Studio max 3d.', 'placement/c94832e70b1aa0e06f640666fbd3b7447c56d0bf0203222124.jpg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(62, 'Md.Joynal Abedin', 'joynal164432@gmail.com', '01824032739', 683785, '2012-13', 'Survey Engineer', 'Bangladesh Water Development Board  ', 'Post:Survey Engineer.\r\nPresent Posting:Khulna O&M Division-1,Khulna.\r\n  ', 'placement/7f930862d20bf6092d0f2d237b8fe33bff64e0aa0203225837.jpg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(63, 'Md.Rubel Hosen', 'rubel376441@gmail.com', '01967999207', 389138, '2009-10', 'Survey Engineer ', 'Local Government  Engineering Department(LGED).  ', 'Present Posting Chitalmari Upazila\r\nLocal Goverment Engineering Department,Bagerhat  ', 'placement/e24ac28275a2b3d83851648a52aa700f2978bb370203233508.jpg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(64, 'SHARIFUL ISLAM', 'sharifulislam.bsi@gmail.com', '01863385737', 769821, '13-14', 'SURVEYOR', 'AL-MOSTAFA GROUP', 'A group of Company', 'placement/be578e9e76a73ab4581ae0cdf800d341c8c919c70204000615.jpg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(65, 'Md. Sahidul Islam', 'sishohel5048@gmail.com', '01842770101', 389134, '2009-10', 'Surveyor', 'Bangladesh Bridge Authority ', 'I am Surveyor of Dhaka elevated expressway ppp project under of Bangladesh Bridge Authorit.       ', 'placement/07b591039f3be312161d54b59d5e806f9583562a0204002632.jpg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(66, 'Md. Manir Hossair', 'engrmanir52@gmail.com', '01776329374', 289153, '2005-2006', 'Surveyor', 'Acumen Consulting House Ltd.', 'Dhaka to Khulna N-8 Road project', 'placement/34208f3a816e7fc614cccd07301b532f86904a190204002648.jpg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(67, 'Md.Nazrul Islam Sarker', 'nazrulsarker555@gmail.com', '+8801748084430', 989117, '2008-09', 'Civil Surveyor', 'HDGSK JV', 'Karbala Oil & Gas Refinery Project', 'placement/accf102caaa970ce65d217b9ae9a8e9a57caa67c0204010708.jpg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(68, 'SALMAN SHAH', 'Surveyorsalman@gmail.com', '01712048596', 789107, '2006-2007', 'Sr. Survey Engineer', 'JAMIL IQBAL LTD.', 'Jamalpur Railway overpass', 'placement/5ef5aae291cad99106249e990b5ecde3be5619ac0204011235.jpg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(69, 'MD.BINNUR', '', '01738275166', 47831566, '2010-11', 'Surveyor (Engineering)', 'Bangladesh water development board', 'Barguna O & M division BWDB, Barguna', 'placement/ef216ad6dcd4a03b7427825c7d32d4cc29dda0990204014222.jpg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(70, 'Md.Saiful Islam', 'saiful424979@gmail.com', '01741645829', 8080, '2003-2004', 'Surveyor', 'Zilla Parishad, Faridpur', 'Surveyor at Zilla Parishad Faridpur.', 'placement/3d47d3db4c24ef9a13958bc6195dfa6f3218ca270204024321.jpg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(71, 'MD.SHAIFUR RAHMAN TANZIL', 'saifurtanzil333@gmail.com', '01923034765', 989144, '2008-09', 'SURVEYOR', 'Roads & Highways Department', 'I am a Surveyor.I can operate digital Survey Instrument as like ETS,Level Machine,RTK Base GPS(Trimble).I can also learn GIS Fundamental course under Dhaka University. I can Complete Master&#39;s Degree under National University.Now I work Planning Divisi', 'placement/f9f33e55e3987e5494d1b5abf0ac2faf88619bbb0204033827.jpg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(72, 'Md joynal Abedin', '', '01618345868', 281757, 'Session15-16 ', 'Surveyor', 'Sun star Engineering ', 'Islampur dredgingproject.\r\nECB- 25\r\n ', 'placement/236fcac1e5e2407832a855c86a69c0b303e55b110204040906.jpg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(73, 'Md Shorab Hossain', 'shorabhossain@hotmail.com', '97455962683', 21, '2000-2001', 'Senior Land Surveyor', 'Boom General Contractors, Qatar', '.......', 'placement/d8108a6c07485f3c329bb8e4103dce181b917c150204051527.png', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(74, 'MD NAZMUL ISLAM SABUJ', 'nazmulislamsabuj9@gmail.com', '01748796318', 683817, '2012-13', 'Revenue Surveyor', 'Bangladesh Water Development Board.', 'Post:Revenue Surveyor. Present Posting:Gopalganj O&M Division,BWDB,Gopalganj.', 'placement/fec84d6a476988de4cddba381ef1dee11a5b61110204064904.jpg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(75, 'Samim hosan', 'samimosmanrazu@gmail.com', '01787314040', 578131, '11-12', 'Survey Engineer ', 'E-Engineering Ltd . ', 'As a survey Engineer.  I am workingat payra Rehabilitation project at kolapara Patuakhal.    ', 'placement/5df55be1934ec8e253fa35555241707b945488970204110933.jpg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(76, 'MD. ANAS', 'surveyoranas@gmail.com', '01688537907', 683762, '2012-2013', 'Survey Engineer', 'Moynamoti Survey', 'I am a Survey Engineer in a well known Engineering Company In Chattogram. I have done So many Project under PWD, RHD & LGED and well known Companies.', 'placement/d405b60f749181d11a55bed613a382ee56a12d950204124244.jpeg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(78, 'Jahidul Islam ', 'jahidhasan527694@gmail.com', '01748007558', 683796, '2012-2013', 'Technical Assistant  ', 'Bangladesh Inland Water Transport Authority ( BIWTA)     ', 'Estimate planning& design   ', 'placement/44e11c1ce2faff8aabf239f2acfdc4c90154ef0b0204214806.jpg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(79, 'Md. Mahabub Alam  ', 'amahabub325@gmail.com', '01992074925', 281796, '2015-16', 'Surveyor  ', 'Unemployed', 'Unemployed', 'placement/e78268064384a851c6392ccd9515e335d78591300204235911.jpg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(80, 'Ibrahim khalil ', 'akash97.bsi@gmail.com', '01845023116', 867351, '2014-15', 'Surveyor ', 'Local government engineering department  ', 'Local government engineering Department ', 'placement/5fd4032bfb046079e3f37f181d6a3fe05aba52820205002756.jpg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(81, 'Md.Imam Hossain Gazi', '', '01865097509', 5, '1995-1996', 'Surveyor', 'Ministry of Land', 'Patenga circle land office\r\nMetropolitan, Chattogram  ', 'placement/1a58a02df2d02fb1a010e3dc0b1930850d8ec1950205065312.jpeg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(82, 'Md.Imam Hossain Gazi', 'gaziimam6479@gmail.com', '01716226479', 5, '1995-1996', 'Surveyor', 'Ministry of Land', 'Patenga circle land office\r\nMetropolita,  Chattogram    ', 'placement/074d4cedb59e2b851494d51fc07d6d4699b423bc0205070327.jpeg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(83, 'Md.Manjur Alahi', 'manjuralahi.bwdb@gmail.com', '01843525481', 789098, '2006-2007', 'Sub-Assistant Engineer ', 'Bangladesh Water Development Board', 'Posting: Chittagong O&M Division-1 ', 'placement/fd183b4885e19eac693ccd02f08ba18c76a34e140205085323.jpg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(85, 'Abu Bakar Siddik ', 'SumonSiddikey938@gamil.com', '01677688922', 0, '2014-2015', 'Surveyor ', 'Local Government Engineering Department (LGED)', 'job posting :Naniyarchor, Rangamati.\r\nHome District :Noakhali, Upazilla :Hatiya\r\npost office : Burir chor(3890), Village: Kalir chor.', 'placement/fdeb080db76a8926a3500a02e58af093016150ab0205101228.jpg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(86, 'Md Sohel Rana', 'lgedsohelrana@gmail.com', '01738646721', 518159, '2011-2012', 'Surveyor', 'Local Government Engineering Department (LGED)', '11/11/2019 - Present', 'placement/3d4696e3847c9e3980e1d2d01abd1bc88986096f0205101727.jpg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(87, 'Md.Amir Hossain', 'mdamirhossain520@gmail.com', '01843201520', 683838, '2012-13', 'Surveyor', 'Local Government Engineering Department (LGED)', 'Iam really happy to work LGED.', 'placement/1f4156989e2f81d09ba597465d7524ce842f7ee50205112737.jpg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(88, 'Md. mizanur rahman', 'mizan.serv@gmail.com', '017689417458', 123, '2000-2001', 'surveyor', 'land ministry', 'serveyor, dc off. cumilla. la section. job stert from 30/10/2004', 'placement/93a6c4b42d219f8bf19a9fdf16b657e47b5c89e10205233731.jpg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(89, 'Mohammed Amir Hossen', 'amir_rhd@yahoo.com', '01757660000', 0, '2000-2001', 'Surveyor (RHD)', 'Roads & Highways Department', 'Surveyor, Road Division, Maijdee Court, Noakhali', 'placement/9a870496dba9dde1da8c8a5e748366b26e889b3b0205233803.jpg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(90, 'Mizanur Rahman', 'mizanengr@yahoo.com', '01931366733', 769816, '2013-14', 'Propriter', 'Dewan Construction And Survey Solution', 'Starter enterprenure', 'placement/3329239298c5c6226db0de476494e7195928f91a0205235159.jpg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(91, 'Kazi Abir Mahamod', 'abirmahamod@gmail.com', '+9640780558380', 989126, '2008-09', 'Civil Surveyor ', 'Hanwha E&C,  Project: Bishmaya New City Projec, Baghdad,Iraq ', 'All kinds of survey and civil related work as like Road constructio,  underground Galary,pipe line Road marking work etc.  ', 'placement/2879ef50533c15981cc05a594659f37e203d56930206015828.jpg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(92, 'Sharmin Akter', 'saikamahamod@gmail.com', '013000', 683797, '2012-13', 'Surveyor', 'LGED', 'Site supervision and  survey work', 'placement/7f56a49678877da3f8d64025dfcbaad458942e910206020156.jpg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(93, 'Md. Rashedul Alam', 'surveyorrinto@gmail.com', '01729848627', 989151, '2013', 'Surveyor ( Engineering )', 'Bangladesh water development board', 'Noakhali O&M Division\r\nBwdb, Sonapur, Noakhali', 'placement/7104e701a77145c83b78a3c0d7171cff9235b5d40206024217.jpg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(94, 'md.ali monsur', 'monsur2184@gmail.com', '01712478082', 12478082, '1999-2003', 'surveyor ', 'ministry of land at deputy commissioners office. land acquisition section (LA).noakhali', 'frist joining of upazila land office, borura.comilla 27/10/2004\r\nthan deputy commissioners office. land acquisition section (LA).Chittagong (2007-2014)\r\nthan deputy commissioners office. States acquisition section (s.a).brahmanbaria (2014-2019)\r\nnow noakh', 'placement/8bfce9fcf8f16fc1800551d5b9d907a9e9b994810206060034.jpg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(95, 'Ziban Chandra Das', 'zibanchandra@gmail.com', '+8801914517939', 2, '2000-2001', 'Surveyor', 'Ministry Of Land', 'Surveyor(L.A) at DC office, Sylhet.(2005 to 2010).\r\nSurveyor (KGO in charge) at Ac(Land) Office, Gowainghat, Sylhet (2010 to 2016).\r\nSurveyor (KGO in Charge) at Ac(Land) Office, Golapganj, Sylhet (2016 to 2018).\r\nSurveyor (KGO in Charge) at Ac(Land) Offic', 'placement/b8866f18b1e3f65e96bb0c65001b51f32b19acd90206235510.jpeg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(96, 'Md Nasir Uddin', 'nasiuddin71@gmail.com', '01814230471', 789113, '2006-2007', 'Surveyor', 'Math Digital Survey &Design Engineering Ltd.', 'I am Surveyor.\r\nmy Responsibility Layout Survey, Topographical Survey & Auto Level Survey.', 'placement/aa4b3e0d80bf929a842b6a576a89b2df73270f310209001917.jpg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(97, 'Md JewelAhammed  ', 'mdjewelahammedjp@gmail.com', '01992074854', 769854, '2013-14', 'Student ', 'IEB', 'Student ', 'placement/0bb3a6464dd11957a4a7a2d739e123b26a8262820209082935.jpg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(98, 'Md Shohag Hossan  ', 'shohaghossan494@gmail.com', '01760330494', 281801, '2015-16', 'Survey Engnieer  ', 'M/S Tazul Trading ', 'I am working as surveyor on a river  Re-Excavation project', 'placement/88f96ec8fd91a47da4fb3db365f22fe4572db8260209105630.jpg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(99, 'Md.Naymul Hasan.', 'nayemulhassan11243@gmail.com', '+8801716616030', 590102, '2002-03', 'Survey Engineer', 'ACE Consultant Ltd.', 'I am working in Padma Multipurpose Bridge Project(PMBP).ACE Consultant Ltd.\r\nSurvey Engineer. ', 'placement/accf102caaa970ce65d217b9ae9a8e9a57caa67c0211064126.jpg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(100, 'Md Nazmul Hasan', 'nazmul989116@gmail.com', '01814133601', 989116, '2008-09', 'Surveyor', 'Zila Parishad Jamalpur  ', 'Ministry Of LGRD ', 'placement/be77bd0eab25243edb9d937e81b105519d89f29c0212091636.jpg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(101, 'Mahamudul Hasan Bappy', 'bappyhasan016@gmail.com', '01838222121', 683805, '2012-13', 'Survey Engineer  ', 'Western Engineering (Pvt.) Ltd. ', 'I am working in Drainage Improvement Dhaka-Narayanganj-Demra (DND) Project.Western Engineering Pvt. Ltd. Survey Engineer.', 'placement/e7f1820b6afffa7b5207b42e63fd0fd3b3bf28f90212091848.jpg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(102, 'Engr. Gias Uddin', 'giasbdit@gmail.com', '01616482551', 789174, '2006-2007', 'Assistant Revenue Officer', 'Bangladesh Water Development Board', 'Working with Land & Revenue', 'placement/14190bee908340a75a5af1dede2439dc1013df560212092057.jpg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(103, 'Md. Tofayel Ahmmed ', 'tofaneel@gmail.com', '01521516511', 281822, '2015-2016', 'Unemployed ', 'Unemployed ', 'I have not got a job yet. ', 'placement/0b88ca2c7b99132233390a2164986aef30c9b60b0212092105.jpg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(104, 'Taslima Chowdhury Eva', 'taslimachowdhuryeva62@gmail.com', '01918482551', 769796, '13-14', 'Surveyor (Engg)', 'Bangladesh Water Development Board', 'Work at Brahmanbaria', 'placement/7b51155cba67dd1e364e2a44fea454092002bf5c0212092836.jpg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(105, 'Md.osman hossain', 'osman.bwdb.123@gmail.com', '01756846225', 389115, '09-10', 'Surveyor(Enginee) ', 'Bangladesh water development board  ', 'Join Bangladesh water development board since agust 2016 Rajbari o&m Divisio, Rajbar, Faridpu.         ', 'placement/6bab3adf9c6dbfc7fb49d1ebf3f3f50d12cd15bf0212094235.jpg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(106, 'Md. Sajjad Hossain ', 'shajjat.ahmed02@gmail.com', '01752898683', 769875, '2013-14', 'Surveyor ', 'S.A ENGINEERING ', 'W-8 Project\r\nChittagong WASA', 'placement/3d525d45c3781c64735727c0e7c8f47520dfc55a0212101758.jpg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(107, 'Md. Nazmul Hasan', 'nazmulbsi578108@gmail.com', '01318803621', 578108, '2011-2012', 'Head Of The Deparment (Surveying)', 'INFRA POLYTECHNIC INSTITUTE', 'Head Of The Deparment (Surveying) At INFRA Polytechnic Institute In Barishal,Kashipur', 'placement/3cb749209b842171364ad3fba446b52a374a0aba0212225651.jpg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(108, 'MD.Masud Farvez', 'mfnasib45@gmail.com', '01846987845', 683773, '2012-13', 'Surveyor', 'Max Infrastructure limited', 'Ruppor Nuclear Power Plant Project', 'placement/d09069f501aefcff674616056b6f6e97a38b99380212231850.jpg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(109, 'Tawhid Molla', '', '01749897264', 769846, '13-14', 'Head Of The Department ( Surveying)', 'Younus Group', 'River Re-Excavation & Dredging Also Construction Work.', 'placement/0318611de02dc2d03a8506141e5e50504c3eb58c0213061314.jpg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(110, 'Jannatul Nayeem', '', '01314612320', 281779, ' Session 2015-16 ', 'Unemployed ', 'Unemployed ', 'I have not got a job yet', 'placement/2bea3f8f9f5d5ddbe26f24395ac26b7768864f0c0213094157.jpg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(111, 'Md Rakibur Rahman', 'mdrakiburr1@gmail.com', '01714793770', 867279, '2014-15', 'Survey Engineer', 'Dhaka wasa 02.9 project ', 'Dhaka wasa 02.9 project (DWSNIP)', 'placement/e4d77fa1e9f4057a5817ee353170cbbaf1a11f290213120554.jpg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(112, 'All Mohaymin Himel ', 'allmohayminhimal@gmail.com', '01740493322', 578141, '11-12', 'Civil Surveyor ', 'Hyundai Construction & Engineering   ', 'Me Working For Karbala Oil refinery Project.  ', 'placement/03d459f340b1ea8b41f3dc6cfd2518a1ea4a07590213121252.jpg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(113, 'Shekh Farid', 'faridrizu@gmail.com', '01923931289', 578145, '11-12', 'Lecturer ', 'Baily school ', 'ICT lecture.  (IGCSE ICT Lecture)   ', 'placement/3e77c2cfa406fced0eb450ea03baf73cf60460e20213121958.jpg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(114, 'Miah Mohammad Mohiuddin  ', 'mohiuddinbwdb@gmail.com', '01558966538', 578129, '2011-12', 'Revenue surveor', 'Bangladesh Water Development Board    ', 'Moulvibazar O&M Divisio.   ', 'placement/2672d995c3f48ef2eb2a958f9122e26a55bc1fa20213124516.jpg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(115, 'MD Mostafizur Rahman', 'mostafizurrahman377595@gmail.com', '01881372437', 377595, '16-17', 'NA', 'NA', 'not ay job to discribe ', 'placement/1963e23efb6bf28bd6eec002e9def62bbf2fc7830216215500.jpg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(116, 'Karibul hasan', 'surveyor.karibul@gmail.com', '+97477064074', 489126, '2001/2002', 'Managing  Director', 'A one trading & contracting wll', 'Construction  business.\r\nAll type of civil Construction  work.(block work, plaster ,tiles marvel,etc)', 'placement/cf4bccc4a2f032f457e6b6853e1e354a4e0814920222101210.jpg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(117, 'Md.Rashed Arman', '', ' 01761923685', 0, '15th jun 2017', 'Unemployed', 'Water development board', 'Unemployed', 'placement/70c17a60013ddfbffcf80bda3d5b6518971f29770402055635.JPG', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(118, 'Yeasin Dewan ', 'yasindewan5@gmail.com', '01686071468 ', 570458, '2009-2010', 'Technical assistant ', 'Biwta', 'Yes', 'placement/5de6e8568fe63af1c7d4e845734eae18e4ecc0410524192229.jpg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(119, 'MD. PRINCE MAHMUD SHUVO', 'mpmshuvo@gmail.com', '01793018244', 769819, '2013-14', 'SURVEYOR', 'LOCAL GOVERNMENT ENGINEERING DEPARTMENT(LGED)', 'Some of mine workplace details are given below.\r\n1. Bangladesh Survey Organisations LTD.(BSO)\r\n2. OSJI Joint Venture at Gumti Bridge Project.\r\n3. Construction Supervision Consultant,Bangladesh Army, as an Survey-in-Charge at Kashiani Army Camp, Gopalganj', 'placement/4c725f4bc12683936c184a4413eb4b0cc6d6a58a0626124932.jpg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(120, 'Md. Jonaid Ahammad', 'jonaid046@gmail.com', '01727336356', 478382, '2010-11', 'Surveyor (Engineering)', 'Bangladesh Water Development Board', 'BWDB, Sylhet Division.', 'placement/7832528a2fdfc93af3d18e52f92ca668ea051eb40811094850.jpg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(121, 'MD. AFSAR UDDIN', 'aesconsultants.bd@gmail.com', '+8801722570857', 789147, '2006-2007', 'Managing Director ', 'Abid Engineering and Surveying Consultants.', '1. Land Survey & Digital Mapping.\r\n2. Topographic Survey & GIS Mapping.\r\n3. Hydrological & Hydrographic Survey.\r\n4. Land & Property Valuation Survey.\r\n5. Construction & Development.\r\n6. Project Master Planning.\r\n7. Mouza Map Digitizing.\r\n8. Training & Edu', 'placement/783624af7483596d840c75f0ca5067accbeeeb160913090735.jpg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(122, 'MD. NESAR UDDIN', 'nesarrhd10@gmail.com', '+8801722433314', 789106, '2006-2007', 'Surveyor', 'Roads and Highways Department. ', 'Government of the People&#39;s Republic of Bangladesh.', 'placement/3958d2627ea4125861ede031c6529775b6a278b00913091510.jpg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(123, 'Ahsan', 'dmahsan1660@gmail.com', '01785961660', 281813, '15-16', 'Surveyor (Engineering)', 'JSTR ENGINEERING LTD', 'Surveyor (Engineering)', 'placement/d24991c89aff4d888c019cd3b8135edc573723ab0926043330.jpg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(124, 'SAJIB BARAI', 'sajibbarai7288@gmail.com', '01997021957', 938390, '17-18', 'SURVEYOR', 'Unemployed', 'Unemployed', 'placement/4c808197efbe729af2f37a8f83b7d6b9eb674ac10127004357.jpg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(125, 'Abul Kalam azad', '', '01647380424', 938289, '2017-18', 'Unemployed ', 'Unemploye', 'Unemploye', 'placement/334b9fbe93b8113472da34c5dcd4079be27ce8b00127025119.jpg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(126, 'Mukto Biswas', 'mbb200207@gmail.com', '01752180280', 938373, '17-18', 'Surveyor ', 'unemployed ', 'unemployed ', 'placement/10d9982b4e33c69891d21c013b7b19e2a507ddc50127025306.jpg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(127, 'Alauddin Gazi', '', '01756425562', 938414, '17-18', 'Unemployed', 'Unemployed', 'Unemployed', 'placement/92e263c32b2010e63803c516e2ce3959c4f7abc10127031242.jpg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(128, 'SAJIB MAZUMDER', 'mazumderjoy7943@gmail.com', '01405572277,01', 281800, '15-16', 'SURVEYOR', 'Padma  Bridge Railway Project.', 'Padma  Bridge Railway Project', 'placement/4b977bf938a978581c9291e3a00741ae3ffb6f550127055456.jpeg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(129, 'S M Sabbir Rahoman', 'sabbirrahoman2021@gmail.com', '01717904999', 377648, '16-17', 'SURVEYOR', 'MasPar Engineering & Construction', 'MasPar Engineering & Construction', 'placement/af86a441429a01836d186d332c75e3f635ffc0260127061655.jpeg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(130, 'Samim', 'chowdhurysamimahmed@gmail.com', '01988705778', 377586, '2016-2017', 'Surveyor', 'Survey Corporation (Pvt.) Limited    ', 'A House of Consultants for \r\nEngineering Survey\r\nMapping\r\nDesigning\r\nPlanning\r\nSoil Investigation & Construction        ', 'placement/b30a8bd91e6702d4b18d063de9ee52afe1b246f40127081042.jpg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(131, 'MD.ALAMIN HOSSAIN', 'md3085816@gmail.com', '01793579446', 938343, '17-18', 'Surveyor', 'unemployed', 'unemployed', 'placement/f29d06e0636912328d62ab716586dd4ec6cf75d20128074531.jpg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(132, 'SUMON MIAH', 'sumonkhan.2017cm@gmail.com', '01794523796', 938394, '17-18', 'Surveyor', 'unemployed', 'unemployed', 'placement/b61fc3336937face56c33883378a5e03e24660bd0128083247.jpg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(133, 'ASHRAFUL', 'mdpavel074@gmail.com', '01770974653', 938363, '17-18', 'Surveyor', 'unemployed', 'unemployed', 'placement/074d0f826d9c42f951d21ba781880c8d6fbbd2860128083731.jpg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(134, 'Soriful Islam Swapan', 'swapan377650@gmail.com', '01645123230', 377640, 'Unemployed ', 'Surveyor ', 'CHINA CAMCE ENGINEERING COMPANY LIMITED ', 'Unemployed  ', 'placement/545d26ff9aa70eec182d1071d2fd82865dde009a0208071629.jpg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(135, 'Md. Asadujjaman Sajeeb', 'asadujjamansajeebcou@gmail.com', '01704323781', 377622, '2016-2017', 'No', 'No', 'Unemployed ', 'placement/ddcf690eb354e3264c83db1bbc76d776261fd3340209025433.jpg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(136, 'Abdullah al galin', 'andullhagalib504@gmail.com', '01745082769', 377763, '2nd shift(b)', 'No', 'No', 'Unemployed', 'placement/90a1f22a10c9e5ed5659c9383f93e79d0eb725600209025553.jpg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(137, 'MD. SHAKIL AHMED', 'mdshakilahmed217@gmail.com', '01710345901', 377707, '2016-2017', 'SURVEYOR ', 'UNEMPLOYED', 'NO', 'placement/a5cebac793cebae34de745c0efd4b832348f992d0209030243.jpg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(138, 'MD: Nahid Hasan', 'engnahidsazib5@gmail.com', '01750928418', 377722, '2016-17', 'Surveyor', 'no', 'Un employed ', 'placement/56b27197afcb6210d8ec50807fbeb363d5988bf50209031111.jpg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(139, 'Nadim Hossain', 'mdnadim323232@gmail.com', '01782624719', 377777, 'no', 'no', 'no', 'no', 'placement/5be90cad23bd20336b70afa3e295254b0b038b4d0209031153.jpg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(140, 'Md.Rasel hossen', 'zubaydulislamrasel4455@gmail.com', '01778115291', 377781, '16-17', 'Surveyor ', 'Unemployed ', 'No', 'placement/7d6c0a14857298e08be6bc0452f7d3689631829b0209031951.jpg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(141, 'MD Rashed Hossain', 'rashedalom523@gmail.com', '01827248218', 377786, '16-17', 'no', 'no', 'no', 'placement/ed0e85ed84662b126607b4942f78c54ac7a82c7b0209032119.jpg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(142, 'Tanvir Rabbi Mazumdar', 'tanvirmozumder77@gmail.com', '01851874473', 377603, '2016-2017', 'Side Engineer', 'Amin Design and Consultancy', 'Digital Survey Engineer', 'placement/b0dc3f6a161b223f940d27425191e2bd8a72b2eb0209032940.jpg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(143, 'Md. Nasim Howlader ', 'nasimavro@gmail.com', '01724206888', 377684, '2016-17', 'Surveyor', 'No', 'No', 'placement/93b7d4ad8acd8b01e4edab53a590563bf85dbb900209033029.jpg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(144, 'MD ABUL KHAIR SAKIB ', 'shakibctg002@gmail.com', '01517825557', 377719, '2016-2017', 'SURVEYOR ', 'NO', 'UnEmployed ', 'placement/aacda5faafe18924718e8fde1444c216253e097c0209034014.jpg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(145, 'MAHMUDUL HASAN', 'mdmahmudulhasan773@gmail.com', '01787297993', 377758, '2016-2017', 'SURVEYOR ', 'UNEMPLOYED', 'No', 'placement/7083790473c9767b11b8e2a1cfbf0566b940e9430209034308.jpg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(146, 'Milinda Chakma', '', '01827798287', 377761, '2016-17', 'No', 'No', 'No', 'placement/e04f7f8c109c44d07f4655f163d4597e091fc7290209035610.jpg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(147, 'Md Abu Bakar Siddik', 'foysalahmed01708@gmail.cpm', '01634530826', 377592, '2016-2017', 'Surveyor', 'No', 'No', 'placement/8b501d659bcfc661f2319adaa3a9202fac1b5a210209042003.jpg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(148, 'MD.MOSHARAF HOSSAIN', 'mosharafkhanmosharafkhan@gmail.com', '01687661803', 377686, '16-17', 'no', 'no', 'no', 'placement/5cedec9b0c58661bde8d2ec7ed4b4a3cf9c3662f0209044716.jpg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(149, 'Md. Abdul salam', 'arsalam117@gmail.com', '01868835355', 377681, '2016-2017', 'Owner ', 'North Bengal Soil and survey Ltd ', 'Our service \r\nTopographical survey,  Lay-out, soil test,  Contour map', 'placement/35ba8b6ca066511e5edab7440c1671973f2da0ec0209045652.jpg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(150, 'Shanjida akter ', 'sanjenajahanshanjida@gmail.com', '01835512832', 377620, '2016-2017', 'surveyor', 'no', 'no', 'placement/c05245aa3fe16d1ca7e25e27ab731f19e46bed760209045844.jpg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(151, 'Md Ruhul Amin', 'mdrohanamin555@gmail.com', '01903325754', 377741, '2016-17', 'No', 'No', 'No', 'placement/efc207a012746673a83ef66f43189f88138571020209045957.jpg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(152, 'Md Jony ahmmed', 'smjonykhan4321@gmail.com', '01740322684', 377767, '16-17', 'Assistant surveyors ', 'National Development Engineers (NDE)', '.', 'placement/50c024422548b6a5183795f08591d528aaa02f910209053504.jpg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(153, 'Mutasin billah soykot', 'mdshoykothossain@gmail.com', '01767978854', 377691, '16-17', 'No', 'No', 'No', 'placement/a35bbd27ff154dc2b7f244514e232a1e5941c2b80209053846.jpg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(154, 'Shamim Hossain', 'rkshamim12@gmail.com', '0151441974', 377601, '2016-2017', 'Surveyor', 'Survey Corporation (Pvt.) Limited ', 'Digital Survey\r\nSoil Investigation \r\nLay-Out\r\nDigital Topography \r\n', 'placement/4056603f618832c4aeafbb656e106582d0b008130209064452.jpg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(155, 'Md. Noor Hossain Shawkat', '', '01713388698', 377710, '2016-17', 'Jr. Executive ', 'OMC Group', '', 'placement/ab7556d0a234718d55c8c68b3046ebd849940c260209065031.jpeg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(156, 'MD RABBI HOSSAIN', 'alommaksud618@gmail.com', '01923672666', 377588, '2016-2017', 'COMPUTER OPERATOR', 'BELMONTE FEBRICS COM LTD', 'Febrics Items', 'placement/16cc741a52d8c435bc8c3c5bf1dd80e3985341ed0209065102.jpg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(157, 'Soriful Islam Swapan', 'sharifulislamswapan14@gmail.com', '01739610322', 377640, '2016-2017', 'Surveyor ', 'CHINA CAMCE ENGINEERING COMPANY LIMITED ', 'Unemployed ', 'placement/545d26ff9aa70eec182d1071d2fd82865dde009a0209065546.jpg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(158, 'Ahammad Tazbir ', 'ahammadtazbir08@gmail.com', '01841154009', 377631, '2016-17', 'Surveyor ', 'No', 'No', 'placement/f11a8c9a750a7be86216a7805146cabcbf1e9f540209070934.jpg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(159, 'Jubadul islam shawon', 'jubaydulislamshawon72@gmail.com', '01784954501', 377652, '16-17', 'Surveyor', 'The pioneer soil investigator', 'Topography survey', 'placement/41af69ba1c05a63128c18521cf4122047abd534e0209071148.jpg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(160, 'Md. Nazimul Haque', '', '01956775719', 377637, '2016-17', 'No', 'No', 'No', 'placement/d1afe673a9789a3229cc7260dd2f5b495565421d0209074756.jpg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(161, 'Riazul Islam', 'riazulbsi11@gmail.com', '01780422813', 377725, '2016-17', 'Surveyor', 'No', '.', 'placement/d1f8c53492c3ab9976b24890576bab77e3ab9bfc0209082018.jpg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(162, 'Md. Saiful Islam', 'saifulbsi32@gmail.com', '01738109798', 377632, '2016-17', 'Land Surveyor', 'Payra Port Authority ', 'Payra Port, Kalapara, Patuakhali.   ', 'placement/ad5dc4bfcc78dceb8a6a7b408ed4297893df49530209082932.jpg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(163, 'Md Shorif Hossain', 'mdshorifhossain120@gmail.com', '01745397983', 377656, '2016-2017', 'Surveyor', 'Asian Dredgers limited ', 'Shorif mention, motijil Dhaka', 'placement/4bf60a9b93d2ca05cfaa1e10d6fd4c75c05133f70209082952.jpeg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(164, 'Md. Abdullah al noman ', 'mdabdullahalnoman13@gmail.com', '01753663563', 377600, '16-17', 'unemployment ', 'unemployment ', 'unemployment ', 'placement/1a770a1858423aaa394fae2045559292320c5df10209083525.jpg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(165, 'Hasan Rabbi ', 'hasanrabbi377779@gmail.com', '01825076321', 377779, '2016-17', 'Survey Engineer  ', 'R.N Enterprise ', 'Typography survey, level, layout, pre work, post work, x- section, Long section & volume calculation etc        ', 'placement/ab17d0ba4261310da6a8e2bd9bdc8bb630a898710209083631.jpg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(166, 'Md.Jaber Monour', 'www.jaber.monour@gmail.com', '01881797276', 377736, '2016-17', 'JR Surveyor', 'Comprehensive Holding Ltd', 'Topological survey, Layout,Level,Construction etc', 'placement/a1a32ede36870430e4eb28cc7048d13ed9ce55c40209085218.jpg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(167, 'Md Asadul Islam', 'uncommonasadul5@gmail.com', '01767565340', 377674, '2016-2017', 'Surveyor', 'Sinohydro Corporation ', 'Matarbari 1200mw Ultra Supar Critical Coal Fired Power Plant project Cox&#39;s babar ', 'placement/349667c5e7b6a5ba81873c0a2e10657db66b07490209085613.jpeg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(168, 'Md Onik Hossain ', 'onik377659@gmail.com', '01723614438', 377659, '2016-2017', 'Unemployment ', 'No', 'No', 'placement/5186bcb22261d67bd168c512945036f7440b82d20209090430.jpeg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(169, 'Sabuj Hossain', 'Sabujft215@gmail.com', '01624617752', 377584, '2016-17', 'No', 'No ', 'No', 'placement/2b89ead0c28e480c6ce59948333dbfb0e2b96a5a0209091156.jpg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(170, 'Morshed Alam', '', '01690029885', 377624, '2016-17', 'Surveyor', 'No', '.', 'placement/89a33d383a10049bb2f87c432d9e08872e3b34af0209093719.jpg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(171, 'Md.Shofiqul Islam', 'shahinnote7s@gmail.com', '01752257689', 377574, '2016-17', 'Unemployment ', 'No', 'No', 'placement/ed26fa6994d93f6b1c53df710a8cdb763b411da40209101001.jpg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(172, 'MD. IBRAHIM ', 'Ahmadabdullahibrahim05@gmail.com', '01834574112', 980376, '2016-2017', 'Surveyor', 'No', 'I have not got any job yet.', 'placement/617ff477044a1002d0c0c1d4dfd84cabeddbcbfd0209102408.jpg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(173, 'Md nazmul hasan', 'mdnazmul377594@gmail.com', '01732091181', 377594, '16-17', 'No', 'No', 'No', 'placement/e4c3a3d1940c42f9eae9cd7c8a5f2da6698ef1330209102706.jpg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(174, 'MD. Tusher Abdullah ', 'tushercomilla38@gmail.com', '01634934514', 377702, '2016-17', 'Project Surveyor  ', 'Dhaka EPC Company  ', 'Project: Bangabandhu Sheikh Mujib Hi-tech Park Sylhet. ', 'placement/c2ccebfc04f066d28df2e94d828787fce03117e00209102852.jpg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(175, 'Md Shagor Hossain ', 'mdshagor01740@gamil.com', '01740712746', 377583, '2016-2017', 'Job coaching ', 'Duet Coaching ', 'Coaching ', 'placement/70ce15d1fe2a1d4aee9a944475d0c9897718b6560209110306.jpg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(176, 'Md Alimuddin Rasel', 'alimuddinrasel@gmail.com', '01762873710', 377633, '2016-2017', 'Duetv coaching ', 'Duet Coaching ', 'Duet coaching ', 'placement/22369e638be263e5fe36be14824c4c2c6fb8c78c0209110906.jpg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(177, 'Md Rasel miah', 'raselmahmud70@gmail.com', '01749699684', 377669, '2016-2017', 'Surveyor', 'Toma group ', 'Thophografy survey  layout lavel', 'placement/b7f28c8f6cbf96e35909026faf611a72e55a0fdf0209111514.jpg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(178, 'MD RASEL', 'mdraselmridha9999@gmail.com', '01706932999', 377570, '2016-2017', 'Surveyor.', 'Edascon survey pvt.ltd.', 'I had been joined that company since 2020.', 'placement/e04f7f8c109c44d07f4655f163d4597e091fc7290209114121.jpg', '2023-03-21 09:33:47', '2023-03-21 09:33:47');
INSERT INTO `jobplaces` (`id`, `name`, `email`, `mobile`, `roll_number`, `session`, `position`, `company`, `details`, `photo`, `created_at`, `updated_at`) VALUES
(179, 'Md.Sumon', '', '01714717418', 980369, '2016-2017', 'Surveyor', 'BBL BTC MLB JV', 'Layout,Level', 'placement/60872a1703eea5d50d90d9ce2d1a8451d0bd66b30209114424.jpg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(180, 'Nitai Chandra Sutradhar', 'nitaibsi@gmail.com', '01860484842', 377628, '2016-17', ' Surveyor', 'HQ 24 ENGINEERS CONSTRUCTION BRIGADE,BANGLADESH ARMY', 'as a project survey engineer ', 'placement/2d58b2b796c2f10b4d80ed3c93c0063dd242f9250209114613.jpg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(181, 'RAKIB HOSSAIN', '', '01745574785', 377731, '2016-2017', 'SURVEYOR ', 'Global Enggineering digital survey', 'Surveyor', 'placement/e4a6b03826918f088e3d8569a5269f0b7069245b0209115916.png', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(182, 'MD. AL-AMIN HOSSAIN', 'mdalaminhossain9490@gmail.com', '01789615256', 377697, '2016-2017', 'SURVEYOR ', 'UNEMPLOYED', 'No', 'placement/8f1ec411c97d44b81ff90483763a6f6e568b97da0209120142.jpg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(183, 'MD Habibur Rahman', 'mdhabib01991034903@gmail.com', '01611657372', 377727, '2016-2017', 'survey Engineer', 'No', 'No', 'placement/0a75ab4a8f92f8351a459a388d5f4cea08a2cb180209123243.jpg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(184, 'Abdurrahman  ', 'abdurrahman377690@gmail.com', '01676556813', 377690, '2016-2017', 'Survey Engineer ', 'Rupali soil investigator & Survey Experts   ', 'Typography survey, level, layout, pre work, post work, x- section, Long section & volume calculation etc\r\n', 'placement/9dd5e4a8f826b5deca67fbc253da64c99c05c6ae0209123932.jpg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(185, 'MD.SABBIR AHMED ', 'sabbirahmed9293@gmail.com', '01731191563', 377706, '2016-17', 'Survey Engineer ', 'Navana Real Stead Lit', 'Typography survey, level, layout, pre work, post work, x- section, Long section & volume calculation etc', 'placement/2ced97427328858419a5d18a29015e598778df530209125014.jpg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(186, 'Forhad Hossen', 'rifatcml21@gmail.com', '01537177684', 377661, '2016-2017', 'Surveying', 'No', 'Using  digital total station for topography and measurements ', 'placement/495d7449925b5ac364cbbe2f93ad0bc0ccdf9fe30209131257.jpeg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(187, 'Md.Shakil Mia', 'shakilbsi102@gmail.com', '01789400093', 980370, '2016-17', 'Jr.Surveyor ', 'Toma Construction & Co.Ltd', 'Project:4-Laning of Jatrabari(Mayor Mohammad Hanif Fly over)-Demra(Sultana kamal Bridge)Roads project\r\nResponsible:Topographic Survey,Layout,Earthwork volume Calculation', 'placement/280b19467d95637744c6063699d701327d7a7eee0209204053.jpg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(188, 'Md Raton Hossain', 'rotonislam5151@gmai.com', '01709285151', 377651, '2016-2017', 'Surveyor', 'NDE', 'National Development Engineers Ltd  NDE', 'placement/f9fb2e706fdf7c62e503e5d7340556d8be32a4670209215138.jpg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(189, 'Kawsar Ahmed ', 'Kawsarahmed278930@gmail.com', '01799278930', 377783, '16-17', 'No', 'No', 'No', 'placement/e53bd49ebefbbe222ee9855e25260211569350470209215449.jpg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(190, 'Kazi nazmul ahmmed', 'kazialvi1000@gmail.com', '01874758634', 377738, '16-17', 'No', 'No', 'No', 'placement/5eb43197bae3fbebc1d487c2e7fe4ca3550c6a2f0209215953.jpg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(191, 'Md Masud Rana', 'mdrana603869@gmail.com', '+8801932-15090', 377585, '2016-2017', 'No', 'No', 'No', 'placement/02a205ae6fba1dc5720f0b1142650292149585740209222628.jpeg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(192, 'Md Masud Rana', 'mdrana603869@gmail.com', '01932-150902', 377585, '2016-2017', 'No', 'No', 'No', 'placement/02a205ae6fba1dc5720f0b1142650292149585740209222941.jpeg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(193, 'Sharmin Akter', 'sharmin377618@gmail.com', '01795432800', 377618, '2016-2017', 'No', 'No', 'No', 'placement/a9cfe366cc403647eb1fd5544ec7089b357f8b3f0209224510.jpg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(194, 'Md:Mamun Or Rashid', 'mm127234@gmail.com', '01795236486', 377693, '16-17', 'No', 'No', 'No', 'placement/b8bd5eb3190394b97f32ff60f6674bf3a8f9e55d0209230614.jpg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(195, 'Mehedi Hasan', 'rxmehadi@gmail.com', '01632-042114', 377655, '2016-2017', 'No', 'No', 'No', 'placement/dd3a426bedd133bf0f648305262b4daceed4d8400209230734.jpeg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(196, 'MD.A.ALIM', 'kazipalash334@gmail.com', '01727504359', 377743, '2016-17', 'No', 'No', 'No', 'placement/bdd6002e6e600e83f02a7d8a806ff4645d7fc6f30209232502.jpg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(197, 'Md Mokarom Hossain ', 'mokaromhossain347@gmail.com', '01885474347', 377672, '16-17', 'No', 'No', 'No', 'placement/694399b236882e5064484491ba17f1ffe53bd1c20209234248.jpg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(198, 'Faisal Mia', 'islamjahidul172@gmail.com', '01628005065', 377766, '16-17', 'No', 'No', 'No', 'placement/1ae43457664e9cdc868620105da90f6a051423000209234334.jpg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(199, 'Fatema akter', '', '0184981689', 377695, '2016-2017', 'survey engineer', 'No', 'No', 'placement/bf27f61d844e8f3b76605af768f8848a3f713ea20210001738.jpg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(200, 'Md. Nazmul Haque', 'Nazmulhaque2047@gmail.com', '01700-995491', 377647, '16-17', 'Jr. Surveyor', 'NDE', 'National Development Engineers Ltd.-NDE', 'placement/befb7d35ece3391c4c643621a9ed7382dc9c817a0210014050.jpg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(201, 'Md.Nazmul Haque', 'Nazmulhaque2047@gmail.com', '01700995491', 377647, '16-17', 'Jr. Surveyor', 'National Development Engineers Ltd.-NDE', 'NDE', 'placement/055d97a3200c5cb9476e44bb8d6be1a1cfeb2d990210014906.jpg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(202, 'Zahid Hasan ', 'zahidmalik72545@gmail.com', '01628921835', 377752, '2016-2017', 'Unemployment ', 'No', 'No', 'placement/431003a95e0e3f81a9c14e2c73025a576dc6a8ce0210030847.jpg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(203, 'Chowdhury Ahsanul Kibria', 'robinchow98@gmail.com', '01779330980', 3777745, '2016-17', 'Surveyor', 'Ac land office, Gazipur, sadar', 'Master roll Surveyor', 'placement/16a898f7d4ab14f079f54c40021095f9a37925e30210032443.jpg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(204, 'Md.Alamgir hossain', 'mdalamgirhossain1997ak@gmail.com', '01778923125', 769853, '2013-2014', 'Survey Engineer ', 'Abdul monem ltd', 'Digital surveyor Abdul Monem Economic zone,Baushia Gazaria Munshiganj ', 'placement/2b9e960910019fc87dc2457753b9d54a946d17ac0210042806.jpg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(205, 'Md Asiful Islam Rafi ', 'Urontonishat2@gmail.com', ' 01797412230 ', 377589, '2016-17', 'No', 'No', 'No', 'placement/e9a7e6e69f2b9472217d5a80342be8a36393fd220210050141.jpeg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(206, 'Rafikul Islam', 'rafiqsazzad3437480@gmail.com', '01903437480', 377759, '16-17', 'No', 'No', 'No', 'placement/1497f3b5f8babcb900fca4bf4467c00e306181b80210055019.jpg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(207, 'Sadia Sulatn', 'sadiakoly06@gmail.com', '01720144092', 377660, '16-17', 'Suveyor', 'No', 'No', 'placement/150fbe8a78dde14bf7f88f29a075d3acc52f45490210085019.jpg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(208, 'Mahedi Hasan', 'mahedi1741@gmail.com', '01741852515', 377723, '16-17', 'Surveyor', 'No', 'No', 'placement/527e343b8b40a4f166743c78f50553306da725d10210085441.jpg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(209, 'Merina Mojumder Eva', '', '01812891134', 377614, '16-17', 'Surveyor ', 'No', 'No', 'placement/8ecbca22caabb0456df4a0b5c3e13aaf7899a02c0210095225.jpg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(210, 'Naimul Hossain ', 'ambivertbijoy10@gmail.com', '+8801639424533', 377703, '2016-2017', 'N/A', 'N/A', 'N/A', 'placement/b6b002fcbe7647c1f2ed75d25874db11268843140210100307.jpg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(211, 'Sujan mia', 'sujonmazi377579@gmail.com', '01858902736', 377579, '16-17', 'No', 'No', 'No', 'placement/94a73fbf2be8e4891e484c828f09b13b663240310210101209.jpg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(212, 'Faria Akter', 'fariatamanna2029@gmail.com', '01821-503595', 377605, '2016-2017', 'No', 'No', 'no', 'placement/2876598fc2cb584651e0a2bda1d82292a2a6810f0210102708.jpg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(213, 'Abdul Halim Fahim    ', 'ahfahimsurvey@gmail', '01637598990', 377755, '16-17', 'NA', 'NA', 'NA', 'placement/a5be58faa9ced7c55c00fe8a3edfa139830971ad0210105553.jpg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(214, 'Fahad al muttakim', 'fdfahad1999@gmail.com', ' 01792416215', 377615, '2016-2017', 'No', 'no', 'no', 'placement/ba06ac4d010ce4e4fca791785a65f54426f0217d0210110451.jpeg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(215, 'Moushmei Akter', '', '01857240284', 377671, '2016-2017', 'Unemployed ', 'Unemployed ', 'Unemployed ', 'placement/6470560481ca66ee086e1c4500276cb79ca2e2ce0210113058.jpeg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(216, 'Jahidhasan', 'jahidhasan3830@gmail.com', '01876443830', 377617, '2016-17', 'servey engineer', 'no', 'no', 'placement/7e9c121d0642eab71c8f381322026ae9830608fd0210131524.jpg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(217, 'Tafael Ahmed', 'ahmedtofael427@gmail.com', '01772136852', 377733, 'N/A', 'N/A', 'N/A', 'I&#39;m not a job holder', 'placement/d7186905652946841a5c97104e39cfb92a740ccd0210205300.jpg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(218, 'MD. Ariful Islam  ', 'sammiarif14@gmail.com', '01917618863', 377708, '2016-17', 'Sells Representative ', 'RENATA Ltd   ', 'N/A', 'placement/40873191a121b86c55516fe85d5bab55d218526f0211000812.jpg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(219, 'Zoherul Islam ', 'Zoheruli423@gmail.com', '01750798600', 377737, '2016-2017', 'survey engineer', 'No', 'No', 'placement/82e98c7f97c10b794731d9ed3ca3019c222e19310211002546.jpeg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(220, 'Umme Jannat Keya ', 'ummejannatk11@gmail.com', '01866766707', 377775, '2016-17', 'N/A', 'N/A', 'N/A', 'placement/7c5c5e2a631c2a22d7c870a3a5064656c9f6a9910211004620.jpg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(221, 'Lamia Akther', '', '01716742819', 377590, '2016-2017', 'No', 'No', 'No', 'placement/5ff2a4399ce7ce43440c5a0a623847e14ad65a9a0211025927.jpeg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(222, 'Md Mahmud Parveg', 'mdmahamudparveghira@gmail.com', '01888340895', 377699, '16-17', 'No', 'No', '.', 'placement/2a31e50fff683612a9884e5b4e23e751816809820211031247.jpg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(223, 'Md Alimuddin Rasel', 'majharultoislam@gmail.com', '01927218755', 377634, '2016-2017', 'Duet coaching ', 'Duet Coaching ', 'Duet coaching ', 'placement/d26e389cce98181ab05925d283ee654d97b4cade0211101150.jpg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(224, 'Umme shaliha saj', 'ummeshaliha@gmail.com', '01919931018', 377670, '16-17', 'Surveyor', 'No', 'No', 'placement/591861dd9dc89e12980370712b9c7ed9264c803c0211112641.jpg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(225, 'Tanzina Akter Nipa ', 'tanzinanipa20@gmail.com', '+8801842115970', 377663, '2016-2017', 'Unemployed ', 'No ', 'No', 'placement/e710350242db1e438d2e3b2025c855f6a42ff4d30211115236.jpg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(226, 'Md.Alamin', 'mdalaminkhanabir1999@gmail.com', '01647059992', 377623, '2016-2017', 'Surveyor', 'Survey Corporation pvt Ltd    ', 'A house of consultants for Engineering Survey   Mapping\r\nDesigning\r\nPlanning\r\nSoil Investigation\r\n& Construction ', 'placement/203626856332e82408d015eb3aad2623b89ef0b30211120220.jpg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(227, 'Norun Nahar Akter Ratri ', 'ratriislam845@gmail.com', '01708389391', 377609, '2016-2017', 'Surveyor ', 'No', 'No', 'placement/e801b9bc9dcaae72ef79f32dcdbebb6bb7e812250211230440.jpg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(228, 'Choity Akter', 'choityakterst1999@gmail.com', '01771134295', 377680, '2016-17', 'N/A', 'N/A', 'N/A', 'placement/9ba10c94927bbbf1713002ce094c9d8e1172c0980212055641.jpeg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(229, 'Md.Shamsur Rahman Chowdhury   ', '', '01883302433', 377666, '2015-2016', 'Survey Engineer  ', 'S.S', '.', 'placement/ad0e5d14ddbf88f5358efd16ea60fad5fc3a0c430304094416.jpeg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(230, 'Nipon Tanchangya', 'nipontanchangya11@gmail.com', '01793901399', 377643, '2016-2017', 'No', 'No', 'No', 'placement/9cbad3ba393aff7b5cfc62f9da8b155359f7061f0304122107.jpg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(231, 'Anjon Kumar Chakma', 'aonjonchakma@gmail.com', '01516196828', 377679, '2016-2017', 'No', 'No', 'No', 'placement/8b6194c125208518d8e6058f3e0bc2f93865ebfb0304123122.jpeg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(232, 'Md delowar hossen', 'mddelowar3500@gmail.com', '01820682940', 377764, '2016-17', 'Backer', 'Backer', 'Topography. Layout.', 'placement/011df989f48fc6eba8506b27f50497dc113e68e10319030307.jpg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(233, 'Kamrul Hasan', 'shuvokamrul348@gmail.com', '01860751949', 377732, '16-17', 'project surveyor', 'Dhaka epc company limited', 'Banghobondho hi-tech city,kaliakoir,Gazipur. ', 'placement/f60f665cd8407b1fb688ca2648393a4708bf95a80324041401.jpg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(234, 'Monika Binta Mizan', '', '01860751950', 377747, '16-17', 'unemployed ', 'Unemployed', 'Unemployed', 'placement/f816635727c1dc611cc623798b7d0ca254e2f0960324054616.png', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(235, 'Md. Shopon Hossain', 'shoponhasan80@gmail.com', '01788035270', 180855, '2018-19', 'Student', 'No', 'Backer', 'placement/532d62908e6d2cf00b057c4d93e9de4416d8e5090327003059.jpg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(236, 'Sourov Hossain', 'shoravhasan1@gmail.com', '01902722410', 167112, '2018-19', 'Student', 'No', 'NO', 'placement/0e8215d712a28000b8f50caacc0713e2903397960327004140.jpeg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(237, 'Habib Bhuiyan', 'habibplus@gmail.com', '01911171505', 889109, '2007-2008', 'Civil Engineer', 'Projuktibid', 'Metro Rail Project', 'placement/4d58f9bbca37613ccf09cd3647850b7cd326d5580406213428.JPG', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(238, 'Md. Selim Reza', 'selimrezaduet027@gmail.com', '01771-259397', 867310, '2014-2015', 'Student', 'No', 'I have completed diploma in engineering (Surveying Technology) at Bangladesh Survey Institute, Cumilla in 2018. Now, I am studying B.Sc in Civil Engineering at Dhaka University of Engineering and Technology (DUET), Gazipur.', 'placement/d263eec0020748f6aab9e5297e1c370c940f5df70406231656.jpg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(239, 'Mahbubul Hasan', 'mdmredul6@gmail.com', '01747559119', 683818, '2012-13', 'Student', 'University of Asia Pacific', 'BSc in Civil Engineering', 'placement/da8372700a1b360249e6eb925127f7012b42b9460406233001.jpg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(240, 'Koushl chandra das', 'kousholdas338@gmail.com', '01798715774', 377580, '2020', 'No', 'No', 'No', 'placement/373e5be44b14d90cddf5689e74acd5598e61e3150406233107.jpg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(241, 'Abdur Rahman ', 'ar909418@gmail.com', '01761732062', 189103, '2004-2005', 'Sub assistant Engineer ', 'Bangladesh water Development Board ', 'Bhola o&m Division2,Bangladesh Watet Development Board,Charfession, Bhola.', 'placement/4a81b240fd39110cf7e7bb52b343b31bacfa0f910407000231.jpg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(242, 'Tanzilur Rahman', 'tanzilbsi1213@gmail.com', '01785863657', 683786, '2012-2013', 'Revenue Surveyor', 'Bangladesh Water Development Board', '1. Land Management.\r\n2. Land Demarcation, Record & Mutation.\r\n3. Managing land related cases.\r\n4. Illegal occupier listing & evicting.\r\n5. Lease related activities.\r\n6. Land Tax & Municipal Tax related activities.', 'placement/1c21567ab2af4b61f8276e686aa3881e974f31d00407003353.jpg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(243, 'Md. Mohiuddin', 'mohiuddinbwdb94@gmail.com', '01631033000', 478317, '2010-2011', 'Surveyor (Engineer)', 'Bangladesh Water Development Board', 'Meghna-Dhonagoda O & M Division, BWDB, Chandpur.', 'placement/df0f20f5db3bcdce8985a34a20dad1a6bbbf84c90407005320.jpg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(244, 'Md. Ruhul Amin ', 'mdruhul78485@gmail.com', '01827-588932', 769787, '13-14', 'Surveyor', 'Biswas Builders Limited', 'Construction site (Bridge & Road)', 'placement/8f6aa6a6f7511491b9ff1b7fcc0c04ab647aa6bd0407022523.jpg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(245, 'Md. Nesar Uddin', 'nesaruddin1025@gmail.com', '01772469866', 281762, '2015-2016', 'Executive Officer', 'OMC/   Overseas Marketing Corporation (pvt.) Ltd. ', 'My Designation: Executive Officer.\r\nSurvey & Software Division. (OMC)\r\n   Work responsibilities: \r\n1)	Technical support Engineer \r\n2)	Trainer of modern equipment(Robotic Total station, RTK. GPS, Drone Survey, hydro graphic survey Etc.  )\r\n3)	Dealing with ', 'placement/cc9281aff7c20c02a882bddb09d1ddaf59a798260407023238.jpg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(246, 'Rubel rana', '', '01640585792', 867348, '14-15', 'Asst.Surveyor', 'Western Engineering (pvt.) Ltd.', 'Survey engineer ', 'placement/8c8d79bb140c86e27004ef89f0d8f81ee306edd20407035240.jpg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(247, 'MD. SHAFIQUR RAHMAN', 'shafique8934@gmail.com', '01823598934', 389176, '2009-2010', 'Executive', 'Overseas Marketing Corporation (Pvt.) LTD', 'we work here Total-Statin, Level Machin, RTK GPS and Software etc. Sell, Service & Training. Also Work at Ground Water Level (Instillation) ', 'placement/1decd8b53909097a57eb08835bac5094277bd7d70407052034.jpg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(248, 'Tanvir Rabbi Mazumdar', 'tanvirmozumder77@gmail.com', '01630987712', 377603, '2016-2017', 'Surveyor', 'Amin Design and Consultancy', 'Digital Survey Engineer', 'placement/4063a1d8d7a871dc0b400b9c7124aac7ee4bfe070407062941.JPG', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(249, 'Raju Tripura', 'rsraju916@gmail.com', '01753035757', 867277, '2014-15', 'Student', 'BSc Running.', 'I&#39;m still a student. ', 'placement/11fb70d6c42f1d698971e87e53185536944be81c0407104908.jpg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(250, 'HRISHIKESH BHOWMIK ', 'hrishikeshbhowmik98@gmail.com', '01740850828', 389130, '09-10', 'SURVEYOR ENGINEER ', 'BANGLADESH WATER DEVELOPMENT BOARD', 'Cumilla hydrology sub-division', 'placement/44c90b238a31c695060ace7b38ce9943316e885c0407105436.jpg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(251, 'Sadia Afrin', '', '01751777026', 377773, '16-17', 'Surveyor', 'No', 'No', 'placement/bd662b6b818b6124162fbd41a7256c2bc294db670407114123.jpg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(252, 'Md Shiful Islam', 'shifulrhd@gmail.com', '01813932758', 389135, '2009-10', 'Surveyor', 'Roads and Highway Department ', 'Land and Law management ', 'placement/d96b4394d9e9279a6191aa618e2e9013fd145e760407213529.jpg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(253, 'Kanis Fatima Rimpy', 'kfrimpy22@gmail.com', '01765152364', 478391, '2010-2011', 'Surveyor', 'Roads and Highways Department', 'Surveyor,Database Sub-division,Sharak Bhaban, Tejgaon,Dhaka,1208', 'placement/469bf63936b3e0ddbef52cfedb4cf561071139010408033239.jpg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(254, 'Md. Maksudur Rahman', 'engr.maksud007@gmail.com', '01914238220', 1, '2005-06', 'Surveyor', 'Local Government Engineering Department(LGED)', 'Survey & all kind of govt. Civil development work supervision & quality control.', 'placement/2960429381fcf7d4c90a243217d2457918ead94d0409005543.JPG', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(255, 'Chiranjeet Panday', 'chiranjeetpanday53@gmail.com', '01686564303', 867353, '2014-2015', 'Surveyor', 'LGED', 'GOB', 'placement/6ced9f6160122329ded6e79143b816e2f98038050409053138.jpg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(256, 'Md. Nasar Uddin', 'nasaruddin110@gmail.com', '01748084234', 769861, '13-14', 'Head of Surveying Technology.   ', 'National Institute of Engineering and Technology (Polytechnic)      ', 'Head of Surveying Technology.   ', 'placement/d1717874fbe256bbc60b2cacaa906d61c451713f0409120035.jpg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(257, 'Fazle Elahi', 'fazleelahirabbe12@gmail.com', '01639896642', 683763, '2012-2013', 'Surveyor', 'Local Government Engineering Department (LGED).', '\r\nSurvey & all government Civil development work supervision & quality control.', 'placement/e9e41f82900c4ecb5631548a371fc48a2beefadc0409145536.jpg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(258, 'Shariful Islam', 'sharifulislam.bsi@gmail.com', '01863-385737', 769821, '13-14', 'Surveyor (Engr.)', 'Bangladesh Water Development Board.', 'Survey ', 'placement/94de4cb3d4592c472ab8566cf1540627430b267f0411001205.jpg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(259, 'Md Nasim Haw', 'nasim.maxgroup@gmail.com', '01739062451-01', 889176, '2007-2008', 'Sr Survey Engineer', 'Max infrastructure Ltd', 'Akhoura Laksam Double Rail Line Project', 'placement/b1488d9a2703d33d67faa250d020a8d7947dc1a80414050723.jpg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(261, 'Md Abdullah Al Mamoon', 'abdullah.ncst2018@gmail.com', '01853555441', 389182, '2013', 'Surveyor/ict division ', 'Ministry of post telecommunication and information technology division ', 'Surveyor,Agargaw Dhaka Bangladesh ', 'placement/fb33507def0aacf2eaf0aa421b8f6ba9b8a812cb0607203405.jpeg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(263, 'JAKARIA SHABUJ', 'jakariashabuj@gmail.com', '01861173209', 281753, '15-16', 'Survey Engineear', 'Building Construction Consulaltant', 'All Survey work', 'placement/b4e4ebac1c7fe2aeef521a036c7c3e41c50ef7410906060507.jpg', '2023-03-21 09:33:47', '2023-03-21 09:33:47'),
(277, 'SYEDNAZMULAHSAN', 'nazmulahsan47yahoocom', '01681982627', 478325, '10-11', 'LANDSURVEYOR', 'MONGLAPORTAUTHORITY', '', 'placement-cell/2023.07.25Nazmulo.jpg', '2023-07-25 11:09:52', '2023-07-25 11:09:52');

-- --------------------------------------------------------

--
-- Table structure for table `job_placements`
--

CREATE TABLE `job_placements` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  `roll_number` varchar(255) DEFAULT NULL,
  `session` varchar(255) DEFAULT NULL,
  `position` varchar(255) DEFAULT NULL,
  `company` varchar(255) DEFAULT NULL,
  `details` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `juniorstaff`
--

CREATE TABLE `juniorstaff` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `degination` text DEFAULT NULL,
  `phone` text DEFAULT NULL,
  `image` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `juniorstaff`
--

INSERT INTO `juniorstaff` (`id`, `name`, `degination`, `phone`, `image`, `created_at`, `updated_at`) VALUES
(10, '01861413646', 'doctor', '01861413646', '2022.11.07team-member-4.jpg', NULL, NULL),
(11, 'AR Rahman', '01861413646', '01861413646', '2022.11.07team-member-3.jpg', NULL, NULL),
(12, 'Md.Abul Hosean', 'Office Support Staff', '01999051692', '2023.03.01cfe937f9-deb3-44e8-93fd-eccb815a6269.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `labdetails`
--

CREATE TABLE `labdetails` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` text DEFAULT NULL,
  `details` text DEFAULT NULL,
  `image1` text DEFAULT NULL,
  `image2` text DEFAULT NULL,
  `image3` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `labdetails`
--

INSERT INTO `labdetails` (`id`, `title`, `details`, `image1`, `image2`, `image3`, `created_at`, `updated_at`) VALUES
(1, 'বার্ষিক কর্মসম্পাদন চুক্তি ও অগ্রগতি', 'Lorem ipsome dolar site our very large importent.', 'https://bsiedu.gov.bd/public/frontend/assets/images/h-adm1.jpg', '', '', NULL, NULL),
(2, 'প্রতিষ্ঠান ও ভর্তি সম্পর্কিত', 'Lorem ipsome dolar site our very large importent.', 'https://bsiedu.gov.bd/public/frontend/assets/images/h-about.jpg', '', '', NULL, NULL),
(3, 'বার্ষিক ক্রয় পরিকল্পনা ও বাস্তবায়ন', 'Lorem ipsome dolar site our very large importent.', 'https://bsiedu.gov.bd/public/frontend/assets/images/h-adm1.jpg', '', '', NULL, NULL),
(4, 'জব প্লেসমেন্ট সেল', 'Lorem ipsome dolar site our very large importent.', 'https://bsiedu.gov.bd/public/frontend/assets/images/h-about.jpg', '', '', NULL, NULL),
(5, 'রিসার্স এন্ড নলেজ ম্যানেজমেন্ট', 'Lorem ipsome dolar site our very large importent.', 'https://bsiedu.gov.bd/public/frontend/assets/images/h-adm1.jpg', '', '', NULL, NULL),
(6, ' স্টুডেন্ট আর্কাইভ', 'Lorem ipsome dolar site our very large importent.', 'https://bsiedu.gov.bd/public/frontend/assets/images/h-about.jpg', '', '', NULL, NULL),
(7, 'Academic', 'Lorem ipsome dolar site our very large importent.', 'https://bsiedu.gov.bd/public/frontend/assets/images/h-adm1.jpg', '', '', NULL, NULL),
(8, 'Addmission', 'Lorem ipsome dolar site our very large importent.', 'https://bsiedu.gov.bd/public/frontend/assets/images/h-about.jpg', '', '', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `linkage_industries`
--

CREATE TABLE `linkage_industries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `contactPerson` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `formDate` varchar(255) DEFAULT NULL,
  `mouSign` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `companyLogo` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `linkage_industries`
--

INSERT INTO `linkage_industries` (`id`, `name`, `contactPerson`, `email`, `mobile`, `location`, `status`, `formDate`, `mouSign`, `photo`, `companyLogo`, `created_at`, `updated_at`) VALUES
(10, 'Professional Survey', 'Md Abu Bakar Siddik', 'asbt.tanvir@gmail.com', '01711785209', 'Govt Victoria College Mosque Lane, Kandirpar, Cumilla 3500', NULL, '02/05/2021', '17aeb1d66f386ec3bfe31b513fde8a69.pdf', NULL, '875a32b1cf2c5623fae73635b99bd353.jpg', '2023-08-17 12:27:40', '2023-08-17 12:27:40');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(8, '2021_04_26_093644_create_academics_table', 1),
(15, '2021_04_26_093347_create_students_table', 3),
(16, '2021_04_26_093424_create_notices_table', 4),
(21, '2021_05_04_015912_create_semister_plans_table', 6),
(22, '2021_05_04_021103_create_class_routines_table', 6),
(23, '2021_05_04_021144_create_exam_routines_table', 6),
(24, '2021_05_04_021208_create_academic_calenders_table', 6),
(25, '2021_05_04_015831_create_syllabi_table', 7),
(26, '2021_05_04_015849_create_probidhans_table', 8),
(27, '2021_05_02_104650_create_pages_table', 9),
(29, '2021_05_16_090720_create_photo_galleries_table', 11),
(30, '2021_05_16_090740_create_video_galleries_table', 11),
(31, '2021_05_16_090802_create_slider_galleries_table', 11),
(34, '2021_10_31_061255_create_contacts_table', 14),
(35, '2021_11_01_060914_create_jobplaces_table', 15),
(36, '2021_11_05_083714_create_applyjobs_table', 16),
(37, '2021_11_05_142918_create_jobapplies_table', 17),
(38, '2021_11_05_150135_create_applyjobs_table', 18),
(39, '2021_04_26_093247_create_admin_panels_table', 19),
(40, '2021_04_26_093326_create_staff_table', 20),
(41, '2022_04_27_083933_create_previous_principals_table', 21),
(42, '2022_10_27_035632_labdetails_table', 21),
(43, '2022_10_27_062616_lab_table', 22),
(44, '2022_11_06_064159_junior_staff_table', 23),
(45, '2022_11_30_033335_yearly_planing', 24),
(46, '2022_11_30_033436_admissionifo', 24),
(47, '2022_11_30_033652_yearly_bay_planing', 24),
(48, '2022_11_30_033735_jobplacemet_cel', 24),
(49, '2022_11_30_033833_resource_and_knolage_management', 24),
(50, '2022_11_30_033911_student_arcive', 24),
(51, '2022_12_03_102621_result_migration', 25),
(52, '2022_12_03_102841_institute_details_migration', 25),
(53, '2022_12_04_051348_institutedetails_migration', 26),
(54, '2022_12_04_072146_result_migration', 27),
(55, '2023_02_27_225910_create_staff_panels_table', 28),
(56, '2023_02_27_225953_create_teacher_panels_table', 28),
(59, '2023_03_07_110522_create_job_placements_table', 29),
(60, '2023_03_07_114507_create_needy_students_table', 29),
(61, '2023_03_26_005439_create_linkage_industries_table', 30),
(62, '2023_03_26_005540_create_industrial_attachments_table', 30),
(63, '2023_03_26_005610_create_industry_visits_table', 30),
(64, '2023_06_06_072410_create_info_boxes_table', 31),
(65, '2023_06_06_072759_create_box_contents_table', 31),
(66, '2023_06_13_120730_create_in_house_teachers_table', 32),
(68, '2023_06_13_123142_create_in_house_staff_table', 33),
(69, '2023_06_13_123257_create_training_subject_wises_table', 33),
(70, '2023_06_20_071959_create_important_links_table', 34);

-- --------------------------------------------------------

--
-- Table structure for table `needy_students`
--

CREATE TABLE `needy_students` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  `roll_number` varchar(255) DEFAULT NULL,
  `session` varchar(255) DEFAULT NULL,
  `cv` varchar(255) NOT NULL,
  `status` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `needy_students`
--

INSERT INTO `needy_students` (`id`, `name`, `email`, `mobile`, `roll_number`, `session`, `cv`, `status`, `photo`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'JibonDewan', 'jibondewan6gmailcom', '01533375104', '167022', '2022', 'needy-student/2023.07.25Jibon Dewan.pdf', NULL, 'needy-student/2023.07.25Jibon Dewan.jpg', NULL, '2023-07-25 10:03:37', '2023-07-25 10:03:37'),
(4, 'ARAFAT', 'arafatibb0987gmailcom', '01821503151', '415652', '2018', 'needy-student/2024.04.06Arafat\'s_Resume__6.pdf', NULL, 'needy-student/2024.04.061707892738261.jpg', NULL, '2024-04-06 11:23:39', '2024-04-06 11:23:39');

-- --------------------------------------------------------

--
-- Table structure for table `notices`
--

CREATE TABLE `notices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `notice_location` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notices`
--

INSERT INTO `notices` (`id`, `title`, `status`, `notice_location`, `created_at`, `updated_at`) VALUES
(4, 'উপবৃত্তি প্রাপ্ত ফাইনাল শিক্ষার্থীদের তালিকা প্রদান প্রসঙ্গে', 'Active', 'upobitti notis_1621834627.pdf', '2021-05-24 12:37:07', '2022-10-04 17:29:58'),
(5, 'উপবৃত্তি প্রাপ্ত শিক্ষার্থীদের ফাইনাল তালিকা-২০২১', 'Active', 'upobitti final aplication 24.05.2021_1621834707.pdf', '2021-05-24 12:38:27', '2021-05-24 12:38:27'),
(6, '৪র্থ ও ৬ষ্ঠ পর্ব সমাপনী পরীক্ষা স্থগিত নোটিশ', 'Active', ' স্থগিত ২৯-০৫-২১ (1)_1622290034.pdf', '2021-05-29 19:07:14', '2021-05-29 19:07:14'),
(7, 'ডুপ্লিকেট ভর্তি বাতিল নোটিশ', 'Active', 'duplicate_admission-cancel_1622347994.pdf', '2021-05-30 11:13:14', '2021-05-30 11:13:14'),
(8, 'অতি জরুরী বিকাশ একাউন্ট খোলার নোটিশ', 'Active', 'Not BKASH Combined report 19.06.2021_1624093277.pdf', '2021-06-19 16:01:17', '2021-06-19 16:01:17'),
(9, 'জুন-ডিসেম্বর-২০২০ ও জানু-জুন-২০২১ মেয়াদে উপবৃত্তি প্রাপ্ত শিক্ষার্থীদের বিকাশ নম্বর সচল করণ প্রসংগে।', 'Active', ' নম্বর সচল করণ প্রসংগে_1624187446.pdf', '2021-06-20 18:10:46', '2021-06-20 18:10:46'),
(10, 'জুন-ডিসেম্বর-২০২০ ও জানু-জুন-২০২১ মেয়াদে উপবৃত্তি প্রাপ্ত শিক্ষার্থীদের বিকাশ নম্বর সচল করার জন্য তালিকা', 'Active', 'Not BKASH Combined report 19.06.2021(1)_1624187508.pdf', '2021-06-20 18:11:48', '2021-06-20 18:11:48'),
(11, 'পরীক্ষা স্থাগতের নোটিশ', 'Active', 'Exam_Notice_1624523574.pdf', '2021-06-24 15:32:54', '2021-06-24 15:32:54'),
(12, 'পরীক্ষার নোটিশ', 'Active', 'Notice (Diploma Section 13-7-2021)_Page_1_1626360185.jpg', '2021-07-15 21:43:05', '2021-07-15 21:43:05'),
(13, '১লা আগষ্ট ২০২০১খ্রীঃ থেকে ক্লাস শুরুর নোটিশ', 'Active', 'Survey Inst Routine 1,3,5,7_1627707455.jpg', '2021-07-31 11:57:35', '2021-07-31 11:57:35'),
(15, '১৫ই আগষ্ট জাতীয় শোক দিবসের প্রতিয়োগীতার নোটিশ', 'Active', ' আগষ্টের অনুষ্টানের নোটিশ_1628492162.jpg', '2021-08-09 13:56:02', '2021-08-09 13:56:02'),
(16, 'জাতীয় শোক দিবস সংক্রান্ত জরুরী নোটিশ', 'Active', 'Notice for 15th August_1628492332.pdf', '2021-08-09 13:58:52', '2021-08-09 13:58:52'),
(17, '১৫ই আগষ্ট জাতীয় শোক দিবসের কর্মসূচী', 'Active', '15 August Program office copy_1628492392.pdf', '2021-08-09 13:59:52', '2021-08-09 13:59:52'),
(18, 'কারিগরি ও মাদ্রাসা শিক্ষা বিভাগের আওতাধীন কারিগরি ও মাদ্রাসা শিক্ষা প্রতিষ্ঠানসমূহে বঙ্গমাতা শেখ ফজিলাতুন্নেছা মুজিব-এর ৯১তম জন্মবার্ষিকী উদযাপন উপলক্ষ্যে জাতীয় পর্যায়ে প্রবন্ধ প্রতিযোগীতা আয়োজন প্রসঙ্গে', 'Active', ' শেখ ফজিলাতুন্নেছা প্রবন্ধ প্রতিযোগীতা_1629799008.pdf', '2021-08-24 16:56:48', '2021-08-24 16:56:48'),
(19, 'ছাত্র-ছাত্রীদের অগ্রাধিকার ভিত্তিতে কোভিড-১৯ ভ্যাক্সিনের কার্যক্রম', 'Active', 'Covid 19 vacsine_1629801472.pdf', '2021-08-24 17:37:52', '2021-08-24 17:37:52'),
(20, 'আর্থিক সাহয্যের আবেদন', 'Active', 'Help_1630386106.pdf', '2021-08-31 12:01:46', '2021-08-31 12:01:46'),
(21, 'বাকাশিবো-র উত্তরপত্র পূণঃ নিরীক্ষণ ২০২১', 'Active', NULL, '2021-09-03 23:50:18', '2021-09-03 23:50:18'),
(22, 'কোভিড-১৯ সংক্রান্ত তথ্য প্রদানের জন্য জরুরী আদেশ', 'Active', 'Covid 19 02.09.21_1630740358.pdf', '2021-09-04 14:25:58', '2021-09-04 14:25:58'),
(23, 'ক্লাস চালু রাখার নোটিশ', 'Active', 'Class Notice 27.9.21_1632764627.jpg', '2021-09-28 00:43:47', '2021-09-28 00:43:47'),
(24, 'ফরম ফিলাপের নোটিশ', 'Active', 'Form fillup Notice 30.09.21_1633019418.jpg', '2021-09-30 23:30:18', '2021-09-30 23:30:18'),
(25, '১ম ও ৩য় পর্বের ব্যবহারীক পরীক্ষার রুটিন', 'Active', '1 3rd routine_1634833512.jpeg', '2021-10-21 23:25:12', '2021-10-21 23:25:12'),
(26, '১২ থেকে ১৮ বছর বয়সী শিক্ষার্থীদের টিকা প্রদান সম্পর্কে', 'Active', '১২-১৮ বছর বয়স_1640791609.jpg', '2021-12-29 22:26:49', '2021-12-29 22:26:49'),
(27, '১৪ই ডিসেম্বর, বুদ্ধিজীবী হত্যা দিবস পালন সংক্রান্ত', 'Inactive', 'RD 14th Dec 2021 Celebrate_1647703561.pdf', '2022-03-19 22:26:01', '2022-03-19 22:26:01'),
(28, '১৬ই ডিসেম্বর, বিজয় দিবস ও স্বাধীনতার সুবর্ণ জয়ন্তী উপলক্ষ্যে বিভিন্ন প্রতিযোগীতা সংক্রান্ত', 'Inactive', 'Notice for 16 Dec Competition_1647704053.pdf', '2022-03-19 22:34:13', '2022-03-19 22:34:13'),
(29, 'অনলাইন ক্লাশ সংক্রান্ত', 'Inactive', 'Notice for Online class- RD Sir_1647704162.pdf', '2022-03-19 22:36:02', '2022-03-19 22:36:02'),
(30, 'International Mother Language Day', 'Inactive', '21st Feb 2022_1648358925.pdf', '2022-03-27 12:28:45', '2022-03-27 12:28:45'),
(31, '07th March 2022', 'Inactive', '7 march notice_1648359122.pdf', '2022-03-27 12:32:02', '2022-03-27 12:32:02'),
(32, '17th March 2022, Notice', 'Active', 'Notice for 17th March_1648359632.pdf', '2022-03-27 12:40:32', '2022-03-27 12:40:32'),
(33, '17th march 22 Committee', 'Active', '17th March 22_1648359656.pdf', '2022-03-27 12:40:56', '2022-03-27 12:40:56'),
(34, '1st year Admission & Orientation', 'Active', '1st year Admission Notice office copy_1648359948.pdf', '2022-03-27 12:45:48', '2022-03-27 12:45:48'),
(35, 'Orientation Committee', 'Active', 'Orientation Committee 24-03-22 (1)_1648359969.pdf', '2022-03-27 12:46:09', '2022-03-27 12:46:09'),
(36, '25th Match Notice', 'Active', '25 march office copy_1648360042.pdf', '2022-03-27 12:47:22', '2022-03-27 12:47:22'),
(37, '26th March 2022', 'Active', 'Sadinata dibosh RD sir copy_1648360066.pdf', '2022-03-27 12:47:46', '2022-03-27 12:47:46'),
(38, 'ই জিপি প্রশিক্ষণে মনোনয়ন প্রসঙ্গে', 'Active', 'eGP Training_20220727_0001_1658899992.pdf', '2022-07-27 12:33:12', '2022-07-27 12:33:12'),
(43, '2022-2023 অর্থবছরের ক্রয় পরিকল্পনা (App) প্রেরণ প্রসঙ্গে।', 'Active', 'APP 2022-23 Survey Institute_1665902951.pdf', '2022-10-16 13:49:11', '2022-10-16 13:49:11'),
(45, 'বাংলাদেশ সার্ভে ইনস্টিটিউটের জুনিয়র ইন্সট্রাক্টর(টেক/সার্ভে) জনাব মোঃ মেহেদী হাসান রুবেল এর আন্তর্জাতিক পাসপোর্ট ইস্যু/নবায়নের অনাপত্তি সনদ(NOC) প্রদান', 'Active', 'mahadi sir_1669614872.pdf', '2022-11-28 12:54:32', '2022-11-28 12:54:32'),
(46, 'বাংলাদেশ সার্ভে ইনস্টিটিউটের জুনিয়র ইন্সট্রাক্টর(টেক/সার্ভে) জনাব মোঃ ফারুক হোসেন এর আন্তর্জাতিক পাসপোর্ট ইস্যু/নবায়নের অনাপত্তি সনদ(NOC) প্রদান', 'Active', 'farik sir_1669614966.pdf', '2022-11-28 12:56:06', '2022-11-28 12:56:06'),
(47, 'আন্তর্জাতিক মাতৃভাষা দিবস ২০২৩ উদযাপন উপলক্ষে গৃহিত অনুষ্ঠান কর্মসূচি', 'Active', 'matri_1677047988.jpg', '2023-02-22 13:39:48', '2023-02-22 13:39:48'),
(48, 'শিক্ষার্থীদের ড্রেস পরিধান সম্পর্কে', 'Active', 'Dress_1677082343.pdf', '2023-02-22 23:12:23', '2023-02-22 23:12:23'),
(50, '১ম,৩য়,৫ম,৭ম পর্বের ক্লাস শুরু আগামী ১২-০৩-২০২৩', 'Active', 'img018_1677646955.pdf', '2023-03-01 12:02:35', '2023-03-01 12:02:35'),
(51, 'ঐতিহাসিক ৭ই মার্চ উপলক্ষে আলোচনা সভার আয়োজন', 'Active', 'FB7B40D6-E505-4913-B49C-049A2B7B06C4_1678106810.jpeg', '2023-03-06 19:46:50', '2023-03-06 19:46:50'),
(52, 'ঐতিহাসিক ৭ই মার্চ উপলক্ষে প্রতিষ্ঠান কতৃর্ক আয়োজিত অনুষ্ঠান কর্মসূচী', 'Active', '5BB29117-E6B4-485F-9DFD-A4F6228ED34E_1678122323.jpeg', '2023-03-07 00:05:23', '2023-03-07 00:05:23'),
(53, '১ম পর্বের অরিয়েন্টেশন ক্লাস শুরু আগামী ১২/০৩/২০২৩', 'Active', '88B84DD7-9D0A-4A89-9833-D80EBE878C36_1678374359.jpeg', '2023-03-09 22:05:59', '2023-03-09 22:05:59'),
(54, 'কর্মরত জনবলের তথ্য প্রেরন সম্পর্কে', 'Active', 'WhatsApp Image 2023-03-17 at 22.58.39_1679072477.jpg', '2023-03-18 00:01:17', '2023-03-18 00:01:17'),
(55, 'সকল কর্মকর্তা কর্মচারীকে ফর্মাল ড্রেস পড়ে (শার্ট পড়লে, ইং করে ও ) অফিসে আসার জন্য অধ্যক্ষ  স্যারের নির্দেশ', 'Active', '6024ffd3-78e7-43c2-b84c-f79730a1ae3a_1679290498.jpg', '2023-03-20 12:34:58', '2023-03-20 12:34:58'),
(56, '২৫মার্চ “গণহত্যা দিবস”ও ২৬মার্চ “জাতীয় দিবস ও মহান স্বাধীনতা ” অ্ত্র পতিষ্ঠানের অনুষ্ঠান কর্মসূচি', 'Active', '68951e9a-0925-4c6c-a674-303fb22315b7_1679547965.jpg', '2023-03-23 12:06:05', '2023-03-23 12:06:05'),
(57, 'অধিদপ্তরে সার্ভে বিষয়ক কর্মশালা', 'Active', 'sur_1680497589.jpg', '2023-04-03 11:53:09', '2023-04-03 11:53:09'),
(58, 'Baisabi Holiday', 'Active', 'Notice for Baisabi086_1681197421.pdf', '2023-04-11 14:17:01', '2023-04-11 14:17:01'),
(59, '“বাংলা নববর্ষ-১৪৩০” উদযাপন উপলক্ষে অত্র প্রতিষ্ঠানের অনুষ্ঠান কর্মসূচি', 'Active', 'nobo_1681372891.jpg', '2023-04-13 15:01:31', '2023-04-13 15:01:31'),
(60, 'ডিপ্লমা-্ইন-্ইঞ্জিনিয়ারিং(সাভেয়িং)১ম,৩য়,৫ম ও ৭ম পর্বের মধ্যেপর্ব পরীক্ষার-২০২৩ এর সময়সূচি', 'Active', 'c3768afb-f402-4335-95f6-c6274a3486fc_1683093033.jpg', '2023-05-03 12:50:33', '2023-05-03 12:50:33'),
(61, 'অ্র্র্র্র্রত্র প্রতিষ্ঠানে উপবৃতির ফরম বিতরন ও শিক্ষা উপকরন ক্রয় সহায়ক কমিটি', 'Active', 'af0363b1-b63e-40fb-bd1a-1d0bcf8b1490_1683518530.jpg', '2023-05-08 11:02:10', '2023-05-08 11:02:10'),
(62, 'উপবৃত্তি সংক্রান্ত নোটিশ', 'Active', 'Stipend Notice166_1684385635.pdf', '2023-05-18 11:53:55', '2023-05-18 11:53:55'),
(63, 'ঘূর্নিঝড় মোখার কারনে স্থগিত পরীক্ষার তারিখ পরিবর্তন প্রসঙ্গে', 'Active', 'Exam Date Change ltr169_1684393155.pdf', '2023-05-18 13:59:15', '2023-05-18 13:59:15'),
(64, 'অত্র প্রতিষ্ঠানের ৩য়,৫ম,৭ম পর্বের ছাত্র ছাত্রীদের উপবৃত্তি সম্পর্কিত নোটিশ', 'Active', 'Stipend Notice166 (1)_1684640859.pdf', '2023-05-21 10:47:39', '2023-05-21 10:47:39'),
(65, 'জাতীয় কবি কাজী নজরুল ইসলামের জন্ম বাষীকি উপলক্ষে অত্র প্রতিষ্ঠানের অনুষ্ঠান সূচি', 'Active', '30AC4BC9-5C2A-401D-8D7E-44441D87F73A_1684915451.jpeg', '2023-05-24 15:04:11', '2023-05-24 15:04:11'),
(68, 'ডিপ্লোমা ইন সার্ভে ইঞ্জিনিয়ারং ২য়,৪র্থ,৬ষ্ঠ,৮ম পর্বের রেজাল্ট -২০২৩', 'Active', 'APZNZA_2_1685453684.pdf', '2023-05-30 20:34:44', '2023-05-30 20:34:44'),
(69, 'ডিপ্লোমা ইন সার্ভে ইঞ্জিনিয়ারিং ১ম ও ২য় পর্বের রেজাল্ট -২০২৩', 'Active', '1st and 2nd Semester (2022 Regulation)_1685453738.pdf', '2023-05-30 20:35:38', '2023-05-30 20:35:38'),
(70, 'ডিপ্লোমা ইন সার্ভে ইঞ্জিনিয়ারিং ৪র্থ পর্বের রেজাল্ট -২০২৩', 'Active', '4th Semester_1685453973.pdf', '2023-05-30 20:39:33', '2023-05-30 20:39:33'),
(71, 'ডিপ্লোমা ইন সার্ভে ইঞ্জিনিয়ারিং ৪র্থ,৫ম,৬ষ্ঠ পর্বের রেজাল্ট -২০২৩', 'Active', '4th, 5th and 6th Semeste_1685454049.pdf', '2023-05-30 20:40:49', '2023-05-30 20:40:49'),
(72, 'অত্র পতিষ্ঠানের ছাত্র ছাত্রীদের মূল সনদ গ্রহনের জন্য জরুরী নোটিশ', 'Active', 'combinepdf (2)_1686109567.pdf', '2023-06-07 10:46:07', '2023-06-07 10:46:07'),
(73, 'Asset Skills Competition -2023 ছাত্র ছাত্রীদের রেজিস্ট্রেশনের জন্য নির্দেশ করা যাচেছ', 'Active', 'skill compitition_1686193968.jpg', '2023-06-08 10:12:48', '2023-06-08 10:12:48'),
(74, 'অত্র প্রতিষ্ঠানের ছাত্র ছাত্রীদের অবগতির জন্য জানানো যাচ্ছে যে,Asset প্রকল্পের আওতায় \"স্কিল কম্পিটিশন\" এ রেজিষ্ট্রেশনের শেষ তারিখ আগামী ১১/৬/২০২৩', 'Active', '5BACC3DE-628D-414E-A704-73CFA28D1B4C_1686301847.jpeg', '2023-06-09 16:10:47', '2023-06-09 16:10:47'),
(75, 'অত্র প্রতিষ্ঠানে ‘’কারিগরি সপ্তাহ’’ পালন উপলক্ষে গৃহিত কর্ম সূচি', 'Active', '286705680a949a1cf2554bffad254222.pdf', '2023-06-11 10:25:35', '2023-06-11 10:25:35'),
(77, 'কারিগরি ও বৃত্তিমূলক শিক্ষা সপ্তাহ-২০২৩ উদযাপন উপলক্ষ্যে সাজসজ্জা কমিটি', 'Active', '55bc2517bbf96266446e85d794f7ff65.jpg', '2023-06-12 11:53:06', '2023-06-12 11:53:06'),
(78, 'কারিগরি ও বৃত্তিমূলক শিক্ষা সপ্তাহ-২০২৩ উদযাপন উপলক্ষে অনুষ্ঠান কর্মসূচি', 'Active', '4d534623975321defe56e1045d920e40.pdf', '2023-06-13 14:47:06', '2023-06-13 14:47:06'),
(79, 'বাংলাদেশ সার্ভে ইনস্টিটিউটে স্মার্ট বাংলাদেশ বিনির্মাণ নিয়ে সেমিনার অনুষ্ঠিত', 'Active', '58788fbe6b646096d4f51442ddabbf61.xps', '2023-06-18 10:22:38', '2023-06-18 10:22:38'),
(81, 'ডিপ্লোমা-ইন-ইঞ্জিনিয়ারিং শিক্ষাক্রমের নিয়মিত ও অনিয়মিত ছাত্র ছাত্রীদের পরীক্ষার সময় সূচি', 'Active', '338e509b4cfba84bfc440ebf1ab0669d.pdf', '2023-06-19 11:00:53', '2023-06-19 11:00:53'),
(82, 'মনোটেকনিক/পলিটেকনিক ইন্সটিটিউটসমূহে শিক্ষকদের প্রয়োজনীন তথ্যবলি পূরন সর্ম্পকে বিজ্ঞপ্তি', 'Active', '46ea5c5db868e04f4586202d6ffb6109.pdf', '2023-06-21 11:19:37', '2023-06-21 11:19:37'),
(83, 'ছুটির নিরাপত্তা জোরদার প্রসঙ্গে বিজ্ঞপ্তি', 'Active', '2e6214074277c049869cf7138fedc7aa.pdf', '2023-06-21 11:21:35', '2023-06-21 11:21:35'),
(84, 'অত্র প্রতিষ্ঠানের নিরাপত্তা সর্ম্পকিত বিজ্ঞপ্তি', 'Active', '88ecb5fb936da07874e1e8a607ba3eb6.jpg', '2023-06-21 12:01:29', '2023-06-21 12:01:29'),
(85, 'অধক্ষ্য মহোধয়ের কর্মস্থল ত্যাগ', 'Active', '30bb0b4142129ffc47e2863763406bdf.jpg', '2023-06-22 13:03:47', '2023-06-22 13:03:47'),
(86, 'শোকবার্তা', 'Active', '058fda39cf9415de46fb3e1b24a0536b.pdf', '2023-06-22 13:05:26', '2023-06-22 13:05:26'),
(87, '১ম,৩য়,৫ম,৭ম পর্বের সমাপনি পরীক্ষার সময় সূচি-২০২৩', 'Active', '3a46c7a4e5368ec85b1ee672d2db49d2.jpeg', '2023-06-26 15:19:22', '2023-06-26 15:19:22'),
(88, 'ক্রাফট ইনস্ট্রাকটর আতিয়া ফেরদৌছি অনন্যার ট্রান্সফারের বিজ্ঞপ্তি', 'Active', 'a373da05731a2dccc87d8c2dc918c85c.pdf', '2023-07-04 11:16:30', '2023-07-04 11:16:30'),
(89, 'পর্ব সমাপনী পরীক্ষা সংক্রান্ত বিজ্ঞপ্তি', 'Active', 'd5bc4af420cc429574c2e25212e873f9.jpg', '2023-07-06 09:48:43', '2023-07-06 09:48:43'),
(90, 'পর্ব সমাপনী পরীক্ষার নির্দেশিকা', 'Active', 'c8d11998884ebc229ef329474f58afc0.jpg', '2023-07-09 10:28:30', '2023-07-09 10:28:30'),
(91, 'অধ্যক্ষ মহোদয়ের কর্মস্থল ত্যাগ', 'Active', '1d19e6f29aed88d90b35dcd908090f6a.jpg', '2023-07-17 13:14:59', '2023-07-17 13:14:59'),
(92, 'জাতীয় শোক দিবস উপলক্ষে কর্মসভা সূচি', 'Active', '0558b7eca099f07ca45ff92795f42ebf.pdf', '2023-08-02 11:40:59', '2023-08-02 11:40:59'),
(93, 'চীন স্কলারশীপ পেতে আগ্রহী শিক্ষার্থীদের জন্য সকল ডকুমেন্ট একত্রে', 'Active', '3daa41f10cdf0e580c44fe4fe8b06a51.pdf', '2023-08-06 12:54:29', '2023-08-06 12:54:29'),
(94, 'ভর্তির নোটিশ, ২০২৩-২৪ সেশন', 'Active', '0c1206e821957c0e5176b379da91afa6.pdf', '2023-08-10 12:19:34', '2023-08-10 12:20:24'),
(95, '১৫ই আগস্ট ২০২৩ এর কর্মসূচি, সকলকে অবশ্যিকভাবে উপস্থিত থাকা বাধ্যতামূলক', 'Active', '34effb22b101aa8a7965addd1df32e3c.pdf', '2023-08-13 13:54:51', '2023-08-13 13:54:51'),
(96, 'জাতীয় শোক দিবস উপলক্ষে প্রতিষ্ঠানের অনুষ্ঠান কর্মসূচি', 'Active', '205cb6a0a8aa7e5dd610a97fff6aedfa.pdf', '2023-08-14 12:05:36', '2023-08-14 12:05:36'),
(97, 'উপবৃত্তি ব্লকড এন্ড বাউন্স একাউন্ট সংক্রান্ত নোটিশ', 'Active', '1f3f24cd623d9fcff63e476e616d4536.pdf', '2023-08-15 13:19:30', '2023-08-15 13:19:30'),
(98, 'কর্মকর্তা কর্মচারিদের অংশগ্রহণে লার্নিং সেশন', 'Active', '71885a3a45a688a44ca7c8b9b4e07183.pdf', '2023-09-21 11:10:41', '2023-09-21 11:16:37'),
(99, '২০২৩-২৪ সেশনে ১ম পর্বের ভর্তি প্রক্রিয়া শুরু', 'Active', '73612ae0f6b0fe757aeac1ae50e12cae.jpg', '2023-09-24 12:20:18', '2023-09-24 12:27:21'),
(100, 'পর্বমধ্য পরীক্ষা ২০২৩ এর রুটিন', 'Active', '59db2a67439566297cebd2b0bf34bf45.pdf', '2023-10-01 13:34:09', '2023-10-01 13:34:09'),
(101, 'কর্মচারীদের শাখা পরিবর্তন সংক্রান্ত অফিস আদেশ', 'Active', 'f49b11128bc3fe5aa57480589e935c42.pdf', '2023-10-10 17:34:46', '2023-10-10 17:34:46'),
(102, 'শেখ রাসেল দিবস, ২০২৩ উপলক্ষ্যে কর্মসূচি', 'Active', 'f6ce0f420d3f598f38341cd828aee346.pdf', '2023-10-17 17:27:52', '2023-10-17 17:27:52'),
(103, 'শেখ রাশেল দিবস উপলক্ষে অত্র প্রতিষ্ঠানের অনুষ্ঠান সূচি', 'Active', '890673ca7ddea0a58b00c3b557f235f7.jpg', '2023-10-18 11:21:48', '2023-10-18 11:21:48'),
(104, 'অধ্যক্ষের কর্মস্থল ত্যাগ', 'Active', '1350a450e8cba8a0132fa2e9012bd084.pdf', '2023-10-19 13:34:55', '2023-10-19 13:34:55'),
(105, 'উপাবৃত্তি নোটিশ', 'Active', 'ebb3d2dda9e6d467ca54c78dca66016e.pdf', '2023-11-07 18:07:06', '2023-11-07 18:07:06'),
(106, '১২-১১-২০২৩ তাং শ্রী শ্রী শ্যামাপূজা উপলক্ষ্যে একাডেমিক কার্যক্রম বন্ধের নোটিশ', 'Active', '9486a2a276d8c43f0acbecf7bb622769.pdf', '2023-11-09 15:05:03', '2023-11-09 15:05:03'),
(107, 'সকল কর্মকর্তা- কর্মচারীকে আয়কর রিটার্ন দেওয়ার জন্য', 'Active', 'a1ea9fd104d3ebaa815dfe9b6cb43c69.pdf', '2023-11-19 16:13:13', '2023-11-19 16:13:13');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `menu` varchar(255) DEFAULT NULL,
  `page_name` varchar(255) DEFAULT NULL,
  `page_title` varchar(255) DEFAULT NULL,
  `page_headline` varchar(255) DEFAULT NULL,
  `text_content` text DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `menu`, `page_name`, `page_title`, `page_headline`, `text_content`, `status`, `avatar`, `created_at`, `updated_at`) VALUES
(2, 'আমাদের সম্পর্কে', 'পরিচিতি', 'পরিচিতি', 'সংক্ষিপ্ত পরিচিতিঃ-', 'বাংলাদেশ সার্ভে ইন্সটিটিউট গণপ্রজাতন্ত্রী বাংলাদেশ সরকারের শিক্ষা মন্ত্রণালয়ের কারিগরি শিক্ষা অধিদপ্তরাধীন একটি সরকারী শিক্ষা প্রতিষ্ঠান। এতে বাংলাদেশের কারিগরি শিক্ষা বোর্ড কর্তৃক ৪ বছর মেয়াদি ডিপ্লোমা-ইন-সার্ভে-ইঞ্জিনিয়ারিং শিক্ষা কার্যক্রম পরিচালিত হয়। ঐতিহ্যবাহী কুমিল্লা শহরের  টমছমব্রীজ সংলগ্ন পানি উন্নয়ন বোর্ডের পাশে কুমিল্লা-কোটবাড়ি রোডে শোভনীয় প্রকৃতি ঘেরা ঐতিহ্যবাহী বাংলাদেশ সার্ভে ইন্সটিটিউট অবস্থিত। ১৯১৪ সালে কুমিল্লা শহরের কেন্দ্রস্থলে রামমালায় প্রাচীর ঘেরা ভবনে ইন্সটিটিউট এর কার্যক্রম শুরু হয়।\r\n\r\nবাংলাদেশ সার্ভে ইন্সটিটিউট সবুজ ছায়া ঘেরা বৃক্ষরাজীতে পরিবেষ্টিত এবং ইন্সটিটিউটের একাডেমিক ভবনের সামনে  মনোমুগ্ধকর ফুলের বাগান অবস্থিত। ১৪.১৭ একর জমির উপর নির্মিত এ প্রতিষ্ঠানটিতে সুরম্য ভবন সমূহের ৩ তলা একাডেমিক কাম প্রশাসনিক ভবন, আবাসিক ভবন, ছাত্রাবাস, ছাত্রীনিবাস ইত্যাদির সন্নিবেশ ঘটেছে। ইন্সটিটিউটের প্রবেশমুখে গেটে, একাডেমিক কাম প্রশাসনিক ভবনের গেটে এবং ছাত্রাবাস ও ছাত্রীনিবাসের প্রবেশের গেটসমূহে রয়েছে সুসজ্জিত তোরুণ ও কর্তব্যনিষ্ঠ নিরাপত্তা প্রহরী, যারা সার্বক্ষনিক প্রয়োজনীয় যোগাযোগের মাধ্যমসহ নিরাপত্তা ও আগমনকারীদের তথ্য সংগ্রহ করেছে।', 'Publish', '', '2022-04-02 13:38:44', '2023-06-12 10:55:06');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `photo_galleries`
--

CREATE TABLE `photo_galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` text DEFAULT NULL,
  `details` text DEFAULT NULL,
  `location` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `photo_galleries`
--

INSERT INTO `photo_galleries` (`id`, `title`, `details`, `location`, `created_at`, `updated_at`) VALUES
(12, '14th Dec 21', 'শহীদ বুদ্ধিজীবী দিবস ২০২১', '14th Dec 21_1643391734.jpg', '2022-01-29 00:42:14', '2022-01-29 00:42:14'),
(14, 'জাতীয় শোক দিবস পালন ২০২২', NULL, 'IMG-20220907-WA0032_1662606065.jpg', '2022-09-08 10:01:05', '2022-09-08 10:01:05'),
(15, 'জাতীয় শোক দিবস উপলক্ষে বৃক্ষরোপণ কর্মসূচি ২০২২', NULL, 'IMG-20220907-WA0033_1662606119.jpg', '2022-09-08 10:01:59', '2022-09-08 10:01:59'),
(20, 'শেখ রাসেল দিবস-2022 উপলক্ষে আলোচনা সভা।', 'Auditorium', 'alocona_1666315929.jpeg', '2022-10-21 08:32:09', '2022-10-21 08:34:51'),
(21, 'শেখ রাসেল দিবস-2022 উপলক্ষে পুষ্পস্তবক অর্পণ।', 'Sahid minner', 'pospostopk_1666316015.jpeg', '2022-10-21 08:33:35', '2022-10-21 08:33:35'),
(23, 'বাংলাদেশ সার্ভে ইন্সটিটিউট প্রসপেক্টাস', NULL, 'Asset 1_1667573114.png', '2022-11-04 21:45:14', '2022-11-04 21:45:14'),
(24, 'শহীদ বুদ্ধিজীবী দিবস উপলক্ষে আলোচনা সভা ও দোয়া মাহফিল ২০২২', NULL, 'f900437a-fcb1-4b09-abed-cb39ef8ab1d6_1671078912.jpg', '2022-12-15 11:35:12', '2022-12-15 11:42:53'),
(25, 'শহীদ বুদ্ধিজীবী দিবস উপলক্ষে পুষ্পস্তবক অর্পণ ২০২২', NULL, '630e6534-a5d1-48a7-b518-647896169ec1_1671078973.jpg', '2022-12-15 11:36:13', '2022-12-15 11:36:13'),
(26, '\"শুদ্ধচার\"বিষয়ক প্রশিক্ষণ কর্মশালায় ডি.জি মহোদয়', NULL, '91f9e01f-570f-478c-bd50-2eda6632475a_1671335396.jpg', '2022-12-18 10:49:56', '2022-12-18 10:49:56'),
(27, 'জাতীয় বিজয় দিবস উদযাপন ২০২২', NULL, '5494f73b-a8ee-48fc-bc2f-eb09a4aca9cd_1671335808.jpg', '2022-12-18 10:56:48', '2022-12-18 10:56:48'),
(28, 'বার্ষিক ক্রিড়া প্রতিযোগিতায় অধ্যক্ষ সার', NULL, '32327ef0-7129-4aa7-b2f1-ae892caffe04_1671336068.jpg', '2022-12-18 11:01:08', '2022-12-18 11:01:08'),
(29, 'জাতীয় ভাষা শহীদ দিবস উদযাপন ২০২৩', NULL, 'shahid2_1677042584.jpg', '2023-02-22 12:09:44', '2023-02-22 12:57:06'),
(30, 'জাতীয় ভাষা শহীদ দিবস উপলক্ষ্যে পুষ্প স্তবক অর্পণ ২০২৩', NULL, 'sahid1_1677042744.jpg', '2023-02-22 12:12:24', '2023-02-22 12:55:54'),
(31, 'জাতীয় ভাষা শহীদ দিবস উপলক্ষ্যে  আলোচনা সভা ও দোয়া ২০২৩', NULL, 'milad_1677045292.jpg', '2023-02-22 12:54:52', '2023-02-22 12:54:52'),
(32, 'ঐতিহাসিক ৭ই মার্চ উপলক্ষে আলোচনা সভা', NULL, '4891FE35-7C80-44BB-BFB7-B2AF107AB0A1_1678194799.jpeg', '2023-03-07 20:13:19', '2023-03-07 20:13:19'),
(33, '১ম পর্বের ছাত্র ছাত্রীদের অরিয়েন্টেশন ২০২৩', NULL, '3EF99530-B456-4835-A1ED-E2DFCC12ABA1_1678713352.jpeg', '2023-03-13 20:15:52', '2023-03-13 20:15:52'),
(34, 'অভিভাবক সমাবেশ২০২৩', NULL, '828CA938-5847-428B-9B8F-9C5A376F62F7_1678713495.jpeg', '2023-03-13 20:18:15', '2023-03-13 20:18:15'),
(35, 'মেডিটেশন ও টোটাল ফিটনেস প্রয়োজনতা বিষয়ক সেমিনার', NULL, 'WhatsApp Image 2023-03-17 at 21.46.45_1679068528.jpg', '2023-03-17 22:43:14', '2023-03-17 22:55:28'),
(36, 'বঙ্গবন্ধু শেখ মুজিবুর রহমান এর ১০৩ তম জন্মবার্ষিকী', NULL, 'WhatsApp Image 2023-03-17 at 13.24.54_1679068877.jpg', '2023-03-17 23:01:17', '2023-03-17 23:01:17'),
(37, 'বঙ্গবন্ধু শেখ মুজিবুর রহমানের জন্মবার্ষিকী ও শিশু দিবস পালন', NULL, 'WhatsApp Image 2023-03-17 at 11.58.49_1679069113.jpg', '2023-03-17 23:05:13', '2023-03-17 23:09:40'),
(38, 'জাতীয় শিশু দিবস উপলক্ষে আলোচনা সভা', NULL, 'WhatsApp Image 2023-03-17 at 11.58.58_1679069426.jpg', '2023-03-17 23:10:26', '2023-03-17 23:10:26'),
(39, 'ত্রকজন বীর মুক্তিযুদ্ধার বর্ননায় ২৫মার্চ কালোরাত্র', NULL, 'b51d2240-8106-48f5-a364-94b67114d3dc_1679810805.jpg', '2023-03-26 13:06:45', '2023-03-27 11:07:13'),
(40, '২৬শে মার্চ উপলক্ষে অত্র প্রতিষ্ঠানে আলোকসজ্জা', NULL, '7278608d-6faa-466a-8dac-3c6c4b175f57_1679890755.jpg', '2023-03-27 11:11:56', '2023-03-27 11:19:15'),
(41, '২৬শে মার্চ উপলক্ষে অত্র প্রতিষ্ঠানে ‍আলোচনা সভা', NULL, 'a6bd5871-be03-4b55-bd53-ed05ef3ba3e3_1679890712.jpg', '2023-03-27 11:14:33', '2023-03-27 11:18:32'),
(42, 'পহেলা নববর্ষ উপলক্ষে অত্র প্রতিষ্ঠানে মঙ্গল শোভাযাত্রা', NULL, '0bc9bacd-fded-4bd2-b16d-76ed2da0c617_1681705408.jpg', '2023-04-17 11:23:28', '2023-04-17 11:23:28'),
(43, 'বিশ্ব কবি রবিঠাকুরের ১৬২তম জন্ম বার্ষিকি উপলক্ষে অলোচনা সভা', NULL, '6a285063-0faa-489b-9361-f3d693e5c841_1683605130.jpg', '2023-05-09 11:02:51', '2023-05-09 11:05:30'),
(44, 'জাতীয় কবি কাজী নজরুল ইসলামের জন্ম বার্ষিকী উপলক্ষে আলােচনা সভা', NULL, 'kazi_1684986848.jpg', '2023-05-25 10:54:08', '2023-05-25 10:54:08'),
(45, 'বার্ষিরিক ক্রীড়া প্রতিযোগিতার পুরস্কার বিতরণী অনুষ্ঠান-২০২৩', NULL, 'কানন_1684987290.jpg', '2023-05-25 11:01:30', '2023-05-25 11:01:30'),
(46, 'কারিগরি ও বৃত্তিমূলক শিক্ষা সপ্তাহ-২০২৩', NULL, 'D3640557-DE1B-4423-94C2-0617B3193794_1686759510.jpeg', '2023-06-14 23:18:30', '2023-06-14 23:27:25'),
(47, 'raly', NULL, '158f0b1a-598e-4ae7-9a10-de2bbae94ad3_1686798226.jpg', '2023-06-15 10:03:46', '2023-06-15 10:03:46'),
(48, 'মেলা', NULL, 'সমলা_1686971224.jpg', '2023-06-17 10:07:04', '2023-06-17 10:07:04'),
(49, 'মেলায় ফিমেল পার্টিসিপেন্ট', NULL, 'মেয়ে পাটিসিপেন্ট_1686971303.jpg', '2023-06-17 10:08:23', '2023-06-17 10:08:23'),
(50, '”স্মার্ট বাংলাদেশ “ বিনিমানে কারিগরি শিক্ষার গরুত্ব', NULL, 'zahid sir_1686993246.jpg', '2023-06-17 16:14:06', '2023-06-17 16:14:06'),
(51, 'বাংলাদেশ সার্ভে ইনস্টিটিউটে স্মার্ট বাংলাদেশ বিনির্মাণ নিয়ে সেমিনার অনুষ্ঠিত', NULL, 'স্মার্ট_1687058923.PNG', '2023-06-18 10:28:43', '2023-06-18 10:28:43'),
(52, 'Certificate', NULL, 'safi_1687145404.jpg', '2023-06-19 10:30:04', '2023-06-19 10:30:04'),
(53, 'জাতীয় শোক দিবস', NULL, '04704e61-9475-4322-bc06-4eec692ed6ad_1690957577.jpg', '2023-08-02 13:26:17', '2023-08-02 13:26:17'),
(54, 'শেখ জামালের জম্ম বার্ষিকী', NULL, 'Sheikh Jamal_1691307419.jpg', '2023-08-06 14:36:59', '2023-08-06 14:36:59'),
(55, NULL, NULL, 'শোক দিবস_1692074136.jpg', '2023-08-15 11:35:36', '2023-08-15 11:35:36'),
(56, 'শোক', NULL, 'ab99ed39-45aa-4f2a-b392-09c23068d892_1692074222.jpg', '2023-08-15 11:37:02', '2023-08-15 11:37:02'),
(57, 'শোক সভা', NULL, '১২_1692074241.jpg', '2023-08-15 11:37:21', '2023-08-15 11:37:21'),
(58, 'Asset project', NULL, 'asset_1695189988.jpg', '2023-09-20 13:06:28', '2023-09-20 13:06:28'),
(59, 'Asset project 2', NULL, 'asser1_1695190123.jpg', '2023-09-20 13:07:10', '2023-09-20 13:08:43'),
(60, 'জঙ্গিবাদ,সন্ত্রসবাদবাদ ও সাম্প্রদায়িকতা সভা', NULL, 'জঙ্গিবাদ_1695534857.jpg', '2023-09-24 12:54:17', '2023-09-24 12:54:17'),
(61, 'শিক্ষকসভা', NULL, 'শিক্ষকনভা_1696480119.jpg', '2023-10-05 11:28:39', '2023-10-05 11:28:39'),
(62, 'শিক্ষক দিবস', NULL, 'শিক্ষক দিবস_1696740277.jpg', '2023-10-08 11:44:37', '2023-10-08 11:44:37'),
(63, 'শুদ্ধাচার সভা', NULL, '99da6d3e-f804-4496-899c-d83a16eadeb5_1697348657.jpg', '2023-10-15 12:44:17', '2023-10-15 12:44:17'),
(64, 'ছবি', NULL, '435b27f3-b55f-46ed-8c63-23236c03ba96_1697349070.jpg', '2023-10-15 12:51:10', '2023-10-15 12:51:10'),
(65, 'শেখ রার্শেল', NULL, 'শেখ রাশেল_1697602266.jpg', '2023-10-18 11:11:06', '2023-10-18 11:11:06');

-- --------------------------------------------------------

--
-- Table structure for table `placement_admin`
--

CREATE TABLE `placement_admin` (
  `id` int(11) NOT NULL,
  `login_id` varchar(255) NOT NULL,
  `login_password` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `placement_admin`
--

INSERT INTO `placement_admin` (`id`, `login_id`, `login_password`) VALUES
(1, 'bsi65056@gmail.com', '77678bc3483a968e0dc8705cd6bae235');

-- --------------------------------------------------------

--
-- Table structure for table `previous_principals`
--

CREATE TABLE `previous_principals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` text NOT NULL,
  `startdate` varchar(250) NOT NULL,
  `enddate` varchar(250) NOT NULL,
  `avatar` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `probidhans`
--

CREATE TABLE `probidhans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `probidhan` varchar(255) DEFAULT NULL,
  `department` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `probidhans`
--

INSERT INTO `probidhans` (`id`, `probidhan`, `department`, `status`, `avatar`, `created_at`, `updated_at`) VALUES
(2, '2016', 'Diploma In Survey', 'Active', 'DiplomaEnggProbidhan_2016_1658900136.pdf', '2022-07-27 12:35:36', '2022-07-27 12:35:36'),
(3, '2022', 'Diploma In Survey', 'Active', '_ডিপ্লোমা ইন ইঞ্জিনিয়ারিং প্রবিধান-২০২২_1658900308.pdf', '2022-07-27 12:38:28', '2022-07-27 12:38:28'),
(4, 'Probidhan', 'Diploma In Survey', 'Active', '78-CS SURVEYING TECHNOLOGY (1)_1662690041.pdf', '2022-09-09 09:20:41', '2022-09-09 09:20:41');

-- --------------------------------------------------------

--
-- Table structure for table `Resource_management`
--

CREATE TABLE `Resource_management` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`id`, `title`, `avatar`, `created_at`, `updated_at`) VALUES
(5, 'ডিপ্লোমা ইন সার্ভে ইঞ্জিনিয়ারিং ৪র্থ,৫ম,৬ষ্ঠ পর্বের রেজাল্ট -২০২৩', '75bf034097b5dfc1e6a4c78ae93b630b.pdf', '2023-06-12 03:24:11', '2023-06-12 03:24:11'),
(6, 'ডিপ্লোমা ইন সার্ভে ইঞ্জিনিয়ারিং ৪র্থ পর্বের রেজাল্ট -২০২৩', '3e777576ce43d00175fe0266c1696766.pdf', '2023-06-12 03:25:25', '2023-06-12 03:25:25'),
(7, 'ডিপ্লোমা ইন সার্ভে ইঞ্জিনিয়ারিং ১ম ও ২য় পর্বের রেজাল্ট -২০২৩', '1ca789a97ab07c2bdc766153d5ef1703.pdf', '2023-06-12 03:28:44', '2023-06-12 03:28:44'),
(8, 'ডিপ্লোমা ইন সার্ভে ইঞ্জিনিয়ারং ২য়,৪র্থ,৬ষ্ঠ,৮ম পর্বের রেজাল্ট -২০২৩', '5741ea1ca02ebac48bf2944bac457905.pdf', '2023-06-12 03:29:41', '2023-06-12 03:29:41');

-- --------------------------------------------------------

--
-- Table structure for table `semister_plans`
--

CREATE TABLE `semister_plans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `department` varchar(255) DEFAULT NULL,
  `semister` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `semister_plans`
--

INSERT INTO `semister_plans` (`id`, `subject`, `department`, `semister`, `status`, `avatar`, `created_at`, `updated_at`) VALUES
(9, '১ম,২য়,৩য়,৪র্থ,৫ম,৬ষ্ঠ,৭ম,৮ম পর্বের সেমিস্টার প্লান', 'Diploma In Survey', 'All Semister', 'Active', '9341ebe0e0e1fded077a8ef44a499729.pdf', '2023-06-08 16:28:57', '2023-06-08 18:03:54');

-- --------------------------------------------------------

--
-- Table structure for table `slider_galleries`
--

CREATE TABLE `slider_galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` text DEFAULT NULL,
  `details` text DEFAULT NULL,
  `location` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slider_galleries`
--

INSERT INTO `slider_galleries` (`id`, `title`, `details`, `location`, `created_at`, `updated_at`) VALUES
(5, 'National Black Day-2022', 'Details', 'public/backdoor/uploads/Slider/2022.10.17IMG-20220907-WA0033_1662606119.jpg', '2022-10-17 17:49:40', '2022-10-17 17:49:40'),
(6, 'Bangladesh Servey Institute', 'Slider3', 'public/backdoor/uploads/Slider/2022.10.18fieldwork.jpg', '2022-10-18 14:33:23', '2022-10-18 14:33:23'),
(8, NULL, NULL, 'public/backdoor/uploads/Slider/2023.06.13নববর্ষ.jpg', '2023-06-13 10:20:44', '2023-06-13 10:20:44'),
(9, 'raly', NULL, 'public/backdoor/uploads/Slider/2023.06.15raly.jpg', '2023-06-15 10:02:18', '2023-06-15 10:02:18'),
(10, 'Bangladesh Survey Institute', NULL, 'public/backdoor/uploads/Slider/2023.06.15survey.jpg', '2023-06-15 10:03:09', '2023-06-15 10:03:09');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `father_name` varchar(255) DEFAULT NULL,
  `mother_name` varchar(255) DEFAULT NULL,
  `phone_number` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `designation` varchar(255) DEFAULT NULL,
  `rank` varchar(255) DEFAULT NULL,
  `merital_status` varchar(255) DEFAULT NULL,
  `pre_address` varchar(255) DEFAULT NULL,
  `per_address` varchar(255) DEFAULT NULL,
  `birth_date` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `religion` varchar(255) DEFAULT NULL,
  `join_date` varchar(255) DEFAULT NULL,
  `edu_quality` varchar(255) DEFAULT NULL,
  `bl_group` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `verifiedcode` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `name`, `father_name`, `mother_name`, `phone_number`, `gender`, `designation`, `rank`, `merital_status`, `pre_address`, `per_address`, `birth_date`, `email`, `password`, `religion`, `join_date`, `edu_quality`, `bl_group`, `status`, `avatar`, `verifiedcode`, `created_at`, `updated_at`) VALUES
(2, 'Md. Safiullah', 'A. Hannan', 'Hosneara Begum', '01521202123', 'Male', 'Craft Instructor(TR)', '2', 'Unmarrid', '521,Khairabad South Para, P.O: Gongamandal, P.S: Debidwar, Dist: Cumilla', 'Same', '1994-01-01', 'mdsofi7@gmail.com', NULL, 'Islam', '2021-01-07', 'M.Sc(Mathematics)', 'A+', 'Active', 'safiullah_1642318626.jpeg', NULL, '2022-01-16 14:37:06', '2022-01-16 14:37:06'),
(3, 'MD. FARUK HOSSEN', 'MD. AZIZUL HAQUE', 'MST. ALEMA BEGUM', '01747071668', 'Male', 'Craft Instructor(Shop)', '3', 'Unmarrid', 'Village: Dondopani Post: Mustafapur\\r\\nUpozilla: Parbatipur Zilla: Dinajpur', 'Same', '1997-08-24', 'farukhossenpk@gmail.com', NULL, 'Islam', '2021-07-01', 'BSC Honours (Mathematics)', 'A+', 'Active', 'faruk_1642319518.jpg', NULL, '2022-01-16 14:51:58', '2022-01-16 14:51:58'),
(4, 'Athia Ferdous Ananna', 'Mohammad Jasim Uddin', 'Shahnaj Parvin', '01741497351', 'Male', 'Craft Instructor(TR)', '2', 'Marrid', 'Char Pakundia, Pakundia, Kishoreganj', 'Same', '1996-03-12', 'athiaferdous51@gmail.com', NULL, 'Islam', '2021-07-21', 'B.Sc.(Hon\\\'s) in chemistry', 'A+', 'Active', 'atiya_1642319826.jpg', NULL, '2022-01-16 14:57:06', '2022-01-16 14:57:06'),
(6, 'MD.ABDUL HALIM', 'MD.Abdul Manan', 'MRSS. Ambia Khatun', '01917405629', 'Male', 'Craft Instructor(TR)', '2', 'Marrid', 'Vill:Kusumpur, P.O:Rampur, Thana:Burichang, Cumilla', 'Same', '1992-12-15', 'mdabdulhalim580@gmail.com', NULL, 'Islam', '2021-01-07', 'BSc(honours), MSc(Physics)', 'A+', 'Active', 'halim_1642321250.jpg', NULL, '2022-01-16 15:20:50', '2022-01-16 15:20:50'),
(7, 'JUAL CHANDRA RAY', 'MOHENDRA NATH', 'CHOMPOLA RANI', '01748607960', 'Male', 'Laboratory Assistant(science)', '5', 'Marrid', 'Bangladesh Survey Institute, Rammala, comilla', 'village:Mostofapur Shoular Para,  Post Office: Shakar Hat, Up: Badargonj, Dis:Rangpur', '1992-08-22', 'jualkumar32@gmail.com', NULL, 'Hindu', '2021-09-16', 'Bsc In Computer Science', 'B+', 'Active', 'jual_1642322113.jpg', NULL, '2022-01-16 15:35:13', '2022-05-28 10:49:19'),
(8, 'AL IMAM', 'LATE KALAMIA BISWAS', 'SURATAN NESSA', '01735920705', 'Male', 'Craft Instructor(TR)', '2', 'Marrid', 'HAZI ABDUL BAREK VILA, HOLDING: 312, WARD NO:07, GOBINDRO PUR,CUMILLA', 'VILL: MOHODDIR CHAR, POST: ANAYET NAGAR, P.S: KALKINI, DIST: MADARI PUR', '1991-11-01', 'emam9672@gmail.com', NULL, 'Islam', '2021-07-01', 'HONOURS in Chemistry, MSC in Chemistry', 'O+', 'Active', 'imam_1642322681.jpg', NULL, '2022-01-16 15:44:41', '2022-01-16 15:44:41'),
(10, 'Md.Mehedi Hasan Rubel', 'Late. Abdul Ali', 'Mohor Banu', '01725519409', 'Male', 'Junior Instructor(Tech/Survey)', '4', 'Marrid', 'Bangladesh Survey Institute,Rammala,Cumilla-3500', 'Vill: Algirchar, P:O: Pirij Pur,Thana: Kuliar Char, Dist: Kishorganj', '1993-05-31', 'Mehedirhd20@gmail.com', NULL, 'Islam', '2021-09-25', 'Bsc in Civil Engineering', 'O+', 'Active', 'IMG_20221101_113239_1667572843.jpg', NULL, '2022-01-16 15:53:49', '2022-11-04 21:40:43'),
(11, 'Sharif Ahammad', 'Ali Ahammad', 'Abeda Khatun', '01789949788', 'Male', 'Craft Instructor(Shop)', '3', 'Marrid', '386, Amzadcourt, Jorpukurpar, Thakurpara, Cumilla', 'Vill: Kamalapur, P.O: Sharatnagar. Upazila: Adarsha Sadar, Cumilla-3501', '1992-12-31', 'sharifahammad17@gmail.com', NULL, 'Islam', '2021-08-14', 'M.S. In Forestry', 'B+', 'Active', 'sarif_1669617424.jpg', NULL, '2022-01-16 16:22:59', '2022-11-28 13:37:04'),
(13, 'MEHIR CHANDRA SARKER', 'KALY CHARAN SARKER', 'APU RANI SARKER', '01831182606', 'Male', 'Craft Instructor(TR)', '2', 'Unmarrid', 'Ranirbazar,Adarsha sadar,Cumilla', 'Vill: Kemtali, P.O: Kemtali,P.S: Barura,Dist:Cumilla', '1995-01-01', 'mehirsarker50@gmail.com', NULL, 'Hindu', '2021-08-14', 'M.Sc in Physics', 'O+', 'Active', 'changeImage_1666316200.jpeg', NULL, '2022-01-16 16:30:21', '2022-10-21 08:36:40'),
(15, 'ASHADUL ISLAM', 'TABIBOR RAHMAN', 'RASHEDA BEGUM', '01796754570', 'Male', 'Craft Instructor(TR)', '2', 'Unmarrid', 'Bangladesh survey Institute, cumilla', 'Village : Bogulagari, post: Rajarhat,Up: jaldhaka,District:Nilphamari', '1995-07-18', 'ashadulislamasad9@gmail', NULL, 'Islam', '2021-01-07', 'BSc (Honours) chemistry', 'B+', 'Active', 'ashadul_1642325943.jpg', NULL, '2022-01-16 16:39:03', '2022-01-16 16:39:03'),
(17, 'Md.Faruk Hossain', 'Md.Fazlur Rahman', 'Nurjahan Begum', '01405691039', 'Male', 'Junior Instructor', '4', 'Marrid', 'Bangladesh Survey institute, Rammala,cumilla', 'Vill:North Norpati,Post:Dombaria,P/S:Laksam\\r\\nDistrict :Cumilla', '1993-07-09', 'farukce400@gmail.com', NULL, 'Islam', '2021-09-25', 'B.sc in Civil Engineering', 'A+', 'Active', 'IMG-20220828-WA0008_200x200_1663050973.jpg', NULL, '2022-01-16 16:45:47', '2022-09-13 13:36:13'),
(28, 'Md Anowar Hossain', 'Md Raham Ali', 'Saleha Begum', '01827454610', 'Male', 'Craft Instructor (TR/Electronics/Tech))', '13', 'Marrid', 'Thakur Para, Ram-Krishna Primary School', 'Vill+Post: Atipara, P.S: Wazirpur, Dis: Barishal', '1992-10-05', 'ah113395@gmail.com', NULL, 'Islam', '2021-07-01', 'Masters in Science (Physics)', 'AB+', 'Active', 'My Latest Pic_1643390183.jpg', NULL, '2022-01-29 00:16:23', '2022-01-29 00:16:23'),
(29, 'Suman chakraborty', 'Sukhamay chakraborty', 'Surjabala Chakraborty', '01992006462', 'Male', 'Instructor(Non-Tech) Math', '9th', 'Marrid', 'Bangladesh Survey Institute,Rammala,Cumilla', NULL, '1982-11-15', 'somanbd562@gmail.com', NULL, 'Hindu', '2022-08-17', 'M.Sc in Math', 'O+', 'Active', 'inbound81063169250565113-1_1663050603.jpg', NULL, '2022-09-13 13:30:03', '2022-09-13 13:30:03'),
(32, 'Md.Sofir Uddin', 'Md.', 'Mrs.', '01715307841', 'Male', 'Head Assistant', '14th', 'Marrid', NULL, NULL, '1971-06-30', 'bsisoboj@gmail.com', NULL, 'Islam', '1991-12-21', 'HSC', 'B+', 'Active', 'PIC_1677044220.jpg', NULL, '2023-02-22 12:37:00', '2023-02-22 12:37:00'),
(33, 'MD ABU YOUSUF', 'Ayub Ali', 'Jahanara Begum', '01678909091', NULL, 'Principal', '1', NULL, NULL, NULL, '26/07/1994', 'virtualitprofessional@gmail.com', NULL, 'Islam', NULL, NULL, 'B+', NULL, 'Photo-f194118d-f554-102b-bf80-a2f0cb296da4_1677670655.jpg', NULL, '2023-03-01 18:37:35', '2023-03-01 18:37:35');

-- --------------------------------------------------------

--
-- Table structure for table `staff_panels`
--

CREATE TABLE `staff_panels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `father_name` varchar(255) DEFAULT NULL,
  `mother_name` varchar(255) DEFAULT NULL,
  `phone_number` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `designation` varchar(255) DEFAULT NULL,
  `rank` int(255) DEFAULT NULL,
  `joining_date` varchar(255) DEFAULT NULL,
  `pre_address` varchar(255) DEFAULT NULL,
  `per_address` varchar(255) DEFAULT NULL,
  `birth_date` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `religion` varchar(255) DEFAULT NULL,
  `bl_group` varchar(255) DEFAULT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `verifiedcode` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `staff_panels`
--

INSERT INTO `staff_panels` (`id`, `name`, `father_name`, `mother_name`, `phone_number`, `gender`, `designation`, `rank`, `joining_date`, `pre_address`, `per_address`, `birth_date`, `email`, `password`, `religion`, `bl_group`, `avatar`, `status`, `verifiedcode`, `created_at`, `updated_at`) VALUES
(4, 'Md.Sofir Uddin', 'Md.Hafiz Uddin', 'Mrs.Rupban Bibi', '01715307841', NULL, 'Head Assistant', 1, '21.12.1991', NULL, NULL, '30/06/1971', 'bsisoboj@gmail.com', NULL, 'Islam', 'B+', 'PIC_1678340668.jpg', NULL, NULL, '2023-03-09 12:44:28', '2023-03-09 12:44:28'),
(5, 'Md.Anowar Hossain', 'Md.Raham Ali', 'Saleha  Begum', '01827454610', NULL, 'Craft Instructor(TR)', 2, '01.07.2021', NULL, NULL, '05.10.1992', 'ah113395@gmail.com', NULL, 'Islam', 'AB+', '295189662_2361722183980402_2162692308767751094_n_1678604086.jpg', NULL, NULL, '2023-03-12 13:54:46', '2023-04-10 11:36:06'),
(6, 'Al Imam', 'Kala Mia Biswas', 'Suratan Nessa', '01735920705', NULL, 'Craft Instructor(TR)', 4, '10', NULL, NULL, '01.11.1991', 'emam9672@gmail.com', NULL, 'Islam', 'A+', 'ইমাম_1685846199.jpg', NULL, NULL, '2023-03-14 12:54:08', '2023-06-21 13:45:50'),
(7, 'Md.Abdul Halim', 'Md.Abdul Manan', 'Mrss.Ambia Khatun', '01917405629', NULL, 'Craft Instructor(TR)', 3, '01.07.2021', NULL, NULL, '15.12.1992', 'mdabdulhalim@gmail.com', NULL, 'Islam', 'B+', '217404486_279293207328828_2929745922176072064_n_1678773618.jpg', NULL, NULL, '2023-03-14 13:00:18', '2023-06-21 13:45:20'),
(8, 'Athia Ferdous Ananna', 'Mohammad Jasim Uddin', 'Shahnaj Parvin', '01741497351', NULL, 'Craft Instructor(TR)', 7, '01.07.2021', NULL, NULL, '12.03.1996', 'athiaferdous51@gmail.com', NULL, 'Islam', 'B+', '63c32f45-3335-418a-8c83-4d7465146092_1678938426.jpg', NULL, NULL, '2023-03-14 13:05:47', '2023-06-21 13:46:45'),
(9, 'Mehir Chandra Sarkar', 'Kaly Chandra Sarkar', 'Apu Rari Sarkar', '01831182606', NULL, 'Craft Instructor(TR)', 10, '01.07.2021', NULL, NULL, '01.01.1995', 'mehirsarkar50@gmail.com', NULL, 'Hindu', 'O+', '322274232_962035754961334_3795003913431658879_n_1678938724.jpg', NULL, NULL, '2023-03-16 10:52:04', '2023-06-21 13:48:43'),
(10, 'Md.Safiullah Munshi', 'Abdul Hannan', 'Hosneara Begum', '01521202123', NULL, 'Craft Instructor(TR)', 6, '01.07.2021', NULL, NULL, '01.01.1994', 'mdsoafi7@gmail.com', NULL, 'Islam', 'A+', '4d4381d6-4e30-4a68-9e37-237ef27a64bb_1678938907.jpg', NULL, NULL, '2023-03-16 10:55:07', '2023-06-21 13:47:04'),
(11, 'Munmun Nahar Nipa', 'Hamir Hossen', 'Farida Yesmin', '01832059493', NULL, 'Craft Instructor(Shop)', 11, '01.07.2021', NULL, NULL, '05.09.1992', 'nipacu92@gmail.com', NULL, 'Islam', 'B+', NULL, NULL, NULL, '2023-03-16 11:13:07', '2023-06-21 13:48:57'),
(12, 'Sharif Ahammad', 'Ali Ahammad', 'Abeda Khatun', '01789949788', NULL, 'Craft Instructor(Shop)', 5, '01.07.2021', NULL, NULL, '31.12.1992', 'sharifahammad17@gmail.com', NULL, 'Islam', 'B+', '296978512_466183235312768_3692142448140363513_n_1679201209.jpg', NULL, NULL, '2023-03-19 11:46:49', '2023-06-21 13:46:20'),
(13, 'Abu Horaira Shamim', 'Md.Mostafa Kamal', 'Aysha Siddika', '01917855569', NULL, 'Craft Instructor(Shop)', 9, '01.07.2021', NULL, NULL, '12.08.1996', 'ahshamim81@gmail.com', NULL, 'Islam', 'O+', '239445689_1190814728122742_7707683177292632664_n_1679201417.jpg', NULL, NULL, '2023-03-19 11:50:17', '2023-06-21 13:47:53'),
(14, 'Md.Faruk Hossen', 'Md.Azizul Haque', 'Mst. Alema Begum', '01747071668', NULL, 'Craft Instructor(Shop)', 8, '01.07.2021', NULL, NULL, '14.08.1997', 'farukhossenpk@gmail.com', NULL, 'Islam', 'A+', '264678431_1750457738619403_7916486142820618690_n_1679201669.jpg', NULL, NULL, '2023-03-19 11:54:29', '2023-06-21 13:47:37'),
(15, 'Ashadul Islam', 'Tabibor  Rahmam', 'Rasheda Begum', '01796754570', NULL, 'Craft Instructor(TR)', 10, '01.07.2021', NULL, NULL, '18.07.1995', 'ashadulislamasad9@gmail.com', NULL, 'Islam', 'B+', '160717189_404136418026074_7188510097600962426_n_1679201950.jpg', NULL, NULL, '2023-03-19 11:59:10', '2023-06-21 13:48:16'),
(16, 'Jual Chandra Ray', 'Mohendra Nath', 'Champola Rani', '01748607960', NULL, 'Lab Assistant', 12, '16.09.2021', NULL, NULL, '22.08.1992', 'jualkumor232@gmail.com', NULL, 'Hindu', 'B+', NULL, NULL, NULL, '2023-03-19 12:03:18', '2023-06-21 13:49:34'),
(17, 'Abul Hosean', 'Md.Babor Ali Akonda', 'Ms. Mozida Khaton', '0191463214', NULL, 'Office Assistant', 14, '29.12.2012', NULL, NULL, '01.02.1984', 'abulhsurvey@gmai.com', NULL, 'Islam', 'AB+', '1dcc4493-9dea-489a-9db3-048c596a7eb6_1679202908.jpg', NULL, NULL, '2023-03-19 12:09:42', '2023-06-21 13:50:43'),
(18, 'Md.Hussain(Sumon)', 'Md.Late Abdul Malek', 'Anowara Begum', '01811905820', NULL, 'Office Assistant', 13, '04/10/2017', NULL, NULL, '30/08/1984', 'hussainali.sr@gmail.com', NULL, 'Islam', 'A+', 'somun_1685336886.jpg', NULL, NULL, '2023-05-29 12:08:06', '2023-06-21 13:50:29');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `father_name` varchar(255) DEFAULT NULL,
  `mother_name` varchar(255) DEFAULT NULL,
  `phone_number` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `semister` varchar(255) DEFAULT NULL,
  `session` varchar(255) DEFAULT NULL,
  `roll_number` varchar(255) DEFAULT NULL,
  `regi_no` varchar(255) DEFAULT NULL,
  `pre_address` varchar(255) DEFAULT NULL,
  `per_address` varchar(255) DEFAULT NULL,
  `birth_date` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `religion` varchar(255) DEFAULT NULL,
  `bl_group` varchar(255) DEFAULT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `verifiedcode` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `student_arcive`
--

CREATE TABLE `student_arcive` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `file` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `student_arcive`
--

INSERT INTO `student_arcive` (`id`, `title`, `file`, `created_at`, `updated_at`) VALUES
(2, 'welcome everyone', 'public/backdoor/uploads/newsEvent/2022.12.03bangla first peppar.pdf', NULL, NULL),
(3, 'hi success', 'public/backdoor/uploads/newsEvent/2022.12.03bangla first peppar.pdf', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `syllabi`
--

CREATE TABLE `syllabi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `department` varchar(255) DEFAULT NULL,
  `semister` varchar(255) DEFAULT NULL,
  `probidhan` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `syllabi`
--

INSERT INTO `syllabi` (`id`, `department`, `semister`, `probidhan`, `status`, `avatar`, `created_at`, `updated_at`) VALUES
(11, 'Diploma In Survey', 'semister3', 'probidan-2022', 'Active', '$2y$10$vQey.96GrfMFZvSd89/jCO0K80SDu510ftIU7B5RkW0hFtCDdt60a.pdf', '2023-06-08 17:52:14', '2023-06-08 17:52:14'),
(12, 'Diploma In Survey', '2nd Semester', 'probidan-2022', 'Active', 'f40e1e05f97f31435709ae3a86926a49.pdf', '2023-06-12 12:40:32', '2023-06-12 12:40:32'),
(13, 'Diploma In Survey', '1st Semester', 'probidan-2022', 'Active', 'e8df98f53bca653a2574abe10ba25ad7.pdf', '2023-06-12 12:42:36', '2023-06-12 12:42:36');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_panels`
--

CREATE TABLE `teacher_panels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `father_name` varchar(255) DEFAULT NULL,
  `mother_name` varchar(255) DEFAULT NULL,
  `phone_number` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `designation` varchar(255) DEFAULT NULL,
  `rank` int(255) DEFAULT NULL,
  `joining_date` varchar(255) DEFAULT NULL,
  `pre_address` varchar(255) DEFAULT NULL,
  `per_address` varchar(255) DEFAULT NULL,
  `birth_date` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `religion` varchar(255) DEFAULT NULL,
  `bl_group` varchar(255) DEFAULT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `verifiedcode` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teacher_panels`
--

INSERT INTO `teacher_panels` (`id`, `name`, `father_name`, `mother_name`, `phone_number`, `gender`, `designation`, `rank`, `joining_date`, `pre_address`, `per_address`, `birth_date`, `email`, `password`, `religion`, `bl_group`, `avatar`, `status`, `verifiedcode`, `created_at`, `updated_at`) VALUES
(5, 'Engineer Md. Mobaruk Hossean', 'Mr.', 'Mrs.', '01756157751', NULL, 'Principal', 1, '24/06/2022', NULL, NULL, '24/12/1977', 'mmobarak15011974@gmail.com', NULL, 'Islam', 'B+', 'mr_1678339847.PNG', NULL, NULL, '2023-03-09 12:30:47', '2023-05-17 21:55:15'),
(6, 'Ajit Kumar Debnath', 'Paritosh Chandra Debnath', 'Chitra Rani Devi', '01716417214', NULL, 'Chief Instructor(Non-Tech)', 3, '15.01.2023', NULL, NULL, '28.12.1979', 'ajitkumardebnath22@gmail.com', NULL, 'Hindu', 'AB+', 'Picture of Ajit_page-0001_1678599730.jpg', NULL, NULL, '2023-03-12 12:07:47', '2023-03-12 12:42:10'),
(7, 'Suman Chakraborty', 'Sukhamay Chakraborty', 'Surjabala Chakraborty', '01992006462', NULL, 'Instructor(Non-Tech)', 9, '17/8/2022', NULL, NULL, '01.01.1986', 'somanbd562@gmail.com', NULL, 'Hindu', 'O+', '171638137_663747481257923_2072602157133087432_n_1678599593.jpg', NULL, NULL, '2023-03-12 12:39:53', '2023-06-07 16:16:28'),
(8, 'Md.Shahedul Islam', 'Md. Dadun mia', 'Mst Shahana Begum', '01845-151345', NULL, 'Junior Instructor(Tech)', 10, '14/09/2014', NULL, NULL, '01/08/1992', 'shahedstein105@gmail.com', NULL, 'Islam', 'A+', '49db5fc0-d050-4ccd-86e5-31ebe03079ae_1678599946.jpg', NULL, NULL, '2023-03-12 12:45:46', '2023-03-12 12:45:46'),
(9, 'Md.Faruk Hossain', 'Md.Fazlur Rahman', 'Mst.Nur Jahan Begum', '01405691039', NULL, 'Junior Instructor(Tech)', 10, '25.09.2021', NULL, NULL, '07.09.1993', 'farukce400@gmail.com', NULL, 'Islam', 'O+', 'c885e80e-0926-4706-898f-791ec433a110_1678773654.jpg', NULL, NULL, '2023-03-12 13:40:53', '2023-03-14 13:00:54'),
(10, 'Md.Mehedi Hasan Rubel', 'Late. Abdul Ali', 'Mohor Banu', '01725519409', NULL, 'Junior Instructor(Tech)', 10, '25.09.2021', NULL, NULL, '31.05.1993', 'mehedirhd20@gmail.com', NULL, 'Islam', 'O+', 'WhatsApp Image 2023-06-07 at 15.21.54_1686129747.jpg', NULL, NULL, '2023-03-12 13:45:42', '2023-06-07 16:22:27'),
(11, 'Mohammad Mukhlesur Rahman', 'Mohammad Abdul Bari', 'Mrs Shamsur Nahar', '01712628786', NULL, 'Instructor(Non-Tech)', 9, '09.07.2006', NULL, NULL, '05.10.1978', 'kanon7879@gmail.com', NULL, 'Islam', 'A+', 'sir_1684304581.jpg', NULL, NULL, '2023-05-17 13:23:01', '2023-05-17 13:23:01');

-- --------------------------------------------------------

--
-- Table structure for table `training_subject_wises`
--

CREATE TABLE `training_subject_wises` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `training_subject_wises`
--

INSERT INTO `training_subject_wises` (`id`, `title`, `avatar`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Subjectwise Training', '5cc19dded7f0d9638c0a8e6da50fd77d.pdf', NULL, '2023-06-14 03:08:30', '2023-06-14 03:10:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Monir', 'monir3973@gmail.com', NULL, '1234', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `video_galleries`
--

CREATE TABLE `video_galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` text DEFAULT NULL,
  `details` text DEFAULT NULL,
  `location` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `video_galleries`
--

INSERT INTO `video_galleries` (`id`, `title`, `details`, `location`, `created_at`, `updated_at`) VALUES
(19, 'কারিগরি ও বৃত্তিমূলক শিক্ষা সপ্তাহ-২০২৩ উদযাপন', NULL, 'public/backdoor/uploads/notice/2023.06.15WhatsApp Video 2023-06-15 at 9.05.56 AM.mp4', '2023-06-15 10:36:02', '2023-06-15 10:36:02'),
(20, 'কারিগরি ও বৃত্তিমূলক শিক্ষা মেলা-২০২৩', NULL, 'public/backdoor/uploads/notice/2023.06.17WhatsApp Video 2023-06-17 at 8.56.50 AM.mp4', '2023-06-17 10:00:07', '2023-06-17 10:00:07');

-- --------------------------------------------------------

--
-- Table structure for table `yearly_bay_planing`
--

CREATE TABLE `yearly_bay_planing` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `file` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `yearly_bay_planing`
--

INSERT INTO `yearly_bay_planing` (`id`, `title`, `file`, `created_at`, `updated_at`) VALUES
(1, '2023 উদযাপন', '', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `yearly_planing`
--

CREATE TABLE `yearly_planing` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `file` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `yearly_planing`
--

INSERT INTO `yearly_planing` (`id`, `title`, `file`, `created_at`, `updated_at`) VALUES
(3, 'Test', 'public/backdoor/uploads/newsEvent/2022.12.01assingnment.pdf', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `academics`
--
ALTER TABLE `academics`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `academic_calenders`
--
ALTER TABLE `academic_calenders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `addmission_info`
--
ALTER TABLE `addmission_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_panels`
--
ALTER TABLE `admin_panels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `applyjobs`
--
ALTER TABLE `applyjobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `applyjobs_email_unique` (`email`);

--
-- Indexes for table `box_contents`
--
ALTER TABLE `box_contents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `class_routines`
--
ALTER TABLE `class_routines`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `contacts_email_unique` (`email`);

--
-- Indexes for table `exam_routines`
--
ALTER TABLE `exam_routines`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `important_links`
--
ALTER TABLE `important_links`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `industrial_attachments`
--
ALTER TABLE `industrial_attachments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `industry_visits`
--
ALTER TABLE `industry_visits`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `info_boxes`
--
ALTER TABLE `info_boxes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `institute_details`
--
ALTER TABLE `institute_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `in_house_staff`
--
ALTER TABLE `in_house_staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `in_house_teachers`
--
ALTER TABLE `in_house_teachers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobplacement_cel`
--
ALTER TABLE `jobplacement_cel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobplaces`
--
ALTER TABLE `jobplaces`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_placements`
--
ALTER TABLE `job_placements`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `job_placements_position_unique` (`position`);

--
-- Indexes for table `juniorstaff`
--
ALTER TABLE `juniorstaff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `labdetails`
--
ALTER TABLE `labdetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `linkage_industries`
--
ALTER TABLE `linkage_industries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `needy_students`
--
ALTER TABLE `needy_students`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `needy_students_cv_unique` (`cv`);

--
-- Indexes for table `notices`
--
ALTER TABLE `notices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `photo_galleries`
--
ALTER TABLE `photo_galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `placement_admin`
--
ALTER TABLE `placement_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `previous_principals`
--
ALTER TABLE `previous_principals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `probidhans`
--
ALTER TABLE `probidhans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Resource_management`
--
ALTER TABLE `Resource_management`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `semister_plans`
--
ALTER TABLE `semister_plans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider_galleries`
--
ALTER TABLE `slider_galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff_panels`
--
ALTER TABLE `staff_panels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_arcive`
--
ALTER TABLE `student_arcive`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `syllabi`
--
ALTER TABLE `syllabi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacher_panels`
--
ALTER TABLE `teacher_panels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `training_subject_wises`
--
ALTER TABLE `training_subject_wises`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `video_galleries`
--
ALTER TABLE `video_galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `yearly_bay_planing`
--
ALTER TABLE `yearly_bay_planing`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `yearly_planing`
--
ALTER TABLE `yearly_planing`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `academics`
--
ALTER TABLE `academics`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `academic_calenders`
--
ALTER TABLE `academic_calenders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `addmission_info`
--
ALTER TABLE `addmission_info`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `admin_panels`
--
ALTER TABLE `admin_panels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `applyjobs`
--
ALTER TABLE `applyjobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `box_contents`
--
ALTER TABLE `box_contents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=190;

--
-- AUTO_INCREMENT for table `class_routines`
--
ALTER TABLE `class_routines`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=579;

--
-- AUTO_INCREMENT for table `exam_routines`
--
ALTER TABLE `exam_routines`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `important_links`
--
ALTER TABLE `important_links`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `industrial_attachments`
--
ALTER TABLE `industrial_attachments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `industry_visits`
--
ALTER TABLE `industry_visits`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `info_boxes`
--
ALTER TABLE `info_boxes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `institute_details`
--
ALTER TABLE `institute_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `in_house_staff`
--
ALTER TABLE `in_house_staff`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `in_house_teachers`
--
ALTER TABLE `in_house_teachers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `jobplacement_cel`
--
ALTER TABLE `jobplacement_cel`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `jobplaces`
--
ALTER TABLE `jobplaces`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=278;

--
-- AUTO_INCREMENT for table `job_placements`
--
ALTER TABLE `job_placements`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `juniorstaff`
--
ALTER TABLE `juniorstaff`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `labdetails`
--
ALTER TABLE `labdetails`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `linkage_industries`
--
ALTER TABLE `linkage_industries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `needy_students`
--
ALTER TABLE `needy_students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `notices`
--
ALTER TABLE `notices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `photo_galleries`
--
ALTER TABLE `photo_galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `placement_admin`
--
ALTER TABLE `placement_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `previous_principals`
--
ALTER TABLE `previous_principals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `probidhans`
--
ALTER TABLE `probidhans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `Resource_management`
--
ALTER TABLE `Resource_management`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `result`
--
ALTER TABLE `result`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `semister_plans`
--
ALTER TABLE `semister_plans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `slider_galleries`
--
ALTER TABLE `slider_galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `staff_panels`
--
ALTER TABLE `staff_panels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `student_arcive`
--
ALTER TABLE `student_arcive`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `syllabi`
--
ALTER TABLE `syllabi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `teacher_panels`
--
ALTER TABLE `teacher_panels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `training_subject_wises`
--
ALTER TABLE `training_subject_wises`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `video_galleries`
--
ALTER TABLE `video_galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `yearly_bay_planing`
--
ALTER TABLE `yearly_bay_planing`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `yearly_planing`
--
ALTER TABLE `yearly_planing`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
