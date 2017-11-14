<?php

    $getTest = $_GET["getThis"];

    $s = "something else";
    $s = strtoupper($s);
    if($getTest == "\"omg\""){
        echo strtoupper($getTest);
    }else{
        echo $s . $getTest;
    }

?>
