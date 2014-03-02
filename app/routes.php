<?php

use Carbon\Carbon;
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/	

	
Route::get('/', function()
{
	return View::make('sessions.home');
});

Route::get('signup',function(){

	return View::make('sform');
});

Route::get('accountbal/{id}',function($id){

	$personalinfo = PersonalInformation::where('user_id','=',$id)->get();
	$user = User::find($id);

	return View::make('client.accountBalance',compact('personalinfo','user'));


});

Route::resource('admin','AdminController');

Route::get('aboutpage',function(){
	return View::make('sessions.aboutpage');
});
Route::get('loanpage',function(){
	return View::make('sessions.loanpage');
});

Route::get('login','SessionController@create');
Route::get('logout',['as'=>'logout',function(){
		
		Auth::logout();
		return Redirect::to('login');

}])->before('auth');


Route::get('profile',function(){
	$users=User::with('role')->get();
	
	$roles=Role::lists('role','id');
	$roles=array_except($roles,[3,'Client']);

	return View::make('admin.show',compact('users','roles'));

})->before('auth.admin');


// Route::get('profile',function(){
// 	$users=User::with('role')->get();
	
// 	$roles=Role::lists('role','id');
// 	$roles=array_except($roles,[3,'Client']);

// 	return View::make('admin.show',compact('users','roles'));

// });

Route::resource('sessions','SessionController');

Route::get('profile/{accounts}',function($id){

	$users = User::find($id);

	return View::make('admin.accounts',compact('users'));

});

Route::get('payment2/{id}', function($id){

	$dtz='Asia/Manila';
	$date=Carbon::now($dtz)->format('M j, Y');
	$ndate2=Carbon::now()->addDays(7)->format('M j, Y');
	$payment2= PersonalInformation::find($id);

	return View::make('admin.payment2',compact('payment2','ndate2','date','dtz'));
});

Route::get('payment3/{id}', function($id){

	$dtz='Asia/Manila';
	$date=Carbon::now($dtz)->format('M j, Y');
	$ndate3=Carbon::now()->addDays(30)->format('M j, Y');
	$payment3= PersonalInformation::find($id);

	return View::make('admin.payment3',compact('payment3','ndate3','date','dtz'));
});



Route::get('profile/{accounts}/edit',function($id){

	$users = User::find($id);
	return View::make('admin.edit',compact('users'));

});

 Route::get('applicationinfo/{id}', function($id){

 	$personalinfo = PersonalInformation::find($id);
	return View::make('admin.informationview',compact('personalinfo'));
	
  });

Route::resource('clerk','ClerkController');
Route::resource('collector','CollectorController');
Route::resource('application','ApplicationController');

Route::get('searchedNames', function(){
	return View::make('admin.searchedNames');
});

Route::get('application',function(){
	return View::make('application.application');
})->before('guest');


 Route::resource('client','ClientController');
 Route::resource('account','AccountController@store');

 

 Route::get('loanapplication',function(){
 	$date=new DateTime();
	$date->format('m-d-Y');
 	$users = PersonalInformation::with(['comaker','collateral','dependents','requirement','approval','release','balance','payment'],['statusLoan','user'])->get();
 	return View::make('admin.loanApplication',compact('users','status','date'));
 });

Route::resource('personalinfo','PersonalInfoController');
Route::resource('collateral','CollateralController');
Route::resource('comaker','CoMakerController');
Route::resource('requirement','RequirementController');
Route::post('requirement/{id}',['as'=>'requirement.saveRequirement','RequirementController@saveRequirement']);
Route::resource('approval','ApprovalController');
Route::resource('releasing','ReleasingController');
Route::resource('payment','PaymentController');
Route::resource('history','HistoryController');

Route::get('amortization',['as'=>'amortization',function(){
	return View::make('admin.paymentmodule');
}]);

Route::get('amortizationschedule',function(){

	return View::make('admin.amortizationschedule');
});

Route::get('paymenthistory/{accounts}',function($id){


	$personalinfo = PersonalInformation::find($id);
	$balance = Balance::where('personal_information_id','=',$id)->get()->last();
	$payment = Payment::where('personal_information_id','=',$id)->get();

	return View::make('admin.paymenthistory',compact('personalinfo','balance','payment'));

});
// Route::get('test',function(){
// 	// $date=new DateTime();
// 	 return ($date->format('m-d-Y'));
// 	$user='Asia/Manila';
// 	$date =Carbon::now($user);
// 	return ($date);
// });


// Route::get('test', function(){

// 	// $user = User::find(46);
// 	$data = [];
// 	Mail::send('notify',$data, function($f)
// 	{
// 		$f->to('aris.amaro@yahoo.com')
// 		->subject('Welcome to Global Merit');
// 	});

// 	return 'DONE!';
// });

