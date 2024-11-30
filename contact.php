<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - RYAN & CO</title>
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

        .contact-form-section {
            padding: 40px;
            text-align: center;
            color: #f6d99a;
        }

        h2 {
            font-size: 36px;
        }

        form {
            width: 80%;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f2f2f2;
            border-radius: 10px;
        }

        input, textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        input[type="submit"] {
            background-color: #d4af37;
            color: #fff;
            cursor: pointer;
            border: none;
            font-size: 18px;
            padding: 12px 20px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #f0d38e;
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

        <div class="auth-buttons">
            <a href="login page.html">Log In</a>
            <a href="signup.html">Sign Up</a>
        </div>

        <nav>
            <a href="cigarsryan.html">Home</a>
            <a href="cart.html">Cart</a>
            <a href="products.html">Products</a>
        </nav>
    </header>

    <section class="contact-form-section" id="contact">
        <h2>Contact Us</h2>
        <p>If you have any questions or need assistance, feel free to contact us. We are here to help!</p>

        <form action="submit-form.php" method="POST">
            <input type="text" name="name" placeholder="Your Name" required>
            <input type="email" name="email" placeholder="Your Email" required>
            <select name="subject" required>
                <option value="General Inquiry">General Inquiry</option>
                <option value="Product Question">Product Question</option>
                <option value="Order Issue">Order Issue</option>
                <option value="Other">Other</option>
            </select>
            <textarea name="message" rows="6" placeholder="Your Message" required></textarea>
            <input type="submit" value="Submit">
        </form>
    </section>

    <footer>
        <p>&copy; 2024 RYAN & CO. All rights reserved.</p>
    </footer>

</body>
</html>
