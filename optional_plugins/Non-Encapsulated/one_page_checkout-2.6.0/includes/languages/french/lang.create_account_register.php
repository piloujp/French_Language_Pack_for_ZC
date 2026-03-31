<?php
// -----
// Part of the One-Page Checkout plugin, provided under GPL 2.0 license by lat9
// Copyright (C) 2018-2026, Vinos de Frutas Tropicales.  All rights reserved.
//
// Last updated: OPC v2.6.0
//
$define = [
    'NAVBAR_TITLE_REGISTER' => 'Enregistrement de compte',
    'TEXT_INSTRUCTIONS' => '<strong class="note">Remarque :</strong> si vous possédez déjà un compte chez nous, veuillez vous connecter sur notre page de <a href="%s">connexion</a>. Nous vous demanderons vos coordonnées une fois que vous serez prêt à passer une commande.',
    'ENTRY_EMAIL_ADDRESS_CONFIRM' => 'Confirmez votre email :',
    'ENTRY_EMAIL_FORMAT' => 'Format de courrier électronique :',
    'BUTTON_SUBMIT_REGISTER_ALT' => 'S’enregistrer',

    'HEADING_CONTACT_DETAILS' => 'Coordonnées',

    'ENTRY_EMAIL_MISMATCH_ERROR' => 'Les entrées <em>E-mail</em> et <em>Confirmer l’e-mail</em> ne correspondent pas.',
    'ENTRY_EMAIL_MISMATCH_ERROR_JS' => '* Les entrées « E-mail » et « Confirmer l’e-mail » ne correspondent pas.',

    // -----
    // Set the placeholder for the telephone number for registered-account creations.  The value's set
    // to '*' if the configuration setting isn't available or isn't 'empty'; an empty string otherwise.
    //
    'TEXT_TELEPHONE_PLACEHOLDER' => (defined('CHECKOUT_ONE_REGISTERED_ACCT_TELEPHONE_MIN') && empty(CHECKOUT_ONE_REGISTERED_ACCT_TELEPHONE_MIN)) ? '' : '*',
];
return $define;
