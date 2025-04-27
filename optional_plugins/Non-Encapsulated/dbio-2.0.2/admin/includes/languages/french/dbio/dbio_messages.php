<?php
// -----
// Part of the DataBase I/O Manager (aka DbIo) plugin, created by Cindy Merkin (cindy@vinosdefrutastropicales.com)
// Copyright (c) 2015-2020, Vinos de Frutas Tropicales.
//

// ----
// These definitions are used by this sequencing class as well as the report-specific handlers.
//
define('DBIO_INVALID_CHAR_REPLACEMENT', 167); //-Use the "section symbol" (??) as the invalid-character replacement

// -----
// Messages used by the DbIo class.
//
define('DBIO_FORMAT_TEXT_NO_DESCRIPTION', 'Ce gestionnaire DbIo n\'a pas fourni sa description.');
define('DBIO_MESSAGE_NO_HANDLERS_FOUND', 'Aucun gestionnaire DbIo n\'a été trouvé ; aucune génération de rapport n\'est possible.');
define('DBIO_FORMAT_MESSAGE_NO_HANDLER', 'Fichier de classe de gestionnaire DbIo manquant %s.');
define('DBIO_FORMAT_MESSAGE_NO_CLASS', 'Classe de gestionnaire DbIo manquante nommée « %1$s » dans le fichier de gestionnaire %2$s.');
define('DBIO_MESSAGE_EXPORT_NOT_INITIALIZED', 'Exportation interrompue : aucun gestionnaire spécifié précédemment.');
define('DBIO_MESSAGE_IMPORT_NOT_INITIALIZED', 'Importation interrompue : aucun gestionnaire spécifié précédemment.');
define('DBIO_FORMAT_MESSAGE_EXPORT_NO_FP', 'Exportation interrompue. Échec de la création du fichier de sortie %s.');
define('DBIO_EXPORT_NOTHING_TO_DO', 'Export DbIo : aucun enregistrement ne correspond aux critères demandés.');
define('DBIO_FORMAT_MESSAGE_IMPORT_FILE_MISSING', 'Importation interrompue : fichier d\'entrée manquant (%s).');
define('DBIO_WARNING_ENCODING_ERROR', 'Importation DbIo : impossible d\'encoder l\'entrée pour ' . CHARSET . '.');
define('DBIO_ERROR_NO_HANDLER', 'Exportation DbIo. Aucun gestionnaire DbIo n\'est configuré.');
define('DBIO_ERROR_EXPORT_NO_LANGUAGE', 'Exportation DbIo. Le code de langue « %s » n\'est pas configuré pour la boutique.');
define('DBIO_ERROR_NO_PHP_MBSTRING', "Le DbIo nécessite que l'extension « php-mbstring » soit chargée ; contactez votre hébergeur et demandez-lui d'installer cette extension.");
define('DBIO_ERROR_MISSING_DIRECTORY', "Le répertoire (%s) n'a pas été trouvé ; aucune opération DbIo n'est possible tant que ce problème n'est pas corrigé.");
define('DBIO_ERROR_DIRECTORY_NOT_WRITABLE', "Le répertoire (%s) n'est pas accessible en écriture ; aucune opération DbIo n'est possible tant que ce problème n'est pas corrigé.");

// -----
// Messages used by the DbIoHandler class
//
define('DBIO_MESSAGE_IMPORT_MISSING_HEADER', 'Importation interrompue : informations d\'en-tête manquantes pour le fichier d\'entrée.');
define('DBIO_FORMAT_MESSAGE_IMPORT_MISSING_KEY', 'Importation interrompue : colonne clé manquante (%s).');
define('DBIO_TEXT_ERROR', 'Erreur　: ');  //-Used to prefix processing messages with errors
define('DBIO_MESSAGE_KEY_CONFIGURATION_ERROR', 'Il y a une erreur dans la configuration de la clé pour le gestionnaire sélectionné ; le gestionnaire ne peut pas être utilisé.');
define('DBIO_ERROR_HANDLER_MISSING_FUNCTION', 'Le gestionnaire actuel (%1$s) ne dispose pas de la fonction (obligatoire) « %2$s » ; l\'importation n\'est pas autorisée.');
define('DBIO_ERROR_HEADER_MISSING_KEYS', 'Le fichier d\'importation actuel ne contient pas ces (%s) colonnes obligatoires ; l\'importation est interdite.');
define('DBIO_ERROR_HANDLER_NO_COMMANDS', 'Le fichier d\'importation actuel utilise les commandes DbIo, mais le gestionnaire ne les prend pas en charge ; l\'importation n\'est pas autorisée.');
define('DBIO_ERROR_HANDLER_VERSION_MISMATCH', 'Il existe une incompatibilité de version pour le gestionnaire sélectionné (%1$s) ; le gestionnaire ne peut pas être utilisé.');
define('DBIO_ERROR_MULTIPLE_COMMAND_COLUMNS', 'Importation annulée : plusieurs colonnes v_dbio_command trouvées dans les données d\'entrée.');
