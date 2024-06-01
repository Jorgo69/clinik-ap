<?php

namespace App\Http\Controllers\Mail;

use App\Http\Controllers\Controller;
use App\Mail\MessageGoogle;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MessageGoogleController extends Controller
{
    // Le formulaire du message
	public function formMessageGoogle () {
		return view("emails.form-message-google");
	}

    // Envoi du mail aux utilisateurs
	public function sendMessageGoogle (Request $request) {

		#1. Validation de la requête
		$this->validate($request, [ 'message' => 'bail|required' ]);

		#2. Récupération des utilisateurs
		$users = User::all();

		#3. Envoi du mail
		// Mail::to($users)->bcc("moeufcool0@gmail.com")
		// 				->queue(new MessageGoogle($request->all()));
        // foreach ($users as $user) {
        //     Mail::to($user->email) // Adresse du destinataire
        //         ->queue(new MessageGoogle($request->all()));
        // }

        Mail::to('estimegliti108@gmail.com')
                ->queue(new MessageGoogle($request->all()));

		return back()->withText("Message envoyé");
    }
    
}
