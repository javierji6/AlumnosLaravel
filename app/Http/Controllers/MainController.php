<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index() {
        $num = rand(1, 100);
        $nombre = "Javi";
        return view('index',compact('num', 'nombre'));
    }
    //
}
