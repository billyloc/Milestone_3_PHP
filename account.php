<?php 

session_start();



if ($_SERVER['REQUEST_METHOD'] == 'POST') {
}


echo "Hello " . $_SESSION["user"] . " you have successfully logged in.";

 	
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>

	</style>
</head>
<body>
<p data-height="268" data-theme-id="0" data-slug-hash="dJymh" data-default-tab="result" data-user="FlyingEmu" class='codepen'>See the Pen <a href='http://codepen.io/FlyingEmu/pen/dJymh/'>Arc Reactor - Ironman</a> by Flying Emu (<a href='http://codepen.io/FlyingEmu'>@FlyingEmu</a>) on <a href='http://codepen.io'>CodePen</a>.</p>
<script async src="//assets.codepen.io/assets/embed/ei.js"></script>
</body>
</html>

 <a href="logout.php">Logout</a>

