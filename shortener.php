<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!--- Font Lemonada ----->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lemonada:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <!----- Font Lexend Biasa------->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <!--- Hover CSS --->
    <link rel="stylesheet" href="hover.css">
    <link rel="icon" href="icon.png">
    <title>Saut Manurung | Shortener Links</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm p-3 mb-5 bg-white rounded">
        <a class="navbar-brand hvr-underline-from-left" href="index.html"
            style="font-family: 'Lexend', sans-serif; font-weight: 700; font-size: 20px;">Saut
            Manurung</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01"
            aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link hvr-underline-from-left" href="About.html"
                        style="font-family: 'Lexend', sans-serif; font-weight: 700; margin-right: 25px;">About</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link hvr-underline-from-left" href="shortener.php"
                        style="font-family: 'Lexend', sans-serif; font-weight: 700; margin-right: 25px;">Shorten
                        Link</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link hvr-underline-from-left" href="https://sautmanurung.vercel.app/"
                        style="font-family: 'Lexend', sans-serif; font-weight: 700;">Sosial Media</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="jumbotron jumbotron-fluid text-center d-flex justify-content-center" style="background-color: white; height: 100%;">
        <div class="container">
            <form class="shadow-lg p-3 mb-5 bg-white rounded" method="POST" action="shorten.php">
                <div class="form-group">
                    <label for="input-URL" style="font-family: 'Lexend', sans-serif; font-weight: 600; font-size: large;">INPUT YOUR URL</label>
                    <input type="text" class="form-control" name="url" placeholder="Enter Your URL here..." style="margin-bottom: 20px; width: 100%;">
                    <button type="submit" class="btn btn-primary" value="Shorten" style="font-family: 'Lexend', sans-serif; font-weight: 600;">Submit</button>
                </div>
            </form>
        </div>
    </div>
    
    <footer style="text-align: center; font-size: 12px; font-family: 'Lemonada', cursive; margin-top: 160px;">
        <p style="margin-top: -10px;">&copy; Copyright 2022 <a href="https://github.com/sautmanurung1"
                className="transition-all duration-300 hover:text-sky-500">Saut Kristian Wiratama Manurung</a></p>
    </footer>

    <script src=" https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
        </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
        </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"
        integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous">
        </script>
</body>

</html>