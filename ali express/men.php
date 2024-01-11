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
        $sql = "SELECT  MID, mname, mprice, mimage FROM mensclothing";
        $result = $con->query($sql);

        if ($result && $result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo '<div class="card">';
                // Use the URL directly in the src attribute of the img tag
                echo '<img src="' . htmlspecialchars($row['mimage']) . '" alt="' . htmlspecialchars($row['mname']) . '" style="width:300px; height:250px;">';
                echo '<h3>' . htmlspecialchars($row['mname']) . '</h3>';
                echo '<h4>Price: ' . htmlspecialchars($row['mprice']) . '</h4>';
                echo "<a href='#' class='add-to-cart' onclick='addToCart(" . htmlspecialchars($row['MID']) . ", \"" . htmlspecialchars($row['mname']) . "\")'>Add to Cart</a>";
                echo '</div>';
            }
        } else {
            echo "No products found!";
        }

        $con->close();
        ?>
    </div>
    <script>
        function addToCart(MID, mname) {
            // Display a popup message with the product details
            alert('Added to cart:\nProduct ID: ' + MID + '\nProduct Name: ' + mname);

            // Here, you can perform additional actions like making an AJAX call to add the product to the cart
            // For demonstration purposes, this example just shows an alert
        }
    </script>
    <style>
        .card {
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 10px;
            margin: 10px;
            width: 200px;
            text-align: center;
            float: left;
        }

        .card img {
            width: 100px;
            height: 100px;
            object-fit: cover;
            margin-bottom: 10px;
        }

        h3,
        h4 {
            color: #333333;
            font-family: sans-serif;
            font-size: 15px;
            text-align: center;

            width: fit-content;
        }

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
        }

        .card img {
            width: 100%;
            border-top-left-radius: 5px;
            border-top-right-radius: 5px;
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
    </style>
</body>

</html>