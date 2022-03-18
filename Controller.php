<?php

declare(strict_types=1);

require_once 'Controller.php';

$dbName = 'entreprise';
$host = 'localhost';
$port = 3306;
$charset = 'utf8mb4';
$dsn = "mysql:dbname={$dbName};
host={$host};
port={$port};
charset={$charset}";

const OPTIONS = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_STRINGIFY_FETCHES => false,
    PDO::ATTR_EMULATE_PREPARES => false
];
$log = 'root';
$pwd = '';





try {
    $pdo = new PDO($dsn, $log, $pwd, OPTIONS);
} catch (PDOException $e) {
    exit("Connexion DB impossible !");
}




// $q = "DELETE FROM employe WHERE idEmploye = 6";
// $pdo->exec($q);

$q = "SELECT * FROM employe e";
$rs = $pdo->query($q);


$rs->setFetchMode(PDO::FETCH_OBJ);
$employes = $rs->fetchAll();

foreach ($employes as $employe) {
}

var_dump($employes);