<?php

use Carbon\Carbon;

class ReleasingController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        return View::make('releasings.index');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        return View::make('releasings.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$releasing = new Release;
		$input = Input::all();

		$releasing->personal_information_id=$input['personal_information_id'];
		if(Input::get('checkVoucher') === '1'){
			$releasing->checkVoucher=$input['checkVoucher'];
		}
		if (Input::get('loanReleaseDisclosure') === '1') {
					$releasing->loanReleaseDisclosure=$input['loanReleaseDisclosure'];
		}
		if(Input::get('releaseStmnt') === '1'){
			$releasing->releaseStmnt=$input['releaseStmnt'];
		}
		if(Input::get('schedOfAmortization') === '1'){
			$releasing->schedOfAmortization=$input['schedOfAmortization'];
		}
		if(Input::get('applicationForm') === '1'){
			$releasing->applicationForm=$input['applicationForm'];
		}
		if(Input::get('coverSheet') === '1'){
			$releasing->coverSheet=$input['coverSheet'];
		}
		if (Input::get('creditInvestigationReport') === '1') {
			$releasing->creditInvestigationReport=$input['creditInvestigationReport'];
		}
		if(Input::get('appraisalReport') === '1'){
			$releasing->appraisalReport=$input['appraisalReport'];
		}
		if(Input::get('cashFlowAnalysis') === '1'){
			$releasing->cashFlowAnalysis=$input['cashFlowAnalysis'];
		}
		if(Input::get('promisoryNote') === '1'){
			$releasing->promisoryNote=$input['promisoryNote'];
		}
		if(Input::get('chattelMortgage') === '1'){
			$releasing->chattelMortgage=$input['chattelMortgage'];
		}
		if(Input::get('realEstateMortgage') === '1'){
			$releasing->realEstateMortgage=$input['realEstateMortgage'];
		}
		if(Input::get('securityAgreement') === '1'){
			$releasing->securityAgreement=$input['securityAgreement'];
		}
		if(Input::get('voluntaryOfferToSurrender') === '1'){
			$releasing->voluntaryOfferToSurrender=$input['voluntaryOfferToSurrender'];
		}
		if(Input::get('insuranceForm') === '1'){
			$releasing->insuranceForm=$input['insuranceForm'];
		}
		if(Input::get('otherRequirements') === '1'){
			$releasing->otherRequirements=$input['otherRequirements'];
		}
		if(Input::get('accountLedger') === '1'){
			$releasing->accountLedger=$input['accountLedger'];
		}

		$releasing->save();

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
		$release=PersonalInformation::find($id);
        return View::make('admin.loanreleasing',compact('release','date'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
        return View::make('releasings.edit');
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
		$input=Input::all();

		$personalinfo->status_id=$input['status_id'];
		
		if(Input::get('checkVoucher') === '1'){
			$personalinfo->release->checkVoucher=$input['checkVoucher'];
		}
		if (Input::get('loanReleaseDisclosure') === '1') {
			$personalinfo->release->loanReleaseDisclosure=$input['loanReleaseDisclosure'];
		}
		if(Input::get('releaseStmnt') === '1'){
			$personalinfo->release->releaseStmnt=$input['releaseStmnt'];
		}
		if(Input::get('schedOfAmortization') === '1'){
			$personalinfo->release->schedOfAmortization=$input['schedOfAmortization'];
		}
		if(Input::get('applicationForm') === '1'){
			$personalinfo->release->applicationForm=$input['applicationForm'];
		}
		if(Input::get('coverSheet') === '1'){
			$personalinfo->release->coverSheet=$input['coverSheet'];
		}
		if (Input::get('creditInvestigationReport') === '1') {
			$personalinfo->release->creditInvestigationReport=$input['creditInvestigationReport'];
		}
		if(Input::get('appraisalReport') === '1'){
			$personalinfo->release->appraisalReport=$input['appraisalReport'];
		}
		if(Input::get('cashFlowAnalysis') === '1'){
			$personalinfo->release->cashFlowAnalysis=$input['cashFlowAnalysis'];
		}
		if(Input::get('promisoryNote') === '1'){
			$personalinfo->release->promisoryNote=$input['promisoryNote'];
		}
		if(Input::get('chattelMortgage') === '1'){
			$personalinfo->release->chattelMortgage=$input['chattelMortgage'];
		}
		if(Input::get('realEstateMortgage') === '1'){
			$personalinfo->release->realEstateMortgage=$input['realEstateMortgage'];
		}
		if(Input::get('securityAgreement') === '1'){
			$personalinfo->release->securityAgreement=$input['securityAgreement'];
		}
		if(Input::get('voluntaryOfferToSurrender') === '1'){
			$personalinfo->release->voluntaryOfferToSurrender=$input['voluntaryOfferToSurrender'];
		}
		if(Input::get('insuranceForm') === '1'){
			$personalinfo->release->insuranceForm=$input['insuranceForm'];
		}
		if(Input::get('otherRequirements') === '1'){
			$personalinfo->release->otherRequirements=$input['otherRequirements'];
		}
		if(Input::get('accountLedger') === '1'){
			$personalinfo->release->accountLedger=$input['accountLedger'];
		}

		$personalinfo->release->datereleased=$input['datereleased'];
		$personalinfo->release->datemature=$input['datemature'];
		$personalinfo->push();
		

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
