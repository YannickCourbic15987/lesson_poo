<?php

use Classe\OfficeReservation;

require '../class/OfficeReservation.php';


$office = new OfficeReservation('réservation pour le moi de janvier');
$office = new OfficeReservation('réservation pour le moi de janvier');


var_dump($office::$count);
