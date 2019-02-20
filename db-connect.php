<?php

//local login

//$server = "localhost";

//$user = "wbip";

//$pw = "wbip123";

//$db = "test";

//production login 

$server = "localhost";

$user = "kruark24_test";

$pw = "test1234";

$db = "kruark24_test";

//setup connection to the database

$connect = mysqli_connect($server, $user, $pw, $db);

// test to see if we can connect to the database

if(!$connect)
{
   die("ERROR: Cannot connect to the database $db on server $server using the username $user.");
}

else 
  return $connect;


?>