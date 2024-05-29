<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
    <link rel="stylesheet" href="../css/cart.css"> <!-- Assuming you have a separate CSS file -->
</head>

<body>
    <div class="cart_section">
        <h2 class="cart_title">Your Shopping Cart</h2>
        <div class="cart_items" id="cart-items">
            <!-- Cart items will be added dynamically here -->
        </div>
        <div class="order_total">
            <span class="order_total_title">Total:</span>
            <span class="order_total_amount" id="cart-total">$0.00</span>
        </div>
        <div class="cart_buttons">
            <button class="cart_button_clear" onclick="clearCart()">Clear Cart</button>
            <button class="cart_button_checkout" onclick="checkout()">Checkout</button>
            <button class="btn btn-success" onclick="redirection()"> Pay </button>
        </div>
    </div>
   
    <!-- JavaScript -->
    <script>
        // Function to retrieve the cart items from localStorage
        function getCartItems() {
            return JSON.parse(localStorage.getItem('cart')) || [];
        }

        // Function to calculate total cart amount
        function calculateTotal() {
            const cartItems = getCartItems();
            return cartItems.reduce((total, item) => total + item.price, 0);
        }

        // Function to render cart items
        function renderCart() {
            const cartItemsElement = document.getElementById('cart-items');
            const cartTotalElement = document.getElementById('cart-total');
            const cartItems = getCartItems();
            
            // Clear existing cart items
            cartItemsElement.innerHTML = '';

            // Render new cart items
            cartItems.forEach(item => {
                const cartItemElement = document.createElement('div');
                cartItemElement.classList.add('cart_item');
                cartItemElement.innerHTML = `
                    <div class="cart_item_info">
                        <div class="cart_item_name">${item.name}</div>
                        <div class="cart_item_price">$${item.price.toFixed(2)}</div>
                    </div>
                `;
                cartItemsElement.appendChild(cartItemElement);
            });

            // Update total amount
            cartTotalElement.textContent = `$${calculateTotal().toFixed(2)}`;
        }

        // Function to clear the cart
        function clearCart() {
            localStorage.removeItem('cart');
            renderCart();
        }

        // Function to simulate checkout process
        function checkout() {
            // This is just a placeholder. Implement your actual checkout process here.
            alert('Checkout process initiated. Total amount: $' + calculateTotal().toFixed(2));
        }
        function redirection() {
    // Changez "home.html" pour le nom de la page vers laquelle vous voulez rediriger l'utilisateur.
    window.location.href = "../php/Payment_page.php";
}
        // Initial rendering of the cart
        renderCart();
    </script>
</body>
</html>
