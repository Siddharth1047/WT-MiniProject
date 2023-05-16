<?php
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$dbname = "your_database_name";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$name = $_POST["name"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$gender = $_POST["gender"];
$class = $_POST["class"];
$branch = $_POST["branch"];

// Prepare the SQL statement with placeholders
$sql = "INSERT INTO registration (name, email, phone, gender, class, branch) 
        VALUES (?, ?, ?, ?, ?, ?)";

// Create a prepared statement
$stmt = $conn->prepare($sql);

// Bind the parameters and execute the statement
$stmt->bind_param("ssssss", $name, $email, $phone, $gender, $class, $branch);

if ($stmt->execute()) {
    echo "Form submitted successfully";
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>