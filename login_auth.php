<?php   
    include('login_connection.php');  
    $username = $_POST['name'];  
    $password = $_POST['password']; 
    $enc_password = password_hash($password, PASSWORD_DEFAULT);
    //to prevent from mysqli injection   
    
    $sql = "SELECT name,password from usertables where name ='$username'";  
    $result = mysqli_query($con, $sql);  
    $row = mysqli_num_rows($result);
    $data = mysqli_fetch_array($result);
    if($row>0)  
    {
        if(password_verify($password,$data['password']))
        {
            session_start();
            if(isset($_POST['ch1']))
            {
                setcookie("user",$username, time()+1800);
                setcookie("pass",$password, time()+1800);
            }
            $_SESSION['user'] = $username;
            header("Location: index.php");    
        }
        else
        {
            header("Location: err.php");
        }
    }
    else
    {
        echo 'Failed To Login,<a href="login.php">Click here</a>to Go back to Login Page';
    }
?> 