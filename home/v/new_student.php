<?php

    $NEW_STUDENT_ID = NULL;
    $APPLICATION_STATUS_FLAG = NULL;
    
    $MID = (isset($_POST['mid']) ? $_POST['mid'] : null);
    $NEW_STUDENT_ID = (isset($_POST['newstudentid']) ? $_POST['newstudentid'] : null);
    $APPLICATION_STATUS_FLAG = (isset($_POST['application_status_flag']) ? $_POST['application_status_flag'] : null);
    
    if ($NEW_STUDENT_ID > 0) {
        
    $i = 0;
    $DATA_BANK = $ERP->ERP_DATA('NEW_STUDENT_INFO', $NEW_STUDENT_ID, $GLOBAL_CID);
    foreach ($DATA_BANK AS $ROW) {
        $i = $i + 1; 
        $NEW_STUDENT_ID = $ROW['id']; 
        $NAME = $ROW['name'];   
        $GENDER = $ROW['gender'];
        if ($GENDER=="M") {
            $GENDER_NAME = "Male";
        } else if ($GENDER=="F"){
            $GENDER_NAME = "Female";
        }
        $DOB = $ROW['dob'];
        $PASSPORT_NO = $ROW['passport_no'];
        $EMAIL = $ROW['email']; 
        $ADDRESS = $ROW['address'];
        $PHONE = $ROW['phone'];
        
        $CAME_TO_KNOW = $ROW['came_to_know'];
        $INSTITUTION1 = $ROW['institution1'];
        $COMPLETED_YEAR1 = $ROW['completed_year1'];
        $MAJORS1 = $ROW['majors1'];
        $DIVISION_GPA1 = $ROW['division_gpa1'];
        
        $INSTITUTION2 = $ROW['institution2'];
        $COMPLETED_YEAR2 = $ROW['completed_year2'];
        $MAJORS2 = $ROW['majors2'];
        $DIVISION_GPA2 = $ROW['division_gpa2'];
        
        $INSTITUTION3 = $ROW['institution3'];
        $COMPLETED_YEAR3 = $ROW['completed_year3'];
        $MAJORS3 = $ROW['majors3'];
        $DIVISION_GPA3 = $ROW['division_gpa3'];
        
        $ENGLISH_TEST = $ROW['english_test'];  
        if ($ENGLISH_TEST=="I") {
            $ENGLISH_TEST_NAME = "IELTS";
        } else if ($ENGLISH_TEST=="T"){
            $ENGLISH_TEST_NAME = "TOEFL";
        } else if ($ENGLISH_TEST=="P"){
            $ENGLISH_TEST_NAME = "PTE";
        } else if ($ENGLISH_TEST=="NG"){
            $ENGLISH_TEST_NAME = "Test Not Given";
        }
        
        $OVERALL_SCORE = $ROW['overall_score'];
        $LISTENING = $ROW['listening'];
        $READING = $ROW['reading'];
        $WRITING = $ROW['writing'];
        $SPEAKING = $ROW['speaking'];
        
        $APPLIED_BEFORE = $ROW['applied_before'];
        if ($APPLIED_BEFORE=="Y"){
            $APPLIED_BEFORE_NAME = "Yes";
        } else if ($APPLIED_BEFORE=="N"){
            $APPLIED_BEFORE_NAME = "No";
        }
        $WHERE_WHEN = $ROW['where_when'];
        $WORK_EXPERIENCE = $ROW['work_experience'];
        
        $APPLIED_COUNTRY = $ROW['applied_country'];
     	$APPLIED_COUNTRY_NAME = $ERP->RETURN_FIELD('country','name', 'id', $APPLIED_COUNTRY);
        $UNIVERSITY_COLLEGE = $ROW['university_college'];
        $COURSE = $ROW['course'];
        $INTAKE = $ROW['intake'];
        $COUNCELLED_BY = $ROW['councelled_by'];
     	$COUNSELLER_NAME = $ERP->RETURN_FIELD('staffs','name', 'id', $COUNCELLED_BY);
        $RELATIONSHIP_STATUS = $ROW['relationship_status'];
        if ($RELATIONSHIP_STATUS=='S') {
            $RELATIONSHIP_STATUS_NAME = "Single";
        } else if ($RELATIONSHIP_STATUS=='M') {
            $RELATIONSHIP_STATUS_NAME = "Married";
        }
        $SPOUSE_NAME = $ROW['spouse_name'];
        $APPLICATION_STATUS_FLAG = $ROW['application_status'];
     	$APPLICATION_STATUS_FLAG_NAME = $ERP->RETURN_FIELD('application_status','name', 'id', $APPLICATION_STATUS_FLAG);
        $REMARKS = $ROW['remarks'];
        $CBY = $ROW['cby'];
        if ($CBY == "O") {
            $CBY_NAME = "Self through Online";
        } else {
     	    $CBY_NAME = $ERP->RETURN_FIELD('users','name', 'email', $CBY);
        }
        $CREATED_DATE = $ROW['created_date'];
                    
    }
    
    }
?>

    <div class="pagetitle">
      <h1><?php if ($MID=="new") { print "Add Student Details"; } else if ($MID=="edit") { print "Update Student Details"; } ?></h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
                <form action='index.php' method='post'>
                <input type="hidden" name='o' value='dashboard'>
                <button type="submit" class="nav-link collapsed" style="border:none; background:transparent;">Dashboard</button>
                </form>
            </li>
          <li class="breadcrumb-item active"><?php if ($MID=="new") { print "Add Student Details"; } else if ($MID=="edit") { print "Update Student Details"; } else if ($MID=="view") { print "View Student Details"; } ?></li>
        </ol>
      </nav>
    </div><!-- End Page Title -->


<?php if ($MID!="view") { ?>

                        
              <!-- Multi Columns Form -->
              <form class="row g-3" method="post" action="index.php">
                  
          <div class="card mb-6">
            <div class="card-body">
              <h5 class="card-title"><center>PERSONAL DETAILS</center></h5>
                <div class="row g-3">
                  
                <div class="col-md-4">
                  <label for="inputName5" class="form-label">Student Name <span style="color:red;">*</span></label>
                  <input type="text" class="form-control" name="name" value="<?php print $NAME; ?>" required>
                </div>
                
                <div class="col-md-4">
                  <label for="inputCity" class="form-label">Gender <span style="color:red;">*</span></label>
                    <select class="form-select" name="gender" required>
                      <option value="M" <?php if ($GENDER=="M") { print "selected"; } ?>>Male</option>
                      <option value="F" <?php if ($GENDER=="F") { print "selected"; } ?>>Female</option>
                    </select>
                </div>
                
                <div class="col-md-4">
                  <label for="inputEmail5" class="form-label">DOB <span style="color:red;">*</span></label>
                  <input type="date" class="form-control" value="<?php print $DOB; ?>" name="dob" required>
                </div>
                
                <div class="col-md-4">
                  <label for="inputEmail5" class="form-label">Passport Number</label>
                  <input type="text" class="form-control" value="<?php print $PASSPORT_NO; ?>" name="passport_no">
                </div>
                
                <div class="col-md-4">
                  <label for="inputAddress5" class="form-label">Address <span style="color:red;">*</span></label>
                  <input type="text" class="form-control" value="<?php print $ADDRESS; ?>" name="address" required>
                </div>
                
                <div class="col-md-4">
                  <label for="inputPassword5" class="form-label">Phone Number <span style="color:red;">*</span></label>
                  <input type="phone" class="form-control" value="<?php print $PHONE; ?>" name="phone" required>
                </div>
                
                <div class="col-md-4">
                  <label for="inputEmail5" class="form-label">Email </label>
                  <input type="text" class="form-control" value="<?php print $EMAIL; ?>" name="email">
                </div>
                
                
                <div class="col-md-4">
                  <label for="inputCity" class="form-label">Relation Status <span style="color:red;">*</span></label>
                    <select class="form-select" id="relationship_status" name="relationship_status" aria-label="State" onchange="spouseSelect();" required>
                      <option value="S" <?php if ($RELATIONSHIP_STATUS=="S") { print "selected"; } ?>>Single</option>
                      <option value="M" <?php if ($RELATIONSHIP_STATUS=="M") { print "selected"; } ?>>Married</option>
                    </select>
                </div>
                
	   <script type="text/javascript">
        function spouseSelect() {
        var selectBox = document.getElementById("relationship_status");
        var selectedValue = selectBox.options[selectBox.selectedIndex].value;
        if (selectedValue=="S"){
        $('#spouse_name').hide();
        }
        else {
        $('#spouse_name').show();
        }
        }
       </script>
                
                <div class="col-md-4" id="spouse_name" style="display:none;">
                  <label for="inputCity" class="form-label">Spouse Name</label>
                  <input type="text" class="form-control" value="<?php print $SPOUSE_NAME; ?>" name="spouse_name">
                </div>
                
                <div class="col-md-4">
                  <label for="inputCity" class="form-label">Application Status <span style="color:red;">*</span></label>
                  <?php $TBID = "application_status"; $REQUIRED="REQUIRED"; include("../libraries/application_status_selection_box.php"); ?>
                </div>
                
	    <script>
	    document.getElementById('APPLICATION_STATUS').value='<?php print $APPLICATION_STATUS_FLAG; ?>';
	    </script>
                
                
                <div class="col-md-4">
                  <label for="inputZip" class="form-label">Councelled By <span style="color:red;">*</span></label>
                  <?php $TBID = "staffs"; $REQUIRED="REQUIRED"; include("../libraries/counseller_selection_box.php"); ?>
                </div>
                
	    <script>
	    document.getElementById('STAFFS').value='<?php print $COUNCELLED_BY; ?>';
	    </script>
                
                <div class="col-md-4">
                  <label for="inputZip" class="form-label">Remarks</label>
                  <input type="text" class="form-control" value="<?php print $REMARKS; ?>" name="remarks">
                </div>
                
                </div>
                

            </div>
          </div>
          
          
          <div class="card mb-6">
            <div class="card-body">
              <h5 class="card-title"><center>HOW DO YOU CAME TO KNOW?</center></h5>
                <div class="row g-3">
                  
                <div class="col-md-12">
                  <label for="inputName5" class="form-label">How do you came to know?</label>
                  <p>
                  <input type="text" class="form-control" value="<?php print $CAME_TO_KNOW; ?>" name="came_to_know"></p>
                </div>
                
                </div>
                

            </div>
          </div>
          
          
                    <div class="card mb-6">
            <div class="card-body">
              <h5 class="card-title"><center>ACADEMIC QUALIFICATION</center></h5>
                <div class="row g-3">
                  
                <div class="col-md-3">
                  <label for="inputName5" class="form-label">Name of Institution <span style="color:red;">*</span></label>
                  <input type="text" class="form-control" value="<?php print $INSTITUTION1; ?>" name="institution1" required>
                </div>
                
                <div class="col-md-3">
                  <label for="inputName5" class="form-label">Completed Year <span style="color:red;">*</span></label>
                  <input type="text" class="form-control" value="<?php print $COMPLETED_YEAR1; ?>" name="completed_year1" required>
                </div>
                
                <div class="col-md-3">
                  <label for="inputName5" class="form-label">Majors</label>
                  <input type="text" class="form-control" value="<?php print $MAJORS1; ?>" name="majors1">
                </div>
                
                <div class="col-md-3">
                  <label for="inputName5" class="form-label">Division/GPA <span style="color:red;">*</span></label>
                  <input type="text" class="form-control" value="<?php print $DIVISION_GPA1; ?>" name="division_gpa1" required>
                </div>
                
                
                
                <div class="col-md-3" id="institution2">
                  <input type="text" class="form-control" value="<?php print $INSTITUTION2; ?>" name="institution2" placeholder="Optional">
                </div>
                
                <div class="col-md-3" id="completed_year2">
                  <input type="text" class="form-control" value="<?php print $COMPLETED_YEAR2; ?>" name="completed_year2" placeholder="Optional">
                </div>
                
                <div class="col-md-3" id="majors2">
                  <input type="text" class="form-control" value="<?php print $MAJORS2; ?>" name="majors2" placeholder="Optional">
                </div>
                
                <div class="col-md-3" id="division_gpa2">
                  <input type="text" class="form-control" value="<?php print $DIVISION_GPA2; ?>" name="division_gpa2" placeholder="Optional">
                </div>
                
                
                
                <div class="col-md-3" id="institution3">
                  <input type="text" class="form-control" value="<?php print $INSTITUTION3; ?>" name="institution3" placeholder="Optional">
                </div>
                
                <div class="col-md-3" id="completed_year3">
                  <input type="text" class="form-control" value="<?php print $COMPLETED_YEAR3; ?>" name="completed_year3" placeholder="Optional">
                </div>
                
                <div class="col-md-3" id="majors3">
                  <input type="text" class="form-control" value="<?php print $MAJORS3; ?>" name="majors3" placeholder="Optional">
                </div>
                
                <div class="col-md-3" id="division_gpa3">
                  <input type="text" class="form-control" value="<?php print $DIVISION_GPA3; ?>" name="division_gpa3" placeholder="Optional">
                </div>
                
                </div>
                

            </div>
          </div>
          
            <div class="card mb-6">
            <div class="card-body">
              <h5 class="card-title"><center>ENGLISH LANGUAGE PROFICIENCY</center></h5>
                <div class="row g-3">
                  
                <div class="col-md-6">
                  <label for="inputName5" class="form-label">IELTS/TOEFL/PTE <span style="color:red;">*</span></label>
                    <select class="form-select" id="english" aria-label="State" onchange="otherSelect();" name="english_test" required>
                      <option value="I" <?php if ($ENGLISH_TEST=="I") { print "selected"; } ?>>IELTS</option>
                      <option value="P" <?php if ($ENGLISH_TEST=="P") { print "selected"; } ?>>PTE</option>
                      <option value="T" <?php if ($ENGLISH_TEST=="T") { print "selected"; } ?>>TOEFL</option>
                      <option value="NG" <?php if ($ENGLISH_TEST=="NG") { print "selected"; } ?>>Test Not Given</option>
                    </select>
                </div>
        
        <script type="text/javascript">
        function otherSelect() {
        var selectBox = document.getElementById("english");
        var selectedValue = selectBox.options[selectBox.selectedIndex].value;
        if (selectedValue=="NG"){
        $('#overall_score').hide();
        $('#listening').hide();
        $('#reading').hide();
        $('#writing').hide();
        $('#speaking').hide();
        }
        else {
        $('#overall_score').show();
        $('#listening').show();
        $('#reading').show();
        $('#writing').show();
        $('#speaking').show();
        }
        }
       </script>

                
                <div class="col-md-6" id="overall_score">
                  <label for="inputName5" class="form-label">Overall Score</label>
                  <input type="text" class="form-control" value="<?php print $OVERALL_SCORE; ?>" name="overall_score">
                </div>
                
                <div class="col-md-3" id="listening">
                  <label for="inputName5" class="form-label">Listening</label>
                  <input type="text" class="form-control" value="<?php print $LISTENING; ?>" name="listening">
                </div>
                
                <div class="col-md-3" id="reading">
                  <label for="inputName5" class="form-label">Reading</label>
                  <input type="text" class="form-control" value="<?php print $READING; ?>" name="reading">
                </div>
                
                <div class="col-md-3" id="writing">
                  <label for="inputName5" class="form-label">Writing</label>
                  <input type="text" class="form-control" value="<?php print $WRITING; ?>" name="writing">
                </div>
                
                <div class="col-md-3" id="speaking">
                  <label for="inputName5" class="form-label">Speaking</label>
                  <input type="text" class="form-control" value="<?php print $SPEAKING; ?>" name="speaking">
                </div>
                
                
                </div>
                

            </div>
          </div>
           
                    <div class="card mb-6">
            <div class="card-body">
              <h5 class="card-title"><center>DESIRE COUNTRY OF STUDY AND COURSE</center></h5>
                <div class="row g-3">
                  
                <div class="col-md-6">
                  <label for="inputName5" class="form-label">Country <span style="color:red;">*</span></label>
                  <?php $TBID = "country"; $REQUIRED="REQUIRED"; include("../libraries/country_selection_box.php"); ?>
                </div>
                
	    <script>
	    document.getElementById('COUNTRY').value='<?php print $APPLIED_COUNTRY; ?>';
	    </script>
                
                <div class="col-md-6">
                  <label for="inputCity" class="form-label">University/College</label>
                  <input type="text" class="form-control" value="<?php print $UNIVERSITY_COLLEGE; ?>" name="university_college">
                </div>
                
                <div class="col-md-6">
                  <label for="inputName5" class="form-label">Course </label>
                  <input type="text" class="form-control" value="<?php print $COURSE; ?>" name="course">
                </div>
                
                <div class="col-md-6">
                  <label for="inputCity" class="form-label">Intake</label>
                  <input type="text" class="form-control" value="<?php print $INTAKE; ?>" name="intake">
                </div>
                
                <div class="col-md-6">
                  <label for="inputName5" class="form-label">Have you ever applied for student visa? <span style="color:red;">*</span></label>
                    <select class="form-select" id="applied_before" aria-label="State" onchange="appliedSelect();" name="applied_before" required>
                      <option value="Y" <?php if ($APPLIED_BEFORE=="Y") { print "selected"; } ?>>Yes</option>
                      <option value="N" <?php if ($APPLIED_BEFORE=="N") { print "selected"; } ?>>No</option>
                    </select>
                </div>
                
        <script type="text/javascript">
        function appliedSelect() {
        var selectBox = document.getElementById("applied_before");
        var selectedValue = selectBox.options[selectBox.selectedIndex].value;
        if (selectedValue=="N"){
        $('#where_when').hide();
        }
        else {
        $('#where_when').show();
        }
        }
       </script>
                
                <div class="col-md-6" id="where_when">
                  <label for="inputName5" class="form-label">Where/When</label>
                  <input type="text" class="form-control" value="<?php print $WHERE_WHEN; ?>" name="where_when">
                </div>
                
                </div>
                

            </div>
          </div>
          
          
          <div class="card mb-6">
            <div class="card-body">
              <h5 class="card-title"><center>WORK EXPERIENCE IF ANY</center></h5>
                <div class="row g-3">
                  
                <div class="col-md-12">
                  <label for="inputName5" class="form-label">Work Experience if any</label>
                  <input type="text" class="form-control" value="<?php print $WORK_EXPERIENCE; ?>" name="work_experience">
                </div>
                
                </div>
                

            </div>
            
                <table>
                <tr>
                <th>
                    
                <div class="text-center">
                  <button type="submit" class="btn btn-success"><?php if ($MID=="new") { print "Add New Student"; } else if ($MID=="edit") { print "Update Student"; } ?> </button>
                      <input type="hidden" name="o" value="applied_student">
                      <input type="hidden" name="submit" value="SUBMIT">
                      <input type="hidden" name="newstudentid" value="<?php print $NEW_STUDENT_ID; ?>">
                      <input type="hidden" name="global_uid" value="<?php print $GLOBAL_UID; ?>">
                      <input type="hidden" name="mid" value="<?php print $MID; ?>">
                </div>
                
              </form><!-- End Multi Columns Form -->
              </th>
              <th>
              
              <form method="post" action="index.php">
                <div class="text-center">
                  <button type="submit" class="btn btn-secondary">Cancel </button>
                      <input type="hidden" name="o" value="applied_student">
                </div>
              </form>
              </th>
              </tr>
              </table>
              
          </div>
          
                




<?php } ?>
                
                
                
<?php if ($MID=="view") { ?>

          <div class="card mb-6">
            <div class="card-body">
              <h5 class="card-title"><center>PERSONAL DETAILS <?php if ($NEW_STUDENTS_EDIT_FLAG=='Y') { ?>
                        <form method="post" action="index.php" style="margin-right: 10px;float:right;">
                        <button style="background-color: transparent; border: none;">
                            <i title="Edit Details" class="fa fa-edit" style="font-size:35px;color:blue"></i>
                        </button>
                        
                      <input type="hidden" name="o" value="newstudent">
                      <input type="hidden" name="mid" value="edit">
                      <input type="hidden" name="newstudentid" value="<?php print $NEW_STUDENT_ID; ?>">
                        </form>
                  <?php } ?></center>
                  </h5>
              
                  
                <div class="row g-3">
                  
                <div class="col-md-4">
                  <label for="inputName5" class="form-label"><b>Name </b></label>
                  <p><?php print $NAME; ?></p>
                </div>
                
                <div class="col-md-4">
                  <label for="inputCity" class="form-label"><b>Gender </b></label>
                  <p><?php print $GENDER_NAME; ?></p>
                </div>
                
                <div class="col-md-4">
                  <label for="inputZip" class="form-label"><b>Date of Birth </b></label>
                  <p><?php print $DOB; ?></p>
                </div>
                
                <div class="col-md-4">
                  <label for="inputEmail5" class="form-label"><b>Passport Number </b></label>
                  <p><?php print $PASSPORT_NO; ?></p>
                </div>
                
                <div class="col-md-4">
                  <label for="inputAddress5" class="form-label"><b>Address </b></label>
                  <p><?php print $ADDRESS; ?></p>
                </div>
                
                <div class="col-md-4">
                  <label for="inputPassword5" class="form-label"><b>Phone Number</b> </label>
                  <p><?php print $PHONE; ?></p>
                </div>
                
                <div class="col-md-4">
                  <label for="inputEmail5" class="form-label"><b>Email </b></label>
                  <p><?php print $EMAIL; ?></p>
                </div>
                
                <div class="col-md-4">
                  <label for="inputCity" class="form-label"><b>Marital Status</b> </label>
                  <p><?php print $RELATIONSHIP_STATUS_NAME; ?></p>
                </div>
                
                <?php if ($RELATIONSHIP_STATUS=="M") { ?>
                <div class="col-md-4">
                  <label for="inputCity" class="form-label"><b>Spouse Name</b> </label>
                  <p><?php print $SPOUSE_NAME; ?></p>
                </div>
                <?php } ?>
                
                </div>
                

            </div>
          </div>
          
          <?php if ($CAME_TO_KNOW != NULL) { ?>
          <div class="card mb-6">
            <div class="card-body">
              <h5 class="card-title"><center>HOW DO YOU CAME TO KNOW?</center></h5>
                <div class="row g-3">
                  
                <div class="col-md-12">
                  <label for="inputName5" class="form-label"><b>How do you came to know?</b></label>
                  <p><?php print $CAME_TO_KNOW; ?></p>
                </div>
                
                </div>
                

            </div>
          </div>
          <?php } ?>
          
          
          <div class="card mb-6">
            <div class="card-body">
              <h5 class="card-title"><center>PREVIOUS ACADEMIC QUALIFICATION</center></h5>
                <div class="row g-3">
                  
                <div class="col-md-3">
                  <label for="inputName5" class="form-label"><b>Name of Institution</b> </label>
                  <p><?php print $INSTITUTION1; ?></p>
                </div>
                
                <div class="col-md-3">
                  <label for="inputName5" class="form-label"><b>Completed Year</b> </label>
                  <p><?php print $COMPLETED_YEAR1; ?></p>
                </div>
                
                <div class="col-md-3">
                  <label for="inputName5" class="form-label"><b>Majors</b></label>
                  <p><?php print $MAJORS1; ?></p>
                </div>
                
                <div class="col-md-3">
                  <label for="inputName5" class="form-label"><b>Division/GPA</b> </label>
                  <p><?php print $DIVISION_GPA1; ?></p>
                </div>
                
                
                <?php if ($INSTITUTION2 != NULL) { ?>
                
                <div class="col-md-3" id="institution2">
                  <p><?php print $INSTITUTION2; ?></p>
                </div>
                
                <div class="col-md-3" id="completed_year2">
                  <p><?php print $COMPLETED_YEAR2; ?></p>
                </div>
                
                <div class="col-md-3" id="majors2">
                  <p><?php print $MAJORS2; ?></p>
                </div>
                
                <div class="col-md-3" id="division_gpa2">
                  <p><?php print $DIVISION_GPA2; ?></p>
                </div>
                <?php } ?>
                
                <?php if ($INSTITUTION3 != NULL) { ?>
                <div class="col-md-3" id="institution3">
                  <p><?php print $INSTITUTION3; ?></p>
                </div>
                
                <div class="col-md-3" id="completed_year3">
                  <p><?php print $COMPLETED_YEAR3; ?></p>
                </div>
                
                <div class="col-md-3" id="majors3">
                  <p><?php print $MAJORS3; ?></p>
                </div>
                
                <div class="col-md-3" id="division_gpa3">
                  <p><?php print $DIVISION_GPA3; ?></p>
                </div>
                <?php } ?>
                
                </div>
                

            </div>
          </div>
          
                    <div class="card mb-6">
            <div class="card-body">
              <h5 class="card-title"><center>ENGLISH LANGUAGE PROFICIENCY</center></h5>
                <div class="row g-3">
                  
                <div class="col-md-6">
                  <label for="inputName5" class="form-label"><b>IELTS/TOEFL/PTE</b> </label>
                  <p><?php print $ENGLISH_TEST_NAME; ?></p>
                </div>
        

                <?php if ($ENGLISH_TEST!="NG") { ?>
                <div class="col-md-6" id="overall_score">
                  <label for="inputName5" class="form-label"><b>Overall Score</b></label>
                  <p><?php print $OVERALL_SCORE; ?></p>
                </div>
                
                <div class="col-md-3" id="listening">
                  <label for="inputName5" class="form-label"><b>Listening</b></label>
                  <p><?php print $LISTENING; ?></p>
                </div>
                
                <div class="col-md-3" id="reading">
                  <label for="inputName5" class="form-label"><b>Reading</b></label>
                  <p><?php print $READING; ?></p>
                </div>
                
                <div class="col-md-3" id="writing">
                  <label for="inputName5" class="form-label"><b>Writing</b></label>
                  <p><?php print $WRITING; ?></p>
                </div>
                
                <div class="col-md-3" id="speaking">
                  <label for="inputName5" class="form-label"><b>Speaking</b></label>
                  <p><?php print $SPEAKING; ?></p>
                </div>
                <?php } ?>
                
                </div>
                

            </div>
          </div>
          
          <div class="card mb-6">
            <div class="card-body">
              <h5 class="card-title"><center>DESIRE COUNTRY OF STUDY AND COURSE</center></h5>
                <div class="row g-3">
                  
                <div class="col-md-6">
                  <label for="inputName5" class="form-label"><b>Country </b></label>
                  <p><?php print $APPLIED_COUNTRY_NAME; ?></p>
                </div>
                
                <div class="col-md-6">
                  <label for="inputName5" class="form-label"><b>University/College </b></label>
                  <p><?php print $UNIVERSITY_COLLEGE; ?></p>
                </div>
                
                <div class="col-md-6">
                  <label for="inputName5" class="form-label"><b>Intake </b></label>
                  <p><?php print $INTAKE; ?></p>
                </div>
                
                <div class="col-md-6">
                  <label for="inputName5" class="form-label"><b>Course </b></label>
                  <p><?php print $COURSE; ?></p>
                </div>
                
                <div class="col-md-6">
                  <label for="inputName5" class="form-label"><b>Visa Applied Before? </b></label>
                  <p><?php print $APPLIED_BEFORE_NAME; ?></p>
                </div>
                
                <?php if ($APPLIED_BEFORE=="Y"){ ?>
                <div class="col-md-6" id="where_when">
                  <label for="inputName5" class="form-label"><b>Where/When</b></label>
                  <p><?php print $WHERE_WHEN; ?></p>
                </div>
                <?php } ?>
                
                </div>
                

            </div>
          </div>
          
          <?php if ($WORK_EXPERIENCE != NULL) { ?>
          <div class="card mb-6">
            <div class="card-body">
              <h5 class="card-title"><center>WORK EXPERIENCE</center></h5>
                <div class="row g-3">
                  
                <div class="col-md-12">
                  <label for="inputName5" class="form-label"><b>Work Experience if any</b></label>
                  <p><?php print $WORK_EXPERIENCE; ?></p>
                </div>
                
                </div>
                

            </div>
          </div>
          <?php } ?>


          <div class="card mb-6">
            <div class="card-body">
              <h5 class="card-title"><center>Official Details</center></h5>
                <div class="row g-3">
                  
                <div class="col-md-4">
                  <label for="inputName5" class="form-label"><b>Councelled By</b></label>
                  <p><?php print $COUNSELLER_NAME; ?></p>
                </div>
                
                <div class="col-md-4">
                  <label for="inputName5" class="form-label"><b>
                      Application Status</b></label>
                  <p><?php print $APPLICATION_STATUS_FLAG_NAME; ?></p>
                </div>
                
                <div class="col-md-4">
                  <label for="inputName5" class="form-label"><b>Remarks</b></label>
                  <p><?php print $REMARKS; ?></p>
                </div>
                
                <div class="col-md-4">
                  <label for="inputName5" class="form-label"><b>Created By</b></label>
                  <p><?php print $CBY_NAME; ?></p>
                </div>
                
                <div class="col-md-4">
                  <label for="inputName5" class="form-label"><b>Created Date</b></label>
                  <p><?php print $CREATED_DATE; ?></p>
                </div>
                
                </div>
                

            </div>
          </div>




              <div class="text-center">
              <form method="post" action="index.php">
                <div class="text-center">
                  <button type="submit" class="btn btn-secondary">Back </button>
                      <input type="hidden" name="o" value="applied_student">
                </div>
              </form>
              </div>




<?php } ?>
