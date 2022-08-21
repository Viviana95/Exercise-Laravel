<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExampleController extends Controller
{
    public function index(){
        $id = "Hola";
        return view('example', ['id'=>$id]);
    
       }
}
