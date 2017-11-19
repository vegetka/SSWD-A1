<?php

class DBView{

    // show results
    function show($type, $data){
        switch($type){
            case 1:
                // show title
                echo "Irish Towns";
                break;
            case 2:
                // show title
                echo "Irish Towns Sorted By Name";
                break;
            case 3:
                // show title
                echo "Irish Towns Sorted By Est. Date";
                break;
        }

        // if it's db read
        if($type <= 3){
            // iterate data
            $this->readData($data);
        }

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
