<?php
/**
 *  zca_bootstrap_colors.php
 *
 * @copyright Copyright 2003-2018 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version Author: rbarbour (ZCAdditions.com)  7/01/2018 06:00 AM Modified ZCA-BS-COLORS
 *
 * BOOTSTRAP v3.6.2
 */
define('HEADING_TITLE','Couleurs de ZCA Bootstrap');

define('TEXT_INFORMATION', 'Toutes les couleurs ajoutées pour la version 3.5.2 du modèle et les versions ultérieures sont initialisées lors d\'une mise à niveau vers « non défini », permettant à un magasin de définir ces valeurs pour qu\'elles correspondent à sa palette de couleurs avant utilisation. <b>Seules</b> les couleurs indiquant que « non défini » est une valeur acceptable doivent utiliser cette valeur; sinon, le script de la vitrine qui crée la coloration CSS produira un CSS non valide !<br><br><b>Remarque :</b> la colonne <em>Valeur</em> sera vide si la valeur actuellement configurée est la valeur par défaut.');

define('TEXT_INFO_EDIT_INTRO', 'Veuillez apporter les modifications nécessaires');
define('TEXT_INFO_DATE_ADDED', 'Date d\'ajout :');
define('TEXT_INFO_LAST_MODIFIED', 'Dernière modification :');

define('TABLE_HEADING_CONFIGURATION_TITLE', 'Titre');
define('TABLE_HEADING_CONFIGURATION_DEFAULT', 'Par défaut');
define('TABLE_HEADING_CONFIGURATION_VALUE', 'Valeur');
define('TABLE_HEADING_NOT_SET_OK', '"non défini" OK ?');
define('TABLE_HEADING_ACTION', 'Action');

// BOF SQL file
define('BUTTON_DOWNLOAD_SQL', 'Télécharger SQL');
// EOF SQL file

// BOF CSV file
define('BUTTON_DOWNLOAD_CSV', 'Télécharger CSV');
define('BUTTON_UPLOAD_CSV', 'Télécharger CSV');
define('TEXT_QUERY_FILENAME','Télécharger le fichier :');

define('CSV_HEADER_KEY', 'Clé');
define('CSV_HEADER_VALUE', 'Valeur');
define('CSV_HEADER_TITLE', 'Titre');
define('CSV_HEADER_DEFAULT', 'Par défaut');

define('UPLOAD_FILE_PROCESSED_ALL_OK', "Fichier traité; toutes les %s mises à jour ont réussi.");
define('UPLOAD_FILE_PROCESSED_SOME_OK', "Fichier traité; %s sur %s mises à jour réussies.");

define('UPLOAD_SUCCESS', 'Succès : ');
define('UPLOAD_WARNING', 'Avertissement : ');
define('UPLOAD_FAILED', 'Échoué : ');
define('MISSING_CONFIGURATION', 'Configuration des couleurs ZCA Bootstrap non trouvée.');
define('NO_CSV_FILE', 'Fichier CSV non spécifié ou vide.');
define('CSV_FILE_MALFORMED', 'Fichier CSV mal formé.');
// EOF CSV file
