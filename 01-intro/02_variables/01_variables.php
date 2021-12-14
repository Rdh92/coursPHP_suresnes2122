<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header class="container-fluid bg-light">
        <h1 class="display-4">CoursPHP -Chapitre 02 - Variables</h1>
        <p class="lead">Les variables en PHP</p>
        <!-- Cette constante va varier, dans le fichier inclus elle donnera le chemin et le nom du fichier inclus  -->
        <?php echo <p> class="lead"> "<p>Exemple de PHP >>> Chemin absolu du fichier en cours : " . __FILE__ . "</p>"; ?>
    </header>

    <div class="container bg-white">

        <div class="row">
            <div class="col-md-6">
                <h2>Les Variables</h2>
                <p>Chaque variable possède un identifiant particulier, qui commence toujours par le caractère dollar ($) suivi du nom de la variable.Les règles de création des noms de variable sont les suivantes :</p>

                <ul>
                    <li>Le nom commence par un caractère alphabétique, pris dans les ensembles [a-z], [A-Z] ou par le tiret du bas </li>
                    <li>Les caractères suivants peuvent être les mêmes plus des chiffres.</li>
                    <li>La longueur du nom n’est pas limitée, mais il convient d’être raisonnable sous peine de confusion dans la saisie du code. Il est conseillé de créer des noms de variable le plus « parlant » possible. En relisant le code contenant la variable $nomclient, par exemple, vous comprenez davantage ce que vous manipulez que si vous aviez écrit $x ou $y.</li>
                </ul>
            </div>
        </div>
    </div>
    
</body>
</html>