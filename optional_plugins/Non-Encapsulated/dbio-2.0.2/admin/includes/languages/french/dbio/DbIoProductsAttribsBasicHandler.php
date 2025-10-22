<?php
// -----
// Part of the DataBase I/O Manager (aka DbIo) plugin, created by Cindy Merkin (cindy@vinosdefrutastropicales.com)
// Copyright (c) 2015-2024, Vinos de Frutas Tropicales.
//
// Last updated: DbIo v2.0.1
//

// -----
// Defines the handler's descriptive text.
//
define('DBIO_PRODUCTSATTRIBSBASIC_DESCRIPTION', 'Ce format de rapport prend en charge l’import/export des valeurs des attributs de base des produits. Le rapport, indexé par le numéro de modèle du produit associé, inclut un enregistrement par paire produit/option, les valeurs spécifiques à l’option étant séparées par des caractères ^, en utilisant la langue par défaut de votre boutique.<br><br><b>Remarques :</b><ol><li>Chaque produit de votre boutique doit avoir un numéro de modèle unique pour que l’importation soit réussie.</li><li>Tous les noms et valeurs d’options doivent déjà exister dans votre base de données</b> pour qu’un enregistrement d’attribut associé soit importé.</li><li><b>Seules les nouvelles combinaisons d’options seront ajoutées !</li></ol>');
