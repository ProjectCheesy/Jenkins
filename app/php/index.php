<?php
$host = 'mysql';
$db   = 'etudiants_db';
$user = 'user';
$pass = 'password';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
];

try {
    $pdo = new PDO($dsn, $user, $pass, $options);
    $stmt = $pdo->query('SELECT nom FROM etudiants');
    echo "<h1>Liste des étudiants :</h1><ul>";
    while ($row = $stmt->fetch()) {
        echo "<li>" . htmlspecialchars($row['nom']) . "</li>";
    }
    echo "</ul>";
} catch (\PDOException $e) {
    throw new \PDOException($e->getMessage(), (int)$e->getCode());
}

