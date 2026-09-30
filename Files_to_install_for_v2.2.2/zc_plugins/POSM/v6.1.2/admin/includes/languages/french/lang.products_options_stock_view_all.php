<?php
// -----
// Part of the "Product Options Stock Manager" plugin by Cindy Merkin (cindy@vinosdefrutastropicales.com)
// Copyright (c) 2015-2024 Vinos de Frutas Tropicales
//
// Last updated:  POSM v5.0.0
//
$define = [
    'HEADING_TITLE' => 'Gestionnaire de stock d’options de produits &mdash; Tout Afficher',

    'TEXT_LAST_UPDATED' => 'Dernière mise à jour : ',

    'TEXT_POS_INSTRUCTIONS' => "Par défaut, cet outil affiche <b>uniquement</b> les produits avec des combinaisons d'options (ou variantes) dont les quantités sont inférieures ou égales au <em>Stock d'options : niveau de réapprovisionnement</em> (actuellement " . POSM_STOCK_REORDER_LEVEL . "). Pour afficher <b>tous</b> les produits actuellement gérés par <a href=\"" . zen_href_link (FILENAME_PRODUCTS_OPTIONS_STOCK) . "\">Gestionnaire de stock des options des produits</a>, cochez la case ci-dessous et appuyez sur le bouton <samp>Aller</samp>.<br><br>La colonne <b>Nom de la variante</b> est formatée comme <span class=\"option-name\">Nom de l'option</span> : <span class=\"value-name\">Nom de la valeur de l'option</span>[,...]. Les variantes à faible stock sont mises en évidence comme <span class=\"out-of-stock\">ceci</span>.<br><br>Si vous avez configuré la gestion des modèles en double de <em>POSM</em> pour signaler les doublons, toute entrée de <b>Modèle de variante</b> qui a une <span style=\"color: red; \">bordure rouge</span> est dupliquée, soit dans la définition d'un produit, soit dans une autre combinaison d'options de <em>POSM</em>. Voir <a href=\"" . zen_href_link (FILENAME_POSM_FIND_DUPLICATE_MODELNUMS) . "\"><em>Outils :: POSM : rechercher des modèles en double</em></a> pour des informations complémentaires.<br><br>",
    'TEXT_POS_INSTRUCTIONS2' => "Vous pouvez modifier les quantités de plusieurs articles et cliquer sur le bouton « Mettre à jour » pour appliquer toutes les modifications, ou vous pouvez cliquer sur le lien <b>Nom du produit</b> pour gérer le stock d'options pour ce produit.",

    'POSM_TEXT_PRODUCT_NAME' => 'Nom du produit',
    'POSM_TEXT_VARIANT_MODEL' => 'Modèle de variante',
    'POSM_TEXT_OPTIONS_LIST' => 'Nom de la variante',
    'TEXT_POS_STOCK_QUANTITY' => 'Quantité',

    'BUTTON_GO' => 'Aller',

    'TEXT_UPDATE_ALT' => 'Cliquez ici pour mettre à jour toutes les valeurs modifiées.',

    'TEXT_CHECK_TO_VIEW_ALL' => 'Afficher <em>toutes</em> les variantes gérées ?',

    'POSM_VIEW_ALL_UPDATED' => 'Les mises à jour sélectionnées ont été traitées avec succès.',

    'POSM_VIEW_ALL_NO_PRODUCTS_TO_LIST' => 'Il n’y a aucun produit géré à afficher.',
    'POSM_TEXT_DISPLAY_NUMBER_OF_PRODUCTS' => 'Affichage de <b>%1$u</b> à <b>%2$u</b> (sur <b>%3$u</b> produits)',

    'ERROR_MISSING_INPUTS' => 'La demande de mise à jour n’a pas pu être traitée. Vous devrez augmenter les valeurs de configuration PHP de votre site pour <code>post_max_size</code> (actuellement %1$s) et/ou <code>max_input_size</code> (actuellement %2$s).',
];
return $define;
