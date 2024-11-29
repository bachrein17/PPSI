<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produk dan Review</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
        }
        .container {
            margin: 20px;
        }
        .produk-detail {
            display: flex;
            align-items: flex-start;
            gap: 20px;
            margin-bottom: 30px;
            border: 1px solid #28A745;
            border-radius: 10px;
            padding: 20px;
            background-color: #F8FFF8;
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
        }
        .review-form {
            background-color: #28A745;
            padding: 20px;
            border-radius: 10px;
            color: white;
        }
        .review-form input, .review-form textarea, .review-form button {
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
    </style>
</head>
<body>
<?php include 'includes/navbar.php'; ?>

    <div class="container">
        <!-- Detail Produk -->
        <div class="produk-detail">
            <img src="kentang.jpg" alt="Kentang Frozen Food">
            <div class="produk-info">
                <h2>Kentang Frozen Food</h2>
                <p><strong>Harga:</strong> Rp.</p>
                <p><strong>No Telepon:</strong> 123456789</p>
                <p>Kentang frozen food adalah kentang yang dibekukan sebagai salah satu jenis makanan beku (frozen food). Frozen food adalah makanan yang diawetkan dengan cara mengubah sebagian besar kandungan airnya menjadi es.</p>
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
        <h2 style="color: #28A745;">Review Pengunjung</h2>
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
        <h2 style="color: #28A745;">Review Saya</h2>
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
            <textarea name="comment" placeholder="Komentar" rows="4" required></textarea>
            <button type="submit">Kirim</button>
        </form>
    </div>

    <?php include 'includes/footer.php'; ?>
</body>
</html>
