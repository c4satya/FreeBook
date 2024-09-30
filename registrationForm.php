<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
    <link rel="stylesheet" href="registrationStyles.css">
</head>
<body>
    <div class="container">
        <h1>User Registration</h1>
        <form action=""></form>
        <form id="registrationForm" action="signUp.php" method="post">
            <label id="lbl" for="fullName">Full Name:</label> <br>
            <input class="inputBox" type="text" id="fullName" name="name" required>

            <label id="lbl" for="email">Email Address:</label> <br>
            <input class="inputBox" type="email" id="email" name="email" required>
            <label id="lbl"for="phone">Phone Number (Optional):</label> <br>
            <input  class="inputBox" type="tel" id="phone" name="phone">


            <label id="lbl" for="password">Password:</label> <br>
            <input class="inputBox" type="password" id="password" name="password" required>

            <label id="lbl" for="confirmPassword">Confirm Password:</label><br>
            <input class="inputBox" type="text" id="confirmPassword" name="confirmPassword" required>

           
         
           

            <label id="lbl " class="tick">
                <input  type="checkbox" id="newsletter" name="newsletter">
                Yes, I want to receive newsletters and updates.
            </label>
              <br>
            <label id="lbl " class="tick">
                <input  type="checkbox" id="terms" name="terms" required>
                I agree to the <a href="#">Terms of Service</a> and <a href="#">Privacy Policy</a>.
            </label>

      

            <button type="submit" name="signUp">Sign Up</button>
        </form>

        <p>Already have an account? <a href="login.html">Log In</a></p>
    </div>

    
</body>
</html>
