<?php
// -----
// Part of the DataBase Import/Export (aka DbIo) plugin, created by Cindy Merkin (cindy@vinosdefrutastropicales.com)
// Copyright (c) 2016-2020, Vinos de Frutas Tropicales.
//

// -----
// Defines the handler's descriptive text.
//
define('DBIO_PRODUCTSATTRIBSRAW_DESCRIPTION', 'Ce format de rapport prend en charge l\'import/export de <b>tous</b> les champs des tables <code>products_attributes</code> et <code>products_attributes_download</code>, ce qui vous permet d\'ajouter ou de modifier des informations sur les attributs produits de votre boutique. Utilisez la colonne <code>v_dbio_command</code>, définie sur <b>REMOVE</b>, pour supprimer une paire option/valeur d\'un produit.<br><br>Une ligne du fichier CSV correspond à un seul attribut spécifique au produit. Toutes les entrées d\'options produit et de valeurs d\'options produit doivent préexister dans la base de données pour que l\'importation des informations relatives aux attributs soit réussie.<br><br>L\'exportation inclut chaque nom d\'option et de valeur d\'option, dans la langue par défaut de votre boutique, afin de faciliter la lecture du résultat. Ces valeurs ne sont pas utilisées pour une importation.');
