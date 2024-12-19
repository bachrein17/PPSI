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
            flex-direction: column;
        }
        /* Header */
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #FFC300; /* Yellow background */
            padding: 1rem;
            color: white;
            border-bottom: 2px solid #FF5733; /* Line separating header from content */
        }
        .header .title {
            font-size: 24px;
            font-weight: bold;
            margin-right: auto; /* Push title to the left */
        }
        .header .navbar {
            display: flex;
            align-items: center;
        }
        .header .navbar a {
            color: white;
            text-decoration: none;
            font-weight: bold;
            margin-left: 1rem;
            padding: 0.5rem;
            border-radius: 5px;
            background-color: #FF5733; /* Red background for Logout */
        }
        .header .navbar a:hover {
            background-color: #FF4500; /* Darker red on hover */
        }
        /* Content */
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
    </style>
</head>
<body>
    <?php include '../includes/sidebar.php'; ?>

    <!-- Header -->
    <div class="header">
        <div class="title">Sumber UMKM</div>
        <div class="navbar">
            <a href="logout.php">Logout</a>
        </div>
    </div>

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
