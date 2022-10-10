<?php
class Common
{
    public function getAllRecords($connection) {
        $query = "SELECT * FROM login WHERE type LIKE 'client' ";
        $result = $connection->query($query) or die("Error in query1".$connection->error);
        return $result;
    }

    public function deleteRecordById($connection,$recordId) {
        $query = "DELETE FROM login WHERE type LIKE 'client' and id='$recordId'";
        $result = $connection->query($query) or die("Error in query2".$connection->error);
        return $result;
    }
}