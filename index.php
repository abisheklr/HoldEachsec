<?php
session_start();
?>
  <!DOCTYPE html>
  <head>
    <meta charset="utf-8">
    <title>Welcome to Hold Each Sec</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <div class="mainpage">
        <img src="background.jpg" class="mainpage">
        <div class="textblock">
            <h1>Welcome to Hold Each Sec</h1>
            <p>Find out new amazing watches <br>with special discounts<br> <small>(T&C Apply)</small> </p>
        </div>
    </div>
  </body>
</html>
