<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Cupcake Confections LLC</title>
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
      <a class="navbar-brand" href="#">
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
          <li><a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a></li>
          <li><a class="nav-item nav-link" href="products.php">Products</a></li>
          <li><a class="nav-item nav-link" href="#">Orders</a></li>

          <?php if(isset($_COOKIE["emp"])){
            echo '<li><a class="nav-item nav-link" href="manage/manage.php">Manage</a></li>';
          }?>

        </ul>

        <!-- Login Button  -->
        <?php
          if(!isset($_COOKIE["user"])){
            echo '<ul class="nav navbar-nav navbar-right">
                    <li><a class="btn btn-success navbar-btn" href="login.php">Login <i class="fas fa-sign-in-alt"></i></a></li>
                  </ul>';
          } else {
            echo '<ul class="nav navbar-nav navbar-right">
                    <li><a class="btn btn-success navbar-btn" href="backend/logout.php">Welcome ' . $_COOKIE["user"] . ' <i class="fas fa-user"></i></a></li>
                  </ul>';
          }
        ?>

      </div>
    </nav>

    <br>

    <!-- Container -->
    <div class="container-fluid shadow p-3 mb-5 bg-light rounded">
      <div class="row">

        <!-- Homepage Carousel -->
        <div id="carousel" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#carousel" data-slide-to="0" class="active"></li>
            <li data-target="#carousel" data-slide-to="1"></li>
            <li data-target="#carousel" data-slide-to="2"></li>
            <li data-target="#carousel" data-slide-to="3"></li>
          </ol>

          <!-- Slides -->
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="img/carousel/c1.png" class="d-block w-100" alt="c1">
            </div>
            <div class="carousel-item">
              <img src="img/carousel/c2.png" class="d-block w-100" alt="c2">
            </div>
            <div class="carousel-item">
              <img src="img/carousel/c3.png" class="d-block w-100" alt="c3">
            </div>
            <div class="carousel-item">
              <img src="img/carousel/c4.png" class="d-block w-100" alt="c4">
            </div>
          </div>

          <!-- Left and right controls -->
          <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>

      <br>

      <!-- Main content -->
      <div class="row mx-auto">
        <h3>Content</h3>
      </div>
    </div>


  </body>
</html>
