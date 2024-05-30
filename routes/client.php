<?php



//Để định nghĩa 

use Quang\Xuongoop\Controllers\Client\AboutController;
use Quang\Xuongoop\Controllers\Client\HomeController;
use Quang\Xuongoop\Controllers\Client\ProductController;
use Quang\Xuongoop\Controllers\Client\ContactController;



$router->get('/'     ,           HomeController::class       . '@index');
$router->get('/about',           AboutController::class      . '@index');

$router->get('/contact',         ContactController::class    .'@index');
$router->get('/contact/store',   ContactController::class    .'@store');

$router->get('/product',         ProductController::class    .'@index');
$router->get('/product/{id}',    ProductController::class    .'@detail');