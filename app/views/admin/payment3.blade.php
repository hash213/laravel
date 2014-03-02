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
{{Form::open(['route'=>'payment.store'])}}
<div class="top-div2">

  <h2>Date: {{$date}}</h2>
{{Form::hidden('data',$payment3->approval->term)}}
{{Form::hidden('pid',$payment3->id)}}
<input type="hidden" name="" id="balance" value="{{$payment3->balance->balance}}">

  <h1 class="text-center" >Loan Amortization</h1>
 <div class="text-right">
  <a href="{{URL::to('amortizationschedule')}}" class="btn btn-md btn-warning" style="margin-bottom:8px;" ><span class="glyphicon glyphicon-repeat"></span> Return</a></div>
<div class="">
   
    <div class="col-lg-11 top-div">
   <!--  {{Form::text('approvedDate',date('F j, Y'))}} -->
    <div class="col-lg-4">
      <label>Name:  {{$payment3->fname}} {{$payment3->lname}}</label>
      </div>
    
    
    <div class="col-lg-4">
      <label>Loan Amount:  {{$payment3->approval->approvedAmount}}</label>
    </div>
   
   
    <div class="col-lg-4">
      <label>Amortization: {{$payment3->approval->amortization}}</label>
    </div>
  
    <div class="col-lg-4">
      <label>Amortization Type:{{$payment3->amortization_type}}</label>
    </div>
    
    
    <div class="col-lg-4">
      <label>Balance:{{$payment3->balance->balance}}</label>
    </div>
 
 

    <div class="col-lg-4">
      <label>Amortization starts: {{$payment3->release->datereleased}}</label>
    </div>
    <div class="col-lg-4">
      <label>Next Amortization: {{$ndate3}}</label>
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
       
        {{Form::text('payments',$payment3->approval->amortization,['class'=>'form-control form-field','id'=>'amortization'])}}
      </div>
      </div>
    </div>
    <form name="form1">
    <div class="form-group"> 
    <div class="col-lg-11 ">
      <label for="" class="col-lg-4 control-label">Penalty:</label>
      <div class="col-lg-4">
        <div class="input-group">
      <input type="text" name="penalty" class="form-control" id="penalty">
      <div class="input-group-btn">
        <button type="button" class="btn btn-default dropdown-toggle" onblur="payment();" data-toggle="dropdown">Penalties <span class="caret"></span></button>
        <ul class="dropdown-menu pull-right">
          <li><a data-toggle="modal" href="#myModal">Surcharge</a></li>
          <li><a data-toggle="modal" href="#myModal2">Past Due</a></li>
        </ul>
      </div><!-- /btn-group -->
    </div><!-- /input-group -->
      </div>
      </div>
    </div>




</form>
     <div class="form-group"> 
    <div class="col-lg-11 ">
      <label for="" class="col-lg-4 control-label">New Balance:</label>
      <div class="col-lg-4">
        <input id="total" name="total" value="0" type="text" class="form-control form-field" onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
      </div>
      </div>
    </div>
    
    <div class="text-center">
      {{Form::submit('Submit',['class'=>'btn btn-lg btn-info'])}}
      {{Form::close()}}
    </div>

  </div>
 </div>
</div>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
    
  
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h3 class="modal-title" id="myModalLabel" align="center">Loan Approval:</h3>
        </div>
    <div class="modal-body">
      <form action="">
      <div class="form-horizontal">
        <div class="form-group">
        <label for="" class="col-lg-5 control-label">Balance:</label>
        <div class="col-lg-5">
        <input name="balance" id="balance2" value="{{$payment3->balance->balance}}" type="text" class="form-control form-field">
        </div>
        </div>

        <div class="form-group">
        <label for="" class="col-lg-5 control-label">Interest:</label>
        <div class="col-lg-5">
        <input name="interest" id="interest" value=".02" type="text" onblur="displayTotal();" class="form-control form-field">
        </div>
        </div>

        <div class="form-group">
        <label for="" class="col-lg-5 control-label">Sub Total:</label>
        <div class="col-lg-5">
        <input name="subtotal" id="subtotal" type="text"  class="form-control form-field">
        </div>
        </div>
        
        <div class="form-group">
        <label for="" class="col-lg-5 control-label">Total Working Days:</label>
        <div class="col-lg-5">
        <input name="twd" value="26" id="twd" type="text" onblur="displayResult();" class="form-control form-field">
        </div>
        </div>

        <div class="form-group">
        <label for="" class="col-lg-5 control-label">Result:</label>
        <div class="col-lg-5">
        <input name="result" id="result" type="text" class="form-control form-field">
        </div>
        </div>

        <div class="form-group">
        <label for="" class="col-lg-5 control-label">Date lapsed:</label>
        <div class="col-lg-5">
        <input name="date" id="date" type="text" class="form-control form-field">
        </div>
        </div>    
      </div>

  <hr>
    <div class="col-lg-offset-8 top-div" >

     <button class="btn btn-md btn-info" id="calculate" onclick="calc();" data-dismiss="modal" >Calculate</button>
      <button type="button" class="btn btn-md btn-danger" data-dismiss="modal">Close</button>
    </div> 
  </div>
</form>
        <div class="modal-footer">
        
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-hidden="true">
    

    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h3 class="modal-title" id="myModalLabel" align="center">Loan Approval:</h3>
        </div>
    <div class="modal-body">
      <form action="">
      <div class="form-horizontal">
        <div class="form-group">
        <label for="" class="col-lg-5 control-label">Balance:</label>
        <div class="col-lg-5">
        <input name="appGrossIncome" id="bal" value="{{$payment3->balance->balance}}" type="text" class="form-control form-field">
        </div>
        </div>

        <div class="form-group">
        <label for="" class="col-lg-5 control-label">Interest:</label>
        <div class="col-lg-5">
        <input name="appGrossIncome" id="intrst" value=".06" onblur="result();" type="text" class="form-control form-field">
        </div>
        </div>

        <div class="form-group">
        <label for="" class="col-lg-5 control-label">Result:</label>
        <div class="col-lg-5">
        <input name="appGrossIncome" id="rst" type="text" class="form-control form-field">
        </div>
        </div>

        <div class="form-group">
        <label for="" class="col-lg-5 control-label">Date lapsed:</label>
        <div class="col-lg-5">
        <input name="appGrossIncome" id="laps" type="text" class="form-control form-field">
        </div>
        </div>
        
      </div>
</form>
  <hr>
    <div class="col-lg-offset-8 top-div" >

        <button class="btn btn-md btn-info" id="calculate2" onclick="calc2();" data-dismiss="modal" >Calculate</button>
      <button type="button" class="btn btn-lg btn-danger" data-dismiss="modal">Close</button>
    </div>
  </div>

        <div class="modal-footer">
    
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


@stop
@section('footer')
<script>
  function payment(){
    var balance = document.getElementById('balance').value;
    var amortization = document.getElementById('amortization').value;
    var penalty = document.getElementById('penalty').value;

    var reduction = parseFloat(amortization)+parseFloat(penalty);
    var total = parseFloat(balance)-parseFloat(reduction);

    document.getElementById('total').value=parseFloat(total)
  }

  function calc(){
    
    var result = document.getElementById('result').value;
    var date = document.getElementById('date').value;

    var balrest= Number(result) * Number(date);
    document.getElementById('penalty').value=parseFloat(balrest);
    
    var balance = document.getElementById('balance').value;
    var amortization = document.getElementById('amortization').value;
    var penalty = document.getElementById('penalty').value;

    var reduction = parseFloat(amortization)+parseFloat(penalty);
    var total = parseFloat(balance)-parseFloat(reduction);

    document.getElementById('total').value=parseFloat(total)




  }
  function displayTotal(){
     var bal = document.getElementById('balance2').value;
    var interest = document.getElementById('interest').value;

    var balrest= Number(bal) * Number(interest);
    document.getElementById('subtotal').value= parseFloat(balrest);
  }

  function displayResult(){
    var st = document.getElementById('subtotal').value;
    var twd = document.getElementById('twd').value;

    var stwd= Number(st)/Number(twd);
    document.getElementById('result').value=parseInt(stwd);
   
  }
  function calc2(){
    var bal1 = document.getElementById('bal').value;
    var intrst = document.getElementById('intrst').value;
    var rst = document.getElementById('rst').value;
    var lap = document.getElementById('laps').value;
    var ttl = parseFloat(rst) * parseFloat(lap);
    document.getElementById('penalty').value = parseFloat(ttl);

    var balance = document.getElementById('balance').value;
    var amortization = document.getElementById('amortization').value;
    var penalty = document.getElementById('penalty').value;

    var reduction = parseFloat(amortization)+parseFloat(penalty);
    var total = parseFloat(balance)-parseFloat(reduction);

    document.getElementById('total').value=parseFloat(total)


  }
  function result(){
    var bal1 = document.getElementById('bal').value;
    var intrt = document.getElementById('intrst').value;
    var res = parseFloat(bal1)* parseFloat(intrt);


    document.getElementById('rst').value=parseFloat(res);
  }


</script>
<hr>
    <p align="center">© Global Merit Financenter Inc. · <a href="#">Privacy</a> · <a href="#">Terms</a></p>
    <p align="center">Chua Bldg., Lapu-lapu St., Tagum City</p>
    <p align="center">Telefax No. (084) 655-6597 or Mobile 093285688124</p>
<hr>
@stop