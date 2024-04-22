<?php
    require_once('db.php');

    function login($user_name,$password){
        $conn = dbConnection();
        $sql = "select *  from users where user_name='{$user_name}' and password='{$password}'";
        $result = mysqli_query($conn,$sql);
        $count =mysqli_num_rows($result);
        if($count == 1){
            return true;
        }else{
            return false;
        }
    }

    function createUser($user){
        $conn = dbConnection();
        $sql = "insert into users values ('','{$user['user_name']}','{$user['email']}','{$user['phone']}',
        '{$user['user_type']}','{$user['password']}')";
        if(mysqli_query($conn,$sql)){
            return true;
        }else{
            return false;
        }
    }

    function show_users(){
        $conn = dbConnection();
        $sql = "select * from users";
        $result = mysqli_query($conn,$sql);
        $users = [];
        while($user = mysqli_fetch_assoc($result)){
            array_push($users,$user);
        }
        return $users;
    }
?>