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
            <a class="navbar-brand" href="partener.html">Acasa</a>
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
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet"
        integrity="#" crossorigin="anonymous">

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 ">
                <div class="list-group ">
                    <a href="#" class="list-group-item list-group-item-action active">Dashboard</a>
                    <a href="postari.php" class="list-group-item list-group-item-action">Vacante Publicate</a>
                    <a href="creeare.html" class="list-group-item list-group-item-action">Creeare Calatorie</a>
                    <a href="raport.html" class="list-group-item list-group-item-action">Raport vanzari</a>
                </div>
            </div>
<div class="container">
    <table class="table">
        <thead id="thead" style="background-color: #26a2af">
        <tr>
            <th>id</th>
            <th>Nume</th>
            <th>Locatie</th>
            <th>Action</th>
            <th>Stergere Vacanta</th>
        </tr>
        </thead>
        <tbody>
        <?php
        include "config.php";
        include_once "Commonv.php";
        $commonv = new Commonv();
        $records = $commonv->getAllRecords($connection);
        if ($records->num_rows>0){
            $id = 1;
            while ($record = $records->fetch_object()) {
                $recordId = $record->id;
                $nume = $record->nume;
                $locatie = $record->locatie;
                ?>
                <tr>
                    <th><?php echo $id;?></th>
                    <th><?php echo $nume;?></th>
                    <th><?php echo $locatie;?></th>
                    <td><input type="checkbox" name="KeyToDelete" value=" <?php echo $row['id'];?>"></td>
                    <td><a href="delete-script.php?recordId=<?php echo $recordId?>" class="btn btn-danger btn-sm">Delete</a> </td>
                </tr>
                <td>
                <?php
                $id++;
            }
        }
        ?>
        </tbody>
    </table>
</div>
<div>
	<a class="nav-link" href="partener.php">Inapoi</a>
</div>
</body>