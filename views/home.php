<?php
// views/home.php
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - MVC</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background-color: #f4f4f4;
        }
        .container {
            background-color: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        h1 {
            color: #333;
        }
        .info {
            background-color: #e8f4f8;
            padding: 15px;
            border-left: 4px solid #0099cc;
            margin: 10px 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1><?php echo $message; ?></h1>
        <div class="info">
            <h2>Thông tin Sinh viên:</h2>
            <p><?php echo $studentInfo; ?></p>
        </div>
    </div>
</body>
</html>