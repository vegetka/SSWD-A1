<?php

class DBController{
    private $query;
    private $connection;

    function __construct($host, $userName, $password, $dbName){
        $this->connection = mysqli_connect($host, $userName, $password, $dbName);
    }

    function getAllRecords(){
        $this->query = "SELECT * FROM towns" or die(mysqli_error($this->connection));

        $result = $this->connection->query($this->query);

        echo "Town | Province | Population | Est. <br>";

        while($row = mysqli_fetch_array($result)){
            echo $row["name"] . " | " . $row["province"]. " | " . $row["population"] . " | " . $row["established"] . "<br>";
        }
    }
}
?>
