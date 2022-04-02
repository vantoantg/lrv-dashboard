<?php

namespace Toantg\Manage\Controllers;

use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index() {
        echo "Hello Toan";
        echo __FILE__;
        die;
    }
}
