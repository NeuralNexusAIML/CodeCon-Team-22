<?php

// Database credentials
$servername = "localhost";
$username = "root";
$password = ""; // By default, XAMPP has no password for the root user
$dbname = "fundtasia";

// Create a connection to the database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check if the connection was successful
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Get the form data
    $firstName = $_POST['first_name'];
    $lastName = $_POST['last_name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // SQL query to insert the data into a table
    $sql = "INSERT INTO contact_form (first_name, last_name, email, message) VALUES ('$firstName', '$lastName', '$email', '$message')";

    // Execute the query
    if ($conn->query($sql) === TRUE) {
        // Close the database connection
        $conn->close();

        // Redirect to the submitted page
        header("Location: submitted.php");
        exit;
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the database connection
$conn->close();

?>
