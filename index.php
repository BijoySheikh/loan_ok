<?php
session_start();
?>




<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Login</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">

                            <div class="col-sm-12">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                                    </div>
                                    <form class="user" id="myForm" action="" method="post">
                                        <div class="form-group">
                                            <input type="text" name="name" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter Email Address...">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password">
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label" for="customCheck">Remember Me</label>
                                            </div>
                                        </div>
                                        <input type="submit" name="submit"  class="btn btn-primary btn-user btn-block">
                      
                    </a>

                    <?php

                    include('action/sql_config.php');

                    if (isset($_POST["name"])) {
                      $name = $_POST["name"];
                      $password = $_POST["password"];
                      
                  $sql = "SELECT * FROM `users` where name='$name'";
                  $result = $conn->query($sql); 
                  
          
                    }
                   


                    if ($result->num_rows > 0) {
                      // output data of each row
                      while($row = $result->fetch_assoc()) {
                         if ($row["name"]) {
                          $user_name= $row["name"];
                          $user_password= $row["password"];
                          
                  if ($name == $user_name && $password == $user_password) {
                    // Set session variables
                    $_SESSION["name"] = $name;
                    $_SESSION["password"] = $password;  
                    header('location: front-page.php');
                }
                else{
                  echo "<h6 class='text-danger mt-3 text-center' >আপনার নাম অথবা পাসওয়ার্ড ভূল আছে</h6>";
                  session_unset();
                
                }
                         }else {
                          echo "false";
                         }
                      }
                  } else {
                      echo "User not Found!";
                  }

  

                if (isset($_POST["submit"])) {

                if (empty($name && $password)) {
                  echo "<h6 class='text-danger mt-3 text-center' >ইউজার নেম এবং পাসওয়ার্ড প্রবেশ করান</h6>";
                  session_unset();
                } else {
                  
                  
                 
                }

            
                

                }


                   
                    
                    ?>


                <script>
                function myFunction() {
                  document.getElementById("myForm").reset();
                }
                </script>
                
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="forgot-password.php">পাসওয়ার্ড ভুলে গেছেন ?</a>
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
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>
< </html>