<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SendEmail extends Controller
{
    public function send(Request $request){
        $email = $request->email;
    }
    //
}
