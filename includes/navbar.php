<nav class="navbar navbar-expand-lg bg-dark text-light">
  <a class="navbar-brand text-light ml-auto" href="index.php">Home</a>

  <div class="container">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link text-light" href="#">Shop</a>
        </li> 
        <li class="nav-item">
          <a class="nav-link text-light" href="#">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="#">Contact</a>
        </li>
        <?php if(isset($_SESSION['auth_user'])) : ?>
        <li class="nav-item dropdown ">
          <a class="nav-link dropdown-toggle text-warning" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <?php echo $_SESSION['auth_user']['user_name']?>
          </a>
          <div class="dropdown-menu ml-auto" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">My Profile</a>
            <form action="allcode.php" method="POST">
              <button type="submit" name="logout_btn" class="dropdown-item">Logout</button>
            </form>
          </div>
        </li>
        <?php else:?>
        <li class="nav-item mr-2">
          <button class="btn btn-success">
            <a class="nav-link text-light" href="login.php">Login</a>
          </button>
        </li>
        <li class="nav-item">
          <button class="btn btn-danger">
            <a class="nav-link text-light" href="register.php">Register</a>
          </button>
        </li>
        <?php endif;?>
      </ul>

    </div>
  </div>
  </div>
</nav>