<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login - Cupcake Confections LLC</title>
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
          <li><a class="nav-item nav-link active" href="index.php">Home <span class="sr-only">(current)</span></a></li>
          <li><a class="nav-item nav-link" href="products.php">Products</a></li>
          <li><a class="nav-item nav-link" href="#">Orders</a></li>
        </ul>

        <!-- Login Button  -->
        <ul class="nav navbar-nav navbar-right">
          <li><button class="btn btn-success navbar-btn">Login <i class="fas fa-sign-in-alt"></i></button></li>
        </ul>
      </div>
    </nav>

    <br>
    <div class="container shadow p-3 mb-5 bg-light rounded">
      <div class="row">
        <div class="col">
          <h3>Login</h3>
          <br>

          <!-- Creates a notification if there is a fail message in the URL -->
          <?php
            $url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
            if(strpos($url, 'authFail')){
              echo '<div class="alert alert-danger" role="alert">
                      Invalid Username or Password
                    </div>';
            }
          ?>

          <!-- Returning User login -->
          <form action="backend/submitLogin.php" method="post">
            <div class="form-group">
              <input type="text" class="form-control" name="loginUName" placeholder="Username" required>
            </div>
            <div class="form-group">
              <input type="password" class="form-control" name="loginPass" placeholder="Password" required>
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
          </form>
        </div>
        <div class="col">
          <h3>Signup</h3>
          <br>

          <!-- New user form -->
          <form action="#" method="post">
            <!-- Name -->
            <div class="form-row">
              <div class="form-group col">
                <input type="text" class="form-control" placeholder="First name" required>
              </div>
              <div class="form-group col">
                <input type="text" class="form-control" placeholder="Last name" required>
              </div>
            </div>

            <!-- Phone -->
            <div class="form-row">
              <div class="form-group col">
                <input type="tel" class="form-control" placeholder="Phone Number" required>
              </div>
            </div>

            <!-- Address -->
            <div class="form-row">
              <div class="form-group col">
                <input type="text" class="form-control" placeholder="Address" required>
              </div>
            </div>

            <!-- Location information -->
            <div class="form-row">
              <div class="form-group col">
                <input type="text" class="form-control" placeholder="City" required>
              </div>
              <div class="form-group col">
                <input type="text" class="form-control" placeholder="State" required>
              </div>
            </div>

            <div class="form-row">
              <div class="form-group col">
                <input type="text" class="form-control" placeholder="Country" required>
              </div>
              <div class="form-group col">
                <input type="text" class="form-control" placeholder="Zip Code" pattern="[0-9]*" required>
              </div>
            </div>

            <!-- Password -->
            <div class="form-row">
              <div class="form-group col">
                <input type="password" class="form-control" id="signupPass" placeholder="Password" required>
              </div>
            </div>

            <!-- Password Confirm -->
            <div class="form-row">
              <div class="form-group col">
                <input type="password" class="form-control" id="signupPassConfirm" placeholder="Re-type Password" required>
              </div>
            </div>

            <button type="submit" class="btn btn-primary">Sign up</button>
          </form>
        </div>
      </div>

      <br>

      <div class="row">
        <div class="col">
          <h3>Operator Login</h3>
          <br>
          <!-- Operator login -->
          <form action="backend/operatorLogin.php" method="post">
            <div class="form-group">
              <input type="text" class="form-control" name="loginUName" placeholder="Username" required>
            </div>
            <div class="form-group">
              <input type="password" class="form-control" name="loginPass" placeholder="Password" required>
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
          </form>
        </div>
      </div>
    </div>


  </body>
</html>
