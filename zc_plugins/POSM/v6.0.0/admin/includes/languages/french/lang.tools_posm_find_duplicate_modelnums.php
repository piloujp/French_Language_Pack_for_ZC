<?php
// -----
// Part of the "Product Options Stock Manager" plugin by Cindy Merkin (cindy@vinosdefrutastropicales.com)
// Copyright (c) 2015-2024 Vinos de Frutas Tropicales
//
// Last updated: POSM v5.0.0
// -----
// Based on the Find Duplicate Models plugin (https://www.zen-cart.com/downloads.php?do=file&id=1323) by swguy.
//
$define = [
    'HEADING_TITLE' => 'POSM: Rechercher des modèles en double',
    'HEADING_PRODUCTS_LINK' => 'Products Link',
    'HEADING_POSM_LINK' => 'Lien POSM',
    'HEADING_PRODUCTS_MODEL' => 'Modèle de produits', 
    'HEADING_POSM_MODEL' => 'POSM modèles',
    'HEADING_PRODUCTS_NAME' => 'Nom des produits',
    'HEADING_PRODUCTS_DISABLED' => 'Produit activé ?',

    'INSTRUCTIONS' => "Utilisez cet outil pour identifier les numéros de modèle en double dans les produits de votre magasin, à la fois tels que définis dans la définition d'un produit de base et en tant que modèles de combinaison d'options dans vos paramètres <em>POSM</em>. Par défaut, seuls les produits <em>activés</em> sont inclus dans le rapport; pour inclure les produits <em>désactivés</em>, cochez la case ci-dessous, puis cliquez sur le bouton <b>Aller</b>.<br><br><strong>Note :</strong> Si un seul produit est répertorié dans le rapport des doublons, alors ce produit possède une combinaison d'options <em>POSM</em> qui a le même numéro de modèle qu'un produit de base.",
    'NO_DUPS_FOUND' => 'Félicitations &mdash; tous les numéros de modèle sont uniques.', 

    'INCLUDE_DISABLED' => 'Inclure les produits désactivés ?',
    'POSM_MODEL_IS_EMPTY' => '--vide--',

    'BUTTON_GO' => 'Aller',

    'DUPS_UNMANAGED_UNMANAGED' => 'Produits non gérés avec des modèles dupliqués dans des produits non gérés',
    'DUPS_UNMANAGED_MANAGED' => 'Produits non gérés avec des modèles dupliqués dans des produits gérés',
    'DUPS_MANAGED_MANAGED' => 'Produits gérés avec des modèles dupliqués dans les produits gérés',
];
return $define;
