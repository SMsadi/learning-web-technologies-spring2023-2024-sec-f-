function validateForm() {
    var fileInput = document.getElementById('myFile');
    
    var allowedTypes = ['image/jpeg', 'image/jpg', 'image/png', 'image/gif'];
    
    if (!fileInput.files[0]) {
        return false; // No file selected
    }

    if (!allowedTypes.includes(fileInput.files[0].type)) {
        document.getElementById('fileTypeError').style.display = 'block';
        return false;
    } else {
        document.getElementById('fileTypeError').style.display = 'none';
        return true;
    }
}