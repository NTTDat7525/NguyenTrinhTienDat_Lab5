

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script>
document.querySelectorAll('.btn-delete').forEach(btn => {
    btn.addEventListener('click', function (e) {
        if (!confirm('Bạn có chắc chắn muốn xóa sản phẩm này không?')) {
            e.preventDefault();
        }
    });
});
</script>

</body>
</html>
