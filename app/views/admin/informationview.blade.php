@extends('layout.main')

@section('header')
<nav class="navbar navbar-default navbar-fixed-top navbar-inverse" id="show-home">
		<div class="container">
		<div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
         <a class="navbar-brand" href="#">GM Financenter</a>
        </div>
        <div class="navbar-collapse collapse ">
          <ul class="nav navbar-nav">
            <li ><a href="{{URL::to('profile')}}">Home</a></li>
            <li class="active"><a href="{{URL::to('loanapplication')}}">Loan application</a></li>
            <li><a href="{{URL::to('amortizationschedule')}}">Schedule Of Amortization</a></li>
          </ul>
          <ul class="nav navbar-nav pull-right">
            <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Welcome: {{displayName().' '.displayLname()}}  <b class="caret"></b></a>
			<ul class="dropdown-menu">
				@if(Auth::check())
				<li><a href="{{URL::route('logout')}}">logout</a></li>
				@endif
			</ul>
            </li>
            </ul>
         	
        </div><!--/.nav-collapse -->
	</div>

	</nav>
	<div class="container top-div2 col-lg-offset-10">
	<a class="btn btn-lg btn-danger" href="{{URL::to('loanapplication')}}"><span class="glyphicon glyphicon-arrow-left"></span>  Back</a>
	</div>
@stop

@section('content')
 


 <ul class="nav nav-tabs">
  <li class="active"><a href="#home" data-toggle="tab">Personal Information</a></li>
  <li><a href="#profile" data-toggle="tab">Collateral</a></li>
  <li><a href="#messages" data-toggle="tab">Comaker</a></li>
   <li><a href="#requirement" data-toggle="tab">Basic Requirements</a></li>
   <li><a href="#requireddocs" data-toggle="tab">Required Documents</a></li>
   <li><a href="#statementofaccount" data-toggle="tab">Statement of Account</a></li>
</ul>




<!-- Tab panes -->
<div class="tab-content">

  <div class="tab-pane active top-div" id="home">
 {{Form::model($personalinfo)}}
		<div class="col-sm-11">
		<h4>Client Information</h4>
		
  			<div class="col-sm-3">
				<label for="">First Name:</label>
				{{$personalinfo->fname}}
				</div>
			<div class="col-sm-3">
				<label for="">Middle Name:</label>
				{{$personalinfo->mname}}
			</div>
			<div class="col-sm-3">
				<label for="">Last Name:</label>
				{{$personalinfo->lname}}
			</div>
			<div class="col-sm-3 bottom">
				<label for="">Loan Classification:</label>
				{{$personalinfo->loan_class}}
			</div>

			<div class="col-sm-3 ">
				<label for="">Birthdate:</label>
				{{$personalinfo->bday}}
				</div>
			<div class="col-sm-3">
				<label for="">Birth Place:</label>
				{{$personalinfo->bplace}}
				</div>

			<div class="col-sm-4 bottom">
				<label for="">Present Address:</label>
				{{$personalinfo->present_address}}
				</div>

			<div class="col-sm-3">
				<label for="">Contact nos.:</label>
				{{$personalinfo->contact_nos}}
				</div>

			<div class="col-sm-4">
				<label>Civil Status:</label>
				{{$personalinfo->civil_status}}
			</div>
			</div>

			<div class="col-sm-11">
			 <hr>
				<h4>Spouse Information</h4>
					<div class="col-sm-4">
					<label>Spouse Name:</label>
					{{$personalinfo->spouseName}}
					</div>
					<div class="col-sm-4">
					<label>Employer Name:</label>
					{{$personalinfo->spousePresentEmp}}
					</div>
					<div class="col-sm-4 bottom">
					<label>Employer Address:</label>
					{{$personalinfo->spouseEmpAddress}}
					</div>
					<div class="col-sm-4">
					<label>Monthly Salary:</label>
					{{$personalinfo->spouseMonthlySalary}}
					</div>
					<div class="col-sm-4">
					<label>Position:</label>
					{{$personalinfo->spousePosition}}
					</div>
					<div class="col-sm-4">
					<label>Length of Service:</label>
					{{$personalinfo->spouseLenOfService}}
					</div>
				</div>

				<div class="col-sm-11">
				<hr>
					<h4>Dependents</h4>
					<label>Number of Dependents:</label>
					{{$personalinfo->dependent_nos}}

					<div class="col-sm-12">
					
					<div class="col-sm-3">
					<label>Name:</label>
					<p>{{$personalinfo->dependents->name}}</p>
					<p>{{$personalinfo->dependents->name2}}</p>
					<p>{{$personalinfo->dependents->name3}}</p>
					<p>{{$personalinfo->dependents->name4}}</p>
					</div>

					<div class="col-sm-3">
					<label>School Level:</label>
					<p>{{$personalinfo->dependents->level}}</p>
					<p>{{$personalinfo->dependents->level2}}</p>
					<p>{{$personalinfo->dependents->level3}}</p>
					<p>{{$personalinfo->dependents->level4}}</p>
					</div>

					<div class="col-sm-5">
					<label>School Attended:</label>
					<p>{{$personalinfo->dependents->school_attended}}</p>
					<p>{{$personalinfo->dependents->school_attended2}}</p>
					<p>{{$personalinfo->dependents->school_attended3}}</p>
					<p>{{$personalinfo->dependents->school_attended4}}</p>
					</div>

					</div>			
				</div>

		
			<div class="col-sm-11">
				  <hr>
				<label>Source of Income:</label>
				<label  class="checkbox-inline">
					{{Form::checkbox('src_income_shares','1')}} Shares</label>
					
				<label  class="checkbox-inline">
					{{Form::checkbox('src_income_rentals','1')}} Rentals</label>
				<label  class="checkbox-inline">
					{{Form::checkbox('src_income_commission','1')}} Commission</label>
				<label  class="checkbox-inline">
					{{Form::checkbox('src_income_allotment','1')}} Allotment</label>
				<label  class="checkbox-inline">
					{{Form::checkbox('src_income_employment','1')}}Employment</label>
				<label  class="checkbox-inline">
					{{Form::checkbox('src_income_business','1')}}Business</label>
				<label  class="checkbox-inline">
					{{Form::checkbox('src_income_operator','1')}} Motor Vehicle Operator</label>
				<label  class="checkbox-inline">
					{{Form::checkbox('src_income_farming','1')}} Farming</label>
					<hr>
			</div>

			<div class="col-sm-11">
				<h4>Employment</h4>
				<div class="col-sm-3">
				<label>Present Employer:</label>
				{{$personalinfo->presentEmp}}
				</div>
			<div class="col-sm-5">
				<label>Address:</label>
				{{$personalinfo->empAddress}}</div>
			<div class="col-sm-3">
				<label>Salary/mo:</label>
				{{$personalinfo->monthlySalary}}</div>
			<div class="col-sm-3">
				<label>Position:</label>
				{{$personalinfo->position}}</div>
			<div class="col-sm-4">
				<label>Length of Service:</label>
				{{$personalinfo->lenOfService}}
				</div>		
			</div>

			<div class="col-sm-11">
			<hr>
				<h4>Desired Loan Amount</h4>
				<div class="col-sm-4">
				<label>Desired Amount: <p>{{$personalinfo->desiredAmount}}</p></label>
				</div>
				<div class="col-sm-4">
				<label>Term:<p>{{$personalinfo->term}}</p> </label>
				</div>
				<div class="col-sm-4">
				<label>Loan Purpose: <p>{{$personalinfo->loanPurpose}}</p> </label>
				</div>

			</div>

			<div class="col-sm-11">
				<hr>
				<h4>Statement of Monthly Income</h4>
				<div class="form-horizontal">
				<div class="form-group">
				<label for="" class="col-lg-3 control-label">Applicant Gross Income:</label>
				<div class="col-lg-4">
				<p>{{$personalinfo->appGrossIncome}}</p>
				</div>
				</div>

				<div class="form-group">
				<label for="" class="col-lg-3 control-label">Spouse Gross Income:</label>
				<div class="col-lg-4">
				<p>{{$personalinfo->appSpouseGrossIncome}}</p>
				</div>
				</div>

				<div class="form-group">
				<label for="" class="col-lg-3 control-label">Other Income:</label>
				<div class="col-lg-4">
				<p>{{$personalinfo->otherIncome}}</p>
				</div>
				</div>

				<div class="form-group">
				<label for="" class="col-lg-3 control-label">Total Gross Income:</label>
				<div class="col-lg-4">
				<p>{{$personalinfo->totalGrossIncome}}</p>
				</div>
				</div>

				<div class="form-group">
				<label for="" class="col-lg-3 control-label">Household Expense:</label>
				<div class="col-lg-4">
				<p>{{$personalinfo->householdExp}}</p>
				</div>
				</div>
				<div class="form-group">
				<label for="" class="col-lg-3 control-label">Business Expense:</label>
				<div class="col-lg-4">
				<p>{{$personalinfo->businessExp}}</p>
				</div>
				</div>
				<div class="form-group">
				<label for="" class="col-lg-3 control-label">Total Expense:</label>
				<div class="col-lg-4">
				<p>{{$personalinfo->totalExp}}</p>
				</div>
				</div>
				<div class="form-group">
				<label for="" class="col-lg-3 control-label">Net Income:</label>
				<div class="col-lg-4">
				<p>{{$personalinfo->netIncome}}</p>
				</div>
				</div>
				
				</div>

	<div class="text-center">
		<a class="btn btn-lg btn-info" href="#" onclick="window.print();return false;"><span class="glyphicon glyphicon-hdd"></span> Print this Document</a>
	</div>
			</div>
	</div>
	
  <div class="tab-pane top-div" id="profile">
  <div class="col-sm-11">
  	<h4>Appliances</h4>
					<div class="col-sm-12">
					
					<div class="col-sm-4">
					<label>Appliances:</label>
					<p>{{$personalinfo->collateral->appliance_name}}</p>
					<p>{{$personalinfo->collateral->appliance_name1}}</p>
					<p>{{$personalinfo->collateral->appliance_name2}}</p>
					<p>{{$personalinfo->collateral->appliance_name3}}</p>
					</div>

					<div class="col-sm-4">
					<label>Serial Number:</label>
					<p>{{$personalinfo->collateral->serial_nos}}</p>
					<p>{{$personalinfo->collateral->serial_nos1}}</p>
					<p>{{$personalinfo->collateral->serial_nos2}}</p>
					<p>{{$personalinfo->collateral->serial_nos3}}</p>
					</div>
				</div>
  		</div>


		<div class="col-sm-11">
		<hr>
			<h4>Real State Properties</h4>
			      <div class="col-sm-4">
					<label>Title Number:</label>
					{{$personalinfo->collateral->title_nos}}
					</div>

					<div class="col-sm-4">
					<label>Number of Square Meter:</label>
					{{$personalinfo->collateral->nos_of_sq}}
					</div>

					<div class="col-sm-4">
					<label>Area of Location:</label>
					{{$personalinfo->collateral->area_location}}
					</div>
		</div>

		<div class="col-sm-11">
		<hr>
			<h4>Vehicle</h4>
			      <div class="col-sm-4">
					<label>Make/Type:</label>
					{{$personalinfo->collateral->mark_type}}
					</div>

					<div class="col-sm-4">
					<label>Chassis Number:</label>
					{{$personalinfo->collateral->chassis_nos}}
					</div>

					<div class="col-sm-4">
					<label>Engine Number:</label>
					{{$personalinfo->collateral->engine_nos}}
					</div>
		</div>


		<div class="col-sm-11">
		<hr>
			<h4>Bank</h4>
			      <div class="col-sm-4">
					<label>Bank Name:</label>
					{{$personalinfo->collateral->bank_name}}
					</div>

					<div class="col-sm-4">
					<label>Account Name:</label>
					{{$personalinfo->collateral->account_name}}
					</div>

					<div class="col-sm-4">
					<label>Account Number:</label>
					{{$personalinfo->collateral->account_number}}
				</div>
		</div>

		
		<div class="col-sm-11">
		<hr>
			<h4>Business</h4>
			      <div class="col-sm-5">
					<label>Business Name:</label>
					{{$personalinfo->collateral->business_name}}
					</div>

					<div class="col-sm-6">
					<label>Nature of Business:</label>
					{{$personalinfo->collateral->nature_of_business}}
					</div>

					<div class="col-sm-5">
					<label>Year of Operation:</label>
					{{$personalinfo->collateral->yr_of_operation}}
					</div>

				<div class="col-sm-4">
					<label>Contact Number:</label>
					{{$personalinfo->collateral->contact_nos}}
				</div>

				<div class="col-sm-5">
					<label>Business Permit No:</label>
					{{$personalinfo->collateral->business_permit_nos}}
				</div>

				<div class="col-sm-7">
					<label>Business Address:</label>
					{{$personalinfo->collateral->business_add}}
				</div>
		</div>

	<div class=" top-div text-center">
		<a class="btn btn-lg btn-info" href="#" onclick="window.print();return false;"><span class="glyphicon glyphicon-hdd"></span> Print this Document</a>
	</div>
  </div>


  <div class="tab-pane top-div" id="messages">
  	 <h4>Comaker Personal Information</h4>
			<div class="col-sm-11">
				<div class="col-sm-3">
					<label>Name:</label>
					{{$personalinfo->comaker->name}}
				</div>
				<div class="col-sm-3">
					<label>Civil Status:</label>
					{{$personalinfo->comaker->comaker_civil_status}}
				</div>
				<div class="col-sm-4 bottom">
					<label>Contact Number:</label>
					{{$personalinfo->comaker->contact_nos}}
				</div>
				<div class="col-sm-10 bottom">
					<label>Address:</label>
					{{$personalinfo->comaker->address}}
				</div>
				<div class="col-sm-3">
					<label>Date of Birth:</label>
					{{$personalinfo->comaker->comaker_birthdate}}
				</div>
				<div class="col-sm-3">
					<label>Age:</label>
					{{$personalinfo->comaker_age}}
				</div>
				<div class="col-sm-3">
					<label>Place of Birth:</label>
					{{$personalinfo->comaker->comaker_bplace}}
				</div>

			</div>

			<div class="col-sm-11">
				<hr>
					<h4>Co-maker Spouse Information</h4>
				
				<div class="col-sm-3">
					<label>Spouse Name:</label>
					{{$personalinfo->comaker->comaker_spouse}}
				</div>

				<div class="col-sm-3">
					<label>Date of Birth:</label>
					{{$personalinfo->comaker->spouse_birthdate}}
				</div>
				<div class="col-sm-2">
					<label>Age:</label>
					{{$personalinfo->comaker->spouse_age}}
				</div>
				<div class="col-sm-3 bottom">
					<label>Place of Birth:</label>
					{{$personalinfo->comaker->spouse_bplace}}
				</div>
		</div>

		<div class="col-lg-11">
			<label for="">Sources of Income</label>
			<label for="" class="checkbox-inline">{{Form::checkbox('business','1',$personalinfo->comaker->comaker_business)}}Business</label>
			<label for="" class="checkbox-inline">{{Form::checkbox('comaker_employment','1', $personalinfo->comaker->comaker_employment)}}Employment</label>
			<label for="" class="checkbox-inline">{{Form::checkbox('other','1',$personalinfo->comaker->other)}}Others,pls.Specify</label>
			<div class="col-lg-offset-6">
			<input name="other_text" type="text" class="form-control">
			</div>
		</div>

		<div class="col-lg-11">
		<hr>
			<h4>Co-maker Employment</h4>
			 <div class="col-sm-3">
					<label>Present Employer:</label>
					{{$personalinfo->comaker->comaker_employer}}
				</div>
				<div class="col-sm-3">
					<label>Employer Address:</label>
					{{$personalinfo->comaker->comaker_address}}
				</div>
				<div class="col-sm-3">
					<label>Monthly Salary:</label>
					{{$personalinfo->comaker->comaker_salaryPerMonth}}
				</div>
				<div class="col-sm-3">
					<label>Position:</label>
					{{$personalinfo->comaker->comaker_position}}
				</div>
				<div class="col-sm-3">
					<label>Length of Service:</label>
					{{$personalinfo->comaker->comaker_len_of_service}}
				</div>
		</div>

		<div class="col-lg-11">
		<hr>
			<h4>Co-maker Statement of Monthly Income</h4>
			<div class="form-horizontal">
				<div class="form-group">
				<label for="" class="col-lg-3 control-label">Comaker Gross Income:</label>
				<div class="col-lg-4">
				<p>{{$personalinfo->comaker->comaker_gross_income}}</p>
				</div>
				</div>

				<div class="form-group">
				<label for="" class="col-lg-3 control-label">Spouse Gross Income:</label>
				<div class="col-lg-4">
				<p>{{$personalinfo->comaker->spouse_gross_income}}</p>
				</div>
				</div>

				<div class="form-group">
				<label for="" class="col-lg-3 control-label">Other Income:</label>
				<div class="col-lg-4">
				<p>{{$personalinfo->comaker->other_income}}</p>
				</div>
				</div>

				<div class="form-group">
				<label for="" class="col-lg-3 control-label">Total Gross Income:</label>
				<div class="col-lg-4">
				<p>{{$personalinfo->comaker->comaker_gross_income}}</p>
				</div>
				</div>

				<div class="form-group">
				<label for="" class="col-lg-3 control-label">Household Expense:</label>
				<div class="col-lg-4">
				<p>{{$personalinfo->comaker->comaker_household_exp}}</p>
				</div>
				</div>
				<div class="form-group">
				<label for="" class="col-lg-3 control-label">Business Expense:</label>
				<div class="col-lg-4">
				<p>{{$personalinfo->comaker->comaker_business_exp}}</p>
				</div>
				</div>
				<div class="form-group">
				<label for="" class="col-lg-3 control-label">Total Expense:</label>
				<div class="col-lg-4">
				<p>{{$personalinfo->comaker->comaker_total_exp}}</p>
				</div>
				</div>
				<div class="form-group">
				<label for="" class="col-lg-3 control-label">Net Income:</label>
				<div class="col-lg-4">
				<p>{{$personalinfo->comaker->comaker_net_income}}</p>
				</div>
				</div>
		</div>
		<div class="text-center">
	<a class="btn btn-lg btn-info" href="#" onclick="window.print();return false;"><span class="glyphicon glyphicon-hdd"></span> Print this Document</a>
	</div>

	</div>

  </div>

  <div class="tab-pane top-div" id="requirement">
  <div class="col-sm-11">
  <h4 class="">Basic Requirements</h4>
				
				<div class="container well">
				
				<div><label  class="checkbox-inline"> {{Form::checkbox('Id_picture','1', $personalinfo->requirement->Id_picture)}}2 pcs. 2x2 ID Picture(Borrower,Spouse and Co-Maker)</label></div>
				<div><label  class="checkbox-inline">{{Form::checkbox('valid_id_photocopy','1',$personalinfo->requirement->valid_id_photocopy)}} Photocopy of 2 Valid ID w/ Specimen Signature(Borrower,Spouse and Co-Maker)</label></div>
				<div><label  class=" checkbox-inline">{{Form::checkbox('photocopy_CTC','1',$personalinfo->requirement->photocopy_CTC)}} 1 Photocopy of Current CTC (Borrower and Spouse)</label></div>
				<div><label  class="checkbox-inline">{{Form::checkbox('proof_of_billing','1',$personalinfo->requirement->proof_of_billing)}} Proof of Billing or ITR</label></div>
				<div><label  class="checkbox-inline">{{Form::checkbox('Collateral_photo','1',$personalinfo->requirement->Collateral_photo)}} Collateral Photo</label></div>
			
				</div>
			
			<h4>Additional Requirements for:</h4>
			<h5 style="font-weight:bold;">SALARY LOAN</h5>
				<div class="container well">
					<div><label  class="checkbox-inline">{{Form::checkbox('Pay_slip','1',$personalinfo->requirement->Pay_slip)}} Pay Slip for 2 periods</label></div>
					<div><label  class="checkbox-inline">{{Form::checkbox('COE','1',$personalinfo->requirement->COE)}} COE</label></div>
				</div>
			<h5 style="font-weight:bold;">BUSINESS/MICRO LOAN</h5>
				<div class="container well">
					<div><label  class="checkbox-inline">{{Form::checkbox('business_permit','1',$personalinfo->requirement->business_permit)}} Business Permit</label></div>
					<div><label  class="checkbox-inline">{{Form::checkbox('DTI','1',$personalinfo->requirement->DTI)}} DTI</label></div>
					<div><label  class="checkbox-inline">{{Form::checkbox('Store_photo','1',$personalinfo->requirement->Store_photo)}} Store Photo</label></div>
				</div>	
			</div>
	<div class="text-center">
	<a class="btn btn-lg btn-info" href="#" onclick="window.print();return false;"><span class="glyphicon glyphicon-hdd"></span> Print this Document</a>
	</div>
  		</div>

<div class="tab-pane top-div" id="requireddocs" >
	<div class="well">
	<h4 class="text-center">Required Documents Checklist</h4>
	<div class="col-md-offset-1">
	<label>Name of Client:</label>    {{$personalinfo->fname}} {{$personalinfo->lname}}
	</div>

	<div class="col-md-offset-1">
	<label>Type of Loan:</label>    {{$personalinfo->loan_class}}
	</div>

	<div class="col-md-offset-1">
	<label>Term:</label>    {{$personalinfo->term}}
	</div>

	<div class="col-md-offset-1">
	<label>Approved Loan Amount:</label>    {{$personalinfo->approval->approvedAmount}}
	</div>
	<hr>
<br>
	<div class="col-md-offset-1">
				<div><label  class="checkbox-inline">{{Form::checkbox('checkVoucher','1',$personalinfo->release->checkVoucher)}} Check and Check Voucher</label></div>
				<div><label  class="checkbox-inline">{{Form::checkbox('loanReleaseDisclosure','1',$personalinfo->release->loanReleaseDisclosure)}} Loan Release Disclosure</label></div>
				<div><label  class=" checkbox-inline">{{Form::checkbox('releaseStmnt','1',$personalinfo->release->releaseStmnt)}} Release Statement</label></div>
				<div><label  class="checkbox-inline">{{Form::checkbox('schedOfAmortization','1',$personalinfo->release->schedOfAmortization)}} Schedule of Amortization</label></div>
				<div><label  class="checkbox-inline">{{Form::checkbox('applicationForm','1',$personalinfo->release->applicationForm)}} Application Form</label></div>
				<div><label  class="checkbox-inline">{{Form::checkbox('coverSheet','1',$personalinfo->release->coverSheet)}} Cover Sheet</label></div>
				<div><label  class="checkbox-inline">{{Form::checkbox('creditInvestigationReport','1',$personalinfo->release->creditInvestigationReport)}} Credit Investigation Report</label></div>
				<div><label  class=" checkbox-inline">{{Form::checkbox('appraisalReport','1',$personalinfo->release->appraisalReport)}} 1 Appraisal Report</label></div>
				<div><label  class="checkbox-inline">{{Form::checkbox('cashFlowAnalysis','1',$personalinfo->release->cashFlowAnalysis)}} Cash Flow Analysis</label></div>
				<div><label  class="checkbox-inline">{{Form::checkbox('promisoryNote','1',$personalinfo->release->promisoryNote)}} Promissory Note</label></div>
				<div><label  class="checkbox-inline">{{Form::checkbox('chattelMortgage','1',$personalinfo->release->chatterlMortgage)}} Chattel Mortgage</label></div>
				<div><label  class="checkbox-inline">{{Form::checkbox('realEstateMortgage','1',$personalinfo->release->realEstateMortgage)}} Real Estate Mortgage</label></div>
				<div><label  class=" checkbox-inline">{{Form::checkbox('securityAgreement','1',$personalinfo->release->securityAgreement)}} Security Agreement</label></div>
				<div><label  class="checkbox-inline">{{Form::checkbox('voluntaryOfferToSurrender','1',$personalinfo->release->voluntaryOfferToSurrender)}} Voluntary Offer to Surrender</label></div>
				<div><label  class="checkbox-inline">{{Form::checkbox('insuranceForm','1',$personalinfo->release->insuranceForm)}} Insurance Form</label></div>
				<div><label  class="checkbox-inline">{{Form::checkbox('otherRequirements','1',$personalinfo->release->otherRequirements)}} Other Requirements</label></div>
				<div><label  class="checkbox-inline">{{Form::checkbox('accountLedger','1',$personalinfo->release->accountLedger)}} Account Ledger</label></div>	
	</div>
	<div class="text-center">
	<a class="btn btn-lg btn-info" href="#" onclick="window.print();return false;"><span class="glyphicon glyphicon-hdd"></span> Print this Document</a>
	</div>
	</div>
</div>

<div class="tab-pane top-div" id="statementofaccount" >
	<div class="well">
		<h4 class="text-center">Statement of Account</h4>
		<hr>
	<div class="col-md-offset-1">
	<label>Name of Client:</label>    {{$personalinfo->fname}} {{$personalinfo->mname}} {{$personalinfo->lname}}
	</div>

	<div class="col-md-offset-1">
	<label>Address:</label>    {{$personalinfo->present_address}}
	</div>
	
	<br>
	<div class="col-md-offset-1">
	<label>Approved Loan Amount:</label>    {{$personalinfo->approval->approvedAmount}}
	</div>

	<div class="col-md-offset-1">
	<label>Type of Loan:</label>    {{$personalinfo->loan_class}}
	</div>

	<div class="col-md-offset-1">
	<label>Term:</label>    {{$personalinfo->term}} month/s
	</div>

	<div class="col-md-offset-1">
	<label>Amortization Type:</label>    {{$personalinfo->amortization_type}}
	</div>

	<div class="col-md-offset-1">
	<label>Interest:</label>    {{$personalinfo->approval->interest}}
	</div>

	<div class="col-md-offset-1">
	<label>Amortization:</label>    {{$personalinfo->approval->amortization}}
	</div>

	<div class="col-md-offset-1">
	<label>Option:</label>    {{$personalinfo->approval->option}}
	</div>
	
	<br>
	<h4 class="col-md-offset-1">Loan Processing Charges</h4>
	<br>


	<div class="col-md-offset-1">
	<label>Service Fee:</label>    {{$personalinfo->approval->serviceFee}}
	</div>
	<div class="col-md-offset-1">
	<label>MRI(insurance):</label>    {{$personalinfo->approval->MRI}}
	</div>
	<div class="col-md-offset-1">
	<label>RD/BIR/LTO:</label>    {{$personalinfo->approval->RD_BIR_LTO}}
	</div>
	<div class="col-md-offset-1">
	<label>Documentary Stamp:</label>    {{$personalinfo->approval->docStamp}}
	</div>

	<div class="text-center">
	<a class="btn btn-lg btn-info" href="#" onclick="window.print();return false;"><span class="glyphicon glyphicon-hdd"></span> Print this Document</a>
	</div>
</div>
</div>
</div>

{{Form::close()}}
@stop

@section('footer')
<hr>
    <p align="center">© Global Merit Financenter Inc. · <a href="#">Privacy</a> · <a href="#">Terms</a></p>
    <p align="center">Chua Bldg., Lapu-lapu St., Tagum City</p>
    <p align="center">Telefax No. (084) 655-6597 or Mobile 093285688124</p>
<hr>
@stop