<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buat Akun - Bursa UMKM</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f8f9fa;
        }
        .container {
            max-width: 800px;
            background: #ffffff;
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        .image-section img {
            width: 100%;
            height: auto;
            border-radius: 8px;
        }
        .form-section {
            padding-left: 2rem;
        }
        .btn-block {
            width: 48%;
        }
        .form-header {
            text-align: center;
            margin-bottom: 1rem;
        }
        .form-header h4 {
            font-weight: 600;
        }
        .button-container {
            display: flex;
            justify-content: space-between;
        }

        .btn{
            width: 150px;
        }
    </style>
</head>
<body>
<?php
require_once 'vendor/autoload.php';

// init configuration
$clientID = '419238255008-e1tbj7vo00ai3gr6ceuv30vh2tpcg9fh.apps.googleusercontent.com';
$clientSecret = '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';
$redirectUri = 'http://localhost/ppsitest/login.php';

// create Client Request to access Google API
$client = new Google_Client();
$client->setClientId($clientID);
$client->setClientSecret($clientSecret);
$client->setRedirectUri($redirectUri);
$client->addScope("email");
$client->addScope("profile");
?>

<div class="container">
    <div class="row">
        <!-- Left Section with Image -->
        <div class="col-md-6 image-section">
            <img src="your-image.jpg" alt="UMKM Image"> <!-- Replace 'your-image.jpg' with your actual image file path -->
        </div>

        <!-- Right Section with Form -->
        <div class="col-md-6 form-section">
            <div class="form-header">
                <h4>Buat Akun Anda</h4>
            </div>
            <form id="registerForm" action="register_process.php" method="POST">
                <div class="form-group">
                    <label for="username">Username*</label>
                    <input type="text" id="username" name="username" class="form-control" placeholder="Masukkan Username Anda" required>
                </div>
                <div class="form-group">
                    <label for="email">Email*</label>
                    <input type="email" id="email" name="email" class="form-control" placeholder="Masukkan Email Anda" required>
                </div>
                <div class="form-group">
                    <label for="password">Password*</label>
                    <input type="password" id="password" name="password" class="form-control" placeholder="Masukkan Password Anda" required>
                </div>
                <div class="form-group">
                    <label for="confirmPassword">Konfirmasi Password*</label>
                    <input type="password" id="confirmPassword" name="confirmPassword" class="form-control" placeholder="Masukkan Ulang Password Anda" required>
                </div>
                
                <div class="button-container mt-4">
                    <button type="submit" class="btn btn-primary">Daftar</button>
                    <a href="login.php" class="btn btn-primary">Masuk</a>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
    document.getElementById("registerForm").addEventListener("submit", function(event) {
        const password = document.getElementById("password").value;
        const confirmPassword = document.getElementById("confirmPassword").value;

        if (password !== confirmPassword) {
            alert("Password dan Konfirmasi Password tidak cocok!");
            event.preventDefault(); // Mencegah form untuk submit
        }
    });
</script>
</body>
</html>
