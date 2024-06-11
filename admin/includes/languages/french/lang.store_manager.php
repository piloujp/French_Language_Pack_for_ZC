<?php
/**
 * @copyright Copyright 2003-2022 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: Scott C Wilson 2022 Jan 11 New in v1.5.8-alpha $
*/

$define = [
    'HEADING_TITLE' => 'Gestion de la Boutique',
    'SUCCESS_PRODUCT_UPDATE_SORT_ALL' => 'Mise à jour <strong>réussie</strong> du classement des attributs',
    'SUCCESS_PRODUCT_UPDATE_PRODUCTS_PRICE_SORTER' => 'Mise à jour <strong>réussie</strong> des valeurs de classement du prix des produits',
    'SUCCESS_PRODUCT_UPDATE_PRODUCTS_VIEWED' => 'Réinitialisation à zéro <strong>réussie</strong> des produits consultés',
    'SUCCESS_PRODUCT_UPDATE_PRODUCTS_ORDERED' => 'Réinitialisation à zéro <strong>réussie</strong> des produits commandés',
    'SUCCESS_UPDATE_ALL_MASTER_CATEGORIES_ID' => 'Réinitialisation <strong>réussie</strong> de toutes les catégories principales pour les produits liés',
    'SUCCESS_UPDATE_COUNTER' => 'Mise à jour <strong>réussie</strong> du compteur sur : ',
    'ERROR_CONFIGURATION_KEY_NOT_FOUND' => '<strong>ERREUR :</strong> Aucune clef de configuration correspondante n\'a été trouvée.',
    'ERROR_CONFIGURATION_KEY_NOT_ENTERED' => '<strong>ERREUR :</strong> Aucune saisie de clef de configuration ou de texte pour la recherche ... Recherche terminée',
    'TEXT_INFO_COUNTER_UPDATE' => '<strong>Actualisation du compteur de hits</strong><br>à une nouvelle valeur : ',
    'TEXT_INFO_PRODUCTS_PRICE_SORTER_UPDATE' => '<strong>Actualiser le champ trieur par prix de TOUS les produits</strong><br>pour pouvoir classer selon le prix affiché.',
    'TEXT_INFO_PRODUCTS_VIEWED_UPDATE' => '<strong>Réinitialiser TOUS les produits consultés</strong><br>Remettre les compteurs de consultations de tous les produits à 0.',
    'TEXT_INFO_PRODUCTS_ORDERED_UPDATE' => '<strong>Réinitialiser TOUS les produits commandés</strong><br>Remettre les compteurs de commandes de tous les produits à 0.',
    'TEXT_INFO_MASTER_CATEGORIES_ID_UPDATE' => '<strong>Réinitialiser l\'ID de catégorie principale de TOUS les produits</strong><br>Pour l\'utilisation avec les produits liés et les prix fixes.',
    'TEXT_NEW_ORDERS_ID' => 'Nouvel ID de commande',
    'TEXT_INFO_SET_NEXT_ORDER_NUMBER' => '<strong>Positionner le numéro de commande suivant</strong><br>NOTE : Vous ne pouvez pas positionner le numéro de commande à une valeur inférieure à toute commande déjà existante dans la base de données.',
    'TEXT_MSG_NEXT_ORDER' => 'Le numéro de commande suivant a été positionné à %s',
    'TEXT_MSG_NEXT_ORDER_MAX' => 'À cause des commandes existantes, le numéro de commande suivant est actuellement : %s',
    'TEXT_MSG_NEXT_ORDER_TOO_LARGE' => 'En raison des limitations de la base de données, il vous est impossible de positionner le numéro de commande suivant plus haut que 2000000000. Veuillez choisir une valeur plus petite.',
    'TEXT_INFO_DATABASE_OPTIMIZE' => '<strong>Optimiser la base de données</strong> pour récupérer l\'espace disque gaspillé par les enregistrements effacés. <br>Exécution facultative une fois par semaine ou par mois sur une base de données en activité<br>(préférable de le faire pendant des périodes inoccupées).',
    'TEXT_INFO_OPTIMIZING_DATABASE_TABLES' => 'Optimisation des tables de la base de données en cours. Cela pourra prendre plusieurs minutes. Veuillez patienter. Le menu précédent réapparaîtra à la fin ... ',
    'SUCCESS_DB_OPTIMIZE' => 'Optimisation de base de données - Tables traitées : ',
    'TEXT_INFO_PURGE_DEBUG_LOG_FILES' => '<strong>Nettoyer les fichiers journaux de débogage</strong><br><strong>ATTENTION : </strong>Zen Cart enregistre les messages d\'erreurs de PHP à des fins de débogage, et beaucoup de modules de paiement peuvent journaliser des données de débogage pour diagnostiquer des problèmes de communication.<br>Cliquer sur l\'option de purge va supprimer *définitivement* *TOUS* les journaux de débogage associés à des erreurs PHP et aux modules PayPal, Authorize.net, et Linkpoint/FirstData.',
    'SUCCESS_CLEAN_DEBUG_FILES' => 'Fichiers journaux de débogage purgés',
];

return $define;
