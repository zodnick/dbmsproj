<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="indexstyles.css">
    <link rel="shortcut icon" type="image/x-icon" href="img/Gemini_Generated_Image_e6irwme6irwme6ir.jpeg">
</head>
<body>

<header>
        <div>
        <h1>Rent Easy</h1>
        <img src="img/wallhaven-45pmx9_1920x1200.png">
        </div>
    </header>
<main>
        <div class="login-section">
            <div class="login-box">
                <h2>Login</h2>
                <form id="login-form" action="#" method="post">
                    <div class="input-group">
                        <label for="username">Email </label>
                        <input type="text" id="username" name="username" >
                    </div>
                    <div class="input-group">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" >
                    </div>
                    <div class="input-group">
                       <button class="btn" onclick="home()">Login</button>
                    </div>
                    <div class="forgot-signup">
                        <a href="signup.php">Sign Up</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>
<script>
function home() {
    window.location.href = 'home.php';
}
</script>
</body>

    