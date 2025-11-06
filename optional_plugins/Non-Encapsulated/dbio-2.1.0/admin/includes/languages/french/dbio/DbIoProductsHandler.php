<?php
// -----
// Part of the DataBase Import/Export (aka DbIo) plugin, created by Cindy Merkin (cindy@vinosdefrutastropicales.com)
// Copyright (c) 2015-2017, Vinos de Frutas Tropicales.
//

// -----
// Defines the handler's descriptive text.
//
define ('DBIO_PRODUCTS_DESCRIPTION', 'Ce format de rapport prend en charge l’import/export de <b>tous</b> les champs des tables « produits » et « description_produits », qui contiennent les informations de base sur les produits. Vous pouvez utiliser les filtres fournis pour limiter la sortie de ce rapport en fonction du statut, du fabricant ou de l’arborescence des catégories d’un produit.');

// -----
// Definitions that are used for the export-filters, displayed on Tools->Database I/O Manager
//
define ('DBIO_PRODUCTS_FILTERS_LABEL', 'Filtrez la sortie selon les fabricants ou catégories sélectionnés. Sélectionnez/désélectionnez plusieurs options en appuyant sur la touche Ctrl et en cliquant ; laissez toutes les options désélectionnées pour afficher tous les fabricants et toutes les catégories.');
define ('DBIO_PRODUCTS_MANUFACTURERS_LABEL', 'Limiter les fabricants :');
define ('DBIO_PRODUCTS_CATEGORIES_LABEL', 'Limiter les catégories :');
define ('DBIO_PRODUCTS_STATUS_LABEL', 'Statut du produit :');
define ('DBIO_PRODUCTS_TEXT_STATUS_ENABLED', 'Actifs uniquement');
define ('DBIO_PRODUCTS_TEXT_STATUS_DISABLED', 'Désactivés uniquement');
define ('DBIO_PRODUCTS_TEXT_STATUS_ALL', 'Tous les statuts');
