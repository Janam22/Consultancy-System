<?php

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


}

?>