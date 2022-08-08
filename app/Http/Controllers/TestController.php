<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Mail;
use App\Mail\TestMail;


class TestController extends Controller
{

    public function index(){
        return view('contact');
    }
    public function mailSend(){
        $email= 'mail@hotmail.com';
        $mailInfo=[
            'title'=>'Hello User',
            'body' => 'This is for testing email using smtp'
        ];
        Mail::to($email)->send(new TestMail($mailInfo));

        return response()->json([
'message'=> 'Mail has sent.'

        ], Response::HTTP_OK);
    }
}
