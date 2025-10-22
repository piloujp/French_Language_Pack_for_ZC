<?php
// -----
// Part of the One-Page Checkout plugin, provided under GPL 2.0 license by lat9.
// Copyright (C) 2013-2022, Vinos de Frutas Tropicales.  All rights reserved.
//
$define = [
    'NAVBAR_TITLE_1' => 'Paiement',
    'NAVBAR_TITLE_2' => 'Confirmez votre commande',

    'HEADING_TITLE' => 'Finalisez et confirmez votre commande',

    'HEADING_BILLING_ADDRESS' => 'Informations de facturation/paiement',
    'HEADING_DELIVERY_ADDRESS' => 'Informations sur la livraison/expédition',
    'HEADING_SHIPPING_METHOD' => 'Mode de livaison :',
    'HEADING_PAYMENT_METHOD' => 'Mode de paiement :',
    'HEADING_PRODUCTS' => 'Contenu du panier',
    'HEADING_TAX' => 'Taxe',
    'HEADING_ORDER_COMMENTS' => 'Instructions spéciales ou commentaires de commande',
// no comments entered
    'NO_COMMENTS_TEXT' => 'Aucun',

    'BILLING_ADDRESS' => '(Adresse de facturation) ',
    'SHIPPING_ADDRESS' => '(Adresse de livraison) ',

    'CAUTION_SHIPPING_CHANGED' => 'Les frais d’expédition ont été recalculés, car l’adresse de livraison a été modifiée.',
    'ERROR_INVALID_SHIPPING_SELECTION' => 'Sélection de livraison non valide. Veuillez effectuer une autre sélection.',
    'ERROR_PLEASE_RESELECT_SHIPPING_METHOD' => 'Vos options de livraison disponibles ont changé. Veuillez resélectionner votre mode de livraison souhaité.',

    'NO_JAVASCRIPT_MESSAGE' => 'JavaScript n’est pas activé ; veuillez cliquer sur le bouton de confirmation ci-dessous pour traiter votre commande.',
    'CHECKOUT_ONE_CONFIRMATION_LOADING' => 'confirmation_one_loading.gif',
    'CHECKOUT_ONE_CONFIRMATION_LOADING_ALT' => 'Veuillez patienter s’il vous plaît ...',
    'ERROR_NOJS_ORDER_CHANGED' => 'Les détails de votre commande ont changé. Veuillez vérifier les détails actuels et soumettre à nouveau.',

    'ERROR_INVALID_TEMPORARY_ENTRIES' => 'Certaines des informations que vous avez saisies ne sont pas correctes, veuillez les saisir à nouveau.',

// -----
// If your store uses a payment method that needs "additional time" to process (like "Ceon Manual Card"), you can add some instructions
// to your customers on the checkout_one_confirmation page letting them know that the processing might take a while!
//
    'CHECKOUT_ONE_CONFIRMATION_INSTRUCTIONS' => '',
];
return $define;
