<?php
// -----
// Part of the "Product Options Stock" plugin by Cindy Merkin (cindy@vinosdefrutastropicales.com)
// Copyright (c) 2014-2024 Vinos de Frutas Tropicales
//
// Last updated: POSM 5.0.0
//
$define = [
    'BOX_REPORTS_PRODUCTS_OPTIONS_STOCK' => 'Ventes par options de produits',
    'BOX_CATALOG_PRODUCTS_OPTIONS_STOCK' => 'Gérer le stock des options',
    'BOX_CATALOG_PRODUCTS_OPTIONS_STOCK_VIEW_ALL' => 'Stock des options &mdash; Tout afficher',
    'BOX_LOCALIZATION_PRODUCTS_OPTIONS_STOCK' => 'Étiquettes « En rupture de stock »',
    'BOX_CONFIGURATION_PRODUCTS_OPTIONS_STOCK' => 'Gestionnaire de stock des Options',
    'BOX_TOOLS_CONVERT_SBA2POSM' => 'Convertir SBA en POSM',
    'BOX_TOOLS_POSM_FIND_DUPMODELS' => 'POSM : rechercher les modèles en double',

    // -----
    // Utilisé par le script d'initialisation, lors de la vérification que le fichier de fonction EO contient les notificateurs "appropriés",
    // lors de la vérification des dates de retour en stock « expirées » et de l'installation ou des mises à jour de la messagerie.
    //
    'POSM_EO_DOWNLEVEL' => 'La version <em>Modifier les commandes</em> (v%s) actuellement installée <em>ne prend pas en charge</em> le <em>Gestionnaire de stock des options de produits</em>; veuillez mettre à jour vers EO v4.2.0 ou version ultérieure.',
    'POSM_BIS_DATES_EXPIRED' => 'Une ou plusieurs dates de retour en stock sont dans leur période d’expiration (%1$u jours); cliquez <a href="%2$s">ici</a> pour plus d’informations',
    'POSM_INSTALLED' => 'La version %s du gestionnaire de stock des options de produits a été installée avec succès.',
    'POSM_UPDATED' => 'Le gestionnaire de stock des options des produits a été mis à jour avec succès de la version %1$s à %2$s.',

    // -----
    // Utilisé sur la page des catégories comme texte alternatif pour les icônes d'indicateur de stock des options.
    //
    'POS_ALT_PRODUCT_HAS_OPTIONS_STOCK' => 'Le produit a des options avec stock',
    'POS_ALT_PRODUCT_HAS_OPTIONS_NO_STOCK' => 'Le produit a des options, mais pas de stock',

    // -----
    // Utilisé par l'observateur de stock des options de niveau administrateur pour signaler qu'un ou plusieurs enregistrements de stock ont ​​été supprimés.
    //
    'CAUTION_REMOVING_OPTIONS_STOCK' => 'L’opération a entraîné la suppression de %u enregistrement(s) de stock d’options de produits.',

    // -----
    // Utilisé par l'observateur de stock des options de niveau administrateur pour signaler qu'un ou plusieurs enregistrements de stock ont ​​été copiés.
    'SUCCESS_COPYING_OPTIONS_STOCK' => 'Les enregistrements de stock des options de %u produits ont été copiés.',

    // -----
    // Utilisé par Catalogue-> Gérer le stock des options pour avertir l'administrateur lorsque le niveau de réapprovisionnement s'est avéré invalide.
    //
    'CAUTION_POSM_REORDER_LEVEL' => "Le paramètre <em>Stock d'options : niveau de réapprovisionnement</em> contenait une valeur non valide (%s); la valeur a été remise à 0.",

    // -----
    // Utilisé à la fois par Catalogue-> Gérer le stock des options et par l'outil « Tout afficher » pour alerter l'administrateur d'un numéro de modèle en double non autorisé et pour fournir un numéro de modèle trié.
    //
    'ERROR_DUPLICATE_MODEL_FOUND' => 'Le numéro de modèle (<em>%s</em>) est déjà utilisé et doit être modifié pour enregistrer ces informations.',
    'JSCRIPT_ERROR_DUPLICATE_MODEL' => "'Ce numéro de modèle ('+modelNum+') est déjà utilisé et doit être modifié pour enregistrer ces informations.'",
    'ERROR_MODEL_TOO_LONG' => 'Le numéro de modèle (%s) saisi comporte trop de caractères; veuillez la saisir à nouveau.',
    'ERROR_INVALID_QUANTITY' => 'La valeur de quantité d’une variante doit être numérique et non négative, veuillez la saisir à nouveau.',

    'POSM_TEXT_SORT_BY' => 'Trier les combinaisons d’options par : ',
    'POSM_TEXT_SORT_BY_MODEL_ASC' => 'Numéro de modèle, A-Z',
    'POSM_TEXT_SORT_BY_MODEL_DESC' => 'Numéro de modèle, Z-A',
    'POSM_TEXT_SORT_BY_DEFINITION' => 'Ordre de tri des attributs',

    // -----
    // Utilisé par includes/javascript/attributes_controller_posm.php.
    //
    'POSM_JS_CAUTION_OPTION_REMOVAL' => 'ATTENTION !\n\nLes attributs de ce produit sont gérés par le Gestionnaire de Stock des Options de Produits.\n\nSi vous confirmez la suppression de cette option, **toutes** les options gérées seront supprimées et la quantité du produit sera définie sur 0.',
    'POSM_JS_CAUTION_ATTRIBUTE_REMOVAL' => 'ATTENTION !\n\nLes attributs de ce produit sont gérés par le Gestionnaire de Stock des Options de Produits.\n\nSi vous confirmez la suppression de cet attribut, %u option(s) gérée(s) sera(ont) supprimée(s) et la quantité du produit sera mise à jour en conséquence.',
];
return $define;
