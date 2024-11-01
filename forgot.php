<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            // Input focus and blur animations
            $('.custom-input').on('focus', function() {
                $(this).animate({ backgroundColor: '#333' }, 300);
            }).on('blur', function() {
                $(this).animate({ backgroundColor: '#1e1e1e' }, 300);
            });
        });

        function validateForgotPasswordForm() {
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
            if (username.length < 3) {
                valid = false;
                showError('Username must be at least 3 characters long.', 'Username');
            }

            // Validate New Password
            const newPassword = document.querySelector('input[placeholder="New Password"]').value;
            if (newPassword.length < 6) {
                valid = false;
                showError('New Password must be at least 6 characters long.', 'New Password');
            }

            // Validate Confirm New Password
            const confirmPassword = document.querySelector('input[placeholder="Confirm New Password"]').value;
            if (newPassword !== confirmPassword) {
                valid = false;
                showError('Passwords do not match.', 'Confirm New Password');
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
                if (validateForgotPasswordForm()) {
                    alert('Password reset link sent!'); // Placeholder for actual reset logic
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
                <img src="download.png" alt="Forgot Password Illustration" class="img-fluid" style="max-width: 80%;">
            </div>
            <div class="col-lg-6">
                <h1 class="app-name">APP NAME</h1>
                <h3 class="mb-4">FORGOT PASSWORD</h3>
                <form>
                    <div class="mb-3">
                        <input type="text" class="form-control custom-input" placeholder="Username" required>
                    </div>
                    <div class="mb-3">
                        <input type="password" class="form-control custom-input" placeholder="New Password" required>
                    </div>
                    <div class="mb-3">
                        <input type="password" class="form-control custom-input" placeholder="Confirm New Password" required>
                    </div>
                    <button type="submit" class="btn btn-light btn-lg w-100">Reset Password</button>
                </form>
                <div class="mt-3">
                    <small>Remembered your password? <a href="login.html" class="text-light">Login</a></small>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
