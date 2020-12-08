<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Main extends Controller
{
    // =====================================================
    public function index()
    {
        return view('message_form');
    }

    // =====================================================
    public function init(Request $request)
    {
    }

    // =====================================================
    public function confirm($purl)
    {
    }

    // =====================================================
    public function read($purl)
    {
    }
}
