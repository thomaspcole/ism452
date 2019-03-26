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
      <li><a class="nav-item nav-link active" href="index.php">Home <i class="fas fa-home"></i><span class="sr-only">(current)</span></a></li>
      <li><a class="nav-item nav-link" href="products.php">Products <i class="fas fa-store"></i></a></li>
      <li><a class="nav-item nav-link" href="orders.php">Orders <i class="fas fa-shipping-fast"></i></a></li>
      <li><a class="nav-item nav-link" href="cart.php">Cart <i class="fas fa-shopping-cart"></i></a></li>

      <?php include 'backend/showManageLink.php'; ?>

    </ul>

    <?php
      include 'backend/loginStatus.php';
      $ls = new loginStatus;
      $ls->getLoginButton();
    ?>

  </div>
</nav>
