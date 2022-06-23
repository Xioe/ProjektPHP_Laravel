<?php

namespace App\Http\Controllers;

use App\Models\PersonalEvent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PersonalsEventsController extends Controller
{
    public function index() {
            $personalEvents = PersonalEvent::where("IsActive", "=", true)->where("user_ID", "=", Auth::id()) -> get();
            return view("personalID.index", ["personalEvents" => $personalEvents]);
    }
    public function edit($ID) {
            $personalEvents = PersonalEvent::find($ID);
            return view("personalID.edit", ["personalEvents" => $personalEvents]);

    }

    public function update(Request $request, $ID) {

        $request -> validate([
            'PESEL' => 'digits:10',
            'PhoneNumber' => 'digits:9',
            //'Postcode' => 'regex:/^(?:(\d{5})(?:[ \-](\d{4}))?)$/i'
        ]);
            $personalEvents = PersonalEvent::find($ID);
            $personalEvents -> Name = $request->input('Name');
            $personalEvents -> SecondName = $request->input('SecondName');
            $personalEvents -> LastName = $request -> input('LastName');
            $personalEvents -> PESEL = $request->input('PESEL');
            $personalEvents -> email = $request->input('email');
            $personalEvents -> PhoneNumber = $request->input('PhoneNumber');
            $personalEvents -> Adress = $request->input('Adress');
            $personalEvents -> Postcode = $request->input('Postcode');
            $personalEvents -> City = $request->input('City');
            $personalEvents -> Country = $request->input('Country');
            $personalEvents -> save();
            return redirect("/personal");
        }

        public function delete($ID) {
            $personalEvents = PersonalEvent::find($ID);
            $personalEvents -> IsActive = false;
            $personalEvents -> save();
            return redirect("/personal");
            }

        public function create() {
            return view("personalID.create");
        }

        public function addToDB(Request $request) {
            $request -> validate([
                'PESEL' => 'digits:10',
                'PhoneNumber' => 'digits:9',
               // 'Postcode' => 'regex:/^(?:(\d{5})(?:[ \-](\d{4}))?)$/i'
            ]);
            $personalEvents = new PersonalEvent();
            //Do zmiany po dodaniu loghowania
            $personalEvents -> user_ID = Auth::id();
            //
            $personalEvents -> Name = $request->input('Name');
            $personalEvents -> SecondName = $request->input('SecondName');
            $personalEvents -> LastName = $request -> input('LastName');
            $personalEvents -> PESEL = $request->input('PESEL');
            $personalEvents -> email = $request->input('email');
            $personalEvents -> PhoneNumber = $request->input('PhoneNumber');
            $personalEvents -> Adress = $request->input('Adress');
            $personalEvents -> Postcode = $request->input('Postcode');
            $personalEvents -> City = $request->input('City');
            $personalEvents -> Country = $request->input('Country');

            $personalEvents -> IsActive = true;
            $personalEvents -> CreationDateTime = date("y-m-d h:i:s");
            $personalEvents -> EditDateTime = date("y-m-d h:i:s");

            $personalEvents -> save();
            return redirect("/personal");
        }
}
