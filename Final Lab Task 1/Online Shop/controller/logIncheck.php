<?php
    session_start();

    require_once('../model/usermodel.php');

    $user_name = $_REQUEST["user_name"];
    $password = $_REQUEST["password"];

    if($user_name == "" || $password == "")
    {
        echo "required empty field";
    }
    else{
        $status = login($user_name,$password);
        if($status){
            $_SESSION['flag'] = "true";
            setcookie('flag','true',time()+3600,'/');
            header('location:../view/home.php');
        }
        
    }
?>