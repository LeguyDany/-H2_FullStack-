<?php
    // Permet de se déconnecter. 
    session_start();
    sessions_destroy();
    header('Location: /');
?>