<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RYAN & CO</title>
    <style>
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

        .brand-name {
            font-family: 'Brush Script MT', cursive;
            color: #f6d99a;
            font-size: 48px;
            margin: 0;
            padding-top: 100px;
        }

        nav {
            margin-top: 10px;
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

        .auth-buttons {
            position: absolute;
            top: 20px;
            right: 20px;
        }

        .auth-buttons a {
            background-color: #5c3712;
            color: #fff;
            padding: 8px 16px;
            text-decoration: none;
            margin-left: 10px;
            border-radius: 5px;
            font-size: 16px;
        }

        .auth-buttons a:hover {
            background-color: #e8c66f;
        }

        .bikini-section {
            padding: 40px;
            text-align: center;
        }

        h2 {
            color: #d5a41b;
        }

        .bikini-container {
            display:inline-flex;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 20px;
            justify-items: center;
            margin-top: 20px;
            flex-wrap:wrap ;
            justify-content:space-evenly;
            flex-direction: row;
        }

        .bikini-card {
            background-color: #ebc283fa;
            border: 1px solid #d4af37;
            padding: 20px;
            width: 250px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .bikini-card:hover {
            transform: scale(1.05);
        }

        .bikini-card img {
            width: 100%;
            height: auto;
        }

        .bikini-card h3 {
            color: #333;
            font-size: 24px;
            margin: 10px 0;
        }

        .bikini-card p {
            color: #333;
            font-size: 20px;
        }

        .size {
            padding: 5px;
            margin-bottom: 10px;
        }

        .quantity {
            width: 50px;
            padding: 5px;
            margin: 10px 0;
        }

        .add-to-cart {
            background-color: #e0b086;
            color: #533019;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
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
            <source src="C:/Users/Ryan Chacko/Downloads/cigar video.mp4" type="video/mp4">
        </video>
        <h1 class="brand-name">RYAN & CO</h1>
        <p>House of Cigars</p>

        <div class="auth-buttons">
            <a href="login page.html">Log In</a>
            <a href="signup.html">Sign Up</a>
        </div>

        <nav>
            <a href="#">Home</a>
            <a href="cart.html"">Cart</a>
            <a href="contact.html">Contact Us</a>
        </nav>
    </header>

    <section class="bikini-section" id="products">
        <h2>Our Collection</h2>
        <div class="bikini-container">
            <!-- Product 1 -->
            <div class="bikini-card">
                <img src="ashton honey 2.jpg" alt="ASHTON Honey Cigar">
                <h3>ASHTON (Honey)</h3>
                <p>Price: $180</p>
                <p>Experience the rich taste of Havana.</p>
                <select class="size">
                    <option>Small</option>
                    <option>Medium</option>
                    <option>Large</option>
                </select>
                <input type="number" class="quantity" min="1" value="1">
                <button class="add-to-cart">Add to Cart</button>
            </div>

            <!-- Product 2 -->
            <div class="bikini-card">
                <img src="ashton.jpg" alt="ASHTON Classic Cigar">
                <h3>ASHTON (Classic)</h3>
                <p>Price: $250</p>
                <p>Experience the smoke.</p>
                <select class="size">
                    <option>Small</option>
                    <option>Medium</option>
                    <option>Large</option>
                </select>
                <input type="number" class="quantity" min="1" value="1">
                <button class="add-to-cart">Add to Cart</button>
            </div>
            
            
            <div class="bikini-card">
                <img src="images.jpg" alt="cohiba Classic">
                <h3>Cohiba Classic</h3>
                <p>Price: $1000</p>
                <p>Smoother than life.</p>
                <select class="size">
                    <option>Small</option>
                    <option>Medium</option>
                    <option>Large</option>
                </select>
                <input type="number" class="quantity" min="1" value="1">
                <button class="add-to-cart">Add to Cart</button>
            </div>

            <div class="bikini-card">
                <img src="cohiba 2.jpg" alt="cohiba Classic">
                <h3>Cohiba Classic(B5)</h3>
                <p>Price: $1500</p>
                <p>Smoother than life.</p>
                <select class="size">
                    <option>Small</option>
                    <option>Medium</option>
                    <option>Large</option>
                </select>
                <input type="number" class="quantity" min="1" value="1">
                <button class="add-to-cart">Add to Cart</button>
            </div>
            <div class="bikini-card">
                <img src="huppman.jpg" alt="huppman">
                <h3>H.uppman(F25)</h3>
                <p>Price: $800</p>
                <select class="size">
                    <option>Small</option>
                    <option>Medium</option>
                    <option>Large</option>
                </select>
                <input type="number" class="quantity" min="1" value="1">
                <button class="add-to-cart">Add to Cart</button>
            </div>

            <div class="bikini-card">
                <img src="images.jpg" alt="huppman">
                <h3>H.uppman(48)</h3>
                <p>Price: $3000</p>
                <select class="size">
                    <option>Small</option>
                    <option>Medium</option>
                    <option>Large</option>
                </select>
                <input type="number" class="quantity" min="1" value="1">
                <button class="add-to-cart">Add to Cart</button>
            </div>

            <div class="bikini-card">
                <img src="montecristo.jpg" alt="Classic">
                <h3>monte cristo</h3>
                <p>Price: $650</p>
                <p>Since 1928</p>
                <select class="size">
                    <option>Small</option>
                    <option>Medium</option>
                    <option>Large</option>
                </select>
                <input type="number" class="quantity" min="1" value="1">
                <button class="add-to-cart">Add to Cart</button>
            </div>

            <div class="bikini-card">
                <img src="monte crist 2.jpg" alt="Classic">
                <h3>monte cristo</h3>
                <p>Price: $10000</p>
                <p>Since 1928</p>
                <select class="size">
                    <option>Small</option>
                    <option>Medium</option>
                    <option>Large</option>
                </select>
                <input type="number" class="quantity" min="1" value="1">
                <button class="add-to-cart">Add to Cart</button>
            </div>

            <div class="bikini-card">
                <img src="vasco dgama.jpg" alt="cuban Classic">
                <h3>vasco D gama</h3>
                <p>Price: $140</p>
                <p>cuban luxary</p>
                <select class="size">
                    <option>Small</option>
                    <option>Medium</option>
                    <option>Large</option>
                </select>
                <input type="number" class="quantity" min="1" value="1">
                <button class="add-to-cart">Add to Cart</button>
            </div>

            <div class="bikini-card">
                <img src="vasco dgamma 2.jpg" alt="cuban Classic">
                <h3>vasco D gama</h3>
                <p>Price: $320</p>
                <p>cuban luxary</p>
                <select class="size">
                    <option>Small</option>
                    <option>Medium</option>
                    <option>Large</option>
                </select>
                <input type="number" class="quantity" min="1" value="1">
                <button class="add-to-cart">Add to Cart</button>
            </div>

            <div class="bikini-card">
                <img src="debonaire.jpg" alt="cuban Classic">
                <h3>debonaire</h3>
                <p>Price: $680</p>
                <p>cuban luxary</p>
                <select class="size">
                    <option>Small</option>
                    <option>Medium</option>
                    <option>Large</option>
                </select>
                <input type="number" class="quantity" min="1" value="1">
                <button class="add-to-cart">Add to Cart</button>
            </div>

            <div class="bikini-card">
                <img src="debonaire 2.jpg" alt="cuban Classic">
                <h3>debonaire(q28)</h3>
                <p>Price: $6680</p>
                <p>cuban luxary</p>
                <select class="size">
                    <option>Small</option>
                    <option>Medium</option>
                    <option>Large</option>
                </select>
                <input type="number" class="quantity" min="1" value="1">
                <button class="add-to-cart">Add to Cart</button>
            </div>




           

            

        </div>
    </section>

    <footer>
        <p>&copy; 2024 RYAN & CO. All Rights Reserved.</p>
    </footer>

</body>
</html>
