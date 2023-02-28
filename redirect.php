<?php
// Connect to the database
$conn = mysqli_connect('localhost', 'username', 'password', 'database');

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Get the short code from the URL
$short_code = $_GET['c'];

// Look up the URL associated with the short code
$sql = "SELECT url FROM urls WHERE short_code = '$short_code'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // Redirect to the original URL
    $row = mysqli_fetch_assoc($result);
    header("Location: " . $row['url']);
} else {
    // Display an error message if the short code is invalid
    echo "Error: Invalid URL";
}

// Close the database connection
mysqli_close($conn);
?>
