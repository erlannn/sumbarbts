<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class daerahController extends Controller
{
    public function index(){
        return view('pages.daerah');
    }
}
