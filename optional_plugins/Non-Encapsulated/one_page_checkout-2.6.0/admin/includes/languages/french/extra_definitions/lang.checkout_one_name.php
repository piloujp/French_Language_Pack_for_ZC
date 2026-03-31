<?php
// -----
// Part of the One-Page Checkout plugin, provided under GPL 2.0 license by lat9 (cindy@vinosdefrutastropicales.com).
// Copyright (C) 2013-2026, Vinos de Frutas Tropicales.  All rights reserved.
//
// Last updated: OPC v2.6.0
//
$defines = [
    'BOX_TOOLS_CHECKOUT_ONE', 'Paramètres pour le paiement en une seule page',

    'ERROR_ACTION_INVALID_FOR_GUEST_CUSTOMER', 'L’action demandée (%s) ne peut pas être effectuée sur le client invité <em>One-Page Checkout</em>.',
    'ERROR_STORESIDE_CONFIG', 'Le plugin <em>One-Page Checkout</em> a été désactivé. Le fichier « %s » est nécessaire au bon fonctionnement du plugin.',

    'ICON_GUEST_ALT', 'Paiement en tant qu’invité',

    'TEXT_GUEST_CHECKOUT', 'Commande passée via le paiement en tant qu’invité',
    'TEXT_OPC_INSTALLED', 'Le plugin <em>One-Page Checkout</em> [%s] a été installé avec succès.',
    'TEXT_OPC_UPDATED', 'Le plugin <em>One-Page Checkout</em> a été mis à niveau avec succès de [%1$s] à [%2$s].',
];

$defines['ICON_GUEST_CHECKOUT'] = '<i class="fa fa-user-secret" aria-hidden="true" title="' . $defines['ICON_GUEST_ALT'] . '"></i>';

return $defines;
