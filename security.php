<?php 
session_start();


if(!$_SESSION['username'])
{
   header('Location: login.php');
}


/*
include('database/dbconfig.php');

if($dbconfig)
{
   // echo "Database Connected";
}
else
{
   header('Location: database/dbconfig.php');
}

if(!$_SESSION['username'])
{
    header('Location: login.php');
}
*/
?>