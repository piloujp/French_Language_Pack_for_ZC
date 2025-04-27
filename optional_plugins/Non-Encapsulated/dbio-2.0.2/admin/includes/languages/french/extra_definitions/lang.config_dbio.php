<?php

$define = [
    'CFGTITLE_DBIO_MODULE_VERSION' => 'Version/Date de sortie',
    'CFGDESC_DBIO_MODULE_VERSION' => 'Numéro de version et date de sortie de Database I/O Manager (DbIo).',
    'CFGTITLE_DBIO_CSV_DELIMITER' => 'CSV : délimiteur',
    'CFGDESC_DBIO_CSV_DELIMITER' => 'Saisissez le caractère unique utilisé pour séparer les colonnes dans un fichier CSV DbIo. Pour utiliser la tabulation comme délimiteur, saisissez <b>TAB</b>. (Par défaut : <b>,</b>)',
    'CFGTITLE_DBIO_CSV_ENCLOSURE' => 'CSV: Entourer',
    'CFGDESC_DBIO_CSV_ENCLOSURE' => 'Saisissez le caractère unique utilisé pour <em>entourer</em> les champs de tout fichier CSV DbIo. (Par défaut : <b>\"</b>)',
    'CFGTITLE_DBIO_CSV_ESCAPE' => 'CSV : Échapper',
    'CFGDESC_DBIO_CSV_ESCAPE' => 'Saisissez le caractère d\'échappement unique dans tout fichier CSV DbIo. (Par défaut : barre oblique inverse)',
    'CFGTITLE_DBIO_CHARSET' => 'CSV : Encodage',
    'CFGDESC_DBIO_CHARSET' => 'Choisissez le type d\'encodage à associer aux fichiers CSV DbIo. Si vous utilisez Microsoft® Excel, choisissez <b>latin1</b>. (Par défaut : <b>utf8</b>).',
    'CFGTITLE_DBIO_IMPORT_DATE_FORMAT' => 'CSV : format de date d\'importation',
    'CFGDESC_DBIO_IMPORT_DATE_FORMAT' => 'Choisissez le format utilisé pour les champs <em>date</em> et <em>datetime</em> dans tout fichier CSV DbIo. (Par défaut : <b>m-d-y</b>)',
    'CFGTITLE_DBIO_MAX_EXECUTION_TIME' => 'Temps d\'exécution maximal (secondes)',
    'CFGDESC_DBIO_MAX_EXECUTION_TIME' => 'Saisissez le temps d\'exécution maximal d\'une opération DbIo, en secondes (par défaut : 60).',
    'CFGTITLE_DBIO_SPLIT_RECORD_COUNT' => 'Fichier divisé : nombre d\'enregistrements',
    'CFGDESC_DBIO_SPLIT_RECORD_COUNT' => 'Parfois, diviser un fichier .csv en plusieurs fichiers plus petits peut s\'avérer utile si votre serveur expire lors d\'une opération d\'importation ou si un fichier .csv exporté est trop volumineux pour être téléchargé en un seul bloc. Saisissez le nombre d\'enregistrements (par défaut : 2 000) à diviser dans le gestionnaire d\'E/S de base de données.',
    'CFGTITLE_DBIO_FILE_SORT_DEFAULT' => 'Ordre de tri des fichiers par défaut',
    'CFGDESC_DBIO_FILE_SORT_DEFAULT' => 'Choisissez l\'ordre de tri par défaut utilisé par le gestionnaire d\'E/S de base de données lors de l\'affichage des fichiers d\'E/S qu\'il a découverts, parmi :<br><br><b>1a</b> : Nom du fichier, croissant<br><b>1d</b> : Nom du fichier, décroissant<br><b>2a</b> : Taille du fichier, croissante<br><b>2d</b> : Taille du fichier, décroissante<br><b>3a</b> : Date du fichier, croissante<br><b>3d</b> : Date du fichier, décroissante (par défaut)',
    'CFGTITLE_DBIO_DEBUG' => 'Activer le débogage ?',
    'CFGDESC_DBIO_DEBUG' => 'Indiquez si le débogage DbIo doit être activé (true) ou non (false, valeur par défaut). Lorsqu\'il est activé, tous les états d\'E/S sont consignés dans un fichier <em>dbio-*.log</em> du dossier /YOUR_ADMIN/dbio/logs de votre boutique.',
    'CFGTITLE_DBIO_DEBUG_DATE_FORMAT' => 'Format de date de débogage',
    'CFGDESC_DBIO_DEBUG_DATE_FORMAT' => 'Saisissez la chaîne de formatage utilisée pour horodater toutes les entrées du journal DbIo.',
    'CFGTITLE_DBIO_PRODUCTS_AUTO_CREATE_CATEGORIES' => '<em>Produits</em> : Créer automatiquement des catégories lors de l\'importation ?',
    'CFGDESC_DBIO_PRODUCTS_AUTO_CREATE_CATEGORIES' => 'Comment DbIo doit-il gérer les catégories manquantes lors d\'une importation de produits ? Choisissez « Yes » pour que les catégories manquantes soient générées automatiquement ; choisissez « No » (valeur par défaut) pour interdire toute importation de produits si les catégories n\'existent pas.',
    'CFGTITLE_DBIO_PRODUCTS_INSERT_REQUIRES_COMMAND' => '<em>Produits</em> : La création de produits nécessite une commande ?',
    'CFGDESC_DBIO_PRODUCTS_INSERT_REQUIRES_COMMAND' => 'L\'importation de produits nécessite-t-elle une commande DbIo <code>ADD</code> ? Choisissez <b>No</b> (valeur par défaut) pour autoriser la création de produits si aucun identifiant de produit et/ou modèle de produit correspondant n\'est trouvé.<br><br>Choisissez <b>Yes</b> pour interdire toute importation de produit générant un nouveau produit, sauf si la commande <code>ADD</code> est présente.',
];

return $define;