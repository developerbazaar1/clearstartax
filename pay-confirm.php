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
    <title>payment confirm</title>
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
    <!-- ::header included  --> <?php include 'include/header.php';?>
    <!-- ::header included end  -->
    <!-- ::main content start from here -->
    <main class="app-content">
        <!-- :: client information head -->
        <!-- <div class="app-title">
            <div class="user-dashboard-welcome">
                <h1>Hello Christian Ha</h1>
                <h5 class="mt-10 mb-5px">"Enter the Document Upload Zone: Seamlessly Submit and Organize Your Files!"
                </h5>
            </div>
            <div class="user-dashboard-welcome-d-image d-none-sm">
                
                <img class="paymenttop-image" src="img/documents.png">
            </div>
        </div> -->
        <!-- :: end client information head -->
        <!-- :: payment section -->
        <section class="upayment-confirm-section ">
            <div class="row justify-content-center">
                <div class="col-md-7 col-lg-7 col-sm-12 col-xs-12 text-center">
                    <div class="payment-confirmation-items">
                        <div class="pay-confirm-logo">
                            <img class="p-confirm w-65px" src="img/correct-image.png">
                        </div>
                        <div class="c-pay-head mt-4">
                            <h2>Payment <span>Successful!</span></h2>
                        </div>
                        <div class="c-pay-description mt-4">
                            <p> You will recieve a receipt to your email:<br> management@clearstarttax.com</p>
                            <p>Please be aware, ACH bank payments may take 3-5 business days to clear. To avoid any issues, please have enough funds in your account. Thank you.</p>
                            <p>For your convenience, we will securely store your payment information and use it for any future recurring payments should you have any remaining.</p>
                            <div class="pay-amount">
                                <p>Amount Paid: $10,214.92</p>
                            </div>
                          
                            <hr class="horizon-divider">
                            <div class="pay-descript-footer">
                                <p>For payment questions, contact our team at <br> billing@clearstarttax.com or <a class="footer-num" href="tel:888-235-0004">888-235-0004</a> </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!--::alert for doc update -->
    <!--:: alert for successfull pay end here -->
    <!-- Essential javascripts for application to work-->
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/plugins/pace.min.js"></script>
    <script src="js/plugins/dropify.min.js"></script>
    <script>
    $('.dropify').dropify();
    </script>
</body>

</html>