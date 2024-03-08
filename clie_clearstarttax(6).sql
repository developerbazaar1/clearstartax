-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 08, 2024 at 07:19 AM
-- Server version: 10.6.12-MariaDB-0ubuntu0.22.04.1
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `clie_clearstarttax`
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
(18, 'How do I get in touch with someone about my case?', 'Call us at <a href=\"tel:888-235-0004\">(888) 235-0004</a> and customer service representatives will help you out.', 'service', '2023-09-19 13:38:02', NULL),
(19, 'Why do we request more information as we go along?', 'The type of information we need changes as your case progresses. We\'ll guide you on what additional documents or details are required at each stage.', 'service', '2023-09-19 13:38:02', NULL),
(20, 'What\'s the best way to send you my documents securely?', 'We recommend using our secure client portal for all document submissions. Look for the “Documents” tab. You can also email us <a href=\"mailto:docs@clearstarttax.com\">docs@clearstarttax.com</a> or mail us your documents at 5 Park Plaza Suite 800, Irvine, CA 92614.', 'service', '2023-09-19 13:38:42', NULL),
(21, 'What are your customer service hours?', 'We\'re available from 8 am to 5 pm PST, Monday to Friday.', 'service', '2023-09-19 13:38:42', NULL),
(22, 'How often will I receive updates on my case?', 'You\'ll be updated at each significant stage your case reaches. Additionally, you can check the status of your case at any time through the dashboard in our portal.', 'service', '2023-09-19 13:39:19', NULL),
(23, 'Is there a way to track the progress of my case online?', 'Yes, you can use our client portal to see updates in the dashboard page or click more info on the top left under your case ID.', 'service', '2023-09-19 13:39:19', NULL),
(24, 'What do I do if I have an issue or complaint?', 'You can contact our customer service department at <a href=\"tel:888-235-0004\">(888) 235-0004</a>, who will address your concerns as quickly as possible.', 'service', '2023-09-19 13:39:59', NULL),
(25, 'Do you have any customer testimonials or case studies I can look at?', 'Yes, we have testimonials and case studies available on our website \r\n<a href=\"https://clearstarttax.com/testimonials\">HERE</a>.', 'service', '2023-09-19 13:39:59', NULL),
(26, 'What are the most common roadblocks or issues clients face during the process?', 'Common issues include incomplete documentation and failure to respond to requests in a timely manner.', 'service', '2023-09-19 13:40:38', NULL),
(27, 'Who will be my main point of contact throughout the process?', 'You won\'t have a single point of contact. Instead, our customer service team is trained to assist you regardless of what stage your case is in. They can pull up your details and give you the most current information.', 'service', '2023-09-19 13:40:38', NULL),
(28, 'Can family members contact you on my behalf?', 'Only if we have written authorization to discuss your case with them.', 'service', '2023-09-19 13:41:14', NULL),
(29, 'What happens if I miss a scheduled payment to you or to the IRS?', 'Missing a payment could jeopardize your agreement with the IRS and may incur additional fees from us. Please contact us at <a href=\"tel:888-235-0004\">(888) 235-0004</a> asap if this is the case.', 'service', '2023-09-19 13:41:14', NULL);

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
  `Spouse_Business_Name` text DEFAULT NULL,
  `Spouse_Employee_ID` text DEFAULT NULL,
  `Spouse_No_of_Employees` text DEFAULT NULL,
  `Spouse_Average_Monthly_Payroll` text DEFAULT NULL,
  `Spouse_Type_of_Business` text DEFAULT NULL,
  `Spouse_Frequency_of_Tax_Deposits` text DEFAULT NULL,
  `Spouse_Business_Website` text DEFAULT NULL,
  `Spouse_Employer_Name` text DEFAULT NULL,
  `Spouse_Occupation` text DEFAULT NULL,
  `Spouse_Employer_Address` text DEFAULT NULL,
  `Spouse_How_Long_with_this_Employer` text DEFAULT NULL,
  `Spouse_Number_of_Exemptions_claimed_on_W4` text DEFAULT NULL,
  `spStatus` text DEFAULT NULL,
  `Spouse_Pay_amount` text DEFAULT NULL,
  `Em_Employer_Name` text DEFAULT NULL,
  `Em_Occupation` text DEFAULT NULL,
  `Em_Employer_Address` text DEFAULT NULL,
  `Em_How_Long_with_this_Employer` text DEFAULT NULL,
  `Em_Number_of_Exemptions_claimed_on_W4` text DEFAULT NULL,
  `EmspStatus` text DEFAULT NULL,
  `emspouseamount` text DEFAULT NULL,
  `Business_Cash_On_Hand` text DEFAULT NULL,
  `Business_Bank_Account` text DEFAULT NULL,
  `Are_you_able_to_provide_current_year_Profit_Loss_Statement` text DEFAULT NULL,
  `Upload_Most_Recent_Profit_Loss_Statement` text DEFAULT NULL,
  `Item_Actual_Monthly_Gross_Receipts` text DEFAULT NULL,
  `Gross_Rental_Income` text DEFAULT NULL,
  `Interest` text DEFAULT NULL,
  `Dividends` text DEFAULT NULL,
  `Cash` text DEFAULT NULL,
  `Other_Income_5b` text DEFAULT NULL,
  `Total_Business_Income` text DEFAULT NULL,
  `Materials_Purchased` text DEFAULT NULL,
  `Inventory_Purchased` text DEFAULT NULL,
  `Gross_Wages_Salaries` text DEFAULT NULL,
  `Rent` text DEFAULT NULL,
  `Supplies` text DEFAULT NULL,
  `Business_Expenses` text DEFAULT NULL,
  `Utilities_Telephone` text DEFAULT NULL,
  `Vehicle_Gas_Oil` text DEFAULT NULL,
  `Repairs_Maintenance` text DEFAULT NULL,
  `Insurance` text DEFAULT NULL,
  `Current_Taxes` text DEFAULT NULL,
  `Other_Installment_Payments` text DEFAULT NULL,
  `Total_Business_Expenses` text DEFAULT NULL,
  `Net_Business_Income` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fq`
--

INSERT INTO `fq` (`id`, `user_id`, `Reference`, `Status`, `Login_username`, `Login_email`, `Last_Name`, `First_Name`, `Marital_Status`, `Date_Of_Birth`, `SSN`, `Married_Filing_Status`, `Street_Address`, `Address_Line_2`, `City`, `State`, `Zip_Code`, `Rent_Or_Own`, `County_Of_Residence`, `Primary_Phone_Number`, `snd_Contact_Phone_Number`, `Driver_License`, `Do_you_have_any_dependents_EXCLUDING_yourself_and_your_spouse`, `How_many_dependents_do_you_have`, `Client_Employment_Status`, `Cash_on_Hand_Amount`, `How_Many_Bank_Accounts_Do_You_Have`, `Do_You_Have_Any_Investments`, `Can_you_take_a_loan_against_your_401k_Account`, `Do_You_Have_Any_Credit_Cards`, `How_many_type_of_investments_do_you_have`, `How_many_Credit_Cards_Do_You_Have`, `Do_You_Have_Life_Insurance`, `How_Many_Life_Insurance_Policy_Do_You_Have`, `Do_You_Own_Any_Real_Estate`, `How_Many_Properties_Do_You_Own`, `Do_You_Own_A_Motor_Vehicle`, `How_Many_Motor_Vehicles_Do_You_Own`, `Do_You_Have_Any_Other_Personal_Assets`, `How_Many_Other_Personal_Assets_Do_You_Have`, `Interest_Dividends`, `Net_Self_Employed_Business_Income`, `Net_Rental_Income`, `Distribution`, `Social_Security_Income`, `Alimony_Income`, `Retirement_Income_Pension`, `Other_Income`, `Total_House_Hold_Income`, `Food_Clothing_Misc`, `Rent_Mortgage`, `Utilities`, `Vehicles_Ownership_Costs`, `Vehicles_Operating_Costs`, `Public_Transportation`, `Health_Insurance`, `Out_of_Pocket_Health_Costs`, `Court_Ordered_Payments`, `Child_Care`, `Life_Insurance`, `Taxes`, `Other_Secure_Debts`, `Other_Secure_Debts1`, `TotHousehold_Expense`, `Are_you_the_beneficiary_of_a_trust_estate_or_life_insurance_po`, `Are_you_currently_in_bankruptcy`, `Discharge_Dismissal_Date`, `Have_you_been_party_to_a_lawsuit`, `Date_the_lawsuit_was_resolved`, `In_the_past_10_years_have_you_transferred_any_assets_for_less_t`, `Date_the_asset_was_transferred`, `In_the_past_3_year_have_you_transferred_any_real_property`, `List_the_type_of_property_and_date_of_the_transfer`, `Print_Full_Name`, `Date`, `Signature`, `spouse_first_name`, `spouse_last_name`, `spouse_Driver_License`, `spouse_ssn`, `spouse_date_of_birth`, `spouse_employment_status`, `Spouse_Cash_on_Hand_Amount`, `How_Many_Bank_Accounts_Spouse_Have`, `Spouse_Wages`, `Spouse_Social_Security_Income`, `Spouse_Business_Name`, `Spouse_Employee_ID`, `Spouse_No_of_Employees`, `Spouse_Average_Monthly_Payroll`, `Spouse_Type_of_Business`, `Spouse_Frequency_of_Tax_Deposits`, `Spouse_Business_Website`, `Spouse_Employer_Name`, `Spouse_Occupation`, `Spouse_Employer_Address`, `Spouse_How_Long_with_this_Employer`, `Spouse_Number_of_Exemptions_claimed_on_W4`, `spStatus`, `Spouse_Pay_amount`, `Em_Employer_Name`, `Em_Occupation`, `Em_Employer_Address`, `Em_How_Long_with_this_Employer`, `Em_Number_of_Exemptions_claimed_on_W4`, `EmspStatus`, `emspouseamount`, `Business_Cash_On_Hand`, `Business_Bank_Account`, `Are_you_able_to_provide_current_year_Profit_Loss_Statement`, `Upload_Most_Recent_Profit_Loss_Statement`, `Item_Actual_Monthly_Gross_Receipts`, `Gross_Rental_Income`, `Interest`, `Dividends`, `Cash`, `Other_Income_5b`, `Total_Business_Income`, `Materials_Purchased`, `Inventory_Purchased`, `Gross_Wages_Salaries`, `Rent`, `Supplies`, `Business_Expenses`, `Utilities_Telephone`, `Vehicle_Gas_Oil`, `Repairs_Maintenance`, `Insurance`, `Current_Taxes`, `Other_Installment_Payments`, `Total_Business_Expenses`, `Net_Business_Income`, `created_at`, `updated_at`) VALUES
(352, '26', '65c0c5bd21326', 'Completed', 'Christian TEST TEST Ha TEST TEST TEST', 'management@clearstarttax.com', 'test', 'test', 'Married', '2024-02-06', '4534534', 'Married Filing Jointly', 'dfgdfg', 'fdgdfgdf', 'gdfg', 'fdgdf', '55435', 'gdfgfd', 'tdfgdfgd', '5435435', '345435345', 'fgdfg', 'have any dependents no', '0', 'Wage Earner', '656.00', '1', 'No', 'No', 'No', '0', '0', 'No', '0', 'No', '0', 'No', '0', 'No', '0', '5.00', '555.00', '0.0055', '5.00', '5.005', '5.00', '55.00', '5.00', '695.01', '56.00', '546.00', '456.00', '6.00', '4.00', '565.00', '656.00', '5656.00', '6.00', '6456.00', '456.00', '456.00', '456.00', '456.00', '16231.00', 'No', 'No', NULL, 'No', NULL, 'No', NULL, 'No', NULL, 'yrtyrty', '2024-02-21', NULL, 'tet', 'wtw', 'wetwe', '564565464', '2024-02-13', 'Self-Employed', '55.00', '1', '55.00', '5.00', 't', 'yrty', '5', '55', 'yty', 'hgfh', 'gf', 'ty', 'try', 'try', 'try', 'try', 'Weekly', '546', 'tret', 'tre', 'tert', 'reter', 'ret', 'Weekly', '435345', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-05 11:25:49', '2024-02-05 11:25:49'),
(355, '26', '65c0d38ad6860', 'Completed', 'Christian TEST TEST Ha TEST TEST TEST', 'management@clearstarttax.com', 'test', 'test', 'Married', '2024-02-06', '78768', 'Married Filing Jointly', 'test', 'test', 'test', 'estset', '4553', 'tett', 'rtretre', '435435465', '5345345', 'etertert', 'have any dependents no', '0', 'Self-Employed', '5435.00', '1', 'No', 'No', 'No', '0', '0', 'No', '0', 'No', '0', 'No', '0', 'No', '0', '654654.00', '0.00', '56.00', '6.00', '54654.00', '654.00', '5645.00', '56.00', '766835.00', '4.00', '4.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '4.00', '4.00', '4.00', '44.00', '4.00', '4.00', '72.00', 'No', 'No', NULL, 'No', NULL, 'No', NULL, 'No', NULL, 'rtter', '2024-02-29', NULL, 'tewt', 'wt', 'wet', NULL, '2024-03-01', 'Self-Employed', '5435.00', '1', '5465.00', '45645.00', 'tet', 'te', '555', '55', 'gh', 'hghgh', 'gh', 'tret', 'tet', 'retret', 'ret', 'trt', 'Bi-Weekly', '543543', 'tew', 'twe', 'tew', 'tet', 'tew', 'Bi-Weekly', '435435', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-05 12:24:42', '2024-02-05 12:24:42'),
(356, '26', '65c0d59235a9c', 'inprogress', 'Christian TEST TEST Ha TEST TEST TEST', 'management@clearstarttax.com', 'test', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL, '0', NULL, NULL, NULL, '0', '0', NULL, '0', NULL, '0', NULL, '0', NULL, '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-05 12:33:22', '2024-02-05 12:33:22'),
(358, '26', '65c0ed4c64b91', 'inprogress', 'Christian TEST TEST Ha TEST TEST TEST', 'management@clearstarttax.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL, '0', NULL, NULL, NULL, '0', '0', NULL, '0', NULL, '0', NULL, '0', NULL, '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-05 14:14:36', '2024-02-05 14:14:36'),
(363, '26', '65d345c7d7305', 'inprogress', 'Christian TEST TEST Ha TEST TEST TEST', 'management@clearstarttax.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL, '0', NULL, NULL, NULL, '0', '0', NULL, '0', NULL, '0', NULL, '0', NULL, '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-19 12:12:55', '2024-02-19 12:12:55'),
(365, '26', '65d35b4093f13', 'inprogress', 'Christian TEST TEST Ha TEST TEST TEST', 'management@clearstarttax.com', 'tes', NULL, 'Married', NULL, NULL, 'Married Filing Jointly', 'estset', NULL, NULL, NULL, NULL, 'estse', NULL, NULL, NULL, NULL, 'have any dependents yes', '0', 'Self-Employed', NULL, '0', NULL, NULL, NULL, '0', '0', NULL, '0', NULL, '0', NULL, '0', NULL, '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', NULL, 'Yes', '2024-02-20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'fdhf', NULL, '634634643', NULL, 'Wage Earner', NULL, '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', NULL, 'yes', 'upload/fq/5070761708350272.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-19 13:44:32', '2024-02-19 13:44:32'),
(366, '26', '65d442d9397bd', 'inprogress', 'Christian TEST TEST Ha TEST TEST TEST', 'management@clearstarttax.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL, '0', NULL, NULL, NULL, '0', '0', NULL, '0', NULL, '0', NULL, '0', NULL, '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-20 06:12:41', '2024-02-20 06:12:41'),
(367, '49', '65d7a8243e5c0', 'Completed', 'James LaBarge', 'jbarge2222@gmail.com', 'James', 'LaBarge', 'Married', '1977-04-02', '032685676', 'Married Filing Separately', '10 Dolphin Cir', NULL, 'Nashua', 'NH', '03062', 'Rent', 'Hillsborough', '6036883631', NULL, 'NHL12356352', 'have any dependents no', '0', 'Wage Earner', '1400.00', '1', 'No', 'No', 'No', '0', '0', 'No', '0', 'No', '0', 'Yes', '1', 'No', '0', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '105000.00', '800.00', '2250.00', '800.00', '760.00', '240.00', '0.00', '0.00', '0.00', '1235.00', '600.00', '0.00', '0.00', '0.00', '0.00', '6685.00', 'No', 'No', NULL, 'No', NULL, 'No', NULL, 'No', NULL, 'James LaBarge', '2024-02-22', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-22 20:01:40', '2024-02-22 20:01:40'),
(368, '49', '65d7a829e5e3e', 'Completed', 'James LaBarge', 'jbarge2222@gmail.com', 'James', 'LaBarge', 'Married', '1977-04-02', '032685676', 'Married Filing Separately', '10 Dolphin Cir', NULL, 'Nashua', 'NH', '03062', 'Rent', 'Hillsborough', '6036883631', NULL, 'NHL12356352', 'have any dependents no', '0', 'Wage Earner', '1400.00', '1', 'No', 'No', 'No', '0', '0', 'No', '0', 'No', '0', 'Yes', '1', 'No', '0', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '105000.00', '800.00', '2250.00', '800.00', '760.00', '240.00', '0.00', '0.00', '0.00', '1235.00', '600.00', '0.00', '0.00', '0.00', '0.00', '6685.00', 'No', 'No', NULL, 'No', NULL, 'No', NULL, 'No', NULL, 'James LaBarge', '2024-02-22', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-22 20:01:45', '2024-02-22 20:01:45'),
(369, '49', '65d7a82aee821', 'Completed', 'James LaBarge', 'jbarge2222@gmail.com', 'James', 'LaBarge', 'Married', '1977-04-02', '032685676', 'Married Filing Separately', '10 Dolphin Cir', NULL, 'Nashua', 'NH', '03062', 'Rent', 'Hillsborough', '6036883631', NULL, 'NHL12356352', 'have any dependents no', '0', 'Wage Earner', '1400.00', '1', 'No', 'No', 'No', '0', '0', 'No', '0', 'No', '0', 'Yes', '1', 'No', '0', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '105000.00', '800.00', '2250.00', '800.00', '760.00', '240.00', '0.00', '0.00', '0.00', '1235.00', '600.00', '0.00', '0.00', '0.00', '0.00', '6685.00', 'No', 'No', NULL, 'No', NULL, 'No', NULL, 'No', NULL, 'James LaBarge', '2024-02-22', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-22 20:01:46', '2024-02-22 20:01:46'),
(370, '49', '65d7a82b362bd', 'Completed', 'James LaBarge', 'jbarge2222@gmail.com', 'James', 'LaBarge', 'Married', '1977-04-02', '032685676', 'Married Filing Separately', '10 Dolphin Cir', NULL, 'Nashua', 'NH', '03062', 'Rent', 'Hillsborough', '6036883631', NULL, 'NHL12356352', 'have any dependents no', '0', 'Wage Earner', '1400.00', '1', 'No', 'No', 'No', '0', '0', 'No', '0', 'No', '0', 'Yes', '1', 'No', '0', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '105000.00', '800.00', '2250.00', '800.00', '760.00', '240.00', '0.00', '0.00', '0.00', '1235.00', '600.00', '0.00', '0.00', '0.00', '0.00', '6685.00', 'No', 'No', NULL, 'No', NULL, 'No', NULL, 'No', NULL, 'James LaBarge', '2024-02-22', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-22 20:01:47', '2024-02-22 20:01:47'),
(371, '44', '65dbb4a879c31', 'Completed', 'Luis Berrios', 'arielberrios@rocketmail.com', 'BERRIOS', 'LUIS', 'Married', '1961-05-16', '582390258', 'Married Filing Jointly', '23230 Skila Dr', NULL, 'Elmendorf', 'TX', '78112', 'Own', 'Bexar', '2108035963', NULL, '44971093', 'have any dependents no', '0', 'Retired', '4300.00', '1', 'Yes', 'No', 'Yes', '2', '5', 'No', '0', 'Yes', '2', 'Yes', '2', 'No', '0', '0.00', '0.00', '0.00', '0.00', '2248.00', '0.00', '0.00', '0.00', '2248.00', '450.00', '0.00', '380.00', '550.00', '400.00', '0.00', '375.00', '250.00', '0.00', '0.00', '30.00', '0.00', '0.00', '0.00', '2435.00', 'No', 'No', NULL, 'No', NULL, 'No', NULL, 'No', NULL, 'LUIS BERRIOS', '2024-02-25', NULL, 'Keila', 'Sosa', '44971147', '581473718', '1960-11-02', 'Unemployed', NULL, '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-25 21:44:08', '2024-02-25 21:44:08'),
(372, '106', '65de96cdbb1ad', 'inprogress', 'Mary Willson', 'willsonmary257@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL, '0', NULL, NULL, NULL, '0', '0', NULL, '0', NULL, '0', NULL, '0', NULL, '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'No', 'No', NULL, 'No', NULL, 'No', NULL, 'No', NULL, 'Mary Willson', '2024-02-27', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-28 02:13:33', '2024-02-28 02:13:33'),
(373, '108', '65df7d6415b82', 'inprogress', 'Robert Carcano', 'r.carcano@yahoo.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL, '0', NULL, NULL, NULL, '0', '0', NULL, '0', NULL, '0', NULL, '0', NULL, '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-28 18:37:24', '2024-02-28 18:37:24'),
(374, '120', '65e1041834914', 'inprogress', 'Molly  Baker ', 'mollybakerbird@gmail.com', 'Baker', 'Molly', NULL, NULL, '451734188', NULL, '650 Horseshoe Dr', NULL, 'Kingsland', 'TX', '78639', 'Rent', 'UnitedStates', '2542394924', NULL, '11463501', NULL, '0', NULL, NULL, '0', NULL, NULL, NULL, '0', '0', NULL, '0', NULL, '0', NULL, '0', NULL, '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-29 22:24:24', '2024-02-29 22:24:24'),
(377, '55', '65e4e924d4a9d', 'Completed', 'Tracee Gibbons', 'gibbint@gmail.com', 'Gibbons', 'Tracee', 'Single', '1964-09-14', '565173970', NULL, '3716 Bigler Way', '3716 Bigler Way', 'Sacramento', 'California', '95817', 'rent', 'UnitedStates', '8312398888', NULL, 'u0123457', 'have any dependents no', '0', 'Unemployed', '9890.00', '1', 'No', 'No', 'Yes', '0', '2', 'No', '0', 'No', '0', 'Yes', '1', 'No', '0', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '550.00', '1900.00', '200.00', '0.00', '200.00', '0.00', '118.23', '50.00', '0.00', '0.00', '0.00', '0.000', '0.00', '-2.00', '3016.23', 'No', 'No', NULL, 'No', NULL, 'No', NULL, 'No', NULL, 'Tracee Lee Gibbons', '2024-02-15', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'no', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-03 21:18:28', '2024-03-03 21:18:28'),
(378, '55', '65e4e92a6a53b', 'Completed', 'Tracee Gibbons', 'gibbint@gmail.com', 'Gibbons', 'Tracee', 'Single', '1964-09-14', '565173970', NULL, '3716 Bigler Way', '3716 Bigler Way', 'Sacramento', 'California', '95817', 'rent', 'UnitedStates', '8312398888', NULL, 'u0123457', 'have any dependents no', '0', 'Unemployed', '9890.00', '1', 'No', 'No', 'Yes', '0', '2', 'No', '0', 'No', '0', 'Yes', '1', 'No', '0', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '550.00', '1900.00', '200.00', '0.00', '200.00', '0.00', '118.23', '50.00', '0.00', '0.00', '0.00', '0.000', '0.00', '-2.00', '3016.23', 'No', 'No', NULL, 'No', NULL, 'No', NULL, 'No', NULL, 'Tracee Lee Gibbons', '2024-02-15', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'no', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-03 21:18:34', '2024-03-03 21:18:34');

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
(273, 'upload/fq/2534401698645687.png', '311', '2023-10-30 01:05:48', '2023-10-30 01:05:48'),
(274, 'upload/fq/5372271706526809.png', '315', '2024-01-29 11:13:29', '2024-01-29 11:13:29'),
(275, 'upload/fq/3026501706534847.png', '331', '2024-01-29 13:27:27', '2024-01-29 13:27:27'),
(276, 'upload/fq/2284281706535963.jpg', '333', '2024-01-29 13:46:03', '2024-01-29 13:46:03'),
(277, 'upload/fq/9698181707121358.jpg', '345', '2024-02-05 08:22:38', '2024-02-05 08:22:38'),
(278, 'upload/fq/8711501707126560.jpg', '346', '2024-02-05 09:49:20', '2024-02-05 09:49:20'),
(279, 'upload/fq/7208861707128918.jpg', '347', '2024-02-05 10:28:38', '2024-02-05 10:28:38'),
(280, 'upload/fq/6366651707129080.jpg', '348', '2024-02-05 10:31:20', '2024-02-05 10:31:20'),
(281, 'upload/fq/605891707129774.jpg', '349', '2024-02-05 10:42:54', '2024-02-05 10:42:54'),
(282, 'upload/fq/145451707130165.jpg', '350', '2024-02-05 10:49:25', '2024-02-05 10:49:25'),
(283, 'upload/fq/947531707130369.jpg', '351', '2024-02-05 10:52:49', '2024-02-05 10:52:49'),
(284, 'upload/fq/9999571707132349.jpg', '352', '2024-02-05 11:25:49', '2024-02-05 11:25:49'),
(285, 'upload/fq/3690631707133085.jpg', '353', '2024-02-05 11:38:05', '2024-02-05 11:38:05'),
(286, 'upload/fq/3690631707133085.jpg', '354', '2024-02-05 12:12:56', '2024-02-05 12:12:56'),
(287, 'upload/fq/3690631707133085.jpg', '355', '2024-02-05 12:24:42', '2024-02-05 12:24:42'),
(288, NULL, '361', '2024-02-15 22:54:54', '2024-02-15 22:54:54'),
(289, NULL, '362', '2024-02-15 22:56:03', '2024-02-15 22:56:03'),
(290, NULL, '367', '2024-02-22 20:01:40', '2024-02-22 20:01:40'),
(291, NULL, '368', '2024-02-22 20:01:45', '2024-02-22 20:01:45'),
(292, NULL, '369', '2024-02-22 20:01:46', '2024-02-22 20:01:46'),
(293, NULL, '370', '2024-02-22 20:01:47', '2024-02-22 20:01:47'),
(294, NULL, '371', '2024-02-25 21:44:08', '2024-02-25 21:44:08'),
(295, NULL, '375', '2024-03-03 21:17:45', '2024-03-03 21:17:45'),
(296, NULL, '376', '2024-03-03 21:18:06', '2024-03-03 21:18:06'),
(297, NULL, '377', '2024-03-03 21:18:28', '2024-03-03 21:18:28');

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

--
-- Dumping data for table `fq_bankspouseaccount`
--

INSERT INTO `fq_bankspouseaccount` (`id`, `bankspouse`, `fq_id`, `created_at`, `updated_at`) VALUES
(33, 'upload/fq/9720791707129080.jpg', '348', '2024-02-05 10:31:20', '2024-02-05 10:31:20'),
(34, 'upload/fq/2815291707129774.jpg', '349', '2024-02-05 10:42:54', '2024-02-05 10:42:54'),
(35, 'upload/fq/4390401707130165.jpg', '350', '2024-02-05 10:49:25', '2024-02-05 10:49:25'),
(36, 'upload/fq/5343281707130369.jpg', '351', '2024-02-05 10:52:49', '2024-02-05 10:52:49'),
(37, 'upload/fq/9501891707132349.jpg', '352', '2024-02-05 11:25:49', '2024-02-05 11:25:49'),
(38, NULL, '355', '2024-02-05 12:24:42', '2024-02-05 12:24:42');

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

--
-- Dumping data for table `fq_creditcards`
--

INSERT INTO `fq_creditcards` (`id`, `Creditcards`, `fq_id`, `created_at`, `updated_at`) VALUES
(94, NULL, '360', '2024-02-15 22:10:46', '2024-02-15 22:10:46'),
(95, NULL, '360', '2024-02-15 22:10:46', '2024-02-15 22:10:46'),
(96, NULL, '360', '2024-02-15 22:10:46', '2024-02-15 22:10:46'),
(97, 'upload/fq/9350241708037694.pdf', '361', '2024-02-15 22:54:54', '2024-02-15 22:54:54'),
(98, 'upload/fq/5130651708037694.pdf', '361', '2024-02-15 22:54:54', '2024-02-15 22:54:54'),
(99, 'upload/fq/9350241708037694.pdf', '362', '2024-02-15 22:56:03', '2024-02-15 22:56:03'),
(100, 'upload/fq/5130651708037694.pdf', '362', '2024-02-15 22:56:03', '2024-02-15 22:56:03'),
(101, NULL, '371', '2024-02-25 21:44:08', '2024-02-25 21:44:08'),
(102, NULL, '371', '2024-02-25 21:44:08', '2024-02-25 21:44:08'),
(103, NULL, '371', '2024-02-25 21:44:08', '2024-02-25 21:44:08'),
(104, NULL, '371', '2024-02-25 21:44:08', '2024-02-25 21:44:08'),
(105, NULL, '371', '2024-02-25 21:44:08', '2024-02-25 21:44:08'),
(106, 'upload/fq/9350241708037694.pdf', '375', '2024-03-03 21:17:45', '2024-03-03 21:17:45'),
(107, 'upload/fq/5130651708037694.pdf', '375', '2024-03-03 21:17:45', '2024-03-03 21:17:45'),
(108, 'upload/fq/9350241708037694.pdf', '376', '2024-03-03 21:18:06', '2024-03-03 21:18:06'),
(109, 'upload/fq/5130651708037694.pdf', '376', '2024-03-03 21:18:06', '2024-03-03 21:18:06'),
(110, 'upload/fq/9350241708037694.pdf', '377', '2024-03-03 21:18:28', '2024-03-03 21:18:28'),
(111, 'upload/fq/5130651708037694.pdf', '377', '2024-03-03 21:18:28', '2024-03-03 21:18:28');

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

--
-- Dumping data for table `fq_dependent`
--

INSERT INTO `fq_dependent` (`id`, `Name`, `Date_Of_Birth`, `SSN`, `Relationship`, `fq_id`, `created_at`, `updated_at`) VALUES
(126, 'gfhgfh', '2024-01-26', 'hgfhgfh', 'gfhgf', '314', '2024-01-25 12:21:34', '2024-01-25 12:21:34'),
(127, 'hgfh', '2024-02-01', 'hgfh', 'gfhgf', '314', '2024-01-25 12:21:34', '2024-01-25 12:21:34');

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

--
-- Dumping data for table `fq_estate`
--

INSERT INTO `fq_estate` (`id`, `Property_address`, `Country`, `Mortgage_lender`, `Purchase_date`, `Fair_market_value`, `Loan_balance`, `Monthly_payment`, `Date_of_final`, `Monthly_property_tax`, `How_is_title_held`, `property_document`, `fq_id`, `created_at`, `updated_at`) VALUES
(50, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '371', '2024-02-25 21:44:08', '2024-02-25 21:44:08'),
(51, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '371', '2024-02-25 21:44:08', '2024-02-25 21:44:08');

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
(126, 'gd', 'tret', 'erter', 'tertt', 'ter', '311', '2023-10-30 01:05:48', '2023-10-30 01:05:48'),
(127, NULL, NULL, NULL, NULL, NULL, '371', '2024-02-25 21:44:08', '2024-02-25 21:44:08'),
(128, NULL, NULL, NULL, NULL, NULL, '371', '2024-02-25 21:44:08', '2024-02-25 21:44:08');

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

--
-- Dumping data for table `fq_vehical`
--

INSERT INTO `fq_vehical` (`id`, `Make_and_model`, `Year`, `Mileage`, `Lease_or_own`, `Date_of_purchased`, `Date_of_final_payment`, `Current_value`, `Current_loan_value`, `Monthly_payment`, `Name_of_lender`, `Is_vehicle_1_financed_or_leased`, `vehicleup`, `fq_id`, `created_at`, `updated_at`) VALUES
(47, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '360', '2024-02-15 22:10:46', '2024-02-15 22:10:46'),
(48, 'Mercedes c300', '2011', '82000', 'Own', '2016', '0', '6000', '0', '0', '0', NULL, NULL, '361', '2024-02-15 22:54:54', '2024-02-15 22:54:54'),
(49, 'Mercedes c300', '2011', '82000', 'Own', '2016', '0', '6000', '0', '0', '0', NULL, NULL, '362', '2024-02-15 22:56:03', '2024-02-15 22:56:03'),
(50, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '367', '2024-02-22 20:01:40', '2024-02-22 20:01:40'),
(51, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '368', '2024-02-22 20:01:45', '2024-02-22 20:01:45'),
(52, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '369', '2024-02-22 20:01:46', '2024-02-22 20:01:46'),
(53, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '370', '2024-02-22 20:01:47', '2024-02-22 20:01:47'),
(54, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '371', '2024-02-25 21:44:08', '2024-02-25 21:44:08'),
(55, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '371', '2024-02-25 21:44:08', '2024-02-25 21:44:08'),
(56, 'Mercedes c300', '2011', '82000', 'Own', '2016', '2022', '6000', '0', '0', 'safe credit union', NULL, NULL, '375', '2024-03-03 21:17:45', '2024-03-03 21:17:45'),
(57, 'Mercedes c300', '2011', '82000', 'Own', '2016', '2022', '6000', '0', '0', 'safe credit union', NULL, NULL, '376', '2024-03-03 21:18:06', '2024-03-03 21:18:06'),
(58, 'Mercedes c300', '2011', '82000', 'Own', '2016', '2022', '6000', '0', '0', 'safe credit union', NULL, NULL, '377', '2024-03-03 21:18:28', '2024-03-03 21:18:28');

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
-- Table structure for table `password_reset_custom`
--

CREATE TABLE `password_reset_custom` (
  `id` int(11) NOT NULL,
  `email` text DEFAULT NULL,
  `token` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Dumping data for table `password_reset_custom`
--

INSERT INTO `password_reset_custom` (`id`, `email`, `token`, `created_at`, `updated_at`) VALUES
(1, 'management@clearstarttax.com', 'pj4yQD', '2024-01-19 12:48:07', '2024-01-19 12:48:07'),
(2, 'management@clearstarttax.com', 'DKKHHZ', '2024-01-19 12:48:24', '2024-01-19 12:48:24'),
(3, 'management@clearstarttax.com', 't6zThS', '2024-01-19 12:48:45', '2024-01-19 12:48:45'),
(4, 'management@clearstarttax.com', 'MhZwCA', '2024-01-19 12:49:20', '2024-01-19 12:49:20'),
(5, 'management@clearstarttax.com', '1eLemF', '2024-01-19 12:53:39', '2024-01-19 12:53:39'),
(8, 'pragyakushwah2017@gmail.com', 'Z3Sycs', '2024-01-22 06:46:42', '2024-01-22 06:46:42'),
(9, 'pragyakushwah2017@gmail.com', 'PcCs6S', '2024-01-22 07:25:44', '2024-01-22 07:25:44'),
(10, 'pragyakushwah2017@gmail.com', 'c4DDmE', '2024-01-22 12:16:20', '2024-01-22 12:16:20');

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
('db.aloksoni@gmail.com', '$2y$10$H/d7lfeC/Fl/.xtCoQ1Gdu910U5y0wljX2DAD25tsEwgtfr5LhCrG', '2024-02-05 13:33:52'),
('management@clearstarttax.com', '$2y$10$9XjJF.Z31and/a039c0w0ua37FkgmohT2TAzZ/1x7g2HmN3kQDG2C', '2024-02-29 18:08:26'),
('pragyachouhan76666@gmail.com', '$2y$10$UMFJtIlme8X4DmEaS1JJiOuaw8kj7D0nvNjneqjuQ/gVajhZTDw0q', '2023-09-11 04:04:21'),
('pragyakushwah2017@gmail.com', '$2y$10$Wh7udFIcEM9XvTKaDeD03eUV2MZb9N57f5vABAOFkkqKeYlIg/mg.', '2024-02-08 05:25:39'),
('Stanya44@yahoo.com', '$2y$10$TxH29nbcfv3vrogrnvQO3eMbnsADFgounfLr3CUC/pqN1uw84J1Se', '2024-02-16 00:18:42'),
('weatherstorm1988@gmail.com', '$2y$10$Mian5rRfMXyoIqafpFRee.060zBe92v8rTjEA3lq0X31f4sKcwkJK', '2024-02-07 18:29:40');

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

--
-- Dumping data for table `personal_access_tokens`
--

INSERT INTO `personal_access_tokens` (`id`, `tokenable_type`, `tokenable_id`, `name`, `token`, `abilities`, `last_used_at`, `expires_at`, `created_at`, `updated_at`) VALUES
(1, 'App\\Models\\User', 13, 'API TOKEN', 'b4a8eaf24d7defa34d98db8496c06f72ac5579d6e40edc4d083199829726c3aa', '[\"*\"]', '2024-01-24 12:25:00', NULL, '2024-01-19 09:41:28', '2024-01-24 12:25:00'),
(2, 'App\\Models\\User', 13, 'API TOKEN', '6fa6dc7a2d4708bb347bba3131a8d380a567c9acd4a02690bfc7873a7bd5f93d', '[\"*\"]', NULL, NULL, '2024-01-19 12:46:39', '2024-01-19 12:46:39'),
(3, 'App\\Models\\User', 13, 'API TOKEN', '7071dbee2e2275b486a7f9ffb2c9dfd79486e7ce74099de7364f0ab4a5ee643d', '[\"*\"]', '2024-02-08 12:10:17', NULL, '2024-01-19 12:47:02', '2024-02-08 12:10:17'),
(4, 'App\\Models\\User', 19, 'API TOKEN', 'b1581bddae2076c208d166dc2bfd4d58b47467c0fd28d24201e5299e40a13dc9', '[\"*\"]', NULL, NULL, '2024-01-19 12:56:17', '2024-01-19 12:56:17'),
(5, 'App\\Models\\User', 19, 'API TOKEN', '651e603a483e4defde1137afdc08f060d9e29128a0f164c3f3b3671f5ccd274c', '[\"*\"]', NULL, NULL, '2024-01-19 12:58:14', '2024-01-19 12:58:14'),
(6, 'App\\Models\\User', 13, 'API TOKEN', 'c9f0fead00bd0c6dbe2f38de7d8f79ace88ff61439e5cd8b879e8c0cae7d017d', '[\"*\"]', NULL, NULL, '2024-01-23 09:28:53', '2024-01-23 09:28:53'),
(7, 'App\\Models\\User', 13, 'API TOKEN', '2023c1e04fc4b197734c93cf0af04c49f7c2292ab33cece88b8bce202114b0b0', '[\"*\"]', NULL, NULL, '2024-01-23 09:29:04', '2024-01-23 09:29:04'),
(8, 'App\\Models\\User', 13, 'API TOKEN', 'd5ea42eb6d5ea6b5512867bbcb757500fdfb1615b7a54585e1e69dee50a8a4ef', '[\"*\"]', NULL, NULL, '2024-01-23 09:29:21', '2024-01-23 09:29:21'),
(9, 'App\\Models\\User', 13, 'API TOKEN', 'f64d4d8bd3e520daa7c8d276079eb79f1f746a88e7e211981c881b523bd7aee1', '[\"*\"]', NULL, NULL, '2024-01-23 10:21:37', '2024-01-23 10:21:37'),
(10, 'App\\Models\\User', 13, 'API TOKEN', '05f0fb31fcb4d4e990f869279f907cc0c7c237123b646350bdb84013cd893914', '[\"*\"]', NULL, NULL, '2024-01-23 10:21:37', '2024-01-23 10:21:37'),
(11, 'App\\Models\\User', 13, 'API TOKEN', '0cf68f246e325edff8aa020a24a47b5216ca4c93b112c7a88114b35881266ae4', '[\"*\"]', NULL, NULL, '2024-01-23 10:29:56', '2024-01-23 10:29:56'),
(12, 'App\\Models\\User', 13, 'API TOKEN', '3cd836637ad443904d56b9dde95007984ed3fcf03c8e5cbcbd45c989e7fd62bf', '[\"*\"]', NULL, NULL, '2024-01-23 10:41:05', '2024-01-23 10:41:05'),
(13, 'App\\Models\\User', 13, 'API TOKEN', 'acdd6bb46d7f0f2720b6efc63838bf8de461e747751dab14048537571f01ae8b', '[\"*\"]', NULL, NULL, '2024-01-23 10:41:05', '2024-01-23 10:41:05'),
(14, 'App\\Models\\User', 13, 'API TOKEN', '4e5006cddb75523beb74de6ce72fc3c6c2178573a839d32f1f0b8fe3bebcb254', '[\"*\"]', NULL, NULL, '2024-01-23 10:48:57', '2024-01-23 10:48:57'),
(15, 'App\\Models\\User', 13, 'API TOKEN', '825e2f06fc466add464861bd91bb0c0cdf19ff951a633bd05eda7ca6c9f63daf', '[\"*\"]', NULL, NULL, '2024-01-23 10:49:02', '2024-01-23 10:49:02'),
(16, 'App\\Models\\User', 13, 'API TOKEN', '8b72853c4fdeb22bec7360cbe2ffde4e0eb815e91f6efa559e3e0a6724c76524', '[\"*\"]', NULL, NULL, '2024-01-23 10:51:00', '2024-01-23 10:51:00'),
(17, 'App\\Models\\User', 13, 'API TOKEN', 'feabacc7c3c52cfc15bfd606ad65ce14e4346e53bdf5264aae4b66cfce177470', '[\"*\"]', NULL, NULL, '2024-01-23 11:07:58', '2024-01-23 11:07:58'),
(18, 'App\\Models\\User', 13, 'API TOKEN', '90fa29c3eb68131f731e080765a7cb2620441924bbf7115a0598c123f60aabfb', '[\"*\"]', NULL, NULL, '2024-01-23 11:46:26', '2024-01-23 11:46:26'),
(19, 'App\\Models\\User', 13, 'API TOKEN', 'c382b6ae7e20230100f91b57e4f2c7bfb96e6483a416ace6f0b62d472d00309b', '[\"*\"]', NULL, NULL, '2024-01-23 11:51:53', '2024-01-23 11:51:53'),
(20, 'App\\Models\\User', 13, 'API TOKEN', '863b6aa1d4d923ef901f6720b96a9ccf2d3333379e4fc6c844ba933292369d2f', '[\"*\"]', NULL, NULL, '2024-01-23 11:51:54', '2024-01-23 11:51:54'),
(21, 'App\\Models\\User', 13, 'API TOKEN', '4021e9f1683fb9d4b591fa0e7bd1dc79f841fd6fc434baa664e75b58430598e2', '[\"*\"]', NULL, NULL, '2024-01-23 11:57:17', '2024-01-23 11:57:17'),
(22, 'App\\Models\\User', 13, 'API TOKEN', 'f274b7d363065c56818e645e26d636afed88a2a003fb1379f5670f8552764de9', '[\"*\"]', '2024-01-23 12:00:47', NULL, '2024-01-23 12:00:40', '2024-01-23 12:00:47'),
(23, 'App\\Models\\User', 13, 'API TOKEN', '88819c6b212e3a6d677876748d5b19337e63cf40eb496465dec013258cfe5013', '[\"*\"]', NULL, NULL, '2024-01-23 12:05:40', '2024-01-23 12:05:40'),
(24, 'App\\Models\\User', 26, 'API TOKEN', '4514cb01a7949f3ba33f5bf462639b1c5f04a519c270473960b777acc1520a7d', '[\"*\"]', NULL, NULL, '2024-01-24 11:45:49', '2024-01-24 11:45:49'),
(25, 'App\\Models\\User', 26, 'API TOKEN', '36fd08de9c006cc02faf7320cc687965be621561da18ddfea8522fb92325d22d', '[\"*\"]', NULL, NULL, '2024-01-24 12:19:09', '2024-01-24 12:19:09'),
(26, 'App\\Models\\User', 26, 'API TOKEN', '62c9628fa4d58b28f2596706b3419cde2f226c8b41ac14f1200f7587d574cc38', '[\"*\"]', '2024-02-01 07:49:01', NULL, '2024-01-24 12:25:41', '2024-02-01 07:49:01'),
(27, 'App\\Models\\User', 26, 'API TOKEN', '7e43e5142accd10c9c48d69086c45027279802537b3ed376344a2d28fd45389a', '[\"*\"]', '2024-01-25 11:24:56', NULL, '2024-01-24 12:27:23', '2024-01-25 11:24:56'),
(28, 'App\\Models\\User', 26, 'API TOKEN', '2a89f7f3822253f747d1ce26cfc34eec65cd4fc86c337317df7d4b07d989f69b', '[\"*\"]', NULL, NULL, '2024-01-24 12:38:09', '2024-01-24 12:38:09'),
(29, 'App\\Models\\User', 26, 'API TOKEN', '77df598ab36280e9d3970c2388c41948426e13c0729cb582b46979eb160c7786', '[\"*\"]', NULL, NULL, '2024-01-24 12:54:01', '2024-01-24 12:54:01'),
(30, 'App\\Models\\User', 26, 'API TOKEN', '4fd035311e4ecbd05dc2754562e373cff9c65e4baceb20e22141fe740da11e2f', '[\"*\"]', '2024-01-25 12:31:10', NULL, '2024-01-25 05:04:03', '2024-01-25 12:31:10'),
(31, 'App\\Models\\User', 26, 'API TOKEN', '791faaac308d3bd2df9cf3350829a920094b4258a7c40ba16292933cf4be5f6a', '[\"*\"]', NULL, NULL, '2024-02-21 14:13:23', '2024-02-21 14:13:23'),
(32, 'App\\Models\\User', 26, 'API TOKEN', '2db8b3a5b72899c1fa8f2c74c3c32b50413d81e47d43e99f237a77ed44c704a5', '[\"*\"]', '2024-03-05 12:39:12', NULL, '2024-02-22 11:12:45', '2024-03-05 12:39:12'),
(34, 'App\\Models\\User', 26, 'API TOKEN', '3d1e5767ed91b85bcb6e19fe9585b9e0b2cfc63e7dbc6fd9950cb65f79ecae37', '[\"*\"]', '2024-02-22 16:36:10', NULL, '2024-02-22 16:35:25', '2024-02-22 16:36:10'),
(35, 'App\\Models\\User', 26, 'API TOKEN', '9613c479bb56ce0ad7e706970fca7ebd2b1a9ff57546f95f20f63c7d696c35a5', '[\"*\"]', '2024-02-22 16:56:28', NULL, '2024-02-22 16:42:09', '2024-02-22 16:56:28'),
(36, 'App\\Models\\User', 26, 'API TOKEN', 'ce3e7135771e5b16d3f6b83da5b2a62e90a0b0813b40b5ff84ffe5f403f35ca1', '[\"*\"]', '2024-02-22 16:44:52', NULL, '2024-02-22 16:44:37', '2024-02-22 16:44:52'),
(46, 'App\\Models\\User', 26, 'API TOKEN', '49afc0e0d83059b646ca9cce19390c90fc69c6442f379fede954dfb80847842c', '[\"*\"]', NULL, NULL, '2024-02-28 11:30:44', '2024-02-28 11:30:44'),
(49, 'App\\Models\\User', 26, 'API TOKEN', '8bbe2c5ff50fae7aad3a46921e66ae9dd5ce2b3ac7a05db9d01af5b1b3991736', '[\"*\"]', NULL, NULL, '2024-02-28 12:55:23', '2024-02-28 12:55:23'),
(54, 'App\\Models\\User', 26, 'API TOKEN', '057753e45580c3642c4fe328362896f071ccae326b9eb296d341190cd4690fb7', '[\"*\"]', NULL, NULL, '2024-02-28 13:05:36', '2024-02-28 13:05:36'),
(55, 'App\\Models\\User', 26, 'API TOKEN', '93a94ec9774468e7fc0e18b3bf0c9822aa7dfa663db4bf60b06f36e188bf96ea', '[\"*\"]', NULL, NULL, '2024-02-28 13:09:42', '2024-02-28 13:09:42'),
(56, 'App\\Models\\User', 26, 'API TOKEN', '775adba52c672baa3597c80378f08fbed20c88c23721abdaf79e643b45c6497b', '[\"*\"]', NULL, NULL, '2024-02-28 13:11:11', '2024-02-28 13:11:11'),
(60, 'App\\Models\\User', 26, 'API TOKEN', 'e45af65f6b2e1da16a296d712e7431a70063656e82d6f8c4e57d41bca7392b0f', '[\"*\"]', NULL, NULL, '2024-02-29 07:48:13', '2024-02-29 07:48:13'),
(69, 'App\\Models\\User', 26, 'API TOKEN', 'e2ce1d684f3c904feb35d45959145f10c537590d8c17b11985629376ad05f70a', '[\"*\"]', '2024-02-29 10:31:21', NULL, '2024-02-29 10:31:21', '2024-02-29 10:31:21'),
(70, 'App\\Models\\User', 26, 'API TOKEN', 'd4dc97d992267968288f94eb9de83606baabf1b33de23a955b93e85e94769708', '[\"*\"]', '2024-02-29 10:54:01', NULL, '2024-02-29 10:54:00', '2024-02-29 10:54:01'),
(71, 'App\\Models\\User', 26, 'API TOKEN', 'c4bccc94427816658d06933529f535125cc795a98fc7724eadb719a3e72e3629', '[\"*\"]', '2024-02-29 10:55:08', NULL, '2024-02-29 10:55:07', '2024-02-29 10:55:08'),
(72, 'App\\Models\\User', 26, 'API TOKEN', 'be16c6cb6fc4b90a3c183dd49423335aeea296777941b2665f5b8120a5de32b8', '[\"*\"]', '2024-02-29 10:56:57', NULL, '2024-02-29 10:56:56', '2024-02-29 10:56:57'),
(73, 'App\\Models\\User', 26, 'API TOKEN', 'd4dfc17f3167564554eb0cb0d7ee94802ae905200e5bb38006e6e99e764fa612', '[\"*\"]', '2024-02-29 10:57:53', NULL, '2024-02-29 10:57:52', '2024-02-29 10:57:53'),
(74, 'App\\Models\\User', 26, 'API TOKEN', '31914555228c2f3b38b7dc2bcc71884de701dce88d28c0974ee212022f2591e7', '[\"*\"]', '2024-03-01 05:10:35', NULL, '2024-02-29 11:02:00', '2024-03-01 05:10:35'),
(75, 'App\\Models\\User', 26, 'API TOKEN', 'a310e0263c3a5b4d2f178088519a181064002dd035a404bb9b81b013d9d08f83', '[\"*\"]', '2024-03-01 05:53:37', NULL, '2024-03-01 05:46:05', '2024-03-01 05:53:37'),
(76, 'App\\Models\\User', 26, 'API TOKEN', '0780cdc6e9b2b70dbbdf3dcae900ea7b606895d50edfd6efb3add9cf2f8881f4', '[\"*\"]', '2024-03-01 06:13:57', NULL, '2024-03-01 06:13:56', '2024-03-01 06:13:57'),
(77, 'App\\Models\\User', 26, 'API TOKEN', 'ec98e53fa2f07d4efdecfbe2d00d180449b603e5d8c6272a6e25899aeb719950', '[\"*\"]', '2024-03-01 06:17:04', NULL, '2024-03-01 06:17:03', '2024-03-01 06:17:04'),
(78, 'App\\Models\\User', 26, 'API TOKEN', '4fb8ab44b385d3f95ba00b68ba8016075e644d93f17f0b4ff2ce2dcdb5cf8536', '[\"*\"]', '2024-03-01 06:18:31', NULL, '2024-03-01 06:18:30', '2024-03-01 06:18:31'),
(79, 'App\\Models\\User', 26, 'API TOKEN', 'c297b504c54662c9dc960e901a4a97586549a3d645b3b28b2198bcb3143c60b4', '[\"*\"]', '2024-03-01 06:25:29', NULL, '2024-03-01 06:25:28', '2024-03-01 06:25:29'),
(80, 'App\\Models\\User', 26, 'API TOKEN', '0b814c458354b137292e2b561f85c66cee1e419aa1b367716cec04cb2e6bd836', '[\"*\"]', '2024-03-01 06:26:45', NULL, '2024-03-01 06:26:44', '2024-03-01 06:26:45'),
(81, 'App\\Models\\User', 26, 'API TOKEN', '20781fc71c4a682df97d125475ca0c5d8a6492e9e88e3f195132530cc3e4cf88', '[\"*\"]', '2024-03-01 06:28:04', NULL, '2024-03-01 06:28:03', '2024-03-01 06:28:04'),
(82, 'App\\Models\\User', 26, 'API TOKEN', '783cca8c3b5e9fa1ebc70cfae79cfa5836a0422985c213750e7ca178f6b31916', '[\"*\"]', '2024-03-01 06:29:30', NULL, '2024-03-01 06:29:29', '2024-03-01 06:29:30'),
(83, 'App\\Models\\User', 26, 'API TOKEN', '70f2c1206793ed0f738ca68b62a91e96a5eba5ff386a4840e7140d042779c519', '[\"*\"]', '2024-03-01 06:31:55', NULL, '2024-03-01 06:31:54', '2024-03-01 06:31:55'),
(84, 'App\\Models\\User', 26, 'API TOKEN', '55645b3f1a455cfe5cb158e9452184552dba5a531dcead3556517af11ea712ba', '[\"*\"]', '2024-03-01 06:37:14', NULL, '2024-03-01 06:37:13', '2024-03-01 06:37:14'),
(85, 'App\\Models\\User', 26, 'API TOKEN', 'bc8fc56e82c4b80d6d28fae86e423b4d1d5692768abf8baefbe5bbd11fe45962', '[\"*\"]', '2024-03-01 06:39:36', NULL, '2024-03-01 06:39:35', '2024-03-01 06:39:36'),
(86, 'App\\Models\\User', 26, 'API TOKEN', '03f34295cfe21e9e073dd2e4b5fdda05fea517a6b2d8e56ccf67ff17e93bd505', '[\"*\"]', '2024-03-01 06:42:18', NULL, '2024-03-01 06:42:17', '2024-03-01 06:42:18'),
(87, 'App\\Models\\User', 26, 'API TOKEN', '82ab8f9dc09fca160fb45d6c49b5d2b607cd6acf238d557b5d05fc1eed215b4c', '[\"*\"]', '2024-03-01 07:41:01', NULL, '2024-03-01 06:45:34', '2024-03-01 07:41:01'),
(91, 'App\\Models\\User', 26, 'API TOKEN', '05d333c5b8b5a260f9b124a322fd25011d17d3e0e4662faa73539c29fbd2a402', '[\"*\"]', '2024-03-01 08:02:56', NULL, '2024-03-01 08:01:43', '2024-03-01 08:02:56'),
(112, 'App\\Models\\User', 26, 'API TOKEN', '20a2067feec35e53aa0665917aef6817eb03c8dafffd6b567603e15b3e70a72c', '[\"*\"]', '2024-03-07 12:40:44', NULL, '2024-03-01 13:59:20', '2024-03-07 12:40:44'),
(116, 'App\\Models\\User', 26, 'API TOKEN', 'a9fc41d40dd534c641044a0a4d721031ee846c0a538787df265090bca6f278c4', '[\"*\"]', '2024-03-07 05:33:26', NULL, '2024-03-07 05:32:55', '2024-03-07 05:33:26'),
(117, 'App\\Models\\User', 26, 'API TOKEN', '89b6355845f6033063bc4f3a8884f7bbd5e290ce9719ce745179423a1d00ecf0', '[\"*\"]', '2024-03-07 06:19:19', NULL, '2024-03-07 06:18:09', '2024-03-07 06:19:19'),
(118, 'App\\Models\\User', 26, 'API TOKEN', 'bf3608cdb2a1fd0302af91f337832d698cdc8d04e7f6c532ef7a471bac9e2bae', '[\"*\"]', '2024-03-07 13:24:47', NULL, '2024-03-07 12:53:37', '2024-03-07 13:24:47');

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
(129, 'Completed- OIC acknowledged, waiting on answer', '435', 'Your Offer in Compromise (OIC) has been acknowledged by the IRS and is under review.', 'You\'re in a waiting period until the IRS responds with their decision on your OIC.', '2023-11-15 07:18:05', NULL),
(130, 'Finance Pending - Need More Info: Verification Call', '436', 'To ensure the authenticity and accuracy of your application, a verification call is necessary. This step is a crucial part of our process. If you haven\'t received a call yet, please contact us at (888-235-0004, press 4) for assistance. Your prompt availability for this call is essential for a swift loan processing experience.', 'Following the completion and verification of your details during the call, we will proceed with both your loan and tax case.', '2023-12-19 03:17:07', NULL),
(131, 'Finance Pending - Need More Info: POI', '437', 'To validate your income for the loan, please provide one of the following documents: a recent pay stub, tax return, or bank statement. Speedy ', 'Upon receipt of your POI, we will advance both your loan application and tax case.', '2023-12-19 03:17:07', NULL),
(132, 'Finance Pending - Need More Info: ID', '438', 'A valid government-issued ID is required to verify your identity, aligning with standard financial practices. Please send a current and legible copy of your ID (driver\'s license or passport) to finance@clearstarttax.com or text it to 949-504-9998 to continue with your financing process.', 'With the receipt of your ID, we will progress with your loan and tax case.', '2023-12-19 03:19:20', NULL),
(133, 'Finance Pending - Need More Info: Additional info', '439', 'Additional information is required to proceed with your loan application. This may pertain to your financial history, employment, or other pertinent details. Please contact us at (888-235-0004, press 4) to provide this information promptly, ensuring a smooth continuation of your loan process.', 'Once we address these additional details, we will move forward with both your loan and tax case.', '2023-12-19 03:19:20', NULL),
(134, 'Investigation: State POA needed', '440', 'We are at a critical stage where obtaining a Power of Attorney (POA) for your state tax issues is necessary. We are reaching out to you, or may have already done so, to complete and sign the POA form. This authorization is essential for us to represent and negotiate with your state\'s tax authority on your behalf.', 'Please be attentive to our communication regarding the State POA. To expedite this process, you can call us at 888-235-0004 and press 1. Timely completion and return of the POA form are crucial. As soon as we receive this documentation, we\'ll be able to advance with the investigation of your state tax concerns and work towards a resolution. Your prompt response is key to moving your case forward efficiently.\r\n', '2023-12-19 03:22:51', NULL),
(135, 'Federal Resolution- Pending Compliance', '441', 'Your Offer in Compromise (OIC) application is currently awaiting compliance review. This step ensures all your tax filings and payments are up to date, which is essential for the OIC process.', 'Once compliance is confirmed, your OIC application will proceed. It\'s important to stay current with all tax filings and payments during this phase.', '2023-12-19 04:09:26', NULL),
(136, 'Federal Resolution- Pending CM Lead Review', '287', 'Your case is awaiting a review by the Case Management (CM) Lead. This is a critical assessment phase where your case\'s specifics are evaluated to determine the next steps.', 'After the CM Lead review, your case will either proceed to the next stage or require additional actions based on the Lead\'s recommendations.', '2023-12-19 04:14:46', NULL),
(137, 'Federal Resolution- Pending Packaging', '442', 'At this stage, we are compiling and organizing all necessary documents for your Federal Resolution case. This packaging is essential for the next steps in your resolution process.', 'Once packaging is complete, your case will be prepared for submission or moved to the next phase as required.', '2023-12-19 04:14:46', NULL),
(138, 'Federal Resolution- Pending EA Review', '443', 'Your case is currently pending review by an Enrolled Agent (EA). The EA will evaluate your case for any potential issues or opportunities for resolution.', 'Post-review, your case will move forward based on the EA’s recommendations, either to the next stage of resolution or for further documentation.\r\n', '2023-12-19 04:16:22', NULL),
(139, 'Federal Resolution- Pending Terms', '444', 'This status indicates that we are at a stage where the terms of your Offer in Compromise (OIC) are ready to be discussed. We will contact you to thoroughly review and explain these terms. This step is crucial to ensure that you fully understand the conditions, obligations, and implications of the OIC before it is finalized and sent to you.', 'Please expect a call from us to go over the OIC terms in detail. It\'s important for you to have a clear understanding and to ask any questions you may have regarding the OIC. Once you are comfortable and acknowledge the terms, we will prepare the final documentation and mail it to you for review, signature, and submission to the IRS.', '2023-12-19 04:16:22', NULL),
(140, 'Federal Resolution- OIC In Negotiations', '445', 'Your Offer in Compromise (OIC) is now in the negotiation phase with the IRS. At this stage, the terms of your offer are being actively discussed and refined.', 'We will continue negotiations with the IRS on your behalf. You will be informed of any significant updates or when a final agreement is reached.', '2023-12-19 04:17:03', NULL),
(141, 'Investigation: IRS ID Verification Confirmed', '446', 'This status reflects that you, our client, have informed us of your successful completion of the IRS ID verification process. We appreciate your proactive effort in completing this vital step. Your confirmation is integral to advancing the tax investigation process, as it signifies that you have met a key requirement set by the IRS.', 'Based on your confirmation, we now enter a waiting period of 6 to 9 weeks, allowing time for the IRS systems to update with your verified status. This period is a normal part of the process, ensuring that all systems align with your recent verification. We trust in the information you have provided and will move forward on this basis. However, it is important to understand that if there were any issues with the verification process or if the IRS systems do not update as anticipated, this could extend the waiting period. We\'re here to support you and will keep you informed about any developments. In the meantime, please feel free to reach out if you have any further updates or information. Your cooperation and communication are greatly appreciated as we work together towards resolving your tax matters.', '2023-12-28 06:17:59', NULL);

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
(21, '13', '654a1007b8956', 'inprogress', 'Christian Ha', 'management@clearstarttax.com', '2017', 'test dd', 'test', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'wage', 'Yes', NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '2023-11-07 04:53:03', '2023-11-07 04:53:03'),
(22, '26', '65b135a0c78e5', 'inprogress', 'Christian TEST TEST Ha TEST TEST TEST', 'management@clearstarttax.com', '2023', 'test', 'test', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '2024-01-24 16:06:56', '2024-01-24 16:06:56'),
(23, '26', '65b135a0ced2a', 'inprogress', 'Christian TEST TEST Ha TEST TEST TEST', 'management@clearstarttax.com', '2023', 'test', 'test', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '2024-01-24 16:06:56', '2024-01-24 16:06:56'),
(25, '26', '65b1394e65ec6', 'Completed', 'Christian TEST TEST Ha TEST TEST TEST', 'management@clearstarttax.com', '2023', '25235', '23423423', '4234234234234', '23423423', '4234234234234', '0423-04-23', '23423423', '234234234', '23423423423423', '23423', '4234234234', '4234234', '234234234234', 'rewrwe534', 'single', NULL, NULL, NULL, NULL, NULL, 'wage', 'No', NULL, 'Yes', NULL, 'have any dependents no', '0', 'No', 'No', 'No', 'No', NULL, 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', NULL, NULL, NULL, NULL, 'No', NULL, 'etewtert3', '2024-12-24', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '2024-01-24 16:22:38', '2024-01-24 16:22:38'),
(26, '26', '65b1395529eb5', 'inprogress', 'Christian TEST TEST Ha TEST TEST TEST', 'management@clearstarttax.com', '2023', 'test', 'tes', NULL, NULL, NULL, NULL, NULL, 'test', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '2024-01-24 16:22:45', '2024-01-24 16:22:45'),
(27, '24', '65b1bc0f20c52', 'inprogress', 'Robert Ariza', 'robeliza3kids@gmail.com', '2023', 'Roberto', 'Ariza Jr.', '2097199839', NULL, '547494554', '1971-11-12', 'GUARD', '3830 Kansas Ave', NULL, 'Riverbank', 'CALIFORNIA', '95367', 'USA', 'RENT', 'single', NULL, NULL, NULL, NULL, NULL, 'wage', 'Yes', NULL, NULL, NULL, 'have any dependents no', '0', 'No', 'No', 'Yes', 'Yes', NULL, 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', NULL, NULL, NULL, NULL, 'Yes', NULL, 'ROBERTO ARIZA JR.', '2024-01-24', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '2024-01-25 01:40:31', '2024-01-25 01:40:31'),
(29, '26', '65b24f2e3935a', 'Completed', 'Christian TEST TEST Ha TEST TEST TEST', 'management@clearstarttax.com', '2017', 'test', 'test', 'tsetest', 'estet', 'test', '2024-01-26', 'estest', 'test', NULL, 'test', 'estes', 'tsetes', 'testet', 'teste', 'household', NULL, NULL, NULL, NULL, NULL, 'businessowner', NULL, NULL, NULL, NULL, 'have any dependents yes', '0', 'Yes', 'Yes', 'No', 'No', NULL, 'Yes', 'No', 'Yes', 'Yes', 'Yes', 'No', 'No', 'No', 'No', NULL, NULL, NULL, NULL, 'Yes', 'upload/to/1286251706184494.jpg', 'test', '2024-01-26', NULL, 'test', 'test', 'test', 'Yes', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '2024-01-25 12:08:14', '2024-01-25 12:08:14'),
(30, '26', '65b7b05ae6ab6', 'Completed', 'Christian TEST TEST Ha TEST TEST TEST', 'management@clearstarttax.com', '2021', 'test', 'test', '66436', '46436346', 'test', '2024-01-30', 'tsets', 'tset', 'estestest', 'set', 'estt', '45435', 'test', 'test', 'single', NULL, NULL, NULL, NULL, NULL, 'wage', 'No', NULL, 'No', 'upload/to/3927721706537050.jpg', 'have any dependents no', '0', 'No', 'No', 'No', 'No', NULL, 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', NULL, NULL, NULL, NULL, 'No', NULL, 'tes  test', '2024-01-30', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '2024-01-29 14:04:10', '2024-01-29 14:04:10'),
(31, '26', '65b7b0b88408a', 'Completed', 'Christian TEST TEST Ha TEST TEST TEST', 'management@clearstarttax.com', '2021', 'test', 'test', '66436', '46436346', 'test', '2024-01-30', 'tsets', 'tset', 'estestest', 'set', 'estt', '45435', 'test', 'test', 'single', NULL, NULL, NULL, NULL, NULL, 'wage', 'No', NULL, 'No', 'upload/to/7498651706537144.jpg', 'have any dependents no', '0', 'No', 'No', 'No', 'No', NULL, 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', NULL, NULL, NULL, NULL, 'No', NULL, 'tes  test', '2024-01-30', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '2024-01-29 14:05:44', '2024-01-29 14:05:44'),
(32, '26', '65b901cae415f', 'inprogress', 'Christian TEST TEST Ha TEST TEST TEST', 'management@clearstarttax.com', NULL, 'fgh', NULL, NULL, NULL, NULL, NULL, NULL, 'hgfh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '2024-01-30 14:03:54', '2024-01-30 14:03:54'),
(34, '26', '65bba60dbf209', 'inprogress', 'Christian TEST TEST Ha TEST TEST TEST', 'management@clearstarttax.com', NULL, 'hgf', 'hgfh', '65654', '6546546456', '654656546', NULL, NULL, 'gfhg', NULL, 'gfh', 'fhgfh', '65465', 'hgfhgfhgfh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '2024-02-01 14:09:17', '2024-02-01 14:09:17'),
(35, '26', '65c220ae1b6d9', 'Completed', 'Christian TEST TEST Ha TEST TEST TEST', 'management@clearstarttax.com', '2022', 'test', 'test', '645656', '45645654', '45354', '2024-02-27', 'fghgf6546', 'gfgfdg', 'dfg', 'trtert', 'hgf', '65465', 'hgfh', 'tytr654h', 'single', NULL, NULL, NULL, NULL, NULL, 'wage', 'No', NULL, 'No', 'upload/to/9687601707221166.jpg', 'have any dependents no', '0', 'No', 'No', 'No', 'No', NULL, 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', NULL, NULL, NULL, NULL, 'No', NULL, 'ttttttt', '2024-02-23', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '2024-02-06 12:06:06', '2024-02-06 12:06:06'),
(38, '26', '65c2213fdda69', 'Completed', 'Christian TEST TEST Ha TEST TEST TEST', 'management@clearstarttax.com', '2022', 'test', 'setest', '45345', '54645654', '654654', '2024-02-07', 'tsetts', 'test', '6456', 'test', 'estt', '45645', 'trytry', 'ytrytry', 'household', NULL, NULL, NULL, NULL, NULL, 'selfemployed', NULL, NULL, NULL, NULL, 'have any dependents no', '0', 'No', 'No', 'No', 'No', NULL, 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', NULL, NULL, NULL, NULL, 'No', NULL, 'trtt', '2024-02-29', NULL, '6456', '456', '546', 'Yes', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '2024-02-06 12:08:31', '2024-02-06 12:08:31'),
(39, '42', '65cbb86596d16', 'inprogress', 'Tanya  Smith', 'Stanya44@yahoo.com', '2020', 'Tanya', 'Smith', '7734325350', NULL, '360667348', '2024-08-02', NULL, '4107 S Oakley AVE', NULL, 'Chicago', 'Illinois', '60609', 'UnitedStates', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'wage', 'No', NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '2024-02-13 18:43:49', '2024-02-13 18:43:49'),
(40, '42', '65cbb9c966382', 'inprogress', 'Tanya  Smith', 'Stanya44@yahoo.com', '2021', 'Tanya360667348', 'Smith', '7734325350', NULL, '360667348', '1972-08-02', 'Security Officer', '4107 S Oakley AVE', NULL, 'Chicago', 'Illinois', '60609', 'UnitedStates', 'Rent', 'household', NULL, NULL, NULL, NULL, NULL, 'wage', NULL, NULL, NULL, NULL, 'have any dependents no', '0', 'No', 'No', 'No', 'No', NULL, 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', NULL, NULL, NULL, NULL, 'Yes', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '2024-02-13 18:49:45', '2024-02-13 18:49:45'),
(41, '42', '65cbba8b63858', 'inprogress', 'Tanya  Smith', 'Stanya44@yahoo.com', '2022', 'Tanya', 'Smith', '7734325350', NULL, '360667348', '1972-08-02', 'Security Officer', '4107 S Oakley AVE', NULL, 'Chicago', 'Illinois', '60609', 'UnitedStates', 'Rent', 'household', NULL, NULL, NULL, NULL, NULL, 'wage', 'Yes', NULL, NULL, NULL, 'have any dependents no', '0', 'No', 'No', 'No', 'No', NULL, 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', NULL, NULL, NULL, NULL, 'Yes', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '2024-02-13 18:52:59', '2024-02-13 18:52:59'),
(42, '43', '65cbe9e05a493', 'inprogress', 'Toya Cutler', 'toyacutler1@gmail.com', '2023', 'TOYA', 'CUTLER', '2672402245', '4847243093', '177523313', NULL, 'Social Worker', '405 Sansom St', NULL, 'UpperDarby', 'PA', '19082', 'USA', 'Own', 'single', NULL, NULL, NULL, NULL, NULL, 'wage', 'Yes', NULL, NULL, NULL, 'have any dependents no', '0', 'No', 'No', 'No', NULL, NULL, 'No', NULL, 'Yes', 'No', 'No', 'Yes', 'No', 'No', 'No', NULL, NULL, NULL, NULL, 'No', NULL, 'TOYA CUTLER', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '2024-02-13 22:14:56', '2024-02-13 22:14:56'),
(44, '46', '65ceb34fc0564', 'inprogress', 'Lara Maes', 'lara197212@yahoo.com', '2023', 'Lara', 'Maes', '7146541028', NULL, '614906668', '1972-12-07', 'Unemployed', '32500 Riverside Dr.', 'Space #H1', 'LakeElsinore', 'CA', '92530', 'UnitedStates', 'Rent', 'household', NULL, NULL, NULL, NULL, NULL, 'wage', 'Yes', NULL, NULL, NULL, 'have any dependents no', '0', 'No', 'No', 'No', 'No', NULL, 'No', 'No', 'No', 'No', 'Yes', 'Yes', 'Yes', 'No', 'No', NULL, NULL, NULL, NULL, 'Yes', NULL, 'Lara Bautista Maes', '2024-02-15', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '2024-02-16 00:58:55', '2024-02-16 00:58:55'),
(45, '81', '65d6a41f84d79', 'inprogress', 'Kristi Wood', 'marketsolo04@yahoo.com', '2023', 'Kristi', 'Wood', '6824981841', NULL, '459231393', NULL, 'Receptionist', '5402 San Jacinto dr', NULL, 'Cranbury', 'Texas', '76048', 'USA', 'Own', 'single', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'have any dependents no', '0', 'No', 'No', 'No', 'No', NULL, 'No', 'No', 'No', 'No', 'Yes', 'No', 'No', 'No', 'No', NULL, NULL, NULL, NULL, 'Yes', NULL, 'Kristi S Wood', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '2024-02-22 01:32:15', '2024-02-22 01:32:15'),
(46, '49', '65d7aa4fbce8b', 'Completed', 'James LaBarge', 'jbarge2222@gmail.com', '2023', 'James', 'LaBarge', '6036883631', NULL, '032685676', '1977-04-02', 'Finance', '10 Dolphin Cir', NULL, 'Nashua', 'NH', '03062', 'Hillborough', 'Rent', 'separately', 'Katherine', 'LaBarge', '016721714', '06/07/1989', 'Admin Assistance', 'wage', 'No', NULL, 'Yes', NULL, 'have any dependents no', '0', 'No', 'No', 'No', 'No', NULL, 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', NULL, NULL, NULL, NULL, 'Yes', NULL, 'JAMES LABARGE', '2024-02-22', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '2024-02-22 20:10:55', '2024-02-22 20:10:55'),
(48, '80', '65dbb2a0e7a3c', 'inprogress', 'Ovidio Hernandez', 'ovdo1991@gmail.com', '2023', 'Ovidio', 'Hernandez', '2018924366', NULL, '151905637', NULL, 'Truck driver', '102 west 39th street', NULL, 'Bayonne', 'NewJersey', '07002', 'Hispanic', 'Own', 'separately', 'Lisa', 'Hernandez', '143583325', '12/21/1972', 'Permanent disability ( multiple sclerosis)', 'selfemployed', NULL, NULL, NULL, NULL, 'have any dependents no', '0', 'No', 'No', 'No', 'No', NULL, 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', NULL, NULL, NULL, NULL, 'Yes', NULL, 'Ovidio Hernandez', NULL, NULL, 'Class A consulting group LLC', '87-2105331', NULL, 'No', NULL, '0', '7,615', NULL, NULL, NULL, '7,906', NULL, NULL, NULL, '3,611', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4,416', NULL, NULL, NULL, NULL, '13,366', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '180', NULL, '2390', NULL, NULL, '2,976', '6,313', NULL, NULL, '450', '3,611', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '788', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2461', NULL, NULL, NULL, NULL, NULL, NULL, '707', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '3', '2024-02-25 21:35:28', '2024-02-25 21:35:28'),
(49, '80', '65dbb8f4a3039', 'inprogress', 'Ovidio Hernandez', 'ovdo1991@gmail.com', '2023', 'Ovidio', 'Hernandez', '2018924366', NULL, '151905637', NULL, 'Truck driver', '102 west 39th street', NULL, 'Bayonne', 'NewJersey', '07002', 'Hispanic', 'Own', 'separately', 'Lisa', 'Hernandez', '143583325', '12/21/1972', 'Permanent disability ( multiple sclerosis)', 'selfemployed', NULL, NULL, NULL, NULL, 'have any dependents no', '0', 'No', 'No', 'No', 'No', NULL, 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', NULL, NULL, NULL, NULL, 'Yes', NULL, 'Ovidio Hernandez', NULL, NULL, 'Class A consulting group LLC', '87-2105331', 'Driving, delivering, safety driving training', 'No', NULL, '0', '7,615', NULL, NULL, NULL, '7,906', '0', '0', '0', '3,611', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '4,416', '00', '0', '0', '0', '13,366', '0', '0', '0', '0', '0', '0', '0', '0', '8,508', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '180', '0', '2390', '0', '0', '2,976', '6,313', '3,341', '0', '450', '3,611', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '6360', '0', '0', '0', '0', '788', '0', '0', '0', '0', '8,500', NULL, '0', '0', '2461', '0', '0', '0', '0', '0', '0', '707', '0', '0', '1,300', '0', '0', NULL, NULL, NULL, '3', '2024-02-25 22:02:28', '2024-02-25 22:02:28'),
(51, '88', '65dd0248a394d', 'Completed', 'Anthony Mitchell', 'siramp5@aol.com', '2023', 'anthony', 'Mitchell', '2523822283', '2529036970', '237156860', '1959-05-01', 'Tech 3', '825 STONE DRIVE', NULL, 'ROCKYMOUNT', 'NC', '27804', 'UnitedStates', 'own', 'jointly', 'Maryann', 'Mitchell', '245989870', '01181961', 'Teacher Sub', 'wage', 'Yes', 'upload/to/9598641708982856.jpg', NULL, NULL, 'have any dependents no', '0', 'No', 'No', 'No', 'No', NULL, 'No', 'No', 'No', 'Yes', 'Yes', 'No', 'No', 'No', 'No', NULL, NULL, NULL, NULL, 'Yes', 'upload/to/6607471708982856.jpg', 'Anthony Mitchell', '2024-02-26', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '2024-02-26 21:27:36', '2024-02-26 21:27:36'),
(52, '85', '65dd64c64f64b', 'inprogress', 'Samuel Jacobs', 'samjacobs3256@yahoo.com', '2018', 'SAMUEL', 'JACOBS', '2402246386', NULL, '220575774', '1975-07-13', 'LICENSE PRACTICAL NURSE', '19727 Framingham dr', NULL, 'Gaithersburg', 'MD', '20879', 'UnitedStates', NULL, 'single', NULL, NULL, NULL, NULL, NULL, 'wage', 'Yes', NULL, NULL, NULL, 'have any dependents no', '0', 'Yes', 'Yes', 'No', 'No', NULL, 'No', 'No', 'No', 'No', 'No', NULL, 'Yes', 'No', 'Yes', '2,000', '2', 'N/A', 'N/A', 'Yes', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '2024-02-27 04:27:50', '2024-02-27 04:27:50'),
(53, '124', '65e1e77c52a7c', 'inprogress', 'Donald Hewins', 'ny20750120@gmail.com', '2023', 'Donald', 'Hewins', '9296325807', NULL, '123705904', NULL, 'Manager', '38 cutlass ct', NULL, 'Essex', 'Md', '21221', 'Usa', 'Rent', 'single', NULL, NULL, NULL, NULL, NULL, 'wage', 'Yes', NULL, NULL, NULL, 'have any dependents no', '0', 'No', 'Yes', 'No', 'No', NULL, 'No', 'No', 'No', 'No', 'No', 'No', 'Yes', 'No', 'No', NULL, NULL, NULL, NULL, 'No', NULL, 'Donald Hewins', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '2024-03-01 14:34:36', '2024-03-01 14:34:36'),
(54, '126', '65e24ad51790f', 'inprogress', 'Lionel Kinard', 'lionelkinard66@gmail.com', '2023', 'Lionel', 'Kinard', '5165918449', NULL, '076702179', NULL, 'Security Guard', '676 Beck street', 'Apartment BA', 'Bronx', 'NY', '10455', 'UnitedStates', 'Rent', 'single', NULL, NULL, NULL, NULL, NULL, 'wage', 'Yes', NULL, NULL, NULL, 'have any dependents no', '0', 'No', 'No', 'No', 'No', NULL, 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', NULL, NULL, NULL, NULL, 'No', NULL, 'Lionel Kinard', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '2024-03-01 21:38:29', '2024-03-01 21:38:29');

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
(6, '10', 'ytry', 'tryt', 'ryt', 'ytyty', 'ty', 'tytr', 'tr', 'yrty', NULL, 'ytry', 'ytr', 'ytr', 'ytr', 'ytryrt', 'yt', 'yry', 'ytryr', '2023-11-07 00:59:35', '2023-11-07 00:59:35'),
(7, '48', 'Toyota RAV4  year 2000', 'Transport to work', '1002', '2017', '0', '1201', '1480', '2,681', NULL, '934', '2,112', '309', '580 brakes, censors', 'No', 'Yes', 'No', 'No', '2024-02-25 21:35:28', '2024-02-25 21:35:28'),
(8, '48', 'Honda accord year 2011', 'No', '11,312', '2016', '0', '1610', '860', '2290', NULL, '724', '2184', '410', 'No', 'No', 'Yes', 'No', 'No', '2024-02-25 21:35:28', '2024-02-25 21:35:28'),
(9, '48', 'Toyota Sequoia 2002', 'No', '2430', '2028', '0', '840', '1460', '2300', NULL, '935', '2,172', '348', '650 raken pinion', '0', 'No', 'No', 'No', '2024-02-25 21:35:28', '2024-02-25 21:35:28'),
(10, '49', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-25 22:02:28', '2024-02-25 22:02:28'),
(11, '49', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-25 22:02:28', '2024-02-25 22:02:28'),
(12, '49', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-25 22:02:28', '2024-02-25 22:02:28');

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
(13, 'Christian Ha', 'management1@clearstarttax.com', NULL, '$2y$10$V5FYiplr.Ys6LqLNIkPy7e26Yk1ZfIcIwDjO7fBUE1Pw9jQMSmCFi', '182591', 'active', 'BezIeO0kyhYuNkVgQJuZ1qGqFT4a22udJXcehYoiHkZkTHoMmxIqt67HhOBa', '2023-09-14 01:57:06', '2023-09-14 01:57:06'),
(14, 'Robert Crow ', 'crowbyrd01@gmail.com', NULL, '$2y$10$op4fdU9r3/Rgk3paMJHUD.IGAif3koq.AW3iBsO0mTGInpE/5ZnXu', '205958', 'active', NULL, '2024-01-13 10:10:53', '2024-01-13 10:10:53'),
(15, 'Bruce Parker', 'brucewp1200@gmail.com', NULL, '$2y$10$XRytOXmVrT8RgjC18Nlt1u8xuY9dGolkmQbfn9rKV.EvXkuyBSeuO', '44205', 'active', NULL, '2024-01-16 15:31:52', '2024-02-29 05:10:13'),
(16, 'Angelica Feria', 'angelica.feria@yahoo.com', NULL, '$2y$10$FGuQNAOC7kwGHwLx40A/..C1ycMq4Z9qn40Tgn9bb5KlIEbeb6ByS', '199679', 'active', NULL, '2024-01-16 19:46:57', '2024-02-25 14:56:42'),
(17, 'Mary Zahn', 'mz3145@msn.com', NULL, '$2y$10$yizJLFqVFzXTcnRv1B9XSOCd7s7nduzg2uHnpGSvcQuLSPOt0K7Gi', '181314', 'active', NULL, '2024-01-18 17:55:19', '2024-03-06 23:03:30'),
(18, 'Dorothy Michalski', 'dvbrandin@gmail.com', NULL, '$2y$10$Ohum.PD0wtaxYkHEYaskLebSoOOr6o4s.NRIaWO7vLpzdpmKFkMm2', '246340', 'active', NULL, '2024-01-18 23:51:21', '2024-01-18 23:51:21'),
(19, 'Christian Ha', 'pragyakushwah2017@gmail.com', NULL, '$2y$10$g.FgWG0lDTnSyKfh/p6MDOkWr2GoVcCvbaZthc/7FgjzzGYk9bKd.', '18259', 'active', 'MQO6U5UoDlVdYaal2ciaQtNlPF9DYYcueCiSvHHOznosSVGfBfXeeHJWN3aE', '2023-09-14 01:57:06', '2024-02-05 12:55:21'),
(20, 'Daniel Aaron', 'daniel.p.aaron@gmail.com', NULL, '$2y$10$WSPbyuew5fsh5dxyGTDahenumtiH2shskN1ZZOUB47733oQvx0Sty', '124111', 'active', NULL, '2024-01-19 13:27:38', '2024-01-19 13:27:38'),
(21, 'Joe Williamson', 'Joewilliamson_505@live.com', NULL, '$2y$10$sS1OZzi.Pdya36eermH9yeu9cpZn9bvm3YiOwMtcW3c4UX05YXSQm', '178833', 'active', '8IdgIrEPE1JRUoIYCqjnvMzcE1oHDSPMOfo1RtT7fzwuMyfg3FhN9nX90Tmc', '2024-01-19 14:35:47', '2024-01-19 14:35:47'),
(22, 'Christopher  Bird ', 'cbird787@yahoo.com', NULL, '$2y$10$yoOPcOX.3osixyVop3fezuQrhDrYrdkz/Q0BR0mURLyg48sI5lSBO', '261490', 'active', NULL, '2024-01-19 20:19:30', '2024-01-19 20:19:30'),
(23, 'Anita Meyers', 'anita.meyers55@gmail.com', NULL, '$2y$10$pMKDL4szwYgf5IHY00/gZ.WxjPhDEAVUr.0bS9OU0pmxYekKP8qSS', '79348', 'active', NULL, '2024-01-20 12:40:51', '2024-01-20 12:40:51'),
(24, 'Robert Ariza', 'robeliza3kids@gmail.com', NULL, '$2y$10$rPL83OB2UN2nQbHnhHIOuuIDVMDhsCZwyyAMGlESkxsdQ.78nctQW', '195364', 'active', 'YewLfEWyvirIN7UbcoIFfOzGVqPM5eyLEgQabCqalvYFl2gWi9DmGT27xWqT', '2024-01-20 21:06:33', '2024-01-20 21:06:33'),
(25, 'Tatyanna Ricks', 'Imtatie@gmail.com', NULL, '$2y$10$kBEXvvYbjkw2qPSG0Jq8YuzHsNDP.QXR7.vLed3Yvwv7UNfT8ts7i', '27749', 'active', NULL, '2024-01-23 17:00:06', '2024-01-23 17:00:06'),
(26, 'Christian TEST TEST Ha TEST TEST TEST', 'management@clearstarttax.com', NULL, '$2y$10$QdvvTjlmL1rdA3D2b5SN5.6SmS1XUctZSh11gw2l3JfI27PXUubQK', '18259', 'active', 'XhtkZI3My8wXou65IMs56ILQVh8NKWmHbwDGmdMmr8vrULc9RhVasFVuVoZi', '2024-01-24 11:45:49', '2024-01-24 11:45:49'),
(28, 'Keesha Wilkes', 'keeshawilkes@gmail.com', NULL, '$2y$10$urSv4a/7QHNlR0yp.LdjLe/ZezbzOnvpHeG6rHz4BrY.Ror1/0fKC', '262381', 'active', 'LZBH5NyJVjvWSgdo8qSUwN9KBPeD2HjwNl6oNBiHIEgzFNcUD6nnWuZEulZ8', '2024-01-27 01:28:20', '2024-02-14 16:47:44'),
(29, 'Muriel Parker', 'ladymiz69@gmail.com', NULL, '$2y$10$cdRXq178D/01kOdm8ZCbZu8DVvEHfio5zdCuXZws2st8uqEzm1t3S', '270389', 'active', 'QJmwfbB41p6x3Aglf4dxQNtPPH8smNbHMj6vB4RS9eoVHOfFsAfZDRJQaS9b', '2024-01-27 05:36:36', '2024-02-06 18:33:42'),
(30, 'ANGELO ROSALEZ', 'angelorosales777@gmail.com', NULL, '$2y$10$hTRLZm.on82WKbd7EvsuV.HpV1PakId8/11etnE7C1Wu.x31SAQKe', '12321', 'active', NULL, '2024-01-29 07:54:32', '2024-01-29 07:54:32'),
(32, 'Jennifer Poli', 'jennifermpoli@gmail.com', NULL, '$2y$10$5wBDiSCeGZDBFQdDDxl4IefB1PmUOWas.X9rSyi/btaFaHs0OLgeS', '183370', 'active', NULL, '2024-01-31 00:33:40', '2024-01-31 00:33:40'),
(35, 'James Joyce', 'weatherstorm1988@gmail.com', NULL, '$2y$10$ZXKmHqWxH3NcbP0G0tZtRu7PwlaS2OvZt9jf4oQHrAJ629eTkT0bq', '253955', 'active', NULL, '2024-01-31 18:00:33', '2024-01-31 18:00:33'),
(36, 'Monika Roberts', 'monikacherie58@gmail.com', NULL, '$2y$10$lPdbhSbZdGHYD60lQ9orSeIo0/d7xuTHrrv0vUYT6L65A/pMSVyHi', '40273', 'active', NULL, '2024-02-01 17:47:57', '2024-02-01 17:47:57'),
(37, 'Stephen  Becker', 'stephen.becker62@gmail.com', NULL, '$2y$10$Ejsle/Is3EgfFCLMFznzkOqp/N7OEX6NiOTBzM3u9e7g3i5Afee7i', '31161', 'active', NULL, '2024-02-04 23:31:30', '2024-02-04 23:31:30'),
(38, 'Martel  Graham', 'Martel.graham82@gmail.com', NULL, '$2y$10$FmYD8Li1lHvTF/bbJK0nKeqKkVwOKw8/wEJeD0lRJ6KHwYuDRxQmW', '251185', 'active', NULL, '2024-02-06 19:50:51', '2024-02-06 19:50:51'),
(39, 'Kenard Fraction', 'fraction.kenard@gmail.com', NULL, '$2y$10$G9HHodOYUxoCBoq.HhEFM.LMHe4ccgc6A2ngPKt1EsiOtyoYrvkRa', '54151', 'active', NULL, '2024-02-10 01:02:26', '2024-02-10 01:02:26'),
(40, 'Armando Gonzalez', 'mandogeex3@icloud.com', NULL, '$2y$10$94K35kubDArVoPcDkKvJvu4KrdC6rnqq6dzm1r76hKH/lnavwMKZS', '243110', 'active', NULL, '2024-02-10 13:48:45', '2024-02-10 13:48:45'),
(41, 'Greg Riley', 'poohbee44@icloud.com', NULL, '$2y$10$pQSubGzPtOEiiNvHGJ0kwOJIfCM0N6iSypEXj9eeBI7FkcPflmvzq', '283841', 'active', 'Intl1IBZTI6RAHeyGptb7LgZVAZ1vqfybg5Wj60d5jjOsvrsEKoyARUQ4SxT', '2024-02-13 02:57:10', '2024-02-13 02:57:10'),
(42, 'Tanya  Smith', 'Stanya44@yahoo.com', NULL, '$2y$10$swK2T.OqghhljcvDSQuj8.8CvCvh4QJ.//QPK3l4wic0CA7Q.gqUq', '256858', 'active', NULL, '2024-02-13 17:51:21', '2024-02-13 17:51:21'),
(43, 'Toya Cutler', 'toyacutler1@gmail.com', NULL, '$2y$10$N2KIwBKV1vaLFOlNrwoGQOrfrvdao1dBGJavL3iLIz9fGzCPUWBBe', '210289', 'active', NULL, '2024-02-13 22:07:37', '2024-02-13 22:07:37'),
(44, 'Luis Berrios', 'arielberrios@rocketmail.com', NULL, '$2y$10$6lZ.3WT2MZOjq3JWHYGJG.jCLpJ2Fal1tg0sDzKytrLHRqQf1BXqK', '136721', 'active', 'r8RrMokRWtbAjhPvWa0dQp66lzTzppcnj23SAcPPdf10QXwK47BhHbA74E3O', '2024-02-14 03:17:13', '2024-02-14 03:17:13'),
(45, 'Herbert Dubose', 'shawmone@yahoo.com', NULL, '$2y$10$tS/bG/XkjKfP0O7v5mdmwO3f0vVVaUjPDs8y5oksTydlTQhGaPZ8m', '228382', 'active', NULL, '2024-02-14 04:07:43', '2024-02-14 04:07:43'),
(46, 'Lara Maes', 'lara197212@yahoo.com', NULL, '$2y$10$JDrACGpHZe58hVexFrq/6u.53rc1DDKkDo7ZknqlciSRH/rvN3EF6', '31581', 'active', '9EzRG0K4nzkFOJsMU4YTX5QW82LxVMTaOl8zaS0cUHdZhhy5Pl5syuDbiULd', '2024-02-14 22:23:47', '2024-02-14 22:23:47'),
(47, 'Nhung Le', 'Nhungle479@yahoo.com', NULL, '$2y$10$ZzfBaAVCUVGuwlNDBNiD4.5X1R0q9ZUlasyOzGbmHSStJfYJKQviu', '262168', 'active', NULL, '2024-02-15 01:22:10', '2024-02-15 01:22:10'),
(48, 'Guy Mccord', 'Guyandgirls@comcast.net', NULL, '$2y$10$lgYUZYmLyy7CFtXNphrpl..iVDhJ4Dhpi/zLyBkkhhrdGSDWPJ7Le', '128580', 'active', '4yR5b8eveVXygh9lGDv0VyugnnZsjzmTVtn7UPajtnDUOfd8TuKij6qRINOu', '2024-02-15 04:16:24', '2024-02-19 21:09:26'),
(49, 'James LaBarge', 'jbarge2222@gmail.com', NULL, '$2y$10$UoocjnyPBKFo3HO4235bieKN8mfCOFZRW/gkFmLkDwTgSIjafmtym', '126732', 'active', NULL, '2024-02-15 17:08:14', '2024-02-15 17:08:14'),
(50, 'David Lada', 'sgtlada01@outlook.com', NULL, '$2y$10$UoeGPsiL2eUmkrOiMgkzv.2lzoef00vBj2WbL3Y7on4btJ4MXBBVy', '279506', 'active', NULL, '2024-02-15 17:53:50', '2024-02-15 17:53:50'),
(51, 'Karen Wissmann', 'wissmannkaren@yahoo.com', NULL, '$2y$10$hYsmwIAl8YzGM5u6PSRuCeL5QL/QAuPb5wryPX65.ZFecL3tOZrr6', '274495', 'active', NULL, '2024-02-15 17:58:35', '2024-02-15 17:58:35'),
(52, 'Robert Cain', 'cainsplumbing@aol.com', NULL, '$2y$10$/Z/vZhDnLriTTjiotbaZtupTHE5bWQ6mJFhu9MTf4GUKInXexd11W', '186005', 'active', NULL, '2024-02-15 18:45:50', '2024-02-15 18:45:50'),
(53, 'Manuel Moisa', 'moisam001@hawaii.rr.com', NULL, '$2y$10$WEbYsqZzvPbSPYO0lIMTSOEQggiWccs8sgzbWY4wVVigq1c2T0H/u', '247879', 'active', NULL, '2024-02-15 19:25:04', '2024-02-15 19:25:04'),
(54, 'Paul Gooden', 'paulgooden215@gmail.com', NULL, '$2y$10$17gnuAI/G0pF4JL0ikKEO./eUsT1pFGn7aIcNdJsmMoljHKrhzcoC', '168592', 'active', NULL, '2024-02-15 19:46:35', '2024-02-15 19:46:35'),
(55, 'Tracee Gibbons', 'gibbint@gmail.com', NULL, '$2y$10$BTPWho7rKuhgdgLD1/Y72e3ikbyc6k4eiI5CVNFTCK981gciyvwt6', '243573', 'active', NULL, '2024-02-15 21:42:15', '2024-02-15 21:42:15'),
(56, 'Jamie Holway', 'jpholway@gmail.com', NULL, '$2y$10$I3xWR5xk91mmKRv6exJItuOzGA22Oae4mtvt/W2Ht7E2018ghlybG', '235813', 'active', NULL, '2024-02-15 23:36:42', '2024-02-15 23:36:42'),
(57, 'Lowell Didas', 'powerwagonusa@yahoo.com', NULL, '$2y$10$HpZCBfSbaPFbo6wqGG3R5O9mVn9Efv7gmHiRZRgENPWt2.GmhrzFW', '254720', 'active', NULL, '2024-02-16 08:54:04', '2024-02-16 08:54:04'),
(58, 'Clarence  Stallard Jr', 'Stallardjr.clarence@rocketmail.com', NULL, '$2y$10$.1ZUEtsyHRZO.Q2ZusomCeOIP3cCcJumc.puJvNOq8VABB72IFa16', '223818', 'active', NULL, '2024-02-16 12:51:42', '2024-02-16 12:51:42'),
(59, 'Patricia Rivers', 'patriciaarivers@gmail.com', NULL, '$2y$10$q/yF5v9wH4sMd1esiUdgXeQlROTPwCmMkmO.nCZBdypmo.f14PXb6', '55218', 'active', NULL, '2024-02-16 14:54:53', '2024-02-16 14:54:53'),
(60, 'Rodney Davis', 'rodneydavis175@gmail.com', NULL, '$2y$10$X2R7cc0eQyqXqaZMZP1hOuEdLrXFV.StHPFWC3zVB3oHj32cxhw/O', '89437', 'active', NULL, '2024-02-16 15:35:44', '2024-02-16 15:35:44'),
(61, 'Nathaniel Bligen', 'rBligen@gmail.com', NULL, '$2y$10$2K1xUyjowrylhuAjZZo8fuZyv/fFVvh2g0Zg37SYMPEm9a2NjsEbO', '282218', 'active', 'iFOOPGWQpbRxN70YYvmShexzAakguyM18WX6GwYHCx0685s5q5oeIf1tp3wY', '2024-02-16 15:36:41', '2024-02-20 20:47:11'),
(62, 'Gregory Wolff', 'gregwolff3232@gmail.com', NULL, '$2y$10$9EaCB3hzU9JmRFN7iMS0juziutktyn4Dbn7eaKXg17xBl4U9MwJFm', '201613', 'active', 'K5h3r7QFCcFOgQEiWrX4AjwPGrcaZ6EQBJcsXSPK0MsmpWW5B2S75ZFH2Mem', '2024-02-16 17:22:13', '2024-02-16 17:22:13'),
(63, 'Carlos Perez De Cuba ', 'Carlorado1976@gmail.com', NULL, '$2y$10$wN8DQEgdoghmKwP9KJ/0wOS4WS1uGIat28zd67rEN/FQ8WHkvHu6C', '148430', 'active', 'PSfFWdpmBQUvfm7RU7WSjdAZpuKh8t0Qf7uKzv5iqFxxWbnsZIQA6doX0qMN', '2024-02-16 17:52:41', '2024-02-16 17:52:41'),
(64, 'Tenita Witherspoon', 'tenitalaw@gmail.com', NULL, '$2y$10$w5oHXN4XcHXYWenhd5amMeSn/Pj9QtFUeIHr0bQkguGpBlW0rcCHe', '272045', 'active', NULL, '2024-02-16 20:10:15', '2024-02-16 20:10:15'),
(65, 'Gary Hendrickson', 'vimassive@yahoo.com', NULL, '$2y$10$1iEMgBYkDoHuEYY8n7ZdNOA.MhUPlYvIH2/6.iVHaiRKeeWlwLPhG', '273258', 'active', NULL, '2024-02-17 09:01:50', '2024-02-17 09:01:50'),
(66, 'Nestor Oriel', 'nnoriel@att.net', NULL, '$2y$10$MMDVldKWmNJXch6GAkgGvu4PL5v7tQNTgyumN8OGcfz97850Yj.5i', '186963', 'active', NULL, '2024-02-17 23:46:43', '2024-02-17 23:46:43'),
(67, 'Suzanne Lary', 'suzannepinehills@verizon.net', NULL, '$2y$10$rezB60NdwVRLF41kUiqWCeKncQPcabMoDWsGiyYqBW5oBire.BUGu', '233806', 'active', NULL, '2024-02-18 13:16:05', '2024-02-18 13:16:05'),
(68, 'Jermaine Moore', 'moorejermaine3474@gmail.com', NULL, '$2y$10$.uHww06q.thSUlGAFuTzz.2g8X7Pt3.Zk8vTaX8v7lnQ4sQmdCK.m', '119148', 'active', NULL, '2024-02-19 16:22:23', '2024-02-19 16:22:23'),
(69, 'Isaac Ramos', 'Isaac_r@flooringliquidators.net', NULL, '$2y$10$oAU1ZkPB/HDwRkaWEuuhYeQ1EEudIJHC32nXo4N1nhxj46ivppwMC', '173696', 'active', NULL, '2024-02-19 17:12:51', '2024-02-19 17:12:51'),
(70, 'Jacqueline Bragdon', 'jackiebragdon42@gmail.com', NULL, '$2y$10$VFr87gkTc6QULU7nvPPUXe/0NwOg/laWPHBZWbE6xMcX0ltzZIVY.', '144870', 'active', NULL, '2024-02-19 19:37:13', '2024-02-19 19:37:13'),
(71, 'Debra  Bruce', 'brucedebra471@gmail.com', NULL, '$2y$10$VeiAP5l0OP4WDMgtwBeWYuq8v1GaosFNuoYu6FaDP7KH7zPwt5HHO', '171731', 'active', NULL, '2024-02-19 22:04:36', '2024-02-19 22:04:36'),
(72, 'Krystal Kirtman', 'machcinski.krystal245@gmail.com', NULL, '$2y$10$YqGRLtBpLWcy.6QwTY3WIOHV6W9Z0cVWtw8u./.gFz5TyuvUd4f.K', '213182', 'active', NULL, '2024-02-19 23:51:54', '2024-02-19 23:51:54'),
(74, 'Christopher Acord', 'acordc@michigan.gov', NULL, '$2y$10$boHJZEaFNjfmHm/nc3ykfung6vysfV5QZSIg2HeTQhatmaVkH8NCS', '246250', 'active', NULL, '2024-02-20 13:39:35', '2024-02-20 13:39:35'),
(75, 'Russ Wood', 'russwood9911@outlook.com', NULL, '$2y$10$PNaDeNSpWm347srgzO4DQOt8RzU0tunZC1GxxBpCDB9XL3H0jou2m', '87682', 'active', NULL, '2024-02-20 22:30:50', '2024-02-20 22:30:50'),
(76, 'Rebecca Connell ', 'shawtybecca@gmail.com', NULL, '$2y$10$T/2p66ShEc414soiH8xr5.5kKccN7CAXUy/QLI4ME9EGE7vnVm0mq', '251173', 'active', NULL, '2024-02-21 00:21:31', '2024-02-21 00:21:31'),
(77, 'Mark Turner', 'turnermark732@yahoo.com', NULL, '$2y$10$ZoVqVFehvSBKinKPbdFLi.Y1rPBnwOjSefK9L3CqsQnt7dRvlk2R.', '67730', 'active', NULL, '2024-02-21 15:01:02', '2024-02-21 15:01:02'),
(78, 'James  Mayer', 'jimmayerwins@gmail.com', NULL, '$2y$10$TFBtkD9l4EBO47FV80bxGuaq31K6fteBCj/Y6ANKAxEKmCbkAdrFO', '224947', 'active', NULL, '2024-02-21 15:56:15', '2024-02-21 15:56:15'),
(79, 'Yvette  Bosset', 'ybosset0617@yahoo.com', NULL, '$2y$10$1wldVqKYlm.OqMXqxRhl3OQDpeuVMXDwawHJMbIfFSP8Dc2AiUvGi', '289321', 'active', NULL, '2024-02-21 21:36:41', '2024-02-21 21:36:41'),
(80, 'Ovidio Hernandez', 'ovdo1991@gmail.com', NULL, '$2y$10$SjHnMauVPVWmZdoF3mcb0.DmjvHR7rhDD4mN2deisIIXxvRmiUZSS', '140708', 'active', NULL, '2024-02-22 00:40:50', '2024-02-22 00:40:50'),
(81, 'Kristi Wood', 'marketsolo04@yahoo.com', NULL, '$2y$10$j9xVC4iXx2FjlF4vi4z.qeyfFu14s21trSyQA0iZve/2JgkHNYwEm', '41061', 'active', NULL, '2024-02-22 01:05:05', '2024-02-22 01:05:05'),
(82, 'Russell Baker', 'bakerexcavatingco@gmail.com', NULL, '$2y$10$DhwUIWgVV5TEDFN5D6efT.NjfWMuTL8xGxEolEBaxgmRNbPReg2mu', '204657', 'active', NULL, '2024-02-22 04:50:08', '2024-02-22 04:50:08'),
(83, 'Valerie Sanders', 'valeriepatrice01@gmail.com', NULL, '$2y$10$T82.AjKzFSRWrLEddJ3LwOG1.csBLnVdHS3FGgWsBXherd5/8b.8S', '68548', 'active', NULL, '2024-02-22 07:06:43', '2024-02-22 07:06:43'),
(84, 'Courtney  Anderson', 'courtneydee2003@gmail.com', NULL, '$2y$10$q1PnTC3/5OmhulBfzTfb/eEsFOhLEBB5zHnRpA1XHlpIKtYfHLJfu', '134194', 'active', NULL, '2024-02-22 17:19:25', '2024-02-22 17:19:25'),
(85, 'Samuel Jacobs', 'samjacobs3256@yahoo.com', NULL, '$2y$10$8LmRaWCZ6NoCnyniATQYrukUewhUkcxRHy6Yr.lwpzq1MjBSfHeHG', '192003', 'active', 'd97b0yrO1dOErA8mQfS0AU76xFivcsuHMBqQ4wdYI9BkCfMl52doZGXMQeLM', '2024-02-22 21:39:14', '2024-02-22 21:39:14'),
(86, 'Van Hinson', 'vanerichinson1965@gmail.com', NULL, '$2y$10$jqHleFnNbjbvRJ0OOzgmtO.41xxcemchiBr.fJvzOy30VCIwDjqay', '280131', 'active', NULL, '2024-02-22 22:40:40', '2024-02-22 22:40:40'),
(87, 'Lionel Manigault', 'Info@imurje.com', NULL, '$2y$10$jJ8F6JipzeLPdadWwCKHV.6qqiGUZzGsj6FVhKaB0KqbHNN..mpAW', '225962', 'active', NULL, '2024-02-23 16:07:42', '2024-02-23 16:07:42'),
(88, 'Anthony Mitchell', 'siramp5@aol.com', NULL, '$2y$10$W.opaNQuitbG71KIlLDjmet/Xo4fPG2w1t1JNdhxV8KXTj6BFnrnu', '233850', 'active', NULL, '2024-02-23 16:10:23', '2024-02-23 16:10:23'),
(89, 'John Cox', 'Deathfromafar338@gmail.com', NULL, '$2y$10$fE5ZYczjqBG555LBaJtKleHneE.94WQmoPtnfJYoG3CxYgJK3qMJ.', '285688', 'active', NULL, '2024-02-23 17:03:23', '2024-02-23 17:03:23'),
(90, 'Frederick Turpin', 'frederickturpin1@gmail.com', NULL, '$2y$10$zIQJMiQt2xA5PcyYVg1pXOnrteWFD2KEIuztJa4uFXAw785oPX0ym', '274269', 'active', NULL, '2024-02-23 17:43:21', '2024-02-23 17:43:21'),
(91, 'Anthony Sepulveda', 'tonysep75@gmail.com', NULL, '$2y$10$TdtyKt5v.f.Ko8SBUKoWXOHgz8wgoL61wHf.PfFfHQ7yPddiSsa32', '112299', 'active', NULL, '2024-02-23 22:46:02', '2024-02-23 22:46:02'),
(92, 'Veeta  Stallworth', 'dorenestallworth@gmail.com', NULL, '$2y$10$uy0qJQ1rGTnZjsDikmPlmu5LPbO0zP6AXFFPCHILkDV9pRSOa/na2', '279467', 'active', 'FXQbd5epIRJGWNnvDdVdyeAff7Q2jdmrNUa1YCgMOGquMNI2kqmFWOyTohMG', '2024-02-23 23:53:11', '2024-02-23 23:53:11'),
(93, 'Paul Jaskierny', 'pauljaskierny@gmail.com', NULL, '$2y$10$OJZWhMO1jkN3gU03C6lm1Om7Q5ispr0MySYt08vwNMUG2VApEBfEK', '243552', 'active', NULL, '2024-02-24 05:54:35', '2024-02-24 05:54:35'),
(94, 'Erik Grunberg', 'erik.grunberg@gmail.com', NULL, '$2y$10$BaK4pLa4nKOBIQZkQAMWZuv9G3vMErhcC91.wv6QrwfAwulMO1t5.', '227572', 'active', NULL, '2024-02-24 15:27:57', '2024-02-24 15:27:57'),
(95, 'Megan Liebel', 'Mliebel6@yahoo.com', NULL, '$2y$10$e5Oky8kLQww0w4vcjXqo2.1Cwyo.779RHUJqAz1U7Ixp2nQZFT6f6', '285290', 'active', NULL, '2024-02-24 22:44:16', '2024-02-24 22:44:16'),
(96, 'Joel Tillman', 'jrockt@gmail.com', NULL, '$2y$10$sqW7WBCsNF5o81prvFPScu8xoZ4/WH7YE2Vcjl5F5dlLuL8tR1Bte', '264997', 'active', 'BGsc4r0oF2XuYxmka2R617EP0kOCpEfzos55eghDfReyL5WRzRBH9fZazcGj', '2024-02-25 20:36:00', '2024-02-25 20:42:17'),
(97, 'Angela Brown', 'karsbehindbars@gmail.com', NULL, '$2y$10$72R8rCqqFeHgmv17vxNZ8ekDtrIHMEiXANaqpeq1B4gik0MPPQaqC', '277246', 'active', NULL, '2024-02-26 19:36:04', '2024-02-26 19:36:04'),
(98, 'Judi  Reeves ', 'jreeves@butterfieldelectric.com', NULL, '$2y$10$Wl1W84sbHpZdif5VhQuuHerVErMOK.cWPxr2Q7U/znIfjL2fDOfK6', '182141', 'active', NULL, '2024-02-26 22:14:45', '2024-03-01 19:52:28'),
(99, 'Larry Golden', 'larrygolden0@gmail.com', NULL, '$2y$10$7yNmvayXp.NgSdJl8qWaSe67rHqLN.C85VUgtVXwYf4pwuU4I8lVm', '28552', 'active', '3B5azlW2f1QsEeipVtOQzxzw2Fb3BMEN5ITEdU44jWcsKp2ogUAwiaFHrMwe', '2024-02-27 01:12:48', '2024-02-27 01:12:48'),
(100, 'Robin McDonough', 'Robin.l.mcdonough@gmail.com', NULL, '$2y$10$uK9pKCxZOjQqK2Uf/Zr0VerMUxzPyVFBmCofQ2H/cB1T/a6eRrtUa', '285740', 'active', NULL, '2024-02-27 15:26:51', '2024-02-27 15:26:51'),
(101, 'Faustino Patino Montero', 'faustinopatinom@gmail.com', NULL, '$2y$10$LlvAnu5tFAHBXQfga4yx4eKHfiscX59Rx8rvuIi1ci2R.MbHuQhGm', '144327', 'active', NULL, '2024-02-27 15:47:27', '2024-02-27 15:47:27'),
(102, 'Monique Williams', 'monique.williams73012@gmail.com', NULL, '$2y$10$TfDrassnvHD1ki.pNL49GeTS5aMXKIc57tGs0lK4pnPK5L/hkclbC', '67949', 'active', NULL, '2024-02-27 18:23:48', '2024-02-27 18:23:48'),
(103, 'Leon Cooper ', 'LDOG11763@gmail.com', NULL, '$2y$10$tKI9zVJJm/1eTytDl7QqbOMLRhtQRwIidYMlhHOs9264lst9bERT6', '292479', 'active', NULL, '2024-02-27 20:33:29', '2024-03-01 18:11:15'),
(104, 'Johnna Dean', 'nursejohnna123@gmail.com', NULL, '$2y$10$yRzInrXFuOkkw0TSp5E0c.5fMfRw/IPqDG8WAJ.OoRD.UGwvQrdVm', '98584', 'active', 'G8vdKbFtyecqg6DhheDT0VyaYASeLa0Opy0y1FeEt4ASy3pdK4M6iCOG95Cx', '2024-02-28 00:54:11', '2024-02-28 00:54:11'),
(105, 'Mai Moua', 'zh27491@gmail.com', NULL, '$2y$10$QKkiyJMyZqJRGM3w1.eoMuzx2.cSTh.WnCrD7eGQXIG.fqroE3Sve', '276009', 'active', NULL, '2024-02-28 01:54:03', '2024-02-28 01:54:03'),
(106, 'Mary Willson', 'willsonmary257@gmail.com', NULL, '$2y$10$qbRpiIu8.SAxpSnM9RcNHuWhg0/0DnvR6lKidRYIkw5bbymtn7S1y', '159663', 'active', NULL, '2024-02-28 01:56:20', '2024-02-28 01:56:20'),
(107, 'Jeffery Smith', 'smithply1@yahoo.com', NULL, '$2y$10$kXiz5dhElrUoUyQBCMNanewp/5hLXOMwwcUN/LYhau6yaqMG6eCzC', '78945', 'active', NULL, '2024-02-28 16:19:51', '2024-02-28 16:19:51'),
(108, 'Robert Carcano', 'r.carcano@yahoo.com', NULL, '$2y$10$1BfCNp92dsuNRXRV5wF3KuYECVG2RaWvMHW0qe092EmU/VUArXmFW', '221006', 'active', NULL, '2024-02-28 16:23:20', '2024-02-28 16:23:20'),
(109, 'Roberta Trautweiler', 'extrmrads@yahoo.com', NULL, '$2y$10$.hdvk7sBK2RztMGplAoLHec1VDRd0ocGtSR5Dz.ALhjWRZHQSA/9.', '210914', 'active', NULL, '2024-02-28 17:21:15', '2024-02-28 17:21:15'),
(110, 'Yolanda Neal', 'nealyolanda541@yahoo.com', NULL, '$2y$10$NEwdaoB1OLnSxFkMAHKYNeT0G32wfdBtPTyeKWogcSew4XJPYLFru', '295608', 'active', NULL, '2024-02-28 17:59:14', '2024-02-28 17:59:14'),
(111, 'Susana Aguilar ', 'susanasmith613@yahoo.com', NULL, '$2y$10$MOLS.jCAbE7c1h3akWtbq.qVu/sgJDUzB1TicXYfZQWgGIYDHR9F2', '12281', 'active', NULL, '2024-02-28 22:52:03', '2024-02-28 22:52:03'),
(112, 'Gregory Brice', 'miamibrice@yahoo.com', NULL, '$2y$10$Yk/0LKM2oyLrz1YH2aIZnOYvExa6PzsM5o/szXSUG8ayxuEKw0g8y', '204366', 'active', NULL, '2024-02-28 23:28:53', '2024-02-28 23:28:53'),
(113, 'Benito Vargas Jr', 'bvargas@broward.org', NULL, '$2y$10$pXH1Y1fvlwynB.3SLpii/ufP8tZTV/69/1.nF1paf596x6CZXwp7a', '291050', 'active', NULL, '2024-02-28 23:49:12', '2024-02-28 23:49:12'),
(114, 'Ruben Zepeda', '41zepeda@gmail.com', NULL, '$2y$10$/GmZdH0VwCmZCQkbJWJMH.vK.s8zE89mnF0xu8pAV00upJqPxeq82', '42818', 'active', NULL, '2024-02-29 00:19:58', '2024-02-29 00:19:58'),
(115, 'April  Isaac', 'aprilisaac0@gmail.com', NULL, '$2y$10$JGvaNoapd/eNvVYk5U8zjOCcokTT3o48C6pjuhAi8aDxDcwzTXUii', '256143', 'active', NULL, '2024-02-29 01:49:37', '2024-02-29 01:49:37'),
(116, 'Calvin Johnson', 'calvin30038@gmail.com', NULL, '$2y$10$GP7qwfb27sMJT5d2H.VITenK2Gs.PFpnuHJ/7Hu8NXv12aw6Ub.CW', '285871', 'active', NULL, '2024-02-29 11:21:48', '2024-02-29 11:21:48'),
(117, 'Susanne Kowal', 'gns.231@comcast.net', NULL, '$2y$10$4MJudHLe7Fo8WS2kHkZTQu1stuRUzm186ZvMJDC3QnfSxpilSBSJW', '214695', 'active', NULL, '2024-02-29 14:28:16', '2024-02-29 14:28:16'),
(118, 'Jennifer Hooper', 'Jenn.hooper517@gmail.com', NULL, '$2y$10$bXCHNX5TcW6GOjaz/53CR.GBk0yQVAp.ka1xD.4cV0cR164tWjE8e', '296098', 'active', 'v1TQLmT7ZfbjQ1F9EwOCIPBBeENDXGmBeoMaqgRKuCXo39ZJSKkf4UOSokb4', '2024-02-29 21:55:52', '2024-02-29 21:55:52'),
(119, 'Diane Pompa', 'dianepompa884@gmail.com', NULL, '$2y$10$jIyiDXmMxu7rVV7sVbW4se.LIHvtGctFFmlckE5aNd3kUCQQzLCBy', '220998', 'active', NULL, '2024-02-29 22:13:04', '2024-02-29 22:13:04'),
(120, 'Molly  Baker ', 'mollybakerbird@gmail.com', NULL, '$2y$10$TsjgmyxgvuGF3SBT4xT98.xwBDL.BAnleU6tIKFZJYXxzJsfzO0Cm', '143429', 'active', '9zM2ssbJbWNF0s2OyqxYc0yIFUrJu8UJmbWUNJKIRxoDTxHwJE5N2e7efkfU', '2024-02-29 22:16:28', '2024-02-29 22:16:28'),
(121, 'Anthony Swisher', 'adswisher@hotmail.com', NULL, '$2y$10$epCj.KSspzh7W9eiIBxwiueVZCD6De/BH8WxCA0mOBNIkhpshhwei', '73281', 'active', NULL, '2024-02-29 22:24:18', '2024-02-29 22:24:18'),
(122, 'Rosemary  Palmer', 'rpalmer0815@gmail.com', NULL, '$2y$10$v/LEt38EBtXgKzJLpSNcSudu2dAYmLcxPDxtYkIo8sVvA8fowE/8O', '79309', 'active', NULL, '2024-02-29 22:26:43', '2024-02-29 22:26:43'),
(123, 'Crystal  Karmann', 'c.o.oshel1985@gmail.com', NULL, '$2y$10$LrcmisvHbQS9HWyUzUCcg.GF/lQZMiBP6uhGtC3vOWUEsFBPme176', '284077', 'active', NULL, '2024-03-01 02:41:16', '2024-03-01 02:41:16'),
(124, 'Donald Hewins', 'ny20750120@gmail.com', NULL, '$2y$10$eKS/./WWCdyMA4xIIJ2weelbowyp9oAg70RRKXQ25fFDEkWJpZRxm', '92531', 'active', NULL, '2024-03-01 14:19:13', '2024-03-01 14:19:13'),
(125, 'Daniel  Finch, Sr.', 'trevcointl@gmail.com', NULL, '$2y$10$/lRCJDDrekAEnODE0BTTXuEjJqbqMtCSyeyYxCk6rV1qFIpxnlYuG', '239619', 'active', NULL, '2024-03-01 18:35:52', '2024-03-01 18:35:52'),
(126, 'Lionel Kinard', 'lionelkinard66@gmail.com', NULL, '$2y$10$/GLQvhq8I9g0RaBb5hSh8e3zWdUyH7hVk5Q.ZMuvB63cRVZJxNLmy', '241465', 'active', NULL, '2024-03-01 21:35:43', '2024-03-01 21:35:43'),
(127, 'Manolo Rivera', 'manolovr650@gmail.com', NULL, '$2y$10$FqzdJ606eEQXcEZgSzORzessa6FGksUQP0UQbWLMjssRMDB8tbDy6', '276372', 'active', NULL, '2024-03-03 17:27:58', '2024-03-03 17:27:58'),
(128, 'Alnsha Jones', 'alnshaj90@yahoo.com', NULL, '$2y$10$tQ5SawHuPGn9yGUFHe8cTuxTVCeXh60NSioFTlFbF.6CSYRlwcILy', '259071', 'active', NULL, '2024-03-04 17:58:23', '2024-03-04 17:58:23'),
(129, 'Jodi Kunzler', 'jodi@jlluxurydesign.com', NULL, '$2y$10$TRZiBkkQT48RjsS.7LLGiOu4X3ADTWdkng6I.M.NiRsJDBdtMJOby', '142966', 'active', NULL, '2024-03-04 20:58:42', '2024-03-04 20:58:42'),
(130, 'Lyles Williams', 'lyleswilliams125@gmail.com', NULL, '$2y$10$S41HA8ySTck9.UCRL4Fso.ImOqe78bg8pAQfLJrUdUcXO7fqhrTAa', '147534', 'active', NULL, '2024-03-05 02:34:00', '2024-03-05 02:34:00'),
(131, 'Sonya Williamson ', 'williamson.sonya09@gmail.com', NULL, '$2y$10$AvUyltuTy1sM6HoR/aQjCu0FxUMBt/L9telYy8tupcDexGQeLl.Ze', '241361', 'active', NULL, '2024-03-05 14:33:39', '2024-03-05 14:33:39'),
(132, 'Renee Harris', '4146391172.rh@gmail.com', NULL, '$2y$10$1Yukj5GI1GRsHlrxFTcBLe4M9CmNpZXfVOd4/MIsQUvuXWvXeYWp.', '262014', 'active', 'oS9eGN5iTGLIm2GQiE7GTcvbckudfN1AsYTOyYP8yLt80YWC7mO5ypxKA4M2', '2024-03-05 16:16:57', '2024-03-05 16:16:57'),
(133, 'Derrick Keith', 'youngroots@gmail.com', NULL, '$2y$10$B6doOxWKytPlBcBPnY9QouUcsmWqxTb9dJ.LzwIiAibpNNlHsjnXO', '263360', 'active', NULL, '2024-03-05 17:30:41', '2024-03-05 17:30:41'),
(134, 'Victoria Nava-Hernandez', 'vlaboo01@yahoo.com', NULL, '$2y$10$jPvc.TjmidkTg7WkEKM8AuQzC5CLEfpMqbwHMyDda5Ed96iMYKUi6', '220121', 'active', 'NS3PF3uF5kPA2MZ2nDR04KhDhYSL3gUWl9mI4bjbOcqd3hrCSTeU8ANgspwo', '2024-03-05 17:40:16', '2024-03-06 04:23:33'),
(135, 'Matthew Smith', 'matthewl.smith74.ms@gmail.com', NULL, '$2y$10$WcVLcwzORuOarMyIuri/Y./4tmasOoX8wz/7k8VJJru0KZzsG3Nvq', '109715', 'active', NULL, '2024-03-05 18:29:41', '2024-03-05 18:29:41'),
(136, 'Megan Fontenot', 'madroccs@yahoo.com', NULL, '$2y$10$9xp2bFqpS2ee.hg2E/.7tOOPnkRzw7ElJHPI/CetXhBK6O6Dy77XK', '300654', 'active', NULL, '2024-03-05 19:22:49', '2024-03-05 19:22:49'),
(137, 'Aldo Uribe Contreras', 'aldo@ranchofoods.com', NULL, '$2y$10$sT3qBUQBpOm.nF3kPx6K3OzTCtPTIaVu9nm/J88QSs0e59Inz/fHS', '114695', 'active', NULL, '2024-03-05 23:05:54', '2024-03-05 23:05:54'),
(138, 'Efrain Sibrian', 'efrainsibrian@gmail.com', NULL, '$2y$10$yHrwmfbrOm/z1B2oqJbgk.MuiqjJc391WY8TL8KjpEfhkLrOC7062', '122100', 'active', NULL, '2024-03-06 04:33:44', '2024-03-06 04:33:44'),
(139, 'James Perez', 'kiethah@gmail.com', NULL, '$2y$10$PMTGtn4w6WXuL/Nxd7pLKOvLswVIOqRcbkfo9Ia.YtrpB7KDmVC0C', '269076', 'active', NULL, '2024-03-06 10:56:01', '2024-03-06 10:56:01'),
(140, 'Darlene Hughes', 'dfayhughesmullis@gmail.com', NULL, '$2y$10$vdzmSnvpi7IiZGZQePBKIO6xE8Ozs2qriM.hEtUcGgPogLd6jpDIq', '261452', 'active', NULL, '2024-03-06 16:39:38', '2024-03-06 16:39:38'),
(141, 'Debra Langlois', 'Debralanglois@gmail.com', NULL, '$2y$10$oSsyl.uyEUNGqU0Z/dz8f.ZoeDN0leH/27qU2aKh256a144BFXp5m', '301226', 'active', NULL, '2024-03-06 18:40:01', '2024-03-06 18:40:01'),
(142, 'Elroy Miller Jr', 'juniorjammer50@gmail.com', NULL, '$2y$10$gvpCJZfvCo6SoBbYOwvHX.SSL02PLvsyNa2/lxnb/Qh1jQVVqsIG.', '220210', 'active', NULL, '2024-03-06 22:11:33', '2024-03-06 22:11:33'),
(143, 'Zane Brown', 'zanebrown25@gmail.com', NULL, '$2y$10$gLs.qDR67RQa6zFqK4KMXOk9rXYxMog8LCRf/4CSrzexNcQCrcnW6', '42657', 'active', NULL, '2024-03-06 22:18:16', '2024-03-06 22:18:16'),
(144, 'Kathy Buchanan', 'kyleocean1@hotmail.com', NULL, '$2y$10$FCkDnt8NIUcTn6iWw1bQ2O02UxvV4IfzfFjZHWCJ7DYaxdwZ4nuEa', '295843', 'active', NULL, '2024-03-06 22:21:51', '2024-03-06 22:21:51'),
(145, 'Susan  Martin', 'susanemartin81@gmail.com', NULL, '$2y$10$Z.jRuZhO0J4l7ty8QyctXenN0WCrYocaF6EMhDGOo7oX.MmZ1.iti', '16135', 'active', NULL, '2024-03-06 22:25:38', '2024-03-07 17:39:57'),
(146, 'Heather  McClure', 'topper50014@yahoo.com', NULL, '$2y$10$9pXBvXwjt2VaQD/LOCoI..JHgDRpRfmU8Yadz9NSE6y6EPWvzzUnW', '244046', 'active', NULL, '2024-03-07 02:00:39', '2024-03-07 02:00:39'),
(147, 'Burdette Steele', 'Steelephil3@gmail.com', NULL, '$2y$10$OWQLqStL6fNwYwZllXL8c.pJCDcXhqC5dbu13OXOGsSaFSze3bI3q', '157342', 'active', 'hVZBRzvBnQXNq9bnSPuMOQBUDQWwtWs8bEblEEhltiSteF2krVDUWkUQH2mM', '2024-03-07 12:53:31', '2024-03-07 12:53:31'),
(148, 'Martin Struttman', 'martinstruttman@yahoo.com', NULL, '$2y$10$4VNQRzQh2fGOwPW0FQ/jL.3eR9agSThTphoBQpqy769502fb7RUxO', '214488', 'active', NULL, '2024-03-07 16:51:36', '2024-03-07 16:51:36'),
(149, 'Sherma Brooks', 'scbrooks121@yahoo.com', NULL, '$2y$10$5xI7NicVNpuIdRC3Xi.SyeHybn/a6VFSMHMMs1wI82kzhzyC8sRv6', '288904', 'active', NULL, '2024-03-07 17:02:51', '2024-03-07 17:02:51'),
(150, 'Fonda Maupin', 'fkmaupin@gmail.com', NULL, '$2y$10$TcHAAbStW9Ibpc5YAII0duYD0k6B74AVlFWdF/cPe5jCnDZNZRxhi', '302159', 'active', NULL, '2024-03-07 20:15:20', '2024-03-07 20:15:20'),
(151, 'Lucious  Moore', 'lmoore2455@yahoo.com', NULL, '$2y$10$5ww2lA32JzYzEtQnJ1F.r.f0YDIgY7Rv5hsIc8lX.F8n9uUKpSf5.', '232305', 'active', NULL, '2024-03-08 01:05:03', '2024-03-08 01:05:03'),
(152, 'Mark Serna', 'markserna14@yahoo.com', NULL, '$2y$10$BXH61kzDuyBKcTpRRn9CP.d7XRpiGT2FdsFRQI.68Q9cuocqX9f9i', '116029', 'active', NULL, '2024-03-08 01:14:41', '2024-03-08 01:14:41'),
(153, 'Eyeylondra Jones Austin', 'chablise83@yahoo.com', NULL, '$2y$10$JpUeAjelR2Orro0W/TqmneSiK/LSg9gaErwbOAww0p6C0tGRNFB5a', '272602', 'active', NULL, '2024-03-08 01:36:20', '2024-03-08 01:36:20'),
(154, 'Louise Foreman', 'luwease@outlook.com', NULL, '$2y$10$X1un3LHYlAe1/IBfImDWXuJh88RGeynXzroef6IgCf17UQlPHrOJm', '168073', 'active', NULL, '2024-03-08 03:00:43', '2024-03-08 03:00:43');

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
-- Indexes for table `password_reset_custom`
--
ALTER TABLE `password_reset_custom`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=379;

--
-- AUTO_INCREMENT for table `fq_bankaccount`
--
ALTER TABLE `fq_bankaccount`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=298;

--
-- AUTO_INCREMENT for table `fq_bankspouseaccount`
--
ALTER TABLE `fq_bankspouseaccount`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `fq_creditcards`
--
ALTER TABLE `fq_creditcards`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;

--
-- AUTO_INCREMENT for table `fq_dependent`
--
ALTER TABLE `fq_dependent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=128;

--
-- AUTO_INCREMENT for table `fq_estate`
--
ALTER TABLE `fq_estate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `fq_investments`
--
ALTER TABLE `fq_investments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=129;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `password_reset_custom`
--
ALTER TABLE `password_reset_custom`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=119;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=142;

--
-- AUTO_INCREMENT for table `toform`
--
ALTER TABLE `toform`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `to_dependent`
--
ALTER TABLE `to_dependent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `to_vehicle`
--
ALTER TABLE `to_vehicle`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=155;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
