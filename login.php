<?php include("common/header.php"); ?>
<link rel="stylesheet" href="assets/css/login.css">
<div class="page">
  <div class="container">
    <div class="left">
      <div class="login">
        <img src="assets/img/logo.png" alt="" height="100%" width="100%">
      </div>
    </div>
    <div class="right">
      <svg viewBox="0 0 320 300">
        <defs>
          <linearGradient
                          inkscape:collect="always"
                          id="linearGradient"
                          x1="13"
                          y1="193.49992"
                          x2="307"
                          y2="193.49992"
                          gradientUnits="userSpaceOnUse">
            <stop
                  style="stop-color:#ff00ff;"
                  offset="0"
                  id="stop876" />
            <stop
                  style="stop-color:#ff0000;"
                  offset="1"
                  id="stop878" />
          </linearGradient>
        </defs>
        <path d="m 40,120.00016 239.99984,-3.2e-4 c 0,0 24.99263,0.79932 25.00016,35.00016 0.008,34.20084 -25.00016,35 -25.00016,35 h -239.99984 c 0,-0.0205 -25,4.01348 -25,38.5 0,34.48652 25,38.5 25,38.5 h 215 c 0,0 20,-0.99604 20,-25 0,-24.00396 -20,-25 -20,-25 h -190 c 0,0 -20,1.71033 -20,25 0,24.00396 20,25 20,25 h 168.57143" />
      </svg>
      <form id="sign_in" method="POST" action="process/login.php">
        <div class="form">
          <label for="username" class="form-control-label">Username</label>
          <input type="text" name="username" id="email">
          <label for="password" class="form-control-label">Password</label>
          <input type="password" name="password" id="password">
          <input type="submit" id="submit" name="btnLogin" value="Login">
        </div>
      </form>
    </div>
  </div>
</div>

<script src='https://cdnjs.cloudflare.com/ajax/libs/animejs/2.2.0/anime.min.js'></script>
<script src="assets/js/login.js"></script>
<?php include("common/footer.php"); ?>
