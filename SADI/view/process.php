<?php


if(isset($_POST["btn-send"]))
{
    
    $username = $_POST['UName'];
    $Eamil = $_POST['Email'];
    $Subject = $_POST['Subject'];
    $Msg = $_POST['msg'];

    if(empty($UserName) || empty($Email) || empty($Subject) || empty($Msg))
    {
        echo "Please fill-up the required fields";
    }

}

?>