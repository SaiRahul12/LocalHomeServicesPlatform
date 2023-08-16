<!DOCTYPE html>
<html>
<head>
    <title>FAQs</title>
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
        <h1>Frequently Asked Questions</h1>

        <h2>Question 1: How can I create an account?</h2>
        <p>Creating an account is easy! Click on the "Sign Up" button in the top right corner and follow the instructions.</p>

        <h2>Question 2: How do I add products to my cart?</h2>
        <p>Browse through our products and click on the "Add to Cart" button next to the items you want. Your selected items will be added to your cart.</p>

        <h2>Question 3: What payment methods do you accept?</h2>
        <p>We accept major credit cards and online payment methods. Your payment information is encrypted and secure.</p>

        <h2>Question 4: How long does shipping take?</h2>
        <p>Shipping times vary depending on your location and the products you've ordered. You can find estimated delivery times during checkout.</p>

        <h2>Question 5: How can I track my order?</h2>
        <p>Once your order is shipped, you'll receive a tracking number via email. You can use this to track the status of your delivery.</p>
    </div>
</body>
</html>
