<?php
    $cars = array("brand" => "Ford", "model" => "Mustang", "year" => 1964);
    var_dump($cars);

    echo "<br>". $cars["model"];
    echo "<br>". $cars["brand"];

    foreach($cars as $x => $y){
        echo "<br> $x : $y";
    }

    echo "<br>";

    $myArr = [];
    $myArr[0] = "apples";
    $myArr[1] = "bananas";
    $myArr["fruit"] = "cherries";

    var_dump($myArr);

    echo "<br>";

    foreach($cars as $key => $value){
        echo "<p>$key -> $value</p>";
    }

    $fruits = array("vegetable" => "carrot", "forCook" => "potato", "deserts" => "apple");

    var_dump(array_merge($cars, $fruits));
?>