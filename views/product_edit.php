<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Sửa sản phẩm</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-4">
    <h3 class="mb-3">✏️ Sửa sản phẩm</h3>

    <form method="POST" action="index.php?page=product-update">
        <input type="hidden" name="id" value="<?= $product['id'] ?>">

        <div class="mb-3">
            <label class="form-label">Tên sản phẩm</label>
            <input type="text" name="name" class="form-control"
                   value="<?= $product['name'] ?>" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Giá</label>
            <input type="number" name="price" class="form-control"
                   value="<?= $product['price'] ?>" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Mô tả</label>
            <textarea name="description" class="form-control" rows="4"><?= $product['description'] ?></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Cập nhật</button>
        <a href="index.php?page=product-list" class="btn btn-secondary">Quay lại</a>
    </form>
</div>
</body>
</html>
