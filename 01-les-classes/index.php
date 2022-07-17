<?php

require_once './Classe/Cart.php';
$cart = new Cart(5, 100);
$cart->getQuantity();
$cart->getTotalPrice();
$cart->discount(5);
var_dump($cart);
