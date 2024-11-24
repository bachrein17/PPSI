<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kategori - Sumber UMKM</title>
    <link rel="stylesheet" href="css/kategori.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
</head>

<body>
    <?php include 'includes/navbar.php'; ?>
    <div class="container text-center my-5">
        <input type="text" class="form-control" placeholder="Pencarian">
    </div>
    <div class="container text-center">
        <div class="row justify-content-center">
            <div class="col-md-3">
                <div class="card-category">
                    <img src="img/kategori1.png" alt="Makanan">
                    <h5>Makanan</h5>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card-category">
                    <img src="img/kategori2.png" alt="Minuman">
                    <h5>Minuman</h5>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card-category">
                    <img src="img/kategori3.png" alt="Fashion">
                    <h5>Fashion</h5>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card-category">
                    <img src="img/kategori4.png" alt="Kerajinan">
                    <h5>Kerajinan</h5>
                </div>
            </div>
        </div>
    </div>

    <div class="container my-4">
    <div class="row g-2"> <!-- Jarak antar-kolom dan baris -->
        <?php for ($i = 0; $i < 12; $i++): ?>
            <?php include 'includes/product_card.php'; ?>
        <?php endfor; ?>
    </div>
</div>

    <?php include 'includes/footer.php'; ?>

</body>

</html>