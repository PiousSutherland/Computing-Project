<?php

// Create connection
$db = mysqli_connect("localhost","F454Computing","WrXC2mcJaXzCQNwR", "communityhall");

//$db_found=mysqli_select_db("communityhall");

//if($db_found){
//	print"DB FOUND";
//} else {
//	print"nope";
//}

// Check connection
if (mysqli_connect_errno($db))
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

function mysqli_real_esc_str_trim(string $attribute)
{
  global $db;
  return mysqli_real_escape_string($db, trim($_POST[$attribute]));
}