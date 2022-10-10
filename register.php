<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "worldtravel";

$conn = mysqli_connect($host, $user, $password);
mysqli_select_db($conn, $db);

if (isset($_POST['username']) and isset($_POST['email']) and isset($_POST['phone'])){
    $uname = $_POST['username'];
    $password = $_POST['password'];
    $password2 = $_POST['password_2'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    if ($password == $password2){
        $encrypted_pass = md5($password);

        $query= "select * from login WHERE user='".$uname."'";
        $query_run = mysqli_query($conn, $query);
        
        if(mysqli_num_rows($query_run) > 0){
			echo "<p align=center><font color=red><b>Ups acest user exista deja.. incearca un alt user</b></font></p>";
	    }
		else{
		    $query= "insert into login values('','$uname','$encrypted_pass','$email', '$phone', 'client')";
			$query_run = mysqli_query($conn, $query);			
			if($query_run){
				echo "<p align=center><font color=green><b>Inregistrarea a fost facuta.. Conecteaza-te prin login</b></font></p>";
			}
			else{
			    echo "Error!";
			}
		}
    }
    else{
        echo "<h2 align=center><font color=red><b>Parola si parola de confirmare nu se potrivesc!</b></font></h2>";
    }
}
?>
<div>
	<a class="nav-link" href="login.php">Inapoi</a>
</div>