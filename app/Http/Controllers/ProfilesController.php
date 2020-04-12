<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Users\UpdateProfileRequest;
use App\User;

class ProfilesController extends Controller
{
    public function index()
     {
         return view('profiles.index')->with('user', auth()->user());
     }

    public function update(UpdateProfileRequest  $request)
    {
        $user = auth()->user();
        $user->update([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'phone' => $request->phone,
        ]);
        return redirect()->back();
    }
}
