<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="cleartax">
    <meta name="theme-color" content="#8AC8D6">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="HandheldFriendly" content="True">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
    <title>payment-clearstarttax</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!-- Responsive css -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Font-icon css-->
    <!-- favicon -->
    <link href="img/c-favicon.png" rel="icon">
    <link rel="stylesheet" type="text/css"
        href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<!--:: body start here -->

<body class="app sidebar-mini">
    
      <!-- ::header included  -->
   <?php include 'include/header.php';?>
    <!-- ::header included end  -->

    <!-- :: main content start from here -->
    <main class="app-content">
        <div class="app-title">
            <div class="user-dashboard-welcome">
                <h1>Hello Christian Ha</h1>
                <h5 class="mt-10 mb-5px">"Step into Your Payment Hub: Centralized Access to Your Financial
                    Transactions!"</h5>
            </div>
            <div class="user-dashboard-welcome-d-image d-none-sm">
                <!--:: image top head dashboard  -->
                <img class="dashboardtop-image cnt-top" src="img/pay-top.png">
            </div>
        </div>
        <!-- section one pay detail -->
        <div class="row">
            <div class="col-md-6">
                <div class="tile-x h-300 mb-h-fitcontent">
                    <div class="tile-body">
                        <div class="case-status text-center">
                            <h2>Payment:</h2>
                        </div>
                    </div>
                    <!-- contact box -->
                    <div class="cnt-form">
                        <form>
                            <div class="row justify-content-center p-4">
                                <!-- :: input 01 -->
                                <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                                    <div class="d-flex justify-content-between">
                                        <span class="bill-summary-label">
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="radio" class="form-check-input" name="optradio">
                                                    Past due balance:
                                                </label>
                                            </div>
                                        </span>
                                        <span class="bill-summary-detail">$8,836.02</span>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <span class="bill-summary-label">
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="radio" class="form-check-input" name="optradio">
                                                    Remaining balance:
                                                </label>
                                            </div>
                                        </span>
                                        <span class="bill-summary-detail">$17,051.62</span>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <span class="bill-summary-label">
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="radio" class="form-check-input" name="optradio">
                                                    Other Amount
                                                </label>
                                            </div>
                                        </span>
                                        <span class="bill-summary-detail">$______</span>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- pay detail col seconf -->
            <div class="col-md-6">
                <div class="tile-x">
                    <div class="tile-body">
                        <div class="case-status text-center">
                            <h2>Billing Summary:</h2>
                        </div>
                    </div>
                    <!-- contact box -->
                    <div class="cnt-form">
                        <form>
                            <div class="row justify-content-center p-4">
                                <!-- :: input 01 -->
                                <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12 d-flex flex-column">
                                    <div class="d-flex justify-content-between">
                                        <span class="bill-summary-label">Total Balance : </span>
                                        <span class="bill-summary-detail">$17,084.00</span>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <span class="bill-summary-label">Paid : </span>
                                        <span class="bill-summary-detail">$32.38</span>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <span class="bill-summary-label">% Paid : </span>
                                        <span class="bill-summary-detail">0.19%</span>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <span class="bill-summary-label">Remaining Balance: </span>
                                        <span class="bill-summary-detail">$17,051.62</span>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <span class="bill-summary-label">Amount Due : </span>
                                        <span class="bill-summary-detail">$10,214.92</span>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <span class="bill-summary-label">Next Due Date :</span>
                                        <span class="bill-summary-detail">09/08/2023</span>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <span class="bill-summary-label">Past Due : </span>
                                        <span class="bill-summary-detail text-danger">$8,836.02</span>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <span class="bill-summary-label">Pay Schedule : </span>
                                        <span class="bill-summary-detail"><a type="button" href="" class=""
                                                data-toggle="modal" data-target="#exampleModalCenter">Click to
                                                view</a></span>
                                    </div>
                                </div>
                                <!-- :: input 02 -->
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- section second payment int -->
        <div class="row">
            <div class="col-md-12">
                <div class="tile-x">
                    <div class="tile-body">
                        <div class="case-status text-center">
                            <h2>Payment Information</h2>
                        </div>
                    </div>
                    <!-- payments detail section  -->
                    <div class="pmt-form">
                        <div class="tab-container">
                            <!-- tabs-btn -->
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                                        aria-controls="home" aria-selected="true">Credit Card</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                                        aria-controls="profile" aria-selected="false">Bank Transfer</a>
                                </li>
                            </ul>
                            <!-- tab contents -->
                            <!-- tab for credit card -->
                            <div class="tab-content">
                                <div class="tab-pane active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                    <form>
                                        <div class="row justify-content-center p-4">
                                            <!-- :: input 01 -->
                                            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                                                <div class="form-group">
                                                    <label class="form-head" for="exampletext">
                                                        Name on card :
                                                    </label>
                                                    <input type="text" class="form-control" id="exampleInputtext"
                                                        placeholder="Enter full name" required="">
                                                </div>
                                            </div>
                                            <!-- :: input 02 -->
                                            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                                                <div class="form-group">
                                                    <label class="form-head" for="exampletext">
                                                        Card information :
                                                    </label>
                                                    <input type="text" class="form-control" id="exampleInputtext"
                                                        placeholder="Enter card information" required="">
                                                </div>
                                            </div>
                                            <!-- :: input 03 -->
                                            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                                                <div class="form-group">
                                                    <label class="form-head" for="expirationDate">Expiration
                                                        Date:</label>
                                                    <div class="input-group">
                                                        <select class="form-control" id="expirationMonth" required>
                                                            <option value="" disabled selected>MM</option>
                                                            <option value="01">January</option>
                                                            <option value="02">February</option>
                                                            <option value="03">March</option>
                                                            <option value="04">April</option>
                                                            <option value="05">May</option>
                                                            <option value="06">June</option>
                                                            <option value="07">July</option>
                                                            <option value="08">August</option>
                                                            <option value="09">September</option>
                                                            <option value="10">October</option>
                                                            <option value="11">November</option>
                                                            <option value="12">December</option>
                                                        </select>
                                                        <select class="form-control" id="expirationYear" required>
                                                            <option value="" disabled selected>YYYY</option>
                                                            <option value="2023">2023</option>
                                                            <option value="2024">2024</option>
                                                            <option value="2024">2025</option>
                                                            <option value="2024">2026</option>
                                                            <option value="2024">2027</option>
                                                            <option value="2024">2028</option>
                                                            <option value="2024">2029</option>
                                                            <option value="2024">2030</option>
                                                            <option value="2024">2031</option>
                                                            <option value="2030">2032</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- :: input 04 -->
                                            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                                                <div class="form-group">
                                                    <label class="form-head" for="exampletext">
                                                        CVV <span class="and">?</span> :
                                                    </label>
                                                    <input type="text" class="form-control" id="exampleInputtext"
                                                        placeholder="Enter card CVV no." required="">
                                                </div>
                                            </div>
                                            <!-- :: input 05 -->
                                            <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                                                <div class="form-group">
                                                    <label class="form-head" for="exampletext">
                                                        Email Address :
                                                    </label>
                                                    <input type="text" class="form-control" id="exampleInputtext"
                                                        placeholder="Enter email address" required="">
                                                </div>
                                            </div>
                                            <div class="text-center">
                                                <button type="submit" class="cnt-pay-btn">Pay</button>
                                            </div>
                                        </div>
                                    </form>
                                    <div class="payment-info text-center">
                                        <p>By clicking "Pay", you agree to Clear Start Tax Relief's Payment <a href="#"
                                                class="trmandcnd">Terms and Conditions.</a></p>
                                        <p>If you have questions or need help, please contact us:</p>
                                        <div class="flex-container justify-content-center mb-3 d-flex">
                                            <div>
                                                <svg class="mx-1 mt-1px" xmlns="http://www.w3.org/2000/svg" width="15"
                                                    height="15" viewBox="0 0 15 15" fill="none">
                                                    <path
                                                        d="M8.4375 1.25C8.4375 1.25 9.89625 1.3825 11.7519 3.23875C13.6081 5.095 13.7406 6.55312 13.7406 6.55312M8.87937 3.46C8.87937 3.46 9.49812 3.63625 10.4262 4.56437C11.3544 5.4925 11.5313 6.11125 11.5313 6.11125"
                                                        stroke="#333333" stroke-linecap="round"></path>
                                                    <path
                                                        d="M9.7225 9.09186L9.3825 8.76936L9.7225 9.09249V9.09186ZM11.8763 12.6587L11.5356 12.3356L11.8756 12.6587H11.8763ZM11.0475 13.1025L11.0938 13.5681L11.0475 13.1019V13.1025ZM2.345 4.32811C2.34168 4.26664 2.32628 4.20642 2.29968 4.1509C2.27308 4.09537 2.23581 4.04563 2.18999 4.00451C2.14417 3.96339 2.0907 3.9317 2.03263 3.91125C1.97457 3.89079 1.91304 3.88198 1.85156 3.8853C1.79009 3.88862 1.72987 3.90402 1.67435 3.93062C1.61882 3.95722 1.56908 3.99449 1.52796 4.04031C1.48684 4.08613 1.45515 4.1396 1.4347 4.19767C1.41424 4.25573 1.40543 4.31726 1.40875 4.37874L2.345 4.32811ZM2.94875 1.93249C2.86667 2.0232 2.8233 2.14241 2.82791 2.26466C2.83251 2.38691 2.88473 2.50251 2.97341 2.58679C3.0621 2.67106 3.18021 2.71733 3.30254 2.71571C3.42486 2.71409 3.54171 2.66471 3.62812 2.57811L2.94875 1.93249ZM6.665 12.3825C6.71712 12.4161 6.77539 12.439 6.83643 12.4499C6.89748 12.4608 6.96008 12.4595 7.02061 12.4461C7.08114 12.4326 7.1384 12.4073 7.18908 12.3715C7.23976 12.3358 7.28284 12.2904 7.31583 12.2379C7.34882 12.1854 7.37107 12.1268 7.38128 12.0657C7.39149 12.0045 7.38946 11.9419 7.37532 11.8815C7.36117 11.8212 7.33519 11.7642 7.29887 11.7139C7.26256 11.6637 7.21663 11.6211 7.16375 11.5887L6.665 12.3825ZM9.44562 12.5362C9.32387 12.5108 9.197 12.5348 9.09292 12.6029C8.98884 12.671 8.91607 12.7776 8.89062 12.8994C8.86518 13.0211 8.88914 13.148 8.95724 13.2521C9.02534 13.3562 9.132 13.4289 9.25375 13.4544L9.44562 12.5362ZM9.77812 9.71499L10.0625 9.41499L9.3825 8.76936L9.09812 9.06936L9.77812 9.71499ZM10.9994 9.28874L12.1931 9.97624L12.6606 9.16374L11.4669 8.47624L10.9994 9.28874ZM12.4237 11.4012L11.5356 12.3356L12.2156 12.9819L13.1031 12.0469L12.4237 11.4012ZM5.22437 9.97436C2.80187 7.42374 2.39562 5.27186 2.345 4.32811L1.40875 4.37874C1.47125 5.53499 1.96125 7.89999 4.545 10.62L5.22437 9.97436ZM6.08437 5.82624L6.26312 5.63749L5.58375 4.99186L5.40437 5.18061L6.08437 5.82624ZM6.40437 3.28749L5.61625 2.17311L4.85062 2.71436L5.63812 3.82874L6.40437 3.28749ZM5.74375 5.50311C5.63126 5.39471 5.51772 5.28741 5.40312 5.18124L5.40187 5.18249L5.4 5.18436C5.3889 5.19584 5.37847 5.20795 5.36875 5.22061C5.30748 5.30171 5.259 5.39171 5.225 5.48749C5.16375 5.65936 5.13125 5.88686 5.1725 6.17061C5.25375 6.72811 5.61937 7.47749 6.57375 8.48311L7.25375 7.83686C6.36125 6.89749 6.14125 6.31936 6.1 6.03436C6.08 5.89686 6.1 5.82499 6.10812 5.80186L6.11312 5.78999C6.10801 5.79822 6.10215 5.80596 6.09562 5.81311C6.09196 5.81736 6.08821 5.82215 6.08437 5.82624L5.74375 5.50311ZM6.57375 8.48249C7.52562 9.48499 8.24437 9.87874 8.7925 9.96811C9.07437 10.0137 9.3025 9.97686 9.475 9.90874C9.57058 9.87122 9.65944 9.81845 9.73812 9.75249L9.76062 9.73124L9.76937 9.72249C9.77085 9.72126 9.77231 9.72001 9.77375 9.71874L9.77562 9.71686L9.77625 9.71561C9.77625 9.71561 9.7775 9.71499 9.4375 9.39186C9.0975 9.06936 9.09812 9.06874 9.09812 9.06811L9.09937 9.06749L9.10062 9.06561L9.10437 9.06249C9.11382 9.05336 9.12362 9.0446 9.13375 9.03624C9.13937 9.03249 9.13875 9.03374 9.13062 9.03686C9.11812 9.04186 9.06187 9.06186 8.94312 9.04249C8.69187 9.00124 8.14937 8.77999 7.25375 7.83686L6.57375 8.48249ZM5.61625 2.17311C4.9825 1.27686 3.715 1.12499 2.94875 1.93249L3.62812 2.57811C3.955 2.23436 4.53062 2.26124 4.85062 2.71436L5.61625 2.17311ZM11.5356 12.3356C11.3613 12.5194 11.1794 12.6181 11.0019 12.6356L11.0938 13.5681C11.5606 13.5225 11.9388 13.2737 12.2156 12.9819L11.5356 12.3362V12.3356ZM6.26312 5.63749C6.86812 5.00061 6.91062 4.00436 6.40437 3.28749L5.63875 3.82874C5.9025 4.20186 5.86187 4.69936 5.58375 4.99186L6.26312 5.63749ZM12.1931 9.97624C12.7063 10.2719 12.8069 10.9981 12.4237 11.4012L13.1031 12.0469C13.9188 11.1881 13.6806 9.75124 12.6606 9.16374L12.1931 9.97624ZM10.0625 9.41499C10.3031 9.16124 10.6788 9.10436 10.9994 9.28874L11.4669 8.47624C10.78 8.08124 9.92937 8.19436 9.3825 8.76936L10.0625 9.41499ZM7.16375 11.5887C6.54937 11.2025 5.895 10.68 5.22437 9.97436L4.545 10.62C5.26625 11.3794 5.98062 11.9525 6.665 12.3825L7.16375 11.5887ZM11.0012 12.6356C10.4807 12.6813 9.95616 12.6478 9.44562 12.5362L9.25375 13.4544C9.85779 13.5852 10.4782 13.6236 11.0938 13.5681L11.0019 12.6356H11.0012Z"
                                                        fill="#333333"></path>
                                                </svg>
                                                <a href="tel:888-235-0004" class="tel">888-235-0004</a>
                                            </div>
                                            <div>
                                                <svg class="mx-1 mt-1px" xmlns="http://www.w3.org/2000/svg" width="15"
                                                    height="15" viewBox="0 0 15 15" fill="none">
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M2 3.71422V10.5714C2 11.026 2.18061 11.4621 2.5021 11.7836C2.82359 12.105 3.25963 12.2857 3.71429 12.2857H12.2857C12.7404 12.2857 13.1764 12.105 13.4979 11.7836C13.8194 11.4621 14 11.026 14 10.5714V3.71422C14 3.25957 13.8194 2.82353 13.4979 2.50204C13.1764 2.18055 12.7404 1.99994 12.2857 1.99994H3.71429C3.25963 1.99994 2.82359 2.18055 2.5021 2.50204C2.18061 2.82353 2 3.25957 2 3.71422Z"
                                                        stroke="#333333" stroke-linecap="round" stroke-linejoin="round">
                                                    </path>
                                                    <path d="M3.71431 4.57162L8.00002 7.14305L12.2857 4.57162"
                                                        stroke="#333333" stroke-linecap="round" stroke-linejoin="round">
                                                    </path>
                                                </svg>
                                                <a href="mailto:info@clearstarttax.com"
                                                    class="tel">info@clearstarttax.com</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- tab for bank transfer -->
                                <div class="tab-pane" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                    <form>
                                        <div class="row justify-content-center p-4">
                                            <!-- for-bank-details -->
                                            <!-- :: input 01 -->
                                            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                                                <div class="form-group">
                                                    <label class="form-head" for="exampletext">
                                                        Bank Name :
                                                    </label>
                                                    <input type="text" class="form-control" id="exampleInputtext"
                                                        placeholder="Enter bank name" required="">
                                                </div>
                                            </div>
                                            <!-- :: input 02 -->
                                            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                                                <div class="form-group">
                                                    <label class="form-head" for="exampletext">
                                                        Account Holder Name :
                                                    </label>
                                                    <input type="text" class="form-control" id="exampleInputtext"
                                                        placeholder="Enter account holder name" required="">
                                                </div>
                                            </div>
                                            <!-- :: input 03 -->
                                            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                                                <div class="form-group">
                                                    <label class="form-head" for="exampletext">
                                                        Routing#
                                                    </label>
                                                    <input type="text" class="form-control" id="exampleInputtext"
                                                        placeholder="" required="">
                                                </div>
                                            </div>
                                            <!-- :: input 04 -->
                                            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                                                <div class="form-group">
                                                    <label class="form-head" for="exampletext">
                                                        Account#
                                                    </label>
                                                    <input type="text" class="form-control" id="exampleInputtext"
                                                        placeholder="" required="">
                                                </div>
                                            </div>
                                            <!-- :: billing address -->
                                            <div class="col-md-12 col-sm-12">
                                                <div class="banking-details mb-3 mt-1">
                                                    Billing Address :
                                                </div>
                                            </div>
                                            <!-- :: input 01-->
                                            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                                                <div class="form-group">
                                                    <label class="form-head" for="exampletext">
                                                        Street Address 1 :
                                                    </label>
                                                    <input type="text" class="form-control" id="exampleInputtext"
                                                        placeholder="" required="">
                                                </div>
                                            </div>
                                            <!-- :: input 02 -->
                                            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                                                <div class="form-group">
                                                    <label class="form-head" for="exampletext">
                                                        Street Address 2(#,Apt,Unit,Suite) :
                                                    </label>
                                                    <input type="text" class="form-control" id="exampleInputtext"
                                                        placeholder="" required="">
                                                </div>
                                            </div>
                                            <!-- :: input 03 -->
                                            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                                                <div class="form-group">
                                                    <label class="form-head" for="exampletext">
                                                        City :
                                                    </label>
                                                    <input type="text" class="form-control" id="exampleInputtext"
                                                        placeholder="" required="">
                                                </div>
                                            </div>
                                            <!-- :: input 05 -->
                                            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                                                <div class="form-group">
                                                    <label class="form-head" for="exampletext">
                                                        State :
                                                    </label>
                                                    <input type="text" class="form-control" id="exampleInputtext"
                                                        placeholder="" required="">
                                                </div>
                                            </div>
                                            <!-- :: input 05 -->
                                            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                                                <div class="form-group">
                                                    <label class="form-head" for="exampletext">
                                                        Zip :
                                                    </label>
                                                    <input type="text" class="form-control" id="exampleInputtext"
                                                        placeholder="" required="">
                                                </div>
                                            </div>
                                            <!-- :: input 05 -->
                                            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                                                <div class="form-group">
                                                    <label class="form-head" for="exampletext">
                                                        Email :
                                                    </label>
                                                    <input type="text" class="form-control" id="exampleInputtext"
                                                        placeholder="" required="">
                                                </div>
                                            </div>
                                            <div class="text-center">
                                                <button type="submit" class="cnt-pay-btn">Pay</button>
                                            </div>
                                        </div>
                                    </form>
                                    <div class="payment-info text-center">
                                        <p>By clicking "Pay", you agree to Clear Start Tax Relief's Payment <a href="#"
                                                class="trmandcnd">Terms and Conditions.</a></p>
                                        <p>If you have questions or need help, please contact us:</p>
                                        <div class="flex-container justify-content-center mb-3 d-flex">
                                            <div>
                                                <svg class="mx-1 mt-1px" xmlns="http://www.w3.org/2000/svg" width="15"
                                                    height="15" viewBox="0 0 15 15" fill="none">
                                                    <path
                                                        d="M8.4375 1.25C8.4375 1.25 9.89625 1.3825 11.7519 3.23875C13.6081 5.095 13.7406 6.55312 13.7406 6.55312M8.87937 3.46C8.87937 3.46 9.49812 3.63625 10.4262 4.56437C11.3544 5.4925 11.5313 6.11125 11.5313 6.11125"
                                                        stroke="#333333" stroke-linecap="round"></path>
                                                    <path
                                                        d="M9.7225 9.09186L9.3825 8.76936L9.7225 9.09249V9.09186ZM11.8763 12.6587L11.5356 12.3356L11.8756 12.6587H11.8763ZM11.0475 13.1025L11.0938 13.5681L11.0475 13.1019V13.1025ZM2.345 4.32811C2.34168 4.26664 2.32628 4.20642 2.29968 4.1509C2.27308 4.09537 2.23581 4.04563 2.18999 4.00451C2.14417 3.96339 2.0907 3.9317 2.03263 3.91125C1.97457 3.89079 1.91304 3.88198 1.85156 3.8853C1.79009 3.88862 1.72987 3.90402 1.67435 3.93062C1.61882 3.95722 1.56908 3.99449 1.52796 4.04031C1.48684 4.08613 1.45515 4.1396 1.4347 4.19767C1.41424 4.25573 1.40543 4.31726 1.40875 4.37874L2.345 4.32811ZM2.94875 1.93249C2.86667 2.0232 2.8233 2.14241 2.82791 2.26466C2.83251 2.38691 2.88473 2.50251 2.97341 2.58679C3.0621 2.67106 3.18021 2.71733 3.30254 2.71571C3.42486 2.71409 3.54171 2.66471 3.62812 2.57811L2.94875 1.93249ZM6.665 12.3825C6.71712 12.4161 6.77539 12.439 6.83643 12.4499C6.89748 12.4608 6.96008 12.4595 7.02061 12.4461C7.08114 12.4326 7.1384 12.4073 7.18908 12.3715C7.23976 12.3358 7.28284 12.2904 7.31583 12.2379C7.34882 12.1854 7.37107 12.1268 7.38128 12.0657C7.39149 12.0045 7.38946 11.9419 7.37532 11.8815C7.36117 11.8212 7.33519 11.7642 7.29887 11.7139C7.26256 11.6637 7.21663 11.6211 7.16375 11.5887L6.665 12.3825ZM9.44562 12.5362C9.32387 12.5108 9.197 12.5348 9.09292 12.6029C8.98884 12.671 8.91607 12.7776 8.89062 12.8994C8.86518 13.0211 8.88914 13.148 8.95724 13.2521C9.02534 13.3562 9.132 13.4289 9.25375 13.4544L9.44562 12.5362ZM9.77812 9.71499L10.0625 9.41499L9.3825 8.76936L9.09812 9.06936L9.77812 9.71499ZM10.9994 9.28874L12.1931 9.97624L12.6606 9.16374L11.4669 8.47624L10.9994 9.28874ZM12.4237 11.4012L11.5356 12.3356L12.2156 12.9819L13.1031 12.0469L12.4237 11.4012ZM5.22437 9.97436C2.80187 7.42374 2.39562 5.27186 2.345 4.32811L1.40875 4.37874C1.47125 5.53499 1.96125 7.89999 4.545 10.62L5.22437 9.97436ZM6.08437 5.82624L6.26312 5.63749L5.58375 4.99186L5.40437 5.18061L6.08437 5.82624ZM6.40437 3.28749L5.61625 2.17311L4.85062 2.71436L5.63812 3.82874L6.40437 3.28749ZM5.74375 5.50311C5.63126 5.39471 5.51772 5.28741 5.40312 5.18124L5.40187 5.18249L5.4 5.18436C5.3889 5.19584 5.37847 5.20795 5.36875 5.22061C5.30748 5.30171 5.259 5.39171 5.225 5.48749C5.16375 5.65936 5.13125 5.88686 5.1725 6.17061C5.25375 6.72811 5.61937 7.47749 6.57375 8.48311L7.25375 7.83686C6.36125 6.89749 6.14125 6.31936 6.1 6.03436C6.08 5.89686 6.1 5.82499 6.10812 5.80186L6.11312 5.78999C6.10801 5.79822 6.10215 5.80596 6.09562 5.81311C6.09196 5.81736 6.08821 5.82215 6.08437 5.82624L5.74375 5.50311ZM6.57375 8.48249C7.52562 9.48499 8.24437 9.87874 8.7925 9.96811C9.07437 10.0137 9.3025 9.97686 9.475 9.90874C9.57058 9.87122 9.65944 9.81845 9.73812 9.75249L9.76062 9.73124L9.76937 9.72249C9.77085 9.72126 9.77231 9.72001 9.77375 9.71874L9.77562 9.71686L9.77625 9.71561C9.77625 9.71561 9.7775 9.71499 9.4375 9.39186C9.0975 9.06936 9.09812 9.06874 9.09812 9.06811L9.09937 9.06749L9.10062 9.06561L9.10437 9.06249C9.11382 9.05336 9.12362 9.0446 9.13375 9.03624C9.13937 9.03249 9.13875 9.03374 9.13062 9.03686C9.11812 9.04186 9.06187 9.06186 8.94312 9.04249C8.69187 9.00124 8.14937 8.77999 7.25375 7.83686L6.57375 8.48249ZM5.61625 2.17311C4.9825 1.27686 3.715 1.12499 2.94875 1.93249L3.62812 2.57811C3.955 2.23436 4.53062 2.26124 4.85062 2.71436L5.61625 2.17311ZM11.5356 12.3356C11.3613 12.5194 11.1794 12.6181 11.0019 12.6356L11.0938 13.5681C11.5606 13.5225 11.9388 13.2737 12.2156 12.9819L11.5356 12.3362V12.3356ZM6.26312 5.63749C6.86812 5.00061 6.91062 4.00436 6.40437 3.28749L5.63875 3.82874C5.9025 4.20186 5.86187 4.69936 5.58375 4.99186L6.26312 5.63749ZM12.1931 9.97624C12.7063 10.2719 12.8069 10.9981 12.4237 11.4012L13.1031 12.0469C13.9188 11.1881 13.6806 9.75124 12.6606 9.16374L12.1931 9.97624ZM10.0625 9.41499C10.3031 9.16124 10.6788 9.10436 10.9994 9.28874L11.4669 8.47624C10.78 8.08124 9.92937 8.19436 9.3825 8.76936L10.0625 9.41499ZM7.16375 11.5887C6.54937 11.2025 5.895 10.68 5.22437 9.97436L4.545 10.62C5.26625 11.3794 5.98062 11.9525 6.665 12.3825L7.16375 11.5887ZM11.0012 12.6356C10.4807 12.6813 9.95616 12.6478 9.44562 12.5362L9.25375 13.4544C9.85779 13.5852 10.4782 13.6236 11.0938 13.5681L11.0019 12.6356H11.0012Z"
                                                        fill="#333333"></path>
                                                </svg>
                                                <a href="tel:888-235-0004" class="tel">888-235-0004</a>
                                            </div>
                                            <div>
                                                <svg class="mx-1 mt-1px" xmlns="http://www.w3.org/2000/svg" width="15"
                                                    height="15" viewBox="0 0 15 15" fill="none">
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M2 3.71422V10.5714C2 11.026 2.18061 11.4621 2.5021 11.7836C2.82359 12.105 3.25963 12.2857 3.71429 12.2857H12.2857C12.7404 12.2857 13.1764 12.105 13.4979 11.7836C13.8194 11.4621 14 11.026 14 10.5714V3.71422C14 3.25957 13.8194 2.82353 13.4979 2.50204C13.1764 2.18055 12.7404 1.99994 12.2857 1.99994H3.71429C3.25963 1.99994 2.82359 2.18055 2.5021 2.50204C2.18061 2.82353 2 3.25957 2 3.71422Z"
                                                        stroke="#333333" stroke-linecap="round" stroke-linejoin="round">
                                                    </path>
                                                    <path d="M3.71431 4.57162L8.00002 7.14305L12.2857 4.57162"
                                                        stroke="#333333" stroke-linecap="round" stroke-linejoin="round">
                                                    </path>
                                                </svg>
                                                <a href="mailto:info@clearstarttax.com"
                                                    class="tel">info@clearstarttax.com</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header justify-content-center">
                    <h2 class="modal-title" id="exampleModalLongTitle">Payment Schedule:</h2>
                    <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button> -->
                </div>
                <div class="modal-body">
                    <table class="table text-center br-none">
                        <thead class="br-none">
                            <tr>
                                <th scope="col">Date</th>
                                <th scope="col">Amount</th>
                            </tr>
                        </thead>
                        <tbody class="br-none">
                            <tr>
                                <td>11/04/2021</td>
                                <td>$595.00</td>
                            </tr>
                        </tbody>
                    </table>
                    <!-- pay divider -->
                    <div class="modal-section-two text-center mt-5">
                        <h2>Upcoming payments</h2>
                    </div>
                    <table class="table text-center br-none">
                        <thead>
                            <tr>
                                <th scope="col">Date</th>
                                <th scope="col">Amount</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>11/04/2021</td>
                                <td>$595.00</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer justify-content-center">
                    <button type="button" class="m-close-btn" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Essential javascripts for application to work-->
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="js/plugins/pace.min.js"></script>

</body>

</html>