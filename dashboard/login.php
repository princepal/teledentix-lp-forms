<!DOCTYPE html>
<html>
<head>
	<title>Teledentix</title>
	<link rel="icon" href="../images/favicon.png" type="image/png">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://fonts.googleapis.com/css?family=Abril+Fatface|Rubik:400,500,700" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://unpkg.com/multiple-select@1.3.1/dist/multiple-select.min.css">
	<link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
	<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
	<link href="css/style.css" type="text/css" rel="stylesheet">
	<link href="css/custom.css" type="text/css" rel="stylesheet">

</head>
<body>
	<!-- header -->
	<header class="main-header header-login">
		<div class="container">
			<div class="txt-left header-logo login-width-container">
				<a href="index.php"><img src="../images/logo.svg"></a>
			</div>
		</div>
	</header>
	<!-- header end -->

	<!-- login form section -->
	<section class="login_form_section">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="login-width-container block">
						<div class="login_signup_form  login">
							<img class="background-img" src="../images/loginbg.png">
							<div class="login_form">
								<!-- login form -->
								<form class="login__ login_animate login_form_show" action="index.php">
									<h4 class="form_title">Login to Dashboard</h4>
									<p class="sub_title">Enter your login credentials</p>
									<div class="form-group">
										<label for="email_login">Email</label>
										<input type="email" id="email_login" class="form-control">
									</div>
									<div class="form-group">
										<label for="psw_login">Password</label>
										<input type="password" id="psw_login" class="form-control error_validation"><!-- error_validation class for form validations -->
									</div>
									<p class="forgot_psw">Forgot your password?</p>
									<div class="form-group">
										<button type="submit" id="psw_login" class="form-control btn text-center btn-primary">SUBMIT</button>
									</div>
									<p class="sign-up-link">Don't have an account? <a href="javascript:void(0);" id="right">Sign up</a></p>
								</form>
								<!-- login form end -->
								<!-- forgot password form -->
								<form class="login__  forgot_password_form" style="display: none;">
									<h4 class="form_title">Forgot Password</h4>
									<p class="sub_title">New password has been sent to your registered email id.</p>
									<div class="form-group">
										<label for="psw_forgot">Password</label>
										<input type="password" id="psw_forgot" class="form-control " value="******"><!-- error_validation class for form validations -->
									</div>
									<div class="form-group">
										<button type="submit" id="forgot_btn" class="form-control btn text-center btn-primary mt-3">CONFIRM</button>
									</div>
								</form>
								<!-- forgot password form end -->
								<!-- signup form -->
								<form class="register_animate" action="login.php">
									<h4 class="form_title">Sign Up</h4>
									<p class="sub_title">Set a password to continue</p>
									<div class="form-group">
										<div class="row">
										    <div class="col pr-2">
									     	 	<label for="firstname_signup">First name</label>
												<input type="text" id="firstname_signup" class="form-control">
										    </div>
										    <div class="col pl-2">
										      	<label for="lastname_signup">Last name</label>
												<input type="text" id="lastname_signup" class="form-control">
										    </div>
									  	</div>
								  	</div>
									<div class="form-group">
										<label for="dob_signup">Date of birth</label>
										<input type="date" id="dob_signup" class="form-control">
									</div>
									<div class="form-group">
										<label for="phone_signup">Phone number</label>
										<input type="tel" id="phone_signup" class="form-control">
									</div>
									<div class="form-group">
										<label for="email_signup">Email</label>
										<input type="email" id="email_signup" class="form-control">
									</div>
									<div class="form-group">
										<label for="psw_signup">Set password</label>
										<input type="password" id="psw_signup" class="form-control">
									</div>
									<div class="form-group">
										<button type="submit" id="psw_login" class="form-control btn text-center btn-primary">SUBMIT</button>
									</div>
									<p class="sign-up-link">DoAlready have an account? <a href="javascript:void(0);" id="left">Login</a></p>
								</form>
								<!-- signup form end -->
							</div>
						</div>

						<div class="login_signup_form signup_form register">
							<img src="../images/signupbg.png">
							
						</div>

					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- login form section end -->

	<?php include 'footer.php'; ?>
