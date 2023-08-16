<?php
$servername = "localhost";
$username = "root"; 
$password = "";    
$database = "user_management"; 
$conn = new mysqli($servername, $username, $password, $database);
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
// Start session, connect to database, etc.

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Prepare the SQL query with placeholders
    $query = "SELECT id, username, password, email, role FROM users WHERE username = ? AND password = ?";
    $stmt = mysqli_prepare($conn, $query);

    if ($stmt) {
        // Bind the parameters to the placeholders
        mysqli_stmt_bind_param($stmt, "ss", $username, $password);
        
        // Execute the prepared statement
        mysqli_stmt_execute($stmt);

        // Get the result
        $result = mysqli_stmt_get_result($stmt);
        
        // Check the number of rows returned
        $num = mysqli_num_rows($result);
        
        if ($num == 0) {
            $m = "Please enter correct username and password";
            header('location: index.php?errorl=' . $m);
        } else {
            $row = mysqli_fetch_array($result);
            $_SESSION['username'] = $row['username'];
            $_SESSION['password'] = $row['password'];
           
            $m = "Login Successful";
            header('location: services.php');
        }
    } else {
        // Error handling for failed prepared statement
        $m = "An error occurred. Please try again.";
        header('location: index.php?errorl=' . $m);
    }
    
    // Close the prepared statement
    mysqli_stmt_close($stmt);
}
?>
