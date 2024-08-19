<?php
/**
 * @copyright Copyright 2003-2024 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: DrByte 2024 May 27 Modified in v2.1.0-alpha1 $
*/

$define = [
    'HEADING_TITLE' => 'Exécuteur de requêtes SQL',
    'HEADING_INFO' => 'L\'exécuteur de requêtes SQL vous permet d\'exécuter des requêtes SQL directement sur la base de données en collant un script dans la zone de texte ou en téléchargeant un fichier texte contenant le script. Il est destiné à l\'installation manuelle des champs pour les Plugins et à vos propres corrections/ajouts.',
    'HEADING_WARNING_INSTALLSCRIPTS' => 'NOTE : Les scripts Zen Cart® de mise à jour de la base de données NE DEVRAIENT PAS être exécutés depuis cette page.<br>À la place, veuillez uploader le nouveau répertoire <strong>zc_install</strong> et exécuter la mise à jour depuis ce répertoire pour une meilleure fiabilité.',
    'HEADING_WARNING' => 'ASSUREZ-VOUS DE FAIRE UNE SAUVEGARDE COMPLÈTE DE VOTRE BASE DE DONNÉES AVANT D\'EXÉCUTER DES SCRIPTS ICI.',
    'TEXT_QUERY_RESULTS' => 'Résultats de la requête : ',
    'TEXT_ENTER_QUERY_STRING' => 'Entrez la requête <br>à exécuter : &nbsp;&nbsp;<br><br>Soyez sûr(e) de <br>terminer avec un point-virgule ";"',
    'TEXT_QUERY_FILENAME' => 'Uploader le fichier-requête : ',
    'ERROR_NOTHING_TO_DO' => 'ERREUR : Rien à exécuter - aucune requête ou fichier-requête spécifié.',
    'SQLPATCH_HELP_TEXT' => 'L\'exécuteur de requêtes SQL vous permet d\'exécuter des requêtes SQL directement en collant un script dans la zone de texte ou en téléchargeant un fichier texte contenant le script.',
    'REASON_TABLE_ALREADY_EXISTS' => 'Impossible de créer la table %s car elle existe déjà',
    'REASON_TABLE_DOESNT_EXIST' => 'Impossible de supprimer la table %s car elle n\'existe pas.',
    'REASON_TABLE_NOT_FOUND' => 'Exécution impossible car la table %s n\'existe pas.',
    'REASON_CONFIG_KEY_ALREADY_EXISTS' => 'Impossible d\'insérer la clé de configuration "%s" car elle existe déjà',
    'REASON_COLUMN_ALREADY_EXISTS' => 'Impossible d\'ADD la colonne %s car elle existe déjà.',
    'REASON_COLUMN_DOESNT_EXIST_TO_DROP' => 'Impossible de DROP la colonne %s car elle n\'existe pas.',
    'REASON_COLUMN_DOESNT_EXIST_TO_CHANGE' => 'Impossible de CHANGE la colonne %s car elle n\'existe pas.',
    'REASON_PRODUCT_TYPE_LAYOUT_KEY_ALREADY_EXISTS' => 'Impossible d\'insérer la clé de configuration de prod-type-layout "%s" car elle existe déjà',
    'REASON_INDEX_DOESNT_EXIST_TO_DROP' => 'Impossible de supprimer l\'index %1$s sur la table %2$s car il n\'existe pas.',
    'REASON_PRIMARY_KEY_DOESNT_EXIST_TO_DROP' => 'Impossible de supprimer la clé primaire sur la table %s car elle n\'existe pas.',
    'REASON_INDEX_ALREADY_EXISTS' => 'Impossible d\'ajouter l\'index %1$s à la table %2$s car il existe déjà.',
    'REASON_PRIMARY_KEY_ALREADY_EXISTS' => 'Impossible d\'ajouter la clé primaire à la table %s car une clé primaire existe déjà.',
    'REASON_NO_PRIVILEGES' => 'Utilisateur' . DB_SERVER_USERNAME . '@' . DB_SERVER . ' n\'a pas les privilèges %s sur la base de données ' . DB_DATABASE . '.',
    'ERROR_RENAME_TABLE' => 'La commande RENAME TABLE n\'est pas prise en charge par l\'outil SQLpatch. Veuillez utiliser phpMyAdmin à la place.',
    'ERROR_LINE_INCOMPLETE' => 'Requête incomplète : point-virgule de fermeture manquant.',
    'TEXT_EXECUTE_SUCCESS' => 'Succès : %u instruction(s) traitée.',
    'ERROR_EXECUTE_FAILED' => 'La requête a échoué : %u instruction(s) traitée.',
    'ERROR_EXECUTE_IGNORED' => 'Remarque : %u instructions ignorées. Voir la table de base de données "upgrade_exceptions" pour plus de détails.',
    'TEXT_UPLOADQUERY_SUCCESS' => 'Succès : %u instruction(s) traitée par téléchargement de fichier',
    'ERROR_UPLOADQUERY_FAILED' => 'La requête a échoué : %u instruction(s) traitée par téléchargement de fichier',
    'ERROR_UPLOADQUERY_IGNORED' => 'Remarque : %u instructions ignorées via le téléchargement de fichier. Voir le tableau de base de données "upgrade_exceptions" pour plus de détails.',
];

return $define;
