<?php
// -----
// Part of the One-Page Checkout plugin, provided under GPL 2.0 license by lat9.
// Copyright (C) 2013-2024, Vinos de Frutas Tropicales.  All rights reserved.
//
// Last updated for OPC v2.5.0
//
$define = [
    'NAVBAR_TITLE_1' => 'Paiement',
    'NAVBAR_TITLE_2' => 'Sélectionnez les moyens d’Expédition/de Paiement et confirmez votre commande',

    'HEADING_TITLE' => 'Paiement',
    'BUTTON_SAVE_CHANGES_ALT' => 'Enregistrer les modifications',
    'BUTTON_SAVE_CHANGES_TITLE' => 'Enregistrer les modifications apportées à cette adresse',
    'BUTTON_CANCEL_CHANGES_ALT' => 'Annuler',
    'BUTTON_CANCEL_CHANGES_TITLE' => 'Annuler toutes les modifications apportées à cette adresse',

    'TEXT_ADD_TO_ADDRESS_BOOK' => 'Ajouter au carnet d’adresses',
    'TITLE_ADD_TO_ADDRESS_BOOK' => 'Cochez cette case pour ajouter cette adresse à votre carnet d’adresses personnel',

    'TITLE_CONTACT_INFORMATION' => 'Coordonnées',
    'ENTRY_EMAIL_ADDRESS_CONF' => 'Confirmez votre email:',
    'ENTRY_EMAIL_ADDRESS_CONF_TEXT' => '*',
    'ERROR_EMAIL_MUST_MATCH_CONFIRMATION' => 'L’<em>adresse e-mail</em> doit être identique à l’<em>adresse e-mail de confirmation</em>.',
    'TEXT_CONTACT_INFORMATION' => 'Nous utiliserons ces informations <em>uniquement</em> pour vous contacter à propos de cette commande.',

    'TEXT_SELECT_FROM_SAVED_ADDRESSES' => 'Sélectionnez parmi les adresses enregistrées',

    'TABLE_HEADING_SHIPPING_ADDRESS' => 'Adresse de livraison',
    'TEXT_CHOOSE_SHIPPING_DESTINATION' => 'Votre commande sera expédiée à l’adresse ci-dessus ou vous pouvez modifier l’adresse de livraison en cliquant sur le bouton <em>Modifier l’adresse</em>.',
    'TITLE_SHIPPING_ADDRESS' => 'Adresse de livraison :',

    'TABLE_HEADING_SHIPPING_METHOD' => 'Mode de livraison :',
    'TEXT_CHOOSE_SHIPPING_METHOD' => '',
    'TITLE_PLEASE_SELECT' => 'Veuillez sélectionner',
    'TEXT_ENTER_SHIPPING_INFORMATION' => 'Il s’agit actuellement du seul mode de livraison disponible pour cette commande.',
    'TITLE_NO_SHIPPING_AVAILABLE' => 'Non disponible pour le moment',
    'TEXT_NO_SHIPPING_AVAILABLE' => '<span class="alert">Désolé, nous n’expédions pas dans votre région pour le moment.</span><br>Veuillez nous contacter pour d’autres dispositions.',

    'TABLE_HEADING_COMMENTS' => 'Instructions spéciales ou commentaires',

    'ERROR_PLEASE_RESELECT_SHIPPING_METHOD' => 'Les options d’expédition disponibles ou le prix du mode de livraison que vous avez choisie ont changé. Veuillez resélectionner/vérifier le mode de livraison souhaité.',
    'ERROR_UNKNOWN_SHIPPING_SELECTION' => 'Un mode de livraison inconnu a été soumis. Veuillez contacter le propriétaire du magasin.',
    'ERROR_INVALID_REQUEST' => 'Une demande inconnue a été reçue. Veuillez contacter le propriétaire du magasin.',

    'ERROR_AJAX_SHIPPING_SELECTION' => 'Le mode de livraison que vous avez sélectionné n’a pas été compris. Veuillez contacter le propriétaire du magasin.',

// -----
// These definitions are prepended to any address-value-related error message as an indication
// of which address-field is being referenced.
//
    'ERROR_IN_BILLING' => '[Facturation] : ',
    'ERROR_IN_SHIPPING' => '[Expédition] : ',

// -----
// This message is used by OPC's observer and AJAX classes when the base OPC class indicates an error that requires
// a full page-reload, implying that something got "out of sync" in the OPC class' records.  Unlike
// the JS_ type messages, single quotes don't need (or want) to be double-escaped!
//
// If a customer receives this message during checkout, there's a PHP Warning logged to indicate
// the underlying issue.
//
    'ERROR_OPC_ADDRESS_INVALID' => 'Désolé, nous n’avons pas pu valider une ou plusieurs adresses de cette commande ; veuillez les vérifier et les ressaisir si nécessaire.',

// -----
// NOTE: The following constants are used in the page's jscript_main.php file as javascript text literals or
// for messages displayed to the customer during AJAX processing issues (displayed in a 'alert'.
//
// If you want to include single-quotes in a value, you'll need to specify them as ’; for a new-line,
// use \n.  Just be sure to keep a constant's string within a set of single-quotes and you should be good-to-go!
//
    'JS_ERROR_SESSION_TIMED_OUT' => 'Désolé, votre session a expiré.\n\nLes articles de votre panier ont été enregistrés et seront restaurés lors de votre prochaine connexion.',
    'JS_ERROR_OPC_NOT_ENABLED' => 'Notre processus de paiement accéléré est temporairement indisponible. Vous serez redirigé vers notre processus de paiement alternatif.',

    'JS_ERROR_AJAX_TIMEOUT' => 'La mise à jour des détails de votre commande prend un peu plus de temps que d’habitude.',
    'JS_ERROR_AJAX_SHIPPING_TIMEOUT' => 'La mise à jour des frais de livraison de votre commande prend un peu plus de temps que d’habitude.',
    'JS_ERROR_AJAX_PAYMENT_TIMEOUT' => 'La mise à jour du mode de paiement de votre commande prend un peu plus de temps que d’habitude.',
    'JS_ERROR_AJAX_SET_ADDRESS_TIMEOUT' => 'La définition de l’adresse de votre commande prend un peu plus de temps que d’habitude.',
    'JS_ERROR_AJAX_RESTORE_ADDRESS_TIMEOUT' => 'La restauration des valeurs d’adresse de votre commande prend un peu plus de temps que d’habitude.',
    'JS_ERROR_AJAX_VALIDATE_ADDRESS_TIMEOUT' => 'La validation des détails de l’adresse de votre commande prend un peu plus de temps que d’habitude.',

    'JS_ERROR_AJAX_RESTORE_CUSTOMER_TIMEOUT' => 'La restauration de vos coordonnées client prend un peu plus de temps que d’habitude.',
    'JS_ERROR_AJAX_VALIDATE_CUSTOMER_TIMEOUT' => 'La validation des informations de votre client prend un peu plus de temps que d’habitude.',

    'JS_ERROR_CONTACT_US' => '  Veuillez fermer ce message et réessayer.\n\nSi vous continuez à recevoir ce message, veuillez nous contacter.',

    'ERROR_NO_SHIPPING_SELECTED' => 'Vous devez choisir un mode de livraison pour votre commande avant que la commande puisse être confirmée.',
    'TITLE_BILLING_ADDRESS' => 'Adresse de facturation :',
    'TITLE_BILLING_SHIPPING_ADDRESS' => 'Adresse de facturation/livraison :',

// -----
// This definition is used on the default page display when there is a javascript/jQuery error (or when javascript is disabled).
// The customer can't checkout via the OPC so we'll give them a link through which they can access the
// "normal" 3-page checkout process.  
//
// NOTE: The %s value in the link is filled in by the checkout_one page's template to contain
// a link back to the checkout_shipping page with OPC disabled.
//
    'TEXT_NOSCRIPT_JS_ERROR' => 'Désolé, mais notre processus de paiement accéléré ne peut pas être utilisé. Cliquez <a href="%s">ici</a> pour utiliser notre processus de paiement alternatif.',

// ----- From checkout_payment -----

    'TABLE_HEADING_BILLING_ADDRESS' => 'Adresse de facturation',
    'TEXT_SELECTED_BILLING_DESTINATION' => 'Votre adresse de facturation est indiquée ci-dessus. L’adresse de facturation doit correspondre à l’adresse figurant sur votre relevé de carte de crédit. Vous pouvez modifier l’adresse de facturation en cliquant sur le bouton <em>Modifier l’adresse</em>.',

    'TABLE_HEADING_PAYMENT_METHOD' => 'Mode de paiement',
    'TEXT_SELECT_PAYMENT_METHOD' => 'Veuillez sélectionner un mode de paiement pour cette commande.',
    'TEXT_ENTER_PAYMENT_INFORMATION' => '',

    'TITLE_NO_PAYMENT_OPTIONS_AVAILABLE' => 'Non disponible pour le moment',
    'TEXT_NO_PAYMENT_OPTIONS_AVAILABLE' => '<span class="alert">Désolé, nous n’acceptons pas les paiements de votre région pour le moment.</span><br />Veuillez nous contacter pour d’autres dispositions.',

    'TABLE_HEADING_CONDITIONS' => '<span class="termsconditions">Termes et conditions</span>',
    'TEXT_CONDITIONS_DESCRIPTION' =>  '<span class="termsdescription">Veuillez prendre connaissance des termes et conditions liés à cette commande en cochant la case suivante. Les termes et conditions peuvent être consultés <a href="' . zen_href_link(FILENAME_CONDITIONS, '', 'SSL') . '"><span class="pseudolink">ici</span></a>.</span>',
    'TEXT_CONDITIONS_CONFIRM' => '<span class="termsiagree">J’ai lu et accepté les termes et conditions liés à cette commande.</span>',

    'TEXT_CHECKOUT_AMOUNT_DUE' => 'Montant total dû : ',
    'TEXT_YOUR_TOTAL' => 'Votre total',

// ----- From checkout_confirmation -----
    'HEADING_BILLING_ADDRESS' => 'Informations de facturation/paiement',
    'HEADING_DELIVERY_ADDRESS' => 'Informations sur la livraison/expédition',
    'HEADING_SHIPPING_METHOD' => 'Mode de livraison :',
    'HEADING_PAYMENT_METHOD' => 'Mode de paiement :',
    'HEADING_PRODUCTS' => 'Contenu du panier',
    'HEADING_TAX' => 'Taxe',
    'HEADING_ORDER_COMMENTS' => 'Instructions spéciales ou commentaires de commande',
// no comments entered
    'NO_COMMENTS_TEXT' => 'Aucun',

    'TEXT_USE_BILLING_FOR_SHIPPING' =>  'Adresse de livraison, identique à celle de facturation ?',
    'ALT_TEXT_APPLY_DEDUCTION' => 'Appliquer',

    'TEXT_CONFIRMATION_EMAILS_SENT_TO' => 'Une confirmation de cette commande sera envoyée par courrier électronique à <b>%s</b>.',  //-The %s is filled in with the customer's email address

// -----
// You can modify this definition to change the name of the image-button/alt-text used to confirm the customer's order.
//
    'BUTTON_IMAGE_CHECKOUT_ONE_CONFIRM' => 'button_confirm_order.gif',
    'BUTTON_CHECKOUT_ONE_CONFIRM_ALT' => 'Confirmer la commande',

    'BUTTON_IMAGE_CHECKOUT_ONE_REVIEW' => 'button_continue_checkout.gif',
    'BUTTON_CHECKOUT_ONE_REVIEW_ALT' => 'Vérifier la commande',

    'CHECKOUT_ONE_LOADING' => 'confirmation_one_loading.gif',
    'CHECKOUT_ONE_LOADING_ALT' => 'Veuillez patienter s’il vous plaît ...',

// -----
// Use these definitions to set any messages you might want to convey to your customers on the checkout-one page.
//
    // -----
    // This constant defines the instructions you want displayed at the very top of the "checkout_one" page, before the form entry.
    //
    'TEXT_CHECKOUT_ONE_TOP_INSTRUCTIONS' => '', //-Displayed within a set of <p>...</p> tags if not empty.

    // -----
    // These constants define the instructions that are inserted below the shopping-cart/totals and above the "confirm order" button.
    //
    'TEXT_CHECKOUT_ONE_INSTRUCTION_LABEL' => 'Instructions en bas', //-Displays as the "legend" value for the fieldset that surrounds the message below
    'TEXT_CHECKOUT_ONE_INSTRUCTIONS' => 'Instructions en bas',      //-Displayed within a set of <p>...</p> tags if not empty
];
return $define;
