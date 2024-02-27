<?php

// Create Session With User Info
function createUserSession($user)
{
    $_SESSION['user_id'] = $user->id;
    $_SESSION['user_email'] = $user->email;
    $_SESSION['user_firstname'] = $user->firstname;
    $_SESSION['user_lastname'] = $user->lastname;
    redirect('../index.php');
}

// Logout & Destroy Session
function logout()
{
    unset($_SESSION['user_id']);
    unset($_SESSION['user_email']);
    unset($_SESSION['user_name']);
    session_destroy();
    redirect('../index.php');
}

// Check Logged In
function isLoggedIn()
{
    if (isset($_SESSION['user_id'])) {
        return true;
    } else {
        return false;
    }
}
