<?php
// -----
// Part of the VAT4EU plugin by Cindy Merkin a.k.a. lat9 (cindy@vinosdefrutastropicales.com)
// Copyright (c) 2017-2024 Vinos de Frutas Tropicales
//
// Last updated: v3.2.0
//
// -----
// If VAT4EU hasn't been installed in the admin or removed, don't process these
// definitions since the missing constant will possibly result in a PHP Fatal error!
//
if (!defined('VAT4EU_MIN_LENGTH')) {
    return [];
}

$define = [
    // -----
    // These two definitions are used in different spots.
    //
    // 1) VAT4EU_ENTRY_VAT_NUMBER is used during VAT Number "gathering" and should not be an empty string.
    // 2) VAT4EU_DISPLAY_VAT_NUMBER is used when formatting an address-block with a previously-entered VAT Number.
    //    If you don't want to precede the actual VAT Number with that text, just set the value to ''; otherwise,
    //    remember to keep the final space so that there's separation from the text and the actual VAT Number!
    //
    'VAT4EU_ENTRY_VAT_NUMBER' => 'Numéro de TVA :',
    'VAT4EU_DISPLAY_VAT_NUMBER' => 'Numéro de TVA : ',

    // -----
    // These definitions are used by tpl_modules_vat4eu_display.php's link to the popup_vat4eu_formats page.
    //
    'VAT4EU_WHATS_THIS' => 'Qu\'est-ce que c\'est ?',
    'VAT4EU_CHANGE_IN_ADDRESS_BOOK' => 'Pour modifier le « numéro de TVA » à utiliser pour cette commande, veuillez mettre à jour la valeur dans votre <a href="%s">carnet d\'adresses</a>, puis revenez à la caisse.',

    'VAT4EU_ENTRY_VAT_MIN_ERROR' => 'Votre <em>numéro de TVA</em> doit contenir au moins ' . VAT4EU_MIN_LENGTH . ' caractères.',
    'VAT4EU_ENTRY_VAT_PREFIX_INVALID' => 'Votre <em>numéro de TVA</em> doit commencer par <b>%1$s</b>, car l\'adresse est dans <em>%2$s</em>.',
    'VAT4EU_ENTRY_REQUIRED_ERROR' => 'Votre <em>numéro de TVA</em> est un champ obligatoire.',

    'VAT4EU_VAT_NOT_VALIDATED' => 'Nous n\'avons pas pu valider le <em>numéro de TVA</em> que vous avez saisi. Veuillez ressaisir la valeur ou <a href="' . zen_href_link(FILENAME_CONTACT_US, '', 'SSL') . '">nous contacter</a> pour obtenir de l\'aide.',
    'VAT4EU_APPROVAL_PENDING' => 'Une fois votre <em>numéro de TVA</em> (%s) validé, vos commandes éligibles recevront automatiquement une <em>exonération de TVA</em>. Veuillez <a href="' . zen_href_link(FILENAME_CONTACT_US, '', 'SSL') . '">nous contacter</a> si vous avez des questions.',

    'VAT4EU_MESSAGE_YOUR_VAT_REFUND' => 'Votre commande donne droit à un <em>remboursement de TVA</em>, d\'un montant de %s.',     //- The $s is the formatted monetary amount of the refund

    'VAT4EU_TEXT_VAT_REFUND' => 'Remboursement de la TVA :',
];
return $define;
