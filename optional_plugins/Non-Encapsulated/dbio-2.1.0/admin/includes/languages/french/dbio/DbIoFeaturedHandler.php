<?php
// -----
// Part of the DataBase Import/Export (aka DbIo) plugin, created by Cindy Merkin (cindy@vinosdefrutastropicales.com)
// Copyright (c) 2015-2016, Vinos de Frutas Tropicales.
//

// -----
// Defines the handler's descriptive text.
//
define ('DBIO_FEATURED_DESCRIPTION', 'Ce format de rapport prend en charge l’importation/exportation de tous les champs de la table « featured » et des informations sur les <em>Produits en vedette</em>.<br><br><b>Remarques</b><ol><li>Pour qu’une importation réussisse, la colonne <code>v_products_id</code> doit au minimum être présente.</li><li>L’identifiant <code>v_products_id</code> fourni lors d’une importation doit être associé à un produit valide.</li><li>Un produit peut être retiré de la liste des produits phares en incluant une colonne <code>v_dbio_command</code> avec la valeur <b>REMOVE</b> pour un identifiant de produit spécifique.</li></ol>');
