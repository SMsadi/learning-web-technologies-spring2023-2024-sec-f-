<?php
    require_once('../model/usermodel.php');

    $user_name = $_REQUEST["user_name"];
    $email = $_REQUEST["email"];
    $phone = $_REQUEST["phone"];
    $user_type = $_REQUEST["user_type"];
    $password1 = $_REQUEST["password"];
    $password2 = $_REQUEST["confirm_password"];

    if($user_name == "" || $email == ""|| $phone == ""|| $user_type == ""|| $password1 =""|| $password2 = "")
    {
        echo "required empty field";
    }
    else{
        $user  = ['user_name'=>$user_name, 'email'=>$email,'phone'=>$phone,'user_type'=>$user_type, 'password'=>$password1];
        $status = createUser($user);
        if($status)
        {
            header('location:../view/login.php');
        }
        else{
            echo "please try again";
        }
    }
?>