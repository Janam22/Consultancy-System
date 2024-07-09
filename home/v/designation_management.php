<?php 
    session_start();
    
    $SUBMIT = (isset($_POST['submit']) ? $_POST['submit'] : null);
    if ($SUBMIT=='SUBMIT')  { 
	    include("../post/designation_post.php"); 
    } 
    
?>

<div class="pagetitle">
      <h1>Designation List</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
                <form action='index.php' method='post'>
                <input type="hidden" name='o' value='dashboard'>
                <button type="submit" class="nav-link collapsed" style="border:none; background:transparent;">Dashboard</button>
                </form>
            </li>
          <li class="breadcrumb-item active">Designation</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

            <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h4 class="card-title" style="display: inline-block;">Designation List 
                <?php if ($DESIGNATION_ADD_FLAG =="Y") { ?>
                <form method="post" action="index.php" enctype="multipart/form-data" style="display: inline-block;">
                <button class="btn btn-primary"><span style="color:white;">Add New Designation</span>
                
                            </button>
                      <input type="hidden" name="o" value="designation">
                      <input type="hidden" name="mid" value="new">
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
                    <th scope="col">Designation Name</th>
                    <th scope="col">Status</th>
                <?php if ($DESIGNATION_EDIT_FLAG =="Y") { ?>
                    <th scope="col">Action</th>
                <?php } ?>
                  </tr>
                </thead>
                <tbody>
                      
                    <?php 
                        $i = 0;
                        $DATA_BANK = $ERP->ERP_DATA('DESIGNATION_INFO', $GLOBAL_CID);
                        foreach ($DATA_BANK AS $ROW) {
                            $i = $i + 1; 
                            $ID = $ROW['id']; 
                            $DESIGNATION_NAME = $ROW['edesc'];  
                            $STATUS = $ROW['status_flag']; 
                            if ($STATUS=="Y") {
                                $STATUS = "Enabled";
                            } else if ($STATUS=="N") {
                                $STATUS = "Disabled";
                            }
                    ?>
                    
                  <tr>
                    <th scope="row"><?php print $i; ?></th>
                    <td><?php print $DESIGNATION_NAME; ?></td>
                    <td><?php print $STATUS; ?></td>
                    
                <?php if ($DESIGNATION_EDIT_FLAG =="Y") { ?>
                    <td>
                        
                        <div style="display: flex; align-items: center;">
                        
                        <form method="post" action="index.php" style="margin-right: 10px;">
                        <button style="background-color: transparent; border: none;">
                            <i title="Edit Details" class="fa fa-edit" style="font-size:35px;color:blue"></i>
                        </button>
                        
                      <input type="hidden" name="o" value="designation">
                      <input type="hidden" name="mid" value="edit">
                      <input type="hidden" name="id" value="<?php print $ID; ?>">
                        </form>
                        &nbsp;
                        
                    </div>
                    </td>
                <?php } ?>
                    
              
                  </tr>
                    <?php } ?>
                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                  </div>