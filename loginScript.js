document.getElementById('loginForm').addEventListener('submit', function(event) {
    event.preventDefault();

    // Basic form validation
    const username = document.getElementById('username').value;
    const password = document.getElementById('password').value;

    if (username === '' || password === '') {
        document.getElementById('message').textContent = 'Please fill in all fields.';
        return;
    }

    // Simulate a login request
    // Here you would typically make an API call to verify the credentials
    document.getElementById('message').textContent = 'Logging in...';

    // For demo purposes, we simulate a successful login after 2 seconds
    setTimeout(() => {
        document.getElementById('message').textContent = 'Login successful!';
        // Redirect or handle successful login
        // window.location.href = '/dashboard';
    }, 2000);
});
