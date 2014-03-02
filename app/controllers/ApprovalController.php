<?php

use Carbon\Carbon;

class ApprovalController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        return 'hello';
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        return View::make('approvals.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$data= new Approval;
		$input = Input::all();

		$data->approvedAmount=$input['approvedAmount'];
		$data->term=$input['term'];
		$data->loanClass=$input['loanClass'];
		$data->interest=$input['interest'];
		$data->amortization=$input['amortization'];
		$data->paymentStart=$input['paymentStart'];
		$data->maturityDate=$input['maturityDate'];
		$data->serviceFee=$input['serviceFee'];
		$data->MRI=$input['MRI'];
		$data->RD_BIR_LTO=$input['RD_BIR_LTO'];
		$data->netAmount=$input['netAmount'];
		$data->approvedBy=$input['approvedBy'];
		$data->position=$input['position'];
		$data->remarks=$input['remarks'];
		$data->personal_information_id=$input['personal_information_id'];

		$data->save();
		return Redirect::to('loanapplication');

	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{	
		$dtz='Asia/Manila';
		$date=Carbon::now($dtz)->format('M j, Y');
		$approval = PersonalInformation::find($id);
        return View::make('admin.approved', compact('approval','date'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
        return View::make('approvals.edit');
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$personalinfo=PersonalInformation::find($id);
		$balance = new Balance;
		$input = Input::all();

		$balance->personal_information_id=$input['pid'];
		$balance->balance=$input['approvedAmount'];

		$personalinfo->status_id=$input['status_id'];
		$personalinfo->approval->approvedAmount=$input['approvedAmount'];
		$personalinfo->approval->term=$input['term'];
		$personalinfo->approval->amortization_type=$input['amortization_type'];
		$personalinfo->approval->loanClass=$input['loanClass'];
		$personalinfo->approval->interest=$input['interest'];
		$personalinfo->approval->amortization=$input['amortization'];
		$personalinfo->approval->approvedDate=$input['approvedDate'];
		$personalinfo->approval->serviceFee=$input['serviceFee'];
		$personalinfo->approval->docStamp=$input['docStamp'];
		$personalinfo->approval->MRI=$input['MRI'];
		$personalinfo->approval->RD_BIR_LTO=$input['RD_BIR_LTO'];
		$personalinfo->approval->netAmount=$input['netAmount'];
		$personalinfo->approval->approvedBy=$input['approvedBy'];
		$personalinfo->approval->position=$input['position'];
		$personalinfo->approval->remarks=$input['remarks'];
		
		
		$personalinfo->push();
		$balance->save();
		return Redirect::to('loanapplication');
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
