<?php

    $ID = NULL;
    
    $MID = (isset($_POST['mid']) ? $_POST['mid'] : null);
    $ID = (isset($_POST['id']) ? $_POST['id'] : null);
    
    $i = 0;
    $DATA_BANK = $ERP->ERP_DATA('DESIGNATION_INDIVIDUAL_INFO', $ID, $GLOBAL_CID);
    foreach ($DATA_BANK AS $ROW) {
        $i = $i + 1; 
        $ID = $ROW['id']; 
        $DESIGNATION_NAME = $ROW['edesc'];  
        $STATUS_FLAG = $ROW['status_flag']; 
                    
    }
?>

    <div class="pagetitle">
      <h1>Designation Details</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
                <form action='index.php' method='post'>
                <input type="hidden" name='o' value='dashboard'>
                <button type="submit" class="nav-link collapsed" style="border:none; background:transparent;">Dashboard</button>
                </form>
            </li>
          <li class="breadcrumb-item active">Designation Details</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

      <section class="section register min-vh-80 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-6 col-md-6 d-flex flex-column align-items-center justify-content-center">

          <div class="card mb-6">
            <div class="card-body">
                <div style="display: flex; justify-content: space-between; align-items: center;">
              <h5 class="card-title"><center><?php if ($MID=="new") { print "Add new Designation"; } else if ($MID=="edit") { print "Update Designation Details"; } ?></center></h5>


                    </div>
              <!-- Multi Columns Form -->
              <form class="row g-3" method="post" action="index.php">
                  
                <div class="col-md-12">
                  <label for="inputName5" class="form-label">Designation Name</label>
                  <input type="text" class="form-control" name="designation_name" value="<?php print $DESIGNATION_NAME; ?>" required>
                </div>
                
                <div class="col-md-12">
                  <label for="inputCity" class="form-label">Status</label>
                    <select class="form-select" name="status" aria-label="State" <?php if ($MID=="view") { print "disabled"; } ?> required>
                      <option value="Y" <?php if ($STATUS_FLAG=="Y") { print "selected"; } ?>>Active</option>
                      <option value="N" <?php if ($STATUS_FLAG=="N") { print "selected"; } ?>>Disabled</option>
                    </select>
                </div>
                
                
                <table>
                <tr>
                <th>
                <div class="text-center">
                  <button type="submit" class="btn btn-success"><?php if ($MID=="new") { print "Add new Designation"; } else if ($MID=="edit") { print "Update Designation"; } ?> </button>
                      <input type="hidden" name="o" value="designation.management">
                      <input type="hidden" name="submit" value="SUBMIT">
                      <input type="hidden" name="designationid" value="<?php print $ID; ?>">
                      <input type="hidden" name="mid" value="<?php print $MID; ?>">
                </div>
                
              </form><!-- End Multi Columns Form -->
              </th>
              <th>
              <form method="post" action="index.php">
                <div class="text-center">
                  <button type="submit" class="btn btn-secondary"><?php if ($MID=="view") { print "Back"; } else { print "Cancel"; } ?> </button>
                      <input type="hidden" name="o" value="designation.management">
                </div>
              </form>
              </th>
              </tr>
              </table>

            </div>
          </div>

        </div>


            </div>
          </div>
        </div>
    </section>

