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
        form {
            width: 400px;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.2);
        }
        input[type=text] {
            display: block;
            width: 95%;
            margin-bottom: 10px;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            font-size: 16px;
        }
        input[type=submit] {
            display: block;
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            border: none;
            background-color: #333;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
        }
        input[type=submit]:hover {
            background-color: #555;
        }
    </style>
</head>
<body>
    <h1>URL Shortener</h1>
    <form method="POST" action="shorten.php">
        <input type="text" name="url" placeholder="Enter your URL here...">
        <input type="submit" value="Shorten">
    </form>
</body>
</html>
