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

    $get = $_GET["towns"];

    if($get == "\"all\""){
        echo $database->getAllRecords();
    }else if($get == "\"name\""){
        echo $database->getNameSorted();
    }else if($get == "\"est\""){
        echo $database->getEstSorted();
    }else{
        return "wtf";
        //echo "No such thing";
    }

?>
