<?php
    private $query;
    private $connection;

    function __construct($host, $userName, $password, $dbName){
        $this->connection = mysqli_connect($host, $userName, $password, $dbName);
    }

    function getAllRecords(){
        $this->query = "SELECT * FROM correct_guesses" or die(mysqli_error($this->myConnection));

        $result = $this->myConnection->query($this->query);

        while($row = mysqli_fetch_array($result)){
            echo $row["user_id"]." | ".$row["answer"]." | ".$row["guessed_on"]."<br>";
        }
    }
?>
