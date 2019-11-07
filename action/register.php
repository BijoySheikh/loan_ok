<?php
session_start();
include('sql_config.php');
include('login.php');



// Start the session
$uname = $_SESSION["name"];
$password = $_SESSION["password"];

if ($uname == $user_name && $password == $user_password) {

   ?>

<!-- ==================================================== -->

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin 2 - Register</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="../css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

  <div class="container">

<div class="row justify-content-md-center"">
  <div class="col-md-6 col-offset-3">
    
  <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
        
          <div class="col-lg-12">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
              </div>
              <form class="user" action="" method="post">
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" name="f_name" class="form-control form-control-user" id="exampleFirstName" placeholder="First Name">
                  </div>
                  <div class="col-sm-6">
                    <input type="text" name="l_name" class="form-control form-control-user" id="exampleLastName" placeholder="Last Name">
                  </div>
                </div>
                <div class="form-group">
                  <input type="email" name="email" class="form-control form-control-user" id="exampleInputEmail" placeholder="Email Address">
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="password" name="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password">
                  </div>
                  <div class="col-sm-6">
                    <input type="password" name="password_r" class="form-control form-control-user" id="exampleRepeatPassword" placeholder="Repeat Password">
                  </div>
                </div>
                <button  name="submit" class="btn btn-primary btn-user btn-block">
                  Register Account
</button>
               
              </form>



              <?php

        include('sql_config.php');

        if (isset($_POST['submit'])) {

          $m_name = mysqli_real_escape_string($conn, $_POST["f_name"]);
          $l_name = mysqli_real_escape_string($conn, $_POST["l_name"]);
          $email = mysqli_real_escape_string($conn, $_POST["email"]);
          $password = mysqli_real_escape_string($conn, $_POST["password"]);
         


          $sql = "INSERT INTO  `users`(name, email, password) VALUES('$m_name', '$email', '$password')";
         

          if ($conn->query($sql) === TRUE) {
           echo "ok"; 
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        
        }
        

        $conn->close();






?>

              <hr>
              <div class="text-center">
                <a class="small" href="forgot-password.html">Forgot Password?</a>
              </div>
              <div class="text-center">
                <a class="small" href="../index.php">Already have an account? Login!</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="../js/vendor/jquery/jquery.min.js"></script>
  <script src="../js/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="../js/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="../js/sb-admin-2.min.js"></script>

</body>

</html>

<!-- ==================================================== -->

   <?php
}else {
   header('location: ../index.php');


}

?>

