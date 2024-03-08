<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <title>Financial Questionnaire</title>
    <meta name="description" content="printdocument">
    <style>
    body {
        margin: 0;
        font-family: 'Open Sans', sans-serif;
    }

    a:hover {
        text-decoration: underline !important;
    }

    .container {
        /*max-width: 670px;*/
        margin: 0 auto;
        padding: 20px;
    }

    .content {
       /* max-width: 670px;*/
        background: #fff;
        border-radius: 3px;
        box-shadow: 0 6px 18px 0 rgba(0, 0, 0, .06);
        padding: 20px;
    }

    h1 {
        color: #1e1e2d;
        font-weight: 400;
        margin: 0;
        font-size: 22px;
        font-family: 'Rubik', sans-serif;
        text-align: center;
    }

    td.value {
        padding: 10px;
        border-bottom: 1px solid #ededed;
        color: #000;
        font-weight: 400;
        text-align: left;
        vertical-align: middle;
        height: 26px;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }

    th,
    td {
        padding: 10px;
        border-bottom: 1px solid #ededed;
        color: #000;
        font-weight: 600;
        text-align: left;
        vertical-align: middle;
        height: 26px;
        width:50%;
    }

    .signature {
        width: 90%;
    }

    .email {
        text-decoration: none;
        /* color: #000; */
    }

    
    </style>
</head>

<body>
    <div class="container">
        <div class="content">
            <h1>Financial Questionnaire</h1> 
            <span class="divider"></span>
            <table>
                <tbody>
                    <!-- :: tr01 refrence no.-->
                    @if(!empty($maindata['Reference'] ))
                    <tr>
                        <td class="field">Reference #</td>
                        <td class="value">{!! $maindata['Reference'] !!}</td>
                    </tr>
                    @endif

                    @if(!empty($maindata['Status'] ))
                    <!-- :: tr02 status-->
                    <tr>
                        <td class="field">Status</td>
                        <td class="value">{!! $maindata['Status'] !!}</td>
                    </tr>
                    @endif

                    @if(!empty($maindata['Login_username'] ))
                    <!-- :: tr03 login username-->
                    <tr>
                        <td class="field">Login Username</td>
                        <td class="value"><a href="mailto:info@clearstarttax.com"
                                class="email">{!! $maindata['Login_username'] !!}</a></td>
                    </tr>
                    @endif

                    @if(!empty($maindata['Login_email'] ))
                    <!-- :: tr04 login email-->
                    <tr>
                        <td class="field">Login Email</td>
                        <td class="value"><a href="mailto:info@clearstarttax.com"
                                class="email">{!! $maindata['Login_email'] !!}</a></td>
                    </tr>
                    @endif

                    @if(!empty($maindata['Last_Name'] ))
                    <!-- :: tr05 Last Name-->
                    <tr>
                        <td class="field">Last Name</td>
                        <td class="value">{!! $maindata['Last_Name'] !!}</td>
                    </tr>
                    @endif

                    @if(!empty($maindata['First_Name'] ))
                    <!-- :: tr6 login First Name -->
                    <tr>
                        <td class="field">First Name</td>
                        <td class="value">{!! $maindata['First_Name'] !!}</td>
                    </tr>
                    @endif

                    @if(!empty($maindata['Marital_Status'] ))
                    <!-- :: tr7 login  Marital Status -->
                    <tr>
                        <td class="field"> Marital Status</td>
                        <td class="value">{!! $maindata['Marital_Status'] !!}</td>
                    </tr>
                    @endif

                    @if(!empty($maindata['Date_Of_Birth'] ))
                    <!-- :: tr8  Date Of Birth -->
                    <tr>
                        <td class="field">Date Of Birth</td>
                        <td class="value">{!! $maindata['Date_Of_Birth'] !!}</td>
                    </tr>
                    @endif

                    @if(!empty($maindata['SSN'] ))
                    <!-- :: tr9 SSN# -->
                    <tr>
                        <td class="field">SSN#</td>
                        <td class="value">{!! $maindata['SSN'] !!}</td>
                    </tr>
                    @endif

                    @if(!empty($maindata['Married_Filing_Status'] ))
                    <!-- :: tr10 Married Filing Status -->
                    <tr>
                        <td class="field">Married Filing Status</td>
                        <td class="value">{!! $maindata['Married_Filing_Status'] !!}</td>
                    </tr>
                    @endif

                    @if(!empty($maindata['Street_Address'] ))
                    <!-- :: tr11 Street Address -->
                    <tr>
                        <td class="field">Street Address</td>
                        <td class="value">{!! $maindata['Street_Address'] !!}</td>
                    </tr>
                    @endif

                    @if(!empty($maindata['Address_Line_2'] ))
                    <tr>
                        <td class="field">Address line 2</td>
                        <td class="value">{!! $maindata['Address_Line_2'] !!}</td>
                    </tr>
                    @endif

                    @if(!empty($maindata['City'] ))
                    <!-- :: tr12 City  -->
                    <tr>
                        <td class="field">City </td>
                        <td class="value">{!! $maindata['City'] !!}</td>
                    </tr>
                    @endif

                    @if(!empty($maindata['State'] ))
                    <!-- :: tr13 State -->
                    <tr>
                        <td class="field">State</td>
                        <td class="value">{!! $maindata['State'] !!}</td>
                    </tr>
                    @endif

                    @if(!empty($maindata['Zip_Code'] ))
                    <!-- :: tr14 Zip Code -->
                    <tr>
                        <td class="field">Zip Code</td>
                        <td class="value">{!! $maindata['Zip_Code'] !!}</td>
                    </tr>
                    @endif

                    @if(!empty($maindata['Rent_Or_Own'] ))
                    <!-- :: tr15 Rent Or Own etc.)-->
                    <tr>
                        <td class="field">Rent Or Own (eg. share rent, live with relative,
                            etc.)
                        </td>
                        <td class="value">{!! $maindata['Rent_Or_Own'] !!}</td>
                    </tr>
                    @endif

                    @if(!empty($maindata['County_Of_Residence'] ))
                    <!-- :: tr16 County Of Residence  -->
                    <tr>
                        <td class="field">County Of Residence </td>
                        <td class="value">{!! $maindata['County_Of_Residence'] !!}</td>
                    </tr>
                    @endif

                    @if(!empty($maindata['Primary_Phone_Number'] ))
                    <!-- :: tr17 Primary Phone Number -->
                    <tr>
                        <td class="field">Primary Phone Number</td>
                        <td class="value"> <a href="tel:{!! $maindata['Primary_Phone_Number'] !!}" class="tel">{!! $maindata['Primary_Phone_Number'] !!}</a></td>
                    </tr>
                    @endif

                    @if(!empty($maindata['snd_Contact_Phone_Number'] ))
                    <tr>
                        <td class="field">2nd Contact Phone Number</td>
                        <td class="value"> <a href="tel:{!! $maindata['snd_Contact_Phone_Number'] !!}" class="tel">{!! $maindata['snd_Contact_Phone_Number'] !!}</a></td>
                    </tr>
                    @endif

                    @if(!empty($maindata['Driver_License'] ))
                    <!-- :: tr18 lDriver License #  -->
                    <tr>
                        <td class="field">Driver License # </td>
                        <td class="value">{!! $maindata['Driver_License'] !!}</td>
                    </tr>
                    @endif

                    @if(!empty($maindata['Do_you_have_any_dependents_EXCLUDING_yourself_and_your_spouse'] ))
                    <!-- :: tr19 any dependents-->
                    <tr>
                        <td class="field">Do you have any dependents; EXCLUDING
                            yourself and your spouse?
                            (only include dependents that you claim on your
                            tax returns)
                        </td>
                        <td class="value">{!! $maindata['Do_you_have_any_dependents_EXCLUDING_yourself_and_your_spouse'] !!}</td>
                    </tr>
                    @endif

                    @if(!empty($maindata['How_many_dependents_do_you_have'] ))
                    <tr>
                        <td class="field">How many dependents do you have?</td>
                        <td class="value">{!! $maindata['How_many_dependents_do_you_have'] !!}</td>
                    </tr>
                    <!-- ----------- Dependent start ---------- -->
                    @endif

                    @if($dependent_array > 0)
                    @php
                          $sno = 1;
                    @endphp
                    @foreach($dependent_array as $dep)
                    <tr>
                        <td class="field" style="border-bottom: none;"><b>Dependent {{$sno}}</b></td>
                        <td class="value" style="border-bottom: none;"></td>
                    </tr>
                    <tr>
                        <td class="field">Name</td>
                        <td class="value">{{$dep['Name']}}</td>
                    </tr>
                    <tr>
                        <td class="field">Date Of Birth</td>
                        <td class="value">{{$dep['Date_Of_Birth']}}</td>
                    </tr>
                    <tr>
                        <td class="field">SSN</td>
                        <td class="value">{{$dep['SSN']}}</td>
                    </tr>
                    <tr>
                        <td class="field">Relationship</td>
                        <td class="value">{{$dep['Relationship']}}</td>
                    </tr>
                    @php
                       $sno++;
                    @endphp
                    @endforeach
                    @endif
                    <!-- -------------Dependent end -------- -->

                    @if(!empty($maindata['Married_Filing_Status'] ))
                    <tr>
                        <td class="field">Married Filing Status</td>
                        <td class="value">{!! $maindata['Married_Filing_Status'] !!}</td>
                    </tr>
                    @endif


                    <!-- ----------- spouse info  start ---------- -->
                    @if(!empty($maindata['spouse_first_name'] ))
                    <tr>
                        <td class="field" style="border-bottom: none;"><b>Spouse Information</b></td>
                        <td class="value" style="border-bottom: none;"></td>
                    </tr>
                    <tr>
                        <td class="field">First Name</td>
                        <td class="value">{!! $maindata['spouse_first_name'] !!}</td>
                    </tr>
                    @endif
                    @if(!empty($maindata['spouse_last_name'] ))
                    <tr>
                        <td class="field">Last Name</td>
                        <td class="value">{!! $maindata['spouse_last_name'] !!}</td>
                    </tr>
                    @endif
                    @if(!empty($maindata['spouse_Driver_License'] ))
                    <tr>
                        <td class="field">Driver's License</td>
                        <td class="value">{!! $maindata['spouse_Driver_License'] !!}</td>
                    </tr>
                    @endif
                    @if(!empty($maindata['spouse_ssn'] ))
                    <tr>
                        <td class="field">SSN#</td>
                        <td class="value">{!! $maindata['spouse_ssn'] !!}</td>
                    </tr>
                    @endif
                    @if(!empty($maindata['spouse_date_of_birth'] ))
                    <tr>
                        <td class="field">Date Of Birth</td>
                        <td class="value">{!! $maindata['spouse_date_of_birth'] !!}</td>
                    </tr>
                    @endif
                   

                    <!-- ----------- spouse info  end ---------- -->

                    @if(!empty($maindata['Client_Employment_Status'] ))
                    <!-- :: tr20 Client Employment Status -->
                    <tr>
                        <td class="field">Client Employment Status</td>
                        <td class="value">{!! $maindata['Client_Employment_Status'] !!}</td>
                    </tr>
                    @endif

                    @if(!empty($maindata['spouse_employment_status'] ))
                    <!-- ----------- Spouse Employment Information  start ---------- -->
                    
                    <tr>
                        <td class="field" style="border-bottom: none;"><b>Spouse Employment Information</b></td>
                        <td class="value" style="border-bottom: none;"></td>
                    </tr>
                    <tr>
                        <td class="field">Spouse Employment Status</td>
                        <td class="value">{!! $maindata['spouse_employment_status'] !!}</td>
                    </tr>
                    @endif
                  
                  
                   <!-- ttttyyyy -->
                    @if(!empty($maindata['Spouse_Business_Name'] ))
                    <!-- ----------- Spouse Employment Information  start ---------- -->
                    
                    <tr>
                        <td class="field" style="border-bottom: none;"><b>Self-Employed</b></td>
                        <td class="value" style="border-bottom: none;"></td>
                    </tr>
                    <tr>
                        <td class="field">Business Name</td>
                        <td class="value">{!! $maindata['Spouse_Business_Name'] !!}</td>
                    </tr>
                    @endif

                    @if(!empty($maindata['Spouse_Employee_ID'] ))
                    <!-- ----------- Spouse Employment Information  start ---------- -->

                   
                    <tr>
                        <td class="field">Employee ID # (If any)</td>
                        <td class="value">{!! $maindata['Spouse_Employee_ID'] !!}</td>
                    </tr>
                    @endif

                    @if(!empty($maindata['Spouse_No_of_Employees'] ))
                    <!-- ----------- Spouse Employment Information  start ---------- -->

                    
                    <tr>
                        <td class="field"># of Employees (if any)</td>
                        <td class="value">{!! $maindata['Spouse_No_of_Employees'] !!}</td>
                    </tr>
                    @endif


                    @if(!empty($maindata['Spouse_Average_Monthly_Payroll'] ))
                    <!-- ----------- Spouse Employment Information  start ---------- -->

                    
                    <tr>
                        <td class="field">Average Monthly Payroll</td>
                        <td class="value">{!! $maindata['Spouse_Average_Monthly_Payroll'] !!}</td>
                    </tr>
                    @endif


                    @if(!empty($maindata['Spouse_Type_of_Business'] ))
                    <!-- ----------- Spouse Employment Information  start ---------- -->

                    
                    <tr>
                        <td class="field">Type of Business (Partnership, LLC, Corporation Other)</td>
                        <td class="value">{!! $maindata['Spouse_Type_of_Business'] !!}</td>
                    </tr>
                    @endif

                    @if(!empty($maindata['Spouse_Frequency_of_Tax_Deposits'] ))
                    <!-- ----------- Spouse Employment Information  start ---------- -->

                   
                    <tr>
                        <td class="field">Frequency of Tax Deposits</td>
                        <td class="value">{!! $maindata['Spouse_Frequency_of_Tax_Deposits'] !!}</td>
                    </tr>
                    @endif


                    @if(!empty($maindata['Spouse_Business_Website'] ))
                    <!-- ----------- Spouse Employment Information  start ---------- -->

                    <tr>
                        <td class="field">Business Website (if any)</td>
                        <td class="value">{!! $maindata['Spouse_Business_Website'] !!}</td>
                    </tr>
                    @endif



                    @if(!empty($maindata['Spouse_Employer_Name'] ))
                    <!-- ----------- Spouse Employment Information  start ---------- -->
                    <tr>
                        <td class="field" style="border-bottom: none;"><b>Spouse Employer</b></td>
                        <td class="value" style="border-bottom: none;"></td>
                    </tr>

                    
                    <tr>
                        <td class="field">Employer Name</td>
                        <td class="value">{!! $maindata['Spouse_Employer_Name'] !!}</td>
                    </tr>
                    @endif

                    @if(!empty($maindata['Spouse_Occupation'] ))
                    <!-- ----------- Spouse Employment Information  start ---------- -->

                    
                    <tr>
                        <td class="field">Occupation</td>
                        <td class="value">{!! $maindata['Spouse_Occupation'] !!}</td>
                    </tr>
                    @endif


                    @if(!empty($maindata['Spouse_Employer_Address'] ))
                    <!-- ----------- Spouse Employment Information  start ---------- -->

                    <tr>
                        <td class="field">Employer Address</td>
                        <td class="value">{!! $maindata['Spouse_Employer_Address'] !!}</td>
                    </tr>
                    @endif


                    @if(!empty($maindata['Spouse_How_Long_with_this_Employer'] ))
                    <!-- ----------- Spouse Employment Information  start ---------- -->

                    
                    <tr>
                        <td class="field">How Long with this Employer</td>
                        <td class="value">{!! $maindata['Spouse_How_Long_with_this_Employer'] !!}</td>
                    </tr>
                    @endif

                    @if(!empty($maindata['Spouse_Number_of_Exemptions_claimed_on_W4'] ))
                    <!-- ----------- Spouse Employment Information  start ---------- -->

                    
                    <tr>
                        <td class="field">Number of Exemptions claimed on W4</td>
                        <td class="value">{!! $maindata['Spouse_Number_of_Exemptions_claimed_on_W4'] !!}</td>
                    </tr>
                    @endif


                    @if(!empty($maindata['spStatus'] ))
                    <!-- ----------- Spouse Employment Information  start ---------- -->

                    <tr>
                        <td class="field">Spouse Pay Period</td>
                        <td class="value">{!! $maindata['spStatus'] !!}</td>
                    </tr>
                    @endif

                    @if(!empty($maindata['Spouse_Pay_amount'] ))
                    <!-- ----------- Spouse Employment Information  start ---------- -->

                    <tr>
                        <td class="field">Amount</td>
                        <td class="value">{!! $maindata['Spouse_Pay_amount'] !!}</td>
                    </tr>
                    @endif


                    @if(!empty($maindata['Em_Employer_Name'] ))
                    <!-- ----------- Spouse Employment Information  start ---------- -->
                    <tr>
                        <td class="field" style="border-bottom: none;"><b>Employer</b></td>
                        <td class="value" style="border-bottom: none;"></td>
                    </tr>
                    <tr>
                        <td class="field">Employer Name</td>
                        <td class="value">{!! $maindata['Em_Employer_Name'] !!}</td>
                    </tr>
                    @endif

                    @if(!empty($maindata['Em_Occupation'] ))
                    <!-- ----------- Spouse Employment Information  start ---------- -->

                    <tr>
                        <td class="field">Occupation</td>
                        <td class="value">{!! $maindata['Em_Occupation'] !!}</td>
                    </tr>
                    @endif
                    @if(!empty($maindata['Em_Employer_Address'] ))
                    <!-- ----------- Spouse Employment Information  start ---------- -->

                    <tr>
                        <td class="field">Employer Address</td>
                        <td class="value">{!! $maindata['Em_Employer_Address'] !!}</td>
                    </tr>
                    @endif

                    @if(!empty($maindata['Em_How_Long_with_this_Employer'] ))
                    <!-- ----------- Spouse Employment Information  start ---------- -->

                    <tr>
                        <td class="field">How Long with this Employer</td>
                        <td class="value">{!! $maindata['Em_How_Long_with_this_Employer'] !!}</td>
                    </tr>
                    @endif
                    @if(!empty($maindata['Em_Number_of_Exemptions_claimed_on_W4'] ))
                    <!-- ----------- Spouse Employment Information  start ---------- -->

                    <tr>
                        <td class="field">Number of Exemptions claimed on W4</td>
                        <td class="value">{!! $maindata['Em_Number_of_Exemptions_claimed_on_W4'] !!}</td>
                    </tr>
                    @endif

                    @if(!empty($maindata['EmspStatus'] ))
                    <!-- ----------- Spouse Employment Information  start ---------- -->

                    <tr>
                        <td class="field">Pay Period</td>
                        <td class="value">{!! $maindata['EmspStatus'] !!}</td>
                    </tr>
                    @endif

                    @if(!empty($maindata['emspouseamount'] ))
                    <!-- ----------- Spouse Employment Information  start ---------- -->

                    <tr>
                        <td class="field">Amount</td>
                        <td class="value">{!! $maindata['emspouseamount'] !!}</td>
                    </tr>
                    @endif



<!-- ttttyyyy -->
                  
                  
                  
                  
                    <!-- ----------- Spouse Employment Information  end ---------- -->

                    @if(!empty($maindata['Cash_on_Hand_Amount'] ))
                    <!-- :: tr21 Cash on Hand Amount -->
                    <tr>
                        <td class="field">Cash on Hand Amount</td>
                        <td class="value">{!! $maindata['Cash_on_Hand_Amount'] !!}</td>
                    </tr>
                    @endif
                    <!-- :: tr22 How Many Bank Accounts Do You Have -->
                    @if(!empty($maindata['How_Many_Bank_Accounts_Do_You_Have'] ))
                    <tr>
                        <td class="field">How Many Bank Accounts Do You Have</td>
                        <td class="value">{!! $maindata['How_Many_Bank_Accounts_Do_You_Have'] !!}</td>
                    </tr>
                    @endif
                    <!-- :: tr23 Bank 1 -->

                    @if($banks_array > 0)
                    @php
                          $sno = 1; 
                    @endphp
                    @foreach($banks_array as $array)
                    

                    <tr>
                        <td class="field" style="border-bottom: none;"><b>Bank {{$sno}}</b></td>
                        
                        <td class="value" style="border-bottom: none;">
                        <a href="@php echo URL::to('/').'/public/'.$array['bank']; @endphp"
                            style="display: block; margin-bottom: 10px;">@php echo URL::to('/').'/public/'.$array['bank']; @endphp</a>
                        </td>
                  
                    </tr>
                    
                    @php
                       $sno++;
                    @endphp
                    @endforeach
                    @endif

                    


                    <!-- :: tr24 Do You Have Any Investments? -->
                    @if(!empty($maindata['Do_You_Have_Any_Investments'] ))
                    <tr>
                        <td class="field">Do You Have Any Investments? (Ex: stocks,
                            bonds, mutual funds, IRA, 401 and all other
                            investments/retirement
                            accounts)</td>
                        <td class="value">{!! $maindata['Do_You_Have_Any_Investments'] !!}</td>
                    </tr>
                    @endif
                    @if(!empty($maindata['How_many_type_of_investments_do_you_have'] ))
                    <tr>
                        <td class="field">How many type of investments do you have? </td>
                        <td class="value">{!! $maindata['How_many_type_of_investments_do_you_have'] !!}</td>
                    </tr>
                    @endif
                    <!-- ----------- Investment   start ---------- -->

                    @if($investment_array > 0)
                    @php
                          $sno = 1;
                    @endphp
                    @foreach($investment_array as $inv)
                    <tr>
                        <td class="field" style="border-bottom: none;"><b>Investment {{$sno}}</b></td>
                        <td class="value" style="border-bottom: none;"></td>
                    </tr>
                    <tr>
                        <td class="field">Type Of Investment</td>
                        <td class="value">{{$inv['Type_of_investment']}}</td>
                    </tr>
                    <tr>
                        <td class="field">Company Name</td>
                        <td class="value">{{$inv['Company_name']}}</td>
                    </tr>
                    <tr>
                        <td class="field">Current Value</td>
                        <td class="value">{{$inv['Current_value']}}</td>
                    </tr>
                    <tr>
                        <td class="field">Balance</td>
                        <td class="value">{{$inv['Balance']}}</td>
                    </tr>
                    <tr>
                        <td class="field">Payment</td>
                        <td class="value">{{$inv['Payment']}}</td>
                    </tr>
                    @php
                       $sno++;
                    @endphp
                    @endforeach
                    @endif

                 
                    

                    <!-- ----------- Investment   end ---------- -->




                    <!-- :: tr25 401k Account? -->
                    @if(!empty($maindata['Can_you_take_a_loan_against_your_401k_Account'] ))
                    <tr>
                        <td class="field">Can you take a loan against your 401k Account?</td>
                        <td class="value">{!! $maindata['Can_you_take_a_loan_against_your_401k_Account'] !!}</td>
                    </tr>
                    @endif
                    <!-- :: tr26 Do You Have Any Credit Cards?  -->
                    @if(!empty($maindata['Do_You_Have_Any_Credit_Cards'] ))
                    <tr>
                        <td class="field">Do You Have Any Credit Cards? </td>
                        <td class="value">{!! $maindata['Do_You_Have_Any_Credit_Cards'] !!}</td>
                    </tr>
                    @endif
                    <!-- :: tr27 How many Credit Cards Do You Have? -->
                    @if(!empty($maindata['How_many_Credit_Cards_Do_You_Have'] ))
                    <tr>
                        <td class="field">How many Credit Cards Do You Have?</td>
                        <td class="value">{!! $maindata['How_many_Credit_Cards_Do_You_Have'] !!}</td>
                    </tr>
                    @endif
                    <!-- :: tr28 login email -->
                    @if($credit_card_array > 0)
                    @php
                          $sno = 1;
                    @endphp
                    @foreach($credit_card_array as $cc)
                    <tr>
                        <td class="field" style="border-bottom: none;"><b>Credit Card {{$sno}}</b></td>
                        <td class="value" style="border-bottom: none;"><a href="@php echo URL::to('/').'/public/'.$cc['Creditcards']; @endphp"
                            style="display: block; margin-bottom: 10px;">@php echo URL::to('/').'/public/'.$cc['Creditcards']; @endphp</a></td>
                    </tr>
                    
                    
                    @php
                       $sno++;
                    @endphp
                    @endforeach
                    @endif
                    
                    <!-- :: tr29 >Do You Have Life Insurance? -->

                    @if(!empty($maindata['Do_You_Have_Life_Insurance'] ))
                    <tr>
                        <td class="field">Do You Have Life Insurance? (Life insurance
                            policy with cash value - NOT TERM LIFE)
                        </td>
                        <td class="value">{!! $maindata['Do_You_Have_Life_Insurance'] !!}</td>
                    </tr>
                    @endif

                    @if(!empty($maindata['How_Many_Life_Insurance_Policy_Do_You_Have'] ))
                    <tr>
                        <td class="field">How Many Life Insurance Policy Do You Have? (Life insurance policy with cash value – NOT TERM LIFE)
                        </td>
                        <td class="value">{!! $maindata['How_Many_Life_Insurance_Policy_Do_You_Have'] !!}</td>
                    </tr>
                    @endif

                    <!-- ----------- Life Insurance Policy    start ---------- -->
                    @if($life_insurance_array > 0)
                    @php
                          $sno = 1;
                    @endphp
                    @foreach($life_insurance_array as $life)
                    <tr>
                        <td class="field" style="border-bottom: none;"><b>Life Insurance Policy {{$sno}}</b></td>
                        <td class="value" style="border-bottom: none;"></td>
                    </tr>
                    <tr>
                        <td class="field">Policy Number</td>
                        <td class="value">{{$life['Policy_number']}}</td>
                    </tr>
                    <tr>
                        <td class="field">Owner Of Policy</td>
                        <td class="value">{{$life['Owner_of_policy']}}</td>
                    </tr>
                    <tr>
                        <td class="field">Current Cash Value</td>
                        <td class="value">{{$life['Current_cash_value']}}</td>
                    </tr>
                    <tr>
                        <td class="field">Outstanding Loan Balance</td>
                        <td class="value">{{$life['Outstanding_loan_balance']}}</td>
                    </tr>
                    <tr>
                        <td class="field">Life Insurance Policy 1 (Upload Most Recent Policy Statement)</td>
                        <td class="value"><a href="@php echo URL::to('/').'/public/'.$life['policy_document']; @endphp"
                            style="display: block; margin-bottom: 10px;">@php echo URL::to('/').'/public/'.$life['policy_document']; @endphp</a></td>
                    </tr>
                    @php
                       $sno++;
                    @endphp
                    @endforeach
                    @endif


                    <!-- ----------- Life Insurance Policy    end ---------- -->







                    <!-- :: tr30 Do You Own Any Real Estate?  -->
                    @if(!empty($maindata['Do_You_Own_Any_Real_Estate'] ))
                    <tr>
                        <td class="field">Do You Own Any Real Estate? (Any Real Estate/
                            Primary Residence/Rental Properties/ Lands
                            Owned)
                        </td>
                        <td class="value">{!! $maindata['Do_You_Own_Any_Real_Estate'] !!}</td>
                    </tr>
                    @endif
                    <!-- :: tr31 How Many Properties Do You Own?  -->
                    @if(!empty($maindata['How_Many_Properties_Do_You_Own'] ))
                    <tr>
                        <td class="field">How Many Properties Do You Own? </td>
                        <td class="value">{!! $maindata['How_Many_Properties_Do_You_Own'] !!}</td>
                    </tr>
                    @endif
                    <!-- :: tr32 Property 1 ------------->

                    @if($property_array > 0)
                    @php
                          $sno = 1;
                    @endphp
                    @foreach($property_array as $dep)
                    <tr>
                        <td class="field" style="border-bottom: none;"><b>Property {{$sno}}</b></td>
                        <td class="value" style="border-bottom: none;"></td>
                    </tr>
                    <tr>
                        <td class="field">Property Address</td>
                        <td class="value">{{$dep['Property_address']}}</td>
                    </tr>
                    <!-- :: tr34 Country -->
                    <tr>
                        <td class="field">Country</td>
                        <td class="value">{{$dep['Country']}}</td>
                    </tr>
                    <!-- :: tr35 Mortgage Lender -->
                    <tr>
                        <td class="field">Mortgage Lender</td>
                        <td class="value">{{$dep['Mortgage_lender']}}</td>
                    </tr>
                    <!-- :: tr36 Purchase Date -->
                    <tr>
                        <td class="field">Purchase Date</td>
                        <td class="value">{{$dep['Purchase_date']}}</td>
                    </tr>
                    <!-- :: tr37 login Fair Market Value -->
                    <tr>
                        <td class="field">Fair Market Value</td>
                        <td class="value">{{$dep['Fair_market_value']}}</td>
                    </tr>
                    <!-- :: tr38 Loan Balance -->
                    <tr>
                        <td class="field">Loan Balance</td>
                        <td class="value">{{$dep['Loan_balance']}}</td>
                    </tr>
                    <!-- :: tr39 Monthly Payment -->
                    <tr>
                        <td class="field">Monthly Payment</td>
                        <td class="value">{{$dep['Monthly_payment']}}</td>
                    </tr>
                    <!-- :: tr 40 Date of Final Payment-->
                    <tr>
                        <td class="field">Date of Final Payment</td>
                        <td class="value">{{$dep['Date_of_final']}}</td>
                    </tr>
                    <!-- :: tr 41 Monthly Property Tax-->
                    <tr>
                        <td class="field">Monthly Property Tax</td>
                        <td class="value">{{$dep['Monthly_property_tax']}}</td>
                    </tr>
                    <!-- :: tr 42 How is Title held -->
                    <tr>
                        <td class="field">How is Title held (Joint, Tenancy, etc.)</td>
                        <td class="value">{{$dep['How_is_title_held']}}</td>
                    </tr>
                    <!-- :: tr 43 Property 1 mortgagestatement-->
                    <tr>
                        <td class="field">Property 1 (Upload most recent mortgagestatement)</td>
                        <td class="value">
                            <a href="@php echo URL::to('/').'/public/'.$dep['property_document']; @endphp"
                            style="display: block; margin-bottom: 10px;">@php echo URL::to('/').'/public/'.$dep['property_document']; @endphp</a>
                        </td>
                    </tr>
                    @php
                       $sno++;
                    @endphp
                    @endforeach
                    @endif

                    
                   
                    <!-- :: tr 44 Do You Own A Motor Vehicle? --------------------->
                    @if(!empty($maindata['Do_You_Own_A_Motor_Vehicle'] ))
                    <tr>
                        <td class="field">Do You Own A Motor Vehicle? </td>
                        <td class="value">{!! $maindata['Do_You_Own_A_Motor_Vehicle'] !!}</td>
                    </tr>
                    @endif
                    <!-- :: tr 45 How Many Motor Vehicles Do You Own? -->
                    @if(!empty($maindata['How_Many_Motor_Vehicles_Do_You_Own'] ))
                    <tr>
                        <td class="field">How Many Motor Vehicles Do You Own? </td>
                        <td class="value">{!! $maindata['How_Many_Motor_Vehicles_Do_You_Own'] !!}</td>
                    </tr>
                    @endif
                    <!-- :: tr 46 Vehicle 1 detail-->

                    @if($vehicle_array > 0)
                    @php
                          $sno = 1;
                    @endphp
                    @foreach($vehicle_array as $veh)
                    <tr>
                        <td class="field" style="border-bottom: none;"><b>Vehicle {{$sno}}</b></td>
                        <td class="value" style="border-bottom: none;"></td>
                    </tr>
                    <tr>
                        <td class="field">Make and Model</td>
                        <td class="value">{{$veh['Make_and_model']}}</td>
                    </tr>
                    <!-- :: tr 48 Year-->
                    <tr>
                        <td class="field">Year</td>
                        <td class="value">{{$veh['Make_and_model']}}</td>
                    </tr>
                    <!-- :: tr 49 Mileage -->
                    <tr>
                        <td class="field">Mileage</td>
                        <td class="value">{{$veh['Make_and_model']}}</td>
                    </tr>
                    <!-- :: tr 50 Lease or Own -->
                    <tr>
                        <td class="field">Lease or Own</td>
                        <td class="value">{{$veh['Make_and_model']}}</td>
                    </tr>
                    <!-- :: tr 51 Date Of Purchased/Lease -->
                    <tr>
                        <td class="field">Date Of Purchased/Lease</td>
                        <td class="value">{{$veh['Make_and_model']}}</td>
                    </tr>
                    <!-- :: tr 52 Date Of Final Payment-->
                    <tr>
                        <td class="field">Date Of Final Payment</td>
                        <td class="value">{{$veh['Make_and_model']}}</td>
                    </tr>
                    <!-- :: tr 53 Current Value -->
                    <tr>
                        <td class="field">Current Value</td>
                        <td class="value">{{$veh['Make_and_model']}}</td>
                    </tr>
                    <!-- :: tr 54 Current Loan Value-->
                    <tr>
                        <td class="field">Current Loan Value</td>
                        <td class="value">{{$veh['Make_and_model']}}</td>
                    </tr>
                    <!-- :: tr 55 Monthly Payment-->
                    <tr>
                        <td class="field">Monthly Payment</td>
                        <td class="value">{{$veh['Make_and_model']}}</td>
                    </tr>
                    <!-- :: tr 56 Name of Lender/Lessor-->
                    <tr>
                        <td class="field">Name of Lender/Lessor</td>
                        <td class="value">{{$veh['Make_and_model']}}</td>
                    </tr>
                    <!-- :: tr 57 Is Vehicle 2 Financed or Leased?-->
                    <tr>
                        <td class="field">Is Vehicle 1 Financed or Leased?</td>
                        <td class="value">{{$veh['Make_and_model']}}</td>
                    </tr>
                    <!-- :: tr 58 Vehicle 1 (Upload most recent car note statement)-->
                    <tr>
                        <td class="field">Vehicle {{$sno}} (Upload most recent car note statement)</td>
                        <td class="value">
                            <a href="@php echo URL::to('/').'/public/'.$veh['vehicleup']; @endphp"
                            style="display: block; margin-bottom: 10px;">@php echo URL::to('/').'/public/'.$veh['vehicleup']; @endphp</a>
                            
                        </td>
                    </tr>
                    
                    @php
                       $sno++;
                    @endphp
                    @endforeach
                    @endif

                    
                    <!-- :: tr 47 Make and Model-->
                    
                    <!-- :: tr 59 Do You Have Any Other Personal Assets-->
                    @if(!empty($maindata['Do_You_Have_Any_Other_Personal_Assets'] ))
                    <tr>
                        <td class="field">Do You Have Any Other Personal Assets:
                            (recreational vehicles, boats, RV’s, artwork,
                            jewelry, collections, etc) NOTE: Do not include
                            clothing, furniture and other personal effects.</td>
                        <td class="value">{!! $maindata['Do_You_Have_Any_Other_Personal_Assets'] !!}</td>
                    </tr>
                    @endif
                    @if(!empty($maindata['How_Many_Other_Personal_Assets_Do_You_Have'] ))
                    <tr>
                        <td class="field">How Many Other Personal Assets Do You Have? (recreational vehicles, boats, RV’s, artwork, jewelry, collections, etc) NOTE: Do not include clothing, furniture and other personal effects. </td>
                        <td class="value">{!! $maindata['How_Many_Other_Personal_Assets_Do_You_Have'] !!}</td>
                    </tr>
                    @endif
                    <!-- Personal Asset 1 start -->

                    @if($personal_asset_array > 0)
                    @php
                          $sno = 1;
                    @endphp
                    @foreach($personal_asset_array as $per_assets)
                    <tr>
                        <td class="field" style="border-bottom: none;"><b>Personal Asset {{$sno}}</b></td>
                        <td class="value" style="border-bottom: none;"></td>
                    </tr>
                    <tr>
                        <td class="field">Description of Asset</td>
                        <td class="value">{{$per_assets['Description_of_asset']}}</td>
                    </tr>
                    <tr>
                        <td class="field">Date of Purchase </td>
                        <td class="value">{{$per_assets['Date_of_purchase']}}</td>
                    </tr>
                    <tr>
                        <td class="field">Current Value </td>
                        <td class="value">{{$per_assets['Current_value']}}</td>
                    </tr>
                    <tr>
                        <td class="field">Loan Balance </td>
                        <td class="value">{{$per_assets['Loan_balance']}}</td>
                    </tr>
                    <tr>
                        <td class="field">Name of Lender/ Lessor </td>
                        <td class="value">{{$per_assets['Name_of_lender']}}</td>
                    </tr>
                    <tr>
                        <td class="field">Date of Final Payment </td>
                        <td class="value">{{$per_assets['Date_of_final_payment']}}</td>
                    </tr>
                    @php
                       $sno++;
                    @endphp
                    @endforeach
                    @endif

                   

                    @if(!empty($maindata['Spouse_Cash_on_Hand_Amount'] ))
                    <tr>
                        <td class="field" style="border-bottom: none;"><b>Spouse Asset Information</b></td>
                        <td class="value" style="border-bottom: none;"></td>
                    </tr>
                    <tr>
                        <td class="field">Spouse Cash on Hand Amount</td>
                        <td class="value">{!! $maindata['Spouse_Cash_on_Hand_Amount'] !!}</td>
                    </tr>
                    @endif
                    @if(!empty($maindata['How_Many_Bank_Accounts_Spouse_Have'] ))
                    <tr>
                        <td class="field">How Many Bank Accounts Spouse Have</td>
                        <td class="value">{!! $maindata['How_Many_Bank_Accounts_Spouse_Have'] !!}</td>
                    </tr>
                    @endif

                    @if($Bank_Accounts_Spouse > 0)
                    @php
                          $sno = 1;
                    @endphp
                    @foreach($Bank_Accounts_Spouse as $bankspouse)
                    <tr>
                        <td class="field" style="border-bottom: none;"><b>Spouse Bank {{$sno}}</b></td>
                        <td class="value" style="border-bottom: none;"><a href="@php echo URL::to('/').'/public/'.$bankspouse['bankspouse']; @endphp"
                            style="display: block; margin-bottom: 10px;">@php echo URL::to('/').'/public/'.$bankspouse['bankspouse']; @endphp</a></td>
                    </tr>
                    
                    
                    @php
                       $sno++;
                    @endphp
                    @endforeach
                    @endif

                   
                    <!-- Personal Asset 1 end -->
                    <!-- :: tr 60 Wages -->
                    <!-- <tr>
                        <td class="field">Wages </td>
                        <td class="value">72000</td>
                    </tr> -->
                    <!-- :: tr 61 Pay Stubs-->
                    <!-- <tr>
                        <td class="field">Pay Stubs (Upload Recent 3 months of paystubs)</td>
                        <td class="value">
                            <a href="https://ibb.co/h2S0gX"
                                style="display: block; margin-bottom: 10px;">IMG_018127874.png</a>
                            <a href="https://ibb.co/h2S0gX"
                                style="display: block; margin-bottom: 10px;">IMG_018127874.png</a>
                            <a href="https://ibb.co/h2S0gX" style="display: block;">IMG_018127874.png</a>
                        </td>
                    </tr> -->
                    <!-- :: tr 62 Interest/Dividends-->
                    @if(!empty($maindata['Interest_Dividends'] ))
                    <tr>
                        <td class="field">Interest/Dividends </td>
                        <td class="value">{!! $maindata['Interest_Dividends'] !!}</td>
                    </tr>
                    @endif
                    @if(!empty($maindata['Net_Self_Employed_Business_Income'] ))
                    <!-- :: tr 63 Net Self-Employed/Business Income -->
                    <tr>
                        <td class="field">Net Self-Employed/Business Income </td>
                        <td class="value">{!! $maindata['Net_Self_Employed_Business_Income'] !!}</td>
                    </tr>
                    @endif
                    @if(!empty($maindata['Net_Rental_Income'] ))
                    <!-- :: tr 64 Net Rental Income-->
                    <tr>
                        <td class="field">Net Rental Income</td>
                        <td class="value">{!! $maindata['Net_Rental_Income'] !!}</td>
                    </tr>
                    @endif
                    @if(!empty($maindata['Distribution'] ))
                    <!-- :: tr 65 Distribution-->
                    <tr>
                        <td class="field">Distribution</td>
                        <td class="value">{!! $maindata['Distribution'] !!}</td>
                    </tr>
                    @endif
                    @if(!empty($maindata['Social_Security_Income'] ))
                    <!-- :: tr 66 Social Security Income-->
                    <tr>
                        <td class="field">Social Security Income</td>
                        <td class="value">{!! $maindata['Social_Security_Income'] !!}</td>
                    </tr>
                    @endif
                    @if(!empty($maindata['Alimony_Income'] ))
                    <!-- :: tr 67 Alimony Income-->
                    <tr>
                        <td class="field">Alimony Income</td>
                        <td class="value">{!! $maindata['Alimony_Income'] !!}</td>
                    </tr>
                    @endif
                    @if(!empty($maindata['Retirement_Income_Pension'] ))
                    <!-- :: tr 68 Retirement Income/ Pension-->
                    <tr>
                        <td class="field">Retirement Income/ Pension</td>
                        <td class="value"> {!! $maindata['Retirement_Income_Pension'] !!}</td>
                    </tr>
                    @endif
                    @if(!empty($maindata['Other_Income'] ))
                    <!-- :: tr 69 Other Income-->
                    <tr>
                        <td class="field">Other Income</td>
                        <td class="value">{!! $maindata['Other_Income'] !!}</td>
                    </tr>
                    @endif
                    @if(!empty($maindata['Spouse_Wages'] ))
                    <tr>
                        <td class="field">Spouse Wages</td>
                        <td class="value">{!! $maindata['Spouse_Wages'] !!}</td>
                    </tr>
                    @endif
                    @if(!empty($maindata['Spouse_Social_Security_Income'] ))
                    <tr>
                        <td class="field">Spouse Social Security Income</td>
                        <td class="value">{!! $maindata['Spouse_Social_Security_Income'] !!}</td>
                    </tr>
                    @endif
                    
                    @if(!empty($maindata['Total_House_Hold_Income'] ))
                    <!-- :: tr 71 Total House Hold Income-->
                    <tr>
                        <td class="field">Total House Hold Income</td>
                        <td class="value">{!! $maindata['Total_House_Hold_Income'] !!}</td>
                    </tr>
                    @endif
                    @if(!empty($maindata['Food_Clothing_Misc'] ))
                    <!-- :: tr 72 Food, Clothing & Misc-->
                    <tr>
                        <td class="field">Food, Clothing & Misc</td>
                        <td class="value">{!! $maindata['Food_Clothing_Misc'] !!}</td>
                    </tr>
                    @endif
                    @if(!empty($maindata['Rent_Mortgage'] ))
                    <!-- :: tr 73 Rent/Mortgage-->
                    <tr>
                        <td class="field">Rent/Mortgage </td>
                        <td class="value">{!! $maindata['Rent_Mortgage'] !!}</td>
                    </tr>
                    @endif
                    @if(!empty($maindata['Utilities'] ))
                    <!-- :: tr 74 Utilities-->
                    <tr>
                        <td class="field">Utilities</td>
                        <td class="value">{!! $maindata['Utilities'] !!}</td>
                    </tr>
                    @endif
                    @if(!empty($maindata['Vehicles_Ownership_Costs'] ))
                    <!-- :: tr 75 Vehicles Ownership Costs-->
                    <tr>
                        <td class="field">Vehicles Ownership Costs</td>
                        <td class="value">{!! $maindata['Vehicles_Ownership_Costs'] !!}</td>
                    </tr>
                    @endif
                    @if(!empty($maindata['Vehicles_Operating_Costs'] ))
                    <!-- :: tr 76 Vehicles Operating Costs-->
                    <tr>
                        <td class="field">Vehicles Operating Costs</td>
                        <td class="value">{!! $maindata['Vehicles_Operating_Costs'] !!}</td>
                    </tr>
                    @endif
                    @if(!empty($maindata['Public_Transportation'] ))
                    <!-- :: tr 77 Public Transportation-->
                    <tr>
                        <td class="field">Public Transportation</td>
                        <td class="value">{!! $maindata['Public_Transportation'] !!}</td>
                    </tr>
                    @endif
                    @if(!empty($maindata['Health_Insurance'] ))
                    <!-- :: tr 78 Health Insurance-->
                    <tr>
                        <td class="field">Health Insurance</td>
                        <td class="value">{!! $maindata['Health_Insurance'] !!}</td>
                    </tr>
                    @endif
                    @if(!empty($maindata['Out_of_Pocket_Health_Costs'] ))
                    <!-- :: tr 79 Out of Pocket Health Costs-->
                    <tr>
                        <td class="field">Out of Pocket Health Costs </td>
                        <td class="value">{!! $maindata['Out_of_Pocket_Health_Costs'] !!}</td>
                    </tr>
                    @endif
                    @if(!empty($maindata['Court_Ordered_Payments'] ))
                    <!-- :: tr 80 Court Ordered Payments-->
                    <tr>
                        <td class="field">Court Ordered Payments </td>
                        <td class="value">{!! $maindata['Court_Ordered_Payments'] !!}</td>
                    </tr>
                    @endif
                    @if(!empty($maindata['Child_Care'] ))
                    <!-- :: tr 81 Child Care -->
                    <tr>
                        <td class="field">Child Care </td>
                        <td class="value">{!! $maindata['Child_Care'] !!}</td>
                    </tr>
                    @endif
                    @if(!empty($maindata['Life_Insurance'] ))
                    <!-- :: tr 82 Life Insurance-->
                    <tr>
                        <td class="field">Life Insurance</td>
                        <td class="value">{!! $maindata['Life_Insurance'] !!}</td>
                    </tr>
                    @endif
                    @if(!empty($maindata['Taxes'] ))
                    <!-- :: tr 83 Taxes (Income & FICA)-->
                    <tr>
                        <td class="field">Taxes (Income & FICA)</td>
                        <td class="value">{!! $maindata['Taxes'] !!}</td>
                    </tr>
                    @endif
                    @if(!empty($maindata['Other_Secure_Debts'] ))
                    <!-- :: tr 84 Other Secure Debts-->
                    <tr>
                        <td class="field">Other Secure Debts</td>
                        <td class="value">{!! $maindata['Other_Secure_Debts'] !!}</td>
                    </tr>
                    @endif
                    @if(!empty($maindata['Other_Secure_Debts1'] ))
                    <!-- :: tr 84(b) Other Secure Debts-->
                    <tr>
                        <td class="field">Other Secure Debts</td>
                        <td class="value">{!! $maindata['Other_Secure_Debts1'] !!}</td>
                    </tr>
                    @endif
                    
                    @if(!empty($maindata['TotHousehold_Expense'] ))
                    <!-- :: tr 86 Total Household Expense-->
                    <tr>
                        <td class="field">Total Household Expense</td>
                        <td class="value">{!! $maindata['TotHousehold_Expense'] !!}</td>
                    </tr>
                    @endif
                    @if(!empty($maindata['Are_you_the_beneficiary_of_a_trust_estate_or_life_insurance_po'] ))
                    <!-- :: tr 87 Are you the beneficiary of a trust,-->
                    <tr>
                        <td class="field">Are you the beneficiary of a trust, estate, or life insurance policy?</td>
                        <td class="value">{!! $maindata['Are_you_the_beneficiary_of_a_trust_estate_or_life_insurance_po'] !!}</td>
                    </tr>
                    @endif
                    @if(!empty($maindata['Are_you_currently_in_bankruptcy'] ))
                    <!-- :: tr 88 Are you currently in bankruptcy?-->
                    <tr>
                        <td class="field">Are you currently in bankruptcy?</td>
                        <td class="value">{!! $maindata['Are_you_currently_in_bankruptcy'] !!}</td>
                    </tr>

                    @endif
                    @if(!empty($maindata['Discharge_Dismissal_Date'] ))
                    <tr>
                        <td class="field">Discharge/Dismissal Date</td>
                        <td class="value">{!! $maindata['Discharge_Dismissal_Date'] !!}</td>
                    </tr>
                    @endif
                    @if(!empty($maindata['Have_you_been_party_to_a_lawsuit'] ))

                    <!-- :: tr 89 Have you been party to a lawsuit?-->
                    <tr>
                        <td class="field">Have you been party to a lawsuit?</td>
                        <td class="value">{!! $maindata['Have_you_been_party_to_a_lawsuit'] !!}</td>
                    </tr>
                    @endif
                    @if(!empty($maindata['Date_the_lawsuit_was_resolved'] ))

                    <tr>
                        <td class="field">Date the lawsuit was resolved</td>
                        <td class="value">{!! $maindata['Date_the_lawsuit_was_resolved'] !!}</td>
                    </tr>
                    @endif
                    @if(!empty($maindata['In_the_past_10_years_have_you_transferred_any_assets_for_less_t'] ))

                    <!-- :: tr 90 In the past 10 years-->
                    <tr>
                        <td class="field">In the past 10 years, have you transferred any assets for less than their full
                            value?</td>
                        <td class="value">{!! $maindata['In_the_past_10_years_have_you_transferred_any_assets_for_less_t'] !!}</td>
                    </tr>
                    @endif
                    @if(!empty($maindata['Date_the_asset_was_transferred'] ))

                    <tr>
                        <td class="field">Date the asset was transferred</td>
                        <td class="value">{!! $maindata['Date_the_asset_was_transferred'] !!}</td>
                    </tr>
                    @endif
                    @if(!empty($maindata['In_the_past_3_year_have_you_transferred_any_real_property'] ))

                    <!-- :: tr 91 In the past 3 year, have you transferred any real property-->
                    <tr>
                        <td class="field">In the past 3 year, have you transferred any real property (land, house,
                            etc.)?</td>
                        <td class="value">{!! $maindata['In_the_past_3_year_have_you_transferred_any_real_property'] !!}</td>
                    </tr>
                    @endif
                    @if(!empty($maindata['List_the_type_of_property_and_date_of_the_transfer'] ))
                    <tr>
                        <td class="field">List the type of property and date of the transfer</td>
                        <td class="value">{!! $maindata['List_the_type_of_property_and_date_of_the_transfer'] !!}</td>
                    </tr>
                    @endif
                    @if(!empty($maindata['Print_Full_Name'] ))

                    <!-- :: tr 92 rint Full Name-->
                    <tr>
                        <td class="field">Print Full Name</td>
                        <td class="value">{!! $maindata['Print_Full_Name'] !!}</td>
                    </tr>
                    @endif
                    @if(!empty($maindata['Date'] ))
                    <!-- :: tr 93 Date-->
                    <tr>
                        <td class="field">Date</td>
                        <td class="value">{!! $maindata['Date'] !!}</td>
                    </tr>
                    @endif
                    @if(!empty($maindata['signature'] ))
                    <!-- :: tr 94 signature-->
                    <tr>
                        <td class="field">Signature</td>
                        <td class="value">
                            <font face="buenossignature400" style="font-size:18px; font-weight:300" >{!! $maindata['signature'] !!}</font>
                        </td>
                    </tr>
                    @endif
                    <!-- :: tr 95 Last Update-->
                    @if(!empty($maindata['last_update'] ))
                    <tr>
                        <td class="field">Last Update</td>
                        <td class="value">{!! $maindata['last_update'] !!}</td>
                    </tr>
                    @endif
                    @if(!empty($maindata['start_time'] ))
                    <!-- :: tr 96 Start Time-->
                    <tr>
                        <td class="field">Start Time</td>
                        <td class="value">{!! $maindata['start_time'] !!}</td>
                    </tr>
                    @endif
                    @if(!empty($maindata['finish_time'] ))
                    <!-- :: tr 97 Finish Time-->
                    <tr>
                        <td class="field">Finish Time</td>
                        <td class="value">{!! $maindata['finish_time'] !!}</td>
                    </tr>
                    @endif
                    <!-- :: tr 98 IP-->
                    @if(!empty($maindata['ip'] ))
                    <tr>
                        <td class="field">IP</td>
                        <td class="value">{!! $maindata['ip'] !!}</td>
                    </tr>
                    @endif
                    <!-- :: tr 99 Browse-->
                    @if(!empty($maindata['browse'] ))
                    <tr>
                        <td class="field">Browse</td>
                        <td class="value">{!! $maindata['browse'] !!}</td>
                    </tr>
                    @endif
                    <!-- :: tr 100 Device-->
                    @if(!empty($maindata['device'] ))
                    <!-- <tr>
                        <td class="field">Device</td>
                        <td class="value">{!! $maindata['device'] !!}</td>
                    </tr> -->
                    @endif
                    <!-- :: tr 101 Referrer-->
                    <!-- <tr>
                        <td class="field">Referrer</td>
                        <td class="value">
                            <a href="https://fs8.formsite.com/res/formLoginReturn;
                             jsessionid=
                             327329FDC802F068C4FEF87952B7E5D2;
                             jsessionid=
                             327329FDC802F068C4FEF87952B7E5D2;
                             jsessionid=
                             327329FDC802F068C4FEF87952B7E5D2;
                             jsessionid=
                             327329FDC802F068C4FEF87952B7E5D2;
                             jsessionid=
                             327329FDC802F068C4FEF87952B7E5D2" class="">https://fs8.formsite.com/res/formLoginReturn;
                                jsessionid=
                                327329FDC802F068C4FEF87952B7E5D2;
                                jsessionid=
                                327329FDC802F068C4FEF87952B7E5D2;
                            </a>
                        </td>
                    </tr> -->
                </tbody>
            </table>
        </div>
    </div>

</body>

</html>