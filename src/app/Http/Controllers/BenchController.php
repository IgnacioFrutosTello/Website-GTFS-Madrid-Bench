<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BenchController extends Controller
{
    public function gtfsModel(){
        return view ('gtfsmodel');
    }

    public function tripleMaps(){
        return view ('mapping');
    }

    public function querysInfo(){
        return view ('querys');
    }

    public function benchInfo(){
        return view ('benchmark');
    }

    public function keyWords(){
        return view ('keywords');
    }

    public function dataSet(){
        return view ('datasets'); 
    }

    public function metrics(){
        return view ('metrics'); 
    }
    
    public function setup(){
        return view ('setup'); 
    }
    
    public function evaluation(){
        return view ('evaluation'); 
    } 

    public function conclusions(){
        return view ('conclusions'); 
    } 

    public function relatedWork(){
        return view ('relatedWork'); 
    } 
    
    public function analysis(){
        return view ('analysis'); 
    } 
}
