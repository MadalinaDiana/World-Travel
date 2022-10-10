<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sterge clienti</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
        #thead>tr>th{ color: white; }
    </style>
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
					<li class=""><a href="admin/admin.html"><span class="glyphicon glyphicon-home"></span>Dashboard</a></li>
					<li><a href=""><span class="glyphicon glyphicon-calendar"></span>Calendar</a></li>
					<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span
						class="glyphicon glyphicon-list-alt"></span>Informatii <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="admin/conturi.html">Conturi</a></li>
                            <li><a href="admin/noi conturi.html">Noi conturi</a></li>
                            <li><a href="admin/editare.html">Editare</a></li>
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

<div class="container">
    <table class="table">
        <thead id="thead" style="background-color: #26a2af">
        <tr>
            <th>id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Tara</th>
            <th>Oras</th>
            <th>Cerinte</th>
            <th>Action</th>
            <th>Sterge rezervarea</th>
        </tr>
        </thead>
        <tbody>
        <?php
        include "config.php";
        include_once "Commonr.php";
        $commonr = new Commonr();
        $records = $commonr->getAllRecords($connection);
        if ($records->num_rows>0){
            $id = 1;
            while ($record = $records->fetch_object()) {
                $recordId = $record->id;
                $name = $record->name;
                $email = $record->email;
                $phone = $record->phone;
                $tara = $record->tara;
                $oras = $record->oras;
                $cerinte = $record->cerinte;
                ?>
                <tr>
                    <th><?php echo $id;?></th>
                    <th><?php echo $name;?></th>
                    <th><?php echo $email;?></th>
                    <th><?php echo $phone;?></th>
                    <th><?php echo $tara;?></th>
                    <th><?php echo $oras;?></th>
                    <th><?php echo $cerinte;?></th>
                    <td><input type="checkbox" name="KeyToDelete" value=" <?php echo $row['id'];?>"></td>
                    <td><a href="delete-script1.php?recordId=<?php echo $recordId?>" class="btn btn-danger btn-sm">Delete</a> </td>
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
	<a class="nav-link" href="admin/admin.html">Inapoi</a>
</div>
</body>