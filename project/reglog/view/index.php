
<?php
    include("dashboardHeader.html")
?>





<?php

require '../model/config.php';
if(!empty($_SESSION["id"])){
    $id = $_SESSION["id"];
    $id = $_SESSION["id"];
    $result = mysqli_query($conn, "SELECT * FROM tb_user WHERE id=$id ");
    $row = mysqli_fetch_assoc($result);
}else{
    header("Location: login.php");
}


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <p class="Country">Country's #1 Online Tutoring Platform.</p> <br>

    <table border="1" align="right" height="600px">

            <tr>
                <th colspan="8">
                <a href="index.php">Dashboard</a>
                <br><br><br><br>
                <a href="">Jobs</a>
                <br><br><br><br>
                <a href="profile.php">Profile</a>
                <br><br><br><br>
                <a href="">Payment</a>
                <br><br><br><br>
                <a href="">Confirmation Letter</a>
                <br><br><br><br>
                <a href="">Membership</a>
                <br><br><br><br>
                <a href="">Settings</a>
                </th>
            </tr>

    </table>


    <h3 class=""> Hi, <?php echo $row["email"] ?> </h3>
    <h1 class="">Welcome <?php echo $row["name"] ?> </h1>
    <p>We are so delighted about your arrival on our platform. <br>You can apply your desired "Tuition Job" from your personalized dashboard. <br> So, don't be late apply & enjoy your tutoring journey!!!</p>

    <br>

    <h3>80% Complete & organized profile may help to get better
    response Then apply your jobs</h3>



    <div class="">
    <h3>Looking for interesting tuition jobs to excel your teaching experience?
    If teaching jobs interests you, then you are on the right place. We often have 500+ open home tuition jobs that are genuine and 100% verified. Whether you are starting your career as a tuition teacher or an expert in your field, we can help you find your next big tuition job. You can search and apply to the tuition jobs that best fit your skills, favorable location, class and subjects.</h3>
    </div>



    <div class="">
    <br>
    <span class="">Math</span>
    <span class="">Physics</span>
    <span class="">Chemistry </span>
    <span class="">Biology</span>
    and etc.
    </div>


    <br><br><br><br>



    <div class="">
    How it Works? <br>
    Become a teacher by creating your profile here and tell us about yourself, your skills, subject expertise, qualifications, teaching ability and experience. Be sure to provide as much information as you can in your profile so that we can speed up the verification process and your profile starts showing up in the right spot when parents and students are searching for home tutors on our website. To Create your profile, <a href="profile.php" class="">click here</a>
    </div>




    <br><br>
    
</body>
</html>







<?php
    include("footer.html")
?>
