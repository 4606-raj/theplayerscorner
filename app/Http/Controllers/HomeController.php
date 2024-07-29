<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use App\Models\Player;
use App\Models\Gallery;
use Mail;
use Alert;
use Validator;
use Response;

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

    function locationsList($postCode)  {
        $url = "api.postcodes.io/postcodes/$postCode";

        $client = new Client();
        $response = $client->get($url);
        
        $responseBody = $response->getBody()->getContents();
        $responseDecoded = json_decode($responseBody, true);

        if ($responseDecoded !== null) {
            // \Log::info($responseDecoded);
            $data[] = $responseDecoded['result']['pfa'];
        } else {
            $error = json_last_error();
            \Log::error('Invalid JSON response: ' . $responseBody . ' (Error: ' . $error . ')');
        }

        
        // $data = [$responseDecoded->result->region ?? null];
        return Response::json($data ?? []);
        
    }

    public function getCurrentStep() {
        return \Auth::user()->player->steps ?? 0;
    }
    
}
