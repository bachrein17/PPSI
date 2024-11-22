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
            display: flex;
        }
        .content {
            margin-left: 20%;
            padding: 2rem;
            width: 80%;
        }
        .header {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 1rem;
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
    </style>
</head>
<body>
<?php include '../includes/sidebar.php'; ?>

    <div class="content">
        <div class="header">Dashboard Admin</div>
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
