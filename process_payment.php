<?php
// Database configuration
$host = 'localhost';
$dbname = 'DoctorCare'; 
$username = 'root'; 
$password = ''; 

try {
    // Create a PDO connection to the database
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Check if the request method is POST
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Get form data
        $phone = $_POST['phone'];
        $amount = $_POST['amount'];

        // Prepare and execute the SQL query to insert the data
        $stmt = $pdo->prepare("INSERT INTO payments (phone, amount) VALUES (?, ?)");
        $stmt->execute([$phone, $amount]);

        // Return a success response in JSON format
        echo json_encode(array('message' => 'Payment successful!'));
    } else {
        // Return an error response if the request method is not POST
        echo json_encode(array('error' => 'Invalid request method.'));
    }
} catch (PDOException $e) {
    // Return an error response if there's a database issue
    echo json_encode(array('error' => 'Database error: ' . $e->getMessage()));
}
?>