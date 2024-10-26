<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Authentication</title>
    <style>
        /* Basic reset and styling for the container */
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: #f0f2f5;
        }

        .auth-container {
            background: #fff;
            border-radius: 8px;
            width: 100%;
            max-width: 400px;
            padding: 20px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .auth-container h2 {
            margin-bottom: 20px;
            color: #333;
        }

        .auth-form {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .auth-form input {
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
        }

        .auth-form button {
            padding: 10px;
            border: none;
            background-color: #4CAF50;
            color: white;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        .auth-form button:hover {
            background-color: #45a049;
        }

        .toggle-link {
            color: #007BFF;
            cursor: pointer;
            text-decoration: none;
        }

        .toggle-link:hover {
            text-decoration: underline;
        }

        .message {
            font-size: 14px;
            color: #555;
            margin-top: 10px;
        }

        /* Responsive design for smaller screens */
        @media (max-width: 400px) {
            .auth-container {
                padding: 15px;
            }

            .auth-form input,
            .auth-form button {
                font-size: 14px;
            }
        }

        .social-login {
            margin-top: 20px;
        }

        .social-button {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ddd;
            border-radius: 5px;
            cursor: pointer;
            font-size: 14px;
            color: #555;
            background-color: #f9f9f9;
            text-decoration: none;
        }

        .social-button img {
            width: 20px;
            height: 20px;
            margin-right: 10px;
        }

        .social-button:hover {
            background-color: #f0f0f0;
        }
    </style>
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