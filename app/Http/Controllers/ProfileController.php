<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Profile;
use App\Models\User;

class ProfileController extends Controller
{
    public function show() {
        $profile = User::find(Auth::id())->profile;

        return view('profiles.show',compact('profile'));
    }

    public function update($id,Request $request) {

        //dd($request);
        $profile = Profile::find($id);
        $profile->name = $request->name;
        $profile->company_name = $request->company_name;
        $profile->emails = $request->emails;
        $profile->phone_number = $request->phone_number;

        $profile->save();

        return redirect('/me');
    }
}
