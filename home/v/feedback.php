<?php 
    session_start();
?>

<div class="pagetitle">
      <h1>Feedbacks</h1>
      <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <form action='index.php' method='post'>
                <input type="hidden" name='o' value='dashboard'>
                <button type="submit" class="nav-link collapsed" style="border:none; background:transparent;">Dashboard</button>
                </form>
          </li>
          <li class="breadcrumb-item active">Feedback</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Feedbacks</h5>

              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">S.N.</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Address</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Message/Inquiry</th>
                    <th scope="col">Date</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                      
                    <?php 
                        $i = 0;
                        $DATA_BANK = $ERP->ERP_DATA('FEEDBACK_INFO', $GLOBAL_CID);
                        foreach ($DATA_BANK AS $ROW) {
                            $i = $i + 1; 
                            $ID = $ROW['id']; 
                            $NAME = $ROW['name'];  
                            $EMAIL = $ROW['email']; 
                            $ADDRESS = $ROW['address'];
                            $PHONE = $ROW['phone'];
                            $MESSAGE = $ROW['message'];
                            $DATE = $ROW['created_date'];
                    ?>
                    
                  <tr>
                    <th scope="row"><?php print $i; ?></th>
                    <td><?php print $NAME; ?></td>
                    <td><?php print $EMAIL; ?></td>
                    <td><?php print $ADDRESS; ?></td>
                    <td><?php print $PHONE; ?></td>
                    <td><?php print $MESSAGE; ?></td>
                    <td><?php print $DATE; ?></td>
                    <td></td>
                    
                  </tr>
                    <?php } ?>
                    
                </tbody>
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->
