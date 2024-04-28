
<!--  

<!DOCTYPE html>
<html>
<head>
    <title>Stripe Example</title>
    <meta charset="UTF-8" />
</head>
<body>

    <h1>Stripe Example</h1>
    <form method="post" action="checkout.php">


        <input type="checkbox" required>Terms
        <p><strong>1200.00 BDT</strong></p>
        <button>Pay</button>

        <p>your transaction history</p>
        <a href="https://dashboard.stripe.com/test/payments">click here</a>
    </form>
</body>
</html>

-->

<!DOCTYPE html>
<html>
<head>
    <title>Stripe Example</title>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="onlinePayment.css">
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
    
<form method="post" action="checkout.php" onsubmit="return validateForm()">
        <h1>ONLINE PAYMENT</h1>
        <h4>Enter your payment</h4>


        <input type="text" id="amount" name="amount" placeholder="Enter amount">
        <button type="submit">Pay</button>
    </form>


    <p>your transaction history <a href="https://dashboard.stripe.com/test/payments">click here</a></p>
        


<br>

    <label for="terms">
            <input type="checkbox" id="terms" name="terms" required>
            <span>I agree to the <a href="TeamsOfService.php" target="_blank">Terms of Service</a></span>
    </label>



</div>




    
    
<footer>
        <a href="contact.php">Contact</a> <a href="about.php">About</a> <a href="faq.php">FAQ</a> <a href="TeamsOfService.php">Terms</a> <a href="about.php">Discover Us</a>
            <p>Tution BD, Online Platform for Tutoring</p>
            <p>&copyright 2024 All rights reserved</p>
</footer>




        <script src="../assets/js/onlinePayment.js"> </script>
</body>
</html>