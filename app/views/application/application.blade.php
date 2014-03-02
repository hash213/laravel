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
            <li class="active"><a href="#">Application Form</a></li>
          </ul>
          <ul class="nav navbar-nav pull-right">
            <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Welcome: {{displayName().' '.displayLname()}}<b class="caret"></b></a>
			<ul class="dropdown-menu">
				@if(Auth::check())
				<li><a href="{{URL::route('logout')}}">Logout</a></li>
				@endif
			</ul>
            </li>
            </ul>
        </div><!--/.nav-collapse -->
	</div>
	</nav>


@stop

@section('carousel')

<div class="container top-div2">
<label for="">Note: <span class="glyphicon glyphicon-warning-sign text-danger"></span> are required fields</label>
<a class="btn btn-lg btn-danger col-lg-offset-8" href="{{URL::to('client')}}"><span class="glyphicon glyphicon-chevron-left"></span> Back</a>
 
 <ul class="nav nav-tabs" id="createNotTab">
  <li class="active"><a href="#app1" data-toggle="tab">Step 1: Applicant Information</a></li>
  <li class=""><a href="#app2" data-toggle="tab">Step 2: Collateral Information</a></li>
  <li class=""><a href="#app3" data-toggle="tab">Step 3: Co-maker Information</a></li>
</ul>

{{Form::open(['route'=>'application.store'])}}
<!-- Tab panes -->
<div class="tab-content">
  <div class="tab-pane fade in active" id="app1">

{{Form::hidden('status_id','1')}}

  		<div>
  			<h2>Personal Information</h2>
  		</div>
  
			<div class="col-sm-3">
				<label for="">First Name:</label>
				{{Form::text('fname',displayName(),['class'=>'form-control','readonly'])}}
				</div>
			<div class="col-sm-3">
				<label for="">Middle Name:</label>
				{{Form::text('mname',displayMname(),['class'=>'form-control','readonly'])}}
				</div>
			<div class="col-sm-3">
				<label for="">Last Name:</label>
				{{Form::text('lname',displayLname(),['class'=>'form-control','readonly'])}}</div>
			<div class="col-sm-3">
				<label for="">Loan Classification:</label>
				<div class="col-lg-9">
				<span>
				{{Form::select('loan_class', array('micro' => 'MICRO', 'business loan' => 'Business Loan', 'salary loan'=>'Salary Loan'),null,['class'=>'form-control form-field'])}} 
				</span>
				</div>
			</div>

			<div class="col-sm-4 input-append ">
				<label for="">Birthdate:</label>
				{{Form::text('bday',displayBday(),['class'=>'form-control','readonly'])}}
				</div>
			<div class="col-sm-7">
				<label for="">Birth Place:</label>
				{{Form::text('bplace',displayBplace(),['class'=>'form-control','readonly'])}}
				</div>


			<div class="col-sm-11">
				<label for="">Present Address:</label>
				{{Form::text('present_address',displayAddress(),['class'=>'form-control','readonly'])}}</div>

			<div class="col-sm-4">
				<label for="">Contact nos.:</label>
				
				{{Form::text('bplace',displayContactNum(),['class'=>'form-control','readonly'])}}
			</div>
			<div class="col-sm-4">
				<label>Civil Status:</label>
				{{Form::text('civil_status',displayCivilStatus(),['class'=>'form-control','readonly'])}}
			</div>
		
			<div class="col-sm-11">
			<hr>
			<form id="myForm">
				<label><span class="glyphicon glyphicon-warning-sign text-danger"></span> Source of Income:</label>
				<label  class="checkbox-inline">
					{{Form::checkbox('src_income_shares','1')}} Shares</label>
					
				<label  class="checkbox-inline">
					{{Form::checkbox('src_income_rentals','1')}} Rentals</label>
				<label  class="checkbox-inline">
					{{Form::checkbox('src_income_commission','1')}} Commission</label>
				<label  class="checkbox-inline">
					{{Form::checkbox('src_income_allotment','1')}} Allotment</label>
				<label  class="checkbox-inline">
					<!--  {{Form::checkbox('src_income_employment','1',null,['id'=>'checkboxOne','onchange'=>'chgtx'])}} Employment -->
					 <input type="checkbox" name="src_income_business" onchange="chgtx();">Employment
					</label>
				<label  class="checkbox-inline">
					{{Form::checkbox('src_income_business','1',null,['id'=>'checkboTwo'])}}Business
					
					</label>
				<label  class="checkbox-inline">
					{{Form::checkbox('src_income_operator','1')}} Motor Vehicle Operator</label>
				<label  class="checkbox-inline">
					{{Form::checkbox('src_income_farming','1')}} Farming</label>
					<hr>
			</div>
			
		
			<div class="col-sm-4">
				<label>If Employed, Present Employer:</label>
				<input name="presentEmp" id="pre" type="text" class="form-control" disabled>
				<h6 class="col-lg-6 control-label text-danger">{{ $errors->first('presentEmp')}}</h6>
				</div>  
			<div class="col-sm-5">
				<label>Address:</label>
				<input name="empAddress" id="add" type="text" class="form-control" disabled></div>
			<div class="col-sm-3">
				<label>Salary/mo:</label>
				<input name="monthlySalary" id="month" type="text" class="form-control" disabled></div>
			<div class="col-sm-7">
				<label>Position:</label>
				<input name="position" type="text" class="form-control"></div>
			<div class="col-sm-4">
				<label>Length of Service:</label>
				<input name="lenOfService" id="len" type="text" class="form-control" disabled></div>
			
			<div class="col-sm-3">
				<label for="">Applicant's Spouse:</label>
				<input name="spouseName" id="app" type="text" class="form-control" disabled></div>
			<div class="col-sm-3">
				<label>If Employed, Present Employer:</label>
				<input name="spousePresentEmp" id="prem" type="text" class="form-control" disabled></div>
			<div class="col-sm-5">
				<label>Address:</label>
				<input name="spouseEmpAddress" type="text" class="form-control"></div>
			<div class="col-sm-2">
				<label>Salary/mo:</label>
				<input name="spouseMonthlySalary" type="text" class="form-control"></div>
			<div class="col-sm-5">
				<label>Position:</label>
				<input name="spousePosition" type="text" class="form-control"></div>
			<div class="col-sm-3">
				<label>Length of Service:</label>
				<input name="spouseLenOfService" type="text" class="form-control"></div>
			<div class="col-sm-11">

			</form><!-- END OF FORM TAG -->
			<hr>
			<div class="col-sm-4">
				<label><span class="glyphicon glyphicon-warning-sign text-danger"></span> Desired Loan Amount:</label>
				<input name="desiredAmount" type="text" class="form-control"></div>
			
			<div class="col-sm-4">
				<label class="col-sm-8"><span class="glyphicon glyphicon-warning-sign text-danger"></span> Term (No. of Months)</label>
				<div class="col-sm-6">
				{{Form::select('term', array('1 month' => '1','2 months' => '2','3 months' => '3','4 months' => '4','5 months' => '5','6 month' => '6'),null,['class'=>'form-control form-field'])}} 
				</div>
			</div>

			<div class="col-sm-3">
				<label class="col-ms-4"><span class="glyphicon glyphicon-warning-sign text-danger"></span> Amortization Type</label>
				<div class="col-ms-5">
				<span>
				{{Form::select('amortization_type', array('daily' => 'Daily', 'weekly' => 'Weekly', 'monthly'=>'Monthly'),null,['class'=>'form-control form-field'])}} 
				</span>
				</div>
			</div>

			<div class="col-sm-11">
				<label><span class="glyphicon glyphicon-warning-sign text-danger"></span> Purpose of Loan Proceeds</label>
				<input name="loanPurpose" type="text" class="form-control">
			</div>
			
			</div>
		<hr class="col-sm-11">
			<div class="col-sm-3">

				<label>Number of Dependents:</label>
				<input name="dependent_nos" type="text" class="form-control"></div>

			<div class="col-sm-11 bottom">
			<div class="col-sm-12">
				<div class="col-sm-4">
					<label>Name:</label>
					<div class="bottom">
						<input name="name" type="text" class="form-control bottom">
						<input name="name2" type="text" class="form-control bottom">
						<input name="name3" type="text" class="form-control bottom">
						<input name="name4"type="text" class="form-control">
						<hr>
				</div>
				</div>
				<div class="col-sm-4">
					<label >School Level:</label>
					<div class="bottom">
						<!-- <textarea name="schoolLevel" class="form-control" rows="3"></textarea> -->
					<input name="level" type="text" class="form-control bottom">
					<input name="level2"type="text" class="form-control bottom">
					<input name="level3"type="text" class="form-control bottom">
					<input name="level4"type="text" class="form-control">
				</div>
				<hr>
				</div>
				<div class="col-sm-4 bottom">
					<label >School Attended:</label>
					<div class="bottom">
						<!-- <textarea name="" class="form-control" rows="3"></textarea> -->
					<input name="school_attended" type="text" class="form-control bottom">
					<input name="school_attended2"type="text" class="form-control bottom">
					<input name="school_attended3"type="text" class="form-control bottom">
					<input name="school_attended4"type="text" class="form-control">
				
				</div>
				<hr>
				
				</div>

				<div class="col-lg-11">
			<label for=""><span class="glyphicon glyphicon-warning-sign text-danger"></span>  Statement of Monthly Income:</label>
			<div class="form-horizontal">
				<div class="form-group">
				<label for="" class="col-lg-3 control-label">Applicant Gross Income:</label>
				<div class="col-lg-4">
				<input name="appGrossIncome" id="appgrossincome" type="text" class="form-control form-field">
				</div>
				</div>
				<div class="form-group">
				<label for="" class="col-lg-3 control-label">Spouse Gross Income:</label>
				<div class="col-lg-4">
				<input name="appSpouseGrossIncome" id="spousegrossincome" type="text" class="form-control form-field">
				</div>
				</div>
				<div class="form-group">
				<label for="" class="col-lg-3 control-label">Other Income:</label>
				<div class="col-lg-4">
				<input name="otherIncome" id="others" type="text" class="form-control form-field" onblur="Calculate();">
				</div>
				</div>
				<div class="form-group">
				<label for="" class="col-lg-3 control-label">Total Gross Income:</label>
				<div class="col-lg-4">
				<input name="totalGrossIncome" id="totalgross" type="text" class="form-control form-field">
				</div>
				</div>
				<div class="form-group">
				<label for="" class="col-lg-3 control-label">Household Expense:</label>
				<div class="col-lg-4">
				<input name="householdExp" type="text" class="form-control form-field">
				</div>
				</div>
				<div class="form-group">
				<label for="" class="col-lg-3 control-label">Business Expense:</label>
				<div class="col-lg-4">
				<input name="businessExp" type="text" class="form-control form-field">
				</div>
				</div>
				<div class="form-group">
				<label for="" class="col-lg-3 control-label">Total Expense:</label>
				<div class="col-lg-4">
				<input name="totalExp" type="text" class="form-control form-field">
				</div>
				</div>
				<div class="form-group">
				<label for="" class="col-lg-3 control-label">Net Income:</label>
				<div class="col-lg-4">
				<input name="netIncome" type="text" class="form-control form-field">
				</div>
				</div>
				
			</div>
			<div>
			<!-- <button class="btn-default" onclick="func()">next</button> -->
			</div>
		</div>
				<!-- <a href="#" class="btn btn-lg btn-warning" onclick="func()">next</a> -->
					
				</div>
			</div>			
		</div>
	

	// <script>
	// 	function start() {
	// 			appform.presentEmp.disabled = true;
	// 		}
	// 		onload = start;
	// 	function chgtx() {
	// 		appform.presentEmp.disabled = !myform.src_income_employment.checked;
	// 		}	

	// </script>
		
  <div class="tab-pane fade" id="app2">
  	<div class="container">
  
  		<div class="col-lg-11">
				<div>
					<h1>Properties Owned/Personal Asset for Collateral</h1>
				</div>
				<div>
					<label for="">Appliances</label>
				</div >
				<div class="form-horizontal">
					<div class="form-group">
						<label class="col-sm-1 control-label" >1.</label>
						<div class="col-sm-4">
							<input name="appliance_name" type="text" class="form-control form-field"></div>
						<div>
							<label class="col-sm-1 control-label">Serial #:</label>
						</div>
						<div class="col-sm-4">
							<input name="serial_nos" type="text" class="form-control form-field"></div>
					</div>

				</div>
			</div>

			<div class="col-lg-11">
			<div class="form-horizontal">
				<div class="form-group">
					<label class="col-sm-1 control-label" >2.</label>
					<div class="col-sm-4">
						<input name="appliance_name1" type="text" class="form-control form-field"></div>
					<div>
						<label class="col-sm-1 control-label">Serial #:</label>
					</div>
					<div class="col-sm-4">
						<input name="serial_nos1" type="text" class="form-control form-field"></div>
				</div>

			</div>
		</div>
		<div class="col-lg-11">
			<div class="form-horizontal">
				<div class="form-group">
					<label class="col-sm-1 control-label" >3.</label>
					<div class="col-sm-4">
						<input name="appliance_name2" type="text" class="form-control form-field"></div>
					<div>
						<label class="col-sm-1 control-label">Serial #:</label>
					</div>
					<div class="col-sm-4">
						<input name="serial_nos2" type="text" class="form-control form-field"></div>
				</div>

			</div>
		</div>

		<div class="col-lg-11">
			<div class="form-horizontal">
				<div class="form-group">
					<label class="col-lg-1 control-label" >4.</label>
					<div class="col-lg-4">
						<input name="appliance_name3" type="text" class="form-control "></div>
					<div>
						<label class="col-lg-1 control-label">Serial #:</label>
					</div>
					<div class="col-lg-4">
						<input name="serial_nos3" type="text" class="form-control form-field"></div>
				</div>
			</div>
		</div>


		<div class="col-lg-11">
		<div>
		  <label for="">Real State Properties</label>
		</div>
		 <div class="col-lg-3">
		  	<label for="">Title No.</label><input name="title_nos" type="text" class="form-control ">
		  </div>
		  <div class="col-lg-3">
		  	<label for="">No. of Sq.</label><input name="nos_of_sq" type="text" class="form-control ">
		  </div>
		  <div class="col-lg-4">
		  	<label for="">Area of Location:</label><input name="area_location" type="text" class="form-control ">
		  </div>
		  </div>
		  <div class="col-lg-11">
		  <div>
		  	<label for="">Vehicle</label>
		  </div>
		  	<div class="col-lg-3">
			<label for="">Make/Type:</label>
			<input name="mark_type" type="text" class="form-control">	
		  	</div>
		  	<div class="col-lg-4">
			<label for="">Chassis #:</label>
			<input name="chassis_nos" type="text" class="form-control">	
		  	</div>
		  	<div class="col-lg-4">
			<label for="">Engine #:</label>
			<input name="engine_nos" type="text" class="form-control">	
		  	</div>
		  </div>

		<div class="col-lg-ll">
			<div class="col-lg-3">
				<label for="">Bank Name:</label><input name="bank_name" type="text" class="form-control">
			</div>
			<div class="col-lg-3">
				<label for="">Account Name:</label><input name="account_name" type="text" class="form-control">
			</div>
			<div class="col-lg-4">
				<label for="">Account #:</label><input name="account_number" type="text" class="form-control">
			</div>
		</div>

		<div class="col-lg-11">
			<div class="col-lg-6">
				<label for="">Name of Business:</label><input name="business_name" type="text" class="form-control">
			</div>
			<div class="col-lg-5">
				<label for="">Nature of Business:</label><input name="nature_of_business" type="text" class="form-control">
			</div>
		</div>
		
		<div class="col-lg-11">
			<div class="col-lg-3">
				<label for="">Year of Operation:</label><input name="yr_of_operation" type="text" class="form-control">
			</div>
			<div class="col-lg-3">
				<label for="">Contact Number:</label><input name="contact_nos" type="text" class="form-control">
			</div>
			<div class="col-lg-3">
				<label for="">Business Permit #:</label><input name="business_permit_nos" type="text" class="form-control">
			</div>
		</div>

		<div class="col-lg-11">
			<div class="col-lg-11">
				<label for="">Business Address:</label> <input name="business_add" type="text" class="form-control">
			</div>
			
		</div>
		
  	</div>
  </div>


  <div class="tab-pane fade" id="app3">
  	<div class="container">
  	
  		<div class="col-lg-11">
			<h1>Additional Information</h1>
			
			<h4><span class="glyphicon glyphicon-warning-sign text-danger"></span> Co-Maker Statement</h4>
		
			<div class="col-lg-3">
			<label for="">Name</label><input name="name" type="text" class="form-control">	
			</div>
			<div class="col-lg-4">
			<label for="">Civil Status</label><!-- <input name="comaker_civil_status" type="text" class="form-control"> -->	
			{{Form::select('comaker_civil_status', array('single' => 'Single', 'married' => 'Married', 'separated'=>'Separated','widow'=>'Widow','widower'=>'Widower'),null,['class'=>'form-control form-field'])}}
			</div>
			<div class="col-lg-4">
			<label for="">Contact No.</label><input name="contact_nos" type="text" class="form-control">	
			</div>
		</div>

		<div class="col-lg-5">
			<label for="">Address:</label><input name="address" type="text" class="form-control">
		</div>
		<div class="col-lg-5">
			<label for=""><strong>Co-Maker Spouse:</strong></label><input name="comaker_spouse" type="text" class="form-control">
		</div>
		<div class="col-lg-3">
			<label for="">Date of Birth:</label><input name="comaker_birthdate" type="date" class="form-control">
		</div>
		<div class="col-lg-2">
			<label for="">Age:</label><input name="comaker_age" type="text" class="form-control">
		</div>
		<div class="col-lg-3">
			<label for="">Date of Birth:</label><input name="spouse_birthdate" type="date" class="form-control">
		</div>
		<div class="col-lg-2">
			<label for="">Age:</label><input name="spouse_age" type="text" class="form-control">
		</div>
		<div class="col-lg-5">
			<label for="">Place of Birth:</label><input name="comaker_bplace" type="text" class="form-control">
		</div>
		<div class="col-lg-6">
			<label for="">Place of Birth:</label><input name="spouse_bplace" type="text" class="form-control">
		</div>

		<div class="col-lg-11">
			<label for=""><span class="glyphicon glyphicon-warning-sign text-danger"></span> Sources of Income</label>
			<label for="" class="checkbox-inline">{{Form::checkbox('comaker_business','1')}}Business</label>
			<label for="" class="checkbox-inline">{{Form::checkbox('comaker_employment','1')}}Employment</label>
			<label for="" class="checkbox-inline">{{Form::checkbox('other','1')}}Others,pls.Specify</label>
			<div class="col-lg-offset-4">
			<input name="other_text" type="text" class="form-control">
			</div>
		</div>

		
		
		<div class="col-sm-3">
				<label>If Employed, Present Employer:</label>
				<input name="comaker_employer" type="text" class="form-control"></div>
			<div class="col-sm-5">
				<label>Address:</label>
				<input name="comaker_address" type="text" class="form-control"></div>
			<div class="col-sm-3">
				<label>Salary/mo:</label>
				<input name="comaker_salaryPerMonth" type="text" class="form-control"></div>
			<div class="col-sm-7">
				<label>Position:</label>
				<input name="comaker_position" type="text" class="form-control"></div>
			<div class="col-sm-4">
				<label>Length of Service:</label>
				<input name="comaker_len_of_service" type="text" class="form-control"></div>
			
			<div class="col-lg-11 ">
			<label for=""><span class="glyphicon glyphicon-warning-sign text-danger"></span> Statement of Monthly Income:</label>
			<div class="form-horizontal">
				<div class="form-group">
				<label class="col-lg-3 control-label">Comaker Gross Income:</label>
				<div class="col-lg-4">
				<input name="comaker_gross_income" type="text" class="form-control form-field">
				</div>
				</div>
				<div class="form-group">
				<label for="" class="col-lg-3 control-label">Spouse Gross Income:</label>
				<div class="col-lg-4">
				<input name="spouse_gross_income" type="text" class="form-control form-field">
				</div>
				</div>
				<div class="form-group">
				<label for="" class="col-lg-3 control-label">Other Income:</label>
				<div class="col-lg-4">
				<input name="other_income" type="text" class="form-control form-field">
				</div>
				</div>
				<div class="form-group">
				<label for="" class="col-lg-3 control-label">Total Gross Income:</label>
				<div class="col-lg-4">
				<input name="comaker_total_gross_income" type="text" class="form-control form-field">
				</div>
				</div>
<!-- 				<div class="form-group">
				<label for="" class="col-lg-3 control-label">Less:</label>
				<div class="col-lg-4">
				<input name="comaker_less" type="text" class="form-control form-field">
				</div>
				</div> -->
				<div class="form-group">
				<label for="" class="col-lg-3 control-label">Household Expense:</label>
				<div class="col-lg-4">
				<input name="comaker_household_exp" type="text" class="form-control form-field">
				</div>
				</div>
				<div class="form-group">
				<label for="" class="col-lg-3 control-label">Business Expense:</label>
				<div class="col-lg-4">
				<input name="comaker_business_exp" type="text" class="form-control form-field">
				</div>
				</div>
				<div class="form-group">
				<label for="" class="col-lg-3 control-label">Total Expense:</label>
				<div class="col-lg-4">
				<input name="comaker_total_exp" type="text" class="form-control form-field">
				</div>
				</div>
				<div class="form-group">
				<label for="" class="col-lg-3 control-label">Net Income:</label>
				<div class="col-lg-4">
				<input name="comaker_net_income" type="text" class="form-control form-field">
				</div>
				</div>
			</div>
			<div class="text-center col-lg-10">
				{{Form::button('Submit <span class="glyphicon glyphicon-send"></span> ', array('type'=>'submit','class' => 'btn btn-lg btn-info top-div btn-addsize col-lg-offset-1')) }}

		<!-- 	{{Form::submit('submit',['class'=>'btn btn-lg btn-info top-div btn-addsize col-lg-offset-1'])}} -->
			</div>
		</div>
  	</div>
  	
  </div>
</div>


{{Form::close()}}

</div>

@stop

@section('footer')
  @section('footer')
            <hr>
              <p align="center">© Global Merit Financenter Inc. · <a href="#">Privacy</a> · <a href="#">Terms</a></p>
              <p align="center">Chua Bldg., Lapu-lapu St., Tagum City</p>
              <p align="center">Telefax No. (084) 655-6597 or Mobile 093285688124</p>
            <hr>
@stop
<script>
// function Calculate(){
// 	  var appgrouse = document.getElementById('appgrossincome').value;
// 	  var spousegross = document.getElementById('spousegrossincome').value; 
// 	  var others =document.getElementById('other').value;
// 	  // var mir = document.getElementById('mri').value;
// 	  // var rd = document.getElementById('rd').value;
// 	  // var trm = document.getElementById('term').value;

// 	  var totalincome = parseFloat(appgrouse) + parseFloat(spousegross) + parseFloat(others);
// 	  // var initial = parseFloat(resources) - parseFloat(intrstresult);

// 	  //  var intl = parseFloat(mir)/100 * parseFloat(resources);
// 	  // // document.getElementById('mri').value=parseFloat(intl) / 100 * parseFloat(resources);
// 	  // //var inttotal = parseInt(intl)/100 * parseFloat(resources);
// 	  // var srv= parseFloat(srvc)/100 * parseFloat(resources); 
	  
// 	  // var add = parseFloat(srv) + parseFloat(intl) + parseFloat(intrstresult) + parseFloat(rd);

// 	  document.getElementById('totalincome').value;
// 	  document.form1.submit();
// }
// function chgtx() {
//     if('#checkboxOne, #checkboxTwo').click(function() {
//         var cb1 = ('checkboxOne').is(':checked');
//         var cb2 = ('checkboxTwo').is(':checked');
//         if('#pre, #add').prop('disabled', !(cb1 || cb2));
//         if('#month').prop('disabled', !cb1);
//         if('#len, #app, #prem').prop('disabled', !cb2);    
//     });
// }
</script>
@stop