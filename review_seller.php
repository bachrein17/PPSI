<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Review Pengunjung</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
        .navbar,
        .navbar a,
        .navbar-brand {
            font-family: 'Poppins' !important;
            font-size: 20px !important;
            text-decoration: none;
            background-color: #4BAA38;
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
            background-color: #FED420 !important;
            color: black !important;
            border: none !important;
            font-weight: 500 !important;
        }

        .btn-secondary:hover {
            background-color: #388D2C !important;
        }


        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
        }
        .profile-card {
            background-color: #F8FFF8;
            border: 1px solid #28A745;
            border-radius: 10px;
            padding: 20px;
            margin: 20px;
            display: flex;
            align-items: center;
            gap: 20px;
        }
        .profile-card img {
            width: 80px;
            height: 80px;
            border-radius: 50%;
        }
        .review-container {
            margin: 20px;
        }
        .review-card {
            border: 1px solid #FFC107;
            background-color: #FFF8E1;
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .review-content {
            max-width: 80%;
        }
        .review-name {
            font-weight: 600;
            font-size: 16px;
            margin-bottom: 5px;
        }
        .review-email {
            font-size: 14px;
            color: #6C757D;
        }
        .review-text {
            margin-top: 10px;
        }
        .delete-button {
            background-color: #FF5733;
            color: white;
            border: none;
            padding: 10px;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>
<?php include 'includes/navbar.php'; ?>

    <div class="profile-card">
        <img src="avatar.png" alt="Profile Picture">
        <div>
            <p><strong>Nama:</strong> Ismail</p>
            <p><strong>Email:</strong> ismail@gmail.com</p>
            <p><strong>No Telepon:</strong> 08123456789</p>
            <p><strong>Alamat:</strong> Alamat lengkap</p>
        </div>
    </div>

    <h2 style="margin: 20px; color: #28A745;">Review Pengunjung</h2>

    <div class="review-container">
        <div class="review-card">
            <div class="review-content">
                <p class="review-name">Gojo Satoru</p>
                <p class="review-email">satoru@gmail.com</p>
                <p class="review-text">REKOMENDED ABISSSSS!!!</p>
            </div>
            <button class="delete-button">Hapus Review</button>
        </div>
        <div class="review-card">
            <div class="review-content">
                <p class="review-name">Uzumaki Naruto</p>
                <p class="review-email">naruto@gmail.com</p>
                <p class="review-text">GA NYESEL BELI DISINI DATTEBAYO!!!</p>
            </div>
            <button class="delete-button">Hapus Review</button>
        </div>
        <div class="review-card">
            <div class="review-content">
                <p class="review-name">Monkey D Luffy</p>
                <p class="review-email">luffy@gmail.com</p>
                <p class="review-text">TIDAK PERNAH MENGECEWAKAN, AKU MENYUKAINYA!!!</p>
            </div>
            <button class="delete-button">Hapus Review</button>
        </div>
    </div>

    <?php include 'includes/footer.php'; ?>
</body>
</html>
