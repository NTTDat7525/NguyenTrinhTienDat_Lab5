<?php include 'header.php'; ?>

<div class="container mt-4 text-center">
    <div class="card">
        <div class="card-header bg-light">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <h5 class="mb-0">
                        <?php echo $search ? 'Kết quả tìm kiếm' : 'Danh sách sản phẩm'; ?>
                    </h5>
                </div>
                <div class="col-md-4 text-end">
                    <a href="index.php?page=product-add" class="btn btn-primary btn-sm">
                        + Thêm mới
                    </a>
                </div>
            </div>
        </div>

        <div class="card-body">

            <!-- Tìm kiếm -->
            <form method="GET" action="index.php" class="input-group mb-3">
                <input type="hidden" name="page" value="product-search">
                <input type="text" name="q" class="form-control"
                       placeholder="Tìm theo tên sản phẩm"
                       value="<?php echo $_GET['q'] ?? ''; ?>">
                <button class="btn btn-outline-secondary">Tìm</button>
                <?php if ($search): ?>
                    <a href="index.php?page=product-list" class="btn btn-outline-danger">Hủy</a>
                <?php endif; ?>
            </form>

            <?php if (!empty($products)): ?>
                <div class="table-responsive">
                    <table class="table table-bordered table-hover align-middle">
                        <thead class="table-light">
                            <tr>
                                <th width="5%">ID</th>
                                <th width="20%">Tên</th>
                                <th width="12%">Giá</th>
                                <th width="15%">Hình ảnh</th>
                                <th>Mô tả</th>
                                <th width="18%">Hành động</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($products as $product): ?>
                                <tr>
                                    <td><?php echo $product['id']; ?></td>
                                    <td><?php echo htmlspecialchars($product['name']); ?></td>
                                    <td><?php echo number_format($product['price'], 0, ',', '.'); ?> ₫</td>
                                    <td>
                                        <?php if (!empty($product['image'])): ?>
                                            <img src="<?php echo $product['image']; ?>" width="70">
                                        <?php else: ?>
                                            <span class="text-muted">—</span>
                                        <?php endif; ?>
                                    </td>
                                    <td>
                                        <?php echo htmlspecialchars(mb_strimwidth($product['description'], 0, 50, '...')); ?>
                                    </td>
                                    <td>
                                        <a href="index.php?page=product-detail&id=<?php echo $product['id']; ?>"
                                           class="btn btn-outline-secondary btn-sm">
                                            Xem
                                        </a>
                                        <a href="index.php?page=product-edit&id=<?php echo $product['id']; ?>"
                                           class="btn btn-outline-primary btn-sm">
                                            Sửa
                                        </a>
                                        <a href="index.php?page=product-delete&id=<?php echo $product['id']; ?>"
                                           class="btn btn-outline-danger btn-sm btn-delete">
                                            Xóa
                                        </a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>

                <p class="text-muted mt-2">
                    Tổng số sản phẩm: <strong><?php echo count($products); ?></strong>
                </p>
            <?php else: ?>
                <div class="alert alert-secondary text-center">
                    Không có sản phẩm nào
                </div>
                <div class="text-center">
                    <a href="index.php?page=product-add" class="btn btn-primary btn-sm">
                        Thêm sản phẩm
                    </a>
                </div>
            <?php endif; ?>

        </div>
    </div>
</div>

<?php include 'footer.php'; ?>
