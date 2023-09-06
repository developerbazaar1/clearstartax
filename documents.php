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
    <title>upload documents</title>
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
                <h5 class="mt-10 mb-5px">"Enter the Document Upload Zone: Seamlessly Submit and Organize Your Files!"
                </h5>
            </div>
            <div class="user-dashboard-welcome-d-image d-none-sm">
                <!-- :: image top head dashboard  -->
                <img class="paymenttop-image" src="img/documents.png">
            </div>
        </div>
        <!-- :: end client information head -->

        <!-- :: document upload section  -->
        <section class="upload-document mt-58">
            <div class="row justify-content-center">
                <div class="col-md-9 col-lg-9 col-sm-12 col-xs-12">
                    <div class="tile-x">
                        <div class="tile-body">
                            <div class="case-status upload-doc-head text-center ">
                                <h2>Upload Document</h2>
                            </div>
                        </div>
                        <div class="row p-1020">
                            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 ">
                                <!-- :: upload form -->
                                <form>
                                    <!-- field col  start :: dropify-->
                                    <div class="form-group mb-0 pb-0">
                                        <!-- <label class="form-head mb-2" for="exampletext"> Upload File </label> -->
                                        <input name="file1" type="file" class="dropify" data-height="100"
                                            data-allowed-file-extensions="csv exe pdf" />
                                        <small class="form-text text-muted upload-info mt-2">Maximum Document Size : Up
                                            to 6MB per Upload</small>
                                    </div>
                                    <!-- :: field col  end :: dropify-->
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!--::alert for succesfull pay -->
		<div class="modal fade pay-alert" id="doc-update-alert" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered payment-dialog" role="document">
				<div class="modal-content pay-confirmation">
					<div class="modal-body pay-confirm-alert-body">
                        <div class="alert-box">
                            <div class="pay-alert-image text-center">
                                <img class="w-100px" src="img/document-alert.png">
                            </div>
                            <div class="pay-alert-content text-center">
                                <h2>Congratulations!</h2>
                                <p>Your document has been successfully uploaded.</p>
                            </div>
                        </div>
                    </div>
				</div>
			</div>
		</div>
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