<?php
    $ID = NULL;
    
    $MID = (isset($_POST['mid']) ? $_POST['mid'] : null);
    $ID = (isset($_POST['id']) ? $_POST['id'] : null);
	$MY_PHOTO_PATH = "../assets/profile/default.png";
    
    $i = 0;
    $DATA_BANK = $ERP->ERP_DATA('USERS_INDIVIDUAL_INFO', $ID, $GLOBAL_CID);
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
        if ($USER_FLAG=="A") {
            $USER_FLAG_NAME = "Admin";
        } else if ($USER_FLAG=="R") {
            $USER_FLAG_NAME = "Receptionist";
        } else if ($USER_FLAG=="SA") {
            $USER_FLAG_NAME = "Super Admin";
        }
        $ACCOUNT_STATUS = $ROW['status_flag'];
        if ($ACCOUNT_STATUS=="Y") {
            $ACCOUNT_STATUS_NAME = "Active";
        } else if ($ACCOUNT_STATUS=="N") {
            $ACCOUNT_STATUS_NAME = "Disabled";
        }
        $CREATED_DATE = $ROW['cdate'];
                
		if (strlen($PHOTO)==0) { 
		    $MY_PHOTO_PATH = "../assets/profile/default.png";
		} else { 
		    $MY_PHOTO_PATH = "../assets/profile/" . $PHOTO;
		}	
		  
        $CBY = $ROW['cby'];
                    
    }
?>

    <div class="pagetitle">
      <h1>User Details</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
                <form action='index.php' method='post'>
                <input type="hidden" name='o' value='dashboard'>
                <button type="submit" class="nav-link collapsed" style="border:none; background:transparent;">Dashboard</button>
                </form>
            </li>
          <li class="breadcrumb-item active">User Details</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->


<?php if ($MID!="view") { ?>
                    
      <section class="section register min-vh-80 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-8 col-md-6 d-flex flex-column align-items-center justify-content-center">


          <div class="card mb-6">
            <div class="card-body">
              <h5 class="card-title"><center><?php if ($MID=="new") { print "Add New System user"; } else if ($MID=="edit") { print "Update System User"; } ?></center></h5>
                    
                    
              <!-- Multi Columns Form -->
              <form class="row g-3" method="post" action="index.php" enctype="multipart/form-data">
                  
                  
                <div class="col-md-12">
                  <label for="inputName5" class="form-label">Name</label>
                  <input type="text" class="form-control" name="name" value="<?php print $NAME; ?>" required>
                </div>
                
                <div class="col-md-6">
                  <label for="inputEmail5" class="form-label">Email</label>
                  <input type="email" class="form-control" name="email" value="<?php print $EMAIL; ?>" required>
                </div>
                
                <?php if ($MID=="new") { ?>
                <div class="col-md-6">
                  <label for="inputEmail5" class="form-label">Password</label>
                  <input type="password" class="form-control" name="password" required>
                </div>
                <?php } ?>
                
                <div class="col-md-6">
                  <label for="inputAddress5" class="form-label">Address</label>
                  <input type="text" class="form-control" value="<?php print $ADDRESS; ?>" name="address" required>
                </div>
                
                <div class="col-md-6">
                  <label for="inputPassword5" class="form-label">Phone Number</label>
                  <input type="phone" class="form-control" value="<?php print $MOBILE; ?>" name="phone" required>
                </div>
                
                
                
                <div class="col-md-6">
                  <label for="inputZip" class="form-label">Country</label>
                  <input type="text" class="form-control" value="<?php print $COUNTRY; ?>" name="country" required>
                </div>
                
                <div class="col-md-6">
                  <label for="inputCity" class="form-label">Designation</label>
                  <?php $TBID = "designation"; include("../libraries/selection_box.php"); ?>
                </div>
                
	    <script>
	    document.getElementById('DESIGNATION').value='<?php print $DESIGNATION; ?>';
	    </script>
                
                <div class="col-md-6">
                  <label for="inputCity" class="form-label">User Type</label>
                    <select class="form-select" name="usertype" aria-label="State">
                      <option value="A" <?php if ($USER_FLAG=="A") { print "selected"; } ?>>Admin</option>
                      <option value="R" <?php if ($USER_FLAG=="R") { print "selected"; } ?>>Receptionist</option>
                      <option value="SA" <?php if ($USER_FLAG=="SA") { print "selected"; } ?>>Super Admin</option>
                    </select>
                </div>
                
                <div class="col-md-6">
                  <label for="inputCity" class="form-label">Account Status</label>
                    <select class="form-select" name="accountstatus" aria-label="State">
                      <option value="Y" <?php if ($ACCOUNT_STATUS=="Y") { print "selected"; } ?>>Active</option>
                      <option value="N" <?php if ($ACCOUNT_STATUS=="N") { print "selected"; } ?>>Disabled</option>
                    </select>
                </div>
                
                <div class="col-md-6">
                  <label for="inputCity" class="form-label">Photo</label>
                  
                          <img src="<?php print $MY_PHOTO_PATH.'?rand='.rand(1,2000); ?>" alt="Profile" width="100">
			<input type="file" id="upload" name="photo" accept="image/png, image/gif, image/jpeg" />
                </div>
                
                
                <table>
                <tr>
                <th>
                    
                <div class="text-center">
                  <button type="submit" class="btn btn-success"><?php if ($MID=="new") { print "Add User"; } else if ($MID=="edit") { print "Update User"; } ?> </button>
                      <input type="hidden" name="o" value="users">
                      <input type="hidden" name="submit" value="SUBMIT">
                      <input type="hidden" name="id" value="<?php print $GLOBAL_UID; ?>">
                      <input type="hidden" name="userid" value="<?php print $ID; ?>">
                      <input type="hidden" name="mid" value="<?php print $MID; ?>">
                
              </form><!-- End Multi Columns Form -->
              </th>
              <th>
              <form method="post" action="index.php">
                <div class="text-center">
                  <button type="submit" class="btn btn-secondary">Cancel </button>
                      <input type="hidden" name="o" value="users">
                </div>
              </form>
              </div>
              
              </th>
              </tr>
              </table>
              
            </div>
          </div>

        </div>


            </div>
          </div>
        </div>
    </section>
<?php } ?>
                
                
                
<?php if ($MID=="view") { ?>

    <section class="section profile">
    <div class="container">
      <div class="row justify-content-center">

        <div class="col-xl-6">

          <div class="card mb-6">
            <div class="card-body pt-3">
              <div class="tab-content pt-2">

                <div class="tab-pane fade show active profile-overview" id="profile-overview">

                <div style="display: flex; justify-content: space-between; align-items: center;">
                  <h5 class="card-title">System User Details</h5>
                  <?php if ($USERS_EDIT_FLAG=='Y') { ?>
                  <?php if ($EMAIL != $_SESSION['EMAIL']) { ?>
                      <form method="post" action="index.php" style="margin-right: 10px;float:right;">
                      <button style="background-color: transparent; border: none;">
                            <i title="Edit Details" class="fa fa-edit" style="font-size:35px;color:blue"></i>
                      </button>
                        
                      <input type="hidden" name="o" value="user">
                      <input type="hidden" name="mid" value="edit">
                      <input type="hidden" name="id" value="<?php print $ID; ?>">
                      </form>
                  <?php } ?>
                  <?php } ?>
                </div>

                  <div class="row">
                    <div class="col-lg-6 col-md-6 label ">Full Name</div>
                    <div class="col-lg-6 col-md-6"><?php print $NAME; ?></div>
                  </div>


                  <div class="row">
                    <div class="col-lg-6 col-md-6 label">Email</div>
                    <div class="col-lg-6 col-md-6"><?php print $EMAIL; ?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-6 col-md-6 label">Country</div>
                    <div class="col-lg-6 col-md-6"><?php print $COUNTRY; ?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-6 col-md-6 label">Address</div>
                    <div class="col-lg-6 col-md-6"><?php print $ADDRESS; ?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-6 col-md-6 label">Phone</div>
                    <div class="col-lg-6 col-md-6"><?php print $MOBILE; ?></div>
                  </div>
                  
                  <div class="row">
                    <div class="col-lg-6 col-md-6 label">Designation</div>
                    <div class="col-lg-6 col-md-6"><?php print $DESIGNATION_NAME; ?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-6 col-md-6 label">Photo</div>
                    <div class="col-lg-6 col-md-6"><img src="<?php print $MY_PHOTO_PATH.'?rand='.rand(1,2000); ?>" alt="Profile" width="100"></div>
                  </div>
                  
                  <div class="row">
                    <div class="col-lg-6 col-md-6 label">Account Type</div>
                    <div class="col-lg-6 col-md-6"><?php print $USER_FLAG_NAME; ?></div>
                  </div>
                  
                  <div class="row">
                    <div class="col-lg-6 col-md-6 label">Account Status</div>
                    <div class="col-lg-6 col-md-6"><?php print $ACCOUNT_STATUS_NAME; ?></div>
                  </div>
                  
                  <div class="row">
                    <div class="col-lg-6 col-md-6 label">Account Created Date</div>
                    <div class="col-lg-6 col-md-6"><?php print $CREATED_DATE; ?></div>
                  </div>
                  
              <div class="text-center">
              <form method="post" action="index.php">
                <div class="text-center">
                  <button type="submit" class="btn btn-secondary">Back </button>
                      <input type="hidden" name="o" value="users">
                </div>
              </form>
              </div>

                </div>


              </div><!-- End Bordered Tabs -->

            </div>
          </div>

        </div>
      </div>
    </div>
    </section>
    
        <?php } ?>
                
