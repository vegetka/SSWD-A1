<?php
    // imports
    include('DBController.php');

    l("app start");
    // Database parameters and object
    $host     = "localhost";
    $userName = "root";
    $password = ""; // to change
    $dbName   = "sswda1";

    // Create database object
    $database = new DBController($host, $userName, $password, $dbName);

    // working variable
    $get = "";
    // check if any parameter is set
    if(isset($_GET["towns"])){
        // if yes, use it
        $get = $_GET["towns"];
    }

    // check parameter options
    if($get == "\"all\""){
        echo $database->getAllRecords();
    }else if($get == "\"name\""){
        echo $database->getNameSorted();
    }else if($get == "\"est\""){
        echo $database->getEstSorted();
    }else if($get == "\"json\""){
        echo $database->getJSON();
    }else if($get == "\"download\""){
        echo $database->downloadJSON();
    }else{
        // if none parameter valid, show welcome screen
        welcome();
    }


    // Welcome page
    function welcome(){
        echo "<h1>SSWD Assessment 1</h1>";
        echo "<h3>Author: Arkadiusz Maciak</h3>";
        echo "<br>";
        echo "Provided database: 11 Irish Towns with some stats";
        echo "<br><br>";
        echo "<a href='http://localhost/sswda1/php/app.php?towns=%22json%22'>Show JSON</a>";
        echo "<br>";
        echo "<a href='http://localhost/sswda1/php/app.php?towns=%22download%22'>Download JSON</a>";
        echo "<br><br>";
        echo "<a href='http://localhost/sswda1/php/app.php?towns=%22all%22'>All Database Records</a>";
        echo "<br>";
        echo "<a href='http://localhost/sswda1/php/app.php?towns=%22name%22'>Records Sorted by Name</a>";
        echo "<br>";
        echo "<a href='http://localhost/sswda1/php/app.php?towns=%22est%22'>Records Sorted by Est</a>";
        echo "<br><br>";
    }


    // debugger
    function l($s){echo "<script>console.log('" . $s . "')</script>";}

?>
