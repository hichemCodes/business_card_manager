<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Profile;
use App\Models\User;
use App\Models\Library;

class LibraryController extends Controller
{
    public function show()  {
        $libraries = User::find(Auth::id())->libraries;
        //dd($libraries);
        return view('library.show',compact('libraries'));
    }

    public function add() {
         
        return view ('library.add');
    }

    public function store (Request $request) {

        $library = new Library();

        $library->name = $request->name;
        $library->company_name = $request->company_name;
        $library->emails = $request->emails;
        $library->phone_number = $request->phone_number;
        $library->user_id = Auth::id();
    
        $library->save();

        return redirect('/my-labriry');

    }

    public function selectUser() {
        
        $users = User::all();
        return view('library.exchange-user-choice',compact('users'));
    } 

    public function showAlluserCards($id) {
        $libraries = User::find($id)->libraries;

        $user = User::find($id);

       

        return view('library.show-user-cards',compact(['libraries','user']));
    }
}
