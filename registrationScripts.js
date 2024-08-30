document.getElementById('registrationForm').addEventListener('submit', function (event) {
    event.preventDefault(); // Prevent form submission for validation

    const password = document.getElementById('password').value;
    const confirmPassword = document.getElementById('confirmPassword').value;
    const terms = document.getElementById('terms').checked;

    if (password !== confirmPassword) {
        alert('Passwords do not match!');
        return;
    }

    if (!terms) {
        alert('You must agree to the Terms of Service and Privacy Policy.');
        return;
    }

    // Add your form submission logic here, e.g., send data to server

    alert('Registration successful!');
});
