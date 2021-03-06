<?php ?>
<!DOCTYPE html>
	<html>
		<head>

			<meta charset="utf-8">
		    <meta http-equiv="X-UA-Compatible" content="IE=edge">
		    <meta name="viewport" content="width=device-width, initial-scale=1">
		    <meta name="description" content="">
		    <meta name="author" content="">

		    <title>Wanna Bet? - Login & Registration</title>

		    <!-- Bootstrap Core CSS - Uses Bootswatch Flatly Theme: http://bootswatch.com/flatly/ -->
		    <link href="/assets/stylesheets/bootstrap.min.css" rel="stylesheet">

		    <!-- Custom CSS -->
		    <link href="/assets/stylesheets/freelancer.css" rel="stylesheet">

		    <!-- Custom Fonts -->
		    <link href="/assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
		    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
		    <link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

		    <!-- STEPHEN CSS CODE FOR LOGIN / REG -->
		    <!-- <link rel="stylesheet" href="/assets/stylesheets/log_reg.css"> -->
		    <!--  -->
			<script src="/assets/javascripts/log_reg.js"></script>
		
			<script>
			
			</script>
		</head>
		<body>
			<header>
				<a href="/">Wanna Bet?</a>
				<div class="navs">
					 <a href="/bets/go_mainpage">Home</a>
					 <a href="/bets/go_success">Success</a>
				</div>
			</header>
			<div class="container">
			    	<div class="row">
						<div class="col-md-6 col-md-offset-3">
							<div class="panel panel-login">
								<div class="panel-heading">
									<div class="row">
										<div class="col-xs-6">
											<a href="#" class="active" id="login-form-link">Login</a>
										</div>
										<div class="col-xs-6">
											<a href="#" id="register-form-link">Register</a>
										</div>
									</div>
									<hr>
								</div>
								<div class="panel-body">
									<div class="row">
										<div class="col-lg-12">

											<form id="login-form" action="/bets/sign_in" method="post" role="form" style="display: block;">
												<?= $this->session->flashdata('login_error'); ?>
												<div class="form-group">
													<input type="text" name="email" id="email" tabindex="1" class="form-control" placeholder="Username" value="">
												</div>
												<div class="form-group">
													<input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
												</div>
												<div class="form-group text-left">
													<input type="checkbox" tabindex="3" class="" name="remember" id="remember">
													<label for="remember"> Remember Me</label>
												</div>
												<div class="form-group">
													<div class="row">
														<div class="col-sm-6 col-sm-offset-3">
															<input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Log In">
														</div>
													</div>
												</div>
												<div class="form-group">
													<div class="row">
														<div class="col-lg-12">
															<div class="text-center">
																<a href="/bets/dash" tabindex="5" class="forgot-password">Forgot Password?</a>
															</div>
														</div>
													</div>
												</div>
											</form>
											<form id="register-form" action="/bets/register" method="post" role="form" style="display: none;">
												<p><?= validation_errors() ?></p>
												<div class="form-group">
													<input type="text" name="first_name" id="first-name" tabindex="1" class="form-control" placeholder="First Name" value="">
												</div>
												<div class="form-group">
													<input type="text" name="last_name" id="last-name" tabindex="1" class="form-control" placeholder="Last Name" value="">
												</div>
												<div class="form-group">
													<input type="text" name="email" id="email" tabindex="2" class="form-control" placeholder="Email">
												</div>
												<div class="form-group">
													<input type="text" name="nickname" id="username" tabindex="2" class="form-control" placeholder="Username">
												</div>
												<div class="form-group">
													<input type="password" name="pass1" id="pass1" tabindex="2" class="form-control" placeholder="Password">
												</div>
												<div class="form-group">
													<input type="password" name="pass2" id="pass2" tabindex="2" class="form-control" placeholder="Password Conformation">
												</div>
												<div class="form-group">
													<div class="row">
														<div class="col-sm-6 col-sm-offset-3">
															<input type="submit" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-register" value="Register Now">
														</div>
													</div>
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
			</div>
		</body>
	</html>