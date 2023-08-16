<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
        }
        .form-container {
            max-width: 400px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .form-container h1 {
            font-size: 24px;
            margin-bottom: 20px;
            text-align: center;
        }
        label {
            display: block;
            font-weight: bold;
            margin-bottom: 8px;
        }
        input[type="text"],
        input[type="email"],
        input[type="tel"],
        textarea,
        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        select {
            height: auto;
        }
        button[type="submit"] {
            display: block;
            width: 100%;
            padding: 12px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        
        button[type="submit"]:hover {
            background-color: #0056b3;
        }
        input[type="file"] {
            display: none;
        }
        .file-input-label {
            display: block;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            cursor: pointer;
            text-align: center;
        }
        .selected-file-name {
            margin-top: 8px;
            font-size: 14px;
            color: #555;
        }
        .form-container form {
            margin-bottom: 20px;
        }
        </style>
    <link href="style.css" rel="stylesheet" />
</head>
<body>
    <div class="container">
    <nav class="navbar">
        <div class="navbar-brand">
          <a href="#">
            <img src="images/1234.png" alt="Logo" />
          </a>
        </div>
        <div class="navbar-links">
          <ul>
          <li><a href="index.php"><b>Home</b></a></li>
            <li><a href="services.php"><b>Services</b></a></li>
            <li><a href="experts.php"><b>Our Experts</b></a></li>
            <li><a href="how.php"><b>How it Works</b></a></li>
            <li><a href="faq.php"><b>FAQs</b></a></li>
          </ul>
        </div>
        <div class="navbar-buttons">
            <?php
            // Check if the user is logged in
            session_start();
            if (isset($_SESSION["username"])) {
                // If logged in, display the Cart button and username
                echo '<a href="cart.php"><button class="btn btn-primary">Cart</button></a>';
                echo '<span class="welcome-message">Welcome, ' . $_SESSION["username"] . '!</span>';
            } else {
                // If not logged in, display the Login and Become Our Expert buttons
                echo '<a href="login.php"><button class="btn btn-primary">Login</button></a>';
                echo '<a href="cart.php"><button class="btn btn-primary">Cart</button></a>';
                echo '<a href="REGISTER.php"><button class="btn btn-success">Become Our Expert</button></a>';
            }
            ?>
        </div>
      </nav>
    </div>
    <div class="form-container">
        <h1>Sign Up</h1>
        <form action="process_signup.php" method="POST">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required />

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 4px;" />
            <label for="reenter_password">Re-enter Password:</label>
            <input type="password" id="reenter_password" name="reenter_password" required style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 4px;" />

            <label for="mobile">Phone Number:</label>
            <input type="tel" id="mobile" name="mobile" required />

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required />

            <button type="submit">Sign Up</button>
        </form>
        <p>Already have an account? <a href="login.php">Log In</a></p>
    </div>
</body>
</html>

