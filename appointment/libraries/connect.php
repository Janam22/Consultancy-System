<?php
session_start();
  $connect = mysqli_connect("localhost", "wbmoxsop_admin", "wbmoxsop_admin", "wbmoxsop_admin");
  mysqli_set_charset( $connect, 'UTF8');

  if (!$connect) {
	    echo "Error: Unable to connect to MySQL." . PHP_EOL;
	    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
	    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
	    exit;
  }

  //echo "Success: A proper connection to MySQL was made! The my_db database is great." . PHP_EOL;
  //echo "Host information: " . mysqli_get_host_info($connect) . PHP_EOL;
  //mysqli_close($connect);

?>
