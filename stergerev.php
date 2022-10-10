<?php
include "config1.php";
include_once "Commonv.php";
if (isset($_GET['recordId'])){
    $recordId = $_GET['recordId'];
    $commonv = new Commonv();
    $delete = $common->deleteRecordById($connection,$recordId);
    if ($delete){
        echo '<script>alert("Record deleted successfully !")</script>';
        echo '<script>window.location.href="postari.php";</script>';
    }
}
?>