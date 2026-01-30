<?php
require 'vendor/autoload.php';

use App\Controllers\HomeControllers;

// Router siêu đơn giản
$page = $_GET['page'] ?? 'home';

if ($page === 'home') {
    $controller = new HomeControllers();
    $controller->index();
} else {
    echo "<!DOCTYPE html>
    <html>
    <head>
        <title>404</title>
        <style>
            body { font-family: Arial; text-align: center; margin-top: 50px; }
            h1 { color: #d9534f; }
        </style>
    </head>
    <body>
        <h1>404 - Page Not Found</h1>
        <p>Trang bạn tìm kiếm không tồn tại.</p>
        <a href='index.php?page=home'>Quay lại Trang chủ</a>
    </body>
    </html>";
}
?>