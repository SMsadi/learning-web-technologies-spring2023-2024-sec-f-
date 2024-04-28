<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Picture Upload</title>
</head>
<body>
<div>
    <div>
        <form id="uploadForm" method="POST" action="upload.php" enctype="multipart/form-data">

            <div>
                <label for="file">Upload Profile Picture</label>
                <div>
                    <!-- Removed 'multiple' attribute to allow only one file -->
                    <input id="myFile" name="myFile" type="file" accept="image/jpeg, image/jpg, image/png, image/gif">
                    <span id="fileTypeError" style="color: red; display: none;">Please upload an image file (jpg, jpeg, png, gif)</span>
                </div>
            </div>

            <div>
                <span>
                    <input type="submit" value="Upload Profile Picture" name="submit" onclick="return validateForm()">
                </span>
            </div>

        </form>
    </div>
</div>

<script src="../assets/js/profilePicture.js"> </script>

</body>
</html>