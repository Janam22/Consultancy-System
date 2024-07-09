<?php 
        session_start(); 
        
        $STUDENTS_COUNT = $ERP->ERP_INFO('STUDENTS_COUNT', $GLOBAL_CID);
        $STAFFS_COUNT = $ERP->ERP_INFO('STAFFS_COUNT', $GLOBAL_CID);
        $USERS_COUNT = $ERP->ERP_INFO('USERS_COUNT', $GLOBAL_CID);
        $DESIGNATION_COUNT = $ERP->ERP_INFO('DESIGNATION_COUNT', $GLOBAL_CID);
        
        $COUNSELLING_COUNT = $ERP->ERP_INFO('COUNSELLING_COUNT', $GLOBAL_CID);
        $OFFER_PROCESSING_COUNT = $ERP->ERP_INFO('OFFER_PROCESSING_COUNT', $GLOBAL_CID);
        $GTE_PROCESSING_COUNT = $ERP->ERP_INFO('GTE_PROCESSING_COUNT', $GLOBAL_CID);
        $COE_PROCESSING_COUNT = $ERP->ERP_INFO('COE_PROCESSING_COUNT', $GLOBAL_CID);
        $BIOMETRIC_MEDICAL_COUNT = $ERP->ERP_INFO('BIOMETRIC_MEDICAL_COUNT', $GLOBAL_CID);
        $VISA_PROCESSING_COUNT = $ERP->ERP_INFO('VISA_PROCESSING_COUNT', $GLOBAL_CID);
        $VISA_GRANTED_COUNT = $ERP->ERP_INFO('VISA_GRANTED_COUNT', $GLOBAL_CID);
        $VISA_REFUSED_COUNT = $ERP->ERP_INFO('VISA_REFUSED_COUNT', $GLOBAL_CID);
        
        
?>
<style>
    .login-info {
        background-color: #f9f9f9;
        border: 1px solid #ddd;
        border-radius: 5px;
        padding: 10px;
        margin-bottom: 10px;
    }

    .login-info div {
        margin-bottom: 5px;
    }

    .login-info strong {
        color: #333;
    }
</style>


<div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
              
                <form action='index.php' method='post'>
                <input type="hidden" name='o' value='dashboard'>
                <button type="submit" class="nav-link collapsed" style="border:none; background:transparent;">Home</button>
                </form>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    
    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-8">
          <div class="row">

            <!-- Students Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card customers-card">

                <div class="card-body">
                  <h5 class="card-title">Students</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="fa fa-users"></i>
                    </div>
                    <div class="ps-3">
                      <h6><?php print $STUDENTS_COUNT; ?></h6>
                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Students Card -->


            <!-- Staffs Card -->
            <div class="col-xxl-4 col-xl-12">

              <div class="card info-card customers-card">

                <div class="card-body">
                  <h5 class="card-title">Staffs </h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="fa fa-users"></i>
                    </div>
                    <div class="ps-3">
                      <h6><?php print $STAFFS_COUNT; ?></h6>
                    </div>
                  </div>

                </div>
              </div>

            </div><!-- End Staffs Card -->


            <!-- Users Card -->
            <div class="col-xxl-4 col-xl-12">

              <div class="card info-card customers-card">

                <div class="card-body">
                  <h5 class="card-title">Users </h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="fa fa-users"></i>
                    </div>
                    <div class="ps-3">
                      <h6><?php print $USERS_COUNT; ?></h6>
                    </div>
                  </div>

                </div>
              </div>

            </div><!-- End Users Card -->


            <!-- Counselling Card -->
            <div class="col-xxl-4 col-xl-12">

              <div class="card info-card revenue-card">

                <div class="card-body">
                  <h5 class="card-title">Counselling </h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="fa fa-handshake-o"></i>
                    </div>
                    <div class="ps-3">
                      <h6><?php print $COUNSELLING_COUNT; ?></h6>
                      
                    </div>
                  </div>

                </div>
              </div>

            </div><!-- End Counselling Card -->
            
            <!-- Offer Processing Card -->
            <div class="col-xxl-4 col-xl-12">

              <div class="card info-card revenue-card">

                <div class="card-body">
                  <h5 class="card-title">Offer Processing </h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="fa fa-file"></i>
                    </div>
                    <div class="ps-3">
                      <h6><?php print $OFFER_PROCESSING_COUNT; ?></h6>
                      
                    </div>
                  </div>

                </div>
              </div>

            </div><!-- End Offer Processing Card -->
            
            <!-- GTE Processing Card -->
            <div class="col-xxl-4 col-xl-12">

              <div class="card info-card revenue-card">

                <div class="card-body">
                  <h5 class="card-title">GTE Processing </h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="fa fa-info"></i>
                    </div>
                    <div class="ps-3">
                      <h6><?php print $GTE_PROCESSING_COUNT; ?></h6>
                      
                    </div>
                  </div>

                </div>
              </div>

            </div><!-- End GTE Processing Card -->
            
            <!-- COE Processing Card -->
            <div class="col-xxl-4 col-xl-12">

              <div class="card info-card revenue-card">

                <div class="card-body">
                  <h5 class="card-title">COE Processing </h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="fa fa-info"></i>
                    </div>
                    <div class="ps-3">
                      <h6><?php print $COE_PROCESSING_COUNT; ?></h6>
                      
                    </div>
                  </div>

                </div>
              </div>

            </div><!-- End COE Processing Card -->
            
            <!-- Biometric Card -->
            <div class="col-xxl-4 col-xl-12">

              <div class="card info-card revenue-card">

                <div class="card-body">
                  <h5 class="card-title">Biometric/Medical </h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="fa fa-user-md"></i>
                    </div>
                    <div class="ps-3">
                      <h6><?php print $BIOMETRIC_MEDICAL_COUNT; ?></h6>
                      
                    </div>
                  </div>

                </div>
              </div>

            </div><!-- End Biometric Card -->
            
            <!-- Visa Processing Card -->
            <div class="col-xxl-4 col-xl-12">

              <div class="card info-card revenue-card">

                <div class="card-body">
                  <h5 class="card-title">Visa Processing </h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="fa fa-cc-visa"></i>
                    </div>
                    <div class="ps-3">
                      <h6><?php print $VISA_PROCESSING_COUNT; ?></h6>
                      
                    </div>
                  </div>

                </div>
              </div>

            </div><!-- End Visa Processing Card -->
            
            <!-- Visa Granted Card -->
            <div class="col-xxl-4 col-xl-12">

              <div class="card info-card revenue-card">

                <div class="card-body">
                  <h5 class="card-title">Visa Granted </h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="fa fa-check"></i>
                    </div>
                    <div class="ps-3">
                      <h6><?php print $VISA_GRANTED_COUNT; ?></h6>
                      
                    </div>
                  </div>

                </div>
              </div>

            </div><!-- End Visa Granted Card -->
            
            <!-- Visa Refused Card -->
            <div class="col-xxl-4 col-xl-12">

              <div class="card info-card revenue-card">

                <div class="card-body">
                  <h5 class="card-title">Visa Refused </h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="fa fa-ban"></i>
                    </div>
                    <div class="ps-3">
                      <h6><?php print $VISA_REFUSED_COUNT; ?></h6>
                      
                    </div>
                  </div>

                </div>
              </div>

            </div><!-- End Visa Refused Card -->
            

          </div>
        </div><!-- End Left side columns -->

        <!-- Right side columns -->
        <div class="col-lg-4">
            
            
            

<?php if ($GLOBAL_USER_FLAG=="SA") { ?>

          <!-- Visual Data -->
          <div class="card">

            <div class="card-body pb-0">
              <h5 class="card-title">Recent Logins </h5>
<?php

    $DATA_BANK = $ERP->ERP_DATA('LOGIN_INFO');
      foreach ($DATA_BANK AS $ROW) {
          
        $USER_ID = $ROW['user_id'];  
        $DATE = $ROW['date'];  
        $STATUS = $ROW['status'];  
          ?>
    <div class="login-info">
        <div><strong>Email:</strong> <?php echo $USER_ID; ?></div>
        <div><strong>Login Time:</strong> <?php echo $DATE; ?></div>
        <div><strong>Status:</strong> <?php if ($STATUS=="Online") { ?><span style="color: green;"> <?php } else { ?><span style="color: red;"> <?php } ?><?php echo $STATUS; ?></span></div>
    </div>
<?php } ?>
            </div>
          </div><!-- End Visual Data -->
          
<?php } ?>



          
          <!-- Visual Data -->
          <div class="card">

            <div class="card-body pb-0">
              <h5 class="card-title">Visual Data </h5>

              <div id="visualdataChart" style="min-height: 400px;" class="echart"></div>

              <script>
                document.addEventListener("DOMContentLoaded", () => {
                  echarts.init(document.querySelector("#visualdataChart")).setOption({
                    tooltip: {
                      trigger: 'item'
                    },
                    legend: {
                      top: '5%',
                      left: 'center'
                    },
                    series: [{
                      name: 'Access From',
                      type: 'pie',
                      radius: ['40%', '70%'],
                      avoidLabelOverlap: false,
                      label: {
                        show: false,
                        position: 'center'
                      },
                      emphasis: {
                        label: {
                          show: true,
                          fontSize: '18',
                          fontWeight: 'bold'
                        }
                      },
                      labelLine: {
                        show: false
                      },
                      data: [{
                          value: <?php print $STUDENTS_COUNT; ?>,
                          name: 'Students'
                        },
                        {
                          value: <?php print $DESIGNATION_COUNT; ?>,
                          name: 'Designations'
                        },
                        {
                          value: <?php print $STAFFS_COUNT; ?>,
                          name: 'Staffs'
                        },
                        {
                          value: <?php print $USERS_COUNT; ?>,
                          name: 'Users'
                        }
                      ]
                    }]
                  });
                });
              </script>

            </div>
          </div><!-- End Visual Data -->
          
          

        </div><!-- End Right side columns -->





      </div>
    </section>
