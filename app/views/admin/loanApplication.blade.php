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
            <li ><a href="profile">Home</a></li>
            <li class="active"><a href="loanapplication">Loan application</a></li>
            <li><a href="{{URL::to('amortizationschedule')}}">Schedule of Amortization</a></li>
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

<div class="top-div">
<br>

<h1 class="text-center" >Loan Application Table</h1>
<div><h5><span class="glyphicon glyphicon-pushpin"></span> Note: Click ID number to View Client Information</h5>
<ul class="nav nav-tabs" id="createNotTab">
  <li class="active"><a href="#app1" data-toggle="tab">Pending</a></li>
  <li class=""><a href="#app2" data-toggle="tab">For C.I</a></li>
  <li class=""><a href="#app3" data-toggle="tab">Approved</a></li>
  <li class=""><a href="#app4" data-toggle="tab">Released</a></li>
  <li class=""><a href="#app5" data-toggle="tab">Reloan</a></li>
</ul>

</div>
<div class="tab-content">
<div class="tab-pane fade in active" id="app1">

<h3 class="text-center">Pending Loan Application </h3>
<table class="table table-striped table-bordered table-hover" id="table">
    <table class="table table-striped table-bordered table-hover">
	<thead>
		<tr>
			<td>ID</td>
			<td>First Name</td>
			<td>Middle name</td>
			<td>Last Name</td>
			<td>Address</td>
			<td>Desired Loan Amount</td>
			<td>Term</td>
			<td>Amortization Type</td>
			<td>Loan Class</td>
			<td>Loan Status</td>
			<td>Actions</td>
		</tr>
	</thead>
	<tbody>
	@foreach(PersonalInformation::with('approval')->where('status_id','=','1')->get() as $personal)
	<tr>
		<td><a href="{{URL::to('applicationinfo/'.$personal->id)}}">{{$personal->id}}</a></td>
		<td>{{$personal->fname}}</td>
		<td>{{$personal->mname}}</td>
		<td>{{$personal->lname}}</td>
		<td>{{$personal->present_address}}</td>
		<td>{{$personal->desiredAmount}}</td>
		<td>{{$personal->term}}</td>	
		<td>{{$personal->amortization_type}}</td>
		<td>{{$personal->loan_class}}</td>
		<td>{{$personal->status->status}}</td>
		<td>	
		<ul class="nav">
		<li class="dropdown"><a class="btn btn-xs btn-default dropdown-toggle" href="" class="" data-toggle="dropdown">Select  <b class="caret"></b></a>
			<ul class="dropdown-menu">
				<li><a href="{{URL::route('requirement.show',$personal->id)}}">Requirements</a></li>
				<!-- <li><a href="{{URL::route('approval.show',$personal->id)}}">Approve Loan</a></li>
				<li><a href="{{URL::route('releasing.show',$personal->id)}}">Loan Releasing</a></li> -->
			</ul>
            </li>
       </ul>
		</td>
		
	</tr>
	@endforeach
	</tbody>
</table>
</table>
</div><!-- /.FIRST TAB -->

<div class="tab-pane fade" id="app2">
<h3 class="text-center">For C.I Loan Application </h3>
<table class="table table-striped table-bordered table-hover" id="table">
    <table class="table table-striped table-bordered table-hover">
	<thead>
		<tr>
			<td>ID</td>
			<td>First Name</td>
			<td>Middle name</td>
			<td>Last Name</td>
			<td>Address</td>
			<td>Desired Loan Amount</td>
			<td>Date Applied</td>
			<td>Term</td>
			<td>Amortization Type</td>
			<td>Loan Class</td>
			<td>Loan Status</td>
			<td>Actions</td>
		</tr>
	</thead>
	<tbody>
	@foreach(PersonalInformation::with('approval')->where('status_id','=','2')->orderBy('created_at','DESC')->get() as $personal)
	<tr>
		<td><a href="{{URL::to('applicationinfo/'.$personal->id)}}">{{$personal->id}}</a></td>
		<td>{{$personal->fname}}</td>
		<td>{{$personal->mname}}</td>
		<td>{{$personal->lname}}</td>
		<td>{{$personal->present_address}}</td>
		<td>{{$personal->desiredAmount}}</td>
		<td>{{$personal->created_at->format('m/d/Y')}}</td>
		<td>{{$personal->term}}</td>	
		<td>{{$personal->amortization_type}}</td>
		<td>{{$personal->loan_class}}</td>
		<td>{{$personal->status->status}}</td>
		<td>	
		<ul class="nav">
		<li class="dropdown"><a class="btn btn-xs btn-default dropdown-toggle" href="" class="" data-toggle="dropdown">Select  <b class="caret"></b></a>
			<ul class="dropdown-menu">
				<li><a href="{{URL::route('approval.show',$personal->id)}}">Approve Loan</a></li>
			</ul>
            </li>
       </ul>
		</td>
	</tr>
	@endforeach
	</tbody>
</table>
</table>
</div><!-- /.SECOND TAB -->
<div class="tab-pane fade" id="app3">
<h3 class="text-center">Approved Loan Application </h3>
<table class="table table-striped table-bordered table-hover" id="table">
    <table class="table table-striped table-bordered table-hover">
	<thead>
		<tr>
			<td>ID</td>
			<td>First Name</td>
			<td>Middle name</td>
			<td>Last Name</td>
			<td>Address</td>
			<td>Desired Loan Amount</td>
			<td>Term</td>
			<td>Amortization Type</td>
			<td>Loan Class</td>
			<td>Loan Status</td>
			<td>Actions</td>
		</tr>
	</thead>
	<tbody>
	@foreach(PersonalInformation::with('approval')->where('status_id','=','3')->get() as $personal)
	<tr>
		<td><a href="{{URL::to('applicationinfo/'.$personal->id)}}">{{$personal->id}}</a></td>
		<td>{{$personal->fname}}</td>
		<td>{{$personal->mname}}</td>
		<td>{{$personal->lname}}</td>
		<td>{{$personal->present_address}}</td>
		<td>{{$personal->desiredAmount}}</td>
		<td>{{$personal->term}}</td>	
		<td>{{$personal->amortization_type}}</td>
		<td>{{$personal->loan_class}}</td>
		<td>{{$personal->status->status}}</td>
		<td>	
		<ul class="nav">
		<li class="dropdown"><a class="btn btn-xs btn-default dropdown-toggle" href="" class="" data-toggle="dropdown">Select  <b class="caret"></b></a>
			<ul class="dropdown-menu">
				<li><a href="{{URL::route('releasing.show',$personal->id)}}">Loan Releasing</a></li>
			</ul>
            </li>
       </ul>
		</td>
	</tr>
	@endforeach
	</tbody>
</table>
</table>

</div><!-- THIRD TAB -->

<div class="tab-pane fade" id="app4">
<h3 class="text-center">Released Loan Application </h3>
<table class="table table-striped table-bordered table-hover" id="table">
    <table class="table table-striped table-bordered table-hover">
	<thead>
		<tr>
			<td>ID</td>
			<td>First Name</td>
			<td>Middle name</td>
			<td>Last Name</td>
			<td>Address</td>
			<td>Desired Loan Amount</td>
			<td>Term</td>
			<td>Amortization Type</td>
			<td>Loan Class</td>
			<td>Loan Status</td>
		</tr>
	</thead>
	<tbody>
	@foreach(PersonalInformation::with('approval')->where('status_id','=','4')->get() as $personal)
	<tr>
		<td><a href="{{URL::to('applicationinfo/'.$personal->id)}}">{{$personal->id}}</a></td>
		<td>{{$personal->fname}}</td>
		<td>{{$personal->mname}}</td>
		<td>{{$personal->lname}}</td>
		<td>{{$personal->present_address}}</td>
		<td>{{$personal->desiredAmount}}</td>
		<td>{{$personal->term}}</td>	
		<td>{{$personal->amortization_type}}</td>
		<td>{{$personal->loan_class}}</td>
		<td>{{$personal->status->status}}</td>
	</tr>
	@endforeach
	</tbody>
</table>
</table>

</div><!-- FOURTH TAB -->
<div class="tab-pane fade" id="app5">
<h3 class="text-center">Reloan Application </h3>

<table class="table table-striped table-bordered table-hover" id="table">
    <table class="table table-striped table-bordered table-hover">
	<thead>
		<tr>
			<td>ID</td>
			<td>First Name</td>
			<td>Middle name</td>
			<td>Last Name</td>
			<td>Address</td>
			<td>Desired Loan Amount</td>
			<td>Term</td>
			<td>Amortization Type</td>
			<td>Loan Class</td>
			<td>Loan Status</td>
			<td>Actions</td>
		</tr>
	</thead>
	<tbody>
	</tbody>
</table>
</table>

</div><!-- FIFTH TAB -->
</div><!-- END CONTENT TAB -->
</div><!-- END TAB -->

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
		
		{{Form::open(['route'=>'requirement.store'])}}
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
				    <button type="button" class="close" data-dismiss="modal">&times;</button>
				    <h3 class="modal-title" id="myModalLabel" align="center">Loan Requirements:</h3>
				</div>
		<div class="modal-body">
			<h4>Basic Requirements</h4>
				
				<div class="container">
				
				<div><label  class="checkbox-inline">{{Form::checkbox('Id_picture','yes')}} 2 pcs. 2x2 ID Picture(Borrower,Spouse and Co-Maker)</label></div>
				<div><label  class="checkbox-inline">{{Form::checkbox('valid_id_photocopy','yes')}} Photocopy of 2 Valid ID w/ Specimen Signature(Borrower,Spouse and Co-Maker)</label></div>
				<div><label  class="checkbox-inline">{{Form::checkbox('photocopy_CTC','yes')}} 1 Photocopy of Current CTC (Borrower and Spouse)</label></div>
				<div><label  class="checkbox-inline">{{Form::checkbox('proof_of_billing','yes')}} Proof of Billing or ITR</label></div>
				
				<div><label  class="checkbox-inline">{{Form::checkbox('Collateral_photo','yes')}} Collateral Photo</label></div>
			
				</div>
			
			<h4>Additional Requirements for:</h4>
			<h5 style="font-weight:bold;">SALARY LOAN</h5>
				<div class="container">
					<div><label  class="checkbox-inline">{{Form::checkbox('Pay_slip','yes')}} Pay Slip for 2 periods</label></div>
					<div><label  class="checkbox-inline">{{Form::checkbox('COE','yes')}} COE</label></div>
				</div>
			<h5 style="font-weight:bold;">BUSINESS/MICRO LOAN</h5>
				<div class="container">
					<div><label  class="checkbox-inline">{{Form::checkbox('business_permit','yes')}} Business Permit</label></div>
					<div><label  class="checkbox-inline">{{Form::checkbox('DTI','yes')}} DTI</label></div>
					<div><label  class="checkbox-inline">{{Form::checkbox('Store_photo','yes')}} Store Photo</label></div>
				</div>	

	<hr>
		<div class="col-lg-offset-8 top-div" >

			{{Form::submit('Submit',['class'=>'btn btn-lg btn-info'])}}
			<button type="button" class="btn btn-lg btn-danger" data-dismiss="modal">Close</button>
		</div>

			</div>
				<div class="modal-footer">
		{{Form::close()}}			
				</div>
			</div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-hidden="true">
		
		{{Form::open(['route'=>'requirement.store'])}}
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
				    <button type="button" class="close" data-dismiss="modal">&times;</button>
				    <h3 class="modal-title" id="myModalLabel" align="center">Loan Approval:</h3>
				</div>
		<div class="modal-body">
			
			<div class="form-horizontal">
				<div class="form-group">
				<label for="" class="col-lg-5 control-label">Approved Loan Applied:</label>
				<div class="col-lg-5">
				<input name="appGrossIncome" type="text" class="form-control form-field">
				</div>
				</div>
				<div class="form-group">
				<label for="" class="col-lg-5 control-label">Term:</label>
				<div class="col-lg-5">
				{{Form::select('term', array('daily' => 'Daily', 'weekly' => 'Weekly', 'monthly'=>'Monthly'),null,['class'=>'form-control form-field'])}} 
				</div>
				</div>
				<div class="form-group">
				<label for="" class="col-lg-5 control-label">Interest:</label>
				<div class="col-lg-5">
				<input name="appGrossIncome" type="text" class="form-control form-field">
				</div>
				</div>
				
				<hr>
				<h4>Loan Processing Charges</h4>


				<div class="form-group">
				<label for="" class="col-lg-5 control-label">Service Fee:</label>
				<div class="col-lg-5">
				<input name="appGrossIncome" type="text" class="form-control form-field">
				</div>
				</div>

				<div class="form-group">
				<label for="" class="col-lg-5 control-label">MRI:</label>
				<div class="col-lg-5">
				<input name="appGrossIncome" type="text" class="form-control form-field">
				</div>
				</div>

				<div class="form-group">
				<label for="" class="col-lg-5 control-label">RD/BIR/LTO:</label>
				<div class="col-lg-5">
				<input name="appGrossIncome" type="text" class="form-control form-field">
				</div>
				</div>

				<div class="form-group">
				<label for="" class="col-lg-5 control-label">NET Amount:</label>
				<div class="col-lg-5">
				<input name="appGrossIncome" type="text" class="form-control form-field">
				</div>
				</div>

				<div class="form-group">
				<label for="" class="col-lg-5 control-label">Recommending Approval:</label>
				<div class="col-lg-5">
				<input name="appGrossIncome" type="text" class="form-control form-field">
				</div>
				</div>

				<div class="form-group">
				<label for="" class="col-lg-5 control-label">Remarks:</label>
				<div class="col-lg-5">
				<textarea class="form-control form-field"  cols="30" rows="10"></textarea>
				</div>
				</div>
			</div>

	<hr>
		<div class="col-lg-offset-8 top-div" >

			{{Form::submit('Submit',['class'=>'btn btn-lg btn-info'])}}
			<button type="button" class="btn btn-lg btn-danger" data-dismiss="modal">Close</button>
		</div>

			</div>
				<div class="modal-footer">
		{{Form::close()}}			
				</div>
			</div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->
</div><!-- /.modal -->
@stop

@section('footer')
<hr>
    <p align="center">© Global Merit Financenter Inc. · <a href="#">Privacy</a> · <a href="#">Terms</a></p>
    <p align="center">Chua Bldg., Lapu-lapu St., Tagum City</p>
    <p align="center">Telefax No. (084) 655-6597 or Mobile 093285688124</p>
<hr>
@stop