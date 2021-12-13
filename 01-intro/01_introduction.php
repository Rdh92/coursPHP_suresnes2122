<!doctype html>
<html lang="fr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>CoursPHP - Suresnes 2021/2022</title>
    <!-- mes styles -->
    <link rel="stylesheet" href="../css/style.css">
    
  </head>
  <body>
    <header class="container-fluid bg-light">
      <h1 class="display-4">CoursPHP - Introduction</h1>
      <p class="lead">PHP : Php Hypertext Preprocessor</p>
    </header>

    <div class="container bg-white">
        <section class="row m-2 p-2">
          <div class="col-md-4 p-1 border border-primary">
            <h4>1/ Réaliser un site dynamique</h4>
            <p>Pour réaliser une site dynamique nous allons aborder les points suivants : </p>
            <ul>
              <li>La syntaxe et les caractéristiques du langage PHP (v7)</li>
              <li>Les notions essentielles du langage SQL permettant la gestion d'une BDD et la réalisation des requêtes de base</li>
              <li>... et les moyens d'y accéder à l'aide de fonctions spécialisées de PHP (ou d'objet)</li>
              <li>
                <!-- mon 1er passage PHP et un "echo" -->
                <?php echo "<strong>Mon 1er texte fait en PHP</strong>"; ?>
              </li>
            </ul>
          </div>
          <!-- fin col -->

          
          <div class="col-md-4 p-1 border border-warning">
            <h4>2/ Qu'est-ce que PHP </h4>
            <p>PHP permet de créer des pages interactives; une page interactive permet à un visiteur de saisir des données personnelles qui sont ensuite transmises au serveur, où elles peuvent rester stockées dans une BDD pour être diffusées vers d'autres utilisateurs. Un utilisateur peut par exemple s'enregistrer et retrouver une page adaptée à ses besoins lors d'une visite ultérieure. Il peut aussi envoyer des emails et des fichiers sans avoir à passer par son logiciel de messagerie. En associant toutes ces caractéristiques, il est possible de créer aussi bien des sites de diffusuin et de collecte d'informations que des sites e-commerce, de rencontres ou des blogs</p>
          </div>
          <!-- fin col -->

          <div class="col-md-4 p-1 border border-danger">
          <h4>3/ Rappel sur les BDD </h4>
          <p>Pour contenir la masse d'informations collectées, PHP s'appuie généralement sur une BDD, le plus souvent MySQL mais aussi SQLite et sur des serveurs Apache. PHP, MySQL et Apache forment le trio ultra dominant sur les serveurs Internet. Quand ce trio est associé à un serveur Linux on parle de LAMP. PHP est utilisé par les 3/4 des sites de la planète</p>
          <p>Pour utiliser PHP sur un PC on utilisera XAMPP mais aussi Laragon, sur un sur Mac on privilégiera MAMP</p>
          </div>
          <!-- fin col -->
        </section>
        <!-- fin row  -->

        <section class="row">
          <div class="col-md-4 p-1 border border-danger">
            <p>Avec le code suivant, crit dans un fichier nommé 02_infos.php placé sur le serveur d'évaluation on obtient toutes les infos sur le php exécuté dans ce srveur</p>
            <code class="alert alert-success">
              <?php <br>
                phpinfo(); // ceci est un commentaire<br>
              ?><br>
            </code>
            <a class="btn btn-secondary btn-sm mb-2" href="02_infos.php">PHP infos</a>
          </div>
          <!-- fin col  -->

          <div class="col-md-4 p-1 border border-danger">
            <?php echo "date(D/M/Y - H:m:s"); ?>
          </div>
          <div class="col-md-4 p-1 border border-danger">

          </div>
        </section>
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    
  </body>
</html>

