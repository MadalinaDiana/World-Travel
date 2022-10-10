<!DOCTYPE HTML>  
<html>
 <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forme</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src='//production-assets.codepen.io/assets/editor/live/console_runner-079c09a0e3b9ff743e39ee2d5637b9216b3545af0de366d4b9aad9dc87e26bfd.js'></script><script src='//production-assets.codepen.io/assets/editor/live/events_runner-73716630c22bbc8cff4bd0f07b135f00a0bdc5d14629260c3ec49e5606f98fdd.js'></script><script src='//production-assets.codepen.io/assets/editor/live/css_live_reload_init-2c0dc5167d60a5af3ee189d570b1835129687ea2a61bee3513dee3a50c115a77.js'></script><meta charset='UTF-8'><meta name="robots" content="noindex"><link rel="shortcut icon" type="image/x-icon" href="//production-assets.codepen.io/assets/favicon/favicon-8ea04875e70c4b0bb41da869e81236e54394d63638a1ef12fa558a4a835f1164.ico" /><link rel="mask-icon" type="" href="//production-assets.codepen.io/assets/favicon/logo-pin-f2d2b6d2c61838f7e76325261b7195c27224080bc099486ddd6dccb469b8e8e6.svg" color="#111" /><link rel="canonical" href="https://codepen.io/rozklad/pen/jaNrWW" />

  </head>
<body> 
<div class="container">
		<nav class="navbar navbar-default" role="navigation">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span><span
						class="icon-bar"></span><span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="../vacante/index.html">World Travel</a>
			</div>
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li class="active"><a href="#"><span class="glyphicon glyphicon-home"></span>Dashboard</a></li>
					<li><a href=""><span class="glyphicon glyphicon-calendar"></span>Calendar</a></li>
					<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span
						class="glyphicon glyphicon-list-alt"></span>Informatii <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="#">Actiuni</a></li>
							<li><a href="#">Alte actiuni</a></li>
							<li class="divider"></li>
							<li><a href="#">Separated link</a></li>
							<li class="divider"></li>
						</ul>
					</li>
					<li class="dropdown"><a href="admin.html" class="dropdown-toggle" data-toggle="dropdown"><span
						class="glyphicon glyphicon-search"></span>Search <b class="caret"></b></a>
						<ul class="dropdown-menu" style="min-width: 300px;">
							<li>
								<div class="row">
									<div class="col-md-12">
										<form class="navbar-form navbar-left" role="search">
										<div class="input-group">
											<input type="text" class="form-control" placeholder="Search" />
											<span class="input-group-btn">
												<button class="btn btn-primary" type="button">
													Cauta!</button>
											</span>
										</div>
										</form>
									</div>
								</div>
							</li>
						</ul>
					</li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
					<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span
						class="glyphicon glyphicon-comment"></span>Chats <span class="label label-primary">42</span>
					</a>
						<ul class="dropdown-menu">
							<li><a href="#"><span class="label label-warning">7:00 AM</span>Hi :)</a></li>
							<li><a href="#"><span class="label label-warning">8:00 AM</span>How are you?</a></li>
							<li><a href="#"><span class="label label-warning">9:00 AM</span>What are you doing?</a></li>
							<li class="divider"></li>
							<li><a href="#" class="text-center">View All</a></li>
						</ul>
					</li>
					<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span
						class="glyphicon glyphicon-envelope"></span>Inbox <span class="label label-info">32</span>
					</a>
						<ul class="dropdown-menu">
							<li><a href="#"><span class="label label-warning">4:00 AM</span>Favourites Snippet</a></li>
							<li><a href="#"><span class="label label-warning">4:30 AM</span>Email marketing</a></li>
							<li><a href="#"><span class="label label-warning">5:00 AM</span>Subscriber focused email
								design</a></li>
							<li class="divider"></li>
							<li><a href="#" class="text-center">View All</a></li>
						</ul>
					</li>
					<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span
						class="glyphicon glyphicon-user"></span>Admin <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="#"><span class="glyphicon glyphicon-user"></span>Profile</a></li>
							<li><a href="#"><span class="glyphicon glyphicon-cog"></span>Settings</a></li>
							<li class="divider"></li>
							<li><a href="../index.html"><span class="glyphicon glyphicon-off"></span>Logout</a></li>
						</ul>
					</li>
				</ul>
			</div>
			<!-- /.navbar-collapse -->
		</nav>
	</div>
</br>
</br>
</br>

<?php
$db=mysqli_connect("localhost","root","");
mysqli_select_db($db,"worldtravel");
$email = "";
  if (empty($_POST["email"])) {
    $nameErr = "Este necesar sa introduceti email.";
    echo $nameErr;
  } else {
    $email = $_POST["email"];
    $result= mysqli_query($db,"CALL stergere('$email')");
  }
if (!$result)
 die('Invalid querry:' .mysqli_error($db));
 else 
 {
    echo "<p align=center><font color=green>Inregistrarea cu adresa de email ".$email." a fost stearsa</font></br></p>";
 }
 
?>

<div align="center">
	<a class="nav-link" href="admin.html">Inapoi</a>
</div>


<script src="js/vendor/jquery.js"></script>
    <script src="js/vendor/what-input.js"></script>
    <script src="js/vendor/foundation.js"></script>
    <script src="js/app.js"></script>
  </body>
</html>