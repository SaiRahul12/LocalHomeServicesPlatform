<?php
$servername = "localhost";
$username = "root";  
$password = "";      
$database = "user_management"; 

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Function to sanitize user input
function sanitizeInput($input) {
    global $conn;
    $input = trim($input);
    $input = stripslashes($input);
    $input = htmlspecialchars($input);
    return $conn->real_escape_string($input);
}

// Function to validate email
function validateEmail($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Validate and sanitize form data
    $full_name = sanitizeInput($_POST["full_name"]);
    $email = sanitizeInput($_POST["email"]);
    $phone_number = sanitizeInput($_POST["phone_num"]);
    $location = sanitizeInput($_POST["location"]);
    $profession = sanitizeInput($_POST["profession"]);
    $services = isset($_POST["services"]) ? sanitizeInput($_POST["services"]) : ''; // Validate and sanitize services
    $about = sanitizeInput($_POST["about"]);

    // Check if services field is not empty
    if (empty($services)) {
        echo "Error: Services field cannot be empty.";
    } else {
        // Insert data into the 'experts' table
        $sql = "INSERT INTO expert (full_name, email, phone_number, location, profession, services, about) 
                VALUES (?, ?, ?, ?, ?, ?, ?)";
        
        // Prepare and bind the parameters
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sssssss", $full_name, $email, $phone_number, $location, $profession, $services, $about);

        if ($stmt->execute()) {
            echo '<script>alert("Expert registration successful."); window.location.href = "index.php";</script>';

        } else {
            echo "Error: " . $stmt->error;
        }

        // Close the prepared statement
        $stmt->close();
    }
    
    // Close the database connection
    $conn->close();
}
?>

