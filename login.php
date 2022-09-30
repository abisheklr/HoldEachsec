<?php
?>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="log_style.css">
    <script src="loginscript.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Permanent+Marker" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<nav>
      <ul>
        <li class="logo">Hold Each Sec</li>
        <li class="items"><a href="#">Home</a></li>
        <li class="items"><a href="new_store.php">Shop</a></li>
        
        <?php
        if(isset($_SESSION['user']))
        {
          echo("<li class='items'><a>Hi " .$_SESSION['user']. "</a></li>");
          echo'<li class="items"><a href="logout.php?logout">Logout</a></li>';
        }

        else
        {
          echo'<li class="items"><a href="register.php">Register</a></li>';
          echo'<li class="items"><a href="login.php">Login</a></li>';
        }
        ?>
        <li class="items"><a href="about.php">About</a></li>
        <li class="items"><a href="contact.php">Feedback</a></li>

      </ul>
    </nav>
    <div class="login-form">
        <h1>Login</h1>
        <form action="login_auth.php" method="POST">
            <input type="text" name="name" id="name" placeholder="Enter Your Username" class="txtb" value="<?php if(isset($_COOKIE['user'])){ echo $_COOKIE['user'];}?>">
            <input type="password" name="password" id="password" placeholder="Enter your Password" class="txtb" value="<?php if(isset($_COOKIE['pass'])){ echo $_COOKIE['pass'];}?>">
            <input type="submit" name="login" value="Login" class="login-btn">
            <input type="checkbox" name="ch1" class="ch1" id="ch1" style="position: relative;left:-120;"/>
            <span style="text-align: left;color: white;position: relative;padding: 1;top:-36;right: -25;font-size: 25px;font-family: monospace;color: white;background: black;"><b>Remember Me!</b></span>
            <a href="register.php">New user, click here to register now</a>
        </form>
    </div>
    <div id="errors" style="color: red;"></div>
    <script src="reg_val.js"></script>
</body>
</html>
