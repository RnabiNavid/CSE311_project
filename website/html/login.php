


<?php 
session_start();


  
   ?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://kit.fontawesome.com/ed4cfa797c.js" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="../css/style.css" />
  <title>signin</title>
</head>

<body>
  <div class="container">
    <div class="forms-container">
      <div class="signin-signup">
        <form action="../php/login.inc.php" class="signin-form">
          <h2 class="title">Sign In</h2>
          <div class="input-field">
            <i class="fa-solid fa-user"></i>
            <input type="text" placeholder="Username" name="usrname" />
          </div>
          <div class="input-field">
            <i class="fa-solid fa-lock"></i>
            <input type="password" placeholder="password" name="pas" />
          </div>

          <button type="submit" class="btn solid" >Log In</button>
          <p class="social-text">or Sign in with social paltforms</p>
          <div class="social-media">
            <a class="social-icon" href="https://www.facebook.com/navid.nabi.7/"><i class="fa-brands fa-facebook-f"></i></i></a>
            <a class="social-icon" href="https://www.whatsapp.web"><i class="fa-brands fa-whatsapp "></i></i></a>
            <a class="social-icon" href="https://www.gmail.com"><i class="fa-solid fa-envelope "></i></a>
          </div>
        </form>


        <form action="../php/signup.inc.php" class="signup-form" method="post">

          <h2 class="title">Sign up</h2>
          <div class="input-field">
            <i class="fa-solid fa-user"></i>
            <input type="text" placeholder="Username" id="username" name="username" />
          </div>
          <div class="input-field">
            <i class="fa-solid fa-envelope"></i>
            <input type="email" placeholder="Email" id="email" name="email" />
          </div>
          <div class="input-field">
            <i class="fas fa-map-marker"></i>
            <input type="text" placeholder="Address" id="address" name="address" />
          </div>
          <div class="input-field">
            <i class="fa-solid fa-lock"></i>
            <input type="password" placeholder="password" id="pass" name="pass" />
          </div>
          <div class="input-field">
            <i class="fa-solid fa-lock"></i>
            <input type="password" placeholder="Re-type password" id="Rpass" name="Rpass" />
          </div>
           
          
       <button>
          

          <button type="submit" class="btn solid"  />Sign up</button>
          <p class="social-text">or Sign in with social paltforms</p>
          <div class="social-media">
            <a class="social-icon" href="https://www.facebook.com"><i class="fa-brands fa-facebook-f"></i></a>
            <a class="social-icon" href="https://www.whatsapp.web"><i class="fa-brands fa-whatsapp "></i></i></a>
            <a class="social-icon" href="https://www.gmail.com"><i class="fa-solid fa-envelope "></i></a>

        </form>

      </div>

    </div>
    <div class="panels-container">


      <div class="panel left-panel">
        <div class="content">
          <h3>New here</h3>
          <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatem voluptatum vitae ad hic ab tenetur perferendis, possimus optio quisquam itaque? Molestias illo ipsam facilis. Nemo excepturi exercitationem vitae magni maxime.</p>
                        <?php 

if (isset($_GET["error"])) {
  if ($_GET["error"]=="emptyinput") {
    echo "<p>Fill In All User Field</p>";
  }
  elseif ($_GET["error"]=="invalidUname") {
    echo "<p>Choose a proper user name</p>";
  }
    elseif ($_GET["error"]=="invalidEmail") {
    echo "<p>Choose a proper Email</p>";
  }

  elseif ($_GET["error"]=="Passwordsnotmatch") {
    echo "<p>Check your password</p>";
  }
  elseif ($_GET["error"]=="stmtfailed") {
    echo "<p>Something went wrong </p>";
  }
    elseif ($_GET["error"]=="usernameExist") {
    echo "<p>User name alrady taken </p>";
  }
    elseif ($_GET["error"]=="none") {
    echo "<h3> You have signup </h3>";
  }

}

?>

          <br>
          <br>
          <button class="btn transparent" id="signup-btn">sign up</button>
        </div>
        <img src="../Img/svgs/undraw_video_game_night_8h8m.svg" alt="" class="img">
      </div>

      <div class="panel right-panel">
        <div class="content">
          <h3>one of us ?</h3>
          <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatem voluptatum vitae ad hic ab tenetur perferendis, possimus optio quisquam itaque? Molestias illo ipsam facilis. Nemo excepturi exercitationem vitae magni maxime.</p>
  

          
          <button class="btn transparent" id="signin-btn">sign in</button>
          <br><br><br><a href="../html/index.php" class="likk">Back to homepage</a>
        </div>
        <img src="../Img/svgs/undraw_join_re_w1lh.svg" alt="" class="img">
      </div>
    </div>
  </div>




  <script src="../js/app.js"></script>
</body>

</html>