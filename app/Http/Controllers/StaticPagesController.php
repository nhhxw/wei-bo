<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPagesController extends Controller
{
    public function home(Request $request)
    {
        return view('static_pages.home');
    }

    public function help(Request $request)
    {
        return view('static_pages.help');
    }

    public function about(Request $request)
    {
        return view('static_pages.about');
    }
}
