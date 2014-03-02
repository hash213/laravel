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
         <a class="navbar-brand" href="">GM Financenter</a>
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
          @if(isset($name))
        		<h4 class="pull-left">Welcome {{$name->username}}!</h4>
      		@endif
        </div><!--/.nav-collapse -->
	</div>
	</nav>
@stop

@section('content')
<div class="container top-div2">
{{Form::model($requirement,['route'=>['requirement.update',$requirement->id],'method'=>'PUT'])}}
<h2>Requirements</h2>
	<hr>
	<div>
	{{Form::hidden('status_id',2)}}
	
	<label class="lead">Client Name: {{$requirement->fname}} {{$requirement->mname}}  {{$requirement->lname}}</label>
	</div>
	<label class="lead">Loan Classification: {{$requirement->loan_class}}</label>

	<h4 class="">Basic Requirements</h4>
				
				<div class="container well">
				
				<div><label  class="checkbox-inline">{{Form::checkbox('Id_picture','1')}} 2 pcs. 2x2 ID Picture(Borrower,Spouse and Co-Maker)</label></div>
				<div><label  class="checkbox-inline">{{Form::checkbox('valid_id_photocopy','1')}} Photocopy of 2 Valid ID w/ Specimen Signature(Borrower,Spouse and Co-Maker)</label></div>
				<div><label  class=" checkbox-inline">{{Form::checkbox('photocopy_CTC','1')}} 1 Photocopy of Current CTC (Borrower and Spouse)</label></div>
				<div><label  class="checkbox-inline">{{Form::checkbox('proof_of_billing','1')}} Proof of Billing or ITR</label></div>
				<div><label  class="checkbox-inline">{{Form::checkbox('Collateral_photo','1')}} Collateral Photo</label></div>
			
				</div>
			
			<h4>Additional Requirements for:</h4>
			<h5 style="font-weight:bold;">SALARY LOAN</h5>
				<div class="container well">
					<div><label  class="checkbox-inline">{{Form::checkbox('Pay_slip','1')}} Pay Slip for 2 periods</label></div>
					<div><label  class="checkbox-inline">{{Form::checkbox('COE','1')}} COE</label></div>
				</div>
			<h5 style="font-weight:bold;">BUSINESS/MICRO LOAN</h5>
				<div class="container well">
					<div><label  class="checkbox-inline">{{Form::checkbox('business_permit','1')}} Business Permit</label></div>
					<div><label  class="checkbox-inline">{{Form::checkbox('DTI','1')}} DTI</label></div>
					<div><label  class="checkbox-inline">{{Form::checkbox('Store_photo','1')}} Store Photo</label></div>
				</div>	
</div>

	<div class="col-lg-offset-10" >
	<form>
			<a class="btn btn-md btn-warning" href="{{URL::to('loanapplication')}}"> <span class="glyphicon glyphicon-arrow-left"></span>  Back</a>
			{{Form::button('<span class="glyphicon glyphicon-ok"></span> Submit', array('type'=>'submit','class' => 'btn btn-md btn-info','id'=>'button1','onclick')) }}
		</div>
	</form>
{{Form::close()}}
@stop

@section('footer')
<hr>
    <p align="center">© Global Merit Financenter Inc. · <a href="#">Privacy</a> · <a href="#">Terms</a></p>
    <p align="center">Chua Bldg., Lapu-lapu St., Tagum City</p>
    <p align="center">Telefax No. (084) 655-6597 or Mobile 093285688124</p>
<hr>
  <script>
//   document.getElementById("button1").onclick = function() {

//     this.disabled = true;
// }
  </script>
@stop