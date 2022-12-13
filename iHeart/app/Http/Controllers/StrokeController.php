<?php

namespace App\Http\Controllers;

class StrokeController extends Controller
{
    public function input(){
        return view('stroke/input');
    }
    public function result(){
        return view('stroke/result');
    }
}