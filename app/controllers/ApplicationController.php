<?php

class ApplicationController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        return View::make('application.application');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        return View::make('applications.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(){
		// $rules=array(
		// 		'presentEmp'=>'required|alpha_spaces',
		// 		'empAddress'=>'required|alpha_num',
		// 	   	'monthlySalary'=>'required|numeric',
		// 	   	'position'=>'required|alpha_spaces',
		// 	   	'lenOfService'=>'required|alpha_num',
		// 	   	'desiredAmount'=>'required|numeric',
		// 	   	'appGrossIncome' =>'required|numeric',
		// 	   //	'appSpouseGrossIncome'=>'required|numeric',
		// 	   	//'otherIncome'=>'required|numeric',
		// 	   	'totalGrossIncome'=>'required|numeric',
		// 	   	'householdExp'=>'required|numeric',
		// 	   	'totalExp'=>'required|numeric',
		// 	   	'netIncome'=>'required|numeric',
		// 		);

		$input = Input::all();
		// $data=Validator::make($input,$rules);

		// if($data->passes()){

		$personalInfo= new PersonalInformation;
		$dependents= new DependentEntity;
		$collateral = new Collateral;
		$comaker =new CoMaker;
		$approval= new Approval;
		$loanRelease = new Release;
		$requirements= new Requirement;
		

		$personalInfo->fname=$input['fname'];
		$personalInfo->mname=$input['mname'];
		$personalInfo->lname=$input['lname'];
		$personalInfo->bday=$input['bday'];
		$personalInfo->bplace=$input['bplace'];
		$personalInfo->present_address=$input['present_address'];
		$personalInfo->contact_nos=$input['contact_nos'];
		$personalInfo->civil_status=$input['civil_status'];
		$personalInfo->loan_class=$input['loan_class'];
		if(Input::get('src_income_shares') === '1'){
			$personalInfo->src_income_shares=$input['src_income_shares'];
		}
		if (Input::get('src_income_rentals') === '1') {
					$personalInfo->src_income_rentals=$input['src_income_rentals'];
		}
		if(Input::get('src_income_commission') === '1'){
			$personalInfo->src_income_commission=$input['src_income_commission'];
		}
		if(Input::get('src_income_allotment') === '1'){
			$personalInfo->src_income_allotment=$input['src_income_allotment'];
		}
		if(Input::get('src_income_employment') === '1'){
			$personalInfo->src_income_employment=$input['src_income_employment'];
		}
		if(Input::get('src_income_business') === '1'){
			$personalInfo->src_income_business=$input['src_income_business'];
		}
		if(Input::get('src_income_operator') === '1'){
			$personalInfo->src_income_operator=$input['src_income_operator'];
		}
		if(Input::get('src_income_farming') === '1'){
			$personalInfo->src_income_farming=$input['src_income_farming'];
		}
		$personalInfo->presentEmp=$input['presentEmp'];
		$personalInfo->empAddress=$input['empAddress'];
		$personalInfo->monthlySalary=$input['monthlySalary'];
		$personalInfo->position=$input['position'];
		$personalInfo->lenOfService=$input['lenOfService'];
		$personalInfo->desiredAmount=$input['desiredAmount'];
		$personalInfo->term=$input['term'];
		$personalInfo->amortization_type=$input['amortization_type'];
		$personalInfo->loanPurpose=$input['loanPurpose'];
		$personalInfo->appGrossIncome=$input['appGrossIncome'];
		$personalInfo->appSpouseGrossIncome=$input['appSpouseGrossIncome'];
		$personalInfo->otherIncome=$input['otherIncome'];
		$personalInfo->totalGrossIncome=$input['totalGrossIncome'];
		$personalInfo->householdExp=$input['householdExp'];
		$personalInfo->businessExp=$input['businessExp'];
		$personalInfo->totalExp=$input['totalExp'];
		$personalInfo->netIncome=$input['netIncome'];
		$personalInfo->spouseName=$input['spouseName'];
		$personalInfo->spousePresentEmp=$input['spousePresentEmp'];
		$personalInfo->spouseEmpAddress=$input['spouseEmpAddress'];
		$personalInfo->spouseMonthlySalary=$input['spouseMonthlySalary'];
		$personalInfo->spousePosition=$input['spousePosition'];
		$personalInfo->spouseLenOfService=$input['spouseLenOfService'];
		$personalInfo->dependent_nos=$input['dependent_nos'];
		$personalInfo->status_id=$input['status_id'];
		$personalInfo->user_id=Auth::user()->id;

		$dependents->name=$input['name'];
		$dependents->name2=$input['name2'];
		$dependents->name3=$input['name3'];
		$dependents->name4=$input['name4'];
		$dependents->level=$input['level'];
		$dependents->level2=$input['level2'];
		$dependents->level3=$input['level3'];
		$dependents->level4=$input['level4'];
		$dependents->school_attended=$input['school_attended'];
		$dependents->school_attended2=$input['school_attended2'];
		$dependents->school_attended3=$input['school_attended3'];
		$dependents->school_attended4=$input['school_attended4'];
		$dependents->user_id=Auth::user()->id;

		//collateral 

		$collateral->appliance_name=$input['appliance_name'];
		$collateral->appliance_name1=$input['appliance_name1'];
		$collateral->appliance_name2=$input['appliance_name2'];
		$collateral->appliance_name3=$input['appliance_name3'];
	

		$collateral->serial_nos=$input['serial_nos'];
		$collateral->serial_nos1=$input['serial_nos1'];
		$collateral->serial_nos2=$input['serial_nos2'];
		$collateral->serial_nos3=$input['serial_nos3'];
		

		$collateral->title_nos=$input['title_nos'];
		$collateral->nos_of_sq=$input['nos_of_sq'];
		$collateral->area_location=$input['area_location'];
		

		$collateral->mark_type=$input['mark_type'];
		$collateral->chassis_nos=$input['chassis_nos'];
		$collateral->engine_nos=$input['engine_nos'];
		

		$collateral->bank_name=$input['bank_name'];
		$collateral->account_name=$input['account_name'];
		$collateral->account_number=$input['account_number'];
		$collateral->user_id=Auth::user()->id;

		$collateral->business_name=$input['business_name'];
		$collateral->nature_of_business=$input['nature_of_business'];
		$collateral->yr_of_operation=$input['yr_of_operation'];
		$collateral->contact_nos=$input['contact_nos'];
		$collateral->business_permit_nos=$input['business_name'];
		$collateral->business_add=$input['business_add'];
		

		$comaker->name=$input['name'];
		$comaker->comaker_civil_status= $input['comaker_civil_status'];
		$comaker->contact_nos=$input['contact_nos'];
		$comaker->address=$input['address'];
		$comaker->comaker_birthdate=$input['comaker_birthdate'];
		$comaker->comaker_age=$input['comaker_age'];
		$comaker->comaker_bplace=$input['comaker_bplace'];
		$comaker->comaker_spouse=$input['comaker_spouse'];
		$comaker->spouse_birthdate=$input['spouse_birthdate'];
		$comaker->spouse_age=$input['spouse_age'];
		$comaker->spouse_bplace=$input['spouse_bplace'];
		

		$comaker->comaker_gross_income=$input['comaker_gross_income'];
		$comaker->spouse_gross_income=$input['spouse_gross_income'];
		$comaker->other_income=$input['other_income'];
		$comaker->comaker_total_gross_income=$input['comaker_total_gross_income'];
		$comaker->comaker_household_exp=$input['comaker_household_exp'];
		$comaker->comaker_business_exp=$input['comaker_business_exp'];
		$comaker->comaker_total_exp=$input['comaker_total_exp'];
		$comaker->comaker_net_income=$input['comaker_net_income'];
		

		$comaker->comaker_employer=$input['comaker_employer'];
		$comaker->comaker_address=$input['comaker_address'];
		$comaker->comaker_salaryPerMonth=$input['comaker_salaryPerMonth'];
		$comaker->comaker_position=$input['comaker_position'];
		$comaker->comaker_len_of_service=$input['comaker_len_of_service'];
	

		if(Input::get('comaker_business') === '1'){
		$comaker->comaker_business=$input['comaker_business'];
		}
		if(Input::get('comaker_employment') === '1'){
			$comaker->comaker_employment=$input['comaker_employment'];
		}
		if(Input::get('other') === '1'){
			$comaker->other=$input['other'];
		}
		$comaker->other_text=$input['other_text'];
		$comaker->user_id=Auth::user()->id;

		$personalInfo->save();
		

		$dependents->personal_information_id=PersonalInformation::all()->last()->id;
		$collateral->personal_information_id=PersonalInformation::all()->last()->id;
  		$comaker->personal_information_id=PersonalInformation::all()->last()->id;
		$approval->personal_information_id=PersonalInformation::all()->last()->id;
		$loanRelease->personal_information_id=PersonalInformation::all()->last()->id;
		$requirements->personal_information_id=PersonalInformation::all()->last()->id;

		$requirements->save();
		$dependents->save();
		$collateral->save();
		$comaker->save();
		$loanRelease->save();
		$approval->save();


		return Redirect::to('client');
	// 	}
	// return Redirect::to('application')->withInput()->withErrors($data);

}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$applicant = PersonalInformation::with('users')->get();
        return View::make('admin.applicantinfo', compact('applicant'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
        return View::make('applications.edit');
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



	public function displayApplication($id)
	{
		

	}

}
