<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function sendMail()
    {
        $details = [
            'title' => 'Mail from www.pobitrodeb.com',
            'body' => 'This is for testing email using smtp'
        ];

        \Mail::to('pobitrodeb.web@gmail.com')->send(new \App\Mail\MyTestMail($details));

        dd("Email is Sent.");
    }
}
