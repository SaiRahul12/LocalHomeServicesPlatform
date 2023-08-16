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

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $query = "SELECT id, username, password FROM users WHERE username = ? AND password = ?";
    $stmt = mysqli_prepare($conn, $query);

    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "ss", $username, $password);

        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        $num = mysqli_num_rows($result);
        
        if ($num == 0) {
           
            echo '<script>alert("Please enter correct username and password"); window.location.href = "login.php";</script>';
        } else {
            $row = mysqli_fetch_array($result);
            $_SESSION['username'] = $row['username'];
            $_SESSION['user_id'] = $row['id'];
            echo '<script>alert("Login Successful"); window.location.href = "services.php";</script>';
           
        }
    } else {
        $m = "An error occurred. Please try again.";
        header('location: index.php?errorl=' . $m);
    }
    mysqli_stmt_close($stmt);
}
?>

<div class="navbar-buttons">
    <?php
    session_start();
    if (isset($_SESSION["username"])) {
        echo '<a href="cart.php"><button class="btn btn-primary">Cart</button></a>';
    } else {
        echo '<a href="login.php"><button class="btn btn-primary">Login</button></a>';
    }
    ?>
    <a href="REGISTER.php"><button class="btn btn-success">Become Our Expert</button></a>
</div>


// Function to sanitize user input
// function sanitizeInput($input) {
//     global $conn;
//     $input = trim($input);
//     $input = stripslashes($input);
//     $input = htmlspecialchars($input);
//     return $conn->real_escape_string($input);
// }

// // Function to validate email
// function validateEmail($email) {
//     return filter_var($email, FILTER_VALIDATE_EMAIL);
// }
// 