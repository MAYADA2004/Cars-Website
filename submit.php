<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydatabase";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Escape user inputs for security
$fullname = $conn->real_escape_string($_REQUEST['fullname']);
$email = $conn->real_escape_string($_REQUEST['email']);
$subject = $conn->real_escape_string($_REQUEST['subject']);
$message = $conn->real_escape_string($_REQUEST['message']);

// Insert user input into the database
$sql = "INSERT INTO contact_form (fullname, email, subject, message) VALUES ('$fullname', '$email', '$subject', '$message')";

// Execute the query
if ($conn->query($sql) === TRUE) {
    echo "Message successfully submitted!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the connection
$conn->close();

?>