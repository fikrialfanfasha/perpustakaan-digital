<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;

class AwalController extends Controller
{
    public function index()
    {
        $buku = Buku::all();
        return view('welcome', ['buku'=> $buku]);
    }
}
