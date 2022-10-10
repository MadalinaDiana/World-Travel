<html>

<head>
  <title>Conturi</title>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  <!------ Include the above in your HEAD tag ---------->
  <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
  <script href="css/cont1.css" rel="stylesheet"></script>
  <script href="js/conturi.js" rel="stylesheet"></script>
</head>

<body>
  <div class="container">
    <nav class="navbar navbar-default" role="navigation">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="../vacante/index.html">World Travel</a>
      </div>
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li class=""><a href="admin.html"><span class="glyphicon glyphicon-home"></span>Dashboard</a></li>
          <li><a href=""><span class="glyphicon glyphicon-calendar"></span>Calendar</a></li>
          <li class="active"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-list-alt"></span>Conturi <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="noi conturi.html">Noi conturi</a></li>
              <li><a href="editare.html">Editare</a></li>
              <li class="divider"></li>
              <li><a href="#">Separated link</a></li>
              <li class="divider"></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-search"></span>Search <b class="caret"></b></a>
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
          <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-comment"></span>Chats <span class="label label-primary">42</span>
            </a>
            <ul class="dropdown-menu">
              <li><a href="#"><span class="label label-warning">7:00 AM</span>Hi :)</a></li>
              <li><a href="#"><span class="label label-warning">8:00 AM</span>How are you?</a></li>
              <li><a href="#"><span class="label label-warning">9:00 AM</span>What are you doing?</a></li>
              <li class="divider"></li>
              <li><a href="#" class="text-center">View All</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-envelope"></span>Inbox <span class="label label-info">32</span>
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
          <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span>Admin <b class="caret"></b></a>
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
  <?php
  $user = $_POST["name0"];
  $email = $_POST["mail0"];
  $phone = $_POST["mobile0"];
  $pass = $_POST["pass"];
  if (!empty($user) || !empty($email) || !empty($phone) || !empty($pass)) {
    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "worldtravel";

    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);


    $encrypted_pass = md5($pass);

    $query = "select * from login WHERE user='" . $user . "'";
    $query_run = mysqli_query($conn, $query);

    if (mysqli_num_rows($query_run) > 0) {
      echo "User already exists.. try another username";
    } else {
      $query = "insert into login values('','$user','$encrypted_pass','$email', '$phone', 'partener')";
      $query_run = mysqli_query($conn, $query);
      if ($query_run) {
        echo  "<p align=center><font color=green><b>Inregistrarea a fost facuta cu succes.</b></font></br> </p> " ;

      } else {
        echo "Error!";
      }
    }
  }


  ?>
  <div align="center">
    <a class="nav-link" href="admin.html">Inapoi</a>
  </div>
</body>

</html>