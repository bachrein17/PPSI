<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mulai Berjualan</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }

        .form-box {
            background-color: #ffffff;
            border-radius: 10px;
            padding: 20px;
            color: #000;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .form-title {
            background-color: #FED420;
            color: black;
            font-weight: bold;
            text-align: center;
            padding: 15px;
            border-radius: 10px 10px 0 0;
            margin: -20px -20px 20px -20px;
        }

        .form-title h5 {
            font-size: 30px;
            font-family: 'Poppins';
            font-weight: bold;
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
            border-radius: 5px;
        }

        .form-box textarea,
        .form-box input,
        .form-box select {
            font-family: 'Poppins', sans-serif;
            font-size: 14px;
            color: #333;
        }

        .form-box textarea {
            resize: none;
        }

        .form-box label {
            font-weight: 600;
        }

        .image-preview {
            display: flex;
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
                    <div class="form-title">
                        <h5>Tambah Produk</h5>
                    </div>
                    <form id="productForm" method="POST" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" required>
                        </div>
                        <div class="mb-3">
                            <label for="harga" class="form-label">Harga</label>
                            <div class="input-group">
                                <span class="input-group-text">Rp.</span>
                                <input type="text" class="form-control" id="harga" name="harga" required>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="lokasi" class="form-label">Lokasi</label>
                            <input type="text" class="form-control" id="lokasi" name="lokasi" required>
                        </div>
                        <div class="mb-3">
                            <label for="no_telepon" class="form-label">No Telepon</label>
                            <input type="text" class="form-control" id="no_telepon" name="no_telepon" required>
                        </div>
                        <div class="mb-3 position-relative">
                            <label for="kategori" class="form-label">Kategori</label>
                            <div class="input-group">
                                <select id="kategori" class="form-control" name="kategori" required>
                                    <option value="Makanan">Makanan</option>
                                    <option value="Kerajinan">Kerajinan</option>
                                    <option value="Fashion">Fashion</option>
                                </select>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="deskripsi" class="form-label">Deskripsi</label>
                            <textarea id="deskripsi" class="form-control" name="deskripsi" rows="3" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="file" class="form-label">File</label>
                            <input type="file" id="file" class="form-control" name="file[]" accept="image/*" multiple
                                required>
                            <small class="text-danger">Maksimal 3 file, ukuran maksimal 2MB per file.</small>
                        </div>
                        <div id="file-error" class="text-danger mt-2" style="display: none;">Maksimal 3 file dapat
                            diunggah, hanya gambar diperbolehkan.</div>

                        <button type="button" id="previewBtn" class="btn btn-outline-primary">Tinjau Produk</button>
                    </form>
                </div>
            </div>

            <!-- Preview Produk -->
            <div class="col-md-7" id="productPreview" style="display: none;">
                <div class="image-preview" id="previewImages"></div>
                <div class="mt-3">
                    <ul>
                        <li><strong>Nama Produk:</strong> <span id="previewNama"></span></li>
                        <li><strong>Harga Produk:</strong> <span id="previewHarga"></span></li>
                        <li><strong>Lokasi:</strong> <span id="previewLokasi"></span></li>
                        <li><strong>No Telepon:</strong> <span id="previewNoTelepon"></span></li>
                        <li><strong>Kategori:</strong> <span id="previewKategori"></span></li>
                        <li><strong>Deskripsi Produk:</strong> <span id="previewDeskripsi"></span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <?php include 'includes/footer.php'; ?>

    <script>
        document.getElementById('previewBtn').addEventListener('click', function () {
            // Ambil nilai dari form
            const nama = document.getElementById('nama').value;
            const harga = document.getElementById('harga').value;
            const lokasi = document.getElementById('lokasi').value;
            const noTelepon = document.getElementById('no_telepon').value;
            const kategori = document.getElementById('kategori').value;
            const deskripsi = document.getElementById('deskripsi').value;
            const files = document.getElementById('file').files;

            // Tampilkan preview informasi produk
            document.getElementById('previewNama').textContent = nama;
            document.getElementById('previewHarga').textContent = harga;
            document.getElementById('previewLokasi').textContent = lokasi;
            document.getElementById('previewNoTelepon').textContent = noTelepon;
            document.getElementById('previewKategori').textContent = kategori;
            document.getElementById('previewDeskripsi').textContent = deskripsi;

            // Tampilkan gambar yang diunggah
            const previewImages = document.getElementById('previewImages');
            previewImages.innerHTML = ''; // Kosongkan gambar sebelumnya
            Array.from(files).forEach(file => {
                const reader = new FileReader();
                reader.onload = function (e) {
                    const img = document.createElement('img');
                    img.src = e.target.result;
                    previewImages.appendChild(img);
                };
                reader.readAsDataURL(file);
            });

            // Tampilkan bagian preview
            document.getElementById('productPreview').style.display = 'block';
        });
    </script>
</body>

</html>