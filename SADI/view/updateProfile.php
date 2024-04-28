<?php
session_start();
require_once('../model/userModel.php');
include('../controller/updateProfileAction.php');

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Profile</title>
</head>

<body>

    <div>
        <div>

            <h1>Update Profile</h1>

            <form method="post" action="../controller/updateProfileAction.php">
                
                <div>
                    <div>
                        <label for="firstName">First Name</label>
                        <input type="text" name="firstName" id="firstName" value="<?= htmlspecialchars($userData['firstName']) ?>" required>
                    </div>


                    <div>
                       
                        <label for="lastName">Last Name</label>
                        <input type="text" name="lastName" id="lastName" value="<?= htmlspecialchars($userData['lastName']) ?>" required>
                    </div>
               
                    <div>
                        <!-- DOB -->
                        <label for="DOB">Date of Birth</label>
                        <input type="text" name="DOB" id="DOB" value="<?= htmlspecialchars($userData['DOB']) ?>" required>
                    </div>


                    <div>
                        <label for="gender">Gender</label>
                        <input type="text" name="gender" id="gender" value="<?= htmlspecialchars($userData['gender']) ?>" required>
                    </div>


                    <div>
                        <label for="mobile">Mobile</label>
                        <input type="text" name="mobile" id="mobile" value="<?= htmlspecialchars($userData['mobile']) ?>" required>
                    </div>


                    <div>
                        <label for="address">Address</label>
                        <input type="text" name="address" id="address" value="<?= htmlspecialchars($userData['address']) ?>" required>
                    </div>


                    <div>
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" value="<?= htmlspecialchars($userData['email']) ?>" required>
                    </div>
                </div>

               
                <div>
                    <input type="submit" value="Update Profile" name="updateProfile">
                    
                </div>
            </form>
        </div>
    </div>

</body>

</html>
