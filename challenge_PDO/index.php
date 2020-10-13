<?php
require_once 'connec.php';

$pdo = new \PDO(DSN, USER, PASS);

// RECUP ET CLEAN DONNEES

if ($_SERVER['REQUEST_METHOD'] === 'POST') :
    $firstname = trim($_POST['firstname']);
    $lastname = trim($_POST['lastname']);

    $errors = [];

    if (empty($firstname)) {
        $errors['firstnameEmpty'] = 'Merci de remplir le champ "Prénom"';
    } elseif (strlen($firstname) > 45) {
        $errors['firstnameTooLong'] = 'Votre prénom est trop long';
    }

    if (empty($lastname)) {
        $errors['lastnameEmpty'] = 'Merci de remplir le champ "Nom"';
    } elseif (strlen($firstname) > 45) {
        $errors['lastnameTooLong'] = 'Votre nom est trop long';
    }

    if (!empty($errors)) {
        ?> <ul> <?php
        foreach ($errors as $error) {
            ?> <li> <?= $error ?> </li> <?php
        }
        ?> </ul> <?php

    } else {
        $query = "INSERT INTO friend (firstname, lastname) VALUES (:firstname, :lastname)";
        $statement = $pdo->prepare($query);
        $statement->bindValue(':firstname', $firstname, \PDO::PARAM_STR);
        $statement->bindValue(':lastname', $lastname, \PDO::PARAM_STR);
        $statement->execute();
        header('Location: index.php');

    }

endif;
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PDO quest</title>
</head>
<body>

<?php
// GENERATION LISTE & FORMULAIRE

$query = "SELECT firstname,lastname FROM friend";
$statement = $pdo->query($query);
$friends = $statement->fetchAll(PDO::FETCH_ASSOC);
?>
<ul>
<?php

foreach($friends as $friend) {
    ?> <li>
    <?= $friend['firstname'] . ' ' . $friend['lastname'];?>
    </li> <?php
}
?>

</ul>

<form action="" method="post">
    <div>
    <label for="firstname"> Prénom :</label>
    <input type="text" id="firstname" name="firstname" required>
    </div>
    <div>
    <label for="lastname"> Nom :</label>
    <input type="text" id="lastname" name="lastname" required>
    </div>
    <button type="submit"> Envoyer </button>
</form>

</body>
</html>

