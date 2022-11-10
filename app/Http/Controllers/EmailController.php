<?php
namespace App\Http\Controllers;

use App\Mail\TestMail;
use App\Models\Emails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function sendEmail(Request $request)
    {
        /**
         * Store a receiver email address to a variable.
         */
        $reveiverEmailAddress = "ehab.developer.email@gmail.com";

        $request->validate([
            'firstname'=>"required",
            'lastname'=>"required",
            'companyname'=>"required",
            'phonenumber'=>"required",
            'email' => "required|email",
            'message' => "required"
          ]);
          Emails::create([
            'first_name'=>$request->firstname,
            'last_name'=>$request->lastname,
            'company_name'=>$request->companyname,
            'phone_number'=>$request->phonenumber,
            'email' =>$request->email,
            'message'=>$request->message
          ]);
        Mail::to($reveiverEmailAddress)->send(new TestMail($request->all()));
        // dd($request->all());



        if (Mail::failures() != 0) {
            return "Email has been sent successfully.";
        }
        return "Oops! There was some error sending the email.";
    }
}
