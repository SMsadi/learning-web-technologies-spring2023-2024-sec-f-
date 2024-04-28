<?php 
    $src = $_FILES['myFile']['tmp_name'];
    $des = "../view/imageupload/".$_FILES['myFile']['name'];

    if(move_uploaded_file($src, $des)){
       // header('location: ../view/successPicUpload.php');
        // echo "Success";
        echo 
        "<script> 
        alert('Profile Picture Upload Successfully');
        document.location.href = '/project/view/viewProfile.php';
        </script>" ;
        // header('location: ../view/viewProfile.php');
        
    }else{
        echo "<script> alert('Not Uploaded yet, please try again');</script>" ;
    }

?>