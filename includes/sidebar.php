<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
        }

        /* Sidebar styling */
        .sidebar {
            width: 250px;
            background-color: #FED420;
            height: 100vh;
            position: fixed;
            padding: 18px 0;
            border-right: 1px solid black;
            text-align: center;
            transition: width 0.3s ease;
        }

        .sidebar h2 {
            font-family: 'Poppins';
            color: black;
            border-bottom: 1px solid black;
            margin-bottom: 10px;
        }

        .sidebar img {
            width: 70%;
            border-radius: 10px;
            margin-bottom: 1rem;
        }

        .sidebar a {
            display: block;
            text-decoration: none;
            padding: 10px;
            color: black;
            background-color: #FED420;
            text-align: center;
            border-top: 1px solid black;
        }

        .sidebar a:hover {
            background-color:rgb(175, 143, 0);
        }

        /* Sidebar collapse */
        .sidebar.collapsed {
            width: 80px;
            text-align: center;
        }

        .sidebar.collapsed a {
            font-size: 0;
            padding: 10px;
        }

        .sidebar.collapsed h2,
        .sidebar.collapsed img {
            display: none;
        }

        /* Mobile View (screen width 768px or less) */
        @media screen and (max-width: 768px) {
            .sidebar {
                width: 200px;
                display: none; /* Hide the sidebar by default */
            }

            .sidebar.show {
                display: block; /* Show the sidebar when the 'show' class is added */
            }

            .sidebar-toggle {
                display: block;
                position: absolute;
                top: 20px;
                left: 20px;
                background-color: #FF5733;
                color: white;
                padding: 10px;
                border: none;
                font-size: 20px;
                cursor: pointer;
                z-index: 100;
            }

            .sidebar h2 {
                display: none; /* Hide title on mobile */
            }
        }

        /* Hide the sidebar toggle on PC */
        @media screen and (min-width: 769px) {
            .sidebar-toggle {
                display: none;
            }
        }
    </style>
</head>
<body>
    <!-- Sidebar -->
    <div class="sidebar" id="sidebar">
        <h2>Sumber UMKM</h2>
        <img src="../img/logo-bursa-umkm.png" alt="Logo">
        <a href="tentang.php">Tentang Bursa UMKM</a>
        <a href="manajemen_produk.php">Manajemen Produk</a>
        <a href="kategori.php">Kategori</a>
        <a href="daftar_penjual.php">Daftar Penjual</a>
        <a href="kelola_rating.php" style="border-bottom: 1px solid black;">Kelola Rating</a>
    </div>

    <!-- Sidebar Toggle Button (for mobile) -->
    <button class="sidebar-toggle" id="sidebarToggle">&#9776;</button>

    <script>
        // Toggle sidebar on mobile
        const sidebar = document.getElementById('sidebar');
        const sidebarToggle = document.getElementById('sidebarToggle');

        sidebarToggle.addEventListener('click', () => {
            sidebar.classList.toggle('show'); // Toggle sidebar visibility on mobile
        });
    </script>
</body>
</html>
