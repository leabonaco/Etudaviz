<?php
$host = 'mysql-etudaviztest.alwaysdata.net';      // serveur MySQL
$port = '3306';           // port par défaut MySQL
$dbname = 'etudaviztest_base';// nom de ta base MySQL
$user = '434946';           // utilisateur MySQL
$password = 'mycy234';    // mot de passe MySQL

try {
    $pdo = new PDO("mysql:host=$host;port=$port;dbname=$dbname;charset=utf8", $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erreur de connexion à la base : " . $e->getMessage());
}
?>
