<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Product Form</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <div class="container">
        <form action="addMensClothing.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="product_name">Mens Product Name:</label>
                <input type="text" id="product_name" name="mname">
            </div>
            <div class="form-group">
                <label for="product_price">Mens Product Price:</label>
                <input type="text" id="product_price" name="mprice">
            </div>
            <div class="form-group">
                <label for="product_image">Image url</label>
                <input type="url" id="mimage" placeholder="Image" name="mimage">

            </div>
            <div class="form-group">
                <input type="submit" value="Submit" name="submit">
            </div>
            <button> <a href="showData.php"></a>showData</button>
        </form>
    </div>
</body>
</html>

<style>.container {
    width: 50%;
    margin: 0 auto;
    padding: 20px;
}

.form-group {
    margin-bottom: 15px;
}

label {
    display: block;
    font-weight: bold;
}

input[type="text"],
input[type="file"] {
    width: 100%;
    padding: 8px;
    border-radius: 4px;
    border: 1px solid #ccc;
}

input[type="submit"] {
    padding: 10px 20px;
    background-color: #4CAF50;
    color: white;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}
</style>

<?php 
include "connect.php";

if(isset($_POST['submit'])) {
    
    $mname = $_POST['mname'];
    $mprice = $_POST['mprice'];
    $mimage = $_POST['mimage'];
 

        // Assuming productprice is a decimal or float in your database
        $stmt = $con->prepare("INSERT INTO mensclothing(mname, mprice, mimage) VALUES (?, ?, ?)");
        $stmt->bind_param("sds", $mname, $mprice, $mimage);

        if ($stmt->execute()) {
            echo "<script>alert('Mens Product Added Successfully');</script>";
        } else {
            echo "Error adding mens product: " . $stmt->error;
        }

        $stmt->close();
        $con->close();
}
?>
