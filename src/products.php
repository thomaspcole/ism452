<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Products - Cupcake Confections LLC</title>
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


    <div class="container-fluid shadow-lg p-3 mb-5 bg-light rounded">
      <div class="row mx-auto" style="width:60%; text-align: center">
          <div class="dropdown">
            Price:
            <button class="btn btn-outline-dark dropdown-toggle" type="button" data-toggle="dropdown" id="priceFilter"></button>
            <div class="dropdown-menu">
              <a class="dropdown-item" id="lh">Low to High</a>
              <a class="dropdown-item" id="hl">High to Low</a>
            </div>
          </div>
          &nbsp;
          &nbsp;
          &nbsp;
          <div class="dropdown">
            Rating:
            <button class="btn btn-outline-dark dropdown-toggle" type="button" data-toggle="dropdown" id="ratingFilter"></button>
            <div class="dropdown-menu">
              <a class="dropdown-item" id="5s">5 &#9733; &#9733; &#9733; &#9733; &#9733;</a>
              <a class="dropdown-item" id="4s">4 &#9733; &#9733; &#9733; &#9733; &#9734;</a>
              <a class="dropdown-item" id="3s">3 &#9733; &#9733; &#9733; &#9734; &#9734;</a>
              <a class="dropdown-item" id="2s">2 &#9733; &#9733; &#9734; &#9734; &#9734;</a>
              <a class="dropdown-item" id="1s">1 &#9733; &#9734; &#9734; &#9734; &#9734;</a>
            </div>
          </div>
          &nbsp;
          &nbsp;
          &nbsp;
          <div class="dropdown">
            Flavor:
            <button class="btn btn-outline-dark dropdown-toggle" type="button" data-toggle="dropdown" id="flavorFilter"></button>
            <div class="dropdown-menu">
              <a class="dropdown-item" id="all">All</a>
              <a class="dropdown-item" id="chocolate">Chocolate</a>
              <a class="dropdown-item" id="vanillia">Vanillia</a>
              <a class="dropdown-item" id="red">Red Velvet</a>
            </div>
          </div>
          &nbsp;
          &nbsp;
          &nbsp;
          <input class="form-control" type="text" placeholder="Search" style="width:200px">
      </div>
      <script src="js/productFilter.js">

      </script>
      <br>

        <!-- Product List -->
        <?php

        include 'backend/db.php';

        $db = new db;
        $sql="SELECT * FROM productTest ORDER BY price ASC";
        $result = $db->queryDatabase($sql);


        if ($result->num_rows > 0) {
          $counter = 0;
          while($row = $result->fetch_assoc()) {

            //only draw a card if the product is live
            if ($row["is_live"] == true) {
              if ($GLOBALS['counter'] == 0) {
                echo '<div class="row">
                        <div class="card-deck mx-auto">';
              }

              echo '<div class="card shadow" style="width: 18rem;">
                        <img src="img/CardPlaceholder.png" class="card-img-top"></img>
                        <div class="card-body">
                          <h5>'.$row["name"].'</h5>
                          <p>'.$row["description"].'</p>
                          <p>$'.$row["price"].'</p>
                          <button class="btn btn-sm btn-light" onClick="addtoCart('.$row["prod_id"].')">Add to cart</button>
                          <a class="btn btn-sm btn-light" href="product.php?id='.$row["prod_id"].'">View</a>
                        </div>
                      </div>';

              if ($GLOBALS['counter'] == 3) {
                echo '</div></div><br>';
                $GLOBALS['counter'] = 0;
              } else {
                $GLOBALS['counter'] +=1;
              }
            }
          }
        }
        ?>
    </div>

  </body>
</html>
