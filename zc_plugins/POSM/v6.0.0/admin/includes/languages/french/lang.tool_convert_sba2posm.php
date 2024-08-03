<?php
// -----
// Part of the "Product Options Stock Manager" plugin by Cindy Merkin (cindy@vinosdefrutastropicales.com)
// Copyright (c) 2014-2024 Vinos de Frutas Tropicales
//
$define = [
    'HEADING_TITLE' => 'Stock des options de produits :  Convertir Stock par attributs (Stock-by-Attribute)',

    'TEXT_INSTRUCTIONS' => 'Utilisez cet outil pour convertir vos tables de base de données <em>Stock par attributs (SBA)</em> existantes en tables de base de données <em>Stock d\'options de produits (POSM)</em> associées. Veuillez noter que <em>POSM</em> nécessite que toutes les combinaisons d\'options soient spécifiées, donc certaines de vos combinaisons <em>SBA</em> peuvent ne pas être « convertibles ». Reportez-vous à l\'affichage ci-dessous ; si la colonne d\'état affiche des options manquantes ou un produit inconnu, cet enregistrement <em>SBA</em> ne sera pas converti !<br /><br /><strong>Note :</strong> Cliquer sur le bouton « Envoyer » supprimera toutes les entrées existantes dans votre configuration POSM !',

    'ERROR_NO_SBA_TABLE' => 'Aucune conversion n\'est possible &mdash; table de base de données <em>products_with_attributes_stock</em> manquante.',

    'TEXT_FORM_INSTRUCTIONS' => 'Passez en revue les informations ci-dessous, puis cliquez sur le bouton <em>Soumettre</em> pour convertir les entrées <em>SBA</em> en leurs équivalents <em>POSM</em>.',
    'BUTTON_ALT_TEXT' => 'Cliquez ici pour convertir les tables',

    'TEXT_MISSING_OPTIONS' => '<span class="missing">&cross; Options (%s) manquantes</span>',
    'TEXT_UNSUPPORTED_OPTION_TYPE' => '<span class="missing">&cross; L\'ID d\'option (%1$u) utilise un type d\'option (%2$u) non pris en charge</span>',
    'TEXT_MISSING_PRODUCT' => '<span class="missing">&cross; Le produit n\'existe pas</span>',
    'TEXT_OK' => '<span class="ok">&check;</span>',

    'TABLE_HEADING_STOCK_ID' => 'ID du stock',
    'TABLE_HEADING_QUANTITY' => 'Quantité',
    'TABLE_HEADING_MODEL' => 'Modèle',
    'TABLE_HEADING_STATUS' => 'Statut',

    'MESSAGE_CONVERTED_OK' => 'Vos entrées <em>Stock par attributs</em> ont été converties avec succès en leurs équivalents <em>Stock des options de produits</em>.',
    'MESSAGE_CONVERTED_MISSING' => 'Vérifiez les informations ci-dessous. Certaines de vos entrées <em>Stock par attributs</em> n\'ont pas pu être converties.',

    'JS_MESSAGE_ARE_YOU_SURE' => 'Cette action réinitialisera vos tables POSM pour qu\'elles contiennent uniquement les informations converties de SBA. Etes-vous sûr de vouloir continuer ?',
];
return $define;
