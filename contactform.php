<?php 
if(isset($_REQUEST['submit']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $msg = $_POST['msg'];

    $con = new mysqli('localhost','root','','feedback');
    if($con->connect_error)
    {
        die('Connection Failed : '.$con->connect_error);
    }else
    {
        $stmt = $con->prepare("INSERT into `userfeedback`(`name`, `email`, `message`) VALUES('$name', '$email', '$msg')");
        $stmt->execute();
        echo"Feedback Submitted Successfully";
        echo "<a href='index.php'>Click Here</a>to get redirected to homepage";
        $stmt->close();
        $con->close();
        
    }
}

?>