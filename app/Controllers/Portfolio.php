<?php

namespace App\Controllers;

class Portfolio extends BaseController
{
    public function home()
    {
        return view('Home');
    }

    public function projects()
    {
        return view('Projects');
    }

    public function contact()
    {
        return view('Contact');
    }
}
