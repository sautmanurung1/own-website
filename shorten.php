<?php
// Connect to the database
$conn = mysqli_connect('localhost', 'username', 'password', 'database');

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Get the URL from the form submission
$url = $_POST['url'];

// Generate a unique short code
$short_code = generateRandomString(6);

// Insert the URL and its short code into the database
$sql = "INSERT INTO urls (url, short_code) VALUES ('$url', '$short_code')";
if (mysqli_query($conn, $sql)) {
    // Display the shortened URL
    echo "Shortened URL: https://sautmanurung.my.id/$short_code";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Close the database connection
mysqli_close($conn);

// Function to generate a random string of specified length
function generateRandomString($length) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, strlen($characters) - 1)];
    }
    return $randomString;
}
?>
