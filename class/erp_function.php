<?php
    session_start();
   include_once 'erp_connect.php';

   class erp_function extends erp_connect
   {

    public function __construct()
    {
        parent::__construct();

    }
    

    public function ERP_EXECUTE($qry) 
    {
        $rs = $this->connection->query($qry);
        if ($rs == false) {
            echo 'Duplicate or Invalid Record. Try Again.';
            return false;
        } else {
            return true;
        }        
    }
    
 
    public function escape_string($val)
    {
        return $this->connection->real_escape_string($val);
    }

    public function RETURN_FIELD($TAB, $DESC, $FIELD, $VAL) {
        
        $CID = "001";
        $RET = NULL;  
        $qry = "SELECT " . $DESC . " AS RET FROM " . $TAB . " WHERE " . $FIELD . "='" . $VAL . "' AND ccode='$CID'"; 

        $rs = $this->connection->query($qry);
        while ($row = $rs->fetch_assoc()) {
            $RET = $row['RET'];
        }
        if (strlen($RET)==0) { $RET = Null; } 
        return $RET;
    } 



   public function ERP_INFO($QID, $P1=NULL, $P2=NULL, $P3=NULL, $P4=NULL, $P5=NULL)
    {        


	if ($QID=='STUDENTS_COUNT') 		{ $QRY = "SELECT count(*) as RET FROM new_students WHERE ccode='$P1'"; } 
	if ($QID=='DESIGNATION_COUNT') 		{ $QRY = "SELECT count(*) as RET FROM designation WHERE status_flag='Y' AND ccode='$P1'"; } 
	if ($QID=='STAFFS_COUNT') 		{ $QRY = "SELECT count(*) as RET FROM staffs WHERE status_flag='W' AND ccode='$P1'"; } 
	if ($QID=='USERS_COUNT') 		{ $QRY = "SELECT count(*) as RET FROM users WHERE status_flag='Y' AND ccode='$P1'"; } 
	
	if ($QID=='COUNSELLING_COUNT') 		{ $QRY = "SELECT count(*) as RET FROM new_students WHERE application_status='1' AND ccode='$P1'"; } 
	if ($QID=='OFFER_PROCESSING_COUNT') 		{ $QRY = "SELECT count(*) as RET FROM new_students WHERE application_status='2' AND ccode='$P1'"; } 
	if ($QID=='GTE_PROCESSING_COUNT') 		{ $QRY = "SELECT count(*) as RET FROM new_students WHERE application_status='3' AND ccode='$P1'"; } 
	if ($QID=='COE_PROCESSING_COUNT') 		{ $QRY = "SELECT count(*) as RET FROM new_students WHERE application_status='4' AND ccode='$P1'"; } 
	if ($QID=='BIOMETRIC_MEDICAL_COUNT') 		{ $QRY = "SELECT count(*) as RET FROM new_students WHERE application_status='5' AND ccode='$P1'"; } 
	if ($QID=='VISA_PROCESSING_COUNT') 		{ $QRY = "SELECT count(*) as RET FROM new_students WHERE application_status='6' AND ccode='$P1'"; } 
	if ($QID=='VISA_GRANTED_COUNT') 		{ $QRY = "SELECT count(*) as RET FROM new_students WHERE application_status='7' AND ccode='$P1'"; } 
	if ($QID=='VISA_REFUSED_COUNT') 		{ $QRY = "SELECT count(*) as RET FROM new_students WHERE application_status='8' AND ccode='$P1'"; } 

        $rs = $this->connection->query($QRY);

        while ($row = $rs->fetch_assoc()) {
            $RET = $row['RET'];
        }

	if (strlen($RET)==0) { $RET = 0; } 
        return $RET;
        

   } 

    public function ERP_DATA($QID, $P1=NULL, $P2=NULL, $P3=NULL, $P4=NULL, $P5=NULL)
    {        

    	if ($QID=='PREVILEGES_INFO')  { $QRY = "SELECT * FROM previleges WHERE email='$P1' AND ccode='$P2'"; } 
    	if ($QID=='USERS_PREVILEGE_INFO')  { $QRY = "SELECT * FROM users WHERE ccode='$P1'"; } 
    	if ($QID=='PROFILE_INFO')  { $QRY = "SELECT * FROM users WHERE email='$P1' AND ccode='$P2'"; } 
    	if ($QID=='PASSWORD_INFO')  { $QRY = "SELECT password FROM users WHERE email='$P1'"; } 
    	if ($QID=='FEEDBACK_INFO')  { $QRY = "SELECT * FROM feedback WHERE ccode='$P1'"; } 
    	if ($QID=='USERS_INFO')  { $QRY = "SELECT * FROM users WHERE ccode='$P1'"; } 
    	if ($QID=='USERS_INDIVIDUAL_INFO')  { $QRY = "SELECT * FROM users WHERE id='$P1' AND ccode='$P2'"; } 
    	if ($QID=='STAFFS_INFO')  { $QRY = "SELECT * FROM staffs WHERE ccode='$P1'"; } 
    	if ($QID=='STAFFS_INDIVIDUAL_INFO')  { $QRY = "SELECT * FROM staffs WHERE id='$P1' AND ccode='$P2'"; } 
    	if ($QID=='DESIGNATION_INFO')  { $QRY = "SELECT * FROM designation WHERE ccode='$P1'"; } 
    	if ($QID=='DESIGNATION_INDIVIDUAL_INFO')  { $QRY = "SELECT * FROM designation WHERE id='$P1' AND ccode='$P2'"; } 
    	
    	
    	if ($QID=='NEW_STUDENT_INFO')  { $QRY = "SELECT * FROM new_students WHERE id='$P1' AND ccode='$P2'"; } 
    	if ($QID=='NEW_STUDENTS_INFO')  { $QRY = "SELECT * FROM new_students WHERE ccode='$P1'"; }  
    	if ($QID=='COUNSELLING_INFO')  { $QRY = "SELECT * FROM new_students WHERE application_status=1 AND ccode='$P1'"; } 
    	if ($QID=='OFFERPROCESSING_INFO')  { $QRY = "SELECT * FROM new_students WHERE application_status=2 AND ccode='$P1'"; } 
    	if ($QID=='GTEPROCESSING_INFO')  { $QRY = "SELECT * FROM new_students WHERE application_status=3 AND ccode='$P1'"; } 
    	if ($QID=='COEPROCESSING_INFO')  { $QRY = "SELECT * FROM new_students WHERE application_status=4 AND ccode='$P1'"; } 
    	if ($QID=='BIOMETRICMEDICAL_INFO')  { $QRY = "SELECT * FROM new_students WHERE application_status=5 AND ccode='$P1'"; } 
    	if ($QID=='VISAPROCESSING_INFO')  { $QRY = "SELECT * FROM new_students WHERE application_status=6 AND ccode='$P1'"; } 
    	if ($QID=='VISAGRANTED_INFO')  { $QRY = "SELECT * FROM new_students WHERE application_status=7 AND ccode='$P1'"; } 
    	if ($QID=='VISAREFUSED_INFO')  { $QRY = "SELECT * FROM new_students WHERE application_status=8 AND ccode='$P1'"; } 
    	
    	
    	if ($QID=='LOGIN_INFO')  { $QRY = "SELECT * FROM session_log ORDER BY id DESC LIMIT 5"; } 

        $rs = $this->connection->query($QRY);
        
        if ($rs == false) {
            return false;
        } 
        
        $rows = array();
        
        while ($row = $rs->fetch_assoc()) {
            $rows[] = $row;
        }
        
        return $rows;
   }


}

?>