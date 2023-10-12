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
    <main class="app-content pd-30">
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
                        <div class="f-tab-cnt" id="tab2">
                            <div class="row">
                                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                    <div class="float-left">
                                        <a href="to-form.php" class="back-to-tab-one">
                                            <iconify-icon icon="solar:arrow-left-linear" style="color: black;"
                                                width="30" height="30">
                                            </iconify-icon>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                    <div class="mt-3">
                                        <h6>Please continue and fill out the form. Answers will be saved in your
                                            account.
                                        </h6>
                                    </div>
                                </div>
                                <!-- :: form instruction start from here-->
                                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 mt-3">
                                    <div class="form-name-highlite">
                                        <h5 class="i-image">Tax Organizer</h5>
                                    </div>
                                    <div class="warning-text mt-3 text-left">
                                        <p>Please complete a Tax Organizer for each unfiled year and upload any
                                            documents
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
                                        <p class="mb-2"><strong>Hours:</strong> Monday-Friday 8am-5pm Pacific Standard
                                            Time.
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
                                                        <div class="form-check mx-3 w-40px">
                                                            <label class="form-check-label">
                                                                <input class="form-check-input" id="options2023"
                                                                    type="radio" name="taxStatus" value="tax-year">2023
                                                            </label>
                                                        </div>
                                                        <div class="form-check mx-3 w-40px">
                                                            <label class="form-check-label">
                                                                <input class="form-check-input" id="options2022"
                                                                    type="radio" name="taxStatus" value="tax-year">2022
                                                            </label>
                                                        </div>
                                                        <div class="form-check mx-3 w-40px">
                                                            <label class="form-check-label">
                                                                <input class="form-check-input" id="options2021"
                                                                    type="radio" name="taxStatus" value="tax-year1">2021
                                                            </label>
                                                        </div>
                                                        <div class="form-check mx-3 w-40px">
                                                            <label class="form-check-label">
                                                                <input class="form-check-input" id="options2020"
                                                                    type="radio" name="taxStatus" value="tax-year2">2020
                                                            </label>
                                                        </div>
                                                        <div class="form-check mx-3 w-40px">
                                                            <label class="form-check-label">
                                                                <input class="form-check-input" id="options2019"
                                                                    type="radio" name="taxStatus" value="tax-year3">2019
                                                            </label>
                                                        </div>
                                                        <div class="form-check mx-3 w-40px">
                                                            <label class="form-check-label">
                                                                <input class="form-check-input" id="options2018"
                                                                    type="radio" name="taxStatus" value="tax-year4">2018
                                                            </label>
                                                        </div>
                                                        <div class="form-check mx-3 w-40px">
                                                            <label class="form-check-label">
                                                                <input class="form-check-input" id="options2017"
                                                                    type="radio" name="taxStatus" value="tax-year5">2017
                                                            </label>
                                                        </div>
                                                        <div class="form-check mx-3 w-40px">
                                                            <label class="form-check-label">
                                                                <input class="form-check-input" id="options2016"
                                                                    type="radio" name="taxStatus" value="tax-year6">2016
                                                            </label>
                                                        </div>
                                                        <div class="form-check mx-3 w-40px">
                                                            <label class="form-check-label">
                                                                <input class="form-check-input" id="options2015"
                                                                    type="radio" name="taxStatus" value="tax-year7">2015
                                                            </label>
                                                        </div>
                                                        <div class="form-check mx-3 w-40px">
                                                            <label class="form-check-label">
                                                                <input class="form-check-input" id="options2014"
                                                                    type="radio" name="taxStatus" value="tax-year8">2014
                                                            </label>
                                                        </div>
                                                        <div class="form-check mx-3 w-40px">
                                                            <label class="form-check-label">
                                                                <input class="form-check-input" id="options2013"
                                                                    type="radio" name="taxStatus" value="tax-year9">2013
                                                            </label>
                                                        </div>
                                                        <div class="form-check mx-3 w-40px">
                                                            <label class="form-check-label">
                                                                <input class="form-check-input" id="options2012"
                                                                    type="radio" name="taxStatus"
                                                                    value="tax-year10">2012
                                                            </label>
                                                        </div>
                                                        <div class="form-check mx-3 w-40px">
                                                            <label class="form-check-label">
                                                                <input class="form-check-input " id="options2011"
                                                                    type="radio" name="taxStatus" value="tax-year11"
                                                                    checked>2011
                                                            </label>
                                                        </div>
                                                        <div class="form-check mx-3 w-40px">
                                                            <label class="form-check-label">
                                                                <input class="form-check-input" id="options2010"
                                                                    type="radio" name="taxStatus"
                                                                    value="tax-year12">2010
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
                                                    <label class="form-head" for="FirstName"> First Name : </label>
                                                    <input type="text" class="form-control" id="First-Name"
                                                        placeholder="Enter first name" value="Alfa" required>
                                                </div>
                                            </div>
                                            <!-- :: input 02 -->
                                            <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12 text-left">
                                                <div class="form-group">
                                                    <label class="form-head" for="lastName"> Last Name : </label>
                                                    <input type="text" class="form-control" id="First-Name"
                                                        placeholder="Enter last name" value="Beta" required>
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
                                                    <label class="form-head" for="StreetAddress"> Street Address :
                                                    </label>
                                                    <input type="text" class="form-control" id="Street-Address"
                                                        placeholder="Enter your street address " required>
                                                </div>
                                            </div>
                                            <!-- :: input 06 -->
                                            <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                                                <div class="form-group">
                                                    <label class="form-head" for="Addressline"> Address line 2 :
                                                    </label>
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
                                                    <label class="form-head" for="State">State :</label>
                                                    <select class="form-control" id="State" required>
                                                        <option value="">Select your state</option>
                                                        <option value="Alabama">Alabama</option>
                                                        <option value="Alaska">Alaska</option>
                                                        <option value="Arizona">Arizona</option>
                                                        <option value="Arkansas">Arkansas</option>
                                                        <option value="California">California</option>
                                                        <option value="Colorado">Colorado</option>
                                                        <option value="Connecticut">Connecticut</option>
                                                        <option value="Delaware">Delaware</option>
                                                        <option value="Florida">Florida</option>
                                                        <option value="Georgia">Georgia</option>
                                                        <option value="Hawaii">Hawaii</option>
                                                        <option value="Idaho">Idaho</option>
                                                        <option value="Illinois">Illinois</option>
                                                        <option value="Indiana">Indiana</option>
                                                        <option value="Iowa">Iowa</option>
                                                        <option value="Kansas">Kansas</option>
                                                        <option value="Kentucky">Kentucky</option>
                                                        <option value="Louisiana">Louisiana</option>
                                                        <option value="Maine">Maine</option>
                                                        <option value="Maryland">Maryland</option>
                                                        <option value="Massachusetts">Massachusetts</option>
                                                        <option value="Michigan">Michigan</option>
                                                        <option value="Minnesota">Minnesota</option>
                                                        <option value="Mississippi">Mississippi</option>
                                                        <option value="Missouri">Missouri</option>
                                                        <option value="Montana">Montana</option>
                                                        <option value="Nebraska">Nebraska</option>
                                                        <option value="Nevada">Nevada</option>
                                                        <option value="New Hampshire">New Hampshire</option>
                                                        <option value="New Jersey">New Jersey</option>
                                                        <option value="New Mexico">New Mexico</option>
                                                        <option value="New York">New York</option>
                                                        <option value="North Carolina">North Carolina</option>
                                                        <option value="North Dakota">North Dakota</option>
                                                        <option value="Ohio">Ohio</option>
                                                        <option value="Oklahoma">Oklahoma</option>
                                                        <option value="Oregon">Oregon</option>
                                                        <option value="Pennsylvania">Pennsylvania</option>
                                                        <option value="Rhode Island">Rhode Island</option>
                                                        <option value="South Carolina">South Carolina</option>
                                                        <option value="South Dakota">South Dakota</option>
                                                        <option value="Tennessee">Tennessee</option>
                                                        <option value="Texas">Texas</option>
                                                        <option value="Utah">Utah</option>
                                                        <option value="Vermont">Vermont</option>
                                                        <option value="Virginia">Virginia</option>
                                                        <option value="Washington">Washington</option>
                                                        <option value="West Virginia">West Virginia</option>
                                                        <option value="Wisconsin">Wisconsin</option>
                                                        <option value="Wyoming">Wyoming</option>
                                                        <option value="Washington DC">Washington DC</option>
                                                    </select>
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
                                                    <label class="form-head" for="CountyOfResidence"> Country Of
                                                        Residence :
                                                    </label>
                                                    <input type="text" class="form-control" id="County-Of-Residence"
                                                        placeholder="Enter your residence country" required>
                                                </div>
                                            </div>
                                            <!-- :: input 11-->
                                            <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                                                <div class="form-group">
                                                    <label class="form-head" for="Rent-Or-Own">
                                                        Occupation </label>
                                                    <input type="text" class="form-control" id="Occupation"
                                                        placeholder="Enter occupation" required>
                                                </div>
                                            </div>
                                            <!-- :: input 12 -->
                                            <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                                                <div class="form-group">
                                                    <label class="form-head" for="Rent-Or-Own"> Rent Or Own eg. share
                                                        rent,
                                                        live with relative, etc. : </label>
                                                    <input type="text" class="form-control" id="Rent-Or-Own"
                                                        placeholder="Rent or own" required>
                                                </div>
                                            </div>
                                            <!-- :: input 13 -->
                                            <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                                                <div class="form-group">
                                                    <label class="form-head" for="PrimaryPhone"> Primary Phone Number
                                                    </label>
                                                    <input type="tel" class="form-control" id="Primaryphone"
                                                        placeholder="Enter your primary phone number" required>
                                                </div>
                                            </div>
                                            <!-- :: input 14 -->
                                            <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                                                <div class="form-group">
                                                    <label class="form-head" for="secondryphone"> Secondry Phone Number
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
                                                    <label class="form-head" for="client-f"> Client Filing
                                                        Status</label>
                                                    <div class="d-flex flex-wrap flex-direction">
                                                        <!-- :: radio 01 -->
                                                        <div class="form-check mx-3">
                                                            <label class="form-check-label">
                                                                <input class="form-check-input" id="c-single"
                                                                    type="radio" name="client-filling"
                                                                    value="single">Single</label>
                                                        </div>
                                                        <!--  :: radio 02 -->
                                                        <div class="form-check mx-3">
                                                            <label class="form-check-label">
                                                                <input class="form-check-input" id="h-household"
                                                                    type="radio" name="client-filling"
                                                                    value="household">Head Of Household</label>
                                                        </div>
                                                        <!--  :: radio 03 -->
                                                        <div class="form-check mx-3">
                                                            <label class="form-check-label">
                                                                <input class="form-check-input" id="m-jointly"
                                                                    type="radio" name="client-filling"
                                                                    value="jointly">Married Filing
                                                                Jointly</label>
                                                        </div>
                                                        <!--  :: radio 04 -->
                                                        <div class="form-check mx-3">
                                                            <label class="form-check-label">
                                                                <input class="form-check-input" id="m-separately"
                                                                    type="radio" name="client-filling"
                                                                    value="separately">Married Filing Separately</label>
                                                        </div>
                                                        <!--  :: radio 05 -->
                                                        <div class="form-check mx-3">
                                                            <label class="form-check-label">
                                                                <input class="form-check-input" id="q-widower"
                                                                    type="radio" name="client-filling"
                                                                    value="widower">Qualified
                                                                Widower</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- form dependecy for spouse fillinf -->
                                            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 mt-2 mb-2 dependency-tab"
                                                id="dependentto-select" style="">
                                                <div class="form-section-divident text-left">
                                                    <h6>Spouse Information</h6>
                                                </div>
                                                <div class="row dependency-form-control px-2">
                                                    <!-- :: input 01 name -->
                                                    <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                        <div class="form-group">
                                                            <label class="form-head" for="firstname">First Name </label>
                                                            <input type="text" class="form-control" id="first_name"
                                                                placeholder="Enter first name" required>
                                                        </div>
                                                    </div>
                                                    <!-- :: input 02 last name -->
                                                    <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                        <div class="form-group">
                                                            <label class="form-head" for="lastname"> Last Name
                                                            </label>
                                                            <input type="text" class="form-control" id="last_name"
                                                                placeholder="Enter last name" required>
                                                        </div>
                                                    </div>
                                                    <!-- :: input 03 Occupation -->
                                                    <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                        <div class="form-group">
                                                            <label class="form-head" for="occupation"> Occupation
                                                            </label>
                                                            <input type="text" class="form-control" id="c_occupation"
                                                                placeholder="Enter occupation" required>
                                                        </div>
                                                    </div>
                                                    <!-- :: input 04 Dob -->
                                                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                                                        <div class="form-group">
                                                            <label class="form-head" for="SSN"> SSN#
                                                            </label>
                                                            <input type="text" class="form-control" id="c_ssn"
                                                                placeholder="Enter ssn" required>
                                                        </div>
                                                    </div>
                                                    <!-- :: input 05 Date Of Birth -->
                                                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                                                        <div class="form-group">
                                                            <label class="form-head" for="dateofbirth"> Date Of Birth
                                                            </label>
                                                            <input type="date" class="form-control" id="date_of_birth"
                                                                required>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- :: Dependency for spouse filling end -->
                                            <!-- :: radio input for employment filling status -->
                                            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 text-left  mt-4">
                                                <div class="form-group">
                                                    <label class="form-head" for="client_emp"> Client Employment
                                                        Status</label>
                                                    <div class="d-flex flex-wrap flex-direction">
                                                        <!-- :: radio 01 -->
                                                        <div class="form-check mx-3">
                                                            <label class="form-check-label">
                                                                <input class="form-check-input" id="c-wage" type="radio"
                                                                    name="employment-filling" value="wage">Wage Earner/
                                                                Employee</label>
                                                        </div>
                                                        <!--  :: radio 02 -->
                                                        <div class="form-check mx-3">
                                                            <label class="form-check-label">
                                                                <input class="form-check-input" id="self-employed"
                                                                    type="radio" name="employment-filling"
                                                                    value="selfemployed">Self-Employed <small>(1099,
                                                                    Sole
                                                                    Prop)</small></label>
                                                        </div>
                                                        <!--  :: radio 03 -->
                                                        <div class="form-check mx-3">
                                                            <label class="form-check-label">
                                                                <input class="form-check-input" id="business-owner"
                                                                    type="radio" name="employment-filling"
                                                                    value="businessowner">Business Owner<small>(LLC,
                                                                    S-Corp,
                                                                    C-Corp)</small></label>
                                                        </div>
                                                        <!--  :: radio 04 -->
                                                        <div class="form-check mx-3">
                                                            <label class="form-check-label">
                                                                <input class="form-check-input" id="e-disability"
                                                                    type="radio" name="employment-filling"
                                                                    value="disability">Disability</label>
                                                        </div>
                                                        <!--  :: radio 05 -->
                                                        <div class="form-check mx-3 mt-2">
                                                            <label class="form-check-label">
                                                                <input class="form-check-input" id="e-retired"
                                                                    type="radio" name="employment-filling"
                                                                    value="Retired">Retired</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- :: radio for emp filling end -->

                                            <!-- emp show hide -->
                                            <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left" id="w2-select">
                                                <div class="form-group">
                                                    <label class="form-head" for="do-w2"> Do you have your W2's
                                                    </label>
                                                    <div class="form-check mx-3">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" id="w2-yes" type="radio"
                                                                name="W2" value="">Yes
                                                        </label>
                                                    </div>
                                                    <div class="form-check mx-3">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" id="w2-no" type="radio"
                                                                name="W2" value="">No
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- input for emp doc -->
                                            <!-- emp option 01 -->
                                            <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left"
                                                id="wdoc-select">
                                                <div class="form-group">
                                                    <label class="form-head" for="up-w2"> Upload your W2's

                                                    </label>
                                                    <input type="file" class="form-control" id="p-document"
                                                        name="policy-document" accept="image/*">
                                                </div>
                                            </div>

                                            <!-- emp option 02 -->
                                            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 mt-3 text-left "
                                                id="longradio-section">
                                                <div class="form-group">
                                                    <label class="form-head" for="long-text">
                                                        We can file back year returns based on IRS wage and income.
                                                        Note,
                                                        this will not include any state withholdings, so state returns
                                                        will
                                                        show higher balance. If you authorize us to file based on IRS
                                                        reported wages only, any additional amendments in the future
                                                        will
                                                        result in an additional fee for services. Do you agree to let us
                                                        file base on IRS wage and income

                                                    </label>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" id="irswage-yes"
                                                                type="radio" name="irswage" value="havewrsyes">Yes
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" id="irswage-no" type="radio"
                                                                name="irswage" value="havewrsno">No
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- emp option 03 -->
                                            <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left"
                                                id="upwdoc-select" style="display: block;">
                                                <div class="form-group">
                                                    <label class="form-head" for="exampletext"> You Will Need To Upload
                                                        your
                                                        W2's

                                                    </label>
                                                    <input type="file" class="form-control" id="up-document"
                                                        name="uploadwrc-document" accept="image/*">
                                                </div>
                                            </div>
                                            <!-- emp show hide -->
                                            <!-- self employed and business filling details fill on click radio -->
                                            <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12" id="long-select">
                                                <div class="form-section-highlite mt-3">
                                                    <div>Business Income & Expenses </div>
                                                </div>
                                                <!-- inner row -->
                                                <div class=" row ext-r">
                                                    <!-- business form start from here -->
                                                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 mt-2 mb-2 dependency-tab"
                                                        id="business-select" style="display: block;">
                                                        <div class="form-section-divident text-left">
                                                            <h6>Business Info </h6>
                                                        </div>
                                                        <div class="row dependency-form-control px-2">
                                                            <!-- :: input 01 Name Of Business  -->
                                                            <div
                                                                class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                                <div class="form-group">
                                                                    <label class="form-head" for="businessname">Name Of
                                                                        Business </label>
                                                                    <input type="text" class="form-control"
                                                                        id="business_name" placeholder="" required>
                                                                </div>
                                                            </div>
                                                            <!-- :: input 02 Tax ID# (EIN) -->
                                                            <div
                                                                class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                                <div class="form-group">
                                                                    <label class="form-head" for="tax-id"> Tax ID# (EIN)
                                                                    </label>
                                                                    <input type="text" class="form-control"
                                                                        id="tax-identity" placeholder="" required>
                                                                </div>
                                                            </div>
                                                            <!-- :: input 03Business Activity -->
                                                            <div
                                                                class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                                <div class="form-group">
                                                                    <label class="form-head"
                                                                        for="business-ctivity">Business
                                                                        Activity
                                                                    </label>
                                                                    <input type="text" class="form-control"
                                                                        id="b-activity" placeholder="" required="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- :: input radio do you have a profit and loss statement  -->
                                                    <div class="col-md-6 col-sm-12 col-xs-12 col-lg-6 text-left mt-3">
                                                        <div class="form-group">
                                                            <label class="form-head" for="p-statement">Do you have a
                                                                profit
                                                                and loss statement
                                                            </label>
                                                            <div class="form-check">
                                                                <label class="form-check-label">
                                                                    <input class="form-check-input" id="profit-yes"
                                                                        type="radio" name="p-statement" value="Yes">Yes
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <label class="form-check-label">
                                                                    <input class="form-check-input" id="profit-no"
                                                                        type="radio" name="p-statement" value="No">No
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- input radio do you have a profit and loss statement end  -->
                                                    <!-- ::input for document Upload Profit & Loss   -->
                                                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left mt-3"
                                                        id="profit-select">
                                                        <div class="form-group">
                                                            <label class="form-head" for="profit-loss">
                                                                Upload Profit & Loss Statement
                                                            </label>
                                                            <input type="file" class="form-control" id="profit-document"
                                                                name="health-document" accept="image/*">
                                                        </div>
                                                    </div>
                                                    <!-- ::input for document Upload Profit & Loss   -->
                                                    <!-- inputs for select plofit loss no -->
                                                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 mt-2 mb-2 dependency-tab"
                                                        id="profit-input" style="display: block;">
                                                        <div class="form-section-divident text-left mb-4">
                                                            <h6> If a question does not apply to you, put 0.</h6>
                                                        </div>
                                                        <div class="row profit-form-control px-2">
                                                            <!-- :: input 01 Accounting -->
                                                            <div
                                                                class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                                <div class="form-group">
                                                                    <label class="form-head" for="Accounting">Accounting
                                                                    </label>
                                                                    <input type="text" class="form-control"
                                                                        id="c-ccounting" placeholder="" required>
                                                                </div>
                                                            </div>
                                                            <!-- :: input 02 Advertising -->
                                                            <div
                                                                class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                                <div class="form-group">
                                                                    <label class="form-head" for="advertising">
                                                                        Advertising
                                                                    </label>
                                                                    <input type="text" class="form-control"
                                                                        id="c-advertising" placeholder="" required>
                                                                </div>
                                                            </div>
                                                            <!-- :: input 03 Alarm/Security Installation -->
                                                            <div
                                                                class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                                <div class="form-group">
                                                                    <label class="form-head" for="alarm"> Alarm/Security
                                                                        Installation
                                                                    </label>
                                                                    <input type="text" class="form-control" id="c-alarm"
                                                                        placeholder="" required>
                                                                </div>
                                                            </div>
                                                            <!-- :: input 04 Alarm/Security Monitoring -->
                                                            <div
                                                                class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                                <div class="form-group">
                                                                    <label class="form-head" for="a-monitor">
                                                                        Alarm/Security
                                                                        Monitoring
                                                                    </label>
                                                                    <input type="text" class="form-control"
                                                                        id="c-monitor" placeholder="" required>
                                                                </div>
                                                            </div>
                                                            <!-- :: input 05 Appraisal Fees -->
                                                            <div
                                                                class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                                <div class="form-group">
                                                                    <label class="form-head" for="appraisal"> Appraisal
                                                                        Fees
                                                                    </label>
                                                                    <input type="text" class="form-control"
                                                                        id="c-appraisal" placeholder="" required>
                                                                </div>
                                                            </div>
                                                            <!-- :: input 06 Auto Truck Expenses -->
                                                            <div
                                                                class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                                <div class="form-group">
                                                                    <label class="form-head" for="auto-truck">Auto Truck
                                                                        Expenses
                                                                    </label>
                                                                    <input type="text" class="form-control" id="c-auto"
                                                                        placeholder="" required>
                                                                </div>
                                                            </div>
                                                            <!-- :: input 07 Bad Debt Includes In Gross Income -->
                                                            <div
                                                                class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                                <div class="form-group">
                                                                    <label class="form-head" for="gross-debt">Bad Debt
                                                                        Includes In Gross Income
                                                                    </label>
                                                                    <input type="text" class="form-control" id="c-gross"
                                                                        placeholder="" required>
                                                                </div>
                                                            </div>
                                                            <!-- :: input 08 Bank Service Charges -->
                                                            <div
                                                                class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                                <div class="form-group">
                                                                    <label class="form-head" for="bank-charge">Bank
                                                                        Service
                                                                        Charges
                                                                    </label>
                                                                    <input type="text" class="form-control"
                                                                        id="c-charge" placeholder="" required>
                                                                </div>
                                                            </div>
                                                            <!-- :: input 09 Books, Subscrp & Publications -->
                                                            <div
                                                                class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                                <div class="form-group">
                                                                    <label class="form-head"
                                                                        for="book-publication">Books,
                                                                        Subscription & Publications
                                                                    </label>
                                                                    <input type="text" class="form-control"
                                                                        id="c-publication" placeholder="" required>
                                                                </div>
                                                            </div>
                                                            <!-- :: input 10 Client Misc. Gov. Fees Inc. In Income -->
                                                            <div
                                                                class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                                <div class="form-group">
                                                                    <label class="form-head" for="misc-info">Client
                                                                        Misc.
                                                                        Gov. Fees Inc. In Income
                                                                    </label>
                                                                    <input type="text" class="form-control" id="c-misc"
                                                                        placeholder="" required>
                                                                </div>
                                                            </div>
                                                            <!-- :: input 11 Commission/Outside Services -->
                                                            <div
                                                                class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                                <div class="form-group">
                                                                    <label class="form-head"
                                                                        for="commission">Commission/Outside Services
                                                                    </label>
                                                                    <input type="text" class="form-control"
                                                                        id="c-commission" placeholder="" required>
                                                                </div>
                                                            </div>
                                                            <!-- :: input 12 Credit Card Discount Fees -->
                                                            <div
                                                                class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                                <div class="form-group">
                                                                    <label class="form-head" for="credit-discount">
                                                                        Credit Card Discount Fees
                                                                    </label>
                                                                    <input type="text" class="form-control"
                                                                        id="c-discount" placeholder="" required>
                                                                </div>
                                                            </div>
                                                            <!-- :: input 13 Credit Card Min Usage Fees -->
                                                            <div
                                                                class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                                <div class="form-group">
                                                                    <label class="form-head" for="card-fee">Credit Card
                                                                        Min
                                                                        Usage Fees

                                                                    </label>
                                                                    <input type="text" class="form-control" id="c-usage"
                                                                        placeholder="" required>
                                                                </div>
                                                            </div>
                                                            <!-- :: input 14 Depreciation From Prior Year Income Tax-->
                                                            <div
                                                                class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                                <div class="form-group">
                                                                    <label class="form-head"
                                                                        for="depreciation">Depreciation
                                                                        From Prior Year Income Tax

                                                                    </label>
                                                                    <input type="text" class="form-control"
                                                                        id="c-depreciation" placeholder="" required>
                                                                </div>
                                                            </div>
                                                            <!-- :: input 15 Domain Name Registration  -->
                                                            <div
                                                                class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                                <div class="form-group">
                                                                    <label class="form-head" for="d-name">Domain Name
                                                                        Registration

                                                                    </label>
                                                                    <input type="text" class="form-control"
                                                                        id="c-domain" placeholder="" required>
                                                                </div>
                                                            </div>
                                                            <!-- :: input 16 Dues & Membership  -->
                                                            <div
                                                                class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                                <div class="form-group">
                                                                    <label class="form-head" for="membership">Dues &
                                                                        Membership

                                                                    </label>
                                                                    <input type="text" class="form-control"
                                                                        id="c-membership" placeholder="" required>
                                                                </div>
                                                            </div>
                                                            <!-- :: input 17 Commission/Outside Services -->
                                                            <div
                                                                class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                                <div class="form-group">
                                                                    <label class="form-head"
                                                                        for="education-expenses">Education Expenses

                                                                    </label>
                                                                    <input type="text" class="form-control" id="c-educt"
                                                                        placeholder="" required>
                                                                </div>
                                                            </div>
                                                            <!-- :: input 18 Employee Benefits -->
                                                            <div
                                                                class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                                <div class="form-group">
                                                                    <label class="form-head"
                                                                        for="employee-benefits">Employee Benefits

                                                                    </label>
                                                                    <input type="text" class="form-control"
                                                                        id="c-benefits" placeholder="" required>
                                                                </div>
                                                            </div>
                                                            <!-- :: input 19 Employee/Customer Awards, Prices & Troph -->
                                                            <div
                                                                class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                                <div class="form-group">
                                                                    <label class="form-head"
                                                                        for="awards-emp">Employee/Customer Awards,
                                                                        Prices &
                                                                        Trophy

                                                                    </label>
                                                                    <input type="text" class="form-control"
                                                                        id="c-awards" placeholder="" required>
                                                                </div>
                                                            </div>
                                                            <!-- :: input 20 Entertainment  -->
                                                            <div
                                                                class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                                <div class="form-group">
                                                                    <label class="form-head"
                                                                        for="e-entertainment ">Entertainment

                                                                    </label>
                                                                    <input type="text" class="form-control"
                                                                        id="c-entertainments " placeholder="" required>
                                                                </div>
                                                            </div>
                                                            <!-- :: input 21 Equipment & Machinery Purchased -->
                                                            <div
                                                                class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                                <div class="form-group">
                                                                    <label class="form-head" for="e-machinery">Equipment
                                                                        &
                                                                        Machinery Purchased

                                                                    </label>
                                                                    <input type="text" class="form-control"
                                                                        id="c-machinery" placeholder="" required>
                                                                </div>
                                                            </div>
                                                            <!-- :: input 22 Commission/Outside Services -->
                                                            <div
                                                                class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                                <div class="form-group">
                                                                    <label class="form-head" for="exhibit">Exhibit/Show

                                                                    </label>
                                                                    <input type="text" class="form-control"
                                                                        id="c-exhibit" placeholder="" required>
                                                                </div>
                                                            </div>
                                                            <!-- :: input 23 Film & Developing -->
                                                            <div
                                                                class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                                <div class="form-group">
                                                                    <label class="form-head" for="film-dev">Film &
                                                                        Developing

                                                                    </label>
                                                                    <input type="text" class="form-control" id="c-film"
                                                                        placeholder="" required>
                                                                </div>
                                                            </div>
                                                            <!-- :: input 24 Flower & Cards -->
                                                            <div
                                                                class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                                <div class="form-group">
                                                                    <label class="form-head" for="flower-cards">Flower &
                                                                        Cards

                                                                    </label>
                                                                    <input type="text" class="form-control"
                                                                        id="c-flower" placeholder="" required>
                                                                </div>
                                                            </div>
                                                            <!-- :: input 25 Franchise Fees -->
                                                            <div
                                                                class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                                <div class="form-group">
                                                                    <label class="form-head"
                                                                        for="franchise-fees">Franchise
                                                                        Fees

                                                                    </label>
                                                                    <input type="text" class="form-control"
                                                                        id="c-franchise" placeholder="" required>
                                                                </div>
                                                            </div>
                                                            <!-- :: input 26 Fuel (For Trucking Business)  -->
                                                            <div
                                                                class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                                <div class="form-group">
                                                                    <label class="form-head" for="fuel-buss">Fuel (For
                                                                        Trucking Business)

                                                                    </label>
                                                                    <input type="text" class="form-control" id="c-fuel"
                                                                        placeholder="" required>
                                                                </div>
                                                            </div>
                                                            <!-- :: input 27 Furniture & Fixtures  -->
                                                            <div
                                                                class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                                <div class="form-group">
                                                                    <label class="form-head"
                                                                        for="furniture-fixtures ">Furniture & Fixtures

                                                                    </label>
                                                                    <input type="text" class="form-control"
                                                                        id="c-fixture" placeholder="" required>
                                                                </div>
                                                            </div>
                                                            <!-- :: input 28 Gift To Employee/Client  -->
                                                            <div
                                                                class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                                <div class="form-group">
                                                                    <label class="form-head" for="client-gift">Gift To
                                                                        Employee/Client

                                                                    </label>
                                                                    <input type="text" class="form-control" id="c-gift"
                                                                        placeholder="" required>
                                                                </div>
                                                            </div>
                                                            <!-- :: input 29 Goodwill -->
                                                            <div
                                                                class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                                <div class="form-group">
                                                                    <label class="form-head" for="goodwill">Goodwill

                                                                    </label>
                                                                    <input type="text" class="form-control"
                                                                        id="c-goodwill" placeholder="" required>
                                                                </div>
                                                            </div>
                                                            <!-- :: input 30 Commission/Outside Services -->
                                                            <div
                                                                class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                                <div class="form-group">
                                                                    <label class="form-head"
                                                                        for="graphic-design">Graphic
                                                                        Design Fees

                                                                    </label>
                                                                    <input type="text" class="form-control"
                                                                        id="c-design" placeholder="" required>
                                                                </div>
                                                            </div>
                                                            <!-- :: input 31 Home Office -->
                                                            <div
                                                                class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                                <div class="form-group">
                                                                    <label class="form-head" for="">Home Office

                                                                    </label>
                                                                    <input type="text" class="form-control"
                                                                        id="c-office" placeholder="" required>
                                                                </div>
                                                            </div>
                                                            <!-- :: input 32 Hotel/Motel/Inn -->
                                                            <div
                                                                class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                                <div class="form-group">
                                                                    <label class="form-head"
                                                                        for="hotel-motel">Hotel/Motel/Inn

                                                                    </label>
                                                                    <input type="text" class="form-control" id="c-motel"
                                                                        placeholder="" required>
                                                                </div>
                                                            </div>
                                                            <!-- :: input 33 Insurance Bus. Interruption -->
                                                            <div
                                                                class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                                <div class="form-group">
                                                                    <label class="form-head"
                                                                        for="insurance-interruption">Insurance Bus.
                                                                        Interruption

                                                                    </label>
                                                                    <input type="text" class="form-control"
                                                                        id="c-interrupt" placeholder="" required>
                                                                </div>
                                                            </div>
                                                            <!-- :: input 34 Insurance For Employees -->
                                                            <div
                                                                class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                                <div class="form-group">
                                                                    <label class="form-head"
                                                                        for="insurance-employees">Insurance For
                                                                        Employees

                                                                    </label>
                                                                    <input type="text" class="form-control" id="ci-emp"
                                                                        placeholder="" required>
                                                                </div>
                                                            </div>
                                                            <!-- :: input 35 Insurance Liability -->
                                                            <div
                                                                class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                                <div class="form-group">
                                                                    <label class="form-head" for="">Insurance Liability

                                                                    </label>
                                                                    <input type="text" class="form-control"
                                                                        id="c-liability" placeholder="" required>
                                                                </div>
                                                            </div>
                                                            <!-- :: input 36 Insurance (Other) -->
                                                            <div
                                                                class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                                <div class="form-group">
                                                                    <label class="form-head"
                                                                        for="Insurance-other">Insurance
                                                                        (Other)

                                                                    </label>
                                                                    <input type="text" class="form-control" id="c-oth"
                                                                        placeholder="" required>
                                                                </div>
                                                            </div>

                                                            <!-- :: input 37 Insurance Work. Comp -->
                                                            <div
                                                                class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                                <div class="form-group">
                                                                    <label class="form-head"
                                                                        for="insurance-comp">Insurance
                                                                        Work. Company

                                                                    </label>
                                                                    <input type="text" class="form-control" id="c-comp"
                                                                        placeholder="" required>
                                                                </div>
                                                            </div>
                                                            <!-- :: input 38 Internet Services -->
                                                            <div
                                                                class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                                <div class="form-group">
                                                                    <label class="form-head"
                                                                        for="internet-services">Internet Services

                                                                    </label>
                                                                    <input type="text" class="form-control" id="c-int"
                                                                        placeholder="" required>
                                                                </div>
                                                            </div>
                                                            <!-- :: input 39 Inventory Beginning Of The Year  -->
                                                            <div
                                                                class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                                <div class="form-group">
                                                                    <label class="form-head"
                                                                        for="inventor-year ">Inventory
                                                                        Beginning Of The Year

                                                                    </label>
                                                                    <input type="text" class="form-control" id="c-inv"
                                                                        placeholder="" required>
                                                                </div>
                                                            </div>
                                                            <!-- :: input 40 Commission/Outside Services -->
                                                            <div
                                                                class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                                <div class="form-group">
                                                                    <label class="form-head" for="breakage">Inventory
                                                                        Breakage/Spoilage Exp Unreturn

                                                                    </label>
                                                                    <input type="text" class="form-control"
                                                                        id="c-breakage" placeholder="" required>
                                                                </div>
                                                            </div>
                                                            <!-- :: input 41 Inventory Ending Of The Year  -->
                                                            <div
                                                                class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                                <div class="form-group">
                                                                    <label class="form-head" for="Inventory">Inventory
                                                                        Ending Of The Year

                                                                    </label>
                                                                    <input type="text" class="form-control"
                                                                        id="c-invent" placeholder="" required>
                                                                </div>
                                                            </div>
                                                            <!-- :: input 42 Inventory Purchases  -->
                                                            <div
                                                                class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                                <div class="form-group">
                                                                    <label class="form-head"
                                                                        for="inventory-purchases ">Inventory Purchases

                                                                    </label>
                                                                    <input type="text" class="form-control"
                                                                        id="c-purchase" placeholder="" required>
                                                                </div>
                                                            </div>
                                                            <!-- :: input 43 Inventory Theft/Loss -->
                                                            <div
                                                                class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                                <div class="form-group">
                                                                    <label class="form-head" for="theft-loss">Inventory
                                                                        Theft/Loss

                                                                    </label>
                                                                    <input type="text" class="form-control" id="c-thef"
                                                                        placeholder="" required>
                                                                </div>
                                                            </div>
                                                            <!-- :: input 44 IRA Regular Or SEP IRA Contributed Year -->
                                                            <div
                                                                class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                                <div class="form-group">
                                                                    <label class="form-head" for="sep-ira">IRA Regular
                                                                        Or
                                                                        SEP IRA Contributed Year

                                                                    </label>
                                                                    <input type="text" class="form-control" id="c-sep"
                                                                        placeholder="" required>
                                                                </div>
                                                            </div>
                                                            <!-- :: input 45 Landscaping -->
                                                            <div
                                                                class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                                <div class="form-group">
                                                                    <label class="form-head"
                                                                        for="landscaping">Landscaping

                                                                    </label>
                                                                    <input type="text" class="form-control"
                                                                        id="c-landscaping" placeholder="" required>
                                                                </div>
                                                            </div>
                                                            <!-- :: input 46 Laundry & Cleaning -->
                                                            <div
                                                                class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                                <div class="form-group">
                                                                    <label class="form-head"
                                                                        for="laundry-cleaning">Laundry
                                                                        & Cleaning

                                                                    </label>
                                                                    <input type="text" class="form-control"
                                                                        id="c-laundry" placeholder="" required>
                                                                </div>
                                                            </div>
                                                            <!-- :: input 47 Legal & Professional Services  -->
                                                            <div
                                                                class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                                <div class="form-group">
                                                                    <label class="form-head"
                                                                        for="legal-professional">Legal
                                                                        & Professional Services

                                                                    </label>
                                                                    <input type="text" class="form-control"
                                                                        id="c-professional" placeholder="" required>
                                                                </div>
                                                            </div>
                                                            <!-- :: input 48 Licenses & Permits -->
                                                            <div
                                                                class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                                <div class="form-group">
                                                                    <label class="form-head" for="l-permits">Licenses &
                                                                        Permits

                                                                    </label>
                                                                    <input type="text" class="form-control"
                                                                        id="c-permits" placeholder="" required>
                                                                </div>
                                                            </div>
                                                            <!-- :: input 49 Licenses & Permits For Client Projects -->
                                                            <div
                                                                class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                                <div class="form-group">
                                                                    <label class="form-head"
                                                                        for="client-permit">Licenses &
                                                                        Permits For Client Projects

                                                                    </label>
                                                                    <input type="text" class="form-control" id="c-perm"
                                                                        placeholder="" required>
                                                                </div>
                                                            </div>
                                                            <!-- :: input 50 Locksmith/Keys/Lock Boxes -->
                                                            <div
                                                                class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                                <div class="form-group">
                                                                    <label class="form-head"
                                                                        for="Locksmith">Locksmith/Keys/Lock Boxes

                                                                    </label>
                                                                    <input type="text" class="form-control"
                                                                        id="c-locksmith" placeholder="" required>
                                                                </div>
                                                            </div>
                                                            <!-- :: input 51 Meals 50% Bus -->
                                                            <div
                                                                class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                                <div class="form-group">
                                                                    <label class="form-head" for="meals">Meals 50% Bus

                                                                    </label>
                                                                    <input type="text" class="form-control" id="c-meals"
                                                                        placeholder="" required>
                                                                </div>
                                                            </div>
                                                            <!-- :: input 52 Medical Insurance -->
                                                            <div
                                                                class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                                <div class="form-group">
                                                                    <label class="form-head"
                                                                        for="medical-insurance">Medical
                                                                        Insurance

                                                                    </label>
                                                                    <input type="text" class="form-control" id="c-med"
                                                                        placeholder="" required>
                                                                </div>
                                                            </div>
                                                            <!-- :: input 53 Mileage - Business-->
                                                            <div
                                                                class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                                <div class="form-group">
                                                                    <label class="form-head" for="mileage-bus">Mileage -
                                                                        Business

                                                                    </label>
                                                                    <input type="text" class="form-control"
                                                                        id="cbus-mileage" placeholder="" required>
                                                                </div>
                                                            </div>
                                                            <!-- :: input 54 Moving Exp.-->
                                                            <div
                                                                class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                                <div class="form-group">
                                                                    <label class="form-head" for="moving">Moving Exp.

                                                                    </label>
                                                                    <input type="text" class="form-control"
                                                                        id="c-moving" placeholder="" required>
                                                                </div>
                                                            </div>
                                                            <!-- :: input 55 Notary Services -->
                                                            <div
                                                                class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                                <div class="form-group">
                                                                    <label class="form-head" for="notary">Notary
                                                                        Services

                                                                    </label>
                                                                    <input type="text" class="form-control"
                                                                        id="c-notary" placeholder="" required>
                                                                </div>
                                                            </div>
                                                            <!-- :: input 56 Parking  -->
                                                            <div
                                                                class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                                <div class="form-group">
                                                                    <label class="form-head" for="Parking">Parking

                                                                    </label>
                                                                    <input type="text" class="form-control"
                                                                        id="c-parking" placeholder="" required>
                                                                </div>
                                                            </div>
                                                            <!-- :: input 57 Pension Plan -->
                                                            <div
                                                                class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                                <div class="form-group">
                                                                    <label class="form-head" for="pension-plan">Pension
                                                                        Plan

                                                                    </label>
                                                                    <input type="text" class="form-control"
                                                                        id="c-pension" placeholder="" required>
                                                                </div>
                                                            </div>
                                                            <!-- :: input 58 Pest Control -->
                                                            <div
                                                                class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                                <div class="form-group">
                                                                    <label class="form-head" for="pest-control">Pest
                                                                        Control

                                                                    </label>
                                                                    <input type="text" class="form-control" id="c-pest"
                                                                        placeholder="" required>
                                                                </div>
                                                            </div>
                                                            <!-- :: input 59 Postage & Delivery Freight/Shipping  -->
                                                            <div
                                                                class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                                <div class="form-group">
                                                                    <label class="form-head" for="c-postage">Postage &
                                                                        Delivery Freight/Shipping

                                                                    </label>
                                                                    <input type="text" class="form-control"
                                                                        id="c-postage" placeholder="" required>
                                                                </div>
                                                            </div>
                                                            <!-- :: input 60 Printing/Reproductions  -->
                                                            <div
                                                                class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                                <div class="form-group">
                                                                    <label class="form-head"
                                                                        for="reproductions">Printing/Reproductions

                                                                    </label>
                                                                    <input type="text" class="form-control"
                                                                        id="c-reproductions" placeholder="" required>
                                                                </div>
                                                            </div>
                                                            <!-- :: input 61 Promotional Exp. Products Or Services -->
                                                            <div
                                                                class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                                <div class="form-group">
                                                                    <label class="form-head"
                                                                        for="promotional">Promotional
                                                                        Exp. Products Or Services

                                                                    </label>
                                                                    <input type="text" class="form-control" id="c-promo"
                                                                        placeholder="" required>
                                                                </div>
                                                            </div>
                                                            <!-- :: input 62 Commission/Outside Services -->
                                                            <div
                                                                class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                                <div class="form-group">
                                                                    <label class="form-head"
                                                                        for="business-location ">Rent
                                                                        Business Location

                                                                    </label>
                                                                    <input type="text" class="form-control"
                                                                        id="c-location" placeholder="" required>
                                                                </div>
                                                            </div>
                                                            <!-- :: input 63 Rent/Furniture -->
                                                            <div
                                                                class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                                <div class="form-group">
                                                                    <label class="form-head" for="rent-f">Rent/Furniture

                                                                    </label>
                                                                    <input type="text" class="form-control" id="c-rf"
                                                                        placeholder="" required>
                                                                </div>
                                                            </div>
                                                            <!-- :: input 64 Rent/Lease Auto And Or Truck -->
                                                            <div
                                                                class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                                <div class="form-group">
                                                                    <label class="form-head" for="rent-lease">Rent/Lease
                                                                        Auto And Or Truck

                                                                    </label>
                                                                    <input type="text" class="form-control" id="c-lease"
                                                                        placeholder="" required>
                                                                </div>
                                                            </div>
                                                            <!-- :: input 65 Rent/Lease P.O. Box/Storage -->
                                                            <div
                                                                class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                                <div class="form-group">
                                                                    <label class="form-head" for="r-boxes">Rent/Lease
                                                                        P.O.
                                                                        Box/Storage

                                                                    </label>
                                                                    <input type="text" class="form-control" id="c-boxes"
                                                                        placeholder="" required>
                                                                </div>
                                                            </div>
                                                            <!-- :: input 66 Rent/Lease Equipment -->
                                                            <div
                                                                class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                                <div class="form-group">
                                                                    <label class="form-head"
                                                                        for="lease-equipment">Rent/Lease Equipment

                                                                    </label>
                                                                    <input type="text" class="form-control"
                                                                        id="c-equipment" placeholder="" required>
                                                                </div>
                                                            </div>
                                                            <!-- :: input 67 Repair Building -->
                                                            <div
                                                                class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                                <div class="form-group">
                                                                    <label class="form-head"
                                                                        for="repair-building">Repair
                                                                        Building

                                                                    </label>
                                                                    <input type="text" class="form-control"
                                                                        id="b-repair" placeholder="" required>
                                                                </div>
                                                            </div>
                                                            <!-- :: input 68 Repair Equipment -->
                                                            <div
                                                                class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                                <div class="form-group">
                                                                    <label class="form-head" for="">Repair Equipment

                                                                    </label>
                                                                    <input type="text" class="form-control"
                                                                        id="r-equipment" placeholder="" required>
                                                                </div>
                                                            </div>
                                                            <!-- :: input 69 Research Expenses -->
                                                            <div
                                                                class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                                <div class="form-group">
                                                                    <label class="form-head"
                                                                        for="research-expenses">Research Expenses

                                                                    </label>
                                                                    <input type="text" class="form-control"
                                                                        id="c-research" placeholder="" required>
                                                                </div>
                                                            </div>
                                                            <!-- :: input 70 Royalty For Franchise  -->
                                                            <div
                                                                class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                                <div class="form-group">
                                                                    <label class="form-head"
                                                                        for="royalty-franchise ">Royalty For Franchise

                                                                    </label>
                                                                    <input type="text" class="form-control"
                                                                        id="c-royalty" placeholder="" required>
                                                                </div>
                                                            </div>
                                                            <!-- :: input 71 Salaries & Wages -->
                                                            <div
                                                                class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                                <div class="form-group">
                                                                    <label class="form-head"
                                                                        for="salaries-wages">Salaries &
                                                                        Wages

                                                                    </label>
                                                                    <input type="text" class="form-control" id="c-sw"
                                                                        placeholder="" required>
                                                                </div>
                                                            </div>
                                                            <!-- :: input 72 Samples Expenses -->
                                                            <div
                                                                class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                                <div class="form-group">
                                                                    <label class="form-head"
                                                                        for="samples-expenses">Samples
                                                                        Expenses

                                                                    </label>
                                                                    <input type="text" class="form-control" id="c-smexp"
                                                                        placeholder="" required>
                                                                </div>
                                                            </div>
                                                            <!-- :: input 73 Seasonal Bus Decorations -->
                                                            <div
                                                                class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                                <div class="form-group">
                                                                    <label class="form-head"
                                                                        for="seasonal-decorations">Seasonal Bus
                                                                        Decorations

                                                                    </label>
                                                                    <input type="text" class="form-control"
                                                                        id="c-decoration" placeholder="" required>
                                                                </div>
                                                            </div>
                                                            <!-- :: input 74 Signs/Flags/Banners -->
                                                            <div
                                                                class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                                <div class="form-group">
                                                                    <label class="form-head"
                                                                        for="sign-flags">Signs/Flags/Banners

                                                                    </label>
                                                                    <input type="text" class="form-control" id="c-flags"
                                                                        placeholder="" required>
                                                                </div>
                                                            </div>
                                                            <!-- :: input 75 Software & Upgrades -->
                                                            <div
                                                                class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                                <div class="form-group">
                                                                    <label class="form-head"
                                                                        for="software-upgrade">Software
                                                                        & Upgrades

                                                                    </label>
                                                                    <input type="text" class="form-control"
                                                                        id="c-software" placeholder="" required>
                                                                </div>
                                                            </div>
                                                            <!-- :: input 76 Supplies Shop  -->
                                                            <div
                                                                class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                                <div class="form-group">
                                                                    <label class="form-head"
                                                                        for="supplies-shop ">Supplies
                                                                        Shop

                                                                    </label>
                                                                    <input type="text" class="form-control"
                                                                        id="supplies-shop" placeholder="" required>
                                                                </div>
                                                            </div>
                                                            <!-- :: input 77 Supplies Office -->
                                                            <div
                                                                class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                                <div class="form-group">
                                                                    <label class="form-head"
                                                                        for="supplies-office">Supplies
                                                                        Office

                                                                    </label>
                                                                    <input type="text" class="form-control"
                                                                        id="supplies-office" placeholder="" required>
                                                                </div>
                                                            </div>
                                                            <!-- :: input 78 Swimming Pool Purchased Or Installed -->
                                                            <div
                                                                class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                                <div class="form-group">
                                                                    <label class="form-head"
                                                                        for="pool-purchased">Swimming
                                                                        Pool Purchased Or Installed

                                                                    </label>
                                                                    <input type="text" class="form-control"
                                                                        id="c-swimming" placeholder="" required>
                                                                </div>
                                                            </div>
                                                            <!-- :: input 79 Swimming Pool Services -->
                                                            <div
                                                                class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                                <div class="form-group">
                                                                    <label class="form-head"
                                                                        for="pool-services">Swimming
                                                                        Pool Services

                                                                    </label>
                                                                    <input type="text" class="form-control" id="c-pool"
                                                                        placeholder="" required>
                                                                </div>
                                                            </div>
                                                            <!-- :: input 80 Tax Estimated FTB Sole Corp LLC  -->
                                                            <div
                                                                class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                                <div class="form-group">
                                                                    <label class="form-head" for="ftb-tax">Tax Estimated
                                                                        FTB
                                                                        Sole Corp LLC

                                                                    </label>
                                                                    <input type="text" class="form-control" id="c-ftb"
                                                                        placeholder="" required>
                                                                </div>
                                                            </div>
                                                            <!-- :: input 81 Tax Estimated IRS Sole Corp LLC -->
                                                            <div
                                                                class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                                <div class="form-group">
                                                                    <label class="form-head" for="irs-sole">Tax
                                                                        Estimated
                                                                        IRS Sole Corp LLC

                                                                    </label>
                                                                    <input type="text" class="form-control"
                                                                        id="corp-irs" placeholder="" required>
                                                                </div>
                                                            </div>
                                                            <!-- :: input 82 Tax Real Estate House/Business -->
                                                            <div
                                                                class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                                <div class="form-group">
                                                                    <label class="form-head" for="real-state-tax">Tax
                                                                        Real
                                                                        Estate House/Business

                                                                    </label>
                                                                    <input type="text" class="form-control"
                                                                        id="estate-tax" placeholder="" required>
                                                                </div>
                                                            </div>
                                                            <!-- :: input 83 Tax Sale That Included In Income  -->
                                                            <div
                                                                class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                                <div class="form-group">
                                                                    <label class="form-head" for="sale-tax">Tax Sale
                                                                        That
                                                                        Included In Income

                                                                    </label>
                                                                    <input type="text" class="form-control"
                                                                        id="tax-sale" placeholder="" required>
                                                                </div>
                                                            </div>
                                                            <!-- :: input 84 taxes Payroll (Employer's Portion) -->
                                                            <div
                                                                class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                                <div class="form-group">
                                                                    <label class="form-head" for="payroll">Taxes Payroll
                                                                        (Employer's Portion)

                                                                    </label>
                                                                    <input type="text" class="form-control"
                                                                        id="c-payroll" placeholder="" required>
                                                                </div>
                                                            </div>
                                                            <!-- :: input 85 Telephone/FAX/Pager/Cell -->
                                                            <div
                                                                class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                                <div class="form-group">
                                                                    <label class="form-head"
                                                                        for="telephone">Telephone/FAX/Pager/Cell

                                                                    </label>
                                                                    <input type="text" class="form-control"
                                                                        id="c-telephone" placeholder="" required>
                                                                </div>
                                                            </div>
                                                            <!-- :: input 86 Tips With Verifiable Receipts -->
                                                            <div
                                                                class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                                <div class="form-group">
                                                                    <label class="form-head" for="verifiable">Tips With
                                                                        Verifiable Receipts

                                                                    </label>
                                                                    <input type="text" class="form-control"
                                                                        id="c-verifiable" placeholder="" required>
                                                                </div>
                                                            </div>
                                                            <!-- :: input 87 Tools, Molds, Dies, Jigs  -->
                                                            <div
                                                                class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                                <div class="form-group">
                                                                    <label class="form-head" for="molds">Tools, Molds,
                                                                        Dies,
                                                                        Jigs

                                                                    </label>
                                                                    <input type="text" class="form-control" id="c-molds"
                                                                        placeholder="" required>
                                                                </div>
                                                            </div>
                                                            <!-- :: input 88 Towing Services -->
                                                            <div
                                                                class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                                <div class="form-group">
                                                                    <label class="form-head"
                                                                        for="towing-services">Towing
                                                                        Services

                                                                    </label>
                                                                    <input type="text" class="form-control"
                                                                        id="c-towing" placeholder="" required>
                                                                </div>
                                                            </div>
                                                            <!-- :: input 89 Trademark & Patent Expenses -->
                                                            <div
                                                                class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                                <div class="form-group">
                                                                    <label class="form-head"
                                                                        for="trademark-patent">Trademark & Patent
                                                                        Expenses

                                                                    </label>
                                                                    <input type="text" class="form-control"
                                                                        id="c-patent" placeholder="" required>
                                                                </div>
                                                            </div>
                                                            <!-- :: input 90 Travel -->
                                                            <div
                                                                class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                                <div class="form-group">
                                                                    <label class="form-head" for="travel">Travel

                                                                    </label>
                                                                    <input type="text" class="form-control"
                                                                        id="c-travel" placeholder="" required>
                                                                </div>
                                                            </div>
                                                            <!-- :: input 91 Uniform Cleaning Services  -->
                                                            <div
                                                                class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                                <div class="form-group">
                                                                    <label class="form-head"
                                                                        for="uniform-cleaning">Uniform
                                                                        Cleaning Services

                                                                    </label>
                                                                    <input type="text" class="form-control"
                                                                        id="c-uniform" placeholder="" required>
                                                                </div>
                                                            </div>
                                                            <!-- :: input 92 Uniform Purchased -->
                                                            <div
                                                                class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                                <div class="form-group">
                                                                    <label class="form-head" for="">Uniform Purchased

                                                                    </label>
                                                                    <input type="text" class="form-control"
                                                                        id="uniform-purchased" placeholder="" required>
                                                                </div>
                                                            </div>
                                                            <!-- :: input 93 Utilities Electric & Gas  -->
                                                            <div
                                                                class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                                <div class="form-group">
                                                                    <label class="form-head"
                                                                        for="electric-gas">Utilities
                                                                        Electric & Gas

                                                                    </label>
                                                                    <input type="text" class="form-control"
                                                                        id="c-electric" placeholder="" required>
                                                                </div>
                                                            </div>
                                                            <!-- :: input 94 Vandalism/Graffiti Clean Up Fees -->
                                                            <div
                                                                class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                                <div class="form-group">
                                                                    <label class="form-head"
                                                                        for="graffiti">Vandalism/Graffiti Clean Up Fees

                                                                    </label>
                                                                    <input type="text" class="form-control"
                                                                        id="c-graffiti" placeholder="" required>
                                                                </div>
                                                            </div>
                                                            <!-- :: input 95 Wash Vehicle For Trucking, Taxi Business -->
                                                            <div
                                                                class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                                <div class="form-group">
                                                                    <label class="form-head" for="wash-vehicle">Wash
                                                                        Vehicle
                                                                        For Trucking, Taxi Business

                                                                    </label>
                                                                    <input type="text" class="form-control"
                                                                        id="wash-vehicle" placeholder="" required>
                                                                </div>
                                                            </div>
                                                            <!-- :: input 96 Waste Disposal -->
                                                            <div
                                                                class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                                <div class="form-group">
                                                                    <label class="form-head" for="waste-disposal">Waste
                                                                        Disposal

                                                                    </label>
                                                                    <input type="text" class="form-control" id="c-waste"
                                                                        placeholder="" required>
                                                                </div>
                                                            </div>
                                                            <!-- :: input 97 Web Design Fees -->
                                                            <div
                                                                class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                                <div class="form-group">
                                                                    <label class="form-head" for="web-Design">Web Design
                                                                        Fees

                                                                    </label>
                                                                    <input type="text" class="form-control"
                                                                        id="c-webdesign" placeholder="" required>
                                                                </div>
                                                            </div>
                                                            <!-- :: input 98 Web Hosting Fees -->
                                                            <div
                                                                class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                                <div class="form-group">
                                                                    <label class="form-head" for="web-hosting">Web
                                                                        Hosting
                                                                        Fees

                                                                    </label>
                                                                    <input type="text" class="form-control"
                                                                        id="c-hosting" placeholder="" required>
                                                                </div>
                                                            </div>
                                                            <!-- :: input 99 other -->
                                                            <div
                                                                class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                                <div class="form-group">
                                                                    <label class="form-head" for="other">Other

                                                                    </label>
                                                                    <input type="text" class="form-control" id="c-other"
                                                                        placeholder="" required>
                                                                </div>
                                                            </div>
                                                            <!-- :: input 100 other 2 -->
                                                            <div
                                                                class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                                                                <div class="form-group">
                                                                    <label class="form-head" for="other-2">Other 2

                                                                    </label>
                                                                    <input type="text" class="form-control"
                                                                        id="c2-other" placeholder="" required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- input for select profit loss no end here -->
                                                    <!-- long section sub form for vehicle details  -->
                                                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 mb-3">
                                                        <div class="form-section-highlite mt-3">
                                                            <div> Vehicle Information & Expenses:
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- long section sub form for vehicle details  -->
                                                    <!-- select input for no of vehicle -->
                                                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left"
                                                        id="vehiclecountSection" style="">
                                                        <div class="form-group depend-cnt">
                                                            <label class="form-head" for="count-depend">How many motor
                                                                vehicles do you
                                                                have?</label>
                                                            <div class="select-group h-40">
                                                                <select class="form-control" id="count-vehicle"
                                                                    name="count-vehicle">
                                                                    <option value="" disabled="">Select an option
                                                                    </option>
                                                                    <option value="0">None</option>
                                                                    <option value="1">01</option>
                                                                    <option value="2">02</option>
                                                                    <option value="3">03</option>
                                                                    <option value="4">04</option>
                                                                    <option value="5">05</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- select input for no of vehicle -->
                                                    <!-- vehicle fill form -->
                                                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 mt-2 mb-2 dependency-tab"
                                                        id="vehicle-select" style="">
                                                        <div class="form-section-divident text-left mb-3">
                                                            <h6>Vehicle 1</h6>
                                                        </div>

                                                        <div class="row count-investment-form-control px-2">
                                                            <!-- :: input 01 Description of vehicle -->
                                                            <!-- <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                                                            <div class="form-group">
                                                                <label class="form-head" for="description-vehicle"> 
                                                                Description of vehicle
                                                                </label>
                                                                <input type="text" class="form-control"
                                                                    id="description-vehicle"
                                                                    placeholder="" required>
                                                            </div>
                                                        </div> -->
                                                            <!-- :: input 02 Is the vehicle used in business or by an employee -->
                                                            <!-- <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                                                            <div class="form-group">
                                                                <label class="form-head" for="vehicle-used">
                                                                Is the vehicle used in business or by an employee
                                                                </label>
                                                                <input type="text" class="form-control"
                                                                    id="vehicle-used"
                                                                    placeholder="" required>
                                                            </div>
                                                        </div> -->
                                                            <!-- :: input 03 Cost (including sales tax) -->
                                                            <!-- <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                                                            <div class="form-group">
                                                                <label class="form-head" for="cost-vehicle"> 
                                                                Cost (including sales tax)
                                                                </label>
                                                                <input type="text" class="form-control"
                                                                    id="v-cost"
                                                                    placeholder="" required="">
                                                            </div>
                                                        </div> -->
                                                            <!-- :: input 04 Date placed in service -->
                                                            <!-- <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                                                            <div class="form-group">
                                                                <label class="form-head" for="service-date"> 
                                                                Date placed in service
                                                                </label>
                                                                <input type="text" class="form-control"
                                                                    id="service-date" placeholder=""
                                                                    required>
                                                            </div>
                                                        </div> -->
                                                            <!-- :: input 05 Business Miles -->
                                                            <!-- <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                                                            <div class="form-group">
                                                                <label class="form-head" for="exampletext"> 
                                                                Business Miles
                                                                </label>
                                                                <input type="text" class="form-control"
                                                                    id="business-miles" placeholder=""
                                                                    required>
                                                            </div>
                                                        </div> -->
                                                            <!-- :: input 06 Commuting miles -->
                                                            <!-- <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                                                            <div class="form-group">
                                                                <label class="form-head" for="commuting-miles"> 
                                                                Commuting miles
                                                                </label>
                                                                <input type="text" class="form-control"
                                                                    id="commuting-miles" placeholder=""
                                                                    required>
                                                            </div>
                                                        </div> -->
                                                            <!-- :: input 07 Other personal use miles -->
                                                            <!-- <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                                                            <div class="form-group">
                                                                <label class="form-head" for="other-miles"> 
                                                                Other personal use miles
                                                                </label>
                                                                <input type="text" class="form-control"
                                                                    id="other-miles" placeholder=""
                                                                    required>
                                                            </div>
                                                        </div> -->
                                                            <!-- :: input 08 total miles driven -->
                                                            <!-- <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                                                            <div class="form-group">
                                                                <label class="form-head" for="driven-miles"> 
                                                                Total miles driven
                                                                </label>
                                                                <input type="text" class="form-control"
                                                                    id="driven-miles" placeholder=""
                                                                    required>
                                                            </div>
                                                        </div> -->
                                                            <!-- :: input 09 Gas & oil expenses -->
                                                            <!-- <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                                                            <div class="form-group">
                                                                <label class="form-head" for="oil-expenses"> 
                                                                Gas & oil expenses
                                                                </label>
                                                                <input type="text" class="form-control"
                                                                    id="oil-exp" placeholder=""
                                                                    required>
                                                            </div>
                                                        </div> -->
                                                            <!-- :: input 10 Repairs & Maintenance -->
                                                            <!-- <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                                                            <div class="form-group">
                                                                <label class="form-head" for="repairs-maintenance"> 
                                                                Repairs & Maintenance
                                                                </label>
                                                                <input type="text" class="form-control"
                                                                    id="repair-main" placeholder=""
                                                                    required>
                                                            </div>
                                                        </div> -->
                                                            <!-- :: input 11 auto-insurance -->
                                                            <!-- <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                                                            <div class="form-group">
                                                                <label class="form-head" for="auto-insurance"> 
                                                                Auto insurance
                                                                </label>
                                                                <input type="text" class="form-control"
                                                                    id="auto-insurance" placeholder=""
                                                                    required>
                                                            </div>
                                                        </div> -->
                                                            <!-- :: input 12 auto-insurance -->
                                                            <!-- <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                                                            <div class="form-group">
                                                                <label class="form-head" for="licenses-fees"> 
                                                                Registration, licenses, and fees
                                                                </label>
                                                                <input type="text" class="form-control"
                                                                    id="licenses-fees" placeholder=""
                                                                    required>
                                                            </div>
                                                        </div> -->
                                                            <!-- :: input 13 auto-insurance -->
                                                            <!-- <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                                                            <div class="form-group">
                                                                <label class="form-head" for="auto-expenses "> 
                                                                Other auto expenses (identify)
                                                                </label>
                                                                <input type="text" class="form-control"
                                                                    id="autoexpenses " placeholder=""
                                                                    required>
                                                            </div>
                                                        </div> -->
                                                            <!-- :: input 14 Auto rentals -->
                                                            <!-- <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                                                            <div class="form-group">
                                                                <label class="form-head" for="auto-rentals"> 
                                                                Auto rentals
                                                                </label>
                                                                <input type="text" class="form-control"
                                                                    id="auto-rentals " placeholder=""
                                                                    required>
                                                            </div>
                                                        </div> -->
                                                            <!-- :: input 15 Is another car available for person use -->
                                                            <!-- <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                                                            <div class="form-group">
                                                                <label class="form-head" for="another-car"> 
                                                                Is another car available for person use
                                                                </label>
                                                                <input type="text" class="form-control"
                                                                    id="another-car" placeholder=""
                                                                    required>
                                                            </div>
                                                        </div> -->
                                                            <!-- :: input 16  Do you have evidence to support your mileage information -->
                                                            <!-- <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                                                            <div class="form-group">
                                                                <label class="form-head" for="evidence-"> 
                                                                Do you have evidence to support your mileage information
                                                                </label>
                                                                <input type="text" class="form-control"
                                                                    id="evidence" placeholder=""
                                                                    required>
                                                            </div>
                                                        </div> -->
                                                            <!-- :: input 17  If yes is the evidence written in a log or another place -->
                                                            <!-- <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                                                            <div class="form-group">
                                                                <label class="form-head" for="written-evidence"> 
                                                                If yes is the evidence written in a log or another place
                                                                </label>
                                                                <input type="text" class="form-control"
                                                                    id="written-evidence" placeholder=""
                                                                    required>
                                                            </div>
                                                        </div> -->

                                                        </div>
                                                    </div>
                                                    <!-- vehicle fil form end here -->

                                                    <!-- business form end here -->
                                                </div>
                                            </div>

                                            <!-- self employed and business filling details fill on click radio emd here -->

                                            <!--:: section 02 start here -->
                                            <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12">
                                                <div class="form-section-highlite mt-3">
                                                    <div>SECTION 2: Dependents</div>
                                                </div>
                                            </div>
                                            <!-- input radio for dependent  -->
                                            <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 mt-3 text-left "
                                                id="dependentsSectio">
                                                <div class="form-group">
                                                    <label class="form-head" for="have-dependent"> Do you have any
                                                        dependents;
                                                        EXCLUDING yourself and your spouse? <br>
                                                        <small>(only include dependents that you claim on your tax
                                                            returns)</small>
                                                    </label>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" id="dependents-yes"
                                                                type="radio" name="dependents"
                                                                value="have any dependents yes">Yes
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" id="dependents-no"
                                                                type="radio" name="dependents"
                                                                value="have any dependents no">No
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- :: input for dependent select -->
                                            <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 mt-3 text-left"
                                                id="dependencycount-section" style="">
                                                <div class="form-group depend-cnt">
                                                    <label class="form-head" for="count-depend">How many dependents do
                                                        you
                                                        have?</label>
                                                    <div class="select-group h-40">
                                                        <select class="form-control" id="count-depend"
                                                            name="count-depend">
                                                            <option value="" disabled="">Select an option</option>
                                                            <option value="0">None</option>
                                                            <option value="1">01</option>
                                                            <option value="2">02</option>
                                                            <option value="3">03</option>
                                                            <option value="4">04</option>
                                                            <option value="5">05</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 mt-2 mb-2 dependency-tab"
                                                id="dependentSections" style="">
                                                <!-- This is where the dependent sections will be added dynamically -->
                                            </div>

                                            <!-- :: dependend count form here -->
                                            <!--:: section 02 end here-->
                                            <!-- :: section 03 start from here -->
                                            <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12">
                                                <div class="form-section-highlite mt-3 mb-3">
                                                    <div>SECTION 3: Tax Questions</div>
                                                </div>
                                            </div>
                                            <!-- form input start fro here -->
                                            <!-- input radio  -->
                                            <div class="col-md-6 col-sm-12 col-xs-12 col-lg-6 text-left">
                                                <div class="form-group">
                                                    <label class="form-head" for="m-stts">Did your marital status
                                                        change during the year?
                                                    </label>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" id="ms-yes" type="radio"
                                                                name="m-stts" value="Yes">Yes
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" id="ms-no" type="radio"
                                                                name="m-stts" value="No">No
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- input radio  -->
                                            <div class="col-md-6 col-sm-12 col-xs-12 col-lg-6 text-left">
                                                <div class="form-group">
                                                    <label class="form-head" for="change-address">Did your address
                                                        change
                                                        from
                                                        last year?
                                                    </label>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" id="caddress-yes"
                                                                type="radio" name="c-addr" value="Yes">Yes
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" id="caddress-no"
                                                                type="radio" name="c-addr" value="No">No
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- input radio  -->
                                            <div class="col-md-6 col-sm-12 col-xs-12 col-lg-6 text-left">
                                                <div class="form-group">
                                                    <label class="form-head" for="claimed-taxpayer">Can you be claimed
                                                        as a
                                                        dependent by another tax payer?
                                                    </label>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" id="cldependent-yes"
                                                                type="radio" name="cl-dep" value="Yes">Yes
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" id="cldependent-no"
                                                                type="radio" name="cl-dep" value="No">No
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- input radio  -->
                                            <div class="col-md-6 col-sm-12 col-xs-12 col-lg-6 text-left">
                                                <div class="form-group">
                                                    <label class="form-head" for="home-loan">Did you take out a home
                                                        equity loan this year?
                                                    </label>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" id="homeloan-yes"
                                                                type="radio" name="he-loan" value="Yes">Yes
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" id="homeloan-no"
                                                                type="radio" name="he-loan" value="No">No
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- input radio  -->
                                            <div class="col-md-6 col-sm-12 col-xs-12 col-lg-6 text-left">
                                                <div class="form-group">
                                                    <label class="form-head" for="exampletext">Did you acquire or
                                                        dispose of
                                                        any stocks or bonds during the year?
                                                    </label>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" id="stocks-yes" type="radio"
                                                                name="stocks" value="Yes">Yes
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" id="stocks-no" type="radio"
                                                                name="stocks" value="No">No
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- input radio  -->
                                            <div class="col-md-6 col-sm-12 col-xs-12 col-lg-6 text-left"
                                                id="upload-stock">
                                                <div class="form-group">
                                                    <label class="form-head" for="up-form">Upload Form 1099-B
                                                    </label>
                                                    <input type="file" class="form-control" id="stock-document"
                                                        name="policy-document" accept="image/*">
                                                </div>
                                            </div>
                                            <!-- input radio  -->
                                            <div class="col-md-6 col-sm-12 col-xs-12 col-lg-6 text-left">
                                                <div class="form-group">
                                                    <label class="form-head" for="f-income">Did you have any foreign
                                                        income or pay any foreign taxes during the year?
                                                    </label>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" id="foreign-yes"
                                                                type="radio" name="foreign-income" value="Yes">Yes
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" id="foreign-no" type="radio"
                                                                name="foreign-income" value="No">No
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- input radio  -->
                                            <div class="col-md-6 col-sm-12 col-xs-12 col-lg-6 text-left">
                                                <div class="form-group">
                                                    <label class="form-head" for="exampletext">Did you receive any
                                                        lump-sum
                                                        payment from a pension, profit sharing or 401(k) plan?
                                                    </label>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" id="lump-yes" type="radio"
                                                                name="lump-sum" value="Yes">Yes
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" id="lump-no" type="radio"
                                                                name="lump-sum" value="No">No
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- input radio  -->
                                            <div class="col-md-6 col-sm-12 col-xs-12 col-lg-6 text-left">
                                                <div class="form-group">
                                                    <label class="form-head" for="iraradio">Did you make any withdrawals
                                                        from an IRA, Keogh, SIMPLE, or SEP account?
                                                    </label>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" id="ira-yes" type="radio"
                                                                name="i-r-a" value="Yes">Yes
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" id="ira-no" type="radio"
                                                                name="i-r-a" value="No">No
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- input radio  -->
                                            <div class="col-md-6 col-sm-12 col-xs-12 col-lg-6 text-left">
                                                <div class="form-group">
                                                    <label class="form-head" for="iraradio">Did you make any non-cash
                                                        charitable contributions (clothing, furniture, etc.)
                                                    </label>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" id="ncc-yes" type="radio"
                                                                name="non-cash" value="Yes">Yes
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" id="ncc-no" type="radio"
                                                                name="non-cash" value="No">No
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- input radio  -->
                                            <div class="col-md-6 col-sm-12 col-xs-12 col-lg-6 text-left">
                                                <div class="form-group">
                                                    <label class="form-head" for="carradio">Did you use your car on the
                                                        job
                                                        for other than commuting?
                                                    </label>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" id="carjob-yes" type="radio"
                                                                name="car-job" value="Yes">Yes
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" id="carjob-no" type="radio"
                                                                name="car-job" value="No">No
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- input radio  -->
                                            <div class="col-md-6 col-sm-12 col-xs-12 col-lg-6 text-left">
                                                <div class="form-group">
                                                    <label class="form-head" for="carradio">Did you work out of town for
                                                        part of the year?
                                                    </label>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" id="wtown-yes" type="radio"
                                                                name="town-work" value="Yes">Yes
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" id="wtown-no" type="radio"
                                                                name="town-work" value="No">No
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- input radio  -->
                                            <div class="col-md-6 col-sm-12 col-xs-12 col-lg-6 text-left">
                                                <div class="form-group">
                                                    <label class="form-head" for="carradio">Did you have any educational
                                                        expenses during the year?
                                                    </label>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" id="expense-yes"
                                                                type="radio" name="e-expenses" value="Yes">Yes
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" id="expense-no" type="radio"
                                                                name="e-expenses" value="No">No
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- input radio  -->
                                            <div class="col-md-6 col-sm-12 col-xs-12 col-lg-6 text-left">
                                                <div class="form-group">
                                                    <label class="form-head" for="carradio">Did you have any child care
                                                        expenses other than Child Support?
                                                    </label>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" id="childcare-yes"
                                                                type="radio" name="child-care" value="Yes">Yes
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" id="childcare-no"
                                                                type="radio" name="child-care" value="No">No
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- child care expenses record  -->
                                            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 mt-2 mb-2 dependency-tab"
                                                id="childSections" style="">
                                                <div class="form-section-divident text-left">
                                                    <h6>Child Care Expenses</h6>
                                                </div>
                                                <!-- form dependecy  -->
                                                <div class="row dependency-form-control px-2">
                                                    <!-- :: input 01 name -->
                                                    <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12 text-left">
                                                        <div class="form-group">
                                                            <label class="form-head" for="Amount"> Amount $</label>
                                                            <input type="text" class="form-control" id="input-Amount"
                                                                placeholder="" required>
                                                        </div>
                                                    </div>
                                                    <!-- :: input 02 Dob -->
                                                    <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12 text-left">
                                                        <div class="form-group">
                                                            <label class="form-head" for="children_number"> Number of
                                                                children cared for
                                                            </label>
                                                            <input type="text" class="form-control" id="children-number"
                                                                placeholder="" required>
                                                        </div>
                                                    </div>
                                                    <!-- :: input 03 Dob -->
                                                    <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12 text-left">
                                                        <div class="form-group">
                                                            <label class="form-head" for="house-service"> Services
                                                                Performed
                                                                in your house?
                                                            </label>
                                                            <input type="text" class="form-control" id="house-service"
                                                                placeholder="" required>
                                                        </div>
                                                    </div>
                                                    <!-- :: input 04 Dob -->
                                                    <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12 text-left">
                                                        <div class="form-group">
                                                            <label class="form-head" for="provider-name"> Name & address
                                                                of
                                                                provider
                                                            </label>
                                                            <input type="text" class="form-control" id="provider-name"
                                                                placeholder="" required>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- child care expenses end here -->
                                            <!-- input radio  -->
                                            <div class="col-md-6 col-sm-12 col-xs-12 col-lg-6 text-left">
                                                <div class="form-group">
                                                    <label class="form-head" for="carradio">Are you, your spouse, and
                                                        all
                                                        dependents covered by health insurance?
                                                    </label>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" id="insurance-yes"
                                                                type="radio" name="health-insurance" value="Yes">Yes
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" id="insurance-partial"
                                                                type="radio" name="health-insurance" value="No">Partial
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" id="insurance-no"
                                                                type="radio" name="health-insurance" value="No">No
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--:: input health policy document upload  -->
                                            <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left"
                                                id="health-doc">
                                                <div class="form-group">
                                                    <label class="form-head" for="exampletext">
                                                        Upload all 1095 or proof of insurance
                                                    </label>
                                                    <input type="file" class="form-control" id="p-document"
                                                        name="health-document" accept="image/*">
                                                </div>
                                            </div>
                                            <!-- input health policy document upload end here -->
                                            <!-- :: section 03 end here -->

                                            <!-- :: section 04 name and date  -->
                                            <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12">
                                                <div class="form-section-highlite mt-3 mb-3">
                                                    <div>SECTION 4: Date & Signature</div>
                                                </div>
                                            </div>

                                            <!-- input for print name   -->
                                            <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                                                <div class="form-group">
                                                    <label class="form-head" for="FullName"> Print Full Name</label>
                                                    <input type="text" class="form-control" id="Full-Name"
                                                        placeholder="Enter Full Name" required>
                                                </div>
                                            </div>
                                            <!-- input for print name   -->
                                            <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                                                <div class="form-group">
                                                    <label class="form-head" for="FullName"> Date</label>
                                                    <input type="date" class="form-control" id="sub-date"
                                                        placeholder="Select Date" required>
                                                </div>
                                            </div>
                                            <!-- signature pad -->
                                            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12" id="sig-pad">
                                                <canvas id="signature" width="950" height="150"
                                                    style="border: 1px solid rgb(221, 221, 221); touch-action: none;"></canvas>
                                                <br>
                                                <button type="button" id="clear-signature">Clear</button>
                                            </div>

                                            <!-- :: form submit btn -->
                                            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 mt-4 mb-4">
                                                <div class="row">
                                                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 t-end">
                                                        <button class="btn f-form-save-btn">Save Progress</button>

                                                    </div>
                                                    <div class="col-md-6 col-sm-6 col-xs-12 col-sm-12 t-start">
                                                        <button class="btn f-form-submit-btn">Submit</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- form submit btn end here -->

                                            <!-- section 04 name and date end here -->



                                        </div>
                                        <!-- main row for form -->
                                    </form>
                                </div>
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
    jQuery(document).ready(function($) {

        var canvas = document.getElementById("signature");
        var signaturePad = new SignaturePad(canvas);

        $('#clear-signature').on('click', function() {
            signaturePad.clear();
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
    const w2Yes = document.getElementById("w2-yes");
    const w2No = document.getElementById("w2-no");
    const irswageYes = document.getElementById("irswage-yes");
    const irswageNo = document.getElementById("irswage-no");
    const wdocSelect = document.getElementById("wdoc-select");
    const longradioSection = document.getElementById("longradio-section");
    const upwdocSelect = document.getElementById("upwdoc-select");
    const longSelect = document.getElementById("long-select");

    // Add event listeners to the radio buttons
    cWage.addEventListener("change", function() {
        if (this.checked) {
            w2Select.style.display = "block";
        }
    });
    cWage.addEventListener("change", function() {
        if (this.checked) {
            longSelect.style.display = "none";
        }
    });

    selfEmployed.addEventListener("change", function() {
        if (this.checked) {
            w2Select.style.display = "none";
        }
    });
    selfEmployed.addEventListener("change", function() {
        if (this.checked) {
            wdocSelect.style.display = "none";
        }
    });
    selfEmployed.addEventListener("change", function() {
        if (this.checked) {
            longradioSection.style.display = "none";
        }
    });
    selfEmployed.addEventListener("change", function() {
        if (this.checked) {
            upwdocSelect.style.display = "none";
        }
    });
    selfEmployed.addEventListener("change", function() {
        if (this.checked) {
            longSelect.style.display = "block";
        }
    });
    businessOwner.addEventListener("change", function() {
        if (this.checked) {
            w2Select.style.display = "none";
        }
    });
    businessOwner.addEventListener("change", function() {
        if (this.checked) {
            wdocSelect.style.display = "none";
        }
    });
    businessOwner.addEventListener("change", function() {
        if (this.checked) {
            longradioSection.style.display = "none";
        }
    });
    businessOwner.addEventListener("change", function() {
        if (this.checked) {
            upwdocSelect.style.display = "none";
        }
    });
    businessOwner.addEventListener("change", function() {
        if (this.checked) {
            longSelect.style.display = "block";
        }
    });


    eDisability.addEventListener("change", function() {
        if (this.checked) {
            w2Select.style.display = "none";
        }
    });
    eDisability.addEventListener("change", function() {
        if (this.checked) {
            wdocSelect.style.display = "none";
        }
    });
    eDisability.addEventListener("change", function() {
        if (this.checked) {
            longradioSection.style.display = "none";
        }
    });
    eDisability.addEventListener("change", function() {
        if (this.checked) {
            upwdocSelect.style.display = "none";
        }
    });
    eDisability.addEventListener("change", function() {
        if (this.checked) {
            longSelect.style.display = "none";
        }
    });

    eRetired.addEventListener("change", function() {
        if (this.checked) {
            w2Select.style.display = "none";
        }
    });
    eRetired.addEventListener("change", function() {
        if (this.checked) {
            wdocSelect.style.display = "none";
        }
    });
    eRetired.addEventListener("change", function() {
        if (this.checked) {
            longradioSection.style.display = "none";
        }
    });
    eRetired.addEventListener("change", function() {
        if (this.checked) {
            upwdocSelect.style.display = "none";
        }
    });
    eRetired.addEventListener("change", function() {
        if (this.checked) {
            longSelect.style.display = "none";
        }
    });
    w2Yes.addEventListener("change", function() {
        if (this.checked) {
            wdocSelect.style.display = "block";
        }
    });


    w2No.addEventListener("change", function() {
        if (this.checked) {
            wdocSelect.style.display = "none";
        }
    });
    w2Yes.addEventListener("change", function() {
        if (this.checked) {
            longradioSection.style.display = "none";
        }
    });


    w2No.addEventListener("change", function() {
        if (this.checked) {
            longradioSection.style.display = "block";
        }
    });

    irswageYes.addEventListener("change", function() {
        if (this.checked) {
            upwdocSelect.style.display = "none";
        }
    });


    irswageNo.addEventListener("change", function() {
        if (this.checked) {
            upwdocSelect.style.display = "block";
        }
    });


    // By default, hide the select element
    w2Select.style.display = "none";
    wdocSelect.style.display = "none";
    longradioSection.style.display = "none";
    upwdocSelect.style.display = "none";
    longSelect.style.display = "none";
    </script>
    <!-- ************** for client emp status ****************-->
    <!-- :: Script for dependent select section -->
    <script>
    const dependentsYes = document.getElementById("dependents-yes");
    const dependentsNo = document.getElementById("dependents-no");
    const dependencycountSection = document.getElementById("dependencycount-section");
    const dependentSections = document.getElementById("dependentSections");

    dependentsYes.addEventListener("change", function() {
        if (this.checked) {
            dependencycountSection.style.display = "block";
        }
    });

    dependentsNo.addEventListener("change", function() {
        if (this.checked) {
            dependencycountSection.style.display = "none";
        }
    });
    dependentsNo.addEventListener("change", function() {
        if (this.checked) {
            dependentSections.style.display = "none";
        }
    });

    dependencycountSection.style.display = "none";
    </script>
    <!-- Script for dependent select section end -->
    <!-- :: script for count dependent section -->
    <script>
    $(document).ready(function() {
        // Hide the dependent sections by default
        $("#dependentSections").hide();

        // Function to show/hide dependent sections based on the selected number of dependents
        $("#count-depend").change(function() {
            var selectedCount = parseInt($(this).val());
            $("#dependentSections").empty();

            for (var i = 1; i <= selectedCount; i++) {
                var dependentSection = `
                    <div class="form-section-divident text-left">
                        <h6>Dependent ${i}</h6>
                    </div>
                    <!-- form dependency -->
                    <div class="row dependency-form-control px-2">
                        <!-- :: input 01 name -->
                        <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12 text-left">
                            <div class="form-group">
                                <label class="form-head" for="name"> Name </label>
                                <input type="text" class="form-control" id="name" placeholder="Enter your Name" required="">
                            </div>
                        </div>
                        <!-- :: input 02  -->
                        <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12 text-left">
                            <div class="form-group">
                                <label class="form-head" for="dob"> Date Of Birth </label>
                                <input type="date" class="form-control" id="dob" placeholder="Enter your DOB" required="">
                            </div>
                        </div>
                        <!-- :: input 03 -->
                        <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12 text-left">
                            <div class="form-group">
                                <label class="form-head" for="ssn"> SSN </label>
                                <input type="text" class="form-control" id="ssn" placeholder="Enter SSN" required="">
                            </div>
                        </div>
                        <!-- :: input 04 -->
                        <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12 text-left">
                            <div class="form-group">
                                <label class="form-head" for="Relationship"> Relationship </label>
                                <input type="text" class="form-control" id="Relationship" placeholder="Enter Relationship" required="">
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                            <div class="form-group">
                                <label class="form-head" for="documentupload"> Dependent  <small>(Upload Birth Certificate or SSN Card)</small> </label>
                                <input type="file" class="form-control" id="document-upload" placeholder="Enter Relationship" accept="image/*" required>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                            <div class="form-group">
                                <label class="form-head" for="uploadrelation"> Dependent  <small>(Upload School records or write a letter if not in school)</small> </label>
                                <input type="file" class="form-control" id="up-relation" placeholder="Enter Relationship" accept="image/*" required>
                            </div>
                        </div>
                        
                    </div>
                `;
                $("#dependentSections").append(dependentSection);
            }

            if (selectedCount > 0) {
                $("#dependentSections").show();
            } else {
                $("#dependentSections").hide();
            }
        });
    });
    </script>
    <!-- :: script for stocks and bonds   -->
    <script>
    const stocksYes = document.getElementById("stocks-yes");
    const stocksNo = document.getElementById("stocks-no");
    const uploadStock = document.getElementById("upload-stock");

    stocksYes.addEventListener("change", function() {
        if (this.checked) {
            uploadStock.style.display = "block";
        }
    });


    stocksNo.addEventListener("change", function() {
        if (this.checked) {
            uploadStock.style.display = "none";
        }
    });

    uploadStock.style.display = "none";
    </script>
    <!-- :: function for child care expenses  -->
    <script>
    const childcareYes = document.getElementById("childcare-yes");
    const childcareNo = document.getElementById("childcare-no");
    const childSections = document.getElementById("childSections");

    childcareYes.addEventListener("change", function() {
        if (this.checked) {
            childSections.style.display = "block";
        }
    });
    childcareNo.addEventListener("change", function() {
        if (this.checked) {
            childSections.style.display = "none";
        }
    });

    childSections.style.display = "none";
    </script>
    <!-- function for child care expenses end here -->

    <!-- :: health document input upload section  -->
    <script>
    const insuranceYes = document.getElementById("insurance-yes");
    const insurancePartial = document.getElementById("insurance-partial");
    const insuranceNo = document.getElementById("insurance-no");
    const healthDoc = document.getElementById("health-doc");

    insuranceYes.addEventListener("change", function() {
        if (this.checked) {
            healthDoc.style.display = "block";
        }
    });
    insurancePartial.addEventListener("change", function() {
        if (this.checked) {
            healthDoc.style.display = "block";
        }
    });
    insuranceNo.addEventListener("change", function() {
        if (this.checked) {
            healthDoc.style.display = "none";
        }
    });

    healthDoc.style.display = "none";
    </script>
    <!-- health document input upload section end here -->

    <!-- ::  script for profit  loss statement -->
    <script>
    const profitYes = document.getElementById("profit-yes");
    const profitNo = document.getElementById("profit-no");
    const profitSelect = document.getElementById("profit-select");
    const profitInput = document.getElementById("profit-input");

    profitYes.addEventListener("change", function() {
        if (this.checked) {
            profitSelect.style.display = "block";
        }
    });
    profitYes.addEventListener("change", function() {
        if (this.checked) {
            profitInput.style.display = "none";
        }
    });

    profitNo.addEventListener("change", function() {
        if (this.checked) {
            profitSelect.style.display = "none";
        }
    });
    profitNo.addEventListener("change", function() {
        if (this.checked) {
            profitInput.style.display = "block";
        }
    });
    profitSelect.style.display = "none";
    profitInput.style.display = "none";
    </script>
    <!--  script for profit loass ststement end here -->
    <!-- :: script for manage vehicle information -->
    <script>
    $(document).ready(function() {
        // Hide the dependent sections by default
        $("#vehicle-select").hide();

        // Function to show/hide dependent sections based on the selected number of dependents
        $("#count-vehicle").change(function() {
            var selectedCount = parseInt($(this).val());
            $("#vehicle-select").empty();

            for (var i = 1; i <= selectedCount; i++) {
                var vehicleSelect = `
                    <div class="form-section-divident text-left">
                        <h6>Vehicle ${i}</h6>
                    </div>
                    <!-- form vehicle  -->
                    <div class="row count-investment-form-control px-2">
	<!-- :: input 01 Description of vehicle -->
	<div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
		<div class="form-group">
			<label class="form-head" for="description-vehicle"> Description of vehicle </label>
			<input type="text" class="form-control" id="description-vehicle" placeholder="" required>
		</div>
	</div>
	<!-- :: input 02 Is the vehicle used in business or by an employee -->
	<div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
		<div class="form-group">
			<label class="form-head" for="vehicle-used"> Is the vehicle used in business or by an employee </label>
			<input type="text" class="form-control" id="vehicle-used" placeholder="" required>
		</div>
	</div>
	<!-- :: input 03 Cost (including sales tax) -->
	<div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
		<div class="form-group">
			<label class="form-head" for="cost-vehicle"> Cost (including sales tax) </label>
			<input type="text" class="form-control" id="v-cost" placeholder="" required="">
		</div>
	</div>
	<!-- :: input 04 Date placed in service -->
	<div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
		<div class="form-group">
			<label class="form-head" for="service-date"> Date placed in service </label>
			<input type="text" class="form-control" id="service-date" placeholder="" required>
		</div>
	</div>
	<!-- :: input 05 Business Miles -->
	<div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
		<div class="form-group">
			<label class="form-head" for="exampletext"> Business Miles </label>
			<input type="text" class="form-control" id="business-miles" placeholder="" required>
		</div>
	</div>
	<!-- :: input 06 Commuting miles -->
	<div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
		<div class="form-group">
			<label class="form-head" for="commuting-miles"> Commuting miles </label>
			<input type="text" class="form-control" id="commuting-miles" placeholder="" required>
		</div>
	</div>
	<!-- :: input 07 Other personal use miles -->
	<div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
		<div class="form-group">
			<label class="form-head" for="other-miles"> Other personal use miles </label>
			<input type="text" class="form-control" id="other-miles" placeholder="" required>
		</div>
	</div>
	<!-- :: input 08 total miles driven -->
	<div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
		<div class="form-group">
			<label class="form-head" for="driven-miles"> Total miles driven </label>
			<input type="text" class="form-control" id="driven-miles" placeholder="" required>
		</div>
	</div>
	<!-- :: input 09 Gas & oil expenses -->
	<div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
		<div class="form-group">
			<label class="form-head" for="oil-expenses"> Gas & oil expenses </label>
			<input type="text" class="form-control" id="oil-exp" placeholder="" required>
		</div>
	</div>
	<!-- :: input 10 Repairs & Maintenance -->
	<div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
		<div class="form-group">
			<label class="form-head" for="repairs-maintenance"> Repairs & Maintenance </label>
			<input type="text" class="form-control" id="repair-main" placeholder="" required>
		</div>
	</div>
	<!-- :: input 11 auto-insurance -->
	<div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
		<div class="form-group">
			<label class="form-head" for="auto-insurance"> Auto insurance </label>
			<input type="text" class="form-control" id="auto-insurance" placeholder="" required>
		</div>
	</div>
	<!-- :: input 12 auto-insurance -->
	<div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
		<div class="form-group">
			<label class="form-head" for="licenses-fees"> Registration, licenses, and fees </label>
			<input type="text" class="form-control" id="licenses-fees" placeholder="" required>
		</div>
	</div>
	<!-- :: input 13 auto-insurance -->
	<div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
		<div class="form-group">
			<label class="form-head" for="auto-expenses "> Other auto expenses (identify) </label>
			<input type="text" class="form-control" id="autoexpenses " placeholder="" required>
		</div>
	</div>
	<!-- :: input 14 Auto rentals -->
	<div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
		<div class="form-group">
			<label class="form-head" for="auto-rentals"> Auto rentals </label>
			<input type="text" class="form-control" id="auto-rentals " placeholder="" required>
		</div>
	</div>
	<!-- :: input 15 Is another car available for person use -->
	<div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
		<div class="form-group">
			<label class="form-head" for="another-car"> Is another car available for person use </label>
			<input type="text" class="form-control" id="another-car" placeholder="" required>
		</div>
	</div>
	<!-- :: input 16  Do you have evidence to support your mileage information -->
	<div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
		<div class="form-group">
			<label class="form-head" for="evidence-"> Do you have evidence to support your mileage information </label>
			<input type="text" class="form-control" id="evidence" placeholder="" required>
		</div>
	</div>
	<!-- :: input 17  If yes is the evidence written in a log or another place -->
	<div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
		<div class="form-group">
			<label class="form-head" for="written-evidence"> If yes is the evidence written in a log or another place </label>
			<input type="text" class="form-control" id="written-evidence" placeholder="" required>
		</div>
	</div>
</div>
                `;
                $("#vehicle-select").append(vehicleSelect);
            }

            if (selectedCount > 0) {
                $("#vehicle-select").show();
            } else {
                $("#vehicle-select").hide();
            }
        });
    });
    </script>
    <!--  script fot manage vehicle information end here -->

</body>

</html>