<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <style>
        .header {
            display: flex;
            justify-content: flex-end;
            align-items: center;
            background-color: #FED420; 
            padding: 1rem;
            color: white;
            border-bottom: 1px solid black; 
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
    </style>
</head>
<body>
    <div class="header">
        <div class="navbar">
            <a href="logout.php">Logout</a>
        </div>
    </div>
</body>
</html>
