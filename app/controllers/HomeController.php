<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	 */

	public function showWelcome() {
		return View::make('hello');
	}

	public function login() {
		$credentials = array(
			'email' => 'test@example.com',
			'password' => 'test',
		);
		// Try to authenticate the user
		$user = Sentry::authenticate($credentials, false);
		If ($user) {
			echo "You are logged in!";
		} else {
			echo "no";
		}
	}

}
