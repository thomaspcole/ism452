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
  </head>

  <body>

    <!-- Navigation bar -->
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">

      <!-- Icon and Name -->
      <a class="navbar-brand" href="index.php">
        <img src="img/logoWhite.svg" width="30" height="30" alt="logo">
        CCLLC
      </a>

      <!-- collapse button. Only displayed when nav bar no longer fits on screen -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ccnav" aria-controls="ccnav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="ccnav">
        <ul class="nav navbar-nav mr-auto">
          <!-- Navigation links -->
          <li><a class="nav-item nav-link" href="index.php">Home <span class="sr-only">(current)</span></a></li>
          <li><a class="nav-item nav-link active" href="#">Products</a></li>
          <li><a class="nav-item nav-link" href="orders.php">Orders</a></li>
          <?php include 'backend/showManageLink.php'; ?>

        </ul>

        <?php
          include 'backend/loginStatus.php';
          $ls = new loginStatus;
          $ls->getLoginButton();
        ?>
      </div>
    </nav>

    <br>
    <div class="container-fluid shadow-lg p-3 mb-5 bg-light rounded">

        <!-- Product List -->
        <?php

        include 'backend/db.php';

        $db = new db;
        $sql="SELECT name,description,price FROM productTest";
        $result = $db->queryDatabase($sql);


        if ($result->num_rows > 0) {
          $counter = 0;
          while($row = $result->fetch_assoc()) {

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
        ?>
    </div>

  </body>
</html>
