<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Manage - Cupcake Confections LLC</title>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/master.css">
    <link rel="icon" href="img/logoBlack.svg" type="image/svg" sizes="any">

    <?php include 'loadP5.php'; ?>

  </head>

  <body>

    <?php
      // if someone loads the manage page and is not logged in dont let them do anything
      if(!isset($_COOKIE["emp"])){
        echo "You are not logged in as a manager!";
        die();
      }
      include 'manageTopNav.php';

    ?>

    <br>

    <div class="container-fluid bg-dark rounded" style="max-width:95% !important;">
      <br>
      <div class="row content">
        <div class="col-sm-2 sidenav">
          <?php include 'manageSideNav.php'; ?>
        </div>

        <div class="col-sm-10">
          <div class="container-fluid px-0 h-100 bg-light rounded" style="max-width:100% !important;">
            <div class="row">
              <div class="col">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th scope="col">Inventory ID #</th>
                      <th scope="col">Name</th>
                      <th scope="col">Description</th>
                      <th scope="col">Quantity On Hand</th>
                      <th scope="col">Reorder Quantity</th>
                      <th scope="col">Supplier ID #</th>
                      <th scope="col">Price</th>
                      <th scope="col"></th> <!--reorder-->
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    include '../backend/db.php';

                    $db = new db;
                    $sql="SELECT * FROM invTest";
                    $result = $db->queryDatabase($sql);


                    if ($result->num_rows > 0) {
                      while($row = $result->fetch_assoc()) {
                        echo '
                        <tr>
                          <td>'.$row["inv_id"].'</td>
                          <td>'.$row["name"].'</td>
                          <td>'.$row["description"].'</td>
                          <td>'.$row["quantity_on_hand"]. " " . $row["weight_unit"] .'</td>
                          <td>'.$row["quantity_reorder"]. " " . $row["weight_unit"] .'</td>
                          <td>'.$row["supplier_id"].'</td>
                          <td>$'.$row["price"]. " " . $row["weight_unit"] .'</td>
                          <td>
                            <div class="dropdown">
                              <button class="btn btn-secondary btn-sm dropdown-toggle" id="reorder-action" data-toggle="dropdown">Reorder Action</button>
                              <div class="dropdown-menu">
                                <button class="dropdown-item">Reorder Automatically</button>
                                <button class="dropdown-item">Don\'t Reorder</button>
                                <button class="dropdown-item">Reorder Now</button>
                              </div>
                            </div>
                          </td>
                        </tr>
                        ';
                      }
                    }
                    ?>

                  </tbody>
                </table>
              </div>
            </div>
            </div>
          </div>
        </div>
        <br>
      </div>
  </body>
</html>
