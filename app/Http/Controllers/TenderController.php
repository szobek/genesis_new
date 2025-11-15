<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use App\Mail\TenderMail;
use App\Models\Tender;
use Error;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TenderController extends Controller
{
   public function create_tender(Request $request)
{
    $validatedData = $request->validate([
        'tender.name' => 'required|string|max:45',
        'tender.phone' => 'required|string|max:15',
        'tender.email' => 'required|email',
        'tender.address' => 'required|string',
        'tender.hasGround' => 'required',
        'tender.ideaType' => 'required',
        'tender.area' => 'required|string',
        'tender.hasBlueprint' => 'required',
        'tender.hasFoundation' => 'required',
    ]);


    try {
        Tender::create($validatedData['tender']);
        Mail::to('kunszt.norbert@gmail.com')->send(new TenderMail());
        return redirect()->route('pages.tender')->with('sended', true);

    } catch (\Exception $e) {
        return redirect()->back()->with('error', 'Hiba történt a mentés során!');
    }
}
}
