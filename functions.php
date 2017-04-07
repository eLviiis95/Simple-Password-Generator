<?php
/*

Author: Elvis Halilovic
STAND: 07.04.2017
Project: ---

*/
function generatePassword($var) {
	$maxLength = 2560;
	if(empty($var)){
		$error = "Without a length no password can be generated!<br>";
		return $error;
	}else{
		if(is_numeric($var)){
			if($var <= $maxLength){
				$codeLength = $var;
				$chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_-=+;:,.?";
				$password = substr(str_shuffle($chars), 0, $codeLength);
				return $password;
			}else{
				$error = "<h2>The password can have a maximum of $maxLength characters. Please adjust the transferred value!</h2><br><h3>Current transfer: $var</h3>";
				return $error;				
			}
		}else{
			$error = "<h2>Impossible length! Please just pass numbers and no other characters!</h2><br><h3>Current transfer: $var</h3>";
			return $error;			
		}
	}
	return $password;
}
































