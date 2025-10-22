<?php
// -----
// Part of the "Download Already Purchased" plugin created by lat9.
// Copyright (C) 2017-2025, Vinos de Frutas Tropicales
//
// NOTE:  These messages make use of the PHP variable-ordering (to make translations easier); make sure that you ARE NOT
// enclosing the message text using double-quotes ("), since the $ in the variable name will be improperly interpreted
// as a PHP variable!
//

// -----
// This messages, issued by the plugin's "extra_cart_action" and "observer" processing, lets the customer know that they've got an
// active download link, so they don't need to re-purchase.  For each message, there's one form used by the cart-action and one
// used by the observer; the following "sprintf" variables are used in these messages:
//
// %1$s ... The name of the download product, as retrieved from the orders_products table.
// %2$s ... Either a link to the associated account_history_info page to reference the associated customer order or a link to the contact_us page.
//
return [
    'DAP_MESSAGE_DOWNLOAD_AVAILABLE_NOT_ADDED' => 'Vous avez un téléchargement actif disponible pour <em>%1$s</em> ! Cliquez <a href="%2$s">ici</a> pour accéder à ce téléchargement ; le produit n’a pas été ajouté à votre panier.',

    'DAP_MESSAGE_DOWNLOAD_EXPIRED_CALL_US_NOT_ADDED' => 'Vous avez déjà acheté <em>%1$s</em>, mais votre lien de téléchargement a actuellement expiré. <a href="%2$s">Contactez-nous</a> et nous réactiverons ce téléchargement ; le produit n’a pas été ajouté à votre panier.',

    'DAP_MESSAGE_DOWNLOAD_AVAILABLE_REMOVED' => 'Vous avez un téléchargement actif disponible pour <em>%1$s</em> ! Cliquez <a href="%2$s">ici</a> pour accéder à ce téléchargement ; le produit a été supprimé de votre panier.',

    'DAP_MESSAGE_DOWNLOAD_EXPIRED_CALL_US_REMOVED', 'Vous avez déjà acheté <em>%1$s</em>, mais votre lien de téléchargement a actuellement expiré. <a href="%2$s">Contactez-nous</a> et nous réactiverons ce téléchargement ; le produit a été supprimé de votre panier.',
];
