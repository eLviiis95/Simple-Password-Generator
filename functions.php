<?php
/*

Author: eLviiis95
STAND: 07.04.2017
Project: ---

*/

function generatePassword($var) {
	// Max password size
	$maxLength = 256;
	if(is_numeric($var)){
		if($var <= $maxLength){
			$chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_-=+;:,.?";
			$password = substr(str_shuffle($chars), 0, $var);
			return $password;
		}else{
			$error = "<h2>The password can have a maximum of $maxLength characters. Please adjust the transferred value!</h2><br><h3>Current transfer: $var</h3>";
			return $error;				
		}
	}else{
		$error = "<h2>Impossible length! Please just pass numbers and no other characters!</h2><br><h3>Current transfer: $var</h3>";
		return $error;			
		}
	return $password;
}