<?php

namespace App\Http\Controllers;

class GameController extends Controller
{
    public function lifeGame()
    {
        return view('lifegame');
    }
    public function countdown()
    {
        return view('countdown');
    }
}