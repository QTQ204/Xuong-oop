<?php

namespace Quang\Xuongoop\Controllers\Client;

use Quang\Xuongoop\Commons\Controller;

class HomeController extends Controller
{
    public function index(){
       
        $name = "Quang";

        $this->renderVỉewClient('home', [])

    }
}