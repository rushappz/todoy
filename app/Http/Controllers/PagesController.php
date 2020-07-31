<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
        $title = 'Welcome to todoy!';
        return view('pages.index')->with('title', $title);
    }
}
