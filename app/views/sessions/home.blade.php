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

@section('carousel')
<div class="carousel-div">
<div id="myCarousel" class="carousel slide">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="item active">
          <img src="assets/images/secluded.jpg" alt="" style="height: 500px; width: 100%; display: block;">
          <div class="container">
            <div class="carousel-caption">
              <h1>Global Merit Financenter</h1>
              <p>Established by Pingoy in 2002 in Davao City, Financenter provides financial assistance to micro cottage,
               small and medium enterprises through business or commercial loan and microfinance loan and financing. 
               It also offers salary and personal loans with “fast and easy loans processing and releasing.”</p>
              
            </div>
          </div>
        </div>
        <div class="item">
          <img src="assets/images/painting.jpg" alt="" style="height: 500px; width: 100%; display: block;">
          <div class="container">
            <div class="carousel-caption">
              <h1>Another example headline.</h1>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              
            </div>
          </div>
        </div>
        <div class="item">
          <img src="assets/images/steele.jpg" alt="" style="height: 500px; width: 100%; display: block;">
          <div class="container">
            <div class="carousel-caption">
              <h1>One more for good measure.</h1>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div>
    </div> 
{{Form::open()}}
<div class="text-center top-div" >
  <a class="btn btn-lg btn-danger btn-addsize" href="{{URL::to('signup')}}">Sign Up</a>
</div>
{{Form::close()}}
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