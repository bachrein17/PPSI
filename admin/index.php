<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <style>
        /* General styling */
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
        }

        .content {
            margin-left: 20%;
            padding: 2rem;
            width: 80%;
        }

        .box {
            width: 30%;
            height: 100px;
            display: inline-block;
            margin-right: 2%;
            border-radius: 10px;
            color: white;
            font-size: 18px;
            text-align: center;
            line-height: 100px;
            font-weight: bold;
        }

        .red { background-color: #FF5733; }
        .yellow { background-color: #FFC300; }
        .green { background-color: #28A745; }

        .chart {
            margin-top: 2rem;
            text-align: center;
        }

        /* Responsive Styling for Mobile */
        @media screen and (max-width: 768px) {
            /* Adjust content layout for smaller screens */
            .content {
                margin-left: 0;
            }

            .box {
                width: 90%; /* Kotak mengambil 90% lebar pada perangkat mobile */
                margin-bottom: 1rem; /* Add margin for separation */
                line-height: 80px; /* Adjust line height for a better look */
                font-size: 16px; /* Make font smaller for better readability */
                margin-left: 5%; /* Center the box horizontally */
            }

            /* Adjust chart image size for smaller screens */
            .chart img {
                width: 100%; /* Make chart image take full width */
            }
        }
    
    </style>
</head>
<body>
    <?php include '../includes/sidebar.php'; ?>
    <?php include '../includes/navbar_admin.php'; ?>

    <!-- Content -->
    <div class="content">
        <div>
            <div class="box red">Total UMKM<br>0</div>
            <div class="box yellow">Total Kategori<br>0</div>
            <div class="box green">Total Produk<br>0</div>
        </div>
        <div class="chart">
            <img src="your-chart.png" alt="Chart" style="width: 60%;">
        </div>
    </div>
</body>
</html>
