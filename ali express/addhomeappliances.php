<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Product Form</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <div class="container">
        <form action="addhomeappliances.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="product_name"> Home Product Name:</label>
                <input type="text" id="product_name" name="hname">
            </div>
            <div class="form-group">
                <label for="product_price">Home Product Price:</label>
                <input type="text" id="product_price" name="hprice">
            </div>
            <div class="form-group">
                <label for="product_image">Image url</label>
                <input type="url" id="productimage" placeholder="Image" name="himage">

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
    
    $hname = $_POST['hname'];
    $hprice = $_POST['hprice'];
    $himage = $_POST['himage'];
 

        // Assuming wprice is a decimal or float in your database
        $stmt = $con->prepare("INSERT INTO homeappliances(hname, hprice, himage) VALUES (?, ?, ?)");
        $stmt->bind_param("sds", $hname, $hprice, $himage);

        if ($stmt->execute()) {
            echo "<script>alert('Product Added Successfully');</script>";
        } else {
            echo "Error adding product: " . $stmt->error;
        }

        $stmt->close();
        $con->close();
}
?>
