<?php include('server.php') ?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>UMS</title>
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'><link rel="stylesheet" href="LoginCSS/AdminLogin.css">
</head>
<body>
<!-- partial:index.partial.html -->
<p class="tip"></p>
<div class="cont">
  <div class="form sign-in">
      <form method="post" id="admin_login" action="lecturer_login.php">
        <h2>Lecturer Login </h2>
        <label>
        <span>Email</span>
          <input type="email" name="email" id="admin_signin_email" placeholder="pulkita@gmail.com"/><br>
      </label>
      <label>
          <span>Password</span>
          <input type="password" name="password" id="admin_signin_password" pattern=".{5,15}" required title="5 to 15 characters" placeholder="**********" > <br>
      </label>
    <button class="submit" name="login_lecturer">Sign In</button>
    </form>
    <a href = "login.php"><button class="fb-btn"><span>Continue as student</span></button></a>
  </div>
</div>

<a class="icon-link">
  <img src="https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.flaticon.com%2Ffree-icon%2Fcollege_4345672&psig=AOvVaw1am9ih4ySBR0xAHePuONPk&ust=1701956735234000&source=images&cd=vfe&ved=0CBIQjRxqFwoTCIjhk4f5-oIDFQAAAAAdAAAAABAE">
</a>
<!-- partial -->
  

</body>
</html>
