<?php

namespace Quang\Xuongoop\Controllers\Client;

use Quang\Xuongoop\Commons\Controller;


class HomeController extends Controller
{
    public function index() {
        

        $name = 'DucTV44';

        $this->renderViewClient('home', [
            'name' => $name
        ]);
    }
}