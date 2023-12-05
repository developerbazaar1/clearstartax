-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 05, 2023 at 07:41 AM
-- Server version: 10.5.22-MariaDB-cll-lve
-- PHP Version: 8.1.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pragyadbtechserv_clearstarttaxpay`
--

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
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `id` int(11) NOT NULL,
  `question` text DEFAULT NULL,
  `answer` text DEFAULT NULL,
  `type` enum('processing','service') NOT NULL DEFAULT 'processing',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`id`, `question`, `answer`, `type`, `created_at`, `updated_at`) VALUES
(1, 'How long does the process take to start seeing results?', 'The timeline varies depending on your specific situation. Some clients may see immediate relief from levies or garnishments, while more complicated cases can take several months to resolve.', 'processing', '2023-09-15 10:16:52', NULL),
(2, 'What documents do I need to provide?', 'As you move through different stages of the process, we\'ll ask for various documents. Our team will guide you on what\'s needed at each step to make sure your case is handled efficiently.', 'processing', '2023-09-15 10:16:52', NULL),
(3, 'What happens after my initial consultation?', 'We\'ll start by performing a detailed investigation into your tax issue, which will guide the strategy we develop for resolution.', 'processing', '2023-09-15 10:16:52', NULL),
(4, 'How soon can you stop wage garnishments or levies?', 'In some cases, we can negotiate a halt within 48-72 hours, but this varies case by case.', 'processing', '2023-09-15 10:16:52', NULL),
(5, 'Can you guarantee a reduction in my tax debt?', 'No, we can\'t guarantee a reduction, but we do promise to work diligently to secure the best possible resolution for you.', 'processing', '2023-09-15 10:16:52', NULL),
(6, 'What happens if the IRS rejects the settlement proposal?', 'We will reevaluate your case and explore alternative options for resolution.', 'processing', '2023-09-19 13:28:27', NULL),
(7, 'Will this affect my credit score?', 'Tax relief itself generally does not affect your credit score, but unresolved tax issues can.', 'processing', '2023-09-19 13:28:27', NULL),
(8, 'Do you handle state taxes as well as federal?', 'Yes, we can assist with both state and federal tax issues.', 'processing', '2023-09-19 13:29:11', NULL),
(9, 'What\'s the difference between an Offer in Compromise and a Payment Plan?', 'An Offer in Compromise is a settlement for less than the full amount owed, while a Payment Plan involves paying the debt over time.', 'processing', '2023-09-19 13:29:11', NULL),
(10, 'Do I need to inform the IRS that I\'ve hired a tax relief service?', 'You don\'t have to, but we will file a Power of Attorney form which informs the IRS that we are representing you.', 'processing', '2023-09-19 13:29:49', NULL),
(11, 'How does the investigation phase work in detail?', 'We review all tax transcripts, analyze your financial situation, and determine the best course of action.', 'processing', '2023-09-19 13:29:49', NULL),
(12, 'Can you remove penalties and interest?', 'While we can\'t guarantee it, we can often negotiate for the removal or reduction of penalties and interest.', 'processing', '2023-09-19 13:30:59', NULL),
(13, 'Do you work with businesses as well as individuals?', 'Yes, we assist both individual taxpayers and businesses.', 'processing', '2023-09-19 13:30:59', NULL),
(14, 'How long does it usually take to hear back from the IRS once a proposal is submitted?', 'Time frame for a response from the IRS can vary. Depending on the program you\'re in and the complexity of your case, you could hear back in a matter of days or it could take up to a year.', 'processing', '2023-09-19 13:31:37', NULL),
(15, 'Do I need to be current on my tax filings to work with you?', 'Yes, you must be up-to-date with your tax filings to qualify for the IRS Fresh Start Program. We can help you catch up if you\'re behind.', 'processing', '2023-09-19 13:31:37', NULL),
(16, 'What kinds of tax debt are not eligible for relief?', 'Payroll taxes and fraud penalties are generally not eligible for relief.', 'processing', '2023-09-19 13:32:11', NULL),
(17, 'How does power of attorney work in this context?', 'It allows us to represent you before the IRS, enabling us to negotiate and take actions on your behalf.', 'processing', '2023-09-19 13:32:11', NULL),
(18, 'How do I get in touch with someone about my case?', 'Call us at 888-235-0004 and customer service representatives will help you out.', 'service', '2023-09-19 13:38:02', NULL),
(19, 'Why do we request more information as we go along?', 'The type of information we need changes as your case progresses. We\'ll guide you on what additional documents or details are required at each stage.', 'service', '2023-09-19 13:38:02', NULL),
(20, 'What\'s the best way to send you my documents securely?', 'We recommend using our secure client portal for all document submissions. Look for the “Documents” tab. You can also email us docs@clearstarttax.com or mail us your documents at 2211 Michelson Dr Suite 900, Irvine, CA 92612.', 'service', '2023-09-19 13:38:42', NULL),
(21, 'What are your customer service hours?', 'We\'re available from 8 am to 5 pm PST, Monday to Friday.', 'service', '2023-09-19 13:38:42', NULL),
(22, 'How often will I receive updates on my case?', 'You\'ll be updated at each significant stage your case reaches. Additionally, you can check the status of your case at any time through the dashboard in our portal.', 'service', '2023-09-19 13:39:19', NULL),
(23, 'Is there a way to track the progress of my case online?', 'Yes, you can use our client portal to see updates in the dashboard page or click more info on the top left under your case id.', 'service', '2023-09-19 13:39:19', NULL),
(24, 'What do I do if I have an issue or complaint?', 'You can contact our customer service department at 888-235-0004, who will address your concerns as quickly as possible.', 'service', '2023-09-19 13:39:59', NULL),
(25, 'Do you have any customer testimonials or case studies I can look at?', 'Yes, we have testimonials and case studies available on our website (https://clearstarttax.com/testimonials/).', 'service', '2023-09-19 13:39:59', NULL),
(26, 'What are the most common roadblocks or issues clients face during the process?', 'Common issues include incomplete documentation and failure to respond to requests in a timely manner.', 'service', '2023-09-19 13:40:38', NULL),
(27, 'Who will be my main point of contact throughout the process?', 'You won\'t have a single point of contact. Instead, our customer service team is trained to assist you regardless of what stage your case is in. They can pull up your details and give you the most current information.', 'service', '2023-09-19 13:40:38', NULL),
(28, 'Can family members contact you on my behalf?', 'Only if we have written authorization to discuss your case with them.', 'service', '2023-09-19 13:41:14', NULL),
(29, 'What happens if I miss a scheduled payment to you or to the IRS?', 'Missing a payment could jeopardize your agreement with the IRS and may incur additional fees from us. Please contact us at 888-235-0004 asap if this is the case.', 'service', '2023-09-19 13:41:14', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `fq`
--

CREATE TABLE `fq` (
  `id` int(11) NOT NULL,
  `user_id` text DEFAULT NULL,
  `Reference` text DEFAULT NULL,
  `Status` text DEFAULT NULL,
  `Login_username` text DEFAULT NULL,
  `Login_email` text DEFAULT NULL,
  `Last_Name` text DEFAULT NULL,
  `First_Name` text DEFAULT NULL,
  `Marital_Status` text DEFAULT NULL,
  `Date_Of_Birth` text DEFAULT NULL,
  `SSN` text DEFAULT NULL,
  `Married_Filing_Status` text DEFAULT NULL,
  `Street_Address` text DEFAULT NULL,
  `Address_Line_2` text DEFAULT NULL,
  `City` text DEFAULT NULL,
  `State` text DEFAULT NULL,
  `Zip_Code` text DEFAULT NULL,
  `Rent_Or_Own` text DEFAULT NULL,
  `County_Of_Residence` text DEFAULT NULL,
  `Primary_Phone_Number` text DEFAULT NULL,
  `snd_Contact_Phone_Number` text DEFAULT NULL,
  `Driver_License` text DEFAULT NULL,
  `Do_you_have_any_dependents_EXCLUDING_yourself_and_your_spouse` text DEFAULT NULL,
  `How_many_dependents_do_you_have` text DEFAULT NULL,
  `Client_Employment_Status` text DEFAULT NULL,
  `Cash_on_Hand_Amount` text DEFAULT NULL,
  `How_Many_Bank_Accounts_Do_You_Have` text DEFAULT NULL,
  `Do_You_Have_Any_Investments` text DEFAULT NULL,
  `Can_you_take_a_loan_against_your_401k_Account` text DEFAULT NULL,
  `Do_You_Have_Any_Credit_Cards` text DEFAULT NULL,
  `How_many_type_of_investments_do_you_have` text DEFAULT NULL,
  `How_many_Credit_Cards_Do_You_Have` text DEFAULT NULL,
  `Do_You_Have_Life_Insurance` text DEFAULT NULL,
  `How_Many_Life_Insurance_Policy_Do_You_Have` text DEFAULT NULL,
  `Do_You_Own_Any_Real_Estate` text DEFAULT NULL,
  `How_Many_Properties_Do_You_Own` text DEFAULT NULL,
  `Do_You_Own_A_Motor_Vehicle` text DEFAULT NULL,
  `How_Many_Motor_Vehicles_Do_You_Own` text DEFAULT NULL,
  `Do_You_Have_Any_Other_Personal_Assets` text DEFAULT NULL,
  `How_Many_Other_Personal_Assets_Do_You_Have` text DEFAULT NULL,
  `Interest_Dividends` text DEFAULT NULL,
  `Net_Self_Employed_Business_Income` text DEFAULT NULL,
  `Net_Rental_Income` text DEFAULT NULL,
  `Distribution` text DEFAULT NULL,
  `Social_Security_Income` text DEFAULT NULL,
  `Alimony_Income` text DEFAULT NULL,
  `Retirement_Income_Pension` text DEFAULT NULL,
  `Other_Income` text DEFAULT NULL,
  `Total_House_Hold_Income` text DEFAULT NULL,
  `Food_Clothing_Misc` text DEFAULT NULL,
  `Rent_Mortgage` text DEFAULT NULL,
  `Utilities` text DEFAULT NULL,
  `Vehicles_Ownership_Costs` text DEFAULT NULL,
  `Vehicles_Operating_Costs` text DEFAULT NULL,
  `Public_Transportation` text DEFAULT NULL,
  `Health_Insurance` text DEFAULT NULL,
  `Out_of_Pocket_Health_Costs` text DEFAULT NULL,
  `Court_Ordered_Payments` text DEFAULT NULL,
  `Child_Care` text DEFAULT NULL,
  `Life_Insurance` text DEFAULT NULL,
  `Taxes` text DEFAULT NULL,
  `Other_Secure_Debts` text DEFAULT NULL,
  `Other_Secure_Debts1` text DEFAULT NULL,
  `TotHousehold_Expense` text DEFAULT NULL,
  `Are_you_the_beneficiary_of_a_trust_estate_or_life_insurance_po` text DEFAULT NULL,
  `Are_you_currently_in_bankruptcy` text DEFAULT NULL,
  `Discharge_Dismissal_Date` text DEFAULT NULL,
  `Have_you_been_party_to_a_lawsuit` text DEFAULT NULL,
  `Date_the_lawsuit_was_resolved` text DEFAULT NULL,
  `In_the_past_10_years_have_you_transferred_any_assets_for_less_t` text DEFAULT NULL,
  `Date_the_asset_was_transferred` text DEFAULT NULL,
  `In_the_past_3_year_have_you_transferred_any_real_property` text DEFAULT NULL,
  `List_the_type_of_property_and_date_of_the_transfer` text DEFAULT NULL,
  `Print_Full_Name` text DEFAULT NULL,
  `Date` text DEFAULT NULL,
  `Signature` text DEFAULT NULL,
  `spouse_first_name` text DEFAULT NULL,
  `spouse_last_name` text DEFAULT NULL,
  `spouse_Driver_License` text DEFAULT NULL,
  `spouse_ssn` text DEFAULT NULL,
  `spouse_date_of_birth` text DEFAULT NULL,
  `spouse_employment_status` text DEFAULT NULL,
  `Spouse_Cash_on_Hand_Amount` text DEFAULT NULL,
  `How_Many_Bank_Accounts_Spouse_Have` text DEFAULT NULL,
  `Spouse_Wages` text DEFAULT NULL,
  `Spouse_Social_Security_Income` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fq`
--

INSERT INTO `fq` (`id`, `user_id`, `Reference`, `Status`, `Login_username`, `Login_email`, `Last_Name`, `First_Name`, `Marital_Status`, `Date_Of_Birth`, `SSN`, `Married_Filing_Status`, `Street_Address`, `Address_Line_2`, `City`, `State`, `Zip_Code`, `Rent_Or_Own`, `County_Of_Residence`, `Primary_Phone_Number`, `snd_Contact_Phone_Number`, `Driver_License`, `Do_you_have_any_dependents_EXCLUDING_yourself_and_your_spouse`, `How_many_dependents_do_you_have`, `Client_Employment_Status`, `Cash_on_Hand_Amount`, `How_Many_Bank_Accounts_Do_You_Have`, `Do_You_Have_Any_Investments`, `Can_you_take_a_loan_against_your_401k_Account`, `Do_You_Have_Any_Credit_Cards`, `How_many_type_of_investments_do_you_have`, `How_many_Credit_Cards_Do_You_Have`, `Do_You_Have_Life_Insurance`, `How_Many_Life_Insurance_Policy_Do_You_Have`, `Do_You_Own_Any_Real_Estate`, `How_Many_Properties_Do_You_Own`, `Do_You_Own_A_Motor_Vehicle`, `How_Many_Motor_Vehicles_Do_You_Own`, `Do_You_Have_Any_Other_Personal_Assets`, `How_Many_Other_Personal_Assets_Do_You_Have`, `Interest_Dividends`, `Net_Self_Employed_Business_Income`, `Net_Rental_Income`, `Distribution`, `Social_Security_Income`, `Alimony_Income`, `Retirement_Income_Pension`, `Other_Income`, `Total_House_Hold_Income`, `Food_Clothing_Misc`, `Rent_Mortgage`, `Utilities`, `Vehicles_Ownership_Costs`, `Vehicles_Operating_Costs`, `Public_Transportation`, `Health_Insurance`, `Out_of_Pocket_Health_Costs`, `Court_Ordered_Payments`, `Child_Care`, `Life_Insurance`, `Taxes`, `Other_Secure_Debts`, `Other_Secure_Debts1`, `TotHousehold_Expense`, `Are_you_the_beneficiary_of_a_trust_estate_or_life_insurance_po`, `Are_you_currently_in_bankruptcy`, `Discharge_Dismissal_Date`, `Have_you_been_party_to_a_lawsuit`, `Date_the_lawsuit_was_resolved`, `In_the_past_10_years_have_you_transferred_any_assets_for_less_t`, `Date_the_asset_was_transferred`, `In_the_past_3_year_have_you_transferred_any_real_property`, `List_the_type_of_property_and_date_of_the_transfer`, `Print_Full_Name`, `Date`, `Signature`, `spouse_first_name`, `spouse_last_name`, `spouse_Driver_License`, `spouse_ssn`, `spouse_date_of_birth`, `spouse_employment_status`, `Spouse_Cash_on_Hand_Amount`, `How_Many_Bank_Accounts_Spouse_Have`, `Spouse_Wages`, `Spouse_Social_Security_Income`, `created_at`, `updated_at`) VALUES
(311, '13', '653f4ec490208', 'Completed', 'Christian Ha', 'management@clearstarttax.com', 'test', 'test', 'Single', '2023-10-31', 'test', NULL, 'test', 'test', 'test', 'est', 'et', 'test', 'estest', '543543', '5435435', 'test', 'have any dependents no', '0', 'Wage Earner', '5345', '1', 'Yes', 'No', 'No', '2', '0', 'No', '0', 'No', '0', 'No', '0', 'No', '0', '3', '3', '3', '33', '3', '3', '3', '3', '3', '3', '3', '3', '3', '3', '3', '3', '5', '5', '5', '5', '5', '5', '5', '55', 'No', 'No', NULL, 'No', NULL, 'No', NULL, 'No', NULL, 'treter', '2023-10-27', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0', '0', '2023-10-30 01:05:48', '2023-10-30 01:05:48'),
(312, '13', '653f611230516', 'inprogress', 'Christian Ha', 'management@clearstarttax.com', 'hjghj', 'hj', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL, '0', NULL, NULL, NULL, '0', '0', NULL, '0', NULL, '0', NULL, '0', NULL, '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0', '0', '2023-10-30 02:23:54', '2023-10-30 02:23:54');

-- --------------------------------------------------------

--
-- Table structure for table `fq_bankaccount`
--

CREATE TABLE `fq_bankaccount` (
  `id` int(11) NOT NULL,
  `bank` text DEFAULT NULL,
  `fq_id` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fq_bankaccount`
--

INSERT INTO `fq_bankaccount` (`id`, `bank`, `fq_id`, `created_at`, `updated_at`) VALUES
(265, 'upload/fq/2534401698645687.png', '303', '2023-10-30 00:31:27', '2023-10-30 00:31:27'),
(266, 'upload/fq/2534401698645687.png', '304', '2023-10-30 00:33:44', '2023-10-30 00:33:44'),
(267, 'upload/fq/2534401698645687.png', '305', '2023-10-30 00:42:27', '2023-10-30 00:42:27'),
(268, 'upload/fq/2534401698645687.png', '306', '2023-10-30 00:44:56', '2023-10-30 00:44:56'),
(269, 'upload/fq/2534401698645687.png', '307', '2023-10-30 00:49:18', '2023-10-30 00:49:18'),
(270, 'upload/fq/2534401698645687.png', '308', '2023-10-30 00:58:35', '2023-10-30 00:58:35'),
(271, 'upload/fq/2534401698645687.png', '309', '2023-10-30 01:01:26', '2023-10-30 01:01:26'),
(272, 'upload/fq/2534401698645687.png', '310', '2023-10-30 01:03:21', '2023-10-30 01:03:21'),
(273, 'upload/fq/2534401698645687.png', '311', '2023-10-30 01:05:48', '2023-10-30 01:05:48');

-- --------------------------------------------------------

--
-- Table structure for table `fq_bankspouseaccount`
--

CREATE TABLE `fq_bankspouseaccount` (
  `id` int(11) NOT NULL,
  `bankspouse` text DEFAULT NULL,
  `fq_id` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fq_creditcards`
--

CREATE TABLE `fq_creditcards` (
  `id` int(11) NOT NULL,
  `Creditcards` text DEFAULT NULL,
  `fq_id` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fq_dependent`
--

CREATE TABLE `fq_dependent` (
  `id` int(11) NOT NULL,
  `Name` text DEFAULT NULL,
  `Date_Of_Birth` text DEFAULT NULL,
  `SSN` text DEFAULT NULL,
  `Relationship` text DEFAULT NULL,
  `fq_id` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fq_estate`
--

CREATE TABLE `fq_estate` (
  `id` int(11) NOT NULL,
  `Property_address` text DEFAULT NULL,
  `Country` text DEFAULT NULL,
  `Mortgage_lender` text DEFAULT NULL,
  `Purchase_date` text DEFAULT NULL,
  `Fair_market_value` text DEFAULT NULL,
  `Loan_balance` text DEFAULT NULL,
  `Monthly_payment` text DEFAULT NULL,
  `Date_of_final` text DEFAULT NULL,
  `Monthly_property_tax` text DEFAULT NULL,
  `How_is_title_held` text DEFAULT NULL,
  `property_document` text DEFAULT NULL,
  `fq_id` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fq_investments`
--

CREATE TABLE `fq_investments` (
  `id` int(11) NOT NULL,
  `Type_of_investment` text DEFAULT NULL,
  `Company_name` text DEFAULT NULL,
  `Current_value` text DEFAULT NULL,
  `Balance` text DEFAULT NULL,
  `Payment` text DEFAULT NULL,
  `fq_id` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fq_investments`
--

INSERT INTO `fq_investments` (`id`, `Type_of_investment`, `Company_name`, `Current_value`, `Balance`, `Payment`, `fq_id`, `created_at`, `updated_at`) VALUES
(111, 'gfg', 'gdfg', 'dfgfd', 'gr', 'gfg', '304', '2023-10-30 00:33:44', '2023-10-30 00:33:44'),
(112, 'gd', 'tret', 'erter', 'tertt', 'ter', '304', '2023-10-30 00:33:44', '2023-10-30 00:33:44'),
(113, 'gfg', 'gdfg', 'dfgfd', 'gr', 'gfg', '305', '2023-10-30 00:42:27', '2023-10-30 00:42:27'),
(114, 'gd', 'tret', 'erter', 'tertt', 'ter', '305', '2023-10-30 00:42:27', '2023-10-30 00:42:27'),
(115, 'gfg', 'gdfg', 'dfgfd', 'gr', 'gfg', '306', '2023-10-30 00:44:56', '2023-10-30 00:44:56'),
(116, 'gd', 'tret', 'erter', 'tertt', 'ter', '306', '2023-10-30 00:44:56', '2023-10-30 00:44:56'),
(117, 'gfg', 'gdfg', 'dfgfd', 'gr', 'gfg', '307', '2023-10-30 00:49:18', '2023-10-30 00:49:18'),
(118, 'gd', 'tret', 'erter', 'tertt', 'ter', '307', '2023-10-30 00:49:18', '2023-10-30 00:49:18'),
(119, 'gfg', 'gdfg', 'dfgfd', 'gr', 'gfg', '308', '2023-10-30 00:58:35', '2023-10-30 00:58:35'),
(120, 'gd', 'tret', 'erter', 'tertt', 'ter', '308', '2023-10-30 00:58:35', '2023-10-30 00:58:35'),
(121, 'gfg', 'gdfg', 'dfgfd', 'gr', 'gfg', '309', '2023-10-30 01:01:26', '2023-10-30 01:01:26'),
(122, 'gd', 'tret', 'erter', 'tertt', 'ter', '309', '2023-10-30 01:01:26', '2023-10-30 01:01:26'),
(123, 'gfg', 'gdfg', 'dfgfd', 'gr', 'gfg', '310', '2023-10-30 01:03:21', '2023-10-30 01:03:21'),
(124, 'gd', 'tret', 'erter', 'tertt', 'ter', '310', '2023-10-30 01:03:21', '2023-10-30 01:03:21'),
(125, 'gfg', 'gdfg', 'dfgfd', 'gr', 'gfg', '311', '2023-10-30 01:05:48', '2023-10-30 01:05:48'),
(126, 'gd', 'tret', 'erter', 'tertt', 'ter', '311', '2023-10-30 01:05:48', '2023-10-30 01:05:48');

-- --------------------------------------------------------

--
-- Table structure for table `fq_lifeinsure`
--

CREATE TABLE `fq_lifeinsure` (
  `id` int(11) NOT NULL,
  `Policy_number` text DEFAULT NULL,
  `Owner_of_policy` text DEFAULT NULL,
  `Current_cash_value` text DEFAULT NULL,
  `Outstanding_loan_balance` text DEFAULT NULL,
  `policy_document` text DEFAULT NULL,
  `fq_id` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fq_personal`
--

CREATE TABLE `fq_personal` (
  `id` int(11) NOT NULL,
  `Description_of_asset` text DEFAULT NULL,
  `Date_of_purchase` text DEFAULT NULL,
  `Current_value` text DEFAULT NULL,
  `Loan_balance` text DEFAULT NULL,
  `Name_of_lender` text DEFAULT NULL,
  `Date_of_final_payment` text DEFAULT NULL,
  `fq_id` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fq_vehical`
--

CREATE TABLE `fq_vehical` (
  `id` int(11) NOT NULL,
  `Make_and_model` text DEFAULT NULL,
  `Year` text DEFAULT NULL,
  `Mileage` text DEFAULT NULL,
  `Lease_or_own` text DEFAULT NULL,
  `Date_of_purchased` text DEFAULT NULL,
  `Date_of_final_payment` text DEFAULT NULL,
  `Current_value` text DEFAULT NULL,
  `Current_loan_value` text DEFAULT NULL,
  `Monthly_payment` text DEFAULT NULL,
  `Name_of_lender` text DEFAULT NULL,
  `Is_vehicle_1_financed_or_leased` text DEFAULT NULL,
  `vehicleup` text DEFAULT NULL,
  `fq_id` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1);

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
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_reset_tokens`
--

INSERT INTO `password_reset_tokens` (`email`, `token`, `created_at`) VALUES
('pragyachouhan76666@gmail.com', '$2y$10$UMFJtIlme8X4DmEaS1JJiOuaw8kj7D0nvNjneqjuQ/gVajhZTDw0q', '2023-09-11 04:04:21'),
('pragyakushwah2017@gmail.com', '$2y$10$XEHoDWwFGrHZCzIDyehpg.ucMp0DAWUKE/bcHbVFp7yG.qHRjb6R2', '2023-10-05 06:21:16');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `id` int(11) NOT NULL,
  `status` text DEFAULT NULL,
  `status_code` text DEFAULT NULL,
  `what_this_means` text DEFAULT NULL,
  `what_happens_next` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`id`, `status`, `status_code`, `what_this_means`, `what_happens_next`, `created_at`, `updated_at`) VALUES
(1, 'MANAGEMENT: Management Only', '350', 'Your case has been escalated and is currently labeled as \"Management Only.\" This signifies that specific complexities or unique elements of your case require direct involvement and oversight by senior management personnel.\r\n', 'Senior management will comprehensively review all aspects of your case, making determinations or decisions as needed. They may liaise directly with you for additional information or provide clarifications on certain matters. Once management has reached a conclusion or implemented necessary changes, your case may either proceed to the next appropriate stage or you\'ll be notified about the recommended course of action.', '2023-09-13 06:49:54', NULL),
(2, 'Soft Cancel - Pending', '205', 'Your cancellation request is in a pending state, awaiting further action.', 'You\'ll be contacted by our retention team to confirm whether you wish to proceed with the cancellation.', '2023-09-13 06:49:54', NULL),
(3, 'Soft Cancel - Pending (Chargeback)', '363', 'You have initiated a chargeback request along with your soft cancel.', 'Our finance team will investigate the chargeback and communicate with you to resolve the issue.', '2023-09-13 06:51:12', NULL),
(4, 'Soft Cancel - Pending (Lender Chargeback)', '401', 'Your lender has initiated a chargeback request along with your soft cancel status.', 'Our finance team will liaise with the lender and you to resolve the chargeback and discuss next steps.', '2023-09-13 06:51:12', NULL),
(5, 'Soft Cancel - Followup', '364', 'You\'re in a follow-up stage post-cancellation request.', 'Our customer retention team will contact you to discuss the reasons for the soft cancel and if there is any way to resolve the issues.', '2023-09-13 06:52:25', NULL),
(6, 'Soft Cancel - Priority Followup (Client wants to continue)', '374', 'You have indicated a desire to continue the service after initially starting the cancellation process.', 'Our team will reach out to address any concerns or adjustments needed to retain your business.', '2023-09-13 06:52:25', NULL),
(7, 'Soft Cancel - Cancel', '358', 'Your cancellation request has been finalized.', 'All ongoing services will cease.', '2023-09-13 06:53:31', NULL),
(8, 'Soft Cancel - Retained', '206', 'After the soft cancel process, you\'ve decided to continue with our services.', 'Your case will pick up from where it was paused, and you\'ll continue to receive the services you\'ve enrolled for.', '2023-09-13 06:53:31', NULL),
(9, 'Return File - Need more information', '255', 'Further information is needed to proceed with your case.', 'You\'ll be contacted to provide the additional information required.', '2023-09-13 06:54:43', NULL),
(10, 'Return File - File Fixed', '256', 'Any issues with your file have been addressed, and it\'s ready to proceed.', 'Your file moves to the next phase.', '2023-09-13 06:54:43', NULL),
(11, 'Resolution Pending: Ready To Present (Appt. Pending)', '260', 'Your investigation has been completed! Your agent is now ready to discuss the results of the investigation and your resolution plan.', 'You will be contacted shortly to schedule an appointment. \r\n\r\nAlternatively, you can immediately schedule the appointment yourself. Just please click on the yellow highlighted message above or the “appointment tab” to select a time that suits you.', '2023-09-13 06:55:50', NULL),
(12, 'Resolution Pending: In Progress', '399', 'Your resolution plan is currently pending and waiting for you to confirm to move forward. ', 'Once you confirm to move forward, your case will move into workflow.', '2023-09-13 06:55:50', NULL),
(13, 'Resolution Pending: Additional (Urgent)', '400', 'Urgent additional information or actions are required to proceed with your resolution.', 'Expect prompt communication for urgent matters that need to be addressed.', '2023-09-13 06:56:57', NULL),
(14, 'Resolution Completed: Resolution', '302', 'Your case has been submitted to be approved to move forward with the resolution.', 'Once approved, we will move forward with the necessary steps to implement the proposed solution(s).', '2023-09-13 06:56:57', NULL),
(15, 'Resolution Completed: Tax Prep', '301', 'Your case has been submitted to be approved to move forward with Tax Preparation services.', 'Once approved, our tax professionals will begin the process of preparing and filing any necessary tax documents.', '2023-09-13 06:58:09', NULL),
(16, 'Resolution Completed: No Resolution Required', '355', 'It\'s been determined that no resolution is required for your situation.', 'Your case will be closed and you\'ll be notified accordingly.', '2023-09-13 06:58:09', NULL),
(17, 'Resolution Completed: Did not want to move forward with resolution', '377', 'You\'ve chosen not to proceed with any of the proposed resolutions.', 'Your case will be closed.', '2023-09-13 06:58:50', NULL),
(18, 'Finance Pending: Wire Transfer Pending', '352', 'A wire transfer for your case is currently pending.', 'Once the wire transfer is complete, your case will proceed to the next stage.', '2023-09-13 07:04:24', NULL),
(19, 'Payment Defaulted - Lender Requested Work Paused', '431', 'Your lender has requested that work on your case be paused due to a pending payment.', 'Work on your case will resume once the lender payment issue is resolved.', '2023-09-13 07:04:24', NULL),
(20, 'Pending Approval: Phase 1', '415', 'Your case is in the initial phase of awaiting approval.', 'After approval is received, your case moves to the next appropriate stage.', '2023-09-13 07:05:23', NULL),
(21, 'Approved: Tax Investigation', '417', 'The tax investigation related to your case has been approved.', 'Your case moves forward to the next appropriate phase which could be tax prep or resolutions.', '2023-09-13 07:05:23', NULL),
(22, 'Approved: Tax Prep Only', '418', 'Your case has been approved for tax preparation services only.', 'Your documents will be prepared and sent to you for review and filing.', '2023-09-13 07:06:25', NULL),
(23, 'Approved: Federal Resolution + State Resolution + Tax Prep', '402', 'All three aspects of your case—Federal, State, and Tax Preparation—have been approved.', 'Your case will go through each of these resolution steps sequentially or concurrently based on the urgency and requirements.', '2023-09-13 07:06:25', NULL),
(24, 'Approved: Federal Resolution + State Resolution', '407', 'Both your Federal and State tax resolutions services have been approved.', 'You will now proceed to the next steps for each resolution, which may include finalizing payment plans or other agreed-upon actions.', '2023-09-13 07:07:27', NULL),
(25, 'Approved: Federal Resolution + Tax Prep', '262', 'Your Federal tax resolution and your tax preparation services has been approved.', 'Your Federal tax issues will be resolved as per the agreed-upon terms, and your tax returns will be filed.', '2023-09-13 07:07:27', NULL),
(26, 'Approved: State Resolution + Tax Prep', '403', 'Your State tax resolution and your tax preparation services has been approve.', 'Your State tax issues will be resolved as per the agreed-upon terms, and your tax returns will be filed.\r\n', '2023-09-13 07:08:27', NULL),
(27, 'Approved: Federal Resolution Resolution Only', '337', 'Only your Federal tax resolution services has been approved.', 'We will proceed with the Federal tax resolution plan.', '2023-09-13 07:08:27', NULL),
(28, 'Approved: State Resolution Only', '333', 'Only your State tax resolution has been approved.', 'You\'ll proceed with the State tax resolution plan which may include payment plans, Offer in Compromise, or other actions.', '2023-09-13 07:09:22', NULL),
(29, 'Approved: Tax Prep Only', '332', 'Your tax preparation services has been approved.', 'Your tax returns will be filed, and you\'ll be informed of any refunds or payments due.', '2023-09-13 07:09:22', NULL),
(30, 'Investigation: Payment Pending', '11', 'Payment for the investigation phase is pending.', 'Once full payment is received, the investigation of your tax situation will begin.', '2023-09-13 07:10:32', NULL),
(31, 'Investigation: IRS Investigation Pending', '13', 'Your case is queued for investigation by the IRS.', 'Upon receiving necessary documents and payments, the IRS investigation will commence.', '2023-09-13 07:10:32', NULL),
(32, 'Investigation: IRS ID Verification Pending', '10', 'Your IRS identification is pending verification.', 'Once your ID is verified, the investigation or other relevant steps will continue.', '2023-09-13 07:11:31', NULL),
(33, 'Investigation: Tax Assessment Pending', '406', 'Your case is currently in the investigation phase, and we are awaiting the tax assessment from the IRS or the relevant state tax authority. This assessment will provide details on how much you owe, which will help in forming a resolution strategy.', 'Once the tax assessment is received, your case manager or customer service representative will review it to understand the scope and specifics of your tax obligations. This information will be used to plan the next steps for resolving your tax issues.', '2023-09-13 07:11:31', NULL),
(34, 'Investigation: State Investigation  Pending', '151', 'Your case is in the investigation phase, specifically focused on state tax obligations. We are currently waiting for pertinent information or documentation from the state tax authority to fully understand your tax situation.', 'After the state tax authority provides the necessary information, our team will review it carefully to identify the best course of action for your state tax resolution. You will be contacted to discuss these findings and possible solutions to move forward.', '2023-09-13 07:12:34', NULL),
(35, 'Investigation Complete- Pending Plan of Action', '253', 'The investigation of your case is complete, and it\'s pending a plan of action.', 'A case manager will review the investigation findings and develop a plan of action for your case.', '2023-09-13 07:12:34', NULL),
(36, 'Pending Plan Of Action - Need Additional Info', '354', 'Your case is currently in a holding phase called \"Pending Plan of Action.\" We have conducted our initial investigation, but before we can finalize the strategy for resolving your tax issues, we need additional information from you.', 'You will receive a communication from us detailing the specific documents or information we require. It\'s crucial to provide this information as promptly as possible to continue the resolution process. Once we receive the needed information, our team will finalize your Plan of Action and consult with you on next steps.', '2023-09-13 07:13:38', NULL),
(37, 'Pending Plan Of Action- Need additional Info - On Hold', '397', 'Your case is in the \"Pending Plan of Action\" stage, and we are waiting for additional information from you to proceed. However, due to specific circumstances, your case is currently on hold.', 'Your case will remain on hold until the additional required information is provided. You will not progress to the next stage of the process until we receive this information. It\'s essential to respond to our request for additional information as soon as you can to move your case forward. Once the information is received and reviewed, your case will be taken off hold, and we will proceed with finalizing your Plan of Action.', '2023-09-13 07:13:38', NULL),
(38, 'Tax Prep- Pending Docs (TO\'s)', '316', 'Documentation for tax preparation is currently pending, as specific documents or \'Tax Organizer\' forms are needed. This will enable us to prepare an accurate tax return that includes all relevant expenses and deductions.\r\n\r\nTo access the necessary forms, please click on the yellow highlighted message above.', 'Upon receiving the necessary documents, tax preparation will proceed.', '2023-09-13 07:14:36', NULL),
(39, 'Tax Prep- In Progress', '197', 'Your tax preparation for the current year is in progress.', 'You\'ll be updated on the progress, and once complete, you\'ll receive the prepared documents for review.', '2023-09-13 07:14:36', NULL),
(40, 'Tax Prep- Order Wage and Income', '356', 'We\'re in the process of ordering your wage and income transcripts.', 'Once these transcripts are received, they\'ll be reviewed and your tax preparation will continue.', '2023-09-13 07:15:33', NULL),
(41, 'Tax Prep- Extension', '314', 'An extension has been filed for your current year tax return.', 'You\'ll have additional time to submit the complete tax return. Make sure to gather all necessary documents.', '2023-09-13 07:15:33', NULL),
(42, 'Tax Prep- Extension Filed', '349', 'The extension for your current year tax return has been officially filed.', 'The clock is now ticking on the new extended deadline. Plan accordingly.', '2023-09-13 07:16:27', NULL),
(43, 'Tax Prep- Prepared and ready for Review/Send to client', '198', 'Your current year tax return is prepared and ready for your review.', 'You\'ll receive the document for review. Once you approve it, it will be e-filed.', '2023-09-13 07:16:27', NULL),
(44, 'Tax Prep- Sent to client- waiting for efile authorization from client', '199', 'The prepared tax return has been sent to you for your authorization to e-file.', 'Upon receiving your authorization, the tax return will be electronically filed with the IRS.', '2023-09-13 07:17:32', NULL),
(45, 'Tax Prep- Efile authorization received, pending Efile', '200', 'Your authorization for e-filing has been received.', 'Your tax return will be e-filed with the IRS, and you\'ll be notified of the submission status.', '2023-09-13 07:17:32', NULL),
(46, 'Tax Prep- Return E-Filed', '201', 'Your tax return has been successfully e-filed.', 'Wait for acknowledgement from the IRS. Depending on your tax situation, you may either receive a refund or have to make a payment.', '2023-09-13 07:18:32', NULL),
(47, 'Tax Prep- E-File Rejected', '389', 'Your e-filed tax return was rejected by the IRS.', 'You\'ll need to correct any errors and resubmit, or potentially file a paper return.', '2023-09-13 07:18:32', NULL),
(48, 'Tax Prep Back Years- Pending Docs (TO\'s)', '25', 'Documentation for tax preparation is currently pending, as specific documents or \'Tax Organizer\' forms are needed. This will enable us to prepare an accurate tax return that includes all relevant expenses and deductions.\r\n\r\nTo access the necessary forms, please click on the yellow highlighted message above.', 'Once the necessary documents are received, your tax preparation for the back years will proceed.', '2023-09-13 07:19:35', NULL),
(49, 'Tax Prep Back Years- In Progress', '26', 'Tax preparation for the back years is currently in progress.', 'Your returns for the back years are being prepared. Once complete, they will be sent to you for review.', '2023-09-13 07:19:35', NULL),
(50, 'Tax Prep- Order Wage and Income', '357', 'Wage and income transcripts are being ordered for the back years.', 'Once the transcripts are received, they\'ll be reviewed, and your tax preparation will continue.', '2023-09-13 07:20:31', NULL),
(51, 'Tax Prep Back Years- Prepared and ready for Review/Send to client', '196', 'Tax returns for the back years have been prepared and are ready for your review.', 'You will receive the returns for review. Once you approve, they will be filed accordingly.', '2023-09-13 07:20:31', NULL),
(52, 'Tax Prep Back Years- Sent to client waiting for review/efile authorization', '252', 'Your tax returns for previous years have been sent to you and are waiting for your review and authorization for e-filing.', 'Upon receiving your authorization, your back year tax returns will be e-filed with the IRS.', '2023-09-13 07:21:52', NULL),
(53, 'Tax Prep Back Years- Efile authorization received, pending Efile', '320', 'Your e-filing authorization for your back years\' tax returns has been received.', 'Your tax returns for the back years will be e-filed with the IRS, and you\'ll be notified of the submission status.', '2023-09-13 07:21:52', NULL),
(54, 'Tax Prep Back Years- Return E-Filed', '322', 'Your tax return for previous years has been successfully e-filed.', 'Wait for acknowledgement from the IRS. Depending on your tax situation, your case will be moved to the proper resolution phase.', '2023-09-13 07:23:18', NULL),
(55, 'Tax Prep Back Years- E-File Rejected', '390', 'The e-filed tax return for your back years was rejected by the IRS.', 'You\'ll need to correct any errors and resubmit, or potentially file a paper return.', '2023-09-13 07:23:18', NULL),
(56, 'Tax Prep Back Years- Awaiting Signature Pages', '408', 'Your tax return for previous years is awaiting your signature pages for verification.', 'Once the signature pages are received, your tax return will proceed to the next step, which could be e-filing or mailing.', '2023-09-13 07:24:18', NULL),
(57, 'Tax Prep Back Years- Signature Pages Received', '409', 'The signature pages for your tax returns for previous years have been received.', 'Your tax return will now be finalized for submission to the IRS.', '2023-09-13 07:24:18', NULL),
(58, 'Tax Prep Back Years- Mailed to IRS/State: pending next step', '258', 'Your back years\' tax returns have been mailed to the IRS or state tax authority and are pending the next step.', 'Wait for acknowledgement from the IRS. Depending on your tax situation, your case will be moved to the proper resolution phase.', '2023-09-13 07:25:20', NULL),
(59, 'Tax Prep Back Years- Updated Compliance call needed', '321', 'An updated compliance call is required for your back years\' tax returns.', 'You will receive a call to update or verify information. Compliance will then be re-evaluated.', '2023-09-13 07:25:20', NULL),
(60, 'Tax Prep Back Years- Updated Compliance Call Completed', '303', 'The updated compliance call for your back years\' tax returns has been completed.\r\n', 'Your case will be updated based on the new information and will move to the next appropriate step.', '2023-09-13 07:26:20', NULL),
(61, 'Federal Resolution- OIC Prep on hold/ Pending Upcoming Tax Year Filing', '385', 'Your Offer in Compromise (OIC) preparation is on hold pending the filing of your upcoming tax year return.', 'Once your upcoming tax year\'s return is filed and processed, OIC preparation will resume.', '2023-09-13 07:26:20', NULL),
(62, 'Federal Resolution- Pending Docs (FQ\'s/ Supporting Docs)', '286', 'Financial Questionnaires (FQs) or other supporting documentation are needed. The purpose is to compile a comprehensive list of your income and expenses to understand your financial situation and determine the necessary documents for proof. This will help us effectively demonstrate to the IRS why you are unable to repay your tax debt and assist in negotiating your tax liability.\r\n\r\nTo access the form, please click on the yellow highlighted message above.', 'Upon receipt of the necessary documents, your case will proceed to the next phase of Federal Resolution.', '2023-09-13 07:27:18', NULL),
(63, 'Federal Resolution- FQ\'s Received/ Preparing', '336', 'The Financial Questionnaires (FQs) have been received and your Federal Resolution is being prepared.', 'Your case will move to the preparation and submission of the necessary applications and forms to the IRS.', '2023-09-13 07:27:18', NULL),
(64, 'Federal Resolution- OIC In Progress', '287', 'Your Offer in Compromise (OIC) is currently in progress.', 'All necessary documents have been received and your OIC is being prepared by our tax professionals.', '2023-09-13 07:28:23', NULL),
(65, 'Federal Resolution- Pending Additional Docs/ Hardship Info', '288', 'Additional documentation or information regarding hardship is required to proceed with your Federal Resolution.', 'Upon receipt of the necessary information, your case will proceed to the next appropriate step.', '2023-09-13 07:28:23', NULL),
(66, 'Federal Resolution- OIC Completed/ Ready to mail', '289', 'Your Offer in Compromise (OIC) has been completed and is ready to be mailed.', 'A case manager will call you and go over the terms of the OIC and then it will be mailed to the client for review, signature and submission to the IRS.', '2023-09-13 07:29:23', NULL),
(67, 'Federal Resolution- OIC Mailed To Client To File/ Waiting On Confirmation', '290', 'The Offer in Compromise (OIC) has been mailed to you for filing, and we are waiting on confirmation that it has been filed.', 'After you have successfully mailed the offer to the IRS, we will monitor for IRS acknowledgment.', '2023-09-13 07:29:23', NULL),
(68, 'Federal Resolution- OIC Rejected', '386', 'Your Offer in Compromise (OIC) has been rejected by the IRS.', 'We will evaluate the reason for rejection and may file an appeal, or consider other options like setting up an Installment Agreement.', '2023-09-13 07:31:22', NULL),
(69, 'Federal Resolution- OIC appeals preparing petition', '291', 'Your Offer in Compromise (OIC) was rejected, and we are currently preparing an appeals petition.', 'The appeals petition will be filed and a hearing date will be scheduled.', '2023-09-13 07:31:22', NULL),
(70, 'Federal Resolution- OIC appeals pending hearing', '292', 'Your appeals petition for the rejected Offer in Compromise (OIC) has been filed and is awaiting a hearing.', 'We will attend the hearing and present your case. You will be notified of any updates or decisions.', '2023-09-13 07:32:19', NULL),
(71, 'Federal Resolution- Closing call/letter pending', '293', 'Your Federal Resolution process is almost complete, and a closing call or letter is pending.', 'You will receive a call or letter summarizing the resolution and any final steps or obligations.', '2023-09-13 07:32:19', NULL),
(72, 'Federal Resolution- Review and Move', '294', 'Your Federal Resolution case has been reviewed and is ready to move to the next phase or close out.', 'Depending on the specifics of your case, it will either be closed or moved to the next appropriate phase for further action.', '2023-09-13 07:33:16', NULL),
(73, 'Federal Resolution- Pending Docs (Hardship Info)', '282', 'Your Penalty Abatement case is waiting for additional information regarding your financial hardship.', 'Upon receipt of the necessary hardship information, your case will proceed to the next phase of Penalty Abatement.', '2023-09-13 07:33:16', NULL),
(74, 'Federal Resolution- P/A In Progress (Penalty Abatement)', '283', 'Your Penalty Abatement case is in progress.', 'Your case will be reviewed, prepared, and mailed to you for signature and IRS submission.', '2023-09-13 07:34:11', NULL),
(75, 'Federal Resolution- P/A Completed/ Send To & Update Client', '284', 'Your Penalty Abatement has been completed and documentation will be sent to you.', 'You will receive the finalized documentation and any further instructions via the method you\'ve selected (e.g., mail, email, etc.)', '2023-09-13 07:34:11', NULL),
(76, 'Federal Resolution- Review and Move (Penalty Abatement)', '285', 'Your Penalty Abatement case has been reviewed and is ready to move to the next phase or close out.', 'Depending on the specifics of your case, it will either be closed or moved to the next appropriate phase for further action.', '2023-09-13 07:35:10', NULL),
(77, 'Federal Resolution- Pending Docs (FQ\'s/ Supporting Docs)\r\n', '278', 'Financial Questionnaires (FQs) or other supporting documentation are needed. The purpose is to compile a comprehensive list of your income and expenses to understand your financial situation and determine the necessary documents for proof. This will help us effectively demonstrate to the IRS why you are unable to repay your tax debt and assist in negotiating your tax liability.\r\n\r\nTo access the form, please click on the yellow highlighted message above.', 'Upon receipt of the necessary documents, your case will proceed to the next phase of Federal Resolution.', '2023-09-13 07:35:10', NULL),
(78, 'Federal Resolution- FQ\'s Received/ Preparing', '335', 'The Financial Questionnaires (FQs) have been received and your Federal Resolution is being prepared.', 'Your case will move to the preparation and submission of the necessary applications and forms to the IRS.', '2023-09-13 07:36:06', NULL),
(79, 'Federal Resolution- CNC In Progress (Currently Non Collectable)', '279', 'Your case for \"Currently Not Collectible\" status is actively in progress.', 'We are gathering and preparing all required documentation to submit to the IRS. You\'ll be notified once the submission is complete.', '2023-09-13 07:36:06', NULL),
(80, 'Federal Resolution- CNC Completed/ Send To & Update Client', '280', 'Your \"Currently Not Collectible\" status has been successfully completed.', 'You will receive finalized documentation outlining your new CNC status and any additional steps or obligations.', '2023-09-13 07:37:09', NULL),
(81, 'Federal Resolution- Review and Move (Currently Non Collectable)', '281', 'Your CNC case has been reviewed and is ready to move to the next phase or be closed.', 'Your case will either close or move to the next appropriate action depending on your situation.', '2023-09-13 07:37:09', NULL),
(82, 'Federal Resolution- Pending Docs (FQ\'s/ Supporting Docs)', '274', 'Financial Questionnaires (FQs) or other supporting documentation are needed. The purpose is to compile a comprehensive list of your income and expenses to understand your financial situation and determine the necessary documents for proof. This will help us effectively demonstrate to the IRS why you are unable to repay your tax debt and assist in negotiating your tax liability.\r\n\r\nTo access the form, please click on the yellow highlighted message above.', 'Upon receipt of the necessary documents, your case will proceed to the next phase of Federal Resolution.', '2023-09-13 07:38:06', NULL),
(83, 'Federal Resolution- FQ\'s Received/ Preparing (Installment Agreements)', '334', 'Your Financial Questionnaire (FQ) has been received, and we are preparing your case for Installment Agreements.', 'Once all documents are prepared, your case will be submitted to the IRS for an Installment Agreement review.', '2023-09-13 07:38:06', NULL),
(84, 'Federal Resolution- I/A in progress (Installment Agreements)', '275', 'Your Installment Agreement is currently being processed.', 'You will receive updates as the IRS reviews your case and makes a decision.', '2023-09-13 07:39:34', NULL),
(85, 'Federal Resolution- I/A complete/ Send To & Update Client', '276', 'Your Installment Agreement with the IRS has been successfully set up.', 'You will receive all the necessary documentation and details about how to proceed with your monthly payments.', '2023-09-13 07:39:34', NULL),
(86, 'Federal Resolution- Review and Move (Installment Agreements)', '277', 'Your Installment Agreement case has been reviewed and is ready to move to the next phase or be closed.', 'Your case will either close or move to the next appropriate action depending on your situation.', '2023-09-13 07:40:38', NULL),
(87, 'Federal Resolution - In progress', '319', 'Your federal tax resolution case is currently under review and being worked on.', 'You should wait for updates from the federal tax authorities or your representative. It\'s crucial to respond promptly to any requests for additional information.', '2023-09-13 07:40:38', NULL),
(88, 'Federal Resolution - CSED Expiration', '295', 'The Collection Statute Expiration Date (CSED) has been reached, which means the IRS can no longer legally collect on the debt.\r\n', 'Generally, no further action is required from you regarding this debt, but you should keep documentation proving the CSED has passed in case of any future disputes.', '2023-09-13 07:41:34', NULL),
(89, 'Federal Resolution - Audit in Progress', '296', 'Your federal tax return is currently being audited, which means the authorities are closely examining your financial information to ensure it complies with tax laws.', 'Stay in communication with the auditor, and provide any requested documentation as soon as possible. Consider consulting with a tax professional for guidance.', '2023-09-13 07:41:34', NULL),
(90, 'Federal Resolution - Pending Innocent Spouse', '297', 'You\'ve filed an Innocent Spouse claim, which can provide relief if your spouse or former spouse incorrectly reported items or omitted items on your joint tax return.', 'The IRS will review your claim and may request additional information. Ensure you respond promptly and consider seeking professional advice if you haven\'t already.', '2023-09-13 07:42:37', NULL),
(91, 'Federal Resolution - Review and Move', '323', 'Your case is in a stage where it is being assessed for its next steps. This might involve evaluating the progress made and determining the appropriate next actions.', 'Your case may be moved to another category based on the review\'s findings, or further actions may be recommended. Stay in communication and be ready to cooperate with any new developments.', '2023-09-13 07:42:37', NULL),
(92, 'State Cases- Pending Docs', '324', 'We are awaiting additional documents to proceed with your state case.', 'Once the required documents are received, your state case will proceed to the next step.', '2023-09-13 07:43:32', NULL),
(93, 'State Cases- In Progress', '317', 'Your state tax case is currently in progress.', 'You will receive updates as we continue to negotiate and work with the state tax authority.', '2023-09-13 07:43:32', NULL),
(94, 'State- I/A In Progress', '202', 'Your state tax case is currently in the \"Installment Agreement (I/A) In Progress\" stage. This means that we are actively working on establishing an Installment Agreement with your state tax agency, allowing you to make monthly payments towards your tax debt.', 'Our team is in the process of reviewing your financial information and negotiating a payment plan with the State Agency. Each state operates differently and further information will be provided by a case manager.', '2023-09-13 07:45:48', NULL),
(95, 'State- OIC In Progress', '203', 'Your state tax case is currently in the \"Offer In Compromise (OIC) In Progress\" stage. This indicates that we are actively negotiating with the state tax agency to settle your tax debt for a reduced amount, based on your ability to pay.', 'Your offer in compromise is being prepared by our state negotiations department. Any further information and terms of your offer will be discussed with you prior to the offer being submitted.', '2023-09-13 07:45:48', NULL),
(96, 'State Cases- Completed/ Update Client and Close Out', '204', 'Your state case has been resolved.', 'You will be updated with the final details and any further obligations. After this, your case will be closed.', '2023-09-13 07:46:46', NULL),
(97, 'Completed- Investigation, No Resolution', '224', 'The investigation phase of your case is complete, but no resolution is needed or possible at this time.', 'Your case will be closed, and you\'ll receive documentation outlining the findings and explaining why no further action is required.', '2023-09-13 07:46:46', NULL),
(98, 'Completed- OIC acknowledged, waiting on answer', '225', 'Your Offer in Compromise (OIC) has been acknowledged by the IRS and is under review.', 'You\'re in a waiting period until the IRS responds with their decision on your OIC.', '2023-09-13 07:47:38', NULL),
(99, 'Completed- OIC approved', '226', 'Your Offer in Compromise has been approved by the IRS.', 'You\'ll receive finalized documentation outlining your new obligations and any required payments.', '2023-09-13 07:47:38', NULL),
(100, 'Completed- I/A set up with P/A submitted', '227', 'Your Installment Agreement (I/A) has been set up and a Penalty Abatement (P/A) has also been submitted.', 'You will receive all the necessary documentation and details on how to proceed with your monthly payments and penalty abatement process.', '2023-09-13 07:48:33', NULL),
(101, 'Completed- I/A only', '257', 'Your case has been resolved with an Installment Agreement only.', 'You\'ll receive all necessary documentation and next steps for maintaining your Installment Agreement.', '2023-09-13 07:48:33', NULL),
(102, 'Completed- Tax Prep Only cases', '228', 'Your case solely involved tax preparation, which is now complete.', 'You\'ll receive finalized copies of your tax returns and any other related documents. Your case will be closed.', '2023-09-13 07:49:31', NULL),
(103, 'Completed- P/A approved', '229', 'Your Penalty Abatement has been approved.', 'You\'ll receive finalized documentation outlining the abatement and any new balance due, if applicable.', '2023-09-13 07:49:31', NULL),
(104, 'Completed- CNC approved', '230', 'Your status for \"Currently Not Collectible\" has been approved.', 'You will receive documentation confirming this status and detailing any future obligations or reviews.', '2023-09-13 07:50:38', NULL),
(105, 'Completed- All other Resolution', '231', 'Your case has been resolved through another, less common means.', 'You will be informed of the details and any further obligations or steps.', '2023-09-13 07:50:38', NULL),
(106, 'Completed- Pending Video Testimonials', '428', 'Your case is complete, and we are pending your submission of a video testimonial.', 'Once the video testimonial is received, your case will be officially closed.', '2023-09-13 07:51:34', NULL),
(107, 'Inactive: Tax Preparation', '391', 'Your tax preparation process is currently inactive.', 'Your case will not proceed until you provide the necessary documents or take action to reactivate it.', '2023-09-13 07:51:34', NULL),
(108, 'Inactive: OIC', '392', 'Your Offer in Compromise process is currently inactive.', 'Your case will remain inactive until you decide to proceed or provide the necessary documentation.', '2023-09-13 07:52:30', NULL),
(109, 'Inactive: Penalty Abatement', '395', 'Your Penalty Abatement process is currently inactive.', 'Your case will not proceed until reactivated by your actions or documentation.', '2023-09-13 07:52:30', NULL),
(110, 'Inactive: Currently Not Collectible', '394', 'Your \"Currently Not Collectible\" status is inactive.', 'Your case will remain in this status until you take action to reactivate it.', '2023-09-13 07:53:21', NULL),
(111, 'Inactive: Installment Agreements', '393', 'Your Installment Agreement process is currently inactive.', 'Your case will remain in this state until you decide to proceed or provide the necessary documents.', '2023-09-13 07:53:21', NULL),
(112, 'Inactive: State', '396', 'Your state-related case is currently inactive.', 'Your case will remain in this state until you take further actions to reactivate it.', '2023-09-13 07:53:46', NULL),
(113, 'Finance Pending: Lender White', '429', 'Your case has been categorized under different lender color codes for internal tracking.', 'We are awaiting funding confirmation from the designated lender(s). Once we receive it, we will proceed with the next steps in your tax relief process and keep you informed.', '2023-09-13 07:57:53', NULL),
(114, 'Finance Pending: Lender Gray', '362', 'Your case has been categorized under different lender color codes for internal tracking.', 'We are awaiting funding confirmation from the designated lender(s). Once we receive it, we will proceed with the next steps in your tax relief process and keep you informed.', '2023-09-13 07:57:53', NULL),
(115, 'Finance Pending: Lender Green', '328', 'Your case has been categorized under different lender color codes for internal tracking.', 'We are awaiting funding confirmation from the designated lender(s). Once we receive it, we will proceed with the next steps in your tax relief process and keep you informed.', '2023-09-13 07:57:53', NULL),
(116, 'Finance Pending: Lender Orange', '329', 'Your case has been categorized under different lender color codes for internal tracking.', 'We are awaiting funding confirmation from the designated lender(s). Once we receive it, we will proceed with the next steps in your tax relief process and keep you informed.', '2023-09-13 07:57:53', NULL),
(117, 'Finance Pending: Lender Yellow', '384', 'Your case has been categorized under different lender color codes for internal tracking.', 'We are awaiting funding confirmation from the designated lender(s). Once we receive it, we will proceed with the next steps in your tax relief process and keep you informed.', '2023-09-13 07:57:53', NULL),
(118, 'Finance Pending: Lender Olive', '331', 'Your case has been categorized under different lender color codes for internal tracking.', 'We are awaiting funding confirmation from the designated lender(s). Once we receive it, we will proceed with the next steps in your tax relief process and keep you informed.', '2023-09-13 07:57:53', NULL),
(119, 'Finance Pending: Lender Blue', '381', 'Your case has been categorized under different lender color codes for internal tracking.', 'We are awaiting funding confirmation from the designated lender(s). Once we receive it, we will proceed with the next steps in your tax relief process and keep you informed.', '2023-09-13 07:57:53', NULL),
(120, 'Finance Pending: Lender Red', '330', 'Your case has been categorized under different lender color codes for internal tracking.', 'We are awaiting funding confirmation from the designated lender(s). Once we receive it, we will proceed with the next steps in your tax relief process and keep you informed.', '2023-09-13 07:57:53', NULL),
(121, 'Finance Pending: Lender Silver', '404', 'Your case has been categorized under different lender color codes for internal tracking.', 'We are awaiting funding confirmation from the designated lender(s). Once we receive it, we will proceed with the next steps in your tax relief process and keep you informed.', '2023-09-13 07:57:53', NULL),
(122, 'Finance Pending: Multiple Lenders', '382', 'Your case has been categorized under different lender color codes for internal tracking.', 'We are awaiting funding confirmation from the designated lender(s). Once we receive it, we will proceed with the next steps in your tax relief process and keep you informed.', '2023-09-13 07:57:53', NULL),
(123, 'Federal Resolution- OIC Rejected- Pending I/A or CNC', '433', 'The IRS did not accept your Offer In Compromise (OIC).', 'Our next step is to prepare your case either for an Installment Agreement (I/A) or a Currently Not Collectible (CNC) status. Alongside this, we will also be initiating a Penalty Abatement (P/A) process, aiming to alleviate as many penalties and fees as possible from your account.\r\n', '2023-10-13 06:10:22', NULL),
(124, 'Federal Resolution- OIC Rejection- Prepare P/A', '434', 'We\'re taking steps to enroll you in the Penalty Abatement program. This program aims to significantly reduce, if not eliminate, penalties and additional charges from your account.\r\n', 'Once we successfully enroll you in the Penalty Abatement program, we will promptly inform you about the outcomes and any further steps that might be necessary.', '2023-10-13 06:10:22', NULL),
(129, 'Completed- OIC acknowledged, waiting on answer', '435', 'Your Offer in Compromise (OIC) has been acknowledged by the IRS and is under review.', 'You\'re in a waiting period until the IRS responds with their decision on your OIC.', '2023-11-15 07:18:05', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `toform`
--

CREATE TABLE `toform` (
  `id` int(11) NOT NULL,
  `user_id` text DEFAULT NULL,
  `Reference` text DEFAULT NULL,
  `Status` text DEFAULT NULL,
  `Login_username` text DEFAULT NULL,
  `Login_email` text DEFAULT NULL,
  `What_Tax_Year_Is_This_Organizer_For` text DEFAULT NULL,
  `First_Name` text DEFAULT NULL,
  `Last_Name` text DEFAULT NULL,
  `Main_Contact_Phone_Number` text DEFAULT NULL,
  `snd_Contact_Phone_Number` text DEFAULT NULL,
  `SSN` text DEFAULT NULL,
  `Date_Of_Birth` text DEFAULT NULL,
  `Occupation` text DEFAULT NULL,
  `Street_Address` text DEFAULT NULL,
  `Address_Line_2` text DEFAULT NULL,
  `City` text DEFAULT NULL,
  `State` text DEFAULT NULL,
  `Zip_Code` text DEFAULT NULL,
  `Country` text DEFAULT NULL,
  `Rent_Or_Own` text DEFAULT NULL,
  `Client_Filing_Status` text DEFAULT NULL,
  `spouse_first_name` text DEFAULT NULL,
  `spouse_last_name` text DEFAULT NULL,
  `spouse_ssn` text DEFAULT NULL,
  `spouse_date_of_birth` text DEFAULT NULL,
  `spouse_occupaton` text DEFAULT NULL,
  `Client_Employment_Status` text DEFAULT NULL,
  `Do_you_have_your_W2s` text DEFAULT NULL,
  `Upload_your_W2s` text DEFAULT NULL,
  `We_can_file_back_year_returns_based_on_IRS_wage_and_income` text DEFAULT NULL,
  `You_Will_Need_To_Upload_your_W2s` text DEFAULT NULL,
  `Do_you_have_any_dependents_EXCLUDING_yourself_and_your_spouse` text DEFAULT NULL,
  `How_many_dependents_do_you_have` text DEFAULT NULL,
  `Did_your_marital_status_change_during_the_year` text DEFAULT NULL,
  `Did_your_address_change_from_last_year` text DEFAULT NULL,
  `Can_you_be_claimed_as_a_dependent_by_another_tax_payer` text DEFAULT NULL,
  `Did_you_acquire_or_dispose_of_any_stocks_or_bonds_during_the_yea` text DEFAULT NULL,
  `Upload_Form_1099B` text DEFAULT NULL,
  `Did_you_take_out_a_home_equity_loan_this_year` text DEFAULT NULL,
  `Did_you_have_any_foreign_income_or_pay_any_foreign_taxes_during_` text DEFAULT NULL,
  `Did_you_receive_any_lump_sum_payment_from_a_pension_profit_shari` text DEFAULT NULL,
  `Did_you_make_any_withdrawals_from_an_IRA_Keogh_SIMPLE_or_SEP_acc` text DEFAULT NULL,
  `Did_you_make_any_non_cash_charitable_contributions` text DEFAULT NULL,
  `Did_you_use_your_car_on_the_job_for_other_than_commuting` text DEFAULT NULL,
  `Did_you_work_out_of_town_for_part_of_the_year` text DEFAULT NULL,
  `Did_you_have_any_educational_expenses_during_the_year` text DEFAULT NULL,
  `Did_you_have_any_child_care_expenses_other_than_Child_Support` text DEFAULT NULL,
  `Amount` text DEFAULT NULL,
  `Number_of_children_cared_for` text DEFAULT NULL,
  `Services_Performed_in_your_house` text DEFAULT NULL,
  `Name_address_of_provider` text DEFAULT NULL,
  `Are_you_your_spouse_and_all_dependents_covered_by_health_insuran` text DEFAULT NULL,
  `Upload_all_1095_or_proof_of_insurance` text DEFAULT NULL,
  `Print_Full_Name` text DEFAULT NULL,
  `Date` text DEFAULT NULL,
  `Signature` text DEFAULT NULL,
  `Name_Of_Business` text DEFAULT NULL,
  `Tax_ID` text DEFAULT NULL,
  `Business_Activity` text DEFAULT NULL,
  `Do_you_have_a_profit_and_loss_statement` text DEFAULT NULL,
  `Upload_Profit_Loss_Statement` text DEFAULT NULL,
  `Accounting` text DEFAULT NULL,
  `Advertising` text DEFAULT NULL,
  `Alarm_Security_Installation` text DEFAULT NULL,
  `Alarm_Security_Monitoring` text DEFAULT NULL,
  `Appraisal_Fees` text DEFAULT NULL,
  `Auto_Truck_Expenses` text DEFAULT NULL,
  `Bad_Debt_Includes_In_Gross_Income` text DEFAULT NULL,
  `Bank_Service_Charges` text DEFAULT NULL,
  `Books_Subscrp_Publications` text DEFAULT NULL,
  `Client_Misc_Gov_Fees_Inc_In_Income` text DEFAULT NULL,
  `Commission_Outside_Services` text DEFAULT NULL,
  `Credit_Card_Discount_Fees` text DEFAULT NULL,
  `Credit_Card_Min_Usage_Fees` text DEFAULT NULL,
  `Depreciation_From_Prior_Year_Income_Tax` text DEFAULT NULL,
  `Domain_Name_Registration` text DEFAULT NULL,
  `Dues_Membership` text DEFAULT NULL,
  `Education_Expenses` text DEFAULT NULL,
  `Employee_Benefits` text DEFAULT NULL,
  `Employee_Customer_Awards_Prices_Troph` text DEFAULT NULL,
  `Entertainment` text DEFAULT NULL,
  `Equipment_Machinery_Purchased` text DEFAULT NULL,
  `Exhibit_Show` text DEFAULT NULL,
  `Film_Developing` text DEFAULT NULL,
  `Flower_Cards` text DEFAULT NULL,
  `Franchise_Fees` text DEFAULT NULL,
  `Fuel` text DEFAULT NULL,
  `Furniture_Fixtures` text DEFAULT NULL,
  `Gift_To_Employee_Client` text DEFAULT NULL,
  `Goodwill` text DEFAULT NULL,
  `Graphic_Design_Fees` text DEFAULT NULL,
  `Home_Office` text DEFAULT NULL,
  `Hotel_Motel_Inn` text DEFAULT NULL,
  `Insurance_Bus_Interruption` text DEFAULT NULL,
  `Insurance_For_Employees` text DEFAULT NULL,
  `Insurance_Liability` text DEFAULT NULL,
  `Insurance_Other` text DEFAULT NULL,
  `Insurance_Work_Comp` text DEFAULT NULL,
  `Internet_Services` text DEFAULT NULL,
  `Inventory_Beginning_Of_The_Year` text DEFAULT NULL,
  `Inventory_Breakage_Spoilage_Exp_Unreturn` text DEFAULT NULL,
  `Inventory_Ending_Of_The_Year` text DEFAULT NULL,
  `Inventory_Purchases` text DEFAULT NULL,
  `Inventory_Theft_Loss` text DEFAULT NULL,
  `IRA_Regular_Or_SEP_IRA_Contributed_Year` text DEFAULT NULL,
  `Landscaping` text DEFAULT NULL,
  `Laundry_Cleaning` text DEFAULT NULL,
  `Legal_Professional_Services` text DEFAULT NULL,
  `Licenses_Permits` text DEFAULT NULL,
  `Licenses_Permits_For_Client_Projects` text DEFAULT NULL,
  `Locksmith_Keys_Lock_Boxes` text DEFAULT NULL,
  `Meals_50_Bus` text DEFAULT NULL,
  `Medical_Insurance` text DEFAULT NULL,
  `Mileage_Business` text DEFAULT NULL,
  `Moving_Exp` text DEFAULT NULL,
  `Notary_Services` text DEFAULT NULL,
  `Parking` text DEFAULT NULL,
  `Pension_Plan` text DEFAULT NULL,
  `Pest_Control` text DEFAULT NULL,
  `Postage_Delivery_Freight_Shipping` text DEFAULT NULL,
  `Printing_Reproductions` text DEFAULT NULL,
  `Promotional_Exp_Products_Or_Services` text DEFAULT NULL,
  `Rent_Business_Location` text DEFAULT NULL,
  `Rent_Furniture` text DEFAULT NULL,
  `Rent_Lease_Auto_And_Or_Truck` text DEFAULT NULL,
  `Rent_Lease_PO_Box_Storage` text DEFAULT NULL,
  `Rent_Lease_Equipment` text DEFAULT NULL,
  `Repair_Building` text DEFAULT NULL,
  `Repair_Equipment` text DEFAULT NULL,
  `Research_Expenses` text DEFAULT NULL,
  `Royalty_For_Franchise` text DEFAULT NULL,
  `Salaries_Wages` text DEFAULT NULL,
  `Samples_Expenses` text DEFAULT NULL,
  `Seasonal_Bus_Decorations` text DEFAULT NULL,
  `Signs_Flags_Banners` text DEFAULT NULL,
  `Software_Upgrades` text DEFAULT NULL,
  `Supplies_Shop` text DEFAULT NULL,
  `Supplies_Office` text DEFAULT NULL,
  `Swimming_PoolPurchased_Or_Installed` text DEFAULT NULL,
  `Swimming_Pool_Services` text DEFAULT NULL,
  `Tax_Estimated_FTB_Sole_Corp_LLC` text DEFAULT NULL,
  `Tax_Estimated_IRS_Sole_Corp_LLC` text DEFAULT NULL,
  `Tax_Real_Estate_House_Business` text DEFAULT NULL,
  `Tax_Sale_That_Included_In_Income` text DEFAULT NULL,
  `Taxes_Payroll_Employers_Portion` text DEFAULT NULL,
  `Telephone_FAX_Pager_Cell` text DEFAULT NULL,
  `Tips_With_Verifiable_Receipts` text DEFAULT NULL,
  `Tools_Molds_Dies_Jigs` text DEFAULT NULL,
  `Towing_Services` text DEFAULT NULL,
  `Trademark_Patent_Expenses` text DEFAULT NULL,
  `Travel` text DEFAULT NULL,
  `Uniform_Cleaning_Services` text DEFAULT NULL,
  `Uniform_Purchased` text DEFAULT NULL,
  `Utilities_Electric_Gas` text DEFAULT NULL,
  `Vandalism_Graffiti_Clean_Up_Fees` text DEFAULT NULL,
  `Wash_Vehicle_For_Trucking_Taxi_Business` text DEFAULT NULL,
  `Waste_Disposal` text DEFAULT NULL,
  `Web_Design_Fees` text DEFAULT NULL,
  `Web_Hosting_Fees` text DEFAULT NULL,
  `Other` text DEFAULT NULL,
  `Other1` text DEFAULT NULL,
  `How_many_motor_vehicles_do_you_have` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `toform`
--

INSERT INTO `toform` (`id`, `user_id`, `Reference`, `Status`, `Login_username`, `Login_email`, `What_Tax_Year_Is_This_Organizer_For`, `First_Name`, `Last_Name`, `Main_Contact_Phone_Number`, `snd_Contact_Phone_Number`, `SSN`, `Date_Of_Birth`, `Occupation`, `Street_Address`, `Address_Line_2`, `City`, `State`, `Zip_Code`, `Country`, `Rent_Or_Own`, `Client_Filing_Status`, `spouse_first_name`, `spouse_last_name`, `spouse_ssn`, `spouse_date_of_birth`, `spouse_occupaton`, `Client_Employment_Status`, `Do_you_have_your_W2s`, `Upload_your_W2s`, `We_can_file_back_year_returns_based_on_IRS_wage_and_income`, `You_Will_Need_To_Upload_your_W2s`, `Do_you_have_any_dependents_EXCLUDING_yourself_and_your_spouse`, `How_many_dependents_do_you_have`, `Did_your_marital_status_change_during_the_year`, `Did_your_address_change_from_last_year`, `Can_you_be_claimed_as_a_dependent_by_another_tax_payer`, `Did_you_acquire_or_dispose_of_any_stocks_or_bonds_during_the_yea`, `Upload_Form_1099B`, `Did_you_take_out_a_home_equity_loan_this_year`, `Did_you_have_any_foreign_income_or_pay_any_foreign_taxes_during_`, `Did_you_receive_any_lump_sum_payment_from_a_pension_profit_shari`, `Did_you_make_any_withdrawals_from_an_IRA_Keogh_SIMPLE_or_SEP_acc`, `Did_you_make_any_non_cash_charitable_contributions`, `Did_you_use_your_car_on_the_job_for_other_than_commuting`, `Did_you_work_out_of_town_for_part_of_the_year`, `Did_you_have_any_educational_expenses_during_the_year`, `Did_you_have_any_child_care_expenses_other_than_Child_Support`, `Amount`, `Number_of_children_cared_for`, `Services_Performed_in_your_house`, `Name_address_of_provider`, `Are_you_your_spouse_and_all_dependents_covered_by_health_insuran`, `Upload_all_1095_or_proof_of_insurance`, `Print_Full_Name`, `Date`, `Signature`, `Name_Of_Business`, `Tax_ID`, `Business_Activity`, `Do_you_have_a_profit_and_loss_statement`, `Upload_Profit_Loss_Statement`, `Accounting`, `Advertising`, `Alarm_Security_Installation`, `Alarm_Security_Monitoring`, `Appraisal_Fees`, `Auto_Truck_Expenses`, `Bad_Debt_Includes_In_Gross_Income`, `Bank_Service_Charges`, `Books_Subscrp_Publications`, `Client_Misc_Gov_Fees_Inc_In_Income`, `Commission_Outside_Services`, `Credit_Card_Discount_Fees`, `Credit_Card_Min_Usage_Fees`, `Depreciation_From_Prior_Year_Income_Tax`, `Domain_Name_Registration`, `Dues_Membership`, `Education_Expenses`, `Employee_Benefits`, `Employee_Customer_Awards_Prices_Troph`, `Entertainment`, `Equipment_Machinery_Purchased`, `Exhibit_Show`, `Film_Developing`, `Flower_Cards`, `Franchise_Fees`, `Fuel`, `Furniture_Fixtures`, `Gift_To_Employee_Client`, `Goodwill`, `Graphic_Design_Fees`, `Home_Office`, `Hotel_Motel_Inn`, `Insurance_Bus_Interruption`, `Insurance_For_Employees`, `Insurance_Liability`, `Insurance_Other`, `Insurance_Work_Comp`, `Internet_Services`, `Inventory_Beginning_Of_The_Year`, `Inventory_Breakage_Spoilage_Exp_Unreturn`, `Inventory_Ending_Of_The_Year`, `Inventory_Purchases`, `Inventory_Theft_Loss`, `IRA_Regular_Or_SEP_IRA_Contributed_Year`, `Landscaping`, `Laundry_Cleaning`, `Legal_Professional_Services`, `Licenses_Permits`, `Licenses_Permits_For_Client_Projects`, `Locksmith_Keys_Lock_Boxes`, `Meals_50_Bus`, `Medical_Insurance`, `Mileage_Business`, `Moving_Exp`, `Notary_Services`, `Parking`, `Pension_Plan`, `Pest_Control`, `Postage_Delivery_Freight_Shipping`, `Printing_Reproductions`, `Promotional_Exp_Products_Or_Services`, `Rent_Business_Location`, `Rent_Furniture`, `Rent_Lease_Auto_And_Or_Truck`, `Rent_Lease_PO_Box_Storage`, `Rent_Lease_Equipment`, `Repair_Building`, `Repair_Equipment`, `Research_Expenses`, `Royalty_For_Franchise`, `Salaries_Wages`, `Samples_Expenses`, `Seasonal_Bus_Decorations`, `Signs_Flags_Banners`, `Software_Upgrades`, `Supplies_Shop`, `Supplies_Office`, `Swimming_PoolPurchased_Or_Installed`, `Swimming_Pool_Services`, `Tax_Estimated_FTB_Sole_Corp_LLC`, `Tax_Estimated_IRS_Sole_Corp_LLC`, `Tax_Real_Estate_House_Business`, `Tax_Sale_That_Included_In_Income`, `Taxes_Payroll_Employers_Portion`, `Telephone_FAX_Pager_Cell`, `Tips_With_Verifiable_Receipts`, `Tools_Molds_Dies_Jigs`, `Towing_Services`, `Trademark_Patent_Expenses`, `Travel`, `Uniform_Cleaning_Services`, `Uniform_Purchased`, `Utilities_Electric_Gas`, `Vandalism_Graffiti_Clean_Up_Fees`, `Wash_Vehicle_For_Trucking_Taxi_Business`, `Waste_Disposal`, `Web_Design_Fees`, `Web_Hosting_Fees`, `Other`, `Other1`, `How_many_motor_vehicles_do_you_have`, `created_at`, `updated_at`) VALUES
(3, '13', '6549d582e12c1', 'Completed', 'Christian Ha', 'management@clearstarttax.com', '2019', 'test', 'test', 'setse', 'teste', 'test', '2023-11-08', 'est', 'est', 'estest', 'set', 'est', 'etest', 'estset', 'est', 'jointly', 'tes', 'tset', 'estes', 'tset', 'est', 'selfemployed', NULL, NULL, NULL, NULL, 'have any dependents no', '0', 'No', 'No', 'No', 'No', NULL, 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', NULL, NULL, NULL, NULL, 'No', NULL, 'iououioiu', '2023-11-16', NULL, 'test', 'est', 'sts', 'Yes', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', '2023-11-07 00:43:22', '2023-11-07 00:43:22'),
(4, '13', '6549d5a546f32', 'Completed', 'Christian Ha', 'management@clearstarttax.com', '2019', 'test', 'test', 'setse', 'teste', 'test', '2023-11-08', 'est', 'est', 'estest', 'set', 'est', 'etest', 'estset', 'est', 'jointly', 'tes', 'tset', 'estes', 'tset', 'est', 'selfemployed', NULL, NULL, NULL, NULL, 'have any dependents no', '0', 'No', 'No', 'No', 'No', NULL, 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', NULL, NULL, NULL, NULL, 'No', NULL, 'iououioiu', '2023-11-16', NULL, 'test', 'est', 'sts', 'Yes', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', '2023-11-07 00:43:57', '2023-11-07 00:43:57'),
(5, '13', '6549d5cdcc355', 'Completed', 'Christian Ha', 'management@clearstarttax.com', '2019', 'test', 'test', 'setse', 'teste', 'test', '2023-11-08', 'est', 'est', 'estest', 'set', 'est', 'etest', 'estset', 'est', 'jointly', 'tes', 'tset', 'estes', 'tset', 'est', 'selfemployed', NULL, NULL, NULL, NULL, 'have any dependents no', '0', 'No', 'No', 'No', 'No', NULL, 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', NULL, NULL, NULL, NULL, 'No', NULL, 'iououioiu', '2023-11-16', NULL, 'test', 'est', 'sts', 'Yes', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', '2023-11-07 00:44:37', '2023-11-07 00:44:37'),
(6, '13', '6549d601e336a', 'Completed', 'Christian Ha', 'management@clearstarttax.com', '2019', 'test', 'test', 'setse', 'teste', 'test', '2023-11-08', 'est', 'est', 'estest', 'set', 'est', 'etest', 'estset', 'est', 'jointly', 'tes', 'tset', 'estes', 'tset', 'est', 'selfemployed', NULL, NULL, NULL, NULL, 'have any dependents no', '0', 'No', 'No', 'No', 'No', NULL, 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', NULL, NULL, NULL, NULL, 'No', NULL, 'iououioiu', '2023-11-16', NULL, 'test', 'est', 'sts', 'Yes', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', '2023-11-07 00:45:29', '2023-11-07 00:45:29'),
(10, '13', '6549d94f27145', 'Completed', 'Christian Ha', 'management@clearstarttax.com', '2018', 'r', 'erw', 'ewr', 'werrr', 'rwerwer', '2023-12-01', 'rwe', 're', 'wrewr', 'werwe', 'ewr', 'rew', 'rwer', 'wr', 'single', NULL, NULL, NULL, NULL, NULL, 'selfemployed', NULL, NULL, NULL, NULL, 'have any dependents yes', '1', 'No', 'No', 'No', 'No', NULL, 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', NULL, NULL, NULL, NULL, 'No', NULL, 'ytrytry', '2023-11-29', NULL, 'ytrytr', 'ytry', 'trytry', 'Yes', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', '2023-11-07 00:59:35', '2023-11-07 00:59:35'),
(11, '13', '6549f52f9da00', 'Completed', 'Christian Ha', 'management@clearstarttax.com', '2019', 'qq', 'qq', 'setse', 'teste', 'test', '2023-11-08', 'est', 'qq', 'estest', 'set', 'est', 'etest', 'estset', 'est', 'jointly', 'tes', 'tset', 'estes', 'tset', 'est', 'wage', 'Yes', NULL, NULL, NULL, 'have any dependents no', '0', 'No', 'No', 'No', 'No', NULL, 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', NULL, NULL, NULL, NULL, 'No', NULL, 'qqqqqq', '2023-11-16', NULL, 'test', 'est', 'sts', 'Yes', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', '2023-11-07 02:58:31', '2023-11-07 02:58:31'),
(12, '13', '6549f5a0a976a', 'Completed', 'Christian Ha', 'management@clearstarttax.com', '2019', 'qq', 'qq', 'setse', 'teste', 'test', '2023-11-08', 'est', 'qq', 'estest', 'set', 'est', 'etest', 'estset', 'est', 'jointly', 'tes', 'tset', 'estes', 'tset', 'est', 'wage', 'Yes', NULL, NULL, NULL, 'have any dependents no', '0', 'No', 'No', 'No', 'No', NULL, 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', NULL, NULL, NULL, NULL, 'No', NULL, 'qqqqqq', '2023-11-16', NULL, 'test', 'est', 'sts', 'Yes', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', '2023-11-07 03:00:24', '2023-11-07 03:00:24'),
(13, '13', '6549f5aa806b8', 'Completed', 'Christian Ha', 'management@clearstarttax.com', '2019', 'qq', 'qq', 'setse', 'teste', 'test', '2023-11-08', 'est', 'qq', 'estest', 'set', 'est', 'etest', 'estset', 'est', 'jointly', 'tes', 'tset', 'estes', 'tset', 'est', 'wage', 'Yes', NULL, NULL, NULL, 'have any dependents no', '0', 'No', 'No', 'No', 'No', NULL, 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', NULL, NULL, NULL, NULL, 'No', NULL, 'qqqqqqgfgfdg', '2023-11-16', NULL, 'test', 'est', 'sts', 'Yes', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', '2023-11-07 03:00:34', '2023-11-07 03:00:34'),
(15, '13', '654a02056deaa', 'Completed', 'Christian Ha', 'management@clearstarttax.com', '2019', 'testset', 'est', 'tes', 'tset', 'test', '2023-11-23', 'est', 'estt', 'set', 'tes', 'test', 'setse', 'test', 'setes', 'household', NULL, NULL, NULL, NULL, NULL, 'Retired', NULL, NULL, NULL, NULL, 'have any dependents no', '0', 'No', 'No', 'No', 'No', NULL, 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', NULL, NULL, NULL, NULL, 'No', NULL, 'testse', '2023-11-24', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '2023-11-07 03:53:17', '2023-11-07 03:53:17'),
(18, '13', '654a03b987b16', 'Completed', 'Christian Ha', 'management@clearstarttax.com', '2022', 'testhhhhh', 'test', 'test', 'ettes', 'test', '2023-11-08', 'test', 'est', 'estestest', 'es', 'tset', 'estes', 'test', 'est', 'separately', 'fdfd', 'sfsd', 'fdsf', 'sdfd', 'fdsfsd', 'Retired', NULL, NULL, NULL, NULL, 'have any dependents no', '0', 'No', 'No', 'No', 'No', NULL, 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', NULL, NULL, NULL, NULL, 'No', NULL, 'testset', '2023-11-25', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '2023-11-07 04:00:33', '2023-11-07 04:00:33'),
(19, '13', '654a0a903de19', 'Completed', 'Christian Ha', 'management@clearstarttax.com', '2022', 'test', 'test', 'hgfhgfh', 'gfhgf', 'test', '2023-11-29', 'gfhgf', 'test', 'sets', 'tset', 'setse', 'hgfh', 'gfhgfh', 'hgfhgfh', 'single', NULL, NULL, NULL, NULL, NULL, 'wage', 'Yes', NULL, NULL, NULL, 'have any dependents no', '0', 'No', 'No', 'No', 'No', NULL, 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', NULL, NULL, NULL, NULL, 'No', NULL, 'hgfhgf', '2023-11-22', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '2023-11-07 04:29:44', '2023-11-07 04:29:44'),
(21, '13', '654a1007b8956', 'inprogress', 'Christian Ha', 'management@clearstarttax.com', '2017', 'test dd', 'test', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'wage', 'Yes', NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '2023-11-07 04:53:03', '2023-11-07 04:53:03');

-- --------------------------------------------------------

--
-- Table structure for table `to_dependent`
--

CREATE TABLE `to_dependent` (
  `id` int(11) NOT NULL,
  `to_id` text DEFAULT NULL,
  `Name` text DEFAULT NULL,
  `Date_Of_Birth` text DEFAULT NULL,
  `SSN` text DEFAULT NULL,
  `Relationship` text DEFAULT NULL,
  `Upload_Birth_Certificate_or_SSN_Card` text DEFAULT NULL,
  `Upload_School_records_or_write_a_letter_if_not_in_school` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `to_dependent`
--

INSERT INTO `to_dependent` (`id`, `to_id`, `Name`, `Date_Of_Birth`, `SSN`, `Relationship`, `Upload_Birth_Certificate_or_SSN_Card`, `Upload_School_records_or_write_a_letter_if_not_in_school`, `created_at`, `updated_at`) VALUES
(1, '10', 'rew', '2023-11-09', 'rwer', 'ewrew', 'upload/fq/2600551699338575.png', 'upload/fq/8063571699338575.png', '2023-11-07 00:59:35', '2023-11-07 00:59:35');

-- --------------------------------------------------------

--
-- Table structure for table `to_vehicle`
--

CREATE TABLE `to_vehicle` (
  `id` int(11) NOT NULL,
  `to_id` text DEFAULT NULL,
  `Description_of_vehicle` text DEFAULT NULL,
  `Is_the_vehicle_used_in_business_or_by_an_employee` text DEFAULT NULL,
  `Cost` text DEFAULT NULL,
  `Date_placed_in_service` text DEFAULT NULL,
  `Business_Miles` text DEFAULT NULL,
  `Commuting_miles` text DEFAULT NULL,
  `Other_personal_use_miles` text DEFAULT NULL,
  `total_miles_driven` text DEFAULT NULL,
  `Gas_oil_expenses` text DEFAULT NULL,
  `Repairs_Maintenance` text DEFAULT NULL,
  `Auto_insurance` text DEFAULT NULL,
  `Registration_licenses_and_fees` text DEFAULT NULL,
  `Other_auto_expenses` text DEFAULT NULL,
  `Auto_rentals` text DEFAULT NULL,
  `Is_another_car_available_for_person_use` text DEFAULT NULL,
  `Do_you_have_evidence_to_support_your_mileage_information` text DEFAULT NULL,
  `If_yes_is_the_evidence_written_in_a_log_or_another_place` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `to_vehicle`
--

INSERT INTO `to_vehicle` (`id`, `to_id`, `Description_of_vehicle`, `Is_the_vehicle_used_in_business_or_by_an_employee`, `Cost`, `Date_placed_in_service`, `Business_Miles`, `Commuting_miles`, `Other_personal_use_miles`, `total_miles_driven`, `Gas_oil_expenses`, `Repairs_Maintenance`, `Auto_insurance`, `Registration_licenses_and_fees`, `Other_auto_expenses`, `Auto_rentals`, `Is_another_car_available_for_person_use`, `Do_you_have_evidence_to_support_your_mileage_information`, `If_yes_is_the_evidence_written_in_a_log_or_another_place`, `created_at`, `updated_at`) VALUES
(1, '3', 'tes', 'tse', 'tes', 'tset', 'se', 'tsete', 'test', 'stes', NULL, 'est', 't', 'tes', 'set', 'tes', 'tes', 'ttse', 't', '2023-11-07 00:43:22', '2023-11-07 00:43:22'),
(2, '4', 'tes', 'tse', 'tes', 'tset', 'se', 'tsete', 'test', 'stes', NULL, 'est', 't', 'tes', 'set', 'tes', 'tes', 'ttse', 't', '2023-11-07 00:43:57', '2023-11-07 00:43:57'),
(3, '5', 'tes', 'tse', 'tes', 'tset', 'se', 'tsete', 'test', 'stes', NULL, 'est', 't', 'tes', 'set', 'tes', 'tes', 'ttse', 't', '2023-11-07 00:44:37', '2023-11-07 00:44:37'),
(4, '6', 'tes', 'tse', 'tes', 'tset', 'se', 'tsete', 'test', 'stes', NULL, 'est', 't', 'tes', 'set', 'tes', 'tes', 'ttse', 't', '2023-11-07 00:45:29', '2023-11-07 00:45:29'),
(5, '7', 'tes', 'tse', 'tes', 'tset', 'se', 'tsete', 'test', 'stes', NULL, 'est', 't', 'tes', 'set', 'tes', 'tes', 'ttse', 't', '2023-11-07 00:47:07', '2023-11-07 00:47:07'),
(6, '10', 'ytry', 'tryt', 'ryt', 'ytyty', 'ty', 'tytr', 'tr', 'yrty', NULL, 'ytry', 'ytr', 'ytr', 'ytr', 'ytryrt', 'yt', 'yry', 'ytryr', '2023-11-07 00:59:35', '2023-11-07 00:59:35');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `case_id` text DEFAULT NULL,
  `status` enum('active','inactive') NOT NULL DEFAULT 'active',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `case_id`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(13, 'Christian Ha', 'management@clearstarttax.com', NULL, '$2y$10$V5FYiplr.Ys6LqLNIkPy7e26Yk1ZfIcIwDjO7fBUE1Pw9jQMSmCFi', '18259', 'active', NULL, '2023-09-14 01:57:06', '2023-09-14 01:57:06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fq`
--
ALTER TABLE `fq`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fq_bankaccount`
--
ALTER TABLE `fq_bankaccount`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fq_bankspouseaccount`
--
ALTER TABLE `fq_bankspouseaccount`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fq_creditcards`
--
ALTER TABLE `fq_creditcards`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fq_dependent`
--
ALTER TABLE `fq_dependent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fq_estate`
--
ALTER TABLE `fq_estate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fq_investments`
--
ALTER TABLE `fq_investments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fq_lifeinsure`
--
ALTER TABLE `fq_lifeinsure`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fq_personal`
--
ALTER TABLE `fq_personal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fq_vehical`
--
ALTER TABLE `fq_vehical`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `toform`
--
ALTER TABLE `toform`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `to_dependent`
--
ALTER TABLE `to_dependent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `to_vehicle`
--
ALTER TABLE `to_vehicle`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `fq`
--
ALTER TABLE `fq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=313;

--
-- AUTO_INCREMENT for table `fq_bankaccount`
--
ALTER TABLE `fq_bankaccount`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=274;

--
-- AUTO_INCREMENT for table `fq_bankspouseaccount`
--
ALTER TABLE `fq_bankspouseaccount`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `fq_creditcards`
--
ALTER TABLE `fq_creditcards`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

--
-- AUTO_INCREMENT for table `fq_dependent`
--
ALTER TABLE `fq_dependent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=126;

--
-- AUTO_INCREMENT for table `fq_estate`
--
ALTER TABLE `fq_estate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `fq_investments`
--
ALTER TABLE `fq_investments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=127;

--
-- AUTO_INCREMENT for table `fq_lifeinsure`
--
ALTER TABLE `fq_lifeinsure`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `fq_personal`
--
ALTER TABLE `fq_personal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `fq_vehical`
--
ALTER TABLE `fq_vehical`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=130;

--
-- AUTO_INCREMENT for table `toform`
--
ALTER TABLE `toform`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `to_dependent`
--
ALTER TABLE `to_dependent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `to_vehicle`
--
ALTER TABLE `to_vehicle`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
