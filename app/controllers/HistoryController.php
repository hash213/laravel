<?php
use Carbon\Carbon;

class PaymentController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        //return View::make('personalinfos.index');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
       // return View::make('personalinfos.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(){
		// $payment = new Payment;
		// $balance = new Balance;
		// $input = Input::all();
		// $payment->payment=$input['payments'];
		// $payment->penalty=$input['penalty'];
		// $payment->personal_information_id=$input['pid'];

		// $balance->personal_information_id=$input['pid'];
		// $balance->balance=$input['total'];

		// $payment->save();
		// $balance->save();
		// return Redirect::to('amortizationschedule')->withflash('message','Database updated');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{	
		return 'congratz!';
		// $dtz='Asia/Manila';
		// $date=Carbon::now($dtz)->format('M j, Y');
		// $ndate=Carbon::now()->addDays(1)->format('M j, Y');
		// $ndate2=Carbon::now()->addDays(7)->format('M j, Y');
		// $ndate3=Carbon::now()->addDays(30)->format('M j, Y');
		// $payment= PersonalInformation::find($id);
		// $payment2= PersonalInformation::find($id);
		// $payment3= PersonalInformation::find($id);
		// $balance= Balance::where('personal_information_id','=',$id)->get()->last();
  //       return View::make('admin.payment',compact('payment','payment2','payment3','date','ndate','ndate2','ndate3','balance'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
     //   return View::make('personalinfos.edit');
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
		//
	}

}
