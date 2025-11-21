<div class="pagination">
    
    <?php if ($page > 1): ?>
        <a href="?page=<?php echo $page - 1; ?>&tri=<?php echo $tri; ?>&ordre=<?php echo $ordre; ?>">Page précédente</a>
    <?php endif; ?>

    <?php for ($i = 1; $i <= $nombre_de_pages; $i++): ?>
        <a href="?page=<?php echo $i; ?>&tri=<?php echo $tri; ?>&ordre=<?php echo $ordre; ?>" 
           class="<?php echo ($i == $page) ? 'active' : ''; ?>"> <?php echo $i; ?>
        </a>
    <?php endfor; ?>

    <?php if ($page < $nombre_de_pages): ?>
        <a href="?page=<?php echo $page + 1; ?>&tri=<?php echo $tri; ?>&ordre=<?php echo $ordre; ?>">Page suivante</a>
    <?php endif; ?>

</div>