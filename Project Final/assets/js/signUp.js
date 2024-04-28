function validateForm() {
    let firstNameInput = document.getElementById('firstName');
    let lastNameInput = document.getElementById('lastName');
    let userNameInput = document.getElementById('userName');
    let emailInput = document.getElementById('email');
    let dobInput = document.getElementById('DOB');
    let genderRadios = document.getElementsByName('gender');
    let passwordInput = document.getElementById('password');
    let confirmPasswordInput = document.getElementById('confirmPassword');

    let isValid = true;

    // Reset error messages
    let errorMessages = document.querySelectorAll('.error');
    errorMessages.forEach(msg => msg.textContent = '');

    // Validation for First Name
    let firstName = firstNameInput.value;
    if (firstName === '') {
        showError('firstName', 'First name cannot be empty');
        isValid = false;
    } else if (!/^[a-zA-Z][a-zA-Z.\- ]+$/.test(firstName)) {
        showError('firstName', 'Invalid format. First name must contain at least two words and start with a letter');
        isValid = false;
    }

    // Validation for Last Name
    let lastName = lastNameInput.value.trim();
    if (lastName === '') {
        showError('lastName', 'Last name cannot be empty');
        isValid = false;
    } else if (!/^[a-zA-Z][a-zA-Z.\- ]+$/.test(lastName)) {
        showError('lastName', 'Invalid format. Last name must contain at least two words and start with a letter');
        isValid = false;
    }

    // Validation for Username
    let userName = userNameInput.value.trim();
    if (userName === '') {
        showError('userName', 'Username cannot be empty');
        isValid = false;
    } else if (!/^[a-zA-Z][a-zA-Z0-9\s]*$/.test(userName)) {
        showError('userName', 'Invalid format. Username must start with a letter, contain at least two words, and include numbers');
        isValid = false;
    }

    // Validation for Email
    let email = emailInput.value.trim();
    if (email === '') {
        showError('email', 'Email cannot be empty');
        isValid = false;
    } else if (!isValidEmail(email)) {
        showError('email', 'Please enter a valid email address');
        isValid = false;
    }

    // Validation for Date of Birth
    let dob = dobInput.value;
    if (dob === '') {
        showError('DOB', 'Birthday cannot be empty');
        isValid = false;
    } else {
        let birthYear = new Date(dob).getFullYear();
        if (birthYear < 1950 || birthYear > 2005) {
            showError('DOB', 'Please enter a valid Date of Birth between 1950 and 2005');
            isValid = false;
        }
    }

    // Validation for Gender
    let selectedGender = false;
    for (let i = 0; i < genderRadios.length; i++) {
        if (genderRadios[i].checked) {
            selectedGender = true;
            break;
        }
    }
    if (!selectedGender) {
        showError('gender', 'Please select a gender');
        isValid = false;
    }

    // Validation for Password
    let password = passwordInput.value.trim();
    if (password.length < 6) {
        showError('password', 'Password must be at least 6 characters long');
        isValid = false;
    }

    // Validation for Confirm Password
    let confirmPassword = confirmPasswordInput.value.trim();
    if (confirmPassword !== password) {
        showError('confirmPassword', 'Passwords do not match');
        isValid = false;
    }

    // If all validations pass, return true
    return isValid;
}

function isValidEmail(email) {
    return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);
}

function showError(field, message) {
    let errorElement = document.getElementById(field + 'Error');
    errorElement.textContent = message;
}