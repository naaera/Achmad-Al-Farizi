<?php

$val = new validate();
$val->username_validate("bigbosss_");
$val->password_validate("bigBoss1@");

class validate{
	public function username_validate($str){
		if (!preg_match('/^[a-z_]{8,}+$/', $str)) {
			echo "Username must lower case and minimum eigth character;";
		} else if (!preg_match('#[_]+#', $str)) {
			echo "Username not containts underscore;";
		} else {
			echo "Username Good;";
		}
	}
	
	public function password_validate($str){
		if (!preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/', $str)){
			echo 'Password Minimum eight characters, at least one uppercase letter, one lowercase letter, one number and one special character;';
		} else {
			echo "Password Good;";
		}
	}
}

?>