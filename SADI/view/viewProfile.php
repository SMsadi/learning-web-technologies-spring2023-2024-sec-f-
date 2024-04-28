<?php
    session_start();
    require_once('../model/userModel.php');

    if (!isset($_SESSION['username']) || !isset($_COOKIE['flag'])) {
        header('location: signIn.php');
        exit();
    }

    $userName = $_SESSION['username'];
    $userData = getUserData($userName);
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Profile</title>
    <link rel="stylesheet" href="viewProfile.css">
</head>
<body>

    
<header>
        <div class="logo">
            <span>TutionX</span>
        </div>
        <div class="nav">


            <ul>
                <li><a href="userDashboard.php" style="color: #7b9efd;">Home</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="viewProfile.php"><?= $userData['email'] ?></a></li>
                <li>Tutor ID:<a href="">00<?= $userData['ID'] ?></a></li>
                <li>
                <form method="post" action="../controller/signOut.php" >
    <button type="submit">Sign Out</button>
    </form>
                </li>
               
            </ul>
        </div>

</header> 
<hr><hr>







    <div class="main">

    <div class="left">
    <h1>View Profile</h1>
            <div>
                <p>Full Name: <?= $userData['firstName'] . ' ' . $userData['lastName'] ?></p>
                <p class="text-lg">Username: <?= $userData['userName'] ?></p>
                <p class="text-lg">Email: <?= $userData['email'] ?></p>
                <p class="text-lg">Date of Birth: <?= $userData['DOB'] ?></p>
                <p class="text-lg">Gender: <?= $userData['gender'] ?></p>
                <p class="text-lg">Mobile: <?= $userData['mobile'] ?></p>
                <p class="text-lg">Address: <?= $userData['address'] ?></p>
               
            </div>
    </div>


    
    <div class="right">
              
        <div>
            <a href="../file-upload/file.php">Profile Picture Upload</a>
        </div>
            <br><br><br><br>
        <div>
            <a href="updateProfile.php">Update Profile</a>
        </div>

    </div>




        
    </div>







    
<footer>
        <a href="contact.php">Contact</a> <a href="about.php">About</a> <a href="faq.php">FAQ</a> <a href="TeamsOfService.php">Terms</a> <a href="about.php">Discover Us</a>
            <p>Tution BD, Online Platform for Tutoring</p>
            <p>&copyright 2024 All rights reserved</p>
</footer>


</body>

</html>
