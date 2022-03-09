<?php

    sessoins_start();

    $validUser = "admin";
    $validPass = "password";

    // La principale différence entre GET et POST, c'est comment on récupère des informations. Avec GET, on va récupérer des requêtes directement dans le corps du truc.
    var_dump($_POST); // Va chopper des informations dans l'url au travers d'une requête.

    if ( isset($_POST['username']) === $validUser && isset($_POST['password']) === $validPass){
        // Le triple égale regarde que les types mais aussi que les valeurs sont égales.
        echo 'Tu es connecté';
        $_SESSION['connect'] = true;
    } else {
        echo "Tu n'es pas connecté";
        $_SESSION['connect'] = false;
    }

    header('Location: /');

?> 