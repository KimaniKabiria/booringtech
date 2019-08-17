<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudioController extends Controller
{
    public function index(){
        return redirect()->route('studio.dashboard');
    }

    public function dashboard(){
        return view('studio.dashboard');
    }
}
