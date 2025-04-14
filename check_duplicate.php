<?php
$host = "localhost";
$username = "root";  // your DB username
$password = "";      // your DB password
$dbname = "student.fyp";

$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['email'])) {
  $email = $_POST['email'];
  $query = "SELECT * FROM students WHERE email = ?";
  $stmt = $conn->prepare($query);
  $stmt->bind_param("s", $email);
  $stmt->execute();
  $result = $stmt->get_result();

  echo $result->num_rows > 0 
       ? "<span  style='color:red;'>Email already exists</span>" 
       : "<span style='color:green;'>Email available</span>";
} 

if (isset($_POST['contact'])) {
  $contact = $_POST['contact'];
  $query = "SELECT * FROM students WHERE Contact = ?";
  $stmt = $conn->prepare($query);
  $stmt->bind_param("s", $contact); 
  $stmt->execute();
  $result = $stmt->get_result();

  echo $result->num_rows > 0 
       ? "<span style='color:red;'>Contact number already exists</span>" 
       : "<span style='color:green;'>Contact number available</span>";
}
?>
