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
        // check if there was post
        if (!$request->isMethod('post')) {
            return redirect()->route('main_index');
        }

        // validation
        $request->validate(
            [
                'text_from' => 'required|email|max:50',
                'text_to'  => 'required|email|max:50',
                'text_message' => 'required|max:250'
            ],
            [
                'text_from.required' => 'From is required',
                'text_from.email' => 'From must be a valid email',
                'text_from.max' => 'From must have less than 50 chars',
                'text_to.required' => 'To is required',
                'text_to.email' => 'To must be valid email',
                'text_to.max' => 'To must have less than 50 chars',
                'text_message.required' => 'Message is required',
                'text_message.max' => 'Message must have less than 250 chars'
            ]
        );
    }

    // =====================================================
    // public function confirm($purl)
    // {
    // }

    // // =====================================================
    // public function read($purl)
    // {
    // }
}
