
<?php 
session_start();

    $SUBMIT = (isset($_POST['submit']) ? $_POST['submit'] : null);
    if ($SUBMIT=='SUBMIT')  { 
	    include("../post/edit_profile_post.php"); 
    } 
    
    if ($SUBMIT=='CHANGE_PASSWORD')  { 
	    include("../post/change_password_post.php"); 
    } 

    $DATA_BANK = $ERP->ERP_DATA('PROFILE_INFO', $GLOBAL_UID, $GLOBAL_CID);
      foreach ($DATA_BANK AS $ROW) {

        $EMAIL = $ROW['email'];  
        $EDESC = $ROW['name'];  
        $ADDRESS = $ROW['address'];
        $PHONE = $ROW['mobile'];
        $COUNTRY = $ROW['country'];
        $DESIGNATION = $ROW['designation'];
     	$DESIGNATION_NAME = $ERP->RETURN_FIELD('designation','edesc', 'id', $DESIGNATION);
        $PHOTO = $ROW['photo'];

		  if (strlen($PHOTO)==0) { 
			$MY_PHOTO_PATH = "../assets/profile/default.png";
		  } else { 
			$MY_PHOTO_PATH = "../assets/profile/" . $PHOTO;
		  }	
		  
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
		  
    }

?>

    <div class="pagetitle">
      <h1>Profile</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
                <form action='index.php' method='post'>
                <input type="hidden" name='o' value='dashboard'>
                <button type="submit" class="nav-link collapsed" style="border:none; background:transparent;">Dashboard</button>
                </form>
            </li>
          <li class="breadcrumb-item active">Profile</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section profile">
      <div class="row">
        <div class="col-xl-4">

          <div class="card">
            <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

              <img src="<?php print $MY_PHOTO_PATH.'?rand='.rand(1,2000); ?>" alt="Profile" class="rounded-circle">
              <h2><?php print $EDESC; ?></h2>
              <h3><?php print $DESIGNATION_NAME; ?></h3>
            </div>
          </div>

        </div>

        <div class="col-xl-8">

          <div class="card">
            <div class="card-body pt-3">
              <!-- Bordered Tabs -->
              <ul class="nav nav-tabs nav-tabs-bordered">

                <li class="nav-item">
                  <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Overview</button>
                </li>

                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit Profile</button>
                </li>


                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password">Change Password</button>
                </li>

              </ul>
              <div class="tab-content pt-2">

                <div class="tab-pane fade show active profile-overview" id="profile-overview">

                  <h5 class="card-title">Profile Details</h5>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label ">Full Name</div>
                    <div class="col-lg-9 col-md-8"><?php print $EDESC; ?></div>
                  </div>


                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Designation</div>
                    <div class="col-lg-9 col-md-8"><?php print $DESIGNATION_NAME; ?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Country</div>
                    <div class="col-lg-9 col-md-8"><?php print $COUNTRY; ?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Address</div>
                    <div class="col-lg-9 col-md-8"><?php print $ADDRESS; ?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Phone</div>
                    <div class="col-lg-9 col-md-8"><?php print $PHONE; ?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Email</div>
                    <div class="col-lg-9 col-md-8"><?php print $EMAIL; ?></div>
                  </div>
                  
                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Account Type</div>
                    <div class="col-lg-9 col-md-8"><?php print $USER_FLAG; ?></div>
                  </div>
                  
                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Account Status</div>
                    <div class="col-lg-9 col-md-8"><?php print $ACCOUNT_STATUS; ?></div>
                  </div>
                  
                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Account Created Date</div>
                    <div class="col-lg-9 col-md-8"><?php print $CREATED_DATE; ?></div>
                  </div>

                </div>

                <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

                  <!-- Profile Edit Form -->
                  <form method="post" action="index.php" enctype="multipart/form-data">
                    <div class="row mb-3">
                      <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Profile Image</label>
                      
                      <div class="col-md-8 col-lg-9">
                          <img src="<?php print $MY_PHOTO_PATH.'?rand='.rand(1,2000); ?>" alt="Profile">
                        <div class="pt-2">
                            
			            <input type="file" id="upload" name="photo" accept="image/png, image/gif, image/jpeg" />
			
                          
                        </div>
                      </div>
                      
			
                    </div>
                    

                    <div class="row mb-3">
                      <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Full Name</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="fullname" type="text" class="form-control" id="fullName" value="<?php print $EDESC; ?>">
                      </div>
                    </div>



                    <div class="row mb-3">
                      <label for="Job" class="col-md-4 col-lg-3 col-form-label">Designation</label>
                      <div class="col-md-8 col-lg-9">
                            <?php $TBID = "designation"; $DISABLED = "DISABLED"; include("../libraries/selection_box.php"); ?>
                      </div>
                    </div>
                    
	    <script>
	    document.getElementById('DESIGNATION').value='<?php print $DESIGNATION; ?>';
	    </script>

                    <div class="row mb-3">
                      <label for="Country" class="col-md-4 col-lg-3 col-form-label">Country</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="country" type="text" class="form-control" id="Country" value="<?php print $COUNTRY; ?>">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Address" class="col-md-4 col-lg-3 col-form-label">Address</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="address" type="text" class="form-control" id="Address" value="<?php print $ADDRESS; ?>">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Phone" class="col-md-4 col-lg-3 col-form-label">Phone</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="phone" type="text" class="form-control" id="Phone" value="<?php print $PHONE; ?>">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Email" class="col-md-4 col-lg-3 col-form-label">Email</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="email" type="email" class="form-control" id="Email" value="<?php print $EMAIL; ?>">
                      </div>
                    </div>


                    <div class="text-center">
                      <button type="submit" class="btn btn-primary">Save Changes</button>
                      <input type="hidden" name="o" value="<?php print $o; ?>">
                      <input type="hidden" name="submit" value="SUBMIT">
                      <input type="hidden" name="id" value="<?php print $GLOBAL_UID; ?>">
                    </div>
                  </form><!-- End Profile Edit Form -->

                </div>


                <div class="tab-pane fade pt-3" id="profile-change-password">
                  <!-- Change Password Form -->
                  <form method="post" action="index.php">

                    <div class="row mb-3">
                      <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Current Password</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="password" type="password" class="form-control" id="currentpassword" required>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">New Password</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="newpassword" type="password" class="form-control" id="newpassword" required>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="renewPassword" class="col-md-4 col-lg-3 col-form-label">Re-enter New Password</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="renewpassword" type="password" class="form-control" id="renewpassword" required>
                      </div>
                    </div>

                    <div class="text-center">
                      <button type="submit" class="btn btn-primary">Change Password</button>
                      <input type="hidden" name="o" value="<?php print $o; ?>">
                      <input type="hidden" name="submit" value="CHANGE_PASSWORD">
                      <input type="hidden" name="id" value="<?php print $GLOBAL_UID; ?>">
                    </div>
                  </form><!-- End Change Password Form -->

                </div>

              </div><!-- End Bordered Tabs -->

            </div>
          </div>

        </div>
      </div>
    </section>
    