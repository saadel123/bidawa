<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class IndexController extends Controller
{
    public function index()
    {
        // if (session()->has('locale')) {
        //     App::setLocale(session()->get('locale'));
        // }
        return view('index');
    }
}
