<?php
session_start();//ova funkcija pokreće sesiju, n oona također dohvaća već postojeću sesiju kako bi se s njom nešto moglo napraviti
session_destroy();
header("Location: index.php");//korisnika treba vratiti na index.php stranicu
exit;

?>