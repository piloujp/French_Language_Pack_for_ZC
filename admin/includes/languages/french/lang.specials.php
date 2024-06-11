<?php
/**
 * @copyright Copyright 2003-2024 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: lat9 2023 Dec 08 Modified in v2.0.0-alpha1 $
*/

$define = [
    'HEADING_TITLE' => 'Promotions',
    'TEXT_ADD_SPECIAL_SELECT' => 'Ajouter spécial par sélection',
    'TEXT_ADD_SPECIAL_PID' => 'Ajouter spécial par ID de produit',
    'TEXT_SEARCH_SPECIALS' => 'Rechercher les promotions actuelles',
    'TEXT_SPECIAL_ACTIVE' => 'Prix spécial actif',
    'TEXT_SPECIAL_INACTIVE' => 'Prix spécial inactif',
    'TEXT_SPECIAL_STATUS_BY_DATE' => 'Statut défini par dates',
    'TEXT_SPECIALS_PRODUCT' => 'Produit : ',
    'TEXT_SPECIALS_SPECIAL_PRICE' => 'Prix promotionnel : ',
    'TEXT_SPECIALS_AVAILABLE_DATE' => 'Date de disponibilité : ',
    'TEXT_SPECIALS_EXPIRES_DATE' => 'Date d\'expiration : ',
    'TEXT_INFO_NEW_PRICE' => 'Nouveau prix : ',
    'TEXT_INFO_ORIGINAL_PRICE' => 'Prix d\'origine : ',
    'TEXT_INFO_DISPLAY_PRICE' => 'Prix affiché : ',
    'TEXT_INFO_STATUS_CHANGED' => 'Statut changé : ',
    'TEXT_INFO_HEADING_DELETE_SPECIALS' => 'Supprimer la promotion',
    'TEXT_INFO_DELETE_INTRO' => 'Êtes-vous certain de vouloir supprimer la promotion ?',
    'WARNING_SPECIALS_PRE_ADD_PID_EMPTY' => 'ATTENTION : Aucun ID de produit indiqué.',
    'WARNING_SPECIALS_PRE_ADD_PID_DUPLICATE' => 'ATTENTION : Produit ID#%u déjà en promotion.',
    'WARNING_SPECIALS_PRE_ADD_PID_NO_EXIST' => 'ATTENTION : Produit ID#%u n\'exist pas.',
    'WARNING_SPECIALS_PRE_ADD_PID_GIFT' => 'Avertissement : produit ID#%u est un ' . '%%TEXT_GV_NAME%%' . '.',
    'TEXT_INFO_HEADING_PRE_ADD_SPECIALS' => 'Ajouter un prix spécial par l\'ID du produit',
    'TEXT_INFO_PRE_ADD_INTRO' => 'Vous pouvez ajouter un prix spécial par ID de produit. Cette méthode peut être appropriée pour les magasins proposant de nombreux produits si le rendu de la page de sélection prend trop de temps ou si la sélection d\'un produit dans la liste déroulante devient compliquée.',
    'TEXT_PRE_ADD_PRODUCTS_ID' => 'Insérer le produit ID : ',
    'TEXT_SPECIALS_PRICE_NOTES_HEAD' => '<b>Notes : </b>', 
    'TEXT_SPECIALS_PRICE_NOTES_BODY' => '<b>Notes :</b><ul><li>Le prix spécial peut être un prix (hors taxe). Le séparateur décimal doit être un "," (virgule décimale), par exemple : <b>49,99</b>. Le pourcentage de remise calculé est indiqué à côté du nouveau prix du produit dans le catalogue.</li><li>Le prix spécial peut être un pourcentage de remise, par exemple : <b>20%</b>.</li><li>Les dates de début/fin ne sont pas obligatoires. Vous pouvez laisser la date d\'expiration vide pour aucune expiration.</li><li>Lorsque les dates sont définies, le statut du prix spécial est automatiquement activé/désactivé en conséquence.</li>',
    'ERROR_INVALID_ACTIVE_DATE' => 'La date de disponibilité n\'est pas valide, veuillez la saisir à nouveau.',
    'ERROR_INVALID_EXPIRES_DATE' => 'La date d\'expiration n\'est pas valide, veuillez la saisir à nouveau.',
];

return $define;
