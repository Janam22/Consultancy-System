<?php 
    session_start();
    
    $SUBMIT = (isset($_POST['submit']) ? $_POST['submit'] : null);
    if ($SUBMIT=='SUBMIT')  { 
	    include("../post/previlege_post.php"); 
    } 
    
?>

    <div class="pagetitle">
      <h1>Previlege Management</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
                <form action='index.php' method='post'>
                <input type="hidden" name='o' value='dashboard'>
                <button type="submit" class="nav-link collapsed" style="border:none; background:transparent;">Dashboard</button>
                </form>
            </li>
          <li class="breadcrumb-item active">Previlege</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    
    


            <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h4 class="card-title">Previlege Management</span>
            </div>&nbsp;
            
            
            
            <div class="card-body">
              <div class="table-responsive">
                <form method="post" action="index.php" enctype="multipart/form-data">
                <table class="table" width="100%" cellspacing="0"> 
               <thead>
                   <tr>
                    <th scope="col">Name</th>
                    <th scope="col">User Type</th>
                    <th scope="col">Options</th>
                   </tr>
               </thead>
               <tbody>
                    <?php 
                        $n = 0;
                        
                        $DATA_BANK = $ERP->ERP_DATA('USERS_PREVILEGE_INFO', $GLOBAL_CID);
                        foreach ($DATA_BANK AS $ROW) {
                            $n = $n + 1; 
                            $ID = $ROW['id']; 
                            $NAME = $ROW['name'];  
                            $EMAIL = $ROW['email'];  
                            $USER_FLAG = $ROW['user_flag'];  
                            if ($USER_FLAG=="A"){
                                $USER_FLAG="Admin";
                            } else if ($USER_FLAG=="R") {
                                $USER_FLAG="Receptionist";
                            } else if ($USER_FLAG=="SA") {
                                $USER_FLAG="Super Admin";
                            }
                            
                        $PREVILEGE_CHECKED = NULL;
                        $DESIGNATION_CHECKED = NULL;
                        $DESIGNATION_ADD_CHECKED = NULL;
                        $DESIGNATION_EDIT_CHECKED = NULL;
                        $STAFFS_CHECKED = NULL;
                        $STAFFS_ADD_CHECKED = NULL;
                        $STAFFS_EDIT_CHECKED = NULL;
                        $STAFFS_DELETE_CHECKED = NULL;
                        $USERS_CHECKED = NULL;
                        $USERS_ADD_CHECKED = NULL;
                        $USERS_EDIT_CHECKED = NULL;
                        $USERS_DELETE_CHECKED = NULL;
                        $STUDENTS_CHECKED = NULL;
                        $STUDENTS_ADD_CHECKED = NULL;
                        $STUDENTS_EDIT_CHECKED = NULL;
                        $STUDENTS_APPLIED_CHECKED = NULL;
                        $APPOINTMENTS_CHECKED = NULL;
                        $APPOINTMENTS_ADD_CHECKED = NULL;
                        $APPOINTMENTS_EDIT_CHECKED = NULL;
                        $APPOINTMENTS_TRANSFER_CHECKED = NULL;
                        $APPOINTMENTS_MOVESPAM_CHECKED = NULL;
                        $APPOINTMENTS_NOTSPAM_CHECKED = NULL;
                        $APPOINTMENTS_DELETE_CHECKED = NULL;
                        $NEW_STUDENTS_CHECKED = NULL;
                        $NEW_STUDENTS_ADD_CHECKED = NULL;
                        $NEW_STUDENTS_EDIT_CHECKED = NULL;
                        
                        $DATABASE_BACKUP_CHECKED = NULL;
                        
                        $DATA_BANK_PREVILEGE = $ERP->ERP_DATA('PREVILEGES_INFO', $EMAIL, $GLOBAL_CID);
                        foreach ($DATA_BANK_PREVILEGE AS $PREVILEGE_ROW) {
                            
                            $PREVILEGE_FLAG = $PREVILEGE_ROW['previlege'];
                            if ($PREVILEGE_FLAG=='Y') {
                                $PREVILEGE_CHECKED = "checked";
                            }
                            
                            $DESIGNATION_FLAG = $PREVILEGE_ROW['designation'];  
                            if ($DESIGNATION_FLAG=='Y') {
                                $DESIGNATION_CHECKED = "checked";
                            }
                            
                            $DESIGNATION_ADD_FLAG = $PREVILEGE_ROW['designation_add'];  
                            if ($DESIGNATION_ADD_FLAG=='Y') {
                                $DESIGNATION_ADD_CHECKED = "checked";
                            }  
                            
                            $DESIGNATION_EDIT_FLAG = $PREVILEGE_ROW['designation_edit'];   
                            if ($DESIGNATION_EDIT_FLAG=='Y') {
                                $DESIGNATION_EDIT_CHECKED = "checked";
                            }  
                            
                            $STAFFS_FLAG = $PREVILEGE_ROW['staffs'];   
                            if ($STAFFS_FLAG=='Y') {
                                $STAFFS_CHECKED = "checked";
                            }
                            
                            $STAFFS_ADD_FLAG = $PREVILEGE_ROW['staffs_add'];  
                            if ($STAFFS_ADD_FLAG=='Y') {
                                $STAFFS_ADD_CHECKED = "checked";
                            }
                            
                            $STAFFS_EDIT_FLAG = $PREVILEGE_ROW['staffs_edit']; 
                            if ($STAFFS_EDIT_FLAG=='Y') {
                                $STAFFS_EDIT_CHECKED = "checked";
                            }   
                            
                            $STAFFS_DELETE_FLAG = $PREVILEGE_ROW['staffs_delete']; 
                            if ($STAFFS_DELETE_FLAG=='Y') {
                                $STAFFS_DELETE_CHECKED = "checked";
                            } 
                            
                            $USERS_FLAG = $PREVILEGE_ROW['users']; 
                            if ($USERS_FLAG=='Y') {
                                $USERS_CHECKED = "checked";
                            }
                            
                            $USERS_ADD_FLAG = $PREVILEGE_ROW['users_add']; 
                            if ($USERS_ADD_FLAG=='Y') {
                                $USERS_ADD_CHECKED = "checked";
                            } 
                            
                            $USERS_EDIT_FLAG = $PREVILEGE_ROW['users_edit']; 
                            if ($USERS_EDIT_FLAG=='Y') {
                                $USERS_EDIT_CHECKED = "checked";
                            }
                            
                            $USERS_DELETE_FLAG = $PREVILEGE_ROW['users_delete'];
                            if ($USERS_DELETE_FLAG=='Y') {
                                $USERS_DELETE_CHECKED = "checked";
                            } 
                            
                            $STUDENTS_FLAG = $PREVILEGE_ROW['students']; 
                            if ($STUDENTS_FLAG=='Y') {
                                $STUDENTS_CHECKED = "checked";
                            } 
                            
                            $STUDENTS_ADD_FLAG = $PREVILEGE_ROW['students_add'];
                            if ($STUDENTS_ADD_FLAG=='Y') {
                                $STUDENTS_ADD_CHECKED = "checked";
                            }  
                            
                            $STUDENTS_EDIT_FLAG = $PREVILEGE_ROW['students_edit'];  
                            if ($STUDENTS_EDIT_FLAG=='Y') {
                                $STUDENTS_EDIT_CHECKED = "checked";
                            } 
                            
                            $STUDENTS_APPLIED_FLAG = $PREVILEGE_ROW['students_applied']; 
                            if ($STUDENTS_APPLIED_FLAG=='Y') {
                                $STUDENTS_APPLIED_CHECKED = "checked";
                            }  
                            
                            $APPOINTMENTS_FLAG = $PREVILEGE_ROW['appointments'];
                            if ($APPOINTMENTS_FLAG=='Y') {
                                $APPOINTMENTS_CHECKED = "checked";
                            }   
                            
                            $APPOINTMENTS_ADD_FLAG = $PREVILEGE_ROW['appointments_add'];
                            if ($APPOINTMENTS_ADD_FLAG=='Y') {
                                $APPOINTMENTS_ADD_CHECKED = "checked";
                            }    
                            
                            $APPOINTMENTS_EDIT_FLAG = $PREVILEGE_ROW['appointments_edit'];
                            if ($APPOINTMENTS_EDIT_FLAG=='Y') {
                                $APPOINTMENTS_EDIT_CHECKED = "checked";
                            }    
                            
                            $APPOINTMENTS_TRANSFER_FLAG = $PREVILEGE_ROW['appointments_transfer'];
                            if ($APPOINTMENTS_TRANSFER_FLAG=='Y') {
                                $APPOINTMENTS_TRANSFER_CHECKED = "checked";
                            }   
                            
                            $APPOINTMENTS_MOVESPAM_FLAG = $PREVILEGE_ROW['appointments_movespam']; 
                            if ($APPOINTMENTS_MOVESPAM_FLAG=='Y') {
                                $APPOINTMENTS_MOVESPAM_CHECKED = "checked";
                            }   
                            
                            $APPOINTMENTS_NOTSPAM_FLAG = $PREVILEGE_ROW['appointments_notspam'];
                            if ($APPOINTMENTS_NOTSPAM_FLAG=='Y') {
                                $APPOINTMENTS_NOTSPAM_CHECKED = "checked";
                            }   
                            
                            $APPOINTMENTS_DELETE_FLAG = $PREVILEGE_ROW['appointments_delete'];
                            if ($APPOINTMENTS_DELETE_FLAG=='Y') {
                                $APPOINTMENTS_DELETE_CHECKED = "checked";
                            }  
                            
                            $NEW_STUDENTS_FLAG = $PREVILEGE_ROW['new_students']; 
                            if ($NEW_STUDENTS_FLAG=='Y') {
                                $NEW_STUDENTS_CHECKED = "checked";
                            } 
                            
                            $NEW_STUDENTS_ADD_FLAG = $PREVILEGE_ROW['new_students_add'];
                            if ($NEW_STUDENTS_ADD_FLAG=='Y') {
                                $NEW_STUDENTS_ADD_CHECKED = "checked";
                            }  
                            
                            $NEW_STUDENTS_EDIT_FLAG = $PREVILEGE_ROW['new_students_edit'];  
                            if ($NEW_STUDENTS_EDIT_FLAG=='Y') {
                                $NEW_STUDENTS_EDIT_CHECKED = "checked";
                            } 
                            
                            $DATABASE_BACKUP_FLAG = $PREVILEGE_ROW['database_backup'];  
                            if ($DATABASE_BACKUP_FLAG=='Y') {
                                $DATABASE_BACKUP_CHECKED = "checked";
                            } 
                            
                        }
                    ?>
                    
                  <tr>
                    <td><?php print $NAME; ?></td>
                    <td>
                        <?php print $USER_FLAG; ?>
	                    <input type="hidden" class="form-control" name="EMAIL<?php print $n; ?>" value="<?php print $EMAIL; ?>">
	                </td>
                    <td>
                        <table>
                            <tr>
                                <th>Previlege Management </th>
                                <td><input type="checkbox" name="previlege<?php print $n; ?>" <?php print $PREVILEGE_CHECKED; ?>/></td>
                            </tr>
                            
                            <tr>
                                <th>Database Backup </th>
                                <td><input type="checkbox" name="databasebackup<?php print $n; ?>" <?php print $DATABASE_BACKUP_CHECKED; ?>/></td>
                            </tr>
                            
                            <tr>
                                <th>Designation Management </th>
                                <td><input type="checkbox" name="designation<?php print $n; ?>" <?php print $DESIGNATION_CHECKED; ?> /></td>
                                <td>&nbsp;&nbsp;&nbsp;Add </td>
                                <td><input type="checkbox" name="designation_add<?php print $n; ?>" <?php print $DESIGNATION_ADD_CHECKED; ?> /></td>
                                <td>&nbsp;&nbsp;&nbsp;Edit </td>
                                <td><input type="checkbox" name="designation_edit<?php print $n; ?>" <?php print $DESIGNATION_EDIT_CHECKED; ?> /></td>
                            </tr>
                            
                            <tr>
                                <th>Staffs </th>
                                <td><input type="checkbox" name="staffs<?php print $n; ?>" <?php print $STAFFS_CHECKED; ?> /></td>
                                <td>&nbsp;&nbsp;&nbsp;Add </td>
                                <td><input type="checkbox" name="staffs_add<?php print $n; ?>" <?php print $STAFFS_ADD_CHECKED; ?> /></td>
                                <td>&nbsp;&nbsp;&nbsp;Edit </td>
                                <td><input type="checkbox" name="staffs_edit<?php print $n; ?>" <?php print $STAFFS_EDIT_CHECKED; ?> /></td>
                                <td>&nbsp;&nbsp;&nbsp;Delete </td>
                                <td><input type="checkbox" name="staffs_delete<?php print $n; ?>" <?php print $STAFFS_DELETE_CHECKED; ?> /></td>
                            </tr>
                            
                            <tr>
                                <th>Users </th>
                                <td><input type="checkbox" name="users<?php print $n; ?>" <?php print $USERS_CHECKED; ?> /></td>
                                <td>&nbsp;&nbsp;&nbsp;Add </td>
                                <td><input type="checkbox" name="users_add<?php print $n; ?>" <?php print $USERS_ADD_CHECKED; ?> /></td>
                                <td>&nbsp;&nbsp;&nbsp;Edit </td>
                                <td><input type="checkbox" name="users_edit<?php print $n; ?>" <?php print $USERS_EDIT_CHECKED; ?> /></td>
                                <td>&nbsp;&nbsp;&nbsp;Delete </td>
                                <td><input type="checkbox" name="users_delete<?php print $n; ?>" <?php print $USERS_DELETE_CHECKED; ?> /></td>
                            </tr>
                            
                            
                            <tr>
                                <th>Students </th>
                                <td><input type="checkbox" name="new_students<?php print $n; ?>" <?php print $NEW_STUDENTS_CHECKED; ?> /></td>
                                <td>&nbsp;&nbsp;&nbsp;Add </td>
                                <td><input type="checkbox" name="new_students_add<?php print $n; ?>" <?php print $NEW_STUDENTS_ADD_CHECKED; ?> /></td>
                                <td>&nbsp;&nbsp;&nbsp;Edit </td>
                                <td><input type="checkbox" name="new_students_edit<?php print $n; ?>" <?php print $NEW_STUDENTS_EDIT_CHECKED; ?> /></td>
                            </tr>
                            
                        </table>
                    </td>
                  </tr>
                  
                    <?php } ?>
                    
                                </tbody>
                            </table>
                            
                <div style="float:right;">
                  <button type="submit" class="btn btn-success">Submit Previlege</button>
                      <input type="hidden" name="o" value="previlege.management">
		              <input type="hidden" name="ROW_COUNT" value="<?php print $n; ?>">
                      <input type="hidden" name="submit" value="SUBMIT">
                      <input type="hidden" name="mid" value="new">
                      <input type="hidden" name="global_uid" value="<?php print $GLOBAL_UID; ?>">
                </div>
                    </form>
                    
                    </div>
                  </div>
            
            </div>