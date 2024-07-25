<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Actions\Fortify\CreateNewUser;
use App\Models\{User, Player, PlayerClubDetail, PlayerPlayingDetail};
use Carbon\Carbon;
use Auth;

class AuthController extends Controller
{
    function __construct(CreateNewUser $createNewUser) {
        $this->createNewUser = $createNewUser;
    }
    
    public function create($role) {
        return view('auth.register-role', compact('role'));
    }

    public function store(Request $request, $role) {
        $user = $this->createNewUser->create($request->all());

        Auth::login($user);

        if($user && $user instanceof User) {
            return redirect()->route('player-registration.create');
        }
        else {
            return redirect()->back()->with('error', 'something went wrong');
        }
    }
    
    public function playerRegistrationForm() {
        return view('auth.player-registration');
    }

    public function stepOne(Request $request) {

        $dob = Carbon::parse("$request->day-$request->month-$request->year");
        
        Auth::user()->update([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'dob' => $dob,
        ]);

        Player::updateOrCreate(['user_id' => Auth::user()->id], [
            'gender' => $request->gender,
            'morph_nationality_id' => json_encode($request->morph_nationality_id),
            'height' => $request->height,
            'height_unit' => $request->height_unit,
            'weight' => $request->weight,
            'weight_unit' => $request->weight_unit,
            'location' => $request->location,
            'photo' => $request->photo,
            'steps' => 1,
        ]);

        return ['step' => 2];
    }

    public function stepTwo(Request $request) {

        PlayerClubDetail::Create([
            'supported_team' => $request->supported_team,
            'morph_current_level_id' => $request->current_level,
            'morph_highest_level_id' => $request->highest_level,
            'current_club' => $request->current_club,
            'player_id' => Auth::user()->player->id,
        ]);

        Auth::user()->player->update(['steps' => 2]);

        return ['step' => 3];
    }

    public function stepThree(Request $request) {

        PlayerPlayingDetail::Create([
            'morph_position_id' => $request->morph_position_id,
            'morph_second_position_id' => $request->morph_second_position_id,
            'morph_foot_id' => $request->morph_foot_id,
            'morph_trait_id' => json_encode($request->morph_trait_id),
            'player_id' => Auth::user()->player->id,
        ]);

        Auth::user()->player->update(['steps' => 3]);

        return ['step' => 4];
    }

    public function stepFour(Request $request) {

        Player::whereId(Auth::user()->player->id)->update([
            'consent_terms_of_use' => $request->consent_terms_of_use,
            'consent_data_collection_privacy' => $request->consent_data_collection_privacy,
        ]);

        Auth::user()->player->update(['steps' => 4]);

        return ['step' => 5];
    }
}
