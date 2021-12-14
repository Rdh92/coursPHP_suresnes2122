<footer class="bg-warning text-white text-center p-4">
    <div>
    <?php echo <p> class="lead"> "<p>Exemple de PHP >>> Chemin absolu du fichier en cours : " . __FILE__ . "</p>"; ?>
        <p>
        <?php
            setlocale(LC_ALL, 'fr_FR');
            echo strftime("%A %e %B %Y");
            echo ' - ';
            date_default_timezone_set("Europe/Paris");
            echo date('H:i:s');
        ?>
        </p>
    </div>
</footer>