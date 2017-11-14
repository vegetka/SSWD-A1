<?php
    // imports
    include('DBController.php');

    l("debug test");

    // Database parameters and object
    $host     = "localhost";
    $userName = "root";
    $password = ""; // to change
    $dbName   = "sswda1";
    // connect to a database
    $database = new DBController($host, $userName, $password, $dbName);
    // use a database
    $database->getAllRecords();

    // debugger
    function l($s){echo "<script>console.log('" . $s . "')</script>";}

     $getTest = $_GET["getThis"];

    $s = "something else";
    $s = strtoupper($s);
    if($getTest == "\"omg\""){
        echo strtoupper($getTest);
    }else{
        echo $s . $getTest;
    }

?>
