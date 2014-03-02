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
                  <li class="active">
                        <a href="aboutpage">About</a>
                  </li>
                  
                  <li>
                    <a href="loanpage">Loans</a>
                  </li>
            </ul>
            <div class="col-lg-offset-6">
                  {{Form::open(array('route'=>'sessions.store'))}}
                  <div class="col-lg-4">
                        {{Form::text('username',null,array('placeholder'=>'Username','class'=>'form-control form-field top-nav'))}}
                  </div>

                  <div class="col-lg-4">
                        {{Form::password('pass',array('placeholder'=>'Password','class'=>'form-control form-field top-nav'))}}
                  </div>
                  {{Form::submit('Log In',array('class'=>'btn btn-md btn-danger top-nav'))}}
            
            {{Form::close()}}
            </div>
      </div>
</div>
</nav>
@stop

@section('content')
<div class="container">
  <br>
  <h2 class="well top-div">Global Merit Financenter</h2>
  <br>
    <p>
      The president of AYP Holdings, Inc. (AYPHI), Albert Y. Pingoy, 
      lauded the outstanding performance of its member company, 
      the Global Merit Financenter for reaching 80% increase in 
      total loans portfolio in the last five years.

<br>
Financenter reached an average of 80% increase in total loans portfolio in 2006-2010. 
Its annual gross income has also increased; from 15% in 2006, 20% in 2008, up to 22% in 2010.
<br>
“In nine years, the Global Merit Financenter has remained as a reliable and stable partner of micro, 
small businessmen and individuals in loan and financing. 
Its increasing total loans portfolio and annual gross income can best testify that we are, 
indeed, answering the needs of our people.”
<br>
Pingoy said this during the blessing ceremony of the new office of the AYPHI and 
Financenter last Saturday (September 10) located at Door 27-FG Cam Building, Corner Alvarez and Monteverde Streets, Davao City.
<br>
Established by Pingoy in 2002 in Davao City, Financenter provides financial assistance to micro cottage, 
small and medium enterprises through business or commercial loan and microfinance loan and financing. 
It also offers salary and personal loans with “fast and easy loans processing and releasing.”
<br>
It has five branches which are strategically located in the cities of 
General Santos, Koronadal, Tagum and Davao, and in Tacurong in Sultan Kudarat. 
 2010, it started offering foreign exchange and Western Union remittance services.
<br>
“When one needs cash, Financenter can provide loans in a fast and easy way. 
It is more convenient for individuals and professionals to avail of our personal and salary loans,” 
Efren Edrina, general manager, said.
<br>
Edrina added that the requirements for loans can be complied in a day. 
Upon completion of the requirements, a community investigation 
(CI) will be scheduled, followed by a report. Granting that the information 
about an applicant qualifies him or her to avail of the loan, the amount will be released immediately. The processing period will only take one week before the release of loan.
<br>
“It is our mission to provide good quality credit services to interested borrowers 
through financing and help them improve their living conditions,” Edrina said.
<br>
Financenter also embraces the core values of its mother company, 
such that it values the people and their talents, passions and 
potentials as its greatest assets to achieve efficiency, effectiveness and greatness for total stakeholders’ satisfaction.
<br>
“We envision that Financenter will be the leading financing and lending institution, 
catering the financial needs of the people in Southern Mindanao,” Pingoy said.
<br>
The other members of the AYPHI are Aerowurkz Aviation, 
AYP Construction, AYP Investment Management Company, Hydromax Commercial Diving Corporation, 
Laundryworld, Prestige Boats Corporation, Prestige Farms, and Wind and Wave Davao. (Lorie Ann A. Cascaro)

    </p>
  </div>

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