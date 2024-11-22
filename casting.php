<?php
class Car {
    public $color;
    public $model;
    public function __construct($color, $model)
    {
        $this->color = $color;
        $this->model = $model;
    }

    public function message(){
        echo "$this->model is $this->color";
    }
}

$myCar = new Car("red", "BMW");
echo $myCar->message(). "<br>";
var_dump($myCar);

echo "<br>";

$myCar = (array) $myCar;
var_dump($myCar);

echo "<br><br>";

$a = array("Volvo", "BMW", "Toyota"); // indexed array
$b = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43"); // associative array
var_dump($a); echo "<br>";
var_dump($b); echo "<br>";

echo "<br><br>";

$a = (object) $a;
$b = (object) $b;
var_dump($a); echo "<br>";
var_dump($b); echo "<br>";
?>