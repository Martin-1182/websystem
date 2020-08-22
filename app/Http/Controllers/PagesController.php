<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home ()
    {
        return view('pages.home');
    }

    public function cookies ()
    {
        return view('pages.cookies');
    }

    public function personal ()
    {
        return view('pages.personal');
    }
}
