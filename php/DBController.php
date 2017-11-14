<?php

class DBController{
    private $query;
    private $connection;

    // class constructor
    function __construct($host, $userName, $password, $dbName){
        // make a database connection using provided details
        $this->connection = mysqli_connect($host, $userName, $password, $dbName);
    }

    function getAllRecords(){
        // create query
        $this->query = "SELECT * FROM towns" or die(mysqli_error($this->connection));
        // post query, receive result
        $result = $this->connection->query($this->query);
        // show title
        echo "Irish Towns";
        // generate 'table'
        $this->getResults($result);

    }

    function getNameSorted(){
        // create query
        $this->query = "SELECT * FROM towns ORDER BY name ASC" or die(mysqli_error($this->connection));
        // post query, receive result
        $result = $this->connection->query($this->query);
        // show title
        echo "Irish Towns Sorted By Name";
        // generate 'table'
        $this->getResults($result);

    }

    function getEstSorted(){
        // create query
        $this->query = "SELECT * FROM towns ORDER BY established ASC" or die(mysqli_error($this->connection));
        // post query, receive result
        $result = $this->connection->query($this->query);
        // show title
        echo "Irish Towns Sorted By Est. Date";
        // generate 'table'
        $this->getResults($result);

    }

    function getJSON(){
        // create query
        $this->query = "SELECT * FROM towns" or die(mysqli_error($this->connection));
        // post query, receive result
        $result = $this->connection->query($this->query);
        // Working variable
        $json = "";


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
