<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMessage;
use Illuminate\Http\Request;
use App\Rules\GoogleRecaptcha;
use App\Rules\NoHtml;

class ContactController extends Controller
{
    public function store(Request $request){
        $rules = [          
            'fname'=>'required',
            'lname'=>'required',
            'email' => 'required|email',
            'subject'=>'required',
            'message' => 'required|min:5',
            'g-recaptcha-response' => 'required', new GoogleRecaptcha
        ];    
        $customMessages = [
            'fname.required' => 'Please enter your firstname',
            'lname.required' => 'Please enter your surname?',
            'subject.required' => 'Please enter the mail subject?',
            'email.required' => 'We need your email address also',
            'message.required'  => 'c\'mon, you want to contact us without saying anything?',
         ];
    
        $this->validate($request, $rules, $customMessages);
        Mail::send( new ContactFormMessage() );
        session()->flash('success', 'Message is sent! We will get back to you soon!'); 
        return redirect()->back();
    }
}
