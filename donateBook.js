document.querySelector('form').addEventListener('submit', function(event) {
    const phoneInput = document.getElementById('phone');
    const phonePattern = /^[0-9]{10}$/; // Example pattern for 10 digits
    if (!phonePattern.test(phoneInput.value)) {
        alert('Please enter a valid 10-digit mobile number.');
        event.preventDefault(); // Prevent form submission
    }
});