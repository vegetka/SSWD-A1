<?php

    // imports
    include('DBView.php');

class DBController{

    // variables
    private $query;
    private $connection;
    private $result;
    // failed on enum :/
    private $all  = 1;
    private $name = 2;
    private $est  = 3;
    private $json = 4;
    private $down = 5;

    // class constructor
    function __construct($host, $userName, $password, $dbName){
        // make a database connection using provided details
        $this->connection = mysqli_connect($host, $userName, $password, $dbName);
        // create Results Viewer object
        $this->result = new DBView();
    }

    // get all records from database and display them
    function getAllRecords(){
        // create query
        $this->query = "SELECT * FROM towns" or die(mysqli_error($this->connection));
        // post query, receive result
        $data = $this->connection->query($this->query);
        // generate 'table'
        $this->result->show($this->all, $data);
    }

    // get all records from database and display them sorted by name
    function getNameSorted(){
        // create query
        $this->query = "SELECT * FROM towns ORDER BY name ASC" or die(mysqli_error($this->connection));
        // post query, receive result
        $data = $this->connection->query($this->query);
        // generate 'table'
        $this->result->show($this->name, $data);
    }

    // get all records from database and display them sorted by establish date
    function getEstSorted(){
        // create query
        $this->query = "SELECT * FROM towns ORDER BY established ASC" or die(mysqli_error($this->connection));
        // post query, receive result
        $data = $this->connection->query($this->query);
        // generate 'table'
        $this->result->show($this->est, $data);
    }

    // get all records from database and display them as JSON
    function getJSON(){
        // create query
        $this->query = "SELECT * FROM towns" or die(mysqli_error($this->connection));
        // post query, receive result
        $data = $this->connection->query($this->query);
        // generate JSON
        $this->result->show($this->json, $data);
    }

    // get all records from database, make JSON and download as a file
    function downloadJSON(){
        // create query
        $this->query = "SELECT * FROM towns" or die(mysqli_error($this->connection));
        // post query, receive result
        $result = $this->connection->query($this->query);
        // generate JSON
        $this->result->show($this->down, $data);
    }
}

?>
