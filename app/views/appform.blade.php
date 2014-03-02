<!DOCTYPE html>
<html>
<head lang="en">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>GM Financenter</title>
	{{HTML::style('dist/css/bootstrap.css')}}
    {{HTML::style('dist/main.css')}}

<body>
	<nav class="navbar navbar-default navbar-fixed-top navbar-inverse">
		<div class="container">
			<?php include "C:/Wamp/www/GM_financenter/financenter_web/components/php/header.php"; ?></div>
	</nav>

	<div class="top-div container">
		<h1 align="center">Loan Application Form</h1>
	</div>
	<hr>
	<div class="container">
		<form action="" class="row">
			<div class="col-sm-3">
				<label for="">First Name:</label>
				<input type="text" class="form-control"></div>
			<div class="col-sm-3">
				<label for="">Middle Name:</label>
				<input type="text" class="form-control"></div>
			<div class="col-sm-3">
				<label for="">Last Name:</label>
				<input type="text" class="form-control"></div>
			<div class="col-sm-3">
				<label for="">Loan Classification:</label>
				<div class="input-group">
					<label class="checkbox">
						<input type="checkbox" />
						MICRO
					</label>
					<label class="checkbox">
						<input type="checkbox">Business Loan</label>
					<label class="checkbox">
						<input type="checkbox">Salary Loan</label>
				</div>
			</div>

			<div class="col-sm-4 ">
				<label for="">Birthdate:</label>
				<input type="text" class="form-control"></div>
			<div class="col-sm-7">
				<label for="">Birth Place:</label>
				<input type="text" class="form-control"></div>
				
			<div class="col-sm-11">
			<br>
				<label for="">Preset Address:</label>
				<input type="text" class="form-control"></div>
				
			<div class="col-sm-4">
			<br>
				<label for="">Contact:</label>
				<input type="text" class="form-control"></div>

			<div class="col-sm-11">
			<br>
				<label>Source of Income:</label>
				<label  class="checkbox-inline">
					<input type="checkbox">Shares</label>
				<label  class="checkbox-inline">
					<input type="checkbox">Rentals</label>
				<label  class="checkbox-inline">
					<input type="checkbox">Commission</label>
				<label  class="checkbox-inline">
					<input type="checkbox">Allotment</label>
				<label  class="checkbox-inline">
					<input type="checkbox">Employment</label>
				<label  class="checkbox-inline">
					<input type="checkbox">Business</label>
				<label  class="checkbox-inline">
					<input type="checkbox">Motor Vehicle Operator</label>
				<label  class="checkbox-inline">
					<input type="checkbox">Farming</label>
			</div>

			<div class="col-sm-11">
			<br>
				<label>Civil Status:</label>
				<label class="checkbox-inline">
					<input type="checkbox">Single</label>
				<label class="checkbox-inline">
					<input type="checkbox">Married</label>
				<label class="checkbox-inline">
					<input type="checkbox">Separated</label>
				<label class="checkbox-inline">
					<input type="checkbox">Widow/er</label>
			</div>
				
			<div class="col-sm-4">
			<br>
				<label>Desired Loan Amount:</label>
				<input type="text" class="form-control"></div>
			<div class="col-sm-4">
			<br>
				<label>
					Term of payment
					<input type="text" class="form-control"></label>
				<label>daily/monthly</label>
			</div>

			<div class="col-lg-11">
				<div>
				<br>
					<label>Properties Owned/Personal Asset for Collateral</label>
				</div>
				<div>
					<label for="">Appliances</label>
				</div >
				<div class="form-horizontal">
					<div class="form-group">
						<label class="col-sm-1 control-label" >1.</label>
						<div class="col-sm-4">
							<input type="text" class="form-control form-field"></div>
						<div>
							<label class="col-sm-1 control-label">Serial #:</label>
						</div>
						<div class="col-sm-4">
							<input type="text" class="form-control form-field"></div>
					</div>

				</div>
			</div>

			<div class="col-lg-11">
			<div class="form-horizontal">
				<div class="form-group">
					<label class="col-sm-1 control-label" >2.</label>
					<div class="col-sm-4">
						<input type="text" class="form-control form-field"></div>
					<div>
						<label class="col-sm-1 control-label">Serial #:</label>
					</div>
					<div class="col-sm-4">
						<input type="text" class="form-control form-field"></div>
				</div>

			</div>
		</div>
		<div class="col-lg-11">
			<div class="form-horizontal">
				<div class="form-group">
					<label class="col-sm-1 control-label" >3.</label>
					<div class="col-sm-4">
						<input type="text" class="form-control form-field"></div>
					<div>
						<label class="col-sm-1 control-label">Serial #:</label>
					</div>
					<div class="col-sm-4">
						<input type="text" class="form-control form-field"></div>
				</div>

			</div>
		</div>
		<div class="col-lg-11">
			<div class="form-horizontal">
				<div class="form-group">
					<label class="col-lg-1 control-label" >4.</label>
					<div class="col-lg-4">
						<input type="text" class="form-control "></div>
					<div>
						<label class="col-lg-1 control-label">Serial #:</label>
					</div>
					<div class="col-lg-4">
						<input type="text" class="form-control form-field"></div>
				</div>
			</div>
		</div>


		<div class="col-lg-11">
		  <label for="">Real State Properties</label>
		  <br>
		
		 <div class="col-lg-3">
		  	<label for="">Title No.</label><input type="text" class="form-control ">
		  </div>
		  <div class="col-lg-3">
		  	<label for="">No. of Sq.</label><input type="text" class="form-control ">
		  </div>
		  <div class="col-lg-5">
		  	<label for="">Area of Location:</label><input type="text" class="form-control ">
		  </div>
		  </div>
		  <div class="col-lg-11">
		  <hr>
		  	<label for="">Vehicle</label>
		  	<br>
		  	<div class="col-lg-3">
			<label for="">Make/Type:</label>
			<input type="text" class="form-control">	
		  	</div>
		  	<div class="col-lg-4">
			<label for="">Chassis #:</label>
			<input type="text" class="form-control">	
		  	</div>
		  	<div class="col-lg-4">
			<label for="">Engine #:</label>
			<input type="text" class="form-control">	
		  	</div>
		  </div>

		<div class="col-lg-11">
		<hr>
			<label for="">Furniture:</label>
			<br>
			<div class="col-lg-4">
				<label for="">1.</label><input type="text" class="form-control">
			</div>
			<div class="col-lg-4">
				<label for="">2.</label><input type="text" class="form-control">
			</div>
			<div class="col-lg-3">
				<label for="">3.</label><input type="text" class="form-control">
			</div>
		</div>
			<hr>
		<div class="col-lg-ll">
			<div class="col-lg-3">
			<br>
				<label for="">Bank Name:</label><input type="text" class="form-control">
			</div>
			<div class="col-lg-3">
			<br>
				<label for="">Account Name:</label><input type="text" class="form-control">
			</div>
			<div class="col-lg-4">
			<br>
				<label for="">Account #:</label><input type="text" class="form-control">
			</div>
		</div>
		<div class="col-lg-11">
		<br>
			<div class="col-lg-6">
				<label for="">Name of Business:</label><input type="text" class="form-control">
			</div>
			<div class="col-lg-5">
				<label for="">Nature of Business:</label><input type="text" class="form-control">
			</div>
		</div>
		
		<div class="col-lg-11">
		<br>
			<div class="col-lg-3">
				<label for="">Year of Operation:</label><input type="text" class="form-control">
			</div>
			<div class="col-lg-3">
				<label for="">Contact Number:</label><input type="text" class="form-control">
			</div>
			<div class="col-lg-3">
				<label for="">Business Permit #:</label><input type="text" class="form-control">
			</div>
		</div>

		<div class="col-lg-11">
		<br>
			<div class="col-lg-11">
				<label for="">Business Address:</label> <input type="text" class="form-control">
			</div>
		</div>		
		
		<div class="col-lg-11">
			<br>
			<p class="well"><input type="checkbox">  I hereby certify that the data is true and correct, and I authorized GLOBAL
			MERIT FINANCENTER or its representative to conduct the corresponding
			verification.
			<br>
			<button class="col-lg-offset-10 btn btn-info" type="submit">SUBMIT</button>
			</p>
			
			<div>
			
			</div>
		</div>
	</form>
</div>
	<div>
		<nav class="navbar navbar-default navbar-inverse" >
			
		</nav>
	</div>
	<footer>
    <hr>
        <p align="center">© 2013 Company, Inc. · <a href="#">Privacy</a> · <a href="#">Terms</a></p>
    <hr>
      </footer>

	{{HTML::script('assets/js/jquery.js')}}
    {{HTML::script('dist/js/bootstrap.min.js')}}
</body>
</html>