<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            // Input focus and blur animations
            $('.custom-input').on('focus', function() {
                $(this).animate({
                    backgroundColor: '#333'
                }, 300);
            }).on('blur', function() {
                $(this).animate({
                    backgroundColor: '#1e1e1e'
                }, 300);
            });
        });

        function validateLoginForm() {
            let valid = true;

            // Clear previous invalid classes and messages
            document.querySelectorAll('.custom-input').forEach(input => {
                input.classList.remove('is-invalid');
                const errorMessage = input.nextElementSibling;
                if (errorMessage) {
                    errorMessage.innerHTML = ''; // Clear previous messages
                }
            });

            // Validate Username
            const username = document.querySelector('input[placeholder="Username"]').value;
            if (username.length < 5) {
                valid = false;
                showError('Username must be at least 5 characters long.', 'Username');
            }

            // Validate Password
            const password = document.querySelector('input[placeholder="Password"]').value;
            const passwordRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{6,}$/;
            if (password.length < 6 || !passwordRegex.test(password)) {
                valid = false;
                showError('Password must ba special character', 'Password');
            }

            return valid;
        }

        function showError(message, field) {
            const inputField = document.querySelector(`input[placeholder="${field}"]`);
            inputField.classList.add('is-invalid');
            const errorMessage = document.createElement('div');
            errorMessage.className = 'invalid-feedback';
            errorMessage.innerHTML = message;
            inputField.parentNode.insertBefore(errorMessage, inputField.nextSibling);
        }

        // Attach validation to the form submission
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.querySelector('form');
            form.addEventListener('submit', function(e) {
                e.preventDefault(); // Prevent default form submission
                if (validateLoginForm()) {
                    alert('Login successful!'); // Placeholder for actual login logic
                    // You can proceed to submit the form via AJAX here
                }
            });
        });
    </script>
</head>

<body class="bg-dark text-white">
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="row">
            <div class="col-lg-6 d-flex justify-content-center align-items-center">
                <img src="download.png" alt="Login Illustration" class="img-fluid" style="max-width: 80%;">
            </div>
            <div class="col-lg-6">
                <h1 class="app-name">APP NAME</h1>
                <h3 class="mb-4">LOGIN</h3>
                <form>
                    <div class="mb-3">
                        <input type="text" class="form-control custom-input" placeholder="Username">
                    </div>
                    <div class="mb-3">
                        <input type="password" class="form-control custom-input" placeholder="Password">
                    </div>
                    <button type="submit" class="btn btn-light btn-lg w-100">Login</button>
                </form>
                <div class="mt-3">
                    <small>Don't have an account? <a href="signup.html" class="text-light">Sign Up</a></small>
                </div>
                <div class="mt-1">
                    <small><a href="forgot.html" class="text-light">Forgot Password?</a></small>
                </div>
            </div>
        </div>
    </div>
</body>

</html>