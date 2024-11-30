<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart - RYAN & CO</title>
    <style>
        /* General Styling */
        body {
            font-family: 'Times New Roman', serif;
            background-color: #31220d;
            color: #333;
            margin: 0;
            padding: 0;
        }

        header {
            position: relative;
            height: 300px;
            text-align: center;
            border-bottom: 1px solid #ccc;
            overflow: hidden;
        }

        .video-background {
            position: absolute;
            top: 0;
            left: 0;
            min-width: 100%;
            min-height: 100%;
            width: auto;
            height: auto;
            z-index: -1;
            object-fit: cover;
        }

        header h1 {
            color: #f6d99a;
            font-size: 36px;
            padding-top: 100px;
            z-index: 1;
            position: relative;
        }

        nav {
            margin-top: 10px;
            z-index: 1;
            position: relative;
        }

        nav a {
            margin: 0 15px;
            color: #d4af37;
            text-decoration: none;
            font-size: 18px;
            transition: color 0.3s;
        }

        nav a:hover {
            color: #f0d38e;
        }

        .cart-container {
            padding: 40px;
            max-width: 800px;
            margin: auto;
            background-color: #ebc283fa;
            border: 1px solid #d4af37;
            margin-top: 20px;
        }

        .cart-item {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 15px;
            border-bottom: 1px solid #d4af37;
        }

        .cart-item:last-child {
            border-bottom: none;
        }

        .cart-item img {
            width: 100px;
            height: auto;
        }

        .item-details {
            flex: 1;
            margin-left: 20px;
        }

        .item-details h3 {
            margin: 0;
            font-size: 20px;
            color: #333;
        }

        .item-details p {
            font-size: 16px;
            color: #555;
        }

        .checkout-container {
            margin-top: 30px;
            text-align: right;
        }

        .checkout-btn {
            background-color: #e0b086;
            color: #533019;
            border: none;
            padding: 15px 30px;
            font-size: 18px;
            cursor: pointer;
            border-radius: 5px;
        }

        .checkout-btn:hover {
            background-color: #f0d38e;
        }

        .empty-message {
            text-align: center;
            color: #533019;
            font-size: 24px;
            padding: 20px;
        }

        footer {
            text-align: center;
            padding: 10px;
            background-color: #333;
            color: #f0d38e;
        }
    </style>
</head>
<body>

    <header>
        <video class="video-background" autoplay muted loop>
            <source src="cigar video.mp4" type="video/mp4">
        </video>
        <h1>RYAN & CO</h1>
        <nav>
            <a href="cigarsryan.html">Home</a>
            <a href="login page.html">Log In</a>
            <a href="signup.html">Sign Up</a>
        </nav>
    </header>

    <section class="cart-container">
        <h2>Your Cart</h2>
        
        <!-- Cart items will be dynamically added here -->
        <div id="cart-items">
            <p class="empty-message">Your cart is empty. Start shopping to add items!</p>
        </div>

        <!-- Checkout Section -->
        <div class="checkout-container" style="display: none;" id="checkout-section">
            <p id="total-price">Total: $0.00</p>
            <button class="checkout-btn" onclick="checkout()">Proceed to Checkout</button>
        </div>
    </section>

    <footer>
        <p>&copy; 2024 RYAN & CO. All Rights Reserved.</p>
    </footer>

    <script>
        // Placeholder for cart items
        let cartItems = [];

        // Function to render the cart page
        function renderCart() {
            const cartItemsContainer = document.getElementById("cart-items");
            const checkoutSection = document.getElementById("checkout-section");

            cartItemsContainer.innerHTML = ''; // Clear existing items

            if (cartItems.length === 0) {
                cartItemsContainer.innerHTML = '<p class="empty-message">Your cart is empty. Start shopping to add items!</p>';
                checkoutSection.style.display = 'none'; // Hide checkout if cart is empty
            } else {
                let total = 0;

                cartItems.forEach(item => {
                    total += item.price * item.quantity;
                    const cartItem = document.createElement("div");
                    cartItem.className = "cart-item";
                    cartItem.innerHTML = `
                        <img src="${item.image}" alt="${item.name}">
                        <div class="item-details">
                            <h3>${item.name}</h3>
                            <p>Size: ${item.size}</p>
                            <p>Price: $${item.price}</p>
                        </div>
                        <div class="item-quantity">
                            Quantity: ${item.quantity}
                        </div>
                    `;
                    cartItemsContainer.appendChild(cartItem);
                });

                document.getElementById("total-price").innerText = `Total: $${total.toFixed(2)}`;
                checkoutSection.style.display = 'block'; // Show checkout section if cart has items
            }
        }

        // Checkout function
        function checkout() {
            if (cartItems.length === 0) {
                alert("Your cart is empty!");
            } else {
                alert("Thank you for your purchase! Proceeding to checkout.");
                // Redirect to a real checkout page or handle the checkout process here
                // e.g., window.location.href = 'checkout.html';
            }
        }

        // Initialize cart rendering
        renderCart();
    </script>
</body>
</html>
