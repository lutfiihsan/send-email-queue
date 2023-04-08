<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jobs\SendEmailJob;

class EmailController extends Controller
{
    public function sendEmail()
    {
        $url = config('app.api_email');
        $email = 'lawlieth404@gmail.com';
        $subject = 'Test email';
        $message = 'This is a test email';
        $token = config('app.api_token');

        dispatch(new SendEmailJob($url, $email, $subject, $message, $token));

        return response()->json(['message' => 'Email sent successfully!']);
    }
}
