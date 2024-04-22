<?php
    require_once('db.php');

    function show_employees(){
        $conn = dbConnection();
        $sql = "select * from employees";
        $result = mysqli_query($conn,$sql);
        $employees = [];

        while($employee = mysqli_fetch_assoc($result)){
            array_push($employees, $employee);
        }
        return $employees;
    }

    
    function deleteEmployee($Id){
        $conn = dbConnection();
        $sql = "DELETE FROM employees WHERE id={$Id}";

        if(mysqli_query($conn,$sql)){
            return true;
        }else{
            return false;
        }    
    }

    function searchEmployee($Id){
        $conn = dbConnection();
        $sql = "select * from employees where id = '{$Id}'";
        $result = mysqli_query($conn,$sql);
        $employees=[];

        while($employee = mysqli_fetch_assoc($result)){
            array_push($employees,$employee);
        }
        return $employees;
    }
?>