<?php
if(!isset($_SESSION["login"]))
	$_SESSION["login"] = false; //provjerava da li postoji vrijednost u sesiji te ako ne postoji postavlja se na zadanu vrijednost
//u ovom slucaju to je false. Naime, vrijednost sesije login odlučuje je li korisnik ispravno prijavljen u sustav.

if(isset($_POST["btn_login"]))//provjereava se je li korisnik kliknuo na gumbić login na formi za prijavu koja je sastavni dio
//index.php stranice
{

	$username = $_POST["username"];
	$password = $_POST["passwd"];

	//$password= md5($password);

	$query="SELECT * FROM users WHERE username='$username' AND password='$password'";
	$result=mysql_query($query);

	$num_rows = mysql_num_rows($result);
	//echo "$num_rows Rows\n";

	if($num_rows > 0 )
	{
		$_SESSION["login"] = true;
	}
	else
	{
		$_SESSION["login"] = false;
	}



}

?>