<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class MainController extends Controller
{
    
    public function home() {
        return view(view: 'home');
    }

    public function about() {
        return view(view: 'about');
    }

    public function review() {
        //$reviews = new Contact();
        // dd($reviews->all());
        //return view(view: 'review', ['reviews'=> $reviews->all()]);
        $reviews = Contact::all();
        return view('review', ['reviews' => $reviews]);
    }

    public function review_check(Request $request) {
        //dd($request);
        $valid = $request->validate([
            'email' => 'required|min:4|max:100',
            'subject' => 'required|min:4|max:100',
            'message' => 'required|min:15|max:500',
        ]);

        $review = new Contact();
        $review->email = $request->input(key:'email');
        $review->subject = $request->input(key:'subject');
        $review->message = $request->input(key:'message');

        $review->save();

        return redirect()->route(route: 'review');
    }
}
