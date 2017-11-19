<?php

class DBView{

    // check given option
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
            case 4:
                $this->makeJSON(0, $data);
                break;
            case 5:
                $this->makeJSON(1, $data);
                break;
        }

        // if it's db read
        if($type <= 3){
            // iterate data
            $this->readData($data);
        }

    }
    // show 'table'
    function readData($data){
        // tables header
        echo "<br>-----------------------------------------";
        echo "<br> Town | Province | Population | Est. <br>";
        echo "-----------------------------------------<br>";
        // itrate data, make and show results
        while($row = mysqli_fetch_array($data)){
            echo $row["name"] . " | " . $row["province"]. " | " . $row["population"] . " | " . $row["established"] . "<br>";
        }
    }
    // make JSON from database fields
    function makeJSON($type, $data){
        // Working variable
        $json = array();
        // build JSON
        while($row = mysqli_fetch_array($data)){
            $json[] = array("name"        => $row["name"],
                            "province"    => $row["province"],
                            "population"  => $row["population"],
                            "established" => $row["established"]
                           );
        }

        // if JSON has to be downloaded
        if($type == 1){
            //prepare JSON do download
            header('Content-disposition: attachment; filename=top Irish towns.json');
            header('Content-type: application/json');
        }

        // show  / download JSON
        echo json_encode($json);
    }

}

?>
