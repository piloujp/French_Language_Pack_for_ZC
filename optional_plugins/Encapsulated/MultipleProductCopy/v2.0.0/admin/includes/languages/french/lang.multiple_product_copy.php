<?php

declare(strict_types=1);

/**
 * part of the Multiple Product Copy Plugin
 * @link https://github.com/torvista/Zen_Cart-Multiple_Products_Copy_Move_Delete
 * @copyright Copyright 2025 Zen Cart Development Team
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @author torvista, Ajeh
 * @version $Id: torvista 2025-04-20
 */

$define = [
    'HEADING_TITLE' => 'Copier/Déplacer/Supprimer plusieurs produits',

// SELECTIONS page 1
    'TEXT_COPY_AS_LINK' => 'Copier les produits comme liés ',
    'TEXT_COPY_AS_DUPLICATE' => 'Copier en tant que produits dupliqués (nouveaux produits)',
    'TEXT_COPY_AS_DUPLICATE_ENABLE' => 'Activer les nouveaux produits',
    'TEXT_COPY_ATTRIBUTES' => 'Copier les attributs',
    'TEXT_COPY_METATAGS' => 'Copier les méta-balises',
    'TEXT_COPY_LINKED_CATEGORIES' => 'Copier les catégories liées',
    'TEXT_COPY_DISCOUNTS' => 'Copiez les remises quantitatives',
    'TEXT_COPY_SPECIALS' => 'Copier les prix de promotions',
    'TEXT_COPY_FEATURED' => 'Copier les paramètres des produits en vedette',
    'TEXT_ALL_CATEGORIES' => 'Toutes les catégories', // this constant declared earlier to be used subsequently

    'TEXT_MOVE_TO' => 'Déplacer les produits',
    'TEXT_MOVE_PRODUCTS_INFO_SEARCH_CATEGORY' => '<p>Lorsque la recherche est limitée à une catégorie de recherche :<br>Les produits liés seront dissociés de cette catégorie et liés à la catégorie cible.<br>L\'ID de catégorie principale des produits de leur catégorie principale sera modifié en celui de la catégorie cible.</p>',

    'TEXT_MOVE_PRODUCTS_INFO_SEARCH_GLOBAL' => '<p>Lorsque la recherche n\'est pas restreinte ("%%TEXT_ALL_CATEGORIES%%") :<br>L\'identifiant de la catégorie principale de tous les produits sélectionnés sera remplacé par celui de la catégorie cible. Les liens des produits resteront inchangés.',
    'TEXT_TARGET_CATEGORY' => 'Catégorie cible (pour copier/déplacer) :',

    'TEXT_COPY_AS_DELETE_SPECIALS' => 'Supprimer les promotions des produits',
    'TEXT_COPY_AS_DELETE_LINKED' => 'Supprimer les produits liés',
    'TEXT_COPY_AS_DELETE_ALL' => 'Supprimer tous les produits',
    'TEXT_COPY_AS_DELETE_ALL_INFO' => 'Cette option permet la suppression définitive de plusieurs produits. La sélection d\'un produit (lié ou principal) supprimera <span style="text-decoration: underline">TOUS LES INSTANCES</span> (principales et liées) de ce produit. À UTILISER AVEC PRÉCAUTION et assurez-vous d\'avoir préalablement effectué une sauvegarde vérifiée de votre base de données !',

// Search Criteria
    'TEXT_ENTER_CRITERIA' => 'Critères de recherche/filtrage :',
    'TEXT_PRODUCTS_CATEGORY' => 'Rechercher dans la catégorie :',
    'TEXT_INCLUDE_SUBCATS' => ' inclure les sous-catégories',
    'TEXT_ENTER_SEARCH_KEYWORDS' => 'Rechercher des produits contenant les mots-clés suivants (dans le modèle, le nom et le nom du fabricant du produit) ',
    'TEXT_SEARCH_DESCRIPTIONS' => 'Rechercher également dans les descriptions de produits ',
    'TEXT_PRODUCTS_MANUFACTURER' => 'Fabricant ',
    'TEXT_ALL_MANUFACTURERS' => 'Tous les fabricants',
    'ENTRY_MIN_PRICE' => 'Prix ​​en magasin (affiché) &gt;= ',
    'ENTRY_MAX_PRICE' => 'Prix ​​en magasin (affiché) &lt;= ',
    'ENTRY_MAX_PRODUCT_QUANTITY' => 'Quantité de produit &lt;= ',
    'ENTRY_SHOW_IMAGES' => 'Afficher les images ? ',
    'ENTRY_AUTO_CHECK' => 'Sélectionner automatiquement tous les produits correspondants ? ',
    'ENTRY_RESULTS_ORDER_BY' => 'Trier les résultats par ',
//constant name suffix TEXT_ORDER_BY_?? auto-defined by option name
    'TEXT_ORDER_BY_ID' => 'ID du produit',
    'TEXT_ORDER_BY_MANUFACTURER' => 'Fabricant',
    'TEXT_ORDER_BY_MODEL' => 'Modèle',
    'TEXT_ORDER_BY_NAME' => 'Nom',
    'TEXT_ORDER_BY_PRICE' => 'Prix',
    'TEXT_ORDER_BY_QUANTITY' => 'Quantité',
    'TEXT_ORDER_BY_STATUS' => 'Statut',

    'TEXT_TIPS' => '<h2>Remarques :</h2>
<h3>Recherche:</h3>
<ul><li>Les produits actuellement existants dans la catégorie cible sont automatiquement exclus des résultats de recherche.</li>
<li>Les mots-clés de recherche peuvent être laissés vides si une catégorie ou un fabricant est sélectionné, ou si l\'un des champs Prix du magasin contient une valeur.</li>
<li>Vous pouvez effectuer une recherche en utilisant uniquement <strong>un</strong> des champs Prix du magasin si vous souhaitez trouver tous les produits dont les prix sont supérieurs/inférieurs à un montant spécifique.</li>
<li>Le séparateur décimal dans les entrées de prix du magasin <strong>doit</strong> être un « .　» (point décimal), exemple : <b>49.99</b></li></ul>
<h3>Copier en tant que produits dupliqués (nouveaux) :</h3>
<ul><li>Les attributs peuvent être copiés en option. Cependant, pour les téléchargements, le nom du fichier téléchargé n\'est PAS copié.</li>
<li>Les avis ne sont PAS copiés.</li></ul>
<h3>Suppression de produits</h3>
<h4>Supprimer définitivement les produits de TOUTES les catégories :</h4>
<ul><li>Les suppressions sont permanentes et ne peuvent pas être annulées</li>
<li>Si l\'image principale du produit est unique, elle sera supprimée, tout comme les images principales moyennes et grandes. Les images supplémentaires et les images de grande taille supplémentaires ne seront PAS supprimées.</li></ul>
<h4>Supprimer les produits liés d\'UNE catégorie :</h4>
<ul><li>La suppression d\'une catégorie dissociera un produit de cette catégorie.</li>
<li>Si cette catégorie est l\'ID de la catégorie principale d\'un produit, le produit ne sera pas supprimé.</li></ul>',

//RESULTS page 2
    'TEXT_PRODUCTS_FOUND' => '%u produit(s) correspondant(s) trouvé(s).',
    'WARNING_MAX_INPUT_VARS_LIMIT' => 'ATTENTION : les résultats de recherche sont limités à %1$u produits. Le paramètre d\'environnement PHP « max_input_vars » (actuellement « %2$u ») devra être augmenté si vous souhaitez sélectionner davantage de produits.',
// Search Critera summary
    'TEXT_SEARCH_RESULT_CATEGORY' => 'Catégorie de recherche : %s',
    'TEXT_SEARCH_RESULT_KEYWORDS' => 'Mots-clés de recherche : « %s »',
    'TEXT_SEARCH_RESULT_MANUFACTURER' => 'Rechercher le fabricant : %s',
    'TEXT_SEARCH_RESULT_MIN_PRICE' => 'Prix ​​de recherche > %s',
    'TEXT_SEARCH_RESULT_MAX_PRICE' => 'Prix ​​de recherche < %s',
    'TEXT_SEARCH_RESULT_QUANTITY' => 'Quantité de recherche < %u',
    'TEXT_SEARCH_RESULT_TARGET' => 'Catégorie cible : « %2$s » ID n°%1$u',
    'TEXT_EXISTING_PRODUCTS_NOT_SHOWN' => 'Seuls les produits correspondants <strong>qui ne sont pas déjà présents</strong> dans la catégorie cible sont répertoriés.',
    'TABLE_HEADING_SELECT' => 'Choisi',
    'TEXT_TOGGLE_ALL' => 'Tout changer',
    'TABLE_HEADING_PRODUCTS_ID' => 'ID',
    'TABLE_HEADING_IMAGE' => 'Image',
    'TABLE_HEADING_STATUS' => 'Statut',
    'IMAGE_ICON_STATUS_ON_EDIT_PRODUCT' => 'le produit est activé -> Modifier le produit',
    'IMAGE_ICON_STATUS_OFF_EDIT_PRODUCT' => 'le produit est désactivé -> Modifier le produit',

    'TABLE_HEADING_CATEGORY' => 'Dans la catégorie',
    'TABLE_HEADING_LINKED_MASTER' => 'Lié %1$s<br>Maître %2$s',
    'TABLE_HEADING_MASTER_CATEGORY' => 'Catégorie principale',
    'IMAGE_ICON_MASTER' => 'Produit dans la catégorie principale',
    'IMAGE_ICON_LINKED_EDIT_LINKS' => 'le produit est lié -> Modifier dans le gestionnaire de liens',
    'IMAGE_ICON_NOT_LINKED_EDIT_LINKS' => 'le produit n\'est pas lié -> Modifier dans le gestionnaire de liens',

    'TEXT_PRODUCT_MASTER_CATEGORY_CHANGE' => 'déplacer ce produit/modifier la catégorie principale',
    'TEXT_PRODUCT_SPECIAL_EDIT' => 'modifier ce prix promotionnel',

    'TABLE_HEADING_NAME' => 'Nom',
    'TABLE_HEADING_PRICE' => 'Prix ​​en magasin',
    'TABLE_HEADING_QUANTITY' => 'Quantité',
    'TABLE_HEADING_MFG' => 'Fabricant',

    'IMAGE_ICON_EDIT_LINKS' => 'Modifier le lien/la catégorie principale',
//'IMAGE_ICON_CATEGORY_LINKED' => 'Catégorie liée : %2$s ID　n°%1$u . Modifier dans le gestionnaire de liens',

    'BUTTON_RETRY' => 'Modifier la recherche',
    'BUTTON_CATEGORY_LISTING_SEARCH' => 'Liste de produits - Catégorie de recherche',
    'BUTTON_CATEGORY_LISTING_TARGET' => 'Liste de produits - Catégorie cible',

//RESULTS
    'TEXT_DELETE_LINKED' => 'Catégorie « %2$s » ID n°%1$u',
    'TEXT_DELETE_LINKED_INFO' => '',
    'TEXT_INCLUDED_SUBCATS' => 'Sous-catégories incluses :',
    'TEXT_DISABLED' => 'désactivée',
//CONFIRM page 3
    'BUTTON_NEW_SEARCH' => 'Nouvelle recherche',

//Confirm Copy as Linked/Copy as Duplicate
    'TEXT_PRODUCTS_COPIED_TO_LINK' => '%1$u produit(s) lié(s) à la catégorie « %3$s » ID　n°%2$u ',
    'TEXT_PRODUCTS_COPIED_TO_DUPLICATE' => '%1$u produit(s) dupliqué(s) dans la catégorie « %3$s » ID n°%2$u ',
//Confirm Moved
//'TEXT_PRODUCTS_MOVED_TO' => '%1$u produit(s) déplacé(s) vers la catégorie « %3$s » ID　n°%2$u ',

//Confirm Copy Duplicates
//these four constants used in copy_product_confirm
//if (!defined('TEXT_DUPLICATE_IDENTIFIER')) {
    'TEXT_DUPLICATE_IDENTIFIER' => '[COPIER]',
//}
    'TEXT_COPY_AS_DUPLICATE_ATTRIBUTES' => 'Attributs copiés du produit d\'ID n°%1$u vers le produit dupliqué d\'ID n°%2$u',
    'TEXT_COPY_AS_DUPLICATE_METATAGS' => 'Les métabalises pour la langue d\'ID n°%1$u ont été copiées du profuit d\'ID n°%2$u vers le produit dupliqué d\'ID n°%3$u',
    'TEXT_COPY_AS_DUPLICATE_CATEGORIES' => 'Catégorie liée d\'ID n°%1$u copiée du produit d\'ID n°%2$u vers le produit dupliqué d\'ID n°%3$u',
    'TEXT_COPY_AS_DUPLICATE_DISCOUNTS' => 'Remises copiées du produit d\'ID n°%1$u vers le produit dupliqué d\'ID n°%2$u',
//these two constants used in move_product_confirm
    'TEXT_PRODUCT_MOVED' => 'Le produit d\'ID n°%1$u a été déplacé vers la catégorie d\'ID n°%2$u',
    'TEXT_PRODUCT_MASTER_CATEGORY_RESET' => 'L\'ID de catégorie principale du produit n°%1$u a été modifié en ID de catégorie n°%2$u',

    'TEXT_COPY_AS_DUPLICATE_SPECIALS' => 'Le prix promotionnel a été copié de l\'ID de produit n°%1$u vers l\'ID de produit dupliqué n°%2$u',
    'TEXT_COPY_AS_DUPLICATE_FEATURED' => 'Paramètres en vedette copiés du produit d\'ID n°%1$u vers le produit dupliqué d\'ID n°%2$u',

//Confirm Move
    'TEXT_PRODUCTS_MOVED_TO' => '%1$u produit(s) déplacé(s) vers la catégorie ID　n°%2$u « %3$s »',

//Confirm Delete Specials
    'TEXT_SPECIALS_DELETED_FROM' => 'Prix promotionnel(s) supprimés de %u produit(s).',

//Confirm Delete
    'TEXT_PRODUCTS_DELETED' => '%u produit(s) supprimé(s).',

// Errors
    'ERROR_ILLEGAL_OPTION' => 'Option non valide/aucune option définie.',
    'ERROR_NO_TARGET_CATEGORY' => 'Aucune catégorie cible sélectionnée !',
    'ERROR_TARGET_CATEGORY_HAS_SUBCATEGORY' => 'Copie/Déplacement non autorisé : la catégorie cible « %2$s » ID n°%1$u contient une sous-catégorie',
    'ERROR_SEARCH_CATEGORY_HAS_SUBCATEGORY' => 'Copie/Déplacement non autorisé : la catégorie de recherche « %2$s » ID n°%1$u contient une sous-catégorie',
    'ERROR_SAME_CATEGORIES' => 'Les catégories de recherche et cible sont les mêmes : « %2$s » ID　n°%1$u !',
    'ERROR_NO_PRODUCTS_IN_CATEGORY' => 'Aucun produit trouvé dans la catégorie « %2$s » ID　n°%1$u',
    'ERROR_OR_SUBS' => ', ou sous-catégories.',
    'ERROR_INVALID_KEYWORDS' => 'Mots-clés invalides',
    'ERROR_NO_PRODUCTS_FOUND' => 'Aucun produit trouvé dans « %2$s » ID　n°%1$u',
    'ERROR_SEARCH_CRITERIA_REQUIRED' => 'Aucun critère de recherche défini ! Définissez une catégorie de recherche / mot-clé / fabricant / champ de prix.',
    'ERROR_ARRAY_COUNTS' => 'La valeur POST pour le nombre total de produits sélectionnés lors de la recherche n\'a pas été définie. Cela est probablement dû à une limite PHP max_input_vars (actuellement %u) insuffisante pour les produits sélectionnés. Cette limite peut être augmentée par votre hébergeur et doit être supérieure au double du nombre de produits sélectionnés.',
    'ERROR_NO_SELECTION' => 'Aucun produit sélectionné. Au moins un produit de la liste doit être sélectionné !',
    'ERROR_CHECKBOXES_NOT_ARRAY' => 'Les cases à cocher sélectionnées ne constituent pas un tableau.',
    'ERROR_CHECKBOX_ID' => 'Une case cochée fait référence au produit d\'ID n°%u. Cet ID de produit n\'a pas été trouvé !',
    'ERROR_COPY_DUPLICATE_NO_DUP_ID' => 'L\'ID de produit en double/nouveau produit n\'a pas été renvoyé depuis « copy_product_confirm.php » lors de la copie-duplication de l\'ID de produit n°%1$u vers l\'ID de catégorie n°%2$u.',
    'TEXT_NO_MATCHING_PRODUCTS_FOUND' => 'Aucun produit correspondant aux critères de recherche n\'a été trouvé ou tous les produits correspondants existent déjà dans la catégorie cible.',
];

return $define;
