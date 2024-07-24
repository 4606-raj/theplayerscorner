<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Actions\Fortify\CreateNewUser;

class AuthController extends Controller
{
    function __construct(CreateNewUser $createNewUser) {
        $this->createNewUser = $createNewUser;
    }
    
    public function create($role) {
        return view('auth.register-role', compact('role'));
    }

    public function store(Request $request, $role) {
        return $this->createNewUser->create($request->all());
    }

    public function stepOne(Request $request) {
        dd($request->all());
    }
}
