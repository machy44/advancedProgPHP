<?php
session_start();

include("db-connection.php");
include("login.php");


if(!$_SESSION["login"])
{
	echo'
		<form method="POST" action="">
		Username:</br>
		<input type="text" name="username" value=""/><br/>
		Password:</br>
		<input type="password" name="passwd" value=""/><br/>
		<input type="submit" name="btn_login" value="login" />
		</form>
		<br/>
		<br/>
		[<a href="lozinka.php">Zaboravljena lozinka</a>]';
}
else
{
	//echo "uspjesna validacija";
	echo'<a href="index.php">Page1</a> |';
	echo'<a href="index.php?w=page2">Page2</a> |';
	echo'<a href="index.php?w=page3">Page3</a> |';
	echo'<a href="logout.php">Logut</a> |';

	echo '<br />';
	echo '<br />';

	if(!isset($_GET["w"]))
		$_GET["w"]="";

	switch ($_GET["w"]) {
		case 'page3':
			include("page3.php");
			break;
		case 'page2':
			include("page2.php");
			break;		
		default:
			include("page1.php");
			break;
	}

}

?>