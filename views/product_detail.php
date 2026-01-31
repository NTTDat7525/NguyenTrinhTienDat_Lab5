<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Chi tiết sản phẩm</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-4">
    <h3 class="mb-3">📦 Chi tiết sản phẩm</h3>

    <div class="card">
        <div class="card-body">
            <p><strong>ID:</strong> <?= $product['id'] ?></p>
            <p><strong>Tên:</strong> <?= $product['name'] ?></p>
            <p><strong>Giá:</strong> <?= number_format($product['price']) ?> VNĐ</p>
            <p><strong>Mô tả:</strong><br><?= $product['description'] ?></p>
        </div>
    </div>

    <a href="index.php?page=product-list" class="btn btn-secondary mt-3">⬅ Quay lại danh sách</a>
</div>
</body>
</html>
