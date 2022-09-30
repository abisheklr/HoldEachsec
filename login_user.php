<?php
    require_once('new_login_con.php');
    $name = $_GET["u_name"];
    $pass = $_GET["u_pass"];
    $query = "SELECT * FROM usertables WHERE name = '$name' AND password = '$pass'";
    $result = mysqli_query($con,$query);
    if(mysqli_fetch_assoc($result))
    {
        $_SESSION['user'] = $_GET['u_name'];
        header("location:index.php");
        echo('You are logged in');
    }
    else
    {
        echo'Not works';
    }
?>