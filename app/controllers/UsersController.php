<?php

class UsersController extends BaseController {

	public function __construct() {
		//parent::__construct();
		$this->beforeFilter('csrf', array('on'=>'post'));
	}

	public function getIndex() {

		$prodcat =array();
		$projcat =array();

		foreach(Productcategory::all() as $prod) {
			$prodcat[$prod->id] = $prod->name;
		}

		foreach(Project::all() as $proj) {
			$projcat[$proj->id] = $proj->name;
		}

		return View::make('admin.index')
			->with('products', Product::all())
			->with('projects', Project::all())
			->with('prodcat', $prodcat)
			->with('projcat', $projcat);
	}
		 

	public function getNewaccount() {
		return View::make('admin.newaccount');
	}

	public function postCreate() {
		$validator = Validator::make(Input::all(), User::$rules);

		if ($validator->passes()) {
			$user = new User;
			$user->first_name = Input::get('firstname');
			$user->last_name = Input::get('lastname');
			$user->username = Input::get('username');
			$user->email = Input::get('email');
			$user->password = Hash::make(Input::get('password'));
			$user->save();

			return Redirect::to('admin/signin')
				->with('message', 'Thank you for creating a new account. Please sign in.');
		}


		return Redirect::to('admin/newaccount')
			->with('message', 'Something went wrong')
			->withErrors($validator)
			->withInput();
	}

	public function getSignin() {
		return View::make('admin.signin');
	}

	public function postSignin() {
		if (Auth::attempt(array('email'=>Input::get('email'), 'password'=>Input::get('password')))) {
			return Redirect::to('/admin/products/index')->with('message', 'Thanks for signing in');
		}

		return Redirect::to('admin/signin')->with('message', 'Your email/password combo was incorrect');
	}

	public function getSignout() {
		Auth::logout();
		return Redirect::to('admin/signin')->with('message', 'You have been signed out');
	}
}