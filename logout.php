<?php

require './Fb-Initilize.php';
session_destroy();
unset($_SESSION['access_token']);

if(!isset($_SESSION['access_token']))
{
    

   echo "<script type='text/javascript'>location.href = 'index.php'</script>";
}

?>