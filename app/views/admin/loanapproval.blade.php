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
				<li >
					<a href="{{URL::to('profile')}}">Home</a>
				</li>
				<li class="active">
					<a href="{{URL::to('loanapplication')}}">Loan application</a>
				</li>
				<li>
					<a href="{{URL::to('amortizationschedule')}}">Schedule Of Amortization</a>
				</li>
			</ul>
			<ul class="nav navbar-nav pull-right">
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						Welcome: {{displayName().' '.displayLname()}} <b class="caret"></b>
					</a>
					<ul class="dropdown-menu">
						@if(Auth::check())
						<li>
							<a href="{{URL::route('logout')}}">logout</a>
						</li>
						@endif
					</ul>
				</li>
			</ul>

		</div>
		<!--/.nav-collapse -->
	</div>
</nav>
@stop
@section('content')
<div class="container top-div2">
	<h1 class="font text-center">Loan Approval Form</h1>
	<hr>
	{{Form::model($approval,['route'=>['approval.update',$approval->id],'method'=>'PUT'])}}
	{{Form::hidden('status_id',3)}}
	{{Form::hidden('pid',$approval->id)}}
	<div class="well">
	<div class="form-horizontal">
			<div class="form-group">
			<label for="" class="col-lg-5 control-label">Desired Loan Amount:</label>
			<div class="col-lg-5">
				<input id="appAmount" name="approvedAmount" type="text" class="form-control form-field" onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
				</div>
		</div>
		<div class="form-group">
			<label for="" class="col-lg-5 control-label">Approved Loan Applied:</label>
			<div class="col-lg-5">
				<input id="appAmount" name="approvedAmount" type="text" class="form-control form-field" onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
				</div>
		</div>
		
		<div class="form-group">
			<label for="" class="col-lg-5 control-label">Term:</label>
			<div class="col-lg-6">
				<div class="col-lg-3">
				{{Form::text('term', $approval->term,['class'=>'form-control form-field','id'=>'term' ])}}
				</div>
				<div class="col-lg-5">
				{{Form::select('amortization_type', array('daily' => 'Daily', 'weekly' => 'Weekly', 'monthly'=>'Monthly'),null,['class'=>'form-control form-field'])}} 
				</div>	
			</div>
		</div>
		<div class="form-group">
			<label for="" class="col-lg-5 control-label">Loan Classification:</label>
			<div class="col-lg-5">
				{{Form::text('loanClass',$approval->loan_class,['class'=>'form-control form-field','readonly'])}}
			</div>
		</div>
		
		<div class="form-group">
			<label for="" class="col-lg-5 control-label">Interest:</label>
			<div class="col-lg-5">
				<input id="intrst" name="interest" type="text" class="form-control form-field" onblur="compute()"></div>
		</div>

		<div class="form-group">
			<label for="" class="col-lg-5 control-label">Amortization:</label>
			<div class="col-lg-5">
				<input id="amortization" name="amortization" type="text" class="form-control form-field"></div>
		</div>
		
		<div class="form-group">
			<label for="" class="col-lg-5 control-label">Options:</label>
			<div class="col-lg-5">
				{{Form::select('option', array('addOn' => 'Add-On','Advance' => 'Advance'),null,['class'=>'form-control form-field','onchange'=>'select(this.value)'])}} </div>
		</div>
			


		<div class="form-group">
			<label for="" class="col-lg-5 control-label">Approved date:</label>
			<div class="col-lg-5">
			<input name="approvedDate" type="date" class="form-control form-field">
			{{Form::text('approvedDate', $date)}}
			</div>
		</div>
<!-- 		<div class="form-group">
			<label for="" class="col-lg-5 control-label">Maturity Date:</label>
			<div class="col-lg-5">
				<input name="maturityDate" type="date" class="form-control form-field"></div>
		</div> -->
		<hr>
		<h3 class="text-center">Loan Processing Charges</h3>
		<br>

		<div class="form-group">
			<label for="" class="col-lg-5 control-label">Service Fee:</label>
			<div class="col-lg-5">
				<input id="servicecharge" name="serviceFee" type="text" class="form-control form-field" onblur="display();"></div>
		</div>

		<div class="form-group">
			<label for="" class="col-lg-5 control-label">MRI:</label>
			<div class="col-lg-5">
				<input id="mri" name="MRI" type="text" class="form-control form-field"></div>
		</div>

		<div class="form-group">
			<label for="" class="col-lg-5 control-label">RD/BIR/LTO:</label>
			<div class="col-lg-5">
			
				<input id="rd" name="RD_BIR_LTO" type="text" class="form-control form-field" onblur="Calculate();"></div>
		</div>

		<div class="form-group">
			<label for="" class="col-lg-5 control-label">Documentary Stamp:</label>
			<div class="col-lg-5">
				 {{Form::text('docStamp',null,['class'=>'form-control form-field'])}}
			</div>
		</div>

		<div class="form-group">
			<label for="" class="col-lg-5 control-label">NET Amount:</label>
			<div class="col-lg-5">
				<input id="netAmt" name="netAmount" type="text" class="form-control form-field"></div>
				
		</div>
		<div class="form-group">
			<label for="" class="col-lg-5 control-label">Recommending Approval:</label>
			<div class="col-lg-5">
			{{Form::text('approvedBy',displayName().' '.displayLname(),['class'=>'form-control form-field','readonly'])}}
				</div>
		</div>

		<div class="form-group">
			<label for="" class="col-lg-5 control-label">Position:</label>
			<div class="col-lg-5">
			{{Form::text('position',Auth::user()->role->role,['class'=>'form-control form-field','readonly'])}}
				</div>
		</div>
		<div class="form-group">
			<label for="" class="col-lg-5 control-label">Remarks:</label>
			<div class="col-lg-5">
				<textarea name="remarks" class="form-control form-field"  cols="30" rows="10"></textarea>
			</div>
		</div>
			
	</div>
</div>


</div>
<br>
	<div class="col-lg-offset-8" >
			<a class="btn btn-md btn-warning" href="{{URL::to('loanapplication')}}"> <span class="glyphicon glyphicon-arrow-left"></span>  Back</a>
			{{Form::button('<span class="glyphicon glyphicon-ok"></span> Submit', array('type'=>'submit','class' => 'btn btn-md btn-info')) }}
			
	</div>
{{Form::close()}}


@stop
@section('footer')
<hr>
    <p align="center">© Global Merit Financenter Inc. · <a href="#">Privacy</a> · <a href="#">Terms</a></p>
    <p align="center">Chua Bldg., Lapu-lapu St., Tagum City</p>
    <p align="center">Telefax No. (084) 655-6597 or Mobile 093285688124</p>
<hr>

  <script>
  function compute(){
  	var fvalue = document.getElementById('appAmount').value;
  	var svalue = document.getElementById('term').value;
  	var tvalue = document.getElementById('Atype').value;

  	if(var tvalue = document.getElementById('Atype').value =='daily'){
  		var newtval= parseFloat(26);
  		var result = parseFloat(newtval) * parseFloat(term);
  		var tamount = parseFloat(fvalue) / parseFloat(result);
  		document.getElementById('amortization').value=parseFloat(tamount);
  	}

  }
function display(){
	var resources = document.getElementById('appAmount').value;
 	var trm = document.getElementById('term').value;
 	var intl = parseFloat(trm)+1;
  	document.getElementById('mri').value=parseFloat(intl);
}
function Calculate()
{
  var resources = document.getElementById('appAmount').value;
  var minutes = document.getElementById('intrst').value; 
  var srvc =document.getElementById('servicecharge').value;
  var mir = document.getElementById('mri').value;
  var rd = document.getElementById('rd').value;
  var trm = document.getElementById('term').value;

  var intrstresult = parseFloat(minutes) / 100 * parseFloat(resources);
  var initial = parseFloat(resources) - parseFloat(intrstresult);

   var intl = parseFloat(mir)/100 * parseFloat(resources);
  // document.getElementById('mri').value=parseFloat(intl) / 100 * parseFloat(resources);
  //var inttotal = parseInt(intl)/100 * parseFloat(resources);
  var srv= parseFloat(srvc)/100 * parseFloat(resources); 
  
  var add = parseFloat(srv) + parseFloat(intl) + parseFloat(intrstresult) + parseFloat(rd);

  document.getElementById('netAmt').value=parseFloat(resources) - parseFloat(add);
  document.form1.submit();
}
</script>

@stop