<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mulai Berjualan</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <style>
        .form-box {
            background-color: #FED420;
            border-radius: 10px;
            padding: 20px;
            color: #4BAA38;
        }

        .btn-primary {
            background-color: #4BAA38;
            border: none;
        }

        .btn-primary:hover {
            background-color: #3D9130;
        }

        .btn-outline-primary {
            color: #4BAA38;
            border-color: #4BAA38;
        }

        .btn-outline-primary:hover {
            background-color: #4BAA38;
            color: white;
        }

        .image-preview img {
            width: 150px;
            height: auto;
            margin-right: 10px;
        }

        .form-box textarea {
            resize: none;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <?php include 'includes/navbar.php'; ?>

    <div class="container my-5">
        <div class="row">
            <!-- Form untuk menambahkan produk -->
            <div class="col-md-5">
                <div class="form-box">
                    <h5 class="text-center">Tambah Produk</h5>
                    <form method="POST" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" required>
                        </div>
                        <div class="mb-3">
                            <label for="harga" class="form-label">Harga</label>
                            <input type="text" class="form-control" id="harga" name="harga" required>
                        </div>
                        <div class="mb-3">
                            <label for="lokasi" class="form-label">Lokasi</label>
                            <input type="text" class="form-control" id="lokasi" name="lokasi" required>
                        </div>
                        <div class="mb-3">
                            <label for="no_telepon" class="form-label">No Telepon</label>
                            <input type="text" class="form-control" id="no_telepon" name="no_telepon" required>
                        </div>
                        <div class="mb-3">
                            <label for="kategori" class="form-label">Kategori</label>
                            <select id="kategori" class="form-control" name="kategori" required>
                                <option value="Makanan">Makanan</option>
                                <option value="Kerajinan">Kerajinan</option>
                                <option value="Fashion">Fashion</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="deskripsi" class="form-label">Deskripsi</label>
                            <textarea id="deskripsi" class="form-control" name="deskripsi" rows="3" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="file" class="form-label">File</label>
                            <input type="file" id="file" class="form-control" name="file" required>
                            <small class="text-danger">Max file size: 2MB</small>
                        </div>
                        <button type="submit" class="btn btn-outline-primary">Tinjau Produk</button>
                    </form>
                </div>
            </div>

            <!-- Preview Produk -->
            <div class="col-md-7">
                <div class="image-preview d-flex">
                    <img src="img/sample1.jpg" alt="Preview Image">
                    <img src="img/sample2.jpg" alt="Preview Image">
                    <img src="img/sample3.jpg" alt="Preview Image">
                </div>
                <div class="mt-3">
                    <ul>
                        <li>Nama Produk</li>
                        <li>Harga Produk</li>
                        <li>Lokasi</li>
                        <li>No Telepon</li>
                        <li>Kategori</li>
                        <li>Deskripsi Produk</li>
                    </ul>
                    <button type="submit" class="btn btn-primary">Tambah Produk</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <?php include 'includes/footer.php'; ?>
</body>

</html>
