<?php
// -----
// Part of the "Product Options Stock Manager" plugin by Cindy Merkin (cindy@vinosdefrutastropicales.com)
// Copyright (c) 2014-2024 Vinos de Frutas Tropicales
//
// Last updated: POSM v5.0.0
//
$define = [
    'HEADING_TITLE' => "Gestionnaire de stock des options de produits : gérer les étiquettes en rupture de stock",
    'TEXT_INSTRUCTIONS' => 'Utilisez cette page pour définir et gérer les étiquettes de texte que vous associez aux produits gérés par le plugin <em>Products\' Options\' Stock</em>. L\'étiquette que vous attribuez à un produit sera affichée à vos clients lorsqu\'une combinaison d\'options est « en rupture de stock ». Vous pouvez utiliser le symbole spécial <b>[date]</b> pour (éventuellement) identifier l\'endroit où une date associée au stock doit être insérée.',

    'TABLE_HEADING_NAME_ID' => 'ID d\'étiquette',
    'TABLE_HEADING_LABEL_NAME' => 'Nom de l\'étiquette',
    'TABLE_HEADING_ACTION' => 'Action',

    'BUTTON_MANAGE' => 'Gérer',
    'BUTTON_MANAGE_ALT' => 'Cliquez ici pour gérer votre « Stock d\'options de produits »',

    'TEXT_INFO_EDIT_INTRO' => 'Veuillez apporter les modifications nécessaires',
    'TEXT_INFO_LABEL_NAME' => 'Nom de l\'étiquette :',
    'TEXT_INFO_INSERT_INTRO' => 'Veuillez saisir la nouvelle étiquette « En rupture de stock ».',
    'TEXT_INFO_DELETE_INTRO' => 'Etes-vous sûr de vouloir supprimer cette étiquette « En rupture de stock » ?',
    'TEXT_INFO_HEADING_NEW' => 'Nouvelle étiquette « En rupture de stock »',
    'TEXT_INFO_HEADING_EDIT' => 'Modifier l\'étiquette « En rupture de stock »',
    'TEXT_INFO_HEADING_DELETE' => 'Supprimer l\'étiquette « En rupture de stock »',

    'CAUTION_NO_LABEL_NAMES_FOUND' => 'Aucune étiquettes « en rupture de stock » n\'a été trouvée.',
    'MESSAGE_ERROR_NO_ID' => 'ID manquant pour l\'opération.',
    'ERROR_USED_IN_OPTIONS_STOCK' => 'L\'étiquette de stock &mdash; <b>%s</b> &mdash; est utilisée dans une ou plusieurs options de produits et ne peut pas être supprimée.',
    'ERROR_DATE_MULTI_LANG' => 'Le symbole <b>[date]</b>, s\'il est présent, doit être utilisé dans toutes les valeurs de langue.',
    'ERROR_COMMA_IN_NAME' => 'Un <b>Nom d\'étiquette</b> de stock ne peut pas contenir de virgule (,) &mdash; veuillez entrer à nouveau.',
    'ERROR_NAME_TOO_LONG' => 'L\'étiquette de stock &mdash; <b>%s</b> &mdash; a trop de lettres; veuillez entrer à nouveau.',
];
return $define;
