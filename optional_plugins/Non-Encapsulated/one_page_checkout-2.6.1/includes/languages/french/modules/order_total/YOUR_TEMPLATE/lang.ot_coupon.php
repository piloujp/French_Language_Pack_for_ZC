<?php
// -----
// Part of the One-Page Checkout plugin, provided under GPL 2.0 license by lat9 (cindy@vinosdefrutastropicales.com).
// Copyright (C) 2022, Vinos de Frutas Tropicales.  All rights reserved.
//
// Last updated for OPC v2.4.2.
//
$define = [];
if (defined('CHECKOUT_ONE_ENABLED') && CHECKOUT_ONE_ENABLED === 'true') {
    $define['MODULE_ORDER_TOTAL_COUPON_REDEEM_INSTRUCTIONS'] = '<p>Veuillez saisir votre code promo dans la case ci-dessous. Votre coupon sera appliqué au total et reflété sur l’affichage de votre commande après avoir cliqué sur le bouton à droite ou avoir soumis votre commande. Attention : vous ne pouvez utiliser qu’un seul coupon par commande.</p>';
}
return $define;
