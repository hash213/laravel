 <?php

class AccountController extends \BaseController {
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	
	
	
	public function index()
	{
		return View::make('login');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$users=User::all();
		$role=Role::lists('role', 'id');
		
		return View::make('admin.show',compact('users','roles'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$rules=array(
				'fname'=>'required|alpha_spaces',
				'lname'=>'required|min:2|max:20|alpha_spaces',
			   	'mname'=>'required|max:20|alpha_spaces',
			   	'address'=>'required',
			   	'bday'=>'required|date',
			   	'bplace'=>'required',
			   	'email' =>'required|email',
			   	'contactNum'=>'required|numeric',
			   	'username'=>'required|alpha_num',
			   	'password'=>'required|min:8',
			   	'password_confirmation'=>'required'
				);

		$input=Input::all();		
		$data=Validator::make($input,$rules);
		
		if($data->passes()){
			
			$user=new User;
			$user->fname = Input::get('fname');
			$user->lname = Input::get('lname');
			$user->mname = Input::get('mname');
			$user->address = Input::get('address');
			$user->bday =Input::get('bday');
			$user->bplace =Input::get('bplace');
			$user->civil_status =Input::get('civil_status');
			$user->email = Input::get('email');
			$user->contactNum =Input::get('contactNum');
			$user->username = Input::get('username');
			$user->password = Hash::make(Input::get('password'));
			$user->role_id= Input::get('role_id');
			$user->save();

		 	return Redirect::to('/');
		}
		
		return Redirect::to('signup')->withInput()->withErrors($data);
		
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{	
		$user = User::find($id);

		// show the view and pass the user to it
		return View::make('admin.accounts')
			->with('users', $user);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$user = User::find($id);

		// show the view and pass the user to it
		return View::make('admin.accounts')
			->with('users', $user);
		
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		
		
			// store
			$users = User::find($id);
			$users->fname    = Input::get('fname');
			$users->lname    = Input::get('lname');
			$users->mname 	 = Input::get('mname');
			$users->save();

			// redirect
			return Redirect::to('profile');
			Session::flash('message', 'Successfully updated user!');
			
		
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}