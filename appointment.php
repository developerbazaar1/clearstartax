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
				<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
					<div class="tile-x">
						<div class="tile-body">
							<div class="case-status text-center">
								<h2>Book an Appointment</h2>
							</div>
						</div>
						<div class="row p-4">
							<!-- col for calander -->
							<div class="col-md-5 col-lg-5 col-sm-12 col-xs-12 br-right">
								<!-- book apt user detail -->
								<div class="apt-bookie text-center">
									<!-- calander box head -->
									<h4 class="book-head"> Book Your Appointment </h4>
									<!-- apt organizer name -->
									<div class="organizer">
										<p class="mb-2">
											<strong>Organizer :</strong>
											<span class="orz-namer">hary V</span>
										</p>
									</div>
									<!-- organizer email  -->
									<div class="org-mail">
										<p>hary@logics.com</p>
									</div>
								</div>
								<div class="calendar-container">
    <div class="calendar-header">
        <button id="prevBtn">&lt;</button>
        <h2 id="calendarTitle"></h2>
        <button id="nextBtn">&gt;</button>
    </div>
    <div class="calendar" id="calendar"></div>
</div>
							</div>
							<!-- col for calander info  -->
							<div class="col-md-7 col-lg-7 col-sm-12 col-xs-12 ">
								<!-- new row for col  -->
								<div class="row">
									<!--select date info -->
									<div class="col-md-12 col-sm-12 col-xs-12 col-lg-12 mx-2 mb-3 br-bottom">
										<div class="d-select-info d-flex">
											<div class="s-date d-flex">
												<p class="sel-date mx-1">November 9, 2023 </p>
												<iconify-icon class="mb-0" icon="mdi:clock" style="color: #00aafd;" width="17" height="17"></iconify-icon>
											</div>
											<!-- 30min radio -->
											<div class="form-check mx-2">
												<label class="form-check-label">
													<input class="form-check-input" id="credit-card-yes" type="radio" name="credit-cc" value="Yes">30 Minutes </label>
											</div>
											<!-- 60min radio -->
											<div class="form-check mx-2">
												<label class="form-check-label">
													<input class="form-check-input" id="credit-card-no" type="radio" name="credit-cc" value="No">60 Minutes </label>
											</div>
										</div>
									</div>
									<div class="col-md-5 pl-4 ">
										<div class="min-info">
											<div class="form-label">
												<h6>What time works best?</h6>
											</div>
											<div class="date-btn">
												<ul class="time-btn-list">
													<li>
														<button type="button" class="select-time-btn mb-2">10 : 00 AM</button>
													</li>
													<li>
														<button type="button" class="select-time-btn mb-2">10 : 30 AM</button>
													</li>
													<li>
														<button type="button" class="select-time-btn mb-2">11 : 00 AM</button>
													</li>
													<li>
														<button type="button" class="select-time-btn mb-2">11 : 30 AM</button>
													</li>
													<li>
														<button type="button" class="select-time-btn mb-2">12 : 00 AM</button>
													</li>
													<li>
														<button type="button" class="select-time-btn mb-2">12 : 30 AM</button>
													</li>
												</ul>
											</div>
										</div>
									</div>
									<div class="col-md-7">
										<div class="form-group">
											<h6 class="form-label">Comments :</h6>
											<textarea class="form-control p-10" placeholder="Write message" id="exampleTextarea" rows="20"></textarea>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-sm-12 col-sx-12 col-lg-12 mt-3">
								<div class="submit-apt-btn float-right">
									<button class="button-apt-confirm" type="submit">Book an Appointment</button>
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
		<script>
			// Get current date
			let currentDate = new Date();
			let selectedDate;
			// Function to render calendar
			function renderCalendar() {
				const calendar = document.getElementById("calendar");
				const calendarTitle = document.getElementById("calendarTitle");
				calendar.innerHTML = "";
				const options = {
					month: "long",
					year: "numeric"
				};
				calendarTitle.textContent = currentDate.toLocaleDateString(undefined, options);
				// Days of the week
				const daysOfWeek = ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"];
				daysOfWeek.forEach(day => {
					const cell = document.createElement("div");
					cell.classList.add("calendar-cell", "day-cell");
					cell.textContent = day;
					calendar.appendChild(cell);
				});
				const firstDay = new Date(currentDate.getFullYear(), currentDate.getMonth(), 1);
				const lastDay = new Date(currentDate.getFullYear(), currentDate.getMonth() + 1, 0);
				const totalDays = lastDay.getDate();
				const startDay = firstDay.getDay();
				for (let i = 0; i < startDay; i++) {
					const cell = document.createElement("div");
					cell.classList.add("calendar-cell");
					calendar.appendChild(cell);
				}
				for (let i = 1; i <= totalDays; i++) {
					const cell = document.createElement("div");
					cell.classList.add("calendar-cell");
					cell.textContent = i;
					cell.addEventListener("click", () => {
						// Remove previously selected date highlight
						const prevSelected = document.querySelector('.selected-date');
						if (prevSelected) {
							prevSelected.classList.remove('selected-date');
						}
						// Add highlight to the selected date
						cell.classList.add('selected-date');
						selectedDate = new Date(currentDate.getFullYear(), currentDate.getMonth(), i);
						alert(`You selected: ${selectedDate.getFullYear()}-${selectedDate.getMonth() + 1}-${i}`);
					});
					calendar.appendChild(cell);
				}
			}
			// Render initial calendar
			renderCalendar();
			// Previous month button
			document.getElementById("prevBtn").addEventListener("click", () => {
				currentDate.setMonth(currentDate.getMonth() - 1);
				renderCalendar();
			});
			// Next month button
			document.getElementById("nextBtn").addEventListener("click", () => {
				currentDate.setMonth(currentDate.getMonth() + 1);
				renderCalendar();
			});
		</script>
	</body>
</html>