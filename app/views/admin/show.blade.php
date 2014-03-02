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
            <li class="active"><a href="profile">Home</a></li>
            <li><a href="{{URL::to('loanapplication')}}">Loan application</a></li>
            <li><a href="{{URL::to('amortizationschedule')}}">Schedule of Amortization</a></li>
          </ul>
          <ul class="nav navbar-nav pull-right">
            <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Welcome:    {{displayName().' '.displayLname()}}<b class="caret"></b></a>
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
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
				  <div class="modal-dialog modal-lg">
				    <div class="modal-content">
				      <div class="modal-header">
				        <button type="button" class="close" data-dismiss="modal">&times;</button>
				        <h3 class="modal-title" id="myModalLabel" align="center">Register Account</h3>
				      </div>
				      <div class="modal-body">
		<div class="form-horizontal">
			<div class="form-group">

			{{Form::open(array('route'=>'account.store'))}}
				
				<label class="col-lg-2 control-label">First Name:</label>
				<div class="col-lg-3">
				{{Form::text('firstname',null, array('placeholder'=>'First Name','class'=>'form-control form-field'))}}
				</div>

			<label class="col-lg-2 control-label">Email Address:</label>
			<div class="col-lg-3">
				{{Form::text('email',null, array('placeholder'=>'Email','class'=>'form-control form-field'))}}
			</div>
			</div>
			<div class="form-group">
				<label class="col-lg-2 control-label">Middle Name:</label>
				<div class="col-lg-3">
				{{Form::text('mname',null, array('placeholder'=>'Middle Name','class'=>'form-control form-field'))}}
				</div>

				<label for="" class="col-lg-2 control-label">Position:</label>
				<div class="col-lg-3">
				<span>
					{{Form::select('role_id',$roles,null,['class'=>'form-control form-field'])}}
				</span>
				<!-- {{Form::text('position',null, array('placeholder'=>'Position','class'=>'form-control form-field'))}} -->
				</div>
			</div>
			<div class="form-group">
				<label for="" class="col-lg-2 control-label">Last Name:</label>
				<div class="col-lg-3">
				{{Form::text('lname',null, array('placeholder'=>'Last Name','class'=>'form-control form-field'))}}
				</div>
			</div>

			<div class="form-group">
				<label for="" class="col-lg-2 control-label">Username:</label>
				<div class="col-lg-3">
				{{Form::text('username',null, array('placeholder'=>'Username','class'=>'form-control form-field'))}}
				</div>
			</div>

			<div class="form-group">
				<label for="" class="col-lg-2 control-label">Password:</label>
				<div class="col-lg-3">
				{{Form::password('password', array('placeholder'=>'Password','class'=>'form-control form-field'))}}
				</div>
			</div>

			<div class="form-group">
				<label for="" class="col-lg-2 control-label">Address:</label>
				<div class="col-lg-8">
				{{Form::text('address',null, array('placeholder'=>'Address','class'=>'form-control form-field'))}}
				</div>
			</div>
		</div>

		<div class="col-lg-offset-8 top-div" >
			{{Form::submit('Add',['class'=>'btn btn-md btn-info'])}}
		</div>
			</div>
				 	<div class="modal-footer">
				    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->
	</div><!-- /.modal -->


{{Form::close()}}

<div class="container top-div">
<a data-toggle="modal" href="#myModal" class="btn btn-small btn-danger pull-right top-div">Register Account</a>
	{{Form::open(array('url'=> 'accounts'))}}
	


	<h1 class="text-center ">Registered Accounts</h1>

	@if (Session::has('message'))
	<div class="alert alert-info top-div" >
	 <a href="#" class="close" data-dismiss="alert">&times;</a>
	{{ Session::get('message') }}
	</div>
	@endif
	<!-- <div>
	<p>Current time: {{ date('F j, Y, g:i A') }}  </p>
	</div> -->
	<table class="table table-striped table-bordered table-hover" id="table">
    <table class="table table-striped table-bordered table-hover">
	<thead>
		<tr>
			<td>ID</td>
			<td>First Name</td>
			<td>Last Name</td>
			<td>Role</td>
			<td>Actions</td>
		</tr>
	</thead>
	<tbody>
	@foreach(User::where('role_id','!=','3')->get() as $user)
		<tr>
			<td>{{ $user->id }}</td>
			<td>{{ $user->fname }}</td>
			<td>{{$user->lname}}</td>
			<td>{{ $user->role->role}}</td>
			<!-- we will also add show, edit, and delete buttons -->
			<td>

				<!-- delete the nerd (uses the destroy method DESTROY /nerds/{id} -->
				<!-- we will add this later since its a little more complicated than the other two buttons -->

				<!-- show the nerd (uses the show method found at GET /nerds/{id} -->
				<a class="btn btn-sm btn-success" href="{{URL::to('profile/' .$user->id)}}">Show</a>

				<!-- edit this nerd (uses the edit method found at GET /nerds/{id}/edit -->
				<!-- <a class="btn btn-sm btn-info" href="{{URL::to('profile/' .$user->id. '/edit')}}">Edit</a>
				<a class="btn btn-sm btn-danger" href="#">Inactive</a>
				 -->

			</td>
		</tr>
	@endforeach
	</tbody>
</table>
		</table>
		</div>
		{{Form::close()}}	
		<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h3 class="modal-title" id="myModalLabel" align="center">Register Account</h3>
					</div>
					<div class="modal-body">
					<table>
						<thead>
							<tr>
								<th>Firstname</th>
								<th>Middle name</th>
								<th>Lastname</th>
								<th>Address</th>
								<th>Email</th>
								<th>Position</th>
								<th>username</th>
							</tr>
						</thead>
					</table>
				</div>
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

