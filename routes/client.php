<?php



//Để định nghĩa 

use Quang\Xuongoop\Controllers\Client\AboutController;
use Quang\Xuongoop\Controllers\Client\HomeController;
use Quang\Xuongoop\Controllers\Client\ProductController;
use Quang\Xuongoop\Controllers\Client\ContactController;
use Quang\Xuongoop\Controllers\Client\LoginController;
use Quang\Xuongoop\Controllers\Client\CartController;
use Quang\Xuongoop\Controllers\Client\OrderController;



$router->get( '/',                  HomeController::class       . '@index');
$router->get( '/about',             AboutController::class      . '@index');

$router->get( '/contact',           ContactController::class    . '@index');
$router->post( '/contact/store',    ContactController::class    . '@store');

$router->get( '/products',          ProductController::class    . '@index');
$router->get( '/products/{id}',     ProductController::class    . '@detail');

$router->get( '/login',             LoginController::class    . '@showFormLogin');
$router->post( '/handle-login',     LoginController::class    . '@login');
$router->get( '/logout',            LoginController::class    . '@logout');

$router->get('cart/add',           CartController::class . '@add');
$router->get('cart/quantityInc',   CartController::class . '@quantityInc');
$router->get('cart/quantityDec',   CartController::class . '@quantityDec');
$router->get('cart/remove',        CartController::class . '@remove');
$router->get('cart/detail',        CartController::class . '@detail');

$router->post('order/checkout',    OrderController::class . '@checkout');