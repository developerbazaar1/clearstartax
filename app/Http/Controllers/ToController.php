<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\To;
use App\Models\Todependent;
use App\Models\Tovehical;
use Illuminate\Support\Facades\Crypt;
use Auth;
use PDF;
use Elibyy\TCPDF\Facades\TCPDF;
use URL;
use Illuminate\Support\Facades\Mail;
use App\Models\User;

class ToController extends Controller
{
    public function index_app($email,$password)
    {   
        $user = User::where('email', $email)->first();

        if ($user) {
             $origin_password = substr($password, 16,-16);
             if(Auth::attempt(['email' => $email, 'password' => $origin_password])){ 
                auth()->login($user);
                 $tos = To::where('user_id', Auth::user()->id)->orderBy('id','DESC')->get(); 
        
                session(['key' => 'app']);
                // $request->session()->put('hasApp', true);
                return view('to.index',compact('tos'));
            } else {
                echo "Please verify password you provided and try again";
                
            }
        }else{
            echo "Please verify email you provided and try again";
        }
       
    }
    
    public function index()
    {   
        $tos = To::where('user_id', Auth::user()->id)->orderBy('id','DESC')->get(); 
        return view('to.index',compact('tos'));
    }
    
    public function create()
    {
        return view('to.create');
    }

    
    public function store(Request $request)
    { 
       


        $action = $request->input('submit');

        // Perform actions based on the clicked button
        if ($action === 'function2') {
           
                $rules = [
                    'What_Tax_Year_Is_This_Organizer_For' => 'required',
                    'First_Name' => 'required',
                    'Last_Name' => 'required',
                    'Main_Contact_Phone_Number' => 'required',
                    'SSN' => 'required',
                    'Date_Of_Birth' => 'required',
                    'Occupation' => 'required',
                    'Street_Address' => 'required',
                    'City' => 'required',
                    'State' => 'required',
                    'Zip_Code' => 'required',
                    'Country' => 'required',
                    'Rent_Or_Own' => 'required',

                    'Client_Filing_Status' => 'required',
                    'Client_Employment_Status' => 'required',

                    'Do_you_have_any_dependents_EXCLUDING_yourself_and_your_spouse' => 'required',
                    'Did_your_marital_status_change_during_the_year' => 'required',
                    'Did_you_acquire_or_dispose_of_any_stocks_or_bonds_during_the_yea' => 'required',
                    'Did_your_address_change_from_last_year' => 'required',
                    'Can_you_be_claimed_as_a_dependent_by_another_tax_payer' => 'required', 
                    'Did_you_take_out_a_home_equity_loan_this_year' => 'required',
                    'Did_you_have_any_foreign_income_or_pay_any_foreign_taxes_during_' => 'required',
                    'Did_you_receive_any_lump_sum_payment_from_a_pension_profit_shari' => 'required', 
                    'Did_you_make_any_withdrawals_from_an_IRA_Keogh_SIMPLE_or_SEP_acc' => 'required',
                    'Did_you_make_any_non_cash_charitable_contributions' => 'required',
                    'Did_you_use_your_car_on_the_job_for_other_than_commuting' => 'required', 
                    'Did_you_work_out_of_town_for_part_of_the_year' => 'required',
                    'Did_you_have_any_educational_expenses_during_the_year' => 'required',
                    'Did_you_have_any_child_care_expenses_other_than_Child_Support' => 'required',
                    'Are_you_your_spouse_and_all_dependents_covered_by_health_insuran' => 'required', 
                    'Print_Full_Name' => 'required', 
                    'Date' => 'required', 
                ];




                // Add conditional validation based on a certain condition
                if (($request->input('Client_Filing_Status') == 'jointly') || ($request->input('Client_Filing_Status') == 'separately')) {
                    $rules['spouse_first_name'] = 'required';
                    $rules['spouse_last_name'] = 'required';
                    $rules['spouse_ssn'] = 'required';
                    $rules['spouse_date_of_birth'] = 'required';
                    $rules['spouse_occupaton'] = 'required';
                }

                if ($request->input('Client_Employment_Status') == 'wage') {
                    $rules['Do_you_have_your_W2s'] = 'required';
                }

                if ( $request->input('Do_you_have_your_W2s') == 'Yes') {
                    $rules['Upload_your_W2s'] = 'required';
                }

                if ($request->input('Do_you_have_your_W2s') == 'No') {
                    $rules['We_can_file_back_year_returns_based_on_IRS_wage_and_income'] = 'required';
                }

                if ($request->input('We_can_file_back_year_returns_based_on_IRS_wage_and_income') == 'No') {
                    $rules['You_Will_Need_To_Upload_your_W2s'] = 'required';
                }

                if (($request->input('Client_Employment_Status') == 'selfemployed') || ($request->input('Client_Employment_Status') == 'businessowner')) {
                    $rules['Name_Of_Business'] = 'required';
                    $rules['Tax_ID'] = 'required';
                    $rules['Business_Activity'] = 'required';
                    $rules['Do_you_have_a_profit_and_loss_statement'] = 'required';
                    $rules['How_many_motor_vehicles_do_you_have'] = 'required';
                }

                if ( $request->input('Do_you_have_a_profit_and_loss_statement') == 'Yes') {
                    $rules['Upload_Profit_Loss_Statement'] = 'required';
                }

                if ( $request->input('Do_you_have_a_profit_and_loss_statement') == 'No') {
                    $rules['Accounting'] = 'required';
                    $rules['Advertising'] = 'required';
                    $rules['Alarm_Security_Installation'] = 'required';
                    $rules['Alarm_Security_Monitoring'] = 'required';
                    $rules['Appraisal_Fees'] = 'required';
                    $rules['Auto_Truck_Expenses'] = 'required';
                    $rules['Bad_Debt_Includes_In_Gross_Income'] = 'required';
                    $rules['Bank_Service_Charges'] = 'required';
                    $rules['Books_Subscrp_Publications'] = 'required';
                    $rules['Client_Misc_Gov_Fees_Inc_In_Income'] = 'required';
                    $rules['Commission_Outside_Services'] = 'required';
                    $rules['Credit_Card_Discount_Fees'] = 'required';
                    $rules['Credit_Card_Min_Usage_Fees'] = 'required';
                    $rules['Depreciation_From_Prior_Year_Income_Tax'] = 'required';
                    $rules['Domain_Name_Registration'] = 'required';
                    $rules['Dues_Membership'] = 'required';
                    $rules['Education_Expenses'] = 'required';
                    $rules['Employee_Benefits'] = 'required';
                    $rules['Employee_Customer_Awards_Prices_Troph'] = 'required';
                    $rules['Entertainment'] = 'required';
                    $rules['Equipment_Machinery_Purchased'] = 'required';
                    $rules['Exhibit_Show'] = 'required';
                    $rules['Film_Developing'] = 'required';
                    $rules['Flower_Cards'] = 'required';
                    $rules['Franchise_Fees'] = 'required';
                    $rules['Fuel'] = 'required';
                    $rules['Furniture_Fixtures'] = 'required';
                    $rules['Gift_To_Employee_Client'] = 'required';
                    $rules['Goodwill'] = 'required';
                    $rules['Graphic_Design_Fees'] = 'required';
                    $rules['Home_Office'] = 'required';
                    $rules['Hotel_Motel_Inn'] = 'required';
                    $rules['Insurance_Bus_Interruption'] = 'required';
                    $rules['Insurance_For_Employees'] = 'required';
                    $rules['Insurance_Liability'] = 'required';
                    $rules['Insurance_Other'] = 'required';
                    $rules['Insurance_Work_Comp'] = 'required';
                    $rules['Internet_Services'] = 'required';
                    $rules['Inventory_Beginning_Of_The_Year'] = 'required';
                    $rules['Inventory_Breakage_Spoilage_Exp_Unreturn'] = 'required';
                    $rules['Inventory_Ending_Of_The_Year'] = 'required';
                    $rules['Inventory_Purchases'] = 'required';
                    $rules['Inventory_Theft_Loss'] = 'required';
                    $rules['IRA_Regular_Or_SEP_IRA_Contributed_Year'] = 'required';
                    $rules['Landscaping'] = 'required';
                    $rules['Laundry_Cleaning'] = 'required';
                    $rules['Legal_Professional_Services'] = 'required';
                    $rules['Licenses_Permits'] = 'required';
                    $rules['Licenses_Permits_For_Client_Projects'] = 'required';
                    $rules['Locksmith_Keys_Lock_Boxes'] = 'required';
                    $rules['Meals_50_Bus'] = 'required';
                    $rules['Medical_Insurance'] = 'required';
                    $rules['Mileage_Business'] = 'required';
                    $rules['Moving_Exp'] = 'required';
                    $rules['Notary_Services'] = 'required';
                    $rules['Parking'] = 'required';
                    $rules['Pension_Plan'] = 'required';
                    $rules['Pest_Control'] = 'required';
                    $rules['Postage_Delivery_Freight_Shipping'] = 'required';
                    $rules['Printing_Reproductions'] = 'required';
                    $rules['Promotional_Exp_Products_Or_Services'] = 'required';
                    $rules['Rent_Business_Location'] = 'required';
                    $rules['Rent_Furniture'] = 'required';
                    $rules['Rent_Lease_Auto_And_Or_Truck'] = 'required';
                    $rules['Rent_Lease_PO_Box_Storage'] = 'required';
                    $rules['Rent_Lease_Equipment'] = 'required';
                    $rules['Repair_Building'] = 'required';
                    $rules['Repair_Equipment'] = 'required';
                    $rules['Research_Expenses'] = 'required';
                    $rules['Royalty_For_Franchise'] = 'required';
                    $rules['Salaries_Wages'] = 'required';
                    $rules['Samples_Expenses'] = 'required';
                    $rules['Seasonal_Bus_Decorations'] = 'required';
                    $rules['Signs_Flags_Banners'] = 'required';
                    $rules['Software_Upgrades'] = 'required';
                    $rules['Supplies_Shop'] = 'required';
                    $rules['Supplies_Office'] = 'required';
                    $rules['Swimming_PoolPurchased_Or_Installed'] = 'required';
                    $rules['Swimming_Pool_Services'] = 'required';
                    $rules['Tax_Estimated_FTB_Sole_Corp_LLC'] = 'required';
                    $rules['Tax_Estimated_IRS_Sole_Corp_LLC'] = 'required';
                    $rules['Tax_Real_Estate_House_Business'] = 'required';
                    $rules['Tax_Sale_That_Included_In_Income'] = 'required';
                    $rules['Taxes_Payroll_Employers_Portion'] = 'required';
                    $rules['Telephone_FAX_Pager_Cell'] = 'required';
                    $rules['Tips_With_Verifiable_Receipts'] = 'required';
                    $rules['Tools_Molds_Dies_Jigs'] = 'required';
                    $rules['Towing_Services'] = 'required';
                    $rules['Trademark_Patent_Expenses'] = 'required';
                    $rules['Travel'] = 'required';
                    $rules['Uniform_Cleaning_Services'] = 'required';
                    $rules['Uniform_Purchased'] = 'required';
                    $rules['Utilities_Electric_Gas'] = 'required';
                    $rules['Vandalism_Graffiti_Clean_Up_Fees'] = 'required';
                    $rules['Wash_Vehicle_For_Trucking_Taxi_Business'] = 'required';
                    $rules['Waste_Disposal'] = 'required';
                    $rules['Web_Design_Fees'] = 'required';
                    $rules['Web_Hosting_Fees'] = 'required';
                    $rules['Other'] = 'required';
                    $rules['Other1'] = 'required';

                }


                if ($request->input('Do_you_have_any_dependents_EXCLUDING_yourself_and_your_spouse') == 'Yes') {
                    $rules['How_many_dependents_do_you_have'] = 'required';
                }

                if ($request->input('Did_you_acquire_or_dispose_of_any_stocks_or_bonds_during_the_yea') == 'Yes') {
                    $rules['Upload_Form_1099B'] = 'required';
                }

                if ($request->input('Did_you_have_any_child_care_expenses_other_than_Child_Support') == 'Yes') {
                    $rules['Amount'] = 'required';
                    $rules['Number_of_children_cared_for'] = 'required';
                    $rules['Services_Performed_in_your_house'] = 'required';
                    $rules['Name_address_of_provider'] = 'required';
                }

                if (($request->input('Are_you_your_spouse_and_all_dependents_covered_by_health_insuran') == 'Yes') || ($request->input('Are_you_your_spouse_and_all_dependents_covered_by_health_insuran') == 'Partial')) {
                    $rules['Upload_all_1095_or_proof_of_insurance'] = 'required';
                }

                $request->validate($rules);

                $Login_username = Auth::user()->name;
                $Login_email = Auth::user()->email;
                $user_id = Auth::user()->id;


                if($request->file('Upload_your_W2s')){
                    $image = $request->file('Upload_your_W2s');
                    if($image->isValid()){
                        if(!empty($request->input('Upload_your_W2s_old'))){
                            if(file_exists(public_path('/').'/'.$request->input('Upload_your_W2s_old'))){
                                unlink(public_path('/').'/'.$request->input('Upload_your_W2s_old')); 
                            }
                        }
                        $extension = $image->getClientOriginalExtension();
                         $fileName = rand(100,999999).time().'.'.$extension;
                         $image_path = public_path('upload/to'); 
                        $tt = 'Upload_your_W2s';
                        $request->$tt->move($image_path, $fileName); 
                        $formInput['Upload_your_W2s'] = 'upload/to/'.$fileName;
                    }
                    unset($formInput['Upload_your_W2s_old']);
                }else{
                    $formInput['Upload_your_W2s'] = $request->input('Upload_your_W2s_old');
                }



                if($request->file('You_Will_Need_To_Upload_your_W2s')){
                    $image = $request->file('You_Will_Need_To_Upload_your_W2s');
                    if($image->isValid()){
                        if(!empty($request->input('You_Will_Need_To_Upload_your_W2s_old'))){
                            if(file_exists(public_path('/').'/'.$request->input('You_Will_Need_To_Upload_your_W2s_old'))){
                                unlink(public_path('/').'/'.$request->input('You_Will_Need_To_Upload_your_W2s_old')); 
                            }
                        }
                        $extension = $image->getClientOriginalExtension();
                         $fileName = rand(100,999999).time().'.'.$extension;
                         $image_path = public_path('upload/to'); 
                        $tt = 'You_Will_Need_To_Upload_your_W2s';
                        $request->$tt->move($image_path, $fileName); 
                        $formInput['You_Will_Need_To_Upload_your_W2s'] = 'upload/to/'.$fileName;
                    }
                    unset($formInput['You_Will_Need_To_Upload_your_W2s_old']);
                }else{
                    $formInput['You_Will_Need_To_Upload_your_W2s'] = $request->input('You_Will_Need_To_Upload_your_W2s_old');
                }

                if($request->file('Upload_Form_1099B')){
                    $image = $request->file('Upload_Form_1099B');
                    if($image->isValid()){
                        if(!empty($request->input('Upload_Form_1099B_old'))){
                            if(file_exists(public_path('/').'/'.$request->input('Upload_Form_1099B_old'))){
                                unlink(public_path('/').'/'.$request->input('Upload_Form_1099B_old')); 
                            }
                        }
                        $extension = $image->getClientOriginalExtension();
                         $fileName = rand(100,999999).time().'.'.$extension;
                         $image_path = public_path('upload/to'); 
                        $tt = 'Upload_Form_1099B';
                        $request->$tt->move($image_path, $fileName); 
                        $formInput['Upload_Form_1099B'] = 'upload/to/'.$fileName;
                    }
                    unset($formInput['Upload_Form_1099B_old']);
                }else{
                    $formInput['Upload_Form_1099B'] = $request->input('Upload_Form_1099B_old');
                }

                if($request->file('Upload_all_1095_or_proof_of_insurance')){
                    $image = $request->file('Upload_all_1095_or_proof_of_insurance');
                    if($image->isValid()){
                        if(!empty($request->input('Upload_all_1095_or_proof_of_insurance_old'))){
                            if(file_exists(public_path('/').'/'.$request->input('Upload_all_1095_or_proof_of_insurance_old'))){
                                unlink(public_path('/').'/'.$request->input('Upload_all_1095_or_proof_of_insurance_old')); 
                            }
                        }
                        $extension = $image->getClientOriginalExtension();
                         $fileName = rand(100,999999).time().'.'.$extension;
                         $image_path = public_path('upload/to'); 
                        $tt = 'Upload_all_1095_or_proof_of_insurance';
                        $request->$tt->move($image_path, $fileName); 
                        $formInput['Upload_all_1095_or_proof_of_insurance'] = 'upload/to/'.$fileName;
                    }
                    unset($formInput['Upload_all_1095_or_proof_of_insurance_old']);
                }else{
                    $formInput['Upload_all_1095_or_proof_of_insurance'] = $request->input('Upload_all_1095_or_proof_of_insurance_old');
                }

                $data = array(
                      "What_Tax_Year_Is_This_Organizer_For" => $request->input('What_Tax_Year_Is_This_Organizer_For'),
                      "First_Name" => $request->input('First_Name'),
                      "Last_Name" => $request->input('Last_Name'),
                      "Main_Contact_Phone_Number" => $request->input('Main_Contact_Phone_Number'),
                      "snd_Contact_Phone_Number" => $request->input('snd_Contact_Phone_Number'),
                      "SSN" => $request->input('SSN'),
                      "Date_Of_Birth" => $request->input('Date_Of_Birth'),
                      "Occupation" => $request->input('Occupation'),
                      "Street_Address" => $request->input('Street_Address'),
                      "Address_Line_2" => $request->input('Address_Line_2'),
                      "City" => $request->input('City'),
                      "State" => $request->input('State'),
                      "Zip_Code" => $request->input('Zip_Code'),
                      "Country" => $request->input('Country'),
                      "Rent_Or_Own" => $request->input('Rent_Or_Own'),
                      "Client_Filing_Status" => $request->input('Client_Filing_Status'),
                      "spouse_first_name" => $request->input('spouse_first_name'),
                      "spouse_last_name" => $request->input('spouse_last_name'),
                      "spouse_ssn" => $request->input('spouse_ssn'),
                      "spouse_date_of_birth" => $request->input('spouse_date_of_birth'),
                      "spouse_occupaton" => $request->input('spouse_occupaton'),
                      "Client_Employment_Status" => $request->input('Client_Employment_Status'),
                      "Do_you_have_your_W2s" => $request->input('Do_you_have_your_W2s'),
                      "Upload_your_W2s" => $formInput['Upload_your_W2s'],
                      "We_can_file_back_year_returns_based_on_IRS_wage_and_income" => $request->input('We_can_file_back_year_returns_based_on_IRS_wage_and_income'),
                      "You_Will_Need_To_Upload_your_W2s" => $formInput['You_Will_Need_To_Upload_your_W2s'],
                      "Do_you_have_any_dependents_EXCLUDING_yourself_and_your_spouse" => $request->input('Do_you_have_any_dependents_EXCLUDING_yourself_and_your_spouse'),
                      "How_many_dependents_do_you_have" => $request->input('How_many_dependents_do_you_have'),
                      "Did_your_marital_status_change_during_the_year" => $request->input('Did_your_marital_status_change_during_the_year'),
                      "Did_your_address_change_from_last_year" => $request->input('Did_your_address_change_from_last_year'),
                      "Can_you_be_claimed_as_a_dependent_by_another_tax_payer" => $request->input('Can_you_be_claimed_as_a_dependent_by_another_tax_payer'),
                      "Did_you_acquire_or_dispose_of_any_stocks_or_bonds_during_the_yea" => $request->input('Did_you_acquire_or_dispose_of_any_stocks_or_bonds_during_the_yea'),
                      "Upload_Form_1099B" => $formInput['Upload_Form_1099B'],
                      "Did_you_take_out_a_home_equity_loan_this_year" => $request->input('Did_you_take_out_a_home_equity_loan_this_year'),
                      "Did_you_have_any_foreign_income_or_pay_any_foreign_taxes_during_" => $request->input('Did_you_have_any_foreign_income_or_pay_any_foreign_taxes_during_'),
                      "Did_you_receive_any_lump_sum_payment_from_a_pension_profit_shari" => $request->input('Did_you_receive_any_lump_sum_payment_from_a_pension_profit_shari'),
                      "Did_you_make_any_withdrawals_from_an_IRA_Keogh_SIMPLE_or_SEP_acc" => $request->input('Did_you_make_any_withdrawals_from_an_IRA_Keogh_SIMPLE_or_SEP_acc'),
                      "Did_you_make_any_non_cash_charitable_contributions" => $request->input('Did_you_make_any_non_cash_charitable_contributions'),
                      "Did_you_use_your_car_on_the_job_for_other_than_commuting" => $request->input('Did_you_use_your_car_on_the_job_for_other_than_commuting'),
                      "Did_you_work_out_of_town_for_part_of_the_year" => $request->input('Did_you_work_out_of_town_for_part_of_the_year'),
                      "Did_you_have_any_educational_expenses_during_the_year" => $request->input('Did_you_have_any_educational_expenses_during_the_year'),
                      "Did_you_have_any_child_care_expenses_other_than_Child_Support" => $request->input('Did_you_have_any_child_care_expenses_other_than_Child_Support'),
                      "Amount" => $request->input('Amount'),
                      "Number_of_children_cared_for" => $request->input('Number_of_children_cared_for'),
                      "Services_Performed_in_your_house" => $request->input('Services_Performed_in_your_house'),
                      "Name_address_of_provider" => $request->input('Name_address_of_provider'),
                      "Are_you_your_spouse_and_all_dependents_covered_by_health_insuran" => $request->input('Are_you_your_spouse_and_all_dependents_covered_by_health_insuran'),
                      "Upload_all_1095_or_proof_of_insurance" => $request->input('Upload_all_1095_or_proof_of_insurance'),
                      "Name_Of_Business" => $request->input('Name_Of_Business'),
                      "Tax_ID" => $request->input('Tax_ID'),
                      "Business_Activity" => $request->input('Business_Activity'),
                      "Do_you_have_a_profit_and_loss_statement" => $request->input('Do_you_have_a_profit_and_loss_statement'),
                      "Upload_Profit_Loss_Statement" => $request->input('Upload_Profit_Loss_Statement'),
                      "Accounting" => $request->input('Accounting'),
                      "Advertising" => $request->input('Advertising'),
                      "Alarm_Security_Installation" => $request->input('Alarm_Security_Installation'),
                      "Alarm_Security_Monitoring" => $request->input('Alarm_Security_Monitoring'),
                      "Appraisal_Fees" => $request->input('Appraisal_Fees'),
                      "Auto_Truck_Expenses" => $request->input('Auto_Truck_Expenses'),
                      "Bad_Debt_Includes_In_Gross_Income" => $request->input('Bad_Debt_Includes_In_Gross_Income'),
                      "Bank_Service_Charges" => $request->input('Bank_Service_Charges'),
                      "Books_Subscrp_Publications" => $request->input('Books_Subscrp_Publications'),
                      "Client_Misc_Gov_Fees_Inc_In_Income" => $request->input('Client_Misc_Gov_Fees_Inc_In_Income'),
                      "Commission_Outside_Services" => $request->input('Commission_Outside_Services'),
                      "Credit_Card_Discount_Fees" => $request->input('Credit_Card_Discount_Fees'),
                      "Credit_Card_Min_Usage_Fees" => $request->input('Credit_Card_Min_Usage_Fees'),
                      "Depreciation_From_Prior_Year_Income_Tax" => $request->input('Depreciation_From_Prior_Year_Income_Tax'),
                      "Domain_Name_Registration" => $request->input('Domain_Name_Registration'),
                      "Dues_Membership" => $request->input('Dues_Membership'),
                      "Education_Expenses" => $request->input('Education_Expenses'),
                      "Employee_Benefits" => $request->input('Employee_Benefits'),
                      "Employee_Customer_Awards_Prices_Troph" => $request->input('Employee_Customer_Awards_Prices_Troph'),
                      "Entertainment" => $request->input('Entertainment'),
                      "Equipment_Machinery_Purchased" => $request->input('Equipment_Machinery_Purchased'),
                      "Exhibit_Show" => $request->input('Exhibit_Show'),
                      "Film_Developing" => $request->input('Film_Developing'),
                      "Flower_Cards" => $request->input('Flower_Cards'),
                      "Franchise_Fees" => $request->input('Franchise_Fees'),
                      "Fuel" => $request->input('Fuel'),
                      "Furniture_Fixtures" => $request->input('Furniture_Fixtures'),
                      "Gift_To_Employee_Client" => $request->input('Gift_To_Employee_Client'),
                      "Goodwill" => $request->input('Goodwill'),
                      "Graphic_Design_Fees" => $request->input('Graphic_Design_Fees'),
                      "Home_Office" => $request->input('Home_Office'),
                      "Hotel_Motel_Inn" => $request->input('Hotel_Motel_Inn'),
                      "Insurance_Bus_Interruption" => $request->input('Insurance_Bus_Interruption'),
                      "Insurance_For_Employees" => $request->input('Insurance_For_Employees'),
                      "Insurance_Liability" => $request->input('Insurance_Liability'),
                      "Insurance_Other" => $request->input('Insurance_Other'),
                      "Insurance_Work_Comp" => $request->input('Insurance_Work_Comp'),
                      "Internet_Services" => $request->input('Internet_Services'),
                      "Inventory_Beginning_Of_The_Year" => $request->input('Inventory_Beginning_Of_The_Year'),
                      "Inventory_Breakage_Spoilage_Exp_Unreturn" => $request->input('Inventory_Breakage_Spoilage_Exp_Unreturn'),
                      "Inventory_Ending_Of_The_Year" => $request->input('Inventory_Ending_Of_The_Year'),
                      "Inventory_Purchases" => $request->input('Inventory_Purchases'),
                      "Inventory_Theft_Loss" => $request->input('Inventory_Theft_Loss'),
                      "IRA_Regular_Or_SEP_IRA_Contributed_Year" => $request->input('IRA_Regular_Or_SEP_IRA_Contributed_Year'),
                      "Landscaping" => $request->input('Landscaping'),
                      "Laundry_Cleaning" => $request->input('Laundry_Cleaning'),
                      "Legal_Professional_Services" => $request->input('Legal_Professional_Services'),
                      "Licenses_Permits" => $request->input('Licenses_Permits'),
                      "Licenses_Permits_For_Client_Projects" => $request->input('Licenses_Permits_For_Client_Projects'),
                      "Locksmith_Keys_Lock_Boxes" => $request->input('Locksmith_Keys_Lock_Boxes'),
                      "Meals_50_Bus" => $request->input('Meals_50_Bus'),
                      "Medical_Insurance" => $request->input('Medical_Insurance'),
                      "Mileage_Business" => $request->input('Mileage_Business'),
                      "Moving_Exp" => $request->input('Moving_Exp'),
                      "Notary_Services" => $request->input('Notary_Services'),
                      "Parking" => $request->input('Parking'),
                      "Pension_Plan" => $request->input('Pension_Plan'),
                      "Pest_Control" => $request->input('Pest_Control'),
                      "Postage_Delivery_Freight_Shipping" => $request->input('Postage_Delivery_Freight_Shipping'),
                      "Printing_Reproductions" => $request->input('Printing_Reproductions'),
                      "Promotional_Exp_Products_Or_Services" => $request->input('Promotional_Exp_Products_Or_Services'),
                      "Rent_Business_Location" => $request->input('Rent_Business_Location'),
                      "Rent_Furniture" => $request->input('Rent_Furniture'),
                      "Rent_Lease_Auto_And_Or_Truck" => $request->input('Rent_Lease_Auto_And_Or_Truck'),
                      "Rent_Lease_PO_Box_Storage" => $request->input('Rent_Lease_PO_Box_Storage'),
                      "Rent_Lease_Equipment" => $request->input('Rent_Lease_Equipment'),
                      "Repair_Building" => $request->input('Repair_Building'),
                      "Repair_Equipment" => $request->input('Repair_Equipment'),
                      "Research_Expenses" => $request->input('Research_Expenses'),
                      "Royalty_For_Franchise" => $request->input('Royalty_For_Franchise'),
                      "Salaries_Wages" => $request->input('Salaries_Wages'),
                      "Samples_Expenses" => $request->input('Samples_Expenses'),
                      "Seasonal_Bus_Decorations" => $request->input('Seasonal_Bus_Decorations'),
                      "Signs_Flags_Banners" => $request->input('Signs_Flags_Banners'),
                      "Software_Upgrades" => $request->input('Software_Upgrades'),
                      "Supplies_Shop" => $request->input('Supplies_Shop'),
                      "Supplies_Office" => $request->input('Supplies_Office'),
                      "Swimming_PoolPurchased_Or_Installed" => $request->input('Swimming_PoolPurchased_Or_Installed'),
                      "Swimming_Pool_Services" => $request->input('Swimming_Pool_Services'),
                      "Tax_Estimated_FTB_Sole_Corp_LLC" => $request->input('Tax_Estimated_FTB_Sole_Corp_LLC'),
                      "Tax_Estimated_IRS_Sole_Corp_LLC" => $request->input('Tax_Estimated_IRS_Sole_Corp_LLC'),
                      "Tax_Real_Estate_House_Business " => $request->input('Tax_Real_Estate_House_Business'),
                      "Tax_Sale_That_Included_In_Income" => $request->input('Tax_Sale_That_Included_In_Income'),
                      "Taxes_Payroll_Employers_Portion" => $request->input('Taxes_Payroll_Employers_Portion'),
                      "Telephone_FAX_Pager_Cell" => $request->input('Telephone_FAX_Pager_Cell'),
                      "Tips_With_Verifiable_Receipts" => $request->input('Tips_With_Verifiable_Receipts'),
                      "Tools_Molds_Dies_Jigs" => $request->input('Tools_Molds_Dies_Jigs'),
                      "Towing_Services" => $request->input('Towing_Services'),
                      "Trademark_Patent_Expenses" => $request->input('Trademark_Patent_Expenses'),
                      "Travel" => $request->input('Travel'),
                      "Uniform_Cleaning_Services" => $request->input('Uniform_Cleaning_Services'),
                      "Uniform_Purchased" => $request->input('Uniform_Purchased'),
                      "Utilities_Electric_Gas" => $request->input('Utilities_Electric_Gas'),
                      "Vandalism_Graffiti_Clean_Up_Fees" => $request->input('Vandalism_Graffiti_Clean_Up_Fees'),
                      "Wash_Vehicle_For_Trucking_Taxi_Business" => $request->input('Wash_Vehicle_For_Trucking_Taxi_Business'),
                      "Waste_Disposal" => $request->input('Waste_Disposal'),
                      "Web_Design_Fees" => $request->input('Web_Design_Fees'),
                      "Web_Hosting_Fees" => $request->input('Web_Hosting_Fees'),
                      "Other" => $request->input('Other'),
                      "Other1" => $request->input('Other1'),
                      "How_many_motor_vehicles_do_you_have" => $request->input('How_many_motor_vehicles_do_you_have'),

                      
                      "Print_Full_Name" => $request->input('Print_Full_Name'),
                      "Date" => $request->input('Date'),
                      "Signature" => $request->input('Signature'),

                      
                      "Status" => "Completed",
                      "Reference" => uniqid(),
                      "Login_username" => $Login_username,
                      "Login_email" => $Login_email,
                      "user_id" => $user_id,
                );
                



                $toid = To::create($data)->id;

                $all_dependents = [];
                if($request->input('How_many_dependents_do_you_have') && $request->input('How_many_dependents_do_you_have') != '0'){

                    $dependent_count = $request->input('How_many_dependents_do_you_have');

                     
                    for($i = 1; $i <= $dependent_count; $i++) {
                        if($request->file('dependent_bc_and_ssn'.$i)){
                            $image = $request->file('dependent_bc_and_ssn'.$i);
                            if($image->isValid()){
                                if(!empty($request->input('dependent_bc_and_ssn_old'))){
                                    if(file_exists(public_path('/').'/'.$request->input('bankspouse_old'.$i))){
                                        unlink(public_path('/').'/'.$request->input('dependent_bc_and_ssn_old'.$i)); 
                                    }
                                }
                                $extension = $image->getClientOriginalExtension();
                                 $fileName = rand(100,999999).time().'.'.$extension;
                                 $image_path = public_path('upload/to'); 
                                $tt = 'dependent_bc_and_ssn'.$i;
                                $request->$tt->move($image_path, $fileName); 
                                $formInput['dependent_bc_and_ssn'] = 'upload/to/'.$fileName;
                            }
                            unset($formInput['dependent_bc_and_ssn_old']);
                        }else{
                            $formInput['dependent_bc_and_ssn'] = $request->input('dependent_bc_and_ssn_old'.$i);
                        }

                        if($request->file('dependent_upload_sr'.$i)){
                            $image = $request->file('dependent_upload_sr'.$i);
                            if($image->isValid()){
                                if(!empty($request->input('dependent_upload_sr_old'))){
                                    if(file_exists(public_path('/').'/'.$request->input('bankspouse_old'.$i))){
                                        unlink(public_path('/').'/'.$request->input('dependent_upload_sr_old'.$i)); 
                                    }
                                }
                                $extension = $image->getClientOriginalExtension();
                                 $fileName = rand(100,999999).time().'.'.$extension;
                                 $image_path = public_path('upload/to'); 
                                $tt = 'dependent_upload_sr'.$i;
                                $request->$tt->move($image_path, $fileName); 
                                $formInput['dependent_upload_sr'] = 'upload/to/'.$fileName;
                            }
                            unset($formInput['dependent_upload_sr_old']);
                        }else{
                            $formInput['dependent_upload_sr'] = $request->input('dependent_upload_sr_old'.$i);
                        }

                        $data_dependents = array(
                            "Name" => $request->input('dependent_name'.$i),
                            "Date_Of_Birth" => $request->input('dependent_dob'.$i),
                            "SSN" => $request->input('dependent_ssn'.$i),
                            "Relationship" => $request->input('dependent_relationaship'.$i),
                            "Upload_Birth_Certificate_or_SSN_Card" => $formInput['dependent_bc_and_ssn'],
                            "Upload_School_records_or_write_a_letter_if_not_in_school" => $formInput['dependent_upload_sr'],
                            "to_id" => $toid,
                        );

                        $all_dependents[] = $data_dependents;

                        Todependent ::create($data_dependents)->id;
                    }
                    
                }


                $vehicle_array = [];
                if($request->input('How_many_motor_vehicles_do_you_have') && $request->input('How_many_motor_vehicles_do_you_have') != '0'){

                    $dependent_count5 = $request->input('How_many_motor_vehicles_do_you_have');

                    for($i = 1; $i <= $dependent_count5; $i++) {
                        
                        $data_dependents5 = array(
                            "Description_of_vehicle" => $request->input('description_vehicle'.$i),
                            "Is_the_vehicle_used_in_business_or_by_an_employee" => $request->input('vehicle_used'.$i),
                            "Cost" => $request->input('vehicle_cost'.$i),
                            "Date_placed_in_service" => $request->input('service_date'.$i),
                            "Business_Miles" => $request->input('Business_Miles'.$i),
                            "Commuting_miles" => $request->input('commuting_miles'.$i),
                            "Other_personal_use_miles" => $request->input('other_miles'.$i),
                            "total_miles_driven" => $request->input('driven_miles'.$i),
                            "Gas_oil_expenses" => $request->input('oil_expenses?'.$i),
                            "Repairs_Maintenance" => $request->input('repairs_maintenance'.$i),
                            "Auto_insurance" => $request->input('auto_insurance'.$i),
                            "Registration_licenses_and_fees" => $request->input('reg_lf'.$i),
                            "Other_auto_expenses" => $request->input('auto_expenses'.$i),
                            "Auto_rentals" => $request->input('auto_rentals'.$i),
                            "Is_another_car_available_for_person_use" => $request->input('another_car'.$i),
                            "Do_you_have_evidence_to_support_your_mileage_information" => $request->input('evidence'.$i),
                            "If_yes_is_the_evidence_written_in_a_log_or_another_place" => $request->input('written_evidence'.$i),

                            "to_id" => $toid,
                        );

                        $vehicle_array[] = $data_dependents5;
                        Tovehical ::create($data_dependents5)->id;
                    }
                    
                }



                $toyear = $request->input('What_Tax_Year_Is_This_Organizer_For');
               
                

                $FullName = $request->input('First_name')." ".$request->input('Last_name');

                $caseID = Auth::user()->case_id;
                $name = Auth::user()->name;
                $email = Auth::user()->email;

                $filename =  $name.'_toform_'.$toyear.'.pdf';
                $ip = $_SERVER['REMOTE_ADDR'];  

                $todataall = To::where('id', $toid)->first();

                $data['ip'] = $ip;
                $data['signature'] = $name;
                $data['last_update'] = $todataall->updated_at;
                $data['start_time'] = $todataall->created_at;
                $data['finish_time'] =  date("Y-m-d H:i:s");
                $data['browse'] = $request->input('browser');
                $data['device'] = $request->input('device');


   
                $view = \View::make('to_doc', [
                    'maindata' => $data,
                    'dependent_array' => $all_dependents,
                    'vehicle_array' => $vehicle_array,
                    
                    
                ]);
             

                $html = $view->render();

                $pdf = new TCPDF;
                
                $pdf::SetFont('helvetica', '', 9);
                $pdf::SetTitle('Hello');
                $pdf::AddPage();
                $pdf::writeHTML($html, true, false, true, false, '');

                $pdf::Output(public_path($filename), 'F');
                PDF::reset();


                $curl9 = curl_init();

                curl_setopt_array($curl9, array(
                  CURLOPT_URL => 'https://clearstart.irslogics.com/publicapi/2020-02-22/documents/casedocument?CaseID='.$caseID.'&apikey=f08f2b3c48ad4134b4ef62abd4aa721d',
                  CURLOPT_RETURNTRANSFER => true,
                  CURLOPT_ENCODING => '',
                  CURLOPT_MAXREDIRS => 10,
                  CURLOPT_TIMEOUT => 0,
                  CURLOPT_FOLLOWLOCATION => true,
                  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                  CURLOPT_CUSTOMREQUEST => 'POST',
                  CURLOPT_SAFE_UPLOAD => true,
                  CURLOPT_POSTFIELDS => array('file'=> new \CURLFILE(public_path($filename))),

                ));
            

                $response9 = curl_exec($curl9);

                curl_close($curl9);


                $dataauth = array();

                $filename1 =  $name.'_signauthtoform_'.$toyear.'.pdf';

                $dataauth['ip'] = $ip;
                $dataauth['signature'] = $name;
                $dataauth['name'] = $name;
                $dataauth['email'] = $email;
                $dataauth['timestamp'] = date("H:i:s");
                $dataauth['signed_date'] =  date("Y-m-d");


                $view = \View::make('toauth_doc', [
                    'maindata' => $dataauth, 
                    
                ]);
                // print_r($view); die;

                $html = $view->render();

                $pdf = new TCPDF;
                
                $pdf::SetFont('helvetica', '', 9);
                $pdf::SetTitle('Hello');
                $pdf::AddPage();
                $pdf::writeHTML($html, true, false, true, false, '');

                $pdf::Output(public_path($filename1), 'F');
                PDF::reset();


                $curl91 = curl_init();

                curl_setopt_array($curl91, array(
                  CURLOPT_URL => 'https://clearstart.irslogics.com/publicapi/2020-02-22/documents/casedocument?CaseID='.$caseID.'&apikey=f08f2b3c48ad4134b4ef62abd4aa721d',
                  CURLOPT_RETURNTRANSFER => true,
                  CURLOPT_ENCODING => '',
                  CURLOPT_MAXREDIRS => 10,
                  CURLOPT_TIMEOUT => 0,
                  CURLOPT_FOLLOWLOCATION => true,
                  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                  CURLOPT_CUSTOMREQUEST => 'POST',
                  CURLOPT_SAFE_UPLOAD => true,
                  CURLOPT_POSTFIELDS => array('file'=> new \CURLFILE(public_path($filename1))),

                ));
            

                $response91 = curl_exec($curl91);

                curl_close($curl91);


					  $clientname = Auth::user()->name;
        				$clientcaseid = Auth::user()->case_id;
                  
                      $datap["email"] = "docs@clearstarttax.com";
                      $datap["title"] = "To-form from [".$clientname."] CASE ID:" .$clientcaseid;
                      $datap["body"] = "To-form from [".$clientname."] CASE ID:" .$clientcaseid;

                      $files = [
                          public_path($filename),
                          public_path($filename1),
                      ];

                      Mail::send('toform_mail_template', $datap, function($message)use($datap, $files) {
                          $message->to($datap["email"])
                                  ->subject($datap["title"])
								  ->from('no-reply@clearstarttax.com', 'Clear Start Tax');
                          foreach ($files as $file){
                              $message->attach($file);
                          }            
                      });

                return redirect('tos')->with('success',"To Added Successfully!");


        } elseif ($action === 'function1') {
           
        // store fq start

                $Login_username = Auth::user()->name;
                $Login_email = Auth::user()->email;
                $user_id = Auth::user()->id;


                if($request->file('Upload_your_W2s')){
                    $image = $request->file('Upload_your_W2s');
                    if($image->isValid()){
                        if(!empty($request->input('Upload_your_W2s_old'))){
                            if(file_exists(public_path('/').'/'.$request->input('Upload_your_W2s_old'))){
                                unlink(public_path('/').'/'.$request->input('Upload_your_W2s_old')); 
                            }
                        }
                        $extension = $image->getClientOriginalExtension();
                         $fileName = rand(100,999999).time().'.'.$extension;
                         $image_path = public_path('upload/to'); 
                        $tt = 'Upload_your_W2s';
                        $request->$tt->move($image_path, $fileName); 
                        $formInput['Upload_your_W2s'] = 'upload/to/'.$fileName;
                    }
                    unset($formInput['Upload_your_W2s_old']);
                }else{
                    $formInput['Upload_your_W2s'] = $request->input('Upload_your_W2s_old');
                }
 
                if($request->file('You_Will_Need_To_Upload_your_W2s')){
                    $image = $request->file('You_Will_Need_To_Upload_your_W2s');
                    if($image->isValid()){
                        if(!empty($request->input('You_Will_Need_To_Upload_your_W2s_old'))){
                            if(file_exists(public_path('/').'/'.$request->input('You_Will_Need_To_Upload_your_W2s_old'))){
                                unlink(public_path('/').'/'.$request->input('You_Will_Need_To_Upload_your_W2s_old')); 
                            }
                        }
                        $extension = $image->getClientOriginalExtension();
                         $fileName = rand(100,999999).time().'.'.$extension;
                         $image_path = public_path('upload/to'); 
                        $tt = 'You_Will_Need_To_Upload_your_W2s';
                        $request->$tt->move($image_path, $fileName); 
                        $formInput['You_Will_Need_To_Upload_your_W2s'] = 'upload/to/'.$fileName;
                    }
                    unset($formInput['You_Will_Need_To_Upload_your_W2s_old']);
                }else{
                    $formInput['You_Will_Need_To_Upload_your_W2s'] = $request->input('You_Will_Need_To_Upload_your_W2s_old');
                }

                if($request->file('Upload_Form_1099B')){
                    $image = $request->file('Upload_Form_1099B');
                    if($image->isValid()){
                        if(!empty($request->input('Upload_Form_1099B_old'))){
                            if(file_exists(public_path('/').'/'.$request->input('Upload_Form_1099B_old'))){
                                unlink(public_path('/').'/'.$request->input('Upload_Form_1099B_old')); 
                            }
                        }
                        $extension = $image->getClientOriginalExtension();
                         $fileName = rand(100,999999).time().'.'.$extension;
                         $image_path = public_path('upload/to'); 
                        $tt = 'Upload_Form_1099B';
                        $request->$tt->move($image_path, $fileName); 
                        $formInput['Upload_Form_1099B'] = 'upload/to/'.$fileName;
                    }
                    unset($formInput['Upload_Form_1099B_old']);
                }else{
                    $formInput['Upload_Form_1099B'] = $request->input('Upload_Form_1099B_old');
                }

                if($request->file('Upload_all_1095_or_proof_of_insurance')){
                    $image = $request->file('Upload_all_1095_or_proof_of_insurance');
                    if($image->isValid()){
                        if(!empty($request->input('Upload_all_1095_or_proof_of_insurance_old'))){
                            if(file_exists(public_path('/').'/'.$request->input('Upload_all_1095_or_proof_of_insurance_old'))){
                                unlink(public_path('/').'/'.$request->input('Upload_all_1095_or_proof_of_insurance_old')); 
                            }
                        }
                        $extension = $image->getClientOriginalExtension();
                         $fileName = rand(100,999999).time().'.'.$extension;
                         $image_path = public_path('upload/to'); 
                        $tt = 'Upload_all_1095_or_proof_of_insurance';
                        $request->$tt->move($image_path, $fileName); 
                        $formInput['Upload_all_1095_or_proof_of_insurance'] = 'upload/to/'.$fileName;
                    }
                    unset($formInput['Upload_all_1095_or_proof_of_insurance_old']);
                }else{
                    $formInput['Upload_all_1095_or_proof_of_insurance'] = $request->input('Upload_all_1095_or_proof_of_insurance_old');
                }

                

                $data = array(
                      "What_Tax_Year_Is_This_Organizer_For" => $request->input('What_Tax_Year_Is_This_Organizer_For'),
                      "First_Name" => $request->input('First_Name'),
                      "Last_Name" => $request->input('Last_Name'),
                      "Main_Contact_Phone_Number" => $request->input('Main_Contact_Phone_Number'),
                      "snd_Contact_Phone_Number" => $request->input('snd_Contact_Phone_Number'),
                      "SSN" => $request->input('SSN'),
                      "Date_Of_Birth" => $request->input('Date_Of_Birth'),
                      "Occupation" => $request->input('Occupation'),
                      "Street_Address" => $request->input('Street_Address'),
                      "Address_Line_2" => $request->input('Address_Line_2'),
                      "City" => $request->input('City'),
                      "State" => $request->input('State'),
                      "Zip_Code" => $request->input('Zip_Code'),
                      "Country" => $request->input('Country'),
                      "Rent_Or_Own" => $request->input('Rent_Or_Own'),
                      "Client_Filing_Status" => $request->input('Client_Filing_Status'),
                      "spouse_first_name" => $request->input('spouse_first_name'),
                      "spouse_last_name" => $request->input('spouse_last_name'),
                      "spouse_ssn" => $request->input('spouse_ssn'),
                      "spouse_date_of_birth" => $request->input('spouse_date_of_birth'),
                      "spouse_occupaton" => $request->input('spouse_occupaton'),
                      "Client_Employment_Status" => $request->input('Client_Employment_Status'),
                      "Do_you_have_your_W2s" => $request->input('Do_you_have_your_W2s'),
                      "Upload_your_W2s" => $formInput['Upload_your_W2s'],
                      "We_can_file_back_year_returns_based_on_IRS_wage_and_income" => $request->input('We_can_file_back_year_returns_based_on_IRS_wage_and_income'),
                      "You_Will_Need_To_Upload_your_W2s" => $formInput['You_Will_Need_To_Upload_your_W2s'],
                      "Do_you_have_any_dependents_EXCLUDING_yourself_and_your_spouse" => $request->input('Do_you_have_any_dependents_EXCLUDING_yourself_and_your_spouse'),
                      "How_many_dependents_do_you_have" => $request->input('How_many_dependents_do_you_have'),
                      "Did_your_marital_status_change_during_the_year" => $request->input('Did_your_marital_status_change_during_the_year'),
                      "Did_your_address_change_from_last_year" => $request->input('Did_your_address_change_from_last_year'),
                      "Can_you_be_claimed_as_a_dependent_by_another_tax_payer" => $request->input('Can_you_be_claimed_as_a_dependent_by_another_tax_payer'),
                      "Did_you_acquire_or_dispose_of_any_stocks_or_bonds_during_the_yea" => $request->input('Did_you_acquire_or_dispose_of_any_stocks_or_bonds_during_the_yea'),
                      "Upload_Form_1099B" => $formInput['Upload_Form_1099B'],
                      "Did_you_take_out_a_home_equity_loan_this_year" => $request->input('Did_you_take_out_a_home_equity_loan_this_year'),
                      "Did_you_have_any_foreign_income_or_pay_any_foreign_taxes_during_" => $request->input('Did_you_have_any_foreign_income_or_pay_any_foreign_taxes_during_'),
                      "Did_you_receive_any_lump_sum_payment_from_a_pension_profit_shari" => $request->input('Did_you_receive_any_lump_sum_payment_from_a_pension_profit_shari'),
                      "Did_you_make_any_withdrawals_from_an_IRA_Keogh_SIMPLE_or_SEP_acc" => $request->input('Did_you_make_any_withdrawals_from_an_IRA_Keogh_SIMPLE_or_SEP_acc'),
                      "Did_you_make_any_non_cash_charitable_contributions" => $request->input('Did_you_make_any_non_cash_charitable_contributions'),
                      "Did_you_use_your_car_on_the_job_for_other_than_commuting" => $request->input('Did_you_use_your_car_on_the_job_for_other_than_commuting'),
                      "Did_you_work_out_of_town_for_part_of_the_year" => $request->input('Did_you_work_out_of_town_for_part_of_the_year'),
                      "Did_you_have_any_educational_expenses_during_the_year" => $request->input('Did_you_have_any_educational_expenses_during_the_year'),
                      "Did_you_have_any_child_care_expenses_other_than_Child_Support" => $request->input('Did_you_have_any_child_care_expenses_other_than_Child_Support'),
                      "Amount" => $request->input('Amount'),
                      "Number_of_children_cared_for" => $request->input('Number_of_children_cared_for'),
                      "Services_Performed_in_your_house" => $request->input('Services_Performed_in_your_house'),
                      "Name_address_of_provider" => $request->input('Name_address_of_provider'),
                      "Are_you_your_spouse_and_all_dependents_covered_by_health_insuran" => $request->input('Are_you_your_spouse_and_all_dependents_covered_by_health_insuran'),
                      "Upload_all_1095_or_proof_of_insurance" => $request->input('Upload_all_1095_or_proof_of_insurance'),
                      "Name_Of_Business" => $request->input('Name_Of_Business'),
                      "Tax_ID" => $request->input('Tax_ID'),
                      "Business_Activity" => $request->input('Business_Activity'),
                      "Do_you_have_a_profit_and_loss_statement" => $request->input('Do_you_have_a_profit_and_loss_statement'),
                      "Upload_Profit_Loss_Statement" => $request->input('Upload_Profit_Loss_Statement'),
                      "Accounting" => $request->input('Accounting'),
                      "Advertising" => $request->input('Advertising'),
                      "Alarm_Security_Installation" => $request->input('Alarm_Security_Installation'),
                      "Alarm_Security_Monitoring" => $request->input('Alarm_Security_Monitoring'),
                      "Appraisal_Fees" => $request->input('Appraisal_Fees'),
                      "Auto_Truck_Expenses" => $request->input('Auto_Truck_Expenses'),
                      "Bad_Debt_Includes_In_Gross_Income" => $request->input('Bad_Debt_Includes_In_Gross_Income'),
                      "Bank_Service_Charges" => $request->input('Bank_Service_Charges'),
                      "Books_Subscrp_Publications" => $request->input('Books_Subscrp_Publications'),
                      "Client_Misc_Gov_Fees_Inc_In_Income" => $request->input('Client_Misc_Gov_Fees_Inc_In_Income'),
                      "Commission_Outside_Services" => $request->input('Commission_Outside_Services'),
                      "Credit_Card_Discount_Fees" => $request->input('Credit_Card_Discount_Fees'),
                      "Credit_Card_Min_Usage_Fees" => $request->input('Credit_Card_Min_Usage_Fees'),
                      "Depreciation_From_Prior_Year_Income_Tax" => $request->input('Depreciation_From_Prior_Year_Income_Tax'),
                      "Domain_Name_Registration" => $request->input('Domain_Name_Registration'),
                      "Dues_Membership" => $request->input('Dues_Membership'),
                      "Education_Expenses" => $request->input('Education_Expenses'),
                      "Employee_Benefits" => $request->input('Employee_Benefits'),
                      "Employee_Customer_Awards_Prices_Troph" => $request->input('Employee_Customer_Awards_Prices_Troph'),
                      "Entertainment" => $request->input('Entertainment'),
                      "Equipment_Machinery_Purchased" => $request->input('Equipment_Machinery_Purchased'),
                      "Exhibit_Show" => $request->input('Exhibit_Show'),
                      "Film_Developing" => $request->input('Film_Developing'),
                      "Flower_Cards" => $request->input('Flower_Cards'),
                      "Franchise_Fees" => $request->input('Franchise_Fees'),
                      "Fuel" => $request->input('Fuel'),
                      "Furniture_Fixtures" => $request->input('Furniture_Fixtures'),
                      "Gift_To_Employee_Client" => $request->input('Gift_To_Employee_Client'),
                      "Goodwill" => $request->input('Goodwill'),
                      "Graphic_Design_Fees" => $request->input('Graphic_Design_Fees'),
                      "Home_Office" => $request->input('Home_Office'),
                      "Hotel_Motel_Inn" => $request->input('Hotel_Motel_Inn'),
                      "Insurance_Bus_Interruption" => $request->input('Insurance_Bus_Interruption'),
                      "Insurance_For_Employees" => $request->input('Insurance_For_Employees'),
                      "Insurance_Liability" => $request->input('Insurance_Liability'),
                      "Insurance_Other" => $request->input('Insurance_Other'),
                      "Insurance_Work_Comp" => $request->input('Insurance_Work_Comp'),
                      "Internet_Services" => $request->input('Internet_Services'),
                      "Inventory_Beginning_Of_The_Year" => $request->input('Inventory_Beginning_Of_The_Year'),
                      "Inventory_Breakage_Spoilage_Exp_Unreturn" => $request->input('Inventory_Breakage_Spoilage_Exp_Unreturn'),
                      "Inventory_Ending_Of_The_Year" => $request->input('Inventory_Ending_Of_The_Year'),
                      "Inventory_Purchases" => $request->input('Inventory_Purchases'),
                      "Inventory_Theft_Loss" => $request->input('Inventory_Theft_Loss'),
                      "IRA_Regular_Or_SEP_IRA_Contributed_Year" => $request->input('IRA_Regular_Or_SEP_IRA_Contributed_Year'),
                      "Landscaping" => $request->input('Landscaping'),
                      "Laundry_Cleaning" => $request->input('Laundry_Cleaning'),
                      "Legal_Professional_Services" => $request->input('Legal_Professional_Services'),
                      "Licenses_Permits" => $request->input('Licenses_Permits'),
                      "Licenses_Permits_For_Client_Projects" => $request->input('Licenses_Permits_For_Client_Projects'),
                      "Locksmith_Keys_Lock_Boxes" => $request->input('Locksmith_Keys_Lock_Boxes'),
                      "Meals_50_Bus" => $request->input('Meals_50_Bus'),
                      "Medical_Insurance" => $request->input('Medical_Insurance'),
                      "Mileage_Business" => $request->input('Mileage_Business'),
                      "Moving_Exp" => $request->input('Moving_Exp'),
                      "Notary_Services" => $request->input('Notary_Services'),
                      "Parking" => $request->input('Parking'),
                      "Pension_Plan" => $request->input('Pension_Plan'),
                      "Pest_Control" => $request->input('Pest_Control'),
                      "Postage_Delivery_Freight_Shipping" => $request->input('Postage_Delivery_Freight_Shipping'),
                      "Printing_Reproductions" => $request->input('Printing_Reproductions'),
                      "Promotional_Exp_Products_Or_Services" => $request->input('Promotional_Exp_Products_Or_Services'),
                      "Rent_Business_Location" => $request->input('Rent_Business_Location'),
                      "Rent_Furniture" => $request->input('Rent_Furniture'),
                      "Rent_Lease_Auto_And_Or_Truck" => $request->input('Rent_Lease_Auto_And_Or_Truck'),
                      "Rent_Lease_PO_Box_Storage" => $request->input('Rent_Lease_PO_Box_Storage'),
                      "Rent_Lease_Equipment" => $request->input('Rent_Lease_Equipment'),
                      "Repair_Building" => $request->input('Repair_Building'),
                      "Repair_Equipment" => $request->input('Repair_Equipment'),
                      "Research_Expenses" => $request->input('Research_Expenses'),
                      "Royalty_For_Franchise" => $request->input('Royalty_For_Franchise'),
                      "Salaries_Wages" => $request->input('Salaries_Wages'),
                      "Samples_Expenses" => $request->input('Samples_Expenses'),
                      "Seasonal_Bus_Decorations" => $request->input('Seasonal_Bus_Decorations'),
                      "Signs_Flags_Banners" => $request->input('Signs_Flags_Banners'),
                      "Software_Upgrades" => $request->input('Software_Upgrades'),
                      "Supplies_Shop" => $request->input('Supplies_Shop'),
                      "Supplies_Office" => $request->input('Supplies_Office'),
                      "Swimming_PoolPurchased_Or_Installed" => $request->input('Swimming_PoolPurchased_Or_Installed'),
                      "Swimming_Pool_Services" => $request->input('Swimming_Pool_Services'),
                      "Tax_Estimated_FTB_Sole_Corp_LLC" => $request->input('Tax_Estimated_FTB_Sole_Corp_LLC'),
                      "Tax_Estimated_IRS_Sole_Corp_LLC" => $request->input('Tax_Estimated_IRS_Sole_Corp_LLC'),
                      "Tax_Real_Estate_House_Business " => $request->input('Tax_Real_Estate_House_Business'),
                      "Tax_Sale_That_Included_In_Income" => $request->input('Tax_Sale_That_Included_In_Income'),
                      "Taxes_Payroll_Employers_Portion" => $request->input('Taxes_Payroll_Employers_Portion'),
                      "Telephone_FAX_Pager_Cell" => $request->input('Telephone_FAX_Pager_Cell'),
                      "Tips_With_Verifiable_Receipts" => $request->input('Tips_With_Verifiable_Receipts'),
                      "Tools_Molds_Dies_Jigs" => $request->input('Tools_Molds_Dies_Jigs'),
                      "Towing_Services" => $request->input('Towing_Services'),
                      "Trademark_Patent_Expenses" => $request->input('Trademark_Patent_Expenses'),
                      "Travel" => $request->input('Travel'),
                      "Uniform_Cleaning_Services" => $request->input('Uniform_Cleaning_Services'),
                      "Uniform_Purchased" => $request->input('Uniform_Purchased'),
                      "Utilities_Electric_Gas" => $request->input('Utilities_Electric_Gas'),
                      "Vandalism_Graffiti_Clean_Up_Fees" => $request->input('Vandalism_Graffiti_Clean_Up_Fees'),
                      "Wash_Vehicle_For_Trucking_Taxi_Business" => $request->input('Wash_Vehicle_For_Trucking_Taxi_Business'),
                      "Waste_Disposal" => $request->input('Waste_Disposal'),
                      "Web_Design_Fees" => $request->input('Web_Design_Fees'),
                      "Web_Hosting_Fees" => $request->input('Web_Hosting_Fees'),
                      "Other" => $request->input('Other'),
                      "Other1" => $request->input('Other1'),
                      "How_many_motor_vehicles_do_you_have" => $request->input('How_many_motor_vehicles_do_you_have'),

                      
                      "Print_Full_Name" => $request->input('Print_Full_Name'),
                      "Date" => $request->input('Date'),
                      "Signature" => $request->input('Signature'),

                      
                      "Status" => "inprogress",
                      "Reference" => uniqid(),
                      "Login_username" => $Login_username,
                      "Login_email" => $Login_email,
                      "user_id" => $user_id,
                );
                



                $toid = To::create($data)->id;


                $all_dependents = [];
                if($request->input('How_many_dependents_do_you_have') && $request->input('How_many_dependents_do_you_have') != '0'){

                    $dependent_count = $request->input('How_many_dependents_do_you_have');

                     
                    for($i = 1; $i <= $dependent_count; $i++) {
                        if($request->file('dependent_bc_and_ssn'.$i)){
                            $image = $request->file('dependent_bc_and_ssn'.$i);
                            if($image->isValid()){
                                if(!empty($request->input('dependent_bc_and_ssn_old'))){
                                    if(file_exists(public_path('/').'/'.$request->input('bankspouse_old'.$i))){
                                        unlink(public_path('/').'/'.$request->input('dependent_bc_and_ssn_old'.$i)); 
                                    }
                                }
                                $extension = $image->getClientOriginalExtension();
                                 $fileName = rand(100,999999).time().'.'.$extension;
                                 $image_path = public_path('upload/to'); 
                                $tt = 'dependent_bc_and_ssn'.$i;
                                $request->$tt->move($image_path, $fileName); 
                                $formInput['dependent_bc_and_ssn'] = 'upload/to/'.$fileName;
                            }
                            unset($formInput['dependent_bc_and_ssn_old']);
                        }else{
                            $formInput['dependent_bc_and_ssn'] = $request->input('dependent_bc_and_ssn_old'.$i);
                        }

                        if($request->file('dependent_upload_sr'.$i)){
                            $image = $request->file('dependent_upload_sr'.$i);
                            if($image->isValid()){
                                if(!empty($request->input('dependent_upload_sr_old'))){
                                    if(file_exists(public_path('/').'/'.$request->input('bankspouse_old'.$i))){
                                        unlink(public_path('/').'/'.$request->input('dependent_upload_sr_old'.$i)); 
                                    }
                                }
                                $extension = $image->getClientOriginalExtension();
                                 $fileName = rand(100,999999).time().'.'.$extension;
                                 $image_path = public_path('upload/to'); 
                                $tt = 'dependent_upload_sr'.$i;
                                $request->$tt->move($image_path, $fileName); 
                                $formInput['dependent_upload_sr'] = 'upload/to/'.$fileName;
                            }
                            unset($formInput['dependent_upload_sr_old']);
                        }else{
                            $formInput['dependent_upload_sr'] = $request->input('dependent_upload_sr_old'.$i);
                        }

                        $data_dependents = array(
                            "Name" => $request->input('dependent_name'.$i),
                            "Date_Of_Birth" => $request->input('dependent_dob'.$i),
                            "SSN" => $request->input('dependent_ssn'.$i),
                            "Relationship" => $request->input('dependent_relationaship'.$i),
                            "Upload_Birth_Certificate_or_SSN_Card" => $formInput['dependent_bc_and_ssn'],
                            "Upload_School_records_or_write_a_letter_if_not_in_school" => $formInput['dependent_upload_sr'],
                            "to_id" => $toid,
                        );

                        $all_dependents[] = $data_dependents;

                        Todependent ::create($data_dependents)->id;
                    }
                    
                }


                $vehicle_array = [];
                if($request->input('How_many_motor_vehicles_do_you_have') && $request->input('How_many_motor_vehicles_do_you_have') != '0'){

                    $dependent_count5 = $request->input('How_many_motor_vehicles_do_you_have');

                    for($i = 1; $i <= $dependent_count5; $i++) {
                        
                        $data_dependents5 = array(
                            "Description_of_vehicle" => $request->input('description_vehicle'.$i),
                            "Is_the_vehicle_used_in_business_or_by_an_employee" => $request->input('vehicle_used'.$i),
                            "Cost" => $request->input('vehicle_cost'.$i),
                            "Date_placed_in_service" => $request->input('service_date'.$i),
                            "Business_Miles" => $request->input('Business_Miles'.$i),
                            "Commuting_miles" => $request->input('commuting_miles'.$i),
                            "Other_personal_use_miles" => $request->input('other_miles'.$i),
                            "total_miles_driven" => $request->input('driven_miles'.$i),
                            "Gas_oil_expenses" => $request->input('oil_expenses?'.$i),
                            "Repairs_Maintenance" => $request->input('repairs_maintenance'.$i),
                            "Auto_insurance" => $request->input('auto_insurance'.$i),
                            "Registration_licenses_and_fees" => $request->input('reg_lf'.$i),
                            "Other_auto_expenses" => $request->input('auto_expenses'.$i),
                            "Auto_rentals" => $request->input('auto_rentals'.$i),
                            "Is_another_car_available_for_person_use" => $request->input('another_car'.$i),
                            "Do_you_have_evidence_to_support_your_mileage_information" => $request->input('evidence'.$i),
                            "If_yes_is_the_evidence_written_in_a_log_or_another_place" => $request->input('written_evidence'.$i),

                            "to_id" => $toid,
                        );

                        $vehicle_array[] = $data_dependents5;
                        Tovehical ::create($data_dependents5)->id;
                    }
                    
                }

               
                return redirect('tos')->with('success',"To Saved Successfully!");

        }
    
    }

    
    public function show($id)
    {
        //
    }

    
    public function destroy($id)
    {
        $delete = To::findOrFail($id);
		
		if($delete->delete()){
			return redirect('tos')->with('success','To Deleted Successfully');
        }
        return redirect('tos')->with('success','To Deleted Successfully');
    
    }



     public function edit($id)
    {
            $to = To::where('id',$id)->first();
            return view('to.edit', compact('to'));
    }

    

    public function update(Request $request)
    { 
       
        $action = $request->input('submit');

        // Perform actions based on the clicked button
        if ($action === 'function2') {
           
                $rules = [
                    'What_Tax_Year_Is_This_Organizer_For' => 'required',
                    'First_Name' => 'required',
                    'Last_Name' => 'required',
                    'Main_Contact_Phone_Number' => 'required',
                    'SSN' => 'required',
                    'Date_Of_Birth' => 'required',
                    'Occupation' => 'required',
                    'Street_Address' => 'required',
                    'City' => 'required',
                    'State' => 'required',
                    'Zip_Code' => 'required',
                    'Country' => 'required',
                    'Rent_Or_Own' => 'required',

                    'Client_Filing_Status' => 'required',
                    'Client_Employment_Status' => 'required',

                    'Do_you_have_any_dependents_EXCLUDING_yourself_and_your_spouse' => 'required',
                    'Did_your_marital_status_change_during_the_year' => 'required',
                    'Did_you_acquire_or_dispose_of_any_stocks_or_bonds_during_the_yea' => 'required',
                    'Did_your_address_change_from_last_year' => 'required',
                    'Can_you_be_claimed_as_a_dependent_by_another_tax_payer' => 'required', 
                    'Did_you_take_out_a_home_equity_loan_this_year' => 'required',
                    'Did_you_have_any_foreign_income_or_pay_any_foreign_taxes_during_' => 'required',
                    'Did_you_receive_any_lump_sum_payment_from_a_pension_profit_shari' => 'required', 
                    'Did_you_make_any_withdrawals_from_an_IRA_Keogh_SIMPLE_or_SEP_acc' => 'required',
                    'Did_you_make_any_non_cash_charitable_contributions' => 'required',
                    'Did_you_use_your_car_on_the_job_for_other_than_commuting' => 'required', 
                    'Did_you_work_out_of_town_for_part_of_the_year' => 'required',
                    'Did_you_have_any_educational_expenses_during_the_year' => 'required',
                    'Did_you_have_any_child_care_expenses_other_than_Child_Support' => 'required',
                    'Are_you_your_spouse_and_all_dependents_covered_by_health_insuran' => 'required', 
                    'Print_Full_Name' => 'required', 
                    'Date' => 'required', 
                ];




                // Add conditional validation based on a certain condition
                if (($request->input('Client_Filing_Status') == 'jointly') || ($request->input('Client_Filing_Status') == 'separately')) {
                    $rules['spouse_first_name'] = 'required';
                    $rules['spouse_last_name'] = 'required';
                    $rules['spouse_ssn'] = 'required';
                    $rules['spouse_date_of_birth'] = 'required';
                    $rules['spouse_occupaton'] = 'required';
                }

                if ($request->input('Client_Employment_Status') == 'wage') {
                    $rules['Do_you_have_your_W2s'] = 'required';
                }

                if ( $request->input('Do_you_have_your_W2s') == 'Yes') {
                    $rules['Upload_your_W2s'] = 'required';
                }

                if ($request->input('Do_you_have_your_W2s') == 'No') {
                    $rules['We_can_file_back_year_returns_based_on_IRS_wage_and_income'] = 'required';
                }

                if ($request->input('We_can_file_back_year_returns_based_on_IRS_wage_and_income') == 'No') {
                    $rules['You_Will_Need_To_Upload_your_W2s'] = 'required';
                }

                if (($request->input('Client_Employment_Status') == 'selfemployed') || ($request->input('Client_Employment_Status') == 'businessowner')) {
                    $rules['Name_Of_Business'] = 'required';
                    $rules['Tax_ID'] = 'required';
                    $rules['Business_Activity'] = 'required';
                    $rules['Do_you_have_a_profit_and_loss_statement'] = 'required';
                    $rules['How_many_motor_vehicles_do_you_have'] = 'required';
                }

                if ( $request->input('Do_you_have_a_profit_and_loss_statement') == 'Yes') {
                    $rules['Upload_Profit_Loss_Statement'] = 'required';
                }

                if ( $request->input('Do_you_have_a_profit_and_loss_statement') == 'No') {
                    $rules['Accounting'] = 'required';
                    $rules['Advertising'] = 'required';
                    $rules['Alarm_Security_Installation'] = 'required';
                    $rules['Alarm_Security_Monitoring'] = 'required';
                    $rules['Appraisal_Fees'] = 'required';
                    $rules['Auto_Truck_Expenses'] = 'required';
                    $rules['Bad_Debt_Includes_In_Gross_Income'] = 'required';
                    $rules['Bank_Service_Charges'] = 'required';
                    $rules['Books_Subscrp_Publications'] = 'required';
                    $rules['Client_Misc_Gov_Fees_Inc_In_Income'] = 'required';
                    $rules['Commission_Outside_Services'] = 'required';
                    $rules['Credit_Card_Discount_Fees'] = 'required';
                    $rules['Credit_Card_Min_Usage_Fees'] = 'required';
                    $rules['Depreciation_From_Prior_Year_Income_Tax'] = 'required';
                    $rules['Domain_Name_Registration'] = 'required';
                    $rules['Dues_Membership'] = 'required';
                    $rules['Education_Expenses'] = 'required';
                    $rules['Employee_Benefits'] = 'required';
                    $rules['Employee_Customer_Awards_Prices_Troph'] = 'required';
                    $rules['Entertainment'] = 'required';
                    $rules['Equipment_Machinery_Purchased'] = 'required';
                    $rules['Exhibit_Show'] = 'required';
                    $rules['Film_Developing'] = 'required';
                    $rules['Flower_Cards'] = 'required';
                    $rules['Franchise_Fees'] = 'required';
                    $rules['Fuel'] = 'required';
                    $rules['Furniture_Fixtures'] = 'required';
                    $rules['Gift_To_Employee_Client'] = 'required';
                    $rules['Goodwill'] = 'required';
                    $rules['Graphic_Design_Fees'] = 'required';
                    $rules['Home_Office'] = 'required';
                    $rules['Hotel_Motel_Inn'] = 'required';
                    $rules['Insurance_Bus_Interruption'] = 'required';
                    $rules['Insurance_For_Employees'] = 'required';
                    $rules['Insurance_Liability'] = 'required';
                    $rules['Insurance_Other'] = 'required';
                    $rules['Insurance_Work_Comp'] = 'required';
                    $rules['Internet_Services'] = 'required';
                    $rules['Inventory_Beginning_Of_The_Year'] = 'required';
                    $rules['Inventory_Breakage_Spoilage_Exp_Unreturn'] = 'required';
                    $rules['Inventory_Ending_Of_The_Year'] = 'required';
                    $rules['Inventory_Purchases'] = 'required';
                    $rules['Inventory_Theft_Loss'] = 'required';
                    $rules['IRA_Regular_Or_SEP_IRA_Contributed_Year'] = 'required';
                    $rules['Landscaping'] = 'required';
                    $rules['Laundry_Cleaning'] = 'required';
                    $rules['Legal_Professional_Services'] = 'required';
                    $rules['Licenses_Permits'] = 'required';
                    $rules['Licenses_Permits_For_Client_Projects'] = 'required';
                    $rules['Locksmith_Keys_Lock_Boxes'] = 'required';
                    $rules['Meals_50_Bus'] = 'required';
                    $rules['Medical_Insurance'] = 'required';
                    $rules['Mileage_Business'] = 'required';
                    $rules['Moving_Exp'] = 'required';
                    $rules['Notary_Services'] = 'required';
                    $rules['Parking'] = 'required';
                    $rules['Pension_Plan'] = 'required';
                    $rules['Pest_Control'] = 'required';
                    $rules['Postage_Delivery_Freight_Shipping'] = 'required';
                    $rules['Printing_Reproductions'] = 'required';
                    $rules['Promotional_Exp_Products_Or_Services'] = 'required';
                    $rules['Rent_Business_Location'] = 'required';
                    $rules['Rent_Furniture'] = 'required';
                    $rules['Rent_Lease_Auto_And_Or_Truck'] = 'required';
                    $rules['Rent_Lease_PO_Box_Storage'] = 'required';
                    $rules['Rent_Lease_Equipment'] = 'required';
                    $rules['Repair_Building'] = 'required';
                    $rules['Repair_Equipment'] = 'required';
                    $rules['Research_Expenses'] = 'required';
                    $rules['Royalty_For_Franchise'] = 'required';
                    $rules['Salaries_Wages'] = 'required';
                    $rules['Samples_Expenses'] = 'required';
                    $rules['Seasonal_Bus_Decorations'] = 'required';
                    $rules['Signs_Flags_Banners'] = 'required';
                    $rules['Software_Upgrades'] = 'required';
                    $rules['Supplies_Shop'] = 'required';
                    $rules['Supplies_Office'] = 'required';
                    $rules['Swimming_PoolPurchased_Or_Installed'] = 'required';
                    $rules['Swimming_Pool_Services'] = 'required';
                    $rules['Tax_Estimated_FTB_Sole_Corp_LLC'] = 'required';
                    $rules['Tax_Estimated_IRS_Sole_Corp_LLC'] = 'required';
                    $rules['Tax_Real_Estate_House_Business'] = 'required';
                    $rules['Tax_Sale_That_Included_In_Income'] = 'required';
                    $rules['Taxes_Payroll_Employers_Portion'] = 'required';
                    $rules['Telephone_FAX_Pager_Cell'] = 'required';
                    $rules['Tips_With_Verifiable_Receipts'] = 'required';
                    $rules['Tools_Molds_Dies_Jigs'] = 'required';
                    $rules['Towing_Services'] = 'required';
                    $rules['Trademark_Patent_Expenses'] = 'required';
                    $rules['Travel'] = 'required';
                    $rules['Uniform_Cleaning_Services'] = 'required';
                    $rules['Uniform_Purchased'] = 'required';
                    $rules['Utilities_Electric_Gas'] = 'required';
                    $rules['Vandalism_Graffiti_Clean_Up_Fees'] = 'required';
                    $rules['Wash_Vehicle_For_Trucking_Taxi_Business'] = 'required';
                    $rules['Waste_Disposal'] = 'required';
                    $rules['Web_Design_Fees'] = 'required';
                    $rules['Web_Hosting_Fees'] = 'required';
                    $rules['Other'] = 'required';
                    $rules['Other1'] = 'required';

                }


                if ($request->input('Do_you_have_any_dependents_EXCLUDING_yourself_and_your_spouse') == 'Yes') {
                    $rules['How_many_dependents_do_you_have'] = 'required';
                }

                if ($request->input('Did_you_acquire_or_dispose_of_any_stocks_or_bonds_during_the_yea') == 'Yes') {
                    $rules['Upload_Form_1099B'] = 'required';
                }

                if ($request->input('Did_you_have_any_child_care_expenses_other_than_Child_Support') == 'Yes') {
                    $rules['Amount'] = 'required';
                    $rules['Number_of_children_cared_for'] = 'required';
                    $rules['Services_Performed_in_your_house'] = 'required';
                    $rules['Name_address_of_provider'] = 'required';
                }

                if (($request->input('Are_you_your_spouse_and_all_dependents_covered_by_health_insuran') == 'Yes') || ($request->input('Are_you_your_spouse_and_all_dependents_covered_by_health_insuran') == 'Partial')) {
                    $rules['Upload_all_1095_or_proof_of_insurance'] = 'required';
                }

                $request->validate($rules);

                $Login_username = Auth::user()->name;
                $Login_email = Auth::user()->email;
                $user_id = Auth::user()->id;


                if($request->file('Upload_your_W2s')){
                    $image = $request->file('Upload_your_W2s');
                    if($image->isValid()){
                        if(!empty($request->input('Upload_your_W2s_old'))){
                            if(file_exists(public_path('/').'/'.$request->input('Upload_your_W2s_old'))){
                                unlink(public_path('/').'/'.$request->input('Upload_your_W2s_old')); 
                            }
                        }
                        $extension = $image->getClientOriginalExtension();
                         $fileName = rand(100,999999).time().'.'.$extension;
                         $image_path = public_path('upload/to'); 
                        $tt = 'Upload_your_W2s';
                        $request->$tt->move($image_path, $fileName); 
                        $formInput['Upload_your_W2s'] = 'upload/to/'.$fileName;
                    }
                    unset($formInput['Upload_your_W2s_old']);
                }else{
                    $formInput['Upload_your_W2s'] = $request->input('Upload_your_W2s_old');
                }

                if($request->file('You_Will_Need_To_Upload_your_W2s')){
                    $image = $request->file('You_Will_Need_To_Upload_your_W2s');
                    if($image->isValid()){
                        if(!empty($request->input('You_Will_Need_To_Upload_your_W2s_old'))){
                            if(file_exists(public_path('/').'/'.$request->input('You_Will_Need_To_Upload_your_W2s_old'))){
                                unlink(public_path('/').'/'.$request->input('You_Will_Need_To_Upload_your_W2s_old')); 
                            }
                        }
                        $extension = $image->getClientOriginalExtension();
                         $fileName = rand(100,999999).time().'.'.$extension;
                         $image_path = public_path('upload/to'); 
                        $tt = 'You_Will_Need_To_Upload_your_W2s';
                        $request->$tt->move($image_path, $fileName); 
                        $formInput['You_Will_Need_To_Upload_your_W2s'] = 'upload/to/'.$fileName;
                    }
                    unset($formInput['You_Will_Need_To_Upload_your_W2s_old']);
                }else{
                    $formInput['You_Will_Need_To_Upload_your_W2s'] = $request->input('You_Will_Need_To_Upload_your_W2s_old');
                }

                if($request->file('Upload_Form_1099B')){
                    $image = $request->file('Upload_Form_1099B');
                    if($image->isValid()){
                        if(!empty($request->input('Upload_Form_1099B_old'))){
                            if(file_exists(public_path('/').'/'.$request->input('Upload_Form_1099B_old'))){
                                unlink(public_path('/').'/'.$request->input('Upload_Form_1099B_old')); 
                            }
                        }
                        $extension = $image->getClientOriginalExtension();
                         $fileName = rand(100,999999).time().'.'.$extension;
                         $image_path = public_path('upload/to'); 
                        $tt = 'Upload_Form_1099B';
                        $request->$tt->move($image_path, $fileName); 
                        $formInput['Upload_Form_1099B'] = 'upload/to/'.$fileName;
                    }
                    unset($formInput['Upload_Form_1099B_old']);
                }else{
                    $formInput['Upload_Form_1099B'] = $request->input('Upload_Form_1099B_old');
                }

                if($request->file('Upload_all_1095_or_proof_of_insurance')){
                    $image = $request->file('Upload_all_1095_or_proof_of_insurance');
                    if($image->isValid()){
                        if(!empty($request->input('Upload_all_1095_or_proof_of_insurance_old'))){
                            if(file_exists(public_path('/').'/'.$request->input('Upload_all_1095_or_proof_of_insurance_old'))){
                                unlink(public_path('/').'/'.$request->input('Upload_all_1095_or_proof_of_insurance_old')); 
                            }
                        }
                        $extension = $image->getClientOriginalExtension();
                         $fileName = rand(100,999999).time().'.'.$extension;
                         $image_path = public_path('upload/to'); 
                        $tt = 'Upload_all_1095_or_proof_of_insurance';
                        $request->$tt->move($image_path, $fileName); 
                        $formInput['Upload_all_1095_or_proof_of_insurance'] = 'upload/to/'.$fileName;
                    }
                    unset($formInput['Upload_all_1095_or_proof_of_insurance_old']);
                }else{
                    $formInput['Upload_all_1095_or_proof_of_insurance'] = $request->input('Upload_all_1095_or_proof_of_insurance_old');
                }

                $data = array(
                      "What_Tax_Year_Is_This_Organizer_For" => $request->input('What_Tax_Year_Is_This_Organizer_For'),
                      "First_Name" => $request->input('First_Name'),
                      "Last_Name" => $request->input('Last_Name'),
                      "Main_Contact_Phone_Number" => $request->input('Main_Contact_Phone_Number'),
                      "snd_Contact_Phone_Number" => $request->input('snd_Contact_Phone_Number'),
                      "SSN" => $request->input('SSN'),
                      "Date_Of_Birth" => $request->input('Date_Of_Birth'),
                      "Occupation" => $request->input('Occupation'),
                      "Street_Address" => $request->input('Street_Address'),
                      "Address_Line_2" => $request->input('Address_Line_2'),
                      "City" => $request->input('City'),
                      "State" => $request->input('State'),
                      "Zip_Code" => $request->input('Zip_Code'),
                      "Country" => $request->input('Country'),
                      "Rent_Or_Own" => $request->input('Rent_Or_Own'),
                      "Client_Filing_Status" => $request->input('Client_Filing_Status'),
                      "spouse_first_name" => $request->input('spouse_first_name'),
                      "spouse_last_name" => $request->input('spouse_last_name'),
                      "spouse_ssn" => $request->input('spouse_ssn'),
                      "spouse_date_of_birth" => $request->input('spouse_date_of_birth'),
                      "spouse_occupaton" => $request->input('spouse_occupaton'),
                      "Client_Employment_Status" => $request->input('Client_Employment_Status'),
                      "Do_you_have_your_W2s" => $request->input('Do_you_have_your_W2s'),
                      "Upload_your_W2s" => $formInput['Upload_your_W2s'],
                      "We_can_file_back_year_returns_based_on_IRS_wage_and_income" => $request->input('We_can_file_back_year_returns_based_on_IRS_wage_and_income'),
                      "You_Will_Need_To_Upload_your_W2s" => $formInput['You_Will_Need_To_Upload_your_W2s'],
                      "Do_you_have_any_dependents_EXCLUDING_yourself_and_your_spouse" => $request->input('Do_you_have_any_dependents_EXCLUDING_yourself_and_your_spouse'),
                      "How_many_dependents_do_you_have" => $request->input('How_many_dependents_do_you_have'),
                      "Did_your_marital_status_change_during_the_year" => $request->input('Did_your_marital_status_change_during_the_year'),
                      "Did_your_address_change_from_last_year" => $request->input('Did_your_address_change_from_last_year'),
                      "Can_you_be_claimed_as_a_dependent_by_another_tax_payer" => $request->input('Can_you_be_claimed_as_a_dependent_by_another_tax_payer'),
                      "Did_you_acquire_or_dispose_of_any_stocks_or_bonds_during_the_yea" => $request->input('Did_you_acquire_or_dispose_of_any_stocks_or_bonds_during_the_yea'),
                      "Upload_Form_1099B" => $formInput['Upload_Form_1099B'],
                      "Did_you_take_out_a_home_equity_loan_this_year" => $request->input('Did_you_take_out_a_home_equity_loan_this_year'),
                      "Did_you_have_any_foreign_income_or_pay_any_foreign_taxes_during_" => $request->input('Did_you_have_any_foreign_income_or_pay_any_foreign_taxes_during_'),
                      "Did_you_receive_any_lump_sum_payment_from_a_pension_profit_shari" => $request->input('Did_you_receive_any_lump_sum_payment_from_a_pension_profit_shari'),
                      "Did_you_make_any_withdrawals_from_an_IRA_Keogh_SIMPLE_or_SEP_acc" => $request->input('Did_you_make_any_withdrawals_from_an_IRA_Keogh_SIMPLE_or_SEP_acc'),
                      "Did_you_make_any_non_cash_charitable_contributions" => $request->input('Did_you_make_any_non_cash_charitable_contributions'),
                      "Did_you_use_your_car_on_the_job_for_other_than_commuting" => $request->input('Did_you_use_your_car_on_the_job_for_other_than_commuting'),
                      "Did_you_work_out_of_town_for_part_of_the_year" => $request->input('Did_you_work_out_of_town_for_part_of_the_year'),
                      "Did_you_have_any_educational_expenses_during_the_year" => $request->input('Did_you_have_any_educational_expenses_during_the_year'),
                      "Did_you_have_any_child_care_expenses_other_than_Child_Support" => $request->input('Did_you_have_any_child_care_expenses_other_than_Child_Support'),
                      "Amount" => $request->input('Amount'),
                      "Number_of_children_cared_for" => $request->input('Number_of_children_cared_for'),
                      "Services_Performed_in_your_house" => $request->input('Services_Performed_in_your_house'),
                      "Name_address_of_provider" => $request->input('Name_address_of_provider'),
                      "Are_you_your_spouse_and_all_dependents_covered_by_health_insuran" => $request->input('Are_you_your_spouse_and_all_dependents_covered_by_health_insuran'),
                      "Upload_all_1095_or_proof_of_insurance" => $formInput['Upload_all_1095_or_proof_of_insurance'],
                      "Name_Of_Business" => $request->input('Name_Of_Business'),
                      "Tax_ID" => $request->input('Tax_ID'),
                      "Business_Activity" => $request->input('Business_Activity'),
                      "Do_you_have_a_profit_and_loss_statement" => $request->input('Do_you_have_a_profit_and_loss_statement'),
                      "Upload_Profit_Loss_Statement" => $request->input('Upload_Profit_Loss_Statement'),
                      "Accounting" => $request->input('Accounting'),
                      "Advertising" => $request->input('Advertising'),
                      "Alarm_Security_Installation" => $request->input('Alarm_Security_Installation'),
                      "Alarm_Security_Monitoring" => $request->input('Alarm_Security_Monitoring'),
                      "Appraisal_Fees" => $request->input('Appraisal_Fees'),
                      "Auto_Truck_Expenses" => $request->input('Auto_Truck_Expenses'),
                      "Bad_Debt_Includes_In_Gross_Income" => $request->input('Bad_Debt_Includes_In_Gross_Income'),
                      "Bank_Service_Charges" => $request->input('Bank_Service_Charges'),
                      "Books_Subscrp_Publications" => $request->input('Books_Subscrp_Publications'),
                      "Client_Misc_Gov_Fees_Inc_In_Income" => $request->input('Client_Misc_Gov_Fees_Inc_In_Income'),
                      "Commission_Outside_Services" => $request->input('Commission_Outside_Services'),
                      "Credit_Card_Discount_Fees" => $request->input('Credit_Card_Discount_Fees'),
                      "Credit_Card_Min_Usage_Fees" => $request->input('Credit_Card_Min_Usage_Fees'),
                      "Depreciation_From_Prior_Year_Income_Tax" => $request->input('Depreciation_From_Prior_Year_Income_Tax'),
                      "Domain_Name_Registration" => $request->input('Domain_Name_Registration'),
                      "Dues_Membership" => $request->input('Dues_Membership'),
                      "Education_Expenses" => $request->input('Education_Expenses'),
                      "Employee_Benefits" => $request->input('Employee_Benefits'),
                      "Employee_Customer_Awards_Prices_Troph" => $request->input('Employee_Customer_Awards_Prices_Troph'),
                      "Entertainment" => $request->input('Entertainment'),
                      "Equipment_Machinery_Purchased" => $request->input('Equipment_Machinery_Purchased'),
                      "Exhibit_Show" => $request->input('Exhibit_Show'),
                      "Film_Developing" => $request->input('Film_Developing'),
                      "Flower_Cards" => $request->input('Flower_Cards'),
                      "Franchise_Fees" => $request->input('Franchise_Fees'),
                      "Fuel" => $request->input('Fuel'),
                      "Furniture_Fixtures" => $request->input('Furniture_Fixtures'),
                      "Gift_To_Employee_Client" => $request->input('Gift_To_Employee_Client'),
                      "Goodwill" => $request->input('Goodwill'),
                      "Graphic_Design_Fees" => $request->input('Graphic_Design_Fees'),
                      "Home_Office" => $request->input('Home_Office'),
                      "Hotel_Motel_Inn" => $request->input('Hotel_Motel_Inn'),
                      "Insurance_Bus_Interruption" => $request->input('Insurance_Bus_Interruption'),
                      "Insurance_For_Employees" => $request->input('Insurance_For_Employees'),
                      "Insurance_Liability" => $request->input('Insurance_Liability'),
                      "Insurance_Other" => $request->input('Insurance_Other'),
                      "Insurance_Work_Comp" => $request->input('Insurance_Work_Comp'),
                      "Internet_Services" => $request->input('Internet_Services'),
                      "Inventory_Beginning_Of_The_Year" => $request->input('Inventory_Beginning_Of_The_Year'),
                      "Inventory_Breakage_Spoilage_Exp_Unreturn" => $request->input('Inventory_Breakage_Spoilage_Exp_Unreturn'),
                      "Inventory_Ending_Of_The_Year" => $request->input('Inventory_Ending_Of_The_Year'),
                      "Inventory_Purchases" => $request->input('Inventory_Purchases'),
                      "Inventory_Theft_Loss" => $request->input('Inventory_Theft_Loss'),
                      "IRA_Regular_Or_SEP_IRA_Contributed_Year" => $request->input('IRA_Regular_Or_SEP_IRA_Contributed_Year'),
                      "Landscaping" => $request->input('Landscaping'),
                      "Laundry_Cleaning" => $request->input('Laundry_Cleaning'),
                      "Legal_Professional_Services" => $request->input('Legal_Professional_Services'),
                      "Licenses_Permits" => $request->input('Licenses_Permits'),
                      "Licenses_Permits_For_Client_Projects" => $request->input('Licenses_Permits_For_Client_Projects'),
                      "Locksmith_Keys_Lock_Boxes" => $request->input('Locksmith_Keys_Lock_Boxes'),
                      "Meals_50_Bus" => $request->input('Meals_50_Bus'),
                      "Medical_Insurance" => $request->input('Medical_Insurance'),
                      "Mileage_Business" => $request->input('Mileage_Business'),
                      "Moving_Exp" => $request->input('Moving_Exp'),
                      "Notary_Services" => $request->input('Notary_Services'),
                      "Parking" => $request->input('Parking'),
                      "Pension_Plan" => $request->input('Pension_Plan'),
                      "Pest_Control" => $request->input('Pest_Control'),
                      "Postage_Delivery_Freight_Shipping" => $request->input('Postage_Delivery_Freight_Shipping'),
                      "Printing_Reproductions" => $request->input('Printing_Reproductions'),
                      "Promotional_Exp_Products_Or_Services" => $request->input('Promotional_Exp_Products_Or_Services'),
                      "Rent_Business_Location" => $request->input('Rent_Business_Location'),
                      "Rent_Furniture" => $request->input('Rent_Furniture'),
                      "Rent_Lease_Auto_And_Or_Truck" => $request->input('Rent_Lease_Auto_And_Or_Truck'),
                      "Rent_Lease_PO_Box_Storage" => $request->input('Rent_Lease_PO_Box_Storage'),
                      "Rent_Lease_Equipment" => $request->input('Rent_Lease_Equipment'),
                      "Repair_Building" => $request->input('Repair_Building'),
                      "Repair_Equipment" => $request->input('Repair_Equipment'),
                      "Research_Expenses" => $request->input('Research_Expenses'),
                      "Royalty_For_Franchise" => $request->input('Royalty_For_Franchise'),
                      "Salaries_Wages" => $request->input('Salaries_Wages'),
                      "Samples_Expenses" => $request->input('Samples_Expenses'),
                      "Seasonal_Bus_Decorations" => $request->input('Seasonal_Bus_Decorations'),
                      "Signs_Flags_Banners" => $request->input('Signs_Flags_Banners'),
                      "Software_Upgrades" => $request->input('Software_Upgrades'),
                      "Supplies_Shop" => $request->input('Supplies_Shop'),
                      "Supplies_Office" => $request->input('Supplies_Office'),
                      "Swimming_PoolPurchased_Or_Installed" => $request->input('Swimming_PoolPurchased_Or_Installed'),
                      "Swimming_Pool_Services" => $request->input('Swimming_Pool_Services'),
                      "Tax_Estimated_FTB_Sole_Corp_LLC" => $request->input('Tax_Estimated_FTB_Sole_Corp_LLC'),
                      "Tax_Estimated_IRS_Sole_Corp_LLC" => $request->input('Tax_Estimated_IRS_Sole_Corp_LLC'),
                      "Tax_Real_Estate_House_Business " => $request->input('Tax_Real_Estate_House_Business'),
                      "Tax_Sale_That_Included_In_Income" => $request->input('Tax_Sale_That_Included_In_Income'),
                      "Taxes_Payroll_Employers_Portion" => $request->input('Taxes_Payroll_Employers_Portion'),
                      "Telephone_FAX_Pager_Cell" => $request->input('Telephone_FAX_Pager_Cell'),
                      "Tips_With_Verifiable_Receipts" => $request->input('Tips_With_Verifiable_Receipts'),
                      "Tools_Molds_Dies_Jigs" => $request->input('Tools_Molds_Dies_Jigs'),
                      "Towing_Services" => $request->input('Towing_Services'),
                      "Trademark_Patent_Expenses" => $request->input('Trademark_Patent_Expenses'),
                      "Travel" => $request->input('Travel'),
                      "Uniform_Cleaning_Services" => $request->input('Uniform_Cleaning_Services'),
                      "Uniform_Purchased" => $request->input('Uniform_Purchased'),
                      "Utilities_Electric_Gas" => $request->input('Utilities_Electric_Gas'),
                      "Vandalism_Graffiti_Clean_Up_Fees" => $request->input('Vandalism_Graffiti_Clean_Up_Fees'),
                      "Wash_Vehicle_For_Trucking_Taxi_Business" => $request->input('Wash_Vehicle_For_Trucking_Taxi_Business'),
                      "Waste_Disposal" => $request->input('Waste_Disposal'),
                      "Web_Design_Fees" => $request->input('Web_Design_Fees'),
                      "Web_Hosting_Fees" => $request->input('Web_Hosting_Fees'),
                      "Other" => $request->input('Other'),
                      "Other1" => $request->input('Other1'),
                      "How_many_motor_vehicles_do_you_have" => $request->input('How_many_motor_vehicles_do_you_have'),

                      
                      "Print_Full_Name" => $request->input('Print_Full_Name'),
                      "Date" => $request->input('Date'),
                      "Signature" => $request->input('Signature'),

                      
                      "Status" => "Completed",
                      "Reference" => uniqid(),
                      "Login_username" => $Login_username,
                      "Login_email" => $Login_email,
                      "user_id" => $user_id,
                );
                


                $toidold = $request->input('toid');
                // Fq::where('id',$fqid)->update($data);
                $toid = To::create($data)->id;
                $delete = To::findOrFail($toidold);
                $delete->delete();

                

                $all_dependents = [];
                if($request->input('How_many_dependents_do_you_have') && $request->input('How_many_dependents_do_you_have') != '0'){

                    $dependent_count = $request->input('How_many_dependents_do_you_have');

                     
                    for($i = 1; $i <= $dependent_count; $i++) {
                        if($request->file('dependent_bc_and_ssn'.$i)){
                            $image = $request->file('dependent_bc_and_ssn'.$i);
                            if($image->isValid()){
                                if(!empty($request->input('dependent_bc_and_ssn_old'))){
                                    if(file_exists(public_path('/').'/'.$request->input('bankspouse_old'.$i))){
                                        unlink(public_path('/').'/'.$request->input('dependent_bc_and_ssn_old'.$i)); 
                                    }
                                }
                                $extension = $image->getClientOriginalExtension();
                                 $fileName = rand(100,999999).time().'.'.$extension;
                                 $image_path = public_path('upload/to'); 
                                $tt = 'dependent_bc_and_ssn'.$i;
                                $request->$tt->move($image_path, $fileName); 
                                $formInput['dependent_bc_and_ssn'] = 'upload/to/'.$fileName;
                            }
                            unset($formInput['dependent_bc_and_ssn_old']);
                        }else{
                            $formInput['dependent_bc_and_ssn'] = $request->input('dependent_bc_and_ssn_old'.$i);
                        }

                        if($request->file('dependent_upload_sr'.$i)){
                            $image = $request->file('dependent_upload_sr'.$i);
                            if($image->isValid()){
                                if(!empty($request->input('dependent_upload_sr_old'))){
                                    if(file_exists(public_path('/').'/'.$request->input('bankspouse_old'.$i))){
                                        unlink(public_path('/').'/'.$request->input('dependent_upload_sr_old'.$i)); 
                                    }
                                }
                                $extension = $image->getClientOriginalExtension();
                                 $fileName = rand(100,999999).time().'.'.$extension;
                                 $image_path = public_path('upload/to'); 
                                $tt = 'dependent_upload_sr'.$i;
                                $request->$tt->move($image_path, $fileName); 
                                $formInput['dependent_upload_sr'] = 'upload/to/'.$fileName;
                            }
                            unset($formInput['dependent_upload_sr_old']);
                        }else{
                            $formInput['dependent_upload_sr'] = $request->input('dependent_upload_sr_old'.$i);
                        }

                        $data_dependents = array(
                            "Name" => $request->input('dependent_name'.$i),
                            "Date_Of_Birth" => $request->input('dependent_dob'.$i),
                            "SSN" => $request->input('dependent_ssn'.$i),
                            "Relationship" => $request->input('dependent_relationaship'.$i),
                            "Upload_Birth_Certificate_or_SSN_Card" => $formInput['dependent_bc_and_ssn'],
                            "Upload_School_records_or_write_a_letter_if_not_in_school" => $formInput['dependent_upload_sr'],
                            "to_id" => $toid,
                        );

                        $all_dependents[] = $data_dependents;

                        Todependent ::create($data_dependents)->id;
                    }
                    
                }


                $vehicle_array = [];
                if($request->input('How_many_motor_vehicles_do_you_have') && $request->input('How_many_motor_vehicles_do_you_have') != '0'){

                    $dependent_count5 = $request->input('How_many_motor_vehicles_do_you_have');

                    for($i = 1; $i <= $dependent_count5; $i++) {
                        
                        $data_dependents5 = array(
                            "Description_of_vehicle" => $request->input('description_vehicle'.$i),
                            "Is_the_vehicle_used_in_business_or_by_an_employee" => $request->input('vehicle_used'.$i),
                            "Cost" => $request->input('vehicle_cost'.$i),
                            "Date_placed_in_service" => $request->input('service_date'.$i),
                            "Business_Miles" => $request->input('Business_Miles'.$i),
                            "Commuting_miles" => $request->input('commuting_miles'.$i),
                            "Other_personal_use_miles" => $request->input('other_miles'.$i),
                            "total_miles_driven" => $request->input('driven_miles'.$i),
                            "Gas_oil_expenses" => $request->input('oil_expenses?'.$i),
                            "Repairs_Maintenance" => $request->input('repairs_maintenance'.$i),
                            "Auto_insurance" => $request->input('auto_insurance'.$i),
                            "Registration_licenses_and_fees" => $request->input('reg_lf'.$i),
                            "Other_auto_expenses" => $request->input('auto_expenses'.$i),
                            "Auto_rentals" => $request->input('auto_rentals'.$i),
                            "Is_another_car_available_for_person_use" => $request->input('another_car'.$i),
                            "Do_you_have_evidence_to_support_your_mileage_information" => $request->input('evidence'.$i),
                            "If_yes_is_the_evidence_written_in_a_log_or_another_place" => $request->input('written_evidence'.$i),

                            "to_id" => $toid,
                        );

                        $vehicle_array[] = $data_dependents5;
                        Tovehical ::create($data_dependents5)->id;
                    }
                    
                }



                $toyear = $request->input('What_Tax_Year_Is_This_Organizer_For');
               
                

                $FullName = $request->input('First_name')." ".$request->input('Last_name');

                $caseID = Auth::user()->case_id;
                $name = Auth::user()->name;
                $email = Auth::user()->email;

                $filename =  $name.'_toform_'.$toyear.'.pdf';
                $ip = $_SERVER['REMOTE_ADDR'];  

                $todataall = To::where('id', $toid)->first();

                $data['ip'] = $ip;
                $data['signature'] = $name;
                $data['last_update'] = $todataall->updated_at;
                $data['start_time'] = $todataall->created_at;
                $data['finish_time'] =  date("Y-m-d H:i:s");
                $data['browse'] = $request->input('browser');
                $data['device'] = $request->input('device');


   
                $view = \View::make('to_doc', [
                    'maindata' => $data,
                    'dependent_array' => $all_dependents,
                    'vehicle_array' => $vehicle_array,
                    
                    
                ]);
             

                $html = $view->render();

                $pdf = new TCPDF;
                
                $pdf::SetFont('helvetica', '', 9);
                $pdf::SetTitle('Hello');
                $pdf::AddPage();
                $pdf::writeHTML($html, true, false, true, false, '');

                $pdf::Output(public_path($filename), 'F');
                PDF::reset();


                $curl9 = curl_init();

                curl_setopt_array($curl9, array(
                  CURLOPT_URL => 'https://clearstart.irslogics.com/publicapi/2020-02-22/documents/casedocument?CaseID='.$caseID.'&apikey=f08f2b3c48ad4134b4ef62abd4aa721d',
                  CURLOPT_RETURNTRANSFER => true,
                  CURLOPT_ENCODING => '',
                  CURLOPT_MAXREDIRS => 10,
                  CURLOPT_TIMEOUT => 0,
                  CURLOPT_FOLLOWLOCATION => true,
                  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                  CURLOPT_CUSTOMREQUEST => 'POST',
                  CURLOPT_SAFE_UPLOAD => true,
                  CURLOPT_POSTFIELDS => array('file'=> new \CURLFILE(public_path($filename))),

                ));
            

                $response9 = curl_exec($curl9);

                curl_close($curl9);


                $dataauth = array();

                $filename1 =  $name.'_signauthtoform_'.$toyear.'.pdf';

                $dataauth['ip'] = $ip;
                $dataauth['signature'] = $name;
                $dataauth['name'] = $name;
                $dataauth['email'] = $email;
                $dataauth['timestamp'] = date("H:i:s");
                $dataauth['signed_date'] =  date("Y-m-d");


                $view = \View::make('toauth_doc', [
                    'maindata' => $dataauth, 
                    
                ]);
                // print_r($view); die;

                $html = $view->render();

                $pdf = new TCPDF;
                
                $pdf::SetFont('helvetica', '', 9);
                $pdf::SetTitle('Hello');
                $pdf::AddPage();
                $pdf::writeHTML($html, true, false, true, false, '');

                $pdf::Output(public_path($filename1), 'F');
                PDF::reset();


                $curl91 = curl_init();

                curl_setopt_array($curl91, array(
                  CURLOPT_URL => 'https://clearstart.irslogics.com/publicapi/2020-02-22/documents/casedocument?CaseID='.$caseID.'&apikey=f08f2b3c48ad4134b4ef62abd4aa721d',
                  CURLOPT_RETURNTRANSFER => true,
                  CURLOPT_ENCODING => '',
                  CURLOPT_MAXREDIRS => 10,
                  CURLOPT_TIMEOUT => 0,
                  CURLOPT_FOLLOWLOCATION => true,
                  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                  CURLOPT_CUSTOMREQUEST => 'POST',
                  CURLOPT_SAFE_UPLOAD => true,
                  CURLOPT_POSTFIELDS => array('file'=> new \CURLFILE(public_path($filename1))),

                ));
            

                $response91 = curl_exec($curl91);

                curl_close($curl91);


                        $clientname = Auth::user()->name;
        				$clientcaseid = Auth::user()->case_id;
                  
                      $datap["email"] = "docs@clearstarttax.com";
                      $datap["title"] = "To-form from [".$clientname."] CASE ID:" .$clientcaseid;
                      $datap["body"] = "To-form from [".$clientname."] CASE ID:" .$clientcaseid;

                      $files = [
                          public_path($filename),
                          public_path($filename1),
                      ];

                      Mail::send('toform_mail_template', $datap, function($message)use($datap, $files) {
                          $message->to($datap["email"])
                                  ->subject($datap["title"])
								  ->from('no-reply@clearstarttax.com', 'Clear Start Tax');
                          foreach ($files as $file){
                              $message->attach($file);
                          }            
                      });

                return redirect('tos')->with('success',"To Added Successfully!");


        } elseif ($action === 'function1') {
           
        // store fq start

                $Login_username = Auth::user()->name;
                $Login_email = Auth::user()->email;
                $user_id = Auth::user()->id;

                

                if($request->file('Upload_your_W2s')){
                    $image = $request->file('Upload_your_W2s');
                    if($image->isValid()){
                        if(!empty($request->input('Upload_your_W2s_old'))){
                            if(file_exists(public_path('/').'/'.$request->input('Upload_your_W2s_old'))){
                                unlink(public_path('/').'/'.$request->input('Upload_your_W2s_old')); 
                            }
                        }
                        $extension = $image->getClientOriginalExtension();
                         $fileName = rand(100,999999).time().'.'.$extension;
                         $image_path = public_path('upload/to'); 
                        $tt = 'Upload_your_W2s';
                        $request->$tt->move($image_path, $fileName); 
                        $formInput['Upload_your_W2s'] = 'upload/to/'.$fileName;
                    }
                    unset($formInput['Upload_your_W2s_old']);
                }else{
                    $formInput['Upload_your_W2s'] = $request->input('Upload_your_W2s_old');
                }

               

                if($request->file('You_Will_Need_To_Upload_your_W2s')){
                    $image = $request->file('You_Will_Need_To_Upload_your_W2s');
                    if($image->isValid()){
                        if(!empty($request->input('You_Will_Need_To_Upload_your_W2s_old'))){
                            if(file_exists(public_path('/').'/'.$request->input('You_Will_Need_To_Upload_your_W2s_old'))){
                                unlink(public_path('/').'/'.$request->input('You_Will_Need_To_Upload_your_W2s_old')); 
                            }
                        }
                        $extension = $image->getClientOriginalExtension();
                         $fileName = rand(100,999999).time().'.'.$extension;
                         $image_path = public_path('upload/to'); 
                        $tt = 'You_Will_Need_To_Upload_your_W2s';
                        $request->$tt->move($image_path, $fileName); 
                        $formInput['You_Will_Need_To_Upload_your_W2s'] = 'upload/to/'.$fileName;
                    }
                    unset($formInput['You_Will_Need_To_Upload_your_W2s_old']);
                }else{
                    $formInput['You_Will_Need_To_Upload_your_W2s'] = $request->input('You_Will_Need_To_Upload_your_W2s_old');
                }

                if($request->file('Upload_Form_1099B')){
                    $image = $request->file('Upload_Form_1099B');
                    if($image->isValid()){
                        if(!empty($request->input('Upload_Form_1099B_old'))){
                            if(file_exists(public_path('/').'/'.$request->input('Upload_Form_1099B_old'))){
                                unlink(public_path('/').'/'.$request->input('Upload_Form_1099B_old')); 
                            }
                        }
                        $extension = $image->getClientOriginalExtension();
                         $fileName = rand(100,999999).time().'.'.$extension;
                         $image_path = public_path('upload/to'); 
                        $tt = 'Upload_Form_1099B';
                        $request->$tt->move($image_path, $fileName); 
                        $formInput['Upload_Form_1099B'] = 'upload/to/'.$fileName;
                    }
                    unset($formInput['Upload_Form_1099B_old']);
                }else{
                    $formInput['Upload_Form_1099B'] = $request->input('Upload_Form_1099B_old');
                }

                if($request->file('Upload_all_1095_or_proof_of_insurance')){
                    $image = $request->file('Upload_all_1095_or_proof_of_insurance');
                    if($image->isValid()){
                        if(!empty($request->input('Upload_all_1095_or_proof_of_insurance_old'))){
                            if(file_exists(public_path('/').'/'.$request->input('Upload_all_1095_or_proof_of_insurance_old'))){
                                unlink(public_path('/').'/'.$request->input('Upload_all_1095_or_proof_of_insurance_old')); 
                            }
                        }
                        $extension = $image->getClientOriginalExtension();
                         $fileName = rand(100,999999).time().'.'.$extension;
                         $image_path = public_path('upload/to'); 
                        $tt = 'Upload_all_1095_or_proof_of_insurance';
                        $request->$tt->move($image_path, $fileName); 
                        $formInput['Upload_all_1095_or_proof_of_insurance'] = 'upload/to/'.$fileName;
                    }
                    unset($formInput['Upload_all_1095_or_proof_of_insurance_old']);
                }else{
                    $formInput['Upload_all_1095_or_proof_of_insurance'] = $request->input('Upload_all_1095_or_proof_of_insurance_old');
                }
                
                $data = array(
                      "What_Tax_Year_Is_This_Organizer_For" => $request->input('What_Tax_Year_Is_This_Organizer_For'),
                      "First_Name" => $request->input('First_Name'),
                      "Last_Name" => $request->input('Last_Name'),
                      "Main_Contact_Phone_Number" => $request->input('Main_Contact_Phone_Number'),
                      "snd_Contact_Phone_Number" => $request->input('snd_Contact_Phone_Number'),
                      "SSN" => $request->input('SSN'),
                      "Date_Of_Birth" => $request->input('Date_Of_Birth'),
                      "Occupation" => $request->input('Occupation'),
                      "Street_Address" => $request->input('Street_Address'),
                      "Address_Line_2" => $request->input('Address_Line_2'),
                      "City" => $request->input('City'),
                      "State" => $request->input('State'),
                      "Zip_Code" => $request->input('Zip_Code'),
                      "Country" => $request->input('Country'),
                      "Rent_Or_Own" => $request->input('Rent_Or_Own'),
                      "Client_Filing_Status" => $request->input('Client_Filing_Status'),
                      "spouse_first_name" => $request->input('spouse_first_name'),
                      "spouse_last_name" => $request->input('spouse_last_name'),
                      "spouse_ssn" => $request->input('spouse_ssn'),
                      "spouse_date_of_birth" => $request->input('spouse_date_of_birth'),
                      "spouse_occupaton" => $request->input('spouse_occupaton'),
                      "Client_Employment_Status" => $request->input('Client_Employment_Status'),
                      "Do_you_have_your_W2s" => $request->input('Do_you_have_your_W2s'),
                      "Upload_your_W2s" => $formInput['Upload_your_W2s'],
                      "We_can_file_back_year_returns_based_on_IRS_wage_and_income" => $request->input('We_can_file_back_year_returns_based_on_IRS_wage_and_income'),
                      "You_Will_Need_To_Upload_your_W2s" => $formInput['You_Will_Need_To_Upload_your_W2s'],
                      "Do_you_have_any_dependents_EXCLUDING_yourself_and_your_spouse" => $request->input('Do_you_have_any_dependents_EXCLUDING_yourself_and_your_spouse'),
                      "How_many_dependents_do_you_have" => $request->input('How_many_dependents_do_you_have'),
                      "Did_your_marital_status_change_during_the_year" => $request->input('Did_your_marital_status_change_during_the_year'),
                      "Did_your_address_change_from_last_year" => $request->input('Did_your_address_change_from_last_year'),
                      "Can_you_be_claimed_as_a_dependent_by_another_tax_payer" => $request->input('Can_you_be_claimed_as_a_dependent_by_another_tax_payer'),
                      "Did_you_acquire_or_dispose_of_any_stocks_or_bonds_during_the_yea" => $request->input('Did_you_acquire_or_dispose_of_any_stocks_or_bonds_during_the_yea'),
                      "Upload_Form_1099B" => $formInput['Upload_Form_1099B'],
                      "Did_you_take_out_a_home_equity_loan_this_year" => $request->input('Did_you_take_out_a_home_equity_loan_this_year'),
                      "Did_you_have_any_foreign_income_or_pay_any_foreign_taxes_during_" => $request->input('Did_you_have_any_foreign_income_or_pay_any_foreign_taxes_during_'),
                      "Did_you_receive_any_lump_sum_payment_from_a_pension_profit_shari" => $request->input('Did_you_receive_any_lump_sum_payment_from_a_pension_profit_shari'),
                      "Did_you_make_any_withdrawals_from_an_IRA_Keogh_SIMPLE_or_SEP_acc" => $request->input('Did_you_make_any_withdrawals_from_an_IRA_Keogh_SIMPLE_or_SEP_acc'),
                      "Did_you_make_any_non_cash_charitable_contributions" => $request->input('Did_you_make_any_non_cash_charitable_contributions'),
                      "Did_you_use_your_car_on_the_job_for_other_than_commuting" => $request->input('Did_you_use_your_car_on_the_job_for_other_than_commuting'),
                      "Did_you_work_out_of_town_for_part_of_the_year" => $request->input('Did_you_work_out_of_town_for_part_of_the_year'),
                      "Did_you_have_any_educational_expenses_during_the_year" => $request->input('Did_you_have_any_educational_expenses_during_the_year'),
                      "Did_you_have_any_child_care_expenses_other_than_Child_Support" => $request->input('Did_you_have_any_child_care_expenses_other_than_Child_Support'),
                      "Amount" => $request->input('Amount'),
                      "Number_of_children_cared_for" => $request->input('Number_of_children_cared_for'),
                      "Services_Performed_in_your_house" => $request->input('Services_Performed_in_your_house'),
                      "Name_address_of_provider" => $request->input('Name_address_of_provider'),
                      "Are_you_your_spouse_and_all_dependents_covered_by_health_insuran" => $request->input('Are_you_your_spouse_and_all_dependents_covered_by_health_insuran'),
                      "Upload_all_1095_or_proof_of_insurance" => $formInput['Upload_all_1095_or_proof_of_insurance'],
                      "Name_Of_Business" => $request->input('Name_Of_Business'),
                      "Tax_ID" => $request->input('Tax_ID'),
                      "Business_Activity" => $request->input('Business_Activity'),
                      "Do_you_have_a_profit_and_loss_statement" => $request->input('Do_you_have_a_profit_and_loss_statement'),
                      "Upload_Profit_Loss_Statement" => $request->input('Upload_Profit_Loss_Statement'),
                      "Accounting" => $request->input('Accounting'),
                      "Advertising" => $request->input('Advertising'),
                      "Alarm_Security_Installation" => $request->input('Alarm_Security_Installation'),
                      "Alarm_Security_Monitoring" => $request->input('Alarm_Security_Monitoring'),
                      "Appraisal_Fees" => $request->input('Appraisal_Fees'),
                      "Auto_Truck_Expenses" => $request->input('Auto_Truck_Expenses'),
                      "Bad_Debt_Includes_In_Gross_Income" => $request->input('Bad_Debt_Includes_In_Gross_Income'),
                      "Bank_Service_Charges" => $request->input('Bank_Service_Charges'),
                      "Books_Subscrp_Publications" => $request->input('Books_Subscrp_Publications'),
                      "Client_Misc_Gov_Fees_Inc_In_Income" => $request->input('Client_Misc_Gov_Fees_Inc_In_Income'),
                      "Commission_Outside_Services" => $request->input('Commission_Outside_Services'),
                      "Credit_Card_Discount_Fees" => $request->input('Credit_Card_Discount_Fees'),
                      "Credit_Card_Min_Usage_Fees" => $request->input('Credit_Card_Min_Usage_Fees'),
                      "Depreciation_From_Prior_Year_Income_Tax" => $request->input('Depreciation_From_Prior_Year_Income_Tax'),
                      "Domain_Name_Registration" => $request->input('Domain_Name_Registration'),
                      "Dues_Membership" => $request->input('Dues_Membership'),
                      "Education_Expenses" => $request->input('Education_Expenses'),
                      "Employee_Benefits" => $request->input('Employee_Benefits'),
                      "Employee_Customer_Awards_Prices_Troph" => $request->input('Employee_Customer_Awards_Prices_Troph'),
                      "Entertainment" => $request->input('Entertainment'),
                      "Equipment_Machinery_Purchased" => $request->input('Equipment_Machinery_Purchased'),
                      "Exhibit_Show" => $request->input('Exhibit_Show'),
                      "Film_Developing" => $request->input('Film_Developing'),
                      "Flower_Cards" => $request->input('Flower_Cards'),
                      "Franchise_Fees" => $request->input('Franchise_Fees'),
                      "Fuel" => $request->input('Fuel'),
                      "Furniture_Fixtures" => $request->input('Furniture_Fixtures'),
                      "Gift_To_Employee_Client" => $request->input('Gift_To_Employee_Client'),
                      "Goodwill" => $request->input('Goodwill'),
                      "Graphic_Design_Fees" => $request->input('Graphic_Design_Fees'),
                      "Home_Office" => $request->input('Home_Office'),
                      "Hotel_Motel_Inn" => $request->input('Hotel_Motel_Inn'),
                      "Insurance_Bus_Interruption" => $request->input('Insurance_Bus_Interruption'),
                      "Insurance_For_Employees" => $request->input('Insurance_For_Employees'),
                      "Insurance_Liability" => $request->input('Insurance_Liability'),
                      "Insurance_Other" => $request->input('Insurance_Other'),
                      "Insurance_Work_Comp" => $request->input('Insurance_Work_Comp'),
                      "Internet_Services" => $request->input('Internet_Services'),
                      "Inventory_Beginning_Of_The_Year" => $request->input('Inventory_Beginning_Of_The_Year'),
                      "Inventory_Breakage_Spoilage_Exp_Unreturn" => $request->input('Inventory_Breakage_Spoilage_Exp_Unreturn'),
                      "Inventory_Ending_Of_The_Year" => $request->input('Inventory_Ending_Of_The_Year'),
                      "Inventory_Purchases" => $request->input('Inventory_Purchases'),
                      "Inventory_Theft_Loss" => $request->input('Inventory_Theft_Loss'),
                      "IRA_Regular_Or_SEP_IRA_Contributed_Year" => $request->input('IRA_Regular_Or_SEP_IRA_Contributed_Year'),
                      "Landscaping" => $request->input('Landscaping'),
                      "Laundry_Cleaning" => $request->input('Laundry_Cleaning'),
                      "Legal_Professional_Services" => $request->input('Legal_Professional_Services'),
                      "Licenses_Permits" => $request->input('Licenses_Permits'),
                      "Licenses_Permits_For_Client_Projects" => $request->input('Licenses_Permits_For_Client_Projects'),
                      "Locksmith_Keys_Lock_Boxes" => $request->input('Locksmith_Keys_Lock_Boxes'),
                      "Meals_50_Bus" => $request->input('Meals_50_Bus'),
                      "Medical_Insurance" => $request->input('Medical_Insurance'),
                      "Mileage_Business" => $request->input('Mileage_Business'),
                      "Moving_Exp" => $request->input('Moving_Exp'),
                      "Notary_Services" => $request->input('Notary_Services'),
                      "Parking" => $request->input('Parking'),
                      "Pension_Plan" => $request->input('Pension_Plan'),
                      "Pest_Control" => $request->input('Pest_Control'),
                      "Postage_Delivery_Freight_Shipping" => $request->input('Postage_Delivery_Freight_Shipping'),
                      "Printing_Reproductions" => $request->input('Printing_Reproductions'),
                      "Promotional_Exp_Products_Or_Services" => $request->input('Promotional_Exp_Products_Or_Services'),
                      "Rent_Business_Location" => $request->input('Rent_Business_Location'),
                      "Rent_Furniture" => $request->input('Rent_Furniture'),
                      "Rent_Lease_Auto_And_Or_Truck" => $request->input('Rent_Lease_Auto_And_Or_Truck'),
                      "Rent_Lease_PO_Box_Storage" => $request->input('Rent_Lease_PO_Box_Storage'),
                      "Rent_Lease_Equipment" => $request->input('Rent_Lease_Equipment'),
                      "Repair_Building" => $request->input('Repair_Building'),
                      "Repair_Equipment" => $request->input('Repair_Equipment'),
                      "Research_Expenses" => $request->input('Research_Expenses'),
                      "Royalty_For_Franchise" => $request->input('Royalty_For_Franchise'),
                      "Salaries_Wages" => $request->input('Salaries_Wages'),
                      "Samples_Expenses" => $request->input('Samples_Expenses'),
                      "Seasonal_Bus_Decorations" => $request->input('Seasonal_Bus_Decorations'),
                      "Signs_Flags_Banners" => $request->input('Signs_Flags_Banners'),
                      "Software_Upgrades" => $request->input('Software_Upgrades'),
                      "Supplies_Shop" => $request->input('Supplies_Shop'),
                      "Supplies_Office" => $request->input('Supplies_Office'),
                      "Swimming_PoolPurchased_Or_Installed" => $request->input('Swimming_PoolPurchased_Or_Installed'),
                      "Swimming_Pool_Services" => $request->input('Swimming_Pool_Services'),
                      "Tax_Estimated_FTB_Sole_Corp_LLC" => $request->input('Tax_Estimated_FTB_Sole_Corp_LLC'),
                      "Tax_Estimated_IRS_Sole_Corp_LLC" => $request->input('Tax_Estimated_IRS_Sole_Corp_LLC'),
                      "Tax_Real_Estate_House_Business " => $request->input('Tax_Real_Estate_House_Business'),
                      "Tax_Sale_That_Included_In_Income" => $request->input('Tax_Sale_That_Included_In_Income'),
                      "Taxes_Payroll_Employers_Portion" => $request->input('Taxes_Payroll_Employers_Portion'),
                      "Telephone_FAX_Pager_Cell" => $request->input('Telephone_FAX_Pager_Cell'),
                      "Tips_With_Verifiable_Receipts" => $request->input('Tips_With_Verifiable_Receipts'),
                      "Tools_Molds_Dies_Jigs" => $request->input('Tools_Molds_Dies_Jigs'),
                      "Towing_Services" => $request->input('Towing_Services'),
                      "Trademark_Patent_Expenses" => $request->input('Trademark_Patent_Expenses'),
                      "Travel" => $request->input('Travel'),
                      "Uniform_Cleaning_Services" => $request->input('Uniform_Cleaning_Services'),
                      "Uniform_Purchased" => $request->input('Uniform_Purchased'),
                      "Utilities_Electric_Gas" => $request->input('Utilities_Electric_Gas'),
                      "Vandalism_Graffiti_Clean_Up_Fees" => $request->input('Vandalism_Graffiti_Clean_Up_Fees'),
                      "Wash_Vehicle_For_Trucking_Taxi_Business" => $request->input('Wash_Vehicle_For_Trucking_Taxi_Business'),
                      "Waste_Disposal" => $request->input('Waste_Disposal'),
                      "Web_Design_Fees" => $request->input('Web_Design_Fees'),
                      "Web_Hosting_Fees" => $request->input('Web_Hosting_Fees'),
                      "Other" => $request->input('Other'),
                      "Other1" => $request->input('Other1'),
                      "How_many_motor_vehicles_do_you_have" => $request->input('How_many_motor_vehicles_do_you_have'),

                      
                      "Print_Full_Name" => $request->input('Print_Full_Name'),
                      "Date" => $request->input('Date'),
                      "Signature" => $request->input('Signature'),

                      
                      "Status" => "inprogress",
                      "Reference" => uniqid(),
                      "Login_username" => $Login_username,
                      "Login_email" => $Login_email,
                      "user_id" => $user_id,
                );
                



                $toidold = $request->input('toid');
                // Fq::where('id',$fqid)->update($data);
                $toid = To::create($data)->id;

                $delete = To::findOrFail($toidold);
                $delete->delete();


                $all_dependents = [];
                if($request->input('How_many_dependents_do_you_have') && $request->input('How_many_dependents_do_you_have') != '0'){

                    $dependent_count = $request->input('How_many_dependents_do_you_have');

                     
                    for($i = 1; $i <= $dependent_count; $i++) {
                        if($request->file('dependent_bc_and_ssn'.$i)){
                            $image = $request->file('dependent_bc_and_ssn'.$i);
                            if($image->isValid()){
                                if(!empty($request->input('dependent_bc_and_ssn_old'))){
                                    if(file_exists(public_path('/').'/'.$request->input('bankspouse_old'.$i))){
                                        unlink(public_path('/').'/'.$request->input('dependent_bc_and_ssn_old'.$i)); 
                                    }
                                }
                                $extension = $image->getClientOriginalExtension();
                                 $fileName = rand(100,999999).time().'.'.$extension;
                                 $image_path = public_path('upload/to'); 
                                $tt = 'dependent_bc_and_ssn'.$i;
                                $request->$tt->move($image_path, $fileName); 
                                $formInput['dependent_bc_and_ssn'] = 'upload/to/'.$fileName;
                            }
                            unset($formInput['dependent_bc_and_ssn_old']);
                        }else{
                            $formInput['dependent_bc_and_ssn'] = $request->input('dependent_bc_and_ssn_old'.$i);
                        }

                        if($request->file('dependent_upload_sr'.$i)){
                            $image = $request->file('dependent_upload_sr'.$i);
                            if($image->isValid()){
                                if(!empty($request->input('dependent_upload_sr_old'))){
                                    if(file_exists(public_path('/').'/'.$request->input('bankspouse_old'.$i))){
                                        unlink(public_path('/').'/'.$request->input('dependent_upload_sr_old'.$i)); 
                                    }
                                }
                                $extension = $image->getClientOriginalExtension();
                                 $fileName = rand(100,999999).time().'.'.$extension;
                                 $image_path = public_path('upload/to'); 
                                $tt = 'dependent_upload_sr'.$i;
                                $request->$tt->move($image_path, $fileName); 
                                $formInput['dependent_upload_sr'] = 'upload/to/'.$fileName;
                            }
                            unset($formInput['dependent_upload_sr_old']);
                        }else{
                            $formInput['dependent_upload_sr'] = $request->input('dependent_upload_sr_old'.$i);
                        }

                        $data_dependents = array(
                            "Name" => $request->input('dependent_name'.$i),
                            "Date_Of_Birth" => $request->input('dependent_dob'.$i),
                            "SSN" => $request->input('dependent_ssn'.$i),
                            "Relationship" => $request->input('dependent_relationaship'.$i),
                            "Upload_Birth_Certificate_or_SSN_Card" => $formInput['dependent_bc_and_ssn'],
                            "Upload_School_records_or_write_a_letter_if_not_in_school" => $formInput['dependent_upload_sr'],
                            "to_id" => $toid,
                        );

                        $all_dependents[] = $data_dependents;

                        Todependent ::create($data_dependents)->id;
                    }
                    
                }


                $vehicle_array = [];
                if($request->input('How_many_motor_vehicles_do_you_have') && $request->input('How_many_motor_vehicles_do_you_have') != '0'){

                    $dependent_count5 = $request->input('How_many_motor_vehicles_do_you_have');

                    for($i = 1; $i <= $dependent_count5; $i++) {
                        
                        $data_dependents5 = array(
                            "Description_of_vehicle" => $request->input('description_vehicle'.$i),
                            "Is_the_vehicle_used_in_business_or_by_an_employee" => $request->input('vehicle_used'.$i),
                            "Cost" => $request->input('vehicle_cost'.$i),
                            "Date_placed_in_service" => $request->input('service_date'.$i),
                            "Business_Miles" => $request->input('Business_Miles'.$i),
                            "Commuting_miles" => $request->input('commuting_miles'.$i),
                            "Other_personal_use_miles" => $request->input('other_miles'.$i),
                            "total_miles_driven" => $request->input('driven_miles'.$i),
                            "Gas_oil_expenses" => $request->input('oil_expenses?'.$i),
                            "Repairs_Maintenance" => $request->input('repairs_maintenance'.$i),
                            "Auto_insurance" => $request->input('auto_insurance'.$i),
                            "Registration_licenses_and_fees" => $request->input('reg_lf'.$i),
                            "Other_auto_expenses" => $request->input('auto_expenses'.$i),
                            "Auto_rentals" => $request->input('auto_rentals'.$i),
                            "Is_another_car_available_for_person_use" => $request->input('another_car'.$i),
                            "Do_you_have_evidence_to_support_your_mileage_information" => $request->input('evidence'.$i),
                            "If_yes_is_the_evidence_written_in_a_log_or_another_place" => $request->input('written_evidence'.$i),

                            "to_id" => $toid,
                        );

                        $vehicle_array[] = $data_dependents5;
                        Tovehical ::create($data_dependents5)->id;
                    }
                    
                }

               
                return redirect('tos')->with('success',"To Saved Successfully!");

        }
    
    }

    
    public function destroyimagebank(Request $request)
    {
        $id = $request->input('imageId');
        $model = $request->input('model');

        if($model == 'Fqbankaccount'){
            $delete = Fqbankaccount::findOrFail($id);
        }else if($model == 'Fqbankspouseaccount'){
            $delete = Fqbankspouseaccount::findOrFail($id);
        }else if($model == 'FqCreditcards'){
            $delete = FqCreditcards::findOrFail($id);
        }else{
            $delete = '';
        }

        if($model == 'Fqbankaccount'){
            $image1 = $delete->bank;
        }else if($model == 'Fqbankspouseaccount'){
            $image1 = $delete->bankspouse;
        }else if($model == 'FqCreditcards'){
            $image1 = $delete->Creditcards;
        }else{
            $image1 = '';
        }
        
        $imgurl = URL::to('/').'/public/'.$image1;
        $image = "public/".$image1;
        if($delete->delete()){
            if(!empty($image)){
                if(file_exists($image)){
                    unlink($image);
                    return response()->json(['message' => 'Image deleted successfully']);
                }
            }
            return response()->json(['message' => 'Image deleted successfully']);
        }
        return response()->json(['message' => 'Image deleted successfully']);
    
    }
   

}

