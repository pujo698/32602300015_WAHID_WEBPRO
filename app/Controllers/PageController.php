<?php

namespace App\Controllers;

class PageController extends BaseController
{
    public function profilku()
    {
        return view('pages/profilku');
    }

    public function skill()
    {
        return view('pages/skill');
    }
}
