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
    <link rel="icon" href="img/logoBlack.svg" type="image/svg" sizes="any">
  </head>

  <body>

    <?php
    include 'backend/navbar.php';
    ?>

    <br>

    <!-- Container -->
    <div class="container-fluid shadow-lg p-3 mb-5 bg-light rounded">
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
      <div class="row">
        <div class="col">
          <h2 style="text-align: center">Welcome to Cupcake Confections!</h2>
        </div>
      </div>

      <br>

      <div class="row">
        <div class="col">
          <h3>Our Product</h3>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <p>We have set out to make the finest cupcakes around. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas est tortor, facilisis quis consectetur et, viverra in ex. Maecenas vel dictum augue. Mauris feugiat imperdiet ornare. Aenean venenatis tortor vel velit tempor, a ornare ipsum bibendum. Nam cursus faucibus nulla, sit amet tincidunt nulla porttitor at. Duis imperdiet fringilla magna. Nam ut maximus mi, vel molestie nisl.</p>
        </div>
      </div>

      <div class="row">
        <div class="col">
          <h3>About us:</h3>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <p>Cupcake confections was founded in 2019 with the goal of providing customers with the best tasting cupcakes you can order online. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas est tortor, facilisis quis consectetur et, viverra in ex. Maecenas vel dictum augue. Mauris feugiat imperdiet ornare. Aenean venenatis tortor vel velit tempor, a ornare ipsum bibendum. Nam cursus faucibus nulla, sit amet tincidunt nulla porttitor at. Duis imperdiet fringilla magna. Nam ut maximus mi, vel molestie nisl. Duis sed nulla dapibus, placerat tellus a, semper tortor. Nunc vitae sapien diam. Praesent pellentesque placerat elementum. Cras eu pellentesque leo, in imperdiet tortor. Praesent blandit maximus velit condimentum elementum. Suspendisse lacinia dolor nec nulla mollis, vitae suscipit tortor posuere. Etiam sed tincidunt ipsum, nec consectetur nibh. Proin imperdiet sem id odio fermentum, sed dictum arcu suscipit. </p>
        </div>
      </div>
    </div>


  </body>
</html>
