<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags  -->
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
        

        <div class="col-sm-12 col-md-4">
            <ul>
                <li>La déclaration des variables n'est pas obligatoire au début de script, c'est une différnce avec JS ou C. On peut créer des variables n'importe où mais avant de les utiliser. Toutefois, utiliser une variable non créée ne provoquera pas d'erreur.</li>
                <li>Il n'est pas n"cessaire d'initialiser une variable et une variable n'aura pas de type</li>
                <li>Les noms de variables sont sensibles à al casse (maj et min) ; $mavar est différent de $mavar</li>
            </ul>
        </div>
        <!-- fin col  -->

        <div class="col-sm-12 col-md-4">
            <h3>Noms de variables</h3>
        </div>

        <div class="row">
            <div class="col-md-6">
                <h5>Noms de variables autorisés</h5>
                <ul>
                    <li>$mavar</li>
                    <li>$_mavar</li>
                    <li>$M1</li>
                    <li>$_12345</li>
                </ul>
            </div>
            <div class="col-md-6 alert alert-danger">
                <h5>Noms de variables interdits</h5>
                    <ul>
                        <li>$*mavar</li>
                        <li>$5mavar</li>
                        <li>$mavar2*</li>
                    </ul>
            </div>
        </div>
    </div>
    <!-- fin row  -->

    <section class="row">
        <div class="col-sm-12">
            <h3>Affectation de variables par valeur et par référence</h3>
            <p>Affecter c'est donner une valeur à une variable. A sa création vous ne donnez pas son type à une variable, c'est la valeur que vous lui affectez qui détermine ce type</p>
            <h5>Exemples</h5>
            <ul>
                <li><code>$mavar</code></li>
                <li><code></code></li>
                <li><code></code></li>
                <li><code></code></li>
                <li><code></code></li>
            </ul>
        </div>
        <!-- fin col  -->
    </section>
    <!-- fin row  -->

    <section class="row">
        <div class="col-sm-12">
            <h2>Les variales prédéfinies</h2>
            <p>PHP dispose d'un grand nombre de variales prédéfinies, qui contiennent des informations à la fois sur le serveur et sur toutes mes données qui peuvent transiter entre le poste client et le serveur, comme les valeurs saisies dans un formulaire, les coojies ou les sessions.</p>

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="row">Variable</th>
                        <th scope="row">Utilisation</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row"><code>$GLOBALS</code></th>
                        <td>Contient le nom et la valeur de toutes les variables globales du script. Les noms des variables sont les clés de ce tableau. $GLOBALS["mavar"] récupère la valeur de la variable $mavar en dehors de sa zone de visibilité (dans les fonctions, par exemple).</td>
                    </tr>

                    <tr>
                        <th scope="row"><code>$_COOKIE</code></th>
                        <td>Contient le nom et la valeur des cookies enregistrés sur le poste client. Les noms des cookies sont les clés de ce tableau.</td>
                    </tr>

                    <tr>
                        <th scope="row"><code>$_ENV</code></th>
                        <td>Contient le nom et la valeur des variables d'nevironnement qui sont changeantes selon les serveurs</td>
                    </tr>

                    <tr>
                        <th scope="row"><code>$_FILES</code></th>
                        <td>Contient le nom des fichiers téléchargés à partir du poste client.</td>
                    </tr>

                    <tr>
                        <th scope="row"><code>$_GET<code></th>
                        <td>Contient le nom et la valeur des données issues d’un formulaire envoyé par la méthode GET. Les noms des champs du formulaire sont les clés de ce tableau.</td>
                    </tr>

                    <tr>
                        <th scope="row"><code>$_POST</code></th>
                        <td>Contient le nom et la valeur des données issues d'un formulaire envoyé par la méthode POST. Les noms des champs du formualire sont les clés de cet array</td>
                    </tr>

                    <tr>
                        <th scope="row"><code>$_REQUEST</code></th>
                        <td>Contient l'ensemble des variables superglobales $_GET, $_POST, $_COOKIE, $_FILES
                        <br>Une variable superglobales signifie que cette variable est disponible partout dans le script, y compris au sein des fonctions !
                        </td>
                    </tr>

                    <tr>
                        <th>$_SERVER</th>
                        <td>Contient les informations liées au serveur web, tel le contenu des en-têtes HTTP ou le nom du script en cours d'exécution. Retenons les variables suivantes :</td>
                        <ul>
                            <li><code>$_SERVER["HTTP_ACCEPT_LANGUAGE"]</code> : contient le code de la langue du navigateur client ex. <?php echo $_SERVER["HTTP_ACCEPT_LANGUAGE"]; ?></li>
                            <li><code>$_SERVER["HTTP_ACCEPT_COOKIE"]</code> : contient le nom et la valeur des cookies ex. <?php echo $_SERVER ["HTTP_COOKIE"]; ?></li>
                            <li><code>$_SERVER["HTTP_HOST"]</code> : donne le nom de domaine ex. <?php echo $_SERVER ["HTTP_HOST"]; ?></li>
                            <li><code>$_SERVER["SERVER_ADDR"]</code> : donne l'adresse IP du serveur ex. <?php echo $_SERVER["SERVER_ADDR"] ?></li>
                            <li><code>$_SERVER["PHP_SELF"]</code> : contient le nom du script en cours, nous l'utiliserons dans les formulaires</li>
                            <li><code>$_SERVER["QUERY_STRING"]</code> : contient la chaîne de la requête utilisée </li>
                        </ul>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
    
</body>
</html>