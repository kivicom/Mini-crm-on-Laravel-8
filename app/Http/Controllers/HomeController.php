<?php

namespace App\Http\Controllers;

use App\Models\Appeal;
use App\Models\User;

class HomeController extends Controller
{

    public function index()
    {
        return view('frontend.index');
    }

}
