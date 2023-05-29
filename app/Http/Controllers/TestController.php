<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function test(){
        $data=[
            "course1"=>"php",
            "course2"=>"Laravel",
        ];
        return view("test",$data);
    }
    
}
