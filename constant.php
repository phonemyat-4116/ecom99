<?php
define("NAME", "Kelvin");
echo NAME . "<br>";

const MYCAR = "Suzuki";
echo MYCAR . "<br>";

# Constant Array
define("CARS", [
    "Toyota",
    "BMW",
    "Lambo"
]);
var_dump(CARS);

echo "<br>";

echo __FILE__;
?>