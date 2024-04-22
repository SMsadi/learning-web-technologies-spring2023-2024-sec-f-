<?php
    require_once ('../controller/sessionCheck.php');
    include_once('../model/usermodel.php');
    $users = show_users();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registered Users</title>
</head>
<body>
    <table border="1">
        <tr>
            <td>Id</td>
            <td>User_name</td>
            <td>Email</td>
            <td>Phone</td>
            <td>User_type</td>
            <td>Password</td>
        </tr>

       <?php for($i=0; $i<count($users); $i++){
        ?>
        <tr>
            <td><?=$users[$i]['id']?></td>
            <td><?php echo $users[$i]['user_name']?></td>
            <td><?php echo $users[$i]['email']?></td>
            <td><?php echo $users[$i]['phone']?></td>
            <td><?php echo $users[$i]['user_type']?></td>
            <td><?php echo $users[$i]['password']?></td>
        </tr> <?php
       } ?>

    </table><br>

    <a href="home.php"><button>Homepage</button></a>
    <a href="logout.php"><button>Log out</button></a>
</body>
</html>