<!-- templates/login.php -->

<?php
 session_start();
 $error = false;
 
 if( isset($_POST['btn-login']) ) { 
  
  // prevent sql injections/ clear user invalid inputs
  $email = trim($_POST['email']);
  $email = strip_tags($email);
  $email = htmlspecialchars($email);
  
  $pass = trim($_POST['pass']);
  $pass = strip_tags($pass);
  $pass = htmlspecialchars($pass);
  // prevent sql injections / clear user invalid inputs
  
  if(empty($email)){
   $error = true;
   $emailError = "Please enter your email address.";
  } else if ( !filter_var($email,FILTER_VALIDATE_EMAIL) ) {
   $error = true;
   $emailError = "Please enter valid email address.";
  }
  
  if(empty($pass)){
   $error = true;
   $passError = "Please enter your password.";
  }
  
  // if there's no error, continue to login
  if (!$error) {
   
   $password = hash('sha256', $pass); // password hashing using SHA256

   $conn = open_database_connection();

   $result = mysqli_query($conn, "SELECT userId, userName, userPass FROM users WHERE userEmail='$email'");

   $row = mysqli_fetch_array($result);


   $count = mysqli_num_rows($result); // if uname/pass correct it returns must be 1 row
   
   if( $count == 1 && $row['userPass'] == $password ) {
    $_SESSION['user'] = $row['userId'];
    $_SESSION['userName'] = $row['userName'];
    echo "logged in as " . $_SESSION['userName'];
     header("Location: /mvc/index");
   } else {
    $errMSG = "Incorrect Credentials, Try again...";
   }
    
  }
  
 }
?>



<?php $title = "Please Sign In" ?>

<?php ob_start() ?>
 <div id="login-form">
    <form method="post" action="/mvc/login" autocomplete="off"> <!-- PHP add form functionality here -->
      <div class="col-md-12">
        <div class="form-group">
          <h2>Sign in</h2><a href="/mvc/index">or continue without signing in</a>
        </div> <!-- /form-group -->
        <div class="form-group">
          <hr />
        </div> <!-- /form-group -->
        <?php
   if ( isset($errMSG) ) {
    
    ?>
    <div class="form-group">
             <div class="alert alert-danger">
    <span class="glyphicon glyphicon-info-sign"></span> <?php echo $errMSG; ?>
      </div>
        </div>
                <?php
   }
   ?>
        <!-- PHP $errMSG will diplay here -->
        
        <div class="form-group">
          <div class="input-group">
            <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
            <input type="email" name="email" class="form-control" placeholder="Enter email" value="<?php echo $email; ?>"  maxlength="40" />
          </div> <!-- /input-group -->
          <span class="text-danger"><?php echo $emailError; ?></span>
          <!-- PHP email error text goes here -->
        </div> <!-- /form-group -->
        
        <div class="form-group">
          <div class="input-group">
            <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
            <input type="password" name="pass" class="form-control" placeholder="Enter password" maxlength="15" />
          </div> <!-- /input-group -->
          <span class="text-danger"><?php echo $passError; ?></span>
          <!-- PHP password error text goes here -->
        </div> <!-- /form-group -->        
        <div class="form-group">
          <hr />
        </div> <!-- /form-group -->
        <div class="form-group">
          <a href="register.php"class="btn pull-right">Register</a>
        </div> <!-- /form-group -->
        <div class="form-group">
          <button type="submit" class="btn pull-right btn-success" name="btn-login">Sign In</button>
        </div> <!-- /form-group -->
      </div> <!-- /col-md-12 -->
    </form>
  </div> <!-- /login-form -->


<?php $content = ob_get_clean() ?>

<?php include "layout.php" ?>