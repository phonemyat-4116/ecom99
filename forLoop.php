<?php
    $cars = array("Volvo", "BMW", "Toyota");
    var_dump($cars);

    echo "<br>";

    array_push($cars, "Ford");

    foreach($cars as $car){
        echo "$car <br>";
    }
    var_dump($cars);
    
?>