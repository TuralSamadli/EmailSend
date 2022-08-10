<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Mail;
use App\Mail\TestMail;
use App\Models\Contact;
use App\Models\User;


class TestController extends Controller
{

    public function index(){
        return view('contact');
    }
    public function mailSend(){
        $user = Contact::where('id',1)->first();

        $mailInfo=[
            'title'=>'Hello User',
            'body' => 'This is for testing email using smtp'
        ];
        Mail::To($user->email)->send(new TestMail($mailInfo));

        return response()->json([
'message'=> 'Mail has sent.'

        ], Response::HTTP_OK);
    }
    public function store(){
        $user = Contact::where('id',1)->first();
        return view('contact',compact('user'));
    }
}
