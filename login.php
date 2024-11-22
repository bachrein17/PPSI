<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Bursa UMKM</title>
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

        .btn-google {
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #ffffff;
            border: 1px solid #ddd;
            color: #333;
            width: 100%;
            padding: 0.5rem;
        }

        .btn-google img {
            width: 20px;
            margin-right: 8px;
        }

        .form-header {
            text-align: center;
            margin-bottom: 1rem;
        }

        .form-header h4 {
            font-weight: 600;
        }

        .divider {
            display: flex;
            align-items: center;
            text-align: center;
        }

        .divider hr {
            flex: 1;
            height: 1px;
            background-color: #ddd;
            border: none;
            margin: 0 10px;
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

    // authenticate code from Google OAuth Flow
    if (isset($_GET['code'])) {
        $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
        $client->setAccessToken($token['access_token']);

        // get profile info
        $google_oauth = new Google_Service_Oauth2($client);
        $google_account_info = $google_oauth->userinfo->get();
        $email = $google_account_info->email;
        $name = $google_account_info->name;

        // now you can use this profile info to create account in your website and make user logged in.
    } else { ?>

        <div class="container">
            <div class="row">
                <!-- Left Section with Image -->
                <div class="col-md-6 image-section">
                    <img src="your-image.jpg" alt="UMKM Image">
                    <!-- Replace 'your-image.jpg' with your actual image file path -->
                </div>

                <!-- Right Section with Form -->
                <div class="col-md-6 form-section">
                    <div class="form-header">
                        <h4>Selamat Datang di Bursa UMKM</h4>
                    </div>
                    <form action="login_process.php" method="POST">
                        <div class="form-group">
                            <label for="email">Email*</label>
                            <input type="email" id="email" name="email" class="form-control"
                                placeholder="Masukkan Email Anda" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Password*</label>
                            <input type="password" id="password" name="password" class="form-control"
                                placeholder="Masukkan Password Anda" required>
                        </div>
                        <div class="text-right">
                            <a href="#" class="small">Lupa Password Anda?</a>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block mt-3">Masuk</button>

                        <!-- Divider with Lines and "Atau" -->
                        <div class="divider my-4">
                            <hr>
                            <span>Atau</span>
                            <hr>
                        </div>

                        <a href="<?= $client->createAuthUrl(); ?>" class="btn btn-google"
                            style="display: inline-flex; align-items: center; text-decoration: none;">
                            <img src="./img/logo-google.png" alt="Google Logo" style="margin-right: 8px;">
                            Masuk Lewat Google
                        </a>

                        <div class="text-center mt-3">
                            <span>Belum Mempunyai Akun ?</span> <a href="register.php">Daftar Disini</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <?php } ?>
</body>

</html>