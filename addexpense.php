<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Expense</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Full screen background and font styling */
        body {
            background-color: #121212;
            color: #fff;
            font-family: Arial, sans-serif;
            margin: 0;
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            padding: 20px;
        }

        /* Header */
        .header {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }
        .back-arrow {
            font-size: 1.5rem;
            cursor: pointer;
            color: #ccc;
            margin-right: 10px;
        }
        .title {
            font-size: 1.5rem;
            font-weight: bold;
        }

        /* Labels and input fields */
        .form-label {
            color: #bbb;
            font-size: 0.9rem;
        }
        .form-control {
            background-color: #1e1e1e; /* Keep the background dark */
            border: none;
            border-bottom: 1px solid #444;
            color: #fff; /* Text color remains white */
            padding: 5px 0;
            width: 50%; /* Take half the screen width */
        }
        .form-control:focus {
            box-shadow: none;
            border-color: #28a745; /* Focus border color */
            background-color: #1e1e1e; /* Keep background dark on focus */
        }
        .form-control::placeholder {
            color: #fff; /* Placeholder text color */
            opacity: 0.7; /* Slightly less opaque */
        }

        /* Split options buttons */
        .split-options button {
            background-color: #2c2c2c;
            border: 1px solid #444;
            color: #ccc;
            margin-right: 5px;
            margin-bottom: 10px;
            font-size: 0.9rem;
            padding: 8px 12px;
        }
        .split-options .active {
            color: #28a745;
            border-color: #28a745; /* Active green border */
        }
        .split-options .owe-full {
            color: #f44336;
            border-color: #f44336; /* Red border for owing full */
        }

        /* Summary message */
        .summary {
            color: #bbb;
            font-size: 0.9rem;
            margin-top: 10px;
        }

        /* Add Expense button */
        .btn-add-expense {
            width: auto; /* Smaller button */
            background-color: #28a745;
            border: none;
            color: #fff;
            margin-top: 20px;
            padding: 10px 20px;
        }
    </style>
</head>
<body>
<?php
    
    $dbHost = 'localhost';  
    $dbName = 'payback';
    $dbUsername = 'root';
    $dbPassword = '';

    $conn = mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName);

    ?>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            // Toggle active state for split options
            $('.split-options button').on('click', function() {
                $('.split-options button').removeClass('active owe-full');
                $(this).addClass($(this).hasClass('owe-full') ? 'owe-full' : 'active');
            });

            // Add expense button functionality
            $('.btn-add-expense').on('click', function() {
                alert('Expense added successfully!');
            });
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

     <!-- Header -->
     <div class="header">
        <span class="back-arrow" onclick="window.location.href='home.html'">&larr;</span>
        <span class="title">Add Expense</span>
    </div>

    <!-- Form Elements -->
    <form>
        <div class="mb-3">
            <label class="form-label">With you and:</label>
            <input type="text" class="form-control" placeholder="FirstName">
        </div>
        <div class="mb-3">
            <label class="form-label">Description:</label>
            <input type="text" class="form-control" placeholder="Enter description">
        </div>
        <div class="mb-3">
            <label class="form-label">Amount:</label>
            <input type="number" class="form-control" placeholder="Enter amount">
        </div>

        <!-- Split Options -->
        <div class="split-options">
            <button type="button" class="btn" id="split-equally">You paid and split equally</button>
            <button type="button" class="btn" id="owed-full">You are owed the full amount</button>
            <button type="button" class="btn" id="owed-full-name">FirstName is owed the full amount</button>
            <button type="button" class="btn" id="split-equally-name">FirstName paid and split equally</button>
        </div>

        <!-- Summary -->
        <div class="summary">You/FirstName owes Rs: 1200 to FirstName/You</div>

        <!-- Add Expense Button -->
        <button type="button" class="btn btn-add-expense">Add Expenses</button>
    </form>
</body>
</html>
