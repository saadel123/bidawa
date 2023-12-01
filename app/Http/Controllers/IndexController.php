<?php

namespace App\Http\Controllers;

use App\Models\Slide;

class IndexController extends Controller
{
    public function index()
    {

        return view('index',['slides'=>Slide::all()]);
    }
}
