-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 30, 2016 at 12:39 AM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `acadah_app9`
--

-- --------------------------------------------------------

--
-- Table structure for table `acadah_admission_letter`
--

CREATE TABLE IF NOT EXISTS `acadah_admission_letter` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `session_id` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `sch_id` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `acadah_admission_letter`
--

INSERT INTO `acadah_admission_letter` (`id`, `title`, `content`, `session_id`, `status`, `sch_id`) VALUES
(1, '2014/2015 Admission Letters', '<p>Hello How far, Jonathan Aboki don accept your admission application, oya go and be be happying. lolz.s</p>', 1, 'active', 'jsot'),
(3, '2010/2011 Admission Letter', '<p>Hello How far, Jonathan Aboki don accept your admission application, oya go and be be happying. lolz.</p>', 2, 'inactive', 'jsot');

-- --------------------------------------------------------

--
-- Table structure for table `acadah_app_config`
--

CREATE TABLE IF NOT EXISTS `acadah_app_config` (
  `key` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `value` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `acadah_app_config`
--

INSERT INTO `acadah_app_config` (`key`, `value`) VALUES
('additional_payment_types', ''),
('always_show_item_grid', '0'),
('auto_focus_on_item_after_sale_and_receiving', '1'),
('automatically_email_receipt', '0'),
('automatically_show_comments_on_receipt', '0'),
('averaging_method', 'moving_average'),
('barcode_price_include_tax', '0'),
('calculate_average_cost_price_from_receivings', '0'),
('change_sale_date_when_completing_suspended_sale', '0'),
('change_sale_date_when_suspending', '0'),
('commission_default_rate', '0'),
('company', 'Topspeed Nigeria Limited'),
('company_logo', '0'),
('currency_symbol', 'N'),
('customers_store_accounts', '0'),
('date_format', 'middle_endian'),
('receipt_text_size', 'small'),
('require_customer_for_sale', '0'),
('return_policy', 'Enter Return policy'),
('round_cash_on_sales', '1'),
('round_tier_prices_to_2_decimals', '0'),
('sale_prefix', 'STOCKAH'),
('select_sales_person_during_sale', '0'),
('show_receipt_after_suspending_sale', '0'),
('spreadsheet_format', 'XLSX'),
('time_format', '12_hour'),
('track_cash', '0'),
('version', '14.4'),
('website', '');

-- --------------------------------------------------------

--
-- Table structure for table `acadah_app_div`
--

CREATE TABLE IF NOT EXISTS `acadah_app_div` (
  `school_div_id` int(11) NOT NULL,
  `school_div_name` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `acadah_app_div`
--

INSERT INTO `acadah_app_div` (`school_div_id`, `school_div_name`) VALUES
(1, 'pre-school'),
(2, 'kindergertin'),
(3, 'nursery'),
(4, 'primary'),
(5, 'junior sec sch'),
(6, 'senior sec sch'),
(7, 'A level');

-- --------------------------------------------------------

--
-- Table structure for table `acadah_app_level`
--

CREATE TABLE IF NOT EXISTS `acadah_app_level` (
  `level_id` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `class_name` varchar(20) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `acadah_app_level`
--

INSERT INTO `acadah_app_level` (`level_id`, `class_name`) VALUES
('all', 'ALL LEVELS'),
('creche', 'creche'),
('jss1', 'JSS 1'),
('jss2', 'JSS 2'),
('jss3', 'JSS 3'),
('kg1', 'KG 1'),
('kg2', 'KG 2'),
('kg3', 'KG 3'),
('nur1', 'NURSERY 1'),
('nur2', 'NURSERY 1'),
('nur3', 'NURSERY 1'),
('playgroup', 'PLAYGROUP'),
('pry1', 'PRIMARY 1'),
('pry2', 'PRIMARY 2'),
('pry3', 'PRIMARY 3'),
('pry4', 'PRIMARY 4'),
('pry5', 'PRIMARY 5'),
('pry6', 'PRIMARY 6'),
('sss1', 'SSS 1'),
('sss2', 'SSS 2'),
('sss3', 'SSS 3');

-- --------------------------------------------------------

--
-- Table structure for table `acadah_app_modules`
--

CREATE TABLE IF NOT EXISTS `acadah_app_modules` (
  `name_lang_key` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `desc_lang_key` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `module_name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `module_title` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `module_author` varchar(200) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Acadah Inc',
  `module_version` varchar(200) COLLATE utf8_unicode_ci NOT NULL DEFAULT '1.0',
  `sort` int(10) NOT NULL,
  `icon` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `module_id` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `module_cat` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `module_status` enum('active','inactive','') COLLATE utf8_unicode_ci NOT NULL,
  `module_type` enum('core','addon') COLLATE utf8_unicode_ci NOT NULL,
  `settings_url` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `acadah_app_modules`
--

INSERT INTO `acadah_app_modules` (`name_lang_key`, `desc_lang_key`, `module_name`, `module_title`, `module_author`, `module_version`, `sort`, `icon`, `module_id`, `module_cat`, `module_status`, `module_type`, `settings_url`) VALUES
('module_account', 'module_account_desc', 'Account', 'Account', 'Acadah Inc', '1.0', 30, 'icon-graph', 'account', 'Busary', 'active', 'addon', 'account/setting'),
('module_admission', 'module_admission_desc', 'Admission', 'Admission', 'Acadah Inc', '1.1', 10, 'fa-plus-circle', 'admission', '', 'active', 'addon', ''),
('module_alumni', 'module_alumni_desc', 'Alumni', 'Alumni', 'Acadah Inc', '1.0', 50, 'fa-users', 'alumni', '', 'inactive', 'addon', ''),
('module_attendance', 'module_attendance_desc', 'Attendance', 'Attendance', 'Acadah Inc', '1.0', 20, 'fa-check-square-o', 'attendance', '', 'inactive', 'addon', ''),
('module_backup', 'module_backup_desc', 'Backup', 'Backup', 'Acadah Inc', '1.0', 80, 'fa-cloud-download', 'backup', '', 'inactive', 'addon', ''),
('module_calender', 'module_calender_desc', '', '', 'Acadah Inc', '1.0', 60, 'fa-calendar', 'calender', '', 'inactive', 'core', ''),
('module_core', 'module_core_desc', 'Core', 'Core', 'Acadah Inc', '1.0', 5, 'fa-tachometer-square', 'core', '', 'active', 'core', ''),
('module_e-exam', 'module_e-exam_desc', '', '', 'Acadah Inc', '1.0', 70, 'fa-question-circle', 'e-exam', '', 'inactive', 'core', ''),
('module_fees', 'module_fees_desc', 'Fees', 'Fees', 'Acadah Inc', '1.0.1', 30, 'fa-money', 'fees', '', 'active', 'addon', ''),
('module_message', 'module_message_desc', '', '', 'Acadah Inc', '1.0', 110, 'fa-envelope-o', 'message', '', 'inactive', 'core', ''),
('module_notepad', 'module_notepad_desc', '', '', 'Acadah Inc', '1.0', 40, 'fa-pencil', 'notepad', '', 'inactive', 'core', ''),
('module_result', 'module_result_desc', 'Result', 'Result', 'Acadah Inc', '1.0', 90, 'fa-file-text', 'results', '', 'active', 'addon', 'results/settings'),
('module_schools', 'module_schools_desc', '', '', 'Acadah Inc', '1.0', 80, 'fa-plus-square', 'schools', '', 'inactive', 'core', ''),
('module_settings', 'module_settings_desc', '', '', 'Acadah Inc', '1.0', 80, 'fa-gears', 'settings', '', 'inactive', 'core', ''),
('module_staff', 'module_staff_desc', 'Staff', 'Staff', 'Acadah Inc', '1.0', 3, 'fa-users', 'staff', '', 'active', 'core', ''),
('module_statistics', 'module_statistics_desc', 'Statistics', 'Statistics', 'Acadah Inc', '1.0', 80, 'icon-bar-chart', 'statistics', '', 'active', 'addon', ''),
('module_students', 'module_students_desc', 'Students', 'Students', 'Acadah Inc', '1.0', 4, 'fa-users', 'students', '', 'active', 'core', ''),
('module_users', 'module_users_desc', '', '', 'Acadah Inc', '1.0', 100, 'fa-users', 'user', '', 'inactive', 'core', '');

-- --------------------------------------------------------

--
-- Table structure for table `acadah_app_modules_actions`
--

CREATE TABLE IF NOT EXISTS `acadah_app_modules_actions` (
  `action_id` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `module_id` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `action_name_key` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `icon` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `sort` int(11) NOT NULL,
  `route` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `menu` tinyint(1) NOT NULL,
  `usertype` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `dashboard` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `acadah_app_modules_actions`
--

INSERT INTO `acadah_app_modules_actions` (`action_id`, `module_id`, `action_name_key`, `icon`, `sort`, `route`, `menu`, `usertype`, `dashboard`) VALUES
('account_general_ledger', 'account', 'General Ledger', 'fa-table', 40, 'account/general_ledger', 0, 'admin', 0),
('account_income_and_expenses', 'account', 'Income & Expenses', 'fa-table', 40, 'account/income_and_expenses', 0, 'admin', 0),
('account_view', 'account', 'Account Records', 'icon-graph', 40, 'account', 0, 'admin', 1),
('add_subject', 'core', 'Add Subject', 'fa-plus-square', 140, 'setup#subject', 1, 'admin', 1),
('admision_admin_view', 'admission', 'Admission Admin', 'fa-user', 100, 'admission/admin', 1, 'admin', 1),
('admission_view', 'admission', 'Admission', 'fa-plus-circle', 60, 'admission', 0, 'prospective', 0),
('alumni_view', 'alumni', 'Alumni', 'fa-users', 70, '', 0, 'admin', 0),
('assign_staff_subject', 'core', 'Assign Staff Subjects', 'fa-pied-piper', 151, 'core/subject/staff', 1, 'admin', 0),
('assign_student_subject', 'core', 'Assign Subjects', 'fa-pied-piper', 150, 'core/subject', 1, 'admin', 1),
('attendance_view', 'attendance', 'Attendance', 'fa-check-square-o', 80, '', 0, 'admin', 0),
('backup_view', 'backup', 'Backup', 'fa-cloud-download', 490, '', 0, 'admin', 0),
('calender_view', 'calender', 'Calender', 'fa-calendar', 90, '', 0, 'admin', 0),
('e-exam_view', 'e-exam', 'module_e-exam', 'fa-question-circle', 100, '', 0, 'admin', 0),
('fees_cash_register', 'fees', 'Cash Register', 'fa-table', 63, 'fees/cash_reg', 1, 'admin', 0),
('fees_discount', 'fees', 'Fees Discount', 'fa-table', 61, 'fees/discount', 1, 'admin', 1),
('fees_payments_transaction', 'fees', 'Fees Transactions', 'fa-table', 65, 'fees/payments/transaction', 1, 'admin', 1),
('fees_process_payment', 'fees', 'Process Fees', 'fa-money', 64, 'fees/payments/process', 0, 'admin', 1),
('fees_settings', 'fees', 'Fees Settings', 'fa-gear', 62, 'fees/settings', 1, 'admin', 1),
('fees_view', 'fees', 'Fees Records', 'fa-money', 60, 'fees', 1, 'admin', 1),
('message_view', 'message', 'module_message', 'fa-envelope-o', 110, '', 0, 'admin', 0),
('modules_view', 'core', 'Manage Modules', 'fa-cubes', 400, 'modules/modules_manager', 1, 'admin', 1),
('notepad_view', 'notepad', 'module_notepad', 'fa-pencil', 50, '', 0, 'admin', 0),
('permissions_manage', 'core', 'Manage Permissions', 'fa-gear', 150, 'core/permissions_manage', 1, 'admin', 1),
('permissions_settings', 'core', 'Add Permission', 'fa-plus', 152, 'core/permissions/admin', 1, 'admin', 1),
('results_view', 'results', 'Manage Result', 'fa-file-text', 70, 'results', 0, 'admin', 1),
('schools_view', 'schools', 'module_schools', 'fa-plus-square', 500, '', 0, 'admin', 1),
('settings_view', 'settings', 'module_settings', 'fa-gears', 450, '', 0, 'admin', 0),
('setup_edit', 'core', 'Manage Setup', 'fa-cogs', 390, 'setup', 1, 'admin', 1),
('staff_add', 'staff', 'Add Staff', 'fa-plus', 70, 'staff/add', 1, 'admin', 0),
('staff_assigned', 'staff', 'Staff Assigned', 'fa-user', 75, 'staff/staff_assigned', 0, 'staff', 1),
('staff_edit', 'staff', 'Edit Staff', 'fa-pencil', 80, 'staff/edit', 0, 'admin', 0),
('staff_quick_add', 'staff', 'Add Multiple Staff', 'fa-plus', 70, 'staff/quick_reg', 1, 'admin', 0),
('staff_view', 'staff', 'View Staff', 'fa-user', 50, 'staff', 1, 'admin', 1),
('statistics_view', 'statistics', 'module_statistics', 'icon-bar-chart', 120, 'statistics', 0, 'admin', 0),
('student_quick_add', 'students', 'Add Multiple Students', 'fa-plus', 40, 'students/quick_reg', 1, 'admin', 0),
('students_add', 'students', 'Add Student', 'fa-plus', 10, 'students/add', 1, 'admin', 1),
('students_edit', 'students', 'Edit Student', 'fa-pencil', 20, 'students/edit', 0, 'admin', 0),
('students_view', 'students', 'View Students', 'fa-users', 30, 'students', 1, 'admin', 1);

-- --------------------------------------------------------

--
-- Table structure for table `acadah_app_session`
--

CREATE TABLE IF NOT EXISTS `acadah_app_session` (
  `session_id` int(11) NOT NULL,
  `session_name` varchar(20) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `acadah_app_session`
--

INSERT INTO `acadah_app_session` (`session_id`, `session_name`) VALUES
(1, '2014/2015'),
(2, '2010/2011'),
(3, '2015/2016');

-- --------------------------------------------------------

--
-- Table structure for table `acadah_app_states`
--

CREATE TABLE IF NOT EXISTS `acadah_app_states` (
  `id` int(11) NOT NULL,
  `state` varchar(50) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `acadah_app_states`
--

INSERT INTO `acadah_app_states` (`id`, `state`) VALUES
(1, 'Abia'),
(2, 'Adamawa'),
(3, 'Akwa Ibom'),
(4, 'Anambra'),
(5, 'Bauchi'),
(6, 'Bayelsa'),
(7, 'Benue'),
(8, 'Borno'),
(9, 'Cross River'),
(10, 'Delta'),
(11, 'Ebonyi'),
(12, 'Edo'),
(13, 'Ekiti'),
(14, 'Enugu'),
(15, 'FCT-Abuja'),
(16, 'Gombe'),
(17, 'Imo'),
(18, 'Jigawa'),
(19, 'Kaduna'),
(20, 'Kano'),
(21, 'Katsina'),
(22, 'Kebbi'),
(23, 'Kogi'),
(24, 'Kwara'),
(25, 'Lagos'),
(26, 'Nasarawa'),
(27, 'Niger'),
(28, 'Ogun'),
(29, 'Ondo'),
(30, 'Osun'),
(31, 'Oyo'),
(32, 'Plateau'),
(33, 'Rivers'),
(34, 'Sokoto'),
(35, 'Taraba'),
(36, 'Yobe'),
(37, 'Zamfara'),
(38, 'Non-Nigerian');

-- --------------------------------------------------------

--
-- Table structure for table `acadah_app_subject`
--

CREATE TABLE IF NOT EXISTS `acadah_app_subject` (
  `subject_id` int(11) NOT NULL,
  `subject_name` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `subject_full_name` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `acadah_app_subject`
--

INSERT INTO `acadah_app_subject` (`subject_id`, `subject_name`, `subject_full_name`) VALUES
(2, 'ENGLISH', 'ENGLISH LANG'),
(3, 'BIOLOGY', 'BIOLOGY'),
(4, 'INTO.TECH', 'INTRODUCTORY TECHNOLOGY'),
(5, 'COMPUTER', 'COMPUTER STUDIES'),
(6, 'H.ECONS', 'HOME ECONOMICS'),
(12, 'CHEMISTRY', 'CHEMISTRY'),
(14, 'ACCOUNT', 'FINANCIAL ACCOUNT'),
(15, 'IRS', 'ISLAMIC RELIGIOUS ST'),
(16, 'CRS', 'CHRISTIAN RELIGIOUS '),
(18, 'COMMERCE', 'COMMERCE'),
(19, 'YORUBA', 'YORUBA LANGUAGE'),
(20, 'MATHS', 'MATHEMATICS'),
(21, 'CCA', 'CULTURE AND CREATIVE'),
(22, 'MUSIC', 'MUSIC'),
(23, 'FRENCH', 'FRENCH'),
(26, 'ARABIC', 'ARABIC '),
(27, 'B.SCI', 'BASIC SCIENCE'),
(28, 'B.TECH', 'BASIC TECHNOLOGY'),
(29, 'PHE', 'PHYSICAL HEALTH EDUC'),
(30, 'AGRIC', 'AGRICULTURAL SCIENCE'),
(31, 'B.STUDIES', 'BASIC STUDIES'),
(32, 'SOS', 'SOCIAL STUDIES'),
(33, 'LIT.IN.ENG', 'LITERATURE IN ENGLISH'),
(34, 'CIVIC', 'CIVIC EDUCATION'),
(44, 'GOVT', 'GOVERNMENT'),
(45, 'PHYSICS', 'PHYSICS'),
(46, 'GEO', 'GEOGRAPHY'),
(47, 'ECO', 'ECONOMICS'),
(48, 'F.MAT', 'FURTHER MATHS'),
(49, 'TD', 'TECH. DRAWING');

-- --------------------------------------------------------

--
-- Table structure for table `acadah_app_subject_dept`
--

CREATE TABLE IF NOT EXISTS `acadah_app_subject_dept` (
  `dept_id` int(1) NOT NULL,
  `dept_name` varchar(30) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `status` enum('active','inactive') COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `acadah_app_subject_dept`
--

INSERT INTO `acadah_app_subject_dept` (`dept_id`, `dept_name`, `status`) VALUES
(1, 'SCIENCE', 'active'),
(2, 'LANGUAGES', 'active'),
(3, 'ART', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `acadah_app_term`
--

CREATE TABLE IF NOT EXISTS `acadah_app_term` (
  `term_id` int(1) NOT NULL,
  `term_name` varchar(20) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `acadah_app_term`
--

INSERT INTO `acadah_app_term` (`term_id`, `term_name`) VALUES
(1, '1st Term'),
(2, '2nd Term'),
(3, '3rd Term');

-- --------------------------------------------------------

--
-- Table structure for table `acadah_app_term_session`
--

CREATE TABLE IF NOT EXISTS `acadah_app_term_session` (
  `ts_id` int(11) NOT NULL,
  `term_id` int(11) NOT NULL,
  `session_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `acadah_app_term_session`
--

INSERT INTO `acadah_app_term_session` (`ts_id`, `term_id`, `session_id`) VALUES
(1, 1, 1),
(5, 1, 3),
(2, 2, 1),
(3, 3, 1),
(4, 3, 2);

-- --------------------------------------------------------

--
-- Table structure for table `acadah_class_desc`
--

CREATE TABLE IF NOT EXISTS `acadah_class_desc` (
  `id` int(11) NOT NULL,
  `class_desc_name` varchar(30) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `sch_div_id` int(11) NOT NULL,
  `status` enum('active','inactive') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'active',
  `sch_id` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `acadah_class_desc`
--

INSERT INTO `acadah_class_desc` (`id`, `class_desc_name`, `sch_div_id`, `status`, `sch_id`) VALUES
(1, 'BLUE', 5, 'active', 'cpa'),
(6, 'Commercial', 6, 'active', 'jsot'),
(7, 'Science', 6, 'active', 'jsot'),
(8, 'Art', 6, 'active', 'jsot'),
(9, 'Blue', 5, 'active', 'jsot'),
(10, 'Green', 5, 'active', 'jsot'),
(11, 'Yellow', 5, 'active', 'jsot'),
(12, 'Red', 5, 'active', 'jsot');

-- --------------------------------------------------------

--
-- Table structure for table `acadah_class_details`
--

CREATE TABLE IF NOT EXISTS `acadah_class_details` (
  `id` int(3) NOT NULL,
  `class_details` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `desc_id` int(20) NOT NULL,
  `uint_id` int(11) NOT NULL,
  `class_teacher_id` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `class_rep_id` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'class captain',
  `status` enum('active','inactive') COLLATE utf8_unicode_ci NOT NULL,
  `level_id` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `sch_id` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `acadah_class_details`
--

INSERT INTO `acadah_class_details` (`id`, `class_details`, `desc_id`, `uint_id`, `class_teacher_id`, `class_rep_id`, `status`, `level_id`, `sch_id`) VALUES
(2, 'SS1 Commercial', 6, 0, 'jsot5', NULL, 'active', 'sss1', 'jsot'),
(3, 'SS2 Commercial', 6, 0, NULL, NULL, 'active', 'sss2', 'jsot'),
(4, 'SS3 Commercial', 6, 0, NULL, NULL, 'active', 'sss3', 'jsot'),
(5, 'SS1 Science', 7, 0, NULL, NULL, 'active', 'sss1', 'jsot'),
(6, 'SS2 Science', 7, 0, NULL, NULL, 'active', 'sss2', 'jsot'),
(7, 'SS3 Science', 7, 0, NULL, NULL, 'active', 'sss3', 'jsot'),
(8, 'SS1 Art', 8, 0, NULL, NULL, 'active', 'sss1', 'jsot'),
(9, 'SS2 Art', 8, 0, NULL, NULL, 'active', 'sss2', 'jsot'),
(10, 'SS3 Art', 8, 0, NULL, NULL, 'active', 'sss3', 'jsot');

-- --------------------------------------------------------

--
-- Table structure for table `acadah_class_level`
--

CREATE TABLE IF NOT EXISTS `acadah_class_level` (
  `id` int(11) NOT NULL,
  `class_name` varchar(20) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `class_cord_id` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `school_div_id` int(2) NOT NULL,
  `sch_id` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `level_id` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `status` enum('active','inactive') COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `acadah_class_level`
--

INSERT INTO `acadah_class_level` (`id`, `class_name`, `class_cord_id`, `school_div_id`, `sch_id`, `level_id`, `status`) VALUES
(1, 'NUR ONE', '', 3, 'cpa', 'nur1', 'active'),
(2, 'NUR TWO', '', 3, 'cpa', 'nur2', 'active'),
(7, 'NUR THREE', '', 3, 'cpa', 'nur3', 'active'),
(8, 'PRY ONE', '', 4, 'cpa', 'pry1', 'active'),
(10, 'PRY TWO', '', 4, 'cpa', 'pry2', 'active'),
(11, 'PRY THREE', '', 4, 'cpa', 'pry3', 'active'),
(14, 'JSS1', '', 5, 'jsot', 'jss1', 'active'),
(15, 'JSS2', '', 5, 'jsot', 'jss2', 'active'),
(16, 'JSS3', '', 5, 'jsot', 'jss3', 'active'),
(17, 'SS1', '', 6, 'jsot', 'sss1', 'active'),
(18, 'SS2', '', 6, 'jsot', 'sss2', 'active'),
(19, 'SS3', '', 6, 'jsot', 'sss3', 'active'),
(20, 'ALL LEVELS', '', 7, 'jsot', 'all', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `acadah_class_unit`
--

CREATE TABLE IF NOT EXISTS `acadah_class_unit` (
  `id` int(11) NOT NULL,
  `unit_name` varchar(50) CHARACTER SET latin1 NOT NULL,
  `staff_id` varchar(50) CHARACTER SET latin1 NOT NULL,
  `sch_id` varchar(50) CHARACTER SET latin1 NOT NULL,
  `status` enum('active','inactive') COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `acadah_fees`
--

CREATE TABLE IF NOT EXISTS `acadah_fees` (
  `fees_id` int(11) NOT NULL,
  `fees_name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `fees_shortname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `type` enum('compulsory','optional','generic') COLLATE utf8_unicode_ci NOT NULL,
  `active` enum('yes','no') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'yes',
  `sch_id` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=223 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `acadah_fees`
--

INSERT INTO `acadah_fees` (`fees_id`, `fees_name`, `fees_shortname`, `type`, `active`, `sch_id`) VALUES
(1, 'Previous Balance', 'Previous Balance', 'generic', 'no', 'acadah'),
(2, 'Main Bill', 'MAIN BILL', 'generic', 'no', 'acadah'),
(3, 'Tuition', 'TUITION', 'optional', 'yes', 'jsot'),
(4, 'Year Book', 'YB', 'compulsory', 'yes', 'jsot'),
(5, 'Stationery', 'STAT', 'compulsory', 'yes', 'jsot'),
(6, 'Text Book', 'TBOOK', 'compulsory', 'yes', 'jsot'),
(7, 'Worksheet', 'WSHEET', 'compulsory', 'yes', 'jsot'),
(8, 'Special Event', 'S.EVENT', 'compulsory', 'yes', 'jsot'),
(9, 'Maintenance', 'MAINT', 'compulsory', 'yes', 'jsot'),
(10, 'Development', 'DEV', 'compulsory', 'yes', 'jsot'),
(11, 'Lesson', 'LESSON', 'optional', 'yes', 'jsot'),
(12, 'Lunch', 'LUNCH', 'optional', 'yes', 'jsot'),
(13, 'Drink', 'DRINK', 'optional', 'yes', 'jsot'),
(14, 'After Sch Serv.', 'ASS', 'optional', 'no', 'jsot'),
(15, 'CDC', 'CDC', 'optional', 'yes', 'jsot'),
(16, 'Music', 'MUSIC', 'optional', 'yes', 'jsot'),
(17, 'Swimming', 'Swim', 'optional', 'yes', 'jsot'),
(18, 'Taekwondo', 'Taekw', 'optional', 'yes', 'jsot'),
(19, 'P.E', 'P.E', 'optional', 'yes', 'jsot'),
(20, 'ICT', 'ICT', 'optional', 'yes', 'jsot'),
(21, 'Transport 2Way A', 'T2wayA', 'optional', 'yes', 'jsot'),
(22, 'Transport 2Way B', 'T2wayB', 'optional', 'no', 'jsot'),
(23, 'Transport 1Way A', 'T1wayA', 'optional', 'no', 'jsot'),
(24, 'Transport 1Way B', 'T1wayB', 'optional', 'no', 'jsot'),
(25, 'Uniform', 'Uniform', 'optional', 'yes', 'jsot'),
(26, 'Ballet', 'BALLET', 'optional', 'yes', 'jsot'),
(27, 'Sweater', 'SWEATER', 'optional', 'yes', 'jsot'),
(28, 'KKB', 'KKB', 'optional', 'yes', 'jsot'),
(29, 'Helen doron', 'HELEN', 'optional', 'yes', 'jsot'),
(35, 'Reg Fee*', 'REG*', 'compulsory', 'yes', 'jsot'),
(37, 'Discount', 'DISCOUNT', 'optional', 'yes', 'jsot'),
(38, 'P.T.A Fee', 'P.T.A ', 'optional', 'yes', 'jsot'),
(45, 'Cardigan', 'CARDIGAN', 'compulsory', 'yes', 'jsot'),
(53, 'Ceremonial dress', 'C.Dress', 'compulsory', 'yes', 'jsot'),
(55, 'Scout', 'Scout', 'optional', 'yes', 'jsot'),
(56, 'Beading & Crotcheting Club', 'B&C Club', 'optional', 'yes', 'jsot'),
(57, 'Apitech Club', 'Apitech', 'optional', 'yes', 'jsot'),
(58, 'Common entrance lesson', 'Common entrance', 'optional', 'yes', 'jsot'),
(222, 'Etiquette', 'ETIQ', 'compulsory', 'yes', 'jsot');

-- --------------------------------------------------------

--
-- Table structure for table `acadah_fees_cat`
--

CREATE TABLE IF NOT EXISTS `acadah_fees_cat` (
  `fees_cat_id` int(11) NOT NULL,
  `fees_cat` varchar(100) CHARACTER SET latin1 NOT NULL,
  `active` enum('yes','no') COLLATE utf8_unicode_ci NOT NULL,
  `sch_id` varchar(50) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `acadah_fees_cat`
--

INSERT INTO `acadah_fees_cat` (`fees_cat_id`, `fees_cat`, `active`, `sch_id`) VALUES
(0, 'General ', 'yes', 'acadah'),
(1, 'New ', 'yes', 'jsot'),
(2, 'Returning 1', 'yes', 'jsot'),
(3, 'Returning 2', 'yes', 'jsot');

-- --------------------------------------------------------

--
-- Table structure for table `acadah_fees_credit`
--

CREATE TABLE IF NOT EXISTS `acadah_fees_credit` (
  `id` int(11) NOT NULL,
  `user_id` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `balance` int(11) NOT NULL,
  `credit_limit` int(11) NOT NULL,
  `datetime` datetime NOT NULL,
  `ts_id` int(11) NOT NULL,
  `deleted` int(11) NOT NULL,
  `sch_id` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `acadah_fees_credit`
--

INSERT INTO `acadah_fees_credit` (`id`, `user_id`, `balance`, `credit_limit`, `datetime`, `ts_id`, `deleted`, `sch_id`) VALUES
(1, 'jsot3', 37800, 0, '0000-00-00 00:00:00', 5, 0, 'jsot'),
(2, 'jsot2', 35550, 0, '0000-00-00 00:00:00', 5, 0, 'jsot');

-- --------------------------------------------------------

--
-- Table structure for table `acadah_fees_settings`
--

CREATE TABLE IF NOT EXISTS `acadah_fees_settings` (
  `id` int(11) NOT NULL,
  `fees_id` int(11) NOT NULL,
  `fee` varchar(30) CHARACTER SET latin1 NOT NULL,
  `amount` int(11) NOT NULL,
  `level_id` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `stu_cat` int(11) NOT NULL,
  `ts_id` int(11) NOT NULL,
  `type` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `active` enum('yes','no') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'yes',
  `sch_id` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=165 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `acadah_fees_settings`
--

INSERT INTO `acadah_fees_settings` (`id`, `fees_id`, `fee`, `amount`, `level_id`, `stu_cat`, `ts_id`, `type`, `active`, `sch_id`) VALUES
(1, 1, '', 0, '0', 0, 0, 'generic', 'no', 'cpa'),
(2, 1, '', 0, '0', 2, 1, 'generic', 'no', 'cpa'),
(3, 1, '', 2000, 'nur3', 2, 1, 'main', 'yes', 'cpa'),
(4, 1, '', 2000, 'pry1', 2, 1, 'main', 'yes', 'cpa'),
(5, 1, '', 2000, 'pry2', 2, 1, 'main', 'yes', 'cpa'),
(6, 1, '', 2000, 'pry3', 2, 1, 'main', 'yes', 'cpa'),
(7, 1, '', 3000, 'jss1', 2, 1, 'main', 'yes', 'cpa'),
(8, 1, '', 2000, 'jss2', 2, 1, 'main', 'yes', 'cpa'),
(10, 3, '', 12000, 'nur1', 2, 1, 'main', 'yes', 'cpa'),
(11, 3, '', 12000, 'nur2', 2, 1, 'main', 'yes', 'cpa'),
(12, 3, '', 12000, 'nur3', 2, 1, 'main', 'yes', 'cpa'),
(13, 3, '', 12000, 'pry1', 2, 1, 'main', 'yes', 'cpa'),
(14, 3, '', 12000, 'pry2', 2, 1, 'main', 'yes', 'cpa'),
(15, 3, '', 12000, 'pry3', 2, 1, 'main', 'yes', 'cpa'),
(16, 3, '', 12000, 'jss1', 2, 1, 'main', 'yes', 'cpa'),
(17, 3, '', 12000, 'jss2', 2, 1, 'main', 'yes', 'cpa'),
(18, 3, '', 2000, 'jss3', 2, 1, 'main', 'yes', 'cpa'),
(51, 17, '', 2000, 'nur1', 0, 1, 'optional', 'yes', 'cpa'),
(52, 17, '', 2000, 'nur2', 0, 1, 'optional', 'yes', 'cpa'),
(53, 17, '', 2000, 'nur3', 0, 1, 'optional', 'yes', 'cpa'),
(54, 17, '', 2000, 'pry1', 0, 1, 'optional', 'yes', 'cpa'),
(55, 17, '', 2000, 'pry2', 0, 1, 'optional', 'yes', 'cpa'),
(56, 17, '', 2000, 'pry3', 0, 1, 'optional', 'yes', 'cpa'),
(57, 17, '', 2000, 'jss1', 0, 1, 'optional', 'yes', 'cpa'),
(58, 17, '', 2000, 'jss2', 0, 1, 'optional', 'yes', 'cpa'),
(59, 17, '', 2000, 'jss3', 0, 1, 'optional', 'yes', 'cpa'),
(60, 26, '', 2000, 'nur1', 2, 1, 'optional', 'yes', 'cpa'),
(61, 26, '', 2000, 'nur2', 2, 1, 'optional', 'yes', 'cpa'),
(62, 26, '', 2000, 'nur3', 2, 1, 'optional', 'yes', 'cpa'),
(63, 26, '', 2000, 'pry1', 2, 1, 'optional', 'yes', 'cpa'),
(64, 26, '', 2000, 'pry2', 2, 1, 'optional', 'yes', 'cpa'),
(65, 26, '', 2000, 'pry3', 2, 1, 'optional', 'yes', 'cpa'),
(66, 26, '', 2000, 'jss1', 2, 1, 'optional', 'yes', 'cpa'),
(67, 26, '', 2000, 'jss2', 2, 1, 'optional', 'yes', 'cpa'),
(68, 26, '', 2000, 'jss3', 2, 1, 'optional', 'yes', 'cpa'),
(69, 57, '', 2000, 'nur1', 0, 1, 'optional', 'yes', 'cpa'),
(70, 57, '', 2000, 'nur2', 0, 1, 'optional', 'yes', 'cpa'),
(71, 57, '', 2000, 'nur3', 0, 1, 'optional', 'yes', 'cpa'),
(72, 57, '', 2000, 'pry1', 0, 1, 'optional', 'yes', 'cpa'),
(73, 57, '', 2000, 'pry2', 0, 1, 'optional', 'yes', 'cpa'),
(74, 57, '', 2000, 'pry3', 0, 1, 'optional', 'yes', 'cpa'),
(75, 57, '', 2000, 'jss1', 0, 1, 'optional', 'yes', 'cpa'),
(76, 57, '', 2000, 'jss2', 0, 1, 'optional', 'yes', 'cpa'),
(77, 57, '', 2000, 'jss3', 0, 1, 'optional', 'yes', 'cpa'),
(78, 15, '', 4000, 'all', 0, 1, 'optional', 'yes', 'cpa'),
(79, 25, '', 5000, 'all', 0, 1, 'optional', 'yes', 'cpa'),
(80, 7, '', 6000, 'all', 0, 1, 'optional', 'yes', 'cpa'),
(82, 56, '', 2000, 'nur1', 0, 1, 'optional', 'yes', 'cpa'),
(83, 56, '', 2000, 'nur2', 0, 1, 'optional', 'yes', 'cpa'),
(84, 56, '', 2000, 'nur3', 0, 1, 'optional', 'yes', 'cpa'),
(85, 56, '', 2000, 'pry1', 0, 1, 'optional', 'yes', 'cpa'),
(86, 56, '', 2000, 'pry2', 0, 1, 'optional', 'yes', 'cpa'),
(87, 56, '', 2000, 'pry3', 0, 1, 'optional', 'yes', 'cpa'),
(88, 56, '', 2000, 'jss1', 0, 1, 'optional', 'yes', 'cpa'),
(89, 56, '', 2000, 'jss2', 0, 1, 'optional', 'yes', 'cpa'),
(90, 56, '', 2000, 'jss3', 0, 1, 'optional', 'yes', 'cpa'),
(91, 56, '', 4000, 'all', 0, 1, 'optional', 'yes', 'cpa'),
(101, 5, '', 2000, 'nur1', 2, 1, 'main', 'yes', 'cpa'),
(102, 5, '', 2000, 'nur2', 2, 1, 'main', 'yes', 'cpa'),
(103, 5, '', 2000, 'nur3', 2, 1, 'main', 'yes', 'cpa'),
(104, 5, '', 2000, 'pry1', 2, 1, 'main', 'yes', 'cpa'),
(105, 5, '', 2000, 'pry2', 2, 1, 'main', 'yes', 'cpa'),
(106, 5, '', 2000, 'pry3', 2, 1, 'main', 'yes', 'cpa'),
(107, 5, '', 0, 'jss1', 2, 1, 'main', 'yes', 'cpa'),
(108, 5, '', 0, 'jss2', 2, 1, 'main', 'yes', 'cpa'),
(109, 5, '', 1500, 'jss3', 2, 1, 'main', 'yes', 'cpa'),
(110, 4, '', 2000, 'nur1', 2, 1, 'main', 'yes', 'cpa'),
(111, 4, '', 2000, 'nur2', 2, 1, 'main', 'yes', 'cpa'),
(112, 4, '', 2000, 'nur3', 2, 1, 'main', 'yes', 'cpa'),
(113, 4, '', 2000, 'pry1', 2, 1, 'main', 'yes', 'cpa'),
(114, 4, '', 2000, 'pry2', 2, 1, 'main', 'yes', 'cpa'),
(115, 4, '', 2000, 'pry3', 2, 1, 'main', 'yes', 'cpa'),
(116, 4, '', 2000, 'jss1', 2, 1, 'main', 'yes', 'cpa'),
(117, 4, '', 2000, 'jss2', 2, 1, 'main', 'yes', 'cpa'),
(118, 4, '', 2000, 'jss3', 2, 1, 'main', 'yes', 'cpa'),
(119, 10, '', 2000, 'jss1', 2, 1, 'main', 'yes', 'jsot'),
(120, 10, '', 2000, 'jss2', 2, 1, 'main', 'yes', 'jsot'),
(121, 10, '', 2000, 'jss3', 2, 1, 'main', 'yes', 'jsot'),
(122, 10, '', 2000, 'sss1', 2, 1, 'main', 'yes', 'jsot'),
(123, 10, '', 2000, 'sss2', 2, 1, 'main', 'yes', 'jsot'),
(124, 10, '', 2000, 'sss3', 2, 1, 'main', 'yes', 'jsot'),
(125, 4, '', 2000, 'jss1', 2, 1, 'main', 'yes', 'jsot'),
(126, 4, '', 2000, 'jss2', 2, 1, 'main', 'yes', 'jsot'),
(127, 4, '', 2000, 'jss3', 2, 1, 'main', 'yes', 'jsot'),
(128, 4, '', 2000, 'sss1', 2, 1, 'main', 'yes', 'jsot'),
(129, 4, '', 2000, 'sss2', 2, 1, 'main', 'yes', 'jsot'),
(130, 4, '', 2000, 'sss3', 2, 1, 'main', 'yes', 'jsot'),
(131, 222, '', 2000, 'jss1', 2, 1, 'main', 'yes', 'jsot'),
(132, 222, '', 2000, 'jss2', 2, 1, 'main', 'yes', 'jsot'),
(133, 222, '', 2000, 'jss3', 2, 1, 'main', 'yes', 'jsot'),
(134, 222, '', 2000, 'sss1', 2, 1, 'main', 'yes', 'jsot'),
(135, 222, '', 2000, 'sss2', 2, 1, 'main', 'yes', 'jsot'),
(136, 222, '', 2000, 'sss3', 2, 1, 'main', 'yes', 'jsot'),
(137, 5, '', 2000, 'jss1', 2, 1, 'main', 'yes', 'jsot'),
(138, 5, '', 2000, 'jss2', 2, 1, 'main', 'yes', 'jsot'),
(139, 5, '', 2000, 'jss3', 2, 1, 'main', 'yes', 'jsot'),
(140, 5, '', 2000, 'sss1', 2, 1, 'main', 'yes', 'jsot'),
(141, 5, '', 2000, 'sss2', 2, 1, 'main', 'yes', 'jsot'),
(142, 5, '', 2000, 'sss3', 2, 1, 'main', 'yes', 'jsot'),
(143, 10, '', 2000, 'jss1', 2, 5, 'main', 'yes', 'jsot'),
(144, 10, '', 2000, 'jss2', 2, 5, 'main', 'yes', 'jsot'),
(145, 10, '', 2000, 'jss3', 2, 5, 'main', 'yes', 'jsot'),
(146, 10, '', 2000, 'sss1', 2, 5, 'main', 'yes', 'jsot'),
(147, 10, '', 2000, 'sss2', 2, 5, 'main', 'yes', 'jsot'),
(148, 10, '', 2000, 'sss3', 2, 5, 'main', 'yes', 'jsot'),
(149, 222, '', 2000, 'jss1', 2, 5, 'main', 'yes', 'jsot'),
(150, 222, '', 2000, 'jss2', 2, 5, 'main', 'yes', 'jsot'),
(151, 222, '', 2000, 'jss3', 2, 5, 'main', 'yes', 'jsot'),
(152, 222, '', 2000, 'sss1', 2, 5, 'main', 'yes', 'jsot'),
(153, 222, '', 2000, 'sss2', 2, 5, 'main', 'yes', 'jsot'),
(154, 222, '', 2000, 'sss3', 2, 5, 'main', 'yes', 'jsot'),
(155, 45, '', 4500, 'all', 0, 5, 'optional', 'yes', 'jsot'),
(156, 18, '', 4000, 'all', 0, 5, 'optional', 'yes', 'jsot'),
(157, 9, '', 2000, 'jss1', 2, 5, 'main', 'yes', 'jsot'),
(158, 9, '', 2000, 'jss2', 2, 5, 'main', 'yes', 'jsot'),
(159, 9, '', 2000, 'jss3', 2, 5, 'main', 'yes', 'jsot'),
(160, 9, '', 2000, 'sss1', 2, 5, 'main', 'yes', 'jsot'),
(161, 9, '', 4200, 'sss2', 2, 5, 'main', 'yes', 'jsot'),
(162, 9, '', 2000, 'sss3', 2, 5, 'main', 'yes', 'jsot'),
(163, 26, '', 8900, 'all', 0, 5, 'optional', 'yes', 'jsot'),
(164, 13, '', 5000, 'all', 0, 5, 'optional', 'yes', 'jsot');

-- --------------------------------------------------------

--
-- Table structure for table `acadah_message`
--

CREATE TABLE IF NOT EXISTS `acadah_message` (
  `message_id` int(10) NOT NULL,
  `sender_id` int(10) NOT NULL,
  `sender_type` varchar(20) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `msg_title` varchar(30) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `msg_body` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `receiver_id` int(10) NOT NULL,
  `receiver_type` varchar(10) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `read_status` int(2) NOT NULL,
  `reply_id` int(11) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `acadah_modules_actions`
--

CREATE TABLE IF NOT EXISTS `acadah_modules_actions` (
  `action_id` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `module_id` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `action_name_key` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `icon` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `sort` int(11) NOT NULL,
  `route` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `menu` tinyint(1) NOT NULL,
  `sch_id` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `acadah_parent`
--

CREATE TABLE IF NOT EXISTS `acadah_parent` (
  `parent_id` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(200) CHARACTER SET latin1 NOT NULL,
  `occupation` varchar(200) CHARACTER SET latin1 NOT NULL,
  `occupation_address` text CHARACTER SET latin1 NOT NULL,
  `status` int(11) NOT NULL,
  `initial` varchar(200) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `acadah_parent_student`
--

CREATE TABLE IF NOT EXISTS `acadah_parent_student` (
  `parent_id` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `student_id` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `relationship` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `acadah_payment_credit`
--

CREATE TABLE IF NOT EXISTS `acadah_payment_credit` (
  `id` int(11) NOT NULL,
  `user_id` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `balance` int(11) NOT NULL,
  `credit_limit` int(11) NOT NULL,
  `datetime` datetime NOT NULL,
  `ts_id` int(11) NOT NULL,
  `deleted` int(11) NOT NULL,
  `sch_id` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `acadah_payment_types`
--

CREATE TABLE IF NOT EXISTS `acadah_payment_types` (
  `payment_id` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `payment_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `payment_mode` enum('Cash','Check','Bank Deposit','Scratch card','Bank Transfer','POS','epayment') COLLATE utf8_unicode_ci NOT NULL,
  `deleted` int(11) NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `acadah_prospective`
--

CREATE TABLE IF NOT EXISTS `acadah_prospective` (
  `prospective_id` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `weight` int(4) NOT NULL,
  `height` int(4) NOT NULL,
  `disability` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `bloodgroup` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `genotype` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `admission_class` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `admission_class_details_id` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `ts_id` int(11) NOT NULL,
  `sport_house` tinyint(4) NOT NULL,
  `religion` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `admission_date` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `p_fullname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `p_initial` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `p_phone` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `p_email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `p_gender` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `p_full_address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `p_relationship` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `p_occupation` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `p_oc_address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `hostel_status` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `admission_no` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `stu_cat` int(50) NOT NULL DEFAULT '2',
  `admission_status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `session` int(50) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `student_id` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `acadah_prospective`
--

INSERT INTO `acadah_prospective` (`prospective_id`, `weight`, `height`, `disability`, `bloodgroup`, `genotype`, `admission_class`, `admission_class_details_id`, `ts_id`, `sport_house`, `religion`, `admission_date`, `p_fullname`, `p_initial`, `p_phone`, `p_email`, `p_gender`, `p_full_address`, `p_relationship`, `p_occupation`, `p_oc_address`, `hostel_status`, `admission_no`, `stu_cat`, `admission_status`, `session`, `date`, `status`, `student_id`) VALUES
('jsotp51', 60, 60, 'None', 'O+', 'AA', 'sss2', '5', 5, 0, 'Islam', '', 'Dr. & Alhaja Salako', '', '08052125116', '', '', 'Same as above', '', '', '', 'Day', '2015/2016/1', 2, 'admitted', 0, '2016-08-19 22:32:05', 'completed', 'jsot2'),
('jsotp52', 200, 80, 'None', 'O+', 'AA', 'sss2', '3', 5, 0, 'Islam', '', 'Mrs Adeyemi', '', '09098770105', '', '', 'Ademokula', '', '', '', 'Day', '2015/2016/2', 2, 'admitted', 0, '2016-08-19 23:04:34', 'completed', 'jsot3');

-- --------------------------------------------------------

--
-- Table structure for table `acadah_result`
--

CREATE TABLE IF NOT EXISTS `acadah_result` (
  `id` int(11) NOT NULL,
  `class_details_id` int(11) NOT NULL,
  `student_id` varchar(200) NOT NULL,
  `ts_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `score` int(11) NOT NULL,
  `score_type` varchar(200) NOT NULL,
  `status` enum('active','inactive') NOT NULL,
  `sch_id` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `acadah_result`
--

INSERT INTO `acadah_result` (`id`, `class_details_id`, `student_id`, `ts_id`, `subject_id`, `score`, `score_type`, `status`, `sch_id`) VALUES
(1, 3, 'jsot2', 5, 2, 20, 'ca1', 'active', 'jsot'),
(2, 3, 'jsot2', 5, 2, 43, 'exam1', 'active', 'jsot'),
(3, 3, 'jsot2', 5, 5, 28, 'ca1', 'active', 'jsot'),
(4, 3, 'jsot2', 5, 5, 57, 'exam1', 'active', 'jsot'),
(5, 3, 'jsot2', 5, 14, 22, 'ca1', 'active', 'jsot'),
(6, 3, 'jsot2', 5, 14, 37, 'exam1', 'active', 'jsot'),
(7, 3, 'jsot2', 5, 15, 25, 'ca1', 'active', 'jsot'),
(8, 3, 'jsot2', 5, 15, 55, 'exam1', 'active', 'jsot'),
(9, 3, 'jsot2', 5, 18, 29, 'ca1', 'active', 'jsot'),
(10, 3, 'jsot2', 5, 18, 59, 'exam1', 'active', 'jsot'),
(11, 3, 'jsot2', 5, 19, 24, 'ca1', 'active', 'jsot'),
(12, 3, 'jsot2', 5, 19, 49, 'exam1', 'active', 'jsot'),
(13, 3, 'jsot2', 5, 20, 17, 'ca1', 'active', 'jsot'),
(14, 3, 'jsot2', 5, 20, 42, 'exam1', 'active', 'jsot'),
(15, 3, 'jsot2', 5, 34, 26, 'ca1', 'active', 'jsot'),
(16, 3, 'jsot2', 5, 34, 40, 'exam1', 'active', 'jsot'),
(17, 3, 'jsot2', 5, 44, 24, 'ca1', 'active', 'jsot'),
(18, 3, 'jsot2', 5, 44, 53, 'exam1', 'active', 'jsot'),
(19, 3, 'jsot2', 5, 47, 23, 'ca1', 'active', 'jsot'),
(20, 3, 'jsot2', 5, 47, 39, 'exam1', 'active', 'jsot'),
(21, 3, 'jsot2', 5, 48, 21, 'ca1', 'active', 'jsot'),
(22, 3, 'jsot2', 5, 48, 24, 'exam1', 'active', 'jsot'),
(25, 3, 'jsot3', 5, 2, 10, 'ca1', 'active', 'jsot'),
(26, 3, 'jsot3', 5, 2, 45, 'exam1', 'active', 'jsot'),
(29, 3, 'jsot3', 5, 5, 30, 'ca1', 'active', 'jsot'),
(30, 3, 'jsot3', 5, 5, 50, 'exam1', 'active', 'jsot'),
(33, 3, 'jsot3', 5, 14, 30, 'ca1', 'active', 'jsot'),
(34, 3, 'jsot3', 5, 14, 50, 'exam1', 'active', 'jsot'),
(37, 3, 'jsot3', 5, 15, 20, 'ca1', 'active', 'jsot'),
(38, 3, 'jsot3', 5, 15, 68, 'exam1', 'active', 'jsot');

-- --------------------------------------------------------

--
-- Table structure for table `acadah_result_comments`
--

CREATE TABLE IF NOT EXISTS `acadah_result_comments` (
  `id` int(11) NOT NULL,
  `start_value` varchar(200) NOT NULL,
  `end_value` varchar(200) NOT NULL,
  `principal_comment` text NOT NULL,
  `promotion_comment` text NOT NULL,
  `class_teacher_comment` text NOT NULL,
  `hostel_master_comment` text NOT NULL,
  `sch_id` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `acadah_result_comments`
--

INSERT INTO `acadah_result_comments` (`id`, `start_value`, `end_value`, `principal_comment`, `promotion_comment`, `class_teacher_comment`, `hostel_master_comment`, `sch_id`) VALUES
(1, '1.1', '2.0', 'Namu', 'Sorry', 'Ehya', 'No', 'jsot'),
(7, '1.1', '2.0', 'Magic', 'Sorry', 'Ehya', 'No', 'jsot');

-- --------------------------------------------------------

--
-- Table structure for table `acadah_result_processed`
--

CREATE TABLE IF NOT EXISTS `acadah_result_processed` (
  `id` int(10) NOT NULL,
  `class_details_id` tinyint(4) DEFAULT NULL,
  `ts_id` tinyint(4) DEFAULT NULL,
  `subject_id` tinyint(2) NOT NULL,
  `status` enum('pending','approved') COLLATE utf8_unicode_ci DEFAULT NULL,
  `sch_id` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `staff_id` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `updated_staff_id` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `acadah_school`
--

CREATE TABLE IF NOT EXISTS `acadah_school` (
  `id` int(6) NOT NULL,
  `sch_id` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `sch_full_name` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `sch_short_name` varchar(500) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `registration_date` datetime NOT NULL,
  `sch_motto` varchar(200) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `year_est` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `sch_email_add` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `sch_phone1` varchar(20) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `sch_phone2` varchar(20) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `sch_logo` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `sch_web` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `sch_addr` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `result_type` varchar(20) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `result_color` varchar(20) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `principals_signature` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `deleted` tinyint(1) NOT NULL,
  `max_student` int(11) NOT NULL,
  `lga` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `sstate` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `country` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `sch_facilities` text COLLATE utf8_unicode_ci NOT NULL,
  `sch_hostel` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `sch_religion` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `pop_range` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `about_sch` text COLLATE utf8_unicode_ci NOT NULL,
  `gad` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `exam_taken` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `activation_code` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `activated_status` int(10) NOT NULL,
  `setup_status` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `acadah_school`
--

INSERT INTO `acadah_school` (`id`, `sch_id`, `sch_full_name`, `sch_short_name`, `registration_date`, `sch_motto`, `year_est`, `sch_email_add`, `sch_phone1`, `sch_phone2`, `sch_logo`, `sch_web`, `sch_addr`, `result_type`, `result_color`, `principals_signature`, `deleted`, `max_student`, `lga`, `sstate`, `country`, `sch_facilities`, `sch_hostel`, `sch_religion`, `pop_range`, `about_sch`, `gad`, `exam_taken`, `activation_code`, `activated_status`, `setup_status`) VALUES
(15, 'cpa', 'COOLCHI PROGAMMING ACADEMY', 'CPA', '2016-07-17 19:08:09', 'CODE IS POETRY', '07/28/2016', 'coolchi@acadah.com', '0800787888', '', '', 'http://www.jbip.com', 'ooo', '', '', '', 0, 0, 'Hong', 'Adamawa', 'Nigeria', 'SWIMING', 'Day', 'Muslim', '100-500', '', '08/04/2016', 'WAEC, NECO', '23f3d0bc6e63564773b7a81dc2f8cebf', 1, 'Completed'),
(16, 'cpa2', 'COOLCHI PROGAMMING ACADEMY', 'CPA2', '2016-07-19 17:03:00', 'CODE IS POETRY', '07/27/2016', 'coolchi2@acadah.com', '08780770788', '', '', 'http://www.jbip.com', '2121215421', '', '', '', 0, 0, 'Essien Udim', 'Akwa Ibom', 'Nigeria', 'SWIMING', 'Boarding', 'Secular', '100-500', '', '', 'WAEC, NECO', 'ca8b46eeca60c82b43364b6e612b571d', 1, ''),
(18, 'jsot', 'Jonathan School Of Thought Academy', 'JSOT', '2016-08-01 18:32:42', 'The quieter you become the more you are able to learn', '08/17/2016', 'admin@jsot.com', '07059717498', '', '', 'jsot.com', 'JSOT', '', '', '', 0, 0, 'Ijebu Ode', 'Ogun', 'Nigeria', 'Lab', 'Day&Boarding', 'Multi-Faith', '100-500', 'Best School For your Ward', '08/23/2016', 'GCE', 'bdba4dfb2b524fea5db041b3461b6e48', 1, 'Completed');

--
-- Triggers `acadah_school`
--
DELIMITER $$
CREATE TRIGGER `t_registration_date` BEFORE INSERT ON `acadah_school`
 FOR EACH ROW set new.`registration_date` = now()
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `acadah_school_config`
--

CREATE TABLE IF NOT EXISTS `acadah_school_config` (
  `id` int(11) NOT NULL,
  `key` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `value` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `module_id` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `sch_id` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `acadah_school_config`
--

INSERT INTO `acadah_school_config` (`id`, `key`, `value`, `module_id`, `sch_id`) VALUES
(8, 'result_view_status', 'off', 'results', 'jsot'),
(9, 'result_debtors_status', 'on', 'results', 'jsot'),
(10, 'result_format', 'grading', 'results', 'jsot'),
(11, 'result_term_begin', '08/25/2016', 'results', 'jsot'),
(12, 'result_term_end', '08/25/2016', 'results', 'jsot'),
(13, 'result_position_status', 'on', 'results', 'jsot');

-- --------------------------------------------------------

--
-- Table structure for table `acadah_school_div`
--

CREATE TABLE IF NOT EXISTS `acadah_school_div` (
  `id` int(11) NOT NULL,
  `school_div_name` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `sch_id` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `status` enum('active','inactive') COLLATE utf8_unicode_ci NOT NULL,
  `school_div_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `acadah_school_div`
--

INSERT INTO `acadah_school_div` (`id`, `school_div_name`, `sch_id`, `status`, `school_div_id`) VALUES
(1, 'JSS', 'cpa', 'active', 5),
(2, 'KG', 'cpa', 'active', 2),
(3, 'NUR', 'cpa', 'active', 3),
(4, 'PRY', 'cpa', 'active', 4),
(5, 'Junior Secondary School', 'jsot', 'active', 5),
(6, 'Senior Secondary School', 'jsot', 'active', 6),
(7, 'ALL DIVS', 'jsot', 'active', 7);

-- --------------------------------------------------------

--
-- Table structure for table `acadah_school_div_subject`
--

CREATE TABLE IF NOT EXISTS `acadah_school_div_subject` (
  `id` int(11) NOT NULL,
  `sch_div_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `acadah_school_modules`
--

CREATE TABLE IF NOT EXISTS `acadah_school_modules` (
  `id` int(11) NOT NULL,
  `module_id` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `date_installed` datetime NOT NULL,
  `date_upgraded` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `sch_id` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `status` enum('active','inactive') COLLATE utf8_unicode_ci NOT NULL,
  `version` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `settings_status` enum('completed','pending') COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `acadah_school_modules`
--

INSERT INTO `acadah_school_modules` (`id`, `module_id`, `date_installed`, `date_upgraded`, `sch_id`, `status`, `version`, `settings_status`) VALUES
(1, 'core', '2016-07-17 19:16:23', '0000-00-00 00:00:00', 'cpa', 'active', '1.0', 'completed'),
(2, 'staff', '2016-07-17 19:16:24', '0000-00-00 00:00:00', 'cpa', 'active', '1.0', 'completed'),
(3, 'students', '2016-07-17 19:16:24', '0000-00-00 00:00:00', 'cpa', 'active', '1.0', 'completed'),
(4, 'admission', '2016-07-17 19:17:45', '2016-07-17 18:18:44', 'cpa', 'active', '1.1', 'completed'),
(8, 'account', '2016-07-17 19:19:16', '0000-00-00 00:00:00', 'cpa', 'active', '1.0', 'pending'),
(9, 'fees', '2016-07-17 19:19:59', '2016-07-28 02:25:48', 'cpa', 'active', '1.0.1', 'completed'),
(10, 'statistics', '2016-07-19 18:52:31', '0000-00-00 00:00:00', 'cpa', 'active', '1.0', 'completed'),
(12, 'core', '2016-08-01 18:44:26', '0000-00-00 00:00:00', 'jsot', 'active', '1.0', 'completed'),
(13, 'staff', '2016-08-01 18:44:27', '0000-00-00 00:00:00', 'jsot', 'active', '1.0', 'completed'),
(14, 'students', '2016-08-01 18:44:27', '0000-00-00 00:00:00', 'jsot', 'active', '1.0', 'completed'),
(18, 'admission', '2016-08-01 18:44:50', '2016-08-01 17:58:16', 'jsot', 'active', '1.1', 'completed'),
(19, 'fees', '2016-08-01 18:44:59', '0000-00-00 00:00:00', 'jsot', 'active', '1.0.1', 'completed'),
(20, 'results', '2016-08-02 12:25:44', '2016-08-11 00:33:31', 'jsot', 'active', '1.0', 'completed'),
(27, 'account', '2016-08-28 20:49:42', '2016-08-29 14:13:15', 'jsot', 'inactive', '1.0', 'pending'),
(29, 'statistics', '2016-08-28 20:49:48', '2016-08-28 19:50:17', 'jsot', 'inactive', '1.0', 'completed');

--
-- Triggers `acadah_school_modules`
--
DELIMITER $$
CREATE TRIGGER `t_date_installed` BEFORE INSERT ON `acadah_school_modules`
 FOR EACH ROW set new.`date_installed` = now()
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `acadah_school_modules_actions`
--

CREATE TABLE IF NOT EXISTS `acadah_school_modules_actions` (
  `id` int(11) NOT NULL,
  `action_id` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `sch_id` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `status` enum('active','inactive') COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=146 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `acadah_school_modules_actions`
--

INSERT INTO `acadah_school_modules_actions` (`id`, `action_id`, `sch_id`, `status`) VALUES
(1, 'add_subject', 'cpa', 'active'),
(2, 'assign_staff_subject', 'cpa', 'active'),
(3, 'assign_student_subject', 'cpa', 'active'),
(4, 'modules_view', 'cpa', 'active'),
(5, 'permissions_manage', 'cpa', 'active'),
(6, 'permissions_settings', 'cpa', 'active'),
(7, 'setup_edit', 'cpa', 'active'),
(8, 'staff_add', 'cpa', 'active'),
(9, 'staff_assigned', 'cpa', 'active'),
(10, 'staff_edit', 'cpa', 'active'),
(11, 'staff_quick_add', 'cpa', 'active'),
(12, 'staff_view', 'cpa', 'active'),
(13, 'student_quick_add', 'cpa', 'active'),
(14, 'students_add', 'cpa', 'active'),
(15, 'students_edit', 'cpa', 'active'),
(16, 'students_view', 'cpa', 'active'),
(17, 'admision_admin_view', 'cpa', 'active'),
(18, 'admission_view', 'cpa', 'active'),
(25, 'account_general_ledger', 'cpa', 'active'),
(26, 'account_income_and_expenses', 'cpa', 'active'),
(27, 'account_view', 'cpa', 'active'),
(28, 'fees_cash_register', 'cpa', 'active'),
(29, 'fees_discount', 'cpa', 'active'),
(30, 'fees_payments_transaction', 'cpa', 'active'),
(31, 'fees_process_payment', 'cpa', 'active'),
(32, 'fees_view', 'cpa', 'active'),
(33, 'statistics_view', 'cpa', 'active'),
(38, 'fees_settings', 'cpa', 'active'),
(40, 'add_subject', 'jsot', 'active'),
(41, 'assign_staff_subject', 'jsot', 'active'),
(42, 'assign_student_subject', 'jsot', 'active'),
(43, 'modules_view', 'jsot', 'active'),
(44, 'permissions_manage', 'jsot', 'active'),
(45, 'permissions_settings', 'jsot', 'active'),
(46, 'setup_edit', 'jsot', 'active'),
(47, 'staff_add', 'jsot', 'active'),
(48, 'staff_assigned', 'jsot', 'active'),
(49, 'staff_edit', 'jsot', 'active'),
(50, 'staff_quick_add', 'jsot', 'active'),
(51, 'staff_view', 'jsot', 'active'),
(52, 'student_quick_add', 'jsot', 'active'),
(53, 'students_add', 'jsot', 'active'),
(54, 'students_edit', 'jsot', 'active'),
(55, 'students_view', 'jsot', 'active'),
(72, 'admision_admin_view', 'jsot', 'active'),
(73, 'admission_view', 'jsot', 'active'),
(74, 'fees_cash_register', 'jsot', 'active'),
(75, 'fees_discount', 'jsot', 'active'),
(76, 'fees_payments_transaction', 'jsot', 'active'),
(77, 'fees_process_payment', 'jsot', 'active'),
(78, 'fees_settings', 'jsot', 'active'),
(79, 'fees_view', 'jsot', 'active'),
(80, 'results_view', 'jsot', 'active'),
(113, 'account_general_ledger', 'jsot', 'inactive'),
(114, 'account_income_and_expenses', 'jsot', 'inactive'),
(115, 'account_view', 'jsot', 'inactive'),
(119, 'statistics_view', 'jsot', 'inactive');

-- --------------------------------------------------------

--
-- Table structure for table `acadah_school_roles`
--

CREATE TABLE IF NOT EXISTS `acadah_school_roles` (
  `id` int(11) NOT NULL,
  `role_name` varchar(200) NOT NULL,
  `sch_id` varchar(200) NOT NULL,
  `status` enum('active','inactive') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `acadah_school_scores`
--

CREATE TABLE IF NOT EXISTS `acadah_school_scores` (
  `id` int(11) NOT NULL,
  `score_max` int(11) NOT NULL,
  `score_pass` int(11) NOT NULL,
  `score_type` varchar(200) NOT NULL,
  `sch_id` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `acadah_school_scores`
--

INSERT INTO `acadah_school_scores` (`id`, `score_max`, `score_pass`, `score_type`, `sch_id`) VALUES
(1, 30, 15, 'ca', 'jsot'),
(3, 100, 9, 'total', 'jsot'),
(4, 70, 35, 'exam', 'jsot');

-- --------------------------------------------------------

--
-- Table structure for table `acadah_school_session`
--

CREATE TABLE IF NOT EXISTS `acadah_school_session` (
  `id` int(11) NOT NULL,
  `session_id` int(11) NOT NULL,
  `session_start` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `session_end` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `session_active` enum('active','inactive') COLLATE utf8_unicode_ci NOT NULL,
  `sch_id` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `acadah_school_session`
--

INSERT INTO `acadah_school_session` (`id`, `session_id`, `session_start`, `session_end`, `session_active`, `sch_id`) VALUES
(1, 1, '07/15/2016', '07/08/2016', 'active', 'cpa'),
(2, 1, '08/03/2016', '08/27/2016', 'inactive', 'jsot'),
(3, 3, '07/31/2016', '08/26/2016', 'active', 'jsot');

-- --------------------------------------------------------

--
-- Table structure for table `acadah_school_subject`
--

CREATE TABLE IF NOT EXISTS `acadah_school_subject` (
  `id` int(11) NOT NULL,
  `department_id` int(2) NOT NULL,
  `school_div_id` int(5) NOT NULL,
  `sch_id` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `subject_unit` int(11) NOT NULL,
  `status` enum('active','inactive') COLLATE utf8_unicode_ci NOT NULL,
  `subject_id` int(11) NOT NULL,
  `staff_id` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `acadah_school_subject`
--

INSERT INTO `acadah_school_subject` (`id`, `department_id`, `school_div_id`, `sch_id`, `subject_unit`, `status`, `subject_id`, `staff_id`) VALUES
(1, 2, 5, 'cpa', 2, 'active', 3, ''),
(2, 1, 3, 'jsot', 3, 'active', 2, ''),
(3, 2, 3, 'jsot', 3, 'active', 3, ''),
(4, 2, 6, 'jsot', 3, 'active', 2, ''),
(5, 1, 6, 'jsot', 3, 'active', 3, ''),
(6, 1, 5, 'jsot', 3, 'active', 4, ''),
(7, 1, 6, 'jsot', 3, 'active', 5, ''),
(8, 1, 5, 'jsot', 3, 'active', 6, ''),
(9, 1, 6, 'jsot', 3, 'active', 12, ''),
(10, 3, 6, 'jsot', 3, 'active', 14, ''),
(11, 3, 6, 'jsot', 3, 'active', 15, ''),
(12, 3, 6, 'jsot', 3, 'active', 16, ''),
(13, 3, 6, 'jsot', 3, 'active', 18, ''),
(14, 2, 6, 'jsot', 3, 'active', 19, ''),
(15, 1, 6, 'jsot', 3, 'active', 20, ''),
(16, 3, 6, 'jsot', 3, 'active', 21, ''),
(17, 3, 6, 'jsot', 3, 'active', 22, ''),
(18, 2, 6, 'jsot', 3, 'active', 23, ''),
(19, 1, 5, 'jsot', 3, 'active', 27, ''),
(20, 1, 5, 'jsot', 3, 'active', 29, ''),
(21, 1, 6, 'jsot', 3, 'active', 30, ''),
(22, 3, 5, 'jsot', 3, 'active', 32, ''),
(23, 2, 6, 'jsot', 3, 'active', 33, ''),
(24, 3, 5, 'jsot', 3, 'active', 34, ''),
(25, 3, 6, 'jsot', 3, 'active', 44, ''),
(26, 1, 6, 'jsot', 3, 'active', 45, ''),
(27, 1, 6, 'jsot', 3, 'active', 46, ''),
(28, 1, 6, 'jsot', 3, 'active', 47, ''),
(29, 1, 6, 'jsot', 3, 'active', 48, ''),
(30, 1, 6, 'jsot', 3, 'active', 49, '');

-- --------------------------------------------------------

--
-- Table structure for table `acadah_school_term`
--

CREATE TABLE IF NOT EXISTS `acadah_school_term` (
  `id` int(11) NOT NULL,
  `term_id` int(11) NOT NULL,
  `term_name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `sch_id` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `status` enum('active','inactive') COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `acadah_school_term`
--

INSERT INTO `acadah_school_term` (`id`, `term_id`, `term_name`, `sch_id`, `status`) VALUES
(1, 1, '1ST TERM', 'cpa', 'active'),
(2, 1, '1st Term', 'jsot', 'active'),
(3, 2, '2nd Term', 'jsot', 'active'),
(4, 3, '3rd Term', 'jsot', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `acadah_school_term_session`
--

CREATE TABLE IF NOT EXISTS `acadah_school_term_session` (
  `id` int(11) NOT NULL,
  `ts_id` int(11) NOT NULL,
  `ts_start` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `ts_end` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `ts_active` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `sch_id` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `acadah_school_term_session`
--

INSERT INTO `acadah_school_term_session` (`id`, `ts_id`, `ts_start`, `ts_end`, `ts_active`, `sch_id`) VALUES
(1, 1, '06/28/2016', '07/05/2016', 'active', 'cpa'),
(2, 1, '08/18/2016', '08/31/2016', 'inactive', 'jsot'),
(3, 2, '08/10/2016', '08/09/2016', 'inactive', 'jsot'),
(4, 5, '08/01/2016', '09/10/2016', 'active', 'jsot');

-- --------------------------------------------------------

--
-- Table structure for table `acadah_sport_house`
--

CREATE TABLE IF NOT EXISTS `acadah_sport_house` (
  `sport_house_id` int(1) NOT NULL,
  `sport_house` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `sport_house_color` varchar(10) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `sport_house_master_id` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sch_id` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `status` enum('active','inactive') COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `acadah_staff`
--

CREATE TABLE IF NOT EXISTS `acadah_staff` (
  `staff_id` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(10) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `surname` varchar(30) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `initial` varchar(4) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `staff_position` varchar(20) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `staff_type` varchar(20) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `staff_function` varchar(20) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL COMMENT 'like(computer teacher, burser, etc)',
  `marital_status` varchar(20) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `course_studied` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `certificate` varchar(30) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `institution` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `qualification` varchar(10) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `religion` varchar(30) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `staff_level` int(2) NOT NULL,
  `height` varchar(4) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `weight` varchar(4) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `bloodgroup` varchar(4) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `genotype` varchar(4) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `disability` varchar(20) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `year_of_employment` year(4) NOT NULL,
  `years_of_exp` varchar(2) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `sport_house` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `file_no` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `acadah_staff`
--

INSERT INTO `acadah_staff` (`staff_id`, `title`, `surname`, `initial`, `staff_position`, `staff_type`, `staff_function`, `marital_status`, `course_studied`, `certificate`, `institution`, `qualification`, `religion`, `staff_level`, `height`, `weight`, `bloodgroup`, `genotype`, `disability`, `year_of_employment`, `years_of_exp`, `sport_house`, `file_no`) VALUES
('jsot335', 'MR.', 'Awonugga', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', 0000, '', '', ''),
('jsot5', 'MRS.', 'Alonge', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', 0000, '', '', ''),
('jsot6', 'MR.', 'Sule', 'A.O', 'Teacher', 'Non-Teaching', 'Admin', 'Single', 'CSC', '', 'TSA', 'Bsc', 'Islam', 3, '40', '90', 'O+', 'AS', 'Nione', 2002, '20', '', '090');

-- --------------------------------------------------------

--
-- Table structure for table `acadah_staff_subjects`
--

CREATE TABLE IF NOT EXISTS `acadah_staff_subjects` (
  `id` int(5) NOT NULL,
  `subject_id` int(3) NOT NULL,
  `class_details_id` int(11) NOT NULL,
  `staff_id` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ts_id` int(11) NOT NULL,
  `sch_id` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `session_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `acadah_student`
--

CREATE TABLE IF NOT EXISTS `acadah_student` (
  `student_id` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `weight` int(4) NOT NULL,
  `height` int(4) NOT NULL,
  `disability` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `bloodgroup` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `genotype` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `admission_class` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `admission_class_details_id` int(11) DEFAULT NULL,
  `ts_id` int(11) NOT NULL,
  `parent_id` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `sport_house` tinyint(4) NOT NULL,
  `religion` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `admission_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `hostel_status` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `admission_no` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `stu_cat` int(50) NOT NULL DEFAULT '2'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `acadah_student`
--

INSERT INTO `acadah_student` (`student_id`, `weight`, `height`, `disability`, `bloodgroup`, `genotype`, `admission_class`, `admission_class_details_id`, `ts_id`, `parent_id`, `sport_house`, `religion`, `admission_date`, `hostel_status`, `admission_no`, `stu_cat`) VALUES
('jsot2', 60, 60, 'None', 'O+', 'AA', 'sss2', 5, 0, '', 0, 'Islam', '2016-08-19 22:37:28', 'Day', '2015/2016/1', 2),
('jsot3', 200, 80, 'None', 'O+', 'AA', 'sss2', 3, 0, '', 0, 'Islam', '2016-08-19 23:07:58', 'Day', '2015/2016/2', 2),
('jsot338', 44, 444, 'none', 'AB+', 'AA', 'sss2', 3, 0, '', 0, 'Traditional', '0000-00-00 00:00:00', 'Day', '787458', 2);

-- --------------------------------------------------------

--
-- Table structure for table `acadah_student_reg`
--

CREATE TABLE IF NOT EXISTS `acadah_student_reg` (
  `student_reg_id` int(10) NOT NULL,
  `student_id` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `stu_status` varchar(15) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL DEFAULT 'active',
  `class_details_id` int(3) NOT NULL,
  `promotion_status` varchar(20) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `payment_balance` int(11) NOT NULL,
  `ts_id` int(11) NOT NULL,
  `session_id` int(11) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `acadah_student_session`
--

CREATE TABLE IF NOT EXISTS `acadah_student_session` (
  `id` int(10) NOT NULL,
  `student_id` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(15) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL DEFAULT 'active',
  `class_details_id` int(3) NOT NULL,
  `promotion_status` varchar(20) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `payment_balance` int(11) NOT NULL,
  `ts_id` int(11) NOT NULL,
  `session_id` int(11) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `sch_id` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `acadah_student_session`
--

INSERT INTO `acadah_student_session` (`id`, `student_id`, `status`, `class_details_id`, `promotion_status`, `payment_balance`, `ts_id`, `session_id`, `timestamp`, `sch_id`) VALUES
(1, 'cpa270', 'active', 113, '', 12000, 5, 1, '2016-07-20 03:25:29', 'cpa'),
(2, 'jsot338', 'active', 5, '', 500, 5, 3, '2016-07-20 03:25:29', 'jsot'),
(3, 'jsot2', 'active', 5, '', 0, 5, 3, '2016-08-19 22:37:28', 'jsot'),
(4, 'jsot3', 'active', 3, '', 0, 5, 3, '2016-08-19 23:07:58', 'jsot');

-- --------------------------------------------------------

--
-- Table structure for table `acadah_student_subjects`
--

CREATE TABLE IF NOT EXISTS `acadah_student_subjects` (
  `id` int(11) NOT NULL,
  `student_id` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `subject_id` int(11) NOT NULL,
  `ts_id` int(11) DEFAULT NULL,
  `sch_id` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `session_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `acadah_student_subjects`
--

INSERT INTO `acadah_student_subjects` (`id`, `student_id`, `subject_id`, `ts_id`, `sch_id`, `session_id`) VALUES
(1, 'jsot2', 5, NULL, 'jsot', 3),
(2, 'jsot2', 20, NULL, 'jsot', 3),
(3, 'jsot2', 47, NULL, 'jsot', 3),
(4, 'jsot2', 48, NULL, 'jsot', 3),
(5, 'jsot2', 2, NULL, 'jsot', 3),
(6, 'jsot2', 19, NULL, 'jsot', 3),
(7, 'jsot2', 14, NULL, 'jsot', 3),
(8, 'jsot2', 15, NULL, 'jsot', 3),
(9, 'jsot2', 18, NULL, 'jsot', 3),
(10, 'jsot2', 34, NULL, 'jsot', 3),
(11, 'jsot2', 44, NULL, 'jsot', 3),
(12, 'jsot3', 5, NULL, 'jsot', 3),
(13, 'jsot3', 20, NULL, 'jsot', 3),
(15, 'jsot3', 47, NULL, 'jsot', 3),
(16, 'jsot3', 48, NULL, 'jsot', 3),
(19, 'jsot3', 2, NULL, 'jsot', 3),
(21, 'jsot3', 19, NULL, 'jsot', 3),
(22, 'jsot3', 14, NULL, 'jsot', 3),
(23, 'jsot3', 15, NULL, 'jsot', 3),
(24, 'jsot3', 18, NULL, 'jsot', 3),
(25, 'jsot3', 34, NULL, 'jsot', 3),
(26, 'jsot3', 44, NULL, 'jsot', 3);

-- --------------------------------------------------------

--
-- Table structure for table `acadah_student_terms`
--

CREATE TABLE IF NOT EXISTS `acadah_student_terms` (
  `id` int(10) NOT NULL,
  `student_id` int(10) NOT NULL,
  `status` varchar(15) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL DEFAULT 'active',
  `balance` int(11) NOT NULL,
  `ts_id` int(11) NOT NULL,
  `time_stamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `acadah_subject_dept`
--

CREATE TABLE IF NOT EXISTS `acadah_subject_dept` (
  `id` int(1) NOT NULL,
  `staff_id` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'HOD',
  `status` enum('active','inactive') COLLATE utf8_unicode_ci NOT NULL,
  `dept_id` int(11) NOT NULL,
  `sch_id` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `acadah_subject_dept`
--

INSERT INTO `acadah_subject_dept` (`id`, `staff_id`, `status`, `dept_id`, `sch_id`) VALUES
(1, NULL, 'active', 1, 'cpa'),
(2, NULL, 'active', 1, 'jsot'),
(3, NULL, 'active', 2, 'jsot'),
(4, '', 'active', 3, 'jsot');

-- --------------------------------------------------------

--
-- Table structure for table `acadah_terms_and_condition`
--

CREATE TABLE IF NOT EXISTS `acadah_terms_and_condition` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `session_id` int(11) NOT NULL,
  `status` varchar(25) NOT NULL,
  `sch_id` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `acadah_terms_and_condition`
--

INSERT INTO `acadah_terms_and_condition` (`id`, `title`, `content`, `session_id`, `status`, `sch_id`) VALUES
(1, '2014/2015 Terms And Condtition', '<p>You must not change your school after applying to our school. We maen it</p>', 1, 'active', 'jsot'),
(3, '2010/2011 Terms And Condtition', '<p>You must not change your school after applying to our school. We maen it</p>', 2, 'active', 'jsot');

-- --------------------------------------------------------

--
-- Table structure for table `acadah_transactions`
--

CREATE TABLE IF NOT EXISTS `acadah_transactions` (
  `transaction_id` int(10) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_id` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `staff_id` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sold_by_staff_id` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `comment` text COLLATE utf8_unicode_ci NOT NULL,
  `show_comment` int(1) NOT NULL DEFAULT '0',
  `payment_type` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `trans_amount_paid` int(11) NOT NULL,
  `trackid` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `deleted_by` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `deleted` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `suspended` int(1) NOT NULL DEFAULT '0',
  `store_account` int(1) NOT NULL DEFAULT '0',
  `ts_id` int(11) NOT NULL,
  `bankfrom` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `bankto` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `sch_id` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `acadah_transactions`
--

INSERT INTO `acadah_transactions` (`transaction_id`, `timestamp`, `user_id`, `staff_id`, `sold_by_staff_id`, `comment`, `show_comment`, `payment_type`, `trans_amount_paid`, `trackid`, `deleted_by`, `deleted`, `suspended`, `store_account`, `ts_id`, `bankfrom`, `bankto`, `sch_id`) VALUES
(1, '2016-07-20 11:15:22', 'cpa271', 'cpa-268', NULL, '', 0, 'Cash', 20000, NULL, NULL, '', 0, 0, 1, '', '', 'cpa'),
(2, '2016-07-20 11:15:47', 'cpa271', 'cpa-268', NULL, '', 0, 'Deposit', 10000, 'teller1', NULL, '', 0, 0, 1, '', 'GTB', 'cpa'),
(3, '2016-07-24 08:05:44', 'cpa271', 'cpa-268', NULL, '', 0, 'Cash', 5000, NULL, NULL, '', 0, 0, 1, '', '', 'cpa'),
(4, '2016-07-24 08:08:53', 'cpa271', 'cpa-268', NULL, '', 0, 'Cash', 6000, NULL, NULL, '', 0, 0, 1, '', '', 'cpa'),
(5, '2016-07-24 20:53:34', 'cpa271', 'cpa-268', NULL, '', 0, 'Cash', 50000, NULL, NULL, '', 0, 0, 1, '', '', 'cpa'),
(6, '2016-08-28 07:28:57', 'jsot3', 'jsot1', NULL, '', 0, 'Cash', 50000, NULL, NULL, '', 0, 0, 5, '', '', 'jsot'),
(7, '2016-08-28 13:10:12', 'jsot2', 'jsot1', NULL, '', 0, 'Cash', 500, NULL, NULL, '', 0, 0, 5, '', '', 'jsot'),
(8, '2016-08-28 13:11:11', 'jsot2', 'jsot1', NULL, '', 0, 'Check', 50000, '2848494', NULL, '', 0, 0, 5, 'URU', '', 'jsot');

-- --------------------------------------------------------

--
-- Table structure for table `acadah_transaction_bill`
--

CREATE TABLE IF NOT EXISTS `acadah_transaction_bill` (
  `id` int(11) NOT NULL,
  `student_id` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `staff_id` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `item_id` varchar(100) COLLATE utf8_unicode_ci NOT NULL COMMENT 'payment_id eg main bill',
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `discount` int(11) NOT NULL,
  `price` int(11) DEFAULT NULL,
  `amount` int(11) NOT NULL,
  `paid` int(11) NOT NULL,
  `ts_id` int(2) NOT NULL,
  `sch_id` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `acadah_transaction_bill`
--

INSERT INTO `acadah_transaction_bill` (`id`, `student_id`, `staff_id`, `item_id`, `timestamp`, `discount`, `price`, `amount`, `paid`, `ts_id`, `sch_id`) VALUES
(1, 'cpa270', 'cpa-268', '17', '2016-07-24 08:46:36', 0, 8000, 0, 1, 1, '0'),
(2, 'cpa270', 'cpa-268', '19', '2016-07-24 08:47:04', 0, 4500, 0, 1, 1, '0'),
(3, 'cpa270', 'cpa-268', '21', '2016-07-24 08:47:06', 0, 31500, 0, 1, 1, '0'),
(4, 'cpa270', 'cpa-268', '26', '2016-07-24 08:47:08', 0, 6000, 0, 1, 1, '0'),
(5, 'cpa271', 'cpa-268', '19', '2016-07-24 20:53:53', 0, 4500, 0, 1, 1, '0'),
(6, 'cpa271', 'cpa-268', '21', '2016-07-28 00:43:03', 0, 31500, 0, 1, 1, '0'),
(7, 'cpa271', 'cpa-268', '26', '2016-07-28 00:43:07', 0, 6000, 0, 1, 1, '0'),
(10, 'jsot2', 'jsot1', '2', '2016-08-29 14:19:33', 1550, 2450, 4000, 1, 5, 'jsot'),
(14, 'jsot3', 'jsot1', '156', '2016-08-28 07:29:27', 0, 4000, 0, 1, 5, 'jsot'),
(15, 'jsot3', 'jsot1', '2', '2016-08-28 08:41:33', 0, 8200, 8200, 1, 5, 'jsot'),
(16, 'jsot2', 'jsot1', '156', '2016-08-29 13:34:19', 100, 3900, 0, 1, 5, 'jsot'),
(19, 'jsot3', 'jsot1', '163', '2016-08-28 13:23:12', 0, 8900, 0, 0, 5, 'jsot'),
(20, 'jsot3', 'jsot1', '164', '2016-08-28 22:40:21', 500, 5000, 0, 0, 5, 'jsot'),
(21, 'jsot2', 'jsot1', '163', '2016-08-29 11:04:47', 300, 8600, 0, 1, 5, 'jsot');

-- --------------------------------------------------------

--
-- Table structure for table `acadah_transaction_items`
--

CREATE TABLE IF NOT EXISTS `acadah_transaction_items` (
  `id` int(11) NOT NULL,
  `transaction_id` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `student_id` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `item_id` varchar(100) COLLATE utf8_unicode_ci NOT NULL COMMENT 'payment_id eg main bill',
  `description` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `amount_paid` int(11) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `discount` int(11) NOT NULL,
  `item_cost_price` int(11) NOT NULL,
  `item_serialnumber` varchar(50) CHARACTER SET latin1 NOT NULL,
  `item_quantity` int(11) NOT NULL,
  `commission` int(11) NOT NULL,
  `suspended` int(11) NOT NULL,
  `ts_id` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `acadah_transaction_payments`
--

CREATE TABLE IF NOT EXISTS `acadah_transaction_payments` (
  `id` int(11) NOT NULL,
  `transaction_id` int(10) NOT NULL,
  `payment_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `payment_amount` decimal(23,10) NOT NULL,
  `trackid` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `payment_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_id` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `bankform` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `bankto` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `acadah_users`
--

CREATE TABLE IF NOT EXISTS `acadah_users` (
  `id` int(11) NOT NULL,
  `status` enum('active','inactive','supended','deleted') CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL DEFAULT 'active',
  `user_id` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `acadah_user_id` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `user_type` enum('student','staff','parent','admin','prospective','superadmin','reader','uploader') COLLATE utf8_unicode_ci NOT NULL,
  `lname` varchar(30) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `fname` varchar(30) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `mname` varchar(30) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `gender` varchar(10) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `dob` varchar(200) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `address` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `state` varchar(20) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `phone` varchar(20) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `email` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `nationality` varchar(20) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `hometown` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `lg` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `state_of_origin` varchar(20) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `reg_code` varchar(20) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `deleted` int(1) NOT NULL,
  `pass` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `sch_id` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `profile_image` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=339 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `acadah_users`
--

INSERT INTO `acadah_users` (`id`, `status`, `user_id`, `acadah_user_id`, `user_type`, `lname`, `fname`, `mname`, `gender`, `dob`, `address`, `state`, `phone`, `email`, `nationality`, `hometown`, `lg`, `state_of_origin`, `reg_code`, `deleted`, `pass`, `sch_id`, `profile_image`) VALUES
(268, 'active', 'cpa-268', '', 'superadmin', 'ade john', '', '', '', '', '', '', '08078452444', 'coolchi@acadah.com', '', '', '', '', '', 0, 'aceb36cb2f128e7f51e7cb2dd2e4b2fc', 'cpa', ''),
(330, 'active', 'jsot1', 'jsot330', 'superadmin', 'Solagbade Jonathan Aboki', '', '', '', '', '', '', '07059717498', 'admin@jsot.com', '', '', '', '', '', 0, '7698f83f4933c0f35e76b002782ede4d', 'jsot', ''),
(331, 'active', 'jsotp51', 'jsot331', 'prospective', 'Salako', 'Toyibat', 'Adeola', 'female', '11/18/2000', 'Aiyegbami Street', 'Ogun', '09098770105', 'ta@gmail.com', 'Nigerian', 'Ado Odo Ota', 'Ijebu Ode', 'Ogun', '', 0, 'cb1304abfa439ac8caa41ae579aa30ae', 'jsot', 'jsotp51.jpg'),
(332, 'active', 'jsot2', 'jsot332', 'student', 'Salako', 'Toyibat', 'Adeola', 'female', '11/18/2000', 'Aiyegbami Street', '', '09098770105', 'ta@gmail.com', 'Nigerian', 'Ado Odo Ota', 'Ijebu Ode', 'Ogun', '', 0, 'cb1304abfa439ac8caa41ae579aa30ae', 'jsot', ''),
(333, 'active', 'jsotp52', 'jsot333', 'prospective', 'Rofiat', 'Adeyemi', 'Demokula', 'female', '05/12/1998', 'Ademokula', 'Ogun', '09098770105', 'ra@gmail.com', 'Nigerian', 'Ademokula', 'Ijebu Ode', 'Ogun', '', 0, 'cdafbae36681eccb87e0f212bddd40e9', 'jsot', 'jsotp52.jpg'),
(334, 'active', 'jsot3', 'jsot334', 'student', 'Rofiat', 'Adeyemi', 'Demokula', 'female', '05/12/1998', 'Ademokula', '', '09098770105', 'ra@gmail.com', 'Nigerian', 'Ademokula', 'Ijebu Ode', 'Ogun', '', 0, 'cdafbae36681eccb87e0f212bddd40e9', 'jsot', ''),
(335, 'active', 'jsot335', '', 'staff', 'Awonugga', 'Sheriff', 'Oladele', 'male', '', '', '', '', 'aa@gmail.com', '', '', '', '', '', 0, '3aac996d11f62681d282e56828cf2e96', 'jsot', ''),
(336, 'active', 'jsot5', '336', 'staff', 'Alonge', 'Ola', 'Reo', 'female', '', '', '', '', 'lo@hd.com', '', '', '', '', '', 0, '1823ee1744f0d4ed29d2a8d7a6d7f14a', 'jsot', ''),
(337, 'active', 'jsot6', 'jsot337', 'staff', 'Sule', 'Igbira', 'Jegedem', 'male', '08/18/2016', 'kdkldfjkfkjfkjfkfjfkjfjkfkfjfkfjkfjfkfjfk', '', '09098770105', 'aol@gao.com', 'Nigerian', 'Ijb', 'Abak', 'Akwa Ibom', '', 0, '6a3c53f0398050347d8ca72b8b152546', 'jsot', 'jsot6.jpg'),
(338, 'active', 'jsot338', '', 'student', 'sherif', 'awonuga', 'oooo', 'male', '08/18/2016', 'tasued secondary school', '', '08025545545', 'coolchi01@gmail.com', 'Nigerian', 'ijebu ode', 'Ado Ekiti', 'Ekiti', '', 0, 'd34e16b3a06833df9a6f08da26e3ac09', 'jsot', 'jsot338.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `acadah_users_permissions_actions`
--

CREATE TABLE IF NOT EXISTS `acadah_users_permissions_actions` (
  `dashboard` int(11) NOT NULL,
  `access_user_id` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `access_user_type` enum('user','group','role') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'user',
  `action_id` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `sch_id` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `status` enum('active','inactive') COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `acadah_users_permissions_actions`
--

INSERT INTO `acadah_users_permissions_actions` (`dashboard`, `access_user_id`, `access_user_type`, `action_id`, `sch_id`, `status`) VALUES
(0, 'admin', 'group', 'account_general_ledger', 'jsot', 'inactive'),
(0, 'admin', 'group', 'account_income_and_expenses', 'jsot', 'inactive'),
(1, 'admin', 'group', 'account_view', 'jsot', 'inactive'),
(1, 'admin', 'group', 'add_subject', 'jsot', 'active'),
(1, 'admin', 'group', 'admision_admin_view', 'jsot', 'active'),
(0, 'admin', 'group', 'admission_view', 'jsot', 'active'),
(0, 'admin', 'group', 'assign_staff_subject', 'jsot', 'active'),
(1, 'admin', 'group', 'assign_student_subject', 'jsot', 'active'),
(0, 'admin', 'group', 'fees_cash_register', 'jsot', 'active'),
(1, 'admin', 'group', 'fees_discount', 'jsot', 'active'),
(1, 'admin', 'group', 'fees_payments_transaction', 'jsot', 'active'),
(0, 'admin', 'group', 'fees_process_payment', 'jsot', 'active'),
(1, 'admin', 'group', 'fees_settings', 'jsot', 'active'),
(1, 'admin', 'group', 'fees_view', 'jsot', 'active'),
(1, 'admin', 'group', 'modules_view', 'jsot', 'active'),
(1, 'admin', 'group', 'permissions_manage', 'jsot', 'active'),
(1, 'admin', 'group', 'permissions_settings', 'jsot', 'active'),
(1, 'admin', 'group', 'results_view', 'jsot', 'active'),
(1, 'admin', 'group', 'setup_edit', 'jsot', 'active'),
(0, 'admin', 'group', 'staff_add', 'jsot', 'active'),
(0, 'admin', 'group', 'staff_edit', 'jsot', 'active'),
(0, 'admin', 'group', 'staff_quick_add', 'jsot', 'active'),
(1, 'admin', 'group', 'staff_view', 'jsot', 'active'),
(0, 'admin', 'group', 'statistics_view', 'jsot', 'inactive'),
(0, 'admin', 'group', 'student_quick_add', 'jsot', 'active'),
(1, 'admin', 'group', 'students_add', 'jsot', 'active'),
(0, 'admin', 'group', 'students_edit', 'jsot', 'active'),
(1, 'admin', 'group', 'students_view', 'jsot', 'active'),
(0, 'prospective', 'group', 'admission_view', 'jsot', 'active'),
(1, 'staff', 'group', 'staff_assigned', 'jsot', 'active'),
(1, 'student', 'group', 'results_view', 'jsot', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `acadah_users_roles`
--

CREATE TABLE IF NOT EXISTS `acadah_users_roles` (
  `id` int(11) NOT NULL,
  `user_id` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acadah_admission_letter`
--
ALTER TABLE `acadah_admission_letter`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `session_id` (`session_id`,`sch_id`);

--
-- Indexes for table `acadah_app_config`
--
ALTER TABLE `acadah_app_config`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `acadah_app_div`
--
ALTER TABLE `acadah_app_div`
  ADD PRIMARY KEY (`school_div_id`);

--
-- Indexes for table `acadah_app_level`
--
ALTER TABLE `acadah_app_level`
  ADD PRIMARY KEY (`level_id`),
  ADD KEY `level` (`level_id`);

--
-- Indexes for table `acadah_app_modules`
--
ALTER TABLE `acadah_app_modules`
  ADD PRIMARY KEY (`module_id`),
  ADD UNIQUE KEY `desc_lang_key` (`desc_lang_key`),
  ADD UNIQUE KEY `name_lang_key` (`name_lang_key`);

--
-- Indexes for table `acadah_app_modules_actions`
--
ALTER TABLE `acadah_app_modules_actions`
  ADD PRIMARY KEY (`action_id`),
  ADD KEY `module_id` (`module_id`),
  ADD KEY `action_id` (`action_id`);

--
-- Indexes for table `acadah_app_session`
--
ALTER TABLE `acadah_app_session`
  ADD PRIMARY KEY (`session_id`);

--
-- Indexes for table `acadah_app_states`
--
ALTER TABLE `acadah_app_states`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `acadah_app_subject`
--
ALTER TABLE `acadah_app_subject`
  ADD PRIMARY KEY (`subject_id`);

--
-- Indexes for table `acadah_app_subject_dept`
--
ALTER TABLE `acadah_app_subject_dept`
  ADD PRIMARY KEY (`dept_id`);

--
-- Indexes for table `acadah_app_term`
--
ALTER TABLE `acadah_app_term`
  ADD PRIMARY KEY (`term_id`);

--
-- Indexes for table `acadah_app_term_session`
--
ALTER TABLE `acadah_app_term_session`
  ADD UNIQUE KEY `term_session_id_2` (`ts_id`),
  ADD UNIQUE KEY `term_id_2` (`term_id`,`session_id`),
  ADD KEY `term_session_id` (`ts_id`),
  ADD KEY `term_id` (`term_id`,`session_id`),
  ADD KEY `session_id` (`session_id`);

--
-- Indexes for table `acadah_class_desc`
--
ALTER TABLE `acadah_class_desc`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sch_div_id` (`sch_div_id`),
  ADD KEY `sch_id` (`sch_id`);

--
-- Indexes for table `acadah_class_details`
--
ALTER TABLE `acadah_class_details`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `class_details` (`desc_id`,`level_id`,`sch_id`) USING BTREE,
  ADD KEY `class_teacher_id` (`class_teacher_id`),
  ADD KEY `class_rep_id` (`class_rep_id`),
  ADD KEY `sch_id` (`sch_id`),
  ADD KEY `level_id` (`level_id`);

--
-- Indexes for table `acadah_class_level`
--
ALTER TABLE `acadah_class_level`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `class_name` (`class_name`,`school_div_id`,`sch_id`,`level_id`),
  ADD UNIQUE KEY `school_div_id_2` (`school_div_id`,`sch_id`,`level_id`),
  ADD KEY `level` (`id`),
  ADD KEY `sch_id` (`sch_id`),
  ADD KEY `level_id` (`level_id`),
  ADD KEY `school_div_id` (`school_div_id`);

--
-- Indexes for table `acadah_class_unit`
--
ALTER TABLE `acadah_class_unit`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`),
  ADD KEY `staff_id` (`staff_id`),
  ADD KEY `sch_id` (`sch_id`);

--
-- Indexes for table `acadah_fees`
--
ALTER TABLE `acadah_fees`
  ADD PRIMARY KEY (`fees_id`),
  ADD KEY `sch_id` (`sch_id`);

--
-- Indexes for table `acadah_fees_cat`
--
ALTER TABLE `acadah_fees_cat`
  ADD PRIMARY KEY (`fees_cat_id`),
  ADD UNIQUE KEY `fees_cat_id_2` (`fees_cat_id`,`fees_cat`,`sch_id`),
  ADD KEY `fees_cat_id` (`fees_cat_id`);

--
-- Indexes for table `acadah_fees_credit`
--
ALTER TABLE `acadah_fees_credit`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `sch_id` (`sch_id`),
  ADD KEY `ts_id` (`ts_id`);

--
-- Indexes for table `acadah_fees_settings`
--
ALTER TABLE `acadah_fees_settings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `fees_id` (`fees_id`,`level_id`,`stu_cat`,`ts_id`,`type`,`sch_id`),
  ADD KEY ` psettings_id` (`id`),
  ADD KEY `sch_id` (`sch_id`);

--
-- Indexes for table `acadah_message`
--
ALTER TABLE `acadah_message`
  ADD PRIMARY KEY (`message_id`);

--
-- Indexes for table `acadah_modules_actions`
--
ALTER TABLE `acadah_modules_actions`
  ADD PRIMARY KEY (`action_id`),
  ADD KEY `sch_id` (`sch_id`),
  ADD KEY `module_id` (`module_id`),
  ADD KEY `action_id` (`action_id`);

--
-- Indexes for table `acadah_parent`
--
ALTER TABLE `acadah_parent`
  ADD PRIMARY KEY (`parent_id`),
  ADD KEY `parent_id` (`parent_id`);

--
-- Indexes for table `acadah_parent_student`
--
ALTER TABLE `acadah_parent_student`
  ADD PRIMARY KEY (`parent_id`),
  ADD KEY `parent_id` (`parent_id`),
  ADD KEY `student_id` (`student_id`);

--
-- Indexes for table `acadah_payment_credit`
--
ALTER TABLE `acadah_payment_credit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `acadah_payment_types`
--
ALTER TABLE `acadah_payment_types`
  ADD KEY `id` (`payment_id`);

--
-- Indexes for table `acadah_prospective`
--
ALTER TABLE `acadah_prospective`
  ADD PRIMARY KEY (`prospective_id`),
  ADD KEY `ts_id` (`ts_id`);

--
-- Indexes for table `acadah_result`
--
ALTER TABLE `acadah_result`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `sch_id` (`sch_id`,`class_details_id`,`ts_id`,`subject_id`,`score_type`,`student_id`) USING BTREE;

--
-- Indexes for table `acadah_result_comments`
--
ALTER TABLE `acadah_result_comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `acadah_result_processed`
--
ALTER TABLE `acadah_result_processed`
  ADD KEY `processed_score_id` (`id`);

--
-- Indexes for table `acadah_school`
--
ALTER TABLE `acadah_school`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `sch_id_2` (`sch_id`),
  ADD KEY `sch_id` (`sch_id`);

--
-- Indexes for table `acadah_school_config`
--
ALTER TABLE `acadah_school_config`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `acadah_school_div`
--
ALTER TABLE `acadah_school_div`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `sch_id_2` (`sch_id`,`school_div_id`),
  ADD KEY `sch_id` (`sch_id`),
  ADD KEY `school_div_id` (`school_div_id`),
  ADD KEY `sch_id_3` (`sch_id`);

--
-- Indexes for table `acadah_school_div_subject`
--
ALTER TABLE `acadah_school_div_subject`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sch_div_id` (`sch_div_id`),
  ADD KEY `subject_id` (`subject_id`);

--
-- Indexes for table `acadah_school_modules`
--
ALTER TABLE `acadah_school_modules`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `module_id_2` (`module_id`,`sch_id`),
  ADD KEY `sch_id` (`sch_id`),
  ADD KEY `module_id` (`module_id`);

--
-- Indexes for table `acadah_school_modules_actions`
--
ALTER TABLE `acadah_school_modules_actions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `action_id_2` (`action_id`,`sch_id`),
  ADD KEY `sch_id` (`sch_id`),
  ADD KEY `action_id` (`action_id`);

--
-- Indexes for table `acadah_school_roles`
--
ALTER TABLE `acadah_school_roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`,`sch_id`),
  ADD UNIQUE KEY `role_name` (`role_name`,`sch_id`);

--
-- Indexes for table `acadah_school_scores`
--
ALTER TABLE `acadah_school_scores`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `acadah_school_session`
--
ALTER TABLE `acadah_school_session`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `session_start` (`session_id`,`sch_id`) USING BTREE,
  ADD KEY `sch_id` (`sch_id`),
  ADD KEY `session_id` (`session_id`);

--
-- Indexes for table `acadah_school_subject`
--
ALTER TABLE `acadah_school_subject`
  ADD PRIMARY KEY (`id`,`sch_id`),
  ADD KEY `sch_id` (`sch_id`);

--
-- Indexes for table `acadah_school_term`
--
ALTER TABLE `acadah_school_term`
  ADD PRIMARY KEY (`term_id`,`sch_id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `sch_id` (`sch_id`);

--
-- Indexes for table `acadah_school_term_session`
--
ALTER TABLE `acadah_school_term_session`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ts_id` (`ts_id`,`sch_id`);

--
-- Indexes for table `acadah_sport_house`
--
ALTER TABLE `acadah_sport_house`
  ADD PRIMARY KEY (`sport_house_id`),
  ADD KEY `sch_id` (`sch_id`),
  ADD KEY `sport_house_master_id` (`sport_house_master_id`);

--
-- Indexes for table `acadah_staff`
--
ALTER TABLE `acadah_staff`
  ADD PRIMARY KEY (`staff_id`),
  ADD KEY `staff_id` (`staff_id`);

--
-- Indexes for table `acadah_staff_subjects`
--
ALTER TABLE `acadah_staff_subjects`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `subject_id_2` (`subject_id`,`class_details_id`,`staff_id`,`ts_id`,`sch_id`),
  ADD KEY `sch_id` (`sch_id`),
  ADD KEY `staff_id` (`staff_id`),
  ADD KEY `subject_id` (`subject_id`),
  ADD KEY `session_id` (`ts_id`),
  ADD KEY `class_details_id` (`class_details_id`);

--
-- Indexes for table `acadah_student`
--
ALTER TABLE `acadah_student`
  ADD PRIMARY KEY (`student_id`),
  ADD KEY `ts_id` (`ts_id`);

--
-- Indexes for table `acadah_student_reg`
--
ALTER TABLE `acadah_student_reg`
  ADD PRIMARY KEY (`student_reg_id`),
  ADD UNIQUE KEY `student_id_2` (`student_id`,`class_details_id`,`ts_id`),
  ADD KEY `student_id` (`student_id`),
  ADD KEY `ts_id` (`ts_id`),
  ADD KEY `class_details_id` (`class_details_id`),
  ADD KEY `session_id` (`session_id`);

--
-- Indexes for table `acadah_student_session`
--
ALTER TABLE `acadah_student_session`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `student_id_2` (`student_id`,`class_details_id`),
  ADD KEY `student_id` (`student_id`),
  ADD KEY `class_details_id` (`class_details_id`),
  ADD KEY `session_id` (`session_id`);

--
-- Indexes for table `acadah_student_subjects`
--
ALTER TABLE `acadah_student_subjects`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `student_id_2` (`student_id`,`subject_id`),
  ADD UNIQUE KEY `student_id_3` (`student_id`,`subject_id`,`sch_id`),
  ADD UNIQUE KEY `student_id_4` (`student_id`,`subject_id`,`ts_id`,`sch_id`),
  ADD KEY `student_id` (`student_id`),
  ADD KEY `subject_id` (`subject_id`),
  ADD KEY `term_id` (`ts_id`),
  ADD KEY `sch_id` (`sch_id`);

--
-- Indexes for table `acadah_student_terms`
--
ALTER TABLE `acadah_student_terms`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_class_reg_id` (`id`);

--
-- Indexes for table `acadah_subject_dept`
--
ALTER TABLE `acadah_subject_dept`
  ADD PRIMARY KEY (`id`),
  ADD KEY `dept_id` (`dept_id`),
  ADD KEY `sch_id` (`sch_id`);

--
-- Indexes for table `acadah_terms_and_condition`
--
ALTER TABLE `acadah_terms_and_condition`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `session_id` (`session_id`,`sch_id`);

--
-- Indexes for table `acadah_transactions`
--
ALTER TABLE `acadah_transactions`
  ADD PRIMARY KEY (`transaction_id`),
  ADD KEY `student_id` (`user_id`),
  ADD KEY `staff_id` (`staff_id`),
  ADD KEY `sold_by_staff_id` (`sold_by_staff_id`),
  ADD KEY `auth_code` (`trackid`),
  ADD KEY `deleted_by` (`deleted_by`),
  ADD KEY `sch_id` (`sch_id`),
  ADD KEY `ts_id` (`ts_id`);

--
-- Indexes for table `acadah_transaction_bill`
--
ALTER TABLE `acadah_transaction_bill`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `student_id` (`student_id`,`item_id`,`ts_id`);

--
-- Indexes for table `acadah_transaction_items`
--
ALTER TABLE `acadah_transaction_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `prec_id` (`id`);

--
-- Indexes for table `acadah_transaction_payments`
--
ALTER TABLE `acadah_transaction_payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `acadah_users`
--
ALTER TABLE `acadah_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_id_2` (`user_id`),
  ADD KEY `sch_id` (`sch_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `acadah_users_permissions_actions`
--
ALTER TABLE `acadah_users_permissions_actions`
  ADD PRIMARY KEY (`access_user_id`,`action_id`),
  ADD UNIQUE KEY `access_user_id` (`access_user_id`,`access_user_type`,`action_id`,`sch_id`),
  ADD KEY `phppos_permissions_actions_ibfk_2` (`access_user_id`),
  ADD KEY `phppos_permissions_actions_ibfk_3` (`action_id`),
  ADD KEY `sch_id` (`sch_id`);

--
-- Indexes for table `acadah_users_roles`
--
ALTER TABLE `acadah_users_roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_id_2` (`user_id`,`role_id`),
  ADD KEY `roles` (`role_id`),
  ADD KEY `users` (`user_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `role_id` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `acadah_admission_letter`
--
ALTER TABLE `acadah_admission_letter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `acadah_app_div`
--
ALTER TABLE `acadah_app_div`
  MODIFY `school_div_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `acadah_app_session`
--
ALTER TABLE `acadah_app_session`
  MODIFY `session_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `acadah_app_states`
--
ALTER TABLE `acadah_app_states`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT for table `acadah_app_subject`
--
ALTER TABLE `acadah_app_subject`
  MODIFY `subject_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=50;
--
-- AUTO_INCREMENT for table `acadah_app_subject_dept`
--
ALTER TABLE `acadah_app_subject_dept`
  MODIFY `dept_id` int(1) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `acadah_app_term`
--
ALTER TABLE `acadah_app_term`
  MODIFY `term_id` int(1) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `acadah_app_term_session`
--
ALTER TABLE `acadah_app_term_session`
  MODIFY `ts_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `acadah_class_desc`
--
ALTER TABLE `acadah_class_desc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `acadah_class_details`
--
ALTER TABLE `acadah_class_details`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `acadah_class_level`
--
ALTER TABLE `acadah_class_level`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `acadah_class_unit`
--
ALTER TABLE `acadah_class_unit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `acadah_fees`
--
ALTER TABLE `acadah_fees`
  MODIFY `fees_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=223;
--
-- AUTO_INCREMENT for table `acadah_fees_credit`
--
ALTER TABLE `acadah_fees_credit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `acadah_fees_settings`
--
ALTER TABLE `acadah_fees_settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=165;
--
-- AUTO_INCREMENT for table `acadah_payment_credit`
--
ALTER TABLE `acadah_payment_credit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `acadah_result`
--
ALTER TABLE `acadah_result`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=47;
--
-- AUTO_INCREMENT for table `acadah_result_comments`
--
ALTER TABLE `acadah_result_comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `acadah_result_processed`
--
ALTER TABLE `acadah_result_processed`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `acadah_school`
--
ALTER TABLE `acadah_school`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `acadah_school_config`
--
ALTER TABLE `acadah_school_config`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `acadah_school_div`
--
ALTER TABLE `acadah_school_div`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `acadah_school_div_subject`
--
ALTER TABLE `acadah_school_div_subject`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `acadah_school_modules`
--
ALTER TABLE `acadah_school_modules`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT for table `acadah_school_modules_actions`
--
ALTER TABLE `acadah_school_modules_actions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=146;
--
-- AUTO_INCREMENT for table `acadah_school_roles`
--
ALTER TABLE `acadah_school_roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `acadah_school_scores`
--
ALTER TABLE `acadah_school_scores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `acadah_school_session`
--
ALTER TABLE `acadah_school_session`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `acadah_school_subject`
--
ALTER TABLE `acadah_school_subject`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `acadah_school_term`
--
ALTER TABLE `acadah_school_term`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `acadah_school_term_session`
--
ALTER TABLE `acadah_school_term_session`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `acadah_sport_house`
--
ALTER TABLE `acadah_sport_house`
  MODIFY `sport_house_id` int(1) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `acadah_staff_subjects`
--
ALTER TABLE `acadah_staff_subjects`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `acadah_student_reg`
--
ALTER TABLE `acadah_student_reg`
  MODIFY `student_reg_id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `acadah_student_session`
--
ALTER TABLE `acadah_student_session`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `acadah_student_subjects`
--
ALTER TABLE `acadah_student_subjects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `acadah_student_terms`
--
ALTER TABLE `acadah_student_terms`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `acadah_subject_dept`
--
ALTER TABLE `acadah_subject_dept`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `acadah_terms_and_condition`
--
ALTER TABLE `acadah_terms_and_condition`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `acadah_transactions`
--
ALTER TABLE `acadah_transactions`
  MODIFY `transaction_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `acadah_transaction_bill`
--
ALTER TABLE `acadah_transaction_bill`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `acadah_transaction_items`
--
ALTER TABLE `acadah_transaction_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `acadah_users`
--
ALTER TABLE `acadah_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=339;
--
-- AUTO_INCREMENT for table `acadah_users_roles`
--
ALTER TABLE `acadah_users_roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `acadah_app_modules_actions`
--
ALTER TABLE `acadah_app_modules_actions`
  ADD CONSTRAINT `acadah_app_modules_actions_ibfk_1` FOREIGN KEY (`module_id`) REFERENCES `acadah_app_modules` (`module_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `acadah_class_desc`
--
ALTER TABLE `acadah_class_desc`
  ADD CONSTRAINT `acadah_class_desc_ibfk_1` FOREIGN KEY (`sch_div_id`) REFERENCES `acadah_app_div` (`school_div_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `acadah_class_desc_ibfk_2` FOREIGN KEY (`sch_id`) REFERENCES `acadah_school` (`sch_id`) ON UPDATE CASCADE;

--
-- Constraints for table `acadah_class_details`
--
ALTER TABLE `acadah_class_details`
  ADD CONSTRAINT `acadah_class_details_ibfk_2` FOREIGN KEY (`sch_id`) REFERENCES `acadah_school` (`sch_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `acadah_class_details_ibfk_7` FOREIGN KEY (`class_teacher_id`) REFERENCES `acadah_users` (`user_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `acadah_class_details_ibfk_8` FOREIGN KEY (`class_rep_id`) REFERENCES `acadah_student` (`student_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `acadah_class_details_ibfk_9` FOREIGN KEY (`level_id`) REFERENCES `acadah_app_level` (`level_id`) ON UPDATE CASCADE;

--
-- Constraints for table `acadah_class_level`
--
ALTER TABLE `acadah_class_level`
  ADD CONSTRAINT `acadah_class_level_ibfk_1` FOREIGN KEY (`sch_id`) REFERENCES `acadah_school` (`sch_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `acadah_class_level_ibfk_3` FOREIGN KEY (`school_div_id`) REFERENCES `acadah_app_div` (`school_div_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `acadah_class_level_ibfk_4` FOREIGN KEY (`level_id`) REFERENCES `acadah_app_level` (`level_id`);

--
-- Constraints for table `acadah_parent`
--
ALTER TABLE `acadah_parent`
  ADD CONSTRAINT `acadah_parent_ibfk_1` FOREIGN KEY (`parent_id`) REFERENCES `acadah_users` (`user_id`) ON UPDATE CASCADE;

--
-- Constraints for table `acadah_parent_student`
--
ALTER TABLE `acadah_parent_student`
  ADD CONSTRAINT `acadah_parent_student_ibfk_1` FOREIGN KEY (`parent_id`) REFERENCES `acadah_users` (`user_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `acadah_parent_student_ibfk_2` FOREIGN KEY (`student_id`) REFERENCES `acadah_users` (`user_id`) ON UPDATE CASCADE;

--
-- Constraints for table `acadah_school_div`
--
ALTER TABLE `acadah_school_div`
  ADD CONSTRAINT `acadah_school_div_ibfk_1` FOREIGN KEY (`sch_id`) REFERENCES `acadah_school` (`sch_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `acadah_school_div_ibfk_2` FOREIGN KEY (`school_div_id`) REFERENCES `acadah_app_div` (`school_div_id`) ON UPDATE CASCADE;

--
-- Constraints for table `acadah_school_div_subject`
--
ALTER TABLE `acadah_school_div_subject`
  ADD CONSTRAINT `acadah_school_div_subject_ibfk_1` FOREIGN KEY (`subject_id`) REFERENCES `acadah_app_subject` (`subject_id`),
  ADD CONSTRAINT `acadah_school_div_subject_ibfk_2` FOREIGN KEY (`sch_div_id`) REFERENCES `acadah_app_div` (`school_div_id`);

--
-- Constraints for table `acadah_school_modules`
--
ALTER TABLE `acadah_school_modules`
  ADD CONSTRAINT `acadah_school_modules_ibfk_1` FOREIGN KEY (`module_id`) REFERENCES `acadah_app_modules` (`module_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `acadah_school_modules_ibfk_2` FOREIGN KEY (`sch_id`) REFERENCES `acadah_school` (`sch_id`) ON UPDATE CASCADE;

--
-- Constraints for table `acadah_school_modules_actions`
--
ALTER TABLE `acadah_school_modules_actions`
  ADD CONSTRAINT `acadah_school_modules_actions_ibfk_1` FOREIGN KEY (`action_id`) REFERENCES `acadah_app_modules_actions` (`action_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `acadah_school_modules_actions_ibfk_2` FOREIGN KEY (`sch_id`) REFERENCES `acadah_school` (`sch_id`) ON UPDATE CASCADE;

--
-- Constraints for table `acadah_school_session`
--
ALTER TABLE `acadah_school_session`
  ADD CONSTRAINT `acadah_school_session_ibfk_1` FOREIGN KEY (`session_id`) REFERENCES `acadah_app_session` (`session_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `acadah_school_session_ibfk_2` FOREIGN KEY (`sch_id`) REFERENCES `acadah_school` (`sch_id`) ON UPDATE CASCADE;

--
-- Constraints for table `acadah_school_subject`
--
ALTER TABLE `acadah_school_subject`
  ADD CONSTRAINT `acadah_school_subject_ibfk_1` FOREIGN KEY (`sch_id`) REFERENCES `acadah_school` (`sch_id`) ON UPDATE CASCADE;

--
-- Constraints for table `acadah_sport_house`
--
ALTER TABLE `acadah_sport_house`
  ADD CONSTRAINT `acadah_sport_house_ibfk_1` FOREIGN KEY (`sch_id`) REFERENCES `acadah_school` (`sch_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `acadah_sport_house_ibfk_2` FOREIGN KEY (`sport_house_master_id`) REFERENCES `acadah_users` (`user_id`) ON UPDATE CASCADE;

--
-- Constraints for table `acadah_staff_subjects`
--
ALTER TABLE `acadah_staff_subjects`
  ADD CONSTRAINT `acadah_staff_subjects_ibfk_1` FOREIGN KEY (`sch_id`) REFERENCES `acadah_school` (`sch_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `acadah_staff_subjects_ibfk_2` FOREIGN KEY (`subject_id`) REFERENCES `acadah_app_subject` (`subject_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `acadah_staff_subjects_ibfk_4` FOREIGN KEY (`staff_id`) REFERENCES `acadah_staff` (`staff_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `acadah_staff_subjects_ibfk_5` FOREIGN KEY (`ts_id`) REFERENCES `acadah_app_session` (`session_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `acadah_staff_subjects_ibfk_6` FOREIGN KEY (`class_details_id`) REFERENCES `acadah_class_details` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `acadah_student`
--
ALTER TABLE `acadah_student`
  ADD CONSTRAINT `acadah_student_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `acadah_users` (`user_id`) ON UPDATE CASCADE;

--
-- Constraints for table `acadah_student_reg`
--
ALTER TABLE `acadah_student_reg`
  ADD CONSTRAINT `acadah_student_reg_ibfk_2` FOREIGN KEY (`class_details_id`) REFERENCES `acadah_class_details` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `acadah_student_reg_ibfk_4` FOREIGN KEY (`ts_id`) REFERENCES `acadah_app_term_session` (`ts_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `acadah_student_reg_ibfk_5` FOREIGN KEY (`student_id`) REFERENCES `acadah_student` (`student_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
