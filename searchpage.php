<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Search Page</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
  <style>
    body {
      background-color: #1a1a1a;
      color: #ffffff;
      font-family: Arial, sans-serif;
    }

    .back-arrow {
      font-size: 24px;
      color: #ffffff;
      cursor: pointer;
    }

    .search-bar {
      margin: 20px 0;
      position: relative;
    }

    .search-bar input {
      width: 100%;
      max-width: 400px;
      background-color: #2b2b2b;
      border: none;
      border-radius: 8px;
      padding: 12px 20px;
      color: #ffffff;
      outline: none;
      font-size: 16px;
    }

    .search-bar input::placeholder {
      color: #888;
    }

    .list-group-item {
      background-color: #2b2b2b;
      border: none;
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 15px 20px;
      border-radius: 8px;
      margin-bottom: 10px;
      color: #ffffff;
    }

    .list-group-item .name {
      display: flex;
      gap: 5px;
    }

    .list-group-item .btn {
      color: white;
      background: #3a3a3a;
      border: none;
      font-size: 18px;
      border-radius: 50%;
      padding: 0;
      width: 30px;
      height: 30px;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .flex-container {
      display: flex;
      justify-content: space-between;
    }

    .container {
      max-width: 1000px;
      margin: auto;
    }
  </style>
</head>
<body>

  <div class="container mt-4">
    <div class="d-flex align-items-center mb-3">
      <span class="back-arrow me-3">&#8592;</span> <!-- Back arrow icon -->
      <div class="search-bar">
        <input type="text" id="searchInput" placeholder="Search" />
      </div>
    </div>

    <div class="flex-container">
      <!-- Left List Group -->
      <ul class="list-group me-2" style="flex: 1;">
        <li class="list-group-item d-flex justify-content-between align-items-center">
          <div class="name">
            <span>FirstName</span>
            <span>LastName</span>
          </div>
          <button class="btn">+</button>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center">
          <div class="name">
            <span>FirstName</span>
            <span>LastName</span>
          </div>
          <button class="btn">+</button>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center">
          <div class="name">
            <span>FirstName</span>
            <span>LastName</span>
          </div>
          <button class="btn">+</button>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center">
          <div class="name">
            <span>FirstName</span>
            <span>LastName</span>
          </div>
          <button class="btn">+</button>
        </li>
      </ul>

      <!-- Right List Group -->
      <ul class="list-group ms-2" style="flex: 1;">
        <li class="list-group-item d-flex justify-content-between align-items-center">
          <div class="name">
            <span>FirstName</span>
            <span>LastName</span>
          </div>
          <button class="btn">+</button>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center">
          <div class="name">
            <span>FirstName</span>
            <span>LastName</span>
          </div>
          <button class="btn">+</button>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center">
          <div class="name">
            <span>FirstName</span>
            <span>LastName</span>
          </div>
          <button class="btn">+</button>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center">
          <div class="name">
            <span>FirstName</span>
            <span>LastName</span>
          </div>
          <button class="btn">+</button>
        </li>
      </ul>
    </div>
  </div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script>
    $(document).ready(function(){
      $('#searchInput').on('input', function() {
        const query = $(this).val().toLowerCase();
        $('.list-group-item').each(function() {
          const name = $(this).find('.name').text().toLowerCase();
          $(this).toggle(name.includes(query));
        });
      });
    });
  </script>
</body>
</html>
