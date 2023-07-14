<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Retrieve the email from the form submission
  $email = $_POST['email'];

  // Store the email in the SQL database (replace with your database code)
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "newsletter";

  // Create a connection to the SQL database
  $conn = new mysqli($servername, $username, $password, $dbname);
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  // Prepare and execute the SQL query to insert the email
  $stmt = $conn->prepare("INSERT INTO subscribers (email) VALUES (?)");
  $stmt->bind_param("s", $email);
  $stmt->execute();

  // Close the database connection
  $stmt->close();
  $conn->close();

  // Redirect back to the subscribed page with a success message
  header("Location: subscribed.php");
  exit();
}
?>
