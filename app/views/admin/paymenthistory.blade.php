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
            <li><a href="{{URL::to('loanapplication')}}">Loan application</a></li>
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
  <div class="container top-div">
      <h1 class="font">Payment History</h1>

     <div class="form-group">
     <label class="col-lg-5 control-label">Name: {{$personalinfo->fname}}</label>
    </div>

    <div class="form-group">
     <label class="col-lg-5 control-label">Principal: {{$personalinfo->approval->approvedAmount}}</label>
    </div>

    <div class="form-group">
     <label class="col-lg-5 control-label">Amortization Type: {{$personalinfo->amortization_type}}</label>
    </div>

    <div class="form-group">
     <label class="col-lg-5 control-label">Balance: {{$balance->balance}}</label>
    </div>



      <table class="table table-striped table-bordered table-hover" id="table">
        <table class="table table-striped table-bordered table-hover">
          <thead>
            <tr>
              
              <td>Payment</td>
              <td>Penalty</td>
              <td>Date</td>
            </tr>
          </thead>
          <tbody>
     
         
        @foreach($payment as $pay)
        <tr>
         
          <td>{{$pay->payment}}</td>
          <td>{{$pay->penalty}}</td>
          <td>{{$pay->updated_at}}</td>
        </tr>
          @endforeach
       

       
     
          </tbody>
      </table>
    </table>




  </div>
@stop
@section('footer')
<hr>
    <p align="center">© Global Merit Financenter Inc. · <a href="#">Privacy</a> · <a href="#">Terms</a></p>
    <p align="center">Chua Bldg., Lapu-lapu St., Tagum City</p>
    <p align="center">Telefax No. (084) 655-6597 or Mobile 093285688124</p>
<hr>
@stop