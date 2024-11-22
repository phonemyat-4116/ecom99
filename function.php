<?php
    function myMessage(){
        echo "<p>Hello PHP function</p>";
    }
    myMessage();

    function setName($name){
        echo "<p> Name is $name</p>";
    }
    setName("Kelvin");

    function greet($greeting =  "こんにちは"){
        return $greeting;
    }
    echo greet();

    function add_five(&$value){
        return $value += 5;
    }

    $num = 3;
    add_five($num);
    echo "<p>$num</p>"
?>