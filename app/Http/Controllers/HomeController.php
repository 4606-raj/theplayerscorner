<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Player;
use Mail;

class HomeController extends Controller
{
    public function index() {
        $players = Player::with('user')->whereIsCaptain(1)->get();
        return view('index', compact('players'));
    }

    public function contactUs (Request $reqeust) {
        Mail::to('0066.navi@gmail.com')->send(new \App\Mail\ContactMail($reqeust->all()));
        return redirect()->back()->with('success', 'Email Sent');
    }
}
