<?php 

include_once("Validator.php");


class UsernameValidator extends Validator {
	protected $pattern = "/^[a-zA-Z]{5,}$/";
}

$usernameValidator = new UsernameValidator;
$usernameValidator->isValid($_SESSION["user"]);