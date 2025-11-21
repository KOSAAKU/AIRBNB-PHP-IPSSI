<?php


// Remplace 'root' et '' par tes identifiants (souvent 'root', 'root' sur MAMP ou 'root', '' sur WAMP/XAMPP)
$host = 'localhost';
$dbname = 'airbnb';
$user = 'root';
$pass = ''; 

try {
    $dbh = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $pass);

    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erreur de connexion : " . $e->getMessage());
}
?>