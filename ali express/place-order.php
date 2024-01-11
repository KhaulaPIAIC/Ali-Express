



<script>
    function updateCart() {
    fetch('get_cart.php') // This PHP script returns cart items as JSON
        .then(response => response.json())
        .then(data => {
            let cartHtml = '';
            data.forEach(item => {
                cartHtml += `
                    <div class="cart-item">
                        <img src="${item.image}" alt="${item.name}">
                        <div class="item-details">
                            <h3>${item.name}</h3>
                            <p>Price: ${item.price}</p>
                            <p>Tax: 100</p>
                            <p>Total: ${item.price + 100}</p>
                            <input type="number" value="${item.quantity}">
                            <button onclick="updateQuantity(${item.id}, this.value)">Update</button>
                        </div>
                    </div>`;
            });
            document.getElementById('cartContainer').innerHTML = cartHtml;
        });
}

updateCart();

</script>