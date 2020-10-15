<?php

require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Truck.php';
require_once 'Vehicle.php';

?>
    <br>
    <br>
    <br>
<?php


$iveco = new Truck('white', 3, 'fuel', 2200);
$renaultruck = new Truck('blue', 5, 'gasoline', 2400);
$man = new Truck('black', 3, 'gasoline', 30450);

var_dump($iveco);
var_dump($renaultruck);
var_dump($man);

$iveco -> setLoading(360);
$renaultruck -> setLoading(2400);
$man -> setLoading(5300);

echo $iveco -> start();
echo $iveco -> forward();
echo $iveco -> brake();
echo $iveco -> isFull();

echo $renaultruck -> start();
echo $renaultruck -> forward();
echo $renaultruck -> brake();
echo $renaultruck -> isFull();

echo $man -> start();
echo $man -> forward();
echo $man -> brake();
echo $man -> isFull();



