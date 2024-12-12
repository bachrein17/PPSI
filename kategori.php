<?php
$products = [
    ["name" => "Nama Barang 1", "price" => "Rp 50.000", "location" => "Bekasi", "image" => "img/produk1.png"],
    ["name" => "Nama Barang 2", "price" => "Rp 70.000", "location" => "Jakarta", "image" => "img/produk2.png"],
    ["name" => "Nama Barang 3", "price" => "Rp 30.000", "location" => "Depok", "image" => "img/produk3.png"],
    ["name" => "Nama Barang 4", "price" => "Rp 100.000", "location" => "Tangerang", "image" => "img/produk4.png"]
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bursa UMKM</title>
    <link rel="stylesheet" href="style.css">
    <style>
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

        .container .form-control {
            max-width: 600px;
            margin: 20px auto;
            padding: 10px 15px;
            border: 2px solid #4BAA38;
            border-radius: 5px;
            font-size: 16px;
        }

        .container .form-control:focus {
            outline: none;
            border-color: #FED420;
            box-shadow: 0 0 5px #FED420;
        }

        .card-category-container {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
            gap: 20px;
            margin: 20px 0;
            background-color: #4BAA38;
        }

        .card-category {
            background-color: white;
            border-radius: 10px;
            padding: 15px;
            text-align: center;
            color: #4BAA38;
            width: 250px;
            height: 300px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s ease-in-out;
            margin: 20px;
            display: flex;
            flex-direction: column;
        }

        .card-category:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
        }

        .card-category .card-img {
            width: 100%;
            height: 80%;
            /* Membuat gambar mengambil 80% dari tinggi card */
            object-fit: cover;
            border-radius: 10px;
        }

        .card-category h5 {
            font-size: 18px;
            font-weight: bold;
            margin-top: 10px;
            margin-bottom: 0;
        }


        /* Product Cards */
        .card {
            border: 2px solid #4BAA38;
            border-radius: 10px;
            overflow: hidden;
            background-color: white;
            margin: 10px;
            transition: transform 0.3s ease-in-out;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }

        .card:hover {
            transform: scale(1.03);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
        }

        .card img {
            width: 100%;
            height: 150px;
            object-fit: cover;
        }

        .card .card-body {
            padding: 10px;
            text-align: center;
            background-color: #4BAA38;
        }

        .card .card-body h5 {
            font-size: 14px;
            font-family: 'Poppins';
            font-weight: bold;
            margin: 10px 0;
            color: white;
        }

        .card .card-body p {
            font-size: 12px;
            font-family: 'Poppins';
            color: white;
            margin: 5px 0;
        }

        .card .btninfo {
            background-color: #FED420;
            color: #4BAA38;
            font-weight: bold;
            border: none;
            padding: 8px 15px;
            border-radius: 5px;
            text-decoration: none;
            font-size: 14px;
            display: inline-block;
            margin-top: 10px;
            transition: background-color 0.3s ease-in-out;
        }

        .card .btninfo:hover {
            background-color: #FFD700;
        }
    </style>
</head>

<body>
    <?php include 'includes/navbar.php'; ?>

    <!-- Search Bar -->
    <div class="container">
        <div class="search-container">
            <img src="img/logo-bursa-umkm.png" alt="Logo" class="logo">
            <input type="text" class="form-control" placeholder="Pencarian">
            <a href="favorit.php" class="favorite-icon">
                <img src="img/favorite.png" alt="Favorit">
            </a>
        </div>
    </div>


    <!-- Kategori -->
    <div class="container">
        <div class="card-category-container">
            <div class="card-category">
                <img src="img/kategori1.png" class="card-img" alt="Makanan">
                <h5>Makanan</h5>
            </div>
            <div class="card-category">
                <img src="img/kategori2.png" class="card-img" alt="Minuman">
                <h5>Minuman</h5>
            </div>
            <div class="card-category">
                <img src="img/kategori3.png" class="card-img" alt="Fashion">
                <h5>Fashion</h5>
            </div>
            <div class="card-category">
                <img src="img/kategori4.png" class="card-img" alt="Kerajinan">
                <h5>Kerajinan</h5>
            </div>
        </div>
    </div>

    <!-- Produk -->
    <div class="container">
        <div class="row justify-content-center">
            <?php foreach ($products as $product): ?>
                <div class="col-md-3">
                    <div class="card">
                        <img src="<?php echo $product['image']; ?>" alt="<?php echo $product['name']; ?>">
                        <div class="card-body">
                            <h5><?php echo $product['name']; ?></h5>
                            <p>Harga: <?php echo $product['price']; ?></p>
                            <p>Lokasi: <?php echo $product['location']; ?></p>
                            <a href="#" class="btninfo">Review Pengguna</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <!-- Footer -->
    <?php include 'includes/footer.php'; ?>

</body>

</html>