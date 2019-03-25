<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Orders - Cupcake Confections LLC</title>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/master.css">
  </head>

  <body>

    <?php
    include 'backend/navbar.php';
    ?>

    <br>
    <div class="container-fluid shadow-lg p-3 mb-5 bg-light rounded">
      <?php
        if($GLOBALS['ls']->isLoggedIn() == false){
          echo '<h5>To view your current/past orders please log in.</h5>';
          die();
        }
      ?>

      <table class="table">
        <thead>
          <tr>
            <th scope="col">Order #</th>
            <th scope="col">Description</th>
            <th scope="col">Quantity</th>
            <th scope="col">Price</th>
            <th scope="col">View Order</th>
          </tr>
        </thead>
        <tbody>
          <?php
          include 'backend/db.php';
          $dbConn = new db;
          $sql = "SELECT * FROM orderTest";
          $result = $dbConn->queryDatabase($sql);

          if ($result->num_rows > 0) {
            $counter = 0;
            while($row = $result->fetch_assoc()) {
              echo '<tr>
                      <th scope="row">'.$row["order_id"].'</th>
                      <td>'.$row["description"].'</td>
                      <td>'.$row["quantity"].'</td>
                      <td>$'.$row["price"].'</td>
                      <td><a class="btn btn-secondary" href="#">More Details</a></td>
                    </tr>';
            }
          }
          ?>

        </tbody>
      </table>

    </div>

  </body>
</html>
