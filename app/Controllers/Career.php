<?php

namespace App\Controllers;

class Career extends BaseController
{
    public function index(): string
    {
        return view('v_career');
    }
}
