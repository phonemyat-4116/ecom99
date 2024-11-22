<?php
    require_once("dbConnection.php");

    $host = "localhost:8080";
    $dbname = "db99";

    $connect = new Database($host, $dbname);
    $connect->getConnection();
?>