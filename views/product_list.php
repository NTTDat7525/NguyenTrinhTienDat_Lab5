<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Danh sách sản phẩm</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-4">
    <h3>Danh sách sản phẩm</h3>

    <a href="index.php?page=product-add" class="btn btn-success mb-3">+ Thêm sản phẩm</a>

    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>Tên</th>
            <th>Giá</th>
            <th>Hành động</th>
        </tr>

        <?php if (isset($products) && count($products) > 0): ?>
            <?php foreach ($products as $p): ?>
                <tr>
                    <td><?= $p['id'] ?></td>
                    <td><?= $p['name'] ?></td>
                    <td><?= number_format($p['price']) ?> VNĐ</td>
                    <td>
                        <a href="index.php?page=product-detail&id=<?= $p['id'] ?>" class="btn btn-info btn-sm">Chi tiết</a>
                        <a href="index.php?page=product-edit&id=<?= $p['id'] ?>" class="btn btn-warning btn-sm">Sửa</a>
                        <a href="index.php?page=product-delete&id=<?= $p['id'] ?>"
                           onclick="return confirm('Xóa sản phẩm này?')"
                           class="btn btn-danger btn-sm">Xóa</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="4" class="text-center text-danger">
                    Không có sản phẩm nào
                </td>
            </tr>
        <?php endif; ?>
    </table>
</div>
</body>
</html>
