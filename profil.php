<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buat Profil</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <style>
        .navbar {
            background-color: #4BAA38;
        }

        /* Border pada input box */
        .mb-3 .form-control {
            border: 2px solid #4BAA38;
            border-radius: 5px;
            padding: 10px;
            box-shadow: none;
            transition: border-color 0.3s ease-in-out;
        }

        .mb-3 .form-control:focus {
            border-color: #FED420;
            outline: none;
        }

        .mb-3 .form-control {
            resize: none;
        }

        .mb-3 button.btn {
            font-weight: bold;
            border-radius: 5px;
            padding: 10px 20px;
            transition: background-color 0.3s ease;
        }

        .mb-3 .btn-warning {
            background-color: #FED420;
            color: #4BAA38;
        }

        .mb-3 .btn-warning:hover {
            background-color: #FFD700;
        }

        .mb-3 .btn-success {
            background-color: #4BAA38;
            color: white;
        }

        .mb-3 .btn-success:hover {
            background-color: #3D9130;
        }

        /* Tombol "Update Profile" ke kanan */
        button[type="submit"] {
            float: right;
            background-color: #007BFF;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
        }

        button[type="submit"]:hover {
            background-color: #0056b3;
        } 
        
        .col-md-4 {
            text-align: center;
        }

        .col-md-4 img {
            border: 2px solid #4BAA38;
            border-radius: 50%;
            margin-bottom: 15px;
        }

        .col-md-4 button {
            display: block;
            width: 70%;
            margin: 5px auto;
        }

        @media (max-width: 768px) {
            button[type="submit"] {
                float: none;
                width: 100%;
            }
        }
    </style>
</head>

<body>
    <?php include 'includes/navbar.php'; ?>

    <div class="container my-5">
        <h1 class="text-center mb-4">Buat Profil</h1>

        <?php if (!empty($message)): ?>
            <div class="alert alert-success"><?php echo $message; ?></div>
        <?php endif; ?>

        <form method="POST" action="">
            <div class="row">
                <div class="col-md-4 text-center">
                    <img src="img/default_profile.jpg" alt="Default Profile" class="rounded-circle mb-3" style="width: 150px; height: 150px;">
                    <button type="button" class="btn btn-warning mb-2">Edit Photo</button>
                    <button type="button" class="btn btn-success">Manajemen Produk</button>
                </div>
                <div class="col-md-8">
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="no_telepon" class="form-label">No Telepon</label>
                        <input type="text" class="form-control" id="no_telepon" name="no_telepon" required>
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat</label>
                        <textarea class="form-control" id="alamat" name="alamat" rows="3" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="tanggal_lahir" class="form-label">Tanggal Lahir (DD/MM/YYYY)</label>
                        <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Update Profile</button>
                </div>
            </div>
        </form>
    </div>

    <?php include 'includes/footer.php'; ?>
</body>

</html>