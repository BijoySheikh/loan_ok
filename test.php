
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css" rel="stylesheet" id="bootstrap-css">
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.5.7/angular.min.js">
    </script>
    <link href="css/style.css" rel="stylesheet">   
    <link href="https://fonts.maateen.me/solaiman-lipi/font.css" rel="stylesheet">
</head>
<body>
    



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
