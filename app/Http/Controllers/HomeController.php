<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Player;
use App\Models\Gallery;
use Mail;
use Alert;
use Validator;

class HomeController extends Controller
{
    public function index() {
        // $players = Player::with('user')->whereIxsCaptain(1)->get();
        $images = Gallery::whereType(0)->get();
        // return view('test', compact('players', 'images'));
        return view('index', compact('images'));
    }

    public function contactUs(Request $request) {

        // $request->validate([
        //     'g-recaptcha-response' => 'required|captcha'
        // ], 
        // [
        //     'g-recaptcha-response.required' => 'Please verify that you are not a robot.'
        // ]);
        
        Mail::to('hello@theplayerscorner.co.uk')->send(new \App\Mail\ContactMail($request->all()));
        Mail::to($request->email)->send(new \App\Mail\ContactReceivedMail());
        
        // Alert::success('Congrats', 'You\'ve Successfully Registered');
        Alert::toast('Email Sent', 'success');
        // return redirect()->back();
        return redirect()->route('after-contact-us');
    }
}
