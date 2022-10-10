<?php
include 'connection.php';

if (isset($_SESSION["user_id"]) && $_SESSION["user_id"] != "") {

	redirect("dashboard.php");
}

if (isset($_POST['username'])) {
	$uname = $_POST['username'];
	$password = $_POST['password'];
	$encrypted_pass = md5($password);
	if ($uname == "" || $encrypted_pass == "") {
		die('Invalid querry:' . mysqli_error($db));
		echo "ceva nu merge bine";
	} else {
		$sql = "SELECT * FROM login WHERE user= '$uname' AND pass = '" . $encrypted_pass . "' limit 1 ";
		$results = mysqli_query($db, $sql);
		if (!$results)
			die('Invalid querry:' . mysqli_error($db));
		else {

			$sql2 = mysqli_query($db, "SELECT login.id, login.user, user_types.redirect, dash_text.content_text, dash_text.titlu FROM login LEFT JOIN dash_text  ON login.type = dash_text.user_type_id LEFT JOIN user_types ON login.type= user_types.Id WHERE login.user = '$uname' AND login.pass = '$encrypted_pass'");
			if (!$sql2) {
				die('Invalid querry:' . mysqli_error($db));
				exit;
			}
			$myrow1 = mysqli_fetch_array($sql2, MYSQLI_ASSOC);
			$rows = mysqli_num_rows($sql2);

			if ($rows > 0) {
				$_SESSION["user_id"] = $myrow1["id"];
				$_SESSION["username"] = $myrow1["user"];
				$_SESSION["titlu"] = $myrow1["titlu"];
				$_SESSION["continut"] = $myrow1["content_text"];

				redirect($myrow1["redirect"]);
				exit;
			}
		}
	}
}

?>