<?php
// Database connection variables
$host = "localhost";
$username = "root";  // your DB username
$password = "";      // your DB password
$dbname = "student.fyp";

// Create connection
$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$fullname = $_POST['fullname'];
$email = $_POST['email'];
$Contact = $_POST['Contact'];
$message= $_POST['message'];

// File upload
$targetDir = "uploads/";
$fileName = basename($_FILES["file"]["name"]);
$targetFilePath = $targetDir.$fileName;
$fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);
// var_dump($_FILES);die;


// Allow certain file formats (optional)
$allowedTypes = array('jpg','png','jpeg','pdf','doc','docx');
if(in_array($fileType, $allowedTypes)) {
    if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)) {
        // Insert into database
        $sql = "INSERT INTO students (fullname, email, file, Contact,message) 
                VALUES ('$fullname', '$email', '$fileName', '$Contact','$message')";

        if ($conn->query($sql) === TRUE) {
            echo "Form data submitted successfully!";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
} else {
    echo "Sorry, only JPG, JPEG, PNG, PDF, DOC, & DOCX files are allowed.";
}

$conn->close();
?>
