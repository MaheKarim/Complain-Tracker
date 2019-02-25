<?php

namespace App\Http\Controllers;

class ApplicationController extends Controller
{
    public function index()
    {
        return view('v2.back-end.application-form.application-form');
    }
}
