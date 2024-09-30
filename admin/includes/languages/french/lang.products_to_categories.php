<?php
/**
 * @copyright Copyright 2003-2022 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: Scott C Wilson 2022 Jan 11 New in v1.5.8-alpha $
*/

$define = [
    'HEADING_TITLE' => 'Gestion des liens produits à catégories multiples',
    'HEADING_TITLE2' => 'Catégories / Produits',
    'TEXT_HEADING_PRODUCT_SELECT' => 'Sélectionner un produit',
    'WARNING_PRODUCTS_LINK_TO_CATEGORY_REMOVED' => 'ATTENTION: le produit a été réinitialisé et ne fait plus partie de cette catégorie ...',
    'TEXT_PRODUCTS_ID_INVALID' => 'ATTENTION: iD DE PRODUIT INVALIDE OU AUCUN PRODUIT SÉLECTIONNÉ',
    'TEXT_INFO_MASTER_CATEGORY_CHANGE' => 'Un produit a un ID de catégorie principale (à des fins de tarification) qui peut être considéré comme la catégorie dans laquelle le produit <i>réside réellement</i>. De plus, un produit peut être <i>lié</i> (copié) à n\'importe quel nombre d\'autres catégories, où le prix peut être modifié en raison des conditions de ces catégories liées.<br>L\'ID de la catégorie principale peut être modifié à l\'aide de cette liste déroulante de catégorie principale, qui propose uniquement les catégories <strong>actuellement liées</strong> comme alternatives possibles.<br>Pour définir l\'ID de catégorie principale sur une <strong>autre</strong> catégorie, commencez par le lier à une nouvelle catégorie en utilisant le tableau ci-dessous, et Update. Utilisez ensuite cette liste déroulante pour réaffecter la catégorie principale à cette nouvelle catégorie.',
    'TEXT_INFOBOX_HEADING_SELECT_PRODUCT' => 'Sélectionnez le produit par ID#',
    'TEXT_SET_PRODUCTS_TO_CATEGORIES_LINKS' => 'Définir des liens produit à catégories pour: ',
    'TEXT_PRODUCTS_NAME' => 'Produit: ',
    'TEXT_PRODUCTS_PRICE' => 'Prix: ',
    'BUTTON_NEW_PRODUCTS_TO_CATEGORIES' => 'Sélectionnez un produit à lier',
    'BUTTON_CATEGORY_LISTING' => 'Liste des catégories',
    'TEXT_HEADING_LINKED_CATEGORIES' => 'Catégories liées',
    'TEXT_SET_MASTER_CATEGORIES_ID' => '<strong>ATTENTION:</strong> Vous devez définir l\'ID de CATÉGORIE MAÎTRE avant de changer les catégories liées',
    'BUTTON_UPDATE_CATEGORY_LINKS' => 'Actualisation des liens de catégorie',
    'TEXT_INFO_PRODUCTS_TO_CATEGORIES_LINKER_INTRO' => 'L\'outil lieur produits à catégories est conçu pour lier rapidement le produit courant à une ou plusieurs catégories.<br />Vous pouvez aussi lier tous les produits d\'une catégorie à une autre ou enlever d\'une catégorie des produits liés qui sont dans une autre catégorie (voir ci-dessous pour des instructions supplémentaires).',
    'TEXT_LABEL_CATEGORY_DISPLAY_ROOT' => 'Affichez les sous-catégories sous :',
    'BUTTON_SET_DEFAULT_TARGET_CATEGORY' => 'Définir comme défaut',
    'BUTTON_SET_DEFAULT_TARGET_CATEGORY_TITLE' => 'Définir cette catégorie ciblée sélectionnée comme valeur par défaut à afficher',
    'TEXT_LABEL_SELECT_ALL_OR_NONE' => 'Tout sélectionner ou Aucun',
    'ERROR_CATEGORY_ID_INVALID' => 'Catégorie liée ID#%u invalide (non ajouté).',
    'SUCCESS_PRODUCT_LINKED_TO_CATEGORIES' => 'Liens de produits vers plusieurs catégories mis à jour pour : %s',
    'WARNING_PRODUCT_UNLINKED_FROM_CATEGORY' => 'Le produit a été dissocié de la catégorie précédemment sélectionnée "%1$s" ID#%2$u, et est donc maintenant affiché dans sa catégorie principale.',
    'WARNING_MAX_INPUT_VARS_LIMIT' => 'AVERTISSEMENT : il y a %1$u sous-catégories disponibles pour les liens sur cette page, ce qui est supérieur à la limite PHP "max_input_vars" (actuellement %2$u). Cela signifie pas plus de %2$u des catégories peuvent être liées jusqu\'à ce que cette limite PHP soit augmentée dans votre hébergement.',
    'HEADER_CATEGORIES_GLOBAL_TOOLS' => 'Outils globaux de produit/catégorie',
    'TEXT_PRODUCTS_ID_NOT_REQUIRED' => 'NOTE : un ID de produit n\'a pas besoin d\'être défini pour utiliser la fonction \'Lier tous les produits d\'une catégorie à une autre catégorie\'.<br />Cependant, le fait de définir un ID Produits affichera les catégories disponibles et leurs ID respectifs.',
    'TEXT_HEADING_COPY_LINKED_CATEGORIES' => 'Copier les catégories liées vers un autre produit',
    'TEXT_INFO_COPY_LINKED_CATEGORIES' => 'Copiez les catégories liées du produit actuellement sélectionné %s vers un autre produit.<br>Vous pouvez <strong>Ajouter</strong> les catégories liées de ce produit au produit ciblé, ou vous pouvez <strong>Remplacez</strong> (supprimer + ajouter) les catégories liées du produit ciblé.<br>Remarque : cette action ne copie pas la catégorie principale du produit source en tant que catégorie liée pour la catégorie ciblée, elle copie uniquement les catégories liées.',
    'TEXT_LABEL_ENABLE_COPY_LINKS' => 'Activer la liste déroulante de sélection de produits (répertorie <b>tous</b> les produits)',
    'TEXT_OPTION_LINKED_CATEGORIES' => 'Sélectionnez le produit ciblé',
    'BUTTON_COPY_LINKED_CATEGORIES_ADD' => 'Copier-Ajouter des catégories liées',
    'BUTTON_COPY_LINKED_CATEGORIES_REPLACE' => 'Copier-Remplacer des Catégories liées',
    'SUCCESS_LINKED_CATEGORIES_COPIED_TO_TARGET_PRODUCT_ADD' => 'Des catégories liées (%1$u) ont été ajoutées :<br>DE Produit de référence : %2$s<br>A Produit ciblé : %3$s',
    'SUCCESS_LINKED_CATEGORIES_COPIED_TO_TARGET_PRODUCT_REPLACE' => 'Catégories liées (%1$u) pour le produit ciblé : %3$s<br>ont été <em>remplacées</em> par les catégories liées de produit : %2$s',
    'WARNING_COPY_LINKED_CATEGORIES_NO_TARGET' => 'Un produit ciblé n\'a pas été sélectionné !',
    'WARNING_COPY_LINKED_CATEGORIES_NO_ADDITIONAL' => 'Rien à faire!<br>Produit source : %1$s<br>n\'a aucune catégorie <em>supplémentaire</em> liée à copier vers<br>Produit ciblé : %2$s',
    'ERROR_MASTER_CATEGORY_MISSING' => 'ERREUR : iD de la catégorie principale manquant dans la table "'.TABLE_PRODUCTS_TO_CATEGORIES.'"<br>pour le produit : %s',
    'TEXT_HEADING_COPY_ALL_PRODUCTS_TO_CATEGORY_LINKED' => 'Lier (copier) les produits d\'une catégorie à une autre catégorie',
    'TEXT_INFO_COPY_ALL_PRODUCTS_TO_CATEGORY_LINKED' => '<strong>Copier TOUS les produits dans une catégorie comme produits LIÉS dans une autre catégorie ...</strong><br />Exemple: indiquer 8 et 22 lierait TOUS les produits de la catégorie 8 à la catégorie 22',
    'TEXT_LABEL_COPY_ALL_PRODUCTS_TO_CATEGORY_FROM_LINKED' => 'Sélectionnez TOUS les produits de la catégorie source ID# :',
    'TEXT_LABEL_COPY_ALL_PRODUCTS_TO_CATEGORY_TO_LINKED' => 'Lien (copie) vers catégorie ciblée ID# : ',
    'BUTTON_COPY_CATEGORY_LINKED' => 'Copier les produits comme liés',
    'WARNING_CATEGORY_SOURCE_NOT_EXIST' => 'Catégorie <strong>de source</strong> ID#%u invalide (n\'existe pas)',
    'WARNING_CATEGORY_TARGET_NOT_EXIST' => 'Catégorie <strong>ciblée</strong> ID#%u invalide (n\'existe pas)',
    'WARNING_CATEGORY_IDS_DUPLICATED' => 'Attention: mêmes ID\'s de catégorie (#%u)',
    'WARNING_CATEGORY_NO_PRODUCTS' => '<strong>Catégorie de source</strong> ID#%u invalide (ne contient aucun produit)',
    'WARNING_CATEGORY_SUBCATEGORIES' => '<strong>Catégorie ciblée</strong> ID#%u non valide (contient des sous-catégories)',
    'SUCCESS_PRODUCT_COPIED' => 'produit : %1$s a été lié à la catégorie ID#%2$u<br>',
    'SUCCESS_COPY_LINKED' => '%1$u produit(s) lié(s) de catégorie de source ID#%2$u à la catégorie ciblée ID#%3$u',
    'WARNING_COPY_FROM_IN_TO_LINKED' => 'ATTENTION : aucun produit copié (tous les produits de la catégorie ID#%1$u sont déjà liés à la catégorie ID#%2$u)',
    'TEXT_HEADING_REMOVE_ALL_PRODUCTS_FROM_CATEGORY_LINKED' => 'Supprimer les produits liés d\'une catégorie',
    'TEXT_INFO_REMOVE_ALL_PRODUCTS_TO_CATEGORY_LINKED' => '<strong>Supprimer TOUS les produits d\'une catégorie qui sont des produits LIÉS à une autre catégorie ...</strong><br />Exemple: indiquer 8 et 22 délierait  de la catégorie 22 TOUS les produits de la catégorie 8',
    'TEXT_LABEL_REMOVE_ALL_PRODUCTS_TO_CATEGORY_FROM_LINKED' => 'Sélectionner TOUS les produits dans la catégorie de référence :',
    'TEXT_LABEL_REMOVE_ALL_PRODUCTS_TO_CATEGORY_TO_LINKED' => 'Supprimer tous les produits liés de la catégorie ciblée :',
    'BUTTON_REMOVE_CATEGORY_LINKED' => 'Supprimer les produits liés',
    'SUCCESS_REMOVED_PRODUCT' => 'produit : %1$s a été supprimé de la catégorie ID#%2$u<br>',
    'SUCCESS_REMOVE_LINKED_PRODUCTS' => '%u produit(s) lié(s) supprimé(s)',
    'WARNING_REMOVE_FROM_IN_TO_LINKED' => 'ATTENTION : rien à faire! Aucun produit dans la catégorie ciblée ID#%1$u n\'est lié à partir de la catégorie de référence ID#%2$u</strong>',
    'WARNING_PRODUCT_MASTER_CATEGORY_IN_TARGET' => 'Produit : iD#%1$u "%2$s" (%3$s)<br>a le même catégorie maître ID de que la catégorie ciblée ID#%4$u<br>',
    'WARNING_REMOVE_LINKED_PRODUCTS_MASTER_CATEGORIES_ID_CONFLICT' => '<strong>ATTENTION : cONFLIT D\'ID DE CATÉGORIES PRICIPALE !</strong><br>La catégorie de référence ID#%1$u pour la suppression des produits liés dans la catégorie ciblée ID#%2$u.<br>Vous avez demandé la suppression de certains produits liés d\'une catégorie ciblée. Un ou plusieurs de ces produits ont le même ID de catégorie principale que la catégorie ciblée. Cela signifie que le produit n\'est pas "lié" à la catégorie ciblée mais "réside" dans cette catégorie et ne peut donc pas être supprimée dans le cadre de cette demande de suppression de produits <i>liés</i>.<br>Si vous souhaitez <i>conserver</i> ce produit, vous devez modifier son catégorie pricipale ID vers une autre catégorie (par exemple, "Déplacer") avant de recommencer ce processus. Cela peut être fait sur cette page ou via l\'action "Déplacer" sur une page de liste Catégorie-Produit. Le premier produit avec un ID de catégorie principale en conflit a déjà été sélectionné pour modification.<br/>Si vous souhaitez <i>supprimer</i> ce produit, vous devez utiliser l\'action "Supprimer" sur la page de liste Catégorie-Produit.',
    'TEXT_HEADING_RESET_ALL_PRODUCTS_TO_CATEGORY_MASTER' => 'Réinitialiser l\'ID de la catégorie principale pour TOUS les produits dans une catégorie',
    'TEXT_INFO_RESET_ALL_PRODUCTS_TO_CATEGORY_MASTER' => '<strong>Réinitialiser TOUS les produits de la catégorie sélectionnée pour utiliser la catégorie sélectionnée comme nouvel ID de catégorie maître ...</strong><br>Par exemple: réinitialiser la catégorie 22 va positionner sur 22 l\'ID de catégorie maître de TOUS les produits de la catégorie 22',
    'TEXT_INFO_RESET_ALL_PRODUCTS_TO_CATEGORY_FROM_MASTER' => 'Réinitialiser l\'ID de la catégorie principale pour tous les produits de la catégorie :',
    'BUTTON_RESET_CATEGORY_MASTER' => 'Réinitialiser l\'ID de la catégorie principale',
    'SUCCESS_RESET_PRODUCTS_MASTER_CATEGORY' => 'Tous les produits dans la catégorie ID#%1$d ont été réinitialisés pour avoir la catégorie principale ID#%1$d',
    'TEXT_CATEGORIES_NAME' => 'Noms des catégories',
];

return $define;
