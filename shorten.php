<?php
// Connect to the database
$conn = mysqli_connect('sql102.epizy.com', 'epiz_31064923', 'ynDeteQ0fbL', 'epiz_31064923_url');

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['url'])) {
    // Get the URL from the form submission
    $url = $_POST['url'];

    // Generate a unique short code
    $short_code = generateRandomString(6);

    // Insert the URL and its short code into the database
    $sql = "INSERT INTO urls (url, short_code) VALUES ('$url', '$short_code')";
    if (mysqli_query($conn, $sql)) {
        // Construct the short URL
        $short_url = 'https://sautmanurung.my.id/' . $short_code;

        // Display the shortened URL
        echo '
            <!DOCTYPE html>
            <html>
            <head>
                <title>URL Shortener</title>
                <style>
                    body {
                        font-family: Arial, sans-serif;
                        background-color: #f7f7f7;
                    }
                    h1 {
                        color: #333;
                        text-align: center;
                        margin-top: 50px;
                    }
                    p {
                        text-align: center;
                        margin-top: 50px;
                        font-size: 24px;
                    }
                    a {
                        display: block;
                        text-align: center;
                        margin-top: 20px;
                        padding: 10px;
                        border-radius: 5px;
                        border: none;
                        background-color: #333;
                        color: #fff;
                        font-size: 16px;
                        text-decoration: none;
                    }
                    a:hover {
                        background-color: #555;
                    }
                </style>
            </head>
            <body>
                <h1>URL Shortener</h1>
                <p>Your short URL:</p>
                <a href="' . $short_url . '">' . $short_url . '</a>
            </body>
            </html>
        ';
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
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
