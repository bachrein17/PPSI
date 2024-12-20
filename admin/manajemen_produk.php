<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manajemen Produk</title>
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
            max-width: 1200px;
            text-align: center;
        }

        .content h1 {
            font-size: 2rem;
            color: #FFC300;
            margin-bottom: 1.5rem;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 1rem;
        }

        table th, table td {
            border: 1px solid #ddd;
            padding: 0.8rem;
            text-align: center;
        }

        table th {
            background-color: #28A745;
            color: white;
            font-weight: bold;
        }

        table tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        table tr:hover {
            background-color: #f1f1f1;
        }

        /* Style untuk link yang terlihat seperti tombol */
        a.btn {
            padding: 0.5rem 1rem;
            font-size: 0.9rem;
            display: inline-block;
            text-decoration: none;
            border-radius: 5px;
            cursor: pointer;
            text-align: center;
        }

        a.btn-green {
            background-color: #28A745;
            color: white;
        }

        a.btn-red {
            background-color: #FF5733;
            color: white;
        }

        a.btn-blue {
            background-color: #007BFF;
            color: white;
        }

        a.btn:hover {
            opacity: 0.9;
        }
    </style>
</head>
<body>
    <?php include '../includes/sidebar.php'; ?>
    <?php include '../includes/navbar_admin.php'; ?>

    <div class="content">
        <h1>Manajemen Produk</h1>
        <table>
            <thead>
                <tr>
                    <th>Nama Produk</th>
                    <th>Kategori</th>
                    <th>Harga</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Produk A</td>
                    <td>Makanan</td>
                    <td>Rp.</td>
                    <td>Belum Disetujui</td>
                    <td>
                        <a href="setujui_produk.php" class="btn btn-green">Setujui</a>
                        <a href="hapus_produk.php" class="btn btn-red">Hapus</a>
                        <a href="detail_produk.php" class="btn btn-blue">Detail</a>
                    </td>
                </tr>
                <tr>
                    <td>Produk B</td>
                    <td>Minuman</td>
                    <td>Rp.</td>
                    <td>Disetujui</td>
                    <td>
                        <a href="setujui_produk.php" class="btn btn-green">Setujui</a>
                        <a href="hapus_produk.php" class="btn btn-red">Hapus</a>
                        <a href="detail_produk.php" class="btn btn-blue">Detail</a>
                    </td>
                </tr>
                <tr>
                    <td>Produk C</td>
                    <td>Fashion</td>
                    <td>Rp.</td>
                    <td>Belum Disetujui</td>
                    <td>
                        <a href="setujui_produk.php" class="btn btn-green">Setujui</a>
                        <a href="hapus_produk.php" class="btn btn-red">Hapus</a>
                        <a href="detail_produk.php" class="btn btn-blue">Detail</a>
                    </td>
                </tr>
                <tr>
                    <td>Produk D</td>
                    <td>Kerajinan</td>
                    <td>Rp.</td>
                    <td>Disetujui</td>
                    <td>
                        <a href="setujui_produk.php" class="btn btn-green">Setujui</a>
                        <a href="hapus_produk.php" class="btn btn-red">Hapus</a>
                        <a href="detail_produk.php" class="btn btn-blue">Detail</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>
