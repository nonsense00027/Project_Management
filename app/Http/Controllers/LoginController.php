<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    //
    public function index()
    {
        $departments = \App\Department::all();
        return view('login', compact('departments'));
    }
}
