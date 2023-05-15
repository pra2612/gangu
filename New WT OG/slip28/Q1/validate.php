<?php
// Get the form data
$username = $_POST["username"];
$password = $_POST["password"];

// Connect to the database
$servername = "localhost";
$dbname = "myDB";
$usernameDB = "myUsername";
$passwordDB = "myPassword";
$conn = new mysqli($servername, $usernameDB, $passwordDB, $dbname);
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

// Query the database for the user's information
$sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$result = $conn->query($sql);

// Check if the query returned a row
if ($result->num_rows > 0) {
	echo "valid"; // If the data is valid, return "valid"
} else {
	echo "Invalid username or password."; // If the data is invalid, return an error message
}

// Close the database connection
$conn->close();
?>
