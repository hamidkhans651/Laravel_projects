<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Authentication</title>
    <link rel="stylesheet" href="css/auth.css">
    
</head>

<body>
    <div class="auth-container">
        <h2 id="form-title">Login</h2>

        <!-- Login Form (default visible) -->
        <form id="login-form" class="auth-form" onsubmit="handleLogin(event)">
            <input type="email" placeholder="Email" required>
            <input type="password" placeholder="Password" required>
            <button type="submit">Login</button>
            <p class="message">Don't have an account? <span class="toggle-link" onclick="toggleForm()">Register</span></p>
        </form>

        <!-- Social Login Options -->
        <div class="social-login">
            <a href="/" class="social-button">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/53/Google_%22G%22_Logo.svg/512px-Google_%22G%22_Logo.svg.png" alt="Google Logo">
                Continue with Google
            </a>
            <a href="/" class="social-button">
                <img src="https://upload.wikimedia.org/wikipedia/commons/0/05/Facebook_Logo_%282019%29.png" alt="Facebook Logo">
                Continue with Facebook
            </a>
            <a href="/" class="social-button">
                <img src="https://upload.wikimedia.org/wikipedia/commons/0/05/Facebook_Logo_%282019%29.png" alt="Facebook Logo">
                Continue with Twitter
            </a>
        </div>


        <!-- Register Form (initially hidden) -->
        <form id="register-form" class="auth-form" style="display: none;" onsubmit="handleRegister(event)">
            <input type="text" placeholder="Username" required>
            <input type="email" placeholder="Email" required>
            <input type="password" placeholder="Password" required>
            <input type="password" placeholder="Confirm Password" required>
            <button type="submit">Register</button>
            <p class="message">Already have an account? <span class="toggle-link" onclick="toggleForm()">Login</span></p>
        </form>
    </div>

    <script>
        function toggleForm() {
            const loginForm = document.getElementById("login-form");
            const registerForm = document.getElementById("register-form");
            const formTitle = document.getElementById("form-title");

            if (loginForm.style.display === "none") {
                loginForm.style.display = "flex";
                registerForm.style.display = "none";
                formTitle.textContent = "Login";
            } else {
                loginForm.style.display = "none";
                registerForm.style.display = "flex";
                formTitle.textContent = "Register";
            }
        }

        function handleLogin(event) {
            event.preventDefault();
            alert("Login submitted");
            // Implement your login logic here
        }

        function handleRegister(event) {
            event.preventDefault();
            alert("Registration submitted");
            // Implement your registration logic here
        }
    </script>
</body>

</html>