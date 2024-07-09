<?php 
    session_start();
    
    $SUBMIT = (isset($_POST['submit']) ? $_POST['submit'] : null);
    if ($SUBMIT=='SUBMIT')  { 
	    include("../post/user_post.php"); 
    } 
    
?>

    <div class="pagetitle">
      <h1>System Users</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
                <form action='index.php' method='post'>
                <input type="hidden" name='o' value='dashboard'>
                <button type="submit" class="nav-link collapsed" style="border:none; background:transparent;">Dashboard</button>
                </form>
            </li>
          <li class="breadcrumb-item active">System Users</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    
    
            <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h4 class="card-title" style="display: inline-block;">System Users <?php if ($USERS_ADD_FLAG=="Y") { ?>
                <form method="post" action="index.php" enctype="multipart/form-data" style="display: inline-block;"><button class="btn btn-primary"><span style="color:white;">Add User</span>
                            </button>
                      <input type="hidden" name="o" value="user">
                      <input type="hidden" name="mid" value="new">
                </form>
                      <?php } ?>
                </h4>
            </div>&nbsp;
            
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0"> 
               <thead>
                   <tr>
                    <th scope="col">S.N.</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Designation</th>
                    <th scope="col">User Type</th>
                    <th scope="col">Action</th>
                   </tr>
               </thead>
               <tbody>
                    <?php 
                        $i = 0;
                        $DATA_BANK = $ERP->ERP_DATA('USERS_INFO', $GLOBAL_CID);
                        foreach ($DATA_BANK AS $ROW) {
                            $i = $i + 1; 
                            $ID = $ROW['id']; 
                            $NAME = $ROW['name'];  
                            $EMAIL = $ROW['email']; 
                            $ADDRESS = $ROW['address'];
                            $MOBILE = $ROW['mobile'];
                            $COUNTRY = $ROW['country'];
                            $DESIGNATION = $ROW['designation'];
     	                    $DESIGNATION_NAME = $ERP->RETURN_FIELD('designation','edesc', 'id', $DESIGNATION);
                            $PHOTO = $ROW['photo'];
                            $USER_FLAG = $ROW['user_flag'];
                            if ($USER_FLAG=="A"){
                                $USER_FLAG="Admin";
                            } else if ($USER_FLAG=="R") {
                                $USER_FLAG="Receptionist";
                            } else if ($USER_FLAG=="SA") {
                                $USER_FLAG="Super Admin";
                            }
                            $ACCOUNT_STATUS = $ROW['status_flag'];
                            if ($ACCOUNT_STATUS =="Y") {
                                $ACCOUNT_STATUS="Active";
                            } else {
                                $ACCOUNT_STATUS="Disabled";
                            }
                            $CREATED_DATE = $ROW['cdate'];
                            
		                    if (strlen($PHOTO)==0) { 
			                    $MY_PHOTO_PATH = "../assets/profile/default.png";
		                    } else { 
			                    $MY_PHOTO_PATH = "../assets/profile/" . $PHOTO;
		                    }	
		  
                            $CBY = $ROW['cby'];
                    ?>
                    
                  <tr>
                    <th scope="row"><?php print $i; ?></th>
                    <td><?php print $NAME; ?></td>
                    <td><?php print $EMAIL; ?></td>
                    <td><?php print $DESIGNATION_NAME; ?></td>
                    <td><?php print $USER_FLAG; ?></td>
                    <td>
                        <div style="display: flex; align-items: center;">
                        <form method="post" action="index.php" style="margin-right: 10px;">
                        <button style="background-color: transparent; border: none;">
                            <i title="View Details" class="fa fa-info-circle" style="font-size:35px;color:#24a0ed"></i>
                        </button>
                        
                      <input type="hidden" name="o" value="user">
                      <input type="hidden" name="mid" value="view">
                      <input type="hidden" name="id" value="<?php print $ID; ?>">
                        </form>
                        &nbsp;
                        
                        <?php if ($EMAIL != $_SESSION['EMAIL']) { ?>
                        <?php if ($USERS_EDIT_FLAG=='Y') { ?>
                        <form method="post" action="index.php" style="margin-right: 10px;">
                        <button style="background-color: transparent; border: none;">
                            <i title="Edit Details" class="fa fa-edit" style="font-size:35px;color:blue"></i>
                        </button>
                        
                      <input type="hidden" name="o" value="user">
                      <input type="hidden" name="mid" value="edit">
                      <input type="hidden" name="id" value="<?php print $ID; ?>">
                        </form>
                        <?php } ?>
                        &nbsp;
                        
                        <?php if ($USERS_DELETE_FLAG=='Y') { ?>
                        <button data-bs-toggle="modal" data-bs-target="#userdeletemodal<?php print $ID; ?>" style="background-color: transparent; border: none;">
                            <i title="Delete" class="fa fa-trash" style="font-size:35px;color:red"></i>
                        </button>
                        <?php } ?>
                        <?php } ?>
                        
                    </div>
                    </td>
                    
                    
                <!--Users Delete Modal-->
              <div class="modal fade" id="userdeletemodal<?php print $ID; ?>" tabindex="-1">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Delete User</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        
                        <b>Are you sure you want to Delete this User: <?php print $NAME; ?> ?</b>
                  
                    </div>
                    
                    <div class="modal-footer">
                        
                    <form method="post" action="index.php" enctype="multipart/form-data">
                  <button type="submit" class="btn btn-danger">Delete </button>
                  
                      <input type="hidden" name="o" value="<?php print $o; ?>">
                      <input type="hidden" name="submit" value="SUBMIT">
                      <input type="hidden" name="mid" value="delete">
                      <input type="hidden" name="userid" value="<?php print $ID; ?>">
                      </form>
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                  </div>
                </div>
              </div><!-- End User Delete Modal-->
              
              
              
                  </tr>
                    <?php } ?>
                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                  </div>

  
  
