<?php
    $ID = NULL;
    
    $MID = (isset($_POST['mid']) ? $_POST['mid'] : null);
    $ID = (isset($_POST['id']) ? $_POST['id'] : null);
    $MY_PHOTO_PATH = "../assets/staffs/default.png";
    
    $i = 0;
    $DATA_BANK = $ERP->ERP_DATA('STAFFS_INDIVIDUAL_INFO', $ID, $GLOBAL_CID);
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
        $STATUS = $ROW['status_flag'];
        if ($STATUS=='W') {
            $WORKING_STATUS_NAME = "Working";
        } else if ($STATUS=='L') {
            $WORKING_STATUS_NAME = "Left";
        }
        $CREATED_DATE = $ROW['cdate'];
                
		if (strlen($PHOTO)==0) { 
		    $MY_PHOTO_PATH = "../assets/staffs/default.png";
		} else { 
		    $MY_PHOTO_PATH = "../assets/staffs/" . $PHOTO;
		}	
		  
        $CBY = $ROW['cby'];
                    
    }
?>

    <div class="pagetitle">
      <h1>Staff Details</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
                <form action='index.php' method='post'>
                <input type="hidden" name='o' value='dashboard'>
                <button type="submit" class="nav-link collapsed" style="border:none; background:transparent;">Dashboard</button>
                </form>
            </li>
          <li class="breadcrumb-item active">Staff Details</li>
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
                <div style="display: flex; justify-content: space-between; align-items: center;">
                    <h5 class="card-title"><center><?php if ($MID=="new") { print "Add New Staff"; } else if ($MID=="edit") { print "Update Staff"; } ?></center></h5>

                    </div>
                    
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
                  <label for="inputCity" class="form-label">Working Status</label>
                    <select class="form-select" name="status" aria-label="State" >
                      <option value="W" <?php if ($STATUS=="W") { print "selected"; } ?>>Working</option>
                      <option value="L" <?php if ($STATUS=="L") { print "selected"; } ?>>Left</option>
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
                  <button type="submit" class="btn btn-success"><?php if ($MID=="new") { print "Add Staff"; } else if ($MID=="edit") { print "Update Staff"; } ?> </button>
                      <input type="hidden" name="o" value="staffs">
                      <input type="hidden" name="submit" value="SUBMIT">
                      <input type="hidden" name="id" value="<?php print $GLOBAL_UID; ?>">
                      <input type="hidden" name="userid" value="<?php print $ID; ?>">
                      <input type="hidden" name="mid" value="<?php print $MID; ?>">
                </div>
                
              </form><!-- End Multi Columns Form -->
              </th>
              <th>
              <form method="post" action="index.php">
                <div class="text-center">
                  <button type="submit" class="btn btn-secondary">Cancel </button>
                      <input type="hidden" name="o" value="staffs">
                </div>
              </form>
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
                  <h5 class="card-title">Staff Details</h5>
                  <?php if ($STAFFS_EDIT_FLAG=='Y') { ?>
                        <form method="post" action="index.php" style="margin-right: 10px;float:right;">
                        <button style="background-color: transparent; border: none;">
                            <i title="Edit Details" class="fa fa-edit" style="font-size:35px;color:blue"></i>
                        </button>
                        
                      <input type="hidden" name="o" value="staff">
                      <input type="hidden" name="mid" value="edit">
                      <input type="hidden" name="id" value="<?php print $ID; ?>">
                        </form>
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
                    <div class="col-lg-6 col-md-6 label">Working Status</div>
                    <div class="col-lg-6 col-md-6"><?php print $WORKING_STATUS_NAME; ?></div>
                  </div>
                  
                  <div class="row">
                    <div class="col-lg-6 col-md-6 label">Photo</div>
                    <div class="col-lg-6 col-md-6"><img src="<?php print $MY_PHOTO_PATH.'?rand='.rand(1,2000); ?>" alt="Profile" width="100"></div>
                  </div>
                  
                  <div class="row">
                    <div class="col-lg-6 col-md-6 label">Created By</div>
                    <div class="col-lg-6 col-md-6"><?php print $CBY; ?></div>
                  </div>
                
                  <div class="row">
                    <div class="col-lg-6 col-md-6 label">Created Date</div>
                    <div class="col-lg-6 col-md-6"><?php print $CREATED_DATE; ?></div>
                  </div>
                  
              <div class="text-center">
              <form method="post" action="index.php">
                <div class="text-center">
                  <button type="submit" class="btn btn-secondary">Back </button>
                      <input type="hidden" name="o" value="staffs">
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
