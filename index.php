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
    
  <link href="js/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.css" />
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="https://fonts.maateen.me/solaiman-lipi/font.css" rel="stylesheet">
    <link href="css/jquery-ui.min.css" rel="stylesheet">
    <link href="css/sweetalert2.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/datatables.min.css"/>
    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <style>
      form{
        height: 100%;
      }
      .sidebar_bg{
        background: #000d66;
      }
      .header-top-bg{
        background: #004d66;
      }
      body{
        font-family: 'SolaimanLipi', sans-serif !important;
        padding:0;
        margin:0;
        background: #555  ;
        height:100%;
      }
    </style>
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
                                        <h1 class="h4 text-gray-900 mb-4">স্বাগতম!</h1>
                                    </div>











                                    
 <?php
include ('action/sql_config.php');

if (isset($_POST["submit"]))
{   if (empty($_POST["name"] && $_POST["password"]))
    {
        echo "<h6 class='text-danger mt-3 text-center' >ইউজার নেম এবং পাসওয়ার্ড প্রবেশ করান</h6>";

    }
    else
    {

        $password = $_POST["password"];
        $uname = $_POST["name"];

        $sql = "SELECT * FROM `users` where name='$uname'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0)
        {
            // output data of each row
            while ($row = $result->fetch_assoc())
            {
                $user_name = $row["name"];
                $user_password = $row["password"];
                if ($uname == $user_name && $password == $user_password)
                {
                    echo "its work";
                    $_SESSION["name"] = $user_name;
                    $_SESSION["password"] = $user_password;
                    if(isset($_POST["checked"])) {
                        $cookie_name = $_SESSION["name"];
                        $cookie_value = $_SESSION["password"];
                        setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
                        if(!isset($_COOKIE[$cookie_name])) {
                            echo "Cookie named '" . $cookie_name . "' is not set!";
                        } else {
                            echo " Cookie named '" . $cookie_name . "' is  set!";
                            
                                ?>

                                <script>
                                function myFunction() {
                                    document.getElementById("myForm").reset();
                                }
                              </script>

                              <?php
                                       
                        }
                    }
                    
                }
            }
        }
        else
        {
            echo "<h6 class='text-danger mt-3 text-center' >ইউজার নেম অথবা পাসওয়ার্ড ভুল</h6>";
            session_unset();
        }

        $conn->close();

    }

         

}



?>

    


                                    <form class="user" id="myForm" action="" method="post">
                                        <div class="form-group">
                                            <input type="text" name="name" value="<?php if(isset($cookie_name)){ echo $cookie_name;} ?>" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="ইউজার নেম">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="password" value="<?php if(isset($cookie_name)){ echo $cookie_value;} ?>" class="form-control form-control-user" id="exampleInputPassword" placeholder="পাসওয়ার্ড">
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox"  name="checked" class="custom-control-input" id="customCheck" <?php if(!isset($cookie_name)) { ?>  <?php }else{?> checked <?php } ?> >
                                                <label class="custom-control-label" for="customCheck">মনে রাখুন</label>
                                            </div>
                                        </div>
                                        <input type="submit" name="submit" value="সাবমিট"  class="btn btn-primary btn-user btn-block">

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
<script src="js/vendor/jquery/jquery.min.js"></script>
  <script src="js/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="js/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="js/vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>

</body>
< </html>