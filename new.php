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

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_FILES["post_pic"])) {
    $uploadDirectory = "uploads/"; // Directory where you want to save uploaded files
    $allowedExtensions = array("jpg", "jpeg", "png", "gif"); // Allowed file extensions

    $file = $_FILES["post_file"];
    $fileName = $file["name"];
    $fileTmpName = $file["tmp_name"];
    $fileError = $file["error"];

    // Check if the file was uploaded without any errors
    if ($fileError === 0) {
        $fileInfo = pathinfo($fileName);
        $fileExtension = strtolower($fileInfo["extension"]);

        // Check if the file extension is allowed
        if (in_array($fileExtension, $allowedExtensions)) {
            $newFileName = uniqid("post_", true) . "." . $fileExtension; // Generate a unique filename

            $destination = $uploadDirectory . $newFileName;

            // Move the uploaded file to the specified destination
            if (move_uploaded_file($fileTmpName, $destination)) {
                // File upload successful
                // Now, insert the filename into the database

                // Get form data
                $fullname = $_POST['fullname'];
                $email = $_POST['email'];
                $number = $_POST['number'];
                $sql = "INSERT INTO students (fullname, email, file, number) 
                VALUES ('$fullname', '$email', '$fileName', '$number')";
                // if ($connection->query($sql) === TRUE) {
                //     header("Location: all_posts.php?post=created");
                //     die();
                // } else {
                //     // echo "Error: " . $sql . "<br>" . $connection->error;
                //     header("Location: all_posts.php?post=failed");
                //     die();
                // }

                $connection->close();
            } else {
                echo "Error uploading the file.";
            }
        } else {
            echo "Invalid file extension. Allowed extensions are: " . implode(", ", $allowedExtensions);
        }
    } else {
        echo "Error: " . $fileError;
    }
}
?>