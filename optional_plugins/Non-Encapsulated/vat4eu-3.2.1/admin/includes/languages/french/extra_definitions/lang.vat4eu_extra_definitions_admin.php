<?php
// -----
// Part of the VAT4EU plugin by Cindy Merkin a.k.a. lat9 (cindy@vinosdefrutastropicales.com)
// Copyright (c) 2017-2024 Vinos de Frutas Tropicales
//
// Last updated: v3.2.0
//
$define = [
    'VAT4EU_TEXT_MESSAGE_INSTALLED' => 'v%s du plugin <em>VAT Mod</em> a été installé avec succès.',
    'VAT4EU_TEXT_MESSAGE_UPDATED' => 'Le plugin <em>VAT4EU</em> a été mis à jour avec succès de la v%1$s à la v%2$s.',

    'VAT4EU_GB_COUNTRY_REMOVED' => 'Le pays « GB » a été supprimé de la liste des <em>pays de l’UE</em> de VAT4EU.',

    'BOX_CONFIG_VAT4EU' => 'TVA pour les pays de l’UE',

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

    'VAT4EU_ENTRY_OVERRIDE_VALIDATION' => 'Annulation de la validation de la TVA :',

    'VAT4EU_CUSTOMERS_HEADING' => 'Numéro de TVA',

    'VAT4EU_ENTRY_VAT_MIN_ERROR' => '<span class="errorText">Au moins %u caractères.</span>',
    'VAT4EU_ENTRY_VAT_PREFIX_INVALID' => '<span class="errorText">Doit commencer par <b>%1$s</b>, puisque l’adresse est dans <em>%2$s</em>.</span>',
    'VAT4EU_ENTRY_VAT_INVALID_CHARS' => '<span class="errorText">Caractères non valides détectés.</span>',
    'VAT4EU_ENTRY_VAT_VIES_INVALID' => '<span class="errorText">Échec de la validation VIES.</span>',
    'VAT4EU_ENTRY_VAT_REQUIRED' => '<span class="errorText">Ce champ est obligatoire</span>',

    // -----
    // Used as in the title attribute when displaying VAT Numbers' status in Customers->Customers.
    //
    'VAT4EU_ADMIN_OVERRIDE' => 'Remplacée par l’administrateur',
    'VAT4EU_VIES_OK' => 'Validé par VIES',
    'VAT4EU_NOT_VALIDATED' => 'Nécessite une validation de l’administrateur',
    'VAT4EU_VIES_NOT_OK' => 'Trouvé non valide par VIES',

    // -----
    // Used as the title attribute for the heading sorts in Customers->Customers.
    //
    'VAT4EU_SORT_ASC' => 'Trier par statut, croissant',
    'VAT4EU_SORT_DESC' => 'Trier par statut, décroissant',

    // -----
    // Issued during Edit Orders processing if the admin has changed either the VAT Number or its
    // validation status.
    //
    'VAT4EU_EO_CUSTOMER_UPDATE_REQUIRED' => 'Le numéro de TVA ou son statut a changé <em>pour cette commande uniquement</em> ! Modifiez les informations du client pour que cette modification soit disponible pour les achats futurs.',
];
return $define;
