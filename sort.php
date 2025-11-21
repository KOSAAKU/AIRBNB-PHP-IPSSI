<form action="index.php" method="GET" class="tri-form">
    <label>Trier par :</label>
    <input type="hidden" name="page" value="<?php echo $page; ?>">
    
    <select name="tri" onchange="this.form.submit()">
        <option value="name" <?php if($tri == 'name') echo 'selected'; ?>>Nom</option>
        <option value="ville" <?php if($tri == 'ville') echo 'selected'; ?>>Ville</option>
        <option value="prix" <?php if($tri == 'prix') echo 'selected'; ?>>Prix</option>
        <option value="proprietaire" <?php if($tri == 'proprietaire') echo 'selected'; ?>>Propriétaire</option>
    </select>
</form>

<div class="ordre-links">
    <span>Ordre :</span>
    <a href="?tri=<?php echo htmlspecialchars($tri); ?>&page=<?php echo $page; ?>&ordre=ASC" <?php if($ordre == 'ASC') echo 'class="active"'; ?>>Croissant</a> |
    <a href="?tri=<?php echo htmlspecialchars($tri); ?>&page=<?php echo $page; ?>&ordre=DESC" <?php if($ordre == 'DESC') echo 'class="active"'; ?>>Décroissant</a>
</div>