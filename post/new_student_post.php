<?php
   
  $INPUT = $_SERVER['REQUEST_METHOD'];

  if ($INPUT=='POST') { 
      
     date_default_timezone_set('Asia/Kathmandu');
	$MID = (isset($_POST['mid']) ? $_POST['mid'] : null);
	$NEW_STUDENT_ID = (isset($_POST['newstudentid']) ? $_POST['newstudentid'] : null);
     
	$NAME = (isset($_POST['name']) ? $_POST['name'] : null);
	$DOB = (isset($_POST['dob']) ? $_POST['dob'] : null);
	$EMAIL = (isset($_POST['email']) ? $_POST['email'] : null);
	$PHONE = (isset($_POST['phone']) ? $_POST['phone'] : null);
	$ADDRESS = (isset($_POST['address']) ? $_POST['address'] : null);
	$APPLIED_COUNTRY = (isset($_POST['COUNTRY']) ? $_POST['COUNTRY'] : null);
	$COURSE = (isset($_POST['course']) ? $_POST['course'] : null);
	$RELATIONSHIP_STATUS = (isset($_POST['relationship_status']) ? $_POST['relationship_status'] : null);
	$SPOUSE_NAME = (isset($_POST['spouse_name']) ? $_POST['spouse_name'] : null);
	
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
	
	$CCODE = "001";
	$CREATED_DATE = date('Y-m-d H:i:s');
	$GLOBAL_UID = (isset($_POST['global_uid']) ? $_POST['global_uid'] : null);
	$APPLICATION_STATUS_FLAG = (isset($_POST['APPLICATION_STATUS']) ? $_POST['APPLICATION_STATUS'] : null);
	$INTAKE = (isset($_POST['intake']) ? $_POST['intake'] : null);
	$REMARKS = (isset($_POST['remarks']) ? $_POST['remarks'] : null);
	$UNIVERSITY_COLLEGE = (isset($_POST['university_college']) ? $_POST['university_college'] : null);
	$PASSPORT_NO = (isset($_POST['passport_no']) ? $_POST['passport_no'] : null);
	$COUNCELLED_BY = (isset($_POST['STAFFS']) ? $_POST['STAFFS'] : null);
	
	
	
		if ($MID=="new") {
		    
	       $INSERT = "INSERT INTO new_students(name, dob, passport_no, email, address, phone, applied_country, university_college, course, intake, councelled_by, relationship_status, spouse_name, application_status, gender, came_to_know, institution1, completed_year1, majors1, division_gpa1, institution2, completed_year2, majors2, division_gpa2, institution3, completed_year3, majors3, division_gpa3, english_test, overall_score, listening, reading, writing, speaking, applied_before, where_when, work_experience, remarks, ccode, cby, created_date) VALUES('$NAME', '$DOB', '$PASSPORT_NO', '$EMAIL', '$ADDRESS', '$PHONE', '$APPLIED_COUNTRY', '$UNIVERSITY_COLLEGE', '$COURSE', '$INTAKE', '$COUNCELLED_BY', '$RELATIONSHIP_STATUS', '$SPOUSE_NAME', '$APPLICATION_STATUS_FLAG', '$GENDER', '$CAME_TO_KNOW', '$INSTITUTION1', '$COMPLETED_YEAR1', '$MAJORS1', '$DIVISION_GPA1', '$INSTITUTION2', '$COMPLETED_YEAR2', '$MAJORS2', '$DIVISION_GPA2', '$INSTITUTION3', '$COMPLETED_YEAR3', '$MAJORS3', '$DIVISION_GPA3', '$ENGLISH_TEST', '$OVERALL_SCORE', '$LISTENING', '$READING', '$WRITING', '$SPEAKING', '$APPLIED_BEFORE', '$WHERE_WHEN', '$WORK_EXPERIENCE', '$REMARKS', '$CCODE', '$GLOBAL_UID', '$CREATED_DATE')";

	        $RESULT = $ERP->ERP_EXECUTE($INSERT);
	        
            if ($RESULT == 1) {
                    echo "<script> alert(\"Student added Successfully.\"); </script>";
        
            } else {
                echo "<script> alert(\"Student addition Failed. Try Again Later.\"); </script>";
                
            }
            
		} else if ($MID=="edit") {
		    
		    $UPDATE = "UPDATE new_students SET 
				  name='$NAME'	
				 ,dob='$DOB'	
				 ,passport_no='$PASSPORT_NO'
				 ,email='$EMAIL'
				 ,address='$ADDRESS'
				 ,phone ='$PHONE'
				 ,applied_country='$APPLIED_COUNTRY'
				 ,university_college='$UNIVERSITY_COLLEGE'
				 ,course='$COURSE'
				 ,intake='$INTAKE'
				 ,councelled_by='$COUNCELLED_BY'
				 ,relationship_status='$RELATIONSHIP_STATUS'
				 ,spouse_name='$SPOUSE_NAME'
				 ,application_status='$APPLICATION_STATUS_FLAG'
				 ,gender='$GENDER'
				 ,came_to_know='$CAME_TO_KNOW'
				 ,institution1='$INSTITUTION1'
				 ,completed_year1='$COMPLETED_YEAR1'
				 ,majors1='$MAJORS1'
				 ,division_gpa1='$DIVISION_GPA1'
				 ,institution2='$INSTITUTION2'
				 ,completed_year2='$COMPLETED_YEAR2'
				 ,majors2='$MAJORS2'
				 ,division_gpa2='$DIVISION_GPA2'
				 ,institution3='$INSTITUTION3'
				 ,completed_year3='$COMPLETED_YEAR3'
				 ,majors3='$MAJORS3'
				 ,division_gpa3='$DIVISION_GPA3'
				 ,english_test='$ENGLISH_TEST'
				 ,overall_score='$OVERALL_SCORE'
				 ,listening='$LISTENING'
				 ,reading='$READING'
				 ,writing='$WRITING'
				 ,speaking='$SPEAKING'
				 ,applied_before='$APPLIED_BEFORE'
				 ,where_when='$WHERE_WHEN'
				 ,work_experience='$WORK_EXPERIENCE'
				 ,remarks='$REMARKS'
				WHERE id='$NEW_STUDENT_ID'";

	        $RESULT = $ERP->ERP_EXECUTE($UPDATE);
            if ($RESULT == 1) {
                echo "<script> alert(\"Student Details Updated Successfully.\"); </script>";
                
            } else {
                echo "<script> alert(\"Student Details Updation Failed.\"); </script>";
                
            }
            
		} 
	}
	
	?>