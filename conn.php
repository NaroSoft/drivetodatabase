<?php
$mysqli = new mysqli("remotemysql.com","rCtGtsSc2X","7tN1qsJpsJ","rCtGtsSc2X");

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}else{
  echo "Yep! Database Connected...";
}

$mysqli->close();
?>
