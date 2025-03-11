<?php
// Database configuration
$servername = "mysql";       // Change if using a remote server
$username = "root";              // Replace with your MySQL username
$password = "sumit2606";                  // Replace with your MySQL password
$dbname = "SurveyDB";            // The name of the database

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data and sanitize inputs
    $name = $conn->real_escape_string($_POST['name']);
    $email = $conn->real_escape_string($_POST['email']);
    $age = (int)$_POST['age'];
    $role = $conn->real_escape_string($_POST['role']);
    $recommend = isset($_POST['recommend']) ? $conn->real_escape_string($_POST['recommend']) : '';
    $languages = isset($_POST['languages']) ? implode(", ", $_POST['languages']) : '';
    $comments = $conn->real_escape_string($_POST['comments']);

    // Insert data into the database
    $sql = "INSERT INTO SurveyResponses (name, email, age, role, recommend, languages, comments)
            VALUES ('$name', '$email', $age, '$role', '$recommend', '$languages', '$comments')";

    if ($conn->query($sql) === TRUE) {
        echo "Thank you for your submission!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the connection
$conn->close();
?>
