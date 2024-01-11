<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Product Form</title>
</head>
<body>
    <div class="container">
        <form action="addAccessories.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="product_name">Product Name:</label>
                <input type="text" id="product_name" name="Aname">
            </div>
            <div class="form-group">
                <label for="product_price">Product Price:</label>
                <input type="text" id="product_price" name="Aprice">
            </div>
            <div class="form-group">
                <label for="product_image">Image url</label>
                <input type="url" id="Aimage" placeholder="Image" name="Aimage">
            </div>
            <div class="form-group">
                <input type="submit" value="Submit" name="submit">
            </div>
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
 if(isset($_POST['submit'])){
     
    $Aname = $_POST['Aname'];
    $Aprice = $_POST['Aprice'];
    $Aimage = $_POST['Aimage'];

      // Assuming productprice is a decimal or float in your database
      $stmt = $con->prepare("INSERT INTO accosseries(Aname, Aprice, Aimage) VALUES (?, ?, ?)");
      $stmt->bind_param("sds", $Aname, $Aprice, $Aimage);

      if ($stmt->execute()) {
          echo "<script>alert('Accessory Added Successfully');</script>";
      } else {
          echo "Error adding Accessory: " . $stmt->error;
      }

      $stmt->close();
      $con->close();
}

?>
