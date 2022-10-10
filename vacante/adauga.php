<!DOCTYPE HTML>  
<html>
 <head>
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
    <title>Inregistrare</title>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link href="css/finalizare.css" rel="stylesheet">
</head>
<body>
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
              <li class="nav-item">
                <a class="nav-link" href="Vacante.html">Vacante</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="Pachete promotionale.html">Pachete Promotionale</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="cautav.html">Cauta vacante</a>
              </li>
              <div class="btn btn-outline-white rounded-circle active">
                <a class="fas fa-shopping-cart" href="Cosul meu.html"></a>
                <span class="sr-only">(current)</span>
            </div>
            </ul>
          </div>
          <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <span class="glyphicon glyphicon-user"></span> 
                    <strong>Profil Client</strong>
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
                                <div class="col-lg-9">
                                  <p class="text-left"><strong>Nume Client</strong></p>
                                  <p class="text-left small">emailClient..@email.com</p>
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
                                        <div class="col-lg-9">
                                            <p>
                                                <a href="../index.html" class="btn btn-danger btn-block">Deconectare</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                </ul>
</nav>
</br>
</br>
</br>
<?php
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone=$_POST["phone"];
    $tara = $_POST["tara"];
    $oras = $_POST["oras"];
    $cerinte=$_POST["cerinte"];
if(!empty($name)|| !empty($email)||!empty($phone)|| !empty($tara) ||!empty($oras)||!empty($cerinte)){
$host="localhost";
$dbUsername="root";
$dbPassword="";
$dbname="worldtravel";

$conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);


if (mysqli_connect_error()) {
  die('Connect error(' .mysqli_connect_error(). ')'.mysqli_connect_error());
}
else {
  $INSERT = "INSERT  Into rezervare_client (name, email,phone, tara,oras, cerinte) values(?, ?, ?, ?,?,?) ";

  $stmt = $conn->prepare($INSERT);
  $stmt->bind_param("sssssi",$name,$email, $phone,$tara,$oras,$cerinte);
  $stmt->execute();
  echo "<p align=center><font color=green><b>Inregistrarea a fost facuta cu succes.</b></font></p></br>" ;

  $stmt->close();
  $conn->close();
}
}

?>
<div>
	<a class="nav-link" href="vacante.html">Inapoi</a>
</div>
  </body>
</html>