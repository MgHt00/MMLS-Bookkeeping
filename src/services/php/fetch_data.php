<?php
// Database connection
$servername = "localhost";
$username = "root";  // Your MySQL username
$password = "";  // Your MySQL password
$dbname = "your_database_name";  // Your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch Account Types
$account_types_sql = "SELECT id, name FROM account_types";
$account_types_result = $conn->query($account_types_sql);
$account_types = [];
if ($account_types_result->num_rows > 0) {
    while($row = $account_types_result->fetch_assoc()) {
        $account_types[] = $row;
    }
}

// Fetch Currencies
$currencies_sql = "SELECT id, name FROM currencies";
$currencies_result = $conn->query($currencies_sql);
$currencies = [];
if ($currencies_result->num_rows > 0) {
    while($row = $currencies_result->fetch_assoc()) {
        $currencies[] = $row;
    }
}

// Close connection
$conn->close();

// Return data as JSON
echo json_encode(['account_types' => $account_types, 'currencies' => $currencies]);
?>
