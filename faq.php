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
		<title>faq</title>
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
			<!-- :: client information head -->
			<div class="app-title">
				<div class="user-dashboard-welcome">
					<h1>Hello Christian Ha</h1>
					<h5 class="mt-10 mb-5px">"Answers to Your Questions: FAQ - Find What You Need"</h5>
					<!-- <p>"Explore Your Personalized Dashboard, Christian!"</p> -->
				</div>
				<div class="user-dashboard-welcome-d-image d-none-sm">
					<!--:: image top head dashboard  -->
					<img class="faq-top-image" src="img/faq-top.png">
				</div>
			</div>
			<!-- :: client information head -->
			<!--:: faq accordian  -->
			<section class="faq-accordian mt-2">
				<div class="row justify-content-center">
					<div class="col-md-11">
						<div class="accordion" id="accordionExample">
							<!-- :: accordian one -->
							<div class="accordion-item">
								<h2 class="accordion-header" id="headingOne">
									<button class="accordion-button cst-acc-br" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"> Where do I send my documents? </button>
								</h2>
								<div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
									<div class="accordion-body">
										<strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
									</div>
								</div>
							</div>
							<!-- :: accodian two -->
							<div class="accordion-item mt-3">
								<h2 class="accordion-header" id="headingTwo">
									<button class="accordion-button cst-acc-br collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"> Can the state intercept my federal refund and viceversa? </button>
								</h2>
								<div id="collapseTwo" class="accordion-collapse  collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
									<div class="accordion-body">
										<strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
									</div>
								</div>
							</div>
							<!-- :: accordian three -->
							<div class="accordion-item mt-3">
								<h2 class="accordion-header" id="headingThree">
									<button class="accordion-button  cst-acc-br collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree"> Can the state intercept my federal refund and viceversa? </button>
								</h2>
								<div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
									<div class="accordion-body">
										<strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
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
		<script>
			//  event listeners to each accordion button for custom open/close functionality
			const accordionButtons = document.querySelectorAll(".accordion-button");
			accordionButtons.forEach(button => {
				button.addEventListener("click", () => {
					// Toggle the "collapsed" class on the button
					button.classList.toggle("collapsed");
					const targetId = button.getAttribute("data-bs-target").substring(1);
					const targetCollapse = document.getElementById(targetId);
					targetCollapse.classList.toggle("show");
				});
			});
		</script>
	</body>
</html>