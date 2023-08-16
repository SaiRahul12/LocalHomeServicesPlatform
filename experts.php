<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Experts List</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
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
    <h1>Experts List</h1>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Service</th>
                <th>Location</th>
                <th></th>
            </tr>
        </thead>
        <tbody id="expert-list"></tbody>
    </table>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            var expertList = $('#expert-list');

            $.getJSON('generate_names.php', function(experts) {
                experts.forEach(function(expert) {
                    var row = $('<tr>' +
                        '<td>' + expert.name + '</td>' +
                        '<td>' + expert.service + '</td>' +
                        '<td>' + expert.location + '</td>' +
                        '<td><button class="book-btn" data-expert="' + expert.name + '">Book Now</button></td>' +
                        '</tr>');
                    expertList.append(row);
                });
            });
            expertList.on('click', '.book-btn', function() {
                var selectedExpert = $(this).data('expert');
                window.location.href = 'booking_form.php?expert=' + encodeURIComponent(selectedExpert);
            });
        });
    </script>
</body>
</html>

