<?php
error_reporting(1);
  $INPUT = $_SERVER['REQUEST_METHOD'];

  if ($INPUT=='POST') { 
    
    $RESULT = 0;
    $GLOBAL_CID = "001";
    date_default_timezone_set('Asia/Kathmandu');
	$CREATED_DATE = date('Y-m-d H:i:s');
	$MID = (isset($_POST['mid']) ? $_POST['mid'] : null);
	$GLOBAL_UID = (isset($_POST['global_uid']) ? $_POST['global_uid'] : null);
    $ROW_COUNT = (isset($_POST['ROW_COUNT']) ? $_POST['ROW_COUNT'] : null);
		    
	$DELETE = "DELETE FROM previleges WHERE ccode='$GLOBAL_CID'";
    $ERP->ERP_EXECUTE($DELETE);
        
	for ($x = 1; $x <= $ROW_COUNT; $x++) {
	                    $EMAIL = NULL;
                        $PREVILEGE = NULL;
                        $DESIGNATION = NULL;
                        $DESIGNATION_ADD = NULL;
                        $DESIGNATION_EDIT = NULL;
                        $STAFFS = NULL;
                        $STAFFS_ADD = NULL;
                        $STAFFS_EDIT = NULL;
                        $STAFFS_DELETED = NULL;
                        $USERS = NULL;
                        $USERS_ADD = NULL;
                        $USERS_EDIT = NULL;
                        $USERS_DELETE = NULL;
                        $NEW_STUDENTS = NULL;
                        $NEW_STUDENTS_ADD = NULL;
                        $NEW_STUDENTS_EDIT = NULL;
                        
                        $DATABASE_BACKUP = NULL;
	    
	    $FIELD_ID = "EMAIL" . $x; $EMAIL = (isset($_POST[$FIELD_ID]) ? $_POST[$FIELD_ID] : null);
	    
	    $FIELD_ID = "previlege" . $x; $PREVILEGE = (isset($_POST[$FIELD_ID]) ? $_POST[$FIELD_ID] : null);
	    if ($PREVILEGE=='on') { $PREVILEGE = 'Y'; } else { $PREVILEGE = 'N'; }
	    
	    $FIELD_ID = "databasebackup" . $x; $DATABASE_BACKUP = (isset($_POST[$FIELD_ID]) ? $_POST[$FIELD_ID] : null);
	    if ($DATABASE_BACKUP=='on') { $DATABASE_BACKUP = 'Y'; } else { $DATABASE_BACKUP = 'N'; }
	    
	    $FIELD_ID = "designation" . $x; $DESIGNATION = (isset($_POST[$FIELD_ID]) ? $_POST[$FIELD_ID] : null);
	    if ($DESIGNATION=='on') { $DESIGNATION = 'Y'; } else { $DESIGNATION = 'N'; }
	    
	    $FIELD_ID = "designation_add" . $x; $DESIGNATION_ADD = (isset($_POST[$FIELD_ID]) ? $_POST[$FIELD_ID] : null);
	    if ($DESIGNATION_ADD=='on') { $DESIGNATION_ADD = 'Y'; } else { $DESIGNATION_ADD = 'N'; }
	    
	    $FIELD_ID = "designation_edit" . $x; $DESIGNATION_EDIT = (isset($_POST[$FIELD_ID]) ? $_POST[$FIELD_ID] : null);
	    if ($DESIGNATION_EDIT=='on') { $DESIGNATION_EDIT = 'Y'; } else {
	        $DESIGNATION_EDIT = 'N'; }
	    
	    $FIELD_ID = "staffs" . $x; $STAFFS = (isset($_POST[$FIELD_ID]) ? $_POST[$FIELD_ID] : null);
	    if ($STAFFS=='on') { $STAFFS = 'Y'; } else { $STAFFS = 'N'; }
	    
	    $FIELD_ID = "staffs_add" . $x; $STAFFS_ADD = (isset($_POST[$FIELD_ID]) ? $_POST[$FIELD_ID] : null);
	    if ($STAFFS_ADD=='on') { $STAFFS_ADD = 'Y'; } else { $STAFFS_ADD = 'N';
	    }
	    
	    $FIELD_ID = "staffs_edit" . $x; $STAFFS_EDIT = (isset($_POST[$FIELD_ID]) ? $_POST[$FIELD_ID] : null);
	    if ($STAFFS_EDIT=='on') { $STAFFS_EDIT = 'Y'; } else { $STAFFS_EDIT = 'N'; }
	    
	    $FIELD_ID = "staffs_delete" . $x; $STAFFS_DELETE = (isset($_POST[$FIELD_ID]) ? $_POST[$FIELD_ID] : null);
	    if ($STAFFS_DELETE=='on') { $STAFFS_DELETE = 'Y'; } else { $STAFFS_DELETE = 'N'; }
	    
	    $FIELD_ID = "users" . $x; $USERS = (isset($_POST[$FIELD_ID]) ? $_POST[$FIELD_ID] : null);
	    if ($USERS=='on') { $USERS = 'Y'; } else { $USERS = 'N'; }
	    
	    $FIELD_ID = "users_add" . $x; $USERS_ADD = (isset($_POST[$FIELD_ID]) ? $_POST[$FIELD_ID] : null);
	    if ($USERS_ADD=='on') { $USERS_ADD = 'Y'; } else { $USERS_ADD = 'N'; }
	    
	    $FIELD_ID = "users_edit" . $x; $USERS_EDIT = (isset($_POST[$FIELD_ID]) ? $_POST[$FIELD_ID] : null);
	    if ($USERS_EDIT=='on') { $USERS_EDIT = 'Y'; } else { $USERS_EDIT = 'N'; }
	    
	    $FIELD_ID = "users_delete" . $x; $USERS_DELETE = (isset($_POST[$FIELD_ID]) ? $_POST[$FIELD_ID] : null);
	    if ($USERS_DELETE=='on') { $USERS_DELETE = 'Y'; } else { $USERS_DELETE = 'N'; }
	    
	    
	    $FIELD_ID = "new_students" . $x; $NEW_STUDENTS = (isset($_POST[$FIELD_ID]) ? $_POST[$FIELD_ID] : null);
	    if ($NEW_STUDENTS=='on') { $NEW_STUDENTS = 'Y'; } else { $NEW_STUDENTS = 'N'; }
	    
	    $FIELD_ID = "new_students_add" . $x; $NEW_STUDENTS_ADD = (isset($_POST[$FIELD_ID]) ? $_POST[$FIELD_ID] : null);
	    if ($NEW_STUDENTS_ADD=='on') { $NEW_STUDENTS_ADD = 'Y'; } else { $NEW_STUDENTS_ADD = 'N'; }
	    
	    $FIELD_ID = "new_students_edit" . $x; $NEW_STUDENTS_EDIT = (isset($_POST[$FIELD_ID]) ? $_POST[$FIELD_ID] : null);
	    if ($NEW_STUDENTS_EDIT=='on') { $NEW_STUDENTS_EDIT = 'Y'; } else { $NEW_STUDENTS_EDIT = 'N'; }
	    
	    
		    $INSERT = "INSERT INTO previleges(email, previlege, designation, designation_add, designation_edit, staffs, staffs_add, staffs_edit, staffs_delete, users, users_add, users_edit, users_delete, new_students, new_students_add, new_students_edit, database_backup, cby, ccode, cdate) VALUES('$EMAIL','$PREVILEGE', '$DESIGNATION', '$DESIGNATION_ADD', '$DESIGNATION_EDIT', '$STAFFS', '$STAFFS_ADD', '$STAFFS_EDIT', '$STAFFS_DELETE', '$USERS', '$USERS_ADD', '$USERS_EDIT', '$USERS_DELETE', '$NEW_STUDENTS', '$NEW_STUDENTS_ADD', '$NEW_STUDENTS_EDIT', '$DATABASE_BACKUP', '$GLOBAL_UID', '$GLOBAL_CID', '$CREATED_DATE')";
		
	        $RESULT = $ERP->ERP_EXECUTE($INSERT);
            
            
	}
	
            if ($RESULT == 1) {
                echo "<script> alert(\"Previleges applied Successfully.\"); </script>";
        
            } else {
                echo "<script> alert(\"Previleges apply Failed.\"); </script>";
                
            }
	
  }
	
	?>