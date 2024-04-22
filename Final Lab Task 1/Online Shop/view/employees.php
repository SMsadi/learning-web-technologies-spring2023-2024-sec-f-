<?php
    require_once('../controller/sessionCheck.php');
    include_once('../model/employeeModel.php');
    $employees = show_employees();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee list</title>
</head>
<body>
    <table border="1">
        <tr>
            <td>Id</td>
            <td>Employee_name</td>
            <td>Contact_no</td>
            <td>User_name</td>
            <td>Password</td>
            <td>Action</td>
        </tr>

        <?php for($i=0; $i<count($employees); $i++){
            ?>
            <tr>
                <td><?=$employees[$i]['id']?></td>
                <td><?php echo $employees[$i]['employee_name']?></td>
                <td><?php echo $employees[$i]['contact_no']?></td>
                <td><?php echo $employees[$i]['user_name']?></td>
                <td><?php echo $employees[$i]['password']?></td>
                <td>
                    <a href="editEmployee.php?id=<?=$employees[$i]['id']?>">Edit</a>
                    <a href="deleteEmployeeController.php?id=<?=$employees[$i]['id']?>">Delete</a>

                </td>
                
            </tr>
            <?php
        }
        ?>
    </table><br>

    <a href="home.php"><button>Homepage</button></a>
    <a href="logout.php"><button>Log out</button></a>
</body>
</html>