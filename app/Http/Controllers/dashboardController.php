<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dashboardController extends Controller
{
    public function index(){
        return view('backend.content.dashboard');
    }

    public function profile(){
        return view('backend.content.profile');

    }
}
