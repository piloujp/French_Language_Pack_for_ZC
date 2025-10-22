<?php
// -----
// Part of the "Printable Price List" plugin for Zen Cart.
// $Id: pricelist.php, 2006 paulm
//
$define = [
    'TABLE_HEADING_PRODUCTS' => 'Produit',
    'TABLE_HEADING_MODEL' => 'Modèle',
    'TABLE_HEADING_MANUFACTURER' => 'Fabricant',
    'TABLE_HEADING_WEIGHT' => 'Poids',
    'TABLE_HEADING_PRICE_INC' => 'TTC ',
    'TABLE_HEADING_PRICE_EX' => 'HT ',
    'TABLE_HEADING_NOTES_A' => 'Remarques (A)',
    'TABLE_HEADING_NOTES_B' => 'Remarques (B)',

    'TEXT_PL_PAGE' => 'Page: ',
    'TEXT_PL_HEADER_TITLE' => '%s Liste de prix imprimable',
    'TEXT_PL_HEADER_TITLE_PRINT' => 'Liste de prix imprimable : %s',
    'TEXT_PL_SCREEN_INTRO' => 'Affichage de %s produits, cliquez sur les liens pour obtenir des informations détaillées sur les produits.',
    'TEXT_PL_NOTHING_FOUND' => 'Aucun produit ou catégorie ne correspond à votre recherche, veuillez effectuer une autre sélection.',

    'STORE_NAME_ADDRESS_PL' => str_replace("\n", ' - ', STORE_NAME_ADDRESS),
    'TEXT_PL_AVAIL_TILL' => 'Offre spéciale valable jusqu’au : ',
    'TEXT_PL_SPECIAL' => 'Offre spéciale ',
    'TEXT_PL_PRODUCT_HAS_NO_PRICE' => '--.--',
    'TEXT_PL_CATEGORIES' => 'Toutes les catégories',
    'NAVBAR_TITLE' => 'Printable Price List',
    'TABLE_HEADING_SOH' => 'Stock', // bmoroney
    'TABLE_HEADING_ADDTOCART' => 'Ajouter au panier',//Added by Vartan Kat for Add to cart button
    'PL_TEXT_GROUP_NOT_ALLOWED' => 'Désolé, vous n’êtes pas autorisé à voir cette liste.',
    'PL_PRINT_ME' => 'Imprimer cette page',

    'TEXT_OPTIONS_AVAILABLE' => 'Options disponibles :',
    'TEXT_INCL' => '-',
    'TEXT_OPTION_IS_FILE' => 'Téléchargement de fichier',
    'TEXT_OPTION_IS_TEXT' => 'Saisie de texte',
    'TEXT_OPTION_IS_PER_WORD' => ', par mot',
    'TEXT_OPTION_FREE_WORDS' => ', %u mot(s) gratuit(s).',   //-%u is filled in with the number of free words
    'TEXT_OPTION_IS_PER_LETTER' => ', par lettre',
    'TEXT_OPTION_FREE_LETTERS' => ', %u lettre(s) gratuite(s).',   //-%u is filled in with the number of free letters
];
return $define;
