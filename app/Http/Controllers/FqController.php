<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fq;
use App\Models\Fqdependents;
use App\Models\Fqbankaccount;
use App\Models\Fqinvestments;
use App\Models\FqCreditcards;
use App\Models\Fqlifeinsure;
use App\Models\Fqestate;
use App\Models\Fqvehical;
use App\Models\Fqpersonal;
use App\Models\Fqbankspouseaccount;
use Illuminate\Support\Facades\Crypt;
use Auth;
use PDF;
use Elibyy\TCPDF\Facades\TCPDF;
use URL;

class FqController extends Controller
{
   
    public function index()
    {   
        $fqs = Fq::where('user_id', Auth::user()->id)->orderBy('id','DESC')->get(); 
        // print_r($fqs); die;
        return view('fq.index',compact('fqs'));
    }
    
    public function create()
    {
        return view('fq.create');
    }

    
    public function store(Request $request)
    { 
        // $formData = $request->all();

        // print_r($request->all()); 
        // die;



        $action = $request->input('submit');

        // Perform actions based on the clicked button
        if ($action === 'function2') {
           
                  $validated = $request->validate([
                  "Last_name" => "required",
                  "First_name" => "required",
                  "Date_of_birth" => "required",
                  "SSN#" => "required",
                  "Street_address" => "required",
                  "City" => "required",
                  "State" => "required",
                  "Zip_code" => "required",
                  "Rent_or_own" => "required", 
                  "Driver_license#" => "required",   
                  "Primary_phone_number" => "required",    
                  "Marital_status" => "required",  
                  "Country_of_residence" => "required",  
                  "Do_you_have_any_dependents_EXCLUDING_yourself_and_your_spouse?" => "required",    
                  "Client_employment_status" => "required",  
                  "Cash_on_hand_amount" => "required",  
                  "How_many_bank_accounts_do_you_have" => "required|not_in:0",    
                  "Can_you_take_a_loan_against_your_401k_account" => "required", 
                  "Do_you_have_any_investments?" => "required", 
                  "Do_you_have_any_credi_cards?" => "required",
                  "Do_you_have_life_insurance?" => "required",
                  "Do_you_own_any_real_estate?" => "required",
                  "Do_you_own_a_motor_vehicle?" => "required",
                  "Do_you_have_any_other_personal_assets:" => "required",
                  "Interest/Dividends" => "required",
                  "Net_Self-Employed/Business_Income" => "required",
                  "Net_Rental_Income" => "required",
                  "Distribution" => "required",
                  "Social_Security_Income" => "required",
                  "Alimony_Income" => "required",
                  "Retirement_Income/Pension" => "required",
                  "Other_Income" => "required",
                  "Total_House_Hold_Income" => "required",
                  "Food_Clothing_Misc" => "required",
                  "Rent/Mortgage" => "required",
                  "Utilities" => "required",
                  "Vehicles_Ownership_Costs" => "required",
                  "Vehicles_Operating_Costs" => "required",
                  "Public_Transportation" => "required",
                  "Health_Insurance" => "required",
                  "Out_of_Pocket_Health_Costs" => "required",
                  "Court_Ordered_Payments" => "required",
                  "Child_Care" => "required",
                  "Life_Insurance" => "required",
                  "Taxes" => "required",
                  "Other_Secure_Debts" => "required",
                  "Other_Secure_Debts1" => "required",
                  "TotHouseholdExpense" => "required",
                  "Are_you_the_beneficiary_of_a_trust_estate_or_life_insurance_po" => "required",
                  "Are_you_currently_in_bankruptcy" => "required",
                  "Have_you_been_party_to_a_lawsuit?" => "required",
                  "In_the_past_10_years_have_you_transferred_any_assets_for_less_t" => "required",
                  "In_the_past_3_year_have_you_transferred_any_real_property" => "required",
                  "Print_Full_Name" => "required",
                  "Date" => "required",
                 
                
                  // "Signature" => "required",

                ]);

                $Login_username = Auth::user()->name;
                $Login_email = Auth::user()->email;
                $user_id = Auth::user()->id;


                $data = array(
                      "Last_Name" => $request->input('Last_name'),
                      "First_Name" => $request->input('First_name'),
                      "Date_Of_Birth" => $request->input('Date_of_birth'),
                      "SSN" => $request->input('SSN#'),
                      "Street_Address" => $request->input('Street_address'),
                      "Address_Line_2" => $request->input('Address_line_2'),
                      "City" => $request->input('City'),
                      "State" => $request->input('State'),
                      "Zip_Code" => $request->input('Zip_code'),
                      "County_Of_Residence" => $request->input('Country_of_residence'),
                      "Rent_Or_Own" => $request->input('Rent_or_own'),
                      "Driver_License" => $request->input('Driver_license#'),
                      "Primary_Phone_Number" => $request->input('Primary_phone_number'),
                      "snd_Contact_Phone_Number" => $request->input('2nd_contact_phone_number'),
                      "Marital_Status" => $request->input('Marital_status'),
                      "Married_Filing_Status" => $request->input('Married_Filing_Status'),
                      "Do_you_have_any_dependents_EXCLUDING_yourself_and_your_spouse" => $request->input('Do_you_have_any_dependents_EXCLUDING_yourself_and_your_spouse?'),
                      "How_many_dependents_do_you_have" => $request->input('How_many_dependents_do_you_have'),
                      "Client_Employment_Status" => $request->input('Client_employment_status'),
                      "Cash_on_Hand_Amount" => $request->input('Cash_on_hand_amount'),
                      "How_Many_Bank_Accounts_Do_You_Have" => $request->input('How_many_bank_accounts_do_you_have'),
                      "Can_you_take_a_loan_against_your_401k_Account" => $request->input('Can_you_take_a_loan_against_your_401k_account'),
                      "Do_You_Have_Any_Investments" => $request->input('Do_you_have_any_investments?'),
                      "How_many_Credit_Cards_Do_You_Have" => $request->input('How_many_credit_cards_do_you_have?'),
                      "Do_You_Have_Any_Credit_Cards" => $request->input('Do_you_have_any_credi_cards?'),
                      "How_many_type_of_investments_do_you_have" => $request->input('How_many_type_of_investments_do_you_have?'),
                      "Do_You_Have_Life_Insurance" => $request->input('Do_you_have_life_insurance?'),
                      "How_Many_Life_Insurance_Policy_Do_You_Have" => $request->input('How_many_life_insurance_policy_do_you_have?'),
                      "Do_You_Own_Any_Real_Estate" => $request->input('Do_you_own_any_real_estate?'),
                      "How_Many_Properties_Do_You_Own" => $request->input('How_many_properties_do_you_own?'),
                      "Do_You_Own_A_Motor_Vehicle" => $request->input('Do_you_own_a_motor_vehicle?'),
                      "How_Many_Motor_Vehicles_Do_You_Own" => $request->input('How_many_motor_vehicle_do_you_own?'),
                      "Do_You_Have_Any_Other_Personal_Assets" => $request->input('Do_you_have_any_other_personal_assets:'),
                      "How_Many_Other_Personal_Assets_Do_You_Have" => $request->input('How_many_other_personal_assets_do_you_have?'),
                      "Interest_Dividends" => $request->input('Interest/Dividends'),
                      "Net_Self_Employed_Business_Income" => $request->input('Net_Self-Employed/Business_Income'),
                      "Net_Rental_Income" => $request->input('Net_Rental_Income'),
                      "Distribution" => $request->input('Distribution'),
                      "Social_Security_Income" => $request->input('Social_Security_Income'),
                      "Alimony_Income" => $request->input('Alimony_Income'),
                      "Retirement_Income_Pension" => $request->input('Retirement_Income/Pension'),
                      "Other_Income" => $request->input('Other_Income'),
                      "Total_House_Hold_Income" => $request->input('Total_House_Hold_Income'),
                      "Food_Clothing_Misc" => $request->input('Food_Clothing_Misc'),
                      "Rent_Mortgage" => $request->input('Rent/Mortgage'),
                      "Utilities" => $request->input('Utilities'),
                      "Vehicles_Ownership_Costs" => $request->input('Vehicles_Ownership_Costs'),
                      "Vehicles_Operating_Costs" => $request->input('Vehicles_Operating_Costs'),
                      "Public_Transportation" => $request->input('Public_Transportation'),
                      "Health_Insurance" => $request->input('Health_Insurance'),
                      "Out_of_Pocket_Health_Costs" => $request->input('Out_of_Pocket_Health_Costs'),
                      "Court_Ordered_Payments" => $request->input('Court_Ordered_Payments'),
                      "Child_Care" => $request->input('Child_Care'),
                      "Life_Insurance" => $request->input('Life_Insurance'),
                      "Taxes" => $request->input('Taxes'),
                      "Other_Secure_Debts" => $request->input('Other_Secure_Debts'),
                      "Other_Secure_Debts1" => $request->input('Other_Secure_Debts1'),
                      "TotHousehold_Expense" => $request->input('TotHouseholdExpense'),
                      "Are_you_the_beneficiary_of_a_trust_estate_or_life_insurance_po" => $request->input('Are_you_the_beneficiary_of_a_trust_estate_or_life_insurance_po'),
                      "Are_you_currently_in_bankruptcy" => $request->input('Are_you_currently_in_bankruptcy'),
                      "Discharge_Dismissal_Date" => $request->input('Discharge/Dismissal_Date'),
                      "Have_you_been_party_to_a_lawsuit" => $request->input('Have_you_been_party_to_a_lawsuit?'),
                      "Date_the_lawsuit_was_resolved" => $request->input('Date_the_lawsuit_was_resolved'),
                      "In_the_past_10_years_have_you_transferred_any_assets_for_less_t" => $request->input('In_the_past_10_years_have_you_transferred_any_assets_for_less_t'),
                      "Date_the_asset_was_transferred" => $request->input('Date_the_asset_was_transferred'),
                      "In_the_past_3_year_have_you_transferred_any_real_property" => $request->input('In_the_past_3_year_have_you_transferred_any_real_property'),
                      "List_the_type_of_property_and_date_of_the_transfer" => $request->input('List_the_type_of_property_and_date_of_the_transfer'),
                      "Print_Full_Name" => $request->input('Print_Full_Name'),
                      "Date" => $request->input('Date'),
                      "Signature" => $request->input('Signature'),

                      // spouse info

                      "spouse_first_name" => $request->input('spouse_first_name'),
                      "spouse_last_name" => $request->input('spouse_last_name'),
                      "spouse_Driver_License" => $request->input('spouse_Driver_License'),
                      "spouse_ssn" => $request->input('spouse_ssn'),
                      "spouse_date_of_birth" => $request->input('spouse_date_of_birth'),
                      "spouse_employment_status" => $request->input('spouse_employment_status'),
                      "Spouse_Cash_on_Hand_Amount" => $request->input('Spouse_Cash_on_Hand_Amount'),
                      "How_Many_Bank_Accounts_Spouse_Have" => $request->input('How_Many_Bank_Accounts_Spouse_Have'),
                      "Spouse_Wages" => $request->input('Spouse_Wages'),
                      "Spouse_Social_Security_Income" => $request->input('Spouse_Social_Security_Income'),
                      
                       "Status" => "Completed",
                      "Reference" => uniqid(),
                      "Login_username" => $Login_username,
                      "Login_email" => $Login_email,
                      "user_id" => $user_id,
                );
                



                $fqid = Fq::create($data)->id;

                // spouse

                $Bank_Accounts_Spouse = [];
                if($request->input('How_Many_Bank_Accounts_Spouse_Have') && $request->input('How_Many_Bank_Accounts_Spouse_Have') != '0'){

                    $bankaccount_count_sp = $request->input('How_Many_Bank_Accounts_Spouse_Have');

                    
                    $spouse_bank = array();
                    for($i = 1; $i <= $bankaccount_count_sp; $i++) { 
                        if($request->file('bankspouse'.$i)){
                            $image = $request->file('bankspouse'.$i);
                            if($image->isValid()){
                                if(!empty($request->input('bankspouse_old'))){
                                    if(file_exists(public_path('/').'/'.$request->input('bankspouse_old'.$i))){
                                        unlink(public_path('/').'/'.$request->input('bankspouse_old'.$i)); 
                                    }
                                }
                                $extension = $image->getClientOriginalExtension();
                                 $fileName = rand(100,999999).time().'.'.$extension;
                                 $image_path = public_path('upload/fq'); 
                                $tt = 'bankspouse'.$i;
                                $request->$tt->move($image_path, $fileName); 
                                $formInput['bankspouse'] = 'upload/fq/'.$fileName;
                            }
                            unset($formInput['bankspouse_old']);
                        }else{
                            $formInput['bankspouse'] = $request->input('bankspouse_old'.$i);
                        }

                        $data_bankaccount66 = array(
                            "bankspouse" => $formInput['bankspouse'],
                            "fq_id" => $fqid,
                        );

                        $Bank_Accounts_Spouse[] = $data_bankaccount66;
                        Fqbankspouseaccount ::create($data_bankaccount66)->id;

                    
                    }
                    
                }




                $personal_asset_array = [];
                if($request->input('How_many_other_personal_assets_do_you_have?') && $request->input('How_many_other_personal_assets_do_you_have?') != '0'){

                    $dependent_count6 = $request->input('How_many_other_personal_assets_do_you_have?');

                    for($i = 1; $i <= $dependent_count6; $i++) {
                        $data_dependents6 = array(
                            "Description_of_asset" => $request->input('Description_of_asset'.$i),
                            "Date_of_purchase" => $request->input('Date_of_purchase'.$i),
                            "Current_value" => $request->input('Current_value'.$i),
                            "Loan_balance" => $request->input('Loan_balance'.$i),
                            "Name_of_lender" => $request->input('Name_of_lender'.$i),
                            "Date_of_final_payment" => $request->input('Date_of_final_payment'.$i),
                            "fq_id" => $fqid,
                        );

                        $personal_asset_array[] = $data_dependents6;
                        Fqpersonal ::create($data_dependents6)->id;
                    }
                    
                }


                $vehicle_array = [];
                if($request->input('How_many_motor_vehicle_do_you_own?') && $request->input('How_many_motor_vehicle_do_you_own?') != '0'){

                    $dependent_count5 = $request->input('How_many_motor_vehicle_do_you_own?');

                    for($i = 1; $i <= $dependent_count5; $i++) {
                        if($request->file('vehicleup'.$i)){
                            $image = $request->file('vehicleup'.$i);
                            if($image->isValid()){
                                if(!empty($request->input('vehicleup_old'))){
                                    if(file_exists(public_path('/').'/'.$request->input('vehicleup_old'.$i))){
                                        unlink(public_path('/').'/'.$request->input('vehicleup_old'.$i)); 
                                    }
                                }
                                $extension = $image->getClientOriginalExtension();
                                 $fileName = rand(100,999999).time().'.'.$extension;
                                 $image_path = public_path('upload/fq'); 
                                $tt = 'vehicleup'.$i;
                                $request->$tt->move($image_path, $fileName); 
                                $formInput['vehicleup'] = 'upload/fq/'.$fileName;
                            }
                            unset($formInput['vehicleup_old']);
                        }else{
                            $formInput['vehicleup'] = $request->input('vehicleup_old'.$i);
                        }

                        $data_dependents5 = array(
                            "Make_and_model" => $request->input('Make_and_model'.$i),
                            "Year" => $request->input('Year'.$i),
                            "Mileage" => $request->input('Mileage'.$i),
                            "Lease_or_own" => $request->input('Lease_or_own'.$i),
                            "Date_of_purchased" => $request->input('Date_of_purchased'.$i),
                            "Date_of_final_payment" => $request->input('Date_of_final_payment'.$i),
                            "Current_value" => $request->input('Current_value'.$i),
                            "Current_loan_value" => $request->input('Current_loan_value'.$i),
                            "Monthly_payment" => $request->input('Monthly_payment'.$i),
                            "Name_of_lender" => $request->input('Name_of_lender'.$i),
                            "Is_vehicle_1_financed_or_leased" => $request->input('Is_vehicle_1_financed_or_leased?'.$i),
                            "vehicleup" => $formInput['vehicleup'],
                            "fq_id" => $fqid,
                        );

                        $vehicle_array[] = $data_dependents5;
                        Fqvehical ::create($data_dependents5)->id;
                    }
                    
                }


                $property_array = [];
                if($request->input('How_many_properties_do_you_own?') && $request->input('How_many_properties_do_you_own?') != '0'){

                    $dependent_count4 = $request->input('How_many_properties_do_you_own?');

                    for($i = 1; $i <= $dependent_count4; $i++) {
                        if($request->file('property_document'.$i)){
                            $image = $request->file('property_document'.$i);
                            if($image->isValid()){
                                if(!empty($request->input('property_document_old'))){
                                    if(file_exists(public_path('/').'/'.$request->input('property_document_old'.$i))){
                                        unlink(public_path('/').'/'.$request->input('property_document_old'.$i)); 
                                    }
                                }
                                $extension = $image->getClientOriginalExtension();
                                 $fileName = rand(100,999999).time().'.'.$extension;
                                 $image_path = public_path('upload/fq'); 
                                $tt = 'property_document'.$i;
                                $request->$tt->move($image_path, $fileName); 
                                $formInput['property_document'] = 'upload/fq/'.$fileName;
                            }
                            unset($formInput['property_document_old']);
                        }else{
                            $formInput['property_document'] = $request->input('property_document_old'.$i);
                        }

                        $data_dependents4 = array(
                            "Property_address" => $request->input('Property_address'.$i),
                            "Country" => $request->input('Country'.$i),
                            "Mortgage_lender" => $request->input('Mortgage_lender'.$i),
                            "Purchase_date" => $request->input('Purchase_date'.$i),
                            "Fair_market_value" => $request->input('Fair_market_value'.$i),
                            "Loan_balance" => $request->input('Loan_balance'.$i),
                            "Monthly_payment" => $request->input('Monthly_payment'.$i),
                            "Date_of_final" => $request->input('Date_of_final'.$i),
                            "Monthly_property_tax" => $request->input('Monthly_property_tax'.$i),
                            "How_is_title_held" => $request->input('How_is_title_held'.$i),
                            "property_document" => $formInput['property_document'],
                            "fq_id" => $fqid,
                        );

                        $property_array[] = $data_dependents4;
                        Fqestate ::create($data_dependents4)->id;
                    }
                    
                }


                $insurance_array = [];
                if($request->input('How_many_life_insurance_policy_do_you_have?') && $request->input('How_many_life_insurance_policy_do_you_have?') != '0'){

                    $dependent_count3 = $request->input('How_many_life_insurance_policy_do_you_have?');

                    for($i = 1; $i <= $dependent_count3; $i++) {
                        if($request->file('lifeinsure'.$i)){
                            $image = $request->file('lifeinsure'.$i);
                            if($image->isValid()){
                                if(!empty($request->input('lifeinsure_old'))){
                                    if(file_exists(public_path('/').'/'.$request->input('lifeinsure_old'.$i))){
                                        unlink(public_path('/').'/'.$request->input('lifeinsure_old'.$i)); 
                                    }
                                }
                                $extension = $image->getClientOriginalExtension();
                                 $fileName = rand(100,999999).time().'.'.$extension;
                                 $image_path = public_path('upload/fq'); 
                                $tt = 'lifeinsure'.$i;
                                $request->$tt->move($image_path, $fileName); 
                                $formInput['lifeinsure'] = 'upload/fq/'.$fileName;
                            }
                            unset($formInput['lifeinsure_old']);
                        }else{
                            $formInput['lifeinsure'] = $request->input('lifeinsure_old'.$i);
                        }

                        $data_dependents3 = array(
                            "Policy_number" => $request->input('Policy_number'.$i),
                            "Owner_of_policy" => $request->input('Owner_of_policy'.$i),
                            "Current_cash_value" => $request->input('Current_cash_value'.$i),
                            "Outstanding_loan_balance" => $request->input('Outstanding_loan_balance'.$i),
                            "policy_document" => $formInput['lifeinsure'],
                            "fq_id" => $fqid,
                        );

                        $insurance_array[] = $data_dependents3;
                        Fqlifeinsure ::create($data_dependents3)->id;
                    }
                    
                }


                $all_dependents = [];
                if($request->input('How_many_dependents_do_you_have') && $request->input('How_many_dependents_do_you_have') != '0'){

                    $dependent_count = $request->input('How_many_dependents_do_you_have');

                     
                    for($i = 1; $i <= $dependent_count; $i++) {
                        $data_dependents = array(
                            "Name" => $request->input('dependent_name'.$i),
                            "Date_Of_Birth" => $request->input('dependent_date_of_birth'.$i),
                            "SSN" => $request->input('dependent_ssn'.$i),
                            "Relationship" => $request->input('dependent_relationship'.$i),
                            "fq_id" => $fqid,
                        );

                        $all_dependents[] = $data_dependents;

                        Fqdependents ::create($data_dependents)->id;
                    }
                    
                }

                $investments_array = [];
                if($request->input('How_many_type_of_investments_do_you_have?') && $request->input('How_many_type_of_investments_do_you_have?') != '0'){

                    $dependent_count1 = $request->input('How_many_type_of_investments_do_you_have?');

                    for($i = 1; $i <= $dependent_count1; $i++) {
                        $data_dependents1 = array(
                            "Type_of_investment" => $request->input('Type_of_investment'.$i),
                            "Company_name" => $request->input('Company_name'.$i),
                            "Current_value" => $request->input('Current_value'.$i),
                            "Balance" => $request->input('Balance'.$i),
                            "Payment" => $request->input('Payment'.$i),
                            "fq_id" => $fqid,
                        );

                        $investments_array[] = $data_dependents1;
                        Fqinvestments ::create($data_dependents1)->id;
                    }
                    
                }


                $bank_array = array();

                if($request->input('How_many_bank_accounts_do_you_have') && $request->input('How_many_bank_accounts_do_you_have') != '0'){

                    $bankaccount_count = $request->input('How_many_bank_accounts_do_you_have');

                
                    for($i = 1; $i <= $bankaccount_count; $i++) { 
                        if($request->file('bank'.$i)){
                            $image = $request->file('bank'.$i);
                            if($image->isValid()){
                                if(!empty($request->input('bank_old'))){
                                    if(file_exists(public_path('/').'/'.$request->input('bank_old'.$i))){
                                        unlink(public_path('/').'/'.$request->input('bank_old'.$i)); 
                                    }
                                }
                                $extension = $image->getClientOriginalExtension();
                                 $fileName = rand(100,999999).time().'.'.$extension;
                                 $image_path = public_path('upload/fq'); 
                                $tt = 'bank'.$i;
                                $request->$tt->move($image_path, $fileName); 
                                $formInput['bank'] = 'upload/fq/'.$fileName;
                            }
                            unset($formInput['bank_old']);
                        }else{
                            $formInput['bank'] = $request->input('bank_old'.$i);
                        }

                        $data_bankaccount = array(
                            "bank" => $formInput['bank'],
                            "fq_id" => $fqid,
                        );

                        $bank_array[] = $data_bankaccount;
                        Fqbankaccount ::create($data_bankaccount)->id;
  
                    }
                    
                }


                $credit_card_array = [];
                if($request->input('How_many_credit_cards_do_you_have?') && $request->input('How_many_credit_cards_do_you_have?') != '0'){

                    $ccard_count = $request->input('How_many_credit_cards_do_you_have?');

                    

                    for($i = 1; $i <= $ccard_count; $i++) { 
                        if($request->file('Credcards'.$i)){
                            $image = $request->file('Credcards'.$i);
                            if($image->isValid()){
                                if(!empty($request->input('Credcards_old'))){
                                    if(file_exists(public_path('/').'/'.$request->input('Credcards_old'.$i))){
                                        unlink(public_path('/').'/'.$request->input('Credcards_old'.$i)); 
                                    }
                                }
                                $extension = $image->getClientOriginalExtension();
                                 $fileName = rand(100,999999).time().'.'.$extension;
                                 $image_path = public_path('upload/fq'); 
                                $tt = 'Credcards'.$i;
                                $request->$tt->move($image_path, $fileName); 
                                $formInput['Credcards'] = 'upload/fq/'.$fileName;
                            }
                            unset($formInput['Credcards_old']);
                        }else{
                            $formInput['Credcards'] = $request->input('Credcards_old'.$i);
                        }

                        $data_bankaccount9 = array(
                            "Creditcards" => $formInput['Credcards'],
                            "fq_id" => $fqid,
                        );

                        $credit_card_array[] = $data_bankaccount9;
                        FqCreditcards ::create($data_bankaccount9)->id;
                    }
                    
                }
                

                $FullName = $request->input('First_name')." ".$request->input('Last_name');

                $caseID = Auth::user()->case_id;
                $name = Auth::user()->name;
                $email = Auth::user()->email;

                $filename =  $name.'_fqform.pdf';
                $ip = $_SERVER['REMOTE_ADDR'];  

                $fqdataall = Fq::where('id', $fqid)->first();

                $data['ip'] = $ip;
                $data['signature'] = $name;
                $data['last_update'] = $fqdataall->updated_at;
                $data['start_time'] = $fqdataall->created_at;
                $data['finish_time'] =  date("Y-m-d H:i:s");
                $data['browse'] = $request->input('browser');
                $data['device'] = $request->input('device');



                $view = \View::make('fq_doc', [
                    'maindata' => $data,
                    'dependent_array' => $all_dependents,
                    'banks_array' => $bank_array,
                    'Bank_Accounts_Spouse' => $Bank_Accounts_Spouse,
                    'vehicle_array' => $vehicle_array,
                    'property_array' => $property_array,
                    'life_insurance_array' => $insurance_array,
                    'investment_array' => $investments_array,
                    'credit_card_array' => $credit_card_array,
                    'personal_asset_array' => $personal_asset_array,
                    
                ]);
                // print_r($view); die;

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

                $filename1 =  $name.'_signauthfqform.pdf';

                $dataauth['ip'] = $ip;
                $dataauth['signature'] = $name;
                $dataauth['name'] = $name;
                $dataauth['email'] = $email;
                $dataauth['timestamp'] = date("H:i:s");
                $dataauth['signed_date'] =  date("Y-m-d");


                $view = \View::make('fqauth_doc', [
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




                return redirect('fqs')->with('success',"Fq Added Successfully!");


        } elseif ($action === 'function1') {
           
        // store fq start

                $Login_username = Auth::user()->name;
                $Login_email = Auth::user()->email;
                $user_id = Auth::user()->id;


                $data = array(
                      "Last_Name" => $request->input('Last_name'),
                      "First_Name" => $request->input('First_name'),
                      "Date_Of_Birth" => $request->input('Date_of_birth'),
                      "SSN" => $request->input('SSN#'),
                      "Street_Address" => $request->input('Street_address'),
                      "Address_Line_2" => $request->input('Address_line_2'),
                      "City" => $request->input('City'),
                      "State" => $request->input('State'),
                      "Zip_Code" => $request->input('Zip_code'),
                      "County_Of_Residence" => $request->input('Country_of_residence'),
                      "Rent_Or_Own" => $request->input('Rent_or_own'),
                      "Driver_License" => $request->input('Driver_license#'),
                      "Primary_Phone_Number" => $request->input('Primary_phone_number'),
                      "snd_Contact_Phone_Number" => $request->input('2nd_contact_phone_number'),
                      "Marital_Status" => $request->input('Marital_status'),
                      "Married_Filing_Status" => $request->input('Married_Filing_Status'),
                      "Do_you_have_any_dependents_EXCLUDING_yourself_and_your_spouse" => $request->input('Do_you_have_any_dependents_EXCLUDING_yourself_and_your_spouse?'),
                      "How_many_dependents_do_you_have" => $request->input('How_many_dependents_do_you_have'),
                      "Client_Employment_Status" => $request->input('Client_employment_status'),
                      "Cash_on_Hand_Amount" => $request->input('Cash_on_hand_amount'),
                      "How_Many_Bank_Accounts_Do_You_Have" => $request->input('How_many_bank_accounts_do_you_have'),
                      "Can_you_take_a_loan_against_your_401k_Account" => $request->input('Can_you_take_a_loan_against_your_401k_account'),
                      "Do_You_Have_Any_Investments" => $request->input('Do_you_have_any_investments?'),
                      "How_many_Credit_Cards_Do_You_Have" => $request->input('How_many_credit_cards_do_you_have?'),
                      "Do_You_Have_Any_Credit_Cards" => $request->input('Do_you_have_any_credi_cards?'),
                      "How_many_type_of_investments_do_you_have" => $request->input('How_many_type_of_investments_do_you_have?'),
                      "Do_You_Have_Life_Insurance" => $request->input('Do_you_have_life_insurance?'),
                      "How_Many_Life_Insurance_Policy_Do_You_Have" => $request->input('How_many_life_insurance_policy_do_you_have?'),
                      "Do_You_Own_Any_Real_Estate" => $request->input('Do_you_own_any_real_estate?'),
                      "How_Many_Properties_Do_You_Own" => $request->input('How_many_properties_do_you_own?'),
                      "Do_You_Own_A_Motor_Vehicle" => $request->input('Do_you_own_a_motor_vehicle?'),
                      "How_Many_Motor_Vehicles_Do_You_Own" => $request->input('How_many_motor_vehicle_do_you_own?'),
                      "Do_You_Have_Any_Other_Personal_Assets" => $request->input('Do_you_have_any_other_personal_assets:'),
                      "How_Many_Other_Personal_Assets_Do_You_Have" => $request->input('How_many_other_personal_assets_do_you_have?'),
                      "Interest_Dividends" => $request->input('Interest/Dividends'),
                      "Net_Self_Employed_Business_Income" => $request->input('Net_Self-Employed/Business_Income'),
                      "Net_Rental_Income" => $request->input('Net_Rental_Income'),
                      "Distribution" => $request->input('Distribution'),
                      "Social_Security_Income" => $request->input('Social_Security_Income'),
                      "Alimony_Income" => $request->input('Alimony_Income'),
                      "Retirement_Income_Pension" => $request->input('Retirement_Income/Pension'),
                      "Other_Income" => $request->input('Other_Income'),
                      "Total_House_Hold_Income" => $request->input('Total_House_Hold_Income'),
                      "Food_Clothing_Misc" => $request->input('Food_Clothing_Misc'),
                      "Rent_Mortgage" => $request->input('Rent/Mortgage'),
                      "Utilities" => $request->input('Utilities'),
                      "Vehicles_Ownership_Costs" => $request->input('Vehicles_Ownership_Costs'),
                      "Vehicles_Operating_Costs" => $request->input('Vehicles_Operating_Costs'),
                      "Public_Transportation" => $request->input('Public_Transportation'),
                      "Health_Insurance" => $request->input('Health_Insurance'),
                      "Out_of_Pocket_Health_Costs" => $request->input('Out_of_Pocket_Health_Costs'),
                      "Court_Ordered_Payments" => $request->input('Court_Ordered_Payments'),
                      "Child_Care" => $request->input('Child_Care'),
                      "Life_Insurance" => $request->input('Life_Insurance'),
                      "Taxes" => $request->input('Taxes'),
                      "Other_Secure_Debts" => $request->input('Other_Secure_Debts'),
                      "Other_Secure_Debts1" => $request->input('Other_Secure_Debts1'),
                      "TotHousehold_Expense" => $request->input('TotHouseholdExpense'),
                      "Are_you_the_beneficiary_of_a_trust_estate_or_life_insurance_po" => $request->input('Are_you_the_beneficiary_of_a_trust_estate_or_life_insurance_po'),
                      "Are_you_currently_in_bankruptcy" => $request->input('Are_you_currently_in_bankruptcy'),
                      "Discharge_Dismissal_Date" => $request->input('Discharge/Dismissal_Date'),
                      "Have_you_been_party_to_a_lawsuit" => $request->input('Have_you_been_party_to_a_lawsuit?'),
                      "Date_the_lawsuit_was_resolved" => $request->input('Date_the_lawsuit_was_resolved'),
                      "In_the_past_10_years_have_you_transferred_any_assets_for_less_t" => $request->input('In_the_past_10_years_have_you_transferred_any_assets_for_less_t'),
                      "Date_the_asset_was_transferred" => $request->input('Date_the_asset_was_transferred'),
                      "In_the_past_3_year_have_you_transferred_any_real_property" => $request->input('In_the_past_3_year_have_you_transferred_any_real_property'),
                      "List_the_type_of_property_and_date_of_the_transfer" => $request->input('List_the_type_of_property_and_date_of_the_transfer'),
                      "Print_Full_Name" => $request->input('Print_Full_Name'),
                      "Date" => $request->input('Date'),
                      "Signature" => $request->input('Signature'),

                      // spouse info

                      "spouse_first_name" => $request->input('spouse_first_name'),
                      "spouse_last_name" => $request->input('spouse_last_name'),
                      "spouse_Driver_License" => $request->input('spouse_Driver_License'),
                      "spouse_ssn" => $request->input('spouse_ssn'),
                      "spouse_date_of_birth" => $request->input('spouse_date_of_birth'),
                      "spouse_employment_status" => $request->input('spouse_employment_status'),
                      "Spouse_Cash_on_Hand_Amount" => $request->input('Spouse_Cash_on_Hand_Amount'),
                      "How_Many_Bank_Accounts_Spouse_Have" => $request->input('How_Many_Bank_Accounts_Spouse_Have'),
                      "Spouse_Wages" => $request->input('Spouse_Wages'),
                      "Spouse_Social_Security_Income" => $request->input('Spouse_Social_Security_Income'),
                      
                       "Status" => "inprogress",
                      "Reference" => uniqid(),
                      "Login_username" => $Login_username,
                      "Login_email" => $Login_email,
                      "user_id" => $user_id,
                );
                



                $fqid = Fq::create($data)->id;

                // spouse

                $Bank_Accounts_Spouse = [];
                if($request->input('How_Many_Bank_Accounts_Spouse_Have') && $request->input('How_Many_Bank_Accounts_Spouse_Have') != '0'){

                    $bankaccount_count_sp = $request->input('How_Many_Bank_Accounts_Spouse_Have');

                    
                    $spouse_bank = array();
                    for($i = 1; $i <= $bankaccount_count_sp; $i++) { 
                        if($request->file('bankspouse'.$i)){
                            $image = $request->file('bankspouse'.$i);
                            if($image->isValid()){
                                if(!empty($request->input('bankspouse_old'))){
                                    if(file_exists(public_path('/').'/'.$request->input('bankspouse_old'.$i))){
                                        unlink(public_path('/').'/'.$request->input('bankspouse_old'.$i)); 
                                    }
                                }
                                $extension = $image->getClientOriginalExtension();
                                 $fileName = rand(100,999999).time().'.'.$extension;
                                 $image_path = public_path('upload/fq'); 
                                $tt = 'bankspouse'.$i;
                                $request->$tt->move($image_path, $fileName); 
                                $formInput['bankspouse'] = 'upload/fq/'.$fileName;
                            }
                            unset($formInput['bankspouse_old']);
                        }else{
                            $formInput['bankspouse'] = $request->input('bankspouse_old'.$i);
                        }

                        $data_bankaccount66 = array(
                            "bankspouse" => $formInput['bankspouse'],
                            "fq_id" => $fqid,
                        );

                        $Bank_Accounts_Spouse[] = $data_bankaccount66;
                        Fqbankspouseaccount ::create($data_bankaccount66)->id;

                    
                    }
                    
                }




                $personal_asset_array = [];
                if($request->input('How_many_other_personal_assets_do_you_have?') && $request->input('How_many_other_personal_assets_do_you_have?') != '0'){

                    $dependent_count6 = $request->input('How_many_other_personal_assets_do_you_have?');

                    for($i = 1; $i <= $dependent_count6; $i++) {
                        $data_dependents6 = array(
                            "Description_of_asset" => $request->input('Description_of_asset'.$i),
                            "Date_of_purchase" => $request->input('Date_of_purchase'.$i),
                            "Current_value" => $request->input('Current_value'.$i),
                            "Loan_balance" => $request->input('Loan_balance'.$i),
                            "Name_of_lender" => $request->input('Name_of_lender'.$i),
                            "Date_of_final_payment" => $request->input('Date_of_final_payment'.$i),
                            "fq_id" => $fqid,
                        );

                        $personal_asset_array[] = $data_dependents6;
                        Fqpersonal ::create($data_dependents6)->id;
                    }
                    
                }


                $vehicle_array = [];
                if($request->input('How_many_motor_vehicle_do_you_own?') && $request->input('How_many_motor_vehicle_do_you_own?') != '0'){

                    $dependent_count5 = $request->input('How_many_motor_vehicle_do_you_own?');

                    for($i = 1; $i <= $dependent_count5; $i++) {
                        if($request->file('vehicleup'.$i)){
                            $image = $request->file('vehicleup'.$i);
                            if($image->isValid()){
                                if(!empty($request->input('vehicleup_old'))){
                                    if(file_exists(public_path('/').'/'.$request->input('vehicleup_old'.$i))){
                                        unlink(public_path('/').'/'.$request->input('vehicleup_old'.$i)); 
                                    }
                                }
                                $extension = $image->getClientOriginalExtension();
                                 $fileName = rand(100,999999).time().'.'.$extension;
                                 $image_path = public_path('upload/fq'); 
                                $tt = 'vehicleup'.$i;
                                $request->$tt->move($image_path, $fileName); 
                                $formInput['vehicleup'] = 'upload/fq/'.$fileName;
                            }
                            unset($formInput['vehicleup_old']);
                        }else{
                            $formInput['vehicleup'] = $request->input('vehicleup_old'.$i);
                        }

                        $data_dependents5 = array(
                            "Make_and_model" => $request->input('Make_and_model'.$i),
                            "Year" => $request->input('Year'.$i),
                            "Mileage" => $request->input('Mileage'.$i),
                            "Lease_or_own" => $request->input('Lease_or_own'.$i),
                            "Date_of_purchased" => $request->input('Date_of_purchased'.$i),
                            "Date_of_final_payment" => $request->input('Date_of_final_payment'.$i),
                            "Current_value" => $request->input('Current_value'.$i),
                            "Current_loan_value" => $request->input('Current_loan_value'.$i),
                            "Monthly_payment" => $request->input('Monthly_payment'.$i),
                            "Name_of_lender" => $request->input('Name_of_lender'.$i),
                            "Is_vehicle_1_financed_or_leased" => $request->input('Is_vehicle_1_financed_or_leased?'.$i),
                            "vehicleup" => $formInput['vehicleup'],
                            "fq_id" => $fqid,
                        );

                        $vehicle_array[] = $data_dependents5;
                        Fqvehical ::create($data_dependents5)->id;
                    }
                    
                }


                $property_array = [];
                if($request->input('How_many_properties_do_you_own?') && $request->input('How_many_properties_do_you_own?') != '0'){

                    $dependent_count4 = $request->input('How_many_properties_do_you_own?');

                    for($i = 1; $i <= $dependent_count4; $i++) {
                        if($request->file('property_document'.$i)){
                            $image = $request->file('property_document'.$i);
                            if($image->isValid()){
                                if(!empty($request->input('property_document_old'))){
                                    if(file_exists(public_path('/').'/'.$request->input('property_document_old'.$i))){
                                        unlink(public_path('/').'/'.$request->input('property_document_old'.$i)); 
                                    }
                                }
                                $extension = $image->getClientOriginalExtension();
                                 $fileName = rand(100,999999).time().'.'.$extension;
                                 $image_path = public_path('upload/fq'); 
                                $tt = 'property_document'.$i;
                                $request->$tt->move($image_path, $fileName); 
                                $formInput['property_document'] = 'upload/fq/'.$fileName;
                            }
                            unset($formInput['property_document_old']);
                        }else{
                            $formInput['property_document'] = $request->input('property_document_old'.$i);
                        }

                        $data_dependents4 = array(
                            "Property_address" => $request->input('Property_address'.$i),
                            "Country" => $request->input('Country'.$i),
                            "Mortgage_lender" => $request->input('Mortgage_lender'.$i),
                            "Purchase_date" => $request->input('Purchase_date'.$i),
                            "Fair_market_value" => $request->input('Fair_market_value'.$i),
                            "Loan_balance" => $request->input('Loan_balance'.$i),
                            "Monthly_payment" => $request->input('Monthly_payment'.$i),
                            "Date_of_final" => $request->input('Date_of_final'.$i),
                            "Monthly_property_tax" => $request->input('Monthly_property_tax'.$i),
                            "How_is_title_held" => $request->input('How_is_title_held'.$i),
                            "property_document" => $formInput['property_document'],
                            "fq_id" => $fqid,
                        );

                        $property_array[] = $data_dependents4;
                        Fqestate ::create($data_dependents4)->id;
                    }
                    
                }


                $insurance_array = [];
                if($request->input('How_many_life_insurance_policy_do_you_have?') && $request->input('How_many_life_insurance_policy_do_you_have?') != '0'){

                    $dependent_count3 = $request->input('How_many_life_insurance_policy_do_you_have?');

                    for($i = 1; $i <= $dependent_count3; $i++) {
                        if($request->file('lifeinsure'.$i)){
                            $image = $request->file('lifeinsure'.$i);
                            if($image->isValid()){
                                if(!empty($request->input('lifeinsure_old'))){
                                    if(file_exists(public_path('/').'/'.$request->input('lifeinsure_old'.$i))){
                                        unlink(public_path('/').'/'.$request->input('lifeinsure_old'.$i)); 
                                    }
                                }
                                $extension = $image->getClientOriginalExtension();
                                 $fileName = rand(100,999999).time().'.'.$extension;
                                 $image_path = public_path('upload/fq'); 
                                $tt = 'lifeinsure'.$i;
                                $request->$tt->move($image_path, $fileName); 
                                $formInput['lifeinsure'] = 'upload/fq/'.$fileName;
                            }
                            unset($formInput['lifeinsure_old']);
                        }else{
                            $formInput['lifeinsure'] = $request->input('lifeinsure_old'.$i);
                        }

                        $data_dependents3 = array(
                            "Policy_number" => $request->input('Policy_number'.$i),
                            "Owner_of_policy" => $request->input('Owner_of_policy'.$i),
                            "Current_cash_value" => $request->input('Current_cash_value'.$i),
                            "Outstanding_loan_balance" => $request->input('Outstanding_loan_balance'.$i),
                            "policy_document" => $formInput['lifeinsure'],
                            "fq_id" => $fqid,
                        );

                        $insurance_array[] = $data_dependents3;
                        Fqlifeinsure ::create($data_dependents3)->id;
                    }
                    
                }


                $all_dependents = [];
                if($request->input('How_many_dependents_do_you_have') && $request->input('How_many_dependents_do_you_have') != '0'){

                    $dependent_count = $request->input('How_many_dependents_do_you_have');

                     
                    for($i = 1; $i <= $dependent_count; $i++) {
                        $data_dependents = array(
                            "Name" => $request->input('dependent_name'.$i),
                            "Date_Of_Birth" => $request->input('dependent_date_of_birth'.$i),
                            "SSN" => $request->input('dependent_ssn'.$i),
                            "Relationship" => $request->input('dependent_relationship'.$i),
                            "fq_id" => $fqid,
                        );

                        $all_dependents[] = $data_dependents;

                        Fqdependents ::create($data_dependents)->id;
                    }
                    
                }

                $investments_array = [];
                if($request->input('How_many_type_of_investments_do_you_have?') && $request->input('How_many_type_of_investments_do_you_have?') != '0'){

                    $dependent_count1 = $request->input('How_many_type_of_investments_do_you_have?');

                    for($i = 1; $i <= $dependent_count1; $i++) {
                        $data_dependents1 = array(
                            "Type_of_investment" => $request->input('Type_of_investment'.$i),
                            "Company_name" => $request->input('Company_name'.$i),
                            "Current_value" => $request->input('Current_value'.$i),
                            "Balance" => $request->input('Balance'.$i),
                            "Payment" => $request->input('Payment'.$i),
                            "fq_id" => $fqid,
                        );

                        $investments_array[] = $data_dependents1;
                        Fqinvestments ::create($data_dependents1)->id;
                    }
                    
                }


                $bank_array = array();

                if($request->input('How_many_bank_accounts_do_you_have') && $request->input('How_many_bank_accounts_do_you_have') != '0'){

                    $bankaccount_count = $request->input('How_many_bank_accounts_do_you_have');

                
                    for($i = 1; $i <= $bankaccount_count; $i++) { 
                        if($request->file('bank'.$i)){
                            $image = $request->file('bank'.$i);
                            if($image->isValid()){
                                if(!empty($request->input('bank_old'))){
                                    if(file_exists(public_path('/').'/'.$request->input('bank_old'.$i))){
                                        unlink(public_path('/').'/'.$request->input('bank_old'.$i)); 
                                    }
                                }
                                $extension = $image->getClientOriginalExtension();
                                 $fileName = rand(100,999999).time().'.'.$extension;
                                 $image_path = public_path('upload/fq'); 
                                $tt = 'bank'.$i;
                                $request->$tt->move($image_path, $fileName); 
                                $formInput['bank'] = 'upload/fq/'.$fileName;
                            }
                            unset($formInput['bank_old']);
                        }else{
                            $formInput['bank'] = $request->input('bank_old'.$i);
                        }

                        $data_bankaccount = array(
                            "bank" => $formInput['bank'],
                            "fq_id" => $fqid,
                        );

                        $bank_array[] = $data_bankaccount;
                        Fqbankaccount ::create($data_bankaccount)->id;
  
                    }
                    
                }


                $credit_card_array = [];
                if($request->input('How_many_credit_cards_do_you_have?') && $request->input('How_many_credit_cards_do_you_have?') != '0'){

                    $ccard_count = $request->input('How_many_credit_cards_do_you_have?');

                    

                    for($i = 1; $i <= $ccard_count; $i++) { 
                        if($request->file('Credcards'.$i)){
                            $image = $request->file('Credcards'.$i);
                            if($image->isValid()){
                                if(!empty($request->input('Credcards_old'))){
                                    if(file_exists(public_path('/').'/'.$request->input('Credcards_old'.$i))){
                                        unlink(public_path('/').'/'.$request->input('Credcards_old'.$i)); 
                                    }
                                }
                                $extension = $image->getClientOriginalExtension();
                                 $fileName = rand(100,999999).time().'.'.$extension;
                                 $image_path = public_path('upload/fq'); 
                                $tt = 'Credcards'.$i;
                                $request->$tt->move($image_path, $fileName); 
                                $formInput['Credcards'] = 'upload/fq/'.$fileName;
                            }
                            unset($formInput['Credcards_old']);
                        }else{
                            $formInput['Credcards'] = $request->input('Credcards_old'.$i);
                        }

                        $data_bankaccount9 = array(
                            "Creditcards" => $formInput['Credcards'],
                            "fq_id" => $fqid,
                        );

                        $credit_card_array[] = $data_bankaccount9;
                        FqCreditcards ::create($data_bankaccount9)->id;
                    }
                    
                }

               
            

                return redirect('fqs')->with('success',"Fq Saved Successfully!");

        }
    
    }

    
    public function show($id)
    {
        //
    }

    
    public function destroy($id)
    {
        $delete = Fq::findOrFail($id);
		
		if($delete->delete()){
			return redirect('fqs')->with('success','Fq Deleted Successfully');
        }
        return redirect('fqs')->with('success','Fq Deleted Successfully');
    
    }



     public function edit($id)
    {
        // $fqid = Crypt::decrypt($id);
        $fq = Fq::where('id',$id)->first();
        $FqCreditcards = FqCreditcards::where('fq_id',$id)->get();
        $Fqbankaccount = Fqbankaccount::where('fq_id',$id)->get();
        $Fqinvestments = Fqinvestments::where('fq_id',$id)->get();
        $Fqdependents = Fqdependents::where('fq_id',$id)->get();
        $Fqlifeinsure = Fqlifeinsure::where('fq_id',$id)->get();
        $Fqestate = Fqestate::where('fq_id',$id)->get();
        $Fqvehical = Fqvehical::where('fq_id',$id)->get();
        $Fqpersonal = Fqpersonal::where('fq_id',$id)->get();
        $Fqbankspouseaccount = Fqbankspouseaccount::where('fq_id',$id)->get();

             return view('fq.edit', compact('fq', 'FqCreditcards', 'Fqbankaccount', 'Fqinvestments', 'Fqdependents', 'Fqlifeinsure', 'Fqestate', 'Fqvehical', 'Fqpersonal', 'Fqbankspouseaccount'));
        }

    

    public function update(Request $request)
    { 
        
        $action = $request->input('submit');

        // Perform actions based on the clicked button
        if ($action === 'function2') {
           
                $validated = $request->validate([
                  "Last_name" => "required",
                  "First_name" => "required",
                  "Date_of_birth" => "required",
                  "SSN#" => "required",
                  "Street_address" => "required",
                  "City" => "required",
                  "State" => "required",
                  "Zip_code" => "required",
                  "Rent_or_own" => "required", 
                  "Driver_license#" => "required",   
                  "Primary_phone_number" => "required",    
                  "Marital_status" => "required",  
                  "Country_of_residence" => "required",  
                  "Do_you_have_any_dependents_EXCLUDING_yourself_and_your_spouse?" => "required",    
                  "Client_employment_status" => "required",  
                  "Cash_on_hand_amount" => "required",  
                  "How_many_bank_accounts_do_you_have" => "required|not_in:0",    
                  "Can_you_take_a_loan_against_your_401k_account" => "required", 
                  "Do_you_have_any_investments?" => "required", 
                  "Do_you_have_any_credi_cards?" => "required",
                  "Do_you_have_life_insurance?" => "required",
                  "Do_you_own_any_real_estate?" => "required",
                  "Do_you_own_a_motor_vehicle?" => "required",
                  "Do_you_have_any_other_personal_assets:" => "required",
                  "Interest/Dividends" => "required",
                  "Net_Self-Employed/Business_Income" => "required",
                  "Net_Rental_Income" => "required",
                  "Distribution" => "required",
                  "Social_Security_Income" => "required",
                  "Alimony_Income" => "required",
                  "Retirement_Income/Pension" => "required",
                  "Other_Income" => "required",
                  "Total_House_Hold_Income" => "required",
                  "Food_Clothing_Misc" => "required",
                  "Rent/Mortgage" => "required",
                  "Utilities" => "required",
                  "Vehicles_Ownership_Costs" => "required",
                  "Vehicles_Operating_Costs" => "required",
                  "Public_Transportation" => "required",
                  "Health_Insurance" => "required",
                  "Out_of_Pocket_Health_Costs" => "required",
                  "Court_Ordered_Payments" => "required",
                  "Child_Care" => "required",
                  "Life_Insurance" => "required",
                  "Taxes" => "required",
                  "Other_Secure_Debts" => "required",
                  "Other_Secure_Debts1" => "required",
                  "TotHouseholdExpense" => "required",
                  "Are_you_the_beneficiary_of_a_trust_estate_or_life_insurance_po" => "required",
                  "Are_you_currently_in_bankruptcy" => "required",
                  "Have_you_been_party_to_a_lawsuit?" => "required",
                  "In_the_past_10_years_have_you_transferred_any_assets_for_less_t" => "required",
                  "In_the_past_3_year_have_you_transferred_any_real_property" => "required",
                  "Print_Full_Name" => "required",
                  "Date" => "required",
                 
                
                  // "Signature" => "required",

                ]);

                $Login_username = Auth::user()->name;
                $Login_email = Auth::user()->email;
                $user_id = Auth::user()->id;


                $data = array(
                      "Last_Name" => $request->input('Last_name'),
                      "First_Name" => $request->input('First_name'),
                      "Date_Of_Birth" => $request->input('Date_of_birth'),
                      "SSN" => $request->input('SSN#'),
                      "Street_Address" => $request->input('Street_address'),
                      "Address_Line_2" => $request->input('Address_line_2'),
                      "City" => $request->input('City'),
                      "State" => $request->input('State'),
                      "Zip_Code" => $request->input('Zip_code'),
                      "County_Of_Residence" => $request->input('Country_of_residence'),
                      "Rent_Or_Own" => $request->input('Rent_or_own'),
                      "Driver_License" => $request->input('Driver_license#'),
                      "Primary_Phone_Number" => $request->input('Primary_phone_number'),
                      "snd_Contact_Phone_Number" => $request->input('2nd_contact_phone_number'),
                      "Marital_Status" => $request->input('Marital_status'),
                      "Married_Filing_Status" => $request->input('Married_Filing_Status'),
                      "Do_you_have_any_dependents_EXCLUDING_yourself_and_your_spouse" => $request->input('Do_you_have_any_dependents_EXCLUDING_yourself_and_your_spouse?'),
                      "How_many_dependents_do_you_have" => $request->input('How_many_dependents_do_you_have'),
                      "Client_Employment_Status" => $request->input('Client_employment_status'),
                      "Cash_on_Hand_Amount" => $request->input('Cash_on_hand_amount'),
                      "How_Many_Bank_Accounts_Do_You_Have" => $request->input('How_many_bank_accounts_do_you_have'),
                      "Can_you_take_a_loan_against_your_401k_Account" => $request->input('Can_you_take_a_loan_against_your_401k_account'),
                      "Do_You_Have_Any_Investments" => $request->input('Do_you_have_any_investments?'),
                      "How_many_Credit_Cards_Do_You_Have" => $request->input('How_many_credit_cards_do_you_have?'),
                      "Do_You_Have_Any_Credit_Cards" => $request->input('Do_you_have_any_credi_cards?'),
                      "How_many_type_of_investments_do_you_have" => $request->input('How_many_type_of_investments_do_you_have?'),
                      "Do_You_Have_Life_Insurance" => $request->input('Do_you_have_life_insurance?'),
                      "How_Many_Life_Insurance_Policy_Do_You_Have" => $request->input('How_many_life_insurance_policy_do_you_have?'),
                      "Do_You_Own_Any_Real_Estate" => $request->input('Do_you_own_any_real_estate?'),
                      "How_Many_Properties_Do_You_Own" => $request->input('How_many_properties_do_you_own?'),
                      "Do_You_Own_A_Motor_Vehicle" => $request->input('Do_you_own_a_motor_vehicle?'),
                      "How_Many_Motor_Vehicles_Do_You_Own" => $request->input('How_many_motor_vehicle_do_you_own?'),
                      "Do_You_Have_Any_Other_Personal_Assets" => $request->input('Do_you_have_any_other_personal_assets:'),
                      "How_Many_Other_Personal_Assets_Do_You_Have" => $request->input('How_many_other_personal_assets_do_you_have?'),
                      "Interest_Dividends" => $request->input('Interest/Dividends'),
                      "Net_Self_Employed_Business_Income" => $request->input('Net_Self-Employed/Business_Income'),
                      "Net_Rental_Income" => $request->input('Net_Rental_Income'),
                      "Distribution" => $request->input('Distribution'),
                      "Social_Security_Income" => $request->input('Social_Security_Income'),
                      "Alimony_Income" => $request->input('Alimony_Income'),
                      "Retirement_Income_Pension" => $request->input('Retirement_Income/Pension'),
                      "Other_Income" => $request->input('Other_Income'),
                      "Total_House_Hold_Income" => $request->input('Total_House_Hold_Income'),
                      "Food_Clothing_Misc" => $request->input('Food_Clothing_Misc'),
                      "Rent_Mortgage" => $request->input('Rent/Mortgage'),
                      "Utilities" => $request->input('Utilities'),
                      "Vehicles_Ownership_Costs" => $request->input('Vehicles_Ownership_Costs'),
                      "Vehicles_Operating_Costs" => $request->input('Vehicles_Operating_Costs'),
                      "Public_Transportation" => $request->input('Public_Transportation'),
                      "Health_Insurance" => $request->input('Health_Insurance'),
                      "Out_of_Pocket_Health_Costs" => $request->input('Out_of_Pocket_Health_Costs'),
                      "Court_Ordered_Payments" => $request->input('Court_Ordered_Payments'),
                      "Child_Care" => $request->input('Child_Care'),
                      "Life_Insurance" => $request->input('Life_Insurance'),
                      "Taxes" => $request->input('Taxes'),
                      "Other_Secure_Debts" => $request->input('Other_Secure_Debts'),
                      "Other_Secure_Debts1" => $request->input('Other_Secure_Debts1'),
                      "TotHousehold_Expense" => $request->input('TotHouseholdExpense'),
                      "Are_you_the_beneficiary_of_a_trust_estate_or_life_insurance_po" => $request->input('Are_you_the_beneficiary_of_a_trust_estate_or_life_insurance_po'),
                      "Are_you_currently_in_bankruptcy" => $request->input('Are_you_currently_in_bankruptcy'),
                      "Discharge_Dismissal_Date" => $request->input('Discharge/Dismissal_Date'),
                      "Have_you_been_party_to_a_lawsuit" => $request->input('Have_you_been_party_to_a_lawsuit?'),
                      "Date_the_lawsuit_was_resolved" => $request->input('Date_the_lawsuit_was_resolved'),
                      "In_the_past_10_years_have_you_transferred_any_assets_for_less_t" => $request->input('In_the_past_10_years_have_you_transferred_any_assets_for_less_t'),
                      "Date_the_asset_was_transferred" => $request->input('Date_the_asset_was_transferred'),
                      "In_the_past_3_year_have_you_transferred_any_real_property" => $request->input('In_the_past_3_year_have_you_transferred_any_real_property'),
                      "List_the_type_of_property_and_date_of_the_transfer" => $request->input('List_the_type_of_property_and_date_of_the_transfer'),
                      "Print_Full_Name" => $request->input('Print_Full_Name'),
                      "Date" => $request->input('Date'),
                      "Signature" => $request->input('Signature'),

                      // spouse info

                      "spouse_first_name" => $request->input('spouse_first_name'),
                      "spouse_last_name" => $request->input('spouse_last_name'),
                      "spouse_Driver_License" => $request->input('spouse_Driver_License'),
                      "spouse_ssn" => $request->input('spouse_ssn'),
                      "spouse_date_of_birth" => $request->input('spouse_date_of_birth'),
                      "spouse_employment_status" => $request->input('spouse_employment_status'),
                      "Spouse_Cash_on_Hand_Amount" => $request->input('Spouse_Cash_on_Hand_Amount'),
                      "How_Many_Bank_Accounts_Spouse_Have" => $request->input('How_Many_Bank_Accounts_Spouse_Have'),
                      "Spouse_Wages" => $request->input('Spouse_Wages'),
                      "Spouse_Social_Security_Income" => $request->input('Spouse_Social_Security_Income'),
                      
                      "Status" => "Completed",
                      "Reference" => uniqid(),
                      "Login_username" => $Login_username,
                      "Login_email" => $Login_email,
                      "user_id" => $user_id,
                );
                


                $fqidold = $request->input('fqid');
                // Fq::where('id',$fqid)->update($data);
                $fqid = Fq::create($data)->id;
                $delete = Fq::findOrFail($fqidold);
                $delete->delete();
                // spouse

                $Bank_Accounts_Spouse = [];
                if($request->input('How_Many_Bank_Accounts_Spouse_Have') && $request->input('How_Many_Bank_Accounts_Spouse_Have') != '0'){

                    $bankaccount_count_sp = $request->input('How_Many_Bank_Accounts_Spouse_Have');

                    
                    $spouse_bank = array();
                    for($i = 1; $i <= $bankaccount_count_sp; $i++) { 
                        if($request->file('bankspouse'.$i)){
                            $image = $request->file('bankspouse'.$i);
                            if($image->isValid()){
                                if(!empty($request->input('bankspouse_old'))){
                                    if(file_exists(public_path('/').'/'.$request->input('bankspouse_old'.$i))){
                                        unlink(public_path('/').'/'.$request->input('bankspouse_old'.$i)); 
                                    }
                                }
                                $extension = $image->getClientOriginalExtension();
                                 $fileName = rand(100,999999).time().'.'.$extension;
                                 $image_path = public_path('upload/fq'); 
                                $tt = 'bankspouse'.$i;
                                $request->$tt->move($image_path, $fileName); 
                                $formInput['bankspouse'] = 'upload/fq/'.$fileName;
                            }
                            unset($formInput['bankspouse_old']);
                        }else{
                            $formInput['bankspouse'] = $request->input('bankspouse_old'.$i);
                        }

                        $data_bankaccount66 = array(
                            "bankspouse" => $formInput['bankspouse'],
                            "fq_id" => $fqid,
                        );

                        $Bank_Accounts_Spouse[] = $data_bankaccount66;
                        Fqbankspouseaccount ::create($data_bankaccount66)->id;

                    
                    }
                    
                }




                $personal_asset_array = [];
                if($request->input('How_many_other_personal_assets_do_you_have?') && $request->input('How_many_other_personal_assets_do_you_have?') != '0'){

                    $dependent_count6 = $request->input('How_many_other_personal_assets_do_you_have?');

                    for($i = 1; $i <= $dependent_count6; $i++) {
                        $data_dependents6 = array(
                            "Description_of_asset" => $request->input('Description_of_asset'.$i),
                            "Date_of_purchase" => $request->input('Date_of_purchase'.$i),
                            "Current_value" => $request->input('Current_value'.$i),
                            "Loan_balance" => $request->input('Loan_balance'.$i),
                            "Name_of_lender" => $request->input('Name_of_lender'.$i),
                            "Date_of_final_payment" => $request->input('Date_of_final_payment'.$i),
                            "fq_id" => $fqid,
                        );

                        $personal_asset_array[] = $data_dependents6;
                        Fqpersonal ::create($data_dependents6)->id;
                    }
                    
                }


                $vehicle_array = [];
                if($request->input('How_many_motor_vehicle_do_you_own?') && $request->input('How_many_motor_vehicle_do_you_own?') != '0'){

                    $dependent_count5 = $request->input('How_many_motor_vehicle_do_you_own?');

                    for($i = 1; $i <= $dependent_count5; $i++) {
                        if($request->file('vehicleup'.$i)){
                            $image = $request->file('vehicleup'.$i);
                            if($image->isValid()){
                                if(!empty($request->input('vehicleup_old'))){
                                    if(file_exists(public_path('/').'/'.$request->input('vehicleup_old'.$i))){
                                        unlink(public_path('/').'/'.$request->input('vehicleup_old'.$i)); 
                                    }
                                }
                                $extension = $image->getClientOriginalExtension();
                                 $fileName = rand(100,999999).time().'.'.$extension;
                                 $image_path = public_path('upload/fq'); 
                                $tt = 'vehicleup'.$i;
                                $request->$tt->move($image_path, $fileName); 
                                $formInput['vehicleup'] = 'upload/fq/'.$fileName;
                            }
                            unset($formInput['vehicleup_old']);
                        }else{
                            $formInput['vehicleup'] = $request->input('vehicleup_old'.$i);
                        }

                        $data_dependents5 = array(
                            "Make_and_model" => $request->input('Make_and_model'.$i),
                            "Year" => $request->input('Year'.$i),
                            "Mileage" => $request->input('Mileage'.$i),
                            "Lease_or_own" => $request->input('Lease_or_own'.$i),
                            "Date_of_purchased" => $request->input('Date_of_purchased'.$i),
                            "Date_of_final_payment" => $request->input('Date_of_final_payment'.$i),
                            "Current_value" => $request->input('Current_value'.$i),
                            "Current_loan_value" => $request->input('Current_loan_value'.$i),
                            "Monthly_payment" => $request->input('Monthly_payment'.$i),
                            "Name_of_lender" => $request->input('Name_of_lender'.$i),
                            "Is_vehicle_1_financed_or_leased" => $request->input('Is_vehicle_1_financed_or_leased?'.$i),
                            "vehicleup" => $formInput['vehicleup'],
                            "fq_id" => $fqid,
                        );

                        $vehicle_array[] = $data_dependents5;
                        Fqvehical ::create($data_dependents5)->id;
                    }
                    
                }


                $property_array = [];
                if($request->input('How_many_properties_do_you_own?') && $request->input('How_many_properties_do_you_own?') != '0'){

                    $dependent_count4 = $request->input('How_many_properties_do_you_own?');

                    for($i = 1; $i <= $dependent_count4; $i++) {
                        if($request->file('property_document'.$i)){
                            $image = $request->file('property_document'.$i);
                            if($image->isValid()){
                                if(!empty($request->input('property_document_old'))){
                                    if(file_exists(public_path('/').'/'.$request->input('property_document_old'.$i))){
                                        unlink(public_path('/').'/'.$request->input('property_document_old'.$i)); 
                                    }
                                }
                                $extension = $image->getClientOriginalExtension();
                                 $fileName = rand(100,999999).time().'.'.$extension;
                                 $image_path = public_path('upload/fq'); 
                                $tt = 'property_document'.$i;
                                $request->$tt->move($image_path, $fileName); 
                                $formInput['property_document'] = 'upload/fq/'.$fileName;
                            }
                            unset($formInput['property_document_old']);
                        }else{
                            $formInput['property_document'] = $request->input('property_document_old'.$i);
                        }

                        $data_dependents4 = array(
                            "Property_address" => $request->input('Property_address'.$i),
                            "Country" => $request->input('Country'.$i),
                            "Mortgage_lender" => $request->input('Mortgage_lender'.$i),
                            "Purchase_date" => $request->input('Purchase_date'.$i),
                            "Fair_market_value" => $request->input('Fair_market_value'.$i),
                            "Loan_balance" => $request->input('Loan_balance'.$i),
                            "Monthly_payment" => $request->input('Monthly_payment'.$i),
                            "Date_of_final" => $request->input('Date_of_final'.$i),
                            "Monthly_property_tax" => $request->input('Monthly_property_tax'.$i),
                            "How_is_title_held" => $request->input('How_is_title_held'.$i),
                            "property_document" => $formInput['property_document'],
                            "fq_id" => $fqid,
                        );

                        $property_array[] = $data_dependents4;
                        Fqestate ::create($data_dependents4)->id;
                    }
                    
                }


                $insurance_array = [];
                if($request->input('How_many_life_insurance_policy_do_you_have?') && $request->input('How_many_life_insurance_policy_do_you_have?') != '0'){

                    $dependent_count3 = $request->input('How_many_life_insurance_policy_do_you_have?');

                    for($i = 1; $i <= $dependent_count3; $i++) {
                        if($request->file('lifeinsure'.$i)){
                            $image = $request->file('lifeinsure'.$i);
                            if($image->isValid()){
                                if(!empty($request->input('lifeinsure_old'))){
                                    if(file_exists(public_path('/').'/'.$request->input('lifeinsure_old'.$i))){
                                        unlink(public_path('/').'/'.$request->input('lifeinsure_old'.$i)); 
                                    }
                                }
                                $extension = $image->getClientOriginalExtension();
                                 $fileName = rand(100,999999).time().'.'.$extension;
                                 $image_path = public_path('upload/fq'); 
                                $tt = 'lifeinsure'.$i;
                                $request->$tt->move($image_path, $fileName); 
                                $formInput['lifeinsure'] = 'upload/fq/'.$fileName;
                            }
                            unset($formInput['lifeinsure_old']);
                        }else{
                            $formInput['lifeinsure'] = $request->input('lifeinsure_old'.$i);
                        }

                        $data_dependents3 = array(
                            "Policy_number" => $request->input('Policy_number'.$i),
                            "Owner_of_policy" => $request->input('Owner_of_policy'.$i),
                            "Current_cash_value" => $request->input('Current_cash_value'.$i),
                            "Outstanding_loan_balance" => $request->input('Outstanding_loan_balance'.$i),
                            "policy_document" => $formInput['lifeinsure'],
                            "fq_id" => $fqid,
                        );

                        $insurance_array[] = $data_dependents3;
                        Fqlifeinsure ::create($data_dependents3)->id;
                    }
                    
                }


                $all_dependents = [];
                if($request->input('How_many_dependents_do_you_have') && $request->input('How_many_dependents_do_you_have') != '0'){

                    $dependent_count = $request->input('How_many_dependents_do_you_have');

                     
                    for($i = 1; $i <= $dependent_count; $i++) {
                        $data_dependents = array(
                            "Name" => $request->input('dependent_name'.$i),
                            "Date_Of_Birth" => $request->input('dependent_date_of_birth'.$i),
                            "SSN" => $request->input('dependent_ssn'.$i),
                            "Relationship" => $request->input('dependent_relationship'.$i),
                            "fq_id" => $fqid,
                        );

                        $all_dependents[] = $data_dependents;

                        Fqdependents ::create($data_dependents)->id;
                    }
                    
                }

                $investments_array = [];
                if($request->input('How_many_type_of_investments_do_you_have?') && $request->input('How_many_type_of_investments_do_you_have?') != '0'){

                    $dependent_count1 = $request->input('How_many_type_of_investments_do_you_have?');

                    for($i = 1; $i <= $dependent_count1; $i++) {
                        $data_dependents1 = array(
                            "Type_of_investment" => $request->input('Type_of_investment'.$i),
                            "Company_name" => $request->input('Company_name'.$i),
                            "Current_value" => $request->input('Current_value'.$i),
                            "Balance" => $request->input('Balance'.$i),
                            "Payment" => $request->input('Payment'.$i),
                            "fq_id" => $fqid,
                        );

                        $investments_array[] = $data_dependents1;
                        Fqinvestments ::create($data_dependents1)->id;
                    }
                    
                }


                $bank_array = array();

                if($request->input('How_many_bank_accounts_do_you_have') && $request->input('How_many_bank_accounts_do_you_have') != '0'){

                    $bankaccount_count = $request->input('How_many_bank_accounts_do_you_have');

                
                    for($i = 1; $i <= $bankaccount_count; $i++) { 
                        if($request->file('bank'.$i)){
                            $image = $request->file('bank'.$i);
                            if($image->isValid()){
                                if(!empty($request->input('bank_old'))){
                                    if(file_exists(public_path('/').'/'.$request->input('bank_old'.$i))){
                                        unlink(public_path('/').'/'.$request->input('bank_old'.$i)); 
                                    }
                                }
                                $extension = $image->getClientOriginalExtension();
                                 $fileName = rand(100,999999).time().'.'.$extension;
                                 $image_path = public_path('upload/fq'); 
                                $tt = 'bank'.$i;
                                $request->$tt->move($image_path, $fileName); 
                                $formInput['bank'] = 'upload/fq/'.$fileName;
                            }
                            unset($formInput['bank_old']);
                        }else{
                            $formInput['bank'] = $request->input('bank_old'.$i);
                        }

                        $data_bankaccount = array(
                            "bank" => $formInput['bank'],
                            "fq_id" => $fqid,
                        );

                        $bank_array[] = $data_bankaccount;
                        Fqbankaccount ::create($data_bankaccount)->id;
  
                    }
                    
                }


                $credit_card_array = [];
                if($request->input('How_many_credit_cards_do_you_have?') && $request->input('How_many_credit_cards_do_you_have?') != '0'){

                    $ccard_count = $request->input('How_many_credit_cards_do_you_have?');

                    

                    for($i = 1; $i <= $ccard_count; $i++) { 
                        if($request->file('Credcards'.$i)){
                            $image = $request->file('Credcards'.$i);
                            if($image->isValid()){
                                if(!empty($request->input('Credcards_old'))){
                                    if(file_exists(public_path('/').'/'.$request->input('Credcards_old'.$i))){
                                        unlink(public_path('/').'/'.$request->input('Credcards_old'.$i)); 
                                    }
                                }
                                $extension = $image->getClientOriginalExtension();
                                 $fileName = rand(100,999999).time().'.'.$extension;
                                 $image_path = public_path('upload/fq'); 
                                $tt = 'Credcards'.$i;
                                $request->$tt->move($image_path, $fileName); 
                                $formInput['Credcards'] = 'upload/fq/'.$fileName;
                            }
                            unset($formInput['Credcards_old']);
                        }else{
                            $formInput['Credcards'] = $request->input('Credcards_old'.$i);
                        }

                        $data_bankaccount9 = array(
                            "Creditcards" => $formInput['Credcards'],
                            "fq_id" => $fqid,
                        );

                        $credit_card_array[] = $data_bankaccount9;
                        FqCreditcards ::create($data_bankaccount9)->id;
                    }
                    
                }
                

                $FullName = $request->input('First_name')." ".$request->input('Last_name');

                $caseID = Auth::user()->case_id;
                $name = Auth::user()->name;
                $email = Auth::user()->email;
                $filename =  $name.'_fqform.pdf';
                $ip = $_SERVER['REMOTE_ADDR'];  

                $fqdataall = Fq::where('id', $fqid)->first();

                $data['ip'] = $ip;
                $data['signature'] = $name;
                $data['last_update'] = $fqdataall->updated_at;
                $data['start_time'] = $fqdataall->created_at;
                $data['finish_time'] =  date("Y-m-d H:i:s");
                $data['browse'] = $request->input('browser');
                $data['device'] = $request->input('device');



                $view = \View::make('fq_doc', [
                    'maindata' => $data,
                    'dependent_array' => $all_dependents,
                    'banks_array' => $bank_array,
                    'Bank_Accounts_Spouse' => $Bank_Accounts_Spouse,
                    'vehicle_array' => $vehicle_array,
                    'property_array' => $property_array,
                    'life_insurance_array' => $insurance_array,
                    'investment_array' => $investments_array,
                    'credit_card_array' => $credit_card_array,
                    'personal_asset_array' => $personal_asset_array,
                    
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

                $filename1 =  $name.'_signauthfqform.pdf';

                $dataauth['ip'] = $ip;
                $dataauth['signature'] = $name;
                $dataauth['name'] = $name;
                $dataauth['email'] = $email;
                $dataauth['timestamp'] = date("H:i:s");
                $dataauth['signed_date'] =  date("Y-m-d");


                $view = \View::make('fqauth_doc', [
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
                
                return redirect('fqs')->with('success',"Fq Updated Successfully!");


        } elseif ($action === 'function1') {
           
        // store fq start

                $Login_username = Auth::user()->name;
                $Login_email = Auth::user()->email;
                $user_id = Auth::user()->id;


                $data = array(
                      "Last_Name" => $request->input('Last_name'),
                      "First_Name" => $request->input('First_name'),
                      "Date_Of_Birth" => $request->input('Date_of_birth'),
                      "SSN" => $request->input('SSN#'),
                      "Street_Address" => $request->input('Street_address'),
                      "Address_Line_2" => $request->input('Address_line_2'),
                      "City" => $request->input('City'),
                      "State" => $request->input('State'),
                      "Zip_Code" => $request->input('Zip_code'),
                      "County_Of_Residence" => $request->input('Country_of_residence'),
                      "Rent_Or_Own" => $request->input('Rent_or_own'),
                      "Driver_License" => $request->input('Driver_license#'),
                      "Primary_Phone_Number" => $request->input('Primary_phone_number'),
                      "snd_Contact_Phone_Number" => $request->input('2nd_contact_phone_number'),
                      "Marital_Status" => $request->input('Marital_status'),
                      "Married_Filing_Status" => $request->input('Married_Filing_Status'),
                      "Do_you_have_any_dependents_EXCLUDING_yourself_and_your_spouse" => $request->input('Do_you_have_any_dependents_EXCLUDING_yourself_and_your_spouse?'),
                      "How_many_dependents_do_you_have" => $request->input('How_many_dependents_do_you_have'),
                      "Client_Employment_Status" => $request->input('Client_employment_status'),
                      "Cash_on_Hand_Amount" => $request->input('Cash_on_hand_amount'),
                      "How_Many_Bank_Accounts_Do_You_Have" => $request->input('How_many_bank_accounts_do_you_have'),
                      "Can_you_take_a_loan_against_your_401k_Account" => $request->input('Can_you_take_a_loan_against_your_401k_account'),
                      "Do_You_Have_Any_Investments" => $request->input('Do_you_have_any_investments?'),
                      "How_many_Credit_Cards_Do_You_Have" => $request->input('How_many_credit_cards_do_you_have?'),
                      "Do_You_Have_Any_Credit_Cards" => $request->input('Do_you_have_any_credi_cards?'),
                      "How_many_type_of_investments_do_you_have" => $request->input('How_many_type_of_investments_do_you_have?'),
                      "Do_You_Have_Life_Insurance" => $request->input('Do_you_have_life_insurance?'),
                      "How_Many_Life_Insurance_Policy_Do_You_Have" => $request->input('How_many_life_insurance_policy_do_you_have?'),
                      "Do_You_Own_Any_Real_Estate" => $request->input('Do_you_own_any_real_estate?'),
                      "How_Many_Properties_Do_You_Own" => $request->input('How_many_properties_do_you_own?'),
                      "Do_You_Own_A_Motor_Vehicle" => $request->input('Do_you_own_a_motor_vehicle?'),
                      "How_Many_Motor_Vehicles_Do_You_Own" => $request->input('How_many_motor_vehicle_do_you_own?'),
                      "Do_You_Have_Any_Other_Personal_Assets" => $request->input('Do_you_have_any_other_personal_assets:'),
                      "How_Many_Other_Personal_Assets_Do_You_Have" => $request->input('How_many_other_personal_assets_do_you_have?'),
                      "Interest_Dividends" => $request->input('Interest/Dividends'),
                      "Net_Self_Employed_Business_Income" => $request->input('Net_Self-Employed/Business_Income'),
                      "Net_Rental_Income" => $request->input('Net_Rental_Income'),
                      "Distribution" => $request->input('Distribution'),
                      "Social_Security_Income" => $request->input('Social_Security_Income'),
                      "Alimony_Income" => $request->input('Alimony_Income'),
                      "Retirement_Income_Pension" => $request->input('Retirement_Income/Pension'),
                      "Other_Income" => $request->input('Other_Income'),
                      "Total_House_Hold_Income" => $request->input('Total_House_Hold_Income'),
                      "Food_Clothing_Misc" => $request->input('Food_Clothing_Misc'),
                      "Rent_Mortgage" => $request->input('Rent/Mortgage'),
                      "Utilities" => $request->input('Utilities'),
                      "Vehicles_Ownership_Costs" => $request->input('Vehicles_Ownership_Costs'),
                      "Vehicles_Operating_Costs" => $request->input('Vehicles_Operating_Costs'),
                      "Public_Transportation" => $request->input('Public_Transportation'),
                      "Health_Insurance" => $request->input('Health_Insurance'),
                      "Out_of_Pocket_Health_Costs" => $request->input('Out_of_Pocket_Health_Costs'),
                      "Court_Ordered_Payments" => $request->input('Court_Ordered_Payments'),
                      "Child_Care" => $request->input('Child_Care'),
                      "Life_Insurance" => $request->input('Life_Insurance'),
                      "Taxes" => $request->input('Taxes'),
                      "Other_Secure_Debts" => $request->input('Other_Secure_Debts'),
                      "Other_Secure_Debts1" => $request->input('Other_Secure_Debts1'),
                      "TotHousehold_Expense" => $request->input('TotHouseholdExpense'),
                      "Are_you_the_beneficiary_of_a_trust_estate_or_life_insurance_po" => $request->input('Are_you_the_beneficiary_of_a_trust_estate_or_life_insurance_po'),
                      "Are_you_currently_in_bankruptcy" => $request->input('Are_you_currently_in_bankruptcy'),
                      "Discharge_Dismissal_Date" => $request->input('Discharge/Dismissal_Date'),
                      "Have_you_been_party_to_a_lawsuit" => $request->input('Have_you_been_party_to_a_lawsuit?'),
                      "Date_the_lawsuit_was_resolved" => $request->input('Date_the_lawsuit_was_resolved'),
                      "In_the_past_10_years_have_you_transferred_any_assets_for_less_t" => $request->input('In_the_past_10_years_have_you_transferred_any_assets_for_less_t'),
                      "Date_the_asset_was_transferred" => $request->input('Date_the_asset_was_transferred'),
                      "In_the_past_3_year_have_you_transferred_any_real_property" => $request->input('In_the_past_3_year_have_you_transferred_any_real_property'),
                      "List_the_type_of_property_and_date_of_the_transfer" => $request->input('List_the_type_of_property_and_date_of_the_transfer'),
                      "Print_Full_Name" => $request->input('Print_Full_Name'),
                      "Date" => $request->input('Date'),
                      "Signature" => $request->input('Signature'),

                      // spouse info

                      "spouse_first_name" => $request->input('spouse_first_name'),
                      "spouse_last_name" => $request->input('spouse_last_name'),
                      "spouse_Driver_License" => $request->input('spouse_Driver_License'),
                      "spouse_ssn" => $request->input('spouse_ssn'),
                      "spouse_date_of_birth" => $request->input('spouse_date_of_birth'),
                      "spouse_employment_status" => $request->input('spouse_employment_status'),
                      "Spouse_Cash_on_Hand_Amount" => $request->input('Spouse_Cash_on_Hand_Amount'),
                      "How_Many_Bank_Accounts_Spouse_Have" => $request->input('How_Many_Bank_Accounts_Spouse_Have'),
                      "Spouse_Wages" => $request->input('Spouse_Wages'),
                      "Spouse_Social_Security_Income" => $request->input('Spouse_Social_Security_Income'),
                      
                       "Status" => "inprogress",
                      "Reference" => uniqid(),
                      "Login_username" => $Login_username,
                      "Login_email" => $Login_email,
                      "user_id" => $user_id,
                );
                



                $fqidold = $request->input('fqid');
                // Fq::where('id',$fqid)->update($data);
                $fqid = Fq::create($data)->id;

                $delete = Fq::findOrFail($fqidold);
                $delete->delete();

                // spouse

                $Bank_Accounts_Spouse = [];
                if($request->input('How_Many_Bank_Accounts_Spouse_Have') && $request->input('How_Many_Bank_Accounts_Spouse_Have') != '0'){

                    $bankaccount_count_sp = $request->input('How_Many_Bank_Accounts_Spouse_Have');

                    
                    $spouse_bank = array();
                    for($i = 1; $i <= $bankaccount_count_sp; $i++) { 
                        if($request->file('bankspouse'.$i)){
                            $image = $request->file('bankspouse'.$i);
                            if($image->isValid()){
                                if(!empty($request->input('bankspouse_old'))){
                                    if(file_exists(public_path('/').'/'.$request->input('bankspouse_old'.$i))){
                                        unlink(public_path('/').'/'.$request->input('bankspouse_old'.$i)); 
                                    }
                                }
                                $extension = $image->getClientOriginalExtension();
                                 $fileName = rand(100,999999).time().'.'.$extension;
                                 $image_path = public_path('upload/fq'); 
                                $tt = 'bankspouse'.$i;
                                $request->$tt->move($image_path, $fileName); 
                                $formInput['bankspouse'] = 'upload/fq/'.$fileName;
                            }
                            unset($formInput['bankspouse_old']);
                        }else{
                            $formInput['bankspouse'] = $request->input('bankspouse_old'.$i);
                        }

                        $data_bankaccount66 = array(
                            "bankspouse" => $formInput['bankspouse'],
                            "fq_id" => $fqid,
                        );

                        $Bank_Accounts_Spouse[] = $data_bankaccount66;
                        Fqbankspouseaccount ::create($data_bankaccount66)->id;

                    
                    }
                    
                }




                $personal_asset_array = [];
                if($request->input('How_many_other_personal_assets_do_you_have?') && $request->input('How_many_other_personal_assets_do_you_have?') != '0'){

                    $dependent_count6 = $request->input('How_many_other_personal_assets_do_you_have?');

                    for($i = 1; $i <= $dependent_count6; $i++) {
                        $data_dependents6 = array(
                            "Description_of_asset" => $request->input('Description_of_asset'.$i),
                            "Date_of_purchase" => $request->input('Date_of_purchase'.$i),
                            "Current_value" => $request->input('Current_value'.$i),
                            "Loan_balance" => $request->input('Loan_balance'.$i),
                            "Name_of_lender" => $request->input('Name_of_lender'.$i),
                            "Date_of_final_payment" => $request->input('Date_of_final_payment'.$i),
                            "fq_id" => $fqid,
                        );

                        $personal_asset_array[] = $data_dependents6;
                        Fqpersonal ::create($data_dependents6)->id;
                    }
                    
                }


                $vehicle_array = [];
                if($request->input('How_many_motor_vehicle_do_you_own?') && $request->input('How_many_motor_vehicle_do_you_own?') != '0'){

                    $dependent_count5 = $request->input('How_many_motor_vehicle_do_you_own?');

                    for($i = 1; $i <= $dependent_count5; $i++) {
                        if($request->file('vehicleup'.$i)){
                            $image = $request->file('vehicleup'.$i);
                            if($image->isValid()){
                                if(!empty($request->input('vehicleup_old'))){
                                    if(file_exists(public_path('/').'/'.$request->input('vehicleup_old'.$i))){
                                        unlink(public_path('/').'/'.$request->input('vehicleup_old'.$i)); 
                                    }
                                }
                                $extension = $image->getClientOriginalExtension();
                                 $fileName = rand(100,999999).time().'.'.$extension;
                                 $image_path = public_path('upload/fq'); 
                                $tt = 'vehicleup'.$i;
                                $request->$tt->move($image_path, $fileName); 
                                $formInput['vehicleup'] = 'upload/fq/'.$fileName;
                            }
                            unset($formInput['vehicleup_old']);
                        }else{
                            $formInput['vehicleup'] = $request->input('vehicleup_old'.$i);
                        }

                        $data_dependents5 = array(
                            "Make_and_model" => $request->input('Make_and_model'.$i),
                            "Year" => $request->input('Year'.$i),
                            "Mileage" => $request->input('Mileage'.$i),
                            "Lease_or_own" => $request->input('Lease_or_own'.$i),
                            "Date_of_purchased" => $request->input('Date_of_purchased'.$i),
                            "Date_of_final_payment" => $request->input('Date_of_final_payment'.$i),
                            "Current_value" => $request->input('Current_value'.$i),
                            "Current_loan_value" => $request->input('Current_loan_value'.$i),
                            "Monthly_payment" => $request->input('Monthly_payment'.$i),
                            "Name_of_lender" => $request->input('Name_of_lender'.$i),
                            "Is_vehicle_1_financed_or_leased" => $request->input('Is_vehicle_1_financed_or_leased?'.$i),
                            "vehicleup" => $formInput['vehicleup'],
                            "fq_id" => $fqid,
                        );

                        $vehicle_array[] = $data_dependents5;
                        Fqvehical ::create($data_dependents5)->id;
                    }
                    
                }


                $property_array = [];
                if($request->input('How_many_properties_do_you_own?') && $request->input('How_many_properties_do_you_own?') != '0'){

                    $dependent_count4 = $request->input('How_many_properties_do_you_own?');

                    for($i = 1; $i <= $dependent_count4; $i++) {
                        if($request->file('property_document'.$i)){
                            $image = $request->file('property_document'.$i);
                            if($image->isValid()){
                                if(!empty($request->input('property_document_old'))){
                                    if(file_exists(public_path('/').'/'.$request->input('property_document_old'.$i))){
                                        unlink(public_path('/').'/'.$request->input('property_document_old'.$i)); 
                                    }
                                }
                                $extension = $image->getClientOriginalExtension();
                                 $fileName = rand(100,999999).time().'.'.$extension;
                                 $image_path = public_path('upload/fq'); 
                                $tt = 'property_document'.$i;
                                $request->$tt->move($image_path, $fileName); 
                                $formInput['property_document'] = 'upload/fq/'.$fileName;
                            }
                            unset($formInput['property_document_old']);
                        }else{
                            $formInput['property_document'] = $request->input('property_document_old'.$i);
                        }

                        $data_dependents4 = array(
                            "Property_address" => $request->input('Property_address'.$i),
                            "Country" => $request->input('Country'.$i),
                            "Mortgage_lender" => $request->input('Mortgage_lender'.$i),
                            "Purchase_date" => $request->input('Purchase_date'.$i),
                            "Fair_market_value" => $request->input('Fair_market_value'.$i),
                            "Loan_balance" => $request->input('Loan_balance'.$i),
                            "Monthly_payment" => $request->input('Monthly_payment'.$i),
                            "Date_of_final" => $request->input('Date_of_final'.$i),
                            "Monthly_property_tax" => $request->input('Monthly_property_tax'.$i),
                            "How_is_title_held" => $request->input('How_is_title_held'.$i),
                            "property_document" => $formInput['property_document'],
                            "fq_id" => $fqid,
                        );

                        $property_array[] = $data_dependents4;
                        Fqestate ::create($data_dependents4)->id;
                    }
                    
                }


                $insurance_array = [];
                if($request->input('How_many_life_insurance_policy_do_you_have?') && $request->input('How_many_life_insurance_policy_do_you_have?') != '0'){

                    $dependent_count3 = $request->input('How_many_life_insurance_policy_do_you_have?');

                    for($i = 1; $i <= $dependent_count3; $i++) {
                        if($request->file('lifeinsure'.$i)){
                            $image = $request->file('lifeinsure'.$i);
                            if($image->isValid()){
                                if(!empty($request->input('lifeinsure_old'))){
                                    if(file_exists(public_path('/').'/'.$request->input('lifeinsure_old'.$i))){
                                        unlink(public_path('/').'/'.$request->input('lifeinsure_old'.$i)); 
                                    }
                                }
                                $extension = $image->getClientOriginalExtension();
                                 $fileName = rand(100,999999).time().'.'.$extension;
                                 $image_path = public_path('upload/fq'); 
                                $tt = 'lifeinsure'.$i;
                                $request->$tt->move($image_path, $fileName); 
                                $formInput['lifeinsure'] = 'upload/fq/'.$fileName;
                            }
                            unset($formInput['lifeinsure_old']);
                        }else{
                            $formInput['lifeinsure'] = $request->input('lifeinsure_old'.$i);
                        }

                        $data_dependents3 = array(
                            "Policy_number" => $request->input('Policy_number'.$i),
                            "Owner_of_policy" => $request->input('Owner_of_policy'.$i),
                            "Current_cash_value" => $request->input('Current_cash_value'.$i),
                            "Outstanding_loan_balance" => $request->input('Outstanding_loan_balance'.$i),
                            "policy_document" => $formInput['lifeinsure'],
                            "fq_id" => $fqid,
                        );

                        $insurance_array[] = $data_dependents3;
                        Fqlifeinsure ::create($data_dependents3)->id;
                    }
                    
                }


                $all_dependents = [];
                if($request->input('How_many_dependents_do_you_have') && $request->input('How_many_dependents_do_you_have') != '0'){

                    $dependent_count = $request->input('How_many_dependents_do_you_have');

                     
                    for($i = 1; $i <= $dependent_count; $i++) {
                        $data_dependents = array(
                            "Name" => $request->input('dependent_name'.$i),
                            "Date_Of_Birth" => $request->input('dependent_date_of_birth'.$i),
                            "SSN" => $request->input('dependent_ssn'.$i),
                            "Relationship" => $request->input('dependent_relationship'.$i),
                            "fq_id" => $fqid,
                        );

                        $all_dependents[] = $data_dependents;

                        Fqdependents ::create($data_dependents)->id;
                    }
                    
                }

                $investments_array = [];
                if($request->input('How_many_type_of_investments_do_you_have?') && $request->input('How_many_type_of_investments_do_you_have?') != '0'){

                    $dependent_count1 = $request->input('How_many_type_of_investments_do_you_have?');

                    for($i = 1; $i <= $dependent_count1; $i++) {
                        $data_dependents1 = array(
                            "Type_of_investment" => $request->input('Type_of_investment'.$i),
                            "Company_name" => $request->input('Company_name'.$i),
                            "Current_value" => $request->input('Current_value'.$i),
                            "Balance" => $request->input('Balance'.$i),
                            "Payment" => $request->input('Payment'.$i),
                            "fq_id" => $fqid,
                        );

                        $investments_array[] = $data_dependents1;
                        Fqinvestments ::create($data_dependents1)->id;
                    }
                    
                }


                $bank_array = array();

                if($request->input('How_many_bank_accounts_do_you_have') && $request->input('How_many_bank_accounts_do_you_have') != '0'){

                    $bankaccount_count = $request->input('How_many_bank_accounts_do_you_have');

                
                    for($i = 1; $i <= $bankaccount_count; $i++) { 
                        if($request->file('bank'.$i)){
                            $image = $request->file('bank'.$i);
                            if($image->isValid()){
                                if(!empty($request->input('bank_old'))){
                                    if(file_exists(public_path('/').'/'.$request->input('bank_old'.$i))){
                                        unlink(public_path('/').'/'.$request->input('bank_old'.$i)); 
                                    }
                                }
                                $extension = $image->getClientOriginalExtension();
                                 $fileName = rand(100,999999).time().'.'.$extension;
                                 $image_path = public_path('upload/fq'); 
                                $tt = 'bank'.$i;
                                $request->$tt->move($image_path, $fileName); 
                                $formInput['bank'] = 'upload/fq/'.$fileName;
                            }
                            unset($formInput['bank_old']);
                        }else{
                            $formInput['bank'] = $request->input('bank_old'.$i);
                        }

                        $data_bankaccount = array(
                            "bank" => $formInput['bank'],
                            "fq_id" => $fqid,
                        );

                        $bank_array[] = $data_bankaccount;
                        Fqbankaccount ::create($data_bankaccount)->id;
  
                    }
                    
                }


                $credit_card_array = [];
                if($request->input('How_many_credit_cards_do_you_have?') && $request->input('How_many_credit_cards_do_you_have?') != '0'){

                    $ccard_count = $request->input('How_many_credit_cards_do_you_have?');

                    

                    for($i = 1; $i <= $ccard_count; $i++) { 
                        if($request->file('Credcards'.$i)){
                            $image = $request->file('Credcards'.$i);
                            if($image->isValid()){
                                if(!empty($request->input('Credcards_old'))){
                                    if(file_exists(public_path('/').'/'.$request->input('Credcards_old'.$i))){
                                        unlink(public_path('/').'/'.$request->input('Credcards_old'.$i)); 
                                    }
                                }
                                $extension = $image->getClientOriginalExtension();
                                 $fileName = rand(100,999999).time().'.'.$extension;
                                 $image_path = public_path('upload/fq'); 
                                $tt = 'Credcards'.$i;
                                $request->$tt->move($image_path, $fileName); 
                                $formInput['Credcards'] = 'upload/fq/'.$fileName;
                            }
                            unset($formInput['Credcards_old']);
                        }else{
                            $formInput['Credcards'] = $request->input('Credcards_old'.$i);
                        }

                        $data_bankaccount9 = array(
                            "Creditcards" => $formInput['Credcards'],
                            "fq_id" => $fqid,
                        );

                        $credit_card_array[] = $data_bankaccount9;
                        FqCreditcards ::create($data_bankaccount9)->id;
                    }
                    
                }

               
            
                return redirect('fqs')->with('success',"Fq Updated Successfully!");
           

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

