<?php

   include("class/erp_function.php");
   $ERP = new erp_function();
   
  $INPUT = $_SERVER['REQUEST_METHOD'];

  if ($INPUT=='POST') { 

     date_default_timezone_set('Asia/Kathmandu');
     
	$NAME = (isset($_POST['name']) ? $_POST['name'] : null);
	$DOB = (isset($_POST['dob']) ? $_POST['dob'] : null);
	$EMAIL = (isset($_POST['email']) ? $_POST['email'] : null);
	$PHONE = (isset($_POST['phone']) ? $_POST['phone'] : null);
	$ADDRESS = (isset($_POST['address']) ? $_POST['address'] : null);
	$APPLIED_COUNTRY = (isset($_POST['COUNTRY']) ? $_POST['COUNTRY'] : null);
	$COURSE = (isset($_POST['course']) ? $_POST['course'] : null);
	$RELATIONSHIP_STATUS = (isset($_POST['relationship_status']) ? $_POST['relationship_status'] : null);
	
	$GENDER = (isset($_POST['gender']) ? $_POST['gender'] : null);
	$CAME_TO_KNOW = (isset($_POST['came_to_know']) ? $_POST['came_to_know'] : null);
	$INSTITUTION1 = (isset($_POST['institution1']) ? $_POST['institution1'] : null);
	$COMPLETED_YEAR1 = (isset($_POST['completed_year1']) ? $_POST['completed_year1'] : null);
	$MAJORS1 = (isset($_POST['majors1']) ? $_POST['majors1'] : null);
	$DIVISION_GPA1 = (isset($_POST['division_gpa1']) ? $_POST['division_gpa1'] : null);
	
	$INSTITUTION2 = (isset($_POST['institution2']) ? $_POST['institution2'] : null);
	$COMPLETED_YEAR2 = (isset($_POST['completed_year2']) ? $_POST['completed_year2'] : null);
	$MAJORS2 = (isset($_POST['majors2']) ? $_POST['majors2'] : null);
	$DIVISION_GPA2 = (isset($_POST['division_gpa2']) ? $_POST['division_gpa2'] : null);
	
	$INSTITUTION3 = (isset($_POST['institution3']) ? $_POST['institution3'] : null);
	$COMPLETED_YEAR3 = (isset($_POST['completed_year3']) ? $_POST['completed_year3'] : null);
	$MAJORS3 = (isset($_POST['majors3']) ? $_POST['majors3'] : null);
	$DIVISION_GPA3 = (isset($_POST['division_gpa3']) ? $_POST['division_gpa3'] : null);
	
	$ENGLISH_TEST = (isset($_POST['english_test']) ? $_POST['english_test'] : null);
	$OVERALL_SCORE = (isset($_POST['overall_score']) ? $_POST['overall_score'] : null);
	$LISTENING = (isset($_POST['listening']) ? $_POST['listening'] : null);
	$READING = (isset($_POST['reading']) ? $_POST['reading'] : null);
	$WRITING = (isset($_POST['writing']) ? $_POST['writing'] : null);
	$SPEAKING = (isset($_POST['speaking']) ? $_POST['speaking'] : null);
	
	$APPLIED_BEFORE = (isset($_POST['applied_before']) ? $_POST['applied_before'] : null);
	$WHERE_WHEN = (isset($_POST['where_when']) ? $_POST['where_when'] : null);
	
	$WORK_EXPERIENCE = (isset($_POST['work_experience']) ? $_POST['work_experience'] : null);
	
	$CBY = "O";
	$APPLICATION_STATUS = '1';
	$CCODE = "001";
	$CREATED_DATE = date('Y-m-d H:i:s');
	
	
	       $INSERT = "INSERT INTO new_students(name, dob, email, phone, address, applied_country, course, relationship_status, application_status, gender, came_to_know, institution1, completed_year1, majors1, division_gpa1, institution2, completed_year2, majors2, division_gpa2, institution3, completed_year3, majors3, division_gpa3, english_test, overall_score, listening, reading, writing, speaking, applied_before, where_when, work_experience, ccode, cby, created_date) VALUES('$NAME', '$DOB', '$EMAIL', '$PHONE', '$ADDRESS', '$APPLIED_COUNTRY', '$COURSE', '$RELATIONSHIP_STATUS', '$APPLICATION_STATUS', '$GENDER', '$CAME_TO_KNOW', '$INSTITUTION1', '$COMPLETED_YEAR1', '$MAJORS1', '$DIVISION_GPA1', '$INSTITUTION2', '$COMPLETED_YEAR2', '$MAJORS2', '$DIVISION_GPA2', '$INSTITUTION3', '$COMPLETED_YEAR3', '$MAJORS3', '$DIVISION_GPA3', '$ENGLISH_TEST', '$OVERALL_SCORE', '$LISTENING', '$READING', '$WRITING', '$SPEAKING', '$APPLIED_BEFORE', '$WHERE_WHEN', '$WORK_EXPERIENCE', '$CCODE', '$CBY', '$CREATED_DATE')"; 

	        $RESULT = $ERP->ERP_EXECUTE($INSERT);
        
	if ($RESULT == 1) {
                echo "<script> alert(\"Thank you for connecting with us. \"); </script>";
    ?>
    
		    <script type="text/javascript">
                      //then it will be redirected
                      window.location = "https://sen.edu.np";
            </script>
            
    <?php } else {
                echo "<script> alert(\"Something went wrong. Try again later.\"); </script>";
	}
		
	}
	
	?>