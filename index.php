<?php

require_once 'config.php';
require_once 'function_adv.php';

$tri = $_GET['tri'] ?? 'name';
$ordre = 'ASC';
if (isset($_GET['ordre']) && in_array(strtoupper($_GET['ordre']), ['ASC', 'DESC'])) {
    $ordre = strtoupper($_GET['ordre']);
}

$colonne_tri = 'name'; 
if ($tri === 'prix') { $colonne_tri = 'price'; }
elseif ($tri === 'ville') { $colonne_tri = 'neighbourhood_group_cleansed'; }
elseif ($tri === 'proprietaire') { $colonne_tri = 'host_name'; }

$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$limite = 10; 
$debut = ($page - 1) * $limite;


$sql = "SELECT * FROM listings ORDER BY $colonne_tri $ordre LIMIT :limite OFFSET :debut";
$stmt = $dbh->prepare($sql);
$stmt->bindValue(':limite', $limite, PDO::PARAM_INT);
$stmt->bindValue(':debut', $debut, PDO::PARAM_INT);
$stmt->execute();
$logements = $stmt->fetchAll(PDO::FETCH_ASSOC);

$nombre_de_pages = compterPages($dbh, $limite);

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>FARBNB</title>
    <link rel="stylesheet" href="<?php echo dirname($_SERVER['REQUEST_URI']); ?>/style.css">
</head>
<body>

<div class="container">
    <h1>FARBNB</h1>
    <a href="ajout.php" class="btn-ajout">Ajouter une annonce</a>

    <?php include 'sort.php'; ?>

    <?php include 'list.php'; ?>

    <?php include 'page.php'; ?>
</div>

</body>
</html>