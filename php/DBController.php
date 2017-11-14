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

        echo "Irish Towns";

        $this->getResults($result);

    }

    function getNameSorted(){
        $this->query = "SELECT * FROM towns ORDER BY name ASC" or die(mysqli_error($this->connection));

        $result = $this->connection->query($this->query);

        echo "Irish Towns Sorted By Name";

        $this->getResults($result);

    }

    function getEstSorted(){
        $this->query = "SELECT * FROM towns ORDER BY established ASC" or die(mysqli_error($this->connection));

        $result = $this->connection->query($this->query);

        echo "Irish Towns Sorted By Est. Date";

        $this->getResults($result);

    }

    function getJSON(){
        $this->query = "SELECT * FROM towns" or die(mysqli_error($this->connection));

        $result = $this->connection->query($this->query);

    }

    function getResults($result){

        echo "<br>-----------------------------------------";
        echo "<br> Town | Province | Population | Est. <br>";
        echo "-----------------------------------------<br>";

         while($row = mysqli_fetch_array($result)){
            echo $row["name"] . " | " . $row["province"]. " | " . $row["population"] . " | " . $row["established"] . "<br>";
        }
    }
}

?>
