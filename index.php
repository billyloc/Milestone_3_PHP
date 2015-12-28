<?php 

session_start();

include_once("UsernameValidator.php");
include_once("PasswordValidator.php");
$username = "";
$password = "";
$msg = "";
$msg2 = "";



function isuserLoggedin(){
	return $_SESSION["isLoggedin"];
}

$isuserLoggedin = isuserLoggedin();

if(isset($_POST["username"])){
	$_SESSION["user"] = $_POST["username"];
}
if(isset($_POST["password"])){
	$_SESSION["pass"] = $_POST["password"];
}



if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	if($usernameValidator->isValid($_SESSION["user"])){

		if($passwordValidator->isValid($_SESSION["pass"])){
			return header("Location: account.php");
			exit();

		}
		else {
			$msg2 = "Your password is invalid";
		}
	}
	else {
		$msg = "Your username is invalid";
	}
}

?>


 <!DOCTYPE html>
<html lang="en">
<head>	
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="index.php" method="POST">

        <div>
            <label>Username:</label>
            <input type="text" name="username">
            <span class="error"><?= $msg  ?></span>            
        </div>

        <div>
            <label>Password:</label>
            <input type="password" name="password">
            <span class="error"><?= $msg2 ?></span>            
        </div>

        <button>Login</button>

    </form>
</body>
</html>