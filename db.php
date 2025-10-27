<?php 

/* Programmet kobler til database-server og velger database */

$host = 'zafar1671';
$username = 'zafar1671';
$password = 'ed24zafar1671';
$database = 'zafar1671';

$db = mysqli_connect($host, $username, $password, $database) or die ("Kan ikke koble til database-serveren");
