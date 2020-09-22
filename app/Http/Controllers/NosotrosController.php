<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\mailmiraki;

class NosotrosController extends Controller
{
    public function getNosotros(){
        return view('nosotros');
    }

    public function postEmail(Request $request){
        $details = [
            'title' => $request->input('asunto'),
            'body' => $request->input('content'),
            'name' => $request->input('name'),
            'email' => $request->input('email')
        ];
        Mail::to('AlejandroDeve04@gmail.com')->send(new mailmiraki($details));
            return view('nosotros');
    }
} 
