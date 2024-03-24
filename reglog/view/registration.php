
<?php
    include("header.html")
?>



<?php
     include("../controller/registrationCheck.php");
?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
</head>
<body>




<table>
        <table border="1" height="300px" width="1350px">
                 <tr>
                     <td colspan="2" align="center" height="300px">

                        <form action="" method="post" autocomplete="off">
                        <h2>Registration: </h2>
                        <br>
                        <label for="name">Name :</label>
                        <input type="text" name="name" id="name" required value=""> <br>
                        <br>
                        <label for="username">Username :</label>
                        <input type="text" name="username" id="username" required value=""> <br>
                        <br>
                        <label for="email">Email :</label>
                        <input type="email" name="email" id="email" required value=""> <br>
                        <br>
                        <label for="password">Password :</label>
                        <input type="password" name="password" id="password" required value=""> <br>
                        <br>
                        <label for="confirmpassword">Confirm Password :</label>
                        <input type="password" name="confirmpassword" id="confirmpassword" required value=""> <br>
                        <br>
                        <button type="submit" name="submit">Register</button>

                        </form>

                        <br>
                        <p>Already have an account ?? </p>
                        <a href="login.php">Login Here</a>
                       <br><br>
                     </td>
                 </tr>
        </table>
    </table>


    
</body>
</html>






<?php
    include("footer.html")
?>
