<?php
  class loginStatus{


    public function getLoginButton(){
      if(isset($_COOKIE["user"])){
        echo '<ul class="nav navbar-nav navbar-right">
                <li><a class="btn btn-success navbar-btn" href="backend/logout.php">Welcome ' . $_COOKIE["user"] . ' <i class="fas fa-user"></i></a></li>
              </ul>';
      } else if (isset($_COOKIE["emp"])) {
        echo '<ul class="nav navbar-nav navbar-right">
                <li><a class="btn btn-info navbar-btn" href="backend/logout.php">Welcome ' . $_COOKIE["emp"] . ' <i class="fas fa-user"></i></a></li>
              </ul>';
      } else {
        echo '<ul class="nav navbar-nav navbar-right">
                <li><a class="btn btn-success navbar-btn" href="login.php">Login <i class="fas fa-sign-in-alt"></i></a></li>
              </ul>';
      }
    }

    public function isLoggedIn(){
      if(isset($_COOKIE["user"]) || isset($_COOKIE["emp"])){
        return true;
      } else {
        return false;
      }
    }
  }
?>
