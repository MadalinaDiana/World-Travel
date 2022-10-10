<?php

include 'connection.php';

if (isset($_SESSION["user_id"]) && $_SESSION["user_id"] != "") {

	//redirect("dashboard.php");
}

$mode = "";
$title = "Autentificare";
$mode = $_POST['mode'];

if ($mode == "loginare") {
	$username = trim($_POST['username']);
	$pass = trim($_POST['user_password']);

	if ($username == "" || $pass == "") {
	} else {
		$sql = "SELECT * FROM users WHERE username = '$username' AND password = '$pass' ";
		$results = mysqli_query($db, $sql);
		if (!$results)
			die('Invalid querry:' . mysqli_error($db));
		else {



			$sql2 = mysqli_query($db, "SELECT users.Id, users.nume, users.username, user_types.redirect, dash_text.content_text,dash_text.titlu FROM users LEFT JOIN dash_text  ON users.type=dash_text.user_type_id LEFT JOIN user_types ON users.type= user_types.Id WHERE users.username = '$username' AND users.password = '$pass'");
			$myrow1 = mysqli_fetch_array($sql2, MYSQLI_ASSOC);

			$rows = mysqli_num_rows($sql2);

			if (count($rows) > 0) {



				$_SESSION["user_id"] = $myrow1["Id"];
				$_SESSION["username"] = $myrow1["username"];
				$_SESSION["titlu"] = $myrow1["titlu"];
				$_SESSION["continut"] = $myrow1["content_text"];




				redirect($myrow1["redirect"]);
				exit;
			}
		}
	}
	redirect("login.php");
}


?>
<script type="text/javascript">
	function verifica() {
		var username = document.getElementById("username2");
		var user_password = document.getElementById("user_password");
		var isValid = true;

		if (username.value == "") {
			alert("Va rugam sa introduceti numele de utilizator!");
			isValid = false;
		} else if (user_password.value == "") {
			alert("Va rugam sa introduceti parola!");
			isValid = false;
		}
		return isValid;
	}
</script>


<html lang="en">

<title>Sign up </title>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<head>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	<!------ Include the above in your HEAD tag ---------->



	<!DOCTYPE html>
	<script src="jquery/jquery.min.js"></script>
	<!---- jquery link local dont forget to place this in first than other script or link or may not work ---->

	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!---- boostrap.min link local ----->

	<link rel="stylesheet" href="css/style.css">
	<!---- boostrap.min link local ----->

	<script src="js/bootstrap.min.js"></script>
	<!---- Boostrap js link local ----->

	<link rel="icon" href="images/icon.png" type="image/x-icon" />
	<!---- Icon link local ----->

	<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
	<!---- Font awesom link local ----->
</head>

<body>
	<!-- Navigation -->
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
		<div class="container">
			<a class="navbar-brand" href="#">World Travel</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a class="nav-link" href="index.html">Home
						</a>
					</li>
					<li class="nav-item active">
						<a class="nav-link" href="login.html">Log In</a>
						<span class="sr-only">(current)</span>
					</li>
				</ul>
			</div>
		</div>

	</nav>
	<div class="container-fluid">
		<div class="container">
			<br></br><br></br>
			<hr>
			<div class="row">
				<div class="col-md-5">
					<form method="post" action="register.php">
						<fieldset>
							<p class="text-uppercase pull-center"> SIGN UP.</p>
							<div class="form-group">
								<input type="text" name="username" id="username" class="form-control input-lg" placeholder="username" required>
							</div>

							<div class="form-group">
								<input type="email" name="email" id="email" class="form-control input-lg" placeholder="Email Address" required>
							</div>
							<div class="form-group">
								<input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password" required>
							</div>
							<div class="form-group">
								<input type="password" name="password_2" id="password" class="form-control input-lg" placeholder="Confirm password" required>
							</div>
							<div class="form-group">
								<input type="phone" name="phone" id="phone" class="form-control input-lg" placeholder="Nr Telefon" required>
							</div>
							<div class="form-check">
								<label class="form-check-label">
									<input type="checkbox" class="form-check-input" required>
									By Clicking register you're agree to our policy & terms
								</label>
							</div>
							<div>
								<input type="submit" class="btn btn-lg btn-primary" href="register.php" value="Register">
							</div>
						</fieldset>
					</form>
				</div>

				<div class="col-md-2"></div>

				<div class="col-md-2">
					<div class="page-header">
						<h1><?php echo $title ?></h1>
					</div>
					<form name="contact_form" id="contact_form" method="post" action="" onsubmit="return verifica()">

						<div class="row">
							<p class="hide"><input type="text" name="mode" value="loginare" hidden></p>
							<div class="large-8 medium-8 small-12 columns">
								Username: <input type="text" name="username" id="username2" value="">
							</div>
							<br>
							<div class="large-8 medium-8 small-12 columns">
								Parola: <input type="password" name="user_password" id="user_password" value="">
							</div>
							<div class="large-8 medium-8 small-8 columns">
								<input type="submit" name="submit" value="Submit">
							</div>
						</div>
					</form>

					</fieldset>
				</div>
			</div>
		</div>

	</div>
</body>


</html>
<?php include 'footer.php'; ?>