<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>log In</title>
</head>
<body>
     <form action="../controller/logIncheck.php" method="post" enctype="">
        <table>
            User_name:
            <input type="text" name="user_name" value=""><br>
            Password:
            <input type="password" name="password" value=""><br>
            <input type="submit" name="submit" value="sign in"><br>

            <p>Don't have an account? <a href="signup.php">Sign up</a></p>
        </table>
     </form>
</body>
</html>