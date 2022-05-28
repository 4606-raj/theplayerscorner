<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Player;

class HomeController extends Controller
{
    public function index() {
        $players = Player::with('user')->whereIsCaptain(1)->get();
        return view('index', compact('players'));
    }
}
