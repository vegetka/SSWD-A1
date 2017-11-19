<?php

class ShowResults{

    // show all results
    function all($data){
        // show title
        echo "Irish Towns";
        // iterate data
        $this->readData($data);
    }

    function name($data){
        // show title
        echo "Irish Towns Sorted By Name";
        // iterate data
        $this->readData($data);
    }

    function est($data){
        // show title
        echo "Irish Towns Sorted By Est. Date";
        // iterate data
        $this->readData($data);
    }

    function readData($data){

        echo "<br>-----------------------------------------";
        echo "<br> Town | Province | Population | Est. <br>";
        echo "-----------------------------------------<br>";

         while($row = mysqli_fetch_array($data)){
            echo $row["name"] . " | " . $row["province"]. " | " . $row["population"] . " | " . $row["established"] . "<br>";
        }
    }

}

?>
