<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Produk</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <style>
        .profile-box {
            border: 2px solid #4BAA38;
            border-radius: 10px;
            padding: 20px;
            background-color: #ffffff;
            color: #4BAA38;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .form-container {
            border: 2px solid #FED420;
            border-radius: 10px;
            padding: 20px;
            background-color: #fff;
            margin-top: 20px;
        }

        .form-container h2 {
            background-color: #FED420;
            color: #4BAA38;
            padding: 10px;
            border-radius: 5px;
            text-align: center;
            margin-bottom: 20px;
        }

        .form-control {
            border: 2px solid #4BAA38;
            border-radius: 5px;
        }

        .form-control:focus {
            border-color: #FED420;
            box-shadow: none;
        }

        .btn-save {
            background-color: #4BAA38;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
        }

        .btn-save:hover {
            background-color: #3a9232;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <?php include 'includes/navbar.php'; ?>

    <div class="container my-5">
        <!-- Profil Penjual -->
        <div class="profile-box">
            <div class="row">
                <div class="col-md-2 text-center">
                    <img src="img/profile.png" alt="Foto Profil" class="rounded-circle" width="100" height="100">
                </div>
                <div class="col-md-10">
                    <p>Nama: <strong>Iman</strong></p>
                    <p>Email: <strong>iman@example.com</strong></p>
                    <p>No Telepon: <strong>08123456789</strong></p>
                    <p>Alamat: <strong>Bekasi, Indonesia</strong></p>
                </div>
            </div>
        </div>

        <!-- Form Ubah Produk -->
        <div class="form-container">
            <h2>Ubah Produk</h2>
            <form action="proses_ubah_produk.php" method="POST" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="nama_produk" class="form-label">Nama Produk</label>
                    <input type="text" class="form-control" id="nama_produk" name="nama_produk" value="Produk A" required>
                </div>
                <div class="mb-3">
                    <label for="harga_produk" class="form-label">Harga Produk</label>
                    <input type="text" class="form-control" id="harga_produk" name="harga_produk" value="Rp." required>
                </div>
                <div class="mb-3">
                    <label for="lokasi" class="form-label">Lokasi</label>
                    <input type="text" class="form-control" id="lokasi" name="lokasi" value="Kota A" required>
                </div>
                <div class="mb-3">
                    <label for="no_telepon" class="form-label">No Telepon</label>
                    <input type="text" class="form-control" id="no_telepon" name="no_telepon" value="0123456789" required>
                </div>
                <div class="mb-3">
                    <label for="kategori" class="form-label">Kategori</label>
                    <select class="form-select" id="kategori" name="kategori" required>
                        <option value="Kategori A" selected>Kategori A</option>
                        <option value="Kategori B">Kategori B</option>
                        <option value="Kategori C">Kategori C</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="deskripsi" class="form-label">Deskripsi Produk</label>
                    <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3" required>Deskripsi Produk A</textarea>
                </div>
                <div class="mb-3">
                    <label class="form-label">Foto Produk</label>
                    <div class="mb-3">
                        <img src="img/sample1.jpg" alt="Foto Produk" width="100">
                    </div>
                    <input class="form-control" type="file" id="foto_produk" name="foto_produk">
                    <small class="text-danger">Max file size: 2MB</small>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn-save">Simpan</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Footer -->
    <?php include 'includes/footer.php'; ?>
</body>

</html>
