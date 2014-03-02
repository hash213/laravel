@extends('layout.main')


@section('header')
<nav class="navbar navbar-default navbar-fixed-top navbar-inverse navbar-try">
<div class="container">
      <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="login">GM Financenter</a>
      </div>
      <div class="navbar-collapse collapse ">
            <ul class="nav navbar-nav col-lg-offset-8">
                  <li >
                        <a href="login">Home</a>
                  </li>
                  <li>
                        <a href="aboutpage">About</a>
                  </li>
                  <li class="active">
                        <a href="loanpage">Loans</a>
                  </li>
            </ul>
            <div class="col-lg-offset-6">
                  {{Form::open(array('route'=>'sessions.store'))}}
                  <div class="col-lg-4 top-nav">
                        {{Form::text('username',null,array('placeholder'=>'Username','class'=>'form-control form-field top-nav btn-login'))}}
                  </div>

                  <div class="col-lg-4 top-nav">
                        {{Form::password('pass',array('placeholder'=>'Password','class'=>'form-control form-field top-nav btn-login'))}}
                  </div>
                  {{Form::submit('Log In',array('class'=>'btn btn-md btn-danger top-nav'))}}
            {{Form::close()}}
            </div>
      </div>
</div>
</nav>
@stop

@section('content')
	<div class="container top-div2">
		<h1 class="text-center">Fast and Easy Loans!</h1>
            <h4 class="text-center">3% to 4% per month / 2-6 months</h4>
	</div >
      <div class="well container top-div">
            <h3><span style="icon-info-sign"></span> We offer:</h3>
            <ul>
                  <li>Arawan</li>
                  <li>Salaray Loan</li>
                  <li>Personal Loan</li>
                  <li>Microfinance Loan</li>
                  <li>Business Loan</li>
            </ul>
            <h3>Basic Requirements</h3>
            <ul>
                  <li>2 pcs 2x2 ID Picture (Borrower, Spouse & Co maker)</li>
                  <li>Photocopy of 2 Valid ID with Specimen Signature (Borrower, Spouse & Co maker)</li>
                  <li>1 Photocopy of Current CTC (Borrower & Spouse)</li>
                  <li>Proof of Billing or ITR</li>
                  <li>Collateral Photo</li>
            </ul>
            <h3>Additional Requirements for:</h3>
            <h4>Salary Loan:</h4>
            <ul>
                  <li>Pay Slip for 2 Periods</li>
                  <li>COE</li>
            </ul>
            <h4>Business/Microfinance Loan:</h4>
            <ul>
                  <li>Business Permit</li>
                  <li>DTI</li>
                  <li>Store Photo</li>
            </ul>
            <h3>Accepted Collateral</h3>
            <ul>
                  <li>Real Estate Property</li>
                  <li>Vehicle</li>
                  <li>Serialized Assets</li>
            </ul>
      </div>
	
@stop
@section('footer')
            <hr>
              <p align="center">© Global Merit Financenter Inc. · <a href="#">Privacy</a> · <a href="#">Terms</a></p>
              <p align="center">Chua Bldg., Lapu-lapu St., Tagum City</p>
              <p align="center">Telefax No. (084) 655-6597 or Mobile 093285688124</p>
            <hr>
@stop