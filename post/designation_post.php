<?php

  $INPUT = $_SERVER['REQUEST_METHOD'];

  if ($INPUT=='POST') { 
    
    $GLOBAL_CID = "001";
     date_default_timezone_set('Asia/Kathmandu');
	$CREATED_DATE = date('Y-m-d H:i:s');
	$MID = (isset($_POST['mid']) ? $_POST['mid'] : null);
	$DESIGNATION_ID = (isset($_POST['designationid']) ? $_POST['designationid'] : null);
	
	$EDESC = (isset($_POST['designation_name']) ? $_POST['designation_name'] : null);
	$STATUS_FLAG = (isset($_POST['status']) ? $_POST['status'] : null);
	
	
		if ($MID=="new") {
		    
		    $INSERT = "INSERT INTO designation(edesc, status_flag, cby, ccode, cdate) VALUES('$EDESC','$STATUS_FLAG', '$GLOBAL_UID', '$GLOBAL_CID', '$CREATED_DATE')";
		
	        $RESULT = $ERP->ERP_EXECUTE($INSERT);
            if ($RESULT == 1) {
                echo "<script> alert(\"Designation added Successfully.\"); </script>";
        
            } else {
                echo "<script> alert(\"Designation addition Failed.\"); </script>";
                
            }
            
		} else if ($MID=="edit"){
		    
		    $UPDATE = "UPDATE designation SET 
				  edesc='$EDESC'		
				 ,status_flag='$STATUS_FLAG'
				WHERE id='$DESIGNATION_ID'";

	        $RESULT = $ERP->ERP_EXECUTE($UPDATE);
            if ($RESULT == 1) {
                echo "<script> alert(\"Designation Details Updated Successfully.\"); </script>";
                
            } else {
                echo "<script> alert(\"Designation Details Updation Failed.\"); </script>";
                
            }
		    
		}
		
		
	}
	
	?>