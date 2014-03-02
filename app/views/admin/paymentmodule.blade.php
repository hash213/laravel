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
            <li><a href="{{URL::to('loanapplication')}}">Loan application</a></li>
            <li class="active"><a href="amortizationschedule">Schedule of Amortization</a></li>
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
<!--   {{Form::text('asdasd',$date)}} -->
  <h1 class="text-center" >Loan Amortization</h1>
 <div class="text-right">
  <a href="{{URL::to('amortizationschedule')}}" class="btn btn-md btn-warning" style="margin-bottom:8px;" ><span class="glyphicon glyphicon-repeat"></span> Return</a></div>
<div class="">
   
    <div class="col-lg-11 top-div">
   <!--  {{Form::text('approvedDate',date('F j, Y'))}} -->
    <div class="col-lg-4">
      <label>Name:  {{$payment->fname}} {{$payment->lname}}</label>
      </div>
    
    
    <div class="col-lg-4">
      <label>Loan Amount:  {{$payment->approval->approvedAmount}}</label>
    </div>
   
   
    <div class="col-lg-4">
      <label>Amortization: {{$payment->approval->amortization}}</label>
    </div>
  
   
    <div class="col-lg-4">
      <label>Amortization Type: {{$payment->approval->amortization_type}}</label>
    </div>
 
 
    <div class="col-lg-4">
      <label>Balance: {{$payment->balance->balance}}</label>
    </div>
    
  </div> 
</div> 


  <div class="form-horizontal ">
    <div class="well">
    <div class="form-group"> 
    <div class="col-lg-11 top-div">
    <h2 class="font text-center">
      Payment
    </h2>
    
      <label for="" class="col-lg-4 control-label">Payments:</label>
      <div class="col-lg-4">
       
        {{Form::text('payments',$payment->approval->amortization,['class'=>'form-control form-field'])}}
      </div>
      </div>
    </div>
    <div class="form-group"> 
    <div class="col-lg-11 ">
      <label for="" class="col-lg-4 control-label">Penalty:</label>
      <div class="col-lg-4">
        <input id="penalty" name="approvedAmount" type="text"  class="form-control form-field" onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
      </div>
      </div>
    </div>

     <div class="form-group"> 
    <div class="col-lg-11 ">
      <label for="" class="col-lg-4 control-label">Total:</label>
      <div class="col-lg-4">
        <input id="total" name="approvedAmount" type="text" class="form-control form-field" onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
        {{Form::text('test')}}
      </div>
      </div>
    </div>

    <div class="text-center">
      {{Form::submit('Submit',['class'=>'btn btn-lg btn-info'])}}
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