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
		<title>Login-clearstarttax</title>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- Main CSS-->
		<link rel="stylesheet" type="text/css" href="css/main.css">
		<link rel="stylesheet" href="css/login.css">
		<!-- Responsive css -->
		<link rel="stylesheet" href="css/responsive.css">
		<!-- Font-icon css-->
		<!-- favicon -->
		<link href="img/c-favicon.png" rel="icon">
		<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>
	<!-- :: body start here -->
	<body class="log-bg">
		<section class="login-form">
			<div class="login-flex-container">
				<div class="login-main-content">
					<!-- form div start from here -->
					<div class="login-signup-form">
						<div class="row justify-content-center ">
							<div class="col-md-12 login-form">
								<div class="form-head-image text-center mt-3">
									<img class="c-brand" src="img/cleartax-brand-logo.png">
								</div>
								<div class="form-description text-center mt-3">
									<h6>"Welcome Back to Your Exclusive Client Portal!"</h6>
								</div>
								<form action="dashboard.php" class="login-signup-form" autocomplete="off">
									<!-- :: input 01 -->
									<div class="form-group mb-2">
										<label class="form-head log-form-label" for="mailer-mail">Case ID</label>
										<div class="inputWithIcon">
											<input type="email" id="emailInput" placeholder="example@gmail.com" required>
											<svg class="i" xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none">
												<path d="M9 11C10.1046 11 11 10.1046 11 9C11 7.89543 10.1046 7 9 7C7.89543 7 7 7.89543 7 9C7 10.1046 7.89543 11 9 11Z" stroke="#858585" />
												<path d="M13 15C13 16.105 13 17 9 17C5 17 5 16.105 5 15C5 13.895 6.79 13 9 13C11.21 13 13 13.895 13 15Z" stroke="#858585" />
												<path d="M22 12C22 15.771 22 17.657 20.828 18.828C19.657 20 17.771 20 14 20H10C6.229 20 4.343 20 3.172 18.828C2 17.657 2 15.771 2 12C2 8.229 2 6.343 3.172 5.172C4.343 4 6.229 4 10 4H14C17.771 4 19.657 4 20.828 5.172C21.298 5.642 21.579 6.226 21.748 7M19 12H15M19 9H14M19 15H16" stroke="#858585" stroke-linecap="round" />
											</svg>
										</div>
									</div>
									<!-- :: input 02 -->
									<div class="form-group mb-1 ">
										<label class="form-head log-form-label" for="passwordInput">Password</label>
										<div class="inputWithIcon">
											<input type="password" id="passwordInput" placeholder="*************" required>
											<svg class="i" xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none">
												<path d="M12 10V14M10.268 11L13.732 13M13.732 11L10.267 13M6.732 10V14M5 11L8.464 13M8.464 11L5 13M17.268 10V14M15.536 11L19 13M19 11L15.535 13M22 12C22 15.771 22 17.657 20.828 18.828C19.657 20 17.771 20 14 20H10C6.229 20 4.343 20 3.172 18.828C2 17.657 2 15.771 2 12C2 8.229 2 6.343 3.172 5.172C4.343 4 6.229 4 10 4H14C17.771 4 19.657 4 20.828 5.172C21.482 5.825 21.771 6.7 21.898 8" stroke="#858585" stroke-linecap="round" />
											</svg>
										</div>
									</div>
									<!-- :: check -->
									<div class="form-check mt-2 mb-2">
										<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
										<label class="form-check-label check-label" for="flexCheckDefault"> Remember Me </label>
									</div>
									<!-- :: signinbtn -->
									<div class="form-group text-center mb-1">
										<button type="submit" class="signin-btn">Sign In</button>
									</div>
								</form>
								<div class="forget-pass-link text-center mb-3">
									<a href="#" class="forget-p">Forgot Your Password?</a>
								</div>
								<!-- :: signup tag with anchor btn -->
								<div class="tab-switch-content text-center">
									<p>Don’t have an account? <a href="#" class="tab-swich-link text-link-blue" id="signup-link"> Sign Up Now</a>
									</p>
								</div>
								<!--:: login info -->
								<div class="mt-2 mb-0 text-center">
									<p class="log-txt mb-0">If you have questions or need help, please contact us:</p>
								</div>
								<!--:: contact info -->
								<div class="flex-container justify-content-center mb-3">
									<div>
										<svg class="mx-1 mt-1px" xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
											<path d="M8.4375 1.25C8.4375 1.25 9.89625 1.3825 11.7519 3.23875C13.6081 5.095 13.7406 6.55312 13.7406 6.55312M8.87937 3.46C8.87937 3.46 9.49812 3.63625 10.4262 4.56437C11.3544 5.4925 11.5313 6.11125 11.5313 6.11125" stroke="#333333" stroke-linecap="round" />
											<path d="M9.7225 9.09186L9.3825 8.76936L9.7225 9.09249V9.09186ZM11.8763 12.6587L11.5356 12.3356L11.8756 12.6587H11.8763ZM11.0475 13.1025L11.0938 13.5681L11.0475 13.1019V13.1025ZM2.345 4.32811C2.34168 4.26664 2.32628 4.20642 2.29968 4.1509C2.27308 4.09537 2.23581 4.04563 2.18999 4.00451C2.14417 3.96339 2.0907 3.9317 2.03263 3.91125C1.97457 3.89079 1.91304 3.88198 1.85156 3.8853C1.79009 3.88862 1.72987 3.90402 1.67435 3.93062C1.61882 3.95722 1.56908 3.99449 1.52796 4.04031C1.48684 4.08613 1.45515 4.1396 1.4347 4.19767C1.41424 4.25573 1.40543 4.31726 1.40875 4.37874L2.345 4.32811ZM2.94875 1.93249C2.86667 2.0232 2.8233 2.14241 2.82791 2.26466C2.83251 2.38691 2.88473 2.50251 2.97341 2.58679C3.0621 2.67106 3.18021 2.71733 3.30254 2.71571C3.42486 2.71409 3.54171 2.66471 3.62812 2.57811L2.94875 1.93249ZM6.665 12.3825C6.71712 12.4161 6.77539 12.439 6.83643 12.4499C6.89748 12.4608 6.96008 12.4595 7.02061 12.4461C7.08114 12.4326 7.1384 12.4073 7.18908 12.3715C7.23976 12.3358 7.28284 12.2904 7.31583 12.2379C7.34882 12.1854 7.37107 12.1268 7.38128 12.0657C7.39149 12.0045 7.38946 11.9419 7.37532 11.8815C7.36117 11.8212 7.33519 11.7642 7.29887 11.7139C7.26256 11.6637 7.21663 11.6211 7.16375 11.5887L6.665 12.3825ZM9.44562 12.5362C9.32387 12.5108 9.197 12.5348 9.09292 12.6029C8.98884 12.671 8.91607 12.7776 8.89062 12.8994C8.86518 13.0211 8.88914 13.148 8.95724 13.2521C9.02534 13.3562 9.132 13.4289 9.25375 13.4544L9.44562 12.5362ZM9.77812 9.71499L10.0625 9.41499L9.3825 8.76936L9.09812 9.06936L9.77812 9.71499ZM10.9994 9.28874L12.1931 9.97624L12.6606 9.16374L11.4669 8.47624L10.9994 9.28874ZM12.4237 11.4012L11.5356 12.3356L12.2156 12.9819L13.1031 12.0469L12.4237 11.4012ZM5.22437 9.97436C2.80187 7.42374 2.39562 5.27186 2.345 4.32811L1.40875 4.37874C1.47125 5.53499 1.96125 7.89999 4.545 10.62L5.22437 9.97436ZM6.08437 5.82624L6.26312 5.63749L5.58375 4.99186L5.40437 5.18061L6.08437 5.82624ZM6.40437 3.28749L5.61625 2.17311L4.85062 2.71436L5.63812 3.82874L6.40437 3.28749ZM5.74375 5.50311C5.63126 5.39471 5.51772 5.28741 5.40312 5.18124L5.40187 5.18249L5.4 5.18436C5.3889 5.19584 5.37847 5.20795 5.36875 5.22061C5.30748 5.30171 5.259 5.39171 5.225 5.48749C5.16375 5.65936 5.13125 5.88686 5.1725 6.17061C5.25375 6.72811 5.61937 7.47749 6.57375 8.48311L7.25375 7.83686C6.36125 6.89749 6.14125 6.31936 6.1 6.03436C6.08 5.89686 6.1 5.82499 6.10812 5.80186L6.11312 5.78999C6.10801 5.79822 6.10215 5.80596 6.09562 5.81311C6.09196 5.81736 6.08821 5.82215 6.08437 5.82624L5.74375 5.50311ZM6.57375 8.48249C7.52562 9.48499 8.24437 9.87874 8.7925 9.96811C9.07437 10.0137 9.3025 9.97686 9.475 9.90874C9.57058 9.87122 9.65944 9.81845 9.73812 9.75249L9.76062 9.73124L9.76937 9.72249C9.77085 9.72126 9.77231 9.72001 9.77375 9.71874L9.77562 9.71686L9.77625 9.71561C9.77625 9.71561 9.7775 9.71499 9.4375 9.39186C9.0975 9.06936 9.09812 9.06874 9.09812 9.06811L9.09937 9.06749L9.10062 9.06561L9.10437 9.06249C9.11382 9.05336 9.12362 9.0446 9.13375 9.03624C9.13937 9.03249 9.13875 9.03374 9.13062 9.03686C9.11812 9.04186 9.06187 9.06186 8.94312 9.04249C8.69187 9.00124 8.14937 8.77999 7.25375 7.83686L6.57375 8.48249ZM5.61625 2.17311C4.9825 1.27686 3.715 1.12499 2.94875 1.93249L3.62812 2.57811C3.955 2.23436 4.53062 2.26124 4.85062 2.71436L5.61625 2.17311ZM11.5356 12.3356C11.3613 12.5194 11.1794 12.6181 11.0019 12.6356L11.0938 13.5681C11.5606 13.5225 11.9388 13.2737 12.2156 12.9819L11.5356 12.3362V12.3356ZM6.26312 5.63749C6.86812 5.00061 6.91062 4.00436 6.40437 3.28749L5.63875 3.82874C5.9025 4.20186 5.86187 4.69936 5.58375 4.99186L6.26312 5.63749ZM12.1931 9.97624C12.7063 10.2719 12.8069 10.9981 12.4237 11.4012L13.1031 12.0469C13.9188 11.1881 13.6806 9.75124 12.6606 9.16374L12.1931 9.97624ZM10.0625 9.41499C10.3031 9.16124 10.6788 9.10436 10.9994 9.28874L11.4669 8.47624C10.78 8.08124 9.92937 8.19436 9.3825 8.76936L10.0625 9.41499ZM7.16375 11.5887C6.54937 11.2025 5.895 10.68 5.22437 9.97436L4.545 10.62C5.26625 11.3794 5.98062 11.9525 6.665 12.3825L7.16375 11.5887ZM11.0012 12.6356C10.4807 12.6813 9.95616 12.6478 9.44562 12.5362L9.25375 13.4544C9.85779 13.5852 10.4782 13.6236 11.0938 13.5681L11.0019 12.6356H11.0012Z" fill="#333333" />
										</svg>
										<a href="tel:888-235-0004" class="tel">888-235-0004</a>
									</div>
									<div>
										<svg class="mx-1 mt-1px" xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
											<path fill-rule="evenodd" clip-rule="evenodd" d="M2 3.71422V10.5714C2 11.026 2.18061 11.4621 2.5021 11.7836C2.82359 12.105 3.25963 12.2857 3.71429 12.2857H12.2857C12.7404 12.2857 13.1764 12.105 13.4979 11.7836C13.8194 11.4621 14 11.026 14 10.5714V3.71422C14 3.25957 13.8194 2.82353 13.4979 2.50204C13.1764 2.18055 12.7404 1.99994 12.2857 1.99994H3.71429C3.25963 1.99994 2.82359 2.18055 2.5021 2.50204C2.18061 2.82353 2 3.25957 2 3.71422Z" stroke="#333333" stroke-linecap="round" stroke-linejoin="round" />
											<path d="M3.71431 4.57162L8.00002 7.14305L12.2857 4.57162" stroke="#333333" stroke-linecap="round" stroke-linejoin="round" />
										</svg>
										<a href="mailto:info@clearstarttax.com" class="tel">info@clearstarttax.com</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- :: second signup form start from here -->
		<section class="signup-form" style="display: none;">
			<div class="login-flex-container">
				<div class="login-main-content">
					<!--::  form div start from here -->
					<div class="login-signup-form">
						<div class="row justify-content-center ">
							<div class="col-md-12 login-form">
								<div class="form-head-image text-center mt-3">
									<img class="c-brand" src="img/cleartax-brand-logo.png">
								</div>
								<div class="form-description text-center mt-3">
									<h6>"Join Us and Enter Your Exclusive Client Portal!"</h6>
								</div>
								<form class=" login-signup-form" autocomplete="off" onsubmit="#">
									<!-- :: input 01 -->
									<div class="form-group mb-2">
										<label class="form-head log-form-label" for="mailer-mail">Case ID</label>
										<div class="inputWithIcon">
											<input type="text" placeholder="Please enter your case ID" required>
											<svg class="i" xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none">
												<path d="M9 11C10.1046 11 11 10.1046 11 9C11 7.89543 10.1046 7 9 7C7.89543 7 7 7.89543 7 9C7 10.1046 7.89543 11 9 11Z" stroke="#858585" />
												<path d="M13 15C13 16.105 13 17 9 17C5 17 5 16.105 5 15C5 13.895 6.79 13 9 13C11.21 13 13 13.895 13 15Z" stroke="#858585" />
												<path d="M22 12C22 15.771 22 17.657 20.828 18.828C19.657 20 17.771 20 14 20H10C6.229 20 4.343 20 3.172 18.828C2 17.657 2 15.771 2 12C2 8.229 2 6.343 3.172 5.172C4.343 4 6.229 4 10 4H14C17.771 4 19.657 4 20.828 5.172C21.298 5.642 21.579 6.226 21.748 7M19 12H15M19 9H14M19 15H16" stroke="#858585" stroke-linecap="round" />
											</svg>
										</div>
									</div>
									<!-- :: input 02 -->
									<div class="form-group mb-2">
										<label class="form-head log-form-label" for="mailer-mail">Email Address</label>
										<div class="inputWithIcon">
											<input type="text" placeholder="Please enter your email address" required>
											<svg class="i" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
												<g clip-path="url(#clip0_37_75)">
													<path d="M15.8333 6.66669C17.214 6.66669 18.3333 5.5474 18.3333 4.16669C18.3333 2.78598 17.214 1.66669 15.8333 1.66669C14.4525 1.66669 13.3333 2.78598 13.3333 4.16669C13.3333 5.5474 14.4525 6.66669 15.8333 6.66669Z" stroke="#858585" stroke-width="1.5" />
													<path d="M5.83329 11.6667H13.3333M5.83329 14.5834H10.8333M1.66663 10C1.66663 13.9284 1.66663 15.8925 2.88663 17.1125C4.10829 18.3334 6.07163 18.3334 9.99996 18.3334C13.9283 18.3334 15.8925 18.3334 17.1125 17.1125C18.3333 15.8934 18.3333 13.9284 18.3333 10V8.75002M11.25 1.66669H9.99996C6.07163 1.66669 4.10746 1.66669 2.88663 2.88669C2.07579 3.69835 1.80329 4.83919 1.71246 6.66669" stroke="#858585" stroke-width="1.5" stroke-linecap="round" />
												</g>
												<defs>
													<clipPath id="clip0_37_75">
														<rect width="20" height="20" fill="white" />
													</clipPath>
												</defs>
											</svg>
										</div>
									</div>
									<!-- :: input 03 -->
									<div class="form-group mb-2 ">
										<label class="form-head log-form-label" for="mailer-mail">Password</label>
										<div class="inputWithIcon">
											<input type="password" placeholder="*************" required>
											<svg class="i" xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none">
												<path d="M12 10V14M10.268 11L13.732 13M13.732 11L10.267 13M6.732 10V14M5 11L8.464 13M8.464 11L5 13M17.268 10V14M15.536 11L19 13M19 11L15.535 13M22 12C22 15.771 22 17.657 20.828 18.828C19.657 20 17.771 20 14 20H10C6.229 20 4.343 20 3.172 18.828C2 17.657 2 15.771 2 12C2 8.229 2 6.343 3.172 5.172C4.343 4 6.229 4 10 4H14C17.771 4 19.657 4 20.828 5.172C21.482 5.825 21.771 6.7 21.898 8" stroke="#858585" stroke-linecap="round" />
											</svg>
										</div>
									</div>
									<!-- ::input 04 -->
									<div class="form-group  mb-2 ">
										<label class="form-head log-form-label" for="mailer-mail">Confirm Password</label>
										<div class="inputWithIcon">
											<input type="password" placeholder="Please enter your password" required>
											<svg class="i" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
												<g clip-path="url(#clip0_47_99)">
													<path d="M7.49992 13.3333C7.49992 13.5543 7.41212 13.7663 7.25584 13.9226C7.09956 14.0789 6.8876 14.1667 6.66659 14.1667C6.44557 14.1667 6.23361 14.0789 6.07733 13.9226C5.92105 13.7663 5.83325 13.5543 5.83325 13.3333C5.83325 13.1123 5.92105 12.9004 6.07733 12.7441C6.23361 12.5878 6.44557 12.5 6.66659 12.5C6.8876 12.5 7.09956 12.5878 7.25584 12.7441C7.41212 12.9004 7.49992 13.1123 7.49992 13.3333ZM10.8333 13.3333C10.8333 13.5543 10.7455 13.7663 10.5892 13.9226C10.4329 14.0789 10.2209 14.1667 9.99992 14.1667C9.7789 14.1667 9.56694 14.0789 9.41066 13.9226C9.25438 13.7663 9.16659 13.5543 9.16659 13.3333C9.16659 13.1123 9.25438 12.9004 9.41066 12.7441C9.56694 12.5878 9.7789 12.5 9.99992 12.5C10.2209 12.5 10.4329 12.5878 10.5892 12.7441C10.7455 12.9004 10.8333 13.1123 10.8333 13.3333ZM14.1666 13.3333C14.1666 13.5543 14.0788 13.7663 13.9225 13.9226C13.7662 14.0789 13.5543 14.1667 13.3333 14.1667C13.1122 14.1667 12.9003 14.0789 12.744 13.9226C12.5877 13.7663 12.4999 13.5543 12.4999 13.3333C12.4999 13.1123 12.5877 12.9004 12.744 12.7441C12.9003 12.5878 13.1122 12.5 13.3333 12.5C13.5543 12.5 13.7662 12.5878 13.9225 12.7441C14.0788 12.9004 14.1666 13.1123 14.1666 13.3333Z" fill="#858585" />
													<path d="M4.99996 8.33333V6.66666C4.99996 6.38333 5.02329 6.10416 5.06913 5.83333M15 8.33333V6.66666C15 5.65103 14.6908 4.65946 14.1134 3.82391C13.536 2.98836 12.7179 2.34845 11.7679 1.98934C10.8178 1.63023 9.78098 1.56895 8.79527 1.81365C7.80956 2.05835 6.92174 2.59744 6.24996 3.35916M9.16663 18.3333H6.66663C4.30996 18.3333 3.13079 18.3333 2.39913 17.6008C1.66663 16.8692 1.66663 15.69 1.66663 13.3333C1.66663 10.9767 1.66663 9.7975 2.39913 9.06583C3.13079 8.33333 4.30996 8.33333 6.66663 8.33333H13.3333C15.69 8.33333 16.8691 8.33333 17.6008 9.06583C18.3333 9.7975 18.3333 10.9767 18.3333 13.3333C18.3333 15.69 18.3333 16.8692 17.6008 17.6008C16.8691 18.3333 15.69 18.3333 13.3333 18.3333H12.5" stroke="#858585" stroke-width="1.5" stroke-linecap="round" />
												</g>
												<defs>
													<clipPath id="clip0_47_99">
														<rect width="20" height="20" fill="white" />
													</clipPath>
												</defs>
											</svg>
										</div>
									</div>
									<!-- :: check -->
									<div class="form-check mt-2 mb-2">
										<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
										<label class="form-check-label check-label" for="flexCheckDefault"> Agree to Terms & Privacy to Create Account. </label>
									</div>
									<!-- :: signinbtn -->
									<div class="form-group text-center mb-1">
										<a href="#" class="signin-btn">SIGNUP</a>
									</div>
								</form>
								<!-- :: signup tag with anchor btn -->
								<div class="tab-switch-content text-center mt-3">
									<p>Already have an account <a href="#" class="tab-swich-link text-link-blue" id="signin-link"> Sign In Now</a>
									</p>
								</div>
								<!--:: login info -->
								<div class="mt-2 mb-0 text-center">
									<p class="log-txt mb-0">If you have questions or need help, please contact us:</p>
								</div>
								<!-- :: contact info -->
								<div class="flex-container justify-content-center mb-3">
									<div>
										<svg class="mx-1 mt-1px" xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
											<path d="M8.4375 1.25C8.4375 1.25 9.89625 1.3825 11.7519 3.23875C13.6081 5.095 13.7406 6.55312 13.7406 6.55312M8.87937 3.46C8.87937 3.46 9.49812 3.63625 10.4262 4.56437C11.3544 5.4925 11.5313 6.11125 11.5313 6.11125" stroke="#333333" stroke-linecap="round" />
											<path d="M9.7225 9.09186L9.3825 8.76936L9.7225 9.09249V9.09186ZM11.8763 12.6587L11.5356 12.3356L11.8756 12.6587H11.8763ZM11.0475 13.1025L11.0938 13.5681L11.0475 13.1019V13.1025ZM2.345 4.32811C2.34168 4.26664 2.32628 4.20642 2.29968 4.1509C2.27308 4.09537 2.23581 4.04563 2.18999 4.00451C2.14417 3.96339 2.0907 3.9317 2.03263 3.91125C1.97457 3.89079 1.91304 3.88198 1.85156 3.8853C1.79009 3.88862 1.72987 3.90402 1.67435 3.93062C1.61882 3.95722 1.56908 3.99449 1.52796 4.04031C1.48684 4.08613 1.45515 4.1396 1.4347 4.19767C1.41424 4.25573 1.40543 4.31726 1.40875 4.37874L2.345 4.32811ZM2.94875 1.93249C2.86667 2.0232 2.8233 2.14241 2.82791 2.26466C2.83251 2.38691 2.88473 2.50251 2.97341 2.58679C3.0621 2.67106 3.18021 2.71733 3.30254 2.71571C3.42486 2.71409 3.54171 2.66471 3.62812 2.57811L2.94875 1.93249ZM6.665 12.3825C6.71712 12.4161 6.77539 12.439 6.83643 12.4499C6.89748 12.4608 6.96008 12.4595 7.02061 12.4461C7.08114 12.4326 7.1384 12.4073 7.18908 12.3715C7.23976 12.3358 7.28284 12.2904 7.31583 12.2379C7.34882 12.1854 7.37107 12.1268 7.38128 12.0657C7.39149 12.0045 7.38946 11.9419 7.37532 11.8815C7.36117 11.8212 7.33519 11.7642 7.29887 11.7139C7.26256 11.6637 7.21663 11.6211 7.16375 11.5887L6.665 12.3825ZM9.44562 12.5362C9.32387 12.5108 9.197 12.5348 9.09292 12.6029C8.98884 12.671 8.91607 12.7776 8.89062 12.8994C8.86518 13.0211 8.88914 13.148 8.95724 13.2521C9.02534 13.3562 9.132 13.4289 9.25375 13.4544L9.44562 12.5362ZM9.77812 9.71499L10.0625 9.41499L9.3825 8.76936L9.09812 9.06936L9.77812 9.71499ZM10.9994 9.28874L12.1931 9.97624L12.6606 9.16374L11.4669 8.47624L10.9994 9.28874ZM12.4237 11.4012L11.5356 12.3356L12.2156 12.9819L13.1031 12.0469L12.4237 11.4012ZM5.22437 9.97436C2.80187 7.42374 2.39562 5.27186 2.345 4.32811L1.40875 4.37874C1.47125 5.53499 1.96125 7.89999 4.545 10.62L5.22437 9.97436ZM6.08437 5.82624L6.26312 5.63749L5.58375 4.99186L5.40437 5.18061L6.08437 5.82624ZM6.40437 3.28749L5.61625 2.17311L4.85062 2.71436L5.63812 3.82874L6.40437 3.28749ZM5.74375 5.50311C5.63126 5.39471 5.51772 5.28741 5.40312 5.18124L5.40187 5.18249L5.4 5.18436C5.3889 5.19584 5.37847 5.20795 5.36875 5.22061C5.30748 5.30171 5.259 5.39171 5.225 5.48749C5.16375 5.65936 5.13125 5.88686 5.1725 6.17061C5.25375 6.72811 5.61937 7.47749 6.57375 8.48311L7.25375 7.83686C6.36125 6.89749 6.14125 6.31936 6.1 6.03436C6.08 5.89686 6.1 5.82499 6.10812 5.80186L6.11312 5.78999C6.10801 5.79822 6.10215 5.80596 6.09562 5.81311C6.09196 5.81736 6.08821 5.82215 6.08437 5.82624L5.74375 5.50311ZM6.57375 8.48249C7.52562 9.48499 8.24437 9.87874 8.7925 9.96811C9.07437 10.0137 9.3025 9.97686 9.475 9.90874C9.57058 9.87122 9.65944 9.81845 9.73812 9.75249L9.76062 9.73124L9.76937 9.72249C9.77085 9.72126 9.77231 9.72001 9.77375 9.71874L9.77562 9.71686L9.77625 9.71561C9.77625 9.71561 9.7775 9.71499 9.4375 9.39186C9.0975 9.06936 9.09812 9.06874 9.09812 9.06811L9.09937 9.06749L9.10062 9.06561L9.10437 9.06249C9.11382 9.05336 9.12362 9.0446 9.13375 9.03624C9.13937 9.03249 9.13875 9.03374 9.13062 9.03686C9.11812 9.04186 9.06187 9.06186 8.94312 9.04249C8.69187 9.00124 8.14937 8.77999 7.25375 7.83686L6.57375 8.48249ZM5.61625 2.17311C4.9825 1.27686 3.715 1.12499 2.94875 1.93249L3.62812 2.57811C3.955 2.23436 4.53062 2.26124 4.85062 2.71436L5.61625 2.17311ZM11.5356 12.3356C11.3613 12.5194 11.1794 12.6181 11.0019 12.6356L11.0938 13.5681C11.5606 13.5225 11.9388 13.2737 12.2156 12.9819L11.5356 12.3362V12.3356ZM6.26312 5.63749C6.86812 5.00061 6.91062 4.00436 6.40437 3.28749L5.63875 3.82874C5.9025 4.20186 5.86187 4.69936 5.58375 4.99186L6.26312 5.63749ZM12.1931 9.97624C12.7063 10.2719 12.8069 10.9981 12.4237 11.4012L13.1031 12.0469C13.9188 11.1881 13.6806 9.75124 12.6606 9.16374L12.1931 9.97624ZM10.0625 9.41499C10.3031 9.16124 10.6788 9.10436 10.9994 9.28874L11.4669 8.47624C10.78 8.08124 9.92937 8.19436 9.3825 8.76936L10.0625 9.41499ZM7.16375 11.5887C6.54937 11.2025 5.895 10.68 5.22437 9.97436L4.545 10.62C5.26625 11.3794 5.98062 11.9525 6.665 12.3825L7.16375 11.5887ZM11.0012 12.6356C10.4807 12.6813 9.95616 12.6478 9.44562 12.5362L9.25375 13.4544C9.85779 13.5852 10.4782 13.6236 11.0938 13.5681L11.0019 12.6356H11.0012Z" fill="#333333" />
										</svg>
										<a href="tel:888-235-0004" class="tel">888-235-0004</a>
									</div>
									<div>
										<svg class="mx-1 mt-1px" xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
											<path fill-rule="evenodd" clip-rule="evenodd" d="M2 3.71422V10.5714C2 11.026 2.18061 11.4621 2.5021 11.7836C2.82359 12.105 3.25963 12.2857 3.71429 12.2857H12.2857C12.7404 12.2857 13.1764 12.105 13.4979 11.7836C13.8194 11.4621 14 11.026 14 10.5714V3.71422C14 3.25957 13.8194 2.82353 13.4979 2.50204C13.1764 2.18055 12.7404 1.99994 12.2857 1.99994H3.71429C3.25963 1.99994 2.82359 2.18055 2.5021 2.50204C2.18061 2.82353 2 3.25957 2 3.71422Z" stroke="#333333" stroke-linecap="round" stroke-linejoin="round" />
											<path d="M3.71431 4.57162L8.00002 7.14305L12.2857 4.57162" stroke="#333333" stroke-linecap="round" stroke-linejoin="round" />
										</svg>
										<a href="mailto:info@clearstarttax.com" class="tel">info@clearstarttax.com</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- :: page specific javascript -->
		<!-- :: for iconfify -->
		<script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
		<!-- :: for switch login and signup tab -->
		<script>
			const signupLink = document.getElementById('signup-link');
			const signinLink = document.getElementById('signin-link');
			const signupForm = document.querySelector('.signup-form');
			const loginForm = document.querySelector('.login-form');
			signupLink.addEventListener('click', function(event) {
				event.preventDefault();
				loginForm.style.display = 'none';
				signupForm.style.display = 'block';
			});
			signinLink.addEventListener('click', function(event) {
				event.preventDefault();
				signupForm.style.display = 'none';
				loginForm.style.display = 'block';
			});
		</script>
		<!-- :: for invalid email password field -->
		<script>
			const emailInput = document.getElementById('emailInput');
			const passwordInput = document.getElementById('passwordInput');
			const emailLabel = document.querySelector('.log-form-label[for="mailer-mail"]');
			const passwordLabel = document.querySelector('.log-form-label[for="passwordInput"]');
			const passwordStrengthText = document.getElementById('passwordStrengthText');
			emailInput.addEventListener('input', () => {
				const emailValue = emailInput.value.trim();
				// Check if the email input is empty or has an invalid email format
				if (emailValue === '' || !isValidEmail(emailValue)) {
					emailInput.style.border = '2px solid red';
					emailLabel.style.color = 'red';
				} else {
					emailInput.style.border = '';
					emailLabel.style.color = '';
				}
			});
			passwordInput.addEventListener('input', () => {
				const passwordValue = passwordInput.value.trim();
				// Check if the password input is empty or meets your criteria for validity
				// You can replace the condition below with your own password validation logic
				if (passwordValue === '' || passwordValue.length < 8) {
					passwordInput.style.border = '2px solid red';
					passwordLabel.style.color = 'red'; // Change the password label color to red
				} else {
					passwordInput.style.border = '';
					passwordLabel.style.color = ''; // Reset the password label color
				}
				// Update password strength text based on your own criteria
				const passwordStrength = checkPasswordStrength(passwordValue);
				passwordStrengthText.textContent = `Password Strength: ${passwordStrength}`;
			});

			function isValidEmail(email) {
				const emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
				return emailPattern.test(email);
			}

			function checkPasswordStrength(password) {
				if (password.length >= 8 && /[a-z]/.test(password) && /[A-Z]/.test(password) && /[0-9]/.test(password)) {
					return 'Strong';
				} else if (password.length >= 8 && /[a-zA-Z]/.test(password)) {
					return 'Moderate';
				} else {
					return 'Weak';
				}
			}
		</script>
	</body>
</html>