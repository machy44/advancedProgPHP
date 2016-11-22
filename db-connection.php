<?php

$mysql_host='localhost';
$mysql_user='root';
$mysql_password='root';

$link = mysql_connect($mysql_host, $mysql_user,$mysql_password);
$selected = mysql_select_db("naprednoprogramiranje",$link);



?>