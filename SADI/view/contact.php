<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="contact.css">
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



 <div class="container">

 <div class="left">

  <p>We are here for your help!</p>
  <p>info@tuitionX.com.bd</p>
  <p>House: 20, Sector:1 Uttara ,Dhaka-1216</p>
  
 </div>
   

 
 <div class="right">
  
          <form id="contact" action="mail.php" method="post" onsubmit="return validateForm()">
                <h1>Contact Us</h1>
                <br><br>
                <input placeholder="Your name" name="name" id="name" type="text" tabindex="1" autofocus>
                <span id="nameError" class="error"></span>
                <br> <br>
                <input placeholder="Your Email Address" name="email" id="email" type="email" tabindex="2">
                <span id="emailError" class="error"></span>
                <br> <br>
                <input placeholder="Type your subject line" type="text" name="subject" tabindex="4">
                <br> <br>
                <textarea name="message" placeholder="Type your Message Details Here..." tabindex="5"></textarea>
                <br> <br>

                <button type="submit" name="send" id="contact-submit">Submit Now</button>
          </form>
 </div>
   




  </div>



  
<footer>
        <a href="contact.php">Contact</a> <a href="about.php">About</a> <a href="faq.php">FAQ</a> <a href="TeamsOfService.php">Terms</a> <a href="about.php">Discover Us</a>
            <p>Tution BD, Online Platform for Tutoring</p>
            <p>&copyright 2024 All rights reserved</p>
</footer>






  <script src="../assets/js/contact.js"> </script>

</body>

</html>