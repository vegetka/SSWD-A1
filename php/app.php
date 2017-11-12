<?php
    // imports
    include('DBController.php');
    l("debug test");

    // Database parameters and object
    $host     = "localhost";
    $userName = "root";
    $password = ""; // to change
    $dbName   = "sswda1";

    $database = new DBController($host, $userName, $password, $dbName);

    $database->getAllRecords();


    // debugger
    function l($s){
        echo "<script>console.log('" . $s . "')</script>";
    }

?>
