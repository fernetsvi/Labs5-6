<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home() {
        $reviews = new Contact();
        return view('home', ['reviews' => $reviews->all()]);
    }

    public function hosting() {
        return view('hosting');
    }
    public function contacts() {
        return view('contacts');
    }
    public function about_us() {
        return view('about-us');
    }
    public function review_check(Request $request) {
        $valid = $request->validate([
            'email'=>'required|min:4|max:100',
            'subject'=>'required|min:4|max:100',
            'message'=>'required|min:15|max:500',
        ]);

        $review = new Contact();
        $review->email = $request->input('email');
        $review->subject = $request->input('subject');
        $review->message = $request->input('message');

        $review->save();

        return redirect()->route('home');
    }
}
