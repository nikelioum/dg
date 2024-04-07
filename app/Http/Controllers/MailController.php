<?php

namespace App\Http\Controllers;
use Mail;
use Illuminate\Http\Request;

class MailController extends Controller
{
    public function submit_email(Request $request) {

        $validated = $request->validate([
            'fullname' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'reason' => 'required|string',
            'phone' => 'required|string|min:10|max:15', 
            'content' => 'required|min:3|max:1000',
        ]);


        $data = array('fullname'=>$request->fullname,'email'=>$request->email,'reason'=>$request->reason,'phone'=>$request->phone,'content'=>$request->content);
     
         if(Mail::send('mail', $data, function($message) {
           $message->to('dgsolutionswebtech@gmail.com', 'DGsolutions')->subject
              ('Επικοινωνία Πελάτη');
           $message->from('dgsolutionswebtech@gmail.com');
        })){
        return back()->with('message', 'Το μήνυμα σας εστάλη με επιτυχία!');
     }else{
        return back()->with('message', 'Το μήνυμα σας δεν εσταλη, δοκιμάστε ξανά!');
     }
    }
}