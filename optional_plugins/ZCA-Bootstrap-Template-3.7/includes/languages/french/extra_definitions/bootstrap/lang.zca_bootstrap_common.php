<?php
/*
 * BOOTSTRAP v3.7.2
 */
// -----
// Part of the Bootstrap template, defining commonly-used phrases and phrases unique to the bootstrap template.
//
$define = [
    'BOOTSTRAP_PLEASE_SELECT' => 'Veuillez sélectionner ...',
    'BOOTSTRAP_CURRENT_ADDRESS' => ' (Actuellement sélectionnée)',

// -----
// Additional buttons.
//
    'BUTTON_BACK_TO_TOP_TITLE' => 'Retour en haut',

// -----
// Used on the products_all and product listing for the alpha-filter dropdown.
// Note: Defined in multiple language files for zc158 and zc200!
//
    'TEXT_SHOW' => 'Filtrer par :',

// -----
// Used during checkout and on various address-rendering pages.
//
    'TEXT_SELECT_OTHER_PAYMENT_DESTINATION' => 'Veuillez sélectionner l\'adresse de facturation préférée si la facture de cette commande doit être livrée ailleurs.',
    'TEXT_SELECT_OTHER_SHIPPING_DESTINATION' => 'Veuillez sélectionner l\'adresse de livraison préférée si cette commande doit être livrée ailleurs.',
    'NEW_ADDRESS_TITLE' => 'Entrez une nouvelle adresse',
    'TEXT_PRIMARY_ADDRESS' => ' (Adresse principale)',
    'PRIMARY_ADDRESS' => ' (Adresse principale)',
    'TABLE_HEADING_ADDRESS_BOOK_ENTRIES' => 'Choisissez parmi les entrées de votre carnet d\'adresses',

// -----
// Used on the product*_info pages.
//
    'TEXT_MULTIPLE_IMAGES' => ' Images supplémentaires ',
    'TEXT_SINGLE_IMAGE' => ' Image plus grande ',
    'PREV_NEXT_FROM' => ' depuis ',
    'IMAGE_BUTTON_PREVIOUS' => 'Article précédent',
    'IMAGE_BUTTON_NEXT' => 'Article suivant',
    'IMAGE_BUTTON_RETURN_TO_PRODUCT_LIST' => 'Retour à la liste des produits',
    'MODAL_ADDL_IMAGE_PLACEHOLDER_ALT' => 'Images supplémentaires modales pour %s',   //- %s is filled in with the product's name

// -----
// Used on the product_music_info page.
//
    'TEXT_ARTIST_URL' => 'Pour plus d\'informations, veuillez visiter la <a href="%s" target="_blank">page Web</a> de l\'artiste.',
    'TEXT_PRODUCT_RECORD_COMPANY' => 'Maison de disques : ',

// -----
// Used on the shopping_cart page.
//
    'TEXT_CART_MODAL_HELP' => '[aide (?)]',
    'HEADING_TITLE_CART_MODAL' => 'Panier visiteurs / Panier membres',
    'TEXT_CART_ARIA_HEADING_DELETE_COLUMN' => 'Cliquez sur l\'icône dans cette colonne pour le supprimer de votre panier.',
    'TEXT_CART_ARIA_HEADING_UPDATE_COLUMN' => 'Cliquez sur l\'icône dans cette colonne pour mettre à jour la quantité dans votre panier.',

// -----
// Used on various pages that display the cart's contents.
//
    'SUB_TITLE_TOTAL' => 'Total :',

// -----
// Used by various product listing pages, e.g. SNAF.
//
    // -----
    // The two image-heading constants are used when a site chooses to display listings
    // in table-mode (PRODUCT_LISTING_COLUMNS_PER_ROW is set to '1').  If your site wants
    // the image-heading to *always* be displayed, set the TABLE_HEADING_IMAGE value to
    // the text you desire.  If that value is set to an empty string, then a screen-reader-only
    // heading is used along with the TABLE_HEADING_IMAGE_SCREENREADER value.
    //
    'TABLE_HEADING_IMAGE' => '',
    'TABLE_HEADING_IMAGE_SCREENREADER' => 'Image du produit',

    'TABLE_HEADING_PRODUCTS' => 'Nom du produit',
    'TABLE_HEADING_MANUFACTURER' => 'Fabricant',
    'TABLE_HEADING_PRICE' => 'Price',
    'TABLE_HEADING_WEIGHT' => 'Poids',
    'TABLE_HEADING_BUY_NOW' => 'Acheter maintenant',
    'TEXT_NO_PRODUCTS' => 'Il n\'y a aucun produit à lister dans cette catégorie.',
    'TEXT_NO_PRODUCTS2' => 'Aucun produit n\'est disponible auprès de ce fabricant.',

// -----
// Used by various /modalboxes
//
    'TEXT_MODAL_CLOSE' => 'Fermer',
    'TEXT_MORE_INFO' => '[Plus d\'infos]',
    'ARIA_REVIEW_STAR' => 'étoile',
    'ARIA_REVIEW_STARS' => 'étoiles',

// -----
// Overriding definition for the login page, removing unwanted javascript.
//
    'TEXT_VISITORS_CART' => '<strong>Remarque :</strong> Si vous avez déjà effectué des achats chez nous et laissé quelque chose dans votre panier, pour votre commodité, le contenu sera fusionné si vous vous reconnectez.',

// -----
// Used by the (optional) AJAX search feature.
//
    'TEXT_AJAX_SEARCH_TITLE' => 'Que pouvons-nous vous aider à trouver ?',
    'TEXT_AJAX_SEARCH_PLACEHOLDER' => 'Rechercher ici...',
    'TEXT_AJAX_SEARCH_RESULTS' => 'Total de %u résultats trouvés.',
    'TEXT_AJAX_SEARCH_VIEW_ALL' => 'Tout voir',

// -----
// ARIA label text, used in the common header.
//
    'TEXT_HEADER_ARIA_LABEL_NAVBAR' =>'Barre de navigation',
    'TEXT_HEADER_ARIA_LABEL_LOGO' => 'Logo du site',

// -----
// <h1> text for index pages where the 'normal' heading-text isn't used by a
// store ... for accessibility.
//
// Note: For zc200, this constant will be in /includes/languages/english/lang.index.php.
//
    'HEADING_TITLE_SCREENREADER' => 'Voir le contenu supplémentaire ci-dessous',
];
return $define;
