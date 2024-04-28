function validateForm() {
    let userNameOrEmailInput = document.getElementById('userNameOrEmail');
    let passwordInput = document.getElementById('password');

    let isValid = true;

    // Reset error messages
    let errorMessages = document.querySelectorAll('.error');
    errorMessages.forEach(msg => msg.textContent = '');

    // Validation for Username or Email
    let userNameOrEmail = userNameOrEmailInput.value.trim();
    if (userNameOrEmail === '') {
        showError('userNameOrEmail', 'Username or Email cannot be empty');
        isValid = false;
    }

    // Validation for Password
    let password = passwordInput.value.trim();
    if (password.length < 6) {
        showError('password', 'Password must be at least 6 characters long');
        isValid = false;
    }

    // If all validations pass, return true
    return isValid;
}

function showError(field, message) {
    let errorElement = document.getElementById(field + 'Error');
    errorElement.textContent = message;
}