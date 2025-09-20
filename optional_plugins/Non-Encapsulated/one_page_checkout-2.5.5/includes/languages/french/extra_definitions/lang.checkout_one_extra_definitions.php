<?php
// -----
// Part of the One-Page Checkout plugin, provided under GPL 2.0 license by lat9
// Copyright (C) 2013-2022, Vinos de Frutas Tropicales.  All rights reserved.
//
// Last updated for OPC v2.4.2.
//
$define = [
    // when free shipping for orders over $XX.00 is active
    'FREE_SHIPPING_TITLE' => 'Livraison gratuite',
    'FREE_SHIPPING_DESCRIPTION' => 'Livraison gratuite pour les commandes supérieures à %s',

    'ERROR_GUEST_CHECKOUT_PAGE_DISALLOWED' => 'L\'accès à cette page nécessite un compte enregistré. Vous pouvez créer un compte en utilisant notre page de <a href="' . zen_href_link(FILENAME_LOGIN, '', 'SSL') . '">connexion</a>.',
    'WARNING_GUEST_CHECKOUT_NOT_AVAILABLE' => 'Désolé, notre système de paiement en tant qu\'invité est temporairement indisponible. Vous pouvez continuer votre paiement en vous connectant ou en créant un compte.',

    'WARNING_GUEST_NO_GCS' => '<b>Remarque</b> : vous devez avoir (ou créer) un compte dans notre boutique pour acheter des chèques-cadeaux.',
    'WARNING_GUEST_GCS_RESET' => 'Si vous continuez la <em>procédure de paiement</em>, toutes les informations que vous avez saisies lors du « Payement en tant qu\'invité » seront perdues.',
    'WARNING_GUEST_REMOVE_GC' => 'Pour continuer avec le « Paiement en tant qu\'invité », supprimez le(s) chèque(s)-cadeau(x) de votre panier <em>avant</em> de cliquer sur un bouton ou un lien « Paiement ».',

// -----
// This constant is used when an order's temporary shipping address has been overridden by paypalwpp's
// processing and identifies the address that was overridden by paypalwpp.  The message is both
// displayed to the customer and recorded as a customer-visible orders-status-history record.
//
    'WARNING_PAYPAL_SENDTO_CHANGED' => 'L\'adresse de livraison que vous avez saisie (%s) a été remplacée par l\'adresse que vous avez sélectionnée sur PayPal. Veuillez vérifier votre commande et nous contacter si une mise à jour est nécessaire.',
    'WARNING_PAYPALWPP_TOTAL_CHANGED' => 'Le montant total de votre commande a changé en fonction de l\'adresse de livraison que vous avez sélectionnée sur PayPal. Veuillez vérifier votre commande et la soumettre à nouveau.',

// -----
// This language-constant can be used in the store's update to /includes/modules/[YOUR_TEMPLATE/]information.php
// to point the customer to the order_status page link.
//
    'BOX_INFORMATION_ORDER_STATUS' => 'Statut de la commande',
];
return $define;
