<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reistration Form</title>
</head>
<body>
   
    <form action="registration.php" method="post">

        <h1>Create Account</h1>

        <label for="firstName">First Name:</label><br>
        <input type="text" id="firstName" name="firstName"><br><br>

        <label for="lastName">Last Name:</label><br>
        <input type="text" id="lastName" name="lastName"><br><br>
    
        <label for="dob">Date of Birth : </label>
        <input type="date" name="dob" id="dob"><br><br>

        <label>Gender:</label><br>
        <input type="radio" id="male" name="gender">
        <label for="male">Male</label><br>
        <input type="radio" id="female" name="gender">
        <label for="female">Female</label><br><br>

        <label for="phone">Phone:</label><br>
        <input type="text" id="phone" name="phone"><br><br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email"><br><br>

        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password"><br><br>

        <label for="confirmPassword">Confirm Password:</label><br>
        <input type="password" id="confirmPassword" name="confirmPassword"><br><br>

        <input type="submit" value="submit" name="submit">

    </form>

</body>
</html>



<?php

$firstName = "";
$lastName = "";
$dob = "";
$gender = "";
$phone = "";
$email = "";


$firstName_error = "";
$lastName_error = "";
$email_error = "";
$dob_error = "";


function sanitize_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    if (empty($_POST["firstName"])) {
        $firstName_error = "Name required";
    } else {
        $firstName = sanitize_input($_POST["firstName"]);
        
        if (!preg_match("/^[a-zA-Z][a-zA-Z .-]*$/", $firstName)) {
            $firstName_error = "Invalid name";
        }
    }


    if (empty($_POST["lastName"])) {
        $lastName_error = "Name required";
    } else {
        $lastName = sanitize_input($_POST["lastName"]);
        
        if (!preg_match("/^[a-zA-Z][a-zA-Z .-]*$/", $lastName)) {
            $lastName_error = "Invalid name";
        }
    }

    
    if (empty($_POST["email"])) {
        $email_error = "Email required";
    } else {
        $email = sanitize_input($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $email_error = "Invalid email";
        }
    }

   
    if (empty($_POST["dob"])) {
        $dob_error = "Date of Birth required";
    } else {
        $dob = sanitize_input($_POST["dob"]);
       
        if (!preg_match("/^(0[1-9]|[12][0-9]|3[01])-(0[1-9]|1[0-2])-(19|20)[0-9]{2}$/", $dob)) {
            $dob_error = "Invalid date of birth";
        }
    }
}


if ($firstName_error || $lastName_error || $email_error) {
    echo "please check again";
} else {
    echo "Form submitted";
   
}



?>