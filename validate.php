<?php


session_start(); 

$username = "";
$password = "";

if(isset($_POST["username"])){
	$username = $_POST["username"];
}
if(isset($_POST["password"])){
	$password = $_POST["password"];
}


class Validator {

	protected $pattern = "";


	public function isValid($string){
		if(preg_match($this->pattern,$string)){
			return true;
		}
		else {
			return false;
		}
	}
}

class UsernameValidator extends Validator {
	protected $pattern = "/^[a-zA-Z]{5,}$/";
}

class PasswordValidator extends Validator {
	protected $pattern = "/^[a-zA-Z0-9!@#$%^&*\(\)]{5,}$/";
}

$usernameValidator = new UsernameValidator;
$usernameValidator->isValid($username);

$passwordValidator = new PasswordValidator;
$passwordValidator->isValid($password);

//sets a cookie (gives a nametag)

// $_SESSION["isLoggedin"] = true;

// if($_SESSION["isLoggedin"]){
// 	echo "you are logged in";
// } else {
// 	echo "you are NOT logged in";
// }

// $username = "";
// $password = "";

// if(isset($_POST["username"])){
// 	$username = $_POST["username"];
// }
// if(isset($_POST["password"])){
// 	$password = $_POST["password"];
// }


// function isPasswordValid($password){
// 	return false;
// }
// function isUsernameValid($username){
// 	if($username = /^[a-zA-Z]{5,}$/)
// }
// function loginUser(){}
// function setMessagePasswordIsBad(){
// 	echo "Bad Password";
// }
// function redirectToLogin(){
// 	echo "redirect to account";
// }
function UserNameIsBad(){
	return "Bad username";
}
function PasswordIsBad(){
	return "Bad password";
}
// }
// function redirectToAccount(){
// 	echo "redirect to account";
// }



if($usernameValidator->isValid($username)){

	if($passwordValidator->isValid($password)){
		return header("Location: account.php");

	}
	else {
		echo PasswordIsBad();
	}
}
else {
	echo UserNameIsBad();
}


 ?>