<?php

    session_start();
    date_default_timezone_set('Asia/Kathmandu');

     include("../libraries/connect.php");
     
 	 $INSERT = "UPDATE session_log SET status='Logged Out' WHERE user_id = '" . $_SESSION["EMAIL"] . "' AND session_id = '" . $_SESSION["SESSION_ID"] . "'";

	 mysqli_query($connect, $INSERT);
	                    
    setcookie('user_id_cookie', "", time() - 3600, "/");
    setcookie('session_id_cookie', "", time() - 3600, "/");
    unset($_SESSION['EMAIL']);

    session_destroy();  

	                    
?>
<script type="text/javascript">
    window.location = "../index.php";
</script>