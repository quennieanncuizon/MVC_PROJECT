<?php

namespace App\Http\Controllers;

use App\Models\Agent;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index(){
        return view('home.index',['agent' => Agent::all()]);
    }
}
