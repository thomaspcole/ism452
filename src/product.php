<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Product - Cupcake Confections LLC</title>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/master.css">
    <link rel="icon" href="img/logoBlack.svg" type="image/svg" sizes="any">
    <script src="js/cart.js"></script>
  </head>

  <body>

    <?php
    include 'backend/navbar.php';
    include 'alert.php';
    ?>

    <div class="container shadow-lg p-3 mb-5 bg-light rounded">
      <br>

      <?php
        $prod = $_GET['id'];

        include 'backend/db.php';

        $db = new db;
        $sql="SELECT * FROM productTest WHERE prod_id = " . $prod;
        $result = $db->queryDatabase($sql);


        while($row = $result->fetch_assoc()) {
          echo '
          <div class="row">
            <div class="col-1">
              <a class="btn btn-primary" href="products.php">Back</a>
            </div>
            <div class="col" style="text-align: center">
              <img src="img/CardPlaceholder.png" alt="Product Image">
            </div>
            <div class="col-3" style="text-align: center">
              <h5>Name: '.$row["name"].'</h5>
              <h5>Price: '.$row["price"].'</h5>
              <p>'.$row["description"].'</p>
              <button class="btn btn-primary" onclick="addtoCart('.$prod.')">Add to cart</button>
            </div>
          </div>
          <br>
          ';
        }
      ?>

    </div>

  </body>
</html>
