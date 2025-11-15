<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use App\Models\Msg;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function contact_view(){
        return view('pages.contact');
    }

    public function read_dat_and_send_email(Request $request) {
        $validatedData = $request->validate([
        'name' => 'required|string|max:45',
        'phone' => 'required|string|max:15',
        'email' => 'required|email',
        'msg' => 'required|string',
    ]);

    try {
        // dd($validatedData);
        Msg::create($validatedData);
        Mail::to('kunszt.norbert@gmail.com')->send(new ContactMail());
        return redirect()->route('pages.contact')->with('sended', true);

    } catch (\Exception $e) {
        return redirect()->back()->with('error', 'Hiba történt a mentés során!');
    }
    }
}
