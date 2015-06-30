<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\PageInfor;

use Illuminate\Http\Request;

class MasterController extends Controller {

	public function indexPage(){
		$pageInfor = PageInfor::find(1);
		return view('master')->with('pageInfor',$pageInfor);
	}

}
