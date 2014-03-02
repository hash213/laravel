@extends('layout.main')

@section('header')
<nav class="navbar navbar-default navbar-fixed-top navbar-inverse">
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
				<li class="active"><a href="{{URL::to('profile')}}">Home</a></li>
				<li ><a href="{{URL::to('loanapplication')}}">Loan application</a></li>
            	<li><a href="{{URL::to('amortizationschedule')}}">Schedule of Amortization</a></li>
			</ul>

			<ul class="nav navbar-nav pull-right">
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						Welcome:{{displayName().' '.displayLname()}} <b class="caret"></b>
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
			@if(isset($name))
			<h4 class="pull-left">Welcome {{$name->username}}!</h4>
			@endif
		</div>
	</div><!--/.nav-collapse -->
</nav>
@stop

@section('content')
  <div class="container top-div">

  	<h1 class="text-center">Personal Information</h1>

  		<div class="container well">
			<div class="form-horizontal">
  			<label class="lead">ID:  {{$users->id}}</label>
  			</div>
  			<div class="form-horizontal">
  			<label class="lead">Name:  {{$users->fname}}  {{$users->mname}}  {{$users->lname}}</label>
  			</div>
  			<div class="form-horizontal">
  				<label class="lead">Address:  {{$users->address}}</label>
  			</div>
  			<div class="form-horizontal">
  				<label class="lead">Email address:  {{$users->email}}</label>
  			</div>
  			<div class="form-horizontal">
  				<label class="lead">Role:  {{$users->role->role}}</label>
  			</div>

  			<div class="text-center">
  		<a href="{{URL::to('profile')}}" class="btn btn-lg btn-warning"><span class="glyphicon glyphicon-repeat"></span> Return</a>
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