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
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent"/>
    <title>Login-clearstarttax</title>
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
                <h1>Good Morning Christian</h1>
                <h5 class="mt-10 mb-5px">"Welcome to Your Clear Start Tax Client Portal!"</h5>
                <p>"Explore Your Personalized Dashboard, Christian!"</p>
            </div>
            <div class="user-dashboard-welcome-d-image d-none-sm">
                <!--:: image top head dashboard  -->
                <img class="dashboardtop-image" src="img/dashboard-top.png">
            </div>
        </div>
        <!-- aleart -->
        <div class="row">
            <div class="col-md-12">
                <div class="alert alert-warning alert-dismissible fade show" role="alert"> Your documents are currently
                    incomplete and require immediate review and completion.<a href="#" class="link-text">Click here</a>
                    <a type="button" class="close link-text" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 25 25"
                                fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M21.4233 4.75666C21.5008 4.67918 21.5623 4.5872 21.6042 4.48597C21.6461 4.38473 21.6677 4.27623 21.6677 4.16666C21.6677 4.05709 21.6461 3.94859 21.6042 3.84736C21.5623 3.74612 21.5008 3.65414 21.4233 3.57666C21.3458 3.49918 21.2539 3.43772 21.1526 3.39579C21.0514 3.35386 20.9429 3.33228 20.8333 3.33228C20.7238 3.33228 20.6153 3.35386 20.514 3.39579C20.4128 3.43772 20.3208 3.49918 20.2433 3.57666L12.5 11.3217L4.75666 3.57666C4.67918 3.49918 4.5872 3.43772 4.48597 3.39579C4.38473 3.35386 4.27623 3.33228 4.16666 3.33228C4.05709 3.33228 3.94859 3.35386 3.84736 3.39579C3.74612 3.43772 3.65414 3.49918 3.57666 3.57666C3.49918 3.65414 3.43772 3.74612 3.39579 3.84736C3.35386 3.94859 3.33228 4.05709 3.33228 4.16666C3.33228 4.27623 3.35386 4.38473 3.39579 4.48597C3.43772 4.5872 3.49918 4.67918 3.57666 4.75666L11.3217 12.5L3.57666 20.2433C3.42018 20.3998 3.33228 20.612 3.33228 20.8333C3.33228 21.0546 3.42018 21.2668 3.57666 21.4233C3.73314 21.5798 3.94537 21.6677 4.16666 21.6677C4.38795 21.6677 4.60018 21.5798 4.75666 21.4233L12.5 13.6783L20.2433 21.4233C20.3998 21.5798 20.612 21.6677 20.8333 21.6677C21.0546 21.6677 21.2668 21.5798 21.4233 21.4233C21.5798 21.2668 21.6677 21.0546 21.6677 20.8333C21.6677 20.612 21.5798 20.3998 21.4233 20.2433L13.6783 12.5L21.4233 4.75666Z"
                                    fill="#007899" />
                            </svg>
                        </span>
                    </a>
                </div>
            </div>
        </div>

        <!-- alert end here -->
        <div class="row">
            <div class="col-md-12">
                <div class="tile-x">
                    <div class="tile-body">
                        <div class="case-status text-center">
                            <h2>Your Case Status is:</h2>
                        </div>
                    </div>
                    <div class="row p-4">
                        <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 p-10-20">
                            <div class="tile-body case-inner-card-first">
                                <div class="case-card-text">
                                    <h5>What this means: <span class="mx-1">
                                            <a href="" class="li-text">Details Shown Here</a>
                                        </span>
                                    </h5>
                                </div>
                                <div class="case-card-text d-lg-none">
                                    <h5>Your next steps:<span class="mx-1">
                                            <a href="" class="li-text">Details Shown Here</a>
                                        </span>
                                    </h5>
                                </div>
                                <div class="case-card-info d-flex mt-4">
                                    <p>Complete online Financial Questionnaire <br> form to continue your application
                                        process. </p>
                                    <a href="https://clearstarttax.com/fqform/" target="_blank" class="info-inner-link mx-3">Click Here</a>
                                </div>
                            </div>
                        </div>
                        <!-- 02 -->
                        <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 p-10-20">
                            <div class="tile-body case-inner-card-first ">
                                <div class="case-card-text d-none-sm">
                                    <h5>Your next steps:<span class="mx-1">
                                            <a href="" class="li-text">Details Shown Here</a>
                                        </span>
                                    </h5>
                                </div>
                                <div class="case-card-info d-flex mt-4">
                                    <p>Complete online TAX ORGANIZER form to <br>continue your application process. </p>
                                    <a href="https://clearstarttax.com/toform/" target="_blank" class="info-inner-link mx-3">Click Here</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- section for little card -->
        <div class="row">
            <!-- :: card 01 -->
            <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                <a href="documents.php" class="db-card-redirect">
                    <div class="tile">
                        <div class="tile-body">
                            <div class="document-card">
                                <div class="document-card-items">
                                    <div class="card-icon">
                                        <iconify-icon class="d-card-icon" icon="solar:document-add-outline"
                                            style="color: #007899;" width="38" height="38"></iconify-icon>
                                    </div>
                                    <div class="db-card-text">
                                        <h5>Document Center</h5>
                                        <p>View and Upload Essential Case Files</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <!-- :: card 02 -->
            <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                <a href="payments.php" class="db-card-redirect">
                    <div class="tile">
                        <div class="tile-body">
                            <div class="document-card">
                                <div class="document-card-items">
                                    <div class="card-icon">
                                        <iconify-icon class="d-card-icon" icon="solar:banknote-2-broken"
                                            style="color: #007899;" width="38" height="38"></iconify-icon>
                                    </div>
                                    <div class="db-card-text">
                                        <h5>Payment Hub</h5>
                                        <p>Make a Payment, Review History, Update Method</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <!-- :: card 03 -->
            <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                <a href="appointment.php" class="db-card-redirect">
                    <div class="tile">
                        <div class="tile-body">
                            <div class="document-card">
                                <div class="document-card-items">
                                    <div class="card-icon">
                                        <iconify-icon class="d-card-icon" icon="solar:calendar-broken"
                                            style="color: #007899;" width="37" height="37"></iconify-icon>
                                    </div>
                                    <div class="db-card-text">
                                        <h5>Schedule an Appointment</h5>
                                        <p>Set Up Your Appointment in a Few Clicks</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <!-- :: card 04 -->
            <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                <a href="contact.php" class="db-card-redirect">
                    <div class="tile">
                        <div class="tile-body">
                            <div class="document-card">
                                <div class="document-card-items">
                                    <div class="card-icon">
                                        <iconify-icon class="d-card-icon" icon="solar:chat-dots-broken"
                                            style="color: #007899;" width="37" height="37"></iconify-icon>
                                    </div>
                                    <div class="db-card-text">
                                        <h5>Get In Touch</h5>
                                        <p>Connect with Your Assigned Case Manager via Message</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </main>
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