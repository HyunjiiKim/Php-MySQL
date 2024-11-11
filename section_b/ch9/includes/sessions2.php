<?php
session_start(); //call session
$logged_in=$_SESSION['logged_in'] ?? false; //if $_SESSION['logged_in'] returns NULL, $logged_in stores false

$email = 'hyunjikim@hyunjikim.fr';
$password='password';

function login(){
    session_regenerate_id(true); //update session id
    $_SESSION['logged_in'] = true; //set true for logged_in key
}

function logout(){
    $_SESSION=[]; //remove all data in session

    $params=session_get_cookie_params(); //get cookie parameters
    setcookie('PHPSESSID','',time() - 600, $params['path'],$params['domain'],$params['secure'],$params['httponly']); // delete session cookie
    session_destroy(); // delete session file
}

function require_login($logged_in){
    if($logged_in==false){
        header('Location: login.php');
        exit;
    }
}

?>