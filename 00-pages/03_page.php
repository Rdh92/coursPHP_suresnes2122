<?php
    echo "Page avec des constantes"
//vérifier cela sur la casse TRUE et FALSE VOIR PHP 8 ?
    define("PI", 301415926535);

    echo "le nombre PI vaut " . PI . "<br>";

    if (defined("PI")) echo "la constante PI est bien définie";

    echo"<hr>";


    // déclaration d'une constante qui contient une url
    define("validator" "https://validator.w3.org/").
    //vérification de existence de la constante dans un if SI c'est vrai fait l'echo

    if(defined "validator") echo "la constante validator est bien définie";
    echo "<hr>"
    echo "l'url du validator du w3c est : " .validator "<br>".

    //utilisation de la constante  validator dans un extrait HTML
    echo "Validez votre HTML CSS sur le site du <a href=\"" .validator. "\"
    target\"_blank\">