<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TeamType;
use App\Models\Team;

class TeamController extends Controller
{
    public function indexTeamTypes() {
        $teamTypes = TeamType::with('subTypes')->get();
        return view('teams', compact('teamTypes'));
    }

    public function showTeamTypes($id) {
        $teamType = TeamType::findOrFail($id);
        if($teamType->teams && $teamType->teams()->count() > 1) {

        }

        $teamId = $teamType->teams()->first()->id;
        return redirect()->route('teams-show', $teamId);
    }

    public function show($teamId) {
        $team = Team::findOrFail($teamId);
        return view('mens-team', compact($team));
    }
}
