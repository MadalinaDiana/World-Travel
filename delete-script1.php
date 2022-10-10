<?php
include "config.php";
include_once "Commonr.php";
if (isset($_GET['recordId'])){
    $recordId = $_GET['recordId'];
    $commonr = new Commonr();
    $delete = $commonr->deleteRecordById($connection,$recordId);
    if ($delete){
        echo '<script>alert("Record deleted successfully !")</script>';
        echo '<script>window.location.href="rezervari.php";</script>';
    }
}