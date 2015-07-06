<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Input;
use Mail;

class EmailController extends Controller {

	public function sendEmail(){
		$name = Input::get("name");
		$email = Input::get("email");
		$comment = Input::get("comment");
		
		Mail::send('emails.email',['name'=>$name,'comment'=>$comment],function($message){
			$message->to(Input::get("email"), Input::get("name"))->subject('Welcome!');
		});
		Mail::send('emails.email',['name'=>$name,'comment'=>$comment],function($message){
			$message->to('xjz520224@gmail.com', 'Jack')->subject('new enquiry!');
		});
		
		return "sent out";
	}

}
