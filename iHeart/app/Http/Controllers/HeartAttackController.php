<?php

namespace App\Http\Controllers;

class HeartAttackController extends Controller
{
    public function input(){
        return view('heart_attack/input');
    }
    public function result(){
        return view('heart_attack/result');
    }
}