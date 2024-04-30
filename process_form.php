<?php
$servername = "localhost";
$username = "root";
$password = ""; // Assuming there's no password set for the database
$dbname = "armssecurity";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if (isset($_POST['submit'])) {
  $full_name = $_POST['full_name'];
  $email = $_POST['email'];
  $phone_no = $_POST['phone_no'];
  $message = $_POST['message'];

  // SQL query to insert data into the database
  $sql = "INSERT INTO contact_us (full_name, phone_no, email, message) VALUES ('$full_name', '$phone_no', '$email', '$message')";

  if ($conn->query($sql) === TRUE) {
    echo '<div class="alert alert-success" role="alert">Form submitted successfully!</div>';
            
  } else {
    echo '<div class="alert alert-danger" role="alert">Error: ' . $sql . '<br>' . $conn->error . '</div>';
            
  }
}

$conn->close();
?>
