<?php
session_start();
?>
<html>
    <head>
        <title>Register form</title>
        <link rel="stylesheet" href="reg_style.css">
        <link rel="stylesheet" href="style.css">
        <link href="https://fonts.googleapis.com/css?family=Permanent+Marker" rel="stylesheet"> 
    </head>
    <body>
        <nav>
            <ul>
              <li class="logo">Hold Each Sec</li>
              <li class="items"><a href="register.php">Register</a></li>
              <li class="items"><a href="new_store.php">Shop</a></li>
              <li class="items"><a href="index.php">Home</a></li>              
              <?php
              if(isset($_SESSION['user']))
              {
                echo("<li class='items'><a>Hi " .$_SESSION['user']. "</a></li>");
                echo'<li class="items"><a href="logout.php?logout">Logout</a></li>';
              }
      
              else
              {
                echo'<li class="items"><a href="login.php">Login</a></li>';
              }
              ?>
              <li class="items"><a href="about.php">About</a></li>
              <li class="items"><a href="contact.php">Feedback</a></li>
              
            </ul>
          </nav>
        <div class="signup-form">
            <h1>Register</h1>
            <div id="errors"></div>
            <form action="reg_saver.php" method="POST" onsubmit="return validation()">
                <input type="text" name="name" id="name" placeholder="Enter Your Username" class="txtb">
                <input type="email" name="email" id="email" placeholder="Enter your E-Mail ID" class="txtb">
                <input type="password" name="password" id="password" placeholder="Enter your Password" class="txtb">
                <input type="submit" name="submit" value="Submit" class="signup-btn">
                <a href="login.php">Already have one?</a>
            </form>
        </div>
        <script src="reg_val.js"></script>
    </body>
</html>