<?php
// -----
// Part of the One-Page Checkout plugin, provided under GPL 2.0 license by lat9 (cindy@vinosdefrutastropicales.com).
// Copyright (C) 2022, Vinos de Frutas Tropicales.  All rights reserved.
//
// Last updated for OPC v2.4.2.
//
$define = [];
if (defined('CHECKOUT_ONE_ENABLED') && CHECKOUT_ONE_ENABLED == 'true') {
    $define['MODULE_ORDER_TOTAL_GV_REDEEM_INSTRUCTIONS'] = '<p>Pour utiliser les fonds ' . TEXT_GV_NAME . ' déjà présents sur votre compte, saisissez le montant que vous souhaitez appliquer dans la case « Appliquer le montant ». Vous devrez choisir un mode de paiement, puis cliquer sur le bouton Soumettre en bas de la page pour appliquer les fonds à votre commande.</p><p>Si vous utilisez un <em>nouveau</em> ' . TEXT_GV_NAME . ', vous devez saisir le numéro dans la case à côté de « Code de réduction ». Le montant utilisé sera ajouté à votre compte lorsque vous cliquerez sur le bouton à droite.</p>';
}
return $define;
