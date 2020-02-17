<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountabilityController extends Controller
{
  public function index()
  {
      return view('accountability.add');
  }
}
