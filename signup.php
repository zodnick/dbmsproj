<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup Page</title>
    <link rel="stylesheet" href="signupstyles.css">
    <link rel="shortcut icon" type="image/x-icon" href="img/Gemini_Generated_Image_e6irwme6irwme6ir.jpeg">
</head>
<body>

    <div class="signup-container">
        <div class="signup-box">
            <h2>Sign Up</h2>
            <form id="signup-form" action="#" method="post"> <!-- Add the correct form ID -->
                <div class="input-group">
                    <label for="firstName">First Name</label>
                    <input type="text" id="firstName" name="first-name" required> <!-- Change id to "firstName" -->
                </div>
                <div class="input-group">
                    <label for="middleName">Middle Name</label>
                    <input type="text" id="middleName" name="middle-name"> <!-- Change id to "middleName" -->
                </div>
                <div class="input-group">
                    <label for="lastName">Last Name</label>
                    <input type="text" id="lastName" name="last-name" required> <!-- Change id to "lastName" -->
                </div>
                <div class="input-group">
                    <label for="mobileNumber">Mobile Number</label>
                    <input type="tel" id="mobileNumber" name="mobile-number" required> <!-- Change id to "mobileNumber" -->
                </div>
                <div class="input-group">
                    <label for="email">Email Address</label>
                    <input type="email" id="email" name="email" required> <!-- No changes needed here -->
                </div>
                <div class="input-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" required> <!-- No changes needed here -->
                </div>
                <div class="input-group">
                    <button type="submit" class="btn" onclick="home()">Sign Up</button>
                </div>
                <div class="login-link">
                    <p>Already have an account? <a href="index.php">Login</a></p>
                </div>
            </form>
        </div>
    </div>

    <script>
function home() {
    window.location.href = 'home.php';
}
</script>

</body>
</html>
