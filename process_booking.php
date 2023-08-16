<?php
$dbHost = "localhost";
$dbUser = "root";
$dbPass = "";
$dbName = "user_management";
$conn = new mysqli($dbHost, $dbUser, $dbPass, $dbName);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_id = $_POST["user_id"]; 
    $expert_name = $_POST["expert_name"]; 
    $service_name = $_POST["service_name"]; 
    $booking_date = $_POST["booking_date"];
    $booking_time = $_POST["booking_time"]; 
    $payment_amount = $_POST["payment_amount"]; 

    // Prepare the SQL query with placeholders
    $sql = "INSERT INTO booking (user_id, expert_name, service_name, booking_date, booking_time, payment_amount, status) 
            VALUES (?, ?, ?, ?, ?, ?, 'pending')";
    
    // Prepare and bind the parameters
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("issssd", $user_id, $expert_name, $service_name, $booking_date, $booking_time, $payment_amount);

    if ($stmt->execute()) {
        echo "Booking successful!";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the prepared statement
    $stmt->close();
    
    // Close the database connection
    $conn->close();
}
?>



