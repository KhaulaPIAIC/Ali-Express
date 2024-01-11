<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<div class="listing">
    <!-- ... your existing items ... -->
    <div class="item">
        <img src="images/jacket.png" alt="Jacket">
        <div class="stats">
            <span class="price1">JACKET</span><br>
            <span class="price">PKR 186</span><br>
            <a href="#" onclick="openModal('JACKET', 'PKR 186', 'images/jacket.png')">Add to cart</a>
        </div>
    </div>
    <div class="item">
        <img src="images/boots.png" alt="Boots">
        <div class="stats">
            <span class="price1">BOOTS</span><br>
            <span class="price">PKR 186</span><br>
            <a href="#" onclick="openModal('BOOTS', 'PKR 186', 'images/boots.png')">Add to cart</a>
        </div>
    </div>
    <!-- ... -->
</div>

<!-- Modal -->
<!-- Modal -->
<div id="cartModal" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <div class="modal-body">
            <img id="modalImage" src="" alt="Product Image" class="modal-img">
            <div class="modal-details">
                <p id="modalName"></p>
                <p id="modalPrice"></p>
                <a href="#" class="add-to-cart-modal">Add to Cart</a>
            </div>
        </div>
    </div>
</div>


<style>
  /* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 30%; /* Full width */
    height: 40%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
    background-color: #fefefe;
    margin: 15% auto; /* 15% from the top and centered */
    padding: 20px;
    border: 1px solid #888;
    width: 50%; /* Could be more or less, depending on screen size */
}

/* The Close Button */
.close {
    color: #aaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: black;
    text-decoration: none;
    cursor: pointer;
}

</style>
  
<script>
function openModal(name, price, imageSrc) {
    // Set the content
    document.getElementById('modalName').innerText = name;
    document.getElementById('modalPrice').innerText = 'Total Price: ' + price;
    document.getElementById('modalImage').src = imageSrc;

    // Show the modal
    document.getElementById('cartModal').style.display = 'block';
}

// Get the modal
var modal = document.getElementById('cartModal');

// Get the <span> element that closes the modal
var span = document.getElementsByClassName('close')[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = 'none';
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = 'none';
    }
}
</script>

</body>
</html>