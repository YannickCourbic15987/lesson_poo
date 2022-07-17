<?php
require '../vendor/autoload.php';

use App\Admin;
use App\Users;




// spl_autoload_register(function ($route) {
//     $path = '../' . str_replace('\\', '/', $route) . '.php';
//     if (file_exists($path)) {
//         require $path;
//     }
// });

// var_dump(str_replace('\\', '/', __DIR__) . "<br>");
// var_dump(dirname(__DIR__));

// spl_autoload_register(function ($class) {
//     $path =  str_replace('\\', '/', dirname(__DIR__)) . "/admin/" . $class . '.php';
//     // var_dump($path);
//     if (file_exists($path)) {
//         require $path;
//     }
// });

// use Class\add\Admin;
// use Class\utils\Users;

$username = new Users('yannick');
var_dump($username);
$admin = new Admin(20);
var_dump($admin);
