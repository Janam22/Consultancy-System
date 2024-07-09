<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Sunrise Education Network</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- Favicons -->
  <link href="../assets/img/favicon.png" rel="icon">
  <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="../assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  
  <link href="../assets/css/style.css" rel="stylesheet">
 
  <link href="../assets/js/dataTables.bootstrap4.min.css" rel="stylesheet">
  
    <!-- Including jQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
  
    <!-- Including Bootstrap JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  
  </head>
  <body>
      
  <?php

    session_start();
    error_reporting(0);
    include("../libraries/connect.php");
    
    date_default_timezone_set('Asia/Kathmandu');
    $USER_ID = $_SESSION['EMAIL'];
    $qry = "SELECT email, name, user_flag, designation, photo FROM users WHERE email = '$USER_ID'";

    $rs = mysqli_query($connect, $qry);

    while ($row = mysqli_fetch_assoc($rs)) { 
      $GLOBAL_CID = "001"; 
      $GLOBAL_UID = $row['email']; 
      $GLOBAL_NAM = $row['name'];
      $GLOBAL_USER_FLAG = $row['user_flag'];
      $GLOBAL_DESIGNATION = $row['designation'];
      $GLOBAL_PHOTO = $row['photo'];
      
		  if (strlen($GLOBAL_PHOTO)==0) { 
			$GLOBAL_PHOTO_PATH = "../assets/profile/default.png";
		  } else { 
			$GLOBAL_PHOTO_PATH = "../assets/profile/" . $GLOBAL_PHOTO;
		  }	
		  
		  
		  
        $DATA_BANK_PREVILEGE = $ERP->ERP_DATA('PREVILEGES_INFO', $GLOBAL_UID, $GLOBAL_CID);
        foreach ($DATA_BANK_PREVILEGE AS $PREVILEGE_ROW) {
                            
                $PREVILEGE_FLAG = $PREVILEGE_ROW['previlege'];
                $DESIGNATION_FLAG = $PREVILEGE_ROW['designation'];  
                $DESIGNATION_ADD_FLAG = $PREVILEGE_ROW['designation_add'];  
                $DESIGNATION_EDIT_FLAG = $PREVILEGE_ROW['designation_edit'];  
                $STAFFS_FLAG = $PREVILEGE_ROW['staffs'];  
                $STAFFS_ADD_FLAG = $PREVILEGE_ROW['staffs_add'];
                $STAFFS_EDIT_FLAG = $PREVILEGE_ROW['staffs_edit']; 
                $STAFFS_DELETE_FLAG = $PREVILEGE_ROW['staffs_delete']; 
                $USERS_FLAG = $PREVILEGE_ROW['users']; 
                $USERS_ADD_FLAG = $PREVILEGE_ROW['users_add'];
                $USERS_EDIT_FLAG = $PREVILEGE_ROW['users_edit']; 
                $USERS_DELETE_FLAG = $PREVILEGE_ROW['users_delete'];
                
                $DATABASE_BACKUP_FLAG = $PREVILEGE_ROW['database_backup'];
                
                $NEW_STUDENTS_FLAG = $PREVILEGE_ROW['new_students']; 
                $NEW_STUDENTS_ADD_FLAG = $PREVILEGE_ROW['new_students_add'];
                $NEW_STUDENTS_EDIT_FLAG = $PREVILEGE_ROW['new_students_edit']; 
                            
        }
    }


// Check if the user has been active recently
$timeout = 3600; // 60 minutes timeout (adjust as needed)
if (isset($_SESSION['last_activity']) && (time() - $_SESSION['last_activity']) > $timeout) {
    // User has been inactive for too long, log them out or handle session timeout
    include("v/logout.php");
    
}



?>

    
  </body>

</html>  
