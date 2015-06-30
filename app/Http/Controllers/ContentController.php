<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Request;
use Input;
use App\PageInfor;

class ContentController extends Controller {

	public function updateCompanyName(){
		if(Request::ajax()){
		
		$pageInfor = $pageInfor = PageInfor::find(1);
		$pageInfor->company_name = Input::get("companyName");
		$pageInfor->save();
		return 'Updated successful';
		}
		
	}
	
	public function updateWhatWeDo(){
		if(Request::ajax()){
		$pageInfor = $pageInfor = PageInfor::find(1);
		$pageInfor->what_we_do = Input::get("whatWeDo");
		$pageInfor->save();
		return 'Updated What We Do information successful';
		}
		
	}
	
	public function updateAboutUs(){
		if(Request::ajax()){
		$pageInfor = $pageInfor = PageInfor::find(1);
		$pageInfor->about_us = Input::get("aboutUs");
		$pageInfor->save();
		return 'Updated about us information successful';
		}
		
	}
	
	public function updateStrengths(){
		if(Request::ajax()){
		
		$pageInfor = $pageInfor = PageInfor::find(1);
		$pageInfor->strength_1 = Input::get("strength1");
		$pageInfor->strength_2 = Input::get("strength2");
		$pageInfor->strength_3 = Input::get("strength3");
		$pageInfor->save();
		return 'Updated Strengths information successful';
		}
		
	}
	
	
	public function updateServices(){
		if(Request::ajax()){
		
		$pageInfor = $pageInfor = PageInfor::find(1);
		$pageInfor->service_1 = Input::get("service_1");
		$pageInfor->service_2 = Input::get("service_2");
		$pageInfor->service_3 = Input::get("service_3");
		$pageInfor->service_4 = Input::get("service_4");
		$pageInfor->service_5 = Input::get("service_5");
		$pageInfor->service_6 = Input::get("service_6");
		$pageInfor->save();
		return 'Updated Services information successful';
		}
		
	}
	
	public function updateContact(){
		if(Request::ajax()){
		
		$pageInfor = $pageInfor = PageInfor::find(1);
		$pageInfor->post_address = Input::get("postAddress");
		$pageInfor->email_address = Input::get("emailAddress");
		$pageInfor->phone_number = Input::get("phoneAddress");
		$pageInfor->save();
		return 'Updated Contact information successful';
		}
		
	}
	
	
	

}
