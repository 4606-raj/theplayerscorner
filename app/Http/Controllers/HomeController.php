<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Player;
use Mail;
use Alert;

class HomeController extends Controller
{
    public function index() {
        $players = Player::with('user')->whereIsCaptain(1)->get();
        return view('index', compact('players'));
    }

    public function contactUs (Request $reqeust) {
        Mail::to('0066.navi@gmail.com')->send(new \App\Mail\ContactMail($reqeust->all()));
        
        // Alert::success('Congrats', 'You\'ve Successfully Registered');
        Alert::toast('Email Sent', 'success');
        return redirect()->back();
    }
}
