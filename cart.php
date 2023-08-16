<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    <link rel="stylesheet" href="style.css">
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
    <h1>Your Booked Experts</h1>
    <table border="1">
        <tr>
            <th>Expert Name</th>
            <th>Service Name</th>
            <th>Date</th>
            <th>Time</th>
            <th>Payment Amount</th>
        </tr>
        <?php
        $dbHost = "localhost";
        $dbUser = "root";
        $dbPass = "";
        $dbName = "user_management";
        $conn = new mysqli($dbHost, $dbUser, $dbPass, $dbName);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $sql = "SELECT expert_name, service_name, booking_date, booking_time, payment_amount FROM booking";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["expert_name"] . "</td>";
                echo "<td>" . $row["service_name"] . "</td>";
                echo "<td>" . $row["booking_date"] . "</td>";
                echo "<td>" . $row["booking_time"] . "</td>";
                echo "<td>" . $row["payment_amount"] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='5'>No booked experts found</td></tr>";
        }
        $conn->close();
        ?>
    </table>
</body>
</html>
