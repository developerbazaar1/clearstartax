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
    <title>getintouch</title>
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
                <h5 class="mt-10 mb-5px">"Connect with Us: Reach Out and Let's Start a Conversation!"</h5>
            </div>
            <div class="user-dashboard-welcome-d-image">
                <!--:: image top head dashboard  -->
                <img class="dashboardtop-image cnt-top" src="img/contact.png">
            </div>
        </div>
        <!-- alert end here -->
        <div class="row">
            <div class="col-md-12">
                <div class="tile-x">
                    <div class="tile-body">
                        <div class="case-status text-center">
                            <h2>Get In Touch</h2>
                        </div>
                    </div>
                    <!-- contact box -->
                    <div class="cnt-form">
                        <form>
                            <div class="row justify-content-center p-4">
                                <!-- :: input 01 -->
                                <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                                    <div class="form-group">
                                        <label class="form-head" for="exampletext">
                                            Full Name :
                                        </label>
                                        <input type="text" class="form-control" id="exampleInputtext"
                                            placeholder="Enter full name" required="">
                                    </div>
                                </div>
                                <!-- :: input 02 -->
                                <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                                    <div class="form-group">
                                        <label class="form-head" for="exampletext">
                                            Email Address :
                                        </label>
                                        <input type="text" class="form-control" id="exampleInputtext"
                                            placeholder="Enter email address" required="">
                                    </div>
                                </div>
                                <!-- :: input 03 -->
                                <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                                    <div class="form-group">
                                        <label class="form-head" for="exampletext">
                                            Subject :
                                        </label>
                                        <input type="text" class="form-control" id="exampleInputtext"
                                            placeholder="Write subject" required="">
                                    </div>
                                </div>
                                <!-- :: input 04 -->
                                <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                                    <div class="form-group">
                                        <label class="form-head" for="exampleTextarea">Message :</label>
                                        <textarea class="form-control p-10" placeholder="Write message" id="exampleTextarea"
                                            rows="3"></textarea>
                                    </div>
                                </div>
                                <div class="text-center">
                                   <button type="submit" class="cnt-submit-btn">SUBMIT</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
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