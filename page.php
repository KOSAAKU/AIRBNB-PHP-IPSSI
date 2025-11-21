<div class="pagination">
    <?php if ($page > 1): ?>
        <a href="?page=<?php echo $page - 1; ?>&tri=<?php echo $tri; ?>">Précédent</a>
    <?php endif; ?>

    <?php 
    $max_pages_a_afficher = min($nombre_de_pages, 20); 
    for ($i = 1; $i <= $max_pages_a_afficher; $i++): 
    ?>
        <a href="?page=<?php echo $i; ?>&tri=<?php echo $tri; ?>" 
           class="<?php echo ($i == $page) ? 'active' : ''; ?>">
           <?php echo $i; ?>
        </a>
    <?php endfor; ?>

    <?php if ($page < $nombre_de_pages): ?>
        <a href="?page=<?php echo $page + 1; ?>&tri=<?php echo $tri; ?>">Suivant</a>
    <?php endif; ?>
</div>