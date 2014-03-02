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
            <li><a href="{{URL::to('amortizationschedule')}}">Schedule Of Amortization</a></li>
          </ul>
          <ul class="nav navbar-nav pull-right">
            <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Welcome:{{displayName().' '.displayLname()}}<b class="caret"></b></a>
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


{{Form::model($users,['route'=>['admin.update',$users->id],'method'=>'PUT'])}}
	
	<div class="container top-div">
	<hr>
	<h1>Edit Information</h1>
	<hr>
	<div class="form-horizontal top-div">
			<div class="form-group">
				{{Form::label('fname','First Name:',['class'=>'col-lg-2 control-label'])}}
			<div class="col-lg-3">
				{{Form::text('fname',null,['class'=>'form-control form-field'])}}
			</div>
				{{Form::label('email','Email:',['class'=>'col-lg-2 control-label'])}}
			<div class="col-lg-3">
				{{Form::text('email',null,['class'=>'form-control form-field'])}}
			</div>
			</div>

			<div class="form-group">
				{{Form::label('mname','Middle Name:',['class'=>'col-lg-2 control-label'])}}
			<div class="col-lg-3">
				{{Form::text('mname',null,['class'=>'form-control form-field'])}}
			</div>

			{{Form::label('username','UserName:',['class'=>'col-lg-2 control-label'])}}
			<div class="col-lg-3">
				{{Form::text('username',null,['class'=>'form-control form-field'])}}
			</div>
			</div>

			<div class="form-group">
				{{Form::label('lname','Last Name:',['class'=>'col-lg-2 control-label'])}}
			<div class="col-lg-3">
				{{Form::text('lname',null,['class'=>'form-control form-field'])}}
			</div>
			{{Form::label('password','Password:',['class'=>'col-lg-2 control-label'])}}
			<div class="col-lg-3">
				{{Form::password('password',['class'=>'form-control form-field'])}}
			</div>
			</div>

			<div class="form-group">
				{{Form::label('address','Address:',['class'=>'col-lg-2 control-label'])}}
				<div class="col-lg-8">
					{{Form::text('address',null,['class'=>'form-control form-field'])}}
				</div>
			</div>
	  </div>
	</div>

	<div class="col-lg-offset-9 top-div">
	<a href="{{URL::to('profile')}}" class="btn btn-md btn-warning"><span class="glyphicon glyphicon-arrow-left"></span> Back</a>
	{{Form::button('<span class="glyphicon glyphicon-ok"></span> Update', array('type'=>'submit','class' => 'btn btn-md btn-success')) }}
	</div>

{{Form::close()}}
@stop