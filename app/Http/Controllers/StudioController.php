<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use LaraFlash;

class StudioController extends Controller
{
    public function index(){
        return redirect()->route('studio.dashboard');
    }

    public function dashboard(){

        LaraFlash::success("Welcome to the Studio!");
            return view('studio.dashboard');
    }
}
