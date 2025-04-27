<?php
// -----
// Part of the DataBase Import/Export (aka DbIo) plugin, created by Cindy Merkin (cindy@vinosdefrutastropicales.com)
// Copyright (c) 2016-2025, Vinos de Frutas Tropicales.
//
// Last updated: DbIo v2.0.2
//
define('HEADING_TITLE', 'Gestionnaire d\'E/S de base de données (DbIo)');

define('TEXT_ALL_ORDERS_STATUS_VALUES', 'Toutes les valeurs');

define('TEXT_IS_EXPORT_ONLY', 'Le gestionnaire DbIo « %s » ne prend pas en charge une action d’importation.');

define('TEXT_SCOPE_PUBLIC', 'Public');
define('TEXT_SCOPE_PRIVATE', 'Privé');

define('TEXT_FORMAT_CONFIG_INFO', 'Cette section présente les paramètres actuels qui affectent le fonctionnement de DbIo Manager. Les valeurs des <em>Paramètres DbIo</em> peuvent être modifiées en cliquant <a href="%s">ici</a>.');
define('TEXT_DBIO_SETTINGS', 'Paramètres DbIo');
define('TEXT_CSV_DELIMITER', 'CSV : délimiteur');
define('TEXT_CSV_ENCLOSURE', 'CSV : Encadrement');
define('TEXT_CSV_ESCAPE', 'CSV : caractère d\'échappement');
define('TEXT_CSV_ENCODING', 'CSV : Encodage');
define('TEXT_CSV_DATE_FORMAT', 'CSV : format de date d\'importation');
define('TEXT_FILE_DEFAULT_SORT_ORDER', 'Ordre de tri des fichiers par défaut');
define('TEXT_ALLOW_DUPLICATE_MODELS', 'Produits : autoriser les modèles en double');
define('TEXT_AUTO_CREATE_CATEGORIES', 'Produits : créer automatiquement des catégories');
define('TEXT_INSERT_REQUIRES_COMMAND', 'Produits : la création d\'un produit nécessite une commande');
define('TEXT_MAX_EXECUTION', 'Temps d\'exécution maximal');
define('TEXT_SPLIT_RECORD_COUNT', 'Nombre d\'enregistrements fractionnés');
define('TEXT_DEBUG_ENABLED', 'Débogage activé');
define('TEXT_DATE_FORMAT', 'Format de date d\'affichage/journal');
define('TEXT_DBIO_SYSTEM_SETTINGS', 'Paramètres système');
define('TEXT_MAX_UPLOAD_FILE_SIZE', 'Taille maximale du fichier à télécharger');
define('TEXT_CHARSET', 'Codage interne des caractères');
define('TEXT_DB_CHARSET', 'Codage des caractères de la base de données');
define('TEXT_DEFAULT_LANGUAGE', 'Langue par défaut');
define('TEXT_CHOOSE_HANDLER', 'Choisissez le gestionnaire à utiliser :');

define('LEGEND_EXPORT', 'Exporter');
define('LEGEND_CONFIGURATION', 'Configuration');
define('LEGEND_FILE_ACTIONS', 'Actions sur les fichiers');
define('LEGEND_FILE_UPLOADS', 'Téléchargements de fichiers');

define('TEXT_INSTRUCTIONS', 'Le <b><i>gestionnaire DbIo</i></b> fournit des gestionnaires qui permettent d\'exporter et, sous certaines conditions, d\'importer des informations de base de données, via un fichier CSV (valeurs séparées par des virgules). Choisissez le gestionnaire à utiliser dans la liste déroulante ci-dessous et ses fonctionnalités, telles que les filtres et/ou les options de personnalisation des modèles, s\'afficheront. Pour plus d\'informations, consultez les <a href="https://github.com/lat9/dbio/wiki" target="_blank" rel="noreferrer noopener">articles wiki</a> du plugin.');

define('DBIO_BUTTON_DELETE', 'Supprimer');
define('DBIO_BUTTON_DELETE_TITLE', 'Cliquez ici pour supprimer le(s) fichier(s) actuellement sélectionné(s) du serveur.');
define('DBIO_BUTTON_GO', 'Appliquer');
define('DBIO_BUTTON_GO_TITLE', 'Cliquez ici pour effectuer l\'action choisie pour le fichier choisi ci-dessous.');
define('TEXT_AUTO_DOWNLOAD', 'Télécharger l\'exportation immédiatement après la génération');
define('BUTTON_EXPORT', 'Exporter');
define('BUTTON_EXPORT_TITLE', 'Cliquez ici pour exporter les informations associées au rapport DbIo sélectionné.');
define('BUTTON_UPLOAD', 'Télécharger');
define('BUTTON_UPLOAD_TITLE', 'Cliquez ici pour télécharger le fichier sélectionné.');

define('TEXT_FILE_ACTION_DELETE_INSTRUCTIONS', 'Vous pouvez supprimer un ou plusieurs des fichiers ci-dessous du serveur. Sélectionnez le(s) fichier(s) à supprimer, puis cliquez sur le bouton « Supprimer ».');

define('TEXT_SHOW_HIDE_FILTERS', 'Click to show (or hide) the filters for <strong>all</strong> handlers.  When the filters are <em>hidden</em>, then they do not apply to the current export.');
define('TEXT_BUTTON_MANAGE_CUSTOMIZATION', 'Gérer les modèles');
define('LABEL_CHOOSE_CUSTOMIZATION', 'Choisissez un modèle :');
define('TEXT_ALL_FIELDS', 'Tous les champs');
define('TEXT_ALL_FIELDS_DESCRIPTION', 'L\'exportation actuelle inclura tous les champs pris en charge par le gestionnaire actuel.');

define('DBIO_FORM_SUBMISSION_ERROR', 'Il y avait des valeurs manquantes pour la soumission de votre formulaire, veuillez réessayer.');

define('TEXT_NO_DBIO_FILES_AVAILABLE', 'Aucun fichier d\'importation/exportation n\'est disponible pour le gestionnaire <em>%s</em>.');
define('ERROR_FILENAME_MISMATCH', 'Veuillez choisir un fichier de téléchargement associé au gestionnaire actuel (%1$s), par exemple <em>dbio.%1$s.*.csv</em>..');
define('TEXT_UPLOAD_FOR_IMPORT_ONLY', 'Le gestionnaire <em>%s</em> ne prend pas en charge les importations de fichiers, les téléchargements de fichiers ont donc été désactivés.');
define('TEXT_CHOOSE_ACTION', 'Choisissez l\'action à effectuer pour le fichier choisi ci-dessous :');
define('TEXT_FILE_UPLOAD_INSTRUCTIONS', 'Vous pouvez également importer un fichier depuis votre ordinateur (extensions %2$s <b>uniquement</b>) à l\'aide de <em>DbIo Manager</em>. Choisissez un fichier compatible avec le gestionnaire actuel (%1$s), par exemple <em>dbio.%1$s.*.csv</em>, puis cliquez sur le bouton « Importer ».');
define('TEXT_CHOOSE_FILE', 'Votre fichier:');

define('DBIO_ACTION_PLEASE_SELECT', 'Veuillez sélectionner');
define('DBIO_ACTION_SPLIT', 'Diviser');
define('DBIO_ACTION_DELETE', 'Supprimer');
define('DBIO_ACTION_FULL_IMPORT', 'Importation (complète)');
define('DBIO_ACTION_CHECK_IMPORT', 'Importer (sélection uniquement)');
define('DBIO_ACTION_DOWNLOAD', 'Télécharger');

define('TEXT_FILE_ACTION_INSTRUCTIONS',
    'Les actions suivantes liées aux fichiers sont prises en charge, mais peuvent être limitées par le gestionnaire actuel :' . PHP_EOL .
    '<ol>' . PHP_EOL .
    '   <li><strong>' . DBIO_ACTION_SPLIT . '</strong>: Divise un fichier .CSV en plusieurs fichiers, en utilisant le paramètre actuel de votre boutique pour le <b>nombre d\'enregistrements divisés</b>, vous permettant de télécharger de grosses exportations en sections.</li>' . PHP_EOL .
    '   <li><strong>' . DBIO_ACTION_DOWNLOAD . '</strong>: Télécharge le fichier sélectionné (.csv ou .log) sur votre ordinateur pour que vous puissiez le consulter.</li>' . PHP_EOL .
    '   <li><strong>' . DBIO_ACTION_FULL_IMPORT . '</strong>: Cette action, activée uniquement si le gestionnaire sélectionné prend en charge les importations, utilise le fichier .csv sélectionné pour apporter des modifications à votre base de données.</li>' . PHP_EOL .
    '   <li><strong>' . DBIO_ACTION_CHECK_IMPORT . '</strong>: Cette action, activée uniquement si le gestionnaire sélectionné prend en charge les importations, vous permet de vérifier les actions de base de données qui se produiront lors d\'une importation « complète » ; aucune modification de base de données n\'est effectuée. Une fois l\'opération terminée, un fichier journal contenant l\'analyse DbIo est généré.</li>' . PHP_EOL .
    '</ol>' . PHP_EOL .
    'Choisissez une action et un fichier associé puis cliquez sur le bouton « Appliquer ».' . PHP_EOL
);

define('HEADING_CHOOSE_FILE', 'Choisir un fichier');
define('HEADING_FILENAME', 'Nom de fichier');
define('HEADING_BYTES', 'Octets');
define('HEADING_LAST_MODIFIED', 'Date de dernière modification');
define('HEADING_DELETE', 'Supprimer?');

define('TEXT_SORT_NAME_ASC', 'Cliquez ici pour trier par nom de fichier, par ordre croissant');
define('TEXT_SORT_NAME_DESC', 'Cliquez ici pour trier par nom de fichier, par ordre décroissant');
define('TEXT_SORT_SIZE_ASC', 'Cliquez ici pour trier par taille de fichier, par ordre croissant');
define('TEXT_SORT_SIZE_DESC', 'Cliquez ici pour trier par taille de fichier, par ordre décroissant');
define('TEXT_SORT_DATE_ASC', 'Cliquez ici pour trier par date de fichier, par ordre croissant');
define('TEXT_SORT_DATE_DESC', 'Cliquez ici pour trier par date de fichier, par ordre décroissant');

define('TEXT_VIEW_STATS', 'Afficher les détails de l\'importation');
define('TEXT_IMPORT_LAST_STATS', 'Cliquez ici pour voir les détails de la dernière importation DbIo');

define('ERROR_CHOOSE_FILE_ACTION', 'Veuillez choisir l\'action à effectuer sur le fichier nommé « %s ».');

define('SUCCESSFUL_FILE_IMPORT', 'L\'importation DbIo à partir du fichier « %1$s » a été effectuée avec succès. %2$u enregistrements ont été traités.');
define('CAUTION_FILE_IMPORT', 'L\'importation DbIo à partir du fichier « %1$s » a été effectuée avec %2$u erreurs et %3$u avertissements. %4$u enregistrements ont été insérés ou mis à jour.');

define('ERROR_CANT_DELETE_FILE', 'Le fichier demandé (%s) n\'a pas été supprimé ; il n\'a pas été trouvé ou ses autorisations ne sont pas définies correctement.');
define('SUCCESS_FILE_DELETED', 'Le fichier demandé (%s) a été supprimé avec succès.');

define('ERROR_CANT_SPLIT_FILE_OPEN_ERROR', 'Le fichier demandé (%s) n\'a pas été divisé ; il n\'a pas pu être ouvert.');
define('ERROR_CREATING_SPLIT_FILE', 'Une erreur s\'est produite lors de l\'opération de fractionnement. Le fichier (%s) n\'a pas pu être créé.');
define('ERROR_WRITING_SPLIT_FILE', 'Une erreur s\'est produite lors de l\'écriture de l\'enregistrement #%2$u du fichier divisé (%1$s).');
define('ERROR_SPLIT_INPUT_NOT_AT_EOF', 'Une erreur inconnue s\'est produite lors de la lecture du fichier d\'entrée divisé (%s). L\'opération a été annulée.');
define('WARNING_FILE_TOO_SMALL_TO_SPLIT', 'Le fichier (%1$s) contient trop peu d\'enregistrements (%2$u) pour être divisé.');
define('FILE_SUCCESSFULLY_SPLIT', 'Le fichier (%1$s) a été divisé avec succès en %2$u morceaux.');

define('ERROR_FILE_IS_EXPORT_ONLY', 'Le fichier (%s) n\'a pas été importé. Il est associé à un rapport d\'exportation uniquement.');
define('ERROR_UNKNOWN_TEMPLATE', 'Le modèle DbIo que vous avez demandé n\'a pas pu être trouvé ; veuillez réessayer.');
define('DBIO_MGR_EXPORT_SUCCESSFUL', 'Votre exportation <em>%1$s</em> a été réalisée avec succès vers %2$s, créant %3$u enregistrements.');

define('ERROR_NO_FILE_TO_UPLOAD', 'Aucun fichier n\'a été sélectionné pour le téléchargement. Veuillez réessayer.');
define('FILE_UPLOADED_SUCCESSFULLY', 'Le fichier %s a été téléchargé avec succès.');

define('DBIO_CANT_OPEN_FILE', 'Téléchargement échoué, le fichier « %s » n\'existe pas.');

define('JS_MESSAGE_OK2DELETE_PART1', 'Êtes-vous sûr de vouloir supprimer définitivement le(s) ');  //-The count of files selected is inserted between these two messages
define('JS_MESSAGE_OK2DELETE_PART2', ' fichier(s) sélectionné(s) du serveur ?');
define('JS_MESSAGE_NO_FILES_SELECTED', 'Aucun fichier n\'a été sélectionné pour être supprimé ; veuillez réessayer.');
define('JS_MESSAGE_CHOOSE_ACTION', 'Veuillez choisir une action à effectuer sur le fichier sélectionné.');

define('LAST_STATS_LEAD_IN', 'Statistiques pour le dernier fichier importé dans la session d\'administration en cours :');
define('LAST_STATS_FILE_NAME', 'Nom du fichier d\'importation :');
define('LAST_STATS_OPERATION', 'Opération :');
define('LAST_STATS_RECORDS_READ', 'Enregistrements lus :');
define('LAST_STATS_RECORDS_INSERTED', 'Enregistrements insérés :');
define('LAST_STATS_RECORDS_UPDATED', 'Enregistrements mis à jour :');
define('LAST_STATS_WARNINGS', 'Avertissements :');
define('LAST_STATS_ERRORS', 'Erreurs:');
define('LAST_STATS_PARSE_TIME', 'Temps d\'analyse :');
define('LAST_STATS_MESSAGES_EXIST', 'Les avertissements/erreurs suivants ont été générés par l\'action ci-dessus :');

define('DBIO_SELECT_ALL', 'Tout sélectionner');
define('DBIO_SELECT_ALL_TITLE', 'Cliquez ici pour tout sélectionner');
define('DBIO_UNSELECT_ALL', 'Tout désélectionner');
define('DBIO_UNSELECT_ALL_TITLE', 'Cliquez ici pour tout désélectionner');
