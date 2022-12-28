<?php 

    session_start();

    require "includes/functions.php";

    if ( isLoggedIn() ){
        // deletes user session data
        logout();

        //redirect user back to index
        header ('Location: /login');
        exit;

    } else {
        // redirect to login page
        header('Location: /login');
        exit;
    }
    
?>