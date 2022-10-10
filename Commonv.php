<?php
class Commonv
{
    public function getAllRecords($connection) {
        $query = "SELECT * FROM vacante_stoc";
        $result = $connection->query($query) or die("Error in query1".$connection->error);
        return $result;
    }

    public function deleteRecordById($connection,$recordId) {
        $query = "DELETE FROM vacante_stoc WHERE id='$recordId'";
        $result = $connection->query($query) or die("Error in query2".$connection->error);
        return $result;
    }
}