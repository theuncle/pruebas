<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Http\Requests\ContactFormRequest;

use Illuminate\Support\Facades\Input;

use Mail;

class EmailController extends Controller
{
	public function send(ContactFormRequest $request)
	{
		
			$email = Input::get('email');
			$data = array( 'email' => $email);

			Mail::send("front.emails.fast-contact-confirm", $data, function($message) use ($email){
				$message->to($email)
				->subject("Tu solicitud de contacto se esta procesando...");
			});		
	}
}
