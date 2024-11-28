<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manajemen Produk Penjual</title>
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

        .store-box {
            border-radius: 10px;
            padding: 15px;
            background-color: #FED420;
            color: #4BAA38;
            margin-top: 20px;
        }

        .product-table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 20px;
        }

        .product-table th,
        .product-table td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }

        .product-table th {
            background-color: #4BAA38;
            color: white;
        }

        .btn-edit {
            background-color: #4BAA38;
            border: none;
            color: white;
            padding: 5px 10px;
            border-radius: 5px;
        }

        .btn-delete {
            background-color: #FF4B4B;
            border: none;
            color: white;
            padding: 5px 10px;
            border-radius: 5px;
        }

        .btn-detail {
            background-color: #007BFF;
            border: none;
            color: white;
            padding: 5px 10px;
            border-radius: 5px;
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

        <!-- Informasi Toko -->
        <div class="store-box">
            <div class="row">
                <div class="col-md-6">
                    <p>Nama Toko: <strong>Toko A</strong></p>
                </div>
                <div class="col-md-6 text-end">
                    <p>Jumlah Produk: <strong>0</strong></p>
                </div>
            </div>
        </div>

        <!-- Tabel Produk -->
        <table class="product-table">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama Produk</th>
                    <th>Harga Produk</th>
                    <th>Lokasi</th>
                    <th>No Telepon</th>
                    <th>Deskripsi Produk</th>
                    <th>Foto Produk</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Produk A</td>
                    <td>Rp. 10,000</td>
                    <td>Bekasi</td>
                    <td>0123456789</td>
                    <td>Produk A</td>
                    <td>
                        <img src="img/sample1.jpg" alt="Foto Produk" width="50">
                    </td>
                    <td>
                        <button class="btn-edit">Ubah</button>
                        <button class="btn-delete">Hapus</button>
                        <button class="btn-detail">Detail</button>
                    </td>
                </tr>
                <!-- Tambahkan produk lainnya di sini -->
            </tbody>
        </table>
    </div>

    <!-- Footer -->
    <?php include 'includes/footer.php'; ?>
</body>

</html>
