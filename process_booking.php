<?php
// Database configuration
$host = 'localhost'; // Replace with your database host
$dbname = 'DoctorCare'; // Replace with your database name
$username = 'root'; // Replace with your database username
$password = ''; // Replace with your database password

try {
    // Create a PDO connection to the database
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Check if the request method is POST
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Get form data
        $full_name = $_POST['full_name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $appointment_date = $_POST['appointment_date'];
        $appointment_time = $_POST['appointment_time'];
        $amount = $_POST['amount']; // Get the appointment fee

        // Prepare and execute the SQL query to insert the data
        $stmt = $pdo->prepare("INSERT INTO appointments (full_name, email, phone, appointment_date, appointment_time, amount) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->execute([$full_name, $email, $phone, $appointment_date, $appointment_time, $amount]);

        // Redirect to the payment page after saving the data
        header('Location: payment.html');
        exit;
    } else {
        // Return an error response if the request method is not POST
        echo "Invalid request method.";
    }
} catch (PDOException $e) {
    // Display an error message if there's a database issue
    echo "Database error: " . $e->getMessage();
}
?>