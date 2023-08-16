<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book a Service</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f7f7f7;
        }
        h2 {
            text-align: center;
            margin: 20px 0;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid #ccc;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        .book-btn {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 8px 12px;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .book-btn:hover {
            background-color: #0056b3;
        }
    </style>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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
          <div class="navbar-buttons">
            <?php
            session_start();
            if (isset($_SESSION["username"])) {
                echo '<a href="cart.php"><button class="btn btn-primary">Cart</button></a>';
                echo '<span class="welcome-message">Welcome, ' . $_SESSION["username"] . '!</span>';
            } else {
                echo '<a href="login.php"><button class="btn btn-primary">Login</button></a>';
                echo '<a href="cart.php"><button class="btn btn-primary">Cart</button></a>';
                echo '<a href="REGISTER.php"><button class="btn btn-success">Become Our Expert</button></a>';
            }
            ?>
        </div>
      </nav>
      </div>
    
    <h2>Book a Service</h2>
    <table>
        <tr>
            <th>Category</th>
            <th>Service</th>
            <th>Book Now</th>
        </tr>
        <tr>
            <td rowspan="10"><a href="experts.php">Home Maintenance and Repair</a></td>
            <td>Plumbing</td>
            <td><button class="book-btn" data-service="Plumbing">Book Now</button></td>
        </tr>
        <tr>
            <td>Electrical Repairs</td>
            <td><button class="book-btn" data-service="Electrical Repairs">Book Now</button></td>
        </tr>
<tr>
    <td>Painting</td>
    <td><button class="book-btn" data-service="Painting">Book Now</button></td>
</tr>
<tr>
    <td>Carpentry</td>
    <td><button class="book-btn" data-service="Carpentry">Book Now</button></td>
</tr>
<tr>
    <td>HVAC (Heating, Ventilation, and Air Conditioning)</td>
    <td><button class="book-btn" data-service="HVAC">Book Now</button></td>
</tr>
<tr>
    <td>Appliance Repair</td>
    <td><button class="book-btn" data-service="Appliance Repair">Book Now</button></td>
</tr>
<tr>
    <td>Flooring Installation and Repair</td>
    <td><button class="book-btn" data-service="Flooring Installation and Repair">Book Now</button></td>
</tr>
<tr>
    <td>Roofing and Gutter Cleaning</td>
    <td><button class="book-btn" data-service="Roofing and Gutter Cleaning">Book Now</button></td>
</tr>
<tr>
    <td>Window and Door Repair</td>
    <td><button class="book-btn" data-service="Window and Door Repair">Book Now</button></td>
</tr>
<tr>
    <td>Pest Control</td>
    <td><button class="book-btn" data-service="Pest Control">Book Now</button></td>
</tr>
<!-- Category: Cleaning Services -->
<tr>
    <td rowspan="9"><h3><a href="experts.php">Cleaning Services</a></h3></td>
    <td>House Cleaning</td>
    <td><button class="book-btn" data-service="House Cleaning">Book Now</button></td>
</tr>
<tr>
    <td>Office Cleaning</td>
    <td><button class="book-btn" data-service="Office Cleaning">Book Now</button></td>
</tr>
<tr>
    <td>Carpet Cleaning</td>
    <td><button class="book-btn" data-service="Carpet Cleaning">Book Now</button></td>
</tr>
<tr>
    <td>Window Cleaning</td>
    <td><button class="book-btn" data-service="Window Cleaning">Book Now</button></td>
</tr>
<tr>
    <td>Deep Cleaning</td>
    <td><button class="book-btn" data-service="Deep Cleaning">Book Now</button></td>
</tr>
<tr>
    <td>Upholstery Cleaning</td>
    <td><button class="book-btn" data-service="Upholstery Cleaning">Book Now</button></td>
</tr>
<tr>
    <td>Move-In/Move-Out Cleaning</td>
    <td><button class="book-btn" data-service="Move-In/Move-Out Cleaning">Book Now</button></td>
</tr>
<tr>
    <td>Industrial Cleaning</td>
    <td><button class="book-btn" data-service="Industrial Cleaning">Book Now</button></td>
</tr>
<tr>
    <td>Commercial Cleaning</td>
    <td><button class="book-btn" data-service="Commercial Cleaning">Book Now</button></td>
</tr>

<!-- Category: Beauty and Personal Care -->
<tr>
    <td rowspan="9"><h3><a href="experts.php">Beauty and Personal Care</a></h3></td>

    <td>Hair Cutting and Styling</td>
    <td><button class="book-btn" data-service="Hair Cutting and Styling">Book Now</button></td>
</tr>
<tr>
    <td>Makeup Services</td>
    <td><button class="book-btn" data-service="Makeup Services">Book Now</button></td>
</tr>
<tr>
    <td>Manicure and Pedicure</td>
    <td><button class="book-btn" data-service="Manicure and Pedicure">Book Now</button></td>
</tr>
<tr>
    <td>Spa Services</td>
    <td><button class="book-btn" data-service="Spa Services">Book Now</button></td>
</tr>
<tr>
    <td>Barber Services</td>
    <td><button class="book-btn" data-service="Barber Services">Book Now</button></td>
</tr>
<tr>
    <td>Hair Removal (Waxing, Threading)</td>
    <td><button class="book-btn" data-service="Hair Removal (Waxing, Threading)">Book Now</button></td>
</tr>
<tr>
    <td>Skin Treatments</td>
    <td><button class="book-btn" data-service="Skin Treatments">Book Now</button></td>
</tr>
<tr>
    <td>Massage Therapy</td>
    <td><button class="book-btn" data-service="Massage Therapy">Book Now</button></td>
</tr>
<tr>
    <td>Nail Art</td>
    <td><button class="book-btn" data-service="Nail Art">Book Now</button></td>
</tr>
<!-- Category: Health and Wellness -->
<tr>
    <td rowspan="8"><a href="experts.php"><h3>Health and Wellness</h3></a></td>
  <td>Yoga Instruction</td>
  <td><button class="book-btn" data-service="Yoga Instruction">Book Now</button></td>
</tr>
<tr>
  <td>Fitness Training</td>
  <td><button class="book-btn" data-service="Fitness Training">Book Now</button></td>
</tr>
<tr>
  <td>Nutrition Consultation</td>
  <td><button class="book-btn" data-service="Nutrition Consultation">Book Now</button></td>
</tr>
<tr>
  <td>Meditation Classes</td>
  <td><button class="book-btn" data-service="Meditation Classes">Book Now</button></td>
</tr>
<tr>
  <td>Personal Training</td>
  <td><button class="book-btn" data-service="Personal Training">Book Now</button></td>
</tr>
<tr>
  <td>Physical Therapy</td>
  <td><button class="book-btn" data-service="Physical Therapy">Book Now</button></td>
</tr>
<tr>
  <td>Mental Health Counseling</td>
  <td><button class="book-btn" data-service="Mental Health Counseling">Book Now</button></td>
</tr>
<tr>
  <td>Alternative Medicine (Acupuncture, Herbal Medicine)</td>
  <td><button class="book-btn" data-service="Alternative Medicine">Book Now</button></td>
</tr>

<!-- Category: Moving and Relocation -->
<tr>
<td rowspan="8"<h3><a href="experts.php">Moving and Relocation</a></h3></td>

  <td>Residential Moving</td>
  <td><button class="book-btn" data-service="Residential Moving">Book Now</button></td>
</tr>
<tr>
  <td>Commercial Moving</td>
  <td><button class="book-btn" data-service="Commercial Moving">Book Now</button></td>
</tr>
<tr>
  <td>Packing and Unpacking</td>
  <td><button class="book-btn" data-service="Packing and Unpacking">Book Now</button></td>
</tr>
<tr>
  <td>Furniture Assembly</td>
  <td><button class="book-btn" data-service="Furniture Assembly">Book Now</button></td>
</tr>
<tr>
  <td>Storage Services</td>
  <td><button class="book-btn" data-service="Storage Services">Book Now</button></td>
</tr>
<tr>
  <td>Vehicle Transportation</td>
  <td><button class="book-btn" data-service="Vehicle Transportation">Book Now</button></td>
</tr>
<tr>
  <td>International Relocation</td>
  <td><button class="book-btn" data-service="International Relocation">Book Now</button></td>
</tr>
<tr>
  <td>Loading and Unloading</td>
  <td><button class="book-btn" data-service="Loading and Unloading">Book Now</button></td>
</tr>

<tr>
<td rowspan="8"><h3><a href="experts.php">Event Planning and Management</a></h3></td>
  <td>Wedding Planning</td>
  <td><button class="book-btn" data-service="Wedding Planning">Book Now</button></td>
</tr>
<tr>
  <td>Party Planning</td>
  <td><button class="book-btn" data-service="Party Planning">Book Now</button></td>
</tr>
<tr>
  <td>Corporate Event Planning</td>
  <td><button class="book-btn" data-service="Corporate Event Planning">Book Now</button></td>
</tr>
<tr>
  <td>Catering Services</td>
  <td><button class="book-btn" data-service="Catering Services">Book Now</button></td>
</tr>
<tr>
  <td>Venue Selection</td>
  <td><button class="book-btn" data-service="Venue Selection">Book Now</button></td>
</tr>
<tr>
  <td>Decoration Services</td>
  <td><button class="book-btn" data-service="Decoration Services">Book Now</button></td>
</tr>
<tr>
  <td>Entertainment Services</td>
  <td><button class="book-btn" data-service="Entertainment Services">Book Now</button></td>
</tr>
<tr>
  <td>Audio-Visual Services</td>
  <td><button class="book-btn" data-service="Audio-Visual Services">Book Now</button></td>
</tr>

<!-- Category: Child and Elderly Care -->
<tr>
<td rowspan="8"><h3><a href="experts.php">Child and Elderly Care</a></h3></td>

  <td>Babysitting</td>
  <td><button class="book-btn" data-service="Babysitting">Book Now</button></td>
</tr>
<tr>
  <td>Nanny Services</td>
  <td><button class="book-btn" data-service="Nanny Services">Book Now</button></td>
</tr>
<tr>
  <td>Senior Care</td>
  <td><button class="book-btn" data-service="Senior Care">Book Now</button></td>
</tr>
<tr>
  <td>Pet Sitting</td>
  <td><button class="book-btn" data-service="Pet Sitting">Book Now</button></td>
</tr>
<tr>
  <td>Dog Walking</td>
  <td><button class="book-btn" data-service="Dog Walking">Book Now</button></td>
</tr>
<tr>
  <td>Pet Grooming</td>
  <td><button class="book-btn" data-service="Pet Grooming">Book Now</button></td>
</tr>
<tr>
  <td>Tutoring</td>
  <td><button class="book-btn" data-service="Tutoring">Book Now</button></td>
</tr>
<tr>
  <td>Homework Help</td>
  <td><button class="book-btn" data-service="Homework Help">Book Now</button></td>
</tr>
tr>
<td rowspan="7"><h3><a href="experts.php">Automotive Services</a></h3></td>
  <td>Car Wash and Detailing</td>
  <td><button class="book-btn" data-service="Car Wash and Detailing">Book Now</button></td>
</tr>
<tr>
  <td>Auto Repair and Maintenance</td>
  <td><button class="book-btn" data-service="Auto Repair and Maintenance">Book Now</button></td>
</tr>
<tr>
  <td>Oil Change</td>
  <td><button class="book-btn" data-service="Oil Change">Book Now</button></td>
</tr>
<tr>
  <td>Tire Rotation and Replacement</td>
  <td><button class="book-btn" data-service="Tire Rotation and Replacement">Book Now</button></td>
</tr>
<tr>
  <td>Battery Replacement</td>
  <td><button class="book-btn" data-service="Battery Replacement">Book Now</button></td>
</tr>
<tr>
  <td>Car Inspection</td>
  <td><button class="book-btn" data-service="Car Inspection">Book Now</button></td>
</tr>
<tr>
  <td>Car Rental Service</td>
  <td><button class="book-btn" data-service="Car Rental Service">Book Now</button></td>
</tr>

<!-- Category: Technology Services -->
<tr>
<td rowspan="6"><h3><a href="experts.php">Technology Services</a></h3></td>
  <td>Computer Repair</td>
  <td><button class="book-btn" data-service="Computer Repair">Book Now</button></td>
</tr>
<tr>
  <td>Software Installation and Troubleshooting</td>
  <td><button class="book-btn" data-service="Software Installation and Troubleshooting">Book Now</button></td>
</tr>
<tr>
  <td>Network Setup and Configuration</td>
  <td><button class="book-btn" data-service="Network Setup and Configuration">Book Now</button></td>
</tr>
<tr>
  <td>Data Recovery</td>
  <td><button class="book-btn" data-service="Data Recovery">Book Now</button></td>
</tr>
<tr>
  <td>Tech Support</td>
  <td><button class="book-btn" data-service="Tech Support">Book Now</button></td>
</tr>
<tr>
  <td>Home Automation</td>
  <td><button class="book-btn" data-service="Home Automation">Book Now</button></td>
</tr>  
    </table>
    <div id="expert-list"></div>
<script>
    $(document).ready(function() {
        // Handle button click to book a service
        $('.book-btn').click(function() {
            var selectedService = $(this).data('service');
            var selectedExpert = $(this).data('expert');
            
            if (selectedService) {
                // Redirect to the booking form with selected service information
                window.location.href = 'booking_form.php?service=' + encodeURIComponent(selectedService);
            } else if (selectedExpert) {
                // Redirect to the booking form with selected expert information
                window.location.href = 'booking_form.php?expert=' + encodeURIComponent(selectedExpert);
            }
        });
        
        // Fetch experts data and populate the expert list
        $.getJSON('generate_expert_data.php', function(experts) {
            var expertList = $('#expert-list');
            experts.forEach(function(expert) {
                expertList.append('<div class="expert">' +
                    '<h3>' + expert.name + '</h3>' +
                    '<p>Service: ' + expert.service + '</p>' +
                    '<p>Location: ' + expert.location + '</p>' +
                    '<button class="book-btn" data-expert="' + expert.name + '">Book Now</button>' +
                    '</div>');
            });
        });
    });
</script>
</body>
</html>



