<!DOCTYPE html>
<html>
<head>
  <title>Card Example</title>
  <style>
    /* Container styling */
    .container {
        display: flex;
        flex-wrap: wrap; /* Allow cards to wrap to the next line */
        justify-content: space-around; /* Distribute space between cards */
        gap: 20px; /* Add space between cards */
    }

    /* Card styling */
    .card {
      width: calc(33.33% - 20px); /* Set width for each card */
      padding: 20px;
      border: 1px solid #ccc;
      border-radius: 10px;
      box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
      text-align: center;
      margin-bottom: 20px; /* Space between rows */
    }

    /* Button styling */
    .button {
      padding: 10px 20px;
      border: none;
      border-radius: 5px;
      background-color: #3498db;
      color: white;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      margin-top: 10px;
      cursor: pointer;
    }

    /* Button hover effect */
    .button:hover {
      background-color: #2980b9;
    }
  </style>
</head>
<body>

<div class="container">
  <div class="card">
    <h2>Computer Accessories</h2>
    <p>Some description or content here.</p>
    <a href="addComputer.php" class="button">Add Computer Accessories</a>
  </div>
  <div class="card">
    <h2>Accessories</h2>
    <p>Some description or content here.</p>
    <a href="addAccessories.php" class="button">Add Accessories</a>
  </div>
  <div class="card">
    <h2>Men Clothing</h2>
    <p>Some description or content here.</p>
    <a href="another_page.html" class="button">Go to Another Page</a>
  </div>
  <div class="card">
    <h2>Women Clothing</h2>
    <p>Some description or content here.</p>
    <a href="another_page.html" class="button">Go to Another Page</a>
  </div>
  <div class="card">
    <h2>Home Decor</h2>
    <p>Some description or content here.</p>
    <a href="another_page.html" class="button">Go to Another Page</a>
  </div>
  <div class="card">
    <h2>Home Appliances</h2>
    <p>Some description or content here.</p>
    <a href="another_page.html" class="button">Go to Another Page</a>
  </div>
</div>

</body>
</html>
