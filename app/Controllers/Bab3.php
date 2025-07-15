<?php

namespace App\Controllers;

class Bab3 extends BaseController
{
    public function index3()
    {
        return view('home3', ['title' => 'Profil Saya']);
    }

    public function skill()
    {
        return view('skill', ['title' => 'Skill & Pengalaman']);
    }
}
