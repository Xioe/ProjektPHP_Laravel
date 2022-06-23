<?php

namespace App\Http\Controllers;

use App\Models\CardsEvent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CardsEventsController extends Controller
{
     public function index() {
            $cardsEvents = CardsEvent::where("IsActive", "=", true) ->where("user_ID", "=", Auth::id()) -> get();
            return view("cards.index", ["cardsEvents" => $cardsEvents]);
        }

        public function edit($ID) {
                $cardsEvents = CardsEvent::find($ID);
                return view("cards.edit", ["cardsEvents" => $cardsEvents]);
       }

        public function update(Request $request, $ID) {
            $request->validate([
                'Number' => 'digits:10',
                'Month' => 'min:0|max:12|digits:2',
                'CVV_CVC' => 'digits:3',
            ]);


            $cardsEvents = CardsEvent::find($ID);
            $cardsEvents -> OwnerName = $request->input('OwnerName');
            $cardsEvents -> Number = $request->input('Number');
            $cardsEvents -> PaymentCardIssuer = $request -> input('PaymentCardIssuer');
            $cardsEvents -> Month = $request->input('Month');
            $cardsEvents -> Year = $request->input('Year');
            $cardsEvents -> CVV_CVC = $request->input('CVV_CVC');
            $cardsEvents -> save();
            return redirect("/cards");
        }

        public function delete($ID) {
            $cardsEvents = CardsEvent::find($ID);
            $cardsEvents -> IsActive = false;
            $cardsEvents -> save();
            return redirect("/cards");
            }

        public function create() {
            return view("cards.create");
        }

        public function addToDB(Request $request) {
            $cardsEvents = new CardsEvent();

            $request->validate([
                'Number' => 'digits:10',
                'Month' => 'min:0|max:12|digits:2',
                'CVV_CVC' => 'digits:3',
            ]);
            //Do zmiany po dodaniu loghowania
            $cardsEvents -> user_ID = Auth::id();
            //
           $cardsEvents -> OwnerName = $request->input('OwnerName');
           $cardsEvents -> Number = $request->input('Number');
           $cardsEvents -> PaymentCardIssuer = $request -> input('PaymentCardIssuer');
           $cardsEvents -> Month = $request->input('Month');
           $cardsEvents -> Year = $request->input('Year');
           $cardsEvents -> CVV_CVC = $request->input('CVV_CVC');
           $cardsEvents -> IsActive = true;
           $cardsEvents -> Name = "A";
           $cardsEvents -> CreationDateTime = date("y-m-d h:i:s");
           $cardsEvents -> EditDateTime = date("y-m-d h:i:s");

            $cardsEvents -> save();
            return redirect("/cards");
        }
}
