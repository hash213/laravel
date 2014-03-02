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
            <a class="navbar-brand" href="client">GM Financenter</a>
      </div>
      <div class="navbar-collapse collapse ">
            <ul class="nav navbar-nav col-lg-offset-8">
                  <li class="active"><a href="{{URL::to('client')}}">Home</a></li>
                  <li><a href="{{URL::to('accountbal/'.displayId())}}">Account Balance</a></li>
            </ul>
            {{Form::open(array('url'=> 'client/create'))}}
            <ul class="nav navbar-nav pull-right">

           <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Welcome: {{displayName().' '.displayLname()}} <b class="caret"></b></a>
			<ul class="dropdown-menu">
				@if(Auth::check())
				<li><a href="{{URL::route('logout')}}">logout</a></li>
       <!--  <li><a href="{{URL::to('notify')}}">change password</a></li> -->
				@endif
			</ul>
            </li>
            </ul>
            {{Form::close()}}
           
      </div>
</div>
</nav>
@stop
@section('content')
@if (Session::has('message'))
  <div class="alert alert-info top-div2" >
   <a href="#" class="close" data-dismiss="alert">&times;</a>
  {{ Session::get('message') }}
    </div>
    @endif
<div class="top-div2">
 <h3 class="pull-right"> Current time: {{ date('F j, Y') }}</h3>
      <h1 class="well">Home</h1>
    
           <div class="container">
            <div class="form-horizontal">
                  <label class="lead">Name:  {{displayId()}} </label>
                  </div>
                  <div class="form-horizontal">
                  <label class="lead">Name:  {{displayName()}} {{displayLname()}}</label>
                  </div>
                  <div class="form-horizontal">
                        <label class="lead">Address:{{displayAddress()}} </label>
                  </div>
                  <div class="form-horizontal">
                        <label class="lead">Email address:{{displayEmail()}} </label>
                  </div>
                  <div class="form-horizontal">
                        <label class="lead">Loan Status:</label>
                  </div>
        </div>    
<!-- <a href="#" onclick="window.print();return false;">print</a>
 -->
</div>


{{Form::open()}}
<div class="text-center" >
  <a class="btn btn-lg btn-danger btn-addsize" data-toggle="modal" href="#myModal">Apply Loan</a>
</div>
{{Form::close()}}

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
    
    {{Form::open(['route'=>'requirement.store'])}}
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title" id="myModalLabel" align="center">Terms & condition</h4>
        </div>
    <div class="modal-body">
    <div class="well">
      <p class="justify">
     The use of the legal loans application form is subject to the terms and conditions and terms of use set out below. Please take a moment to read these terms and conditions and terms of use carefully. <br><br>

     1. These terms and conditions serve as a binding agreement and you confirm that the information which you have submitted on this application is true and correct and that you are not under administration, insolvent, under debt review or under any debt restructuring program. <br><br>
 
     6. PLEASE MAKE SURE THAT YOU CARRY OUT ALL THE ACTIONS THAT WE REQUESTED FROM YOU WHEN APPLYING FOR THE LOAN. <br> <br> 
      </p>
    </div>

      </div>
        <div class="modal-footer">
        <a class="btn btn-success" href="{{URL::to('application')}}">Accept</a>
    {{Form::close()}}     
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

@stop
@section('footer')
@section('footer')
            <hr>
              <p align="center">© Global Merit Financenter Inc. · <a href="#">Privacy</a> · <a href="#">Terms</a></p>
              <p align="center">Chua Bldg., Lapu-lapu St., Tagum City</p>
              <p align="center">Telefax No. (084) 655-6597 or Mobile 093285688124</p>
            <hr>
@stop
@stop


