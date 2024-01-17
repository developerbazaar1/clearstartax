<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <title>Tax Organizer</title>
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
        /*max-width: 100vw;*/
        margin: 0 auto;
        padding: 20px;
    }

    .content {
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
        width: 50%;
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
            <h1>Tax Organizer</h1>
            <span class="divider"></span>
            <table>
                <tbody>
                    <!-- ::  refrence no.-->
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

                    @if(!empty($maindata['What_Tax_Year_Is_This_Organizer_For'] ))
                    <!-- :: tr6 login First Name -->
                    <tr>
                        <td class="field">What Tax Year Is This Organizer For</td>
                        <td class="value">{!! $maindata['What_Tax_Year_Is_This_Organizer_For'] !!}</td>
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
                    <!-- ::  What Tax Year-->
                    <!-- ::  First Name-->
                    
                    <!-- ::  login  Date Of Birth-->
                    @if(!empty($maindata['Date_Of_Birth'] ))
                    <tr>
                        <td class="field" id=""> Date Of Birth </td>
                        <td class="value" id="">{!! $maindata['Date_Of_Birth'] !!}</td>
                    </tr>
                    @endif
                    @if(!empty($maindata['SSN'] ))
                    <tr>
                        <td class="field" id="">SSN </td>
                        <td class="value" id="">{!! $maindata['SSN'] !!}</td>
                    </tr>
                    @endif
                    @if(!empty($maindata['Street_Address'] ))
                    <tr>
                        <td class="field" id="">Street Address </td>
                        <td class="value" id="">{!! $maindata['Street_Address'] !!}</td>
                    </tr>
                    @endif
                    @if(!empty($maindata['Address_Line_2'] ))
                    <tr>
                        <td class="field" id="">Address line 2 </td>
                        <td class="value" id="">{!! $maindata['Address_Line_2'] !!}</td>
                    </tr>
                    @endif
                    @if(!empty($maindata['City'] ))
                    <tr>
                        <td class="field" id="">City</td>
                        <td class="value" id="">{!! $maindata['City'] !!}</td>
                    </tr>
                    @endif
                    @if(!empty($maindata['State'] ))
                    <tr>
                        <td class="field" id="">State</td>
                        <td class="value" id=""> {!! $maindata['State'] !!}</td>
                    </tr>
                    @endif
                    @if(!empty($maindata['Zip_Code'] ))
                    <tr>
                        <td class="field" id="">Zip </td>
                        <td class="value" id=""> {!! $maindata['Zip_Code'] !!}</td>
                    </tr>
                    @endif
                    @if(!empty($maindata['Country'] ))
                    <tr>
                        <td class="field" id="">Country Of Residence </td>
                        <td class="value" id=""> {!! $maindata['Country'] !!}</td>
                    </tr>
                    @endif
                    @if(!empty($maindata['Occupation'] ))
                    <tr>
                        <td class="field" id="">Occupation</td>
                        <td class="value" id=""> {!! $maindata['Occupation'] !!}</td>
                    </tr>
                    @endif
                    @if(!empty($maindata['Rent_Or_Own'] ))
                    <tr>
                        <td class="field" id="">Rent Or Own eg. share rent, live with relative, etc.</td>
                        <td class="value" id=""> {!! $maindata['Rent_Or_Own'] !!}</td>
                    </tr>
                    @endif
                    @if(!empty($maindata['Main_Contact_Phone_Number'] ))
                    <tr>
                        <td class="field" id="">Primary Phone Number</td>
                        <td class="value" id=""> {!! $maindata['Main_Contact_Phone_Number'] !!}</td>
                    </tr>
                    @endif
                    @if(!empty($maindata['snd_Contact_Phone_Number'] ))
                    <tr>
                        <td class="field" id="">Secondry Phone Number</td>
                        <td class="value" id=""> {!! $maindata['snd_Contact_Phone_Number'] !!}</td>
                    </tr>
                    @endif
                 
                    <!-- <tr>
                        <td class="" id="">
                            <h2>Tax Filing Information</h2>
                        </td>
                        <td class="" id=""> </td>
                    </tr> -->
                   
                    @if(!empty($maindata['Client_Filing_Status'] ))
                    <tr>
                        <td class="field" id="">Client Filing Status</td>
                        <td class="value" id="">{!! $maindata['Client_Filing_Status'] !!}</td>
                    </tr>
                    @endif

                    @if($maindata['Client_Filing_Status'] == 'separately' || $maindata['Client_Filing_Status'] == 'jointly'   )
                        
                        @if(!empty($maindata['spouse_first_name'] ))
                        <tr>
                            <td class="field" id="">First Name</td>
                            <td class="value" id=""> {!! $maindata['spouse_first_name'] !!}</td>
                        </tr>
                        @endif
                        @if(!empty($maindata['spouse_last_name'] ))
                        <tr>
                            <td class="field" id="">Last Name</td>
                            <td class="value" id=""> {!! $maindata['spouse_last_name'] !!}</td>
                        </tr>
                        @endif
                        @if(!empty($maindata['spouse_occupaton'] ))
                        <tr>
                            <td class="field" id="">Occupation</td>
                            <td class="value" id=""> {!! $maindata['spouse_occupaton'] !!}</td>
                        </tr>
                        @endif
                        @if(!empty($maindata['spouse_date_of_birth'] ))
                        <tr>
                            <td class="field" id="">Date Of Birth</td>
                            <td class="value" id=""> {!! $maindata['spouse_date_of_birth'] !!}</td>
                        </tr>
                        @endif
                        @if(!empty($maindata['spouse_ssn'] ))
                        <tr>
                            <td class="field" id="">SSN #</td>
                            <td class="value" id=""> {!! $maindata['spouse_ssn'] !!}</td>
                        </tr>
                        @endif
                    @endif
                    <!-- ::  Client Employment Status-->

                    @if(!empty($maindata['Client_Employment_Status'] ))
                    <tr>
                        <td class="field" id="">Client Employment Status</td>
                        <td class="value" id=""> {!! $maindata['Client_Employment_Status'] !!}</td>
                    </tr>
                    @endif

                    @if(!empty($maindata['Client_Employment_Status'] == 'wage' ))
                    @if(!empty($maindata['Do_you_have_your_W2s'] ))
                    <tr>
                        <td class="field" id="">Do you have your W2's</td>
                        <td class="value" id="">{!! $maindata['Do_you_have_your_W2s'] !!}</td>
                    </tr>
                    @endif
                    @endif
                    @if(($maindata['Client_Employment_Status'] == 'wage' && $maindata['Do_you_have_your_W2s'] == 'Yes'))
                    @if(!empty($maindata['Upload_your_W2s'] ))
                    <tr>
                        <td class="field" id="">Upload your W2's</td>
                        <td class="value" id=""><a href="@php echo URL::to('/').'/public/'.$maindata['Upload_your_W2s']; @endphp"
                            style="display: block; margin-bottom: 10px;">@php echo URL::to('/').'/public/'.$maindata['Upload_your_W2s']; @endphp</a></td>
                    </tr>
                    @endif
                    @endif
                    @if(($maindata['Client_Employment_Status'] == 'wage' && $maindata['Do_you_have_your_W2s'] == 'No'))
                    @if(!empty($maindata['We_can_file_back_year_returns_based_on_IRS_wage_and_income'] ))
                    <tr>
                        <td class="field" id="">We can file back year returns based on IRS wage and income. Note, this
                            will not include any state withholdings, so state returns will show higher balance. If you
                            authorize us to file based on IRS reported wages only, any additional amendments in the
                            future will result in an additional fee for services. Do you agree to let us file base on
                            IRS wage and income</td>
                        <td class="value" id="">{!! $maindata['We_can_file_back_year_returns_based_on_IRS_wage_and_income'] !!}</td>
                    </tr>
                    @endif
                    @endif
                    @if(($maindata['Client_Employment_Status'] == 'wage' && $maindata['We_can_file_back_year_returns_based_on_IRS_wage_and_income'] == 'No'))
                    @if(!empty($maindata['You_Will_Need_To_Upload_your_W2s'] ))
                    <tr>
                        <td class="field" id="">You Will Need To Upload your W2's</td>
                        <td class="value" id=""><a href="@php echo URL::to('/').'/public/'.$maindata['You_Will_Need_To_Upload_your_W2s']; @endphp"
                            style="display: block; margin-bottom: 10px;">@php echo URL::to('/').'/public/'.$maindata['You_Will_Need_To_Upload_your_W2s']; @endphp</a></td>
                    </tr>
                    @endif
                    @endif
                    <!-- ::  Business Info :: -->


                        
                    @if(($maindata['Client_Employment_Status'] == 'selfemployed' ||  $maindata['Client_Employment_Status'] == 'businessowner'))    
                        
                        @if(!empty($maindata['Name_Of_Business'] ))
                        <tr>
                            <td class="field" id="">Name Of Business</td>
                            <td class="value" id="">{!! $maindata['Name_Of_Business'] !!} </td>
                        </tr>
                        @endif
                        @if(!empty($maindata['Tax_ID'] ))
                        <tr>
                            <td class="field" id="">Tax ID# (EIN)</td>
                            <td class="value" id=""> {!! $maindata['Tax_ID'] !!}</td>
                        </tr>
                        @endif
                        @if(!empty($maindata['Business_Activity'] ))
                        <tr>
                            <td class="field" id="">Business Activity</td>
                            <td class="value" id=""> {!! $maindata['Business_Activity'] !!}</td>
                        </tr>
                        @endif
                        @if(!empty($maindata['Do_you_have_a_profit_and_loss_statement'] ))
                        <tr>
                            <td class="field" id="">Do you have a profit and loss statement</td>
                            <td class="value" id=""> {!! $maindata['Do_you_have_a_profit_and_loss_statement'] !!}</td>
                        </tr>
                        @endif
                        @if(($maindata['Do_you_have_a_profit_and_loss_statement'] == 'Yes' ) )
                         @if(!empty($maindata['Upload_Profit_Loss_Statement'] ))
                        <tr>
                            <td class="field" id="">Upload Profit & Loss Statement</td>
                            <td class="value" id=""> <a href="@php echo URL::to('/').'/public/'.$maindata['Upload_Profit_Loss_Statement']; @endphp"
                            style="display: block; margin-bottom: 10px;">@php echo URL::to('/').'/public/'.$maindata['Upload_Profit_Loss_Statement']; @endphp</a></td>
                        </tr>
                        @endif
                        @endif
                        @if(($maindata['Do_you_have_a_profit_and_loss_statement'] == 'No' ) )

                            @if(!empty($maindata['Accounting'] ))
                            <tr>
                                <td class="field" id="">Accounting </td>
                                <td class="value" id=""> {!! $maindata['Accounting'] !!}</td>
                            </tr>
                            @endif
                            @if(!empty($maindata['Advertising'] ))
                            <tr>
                                <td class="field" id="">Advertising</td>
                                <td class="value" id=""> {!! $maindata['Advertising'] !!}</td>
                            </tr>
                            @endif
                            @if(!empty($maindata['Alarm_Security_Installation'] ))
                            <tr>
                                <td class="field" id="">Alarm/Security Installation</td>
                                <td class="value" id=""> {!! $maindata['Alarm_Security_Installation'] !!}</td>
                            </tr>
                            @endif
                            @if(!empty($maindata['Alarm_Security_Monitoring'] ))
                            <tr>
                                <td class="field" id="">Alarm/Security Monitoring</td>
                                <td class="value" id=""> {!! $maindata['Alarm_Security_Monitoring'] !!}</td>
                            </tr>
                            @endif
                            @if(!empty($maindata['Appraisal_Fees'] ))
                            <tr>
                                <td class="field" id="">Appraisal Fees</td>
                                <td class="value" id=""> {!! $maindata['Appraisal_Fees'] !!}</td>
                            </tr>
                            @endif
                            @if(!empty($maindata['Auto_Truck_Expenses'] ))
                            <tr>
                                <td class="field" id="">Auto Truck Expenses</td>
                                <td class="value" id=""> {!! $maindata['Auto_Truck_Expenses'] !!}</td>
                            </tr>
                            @endif
                            @if(!empty($maindata['Bad_Debt_Includes_In_Gross_Income'] ))
                            <tr>
                                <td class="field" id="">Bad Debt Includes In Gross Income</td>
                                <td class="value" id=""> {!! $maindata['Bad_Debt_Includes_In_Gross_Income'] !!}</td>
                            </tr>
                            @endif
                            @if(!empty($maindata['Bank_Service_Charges'] ))
                            <tr>
                                <td class="field" id="">Bank Service Charges</td>
                                <td class="value" id=""> {!! $maindata['Bank_Service_Charges'] !!}</td>
                            </tr>
                            @endif
                            @if(!empty($maindata['Books_Subscrp_Publications'] ))
                            <tr>
                                <td class="field" id="">Books, Subscription & Publications</td>
                                <td class="value" id=""> {!! $maindata['Books_Subscrp_Publications'] !!}</td>
                            </tr>
                            @endif
                            @if(!empty($maindata['Client_Misc_Gov_Fees_Inc_In_Income'] ))
                            <tr>
                                <td class="field" id="">Client Misc. Gov. Fees Inc. In Income</td>
                                <td class="value" id=""> {!! $maindata['Client_Misc_Gov_Fees_Inc_In_Income'] !!}</td>
                            </tr>
                            @endif
                            @if(!empty($maindata['Commission_Outside_Services'] ))
                            <tr>
                                <td class="field" id="">Commission/Outside Services</td>
                                <td class="value" id=""> {!! $maindata['Commission_Outside_Services'] !!}</td>
                            </tr>
                            @endif
                            @if(!empty($maindata['Credit_Card_Discount_Fees'] ))
                            <tr>
                                <td class="field" id="">Credit Card Discount Fees</td>
                                <td class="value" id=""> {!! $maindata['Credit_Card_Discount_Fees'] !!}</td>
                            </tr>
                            @endif
                            @if(!empty($maindata['Credit_Card_Min_Usage_Fees'] ))
                            <tr>
                                <td class="field" id="">Credit Card Min Usage Fees</td>
                                <td class="value" id=""> {!! $maindata['Credit_Card_Min_Usage_Fees'] !!}</td>
                            </tr>
                            @endif
                            @if(!empty($maindata['Depreciation_From_Prior_Year_Income_Tax'] ))
                            <tr>
                                <td class="field" id="">Depreciation From Prior Year Income Tax</td>
                                <td class="value" id=""> {!! $maindata['Depreciation_From_Prior_Year_Income_Tax'] !!}</td>
                            </tr>
                            @endif
                            @if(!empty($maindata['Domain_Name_Registration'] ))
                            <tr>
                                <td class="field" id="">Domain Name Registration</td>
                                <td class="value" id=""> {!! $maindata['Domain_Name_Registration'] !!}</td>
                            </tr>
                            @endif
                            @if(!empty($maindata['Dues_Membership'] ))
                            <tr>
                                <td class="field" id="">Dues & Membership</td>
                                <td class="value" id=""> {!! $maindata['Dues_Membership'] !!}</td>
                            </tr>
                            @endif
                            @if(!empty($maindata['Education_Expenses'] ))
                            <tr>
                                <td class="field" id="">Education Expenses</td>
                                <td class="value" id=""> {!! $maindata['Education_Expenses'] !!}</td>
                            </tr>
                            @endif
                            @if(!empty($maindata['Employee_Benefits'] ))
                            <tr>
                                <td class="field" id="">Employee Benefits</td>
                                <td class="value" id=""> {!! $maindata['Employee_Benefits'] !!}</td>
                            </tr>
                            @endif
                            @if(!empty($maindata['Employee_Customer_Awards_Prices_Troph'] ))
                            <tr>
                                <td class="field" id="">Employee/Customer Awards, Prices & Trophy</td>
                                <td class="value" id=""> {!! $maindata['Employee_Customer_Awards_Prices_Troph'] !!}</td>
                            </tr>
                            @endif
                            @if(!empty($maindata['Entertainment'] ))
                            <tr>
                                <td class="field" id="">Entertainment</td>
                                <td class="value" id=""> {!! $maindata['Entertainment'] !!}</td>
                            </tr>
                            @endif
                            @if(!empty($maindata['Equipment_Machinery_Purchased'] ))
                            <tr>
                                <td class="field" id="">Equipment & Machinery Purchased</td>
                                <td class="value" id=""> {!! $maindata['Equipment_Machinery_Purchased'] !!}</td>
                            </tr>
                            @endif
                            @if(!empty($maindata['Exhibit_Show'] ))
                            <tr>
                                <td class="field" id="">Exhibit/Show</td>
                                <td class="value" id=""> {!! $maindata['Exhibit_Show'] !!}</td>
                            </tr>
                            @endif
                            @if(!empty($maindata['Film_Developing'] ))
                            <tr>
                                <td class="field" id="">Film & Developing</td>
                                <td class="value" id=""> {!! $maindata['Film_Developing'] !!}</td>
                            </tr>
                            @endif
                            @if(!empty($maindata['Flower_Cards'] ))
                            <tr>
                                <td class="field" id="">Flower & Cards</td>
                                <td class="value" id=""> {!! $maindata['Flower_Cards'] !!}</td>
                            </tr>
                            @endif
                            @if(!empty($maindata['Franchise_Fees'] ))
                            <tr>
                                <td class="field" id="">Franchise Fees</td>
                                <td class="value" id=""> {!! $maindata['Franchise_Fees'] !!}</td>
                            </tr>
                            @endif
                            @if(!empty($maindata['Fuel'] ))
                            <tr>
                                <td class="field" id="">Fuel (For Trucking Business)</td>
                                <td class="value" id=""> {!! $maindata['Fuel'] !!}</td>
                            </tr>
                            @endif
                            @if(!empty($maindata['Furniture_Fixtures'] ))
                            <tr>
                                <td class="field" id="">Furniture & Fixtures</td>
                                <td class="value" id=""> {!! $maindata['Furniture_Fixtures'] !!}</td>
                            </tr>
                            @endif
                            @if(!empty($maindata['Gift_To_Employee_Client'] ))
                            <tr>
                                <td class="field" id="">Gift To Employee/Client</td>
                                <td class="value" id=""> {!! $maindata['Gift_To_Employee_Client'] !!}</td>
                            </tr>
                            @endif
                            @if(!empty($maindata['Goodwill'] ))
                            <tr>
                                <td class="field" id="">Goodwill</td>
                                <td class="value" id=""> {!! $maindata['Goodwill'] !!}</td>
                            </tr>
                            @endif
                            @if(!empty($maindata['Graphic_Design_Fees'] ))
                            <tr>
                                <td class="field" id="">Graphic Design Fees</td>
                                <td class="value" id=""> {!! $maindata['Graphic_Design_Fees'] !!}</td>
                            </tr>
                            @endif
                            @if(!empty($maindata['Home_Office'] ))
                            <tr>
                                <td class="field" id="">Home Office</td>
                                <td class="value" id=""> {!! $maindata['Home_Office'] !!}</td>
                            </tr>
                            @endif
                            @if(!empty($maindata['Hotel_Motel_Inn'] ))
                            <tr>
                                <td class="field" id="">Hotel/Motel/Inn</td>
                                <td class="value" id=""> {!! $maindata['Hotel_Motel_Inn'] !!}</td>
                            </tr>
                            @endif
                            @if(!empty($maindata['Insurance_Bus_Interruption'] ))
                            <tr>
                                <td class="field" id="">Insurance Bus. Interruption</td>
                                <td class="value" id=""> {!! $maindata['Insurance_Bus_Interruption'] !!}</td>
                            </tr>
                            @endif
                            @if(!empty($maindata['Insurance_For_Employees'] ))
                            <tr>
                                <td class="field" id="">Insurance For Employees</td>
                                <td class="value" id=""> {!! $maindata['Insurance_For_Employees'] !!}</td>
                            </tr>
                            @endif
                            @if(!empty($maindata['Insurance_Liability'] ))
                            <tr>
                                <td class="field" id="">Insurance Liability</td>
                                <td class="value" id=""> {!! $maindata['Insurance_Liability'] !!}</td>
                            </tr>
                            @endif
                            @if(!empty($maindata['Insurance_Other'] ))
                            <tr>
                                <td class="field" id="">Insurance (Other)</td>
                                <td class="value" id=""> {!! $maindata['Insurance_Other'] !!}</td>
                            </tr>
                            @endif
                            @if(!empty($maindata['Insurance_Work_Comp'] ))
                            <tr>
                                <td class="field" id="">Insurance Work. Company</td>
                                <td class="value" id=""> {!! $maindata['Insurance_Work_Comp'] !!}</td>
                            </tr>
                            @endif
                            @if(!empty($maindata['Internet_Services'] ))
                            <tr>
                                <td class="field" id="">Internet Services</td>
                                <td class="value" id=""> {!! $maindata['Internet_Services'] !!}</td>
                            </tr>
                            @endif
                            @if(!empty($maindata['Inventory_Beginning_Of_The_Year'] ))
                            <tr>
                                <td class="field" id="">Inventory Beginning Of The Year</td>
                                <td class="value" id=""> {!! $maindata['Inventory_Beginning_Of_The_Year'] !!}</td>
                            </tr>
                            @endif
                            @if(!empty($maindata['Inventory_Breakage_Spoilage_Exp_Unreturn'] ))
                            <tr>
                                <td class="field" id="">Inventory Breakage/Spoilage Exp Unreturn</td>
                                <td class="value" id=""> {!! $maindata['Inventory_Breakage_Spoilage_Exp_Unreturn'] !!}</td>
                            </tr>
                            @endif
                            @if(!empty($maindata['Inventory_Ending_Of_The_Year'] ))
                            <tr>
                                <td class="field" id="">Inventory Ending Of The Year</td>
                                <td class="value" id=""> {!! $maindata['Inventory_Ending_Of_The_Year'] !!}</td>
                            </tr>
                            @endif
                            @if(!empty($maindata['Inventory_Purchases'] ))
                            <tr>
                                <td class="field" id="">Inventory Purchases</td>
                                <td class="value" id=""> {!! $maindata['Inventory_Purchases'] !!}</td>
                            </tr>
                            @endif
                            @if(!empty($maindata['Inventory_Theft_Loss'] ))
                            <tr>
                                <td class="field" id="">Inventory Theft/Loss</td>
                                <td class="value" id=""> {!! $maindata['Inventory_Theft_Loss'] !!}</td>
                            </tr>
                            @endif
                            @if(!empty($maindata['IRA_Regular_Or_SEP_IRA_Contributed_Year'] ))
                            <tr>
                                <td class="field" id="">IRA Regular Or SEP IRA Contributed Year</td>
                                <td class="value" id=""> {!! $maindata['IRA_Regular_Or_SEP_IRA_Contributed_Year'] !!}</td>
                            </tr>
                            @endif
                            @if(!empty($maindata['Landscaping'] ))
                            <tr>
                                <td class="field" id="">Landscaping</td>
                                <td class="value" id=""> {!! $maindata['Landscaping'] !!}</td>
                            </tr>
                            @endif
                            @if(!empty($maindata['Laundry_Cleaning'] ))
                            <tr>
                                <td class="field" id="">LanLaundry & Cleaningdscaping</td>
                                <td class="value" id=""> {!! $maindata['Laundry_Cleaning'] !!}</td>
                            </tr>
                            @endif
                            @if(!empty($maindata['Legal_Professional_Services'] ))
                            <tr>
                                <td class="field" id="">Legal & Professional Services</td>
                                <td class="value" id=""> {!! $maindata['Legal_Professional_Services'] !!}</td>
                            </tr>
                            @endif
                            @if(!empty($maindata['Licenses_Permits'] ))
                            <tr>
                                <td class="field" id="">Licenses & Permits</td>
                                <td class="value" id=""> {!! $maindata['Licenses_Permits'] !!}</td>
                            </tr>
                            @endif
                            @if(!empty($maindata['Licenses_Permits_For_Client_Projects'] ))
                            <tr>
                                <td class="field" id="">Licenses & Permits For Client Projects</td>
                                <td class="value" id=""> {!! $maindata['Licenses_Permits_For_Client_Projects'] !!}</td>
                            </tr>
                            @endif
                            @if(!empty($maindata['Locksmith_Keys_Lock_Boxes'] ))
                            <tr>
                                <td class="field" id="">Locksmith/Keys/Lock Boxes</td>
                                <td class="value" id=""> {!! $maindata['Locksmith_Keys_Lock_Boxes'] !!}</td>
                            </tr>
                            @endif
                            @if(!empty($maindata['Meals_50_Bus'] ))
                            <tr>
                                <td class="field" id="">Meals 50% Bus</td>
                                <td class="value" id=""> {!! $maindata['Meals_50_Bus'] !!}</td>
                            </tr>
                            @endif
                            @if(!empty($maindata['Medical_Insurance'] ))
                            <tr>
                                <td class="field" id="">Medical Insurance</td>
                                <td class="value" id=""> {!! $maindata['Medical_Insurance'] !!}</td>
                            </tr>
                            @endif
                            @if(!empty($maindata['Mileage_Business'] ))
                            <tr>
                                <td class="field" id="">Mileage - Businesse</td>
                                <td class="value" id=""> {!! $maindata['Mileage_Business'] !!}</td>
                            </tr>
                            @endif
                            @if(!empty($maindata['Moving_Exp'] ))
                            <tr>
                                <td class="field" id="">Moving Exp.</td>
                                <td class="value" id=""> {!! $maindata['Moving_Exp'] !!}</td>
                            </tr>
                            @endif
                            @if(!empty($maindata['Notary_Services'] ))
                            <tr>
                                <td class="field" id="">Notary Services</td>
                                <td class="value" id=""> {!! $maindata['Notary_Services'] !!}</td>
                            </tr>
                            @endif
                            @if(!empty($maindata['Parking'] ))
                            <tr>
                                <td class="field" id="">Parking</td>
                                <td class="value" id=""> {!! $maindata['Parking'] !!}</td>
                            </tr>
                            @endif
                            @if(!empty($maindata['Pension_Plan'] ))
                            <tr>
                                <td class="field" id="">Pension Plan</td>
                                <td class="value" id=""> {!! $maindata['Pension_Plan'] !!}</td>
                            </tr>
                            @endif
                            @if(!empty($maindata['Pest_Control'] ))
                            <tr>
                                <td class="field" id="">Pest Control</td>
                                <td class="value" id=""> {!! $maindata['Pest_Control'] !!}</td>
                            </tr>
                            @endif
                            @if(!empty($maindata['Postage_Delivery_Freight_Shipping'] ))
                            <tr>
                                <td class="field" id="">Postage & Delivery Freight/Shipping</td>
                                <td class="value" id=""> {!! $maindata['Postage_Delivery_Freight_Shipping'] !!}</td>
                            </tr>
                            @endif
                            @if(!empty($maindata['Printing_Reproductions'] ))
                            <tr>
                                <td class="field" id="">Printing/Reproductions</td>
                                <td class="value" id=""> {!! $maindata['Printing_Reproductions'] !!}</td>
                            </tr>
                            @endif
                            @if(!empty($maindata['Promotional_Exp_Products_Or_Services'] ))
                            <tr>
                                <td class="field" id="">Promotional Exp. Products Or Services</td>
                                <td class="value" id=""> {!! $maindata['Promotional_Exp_Products_Or_Services'] !!}</td>
                            </tr>
                            @endif
                            @if(!empty($maindata['Rent_Business_Location'] ))
                            <tr>
                                <td class="field" id="">Rent Business Location</td>
                                <td class="value" id=""> {!! $maindata['Rent_Business_Location'] !!}</td>
                            </tr>
                            @endif
                            @if(!empty($maindata['Rent_Furniture'] ))
                            <tr>
                                <td class="field" id="">Rent/Furniture</td>
                                <td class="value" id=""> {!! $maindata['Rent_Furniture'] !!}</td>
                            </tr>
                            @endif
                            @if(!empty($maindata['Rent_Lease_Auto_And_Or_Truck'] ))
                            <tr>
                                <td class="field" id="">Rent/Lease Auto And Or Truck</td>
                                <td class="value" id=""> {!! $maindata['Rent_Lease_Auto_And_Or_Truck'] !!}</td>
                            </tr>
                            @endif
                            @if(!empty($maindata['Rent_Lease_PO_Box_Storage'] ))
                            <tr>
                                <td class="field" id="">Rent/Lease P.O. Box/Storage</td>
                                <td class="value" id=""> {!! $maindata['Rent_Lease_PO_Box_Storage'] !!}</td>
                            </tr>
                            @endif
                            @if(!empty($maindata['Rent_Lease_Equipment'] ))
                            <tr>
                                <td class="field" id="">Rent/Lease Equipment</td>
                                <td class="value" id=""> {!! $maindata['Rent_Lease_Equipment'] !!}</td>
                            </tr>
                            @endif
                            @if(!empty($maindata['Repair_Building'] ))
                            <tr>
                                <td class="field" id="">Repair Building</td>
                                <td class="value" id=""> {!! $maindata['Repair_Building'] !!}</td>
                            </tr>
                            @endif
                            @if(!empty($maindata['Repair_Equipment'] ))
                            <tr>
                                <td class="field" id="">Repair Equipment</td>
                                <td class="value" id=""> {!! $maindata['Repair_Equipment'] !!}</td>
                            </tr>
                            @endif
                            @if(!empty($maindata['Research_Expenses'] ))
                            <tr>
                                <td class="field" id="">Research Expenses</td>
                                <td class="value" id=""> {!! $maindata['Research_Expenses'] !!}</td>
                            </tr>
                            @endif
                            @if(!empty($maindata['Royalty_For_Franchise'] ))
                            <tr>
                                <td class="field" id="">Royalty For Franchise</td>
                                <td class="value" id=""> {!! $maindata['Royalty_For_Franchise'] !!}</td>
                            </tr>
                            @endif
                            @if(!empty($maindata['Salaries_Wages'] ))
                            <tr>
                                <td class="field" id="">Salaries & Wages</td>
                                <td class="value" id=""> {!! $maindata['Salaries_Wages'] !!}</td>
                            </tr>
                            @endif
                            @if(!empty($maindata['Samples_Expenses'] ))
                            <tr>
                                <td class="field" id="">Samples Expenses</td>
                                <td class="value" id=""> {!! $maindata['Samples_Expenses'] !!}</td>
                            </tr>
                            @endif
                            @if(!empty($maindata['Seasonal_Bus_Decorations'] ))
                            <tr>
                                <td class="field" id="">Seasonal Bus Decorations</td>
                                <td class="value" id=""> {!! $maindata['Seasonal_Bus_Decorations'] !!}</td>
                            </tr>
                            @endif
                            @if(!empty($maindata['Signs_Flags_Banners'] ))
                            <tr>
                                <td class="field" id="">Signs/Flags/Banners</td>
                                <td class="value" id=""> {!! $maindata['Signs_Flags_Banners'] !!}</td>
                            </tr>
                            @endif
                            @if(!empty($maindata['Software_Upgrades'] ))
                            <tr>
                                <td class="field" id="">Software & Upgrades</td>
                                <td class="value" id=""> {!! $maindata['Software_Upgrades'] !!}</td>
                            </tr>
                            @endif
                            @if(!empty($maindata['Supplies_Shop'] ))
                            <tr>
                                <td class="field" id="">Supplies Shop</td>
                                <td class="value" id=""> {!! $maindata['Supplies_Shop'] !!}</td>
                            </tr>
                            @endif
                            @if(!empty($maindata['Supplies_Office'] ))
                            <tr>
                                <td class="field" id="">Supplies Office</td>
                                <td class="value" id=""> {!! $maindata['Supplies_Office'] !!}</td>
                            </tr>
                            @endif
                            @if(!empty($maindata['Swimming_PoolPurchased_Or_Installed'] ))
                            <tr>
                                <td class="field" id="">Swimming Pool Purchased Or Installed</td>
                                <td class="value" id=""> {!! $maindata['Swimming_PoolPurchased_Or_Installed'] !!}</td>
                            </tr>
                            @endif
                            @if(!empty($maindata['Swimming_Pool_Services'] ))
                            <tr>
                                <td class="field" id="">Swimming Pool Services</td>
                                <td class="value" id=""> {!! $maindata['Swimming_Pool_Services'] !!}</td>
                            </tr>
                            @endif
                            @if(!empty($maindata['Tax_Estimated_FTB_Sole_Corp_LLC'] ))
                            <tr>
                                <td class="field" id="">Tax Estimated FTB Sole Corp LLC</td>
                                <td class="value" id=""> {!! $maindata['Tax_Estimated_FTB_Sole_Corp_LLC'] !!}</td>
                            </tr>
                            @endif
                            @if(!empty($maindata['Tax_Estimated_IRS_Sole_Corp_LLC'] ))
                            <tr>
                                <td class="field" id="">Tax Estimated IRS Sole Corp LLC</td>
                                <td class="value" id=""> {!! $maindata['Tax_Estimated_IRS_Sole_Corp_LLC'] !!}</td>
                            </tr>
                            @endif
                            @if(!empty($maindata['Tax_Real_Estate_House_Business'] ))
                            <tr>
                                <td class="field" id="">Tax Real Estate House/Business</td>
                                <td class="value" id=""> {!! $maindata['Tax_Real_Estate_House_Business'] !!}</td>
                            </tr>
                            @endif
                            @if(!empty($maindata['Tax_Sale_That_Included_In_Income'] ))
                            <tr>
                                <td class="field" id="">Tax Sale That Included In Income</td>
                                <td class="value" id=""> {!! $maindata['Tax_Sale_That_Included_In_Income'] !!}</td>
                            </tr>
                            @endif
                            @if(!empty($maindata['Taxes_Payroll_Employers_Portion'] ))
                            <tr>
                                <td class="field" id="">Taxes Payroll (Employer's Portion)</td>
                                <td class="value" id=""> {!! $maindata['Taxes_Payroll_Employers_Portion'] !!}</td>
                            </tr>
                            @endif
                            @if(!empty($maindata['Telephone_FAX_Pager_Cell'] ))
                            <tr>
                                <td class="field" id="">Telephone/FAX/Pager/Cell</td>
                                <td class="value" id=""> {!! $maindata['Telephone_FAX_Pager_Cell'] !!}</td>
                            </tr>
                            @endif
                            @if(!empty($maindata['Tips_With_Verifiable_Receipts'] ))
                            <tr>
                                <td class="field" id="">Tips With Verifiable Receipts</td>
                                <td class="value" id=""> {!! $maindata['Tips_With_Verifiable_Receipts'] !!}</td>
                            </tr>
                            @endif
                            @if(!empty($maindata['Tools_Molds_Dies_Jigs'] ))
                            <tr>
                                <td class="field" id="">Tools, Molds, Dies, Jigs</td>
                                <td class="value" id=""> {!! $maindata['Tools_Molds_Dies_Jigs'] !!}</td>
                            </tr>
                            @endif
                            @if(!empty($maindata['Towing_Services'] ))
                            <tr>
                                <td class="field" id="">Towing Services</td>
                                <td class="value" id=""> {!! $maindata['Towing_Services'] !!}</td>
                            </tr>
                            @endif
                            @if(!empty($maindata['Trademark_Patent_Expenses'] ))
                            <tr>
                                <td class="field" id="">Trademark & Patent Expenses</td>
                                <td class="value" id=""> {!! $maindata['Trademark_Patent_Expenses'] !!}</td>
                            </tr>
                            @endif
                            @if(!empty($maindata['Travel'] ))
                            <tr>
                                <td class="field" id="">Travel</td>
                                <td class="value" id=""> {!! $maindata['Travel'] !!}</td>
                            </tr>
                            @endif
                            @if(!empty($maindata['Uniform_Cleaning_Services'] ))
                            <tr>
                                <td class="field" id="">Uniform Cleaning Services</td>
                                <td class="value" id=""> {!! $maindata['Uniform_Cleaning_Services'] !!}</td>
                            </tr>
                            @endif
                            @if(!empty($maindata['Uniform_Purchased'] ))
                            <tr>
                                <td class="field" id="">Uniform Purchased</td>
                                <td class="value" id=""> {!! $maindata['Uniform_Purchased'] !!}</td>
                            </tr>
                            @endif
                            @if(!empty($maindata['Utilities_Electric_Gas'] ))
                            <tr>
                                <td class="field" id="">Utilities Electric & Gas</td>
                                <td class="value" id=""> {!! $maindata['Utilities_Electric_Gas'] !!}</td>
                            </tr>
                            @endif
                            @if(!empty($maindata['Vandalism_Graffiti_Clean_Up_Fees'] ))
                            <tr>
                                <td class="field" id="">Vandalism/Graffiti Clean Up Fees</td>
                                <td class="value" id=""> {!! $maindata['Vandalism_Graffiti_Clean_Up_Fees'] !!}</td>
                            </tr>
                            @endif
                            @if(!empty($maindata['Wash_Vehicle_For_Trucking_Taxi_Business'] ))
                            <tr>
                                <td class="field" id="">Wash Vehicle For Trucking, Taxi Business</td>
                                <td class="value" id=""> {!! $maindata['Wash_Vehicle_For_Trucking_Taxi_Business'] !!}</td>
                            </tr>
                            @endif
                            @if(!empty($maindata['Waste_Disposal'] ))
                            <tr>
                                <td class="field" id="">Waste Disposal</td>
                                <td class="value" id=""> {!! $maindata['Waste_Disposal'] !!}</td>
                            </tr>
                            @endif
                            @if(!empty($maindata['Web_Design_Fees'] ))
                            <tr>
                                <td class="field" id="">Web Design Fees</td>
                                <td class="value" id=""> {!! $maindata['Web_Design_Fees'] !!}</td>
                            </tr>
                            @endif
                            @if(!empty($maindata['Web_Hosting_Fees'] ))
                            <tr>
                                <td class="field" id="">Web Hosting Fees</td>
                                <td class="value" id=""> {!! $maindata['Web_Hosting_Fees'] !!}</td>
                            </tr>
                            @endif
                            @if(!empty($maindata['Other'] ))
                            <tr>
                                <td class="field" id="">Other</td>
                                <td class="value" id=""> {!! $maindata['Other'] !!}</td>
                            </tr>
                            @endif
                            @if(!empty($maindata['Other1'] ))
                            <tr>
                                <td class="field" id="">Other 2</td>
                                <td class="value" id=""> {!! $maindata['Other1'] !!}</td>
                            </tr>
                            @endif
                            
                        @endif
                        <!-- ::  Vehicle Information & Expenses: head-->
                        @if(!empty($maindata['How_many_motor_vehicles_do_you_have'] ))
                        <tr>
                            <td class="field" id="">How many motor vehicles do you have?</td>
                            <td class="value" id=""> {!! $maindata['How_many_motor_vehicles_do_you_have'] !!}</td>
                        </tr>
                        @endif

                       

                        @if($vehicle_array > 0)
                            @php
                                  $sno = 1; 
                            @endphp
                            @foreach($vehicle_array as $array)
                            <tr>
                                <td class="field" id="">
                                    <h3>Vehicle {{$sno}}</h3>
                                </td>
                                <td class="value" id=""> </td>
                            </tr>
                            <!-- ::  Vehicle Information & Expenses: -->
                            
                            <!-- ::  Vehicle Information & Expenses: -->
                            <tr>
                                <td class="field" id="">Description of vehicle</td>
                                <td class="value" id=""> {{$array['Description_of_vehicle']}}</td>
                            </tr>
                            <!-- ::  Is the vehicle used in business or by an employee -->
                            <tr>
                                <td class="field" id="">Is the vehicle used in business or by an employee</td>
                                <td class="value" id=""> {{$array['Is_the_vehicle_used_in_business_or_by_an_employee']}}</td>
                            </tr>
                            <!-- ::  Cost (including sales tax) -->
                            <tr>
                                <td class="field" id="">Cost (including sales tax)</td>
                                <td class="value" id=""> {{$array['Cost']}}</td>
                            </tr>
                            <!-- ::  Date placed in service -->
                            <tr>
                                <td class="field" id="">Date placed in service</td>
                                <td class="value" id=""> {{$array['Date_placed_in_service']}}</td>
                            </tr>
                            <!-- ::  Business Miles -->
                            <tr>
                                <td class="field" id="">Business Miles</td>
                                <td class="value" id=""> {{$array['Business_Miles']}}</td>
                            </tr>
                            <!-- ::  Commuting miles -->
                            <tr>
                                <td class="field" id="">Commuting miles</td>
                                <td class="value" id=""> {{$array['Commuting_miles']}}</td>
                            </tr>
                            <!-- ::  Other personal use miles -->
                            <tr>
                                <td class="field" id="">Other personal use miles</td>
                                <td class="value" id=""> {{$array['Other_personal_use_miles']}}</td>
                            </tr>
                            <!-- ::  Total miles driven -->
                            <tr>
                                <td class="field" id="">Total miles driven</td>
                                <td class="value" id=""> {{$array['total_miles_driven']}}</td>
                            </tr>
                            <!-- ::  Gas & oil expenses -->
                            <tr>
                                <td class="field" id="">Gas & oil expenses</td>
                                <td class="value" id=""> {{$array['Gas_oil_expenses']}}</td>
                            </tr>
                            <!-- ::  Repairs & Maintenance -->
                            <tr>
                                <td class="field" id="">Repairs & Maintenance</td>
                                <td class="value" id=""> {{$array['Repairs_Maintenance']}}</td>
                            </tr>
                            <!-- ::  Auto insurance-->
                            <tr>
                                <td class="field" id="">Auto insurance</td>
                                <td class="value" id=""> {{$array['Auto_insurance']}}</td>
                            </tr>
                            <!-- ::  Registration, licenses, and fees-->
                            <tr>
                                <td class="field" id="">Registration, licenses, and fees</td>
                                <td class="value" id=""> {{$array['Registration_licenses_and_fees']}}</td>
                            </tr>
                            <!-- ::  Other auto expenses (identify)-->
                            <tr>
                                <td class="field" id="">Other auto expenses (identify)</td>
                                <td class="value" id=""> {{$array['Other_auto_expenses']}}</td>
                            </tr>
                            <!-- ::  Auto rentals-->
                            <tr>
                                <td class="field" id="">Auto rentals</td>
                                <td class="value" id=""> {{$array['Auto_rentals']}}</td>
                            </tr>
                            <!-- ::  Is another car available for person use-->
                            <tr>
                                <td class="field" id="">Is another car available for person use</td>
                                <td class="value" id=""> {{$array['Is_another_car_available_for_person_use']}}</td>
                            </tr>
                            <!-- ::  Do you have evidence to support your mileage information-->
                            <tr>
                                <td class="field" id="">Do you have evidence to support your mileage information</td>
                                <td class="value" id=""> {{$array['Do_you_have_evidence_to_support_your_mileage_information']}}</td>
                            </tr>
                            <!-- ::  If yes is the evidence written in a log or another place-->
                            <tr>
                                <td class="field" id="">If yes is the evidence written in a log or another place</td>
                                <td class="value" id=""> {{$array['If_yes_is_the_evidence_written_in_a_log_or_another_place']}}</td>
                            </tr>

                            @php
                               $sno++;
                            @endphp
                            @endforeach
                        @endif

                    @endif
                    

                    @if(!empty($maindata['Do_you_have_any_dependents_EXCLUDING_yourself_and_your_spouse'] ))
                    <!-- <tr>
                        <td class="" id="">
                            <h2>Dependents</h2>
                        </td>
                        <td class="value" id=""> </td>
                    </tr> -->
                    <!-- ::  Dependents head ::-->
                    <tr>
                        <td class="field" id="">Do you have any dependents; EXCLUDING yourself and your spouse?</td>
                        <td class="value" id=""> {!! $maindata['Do_you_have_any_dependents_EXCLUDING_yourself_and_your_spouse'] !!}</td>
                    </tr>
                    @endif

                    @if(($maindata['Do_you_have_any_dependents_EXCLUDING_yourself_and_your_spouse'] == 'Yes'))
                    @if(!empty($maindata['How_many_dependents_do_you_have'] ))
                    <tr>
                        <td class="field" id="">How many dependents do you have?</td>
                        <td class="value" id=""> {!! $maindata['How_many_dependents_do_you_have'] !!}</td>
                    </tr>
                    @endif
                    @endif
                    <!-- ::  Dependent 1-->

                    @if($dependent_array > 0)
                    @php
                          $sno = 1;
                         
                    @endphp
                    @foreach($dependent_array as $dep)
                    <tr>
                        <td class="" id="">
                            <h3>Dependent {{$sno}}</h3>
                        </td>
                        <td class="" id=""></td>
                    </tr>
                    <!-- ::  Name-->
                    <tr>
                        <td class="field" id="">Name</td>
                        <td class="value" id=""> {{$dep['Name']}}</td>
                    </tr>
                    <!-- ::  Name-->
                    <tr>
                        <td class="field" id="">Date Of Birth</td>
                        <td class="value" id=""> {{$dep['Date_Of_Birth']}}</td>
                    </tr>
                    <!-- ::  SSN-->
                    <tr>
                        <td class="field" id="">SSN</td>
                        <td class="value" id=""> {{$dep['SSN']}}</td>
                    </tr>
                    <!-- ::  SSN-->
                    <tr>
                        <td class="field" id="">Relationship</td>
                        <td class="value" id=""> {{$dep['Relationship']}}</td>
                    </tr>
                    <!-- ::  SSN-->
                    @if(!empty($dep['Upload_Birth_Certificate_or_SSN_Card'] ))
                    <tr>
                        <td class="field" id="">Dependent (Upload Birth Certificate or SSN Card)</td>
                        <td class="value" id="">
                            <a href="@php echo URL::to('/').'/public/'.$dep['Upload_Birth_Certificate_or_SSN_Card']; @endphp" style="display: block; margin-bottom: 10px;">@php echo URL::to('/').'/public/'.$dep['Upload_Birth_Certificate_or_SSN_Card']; @endphp</a>
                        </td>
                    </tr>
                    @endif
                    <!-- ::  SSN-->
                    @if(!empty($dep['Upload_School_records_or_write_a_letter_if_not_in_school'] ))
                    <tr>
                        <td class="field" id="">Dependent (Upload School records or write a letter if not in school)
                        </td>
                        <td class="value" id=""> 
                            <a href="@php echo URL::to('/').'/public/'.$dep['Upload_School_records_or_write_a_letter_if_not_in_school']; @endphp" style="display: block; margin-bottom: 10px;">@php echo URL::to('/').'/public/'.$dep['Upload_School_records_or_write_a_letter_if_not_in_school']; @endphp</a>
                        </td>
                    </tr>
                    @endif
                    @php
                       $sno++;
                    @endphp
                    @endforeach
                    @endif

                    @if(!empty($maindata['Did_your_marital_status_change_during_the_year'] ))
                    <!-- <tr>
                        <td class="" id="">
                            <h2>Tax Questions</h2>
                        </td>
                        <td class="" id=""></td>
                    </tr> -->
                    <!-- ::  SSN-->
                    <tr>
                        <td class="field" id="">Did your marital status change during the year?</td>
                        <td class="value" id=""> {!! $maindata['Did_your_marital_status_change_during_the_year'] !!}</td>
                    </tr>
                    @endif
                    @if(!empty($maindata['Did_your_address_change_from_last_year'] ))
                    <tr>
                        <td class="field" id="">Did your address change from last year?</td>
                        <td class="value" id="">{!! $maindata['Did_your_address_change_from_last_year'] !!}</td>
                    </tr>
                    @endif
                    @if(!empty($maindata['Can_you_be_claimed_as_a_dependent_by_another_tax_payer'] ))
                    <tr>
                        <td class="field" id="">Can you be claimed as a dependent by another tax payer?</td>
                        <td class="value" id="">{!! $maindata['Can_you_be_claimed_as_a_dependent_by_another_tax_payer'] !!}</td>
                    </tr>
                    @endif
                    @if(!empty($maindata['Did_you_take_out_a_home_equity_loan_this_year'] ))
                    <tr>
                        <td class="field" id="">Did you take out a home equity loan this year?</td>
                        <td class="value" id="">{!! $maindata['Did_you_take_out_a_home_equity_loan_this_year'] !!}</td>
                    </tr>
                    @endif
                    @if(!empty($maindata['Did_you_acquire_or_dispose_of_any_stocks_or_bonds_during_the_yea'] ))
                    <tr>
                        <td class="field" id="">Did you acquire or dispose of any stocks or bonds during the year?</td>
                        <td class="value" id="">{!! $maindata['Did_you_acquire_or_dispose_of_any_stocks_or_bonds_during_the_yea'] !!}</td>
                    </tr>
                    @endif
                    @if(($maindata['Did_you_acquire_or_dispose_of_any_stocks_or_bonds_during_the_yea'] == 'Yes'))
                    <tr>
                        <td class="field" id="">Upload Form 1099-B</td>
                        <td class="value" id=""><a href="@php echo URL::to('/').'/public/'.$maindata['Upload_Form_1099B']; @endphp"
                            style="display: block; margin-bottom: 10px;">@php echo URL::to('/').'/public/'.$maindata['Upload_Form_1099B']; @endphp</a></td>
                    </tr>
                    @endif
                    @if(!empty($maindata['Did_you_have_any_foreign_income_or_pay_any_foreign_taxes_during_'] ))
                    <tr>
                        <td class="field" id="">Did you have any foreign income or pay any foreign taxes during the
                            year?</td>
                        <td class="value" id="">{!! $maindata['Did_you_have_any_foreign_income_or_pay_any_foreign_taxes_during_'] !!}</td>
                    </tr>
                    @endif
                    @if(!empty($maindata['Did_you_receive_any_lump_sum_payment_from_a_pension_profit_shari'] ))
                    <tr>
                        <td class="field" id="">Did you receive any lump-sum payment from a pension, profit sharing or
                            401(k) plan?</td>
                        <td class="value" id="">{!! $maindata['Did_you_receive_any_lump_sum_payment_from_a_pension_profit_shari'] !!}</td>
                    </tr>
                    @endif
                    @if(!empty($maindata['Did_you_make_any_withdrawals_from_an_IRA_Keogh_SIMPLE_or_SEP_acc'] ))
                    <tr>
                        <td class="field" id="">Did you make any withdrawals from an IRA, Keogh, SIMPLE, or SEP account?
                        </td>
                        <td class="value" id="">{!! $maindata['Did_you_make_any_withdrawals_from_an_IRA_Keogh_SIMPLE_or_SEP_acc'] !!}</td>
                    </tr>
                    @endif
                    @if(!empty($maindata['Did_you_make_any_non_cash_charitable_contributions'] ))
                    <tr>
                        <td class="field" id="">Did you make any non-cash charitable contributions (clothing, furniture,
                            etc.)</td>
                        <td class="value" id="">{!! $maindata['Did_you_make_any_non_cash_charitable_contributions'] !!}</td>
                    </tr>
                    @endif
                    @if(!empty($maindata['Did_you_use_your_car_on_the_job_for_other_than_commuting'] ))
                    <tr>
                        <td class="field" id="">Did you use your car on the job for other than commuting?</td>
                        <td class="value" id="">{!! $maindata['Did_you_use_your_car_on_the_job_for_other_than_commuting'] !!}</td>
                    </tr>
                    @endif
                    @if(!empty($maindata['Did_you_work_out_of_town_for_part_of_the_year'] ))
                    <tr>
                        <td class="field" id="">Did you work out of town for part of the year?</td>
                        <td class="value" id="">{!! $maindata['Did_you_work_out_of_town_for_part_of_the_year'] !!}</td>
                    </tr>
                    @endif
                    @if(!empty($maindata['Did_you_have_any_educational_expenses_during_the_year'] ))
                    <tr>
                        <td class="field" id="">Did you have any educational expenses during the year?</td>
                        <td class="value" id="">{!! $maindata['Did_you_have_any_educational_expenses_during_the_year'] !!}</td>
                    </tr>
                    @endif
                    @if(!empty($maindata['Did_you_have_any_child_care_expenses_other_than_Child_Support'] ))
                    <tr>
                        <td class="field" id="">Did you have any child care expenses other than Child Support?</td>
                        <td class="value" id="">{!! $maindata['Did_you_have_any_child_care_expenses_other_than_Child_Support'] !!}</td>
                    </tr>
                    @endif
                    @if(!empty($maindata['Did_you_have_any_child_care_expenses_other_than_Child_Support'] == 'Yes' ))
                    <tr>
                        <td class="" id="">
                            <h3>Child Care Expenses</h3>
                        </td>
                        <td class="" id=""></td>
                    </tr>
                    @if(!empty($maindata['Amount'] ))
                    <tr>
                        <td class="field" id="">Amount $</td>
                        <td class="value" id="">{!! $maindata['Amount'] !!}</td>
                    </tr>
                    @endif
                    @if(!empty($maindata['Number_of_children_cared_for'] ))
                    <tr>
                        <td class="field" id="">Number of children cared for</td>
                        <td class="value" id="">{!! $maindata['Number_of_children_cared_for'] !!}</td>
                    </tr>
                    @endif
                    @if(!empty($maindata['Services_Performed_in_your_house'] ))
                    <tr>
                        <td class="field" id="">Services Performed in your house?</td>
                        <td class="value" id="">{!! $maindata['Services_Performed_in_your_house'] !!}</td>
                    </tr>
                    @endif
                    @if(!empty($maindata['Name_address_of_provider'] ))
                    <tr>
                        <td class="field" id="">Name & address of provider</td>
                        <td class="value" id="">{!! $maindata['Name_address_of_provider'] !!}</td>
                    </tr>
                    @endif
                    @endif

                    @if(!empty($maindata['Are_you_your_spouse_and_all_dependents_covered_by_health_insuran'] ))
                    <tr>
                        <td class="field" id="">Are you, your spouse, and all dependents covered by health insurance?
                        </td>
                        <td class="value" id="">{!! $maindata['Are_you_your_spouse_and_all_dependents_covered_by_health_insuran'] !!}</td>
                    </tr>
                    @endif
                    @if(($maindata['Are_you_your_spouse_and_all_dependents_covered_by_health_insuran'] == 'Yes' || $maindata['Are_you_your_spouse_and_all_dependents_covered_by_health_insuran'] == 'Partial' ))
                    @if(!empty($maindata['Upload_all_1095_or_proof_of_insurance'] ))
                    <tr>
                        <td class="field" id="">Upload all 1095 or proof of insurance</td>
                        <td class="value" id=""><a href="@php echo URL::to('/').'/public/'.$maindata['Upload_all_1095_or_proof_of_insurance']; @endphp"
                            style="display: block; margin-bottom: 10px;">@php echo URL::to('/').'/public/'.$maindata['Upload_all_1095_or_proof_of_insurance']; @endphp</a></td>
                    </tr>
                    @endif
                    @endif
                    <!-- ::  Can you be claimed as a dependent by another tax payer?-->
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
                </tbody>
            </table>
        </div>
    </div>

</body>

</html>