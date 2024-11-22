<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sumber UMKM - Homepage</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .navbar,
        .navbar a,
        .navbar-brand {
            font-family: 'Poppins' !important;
            font-size: 20px !important;
        }

        .nav-link{
            padding: 10px 15px !important;
        }

        .btn-outline-secondary {
            background-color: white !important;
            color: #4BAA38 !important;
            border: 2px solid #4BAA38 !important;
        }

        .btn-outline-secondary:hover {
            background-color: #4BAA38 !important;
            color: white !important;
        }

        .btn-secondary {
            background-color: #4BAA38 !important;
            color: white !important;
            border: none !important;
            font-weight: 500 !important;
        }

        .btn-secondary:hover {
            background-color: #388D2C !important;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="kategori.php">Kategori</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="index.php">Beranda</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Tentang Bursa UMKM</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Mulai Berjualan</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Admin</a></li>
                </ul>
            </div>
            <div class="d-flex">
                <a class="btn btn-outline-secondary me-2" href="login.php">Masuk</a>
                <a class="btn btn-secondary" href="register.php">Daftar</a>
            </div>
        </div>
    </nav>
</body>

</html>