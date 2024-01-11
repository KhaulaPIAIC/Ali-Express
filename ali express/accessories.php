<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Product Cards</title>
</head>
<body>
<div class="container">
    <?php
    // Database connection
    include "connect.php";
    // Fetch product data from the database
    $sql = "SELECT AID, Aname, Aprice, Aimage FROM accosseries";
    $result = $con->query($sql);

    if ($result && $result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo '<div class="card">';
            // Use the URL directly in the src attribute of the img tag
            echo '<img src="' . htmlspecialchars($row['Aimage']) . '" alt="' . htmlspecialchars($row['Aname']) . '" style="width:300px; height:250px;">';
            echo '<h3>' . htmlspecialchars($row['Aname']) . '</h3>';
            echo '<h4>Price: ' . htmlspecialchars($row['Aprice']) . '</h4>';
            echo "<a href='#' class='add-to-cart' onclick='addToCart(" . htmlspecialchars($row['AID']) . ", \"" . htmlspecialchars($row['Aname']) . "\")'>Add to Cart</a>";
            echo '</div>';
        }
    } else {
        echo "No products found!";
    }

    $con->close();
    ?>
</div>
    <script>
        function addToCart(AID, Aname) {
            // Display a popup message with the product details
            alert('Added to cart:\nProduct ID: ' + AID + '\nProduct Name: ' + Aname);

            // Here, you can perform additional actions like making an AJAX call to add the product to the cart
            // For demonstration purposes, this example just shows an alert
        }
    </script>
    <style>
    .container {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-around;
        align-items: center;
    }

    .card {
        width: 300px;
        margin: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        border-radius: 5px;
        padding: 10px;
        text-align: center;
        float: left;
    }

    .card img {
        width: 100%;
        border-top-left-radius: 5px;
        border-top-right-radius: 5px;
        width: 100px;
        height: 100px;
        object-fit:cover;
        margin-bottom: 10px;
    }

    .card-body {
        padding: 20px;
        text-align: center;
    }

    .add-to-cart {
        background-color: red;
        color: white;
        border: none;
        padding: 5px 10px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 14px;
        border-radius: 3px;
        cursor: pointer;
    }
    h3,
    h4 {
        color: #333333;
        font-family: sans-serif;
        font-size: 15px;
        text-align: center;
        width: fit-content;
    }
</style>
</body>

</html>

