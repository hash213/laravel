<?php

class RequirementController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        return View::make('hello');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        return View::make('requirements.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$requirement= new Requirement;
		$input = Input::all();

		if(Input::get('Id_picture') === '1'){
		$requirement->Id_picture=$input['Id_picture'];
		}
		if(Input::get('valid_id_photocopy') === '1'){
		$requirement->valid_id_photocopy=$input['valid_id_photocopy'];
		}
		if(Input::get('photocopy_CTC') === '1'){
		$requirement->photocopy_CTC=$input['photocopy_CTC'];
		}
		if(Input::get('proof_of_billing') === '1'){
		$requirement->proof_of_billing=$input['proof_of_billing'];
		}
		if(Input::get('Collateral_photo') === '1'){
		$requirement->Collateral_photo=$input['Collateral_photo'];
		}
		if(Input::get('Pay_slip') === '1'){
		$requirement->Pay_slip=$input['Pay_slip'];
		}
		if(Input::get('COE') === '1'){
		$requirement->COE=$input['COE'];
		}
		if(Input::get('business_permit') === '1'){
		$requirement->business_permit=$input['business_permit'];
		}
		if(Input::get('DTI') === '1'){
		$requirement->DTI=$input['DTI'];
		}
		if(Input::get('Store_photo') === '1'){
		$requirement->Store_photo=$input['Store_photo'];
		}
		
		$requirement->personal_information_id= $input['Id'];
		
		$requirement->save();

	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$requirement = PersonalInformation::find($id);
        return View::make('admin.requirement', compact('requirement'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
        return View::make('requirements.edit');
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
		$input = Input::all();


		$personalinfo->status_id=$input['status_id'];
		if(Input::get('Id_picture') === '1'){
		$personalinfo->requirement->Id_picture=$input['Id_picture'];
		}
		if(Input::get('valid_id_photocopy') === '1'){
		$personalinfo->requirement->valid_id_photocopy=$input['valid_id_photocopy'];
		}
		if(Input::get('photocopy_CTC') === '1'){
		$personalinfo->requirement->photocopy_CTC=$input['photocopy_CTC'];
		}
		if(Input::get('proof_of_billing') === '1'){
		$personalinfo->requirement->proof_of_billing=$input['proof_of_billing'];
		}
		if(Input::get('Collateral_photo') === '1'){
		$personalinfo->requirement->Collateral_photo=$input['Collateral_photo'];
		}
		if(Input::get('Pay_slip') === '1'){
		$personalinfo->requirement->Pay_slip=$input['Pay_slip'];
		}
		if(Input::get('COE') === '1'){
		$personalinfo->requirement->COE=$input['COE'];
		}
		if(Input::get('business_permit') === '1'){
		$personalinfo->requirement->business_permit=$input['business_permit'];
		}
		if(Input::get('DTI') === '1'){
		$personalinfo->requirement->DTI=$input['DTI'];
		}
		if(Input::get('Store_photo') === '1'){
		$personalinfo->requirement->Store_photo=$input['Store_photo'];
		}
		
		
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
