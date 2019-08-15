<?php

namespace App\Http\Controllers\Boss;

use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    public function index()
    {
        return view('Boss/login');
    }
}