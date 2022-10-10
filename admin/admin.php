<html>

<head>
	<title>Admin</title>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script href="css/map.css" rel="stylesheet"></script>
	<script src='//production-assets.codepen.io/assets/editor/live/console_runner-079c09a0e3b9ff743e39ee2d5637b9216b3545af0de366d4b9aad9dc87e26bfd.js'></script><script src='//production-assets.codepen.io/assets/editor/live/events_runner-73716630c22bbc8cff4bd0f07b135f00a0bdc5d14629260c3ec49e5606f98fdd.js'></script><script src='//production-assets.codepen.io/assets/editor/live/css_live_reload_init-2c0dc5167d60a5af3ee189d570b1835129687ea2a61bee3513dee3a50c115a77.js'></script><meta charset='UTF-8'><meta name="robots" content="noindex"><link rel="shortcut icon" type="image/x-icon" href="//production-assets.codepen.io/assets/favicon/favicon-8ea04875e70c4b0bb41da869e81236e54394d63638a1ef12fa558a4a835f1164.ico" /><link rel="mask-icon" type="" href="//production-assets.codepen.io/assets/favicon/logo-pin-f2d2b6d2c61838f7e76325261b7195c27224080bc099486ddd6dccb469b8e8e6.svg" color="#111" /><link rel="canonical" href="https://codepen.io/rozklad/pen/jaNrWW" />

	<!------ Include the above in your HEAD tag ---------->
</head>

<body>
<div>
							<?php echo $_SESSION["titlu"] ?>
							</div>
							<div>
							<?php echo $_SESSION["continut"] ?>
							</div>
							<div>
							Salut!!!
							</div>
</p>
<div>

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
							<li><a href="conturi.html">Conturi</a></li>
							<li><a href="noi conturi.html">Noi conturi</a></li>
							<li class="divider"></li>
							<li><a href="#">Separated link</a></li>
							<li class="divider"></li>
						</ul>
					</li>
					<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span
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
	<div class="container-fluid">
		<div class="col col-md-3">
			<div class="panel-group" id="accordion">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h4 class="panel-title">
							<a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
								Files</a>
						</h4>
					</div>
					<div id="collapse1" class="panel-collapse collapse in">
						<ul class="list-group">
						<?php include 'headerlogged.php'; ?>
							<li class="list-group-item"><span class="badge"><a href="conturi.html">17</span> Conturi</a></li>
							<li class="list-group-item"><span class="badge"><a href="editare.html">3</span> Editare</a></li>
							<li class="list-group-item"><span class="badge"><a href="vizualizare.php">3</span> Vizualizare clienti</a></li>
							<li class="list-group-item"><span class="badge"><a href="vizualizarepa.php">3</span> Vizualizare parteneri</a></li>
							<li class="list-group-item"><span class="badge"><a href="../stergec.php">3</span> Sterge clienti</a></li>
						</ul>
					</div>
				</div>
				<div class="panel panel-default">
					<div id="collapse2" class="panel-collapse collapse">
						<ul class="list-group">
							<li class="list-group-item"><span class="badge">12</span> Noi conturi</li>
							<li class="list-group-item"><span class="badge">5</span> Sterse</li>
						</ul>
					</div>
				</div>
				<div class="panel panel-default">
					<div class="panel-heading">
						<h4 class="panel-title">
							<a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
								Setari</a>
						</h4>
					</div>
					<div id="collapse3" class="panel-collapse collapse">
						<ul class="list-group">
							<li class="list-group-item"><span class="badge">1</span> User reportat</li>
							<li class="list-group-item"><span class="badge">5</span> Activare cont user</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		
		<div class="col col-md-9">
			<div class="row">
				<div class="col col-md-5">
					<h4>Today Stats:</h4>
					Visits<span class="pull-right strong">- 15%</span>
					<div class="progress">
						<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="15"
							aria-valuemin="0" aria-valuemax="100" style="width:15%">15%</div>
					</div>

					20 New Users<span class="pull-right strong">+ 30%</span>
					<div class="progress">
						<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="30"
							aria-valuemin="0" aria-valuemax="100" style="width:30%">30%</div>
					</div>

					359 Downloads<span class="pull-right strong">+ 8%</span>
					<div class="progress">
						<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="8"
							aria-valuemin="0" aria-valuemax="100" style="width:8%">8%</div>
					</div>
				</div>
				<div class="col col-md-5">
					<h4>This Month Stats:</h4>
					Visits<span class="pull-right strong">+ 45%</span>
					<div class="progress">
						<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="45"
							aria-valuemin="0" aria-valuemax="100" style="width:45%">45%</div>
					</div>

					395 New Users<span class="pull-right strong">+ 57%</span>
					<div class="progress">
						<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="57"
							aria-valuemin="0" aria-valuemax="100" style="width:57%">57%</div>
					</div>

					12.593 Downloads<span class="pull-right strong">+ 25%</span>
					<div class="progress">
						<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="25"
							aria-valuemin="0" aria-valuemax="100" style="width:25%">25%</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--Google map-->
<div id="map-container-google-3" class="z-depth-1-half map-container-3">
	<iframe src="https://maps.google.com/maps?q=warsaw&t=k&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0"
	  style="border:0" allowfullscreen></iframe>
  </div> 
  <br><b><br></b>
  <style class="cp-pen-styles">body {
	font-family: 'Helvetica Neue', Arial, sans-serif;
  }
  
  .card {
	background-color: #fff;
	box-shadow: 0 0 6px rgba(0, 0, 0, 0.1);
	position: absolute;
	top: 80%;
	left: 70%;
	transform: translate(-50%, -50%);
	max-width: 300px;
	height: 375px;
	border-radius: 10px;
	overflow: hidden;
  }
  
  .card .about {
	height: 225px;
	padding: 20px;
	box-sizing: border-box;
  }
  
  .card .about h3,
  .card .about .lead {
	font-weight: 300;
	margin: 0;
  }
  
  .card .about h3 {
	font-size: 24px;
  }
  
  .card .about .lead {
	color: #aaa;
  }
  
  .card .info {
	float: left;
	padding: 10px 30px 10px 0;
  }
  
  .card .info p {
	font-size: 11px;
	color: #aaa;
	font-weight: 300;
  }
  
  .legends {
	padding-top: 20px;
	overflow: hidden;
  }
  
  .legend {
	display: block;
	width: 8px;
	height: 8px;
	margin-top: 15px;
	margin-bottom: 15px;
	border-radius: 50%;
  }
  
  .legend--this {
	background-color: #5555FF;
  }
  
  .legend--prev {
	background-color: #FF55B8;
  }
  
  .axis {
	position: absolute;
	color: #fff;
	z-index: 1;
	text-transform: uppercase;
	display: flex;
	width: 100%;
	bottom: 0;
  }
  
  .axis .tick {
	flex: 1;
	position: relative;
	overflow: hidden;
	opacity: 0.2;
	font-size: 11px;
	text-align: center;
	line-height: 40px;
	padding-top: 150px;
  }
  
  .axis .tick:hover {
	opacity: 1;
	background-color: rgba(255, 255, 255, 0.2);
  }
  
  .axis .tick .value {
	transform: translateY(-40px);
	transition: 0.3s transform;
	position: absolute;
	top: 20px;
	color: #444;
	border-radius: 2px;
	width: 100%;
	line-height: 20px;
  }
  
  .axis .tick:hover .value.value--this {
	transform: translateY(0);
	display: block;
  }
  
  .value.value--this {
	color: #5555FF;
	font-weight: bold;
  }
  
  </style></head><body>
  <div class="card">
	<!-- Custom information -->
	<div class="about">
	  <h3>Chart.js</h3>
	  <p class="lead">Blend mode: multiply</p>
	  <div class="legends">
		<div class="info">
		  <span class="legend legend--this"></span>
		  <p>This week</p>
		</div>
		<div class="info">
		  <span class="legend legend--prev"></span>
		  <p>Previous week</p>
		</div>
	  </div>
	</div>
	
	<!-- Canvas for Chart.js -->
	<canvas id="canvas"></canvas>
	
	<!-- Custom Axis -->
	<div class="axis">
	  <div class="tick">
		MON
		<span class="value value--this">24</span>
		<span class="value value--prev">20</span>
	  </div>
	  <div class="tick">
		TUE
		<span class="value value--this">18</span>
		<span class="value value--prev">22</span>
	  </div>
	  <div class="tick">
		WED
		<span class="value value--this">16</span>
		<span class="value value--prev">30</span>
	  </div>
	  <div class="tick">
		THU
		<span class="value value--this">18</span>
		<span class="value value--prev">22</span>
	  </div>
	  <div class="tick">
		FRI
		<span class="value value--this">24</span>
		<span class="value value--prev">18</span>
	  </div>
	  <div class="tick">
		SAT
		<span class="value value--this">36</span>
		<span class="value value--prev">22</span>
	  </div>
	  <div class="tick">
		SUN
		<span class="value value--this">28</span>
		<span class="value value--prev">30</span>
	  </div>
	</div>
  </div>
  <script src='//production-assets.codepen.io/assets/common/stopExecutionOnTimeout-b2a7b3fe212eaa732349046d8416e00a9dec26eb7fd347590fbced3ab38af52e.js'></script><script src='https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.0/Chart.js'></script>
  <script >var canvas = document.getElementById("canvas");
  
  // Apply multiply blend when drawing datasets
  var multiply = {
	beforeDatasetsDraw: function(chart, options, el) {
	  chart.ctx.globalCompositeOperation = 'multiply';
	},
	afterDatasetsDraw: function(chart, options) {
	  chart.ctx.globalCompositeOperation = 'source-over';
	},
  };
  
  // Gradient color - this week
  var gradientThisWeek = canvas.getContext('2d').createLinearGradient(0, 0, 0, 150);
  gradientThisWeek.addColorStop(0, '#5555FF');
  gradientThisWeek.addColorStop(1, '#9787FF');
  
  // Gradient color - previous week
  var gradientPrevWeek = canvas.getContext('2d').createLinearGradient(0, 0, 0, 150);
  gradientPrevWeek.addColorStop(0, '#FF55B8');
  gradientPrevWeek.addColorStop(1, '#FF8787');
  
  
  var config = {
	  type: 'line',
	  data: {
		  labels: ["MON", "TUE", "WED", "THU", "FRI", "SAT", "SUN"],
		  datasets: [
			{
				label: 'This week',
				data: [24, 18, 16, 18, 24, 36, 28],
				backgroundColor: gradientThisWeek,
				borderColor: 'transparent',
				pointBackgroundColor: '#FFFFFF',
				pointBorderColor: '#FFFFFF',
				lineTension: 0.40,
			},
			{
				label: 'Previous week',
				data: [20, 22, 30, 22, 18, 22, 30],
				backgroundColor: gradientPrevWeek,
				borderColor: 'transparent',
				pointBackgroundColor: '#FFFFFF',
				pointBorderColor: '#FFFFFF',
				lineTension: 0.40,
			}
		  ]
	  },
	  options: {
			  elements: { 
			  point: {
				radius: 0,
				hitRadius: 5, 
			  hoverRadius: 5 
			} 
		  },
			  legend: {
				  display: false,
		  },
		  scales: {
			  xAxes: [{
					  display: false,
			  }],
			  yAxes: [{
					  display: false,
				  ticks: {
					  beginAtZero: true,
					},
			  }]
		  }
	  },
	  plugins: [multiply],
  };
  
  window.chart = new Chart(canvas, config);
  //# sourceURL=pen.js
  </script>
</body>

</html>