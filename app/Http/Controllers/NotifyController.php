<?php

namespace App\Http\Controllers;

use App\Models\Email;
use App\Mail\SendEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class NotifyController extends Controller
{
    public function view(){
        return view('notify');
    }

    public function store(Request $request){
        $request->validate([
            'email' => ['required', 'email', 'unique:emails,email']
        ]);
        Email::create(['email' => $request->email ]);
        return redirect('/notify')->with(['success' => "You will be notified!"]);
    }
}
