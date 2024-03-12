<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class AugluController extends Controller
{

    public function auglu_serviss() {
        return view('auglu_serviss');
    }



    public function veikaliem() {
        return view('veikaliem');
    }

    public function restoraniem() {
        return view('restoraniem');
    }



    public function birojiem() {
        return view('birojiem');
    }



    public function piegadatajiem() {
        return view('piegadatajiem');
    }





    public function review(){
        return view ('review');
    }


    public function review_check(Request $request) {
        $valid = $request->validate([
            'email' => 'required|min:4|max:100',
            'subject' => 'required',
            'message' => 'required|max:500',
        ]);

        $review = new \App\Models\Augli();
        $review->email = $request->input('email');
        $review->subject = $request->input('subject');
        $review->message = $request->input('message');

        $review->save();
        return redirect()->route('review');
        }


}
