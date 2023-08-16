<!DOCTYPE html>
<html lang="en">
  <head>
  <link href="style.css" rel="stylesheet" />
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
        
        /* Form select styles */
        select {
            height: auto;
        }
        
        /* Form button styles */
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
        
        /* Form file input styles */
        input[type="file"] {
            display: none;
        }
        
        /* Styling for the file input label */
        .file-input-label {
            display: block;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            cursor: pointer;
            text-align: center;
        }
        
        /* Styling for the selected file name */
        .selected-file-name {
            margin-top: 8px;
            font-size: 14px;
            color: #555;
        }
        
        /* Add some margin to the bottom of the form */
        .form-container form {
            margin-bottom: 20px;
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
    </nav>
    </div>
    <div class="form-container">
      <h1>Become our Expert</h1>
      <form
        action="process_expert_form.php"
        method="POST"
        enctype="multipart/form-data"
      >
        <label for="full_name">Full Name:</label>
        <input type="text" id="full_name" name="full_name" required />

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required />

        <label for="phone_num">Phone Number:</label>
        <input type="tel" id="phone_num" name="phone_num" required />

        <label for="location">Location:</label>
        <input type="text" id="location" name="location" required />

        <label for="profession">Profession:</label>
        <input type="text" id="profession" name="profession" required />
        <label for="services">Select Services:</label>
<select id="services" name="services"> 
  <option value="service1">Select</option>
  <option value="Home Maintenance and Repair">Home Maintenance and Repair</option>
  <option value="Cleaning Services">Cleaning Services</option>
  <option value="Beauty and Personal Care">Beauty and Personal Care</option>
  <option value="Health and Wellness">Health and Wellness</option>
  <option value="Moving and Relocation">Moving and Relocation</option>
  <option value="Event Planning and Management">Event Planning and Management</option>
  <option value="Child and Elderly Care">Child and Elderly Care</option>
  <option value="Automotive Services">Automotive Services</option>
  <option value="Technology Services">Technology Services</option>
</select><label for="about">About Me:</label>
        <textarea id="about" name="about" rows="4" required></textarea>
        <label for="photo">Upload Photo:</label>
        <input type="file" id="photo" name="photo" accept="image/*" />
        <button type="submit">Submit</button>
      </form>
    </div>
  </body>
</html>
