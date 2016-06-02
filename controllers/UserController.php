<?php namespace App\Controllers;

use App\Controllers\Controller;
use Silex\Application;
use Symfony\Component\HttpFoundation\Request;
use App\Models\Product;


class UserController extends Controller {

	public function getRegisterUser(Request $request, Application $app){
		return view('user/registerUser', []);
	}

	//public function postRegisterUser(Request $request, Application $app){
		//return $app->redirect('/');
	//}	

}


