<?php
  session_start();
  error_reporting(0);
  if (strlen($o)==0) { 
        header("Location: ../index.php");
  } 

  $ICON = "32"; 
  $GLOBAL_CID = "001";
  
  include("header.php");

    $GLOBAL_DESIGNATION = $ERP->RETURN_FIELD('designation','edesc', 'id', $GLOBAL_DESIGNATION);
    
?>



  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
        
                <form action='index.php' method='post'>
                <input type="hidden" name='o' value='dashboard'>
                <button type="submit" class="logo d-flex align-items-center" style="border:none; background:transparent;"><img src="../assets/img/logo.png" alt=""><span class="d-none d-lg-block">SEN<?php print $_SESSION['GLOBAL_ID']; ?></span></button>
                </form>
                
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->


    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">


        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="<?php print $GLOBAL_PHOTO_PATH.'?rand='.rand(1,2000); ?>" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2"><?php print $GLOBAL_NAM; ?> </span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6><?php print $GLOBAL_NAM; ?></h6>
              <span><?php print $GLOBAL_DESIGNATION; ?></span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
                <form action='index.php' method='post'>
                <input type="hidden" name='o' value='profile'>
                <button type="submit" class="dropdown-item d-flex align-items-center" style="border:none"><i class="fa fa-id-card"></i> My Profile</button>
                </form>
            </li>
            
            <li>
              <hr class="dropdown-divider">
            </li>
            
            <?php if ($PREVILEGE_FLAG=="Y") { ?>
            <li>
                <form action='index.php' method='post'>
                <input type="hidden" name='o' value='previlege.management'>
                <button type="submit" class="dropdown-item d-flex align-items-center" style="border:none"><i class="fa fa-user-secret"></i> Previlege Management</button>
                </form>
            </li>
            <?php } ?>
            
            
            <li>
              <hr class="dropdown-divider">
            </li>
            
            <?php if ($DATABASE_BACKUP_FLAG=="Y") { ?>
            <li>
                <form action='index.php' method='post'>
                <input type="hidden" name='o' value='databasebackup'>
                <button type="submit" class="dropdown-item d-flex align-items-center" style="border:none"><i class="fa fa-database"></i> Database Backup</button>
                </form>
            </li>
            <?php } ?>
            
            <li>
              <hr class="dropdown-divider">
            </li>
            
            <li>
                <form action='index.php' method='post'>
                <input type="hidden" name='o' value='qrcode'>
                <button type="submit" class="dropdown-item d-flex align-items-center" style="border:none"><i class="fa fa-qrcode"></i> Download QR Code</button>
                </form>
            </li>
            
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
                    <form method="post" action="index.php">
                    <input type="hidden" name='o' value='logout'>
                    <button type="submit" onclick="return confirm('Are you sure to logout?');" class="dropdown-item d-flex align-items-center" style="border:none"><i class="fa fa-sign-out"></i> Log Out</button>
                    </form>
            </li>
            

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
          
                <form action='index.php' method='post'>
                <input type="hidden" name='o' value='dashboard'>
                <button type="submit" class="nav-link" style="border:none"><i class="fa fa-dashboard"></i><span>Dashboard</span></button>
                </form>
                
      </li><!-- End Dashboard Nav -->

    <?php if ($NEW_STUDENTS_ADD_FLAG=="Y") { ?>
      <li class="nav-item">
          
                <form action='index.php' method='post'>
                <input type="hidden" name='o' value='newstudent'>
                <input type="hidden" name="mid" value="new">
                <button type="submit" class="nav-link collapsed" style="border:none"><i class="fa fa-user"></i><span>Add New Student</span></button>
                </form>
      </li>
      <?php } ?>
      
    <?php if ($NEW_STUDENTS_FLAG=="Y") { ?>
      <li class="nav-item">
          
                <form action='index.php' method='post'>
                <input type="hidden" name='o' value='applied_student'>
                <button type="submit" class="nav-link collapsed" style="border:none"><i class="fa fa-users"></i><span>Students List</span></button>
                </form>
      </li>
      <?php } ?>
      

    <?php if ($NEW_STUDENTS_FLAG=="Y") { ?>
    
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
          <i class="fa fa-file"></i><span>Application Status</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
              
                <form action='index.php' method='post'>
                <input type="hidden" name='o' value='counselling'>
                <button type="submit" class="nav-link collapsed" style="border:none; background:transparent;align:center;"><span style="font-size:12px;float:right;">Counselling</span></button>
                </form>
                
          </li>
          <li>
              
                <form action='index.php' method='post'>
                <input type="hidden" name='o' value='offerprocessing'>
                <button type="submit" class="nav-link collapsed" style="border:none; background:transparent;"><span style="font-size:12px;">Offer Processing</span></button>
                </form>
                
          </li>
          <li>
              
                <form action='index.php' method='post'>
                <input type="hidden" name='o' value='gteprocessing'>
                <button type="submit" class="nav-link collapsed" style="border:none; background:transparent;"><span style="font-size:12px;">GTE Processing</span></button>
                </form>
                
          </li>
          <li>
              
                <form action='index.php' method='post'>
                <input type="hidden" name='o' value='coeprocessing'>
                <button type="submit" class="nav-link collapsed" style="border:none; background:transparent;"><span style="font-size:12px;">COE Processing</span></button>
                </form>
                
          </li>
          <li>
              
                <form action='index.php' method='post'>
                <input type="hidden" name='o' value='biometricmedical'>
                <button type="submit" class="nav-link collapsed" style="border:none; background:transparent;"><span style="font-size:12px;">Biometric/Medical</span></button>
                </form>
                
          </li>
          <li>
              
                <form action='index.php' method='post'>
                <input type="hidden" name='o' value='visaprocessing'>
                <button type="submit" class="nav-link collapsed" style="border:none; background:transparent;"><span style="font-size:12px;">Visa Processing</span></button>
                </form>
                
          </li>
          <li>
              
                <form action='index.php' method='post'>
                <input type="hidden" name='o' value='visagranted'>
                <button type="submit" class="nav-link collapsed" style="border:none; background:transparent;"><span style="font-size:12px;">Visa Granted</span></button>
                </form>
                
          </li>
          <li>
              
                <form action='index.php' method='post'>
                <input type="hidden" name='o' value='visarefused'>
                <button type="submit" class="nav-link collapsed" style="border:none; background:transparent;"><span style="font-size:12px;">Visa Refused</span></button>
                </form>
                
          </li>
        </ul>
      </li><!-- End Icons Nav -->
      
      <?php } ?>

    <?php if ($STAFFS_FLAG=="Y") { ?>
      <li class="nav-item">
          
                <form action='index.php' method='post'>
                <input type="hidden" name='o' value='staffs'>
                <button type="submit" class="nav-link collapsed" style="border:none; background:transparent;"><i class="fa fa-users"></i><span>Staffs</span></button>
                </form>
                
      </li>
    <?php } ?>

    <?php if ($USERS_FLAG=="Y") { ?>
      <li class="nav-item">
          
                <form action='index.php' method='post'>
                <input type="hidden" name='o' value='users'>
                <button type="submit" class="nav-link collapsed" style="border:none; background:transparent;"><i class="fa fa-users"></i><span>Users</span></button>
                </form>
                
      </li>
    <?php } ?>
      
      
    <?php if ($DESIGNATION_FLAG=="Y") { ?>
      <li class="nav-item">
          
                <form action='index.php' method='post'>
                <input type="hidden" name='o' value='designation.management'>
                <button type="submit" class="nav-link collapsed" style="border:none; background:transparent;"><i class="fa fa-list"></i><span>Designations</span></button>
                </form>
                
      </li>
    <?php } ?>
    
<!--
      <li class="nav-item">
      
                <form action='index.php' method='post'>
                <input type="hidden" name='o' value='feedback'>
                <button type="submit" class="nav-link collapsed" style="border:none; background:transparent;"><i class="bi bi-question-circle"></i><span>Feedbacks</span></button>
                </form>
                
      </li>
      -->

    </ul>

  </aside><!-- End Sidebar-->


  
