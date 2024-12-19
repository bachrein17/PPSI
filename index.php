<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sumber UMKM - Homepage</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>

    <?php include 'includes/navbar.php'; ?>

    <div class="jumbotron jumbotron-fluid">
        <div class="container d-flex align-items-center">
            <div class="jumbotron-text">
                <h1 class="display-4" style="font-family: 'Poppins'; font-size: 30px; font-weight : bold; color:yellow">
                    Temukan & Dukung<br>Produk Lokal Terbaik!</h1>
                <p class="lead" style="font-family : 'Poppins'; width:90%;">Sumber UMKM adalah platform yang
                    mempertemukan masyarakat dengan produk lokal unggulan dari pelaku UMKM. Mulai dari makanan,
                    kerajinan, hingga fashion, kami hadir untuk memudahkan pencarian dan dukungan terhadap usaha kecil
                    di sekitar Anda. Temukan produk asli Indonesia dan jadilah bagian dari pemberdayaan ekonomi lokal!
                </p>
                <div class="tombol" style="display: flex; flex-wrap:wrap;">
                    <a href="informasi.php" class="btninfo btn-lg mt-3">Telusuri Sekarang!</a>
                </div>
            </div>
            <div class="jumbotron-image">
                <img src="img/logo-bursa-umkm.png" alt="Logo-Sumber-UMKM">
            </div>
        </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#4BAA38" fill-opacity="1"
            d="M0,160L40,181.3C80,203,160,245,240,261.3C320,277,400,267,480,250.7C560,235,640,213,720,181.3C800,149,880,107,960,96C1040,85,1120,107,1200,128C1280,149,1360,171,1400,181.3L1440,192L1440,0L1400,0C1360,0,1280,0,1200,0C1120,0,1040,0,960,0C880,0,800,0,720,0C640,0,560,0,480,0C400,0,320,0,240,0C160,0,80,0,40,0L0,0Z">
        </path>
    </svg>



    <!-- Features Section -->
    <div class="container text-center my-5">
        <h2 class="fw-bold" style="color: #4BAA38; font-weight: bold;font-family: 'Poppins'">Mudah, Cepat, dan
            Terpercaya, <br>Alasan Anda Harus Memilih Sumber UMKM</h2>
        <div class="row row-cols-1 row-cols-md-2 g-4 mt-4">
            <!-- Card 1 -->
            <div class="col">
                <div class="card h-100 text-center border-0">
                    <div class="card-body">
                        <img src="img/icon1.png" alt="Lezat & Tradisional" style="width: 50px; height: 50px;">
                        <h5 class="Judul mt-3">Lezat & Tradisional</h5>
                        <p class="Deskripsi">Temukan beragam makanan khas lokal dengan cita rasa otentik dan bahan-bahan
                            berkualitas dari UMKM pilihan.</p>
                        <p class="Kategori">Makanan</p>
                    </div>
                </div>
            </div>
            <!-- Card 2 -->
            <div class="col">
                <div class="card h-100 text-center border-0">
                    <div class="card-body">
                        <img src="img/icon2.png" alt="Segar & Alami" style="width: 50px; height: 50px;">
                        <h5 class="Judul mt-3">Segar & Alami</h5>
                        <p class="Deskripsi">Dari minuman herbal hingga kopi lokal, pilih minuman yang mendukung
                            kesehatan Anda.</p>
                        <p class="Kategori">Minuman</p>
                    </div>
                </div>
            </div>
            <!-- Card 3 -->
            <div class="col">
                <div class="card h-100 text-center border-0">
                    <div class="card-body">
                        <img src="img/icon3.png" alt="Gaya Lokal" style="width: 50px; height: 50px;">
                        <h5 class="Judul mt-3">Gaya Lokal</h5>
                        <p class="Deskripsi">Kenakan pakaian dan aksesori dari perajin lokal yang mencerminkan budaya
                            Indonesia.</p>
                        <p class="Kategori">Fashion</p>
                    </div>
                </div>
            </div>
            <!-- Card 4 -->
            <div class="col">
                <div class="card h-100 text-center border-0">
                    <div class="card-body">
                        <img src="img/icon4.png" alt="Karya Tangan" style="width: 50px; height: 50px;">
                        <h5 class="Judul mt-3">Karya Tangan</h5>
                        <p class="Deskripsi">Produk kerajinan unik, dari dekorasi hingga cenderamata, dibuat dengan
                            keterampilan lokal.</p>
                        <p class="Kategori">Kerajinan</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Promotion Section -->
    <div class="container promotion-section my-5"
        style="background-color: #4BAA38; padding: 20px; border-radius: 25px;">
        <div class="row align-items-center">
            <div class="col-md-6 p-3">
                <img src="img/chart.png" alt="Promotion Image" class="img-fluid rounded">
            </div>
            <div class="col-md-6 p-3">
                <h5 class="promotion-heading">Masih Mengelola Usaha dengan Cara Lama? Saatnya Berinovasi!</h5>
            </div>
        </div>
    </div>



    <!-- CTA Section -->
    <div class="container cta-section my-5">
        <div class="row align-items-center">
            <div class="col-md-6">
                <img src="img/local-business.png" alt="Kelola Usaha Lokal" class="img-fluid rounded">
            </div>
            <div class="col-md-6">
                <h3>Kelola Usaha Lokal, Kini Lebih Praktis!</h3>
                <p>Sumber UMKM menyediakan platform digital untuk memudahkan pelaku usaha kecil dalam mempromosikan
                    produk mereka.</p>
                <a class="btn btn-outline-dark" href="#">Mulai Berjualan</a>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <?php include 'includes/footer.php'; ?>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>