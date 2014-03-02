<?php 

	function displayName() {
		return Auth::user()->fname;
	}
	function displayId(){
		return Auth::user()->id;
	}
	function displayLname(){
		return Auth::user()->lname;
	}
	function displayMname(){
		return Auth::user()->mname;
	}
	function displayEmail(){
		return Auth::user()->email;
	}
	function displayAddress(){
		return Auth::user()->address;
	}
	function displayBday(){
		return Auth::user()->bday;
	}
	function displayBplace(){
		return Auth::user()->bplace;
	}
	function displayCivilStatus(){
		return Auth::user()->civil_status;
	}
	function displayContactNum(){
		return Auth::user()->contactNum;
	}
	
