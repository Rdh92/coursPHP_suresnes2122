<!DOCTYPE html>
<?php
    //déclaration d'une variable en PHP avec le symbole $ suvi du nom de la variable
    $variable1 = "cours PHP 7";
?>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php echo "<title>Document</title>"; ?>
</head>
<body>
    <?php
        //affichage du contenu de la variable
        echo "<h1> Suresnes 2021 - $variable1 </h1>";
    ?>
    <hr>
    <p>Utilisation des variables en PHP et de passages PHP dans mon fichier HTML ; on travaille aussi avec :</p>
        <?php
            $variable2 = "MySQL";
            echo $variable2;
            echo "</p><hr>";
            // le caractère de concaténation en PHP est le "."
            echo "<p>La variable2 est detype ! ".gettype($variable2) .".</p>";

            $variable2 = "Minute papillon !";
            echo "<p> $variable2 </p>";
            $variable2 = "coucou !";
        ?>
        <hr>
        <?= //passage PHP plus court
            "<blockquote> $variable2, $variable2 on entend le $variable2</blockquote>"; // qui dispense d'écrire "echo"
        ?>
        <hr>
        <h2>print_r()</h2>
        <h3>La liste des variables "globales"</h3>
        <p>print_r() affiche toutes les variables à notre disposition sous forme d'un tableau, un "array"</p>
        <?php print_r($GLOBALS); ?>

        <hr>
        <p>Le contenu de la variable $_COOKIE</p>
        <?php print_r($_COOKIE); ?>

        <hr>
        <p>Le contenu de la variable $_ENV</p>
        <?php print_r($_ENV); ?>

        <hr>
        <p></p>
        <?php print_r($_SERVER ['SERVER_SOFTWARE']); ?>
    
</body>
</html>