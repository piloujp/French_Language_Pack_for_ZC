<?php
// -----
// Part of the DataBase Import/Export (aka DbIo) plugin, created by Cindy Merkin (cindy@vinosdefrutastropicales.com)
// Copyright (c) 2016-2025, Vinos de Frutas Tropicales.
//

// -----
// Defines the handler's descriptive text.
//
define(
    'DBIO_PRODUCTSOPTIONSVALUES_DESCRIPTION',
    'Ce format de rapport prend en charge l\'import/export de <b>tous</b> les champs de la table <code>products_options_values</code>. Utilisez ce rapport pour ajouter ou modifier des informations sur les valeurs des options de produits de votre boutique. Un enregistrement dans le fichier CSV DbIo correspond à une valeur d\'option de produit <em>spécifique à une langue</em>.' .
    '<br><br>' .
    '<b>Remarques :</b>' .
    '<ol>' .
        '<li>Deux champs supplémentaires, <code>v_products_options_id</code> et <code>v_products_options_name</code>, sont inclus dans l\'export. Bien que le nom de l\'option ne soit pas utilisé (ou requis) lors de l\'importation d\'un enregistrement, son identifiant l\'est, car sa valeur est utilisée pour créer un enregistrement dans la table <code>products_options_values_to_products_options</code> !</li>' .
        '<li>Pour ajouter une nouvelle valeur d\'option, définissez la colonne <code>v_products_options_values_id</code> sur <code>0</code>.</li>' .
    '</ol>'
);
