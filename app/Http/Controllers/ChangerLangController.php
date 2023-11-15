<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Http\RedirectResponse;
class ChangerLangController extends Controller
{
    public function index()
    {
        App::setLocale('ar');
        session()->put('locale', 'ar');
        return redirect('/');
    }

    public function lang_change(Request $request): RedirectResponse
    {
        App::setLocale($request->lang);
        session()->put('locale', $request->lang);
        return redirect()->back();
    }
}
