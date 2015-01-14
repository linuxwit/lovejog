<?php

class PassportController extends \BaseController {

	public function register() {
		if (Sentry::check()) {
			return Redirect::to('myaccount');
		}
		return View::make("passport.register")
			->with("title", "The Foldagram -Register")
			->with("page_title", "Register")
			->with('class', 'register');
	}

	public function postLogin() {
		$rules = array(
			'email' => 'required|email',
			'password' => 'required',
		);
		$input = Input::get();
		$validation = Validator::make($input, $rules);
		if ($validation->fails()) {
			return Redirect::to_route('userlogin')->with_errors($validation->errors)->with_input();
		}
		$credentials = array('email' => Input::get('email'), 'password' => Input::get('password'));
		if (Sentry::authenticate($credentials, false)) {
			return Redirect::to('myaccount');
		} else {
			return Redirect::to('login')->with("error", "There is problem with login please try again");
		}
	}

	public function getMyaccount() {
		if (!Sentry::check()) {
			return Redirect::to('login')->with("error", "Please login to access your account");
		}
		$user = Sentry::getUser();
		return View::make("passport.profile")->with("title", "The Foldagram - My Account")
		                                     ->with("page_title", "My Account")->with('class', 'myaccount')
		                                     ->with('user', $user);
	}
	/**
	 * Display a listing of the resource.
	 * GET /passport
	 *
	 * @return Response
	 */
	public function index() {
		//
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /passport/create
	 *
	 * @return Response
	 */
	public function create() {
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /passport
	 *
	 * @return Response
	 */
	public function store() {
		//
	}

	/**
	 * Display the specified resource.
	 * GET /passport/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id) {
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /passport/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id) {
		//
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /passport/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id) {
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /passport/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id) {
		//
	}

}