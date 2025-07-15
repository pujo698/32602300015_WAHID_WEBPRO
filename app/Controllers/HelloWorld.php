<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class HelloWorld extends BaseController
{
    public function halodunia()
    {
        return "<h1> HelloWorld <h1>";
    }

        public function index()
    {
        return view('halloworld');
    }

}
