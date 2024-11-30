<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - RYAN & CO</title>
    <style>
        body {
            font-family: 'Times New Roman', serif;
            background-color: #31220d;
            color: #f6d99a;
            margin: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            height: 100vh;
        }

        .navbar {
            width: 100%;
            background-color: #5c3712;
            padding: 10px;
            text-align: center;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
        }

        .navbar a {
            color: #f0d38e;
            text-decoration: none;
            font-size: 18px;
            padding: 10px;
            margin: 0 10px;
            transition: color 0.3s;
        }

        .navbar a:hover {
            color: #e8c66f;
        }

        .form-container {
            background-color: #5c3712;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
            width: 300px;
            text-align: center;
            margin-top: 40px;
        }

        h2 {
            margin: 0 0 20px;
            color: #d5a41b;
        }

        .input-field {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: none;
            border-radius: 5px;
            font-size: 16px;
        }

        .submit-btn {
            background-color: #e8c66f;
            color: #31220d;
            padding: 10px 20px;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
            margin-top: 20px;
        }

        .submit-btn:hover {
            background-color: #d5a41b;
        }

        .form-footer a {
            color: #f0d38e;
            text-decoration: none;
        }

        .form-footer a:hover {
            color: #e8c66f;
        }
    </style>
</head>
<body>

    <div class="navbar">
        <a href="cigarsryan.html">Home</a>
        <a href="signup.html">Sign Up</a>
    </div>

    <div class="form-container">
        <h2>Login</h2>
        <form action="#" method="post">
            <input type="email" name="email" placeholder="Email" required class="input-field">
            <input type="password" name="password" placeholder="Password" required class="input-field">
            <button type="submit" class="submit-btn">Log In</button>
        </form>
        <div class="form-footer">
            <p>Don't have an account? <a href="signup.html">Sign Up</a></p>
        </div>
    </div>

</body>
</html>
