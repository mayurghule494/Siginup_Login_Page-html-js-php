<?php
$servername = "db";
$username = "mayur";
$password = "mayur";
$dbname = "signup_login";

// Create a new database connection
$conn = new mysqli($servername, $username, $password);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create the database if it doesn't exist
$sqlCreateDatabase = "CREATE DATABASE IF NOT EXISTS $dbname";
if ($conn->query($sqlCreateDatabase) === TRUE) {
    echo "Database created successfully<br>";
} else {
    echo "Error creating database: " . $conn->error;
}

// Select the database
$conn->select_db($dbname);

// Create the 'users' table if it doesn't exist
$sqlCreateTable = "
    CREATE TABLE IF NOT EXISTS users (
        id INT AUTO_INCREMENT PRIMARY KEY,
        fullname VARCHAR(255) NOT NULL,
        email VARCHAR(255) NOT NULL,
        password VARCHAR(255) NOT NULL,
        accept_terms TINYINT(1) NOT NULL
    )
";
if ($conn->query($sqlCreateTable) === TRUE) {
    echo "Table 'users' created or already exists<br>";
} else {
    echo "Error creating table: " . $conn->error;
}

// Handle signup form submission
if (isset($_POST['signup'])) {
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $acceptTerms = isset($_POST['acceptTerms']) ? 1 : 0;

    // Perform insert query
    $sqlInsert = "INSERT INTO users (fullname, email, password, accept_terms) VALUES ('$fullname', '$email', '$password', '$acceptTerms')";

    if ($conn->query($sqlInsert) === TRUE) {
        echo "Signup successful!";
    } else {
        echo "Error: " . $sqlInsert . "<br>" . $conn->error;
    }
}

$conn->close();
?>

