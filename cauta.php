
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Partener</title>

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://unpkg.com/gijgo@1.9.11/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.11/css/gijgo.min.css" rel="stylesheet" type="text/css" />
</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">World Travel</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <span class="glyphicon glyphicon-user"></span> 
                        <strong>Profil Partener</strong>
                        <span class="glyphicon glyphicon-chevron-down"></span>
                    </a>

                    <ul class="dropdown-menu">
                        <li>
                            <div class="navbar-login">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <p class="text-center">
                                            <span class="glyphicon glyphicon-user icon-size"></span>
                                        </p>
                                    </div>
                                    <div class="col-lg-10">
                                        <p class="text-left"><strong>Nume Partener</strong></p>
                                        <p class="text-left small">emailPartener..@email.com</p>
                                        <p class="text-left">
                                            <a href="#" class="btn btn-primary btn-block btn-sm">Actualizare profil</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <div class="navbar-login navbar-login-session">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <p>
                                            <a href="index.html" class="btn btn-danger btn-block">Deconectare</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </li>
              </ul>
        </div>

    </nav>

</br>
</br>
</br>
<div align="center">
<caption><h2><font color="red"><ins><i>Cautare client</i></ins></font></h2></caption>
</div>
<table border="1" cellpadding="2" align="center">
<tr style="background-color:#32A9EE;color:white;">
<td><b><font face="Arial, Helvetica, sans-serif">Id</font></b></td>
<td><b><font face="Arial, Helvetica, sans-serif">Nume</font></b></td>
<td><b><font face="Arial, Helvetica, sans-serif">Email</font></b></td>
<td><b><font face="Arial, Helvetica, sans-serif">Mobil</font></b></td>

<?php

$db=mysqli_connect("localhost","root","");
mysqli_select_db($db,"worldtravel");

  if (empty($_POST["user"])) {
    $nameErr = "Este necesar sa introduceti numele.";
    echo $nameErr;
  } else {
    $user = $_POST["user"];
    
$sql="SELECT * FROM login where user='$user' "; 
$result= mysqli_query($db,$sql);
if (!$result)
 die('Invalid querry:' .mysqli_error($db));
 else 
 { 
     while ($myrow=mysqli_fetch_array($result,MYSQLI_ASSOC))
     {echo "<tr><td>";
     echo $myrow["id"];
      echo "</td><td>";
      echo $myrow["user"];
      echo "</td><td>";
      echo $myrow["email"];
      echo "</td><td>";
      echo $myrow["phone"];
      echo "</td></tr>"; }
  echo "</table>";
 }
}
?>
<div>
	<a class="nav-link" href="partener.html">Inapoi</a>
</div>

<script src="js/vendor/jquery.js"></script>
    <script src="js/vendor/what-input.js"></script>
    <script src="js/vendor/foundation.js"></script>
    <script src="js/app.js"></script>
  </body>
</html>