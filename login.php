<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
</head>
<body>
    
<?php 
    session_start(); 
    error_reporting(0);
    include("libraries/connect.php");
    
    // Check if remember cookies exist and populate the email field
    $remembered_email = isset($_COOKIE['remember_email']) ? $_COOKIE['remember_email'] : '';
    $remembered_password = isset($_COOKIE['remember_password']) ? $_COOKIE['remember_password'] : '';
                
    if ((isset($_COOKIE['user_id_cookie'])) && (isset($_COOKIE['session_id_cookie']))) {
        $_SESSION['EMAIL'] = $_COOKIE['user_id_cookie'];
        $_SESSION['SESSION_ID'] = $_COOKIE['session_id_cookie'];
        header("Location: home/index.php");
        exit;
    }

    // Check if the user is already logged in
    if ((isset($_SESSION['EMAIL'])) && (isset($_SESSION['SESSION_ID']))) {
        header("Location: home/index.php");
        exit;
    }

if (isset($_POST['BTN_SUBMIT'])) {
    
     $EMAIL = (isset($_POST['email']) ? $_POST['email'] : null);
     $PASSWORD = (isset($_POST['password']) ? $_POST['password'] : null);
     $PIN = (isset($_POST['password']) ? $_POST['password'] : null);
     
     $PIN = md5($PIN); 
     
     $QRY = "SELECT * FROM users WHERE email='$EMAIL' and password='$PIN' limit 1";

     $rs = mysqli_query($connect, $QRY);
     
        if ($rs){
            $rows = mysqli_num_rows($rs);
            
            if ($rows > 0) {
              while ($found_user = mysqli_fetch_assoc($rs)) {
                  
                $STATUS_FLAG = $found_user['status_flag'];
                if ($STATUS_FLAG=='N') {
                        echo "<script> alert(\"Account is not verified yet. Contact to your Administrator.\"); </script>";
                        echo "<script>window.location.href='index.php';</script>";
                } else {
                        $_SESSION['EMAIL']  =  $found_user['email'];
                        $ACTIVITY_EMAIL = $_SESSION['EMAIL'];
 	                    $ServerID = gethostbyaddr($_SERVER['REMOTE_ADDR']);
                        date_default_timezone_set('Asia/Kathmandu');
	                    $CREATED_DATE = date('Y-m-d H:i:s');
	                    $SessionID = date('Ymd.His');
	                    $STATUS = "Online";
	                    
                // Update activity timestamp on each page load
                $_SESSION['last_activity'] = time();
	                    
                        $_SESSION['SESSION_ID']  =  $SessionID;
	                    
 	                    $INSERT = "INSERT INTO session_log(session_id, server_id, user_id, date, status) VALUES('$SessionID', '$ServerID', '$ACTIVITY_EMAIL', '$CREATED_DATE', '$STATUS')"; 
	                    $rsession = mysqli_query($connect, $INSERT);
	                    
	                    if ($_SESSION['EMAIL'] > 0) {
	                        
                        setcookie('user_id_cookie', $ACTIVITY_EMAIL, time() + (86400 * 365), "/"); // Cookie expires in 365 days
                        setcookie('session_id_cookie', $SessionID, time() + (86400 * 365), "/"); // Cookie expires in 365 days
    
                                // Check if "Remember Me" is selected
                                if ((isset($_POST['remember_me'])) =='on') {
                                // Set cookies to remember email and password (or a token)
                                    setcookie('remember_email', $found_user['email'], time() + 3600 * 24 * 7, '/');
                                    setcookie('remember_password', $PASSWORD, time() + 3600 * 24 * 7, '/');
                                } else {
                                    
	                                setcookie("remember_email","");
	                                setcookie("remember_password","");
                                }
                        
	                        header('Location: home/index.php');
                            exit;
	                    }
	    
                }
              }
            } else {

              echo "<script> alert(\"Account Not Found on this details.\"); </script>";
                echo "<script>window.location.href='index.php';</script>";

            }
        }
}


                
?>
    
            <section class="section register min-vh-80 d-flex flex-column align-items-center justify-content-center py-4">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">
                            
                            <div class="d-flex justify-content-center py-4">
                                <a href="index.php" class="logo d-flex align-items-center w-auto">
                                    <img src="assets/img/logo.png" alt="">
                                    <span class="d-none d-lg-block">Sunrise Education Network</span>
                                </a>
                            </div><!-- End Logo -->
                                     
                            <div class="card mb-6">
                                <div class="card-body">
                                    <div class="pt-4 pb-2">
                                        <h5 class="card-title text-center pb-0 fs-4">Login to Your Account</h5>
                                        <p class="text-center small">Enter your email & password to login</p>
                                    </div>
                                        
	               <form class="row g-3" method="POST" action="login.php">
                                        <div class="col-12">
                                            <label for="email" class="form-label">Email</label>
                                                <input type="text" name="email" class="form-control" value="<?php print $remembered_email; ?>" id="email" required>
                                        </div>
                                        
                                        <div class="col-12">
                                            <label for="password" class="form-label">Password</label>
                                            <input type="password" name="password" class="form-control" id="password" value="<?php print $remembered_password; ?>" placeholder="Hint: hit on your head :)" required>
                                        </div>
                                        
        <div class="col-12">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="remember_me" id="remember_me" checked>
                <label class="form-check-label" for="remember_me">
                    Remember Me
                </label>
            </div>
        </div>
                               
                    <div class="col-12">
                      <button type="submit" name='BTN_SUBMIT' id="BTN_SUBMIT" class="btn btn-primary w-100">Login</button>
                    </div>
 	            </form>
                    
	  <form method="POST" action="index.php" class="row g-3 needs-validation">
                    <div class="col-12">
                        <button type="submit" name='BTN_CANCEL' id="BTN_CANCEL" class="btn btn-default w-100">Cancel</button>
                    </div>
	  </form>
	  
                                        
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


</body>
</html>
