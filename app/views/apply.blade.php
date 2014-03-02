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
	<br>
	<br>
	<br>
		<h1 align="center">Application Form</h1>
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
				<label for="">Preset Address:</label>
				<input type="text" class="form-control"></div>

			<div class="col-sm-4">
				<label for="">Contact:</label>
				<input type="text" class="form-control"></div>

			<div class="col-sm-11">
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

			<div class="col-sm-3">
				<label>If Employed, Present Employer:</label>
				<input type="text" class="form-control"></div>
			<div class="col-sm-5">
				<label>Address:</label>
				<input type="text" class="form-control"></div>
			<div class="col-sm-3">
				<label>Salary/mo:</label>
				<input type="text" class="form-control"></div>
			<div class="col-sm-7">
				<label>Position:</label>
				<input type="text" class="form-control"></div>
			<div class="col-sm-4">
				<label>Length of Service:</label>
				<input type="text" class="form-control"></div>
			<div class="col-sm-11">
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
			<div class="col-sm-3">
				<label for="">Applicant's Spouse:</label>
				<input type="text" class="form-control"></div>
			<div class="col-sm-3">
				<label>If Employed, Present Employer:</label>
				<input type="text" class="form-control"></div>
			<div class="col-sm-5">
				<label>Address:</label>
				<input type="text" class="form-control"></div>
			<div class="col-sm-2">
				<label>Salary/mo:</label>
				<input type="text" class="form-control"></div>
			<div class="col-sm-5">
				<label>Position:</label>
				<input type="text" class="form-control"></div>
			<div class="col-sm-3">
				<label>Length of Service:</label>
				<input type="text" class="form-control"></div>

			<div class="col-sm-4">
				<label>Desired Loan Amount:</label>
				<input type="text" class="form-control"></div>
			<div class="col-sm-4">
				<label>
					Term
					<input type="text" class="form-control"></label>
				<label>daily/monthly</label>
			</div>
			<div class="col-sm-10">
				<label>Purpose of Loan Proceeds</label>
				<input type="text" class="form-control"></div>

			<div class="col-sm-3">
				<label>Number of Dependents:</label>
				<input type="text" class="form-control"></div>

			<div class="col-sm-11">
				<div class="col-sm-4">
					<label>Name:</label>
					<div class="bottom">
						<input type="text" class="form-control"></div>
					<div class="bottom">
						<input type="text" class="form-control"></div>
					<div>
						<input type="text" class="form-control"></div>
				</div>
				<div class="col-sm-3">
					<label >School Level:</label>
					<div class="bottom">
						<input type="text" class="form-control"></div>
					<div class="bottom">
						<input type="text" class="form-control"></div>
					<div>
						<input type="text" class="form-control"></div>
				</div>
				<div class="col-sm-4">
					<label >School Attended:</label>
					<div class="bottom">
						<input type="text" class="form-control"></div>
					<div class="bottom">
						<input type="text" class="form-control"></div>
					<div>
						<input type="text" class="form-control"></div>
				</div>

			</div>

			<div class="col-lg-11">
				<div>
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
		  	<label for="">Vehicle</label>
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
			<label for="">Furniture:</label>
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
		
		<div class="col-lg-ll">
			<div class="col-lg-3">
				<label for="">Bank Name:</label><input type="text" class="form-control">
			</div>
			<div class="col-lg-3">
				<label for="">Account Name:</label><input type="text" class="form-control">
			</div>
			<div class="col-lg-4">
				<label for="">Account #:</label><input type="text" class="form-control">
			</div>
		</div>

		<div class="col-lg-11">
			<div class="col-lg-6">
				<label for="">Name of Business:</label><input type="text" class="form-control">
			</div>
			<div class="col-lg-5">
				<label for="">Nature of Business:</label><input type="text" class="form-control">
			</div>
		</div>
		
		<div class="col-lg-11">
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
			<div class="col-lg-11">
				<label for="">Business Address:</label> <input type="text" class="form-control">
			</div>
		</div>

		<div class="col-lg-11">
			<label for="">Credit References and Status of Records</label>

			<div class="col-lg-2">
				<label for="">Creditor:</label> 
				<input type="text" class="form-control bottom">
				<input type="text" class="form-control bottom ">
				<input type="text" class="form-control bottom">
			</div>
			<div class="col-lg-3">
				<label for="">Address:</label>

				<input type="text" class="form-control bottom">
				<input type="text" class="form-control bottom">
				<input type="text" class="form-control bottom">
			</div>
			<div class="col-lg-3">
				<label for="">Loan Amount:</label> 
				<input type="text" class="form-control bottom">
				<input type="text" class="form-control bottom">
				<input type="text" class="form-control bottom">
			</div>
			<div class="col-lg-3">
				<label for="">Status:</label> 
				<input type="text" class="form-control bottom">
				<input type="text" class="form-control bottom">
				<input type="text" class="form-control bottom">
			</div>
		</div>
		

		<div class="col-lg-11">
			<label for="">Statement of Monthly Income:</label>
			<div class="form-horizontal">
				<div class="form-group">
				<label for="" class="col-lg-3 control-label">Applicant Gross Income:</label>
				<div class="col-lg-4">
				<input type="text" class="form-control form-field">
				</div>
				</div>
				<div class="form-group">
				<label for="" class="col-lg-3 control-label">Spouse Gross Income:</label>
				<div class="col-lg-4">
				<input type="text" class="form-control form-field">
				</div>
				</div>
				<div class="form-group">
				<label for="" class="col-lg-3 control-label">Other Income:</label>
				<div class="col-lg-4">
				<input type="text" class="form-control form-field">
				</div>
				</div>
				<div class="form-group">
				<label for="" class="col-lg-3 control-label">Total Gross Income:</label>
				<div class="col-lg-4">
				<input type="text" class="form-control form-field">
				</div>
				</div>
				<div class="form-group">
				<label for="" class="col-lg-3 control-label">Less:</label>
				<div class="col-lg-4">
				<input type="text" class="form-control form-field">
				</div>
				</div>
				<div class="form-group">
				<label for="" class="col-lg-3 control-label">Household Expense:</label>
				<div class="col-lg-4">
				<input type="text" class="form-control form-field">
				</div>
				</div>
				<div class="form-group">
				<label for="" class="col-lg-3 control-label">Business Expense:</label>
				<div class="col-lg-4">
				<input type="text" class="form-control form-field">
				</div>
				</div>
				<div class="form-group">
				<label for="" class="col-lg-3 control-label">Total Expense:</label>
				<div class="col-lg-4">
				<input type="text" class="form-control form-field">
				</div>
				</div>
				<div class="form-group">
				<label for="" class="col-lg-3 control-label">Net Income:</label>
				<div class="col-lg-4">
				<input type="text" class="form-control form-field">
				</div>
				</div>
			</div>
		</div>
		

		<div class="col-lg-11">
			<h1>Additional Information</h1>
			
			<h4>Co-Maker Statement</h4>
		
			<div class="col-lg-3">
			<label for="">Name</label><input type="text" class="form-control">	
			</div>
			<div class="col-lg-4">
			<label for="">Civil Status</label><input type="text" class="form-control">	
			</div>
			<div class="col-lg-4">
			<label for="">Contact No.</label><input type="text" class="form-control">	
			</div>
		</div>

		<div class="col-lg-5">
			<label for="">Address:</label><input type="text" class="form-control">
		</div>
		<div class="col-lg-5">
			<label for=""><strong>Co-Maker Spouse:</strong></label><input type="text" class="form-control">
		</div>
		<div class="col-lg-3">
			<label for="">Date of Birth:</label><input type="text" class="form-control">
		</div>
		<div class="col-lg-2">
			<label for="">Age:</label><input type="text" class="form-control">
		</div>
		<div class="col-lg-3">
			<label for="">Date of Birth:</label><input type="text" class="form-control">
		</div>
		<div class="col-lg-2">
			<label for="">Age:</label><input type="text" class="form-control">
		</div>
		<div class="col-lg-5">
			<label for="">Place of Birth:</label><input type="text" class="form-control">
		</div>
		<div class="col-lg-6">
			<label for="">Place of Birth:</label><input type="text" class="form-control">
		</div>

		<div class="col-lg-11">
			<label for="">Sources of Income</label>
			<label for="" class="checkbox-inline"><input type="checkbox">Business</label>
			<label for="" class="checkbox-inline"><input type="checkbox">Employment</label>
			<label for="" class="checkbox-inline"><input type="checkbox">Others,pls.Specify</label>
			<div class="col-lg-offset-4">
			<input type="text" class="form-control">
			</div>
		</div>
		
		<div class="col-sm-3">
				<label>If Employed, Present Employer:</label>
				<input type="text" class="form-control"></div>
			<div class="col-sm-5">
				<label>Address:</label>
				<input type="text" class="form-control"></div>
			<div class="col-sm-3">
				<label>Salary/mo:</label>
				<input type="text" class="form-control"></div>
			<div class="col-sm-7">
				<label>Position:</label>
				<input type="text" class="form-control"></div>
			<div class="col-sm-4">
				<label>Length of Service:</label>
				<input type="text" class="form-control"></div>
			
			<div class="col-lg-11 ">
			<label for="">Statement of Monthly Income:</label>
			<div class="form-horizontal">
				<div class="form-group">
				<label for="" class="col-lg-3 control-label">Applicant Gross Income:</label>
				<div class="col-lg-4">
				<input type="text" class="form-control form-field">
				</div>
				</div>
				<div class="form-group">
				<label for="" class="col-lg-3 control-label">Spouse Gross Income:</label>
				<div class="col-lg-4">
				<input type="text" class="form-control form-field">
				</div>
				</div>
				<div class="form-group">
				<label for="" class="col-lg-3 control-label">Other Income:</label>
				<div class="col-lg-4">
				<input type="text" class="form-control form-field">
				</div>
				</div>
				<div class="form-group">
				<label for="" class="col-lg-3 control-label">Total Gross Income:</label>
				<div class="col-lg-4">
				<input type="text" class="form-control form-field">
				</div>
				</div>
				<div class="form-group">
				<label for="" class="col-lg-3 control-label">Less:</label>
				<div class="col-lg-4">
				<input type="text" class="form-control form-field">
				</div>
				</div>
				<div class="form-group">
				<label for="" class="col-lg-3 control-label">Household Expense:</label>
				<div class="col-lg-4">
				<input type="text" class="form-control form-field">
				</div>
				</div>
				<div class="form-group">
				<label for="" class="col-lg-3 control-label">Business Expense:</label>
				<div class="col-lg-4">
				<input type="text" class="form-control form-field">
				</div>
				</div>
				<div class="form-group">
				<label for="" class="col-lg-3 control-label">Total Expense:</label>
				<div class="col-lg-4">
				<input type="text" class="form-control form-field">
				</div>
				</div>
				<div class="form-group">
				<label for="" class="col-lg-3 control-label">Net Income:</label>
				<div class="col-lg-4">
				<input type="text" class="form-control form-field">
				</div>
				</div>
			</div>
		</div>

		<div class="col-lg-11">

			<p class="well"><input type="checkbox">  I hereby certify that the data is true and correct, and I authorized GLOBAL
			MERIT FINANCENTER or its representative to conduct the corresponding
			verification. I am aware that in signing note as co-maker I become jointly
			and solidarity liable with the applicant.
			<!--<input type="submit" class="col-lg-offset-10 btn btn-info" value="SUBMIT">-->
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