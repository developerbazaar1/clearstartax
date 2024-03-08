<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class To extends Model
{
    protected $table='toform';
    protected $primaryKey='id';
    protected $fillable=['Reference','Status', 'user_id', 'Login_username', 'Login_email', 'Last_Name', 'First_Name', 'What_Tax_Year_Is_This_Organizer_For', 'Main_Contact_Phone_Number', 'snd_Contact_Phone_Number', 'SSN', 'Date_Of_Birth', 'Occupation', 'Street_Address', 'Address_Line_2', 'City', 'State', 'Zip_Code', 'Country', 'Rent_Or_Own', 'Client_Filing_Status', 'spouse_first_name', 'spouse_last_name', 'spouse_ssn', 'spouse_date_of_birth', 'spouse_occupaton', 'Client_Employment_Status', 'Do_you_have_your_W2s', 'Upload_your_W2s', 'We_can_file_back_year_returns_based_on_IRS_wage_and_income', 'You_Will_Need_To_Upload_your_W2s', 'Do_you_have_any_dependents_EXCLUDING_yourself_and_your_spouse', 'How_many_dependents_do_you_have', 'Did_your_marital_status_change_during_the_year', 'Did_your_address_change_from_last_year', 'Can_you_be_claimed_as_a_dependent_by_another_tax_payer', 'Did_you_acquire_or_dispose_of_any_stocks_or_bonds_during_the_yea', 'Upload_Form_1099B', 'Did_you_take_out_a_home_equity_loan_this_year', 'Did_you_have_any_foreign_income_or_pay_any_foreign_taxes_during_', 'Did_you_receive_any_lump_sum_payment_from_a_pension_profit_shari', 'Did_you_make_any_withdrawals_from_an_IRA_Keogh_SIMPLE_or_SEP_acc', 'Did_you_make_any_non_cash_charitable_contributions', 'Did_you_use_your_car_on_the_job_for_other_than_commuting', 'Did_you_work_out_of_town_for_part_of_the_year', 'Did_you_have_any_educational_expenses_during_the_year', 'Did_you_have_any_child_care_expenses_other_than_Child_Support', 'Amount', 'Number_of_children_cared_for', 'Services_Performed_in_your_house', 'Name_address_of_provider', 'Are_you_your_spouse_and_all_dependents_covered_by_health_insuran', 'Upload_all_1095_or_proof_of_insurance', 'Print_Full_Name', 'Date', 'Signature', 'Name_Of_Business', 'Tax_ID', 'Business_Activity', 'Do_you_have_a_profit_and_loss_statement', 'Upload_Profit_Loss_Statement', 'Accounting', 'Advertising', 'Alarm_Security_Installation', 'Alarm_Security_Monitoring', 'Appraisal_Fees', 'Auto_Truck_Expenses', 'Bad_Debt_Includes_In_Gross_Income', 'Bank_Service_Charges', 'Books_Subscrp_Publications', 'Client_Misc_Gov_Fees_Inc_In_Income', 'Commission_Outside_Services', 'Credit_Card_Discount_Fees', 'Credit_Card_Min_Usage_Fees', 'Depreciation_From_Prior_Year_Income_Tax', 'Domain_Name_Registration', 'Dues_Membership', 'Education_Expenses', 'Employee_Benefits', 'Employee_Customer_Awards_Prices_Troph', 'Entertainment', 'Equipment_Machinery_Purchased', 'Exhibit_Show', 'Film_Developing', 'Flower_Cards', 'Franchise_Fees', 'Fuel', 'Furniture_Fixtures', 'Gift_To_Employee_Client', 'Goodwill', 'Graphic_Design_Fees', 'Home_Office', 'Hotel_Motel_Inn', 'Insurance_Bus_Interruption', 'Insurance_For_Employees', 'Insurance_Liability', 'Insurance_Other', 'Insurance_Work_Comp', 'Internet_Services', 'Inventory_Beginning_Of_The_Year', 'Inventory_Breakage_Spoilage_Exp_Unreturn', 'Inventory_Ending_Of_The_Year', 'Inventory_Purchases', 'Inventory_Theft_Loss', 'IRA_Regular_Or_SEP_IRA_Contributed_Year', 'Landscaping', 'Laundry_Cleaning', 'Legal_Professional_Services', 'Licenses_Permits', 'Licenses_Permits_For_Client_Projects', 'Locksmith_Keys_Lock_Boxes', 'Meals_50_Bus', 'Medical_Insurance', 'Mileage_Business', 'Moving_Exp', 'Notary_Services', 'Parking', 'Pension_Plan', 'Pest_Control', 'Postage_Delivery_Freight_Shipping', 'Printing_Reproductions', 'Promotional_Exp_Products_Or_Services', 'Rent_Business_Location', 'Rent_Furniture', 'Rent_Lease_Auto_And_Or_Truck', 'Rent_Lease_PO_Box_Storage', 'Rent_Lease_Equipment', 'Repair_Building', 'Repair_Equipment', 'Research_Expenses', 'Royalty_For_Franchise', 'Salaries_Wages', 'Samples_Expenses', 'Seasonal_Bus_Decorations', 'Signs_Flags_Banners', 'Software_Upgrades', 'Supplies_Shop', 'Supplies_Office', 'Swimming_PoolPurchased_Or_Installed', 'Swimming_Pool_Services', 'Tax_Estimated_FTB_Sole_Corp_LLC', 'Tax_Estimated_IRS_Sole_Corp_LLC', 'Tax_Real_Estate_House_Business', 'Tax_Sale_That_Included_In_Income', 'Taxes_Payroll_Employers_Portion', 'Telephone_FAX_Pager_Cell', 'Tips_With_Verifiable_Receipts', 'Tools_Molds_Dies_Jigs', 'Towing_Services', 'Trademark_Patent_Expenses', 'Travel', 'Uniform_Cleaning_Services', 'Uniform_Purchased', 'Utilities_Electric_Gas', 'Vandalism_Graffiti_Clean_Up_Fees', 'Wash_Vehicle_For_Trucking_Taxi_Business', 'Waste_Disposal', 'Web_Design_Fees', 'Web_Hosting_Fees', 'Other', 'Other1', 'How_many_motor_vehicles_do_you_have' ];
}
