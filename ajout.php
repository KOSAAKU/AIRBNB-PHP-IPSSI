<?php
require_once 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $titre = $_POST['titre'];
    $ville = $_POST['ville'];
    $prix = $_POST['prix'];
    $image = $_POST['image'];  
    $proprietaire = $_POST['proprietaire'];
    $sql = "INSERT INTO listings (name, neighbourhood_group_cleansed, price, picture_url, host_name) 
            VALUES (:titre, :ville, :prix, :image, :proprietaire)";
    
    $stmt = $dbh->prepare($sql);
    $stmt->execute([
        ':titre' => $titre,
        ':ville' => $ville,
        ':prix' => $prix,
        ':image' => $image,
        ':proprietaire' => $proprietaire
    ]);
    header('Location: index.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Ajouter une location</title>
    <link rel="stylesheet" href="<?php echo dirname($_SERVER['REQUEST_URI']); ?>/style.css">
</head>
<body>

<div class="container">
    <h1>Ajouter une nouvelle annonce</h1>
    
    <form method="POST" class="form-ajout">
        
        <div class="form-group">
            <label>Titre de l'annonce :</label>
            <input type="text" name="titre" placeholder="Ex: Loft vue Tour Eiffel" required>
        </div>

        <div class="form-group">
            <label>Ville :</label>
            <input type="text" name="ville" placeholder="Ex: Paris" required>
        </div>

        <div class="form-group">
            <label>Nom du propriétaire :</label>
            <input type="text" name="proprietaire" placeholder="Ex: Jean Dupont" required>
        </div>

        <div class="form-group">
            <label>Prix par nuit (€) :</label>
            <input type="number" name="prix" placeholder="Ex: 150" required>
        </div>

        <div class="form-group">
            <label>URL de l'image :</label>
            <input type="url" name="image" placeholder="https://exemple.com/photo.jpg" required>
        </div>

        <button type="submit" class="btn-save">Enregistrer l'annonce</button>
    </form>

    <br>
    <a href="index.php">← Retour à l'accueil</a>
</div>

</body>
</html>