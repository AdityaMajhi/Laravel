<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function form(Request $request)
    {
        return view('form');
    }
}
