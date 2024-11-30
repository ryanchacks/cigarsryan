<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    
    // Database connection
    $con = new mysqli("localhost", "root", "AR31PC80@", "ryan_db");  //change first_db to my db name

    // Check connection
    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }

    // Insert user data
    $sql = "INSERT INTO users (name, email, password, confirm_password) VALUES ('$name', '$email'.'$password','$confirm_password')";
                        //change users to my table name
    if ($con->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $con->error;
    }

    $con->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up - RYAN & CO</title>
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
        <a href="login page.html">Log In</a>
    </div>

    <div class="form-container">
        <h2>Sign Up</h2>
        <form action="#" method="post">
            <input type="text" name="name" placeholder="Full Name" required class="input-field">
            <input type="email" name="email" placeholder="Email" required class="input-field">
            <input type="password" name="password" placeholder="Password" required class="input-field">
            <input type="password" name="confirm_password" placeholder="Confirm Password" required class="input-field">
            <button type="submit" class="submit-btn">Sign Up</button>
        </form>
        <div class="form-footer">
            <p>Already have an account? <a href="login.html">Log In</a></p>
        </div>
    </div>

</body>
</html>
