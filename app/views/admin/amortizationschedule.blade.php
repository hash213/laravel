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
            <li ><a href="{{URL::to('loanapplication')}}">Loan application</a></li>
            <li class="active"><a href="{{URL::to('amortizationschedule')}}">Schedule of Amortization</a></li>
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

<div class="top-div2">

<h1 class="text-center">Loan Schedule</h1>

<ul class="nav nav-tabs" id="createNotTab">
  <li class="active"><a href="#app1" data-toggle="tab">Daily</a></li>
  <li class=""><a href="#app2" data-toggle="tab">Weekly</a></li>
  <li class=""><a href="#app3" data-toggle="tab">Monthly</a></li>
</ul>


<div class="tab-content">
  <div class="tab-pane fade in active" id="app1">
  	
  	<h3 class="text-center">Clients List</h3>
	
		<table class="table table-striped table-bordered table-hover" id="table">
        <table class="table table-striped table-bordered table-hover">
          <thead>
            <tr>
              <td>ID</td>
              <td>First Name</td>
              <td>Last Name</td>
              <td>Principal</td>
              <td>Term</td>
              <td>Payment</td>
              <td>Actions</td>
            </tr>
          </thead>
          <tbody>
			@foreach(PersonalInformation::with('approval')->where('amortization_type','=','daily')->where('status_id','=','4')->get() as $personal)
				<tr>
					<td>{{$personal->id}}</td>
					<td>{{$personal->fname}}</td>
					<td>{{$personal->lname}}</td>
					<td>{{$personal->approval->approvedAmount}}</td>
					<td>{{$personal->approval->term}}</td>
          <td>{{$personal->amortization_type}}</td>
				

					<td>
	<ul class="nav">
		<li class="dropdown"><a class="btn btn-xs btn-default dropdown-toggle" href="" class="" data-toggle="dropdown">Select  <b class="caret"></b></a>
			<ul class="dropdown-menu">
				<li><a href="{{URL::route('payment.show',$personal->id)}}">Payment</a></li>
				<li><a href="{{URL::to('paymenthistory',$personal->id)}}">Payment History</a></li>
				
			</ul>
            </li>
       </ul>
					</td>

				</tr>
			@endforeach
          </tbody>
      </table>
    </table>
  </div>


  <div class="tab-pane fade" id="app2">
  	<h3 class="text-center">Clients List</h3>
	
		<table class="table table-striped table-bordered table-hover" id="table">
        <table class="table table-striped table-bordered table-hover">
          <thead>
            <tr>
              <td>ID</td>
              <td>First Name</td>
              <td>Last Name</td>
              <td>Principal</td>
              <td>Term</td>
              <td>Payment</td>
              <td>Actions</td>
            </tr>
          </thead>
          <tbody>
			@foreach(PersonalInformation::with('approval')->where('amortization_type','=','Weekly')->where('status_id','=','4')->get() as $personal)
				<tr>
					<td>{{$personal->id}}</td>
					<td>{{$personal->fname}}</td>
					<td>{{$personal->lname}}</td>
					<td>{{$personal->approval->approvedAmount}}</td>
					<td>{{$personal->approval->term}}</td>
					<td>{{$personal->amortization_type}}</td>
					
				<td>
				<ul class="nav">
					<li class="dropdown"><a class="btn btn-xs btn-default dropdown-toggle" href="" class="" data-toggle="dropdown">Select  <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="{{URL::to('payment2/'.$personal->id)}}">Payment</a></li>
							<li><a href="{{URL::to('paymenthistory',$personal->id)}}">Payment History</a></li>
							
						</ul>
			            </li>
			       </ul>
				</td>

				</tr>
			@endforeach
          </tbody>
      </table>
    </table>
  </div>
  <div class="tab-pane fade" id="app3">
<h3 class="text-center">Clients List</h3>
	
		<table class="table table-striped table-bordered table-hover" id="table">
        <table class="table table-striped table-bordered table-hover">
          <thead>
            <tr>
              <td>ID</td>
              <td>First Name</td>
              <td>Last Name</td>
              <td>Principal</td>
              <td>Term</td>
              <td>Payment</td>
              <td>Actions</td>
            </tr>
          </thead>
          <tbody>
			@foreach(PersonalInformation::with('approval')->where('amortization_type','=','Monthly')->where('status_id','=','4')->get() as $personal)
				<tr>
					<td>{{$personal->id}}</td>
					<td>{{$personal->fname}}</td>
					<td>{{$personal->lname}}</td>
					<td>{{$personal->approval->approvedAmount}}</td>
					<td>{{$personal->approval->term}}</td>
					<td>{{$personal->approval->amortization_type}}</td>
					
					<td>
					<ul class="nav">
						<li class="dropdown"><a class="btn btn-xs btn-default dropdown-toggle" href="" class="" data-toggle="dropdown">Select  <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="{{URL::to('payment3/'.$personal->id)}}">Payment</a></li>
								<li><a href="{{URL::to('paymenthistory',$personal->id)}}">Payment History</a></li>	
							</ul>
				            </li>
				       </ul>
					</td>

				</tr>
			@endforeach



          </tbody>
      </table>
    </table>



  </div>
</div>


</div>


@stop



@section('footer')
  <hr>
    <p align="center">© Global Merit Financenter Inc. · <a href="#">Privacy</a> · <a href="#">Terms</a></p>
    <p align="center">Chua Bldg., Lapu-lapu St., Tagum City</p>
    <p align="center">Telefax No. (084) 655-6597 or Mobile 093285688124</p>
  <hr>
@stop