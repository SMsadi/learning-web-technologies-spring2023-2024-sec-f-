<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
</head>
<body>
    <form action="../controller/signUpCheck.php" method="post" enctype="">
   
        <table border="1">
            
                    <fieldset>
                        <legend>REGISTRATION</legend>
                        User_name:
                        <input type="text" name="user_name" value=""><br>
                        Email:
                        <input type="text" name="email" value=""><br>
                        Phone:
                        <input type="number" name="phone" value=""><br>
                        User_type:
                        <select name="user_type" >
                            <option value="select">select</option>
                            <option value="admin">Admin</option>
                            <option value="employee">Employee</option>
                        </select><br>
                        Password:
                        <input type="password" name="password" value=""><br>
                        Confirm password:
                        <input type="password" name="confirm_password" value=""><br>

                        <input type="submit" name="submit" value="sign up"><br>
                        
                        <p>Already have an account? <a href="login.php">Log In</a></p>
                    </fieldset>
               
        </table>
        
    </form>
</body>
</html>