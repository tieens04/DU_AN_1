
<div class="pagination">
    <?php if ($current_page > 1): ?>
        <a href="index.php?act=sanpham&per_page=<?= $item_per_page ?>&page=<?= ($current_page - 1) ?>" class="pagination-link"><i class="fa fa-angle-left"></i></a>
    <?php endif; ?>

    <?php for ($num = 1; $num <= $totalPages; $num++): ?>
        <a href="index.php?act=sanpham&per_page=<?= $item_per_page ?>&page=<?= $num ?>" class="page-item <?= ($num == $current_page) ? 'active' : '' ?>"><?= $num ?></a>
    <?php endfor; ?>

    <?php if ($current_page < $totalPages): ?>
        <a href="index.php?act=sanpham&per_page=<?= $item_per_page ?>&page=<?= ($current_page + 1) ?>" class="pagination-link"><i class="fa fa-angle-right"></i></a>
    <?php endif; ?>
</div>

