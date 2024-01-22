<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // dd(auth()->user()->getRoleNames());
        // if (auth()->user()->can('view_dashboard')) {
            return view('dashboard');
        // }
        // return abort(403);
    }
}
