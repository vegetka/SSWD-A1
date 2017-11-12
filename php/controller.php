<?php

    echo "test";


    l("omgtest");

// debugger
function l($s){
    echo "<script>console.log('" . $s . "')</script>";
}

?>
