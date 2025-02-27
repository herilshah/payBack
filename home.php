<?php
include 'db_connect.php';

// Fetch user_id from URL
$user_id = isset($_GET['user_id']) ? intval($_GET['user_id']) : 0;

// Fetch username using user_id
$username = '';
if ($user_id > 0) {
    $query = "SELECT username FROM users WHERE user_id = $user_id";
    $result = mysqli_query($conn, $query);
    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $username = $row['username'];
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Expense Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #121212;
            color: #fff;
            font-family: Arial, sans-serif;
        }
        .container {
            max-width: 1200px;
            margin: auto;
            padding-top: 2rem;
        }
        .header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding-bottom: 1rem;
            border-bottom: 1px solid #333;
        }
        .header h1 {
            font-size: 1.5rem;
            font-weight: bold;
        }
        .header .nav-link {
            color: #bbb;
        }
        .search-bar {
            width: 100%;
            max-width: 500px;
            background-color: #1e1e1e;
            color: #fff;
            border: 1px solid #444;
            border-radius: 20px;
            padding: 0.5rem 1rem;
        }
        .btn-add-expense {
            background-color: #198754;
            color: #fff;
            border: none;
            border-radius: 20px;
            padding: 0.5rem 1.5rem;
        }
        .friends-section {
            padding-top: 1.5rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .friends-section h2 {
            font-size: 1.25rem;
            color: #aaa;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Header -->
        <div class="header">
            <input type="text" class="search-bar" placeholder="Search for people...">
            <h1>APP NAME</h1>
            <a href="#" class="nav-link">Contact Us</a>
        </div>

        <div class="friends-section">
            <h2>Add Friends by Searching <?php echo htmlspecialchars($username); ?></h2>
            <button class="btn btn-add-expense">Add Expenses</button>
        </div>
        
        <!-- Display username if available -->
        <?php if ($username): ?>
            <div class="mt-3" class="friends-section">
                <h3>Welcome, <?php echo htmlspecialchars($username); ?>!</h3>
            </div>
        <?php endif; ?>
    </div>
</body>
</html>
