<?php

namespace App\Http\Controllers;

use App\Models\PasswordsEvent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PasswordsEventsController extends Controller
{
    public function index() {
        $passwordsEvents = PasswordsEvent::where("IsActive", "=", true)->where("user_ID", "=", Auth::id()) -> get();
        return view("passwords.index", ["passwordsEvents" => $passwordsEvents]);
    }

    public function edit($ID) {
            $passwordsEvents = PasswordsEvent::find($ID);
            return view("passwords.edit", ["passwordsEvents" => $passwordsEvents]);
   }

    public function update(Request $request, $ID) {

        $request->validate([
            'email' => 'required|regex:/(.+)@(.+)\.(.+)/i',
        ]);

        $passwordsEvents = PasswordsEvent::find($ID);
        $passwordsEvents -> Name = $request->input('Name');
        $passwordsEvents -> Nick = $request->input('Nick');
        $passwordsEvents -> email = $request -> input('email');
        $passwordsEvents -> Password = $request->input('Password');
        $passwordsEvents -> URL = $request->input('URL');
        $passwordsEvents -> save();
        return redirect("/passwords");
    }

    public function delete($ID) {
        $passwordsEvents = PasswordsEvent::find($ID);
        $passwordsEvents -> IsActive = false;
        $passwordsEvents -> save();
        return redirect("/passwords");
        }

    public function create() {
        return view("passwords.create");
    }

    public function addToDB(Request $request) {

        $request->validate([
            'email' => 'regex:/(.+)@(.+)\.(.+)/i',
        ]);
        $passwordsEvents = new PasswordsEvent();
        //Do zmiany po dodaniu loghowania
        $passwordsEvents -> user_ID = Auth::id();
        //
        $passwordsEvents -> Name = $request->input('Name');
        $passwordsEvents -> Nick = $request->input('Nick');
        $passwordsEvents -> email = $request -> input('email');
        $passwordsEvents -> Password = $request->input('Password');
        $passwordsEvents -> URL = $request->input('URL');
        $passwordsEvents -> IsActive = true;
        $passwordsEvents -> CreationDateTime = date("y-m-d h:i:s");
        $passwordsEvents -> EditDateTime = date("y-m-d h:i:s");

        $passwordsEvents -> save();
        return redirect("/passwords");
    }
}

