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
										<!-- :: input three::time zone -->
										<div class="form-group">
											<label class="form-head" for="exampleTimeZone">Select time zone</label>
											<div class="select-group h-40">
												<select class="form-control" id="exampleTimeZone" name="selectedTimeZone">
													<option data-time-zone-id="1" data-gmt-adjustment="GMT-12:00" data-use-daylight="0" value="-12">(GMT-12:00) International Date Line West</option>
													<option data-time-zone-id="2" data-gmt-adjustment="GMT-11:00" data-use-daylight="0" value="-11">(GMT-11:00) Midway Island, Samoa</option>
													<option data-time-zone-id="3" data-gmt-adjustment="GMT-10:00" data-use-daylight="0" value="-10">(GMT-10:00) Hawaii</option>
													<option data-time-zone-id="4" data-gmt-adjustment="GMT-09:00" data-use-daylight="1" value="-9">(GMT-09:00) Alaska</option>
													<option data-time-zone-id="5" data-gmt-adjustment="GMT-08:00" data-use-daylight="1" value="-8">(GMT-08:00) Pacific Time (US & Canada)</option>
													<option data-time-zone-id="6" data-gmt-adjustment="GMT-08:00" data-use-daylight="1" value="-8">(GMT-08:00) Tijuana, Baja California</option>
													<option data-time-zone-id="7" data-gmt-adjustment="GMT-07:00" data-use-daylight="0" value="-7">(GMT-07:00) Arizona</option>
													<option data-time-zone-id="8" data-gmt-adjustment="GMT-07:00" data-use-daylight="1" value="-7">(GMT-07:00) Chihuahua, La Paz, Mazatlan</option>
													<option data-time-zone-id="9" data-gmt-adjustment="GMT-07:00" data-use-daylight="1" value="-7">(GMT-07:00) Mountain Time (US & Canada)</option>
													<option data-time-zone-id="10" data-gmt-adjustment="GMT-06:00" data-use-daylight="0" value="-6">(GMT-06:00) Central America</option>
													<option data-time-zone-id="11" data-gmt-adjustment="GMT-06:00" data-use-daylight="1" value="-6">(GMT-06:00) Central Time (US & Canada)</option>
													<option data-time-zone-id="12" data-gmt-adjustment="GMT-06:00" data-use-daylight="1" value="-6">(GMT-06:00) Guadalajara, Mexico City, Monterrey</option>
													<option data-time-zone-id="13" data-gmt-adjustment="GMT-06:00" data-use-daylight="0" value="-6">(GMT-06:00) Saskatchewan</option>
													<option data-time-zone-id="14" data-gmt-adjustment="GMT-05:00" data-use-daylight="0" value="-5">(GMT-05:00) Bogota, Lima, Quito, Rio Branco</option>
													<option data-time-zone-id="15" data-gmt-adjustment="GMT-05:00" data-use-daylight="1" value="-5">(GMT-05:00) Eastern Time (US & Canada)</option>
													<option data-time-zone-id="16" data-gmt-adjustment="GMT-05:00" data-use-daylight="1" value="-5">(GMT-05:00) Indiana (East)</option>
													<option data-time-zone-id="17" data-gmt-adjustment="GMT-04:00" data-use-daylight="1" value="-4">(GMT-04:00) Atlantic Time (Canada)</option>
													<option data-time-zone-id="18" data-gmt-adjustment="GMT-04:00" data-use-daylight="0" value="-4">(GMT-04:00) Caracas, La Paz</option>
													<option data-time-zone-id="19" data-gmt-adjustment="GMT-04:00" data-use-daylight="0" value="-4">(GMT-04:00) Manaus</option>
													<option data-time-zone-id="20" data-gmt-adjustment="GMT-04:00" data-use-daylight="1" value="-4">(GMT-04:00) Santiago</option>
													<option data-time-zone-id="21" data-gmt-adjustment="GMT-03:30" data-use-daylight="1" value="-3.5">(GMT-03:30) Newfoundland</option>
													<option data-time-zone-id="22" data-gmt-adjustment="GMT-03:00" data-use-daylight="1" value="-3">(GMT-03:00) Brasilia</option>
													<option data-time-zone-id="23" data-gmt-adjustment="GMT-03:00" data-use-daylight="0" value="-3">(GMT-03:00) Buenos Aires, Georgetown</option>
													<option data-time-zone-id="24" data-gmt-adjustment="GMT-03:00" data-use-daylight="1" value="-3">(GMT-03:00) Greenland</option>
													<option data-time-zone-id="25" data-gmt-adjustment="GMT-03:00" data-use-daylight="1" value="-3">(GMT-03:00) Montevideo</option>
													<option data-time-zone-id="26" data-gmt-adjustment="GMT-02:00" data-use-daylight="1" value="-2">(GMT-02:00) Mid-Atlantic</option>
													<option data-time-zone-id="27" data-gmt-adjustment="GMT-01:00" data-use-daylight="0" value="-1">(GMT-01:00) Cape Verde Is.</option>
													<option data-time-zone-id="28" data-gmt-adjustment="GMT-01:00" data-use-daylight="1" value="-1">(GMT-01:00) Azores</option>
													<option data-time-zone-id="29" data-gmt-adjustment="GMT+00:00" data-use-daylight="0" value="0">(GMT+00:00) Casablanca, Monrovia, Reykjavik</option>
													<option data-time-zone-id="30" data-gmt-adjustment="GMT+00:00" data-use-daylight="1" value="0">(GMT+00:00) Greenwich Mean Time : Dublin, Edinburgh, Lisbon, London</option>
													<option data-time-zone-id="31" data-gmt-adjustment="GMT+01:00" data-use-daylight="1" value="1">(GMT+01:00) Amsterdam, Berlin, Bern, Rome, Stockholm, Vienna</option>
													<option data-time-zone-id="32" data-gmt-adjustment="GMT+01:00" data-use-daylight="1" value="1">(GMT+01:00) Belgrade, Bratislava, Budapest, Ljubljana, Prague</option>
													<option data-time-zone-id="33" data-gmt-adjustment="GMT+01:00" data-use-daylight="1" value="1">(GMT+01:00) Brussels, Copenhagen, Madrid, Paris</option>
													<option data-time-zone-id="34" data-gmt-adjustment="GMT+01:00" data-use-daylight="1" value="1">(GMT+01:00) Sarajevo, Skopje, Warsaw, Zagreb</option>
													<option data-time-zone-id="35" data-gmt-adjustment="GMT+01:00" data-use-daylight="1" value="1">(GMT+01:00) West Central Africa</option>
													<option data-time-zone-id="36" data-gmt-adjustment="GMT+02:00" data-use-daylight="1" value="2">(GMT+02:00) Amman</option>
													<option data-time-zone-id="37" data-gmt-adjustment="GMT+02:00" data-use-daylight="1" value="2">(GMT+02:00) Athens, Bucharest, Istanbul</option>
													<option data-time-zone-id="38" data-gmt-adjustment="GMT+02:00" data-use-daylight="1" value="2">(GMT+02:00) Beirut</option>
													<option data-time-zone-id="39" data-gmt-adjustment="GMT+02:00" data-use-daylight="1" value="2">(GMT+02:00) Cairo</option>
													<option data-time-zone-id="40" data-gmt-adjustment="GMT+02:00" data-use-daylight="0" value="2">(GMT+02:00) Harare, Pretoria</option>
													<option data-time-zone-id="41" data-gmt-adjustment="GMT+02:00" data-use-daylight="1" value="2">(GMT+02:00) Helsinki, Kyiv, Riga, Sofia, Tallinn, Vilnius</option>
													<option data-time-zone-id="42" data-gmt-adjustment="GMT+02:00" data-use-daylight="1" value="2">(GMT+02:00) Jerusalem</option>
													<option data-time-zone-id="43" data-gmt-adjustment="GMT+02:00" data-use-daylight="1" value="2">(GMT+02:00) Minsk</option>
													<option data-time-zone-id="44" data-gmt-adjustment="GMT+02:00" data-use-daylight="1" value="2">(GMT+02:00) Windhoek</option>
													<option data-time-zone-id="45" data-gmt-adjustment="GMT+03:00" data-use-daylight="0" value="3">(GMT+03:00) Kuwait, Riyadh, Baghdad</option>
													<option data-time-zone-id="46" data-gmt-adjustment="GMT+03:00" data-use-daylight="1" value="3">(GMT+03:00) Moscow, St. Petersburg, Volgograd</option>
													<option data-time-zone-id="47" data-gmt-adjustment="GMT+03:00" data-use-daylight="0" value="3">(GMT+03:00) Nairobi</option>
													<option data-time-zone-id="48" data-gmt-adjustment="GMT+03:00" data-use-daylight="0" value="3">(GMT+03:00) Tbilisi</option>
													<option data-time-zone-id="49" data-gmt-adjustment="GMT+03:30" data-use-daylight="1" value="3.5">(GMT+03:30) Tehran</option>
													<option data-time-zone-id="50" data-gmt-adjustment="GMT+04:00" data-use-daylight="0" value="4">(GMT+04:00) Abu Dhabi, Muscat</option>
													<option data-time-zone-id="51" data-gmt-adjustment="GMT+04:00" data-use-daylight="1" value="4">(GMT+04:00) Baku</option>
													<option data-time-zone-id="52" data-gmt-adjustment="GMT+04:00" data-use-daylight="1" value="4">(GMT+04:00) Yerevan</option>
													<option data-time-zone-id="53" data-gmt-adjustment="GMT+04:30" data-use-daylight="0" value="4.5">(GMT+04:30) Kabul</option>
													<option data-time-zone-id="54" data-gmt-adjustment="GMT+05:00" data-use-daylight="1" value="5">(GMT+05:00) Yekaterinburg</option>
													<option data-time-zone-id="55" data-gmt-adjustment="GMT+05:00" data-use-daylight="0" value="5">(GMT+05:00) Islamabad, Karachi, Tashkent</option>
													<option data-time-zone-id="56" data-gmt-adjustment="GMT+05:30" data-use-daylight="0" value="5.5">(GMT+05:30) Sri Jayawardenapura</option>
													<option data-time-zone-id="57" data-gmt-adjustment="GMT+05:30" data-use-daylight="0" value="5.5">(GMT+05:30) Chennai, Kolkata, Mumbai, New Delhi</option>
													<option data-time-zone-id="58" data-gmt-adjustment="GMT+05:45" data-use-daylight="0" value="5.75">(GMT+05:45) Kathmandu</option>
													<option data-time-zone-id="59" data-gmt-adjustment="GMT+06:00" data-use-daylight="1" value="6">(GMT+06:00) Almaty, Novosibirsk</option>
													<option data-time-zone-id="60" data-gmt-adjustment="GMT+06:00" data-use-daylight="0" value="6">(GMT+06:00) Astana, Dhaka</option>
													<option data-time-zone-id="61" data-gmt-adjustment="GMT+06:30" data-use-daylight="0" value="6.5">(GMT+06:30) Yangon (Rangoon)</option>
													<option data-time-zone-id="62" data-gmt-adjustment="GMT+07:00" data-use-daylight="0" value="7">(GMT+07:00) Bangkok, Hanoi, Jakarta</option>
													<option data-time-zone-id="63" data-gmt-adjustment="GMT+07:00" data-use-daylight="1" value="7">(GMT+07:00) Krasnoyarsk</option>
													<option data-time-zone-id="64" data-gmt-adjustment="GMT+08:00" data-use-daylight="0" value="8">(GMT+08:00) Beijing, Chongqing, Hong Kong, Urumqi</option>
													<option data-time-zone-id="65" data-gmt-adjustment="GMT+08:00" data-use-daylight="0" value="8">(GMT+08:00) Kuala Lumpur, Singapore</option>
													<option data-time-zone-id="66" data-gmt-adjustment="GMT+08:00" data-use-daylight="0" value="8">(GMT+08:00) Irkutsk, Ulaan Bataar</option>
													<option data-time-zone-id="67" data-gmt-adjustment="GMT+08:00" data-use-daylight="0" value="8">(GMT+08:00) Perth</option>
													<option data-time-zone-id="68" data-gmt-adjustment="GMT+08:00" data-use-daylight="0" value="8">(GMT+08:00) Taipei</option>
													<option data-time-zone-id="69" data-gmt-adjustment="GMT+09:00" data-use-daylight="0" value="9">(GMT+09:00) Osaka, Sapporo, Tokyo</option>
													<option data-time-zone-id="70" data-gmt-adjustment="GMT+09:00" data-use-daylight="0" value="9">(GMT+09:00) Seoul</option>
													<option data-time-zone-id="71" data-gmt-adjustment="GMT+09:00" data-use-daylight="1" value="9">(GMT+09:00) Yakutsk</option>
													<option data-time-zone-id="72" data-gmt-adjustment="GMT+09:30" data-use-daylight="0" value="9.5">(GMT+09:30) Adelaide</option>
													<option data-time-zone-id="73" data-gmt-adjustment="GMT+09:30" data-use-daylight="0" value="9.5">(GMT+09:30) Darwin</option>
													<option data-time-zone-id="74" data-gmt-adjustment="GMT+10:00" data-use-daylight="0" value="10">(GMT+10:00) Brisbane</option>
													<option data-time-zone-id="75" data-gmt-adjustment="GMT+10:00" data-use-daylight="1" value="10">(GMT+10:00) Canberra, Melbourne, Sydney</option>
													<option data-time-zone-id="76" data-gmt-adjustment="GMT+10:00" data-use-daylight="1" value="10">(GMT+10:00) Hobart</option>
													<option data-time-zone-id="77" data-gmt-adjustment="GMT+10:00" data-use-daylight="0" value="10">(GMT+10:00) Guam, Port Moresby</option>
													<option data-time-zone-id="78" data-gmt-adjustment="GMT+10:00" data-use-daylight="1" value="10">(GMT+10:00) Vladivostok</option>
													<option data-time-zone-id="79" data-gmt-adjustment="GMT+11:00" data-use-daylight="1" value="11">(GMT+11:00) Magadan, Solomon Is., New Caledonia</option>
													<option data-time-zone-id="80" data-gmt-adjustment="GMT+12:00" data-use-daylight="1" value="12">(GMT+12:00) Auckland, Wellington</option>
													<option data-time-zone-id="81" data-gmt-adjustment="GMT+12:00" data-use-daylight="0" value="12">(GMT+12:00) Fiji, Kamchatka, Marshall Is.</option>
													<option data-time-zone-id="82" data-gmt-adjustment="GMT+13:00" data-use-daylight="0" value="13">(GMT+13:00) Nuku'alofa</option>
												</select>
											</div>
										</div>
										<!-- :: input four -->
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