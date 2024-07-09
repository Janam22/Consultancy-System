<?php

  $INPUT = $_SERVER['REQUEST_METHOD'];

  if ($INPUT=='POST') { 
    
    $GLOBAL_CID = "001";
     date_default_timezone_set('Asia/Kathmandu');
	$CREATED_DATE = date('Y-m-d H:i:s');
	$MID = (isset($_POST['mid']) ? $_POST['mid'] : null);
	$USER_ID = (isset($_POST['userid']) ? $_POST['userid'] : null);
	
	$EDESC = (isset($_POST['name']) ? $_POST['name'] : null);
	$DESIGNATION = (isset($_POST['DESIGNATION']) ? $_POST['DESIGNATION'] : null);
	$COUNTRY = (isset($_POST['country']) ? $_POST['country'] : null);
	$ADDRESS = (isset($_POST['address']) ? $_POST['address'] : null);
	$PHONE = (isset($_POST['phone']) ? $_POST['phone'] : null);
	$EMAIL = (isset($_POST['email']) ? $_POST['email'] : null);
	$PASSWORD = (isset($_POST['password']) ? $_POST['password'] : null);
	$USER_FLAG = (isset($_POST['usertype']) ? $_POST['usertype'] : null);
	$ACCOUNT_STATUS = (isset($_POST['accountstatus']) ? $_POST['accountstatus'] : null);
	$GLOBAL_UID = (isset($_POST['id']) ? $_POST['id'] : null);
	$PASSWORD = md5($PASSWORD);
	
	
		if ($MID=="new") {
		    
		    $folder_id = "../assets/profile/";

            if (!file_exists($folder_id)) {
	            if (!mkdir($folder_id, 0777, true)) { die('Failed to create folders...'); }
            }


		    $photo_id = "photo"; 
		    $photo = $_FILES[$photo_id]['name'];

		    if (strlen($photo)>0) { 
			$new_photo_id = $EMAIL . ".jpg";

	                if (move_uploaded_file($_FILES[$photo_id]["tmp_name"], $folder_id . $new_photo_id)) {
        	           //echo "The file ". basename( $_FILES[$PHOTO_ID]["name"]). " has been uploaded.";  
                	} else {

	                }
		    } 
		
		    $INSERT = "INSERT INTO users(password, name, email, mobile, address, country, designation, photo, user_flag, status_flag, cby, ccode, cdate) VALUES('$PASSWORD','$EDESC', '$EMAIL', '$PHONE', '$ADDRESS', '$COUNTRY', '$DESIGNATION', '$new_photo_id', '$USER_FLAG', '$ACCOUNT_STATUS', '$GLOBAL_UID', '$GLOBAL_CID', '$CREATED_DATE')";
		
	        $RESULT = $ERP->ERP_EXECUTE($INSERT);
            if ($RESULT == 1) {
                echo "<script> alert(\"New user added Successfully.\"); </script>";
        
            } else {
                echo "<script> alert(\"New user addition Failed.\"); </script>";
                
            }
            
		} else if ($MID=="edit"){
		    
		    $folder_id = "../assets/profile/";

            if (!file_exists($folder_id)) {
	            if (!mkdir($folder_id, 0777, true)) { die('Failed to create folders...'); }
            }


		    $photo_id = "photo"; 
		    $photo = $_FILES[$photo_id]['name'];

		    if (strlen($photo)>0) { 
		        $new_photo_id = $EMAIL . ".jpg";

	                if (move_uploaded_file($_FILES[$photo_id]["tmp_name"], $folder_id . $new_photo_id)) {
        	           //echo "The file ". basename( $_FILES[$PHOTO_ID]["name"]). " has been uploaded.";  
                	} else {

	                }
		    } else {
			
			    $DATA_BANK = $ERP->ERP_DATA('USERS_INDIVIDUAL_INFO', $USER_ID, $GLOBAL_CID);
			    foreach ($DATA_BANK AS $ROW_DETAIL){
				    $image_path=$ROW_DETAIL['photo'];
			    }

			    $new_photo_id = $image_path;
		    }   
		    
		    $UPDATE = "UPDATE users SET 
				  name='$EDESC'		
				 ,designation='$DESIGNATION'
				 ,country ='$COUNTRY'
				 ,address='$ADDRESS'
				 ,mobile='$PHONE'
				 ,email='$EMAIL'
				 ,user_flag='$USER_FLAG'
				 ,status_flag='$ACCOUNT_STATUS'
				 ,photo='$new_photo_id'
				WHERE id='$USER_ID'";

	        $RESULT = $ERP->ERP_EXECUTE($UPDATE);
            if ($RESULT == 1) {
                echo "<script> alert(\"User Details Updated Successfully.\"); </script>";
                
            } else {
                echo "<script> alert(\"User Details Updation Failed.\"); </script>";
                
            }
		    
		} else if ($MID=="delete") {
		    
		    $DELETE = "DELETE FROM users WHERE id='$USER_ID'";
		
	        $RESULT = $ERP->ERP_EXECUTE($DELETE);
            if ($RESULT == 1) {
                echo "<script> alert(\"User deleted Successfully.\"); </script>";
                
            } else {
                echo "<script> alert(\"User deletion Failed.\"); </script>";
                
            }
		    
		}
		
		
	}
	
	?>