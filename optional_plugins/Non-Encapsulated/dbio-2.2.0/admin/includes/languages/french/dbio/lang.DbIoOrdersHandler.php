<?php
// -----
// Part of the DataBase Import/Export (aka DbIo) plugin, created by Cindy Merkin (cindy@vinosdefrutastropicales.com)
// Copyright (c) 2016-2017, Vinos de Frutas Tropicales.
//

$define = [
// Defines the handler's descriptive text.
    'DBIO_ORDERS_DESCRIPTION' => 'Ce format de rapport prend en charge l’exportation uniquement de tous les champs de la table « orders ». Les informations n’incluent pas les produits associés ni leurs attributs. Vous pouvez utiliser les filtres fournis pour limiter la sortie de ce rapport en fonction du statut de la commande, d’une plage d’ID de commande ou d’une plage de dates.',
     // Definitions that are used for the export-filters, displayed on Tools->Database I/O Manager
    'DBIO_ORDERS_ORDERS_STATUS_LABEL' => 'Sélectionnez les statuts des commandes à inclure dans l’export :',
    'DBIO_ORDERS_ORDERS_ID_RANGE_LABEL' => 'Choisissez la plage d’ID de commande à exporter. Laissez les deux champs vides pour sélectionner <b>toutes</b> les valeurs d’ID de commande.',
    'DBIO_ORDERS_ORDERS_ID_MIN_LABEL' => 'Minimum (inclus) :',
    'DBIO_ORDERS_ORDERS_ID_MAX_LABEL' => 'Maximum (inclus) :',

    'DBIO_ORDERS_ORDERS_DATE_RANGE_LABEL' => 'Choisissez la plage de dates de commande à exporter. Saisissez les dates au format AAAA-MM-JJ. Laissez les deux champs vides pour sélectionner <b>toutes</b> les dates de commande.',
    'DBIO_ORDERS_ORDERS_DATE_MIN_LABEL' => 'Début :',
    'DBIO_ORDERS_ORDERS_DATE_MAX_LABEL' => 'Fin :',
];

return $define;
