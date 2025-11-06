<?php
// -----
// Part of the DataBase Import/Export (aka DbIo) plugin, created by Cindy Merkin (cindy@vinosdefrutastropicales.com)
// Copyright (c) 2018, Vinos de Frutas Tropicales.
//

// -----
// Defines the handler's descriptive text.
//
define('DBIO_PRODUCTSDISCOUNTQUANTITY_DESCRIPTION', 'Ce format de rapport prend en charge l’import/export de champs dans les tables <code>products</code> et <code>products_discount_quantity</code> qui sont associées aux informations de remises quantitatives d’un produit. L’enregistrement d’exportation d’un produit inclut son <code>v_products_model</code> comme valeur de référence, mais n’est pas utilisé lors de l’importation. Un enregistrement d’importation correspondant est basé uniquement sur la colonne <code>v_products_id</code> d’un enregistrement.<br><br>Les informations de remise quantitative de chaque produit, si elles sont spécifiées, sont formatées comme suit : <code>q:p[;q:p]...</code> où <b>q</b> est une quantité de produit unique qui permet d’obtenir un prix réduit de <b>p</b>.<br><br>La valeur <code>products_discount_type</code> d’un produit peut être l’une des suivantes : <ol start="0"><li><b>None</b> : Aucune remise ; toute quantité de remise définie sera supprimée.</li><li><b>Percentage</b> : Le prix est un pourcentage de remise.</li><li><b>Actual Price</b> : Le prix est le prix réel réduit.</li><li><b>Amount Off</b> : Le prix spécifié est le montant fixe de la remise.</li></ol><br>La valeur <code>products_discount_type_from</code> d’un produit peut être l’une des suivantes : <ol start="0"><li><b>Price</b> : Tout pourcentage ou montant de remise est déduit du prix « normal » du produit.</li><li><b>Special</b> : Tout pourcentage ou montant de remise est déduit du prix « promo » du produit.</li></ol>');
