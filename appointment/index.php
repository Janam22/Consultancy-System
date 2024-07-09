<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Counselling | Register</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


</head>

<body>


      <section class="section register min-vh-80 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-10 col-md-10 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4">
                <a href="https://appointment.sen.edu.np" class="logo d-flex align-items-center w-auto">
                  <img src="assets/img/logo.png" width="150" >
                  <span class="d-none d-lg-block">Sunrise Education Network</span>
                </a>
              </div><!-- End Logo -->
              
                <p>G.P.O. Box: 2438, Padmodaya Mode, Kalyan Complex, Newplaza Chowk, Putalisadak, Kahmandu, Nepal <br><center> Tel.: +977-1-4230803, 4245122, E-mail: sedu.nepal@gmail.com / info@sen.edu.np</center></p>
                
                <h5><b>Study Abroad Counselling Form</b></h5>

              <!-- Multi Columns Form -->
              <form method="post" action="counselling_post.php">
                  
          <div class="card mb-6">
            <div class="card-body">
              <h5 class="card-title"><center>PERSONAL DETAILS</center></h5>
                <div class="row g-3">
                  
                <div class="col-md-4">
                  <label for="inputName5" class="form-label">Name <span style="color:red;">*</span></label>
                  <input type="text" class="form-control" name="name" required>
                </div>
                
                <div class="col-md-4">
                  <label for="inputCity" class="form-label">Gender <span style="color:red;">*</span></label>
                    <select class="form-select" name="gender" required>
                      <option value="M">Male</option>
                      <option value="F">Female</option>
                    </select>
                </div>
                
                <div class="col-md-4">
                  <label for="inputZip" class="form-label">Date of Birth <span style="color:red;">*</span></label>
                  <input type="date" class="form-control" name="dob" required>
                </div>
                
                <div class="col-md-4">
                  <label for="inputAddress5" class="form-label">Address <span style="color:red;">*</span></label>
                  <input type="text" class="form-control" name="address" required>
                </div>
                
                <div class="col-md-4">
                  <label for="inputPassword5" class="form-label">Phone Number <span style="color:red;">*</span></label>
                  <input type="phone" class="form-control" name="phone" required>
                </div>
                
                <div class="col-md-4">
                  <label for="inputEmail5" class="form-label">Email <span style="color:red;">*</span></label>
                  <input type="email" class="form-control" name="email" required>
                </div>
                
                <div class="col-md-4">
                  <label for="inputCity" class="form-label">Marital Status <span style="color:red;">*</span></label>
                    <select class="form-select" name="relationship_status" required>
                      <option value="S">Single</option>
                      <option value="M">Married</option>
                    </select>
                </div>
                
                
                </div>
                

            </div>
          </div>
          
          <div class="card mb-6">
            <div class="card-body">
              <h5 class="card-title"><center>HOW DO YOU CAME TO KNOW?</center></h5>
                <div class="row g-3">
                  
                <div class="col-md-12">
                  <label for="inputName5" class="form-label">How do you came to know?</label>
                  <input type="text" class="form-control" name="came_to_know">
                </div>
                
                </div>
                

            </div>
          </div>
          
          
          <div class="card mb-6">
            <div class="card-body">
              <h5 class="card-title"><center>ACADEMIC QUALIFICATION</center></h5>
                <div class="row g-3">
                  
                <div class="col-md-3">
                  <label for="inputName5" class="form-label">Name of Institution <span style="color:red;">*</span></label>
                  <input type="text" class="form-control" name="institution1" required>
                </div>
                
                <div class="col-md-3">
                  <label for="inputName5" class="form-label">Completed Year <span style="color:red;">*</span></label>
                  <input type="text" class="form-control" name="completed_year1" required>
                </div>
                
                <div class="col-md-3">
                  <label for="inputName5" class="form-label">Majors</label>
                  <input type="text" class="form-control" name="majors1">
                </div>
                
                <div class="col-md-3">
                  <label for="inputName5" class="form-label">Division/GPA <span style="color:red;">*</span></label>
                  <input type="text" class="form-control" name="division_gpa1" required>
                </div>
                
                <center>
                <div class="col-md-3">
                  <label for="inputName5" class="form-label">Add Another Field? </label>
                  <input type="checkbox" name="add_more_field" id="addfield1" aria-label="State" onchange="addfield1Select();" >
                </div>
                </center>
                
<script>
  function addfield1Select() {
    var isChecked = document.getElementById("addfield1").checked;
    if (isChecked) {
      $('#institution2').show();
      $('#completed_year2').show();
      $('#majors2').show();
      $('#division_gpa2').show();
      $('#addfield2').show();
    } else {
      $('#institution2').hide();
      $('#completed_year2').hide();
      $('#majors2').hide();
      $('#division_gpa2').hide();
      $('#addfield2').hide();
    }
  }
</script>
                
                <div class="col-md-3" id="institution2" style="display: none;">
                  <label for="inputName5" class="form-label">Name of Institution </label>
                  <input type="text" class="form-control" name="institution2">
                </div>
                
                <div class="col-md-3" id="completed_year2" style="display: none;">
                  <label for="inputName5" class="form-label">Completed Year </label>
                  <input type="text" class="form-control" name="completed_year2">
                </div>
                
                <div class="col-md-3" id="majors2" style="display: none;">
                  <label for="inputName5" class="form-label">Majors </label>
                  <input type="text" class="form-control" name="majors2">
                </div>
                
                <div class="col-md-3" id="division_gpa2" style="display: none;">
                  <label for="inputName5" class="form-label">Division/GPA </label>
                  <input type="text" class="form-control" name="division_gpa2">
                </div>
                
                
                <center>
                <div class="col-md-3" id="addfield2" style="display: none;">
                  <label for="inputName5" class="form-label">Add Another Field? </label>
                  <input type="checkbox" name="add_more_field" id="add_field2" aria-label="State" onchange="addfield2Select();" >
                </div>
                </center>
                
<script>
  function addfield2Select() {
    var isChecked = document.getElementById("add_field2").checked;
    if (isChecked) {
      $('#institution3').show();
      $('#completed_year3').show();
      $('#majors3').show();
      $('#division_gpa3').show();
    } else {
      $('#institution3').hide();
      $('#completed_year3').hide();
      $('#majors3').hide();
      $('#division_gpa3').hide();
    }
  }
</script>
                
                <div class="col-md-3" id="institution3" style="display: none;">
                  <label for="inputName5" class="form-label">Name of Institution </label>
                  <input type="text" class="form-control" name="institution3">
                </div>
                
                <div class="col-md-3" id="completed_year3" style="display: none;">
                  <label for="inputName5" class="form-label">Completed Year </label>
                  <input type="text" class="form-control" name="completed_year3">
                </div>
                
                <div class="col-md-3" id="majors3" style="display: none;">
                  <label for="inputName5" class="form-label">Majors </label>
                  <input type="text" class="form-control" name="majors3">
                </div>
                
                <div class="col-md-3" id="division_gpa3" style="display: none;">
                  <label for="inputName5" class="form-label">Division/GPA </label>
                  <input type="text" class="form-control" name="division_gpa3">
                </div>
                
                </div>
                

            </div>
          </div>
          
            <div class="card mb-6">
            <div class="card-body">
              <h5 class="card-title"><center>ENGLISH LANGUAGE PROFICIENCY</center></h5>
                <div class="row g-3">
                  
                <div class="col-md-6">
                  <label for="inputName5" class="form-label">IELTS/TOEFL/PTE <span style="color:red;">*</span></label>
                    <select class="form-select" id="english" aria-label="State" onchange="otherSelect();" name="english_test" required>
                      <option value="I">IELTS</option>
                      <option value="P">PTE</option>
                      <option value="T">TOEFL</option>
                      <option value="NG">Test Not Given</option>
                    </select>
                </div>
        
        <script type="text/javascript">
        function otherSelect() {
        var selectBox = document.getElementById("english");
        var selectedValue = selectBox.options[selectBox.selectedIndex].value;
        if (selectedValue=="NG"){
        $('#overall_score').hide();
        $('#listening').hide();
        $('#reading').hide();
        $('#writing').hide();
        $('#speaking').hide();
        }
        else {
        $('#overall_score').show();
        $('#listening').show();
        $('#reading').show();
        $('#writing').show();
        $('#speaking').show();
        }
        }
       </script>

                
                <div class="col-md-6" id="overall_score">
                  <label for="inputName5" class="form-label">Overall Score</label>
                  <input type="text" class="form-control" name="overall_score">
                </div>
                
                <div class="col-md-3" id="listening">
                  <label for="inputName5" class="form-label">Listening</label>
                  <input type="text" class="form-control" name="listening">
                </div>
                
                <div class="col-md-3" id="reading">
                  <label for="inputName5" class="form-label">Reading</label>
                  <input type="text" class="form-control" name="reading">
                </div>
                
                <div class="col-md-3" id="writing">
                  <label for="inputName5" class="form-label">Writing</label>
                  <input type="text" class="form-control" name="writing">
                </div>
                
                <div class="col-md-3" id="speaking">
                  <label for="inputName5" class="form-label">Speaking</label>
                  <input type="text" class="form-control" name="speaking">
                </div>
                
                
                </div>
                

            </div>
          </div>
          
          <div class="card mb-6">
            <div class="card-body">
              <h5 class="card-title"><center>DESIRE COUNTRY OF STUDY AND COURSE</center></h5>
                <div class="row g-3">
                  
                <div class="col-md-6">
                  <label for="inputName5" class="form-label">Country <span style="color:red;">*</span></label>
                  <?php $TBID = "country"; include("libraries/country_selection_box.php"); ?>
                </div>
                
                <div class="col-md-6">
                  <label for="inputName5" class="form-label">Course <span style="color:red;">*</span></label>
                  <input type="text" class="form-control" name="course" required>
                </div>
                
                <div class="col-md-6">
                  <label for="inputName5" class="form-label">Have you ever applied for student visa? <span style="color:red;">*</span></label>
                    <select class="form-select" id="applied_before" aria-label="State" onchange="appliedSelect();" name="applied_before" required>
                      <option value="Y">Yes</option>
                      <option value="N">No</option>
                    </select>
                </div>
                
        <script type="text/javascript">
        function appliedSelect() {
        var selectBox = document.getElementById("applied_before");
        var selectedValue = selectBox.options[selectBox.selectedIndex].value;
        if (selectedValue=="N"){
        $('#where_when').hide();
        }
        else {
        $('#where_when').show();
        }
        }
       </script>
                
                <div class="col-md-6" id="where_when">
                  <label for="inputName5" class="form-label">Where/When</label>
                  <input type="text" class="form-control" name="where_when">
                </div>
                
                </div>
                

            </div>
          </div>
          
          
          <div class="card mb-6">
            <div class="card-body">
              <h5 class="card-title"><center>WORK EXPERIENCE IF ANY</center></h5>
                <div class="row g-3">
                  
                <div class="col-md-12">
                  <label for="inputName5" class="form-label">Work Experience if any</label>
                  <input type="text" class="form-control" name="work_experience">
                </div>
                
                </div>
                

            </div>
          </div>
          
          <div class="card mb-6">
            <div class="card-body">
              <h5 class="card-title"><center>Declaration</center></h5>
                <div class="row g-3">
                  <center>
                <div class="col-md-12">
                  <label for="inputName5" class="form-label">I hereby declare that above informations are true and accurate. </label>
                </div>
                
                <div class="col-md-8">
                <div class="text-center">
                  <input type="submit" class="btn btn-success" value="Subit Information for Counselling">
                </div>
                </div></center>
                                
                </div>
                

            </div>
          </div>
          

              </form><!-- End Multi Columns Form -->

        </div>


            </div>
          </div>
        </div>
    </section>



  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>