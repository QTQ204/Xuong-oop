<?php

namespace Quang\Xuongoop\Controllers\Admin;

use Quang\Xuongoop\Commons\Controller;
use Quang\Xuongoop\Commons\Helper;

class DashboardController extends Controller
{
    public function dashboard() {        
        $this->renderViewAdmin(__FUNCTION__);
    }
}