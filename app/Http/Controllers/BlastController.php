<?php

namespace App\Http\Controllers;

use App\Models\Email;
use App\Mail\SendEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class BlastController extends Controller
{
    public function view(){
        return view('blast');
    }

    public function blast(Request $request){
        $request->validate([
            'subject' => ['required', 'string'],
            'content' => ['required', 'string']
        ]);
        foreach(Email::all() as $userEmail){
            Mail::to($userEmail->email)->send(new SendEmail($request->subject, $request->content));
        }
        return redirect('/blast')->with(['success' => 'All mails have been sent!']);
    }
}
