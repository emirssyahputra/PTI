<?php

namespace App\Controllers;

class Lupa extends BaseController
{
    public function index(): string
    {
        return view('v_lupa');
    }
}
