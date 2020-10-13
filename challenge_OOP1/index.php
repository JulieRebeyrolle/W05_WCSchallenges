<?php

require_once 'Bicycle.php';
require_once 'Car.php';

$bike = new Bicycle();


echo $bike->forward();
?><br><?='Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h';
?><br><?=$bike->brake();
?><br><?='Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h';
?><br><?=$bike->brake();

?>
<br>
<br>
<br>
<?php

$twingo = new Car('blue', 4,  'gasoline');
$tesla = new Car('white', 6, 'electric');

echo $tesla->start();
?><br><?='Vitesse de la voiture : ' . $tesla->getCurrentSpeed() . ' km/h';
?><br><?=$tesla->forward();
?><br><?='Vitesse de la voiture : ' . $tesla->getCurrentSpeed() . ' km/h';
?><br><?=$tesla->brake();
?><br><?='Vitesse de la voiture : ' . $tesla->getCurrentSpeed() . ' km/h';
?><br><?=$tesla->brake();

?>
<br>
<br>
<br>
<?php

echo $twingo->start();
?><br><?='Vitesse de la voiture : ' . $twingo->getCurrentSpeed() . ' km/h';
?><br><?='Vitesse de la voiture : ' . $tesla->getCurrentSpeed() . ' km/h';
?><br><?=$tesla->forward();
?><br><?=$twingo->brake();
?><br><?='Vitesse de la voiture : ' . $twingo->getCurrentSpeed() . ' km/h';
?><br><?=$twingo->brake();

