<?php

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

//Check connection
if ($conn->connect_error) {
    exit('Connection failed: '.$conn->connect_error);
}

// Connect
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve username and password from the form
    $username = $_POST['username'];
    $password = $_POST['password'];

    // SQL injection prevention
    $username = mysqli_real_escape_string($conn, $username);
    $password = mysqli_real_escape_string($conn, $password);

    // Query to check if the user exists in the database
    $sql = "SELECT * FROM login WHERE username='$username' AND password='$password'";
    $result = $conn->query($sql);

    if (! $result) {
        // Query error occurred
        exit('Error executing the query: '.$conn->error);
    }

    if ($result->num_rows > 0) {
        // User found, redirect to success page or do whatever is necessary
        echo 'Login successful!';
    } else {
        // User not found, redirect back to login page or show error message
        echo 'Invalid username or password';
    }
}
