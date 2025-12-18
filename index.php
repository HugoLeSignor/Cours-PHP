<?php
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

</body>

</html>