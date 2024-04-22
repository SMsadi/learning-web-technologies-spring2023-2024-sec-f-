<?php
    include_once ('../model/db.php');

    $Id  = $_POST['id'];
    $employee_name = $_POST['employee_name'];
    $contact_no = $_POST['contact_no'];
    $user_name  = $_POST['user_name'];
    $password = $_POST['password'];

    $conn = dbConnection();
    $query = "UPDATE employees SET employee_name='{$employee_name}', contact_no='{$contact_no}', user_name='{$user_name}', 
            password='{$password}' where id='{$Id}' ";
    if(mysqli_query($conn,$query))
    {
        echo "success";
    } else{
        echo "failed";
    }
    
?>