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

@stop


@section('content')
<div class="container top-div2">
<h1 class="font text-center" >Checklist of Documents Prepared for Loan Releases</h1>
<div></div>
<hr>
<div class="well">
	{{Form::model($release,['route'=>['releasing.update',$release->id],'method'=>'PUT'])}}
	{{Form::hidden('status_id',4)}}

	<div class="col-md-offset-1">
	<label>Name of Client:</label>    {{$release->fname.' '.$release->mname.' '.$release->lname}}
	</div>

	<div class="col-md-offset-1">
	<label>Type of Loan:</label>    {{$release->loan_class}}
	</div>

	<div class="col-md-offset-1">
	<label>Term:</label>    {{$release->approval->term}} month/s
	</div>

	<div class="col-md-offset-1">
	<label>Amortization type:</label>    {{$release->amortization_type}}
	</div>

	<div class="col-md-offset-1">
	<label>Amount:</label>    {{$release->approval->approvedAmount}}
	</div>

	
	<div class="col-md-offset-1">
	<label>Amortization starts: <span>{{Form::text('datereleased',date('F j, Y'),['class'=>'form-control form-field col-md-4','type'=>'date'])}}</span> </label>
	
	</div>

	<div class="col-md-offset-1">
	<label>Loan Maturity date: <span><input name="datemature" type="date" class="form-field form-control col-md-4"></span>	 </label> 
	</div>
	
	</div>


<div class="well">
	<div class="col-md-offset-1">
				<div><label  class="checkbox-inline">{{Form::checkbox('checkVoucher','1')}} Check and Check Voucher</label></div>
				<div><label  class="checkbox-inline">{{Form::checkbox('loanReleaseDisclosure','1')}} Loan Release Disclosure</label></div>
				<div><label  class=" checkbox-inline">{{Form::checkbox('releaseStmnt','1')}} Release Statement</label></div>
				<div><label  class="checkbox-inline">{{Form::checkbox('schedOfAmortization','1')}} Schedule of Amortization</label></div>
				<div><label  class="checkbox-inline">{{Form::checkbox('applicationForm','1')}} Application Form</label></div>
				<div><label  class="checkbox-inline">{{Form::checkbox('coverSheet','1')}} Cover Sheet</label></div>
				<div><label  class="checkbox-inline">{{Form::checkbox('creditInvestigationReport','1')}} Credit Investigation Report</label></div>
				<div><label  class=" checkbox-inline">{{Form::checkbox('appraisalReport','1')}} 1 Appraisal Report</label></div>
				<div><label  class="checkbox-inline">{{Form::checkbox('cashFlowAnalysis','1')}} Cash Flow Analysis</label></div>
				<div><label  class="checkbox-inline">{{Form::checkbox('promisoryNote','1')}} Promissory Note</label></div>
				<div><label  class="checkbox-inline">{{Form::checkbox('chattelMortgage','1')}} Chattel Mortgage</label></div>
				<div><label  class="checkbox-inline">{{Form::checkbox('realEstateMortgage','1')}} Real Estate Mortgage</label></div>
				<div><label  class=" checkbox-inline">{{Form::checkbox('securityAgreement','1')}} Security Agreement</label></div>
				<div><label  class="checkbox-inline">{{Form::checkbox('voluntaryOfferToSurrender','1')}} Voluntary Offer to Surrender</label></div>
				<div><label  class="checkbox-inline">{{Form::checkbox('insuranceForm','1')}} Insurance Form</label></div>
				<div><label  class="checkbox-inline">{{Form::checkbox('otherRequirements','1')}} Other Requirements</label></div>
				<div><label  class="checkbox-inline">{{Form::checkbox('accountLedger','1')}} Account Ledger</label></div>		
	</div>
<div class="col-md-offset-7"><label for="">Account Officer Assigned: {{displayName().' '.displayLname()}}</label></div>	
<div class="col-md-offset-9"><label for="">Branch Manager</label></div>	
</div>
</div>
<div class="col-md-offset-6">
	<a class="btn btn-md btn-warning" href="{{URL::to('loanapplication')}}"> <span class="glyphicon glyphicon-arrow-left"></span>  Back</a>
	{{Form::button('<span class="glyphicon glyphicon-ok"></span> Submit', array('type'=>'submit','class' => 'btn btn-md btn-info')) }}
</div>

@stop
@section('footer')
<hr>
    <p align="center">© Global Merit Financenter Inc. · <a href="#">Privacy</a> · <a href="#">Terms</a></p>
    <p align="center">Chua Bldg., Lapu-lapu St., Tagum City</p>
    <p align="center">Telefax No. (084) 655-6597 or Mobile 093285688124</p>
<hr>
@stop