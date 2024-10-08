<?php
/**
 * @copyright Copyright 2003-2024 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: Steve 2023 Apr 16 Modified in v2.0.0-alpha1 $
*/

$define = [
    'HEADING_TITLE' => 'Gestionnaire de nom d\'option',
    'TEXT_ATTRIBUTES_CONTROLLER' => 'Contrôleur d\'attributs',
    'TEXT_WARNING_TEXT_OPTION_NAME_RESTORED' => 'Avertissement : la valeur d\'option TEXT ID#0 a été trouvée manquante dans la table de base de données "' . TABLE_PRODUCTS_OPTIONS_VALUES . '". Cela peut être dû à un plugin mal codé.<br>La valeur a été restauré correctement.',
    'TEXT_PRODUCT_OPTIONS_INFO' => '<strong> Remarque : modifiez le nom de l\'option pour des paramètres supplémentaires </strong>',
    'TEXT_WARNING_OF_DELETE' => 'Cette option est utilisé par le ou les produits répertoriés ci-dessous: il ne peut pas être supprimé tant que toutes les valeurs d\'option (attributs) associés à ce nom d\'option n\'ont pas été supprimés de ces produits (cela peut être fait en utilisant les outils globaux ci-dessous)',
    'TEXT_OK_TO_DELETE' => 'Cette option n\'est utilisé par aucun produit - vous pouvez le supprimer en toute sécurité.<br><strong>Attention :</strong> cela supprimera à la fois le nom d\'option ET toutes les valeurs d\'option associées à ce nom d\'option.',
    'TEXT_WARNING_DUPLICATE_OPTION_NAME' => 'option ID#%1$u : duplicata nom d\'option ajouté : "%2$s" (%3$s)',
    'TEXT_ORDER_BY' => 'Trier par',
    'TEXT_OPTION_NAME_COMMENTS' => 'Commentaire (affiché à côté du nom de l\'option)',
    'TEXT_OPTION_NAME_COMMENTS_POSITION' => 'Emplacement du commentaire',
    'TEXT_OPTION_ATTRIBUTE_IMAGES_PER_ROW' => 'Images d\'attribut par ligne',
    'TEXT_OPTION_ATTRIBUTE_IMAGES_STYLE' => 'Style de disposition de l\'image d\'attribut (pour les cases à cocher/boutons radio uniquement)',
    'TEXT_OPTION_ATTRIBUTE_LAYOUTS_EXAMPLE' => 'Voir des exemples',
    'TEXT_OPTION_ATTRIBUTE_IMAGES_STYLE_0' => '0 - Sélection + texte, Images sous les noms d\'options',
    'TEXT_OPTION_ATTRIBUTE_IMAGES_STYLE_1' => '1 - Sélectionnez + Image + Option en ligne',
    'TEXT_OPTION_ATTRIBUTE_IMAGES_STYLE_2' => '2 - Sélectionnez + Option + Image enveloppée',
    'TEXT_OPTION_ATTRIBUTE_IMAGES_STYLE_3' => '3 - Sélectionnez + Image + Option enveloppée',
    'TEXT_OPTION_ATTRIBUTE_IMAGES_STYLE_4' => '4 - Image + Option + Sélectionnez comme colonne',
    'TEXT_OPTION_ATTRIBUTE_IMAGES_STYLE_5' => '5 - Sélectionnez + Image + Option comme colonne',
    'TEXT_OPTION_NAME_ROWS' => 'Lignes',
    'TEXT_OPTION_NAME_SIZE' => 'Taille d\'affichage',
    'TEXT_OPTION_NAME_MAX' => 'Longueur maximale',
    'TEXT_OPTION_TYPE_TEXT_ATTRIBUTE_INFO' => 'Remarque : ' . '%%TEXT_OPTION_NAME_ROWS%%' . ', ' . '%%TEXT_OPTION_NAME_SIZE%%' . ' and ' . '%%TEXT_OPTION_NAME_MAX%%' . ' sont pour le type de nom d\'option "Texte" uniquement.',
    'TEXT_INSERT_NEW_OPTION_NAME' => 'Ajouter un nouveau nom d\'option',
    'TEXT_GLOBAL_TOOLS' => 'Outils globaux',
    'TEXT_CLICK_TO_SHOW_HIDE' => 'cliquez pour afficher/masquer',
    'TEXT_WARNING_BACKUP' => 'Important: faites toujours une sauvegarde vérifiée de votre base de données avant de faire des changements globaux / en utilisant Global Tools',
    'TEXT_SELECT_OPTION_TYPES_ALLOWED' => 'Notez que les outils globaux ne peuvent pas être utilisés avec les types de nom d\'option "Texte" ou "Fichier".',
    'TEXT_SELECT_PRODUCT' => 'Sélectionnez un produit',
    'TEXT_SELECT_CATEGORY' => 'Sélectionnez une catégorie',
    'TEXT_SELECT_OPTION' => 'Sélectionnez un nom d\'option',
    'TEXT_NAME' => 'Nom',
    'TEXT_INFO_OPTION_VALUES_ADD' => '<strong>Remarque :</strong> pour les produits qui sont mis à jour (reçoivent des valeurs d\'option supplémentaires) à l\'aide des outils <b>Ajouter</b>, l\'ordre de tri des valeurs d\'option (attributs) sera être réinitialisé à l\’ordre de tri <strong>par défaut</strong> pour ce nom d\’option.',
    'TEXT_OPTION_VALUE_ADD_ALL' => 'Mettre à jour (ajouter) à TOUS les produits TOUTES les valeurs d\'options pour un nom d\'option.',
    'TEXT_INFO_OPTION_VALUE_ADD_ALL' => 'Pour TOUS les produits qui utilisent le nom d\'option sélectionné (et qui ont donc au moins une valeur d\'option attribuée), ajoutez TOUTES les autres valeurs d\'option associées au nom d\'option.',
    'TEXT_OPTION_VALUE_ADD_PRODUCT' => 'Mettez à jour (ajoutez) toutes les valeurs d\'option restantes vers UN produit utilisant ce nom d\'option',
    'TEXT_INFO_OPTION_VALUE_ADD_PRODUCT' => 'Pour un produit qui utilise le nom d\'option sélectionné (et qui a donc au moins une valeur d\'option attribuée), ajoutez TOUTES les autres valeurs d\'option associées au nom d\'option.',
    'TEXT_OPTION_VALUE_ADD_CATEGORY' => 'Mettre à jour (ajouter) toutes les valeurs d\'option restantes à TOUS les produits d\'une catégorie qui utilisent ce nom d\'option',
    'TEXT_INFO_OPTION_VALUE_ADD_CATEGORY' => 'Pour les produits dans UNE seule catégorie qui utilisent le nom d\'option sélectionné, ajoutez TOUS les autressur les valeurs associées au nom de l\'option.',
    'TEXT_SHOW_CATEGORY_PATH' => 'Afficher le chemin d\'accès de la catégorie',
    'TEXT_SHOW_CATEGORY_NAME' => 'Afficher uniquement le nom de la catégorie',
    'SUCCESS_PRODUCT_OPTION_VALUE' => 'Nom de l\'option "%1$s" : valeur de l\'option "%2$s" ajoutée au produit "%3$s".',
    'SUCCESS_PRODUCT_OPTIONS_VALUES_SORT_ORDER' => 'Nom de l\'option "%1$s" : produit "%2$s" Valeurs de l\'option mises à jour dans l\'ordre de tri par défaut pour le nom de l\'option "%1$s".',
    'SUCCESS_PRODUCTS_OPTIONS_VALUES' => 'Option Name "%1$s" : produit "%2$s" mise à jour avec des valeurs d\'option supplémentaires',
    'ERROR_PRODUCTS_OPTIONS_PRODUCTS' => 'Attention : aucun produit correspondant n\'a été trouvé avec le nom d\'option "%s" (rien n\'a été mis à jour).',
    'ERROR_PRODUCTS_OPTIONS_VALUES' => 'Attention : tous les produits correspondants ont déjà toutes les valeurs d\'option pour le nom d\'option "%s" (rien n\'a été mis à jour).',
    'TEXT_COMMENT_OPTION_VALUE_DELETE_ALL' => '<strong>REMARQUE :</strong> Toutes les valeurs d\'option seront supprimées de la correspondance / du ou des produits sélectionnés. Cela ne supprimera pas les valeurs d\'option définies pour ce nom d\'option.',
    'TEXT_OPTION_VALUE_DELETE_ALL' => 'Supprimer toutes les valeurs d\'option de TOUS les produits utilisant ce nom d\'option',
    'TEXT_INFO_OPTION_VALUE_DELETE_ALL' => 'Pour TOUS les produits qui utilisent le nom d\'option sélectionné, supprimez toutes les valeurs d\'option / le nom d\'option.',
    'TEXT_OPTION_VALUE_DELETE_PRODUCT' => 'Supprimer toutes les valeurs d\'option d\'un produit en utilisant ce nom d\'option',
    'TEXT_INFO_OPTION_VALUE_DELETE_PRODUCT' => 'Pour un produit utilisant le nom d\'option sélectionné, supprimez TOUTES les valeurs d\'option / le nom d\'option.',
    'TEXT_OPTION_VALUE_DELETE_CATEGORY' => 'Effacer sur UNE catégorie de produits TOUTES les valeurs d\'options pour ce nom d\'option',
    'TEXT_INFO_OPTION_VALUE_DELETE_CATEGORY' => 'Pour les produits dans UNE catégorie uniquement qui utilisent le nom de l\'option sélectionnée, supprimez toutes les valeurs de l\'option/le nom de l\'option.',
    'SUCCESS_PRODUCT_OPTION_VALUES_DELETED' => 'Nom d\'option "%1$s" : toutes les valeurs d\'option supprimées du produit "%2$s".',
    'SUCCESS_PRODUCTS_OPTIONS_VALUES_DELETED' => 'Nom d\'option "%1$s" : toutes les valeurs d\'option supprimées de %2$u produit(s).',
    'TEXT_OPTION_VALUE_COPY_ALL' => 'Copier TOUTES les valeurs d\'options vers un autre nom d\'option',
    'TEXT_INFO_OPTION_VALUE_COPY_ALL' => 'Toutes les valeurs d\'option seront copiées depuis un nom d\'option vers un autre nom d\'option',
    'TEXT_SELECT_OPTION_FROM' => 'Copier depuis le nom d\'option : ',
    'TEXT_SELECT_OPTION_TO' => 'Copier dans le nom de l\'option :',
    'SUCCESS_OPTION_VALUE_COPIED' => 'Valeur d\'option "%6$s" ID#%5$u copié du nom d\'option "%2$s" ID#%1$u vers le nom d\'option "%4$s" ID#%3$u.',
    'SUCCESS_OPTION_VALUES_COPIED' => '%5$u Valeur(s) d\'option copiée du nom d\'option "%2$s" ID#%1$u vers le nom d\'option "%4$s" ID#%3$u.',
    'ERROR_OPTION_VALUES_COPIED' => 'Erreur : impossible de copier les valeurs d\'option dans le même nom d\'option ("%2$s" ID#%1$u vers "%4$s" ID#%3$u)!',
    'ERROR_OPTION_VALUES_NONE' => 'Erreur : le nom d\'option "%2$s" ID#%1$u n\'a aucune valeur d\'option définie (rien à copier)!',
];

return $define;
