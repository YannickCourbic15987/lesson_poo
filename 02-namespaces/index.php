<?php
require_once './Classe-1/paypal/Payment.php';
require_once './Classe-1/stripe/Payment.php';


// spl_autoload_register(function ($route) {
//     $path = './' . str_replace('\\', '/', $route) . '.php';
//     // var_dump($path);

//     if (file_exists($path)) {
//         require_once $path;
//     }
// });

use Classe_1\paypal\Payment;
use Classe_1\stripe\Payment as PaymentStripe;

$paymentPaypal = new Payment();

$paymentStripe = new PaymentStripe();

var_dump($paymentPaypal, $paymentStripe);
