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
                  <li class="active">
                        <a href="login">Home</a>
                  </li>
                   <li>
                        <a href="aboutpage">About</a>
                  </li>
            
                  <li>
                        <a href="loanpage">Loans</a>
                  </li>
            </ul>
            <div class="col-lg-7">
                  {{Form::open(array('route'=>'sessions.store'))}}
                  <div class="col-lg-5 top-nav">
                        {{Form::text('username',null,array('placeholder'=>'Username','class'=>'form-control form-field btn-login'))}}
                  </div>
                  <div class="col-lg-5 top-nav">
                        {{Form::password('pass',array('placeholder'=>'Password','class'=>'form-control form-field btn-login'))}}
                  </div>
                  {{Form::submit('Log In',array('class'=>'btn btn-lg btn-danger btn-login'))}}
            {{Form::close()}}
            </div>
      </div>
</div>
</nav>
@stop


@section('content')
<div class="container well top-div2">
      
      <h1 class="text-center txt-big bg-signup">Sign Up Form</h1>
      
      <hr>

    {{Form::open(array('route'=>'account.store'))}}
        <div class="form-horizontal">
          <div class="form-group">
          <label for="fname" class="col-lg-5 control-label"> Firstname: </label>
            <div class="col-lg-3">
            {{Form::text('fname',null, array('placeholder'=>'First Name','class'=>'form-control form-field'))}}
            </div>
            <h6 class="col-lg-2 control-label text-danger">{{ $errors->first('fname')}}</h6>  
          </div>

          <div class="form-group">
            <label for="mname" class="col-lg-5 control-label"> Middle Name: </label>
            <div class="col-lg-3">
             {{Form::text('mname',null, array('placeholder'=>'Middle Initial','class'=>'form-control form-field'))}}
            </div>
            <h6 class="col-lg-2 control-label text-danger">{{ $errors->first('mname')}}</h6>
          </div>

          <div class="form-group">
            <label for="lname" class="col-lg-5 control-label"> Last Name: </label>
            <div class="col-lg-3">
             {{Form::text('lname',null, array('placeholder'=>'Last Name','class'=>'form-control form-field'))}}
            </div>
            <h6 class="col-lg-2 control-label text-danger">{{ $errors->first('lname')}}</h6>
          </div>

          <div class="form-group">
            <label  class="col-lg-5 control-label"> Birthdate: </label>
            <div class="col-lg-3">
            <input name="bday" type="date" class="form-control form-field" >
            </div>
            <h6 class="col-lg-2 control-label text-danger">{{ $errors->first('bday')}}</h6>
          </div>

          <div class="form-group">
            <label  class="col-lg-5 control-label"> Birth Place: </label>
            <div class="col-lg-3">
            {{Form::text('bplace',null, array('placeholder'=>'Birth Place','class'=>'form-control form-field'))}}
            </div>
            <h6 class="col-lg-2 control-label text-danger">{{ $errors->first('bplace')}}</h6>
          </div>

          <div class="form-group">
            <label for="email" class="col-lg-5 control-label"> Civil Status: </label>
            <div class="col-lg-3">
            {{Form::select('civil_status', array('single' => 'Single', 'married' => 'Married', 'separated'=>'Separated','widow/er'=>'Widow/er'),null,['class'=>'form-control form-field'])}}
            </div>
            <h6 class="col-lg-2 control-label text-danger">{{ $errors->first('civil_status')}}</h6>
          </div>

          <div class="form-group">
            <label for="address" class="col-lg-5 control-label">Present Address: </label>
            <div class="col-lg-3">
             {{Form::text('address',null, array('placeholder'=>'Address','class'=>'form-control form-field'))}}
            </div>
            <h6 class="col-lg-2 control-label text-danger">{{ $errors->first('address')}}</h6>
          </div>

          <div class="form-group">
            <label for="email" class="col-lg-5 control-label"> Email Address: </label>
            <div class="col-lg-3">
             {{Form::text('email',null, array('placeholder'=>'Email','class'=>'form-control form-field'))}}
            </div>
            <h6 class="col-lg-2 control-label text-danger">{{ $errors->first('email')}}</h6>
          </div>

          <div class="form-group">
            <label for="email" class="col-lg-5 control-label"> Contact No: </label>
            <div class="col-lg-3">
             {{Form::text('contactNum',null, array('placeholder'=>'Contact No.','class'=>'form-control form-field'))}}
            </div>
            <h6 class="col-lg-2 control-label text-danger">{{ $errors->first('contactNum')}}</h6>
          </div>

          <hr>
          
          <div class="form-group">
            <label for="email" class="col-lg-5 control-label"> Username: </label>
            <div class="col-lg-3">
             {{Form::text('username',null, array('placeholder'=>'Username','class'=>'form-control form-field'))}}
            </div>
            <h6 class="col-lg-2 control-label text-danger">{{ $errors->first('username')}}</h6>
          </div>

          <div class="form-group">
            <label for="pass" class="col-lg-5 control-label"> Password: </label>
            <div class="col-lg-3">
             {{Form::password('password', array('placeholder'=>'Password','class'=>'form-control form-field'))}}
            </div>
            <h6 class="col-lg-2 control-label text-danger">{{ $errors->first('password')}}</h6>
          </div>

          <div class="form-group">
            <label for="cpass" class="col-lg-5 control-label"> Confirm password: </label>
            <div class="col-lg-3">
             {{Form::password('password_confirmation', array('placeholder'=>'Confirm Password','class'=>'form-control form-field'))}}
            </div>
            <h6 class="col-lg-2 control-label text-danger">{{ $errors->first('password_confirmation')}}</h6>
          </div>
            
            {{Form::hidden('role_id','3')}}
          <hr>

          <div class="text-center">
            {{Form::submit('Submit',['class'=>'btn btn-lg btn-danger btn-addsize'])}}
          </div>

        </div>
      {{Form::close()}}

      <script>
$(function() {
    $( "#datepicker" ).datepicker();
});
</script>

</div>
@stop

