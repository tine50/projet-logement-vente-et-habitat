<?php
	session_start();
	include "code/connexion_base_donnee/connexion_db.php";
	include "models/authentification.php";
	include "models/connexion.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="js.con.js"></script>
    <link rel="stylesheet" href="style.con.css">



</head>
<body>  
    <h1 style="text-align:center; font-weight:bold ">Immobo <span style="color : rgb(46,202,106); font-weight:bold">Agengy</span></h1>
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
								<form id="login-form" action="" method="POST" role="form" style="display: block;">
									<div class="form-group">
										<input type="email" name="email_connexion" id="email" tabindex="1" class="form-control" placeholder="Email" value="">
									</div>
									<div class="form-group">
										<input type="password" name="password_connexion" id="password" tabindex="2" class="form-control" placeholder="Password">
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-register"  value="Log In">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-lg-12">
												<div class="text-center">
													<a href="#" tabindex="5" class="forgot-password">Forgot Password?</a>
												</div>
											</div>
										</div>
									</div>
								</form>
								<div ><?php echo @$erreur ?></div>
								<form id="register-form" action="" method="POST" role="form" style="display: none;">
									<div class="form-group">
										<input type="text" name="LastName" id="LastName" tabindex="1" class="form-control" placeholder="Last Name" value="<?php echo @$LastName?>" required>
									</div>
									<div class="form-group">
										<input type="text" name="FisrtName" id="FisrtName" tabindex="1" class="form-control" placeholder="Fisrt Name" value="<?php echo @$FisrtName?>" required>
									</div>
									<div class="form-group">
										<input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="Email Address" value="<?php echo @$email?>" required>
									</div>
									<div class="form-group">
										<input type="radio" name="sexe" id="sexe" placeholder="Sexe" value="M" required> Masculin
										<input type="radio" name="sexe" id="sexe" placeholder="Sexe" value="F"> Feminin
									</div>
									<div class="form-group">
										<input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password" required>
									</div>
									<div class="form-group">
										<input type="password" name="confirm-password" id="confirm-password" tabindex="2" class="form-control" placeholder="Confirm Password" required>
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