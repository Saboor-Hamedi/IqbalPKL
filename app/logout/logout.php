<?php     
  





    session_start();
    if (isset($_COOKIE['email'])):
        setcookie('email', '', time()-3600, '/');
    endif;

    session_unset();
    session_destroy();
    unset($_SESSION['email']);
    unset($_SESSION['password']);
    header("Location:  /");
    die();