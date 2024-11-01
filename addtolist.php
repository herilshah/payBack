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

    .checkbox {
      appearance: none;
      width: 20px;
      height: 20px;
      border-radius: 50%;
      border: 2px solid #ffffff;
      outline: none;
      cursor: pointer;
      background-color: #2b2b2b;
      position: relative;
    }

    .checkbox:checked {
      background-color: #4CAF50; /* Change to desired color when checked */
      border: 2px solid #4CAF50;
    }

    .checkbox:checked::after {
      content: '';
      position: absolute;
      top: 4px;
      left: 4px;
      width: 10px;
      height: 10px;
      background-color: white;
      border-radius: 50%;
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
          <input type="checkbox" class="checkbox" />
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center">
          <div class="name">
            <span>FirstName</span>
            <span>LastName</span>
          </div>
          <input type="checkbox" class="checkbox" />
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center">
          <div class="name">
            <span>FirstName</span>
            <span>LastName</span>
          </div>
          <input type="checkbox" class="checkbox" />
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center">
          <div class="name">
            <span>FirstName</span>
            <span>LastName</span>
          </div>
          <input type="checkbox" class="checkbox" />
        </li>
      </ul>

      <!-- Right List Group -->
      <ul class="list-group ms-2" style="flex: 1;">
        <li class="list-group-item d-flex justify-content-between align-items-center">
          <div class="name">
            <span>FirstName</span>
            <span>LastName</span>
          </div>
          <input type="checkbox" class="checkbox" />
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center">
          <div class="name">
            <span>FirstName</span>
            <span>LastName</span>
          </div>
          <input type="checkbox" class="checkbox" />
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center">
          <div class="name">
            <span>FirstName</span>
            <span>LastName</span>
          </div>
          <input type="checkbox" class="checkbox" />
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center">
          <div class="name">
            <span>FirstName</span>
            <span>LastName</span>
          </div>
          <input type="checkbox" class="checkbox" />
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
