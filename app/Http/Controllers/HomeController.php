<?php

namespace App\Http\Controllers;

use session;
use App\Models\Contact;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('home');
    }

    public function store(Request $request){
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone'=> 'required',
            'message'=>'required|max:255'
        ]);

        $contact = new Contact;
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->phone = $request->phone;
        $contact->message = $request->message;
        $contact->save();

        session()->flash('success', 'Message sent successfully.');

        return redirect()->back();

    }

    public function show(){
        $contacts = Contact::paginate(10);
        return view('contacts', compact('contacts'));
    }

    public function delete($id){
        $contact = Contact::find($id);
        $contact->delete();
        return redirect()->back();
    }
}
