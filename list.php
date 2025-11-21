<div class="liste-logements">
    <?php foreach ($logements as $l): ?>
        <div class="carte">
            <img src="<?php echo htmlspecialchars($l['picture_url']); ?>" alt="Image">
            <div class="info">
                <h2><?php echo htmlspecialchars($l['name']); ?></h2>
                <p><strong>Ville :</strong> <?php echo htmlspecialchars($l['neighbourhood_group_cleansed']); ?></p>
                <p><strong>Hôte :</strong> <?php echo htmlspecialchars($l['host_name']); ?></p>
                <p class="prix"><?php echo htmlspecialchars($l['price']); ?> €</p>
            </div>
        </div>
    <?php endforeach; ?>
</div>