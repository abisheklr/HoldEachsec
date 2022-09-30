<?php
    $name = $_POST['name'];
    $mail = $_POST['email'];
    $pass = $_POST['password'];
    $enc_pass = password_hash($pass, PASSWORD_DEFAULT);
    $con = new mysqli('localhost','root','','register');
    if($con->connect_error)
    {
        die('Connection Failed : '.$con->connect_error);
    }else
    {
        $stmt = $con->prepare("INSERT into `usertables`(`name`, `email`, `password`) VALUES('$name', '$mail', '$enc_pass')");
        $stmt->execute();
        echo"Registered Successfully";
        echo "<a href='index.php'>Click Here</a>to get redirected to homepage";
        $stmt->close();
        $con->close();
        
    }

?>