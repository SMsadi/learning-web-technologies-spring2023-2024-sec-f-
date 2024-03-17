<?php
/*
session_start();
if (isset($_SESSION["user"])) {
   header("Location: index.php");
}
*/
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
</head>
<body>
    <div class="container">
        <form action="login.php" method="post">
            <input type="email" placeholder="Enter Email:" name="email">
            <br>
            <br>
            <input type="password" placeholder="Enter Password:" name="password">
            <br>
            <br>
            <input type="submit" value="Login" name="login">
        </form>

       <div>
            <p>Not registered yet? <br>
            <a href="registration.php">Register Here</a></p>
        </div>
    </div>
</body>
</html>


<?php

    if (isset($_POST["login"])) {
        $email = $_POST["email"];
        $password = $_POST["password"];
        require_once "database.php";
        $sql = "SELECT * FROM users WHERE email = '$email'";
        $result = mysqli_query($conn, $sql);
        $user = mysqli_fetch_array($result, MYSQLI_ASSOC);

        if ($user){
            if (password_verify($password, $user["password"])) {
                session_start();
                $_SESSION["user"] = "yes";   // user is logged in
                header("Location: index.php");
            }
            else{
                echo "<div class='alert'>Password does not match</div>";
            }
        }else{
            echo "<div class='alert'>Email does not match</div>";
        }


    }

?>