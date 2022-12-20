<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Http;

class StrokeController extends Controller
{
    public function input(){
        return view('stroke/input');
    }
    public function result(Request $request){
        $response = Http::post('https://deep-learning-371908.et.r.appspot.com/stroke', [
            'gender' => 'Male',
            'age' => 81,
            'hypertension' => 0,
            'heart_disease' => 0,
            'ever_married' => "Yes",
            'work_type' => 'Self-employed',
            'Residence_type' => "Urban",
            'avg_glucose_level' => 99.33,
            'bmi' => 33.7,
            'smoking_status' => 'never smoked',
        ]);
        
        return $response;
    }
}