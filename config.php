<?php
$host="localhost";
$dbUsername="root";
$dbPassword="";
$dbname="worldtravel";

$connection = new mysqli($host, $dbUsername, $dbPassword, $dbname);
if (!$connection) {
    die("Error in database connection". $connection->connect_error);
}
?>