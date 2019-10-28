<?php
include "sql_config.php";
$id = $_GET['id'];
$sql = "SELECT * FROM all_member_form_data WHERE id = $id";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Responsive sidebar template with sliding effect and dropdown menu based on bootstrap 3">
    <title>Sidebar template
    </title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css" rel="stylesheet" id="bootstrap-css">
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.5.7/angular.min.js">
    </script>
    <link href="css/style.css" rel="stylesheet">   
    <link href="https://fonts.maateen.me/solaiman-lipi/font.css" rel="stylesheet">
    <style>
      .header-top-bg{
        background: #004d66;
      }
      body{
        font-family: 'SolaimanLipi', sans-serif !important;
        padding:0;
        margin:0;
      }
    </style>
  </head>
  <body>
    <h2  class="text-white header-top-bg text-center pt-1 pb-1">সদস্য
    </h2>
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark border-bottom">
        <a href="running_member.php" class="btn btn-sm btn-secondary ml-2">
          <span>
            <i class="fa fa-tachometer-alt">
            </i>
          </span> বর্তমান সদস্য
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon">
          </span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <a href="running_member.php" class="btn btn-sm btn-secondary ml-2">বর্তমান সদস্য
            </a>
            <a href="running_member.php" class="btn btn-sm btn-secondary ml-2">বর্তমান সদস্য
            </a>
            <a href="add_member.php" class="btn btn-sm btn-info ml-2">সদস্য যোগ করুন
            </a>
            <a href="add_member.php" class="btn btn-sm btn-info ml-2">সদস্য যোগ করুন
            </a>
            <a href="add_member.php" class="btn btn-sm btn-info ml-2">সদস্য যোগ করুন
            </a>
          </ul>
        </div>
      </nav>
    </div>
    <div class="container mt-3">
      <div class="row">
        <div class="col-sm-3">
          <div class="text-center">
            <?php
        echo "<div id='img_div'>";
        echo "<img alt='image of " . $row["m_name"] . " '  class='img-thumbnail rounded' src='images/" . $row['image'] . "' >";
        echo "</div>";
?>
          </div>
        </div>
        <div class="col-sm-9">
          <div class="row">
            <div class="col-sm-6">
              <h3 class="mb-3">নাম: 
                <span class="text-danger">
                  <?php echo $row["m_name"]; ?>
                </span>
              </h3>
              <p>সদস্য আই.ডি :  
                <?php echo $row["id"]; ?> 
              </p>
              <p>পিতার নাম: 
                <?php echo $row["f_name"]; ?> 
              </p>
              <p>মোবাইল নং: 
                <?php echo $row["phone_no"]; ?>
              </p>
            </div>
            <div class="col-sm-6">
              <h5>ঋণের পরিমাণ: 
                <?php echo $row["loan_amount"]; ?> /- 
              </h5> 
              <p>মূনাফার পরিমাণ: 
                <?php echo $row["profit_amount"]; ?> /- 
              </p> 
              <hr>
              <p>মোট:  
                <?php echo $row["total_amount"]; ?> /- 
              </p> 
            </div>
          </div>
        </div>
      </div>
      <hr>
    </div>
    <?php
        $identy = $row["id"];
    }
} else {
    echo "0 results";
}
?>
    <!-- topbar -->
    <div class="container bg-Secondary">
      <div class="row">
        <div class="col-md-12">
          <div class="row mb-3 bg-dark">
            <div class="col-md-3 col-sm-12 text-white mt-3 mb-2">
              <h5 >কিস্তি আদায় :
                <?php
$sql = "SELECT * FROM member_premier_data where test=$identy";
if ($result = mysqli_query($conn, $sql)) {
    // Return the number of rows in result set
    $rowcount = mysqli_num_rows($result);
    printf($rowcount);
    // Free result set
    mysqli_free_result($result);
}
?> টি
              </h5>   
            </div>
            <div class="col-md-3 col-sm-12 text-white mt-3 mb-2">
              <h5>পরিশোধকৃত সদস্য : 
              </h5>
            </div>
            <div class="col-md-3 col-sm-12 text-white mt-3 mb-2">
              <h5>সর্বমোট প্রদান :  
              </h5>
            </div>
            <div class="col-md-3 col-sm-12 text-white">
              <div class="text-right mt-2">
                <button type="button"  class="btn btn-primary" data-toggle="modal" data-target="#myModal" data-whatever="@getbootstrap">Open modal for @getbootstrap
                </button>
              </div>
            </div>
          </div>
          <table class="table table-striped table-dark table-bordered" id="datatable">
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">New message
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;
                      </span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <form  action="premier_data_insert.php" method="post">
                      <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Recipient:
                        </label>
                        <input type="text" class="form-control" name="first_name" id="recipient-name">
                      </div>
                      <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Recipient:
                        </label>
                        <input type="text" class="form-control" name="last_name" id="recipient-name">
                      </div>
                      <div class="form-group">
                        <input type="hidden" name="test" value="<?php echo $identy; ?>" class="form-control" id="recipient-name">
                      </div>
                      <div class="form-group">
                        <label for="message-text" class="col-form-label">Message:
                        </label>
                        <textarea class="form-control" id="message-text">
                        </textarea>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close
                        </button>
                        <button type="submit" value="submit" name="submit" onclick="myFunction()"  class="btn btn-primary">Send message
                        </button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <?php
$sql = "SELECT * FROM member_premier_data  where test=$identy";
$res = $conn->query($sql);
if ($res->num_rows > 0) {
?>  
            <thead class="text-center">
              <tr>
                <th>তারিখ
                </th>
                <th>নাম
                </th>
                <th>পিতার নাম
                </th>
                <th>ঋণের পরিমান
                </th>
                <th>মোট টাকা
                </th>
                <th>বিস্তারিত
                </th>
              </tr>
            </thead>
            <?php
    // output data of each row
    while ($row = $res->fetch_assoc()) {
        echo "<tr><td> " . $row["first_name"] . " </td>
<td> " . $row["last_name"] . "</td>
<td> " . $row["test"] . "</td>
<td> " . $row["id"] . "</td>
<td> " . $row["value"] . "</td>
<td> " . $row["value"] . "</td>
<td> " . $row["value"] . "</td>
<td class='text-right'><a class='btn btn-danger btn-sm' id='alert' href='single_view.php?id=" . $identy . "'><i class='fas fa-trash-alt'></i></i></a>
<a class='btn btn-warning btn-sm btn-delete' value='1' name='actiondelete' Onclick='return ConfirmDelete();' id='alert'  href='premier_data_delete.php?id=" . $row["id"] . "'><i class='fas fa-times'></i></a></td></tr>";
    }
} else {
    echo "no result for this member";
}
$conn->close();
?>
          </table>
        </div>
      </div>
    </div>
    </div>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
  </script>
  <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js">
  </script>
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8">
  </script> 
  <script src="https://cdn.jsdelivr.net/npm/promise-polyfill">
  </script>
  <script src="js/main.js">
  </script>
  <script src="js/angular.js">
  </script>
  <script src="js/sweetalert2.all.min.js" >
  </script>
  </body>
</html> 

