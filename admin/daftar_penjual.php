<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Penjual</title>
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

        .btn {
            padding: 0.5rem 1rem;
            font-size: 0.9rem;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .btn-red {
            background-color: #FF5733;
            color: white;
        }

        .btn:hover {
            opacity: 0.9;
        }
    </style>
</head>
<body>
    <?php include '../includes/sidebar.php'; ?>
    <?php include '../includes/navbar_admin.php'; ?>

    <div class="content">
        <h1>Daftar Penjual</h1>
        <table>
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama Toko</th>
                    <th>Email</th>
                    <th>Telepon</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Toko ABC</td>
                    <td>abc@example.com</td>
                    <td>081234567890</td>
                    <td>
                        <button class="btn btn-red">Hapus</button>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Toko DEF</td>
                    <td>def@example.com</td>
                    <td>082345678901</td>
                    <td>
                        <button class="btn btn-red">Hapus</button>
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Toko GHI</td>
                    <td>ghi@example.com</td>
                    <td>083456789012</td>
                    <td>
                        <button class="btn btn-red">Hapus</button>
                    </td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Toko JKL</td>
                    <td>jkl@example.com</td>
                    <td>084567890123</td>
                    <td>
                        <button class="btn btn-red">Hapus</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>
