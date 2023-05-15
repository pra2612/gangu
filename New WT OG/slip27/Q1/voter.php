<?php
// Get the form data
$name = $_POST["name"];
$age = $_POST["age"];
$nationality = $_POST["nationality"];

// Validate the data
$errorMsg = "";
if (strtoupper($name) != $name) {
	$errorMsg .= "Name should be in upper case letters only.<br>";
}
if ($age < 18) {
	$errorMsg .= "Age should not be less than 18 years.<br>";
}
if ($nationality != "Indian") {
	$errorMsg .= "Nationality should be Indian.<br>";
}

// Send the response back to the client
if ($errorMsg == "") {
	echo "valid";
} else {
	echo $errorMsg;
}
?>
