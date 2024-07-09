
<?php

    include("class/erp_function.php");
    $ERP = new erp_function();
    //$ERP->SYSTEM_PERMISSION();

    error_reporting(0); 
    include("header.php");
    $login = null;
    $MessageBox = null;
	$GLOBAL_CID = '001'; 

    $o = (isset($_POST['o']) ? $_POST['o'] : null);
    if (strlen($o)==0) { $o='sen'; } 

    $login = (isset($_POST['login']) ? $_POST['login'] : null);

    if (strlen($login)!=0) { 
	include("libraries/connect.php"); 
	include("libraries/function.php"); 
	include("post/login_post.php"); 
    } 
?>


<HTML>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<BODY>


    <?php 
       include("libraries/connect.php"); 	
       if ($o=='sen') { include("login.php"); } 

    ?>	




</BODY>

<?php include("footer.php"); ?>