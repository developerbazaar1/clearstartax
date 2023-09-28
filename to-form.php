<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="clearstarttax">
    <meta name="theme-color" content="#8AC8D6">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="HandheldFriendly" content="True">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
    <title>Tax Organizer</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- :: Main CSS-->
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!-- :: Responsive css -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- :: dropify css -->
    <link rel="stylesheet" type="text/css" href="css/dropify.min.css">
    <!-- :: Font-icon css-->
    <!-- :: favicon -->
    <link href="img/c-favicon.png" rel="icon">
    <link rel="stylesheet" type="text/css"
        href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<!-- :: body start -->

<body class="app sidebar-mini">
    <!-- ::header included  -->
    <?php include 'include/header.php';?>
    <!-- ::header included end  -->
    <!-- ::main content start from here -->
    <main class="app-content">
        <!-- :: client information head -->
        <div class="app-title">
            <div class="user-dashboard-welcome">
                <h1>Hello Christian Ha</h1>
                <h5 class="mt-10 mb-5px">"Logged in as management@clearstarttax.com!" </h5>
            </div>
            <div class="user-dashboard-welcome-d-image d-none-sm">
                <img class="paymenttop-image" src="img/documents.png">
            </div>
        </div>
        <!-- :: end client information head -->
        <!-- :: fq form start from here -->
        <section class="upayment-confirm-section">
            <div class="row justify-content-center">
                <!-- :: tab col start from here -->
                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 text-center">
                    <!-- :: first tab start from here -->
                    <div class="f-tab-cnt">
                        <h6>View your stored results below.</h6>
                        <div class="mt-3">
                            <a href="#" class="form-tab-switch-btn" id="switch-tab">Start New</a>
                        </div>
                        <!-- :: user form unfill fill detail show table start here -->
                        <div class="table-responsive w-nowrap mt-4">
                            <!-- :: table start here -->
                            <table class="table table-hover">
                                <!-- :: table head -->
                                <thead>
                                    <tr>
                                        <th>Reference</th>
                                        <th>Updated</th>
                                        <th>What Tax Year Is This Organ...</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Main Contact Phone Number</th>
                                        <th>2nd Contact Phone Number</th>
                                        <th>SSN#</th>
                                        <th>Date Of Birth</th>
                                        <th>Occupation</th>
                                        <th>Street Address</th>
                                        <th>Address Line 2</th>
                                        <th>City</th>
                                        <th>State</th>
                                        <th>Zip Code</th>
                                        <th>Country</th>
                                        <th>Rent Or Own eg. share rent...</th>
                                        <th>Client Filing Status</th>
                                        <th>Client Employment Status</th>
                                        <th>Do you have your W2's</th>
                                        <th>Upload your W2's</th>
                                        <th>We can file back year r..</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>SSN#</th>
                                        <th>Date Of Birth</th>
                                        <th>Occupaton</th>
                                        <th>Do you have any dependents;...</th>
                                        <th>How many dependents do you ...</th>
                                        <th>Did your marital status cha...</th>
                                        <th>Did your address change fro...</th>
                                        <th>Can you be claimed as a dep...</th>
                                        <th>Did you acquire or dispose ...</th>
                                        <th>Did you take out a home equ...</th>
                                        <th>Did you have any foreign in...</th>
                                        <th>Did you receive any lump-su...</th>
                                        <th>Did you make any withdrawal...</th>
                                        <th>Did you make any non-cash c...</th>
                                        <th>Did you use your car on the...</th>
                                        <th>Did you work out of town fo...</th>
                                        <th>Did you have any educationa...</th>
                                        <th>Did you have any child care...</th>
                                        <th>Are you, your spouse, and a...</th>
                                        <th>Do you have a profit and lo...</th>
                                        <th>Accounting</th>
                                        <th>Advertising </th>
                                        <th>Alarm/Security Installation </th>
                                        <th>Alarm/Security Monitoring</th>
                                        <th>Appraisal Fees</th>
                                        <th>Auto Truck Expenses</th>
                                        <th>Bad Debt Includes In Gross ...</th>
                                        <th>Bank Service Charges</th>
                                        <th>Books, Subscrp & Publications</th>
                                        <th>Client Misc. Gov. Fees Inc....</th>
                                        <th>Commission/Outside Services</th>
                                        <th>Credit Card Discount Fees</th>
                                        <th>Credit Card Min Usage Fees</th>
                                        <th>Depreciation From Prior Yea...</th>
                                        <th>Domain Name Registration</th>
                                        <th>Dues & Membership</th>
                                        <th>Education Expenses</th>
                                        <th>Employee Benefits</th>
                                        <th>Employee/Customer Awards, P...</th>
                                        <th>Entertainment</th>
                                        <th>Equipment & Machinery Purch...</th>
                                        <th>Exhibit/Show</th>
                                        <th>Film & Developing</th>
                                        <th>Flower & Cards</th>
                                        <th>Franchise Fees</th>
                                        <th>Fuel (For Trucking Business)</th>
                                        <th>Furniture & Fixtures</th>
                                        <th>Gift To Employee/Client</th>
                                        <th>Goodwill</th>
                                        <th>Graphic Design Fees</th>
                                        <th>Home Office</th>
                                        <th>Hotel/Motel/Inn</th>
                                        <th>Insurance Bus.</th>
                                        <th>Interruption</th>
                                        <th>Insurance For Employees</th>
                                        <th>Insurance Liability</th>
                                        <th>Insurance (Other)</th>
                                        <th>Insurance Work. Comp</th>
                                        <th>Internet Services</th>
                                        <th>Inventory Beginning Of The ...</th>
                                        <th>Inventory Breakage/Spoilage...</th>
                                        <th>Inventory Ending Of The Year</th>
                                        <th>Inventory Purchases</th>
                                        <th>Inventory Theft/Loss</th>
                                        <th>IRA Regular Or SEP IRA Cont...</th>
                                        <th>Landscaping </th>
                                        <th>Laundry & Cleaning</th>
                                        <th>Legal & Professional Services</th>
                                        <th>Licenses & Permits</th>
                                        <th>Licenses & Permits For Clie...</th>
                                        <th>Locksmith/Keys/Lock Boxes</th>
                                        <th>Meals 50% Bus</th>
                                        <th>Medical Insurance</th>
                                        <th>Mileage - Business</th>
                                        <th>Moving Exp.</th>
                                        <th>Notary Services </th>
                                        <th>Parking</th>
                                        <th>Pension Plan</th>
                                        <th>Pest Control</th>
                                    </tr>
                                </thead>
                                <!--:: table head end -->
                                <tbody>
                                    <tr>
                                        <td>16695371 <img class="w-10px complete-table-status ml-1"
                                                src="img/correct-image.png"> </td>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                        <td>....</td>
                                        <td>....</td>
                                        <td>....</td>
                                        <td>....</td>
                                        <td>....</td>
                                        <td>....</td>
                                        <td>....</td>
                                        <td>....</td>
                                        <td>....</td>
                                        <td>....</td>
                                        <td>....</td>
                                        <td>....</td>
                                        <td>....</td>
                                        <td>....</td>
                                        <td>....</td>
                                        <td>....</td>
                                        <td>....</td>
                                        <td>....</td>
                                        <td>....</td>
                                        <td>....</td>
                                        <td>....</td>
                                        <td>....</td>
                                        <td>....</td>
                                        <td>....</td>
                                        <td>....</td>
                                        <td>....</td>
                                        <td>....</td>
                                        <td>....</td>
                                        <td>....</td>
                                        <td>....</td>
                                        <td>....</td>
                                        <td>....</td>
                                        <td>....</td>
                                        <td>....</td>
                                        <td>....</td>
                                        <td>....</td>
                                        <td>....</td>
                                        <td>....</td>
                                        <td>....</td>
                                        <td>....</td>
                                        <td>....</td>
                                        <td>....</td>
                                        <td>....</td>
                                        <td>....</td>
                                        <td>....</td>
                                        <td>....</td>
                                        <td>....</td>
                                        <td>....</td>
                                        <td>....</td>
                                        <td>....</td>
                                        <td>....</td>
                                        <td>....</td>
                                        <td>....</td>
                                        <td>....</td>
                                        <td>....</td>
                                        <td>....</td>
                                        <td>....</td>
                                        <td>....</td>
                                        <td>....</td>
                                        <td>....</td>
                                        <td>....</td>
                                        <td>....</td>
                                        <td>....</td>
                                        <td>....</td>
                                        <td>....</td>
                                        <td>....</td>
                                        <td>....</td>
                                        <td>....</td>
                                        <td>....</td>
                                        <td>....</td>
                                        <td>....</td>
                                        <td>....</td>
                                        <td>....</td>
                                        <td>....</td>
                                        <td>....</td>
                                        <td>....</td>
                                        <td>....</td>
                                        <td>....</td>
                                        <td>....</td>
                                        <td>....</td>
                                        <td>....</td>
                                        <td>....</td>
                                        <td>....</td>
                                        <td>....</td>
                                        <td>....</td>
                                        <td>....</td>
                                        <td>....</td>
                                        <td>....</td>
                                        <td>....</td>
                                        <td>....</td>
                                        <td>....</td>
                                        <td>....</td>
                                        <td>....</td>
                                        <td>....</td>
                                        <td>....</td>
                                        <td>....</td>
                                        <td>....</td>
                                        <td>....</td>
                                        <td>....</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- :: user form unfill fill detail show table end-->
                    </div>
                    <!-- :: first tab end -->
                    <!-- :: second tab strat from here -->
                    <div class="f-tab-cnt" id="tab2" style="display: none;">
                        <div class="row">
                            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                <div class="float-left">
                                    <a href="#" class="back-to-tab-one">
                                        <iconify-icon icon="solar:arrow-left-linear" style="color: black;" width="30"
                                            height="30">
                                        </iconify-icon>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                <div class="mt-3">
                                    <h6>Please continue and fill out the form. Answers will be saved in your account.
                                    </h6>
                                </div>
                            </div>
                            <!-- :: form instruction start from here-->
                            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 mt-3">
                                <div class="form-name-highlite">
                                    <h5 class="i-image">Tax Organizer</h5>
                                </div>
                                <div class="warning-text mt-3 text-left">
                                    <p>Please complete a Tax Organizer for each unfiled year and upload any documents
                                        required.</p>
                                    <p><mark>Ex: If you have 2017, 2018, and 2019 unfiled. You will need to complete
                                            this form 3 times with each years information.</mark></p>
                                    <p><mark>You will have the option to fill out addtional forms once you save or
                                            complete this current form that you are on.</mark></p>
                                    <p><mark>You may pause and continue your Tax Organizer anytime by clicking "save
                                            progress" at the bottom of the form.</mark></p>
                                    <h6>Contact us if you need help with the form:</h6>
                                    <p class="mb-2"><strong>Phone:</strong> <span><a href="#" class="#">
                                                888-235-0004</a></span></p>
                                    <p class="mb-2"><strong>Email:</strong> <span><a href="#"
                                                class="#">info@clearstarttax.com</a></span></p>
                                    <p class="mb-2"><strong>Hours:</strong> Monday-Friday 8am-5pm Pacific Standard Time.
                                    </p>
                                </div>
                                <!-- :: form start here -->
                                <form>
                                    <div class="row mt-4">
                                        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 text-left mx-1">
                                            <div class="form-group">
                                                <label class="form-head" for="exampletext"> What Tax Year Is This
                                                    Organizer For
                                                </label>
                                                <div class="d-flex flex-wrap">
                                                    <div class="form-check mx-3">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" id="options2022"
                                                                type="radio" name="taxStatus" value="tax-year">2022
                                                        </label>
                                                    </div>
                                                    <div class="form-check mx-3">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" id="options2021"
                                                                type="radio" name="taxStatus" value="tax-year1">2021
                                                        </label>
                                                    </div>
                                                    <div class="form-check mx-3">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" id="options2020"
                                                                type="radio" name="taxStatus" value="tax-year2">2020
                                                        </label>
                                                    </div>
                                                    <div class="form-check mx-3">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" id="options2019"
                                                                type="radio" name="taxStatus" value="tax-year3">2019
                                                        </label>
                                                    </div>
                                                    <div class="form-check mx-3">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" id="options2018"
                                                                type="radio" name="taxStatus" value="tax-year4">2018
                                                        </label>
                                                    </div>
                                                    <div class="form-check mx-3">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" id="options2017"
                                                                type="radio" name="taxStatus" value="tax-year5">2017
                                                        </label>
                                                    </div>
                                                    <div class="form-check mx-3">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" id="options2016"
                                                                type="radio" name="taxStatus" value="tax-year6">2016
                                                        </label>
                                                    </div>
                                                    <div class="form-check mx-3">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" id="options2015"
                                                                type="radio" name="taxStatus" value="tax-year7">2015
                                                        </label>
                                                    </div>
                                                    <div class="form-check mx-3">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" id="options2014"
                                                                type="radio" name="taxStatus" value="tax-year8">2014
                                                        </label>
                                                    </div>
                                                    <div class="form-check mx-3">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" id="options2013"
                                                                type="radio" name="taxStatus" value="tax-year9">2013
                                                        </label>
                                                    </div>
                                                    <div class="form-check mx-3">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" id="options2012"
                                                                type="radio" name="taxStatus" value="tax-year10">2012
                                                        </label>
                                                    </div>
                                                    <div class="form-check mx-3">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" id="options2011"
                                                                type="radio" name="taxStatus" value="tax-year11">2011
                                                        </label>
                                                    </div>
                                                    <div class="form-check mx-4">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" id="options2010"
                                                                type="radio" name="taxStatus" value="tax-year12">2010
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ************************ Section 01 ************************ -->
                                    <div class="form-section-highlite mt-3">
                                        <div>Personal Information</div>
                                    </div>
                                    <div class="row mt-3">
                                        <!-- :: input 01 -->
                                        <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12 text-left">
                                            <div class="form-group">
                                                <label class="form-head" for="Last Name"> Last Name : </label>
                                                <input type="text" class="form-control" id="Last-Name"
                                                    placeholder="Enter Last name" required>
                                            </div>
                                        </div>
                                        <!-- :: input 02 -->
                                        <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12 text-left">
                                            <div class="form-group">
                                                <label class="form-head" for="FirstName"> First Name : </label>
                                                <input type="text" class="form-control" id="First-Name"
                                                    placeholder="Enter First name" required>
                                            </div>
                                        </div>
                                        <!-- input 03 -->
                                        <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12 text-left">
                                            <div class="form-group">
                                                <label class="form-head" for="DateOfBirth"> Date Of Birth : </label>
                                                <input type="date" class="form-control" id="Date-Of-Birth"
                                                    placeholder="Enter first name" required>
                                            </div>
                                        </div>
                                        <!-- :: input 04 -->
                                        <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12 text-left">
                                            <div class="form-group">
                                                <label class="form-head" for="SSN"> SSN : </label>
                                                <input type="text" class="form-control" id="S-S-N"
                                                    placeholder="Enter your SSN " required>
                                            </div>
                                        </div>
                                        <!-- :: input 05 -->
                                        <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                                            <div class="form-group">
                                                <label class="form-head" for="StreetAddress"> Street Address : </label>
                                                <input type="text" class="form-control" id="Street-Address"
                                                    placeholder="Enter your street address " required>
                                            </div>
                                        </div>
                                        <!-- :: input 06 -->
                                        <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                                            <div class="form-group">
                                                <label class="form-head" for="Addressline"> Address line 2 : </label>
                                                <input type="text" class="form-control" id="Address-line"
                                                    placeholder="Enter your address " required>
                                            </div>
                                        </div>
                                        <!-- :: input 07 -->
                                        <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12 text-left">
                                            <div class="form-group">
                                                <label class="form-head" for="City"> City : </label>
                                                <input type="text" class="form-control" id="C_ity"
                                                    placeholder="Enter your city " required>
                                            </div>
                                        </div>
                                        <!-- :: input 08 -->
                                        <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12 text-left">
                                            <div class="form-group">
                                                <label class="form-head" for="State"> State : </label>
                                                <input type="text" class="form-control" id="S_tate"
                                                    placeholder="Enter your city " required>
                                            </div>
                                        </div>
                                        <!-- :: input 09 -->
                                        <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12 text-left">
                                            <div class="form-group">
                                                <label class="form-head" for="Zip"> Zip : </label>
                                                <input type="text" class="form-control" id="f_Zip"
                                                    placeholder="Enter your zip " required>
                                            </div>
                                        </div>
                                        <!-- :: input 10 -->
                                        <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12 text-left">
                                            <div class="form-group">
                                                <label class="form-head" for="CountyOfResidence"> County Of Residence :
                                                </label>
                                                <input type="text" class="form-control" id="County-Of-Residence"
                                                    placeholder="Enter your  country " required>
                                            </div>
                                        </div>
                                        <!-- :: input -->
                                        <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                                            <div class="form-group">
                                                <label class="form-head" for="Rent-Or-Own">
                                                    Occupation </label>
                                                <input type="text" class="form-control" id="Rent Or Own"
                                                    placeholder="Rent or own" required>
                                            </div>
                                        </div>
                                        <!-- :: input -->
                                        <!-- :: input 11 -->
                                        <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                                            <div class="form-group">
                                                <label class="form-head" for="Rent-Or-Own"> Rent Or Own eg. share rent,
                                                    live with relative, etc. : </label>
                                                <input type="text" class="form-control" id="Rent Or Own"
                                                    placeholder="Rent or own" required>
                                            </div>
                                        </div>
                                        <!-- :: input 13 -->
                                        <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                                            <div class="form-group">
                                                <label class="form-head" for="exampletext"> Primary Phone Number
                                                </label>
                                                <input type="tel" class="form-control" id="exampleInputtext"
                                                    placeholder="Enter your primary phone number" required>
                                            </div>
                                        </div>
                                        <!-- :: input 14 -->
                                        <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                                            <div class="form-group">
                                                <label class="form-head" for="exampletext"> Secondry Phone Number
                                                </label>
                                                <input type="tel" class="form-control" id="exampleInputtext"
                                                    placeholder="Enter your secondary phone number" required>
                                            </div>
                                        </div>
                                        <!-- **************** SECTION 02 ***************** -->
                                        <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12">
                                            <div class="form-section-highlite mt-3">
                                                <div>SECTION 1: Tax Filing Information</div>
                                            </div>
                                        </div>
                                        <!-- :: radio input for client filling status  -->
                                        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 text-left  mt-4">
                                            <div class="form-group">
                                                <label class="form-head" for="exampletext"> Client Filing Status</label>
                                                <div class="d-flex flex-wrap">
                                                    <!-- :: radio 01 -->
                                                    <div class="form-check mx-3">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" id="c-single" type="radio" name="client-filling" value="single">Single</label>
                                                    </div>
                                                    <!--  :: radio 02 -->
                                                    <div class="form-check mx-3">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" id="h-household" type="radio" name="client-filling" value="household">Head Of Household</label>
                                                    </div>
                                                     <!--  :: radio 03 -->
                                                     <div class="form-check mx-3">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" id="m-jointly" type="radio" name="client-filling" value="jointly">Married Filing Jointly</label>
                                                    </div>
                                                    <!--  :: radio 04 -->
                                                    <div class="form-check mx-3">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" id="m-separately" type="radio" name="client-filling" value="separately">Married Filing Separately</label>
                                                    </div>
                                                    <!--  :: radio 05 -->
                                                    <div class="form-check mx-3">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" id="q-widower" type="radio" name="client-filling" value="widower">Qualified Widower</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- form dependecy for spouse fillinf -->
                                        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 mt-2 mb-2 dependency-tab" id="dependentto-select" style="">
                                            <div class="form-section-divident text-left">
                                                <h6>Dependent 1</h6>
                                            </div>
                                            <div class="row dependency-form-control px-2">
                                                <!-- :: input 01 name -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="firstname">First Name </label>
                                                        <input type="text" class="form-control" id="first_name" placeholder="Enter first name" required>
                                                    </div>
                                                </div>
                                                <!-- :: input 02 last name -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="lastname"> Last Name
                                                        </label>
                                                        <input type="text" class="form-control" id="last_name" placeholder="Enter last name" required>
                                                    </div>
                                                </div>
                                                <!-- :: input 03 Occupation -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="Occupation"> Occupation
                                                        </label>
                                                        <input type="text" class="form-control" id="c_occupation" placeholder="Enter occupation" required>
                                                    </div>
                                                </div>
                                                <!-- :: input 04 Dob -->
                                                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="SSN"> SSN#
                                                        </label>
                                                        <input type="text" class="form-control" id="c_ssn" placeholder="Enter ssn" required>
                                                    </div>
                                                </div>
                                                <!-- :: input 05 Date Of Birth -->
                                                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="dateofbirth"> Date Of Birth
                                                        </label>
                                                        <input type="date" class="form-control" id="date_of_birth"  required>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- :: Dependency for spouse filling end -->
                                        <!-- :: radio input for employment filling status -->
                                        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 text-left  mt-4">
                                            <div class="form-group">
                                                <label class="form-head" for="exampletext"> Client Employment Status</label>
                                                <div class="d-flex flex-wrap">
                                                    <!-- :: radio 01 -->
                                                    <div class="form-check mx-3">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" id="c-wage" type="radio" name="employment-filling" value="wage">Wage Earner/ Employee</label>
                                                    </div>
                                                    <!--  :: radio 02 -->
                                                    <div class="form-check mx-3">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" id="self-employed" type="radio" name="employment-filling" value="selfemployed">Self-Employed <small>(1099, Sole Prop)</small></label>
                                                    </div>
                                                     <!--  :: radio 03 -->
                                                     <div class="form-check mx-3">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" id="business-owner" type="radio" name="employment-filling" value="businessowner">Business Owner<small>(LLC, S-Corp, C-Corp)</small></label>
                                                    </div>
                                                    <!--  :: radio 04 -->
                                                    <div class="form-check mx-3">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" id="e-disability" type="radio" name="employment-filling" value="disability">Disability</label>
                                                    </div>
                                                    <!--  :: radio 05 -->
                                                    <div class="form-check mx-3 mt-2">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" id="e-retired" type="radio" name="employment-filling" value="Retired">Retired</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- :: radio for emp filling end -->
                                        <!-- emp show hide -->
                                        <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left" id="w2-select">
                                            <div class="form-group">
                                                <label class="form-head" for="exampletext"> Do you have your W2's
                                                </label>
                                                <div class="form-check mx-3">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" id="w2-yes" type="radio" name="W2" value="">Yes
                                                    </label>
                                                </div>
                                                <div class="form-check mx-3">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" id="w2-no" type="radio" name="W2" value="">No
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- input for emp doc -->
                                        <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="exampletext"> Life Insurance
                                                            Policy 1 <small>(Upload Most Recent Policy
                                                                Statement)</small>
                                                        </label>
                                                        <input type="file" class="form-control" id="p-document" name="policy-document" accept="image/*">
                                                    </div>
                                                </div>
                                        <!-- emp show hide -->
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- Essential javascripts for application to work-->
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/plugins/pace.min.js"></script>
    <script src="js/plugins/dropify.min.js"></script>
    <script src="js/plugins/signature_pad.min.js"></script>

    <!-- query for signature pad -->
    <script>
    $('.dropify').dropify();
    </script>
    <!--tab switch function -->
    <script>
    document.addEventListener("DOMContentLoaded", function() {
        // Get references to the tabs and the switch button
        const tab1 = document.querySelector(".f-tab-cnt");
        const tab2 = document.getElementById("tab2");
        const switchButton = document.getElementById("switch-tab");
        const backButton = document.querySelector(".back-to-tab-one");

        // Function to toggle between the two tabs
        function toggleTabs() {
            if (tab1.style.display === "block" || tab1.style.display === "") {
                tab1.style.display = "none";
                tab2.style.display = "block";
            } else {
                tab1.style.display = "block";
                tab2.style.display = "none";
            }
        }

        // Add a click event listener to the switch button
        switchButton.addEventListener("click", function(e) {
            e.preventDefault();
            toggleTabs();
        });

        // Add a click event listener to the back link
        backButton.addEventListener("click", function(e) {
            e.preventDefault();
            toggleTabs();
        });
    });
    </script>

    <!-- ************** for dependent 01 ****************-->
    <script>
    // Get references to the radio buttons and the select element
    const mJointly = document.getElementById("m-jointly");
    const mSeparately = document.getElementById("m-separately");
    const cSingle = document.getElementById("c-single");
    const hHousehold = document.getElementById("h-household");
    const qWidower = document.getElementById("q-widower");
    const dependenttoSelect = document.getElementById("dependentto-select");

    // Add event listeners to the radio buttons
    mJointly.addEventListener("change", function() {
        if (this.checked) {
            dependenttoSelect.style.display = "block";
        }
    });

    mSeparately.addEventListener("change", function() {
        if (this.checked) {
            dependenttoSelect.style.display = "block";
        }
    });

    cSingle.addEventListener("change", function() {
        if (this.checked) {
            dependenttoSelect.style.display = "none";
        }
    });

    hHousehold.addEventListener("change", function() {
        if (this.checked) {
            dependenttoSelect.style.display = "none";
        }
    });

    qWidower.addEventListener("change", function() {
        if (this.checked) {
            dependenttoSelect.style.display = "none";
        }
    });

    // By default, hide the select element
    dependenttoSelect.style.display = "none";
    </script>
    <!-- ************** for dependent 01 ****************-->

    <!-- ************** for client emp status****************-->
    <script>
    // Get references to the radio buttons and the select element
    const cWage = document.getElementById("c-wage");
    const selfEmployed = document.getElementById("self-employed");
    const businessOwner = document.getElementById("business-owner");
    const eDisability = document.getElementById("e-disability");
    const eRetired = document.getElementById("e-retired");
    const w2Select = document.getElementById("w2-select");

    // Add event listeners to the radio buttons
    cWage.addEventListener("change", function() {
        if (this.checked) {
            w2Select.style.display = "block";
        }
    });

    selfEmployed.addEventListener("change", function() {
        if (this.checked) {
            w2Select.style.display = "none";
        }
    });

    businessOwner.addEventListener("change", function() {
        if (this.checked) {
            w2Select.style.display = "none";
        }
    });

    eDisability.addEventListener("change", function() {
        if (this.checked) {
            w2Select.style.display = "none";
        }
    });

    eRetired.addEventListener("change", function() {
        if (this.checked) {
            w2Select.style.display = "none";
        }
    });

    // By default, hide the select element
    w2Select.style.display = "none";
    </script>
    <!-- ************** for client emp status ****************-->

</body>

</html>