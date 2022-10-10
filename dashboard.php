
<?php

require_once("connection.php");

if (!isset($_SESSION["user_id"]) || $_SESSION["user_id"] == "") {

    redirect("login.php");
}

include 'admin/admin.php';



?> 




<?php include 'footer.php'; ?>

