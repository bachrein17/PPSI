<?php
// review_produk.php
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Review Produk</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
.container{
    margin: 10px 0;
}

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

        .search-container {
            display: flex;
            align-items: center;
            justify-content: space-between;
            max-width: 80%;
            margin: 0 auto;
            gap: 15px;
        }

        .search-container .logo {
            width: 75px;
            height: auto;
        }

        .search-container .form-control {
            padding: 10px 15px;
            border: 2px solid #4BAA38;
            border-radius: 5px;
            font-size: 16px;
        }

        .search-container .form-control:focus {
            outline: none;
            border-color: #FED420;
            box-shadow: 0 0 5px #FED420;
        }

        .search-container .favorite-icon img {
            width: 40px;
            height: auto;
            cursor: pointer;
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

        .produk-detail {
            display: flex;
            align-items: flex-start;
            gap: 20px;
            margin-bottom: 30px;
            border: 1px solid #28A745;
            border-radius: 10px;
            padding: 20px;
            background-color: #ffffff;
        }

        .produk-detail img {
            width: 150px;
            border-radius: 10px;
        }

        .produk-info {
            max-width: 600px;
        }

        .produk-info h2 {
            margin: 0;
            color: #28A745;
        }

        .produk-info p {
            margin: 10px 0;
        }

        .review-section {
            margin-top: 30px;
        }

        .review-card {
            border: 1px solid #FFC107;
            background-color: #FFF8E1;
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 20px;
        }

        .review-name {
            font-weight: 600;
            color: #333;
        }

        .review-form {
            background-color: #28A745;
            padding: 20px;
            border-radius: 10px;
            color: white;
            margin-top: 20px;
        }

        .review-form input,
        .review-form select,
        .review-form textarea,
        .review-form button {
            width: 100%;
            margin-bottom: 15px;
            padding: 10px;
            border: none;
            border-radius: 5px;
        }

        .review-form button {
            background-color: #FFD700;
            color: #28A745;
            font-weight: bold;
            cursor: pointer;
        }

        .review-form button:hover {
            background-color: #F9C900;
        }

        h2 {
            color: #28A745;
            text-align: center;
        }
    </style>
</head>

    <!-- Include Navbar -->
    <?php include 'includes/navbar.php'; ?>

    <div class="container">
        <div class="search-container">
            <img src="img/logo-bursa-umkm.png" alt="Logo" class="logo">
            <input type="text" class="form-control" placeholder="Pencarian">
            <a href="favorit.php" class="favorite-icon">
                <img src="img/favorite.png" alt="Favorit">
            </a>
        </div>

        <!-- Detail Produk -->
        <div class="produk-detail">
            <img src="images/kentang.jpg" alt="Kentang Frozen Food">
            <div class="produk-info">
                <h2>Kentang Frozen Food</h2>
                <p><strong>Harga:</strong> Rp. 25.000</p>
                <p><strong>No Telepon:</strong> 08123456789</p>
                <p>Kentang frozen food adalah kentang yang dibekukan sebagai salah satu jenis makanan beku (frozen
                    food). Frozen food adalah makanan yang diawetkan dengan cara mengubah sebagian besar kandungan
                    airnya menjadi es.</p>
                <ul>
                    <li>Karbohidrat dalam bentuk pati</li>
                    <li>Protein</li>
                    <li>Serat yang mendukung pencernaan</li>
                    <li>Mineral seperti potassium, fosfor, magnesium, dan zat besi</li>
                    <li>Senyawa antioksidan seperti flavonoid dan karotenoid</li>
                    <li>Vitamin C</li>
                </ul>
            </div>
        </div>

        <!-- Review Pengunjung -->
        <h2>Review Pengunjung</h2>
        <div class="review-section">
            <div class="review-card">
                <p class="review-name">Gojo Satoru</p>
                <p>satoru@gmail.com</p>
                <p>⭐️⭐️⭐️⭐️⭐️</p>
                <p>REKOMENDED ABISSSSS!!!</p>
            </div>
            <div class="review-card">
                <p class="review-name">Uzumaki Naruto</p>
                <p>naruto@gmail.com</p>
                <p>⭐️⭐️⭐️⭐️⭐️</p>
                <p>GA NYESEL BELI DISINI DATTEBAYO!!!</p>
            </div>
            <div class="review-card">
                <p class="review-name">Monkey D Luffy</p>
                <p>luffy@gmail.com</p>
                <p>⭐️⭐️⭐️⭐️⭐️</p>
                <p>TIDAK PERNAH MENGECEWAKAN, AKU MENYUKAINYA!!!</p>
            </div>
        </div>

        <!-- Form Review -->
        <h2>Review Saya</h2>
        <form class="review-form" action="submit_review.php" method="POST">
            <input type="text" name="name" placeholder="Nama" required>
            <input type="email" name="email" placeholder="Email" required>
            <label for="rating">Rating:</label>
            <select name="rating" required>
                <option value="5">⭐️⭐️⭐️⭐️⭐️</option>
                <option value="4">⭐️⭐️⭐️⭐️</option>
                <option value="3">⭐️⭐️⭐️</option>
                <option value="2">⭐️⭐️</option>
                <option value="1">⭐️</option>
            </select>
            <textarea name="comment" placeholder="Komentar Anda..." rows="4" required></textarea>
            <button type="submit">Kirim</button>
        </form>
    </div>

    <!-- Include Footer -->
    <?php include 'includes/footer.php'; ?>
</body>

</html>