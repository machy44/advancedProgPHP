<?php
	include("db-connection.php");

	echo '
	<form method="POST" action =" ">
	<p>Upisite mail adresu</p>
	E-mail:<br />
	<input type = "text" name="email" value=""/>
	<input type="submit" name="btn_lozinka" value="Posalji" />
	</form>';

	if(isset($_POST["btn_lozinka"])){//provjerava se je li korisnik kliknu na gumb za slanje zahtjeva
		$email=stripslashes($_POST["email"]);

		
		$query = "SELECT password, mail FROM users WHERE mail='$email'";
		$result = mysql_query($query);

		if($result)
		{
			$br_result = mysql_num_rows($result);

			if($br_result > 0)
			{
				$row = mysql_fetch_array($result);
				//ovdje ide PHP kod koji salje mail

				echo 'Vasi login podaci poslani na ';
				echo'e-mail: '.$row["mail"];
			

		}
		else
		{
			echo 'nepostoji korisnik sa navedenom e-mail adresom.';
		}
	}
	else
		
	echo'doslo je do pogreske. pokusajte ponovo';// ovo služi kako korisnik ne bi morao gledati ružnu generičku pogrešku koju prikazuje server
		

	}

?>