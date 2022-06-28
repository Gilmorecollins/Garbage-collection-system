
<header class="header" id="header">
    <div class="header__toggle white-text">
        <i class='bx bx-menu' id="header-toggle"></i>
    </div>
      <!-- Dropdown Trigger -->
  <a class='dropdown-trigger' href='#' data-target='dropdown1'>
  <div class="header__img white-text">
    </div>
    <a class='dropdown-button' href='#' data-activates='dropdown1' style="padding: 5em;"> <span class="white-text"><?php echo $_SESSION['email']; ?></span> <i class="fas fa-caret-down white-text"></i></a>
  </a>
  <!-- Dropdown Trigger -->


  <!-- Dropdown Structure -->
  <ul id='dropdown1' class='dropdown-content'>
    <li><a href="#!"></a></li>
    <li><a href="#!">
    <a href="#" class="d_logo">
                <img class="d_logo-img z-depth-3"  src="assets/img/avatar0.png" alt="">
            </a>
    </a></li>
    <li class="divider"></li>
   
    <li><a href="#!"><?php echo $_SESSION['email']; ?></a></li>
    <li><a href="#!"><i class='bx bx-log-out nav__icon'></i>Sign-Out</a></li>
  </ul>
</header>
<div class="l-navbar" id="nav-bar">
    <div class="nav">
        <div>
            <a href="#" class="nav__logo">
                <i class='bx bx-layer nav__logo-icon'></i>
                <span class="nav__logo-name">Gabbage</span>
            </a>
            <a href="#" class="k_logo">
                <img class="logo z-depth-5"  src="assets/img/avatar0.png" alt="">
                <span class="k_logo-text text-purple nav__name"><?php echo $_SESSION['email']; ?></span>
            </a>

            <div class="nav__list mt-3">
                <a href="index.php" class="nav__link active">
                    <i class='bx bx-grid-alt nav__icon'></i>
                    <span class="nav__name">Dashboard</span>
                </a>


                <a href="payment.php" class="nav__link white-text">
                    <i class='fas fa-wallet nav__icon'></i>
                    <span class="nav__name">Make Payment</span>
                </a>

                <a href="request.php" class="nav__link white-text">
                    <i class='bx bx-message-square-detail nav__icon'></i>
                    <span class="nav__name">Collection Request</span>
                </a>

                <a href="user_profile.php" class="nav__link white-text">
                    <i class='fas fa-user nav__icon'></i>
                    <span class="nav__name">Profile</span>
                </a>
            </div>
        </div>
  
        <a href="logout.php" class="nav__link white-text">
            <i class='bx bx-log-out nav__icon'></i>
            <span class="nav__name">Log Out</span>
        </a>
</div>
</div>

