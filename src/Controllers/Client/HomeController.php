<?php

namespace Quang\Xuongoop\Controllers\Client;

use Quang\Xuongoop\Commons\Controller;
use Quang\Xuongoop\Commons\Helper;
use Quang\Xuongoop\Models\Product;


class HomeController extends Controller
{
    private Product $product;

    public function __construct()
    {
        $this->product = new Product();
    }

    public function index() {
        $name = 'DucTV44';

        $products = $this->product->all();

        $this->renderViewClient('home', [
                
            'name' => $name,
            'products' => $products
        ]);
    }
}