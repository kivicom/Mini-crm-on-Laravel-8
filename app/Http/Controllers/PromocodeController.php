<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PromocodeController extends Controller
{
    public function index()
    {
        return view('frontend.create-promocode.index');
    }
}
