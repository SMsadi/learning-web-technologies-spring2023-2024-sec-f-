

<?php

    require "../model/config.php";

    if(!empty($_SESSION["id"])){
        header("Location: index.php");
    }

    if(isset($_POST["submit"])){

        $name = $_POST["name"];
        $username = $_POST["username"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $confirmpassword = $_POST["confirmpassword"];
        $duplicate = mysqli_query($conn, "SELECT * FROM tb_user WHERE username = '$username' OR email = '$email'");
        if(mysqli_num_rows($duplicate) > 0){
            echo 
            "<script> alert('Username or Email Has already Taken');</script>" ;
        }
        else{
            /*
            if(strlen($password) < 6){
                $passwordError = "Password must be at least 6 characters long";
                echo $passwordError;
            }
            */
            if($password == $confirmpassword){
            $query = "INSERT INTO tb_user VALUES ('','$name', '$username', '$email', '$password')" ;
            mysqli_query($conn, $query);

            echo 
            "<script> alert('Registration Succesful'); <script>" ;
		    header("Location: login.php");
            
            }
            else{
                echo 
                "<script>alert('password Does Not Match'); </script>" ;
            }

        }
    }


?>