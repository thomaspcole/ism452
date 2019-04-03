<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Manage - Cupcake Confections LLC</title>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/master.css">
    <link rel="icon" href="img/logoBlack.svg" type="image/svg" sizes="any">
    <script src="../js/updateProductList.js"></script>

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

    <div hidden class="prodMgtForm container bg-dark rounded" id="addForm">
      <br>
      <div class="card">
        <div class="card-body" id="addContent">
          <h5>Name</h5>
          <input type="text" id="prodName">
          <br>
          <br>
          <h5>Description</h5>
          <input type="text" id="prodDesc">
          <br>
          <br>
          <h5>Price</h5>
          <input type="text" id="prodPrice">
          <br>
          <br>
          <button class="btn btn-danger" id="cancelProd">Cancel</button>
          <button class="btn btn-success" id="saveProd">Save</button>
        </div>
      </div>
      <br>
    </div>

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
                      <th scope="col">Product ID</th>
                      <th scope="col">Name</th>
                      <th scope="col">Price</th>
                      <th scope="col">Viewable</th>
                      <th scope="col">Remove Item</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                      include '../backend/db.php';
                      $db=new db;
                      $sql="SELECT * FROM productTest";
                      $result = $db->queryDatabase($sql);

                      if ($result->num_rows > 0) {
                        $counter = 0;
                        while($row = $result->fetch_assoc()) {
                          if ($row["is_live"] == true) {
                            $check = "checked";
                            $initial = 1;
                          } else {
                            $check = "";
                            $initial = 0;
                          }

                          echo '
                          <tr>
                            <td>'.$row["prod_id"].'</td>
                            <td>'.$row["name"].'</td>
                            <td>'.$row["price"].'</td>
                            <td>
                              <label class="switch">
                                <input id='.$row["prod_id"].'_'.$initial.' type="checkbox" '.$check.'>
                                <span class="slider round"></span>
                              </label>
                            </td>
                            <td><button class="btn btn-danger removeItemBtn">Remove this item.</button></td>
                          </tr>
                          ';
                        }
                      }

                    ?>
                  </tbody>
                </table>
              </div>
            </div>
            <div class="row">
              <div class="col"></div>
              <div class="col-3">
                <div class="button-group" role="group">
                  <button class="btn btn-primary" id="addItemBtn">Add Product</button>
                  <button class="btn btn-success" id="saveBtn">Save Changes</button>
                </div>
              </div>
            </div>
            <br>
          </div>
        </div>
        <br>
      </div>
      <br>
    </div>
    <br>

  </body>
</html>
