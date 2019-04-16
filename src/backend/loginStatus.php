<?php
  class loginStatus{


    public function getLoginButton(){
      if(isset($_COOKIE["user"])){
        echo '<ul class="nav navbar-nav navbar-right">
                <li class="dropdown" id="navbarDropdown">
                  <a class="btn btn-success navbar-btn dropdown-toggle"  id="navDropdown" href="#" data-toggle="dropdown">
                    Welcome ' . $_COOKIE["user"] . ' <i class="fas fa-user"></i>
                  </a>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">User Settings</a>
                    <a class="dropdown-item" href="backend/logout.php">Logout</a>
                  </div>
                </li>
              </ul>';
      } else if (isset($_COOKIE["emp"])) {
        echo '<ul class="nav navbar-nav navbar-right">
                <li class="dropdown" id="navbarDropdown">
                  <a class="btn btn-info navbar-btn dropdown-toggle" id="navDropdown" href="#" data-toggle="dropdown">
                    Welcome ' . $_COOKIE["emp"] . ' <i class="fas fa-user"></i>
                  </a>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">User Settings</a>
                    <a class="dropdown-item" href="manage/manage.php">Manage</a>
                    <a class="dropdown-item" href="backend/logout.php">Logout</a>
                  </div>
                </li>
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
