
<?php

session_start();
if (isset($_SESSION["user"])) {
   header("Location: index.php");
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reistration Form</title>
</head>
<body>
    <div class="container">
        <form action="registration.php" method="post">

            <h2>Tutor Matching & Learning Platform.</h2> 
            <h3>Hire a conversant tutor is now easier.</h3>
            <h5>Want to Become TUTOR, Signup for free!!</h5>

            <br>

            <input type="text" name="fullname" placeholder="Enter your name">

            <br>
            <br>

            <input type="text" name="email" placeholder="Enter your email">

            <br>
            <br>

            <input type="password" name="password" placeholder="Enter your password">

            <br>
            <br>

            <input type="password" name="repeat_password" placeholder="Repeat password">

            <br>
            <br>

            <input type="submit" value="Register" name="submit">
        </form>
    </div>

    <div>
            <p>Already registered ? <br>
            <a href="login.php">Login Here</a></p>
        </div>
</body>
</html>


<?php
    if(isset($_POST["submit"])){

        $fullname = $_POST["fullname"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $passwordRepeat = $_POST["repeat_password"];

        $passwordHash = password_hash($password, PASSWORD_DEFAULT);

        $errors = array();

        if(empty($fullName) OR empty($email) OR empty($password) OR empty($passwordRepeat)) {
            array_push($errors,"All fields are required");
           }
           if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            array_push($errors, "Email id is not valid");
           }
           if (strlen($password)<8) {
            array_push($errors,"Password must be at least 8 charactes");
           }
           if ($password!==$passwordRepeat) {
            array_push($errors,"Password does not match");
           }
            if (count($errors)>0) {
            foreach ($errors as  $error) {
                echo "<div class='alert'>$error</div>";
            }
        }
        else{
                require_once "database.php" ;
                $sql = "INSERT INTO users (full_name, email, password) VALUES ( ?, ?, ? )";
            $stmt = mysqli_stmt_init($conn);
            $prepareStmt = mysqli_stmt_prepare($stmt,$sql);
            if ($prepareStmt) {
                mysqli_stmt_bind_param($stmt,"sss",$fullName, $email, $passwordHash);
                mysqli_stmt_execute($stmt);
                echo "<div class='alert'>You are registered successfully</div>";
            }else{
                 echo "Something went wrong";
            }

            }
            
        }
            
            



    

?>
