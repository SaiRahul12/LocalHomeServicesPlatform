<!DOCTYPE html>
<html>
<head>
    <title>Booking Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }

        h1 {
            text-align: center;
            margin-top: 20px;
            color: #333;
        }

        form {
            max-width: 500px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="email"],
        input[type="tel"],
        input[type="date"],
        input[type="time"]
        input[type="money"],
        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        textarea {
            resize: vertical;
        }

        input[type="submit"] {
            background-color: #333;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #555;
        }
    </style>
</head>
<body>
    <h1>Booking Form</h1>
    <form action="process_booking.php" method="POST">
    <form action="process_booking.php" method="POST">
    <?php
    $selectedExpert = isset($_GET['expert']) ? $_GET['expert'] : '';
    $selectedService = isset($_GET['service']) ? $_GET['service'] : '';
    ?>
    <input type="hidden" name="user_id" value="<?php echo htmlspecialchars($_SESSION['user_id']); ?>">
    <input type="hidden" name="expert_id" value="<?php echo htmlspecialchars($selectedExpert); ?>">
    <input type="hidden" name="service_id" value="<?php echo htmlspecialchars($selectedService); ?>">
    <label for="name">Name:</label>
    <input type="text" id="name" name="expert_name" required>
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>
    <label for="phone">Phone Number:</label>
    <input type="tel" id="phone" name="phone" required>
    <label for="date">Preferred Date:</label>
    <input type="date" id="date" name="booking_date" required>
    <label for="time">Preferred Time:</label>
    <input type="time" id="time" name="booking_time" required>
    <label for="money">Payment Amount:</label>
    <input type="number" id="money" name="payment_amount" step="0.01" required><br><br>
<label for="notes">Additional Notes:</label><br>
    <textarea id="notes" name="notes" rows="4" cols="50"></textarea>
<input type="submit" value="Book Now">
        <a href="index.php">Home</a>
    </form>
</body>
</html>

