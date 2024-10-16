<?php
/**
 * @copyright Copyright 2003-2024 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: DrByte 2024 Feb 17 Modified in v2.0.0-beta1 $
*/

$define = [
    'TEXT_PRODUCTS_STATUS' => 'Statut produit : ',
    'TEXT_PRODUCTS_VIRTUAL' => 'Produit est virtuel : ',
    'TEXT_PRODUCTS_IS_ALWAYS_FREE_SHIPPING' => 'Livraison toujours gratuite : ',
    'TEXT_PRODUCTS_QTY_BOX_STATUS' => 'Afficher la boîte quantité du produit : ',
    'TEXT_PRODUCTS_DATE_AVAILABLE' => 'Date de disponibilité : ',
    'TEXT_PRODUCT_IS_VIRTUAL' => 'Oui, sauter l\'adresse de livraison',
    'TEXT_PRODUCT_NOT_VIRTUAL' => 'Non, adresse de livraison requise',
    'TEXT_PRODUCT_IS_ALWAYS_FREE_SHIPPING' => 'Oui, livraison toujours gratuite',
    'TEXT_PRODUCT_NOT_ALWAYS_FREE_SHIPPING' => 'Non, règles normales de livraison',
    'TEXT_PRODUCT_SPECIAL_ALWAYS_FREE_SHIPPING' => 'Spécial, la combinaison produit/download exige une adresse de livraison',
    'TEXT_PRODUCTS_QTY_BOX_STATUS_ON' => 'Oui, afficher la boîte quantité',
    'TEXT_PRODUCTS_QTY_BOX_STATUS_OFF' => 'Non, ne pas afficher la boîte quantité',
    'TEXT_PRODUCTS_QTY_BOX_STATUS_EDIT' => 'Avertissement : n\'affiche pas la boîte de quantité, par défaut à la quantité 1',
    'TEXT_PRODUCTS_QTY_BOX_STATUS_PREVIEW' => 'Avertissement : n\'affiche pas la boîte de quantité, par défaut à la quantité 1',
    'TEXT_PRODUCTS_MANUFACTURER' => 'Fabricant de produits : ',
    'TEXT_PRODUCTS_NAME' => 'Nom de produits : ',
    'TEXT_PRODUCTS_DESCRIPTION' => 'Description de produits : ',
    'TEXT_PRODUCTS_QUANTITY' => 'Quantité de produits : ',
    'TEXT_PRODUCTS_IMAGE' => 'Image de produits : ',
    'TEXT_EDIT_PRODUCTS_IMAGE' => 'Modifier l\'image du produit : ',
    'TEXT_PRODUCTS_URL' => 'URL du produit :',
    'TEXT_PRODUCTS_URL_WITHOUT_HTTP' => '<small>(sans http:// ou https://)</small>',
    'TEXT_PRODUCTS_PRICE_INCL' => 'Prix (TTC) : ',
    'TEXT_PRODUCTS_PRICE_EXCL' => 'Prix (HT) : ',
    'TEXT_SHIPPING_PACKAGE_DETAILS' => 'Détails d\'expédition du colis',
    'TEXT_PRODUCTS_WEIGHT' => 'Poids à l\'expédition des produits : ',
    'TEXT_PRODUCTS_LENGTH' => 'Longueur : ',
    'TEXT_PRODUCTS_WIDTH' => 'Largeur : ',
    'TEXT_PRODUCTS_HEIGHT' => 'Hauteur : ',
    'TEXT_PRODUCT_MPN' => 'Référence fabricant du produit (MPN) :',
    'TEXT_PRODUCT_SHIPS_IN_OWN_BOX' => 'Expédié dans sa propre boîte ?',
    'TEXT_PRODUCT_SHIPS_IN_OWN_BOX_HELP' => 'L\'article est expédié dans sa propre boîte ? (c\'est-à-dire : ne sera pas combiné dans une autre boîte pour l\'expédition, et aucun frais d\'emballage supplémentaire ne sera ajouté)',
    'TEXT_PRODUCT_IS_FREE' => 'Le produit est gratuit : ',
    'TEXT_PRODUCTS_IS_FREE_PREVIEW' => '* Le produit est marqué comme GRATUIT',
    'TEXT_PRODUCTS_IS_FREE_EDIT' => '* Le produit est marqué comme GRATUIT',
    'TEXT_PRODUCT_IS_CALL' => 'Le produit est un prix d\'appel : ',
    'TEXT_PRODUCTS_IS_CALL_PREVIEW' => '* Le produit est marqué comme APPELER POUR PRIX',
    'TEXT_PRODUCTS_IS_CALL_EDIT' => '* Le produit est marqué comme APPELER POUR PRIX',
    'TEXT_PRODUCTS_PRICED_BY_ATTRIBUTES' => 'Prix du produit par attributs : ',
    'TEXT_PRODUCTS_PRICED_BY_ATTRIBUTES_PREVIEW' => '* Le prix affiché inclura les prix les plus bas des attributs de groupe plus le prix',
    'TEXT_PRODUCTS_PRICED_BY_ATTRIBUTES_EDIT' => '* Le prix affiché inclura les prix les plus bas des attributs de groupe plus le prix',
    'TEXT_PRODUCTS_TAX_CLASS' => 'Classe de taxes : ',
    'TEXT_PRODUCTS_QUANTITY_MIN_RETAIL' => 'Qté produit minimum : ',
    'TEXT_PRODUCTS_QUANTITY_UNITS_RETAIL' => 'Unités de quantité de produit : ',
    'TEXT_PRODUCTS_QUANTITY_MAX_RETAIL' => 'Qté produit maximum : ',
    'TEXT_PRODUCTS_QTY_MIN_UNITS_PREVIEW' => 'Attention : le minimum est inférieur aux unités',
    'TEXT_PRODUCTS_QTY_MIN_UNITS_MISMATCH_PREVIEW' => 'Attention : le minimum n\'est pas un multiple d\'unités',
    'TEXT_PRODUCTS_QUANTITY_MAX_RETAIL_EDIT' => '0 = Illimité, 1 = No Qty Boxes',
    'TEXT_PRODUCTS_MIXED' => 'Qté produit min/unité Mix : ',
    'TEXT_PRODUCTS_SORT_ORDER' => 'Classement : ',
    'TEXT_PRODUCT_MORE_INFORMATION' => 'Pour en savoir plus, veuillez consulter cette <a href="https://%s" target="blank">page web</a> du produit.',
    'TEXT_PRODUCT_DATE_ADDED' => 'Ce produit a été ajouté à notre catalogue le %s.',
    'TEXT_PRODUCT_DATE_AVAILABLE' => 'Ce produit sera en stock le %s.',
    'TEXT_META_TAG_TITLE_INCLUDES' => '<strong>Sélectionnez les éléments à afficher dans la balise &lt;titre&gt; page (affichée dans cet ordre) :</strong><br><span class="alert">REMARQUE : si les mots clés et les champs de la balise meta description sont tous deux vides, tous les éléments (à l\'exception du texte supplémentaire du titre) seront définis sur "oui". Cependant, dans ce cas, l\'affichage du modèle de produit et du prix du produit peut être remplacé (désactivé) dans l\'administration à la page : configuration -> Informations sur le produit.</span>',
    'TEXT_PRODUCTS_METATAGS_PRODUCTS_NAME_STATUS' => '<strong>Nom du produit : </strong>',
    'TEXT_PRODUCTS_METATAGS_TITLE_STATUS' => '<strong> Texte supplémentaire du titre :</strong><br>(défini ci-dessous)',
    'TEXT_PRODUCTS_METATAGS_MODEL_STATUS' => '<strong>Modèle de produit :</strong>',
    'TEXT_PRODUCTS_METATAGS_PRICE_STATUS' => '<strong>Prix du produit :</strong>',
    'TEXT_PRODUCTS_METATAGS_TITLE_TAGLINE_STATUS' => '<strong>constante définie "SITE_TAGLINE" : </strong>',
    'TEXT_META_TAGS_TITLE' => '<strong>Texte supplémentaire du titre :</strong><br><span class="alert">REMARQUE : le texte supplémentaire du titre n\'est pas utilisé si les champs de balise meta Mots clés et Description sont vides.</span>',
    'TEXT_META_TAGS_KEYWORDS' => '<strong>Balise Meta Keywords : </strong>',
    'TEXT_META_TAGS_DESCRIPTION' => '<strong>Description de la balise meta : </strong>',
    'TEXT_META_EXCLUDED' => '<span class="alert">EXCLUS</span>',
    'TEXT_TITLE_PLUS_TAGLINE' => 'Titre du magasin+Slogan',
    'TEXT_PRODUCTS_PRICE_INFO' => 'Prix : ',
    'WARNING_PRODUCT_DOES_NOT_EXIST' => 'Attention : l\'ID produit #%u n\'est pas modifiable, il n\'existe pas.',
    'TEXT_PRODUCTS_WHOLESALE_PRICE' => 'Prix de gros : ',
];

return $define;