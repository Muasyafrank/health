<?php
// Database connection details (adjust as needed)
$host     = "localhost";
$username = "root";     // Your DB username
$password = "";         // 
$database = "DoctorCare"; 

// Create a new MySQLi connection
$conn = new mysqli($host, $username, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Only process POST requests
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and assign form data
    $full_name = $conn->real_escape_string($_POST['full_name']);
    $email     = $conn->real_escape_string($_POST['email']);
    $phone     = $conn->real_escape_string($_POST['phone']);
    $message   = $conn->real_escape_string($_POST['message']);

    // Insert data into the database table 'users'
    $sql = "INSERT INTO contact (full_name, email, phone, message) 
            VALUES ('$full_name', '$email', '$phone', '$message')";

    if ($conn->query($sql) === TRUE) {
         echo "Data saved successfully!";
    } else {
         echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the connection
$conn->close();
?>
