<?php

namespace ActivismeBE\Http\Controllers;

use Illuminate\Http\Request;

class DisclaimerController extends Controller
{
    public function index()
    {
        return view('disclaimer.index');
    }
}