<?php 
    session_start();
    //$o = NULL;
    
    $o = (isset($_POST['o']) ? $_POST['o'] : null);
    $SUBMIT = (isset($_POST['submit']) ? $_POST['submit'] : null);
    if ($SUBMIT=='SUBMIT')  { 
	    include("../post/new_student_post.php"); 
    } 
    
?>

<div class="pagetitle">
      <h1>
                <?php if ($o=="applied_student") { print "Applied"; } else if ($o=="counselling") { print "Counselling"; } else if ($o=="offerprocessing") { print "Offer Processing"; } else if ($o=="gteprocessing") { print "GTE Processing"; } else if ($o=="coeprocessing") { print "COE Processing"; } else if ($o=="biometricmedical") { print "Biometric/Medical"; } else if ($o=="visaprocessing") { print "Visa Processing"; } else if ($o=="visagranted") { print "Visa Granted"; } else if ($o=="visarefused") { print "Visa Refused"; } ?> Students </h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
                <form action='index.php' method='post'>
                <input type="hidden" name='o' value='dashboard'>
                <button type="submit" class="nav-link collapsed" style="border:none; background:transparent;">Dashboard</button>
                </form>
            </li>
          <li class="breadcrumb-item active">
                <?php if ($o=="applied_student") { print "Applied"; } else if ($o=="counselling") { print "Counselling"; } else if ($o=="offerprocessing") { print "Offer Processing"; } else if ($o=="gteprocessing") { print "GTE Processing"; } else if ($o=="coeprocessing") { print "COE Processing"; } else if ($o=="biometricmedical") { print "Biometric/Medical"; } else if ($o=="visaprocessing") { print "Visa Processing"; } else if ($o=="visagranted") { print "Visa Granted"; } else if ($o=="visarefused") { print "Visa Refused"; } ?>
                Students</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

            <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h4 class="card-title" style="display: inline-block;">
                <?php if ($o=="applied_student") { print "Applied"; } else if ($o=="counselling") { print "Counselling"; } else if ($o=="offerprocessing") { print "Offer Processing"; } else if ($o=="gteprocessing") { print "GTE Processing"; } else if ($o=="coeprocessing") { print "COE Processing"; } else if ($o=="biometricmedical") { print "Biometric/Medical"; } else if ($o=="visaprocessing") { print "Visa Processing"; } else if ($o=="visagranted") { print "Visa Granted"; } else if ($o=="visarefused") { print "Visa Refused"; } ?> Students<?php if ($NEW_STUDENTS_ADD_FLAG=='Y') { ?>
                <form method="post" action="index.php" enctype="multipart/form-data" style="display: inline-block;"><button class="btn btn-primary"><span style="color:white;">Add New Student</span>
                            </button>
                      <input type="hidden" name="o" value="newstudent">
                      <input type="hidden" name="mid" value="new">
                      <input type="hidden" name="application_status_flag" value="2">
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
                    <th scope="col">Student Name</th>
                    <th scope="col">D.O.B</th>
                    <th scope="col">Passport No.</th>
                    <th scope="col">Country</th>
                    <th scope="col">Uni/College</th>
                    <th scope="col">Course</th>
                    <th scope="col">Intake</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                      
                    <?php 
                        $i = 0;
                        
                        if ($o=="applied_student") {
                        $DATA_BANK = $ERP->ERP_DATA('NEW_STUDENTS_INFO', $GLOBAL_CID);
                        }
                        
                        if ($o=="counselling") {
                        $DATA_BANK = $ERP->ERP_DATA('COUNSELLING_INFO', $GLOBAL_CID);
                        }
                        
                        if ($o=="offerprocessing") {
                        $DATA_BANK = $ERP->ERP_DATA('OFFERPROCESSING_INFO', $GLOBAL_CID);
                        }
                        
                        if ($o=="gteprocessing") {
                        $DATA_BANK = $ERP->ERP_DATA('GTEPROCESSING_INFO', $GLOBAL_CID);
                        }
                        
                        if ($o=="coeprocessing") {
                        $DATA_BANK = $ERP->ERP_DATA('COEPROCESSING_INFO', $GLOBAL_CID);
                        }
                        
                        if ($o=="biometricmedical") {
                        $DATA_BANK = $ERP->ERP_DATA('BIOMETRICMEDICAL_INFO', $GLOBAL_CID);
                        }
                        
                        if ($o=="visaprocessing") {
                        $DATA_BANK = $ERP->ERP_DATA('VISAPROCESSING_INFO', $GLOBAL_CID);
                        }
                        
                        if ($o=="visagranted") {
                        $DATA_BANK = $ERP->ERP_DATA('VISAGRANTED_INFO', $GLOBAL_CID);
                        }
                        
                        if ($o=="visarefused") {
                        $DATA_BANK = $ERP->ERP_DATA('VISAREFUSED_INFO', $GLOBAL_CID);
                        }
                        
                        foreach ($DATA_BANK AS $ROW) {
                            $i = $i + 1; 
                            $NEW_STUDENT_ID = $ROW['id']; 
                            $NAME = $ROW['name'];  
                            $DOB = $ROW['dob']; 
                            $PASSPORT_NO = $ROW['passport_no'];
                            $UNIVERSITY_COLLEGE = $ROW['university_college'];
                            $COURSE = $ROW['course']; 
                            $INTAKE = $ROW['intake']; 
                            $APPLICATION_STATUS = $ROW['application_status'];
     	                    $APPLICATION_STATUS_NAME = $ERP->RETURN_FIELD('application_status','name', 'id', $APPLICATION_STATUS); 
                            $APPLIED_COUNTRY = $ROW['applied_country'];
     	                    $APPLIED_COUNTRY_NAME = $ERP->RETURN_FIELD('country','name', 'id', $APPLIED_COUNTRY);
                            $COUNCELLED_BY = $ROW['guidance_under'];
     	                    $COUNCELLED_BY_NAME = $ERP->RETURN_FIELD('staffs','name', 'id', $COUNCELLED_BY);
                    ?>
                    
                  <tr>
                    <th scope="row"><?php print $i; ?></th>
                    <td><?php print $NAME; ?></td>
                    <td><?php print $DOB; ?></td>
                    <td><?php print $PASSPORT_NO; ?></td>
                    <td><?php print $APPLIED_COUNTRY_NAME; ?></td>
                    <td><?php print $UNIVERSITY_COLLEGE; ?></td>
                    <td><?php print $COURSE; ?></td>
                    <td><?php print $INTAKE; ?></td>
                    <td><?php print $APPLICATION_STATUS_NAME; ?></td>
                    <td>
                        
                        <div style="display: flex; align-items: center;">
                        <form method="post" action="index.php" style="margin-right: 10px;">
                        <button style="background-color: transparent; border: none;">
                            <i title="View Details" class="fa fa-info-circle" style="font-size:35px;color:#24a0ed"></i>
                        </button>
                        
                      <input type="hidden" name="o" value="newstudent">
                      <input type="hidden" name="mid" value="view">
                      <input type="hidden" name="newstudentid" value="<?php print $NEW_STUDENT_ID; ?>">
                        </form>
                        &nbsp;
                        
                        <?php if ($NEW_STUDENTS_EDIT_FLAG=='Y') { ?>
                        <form method="post" action="index.php" style="margin-right: 10px;">
                        <button style="background-color: transparent; border: none;">
                            <i title="Edit Details" class="fa fa-edit" style="font-size:35px;color:blue"></i>
                        </button>
                        
                      <input type="hidden" name="o" value="newstudent">
                      <input type="hidden" name="mid" value="edit">
                      <input type="hidden" name="newstudentid" value="<?php print $NEW_STUDENT_ID; ?>">
                        </form>
                        &nbsp;
                        <?php } ?>
                        
                    </div>
                    </td>
                    
                  </tr>
                    <?php } ?>
                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                  </div>
