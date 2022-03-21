<?php

declare(strict_types=1);

require 'autoload.php';
use classes\Employe;
use classes\Directeur;

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


$q = "SELECT * FROM employe ORDER BY nom, prenom";
$q2 = "SELECT * FROM directeur ORDER BY nom, prenom";

$rs = $pdo->query($q);
$rs2 = $pdo->query($q2);


$rs->setFetchMode(PDO::FETCH_CLASS, Employe::class );
$employes = $rs->fetchAll();

$rs2->setFetchMode(PDO::FETCH_CLASS, Directeur::class );
$directeurs = $rs2->fetchAll();


?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>td employés</title>
</head>

<body>

<table class="tableau1" >
    <thead>
    <tr>
        <th>Nom</th>
        <th>Prénom</th>
        <th>Sexe</th>
        <th>Salaire (en €)</th>
        <th>Contrat</th>

    </tr>
    </thead>
    <tbody>
    <?php
    foreach ($employes as $employe) {

        ?>
        <tr>

            <td><?= $employe->nom ?></td>
            <td><?= $employe->prenom ?></td>
            <td><?= $employe->sexe ?></td>
            <td><?= $employe->salaire ?></td>
            <td><?= $employe->dateContrat ?></td>
            <td><?= $employe->service->nom ?></td>




        </tr>
    <?php } ?>
    </tbody>
</table>


<table class="tableau1" >
    <thead>
    <tr>
        <th>Nom</th>
        <th>Prénom</th>


    </tr>
    </thead>
    <tbody>
    <?php
    foreach ($directeurs as $directeur) {

        ?>
        <tr>

            <td><?= $directeur->nom ?></td>
            <td><?= $directeur->prenom ?></td>






        </tr>
    <?php } ?>
    </tbody>
</table>




</body>

</html>