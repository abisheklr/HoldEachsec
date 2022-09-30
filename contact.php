<?php
session_start();
?>
<html>
    <head>
		<link rel="stylesheet" href="contact_style.css">
		<link rel="stylesheet" href="style.css">
		<script src="contactscript.js"></script>
        <title>Contact Form</title>
    </head>
    <body>
      <style>
        .buttons{
            background: black;
            opacity: 1;
            color: white;
            padding: 10px 100px;
            margin-top: auto;
            margin-bottom: auto;
            text-align: center;
            font-size: 18px;
        }

        .buttons:hover{
            color: black;
            background-color: transparent;
        }
      </style>
	<nav>
      <ul>
        <li class="logo">Hold Each Sec</li>
        <li class="items"><a href="index.php">Home</a></li>
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
		<div class="wrapper">
			<h2>Contact us</h2>
			<p>We will catch you in 24 Hrs</p>
			<form action="contactform.php" method="POST" onsubmit="return validator();">
				<input type="text" name="name" id="name" placeholder="Enter your Name">
				<input type="email" name="email" id="email" placeholder="Enter your Email ID">
				<input type="text" name="msg" id="msg" placeholder="Enter your Message">
				<input class="buttons" type="submit" name='submit' value="submit your response">		
			</form>
		</div>
    </body>
</html>