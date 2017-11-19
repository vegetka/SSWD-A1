<?php

    // imports
    include('DBView.php');

class DBController{

    // variables
    private $query;
    private $connection;
    private $result;

    // class constructor
    function __construct($host, $userName, $password, $dbName){
        // make a database connection using provided details
        $this->connection = mysqli_connect($host, $userName, $password, $dbName);
        // create Results object
        $this->result = new DBView();
    }

    function getAllRecords(){
        // create query
        $this->query = "SELECT * FROM towns" or die(mysqli_error($this->connection));
        // post query, receive result
        $data = $this->connection->query($this->query);
        // generate 'table'
        $this->result->all($data);
    }

    function getNameSorted(){
        // create query
        $this->query = "SELECT * FROM towns ORDER BY name ASC" or die(mysqli_error($this->connection));
        // post query, receive result
        $data = $this->connection->query($this->query);
        // generate 'table'
        $this->result->name($data);
    }

    function getEstSorted(){
        // create query
        $this->query = "SELECT * FROM towns ORDER BY established ASC" or die(mysqli_error($this->connection));
        // post query, receive result
        $data = $this->connection->query($this->query);
        // generate 'table'
        $this->result->est($data);
    }

    function getJSON(){
        // create query
        $this->query = "SELECT * FROM towns" or die(mysqli_error($this->connection));
        // post query, receive result
        $result = $this->connection->query($this->query);
        // Working variable
        $json = array();
        // build JSON
        while($row = mysqli_fetch_array($result)){
            $json[] = array("name"        => $row["name"],
                            "province"    => $row["province"],
                            "population"  => $row["population"],
                            "established" => $row["established"]
                           );
        }

        // show JSON
        echo json_encode($json);


    }

    function downloadJSON(){
        // create query
        $this->query = "SELECT * FROM towns" or die(mysqli_error($this->connection));
        // post query, receive result
        $result = $this->connection->query($this->query);
        // Working variable
        $json = array();
        // build JSON
        while($row = mysqli_fetch_array($result)){
            $json[] = array("name"        => $row["name"],
                            "province"    => $row["province"],
                            "population"  => $row["population"],
                            "established" => $row["established"]
                           );
        }

        //prepare JSON do download
        header('Content-disposition: attachment; filename=file.json');
        header('Content-type: application/json');
        echo json_encode($json);

    }
}

?>
