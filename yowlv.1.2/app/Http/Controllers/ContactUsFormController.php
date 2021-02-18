<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Mail;


class ContactUsFormController extends Controller
{
    // Création du formulaire de contact
    public function createForm(Request $request) {
        return view('contact');
      }
  
      // Store Contact Form data
      public function ContactUsForm(Request $request) {
  
          // Form validation
          $this->validate($request, [
              'name' => 'required',
              'email' => 'required|email',
              'message' => 'required'
           ]);
  
          //  Store data in database
          Contact::create($request->all());
  
         // Send mail to admin
        \Mail::send('mail', array(
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'user_query' => $request->get('message'),
        ), function($message) use ($request){
            $message->from($request->email);
            $message->to('yowl@contact.com', 'Admin');
        });

          return back()->with('success', 'Le message à bien été envoyé.            
          Réponse en 48h.');
      }
  
  }


