<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="signUp.css">
</head>
<body>



<header>
        <div class="logo">
            <span>TutionX</span>
        </div>
        <div class="nav">


            <ul>
                <li><a href="index.php" style="color: #7b9efd;">Home</a></li>
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
    <h2 class="Create">Create a New Account</h2>
    <p class="already">Already have an account? <a href="signIn.php" target="_blank">Sign In Here</a></p>

    <br><br>

    <form method="POST" action="../controller/signUpCheck.php" onsubmit="return validateForm()">

        <div>
            <label for="firstName">First Name: </label>
            <input id="firstName" name="firstName" placeholder="First Name" type="text" required>
            <span id="firstNameError" class="error"></span>
        </div>

        <br>

        <div>
            <label for="lastName">Last Name: </label>
            <input id="lastName" name="lastName" placeholder="Last Name" type="text" required>
            <span id="lastNameError" class="error"></span>
        </div>

        <br>

        <div>
            <label for="email">Email: </label>
            <input id="email" name="email" placeholder="abc@mail.com" type="email" required>
            <span id="emailError" class="error"></span>
        </div>

        <br>

        <div>
            <label for="userName">Username: </label>
            <input type="text" id="userName" name="userName" placeholder="Enter your username" required>
            <span id="userNameError" class="error"></span>
        </div>

        <br>

        <div>
            <label for="DOB">Birthday: </label>
            <input id="DOB" name="DOB" type="date">
            <span id="DOBError" class="error"></span>
        </div>

        <br>

        <div>
            <label for="gender">Gender</label>
            <input type="radio" name="gender" id="female" value="female">
            <label for="female">Female</label>

            <input type="radio" name="gender" id="male" value="male">
            <label for="male">Male</label>

            <input type="radio" name="gender" id="other" value="other">
            <label for="other">Other</label>
            <span id="genderError" class="error"></span>
        </div>

        <br>

        <div>
            <label for="mobile">Phone or Mobile: </label>
            <input type="tel" id="mobile" name="mobile">
        </div>

        <br>

        <div>
            <label for="address">Address: </label>
            <textarea id="address" name="address" placeholder="Enter your address" rows="5"></textarea>
        </div>

        <br>

        <div>
            <label for="password">Password</label>
            <input id="password" name="password" type="password" required>
            <span id="passwordError" class="error"></span>
        </div>

        <br>

        <div>
            <label for="confirmPassword">Re-type Password: </label>
            <input id="confirmPassword" name="confirmPassword" type="password" required>
            <span id="confirmPasswordError" class="error"></span>
        </div>

        <br>

        <div>
            <input type="submit" value="Sign Up" name="signUp">
        </div>

        <br>

        <label for="terms">
            <input type="checkbox" id="terms" name="terms" required>
            <span>I agree to the <a href="TeamsOfService.php" target="_blank">Terms of Service</a></span>
        </label>
    </form>
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



<script src="../assets/js/signUp.js"></script>


</body>
</html>