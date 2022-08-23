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
        $players = Player::with('user')->whereIsCaptain(1)->get();
        $images = Gallery::whereType(0)->get();
        return view('index', compact('players', 'images'));
    }

    public function contactUs (Request $request) {

        $validate = Validator::make($request->all(), [
            'g-recaptcha-response' => 'required|captcha'
        ]);
        
        Mail::to('0066.navi@gmail.com')->send(new \App\Mail\ContactMail($request->all()));
        Mail::to($request->email)->send(new \App\Mail\ContactReceivedMail());
        
        // Alert::success('Congrats', 'You\'ve Successfully Registered');
        Alert::toast('Email Sent', 'success');
        // return redirect()->back();
        return redirect()->route('after-contact-us');
    }
}
