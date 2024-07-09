<?php 
   session_start();
   error_reporting(0);
   if ($_SESSION['EMAIL'] == 0) {
       header("Location: ../index.php");
   }
   
   $o= (isset($_REQUEST['o']) ? $_REQUEST['o'] : null); 
   if (strlen($o)==0){
        $o = "dashboard";
   }
   

   include("../class/erp_function.php");
   $ERP = new erp_function();
   include("main_menu.php");
   
?>

<HTML>
<HEAD>
<TITLE>SEN - <?php print $o; ?></TITLE>
</HEAD>

<BODY>

<main id="main" class="main">
<?php 
   if ($o=='dashboard') { include("v/dashboard.php"); }
   //if ($o=='feedback') { include("v/feedback.php"); }
   if ($o=='profile') { include("v/profile.php"); }
   if ($o=='logout') { include("v/logout.php"); }
   if ($o=='users') { include("v/users.php"); }
   if ($o=='user') { include("v/user.php"); }
   if ($o=='staffs') { include("v/staffs.php"); }
   if ($o=='staff') { include("v/staff.php"); }
   
   if ($o=='newstudent') { include("v/new_student.php"); }
   if ($o=='applied_student') { include("v/applied_student.php"); }
   
   if ($o=='counselling') { include("v/applied_student.php"); }
   if ($o=='offerprocessing') { include("v/applied_student.php"); }
   if ($o=='gteprocessing') { include("v/applied_student.php"); }
   if ($o=='coeprocessing') { include("v/applied_student.php"); }
   if ($o=='biometricmedical') { include("v/applied_student.php"); }
   if ($o=='visaprocessing') { include("v/applied_student.php"); }
   if ($o=='visagranted') { include("v/applied_student.php"); }
   if ($o=='visarefused') { include("v/applied_student.php"); }
   
   
   if ($o=='designation') { include("v/designation.php"); }
   if ($o=='designation.management') { include("v/designation_management.php"); }
   if ($o=='previlege.management') { include("v/previlege_management.php"); }
   
   if ($o=='qrcode') { include("v/downloadqr.php"); }
   if ($o=='databasebackup') { include("v/database_backup.php"); }
?>

</main>
</BODY> 

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>Sunrise Education Network</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      Designed by JKD
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  </BODY>
   </HTML>

  <?php include("footer.php"); ?>