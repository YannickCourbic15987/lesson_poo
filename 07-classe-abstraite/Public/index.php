<?php

use Classe\Peugeot;


require '../vendor/autoload.php';


$peugeot = new Peugeot('peugeot');

echo $peugeot->rouler() . '<br>';
echo $peugeot->marque();
