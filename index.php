<?php
session_start();

// Gérer la déconnexion avant toute sortie
if (isset($_GET['logout'])) {
    session_destroy();
    header('Location: ' . $_SERVER['PHP_SELF']);
    exit;
}

$backgroundColorCustom = 'maClasse';
$number = 2;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice Algorithme PHP</title>
    <style>
        body {
            font-family: sans-serif;
        }

        h1 {
            color: orange;
            font-weight: bold;
        }

        h2 {
            color: brown;
            text-decoration: underline;
        }

        .titreEx11 {
            color: black;
            font-weight: 400;
        }
    </style>
</head>

<body>

    <h1>Exercice PHP</h1>
    <h2>Exercice 1: Boucle for</h2>
    <p>Affichage des 25 premiers entiers (de 0 à 24) :</p>

    <p><?php
    for ($i = 0; $i < 25; $i++) {
        echo $i . "<br>";
    }
    ?></p>

    <h2>Exercice 2: Boucle while</h2>
    <p>Affichage des 25 premiers entiers en ordre décroissant (de 25 à 1) :</p>

    <p><?php
    $i = 25;
    while ($i >= 1) {
        echo $i . "<br>";
        $i--;
    }
    ?></p>

    <h2>Exercice 3: Boucle for (motif triangulaire)</h2>
    <p>Affichage d'un motif triangulaire de 1 à 25 :</p>

    <p><?php
    for ($i = 1; $i <= 25; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo $j . " ";
        }
        echo "<br>";
    }
    ?></p>

    <h2>Exercice 4: Somme multiple</h2>
    <p>Calcul de la somme des 30 premiers entiers :</p>

    <p><?php
    $somme = array_sum(range(1, 30));
    echo "La somme des 30 premiers entiers est : " . $somme;
    ?></p>

    <h2>Exercice 5: Fonction pair</h2>
    <p>Fonction 'EstPair' qui vérifie si un nombre est pair :</p>

    <?php
    function EstPair($nombre): bool
    {
        return $nombre % 2 == 0;
    }
    ?>

    <p><?php
    $testNumbers = [4, 7, 12, 15, 20];
    foreach ($testNumbers as $num) {
        if (EstPair(nombre: $num)) {
            echo "$num est pair<br>";
        } else {
            echo "$num est impair<br>";
        }
    }
    ?></p>

    <h2>Exercice 6: Boucle pair</h2>
    <p>Affichage des nombres pairs de 1 à 20 (en utilisant la fonction EstPair) :</p>

    <p><?php
    for ($i = 1; $i <= 20; $i++) {
        if (EstPair(nombre: $i)) {
            echo $i . "<br>";
        }
    }
    ?></p>

    <h2>Exercice 7: Fonction Pythagore</h2>
    <p>Fonction qui calcule l'hypoténuse d'un triangle rectangle (a² = b² + c²) :</p>

    <?php
    function Hypotenuse($b, $c): float
    {
        return hypot($b, $c);
    }
    ?>

    <p><?php
    $b = 3;
    $c = 4;
    $a = Hypotenuse(b: $b, c: $c);
    echo "Pour un triangle avec b = $b et c = $c :<br>";
    echo "L'hypoténuse a = $a";

    ?></p>

    <h2>Exercice 8: Condition heure</h2>
    <p>Déterminer si c'est le matin, l'après-midi ou le soir :</p>

    <p><?php
    date_default_timezone_set(timezoneId: 'Europe/Paris');
    $heure = date(format: "H");
    $minutes = date(format: "i");

    echo "Il est $heure h $minutes.<br>";

    if ($heure >= 4 && $heure < 12) {
        echo "C'est le matin.";
    } elseif ($heure >= 12 && $heure < 18) {
        echo "C'est l'après-midi.";
    } else {
        echo "C'est le soir.";
    }
    ?></p>

    <h2>Exercice 9: Condition ternaire</h2>
    <p>Utilisation de la fonction EstPair avec une condition ternaire :</p>

    <p><?php
    $nombre = 7;
    $resultat = EstPair(nombre: $nombre) ? "pair" : "impair";
    echo "$nombre est $resultat<br>";

    $nombre = 12;
    $resultat = EstPair(nombre: $nombre) ? "pair" : "impair";
    echo "$nombre est $resultat";
    ?></p>

    <h2>Exercice 10: FooBar</h2>
    <p>Affichage des nombres de 1 à 100 avec FooBar :</p>

    <p><?php
    for ($i = 1; $i <= 100; $i++) {
        if ($i % 3 == 0 && $i % 5 == 0) {
            echo "foobar<br>";
        } elseif ($i % 3 == 0) {
            echo "foo<br>";
        } elseif ($i % 5 == 0) {
            echo "bar<br>";
        } else {
            echo $i . "<br>";
        }
    }
    ?></p>

    <h2>Exercice 11: Affichage de tableau</h2>
    <p>Utilisation d'un tableau associatif pour afficher une phrase :</p>

    <?php
    $identitePersonne = [
        'nom' => 'Croft',
        'prenom' => 'Lara',
        'metier' => 'Archéologue'
    ];
    ?>

    <h1 class="titreEx11">
        <?php echo "C'est un plaisir de vous voir " . $identitePersonne['prenom'] . " " . $identitePersonne['nom'] . "!(" . $identitePersonne['metier'] . ")"; ?>
    </h1>

    <h2>Exercice 12: Affichage spécifique de tableau</h2>
    <p>Affichage uniquement des valeurs possédant 6 lettres :</p>

    <?php
    $fighters = ['Zelda', 'Samus', 'Bowser', 'Peach', 'Lucina'];
    ?>

    <p><?php
    foreach ($fighters as $fighter) {
        if (strlen(string: $fighter) == 6) {
            echo $fighter . "<br>";
        }
    }
    ?></p>

    <h2>Exercice 13: Recherche de la plus petite valeur</h2>
    <p>Recherche de la plus petite valeur dans un tableau de 10 entiers :</p>

    <?php
    $entiers = [45, 12, 78, 3, 56, 89, 23, 67, 9, 34];
    ?>

    <p><?php
    echo "Tableau : " . implode(", ", $entiers) . "<br><br>";

    $plusPetit = min($entiers);
    echo "La plus petite valeur est : " . $plusPetit;
    ?></p>

    <h2>Exercice 14: Tri d'un tableau d'entiers</h2>
    <p>Tri par ordre croissant d'un tableau d'entiers :</p>

    <p><?php
    // Utilisation du tableau $entiers de l'exercice 13
    echo "Tableau initial : " . implode(", ", $entiers) . "<br>";

    sort($entiers);

    echo "Tableau trié : " . implode(", ", $entiers);
    ?></p>

    <h2>Exercice 15: Table des multiplications</h2>
    <p>Affichage de la table des multiplications de 1 à 9 :</p>

    <table border="1">
        <?php
        for ($i = 1; $i <= 9; $i++) {
            echo "<tr>";
            for ($j = 1; $j <= 9; $j++) {
                echo "<td>" . ($i * $j) . "</td>";
            }
            echo "</tr>";
        }
        ?>
    </table>

    <h2>Exercice 14: Liens avec requêtes GET</h2>
    <p>Faire 2 liens qui envoient à la même page mais avec une requête GET différente :</p>

    <p>
        <a href="?couleur=rouge">Lien Rouge</a> |
        <a href="?couleur=bleu">Lien Bleu</a>
    </p>

    <?php
    if (isset($_GET['couleur'])) {
        $couleur = htmlspecialchars($_GET['couleur']);
        echo "<p style='color: $couleur; font-weight: bold;'>Vous avez cliqué sur le lien $couleur !</p>";
    }
    ?>

    <h2>Exercice 15: Upload d'image</h2>

    <form method="POST" enctype="multipart/form-data">
        <input type="file" name="img" accept="image/*">
        <button type="submit" name="upload">Envoyer</button>
    </form>

    <?php
    if (isset($_POST['upload']) && $_FILES['img']['error'] === 0) {
        $f = $_FILES['img'];
        if (in_array($f['type'], ['image/jpeg', 'image/png', 'image/gif']) && $f['size'] <= 5000000) {
            if (!is_dir('uploads'))
                mkdir('uploads', 0777, true);
            $dest = 'uploads/' . uniqid('img_') . '.' . pathinfo($f['name'], PATHINFO_EXTENSION);
            if (move_uploaded_file($f['tmp_name'], $dest)) {
                echo "<p>✓ Image uploadée</p><img src='$dest' style='max-width:300px'>";
            }
        } else {
            echo "<p>✗ Fichier invalide (max 5MB, JPG/PNG/GIF)</p>";
        }
    }
    ?>

    <h2>Exercice 16: Authentification</h2>

    <?php
    $users = [
        'admin' => password_hash('admin123', PASSWORD_DEFAULT),
        'user' => password_hash('pass123', PASSWORD_DEFAULT)
    ];

    if (isset($_POST['login'])) {
        if (isset($users[$_POST['username']]) && password_verify($_POST['password'], $users[$_POST['username']])) {
            $_SESSION['user'] = $_POST['username'];
            echo "<p>✓ Connecté : {$_POST['username']}</p>";
        } else {
            echo "<p>✗ Identifiants incorrects</p>";
        }
    }
    ?>

    <?php if (isset($_SESSION['user'])): ?>
        <p>Connecté : <strong><?= $_SESSION['user'] ?></strong> | <a href="?logout=1">Déconnexion</a></p>
    <?php else: ?>
        <form method="POST">
            <input type="text" name="username" placeholder="Nom d'utilisateur" required>
            <input type="password" name="password" placeholder="Mot de passe" required>
            <button type="submit" name="login">Connexion</button>
        </form>
        <p><small>Test : admin/admin123 ou user/pass123</small></p>
    <?php endif; ?>

    <h2>Exercice 17: Base de données Darty</h2>

    <?php
    $pdo = new PDO("mysql:host=localhost;dbname=darty;charset=utf8mb4", "root", "");

    // Récupérer les machines avec marques
    $machines = $pdo->query("SELECT machine.*, marque.nom as marque_nom FROM machine LEFT JOIN marque ON machine.marque_id = marque.id")->fetchAll();
    ?>

    <form method="GET">
        <select name="machine_id">
            <option value="">-- Choisir une machine --</option>
            <?php foreach ($machines as $m): ?>
                <option value="<?= $m['id'] ?>" <?= (isset($_GET['machine_id']) && $_GET['machine_id'] == $m['id']) ? 'selected' : '' ?>>
                    <?= $m['marque_nom'] . ' - ' . $m['modele'] ?>
                </option>
            <?php endforeach; ?>
        </select>
        <button type="submit">OK</button>
    </form>

    <?php
    if (isset($_GET['machine_id']) && $_GET['machine_id'] != '') {
        $stmt = $pdo->prepare("SELECT machine.*, marque.nom as marque_nom FROM machine LEFT JOIN marque ON machine.marque_id = marque.id WHERE machine.id = ?");
        $stmt->execute([$_GET['machine_id']]);
        $m = $stmt->fetch();

        if ($m) {
            echo "<p><strong>Marque:</strong> {$m['marque_nom']}<br>";
            echo "<strong>Modèle:</strong> {$m['modele']}<br>";
            echo "<strong>Prix:</strong> {$m['prix']} €</p>";
        }
    }
    ?>

</body>

</html>