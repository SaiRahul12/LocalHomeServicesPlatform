<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Services Categories</title>
    <link rel="stylesheet" href="style.css" />
<style>
    body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f0f0f0;
  }

  h1 {
    font-size: 48px;
    text-align: center;
    margin-top: 40px;
    margin-bottom: 40px;
  }

  .container {
    max-width: 1200px;
    margin: 0 auto;
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    grid-gap: 20px;
  }

  .category-box {
    border: 1px solid #ccc;
    padding: 15px;
    text-align: center;
    background-color: white;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
  }

  .category-image {
    max-width: 100%;
    height: auto;
  }

  .category-title {
    margin-top: 10px;
    font-size: 18px;
    font-weight: bold;
  }

  .open-button {
    margin-top: 10px;
    padding: 8px 20px;
    background-color: red;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-weight: bold;
  }
</style>
</head>
<body>
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
                echo '<a href="cart.php"><button class="btn btn-primary">Cart</button></a>';
            } else {
                echo '<a href="login.php"><button class="btn btn-primary">Login</button></a>';
                echo '<a href="cart.php"><button class="btn btn-primary">Cart</button></a>';
            }
            ?>
            <a href="REGISTER.php"><button class="btn btn-success">Become Our Expert</button></a>

        </div>
    </nav><h1>Services</h1>
<div class="container">
    <div class="category-box">
        <img class="category-image" src="images\home.jpg" alt="Category 1" />
        <h2 class="category-title">Home Maintenance</h2>
        <a href="book_service.php"><button class="open-button">Open</button></a>
    </div>
    <div class="category-box">
        <img class="category-image" src="images\clean.jpg" alt="Category 2" />
        <h2 class="category-title">Cleaning Services</h2>
        <a href="book_service.php"><button class="open-button">Open</button></a>
    </div>
    <div class="category-box">
        <img class="category-image" src="images\beauty.jpg" alt="Category 3" />
        <h2 class="category-title">Beauty and Personal Care</h2>
        <a href="book_service.php"><button class="open-button">Open</button></a>
    </div>
    <div class="category-box">
        <img class="category-image" src="images\health.jpg" alt="Category 4" />
        <h2 class="category-title">Health and Wellness</h2>
        <a href="book_service.php"><button class="open-button">Open</button></a>
    </div>
    <div class="category-box">
        <img class="category-image" src="images\move.jpg" alt="Category 5" />
        <h2 class="category-title">Moving and Relocation</h2>
        <a href="book_service.php"><button class="open-button">Open</button></a>
    </div>
    <div class="category-box">
        <img class="category-image" src="images\event.jpg" alt="Category 6" />
        <h2 class="category-title">Event Planning and Management</h2>
        <a href="book_service.php"><button class="open-button">Open</button></a>
    </div>
    <div class="category-box">
        <img class="category-image" src="images\baby.jpg" alt="Category 7" />
        <h2 class="category-title">Child and Elderly Care</h2>
        <a href="book_service.php"><button class="open-button">Open</button></a>
    </div>
    <div class="category-box">
        <img class="category-image" src="images\auto.jpg" alt="Category 8" />
        <h2 class="category-title">Automotive Services</h2>
        <a href="book_service.php"><button class="open-button">Open</button></a>
    </div>
    <div class="category-box">
        <img class="category-image" src="images\tech.jpg" alt="Category 9" />
        <h2 class="category-title">Technology Services</h2>
        <a href="book_service.php"><button class="open-button">Open</button></a>
    </div>
</div>

<script>
    $('.open-button').click(function() {
        var categoryTitle = $(this).data('category');
        window.location.href = 'book_service.php';
    });
</script>

    <div class="container-fluid bg-dark text-white m-0 text-center p-3">
        <p class="rights-text my-2">
        © All Rights Reserved by Sai Rahul Kodeboina; 2023
        </p>
    </div>
</body>
</html>



   

