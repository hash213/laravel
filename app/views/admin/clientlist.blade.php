<!DOCTYPE html>
	<html>
	<head>
			<meta charset="utf-8">
			<meta http-equiv="X-UA-Compatible" content="IE=edge">
			<title>Client List</title>
			{{HTML::style('css/bootstrap.css')}}
      		{{HTML::style('css/main.css')}}
	</head>
	<body>
  <div> 
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
          <ul class="nav navbar-nav col-lg-offset-8">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li><a href="#">Separated link</a></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li>
          </ul>
          <div class="pull-right">
            {{Form::open(array('route'=>'admin.viewlist','method'=>'get'))}}
            <div class="col-lg-9">
            {{Form::text('search',null, array('placeholder'=>'Search by Lastname','class'=>'form-control form-field top-nav'))}}
            </div>
            <button class="col-lg-3 btn btn-primary top-nav">Search</button>
            {{Form::close()}}
          </div>
            </div>
          </div>
    </div>
    </nav>
      <div class="top-div container">
    <br>
    <h1 align="center">Client List</h1>
    
    </div>
    <hr>

    <div class="container">
    <!-- <li>{{ $match }}</li> -->
    @foreach($match as $lname)
      <a href="{{route('admin.edit', $lname->id)}}" ><li>{{$lname->fname}} {{$lname->lname}}</li></a>
    @endforeach
  </div>

	</body>
</html>