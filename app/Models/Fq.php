<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Fq extends Model
{
    protected $table='fq';
    protected $primaryKey='id';
    protected $fillable=['Reference','Status', 'user_id', 'Login_username', 'Login_email', 'Last_Name', 'First_Name', 'Marital_Status', 'Date_Of_Birth', 'SSN', 'Married_Filing_Status', 'Street_Address', 'Address_Line_2', 'City', 'State', 'Zip_Code', 'Rent_Or_Own', 'County_Of_Residence', 'Primary_Phone_Number', 'snd_Contact_Phone_Number', 'Driver_License', 'Do_you_have_any_dependents_EXCLUDING_yourself_and_your_spouse', 'How_many_dependents_do_you_have', 'Client_Employment_Status', 'Cash_on_Hand_Amount', 'How_Many_Bank_Accounts_Do_You_Have', 'Do_You_Have_Any_Investments', 'Can_you_take_a_loan_against_your_401k_Account', 'Do_You_Have_Any_Credit_Cards', 'How_many_type_of_investments_do_you_have','How_many_Credit_Cards_Do_You_Have', 'Do_You_Have_Life_Insurance', 'How_Many_Life_Insurance_Policy_Do_You_Have', 'Do_You_Own_Any_Real_Estate', 'How_Many_Properties_Do_You_Own', 'Do_You_Own_A_Motor_Vehicle', 'How_Many_Motor_Vehicles_Do_You_Own', 'Do_You_Have_Any_Other_Personal_Assets', 'How_Many_Other_Personal_Assets_Do_You_Have', 'Interest_Dividends', 'Net_Self_Employed_Business_Income', 'Net_Rental_Income', 'Distribution', 'Social_Security_Income', 'Alimony_Income', 'Retirement_Income_Pension', 'Other_Income', 'Total_House_Hold_Income', 'Food_Clothing_Misc', 'Rent_Mortgage', 'Utilities', 'Vehicles_Ownership_Costs', 'Vehicles_Operating_Costs', 'Public_Transportation', 'Health_Insurance', 'Out_of_Pocket_Health_Costs', 'Court_Ordered_Payments', 'Child_Care', 'Life_Insurance', 'Taxes', 'Other_Secure_Debts', 'Other_Secure_Debts1', 'TotHousehold_Expense', 'Are_you_the_beneficiary_of_a_trust_estate_or_life_insurance_po', 'Are_you_currently_in_bankruptcy', 'Discharge_Dismissal_Date', 'Have_you_been_party_to_a_lawsuit', 'Date_the_lawsuit_was_resolved', 'In_the_past_10_years_have_you_transferred_any_assets_for_less_t', 'Date_the_asset_was_transferred', 'In_the_past_3_year_have_you_transferred_any_real_property', 'List_the_type_of_property_and_date_of_the_transfer', 'Print_Full_Name', 'Date', 'Signature', 'spouse_first_name', 'spouse_last_name', 'spouse_Driver_License', 'spouse_ssn', 'spouse_date_of_birth', 'spouse_employment_status', 'Spouse_Cash_on_Hand_Amount', 'How_Many_Bank_Accounts_Spouse_Have', 'Spouse_Social_Security_Income', 'Spouse_Wages'];
}

