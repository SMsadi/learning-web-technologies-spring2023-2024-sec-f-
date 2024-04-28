<?php 
    require_once('../model/userModel.php');
    session_start();

    if(!isset($_COOKIE['flag'])){
        header('location: signIn.php');
    }
    $userName = $_SESSION['username'];
    $userData = getUserData($userName);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
    <link rel="stylesheet" href="userDashboard.css">
</head>

<body>



    
<header>
        <div class="logo">
            <span>TutionX</span>
        </div>
        <div class="nav">


            <ul>
                <li><a href="index.php" style="color: #7b9efd;">Home</a></li>
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

    <div class="top">
        
        <h1>Welcome <?= $userData['firstName'] . ' ' . $userData['lastName'] ?></h1>
        <p>logged in as <?= $userData['email'] ?></p>


    </div>


    <div class="bar">

        <a href="viewProfile.php" >View Profile</a>



        <a href="payment.php">Payment</a>



        <a href="payment.php">Payment History</a>



        <a href="" >Tutoring History</a>



        <a href="about.php" >About</a>



        <a href="contact.php">Contact</a>


    </div>


    
</div>


<div class="sidebar">
<a href="viewProfile.php" >View Profile</a>

<br>

<a href="payment.php">Payment</a>

<br>

<a href="payment.php">Payment History</a>

<br>

<a href="" >Tutoring History</a>

<br>

<a href="about.php" >About</a>

<br>

<a href="contact.php">Contact</a>


<br>
</div>

        

      
  
    <form method="post" action="../controller/signOut.php" >
    <button type="submit">Sign Out</button>
    </form>





<footer>
        <a href="contact.php">Contact</a> <a href="about.php">About</a> <a href="faq.php">FAQ</a> <a href="TeamsOfService.php">Terms</a> <a href="about.php">Discover Us</a>
            <p>Tution BD, Online Platform for Tutoring</p>
            <p>&copyright 2024 All rights reserved</p>
</footer>

</body>
</html>
