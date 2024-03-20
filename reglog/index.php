
<?php
    include("dashboardHeader.html")
?>





<?php

require 'config.php';
if(!empty($_SESSION["id"])){
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
</head>
<body>
    <h1 class="">Welcome To Dashboard</h1>

    <table border="1" align="right">
            <tr>
                <th colspan="8">
                <a href="profile.php">Edit Profile</a>
                <br><br>
                <a href="">Jobs</a>
                <br><br>
                <a href="">Tutoring History</a>
                <br><br>
                <a href="">Membership</a>
                <br><br>
                <a href="">Premium Request</a>
                <br><br>
                <a href="">Settings</a>
                <br><br>
                </th>
            </tr>
    </table>


   
    <p>Country's #1 Tutor Matching
    & Learning Platform.
    <br>
    Hire a conversant tutor to make your children's learning fun, comprehensive & easier.</p>

    <br><br>
    <a href="logout.php">Logout</a>
</body>
</html>






<?php
    include("footer.html")
?>
