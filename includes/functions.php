<?php

function connectToDB()
{
    return new PDO (
        'mysql:host=devkinsta_db;dbname=Simple_Store',
        'root',
        '6Yrof25ml8JpUOru'
    );
}
    
function isLoggedIn()
{
    // if the user is logged in, it will return true
    return isset( $_SESSION['user'] );
}

function logout()
{
    // delete session data so that user can logout
    unset( $_SESSION['user'] );
}

?>