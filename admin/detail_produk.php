<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Produk</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
        }

        .content {
            margin: 2rem auto;
            padding: 1rem;
            width: 90%;
            max-width: 800px;
            text-align: center;
        }

        .content h1 {
            font-size: 2rem;
            color: #FFC300;
            margin-bottom: 2rem;
        }

        .detail-container {
            display: flex;
            flex-direction: row;
            gap: 2rem;
            align-items: flex-start;
        }

        .detail-container img {
            width: 200px;
            height: 200px;
            object-fit: cover;
            border: 1px solid #ddd;
            border-radius: 10px;
        }

        .detail-info {
            text-align: left;
        }

        .detail-info p {
            margin: 0.5rem 0;
            font-size: 1rem;
        }

        .detail-info p span {
            font-weight: bold;
            color: #28A745;
        }

        @media (max-width: 768px) {
            .detail-container {
                flex-direction: column;
                align-items: center;
            }

            .detail-container img {
                margin-bottom: 1rem;
            }

            .detail-info {
                text-align: center;
            }
        }
    </style>
</head>
<body>
    <?php include '../includes/sidebar.php'; ?>
    <?php include '../includes/navbar_admin.php'; ?>

    <div class="content">
        <h1>Detail Produk</h1>
        <div class="detail-container">
            <!-- Gambar Produk -->
            <img src="path-to-product-image.jpg" alt="Produk Image">

            <!-- Informasi Produk -->
            <div class="detail-info">
                <p><span>Nama Produk:</span> Produk A</p>
                <p><span>Harga:</span> Rp. 100.000</p>
                <p><span>No Telepon:</span> 081234567890</p>
                <p><span>Deskripsi:</span> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lacinia odio vitae vestibulum vestibulum.</p>
            </div>
        </div>
    </div>
</body>
</html>
