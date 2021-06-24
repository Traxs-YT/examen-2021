<?php
require_once('data/liste_transactions.php');
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Examen ADB - Liste des transactions </title>
</head>
<body>
<h1>Liste des transactions</h1>

<ul>
    <li>
        <?php echo 'Date' . $transactions;
        ?>
    </li>
</ul>
<a href="../formulaire.php">
    Nouvelle transaction
</a>
</body>
</html>