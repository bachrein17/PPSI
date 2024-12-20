<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kategori</title>
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
        }

        .content h1 {
            font-size: 2rem;
            color: #FFC300;
            margin-bottom: 1.5rem;
            text-align: center;
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

        a.btn-yellow {
            background-color: #FFC300;
            color: white;
        }

        a.btn-red {
            background-color: #FF5733;
            color: white;
        }

        a.btn-blue {
            background-color: #007BFF;
            color: white;
            margin-top: 1rem;
            display: inline-block;
        }

        a.btn:hover {
            opacity: 0.9;
        }

        a.btn-blue:hover {
            text-decoration: underline;
        }

        /* Modal Styles */
        .modal {
            display: none; 
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.4);
            padding-top: 60px;
        }

        .modal-content {
            background-color: #fefefe;
            margin: 5% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
            max-width: 500px;
            text-align: center; /* Center content inside modal */
        }

        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }

        .modal input[type="text"] {
            padding: 0.5rem;
            width: 80%; /* Adjust width to be smaller */
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            display: block;
            margin-left: auto;
            margin-right: auto; /* Center the input field */
        }

        .modal button {
            padding: 0.5rem 1rem;
            background-color: #007BFF;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            display: inline-block;
            margin-top: 10px;
        }

        .modal button:hover {
            background-color: #0056b3;
        }

        /* Gambar dan pesan konfirmasi */
        .confirmation-modal img {
            width: 100px; /* Gambar logo */
            height: auto;
            margin-bottom: 20px;
        }

        .confirmation-modal p {
            font-size: 1.2rem;
            color: #28A745;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <?php include '../includes/sidebar.php'; ?>
    <?php include '../includes/navbar_admin.php'; ?>

    <div class="content">
        <h1>Kategori</h1>
        <table>
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Kategori</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Makanan</td>
                    <td>
                        <a href="#" class="btn btn-yellow" onclick="openModal('ubah', 1, 'Makanan')">Ubah Data Kategori</a>
                        <a href="hapus_kategori.php?id=1" class="btn btn-red">Hapus Kategori</a>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Minuman</td>
                    <td>
                        <a href="#" class="btn btn-yellow" onclick="openModal('ubah', 2, 'Minuman')">Ubah Data Kategori</a>
                        <a href="hapus_kategori.php?id=2" class="btn btn-red">Hapus Kategori</a>
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Fashion</td>
                    <td>
                        <a href="#" class="btn btn-yellow" onclick="openModal('ubah', 3, 'Fashion')">Ubah Data Kategori</a>
                        <a href="hapus_kategori.php?id=3" class="btn btn-red">Hapus Kategori</a>
                    </td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Kerajinan</td>
                    <td>
                        <a href="#" class="btn btn-yellow" onclick="openModal('ubah', 4, 'Kerajinan')">Ubah Data Kategori</a>
                        <a href="hapus_kategori.php?id=4" class="btn btn-red">Hapus Kategori</a>
                    </td>
                </tr>
            </tbody>
        </table>
        <a href="#" class="btn btn-blue" onclick="openModal('tambah')">Tambah Data Kategori</a>
    </div>

    <!-- Modal untuk Ubah Data Kategori -->
    <div id="modalUbah" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal('ubah')">&times;</span>
            <h2>Ubah Kategori</h2>
            <form action="ubah_kategori.php" method="POST">
                <input type="text" id="kategori" name="kategori" placeholder="Masukkan Nama Kategori" required>
                <input type="hidden" id="kategoriId" name="id">
                <button type="submit">Simpan</button>
            </form>
        </div>
    </div>

    <!-- Modal untuk Tambah Data Kategori -->
    <div id="modalTambah" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal('tambah')">&times;</span>
            <h2>Tambah Kategori</h2>
            <form action="tambah_kategori.php" method="POST">
                <input type="text" name="kategori" placeholder="Masukkan Nama Kategori" required>
                <button type="submit">Tambah</button>
            </form>
        </div>
    </div>

    <!-- Modal Konfirmasi Berhasil -->
    <div id="modalKonfirmasi" class="modal confirmation-modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal('konfirmasi')">&times;</span>
            <img src="logo-bursa-umkm.png" alt="Logo Bursa UMKM">
            <p>Data kategori telah berhasil ditambahkan</p>
        </div>
    </div>

    <script>
        // Fungsi untuk membuka modal
        function openModal(action, id = null, kategori = null) {
            if (action === 'ubah') {
                document.getElementById('modalUbah').style.display = 'block';
                document.getElementById('kategoriId').value = id;
                document.getElementById('kategori').value = kategori;
            } else if (action === 'tambah') {
                document.getElementById('modalTambah').style.display = 'block';
            } else if (action === 'konfirmasi') {
                document.getElementById('modalKonfirmasi').style.display = 'block';
            }
        }

        // Fungsi untuk menutup modal
        function closeModal(action) {
            if (action === 'ubah') {
                document.getElementById('modalUbah').style.display = 'none';
            } else if (action === 'tambah') {
                document.getElementById('modalTambah').style.display = 'none';
            } else if (action === 'konfirmasi') {
                document.getElementById('modalKonfirmasi').style.display = 'none';
            }
        }

        // Menutup modal jika klik di luar modal
        window.onclick = function(event) {
            if (event.target === document.getElementById('modalUbah')) {
                closeModal('ubah');
            }
            if (event.target === document.getElementById('modalTambah')) {
                closeModal('tambah');
            }
            if (event.target === document.getElementById('modalKonfirmasi')) {
                closeModal('konfirmasi');
            }
        }
    </script>
</body>
</html>
