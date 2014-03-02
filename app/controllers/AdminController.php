<?php

class AdminController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{

		return View::make('admin.index');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{

		return View::make('admin.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		
		// $data = Input::all();
		// $user = new Employee;
		// $user->fname = $data['firstname'];
		// $user->lname = $data['lname'];
		// $user->mname = $data['mname'];
		// $user->address = $data['address'];
		// $user->idnum = $data['idnum'];
		// $user->position = $data['position'];
		// $user->age = $data['age'];
		// $user->username = $data['username'];
		// $user->password = Hash::make($data['password']);

		// $user->save();
			
		// $message=true;	
		// return View::make('admin.create',compact('message'));
 	
	}
	public function search(){
		$data=Input::get();
		$info=Employee::where('fname','LIKE', '%'.$data.'%')->get();
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$fetch=Employee::whereId($id)->first();
		return View::make('admin.edit', compact('fetch'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$update = Input::all();
		$newUpdate = User::find($id);
		$newUpdate->fname = $update['fname'];
		$newUpdate->mname = $update['mname'];
		$newUpdate->lname = $update['lname'];
		$newUpdate->address = $update['address'];
		$newUpdate->email = $update['email'];
		$newUpdate->username = $update['username'];
		$newUpdate->password = $update['password'];
		
		$newUpdate->save();

		Session::flash('message', 'Account was successfully updated');
		return Redirect::to('profile');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{

		$delete=Employee::find($id);
		$delete->delete();
		return View::make('admin.create');
	}

	// 
	public function fetchInfo($id){
		$fetch=Employee::find($id);
		return View::make('admin.create', compact('fetch'));
	}
	public function login(){
		
		$data = Input::all();
 		$query = Employee::get(array('username','password'));

 	foreach($query as $user){
 		 if($user->username==$data['username'])
 			if(Hash::check($data['pass'],$user->password))
 				return Redirect::to('admin/index');
 		}
 		return View::make('admin/adminlogin');
	}
	public function viewlist(){
		$query=Input::get('search');
		$match=User::where('lname', 'LIKE', '%'.$query.'%')->get();
		return View::make('admin.clientlist',compact('match'));
	}
}