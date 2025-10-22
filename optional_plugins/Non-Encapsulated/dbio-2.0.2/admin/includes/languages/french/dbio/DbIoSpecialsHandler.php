<?php
// -----
// Part of the DataBase Import/Export (aka DbIo) plugin, created by Cindy Merkin (cindy@vinosdefrutastropicales.com)
// Copyright (c) 2020, Vinos de Frutas Tropicales.
//

// -----
// Defines the handler's descriptive text.
//
define('DBIO_SPECIALS_DESCRIPTION', 'Ce format de rapport prend en charge l’importation/exportation de tous les champs de la table <code>specials</code> et des informations <em>Produits spéciaux</em>.<br><br><b>Remarques</b><ol><li>Pour qu’une importation réussisse, au minimum les colonnes <code>v_products_id</code> et <code>v_specials_new_products_price</code> doivent être présentes.</li><li>Le <code>v_products_id</code> fourni lors d’une importation doit être associé à un produit valide.</li><li>La valeur <code>v_specials_new_products_price</code> peut être soit un prix de vente <em>spécifique</em>, par exemple <em>5,99</em>, soit un pourcentage de réduction, par exemple <em>7,5 %</em>. Le prix promotionel pour une valeur de pourcentage de réduction est calculé en utilisant le prix de base actuel du produit.</li><li>À moins que <b><em>Modules::Order Total::Gift Certificates</em></b> ne soit activé et configuré pour permettre aux chèques-cadeaux d’être placés en promotion, ces produits ne peuvent pas être placés en promotion.</li><li>Le prix promotionel d’un produit peut être supprimé de la base de données en incluant une colonne <code>v_dbio_command</code> avec <b>REMOVE</b> pour un products_id spécifique.</li></ol>');
