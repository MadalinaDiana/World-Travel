<?php
class Commonr
{
    public function getAllRecords($connection) {
        $query = "SELECT * FROM rezervare_client";
        $result = $connection->query($query) or die("Error in query1".$connection->error);
        return $result;
    }

    public function deleteRecordById($connection,$recordId) {
        $query = "DELETE FROM rezervare_client WHERE id='$recordId'";
        $result = $connection->query($query) or die("Error in query2".$connection->error);
        return $result;
    }
}