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


    // debugger
    function l($s){echo "<script>console.log('" . $s . "')</script>";}

    $getTest = $_GET["towns"];

    if($getTest == "\"all\""){
        echo $database->getAllRecords();
    }else{
        echo $getTest;
    }

?>
