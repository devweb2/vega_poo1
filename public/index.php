<?php

/**
     * ----------------------------------------------------------------------------
     *                             Bienvenue sur Vega
     * 
     * Ce fichier représente le contrôleur frontal
     * https://en.wikipedia.org/wiki/Front_controller
     * 
     * Ses rôles : 
     *      - Recevoir la requête du client
     *      - Amorcer l'application
     *      - Créer une nouvelle instance du noyau de l'application
     *      - Soumettre la requête du client au noyau pour traitement
     *      - Récupérer de la part du noyau, 
     *        la réponse correspondante à la requête
     *      - Envoyer cette réponse au serveur (Apache)
     *      - Afin que Apache l'envoie au navigateur dui client
     *      - Pour que le navigateur l'affiche en tant que page web
     *        en réponse au client 
     * ----------------------------------------------------------------------------
     */


    // Amorçage de l'application
require __DIR__ . "/../config/bootstrap.php";



// Création d'une nouvelle instance du noyau de l'application
$Kernel = new Kernel();
