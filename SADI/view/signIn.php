<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignIn</title>
    <link rel="stylesheet" href="signIn.css">
</head>
<body>


<header>
        <div class="logo">
            <span>TutionX</span>
        </div>
        <div class="nav">


            <ul>
                <li><a href="project/index.php" style="color: #7b9efd;">Home</a></li>
                <li><a href="signIn.php">Sign In</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="signUp.php">Sign Up</a></li>
            </ul>
        </div>

</header> 
<hr><hr>


<div class="main">

    <div class="left">

        <form method="POST" action="../controller/signInCheck.php" onsubmit="return validateForm()">

            <h1>Sign In</h1>
            <input type="text" id="userNameOrEmail" name="userNameOrEmail" placeholder="Email or Username">
            <span id="userNameOrEmailError" class="error"></span>

            <br><br>

            <input type="password" id="password" name="password" placeholder="Password">
            <span id="passwordError" class="error"></span>

            <br><br>

            <input type="submit" value="Sign In" name="signIn">

        </form>

        <br><br>

            <!-- New registration -->
        <div>
            <p><i>Don't have an account?</i></p>
            <!-- Sign Up button -->
            <a href="signUp.php" class="create">Create An Account</a>
        </div>

    </div>
    <div class="right">
        <div class="img">
            <img src="signup.jpg" alt="">
        </div>
    </div>

</div>



<footer>
        <a href="contact.php">Contact</a> <a href="about.php">About</a> <a href="faq.php">FAQ</a> <a href="TeamsOfService.php">Terms</a> <a href="about.php">Discover Us</a>
            <p>Tution BD, Online Platform for Tutoring</p>
            <p>&copyright 2024 All rights reserved</p>
</footer>






<script src="../assets/js/signIn.js"></script>

</body>
</html>