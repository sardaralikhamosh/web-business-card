<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Business Card</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f4f4f4;
        }
        .card {
            display: flex;
            align-items: center;
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            width: 500px;
        }
        .logo {
            margin-right: 20px;
            text-align: center;
        }
        .logo img {
            width: 80px;
        }
        .info {
            flex: 1;
        }
        .info h2 {
            margin: 0;
            color: #0056b3;
            font-size: 20px;
        }
        .info p {
            margin: 5px 0;
            font-size: 14px;
            color: grey;
        }
        .contact {
            display: flex;
            align-items: center;
        }
        .contact p {
            margin: 5px 10px 5px 0;
            display: flex;
            align-items: center;
        }
        .contact p i {
            margin-right: 5px;
        }
        .social-icons {
            margin-top: 10px;
        }
        .social-icons a {
            margin-right: 10px;
            color: #333;
            font-size: 16px;
            text-decoration: none;
        }
        hr {
            border: none;
            height: 2px;
            background-color: #0056b3;
            margin: 10px 0;
        }
    </style>
</head>
<body>
    <div class="card">
        <div class="logo">
            <img src="img/Logo.png" alt="AV Media Logo">
        </div>
        <div class="info">
            <h2 style="color:#4c2d80;">Louls-Charles Gagnon, Ing</h2>
            <p>Chef de l'innovation</p>
            <hr>
            <p><i class="fas fa-phone-disabled"></i>T : +1 (450) 396-9993</p>
            <p><i class="fas fa-envelope-disabled"></i><a href="mailto:belkacem@ls2.ca">belkacem@ls2.ca</a></p>
            <p><i class="fas fa-globe-disabled"></i>Canada | <a href="https://ls2.ca" target="_blank">https://ls2.ca</a></p>
            <div class="social-icons-disabled">
                <a href="#"><i class="fab fa-instagram-disabled"></i></a>
                <a href="#"><i class="fab fa-twitter-disabled"></i></a>
                <a href="#"><i class="fab fa-youtube-disabled"></i></a>
            </div>
        </div>
    </div>
</body>
</html>
