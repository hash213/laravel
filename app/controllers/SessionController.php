<?php

class SessionController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{ 
       // return View::make('admin.searchedNames');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        return View::make('sessions.home');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store() {
		$validator = Validator::make(Input::all(),['username'=>'required','password'=>'required']);
		$input=Input::all();

		$attempt=Auth::attempt([
		'username' => $input['username'],
		'password' => $input['pass']
		]);
		
		if(Auth::user()->role->id==1){
			return Redirect::intended('profile')->with('message', 'Welcome to your dashboard');
		}
		elseif (Auth::user()->role->id==2) {
		 	return Redirect::intended('clerk')->with('message', 'Welcome to your dashboard');
		}
		elseif(Auth::user()->role->id==3){
		 	return Redirect::intended('client')->with('message', 'Welcome');
		}
		// elseif(Auth::user()->role->id==4){
		//  	return Redirect::intended('collector');
		// }
		  
		if($attempt && $validator)
			
			return Redirect::to('profile');
			else	 
		 	return Redirect::to('/')->with($validator);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
        return View::make('sessions.show');
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
        return View::make('sessions.edit');
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		
	}

}
