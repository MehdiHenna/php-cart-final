<?php namespace App\Controllers;

use App\Controllers\Controller;
use Silex\Application;
use Symfony\Component\HttpFoundation\Request;
use App\Models\Customer;


class UserController extends Controller {

	public function getRegisterUser(Request $request, Application $app){
		return view('user/registerUser', []);
	}

	public function postRegisterUser(Request $request, Application $app){
		$data = Customer::create([
			'first_name'=>$request->get('first_name'),
			'last_name'=>$request->get('last_name'),
			'address'=>$request->get('address'),
			'postcode'=>$request->get('postcode'),
			'phone'=>$request->get('phone')
			]);
		$data->save(); 
		return $app->redirect('/');
	}	
}


