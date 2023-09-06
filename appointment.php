<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta property="og:type" content="website">
		<meta name="theme-color" content="#8AC8D6">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="mobile-web-app-capable" content="yes">
		<meta name="HandheldFriendly" content="True">
		<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
		<title>Appointment</title>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- Main CSS-->
		<link rel="stylesheet" type="text/css" href="css/main.css">
		<!-- Responsive css -->
		<link rel="stylesheet" href="css/responsive.css">
		<!-- Font-icon css-->
		<!-- favicon -->
		<link href="img/c-favicon.png" rel="icon">
		<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>
	<!--:: body start here -->
	<body class="app sidebar-mini">
		<!-- ::header included  --> <?php include 'include/header.php';?>
		<!-- ::header included end  -->
		<!-- :: main content start from here -->
		<main class="app-content">
			<div class="app-title">
				<div class="user-dashboard-welcome">
					<h1>Hello Christian Ha</h1>
					<h5 class="mt-10 mb-5px">"Seamless Scheduling: Book Your Appointments with Ease!"</h5>
				</div>
				<div class="user-dashboard-welcome-d-image d-none-sm">
					<!--:: image top head dashboard  -->
					<img class="dashboardtop-image" src="img/dashboard-top.png">
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-7">
					<div class="tile-x">
						<div class="tile-body">
							<div class="case-status text-center">
								<h2>Book an Appointment</h2>
							</div>
						</div>
						<div class="row p-4">
							<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 p-10-20">
								<div class="tile-body case-inner-card-first">
									<!-- :: book appointment form -->
									<form>
										<!-- ::  input one -->
										<div class="form-group">
											<label class="form-head" for="exampleDate">Select date</label>
											<div class="select-group h-40">
												<input type="date" class="form-control" id="exampleDate">
											</div>
										</div>
										<!-- ::  input two -->
										<div class="form-group">
											<label class="form-head" for="exampletext"> Select time </label>
											<div class="select-group h-40">
												<input type="time" class="form-control" id="exampleDate">
											</div>
										</div>
										<!-- :: input three -->
										<div class="form-group">
											<label class="form-head" for="exampleTextarea">Message :</label>
											<textarea class="form-control p-10" placeholder="Write message" id="exampleTextarea" rows="3"></textarea>
										</div>
										<!-- ::appoint book btn  -->
										<div class="text-center">
											<button type="submit" class="appoint-btn">Book An Appointment</button>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</main>
		<!-- :: Modal for appointment book -->
		<div class="modal fade pay-alert" id="apt-success" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered payment-dialog" role="document">
				<div class="modal-content pay-confirmation">
					<div class="modal-body pay-confirm-alert-body">
						<div class="alert-box">
							<div class="pay-alert-image text-center">
								<img class="w-100px" src="img/contact-alert.png">
							</div>
							<div class="pay-alert-content text-center">
								<h2>Congratulations!</h2>
								<p>our appointment has been successfully booked.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- :: Modal for appoint book -->
		<!-- Essential javascripts for application to work-->
		<script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
		<script src="js/jquery-3.3.1.min.js"></script>
		<script src="js/popper.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/main.js"></script>
		<script src="js/plugins/pace.min.js"></script>
	</body>
</html>