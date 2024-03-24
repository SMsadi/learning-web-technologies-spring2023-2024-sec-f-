
<?php
    include("header.html")
?>



<?php
     include("../controller/loginCheck.php");
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>

    
    <table>
        <table border="1" height="350px" width="1350px">
                 <tr>
                     <td colspan="2" align="center" height="300px">

                     <h2>Login</h2>
                    <form action="" method="post" autocomplete="off">
                    <label for="usernameemail">Username or Email : </label>
                    <input type="text" name="usernameemail" id="usernameemail" required value=""> <br>
                    
                    <br><br>

                    <label for="password">Password : </label>
                    <input type="password" name="password" id="password" required value= ""> <br>
                    
                    <br><br>
                    
                    <button type="submit" name="submit">Login</button>
                    </form>

                    <br>
                    <p>Not Registered yet ?? Sign-up for free</p>
                    <a href="registration.php">Registration</a>
                       
                     </td>
                 </tr>
        </table>
    </table>




    
</body>
</html>




<?php
    include("footer.html")
?>
