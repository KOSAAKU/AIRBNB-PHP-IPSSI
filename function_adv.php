<?php

function compterPages($dbh, $limite) {

    $sql = "SELECT COUNT(*) FROM listings";
    $stmt = $dbh->query($sql);
    $total = $stmt->fetchColumn();
    
    return ceil($total / $limite);
}
?>