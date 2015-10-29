<?php ?>
<!DOCTYPE html>
	<html>
		<head>
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
			<link rel="stylesheet" href="/assets/stylesheets/landr.css">
			<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
			<script src="/assets/javascripts/landr.js"></script>
		</head>
		<body>
			<header>
				<a href="#page-top">Project S3</a>
				<div class="navs">
					 <a href="/welcome/go_mainpage">Home</a>
					 <a href="/welcome/go_success">Success</a>
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
											<form id="login-form" action="/welcome/sign_in" method="post" role="form" style="display: block;">
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
																<a href="http://phpoll.com/recover" tabindex="5" class="forgot-password">Forgot Password?</a>
															</div>
														</div>
													</div>
												</div>
											</form>
											<form id="register-form" action="/welcome/register" method="post" role="form" style="display: none;">
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