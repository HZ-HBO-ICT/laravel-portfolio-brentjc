<?php

namespace App\Http\Controllers;

class WelcomeController extends Controller
{
    /**
     * @return
     */
    public function show()
    {
        return view('welcome');
    }
}
