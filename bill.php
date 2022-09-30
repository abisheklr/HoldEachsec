<?php
session_start();
echo 'works';
if(isset($_SESSION['billname']))
{
    $file=$_SESSION['billname'];
    header("Location: $file");
}
?>
