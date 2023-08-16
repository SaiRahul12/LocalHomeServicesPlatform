<!DOCTYPE html>
<html>
<head>
    <title>How It Works</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
/* General Styles */
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
}

.container {
    max-width: 800px;
    margin: 0 auto;
    padding: 20px;
}

h1 {
    font-size: 24px;
    margin-bottom: 20px;
}

h2 {
    font-size: 20px;
    margin-top: 30px;
    margin-bottom: 10px;
}

p {
    font-size: 16px;
    line-height: 1.5;
}

.how-it-works {
    background-color: #f9f9f9;
    padding: 20px;
}

/* faqs.php */
.faq {
    background-color: #f9f9f9;
    padding: 20px;
}
</style>
</head>
<body>
   <div class="container">
    <nav class="navbar">
        <div class="navbar-brand">
            <a href="index.php">
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
            session_start();
            if (isset($_SESSION["username"])) {
                echo '<a href="cart.php"><button class="btn btn-primary">Cart</button></a>';
            } else {
                echo '<a href="login.php"><button class="btn btn-primary">Login</button></a>';
                echo '<a href="cart.php"><button class="btn btn-primary">Cart</button></a>';
            }
            ?>
            <a href="REGISTER.php"><button class="btn btn-success">Become Our Expert</button></a>
        </div>
    </nav>
    </div>

    <div class="container">
        <h1>How It Works</h1>
        <p>Welcome to our platform! Here's how our platform works:</p>

        <h2>Step 1: Create an Account</h2>
        <p>Sign up for an account to access our services. Provide your details and create a secure password.</p>

        <h2>Step 2: Browse Products</h2>
        <p>Explore our wide range of products, including groceries, personal care items, stationary, and household items.</p>

        <h2>Step 3: Add to Cart</h2>
        <p>Select the products you want to purchase and add them to your shopping cart.</p>

        <h2>Step 4: Checkout</h2>
        <p>Review your cart, apply any discounts or coupons, and proceed to checkout. Enter your shipping address and payment details.</p>

        <h2>Step 5: Enjoy!</h2>
        <p>Your order will be processed and shipped to your doorstep. Sit back and enjoy your purchases!</p>
    </div>
</body>
</html>
