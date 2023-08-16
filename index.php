<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Local Home services platform 21BCE9121</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css">
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

    <div class="container-fluid jumbotron mt-5">
      <div class="row">
        <div class="col-md-6 d-flex align-items-center justify-content-center">
          <div class="m-lg-5 m-md-5 p-lg-5 m-sm-3 p-sm-3 p-md-5" style="padding: 20px;">
            <h1 class="top-banner-title text-center">
              Elevating Every Home with Expert Services
            </h1>
            <h1 class="top-banner-subtitle2 text-center">
              Discover Our Services
            </h1>
            <a href="services.php">
              <img class="" src="images/playbtn.svg" alt="Play Button" />
            </a>
          </div>
        </div>
        <div class="col-md-6">
          <img
            class="top-banner-img animated fadeIn"
            src="images/bannerImg.png"
            alt="Banner Image"
          />
        </div>
      </div>
    </div>
    


    <div class="container section-marginTop text-center">
      <h1 class="top-banner-title text-center">
          Popular Services
      </h1>
      <div class="row">
        <div class="col-md-4 thumbnail-container">
          <img src="images/home.jpg" alt="Avatar" class="thumbnail-image" />
          <div class="thumbnail-middle">
            <h1 class="thumbnail-title">Home Maintenance and Repair</h1>
            <h1 class="thumbnail-subtitle">
              - Plumbing
              - Electrical Repairs
              - Painting
              - Carpentry
              - Appliance Repair
              - Window and Door Repair
            </h1>
            <a href="services.php"><button class="normal-btn btn">Open</button></a>
          </div>
        </div>
        <div class="col-md-4 thumbnail-container">
          <img src="images/clean.jpg" alt="Avatar" class="thumbnail-image" />
          <div class="thumbnail-middle">
            <h1 class="thumbnail-title">Cleaning Services</h1>
            <h1 class="thumbnail-subtitle">
              - House Cleaning
              - Office Cleaning
              - Move-In/Move-Out Cleaning
              - Industrial Cleaning
              - Commercial Cleaning
           
            </h1>
            <a href="services.php"><button class="normal-btn btn">Open</button></a>
          </div>
        </div>
        <div class="col-md-4 thumbnail-container">
          <img src="images/beauty.jpg" alt="Avatar" class="thumbnail-image" />
          <div class="thumbnail-middle">
            <h1 class="thumbnail-title">Beauty and Personal Care</h1>
            <h1 class="thumbnail-subtitle">
            - Hair Cutting and Styling
   - Makeup Services
   - Manicure and Pedicure
   - Spa Services
   - Barber Services
   - Hair Removal (Waxing, Threading)
            </h1>
            <a href="services.php"><button class="normal-btn btn">Open</button></a>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 thumbnail-container">
          <img src="images/auto.jpg" alt="Avatar" class="thumbnail-image" />
          <div class="thumbnail-middle">
            <h1 class="thumbnail-title">Automotive Services</h1>
            <h1 class="thumbnail-subtitle">
            - Car Wash and Detailing
    - Auto Repair and Maintenance
    - Oil Change
    - Tire Rotation and Replacement
    - Battery Replacement
    - Car Inspection
    - Car Rental Services

            </h1>
            <a href="services.php"><button class="normal-btn btn">Open</button></a>
          </div>
        </div>
        <div class="col-md-4 thumbnail-container">
          <img src="images/tech.jpg" alt="Avatar" class="thumbnail-image" />
          <div class="thumbnail-middle">
            <h1 class="thumbnail-title">Technology Services</h1>
            <h1 class="thumbnail-subtitle">
            - Computer Repair
    - Software Installation and Troubleshooting
    - Network Setup and Configuration
    - Data Recovery
    - Tech Support
    - Home Automation Setup

            </h1>
            <a href="services.php"><button class="normal-btn btn">Open</button></a>
          </div>
        </div>
        <div class="col-md-4 thumbnail-container">
          <img src="images/baby.jpg" alt="Avatar" class="thumbnail-image" />
          <div class="thumbnail-middle">
            <h1 class="thumbnail-title">Child and Elderly Care</h1>
            <h1 class="thumbnail-subtitle">
            - Babysitting
    - Nanny Services
    - Senior Care
    - Pet Sitting
    - Dog Walking
    - Pet Grooming
    - Tutoring
    - Homework Help

            </h1>
            <a href="services.php"><button class="normal-btn btn">Open</button></a>
          </div>
        </div>
  </div>
        
    <div class="container-fluid bg-dark text-white m-0 text-center p-3">
      <p class="rights-text my-2">
        © All Rights Reserved by Sai Rahul Kodeboina; 2023
      </p>
    </div>
  </body>
</html>
  
