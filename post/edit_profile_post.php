<?php

  $INPUT = $_SERVER['REQUEST_METHOD'];

  if ($INPUT=='POST') { 

	$EDESC = (isset($_POST['fullname']) ? $_POST['fullname'] : null);
	$DESIGNATION = (isset($_POST['DESIGNATION']) ? $_POST['DESIGNATION'] : null);
	$COUNTRY = (isset($_POST['country']) ? $_POST['country'] : null);
	$ADDRESS = (isset($_POST['address']) ? $_POST['address'] : null);
	$PHONE = (isset($_POST['phone']) ? $_POST['phone'] : null);
	$UPDATED_EMAIL = (isset($_POST['email']) ? $_POST['email'] : null);
	$EMAIL = (isset($_POST['id']) ? $_POST['id'] : null);
		
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
			
			$DATA_BANK = $ERP->ERP_DATA('PROFILE_INFO', $EMAIL, $GLOBAL_CID);
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
				 ,email='$UPDATED_EMAIL'
				 ,photo='$new_photo_id'
				WHERE email='$EMAIL'";

	    $RESULT = $ERP->ERP_EXECUTE($UPDATE);
        if ($RESULT == 1) {
                echo "<script> alert(\"Profile Updated Successfully.\"); </script>";
        } else {
                echo "<script> alert(\"Profile Updation Failed.\"); </script>";
        }
	}
	
	?>